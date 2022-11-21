<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 10:46 AM
 */

namespace Pulsar\IO;

use Exception;
use Protobuf\AbstractMessage;
use Pulsar\Authentication\Authentication;
use Pulsar\Client;
use Pulsar\Exception\ConnectException;
use Pulsar\Exception\IOException;
use Pulsar\Exception\RuntimeException;
use Pulsar\Proto\BaseCommand;
use Pulsar\Proto\BaseCommand\Type;
use Pulsar\Proto\CommandConnect;
use Pulsar\Proto\CommandConnected;
use Pulsar\Proto\FeatureFlags;
use Pulsar\Proto\ProtocolVersion;
use Pulsar\Response;
use Pulsar\Util\Buffer;
use Pulsar\Util\Packer;


/**
 * Class StreamIO
 *
 * @package Pulsar\IO
 */
class StreamIO extends AbstractIO implements Reader
{


    /**
     * @param string $host
     * @param int $port
     * @param $timeout
     * @return void
     * @throws ConnectException
     */
    public function connect(string $host, int $port, $timeout = null)
    {
        $this->socket = @stream_socket_client(
            sprintf('tcp://%s:%d', $host, $port),
            $code,
            $message,
            ( $timeout <= 0 ) ? 5 : $timeout
        );

        if ($code) {
            throw new ConnectException($message, $code);
        }

        $this->host = $host;
        $this->port = $port;
    }


    /**
     * @param Authentication|null $authentication
     * @param string $brokerServiceUrl
     * @return void
     * @throws Exception
     */
    public function handshake(Authentication $authentication = null, string $brokerServiceUrl = '')
    {
        if (is_null($this->socket)) {
            throw new RuntimeException('Connection to the server failed to complete the handshake');
        }

        $cmd = new CommandConnect();
        $cmd->setProtocolVersion(ProtocolVersion::v17_VALUE);
        $cmd->setClientVersion(sprintf('ikilobyte/pulsar-client-php@v%s', Client::VERSION_ID));

        if ($authentication) {
            $cmd->setAuthMethodName($authentication->authMethodName());
            $cmd->setAuthData($authentication->authData());
        }

        // flags
        $flags = new FeatureFlags();
        $flags->setSupportsAuthRefresh(true);
        $flags->setSupportsBrokerEntryMetadata(true);
        $cmd->setFeatureFlags($flags);

        if ($brokerServiceUrl && $brokerServiceUrl != sprintf('%s:%d', $this->host, $this->port)) {
            $cmd->setProxyToBrokerUrl($brokerServiceUrl);
        }

        $buffer = Packer::encode(Type::CONNECT(), $cmd);

        $response = $this->write($buffer->bytes())->wait();

        /**
         * @var $subCommand CommandConnected
         */
        $subCommand = $response->getSubCommand();
        if ($subCommand->hasMaxMessageSize()) {
            $this->maxMessageSize = $response->getSubCommand()->getMaxMessageSize();
        }
    }


    /**
     * @param string $buffer
     * @return $this
     * @throws IOException
     */
    public function write(string $buffer): AbstractIO
    {
        if (feof($this->socket)) {
            $this->close();
            throw new IOException('socket EOF');
        }

        $size = @fwrite($this->socket, $buffer);
        if ($size === false) {
            throw new IOException('write data of close socket');
        }
        
        return $this;
    }


    /**
     * @param Type $type
     * @param AbstractMessage $message
     * @return $this|StreamIO
     * @throws IOException
     */
    public function writeCommand(Type $type, AbstractMessage $message): AbstractIO
    {
        return $this->write(Packer::encode($type, $message)->bytes());
    }

    /**
     * @param int $size
     * @return string
     * @throws IOException
     */
    public function read(int $size): string
    {
        $bytes = fread($this->socket, $size);

        // socket is closed
        if ($bytes == '' && feof($this->socket)) {
            $this->close();
            throw new IOException('socket is closed');
        }

        return $bytes;
    }


    /**
     * @return void
     */
    public function close()
    {
        @fclose($this->socket);
    }


    /**
     * @param $seconds
     * @return Response|null
     * @throws IOException
     * @throws Exception
     */
    public function wait($seconds = null)
    {
        $reads = [$this->socket];
        $n = stream_select($reads, $writes, $excepts, $seconds);
        if ($n <= 0) {
            return null;
        }

        $result = $this->handleRead();
        if (is_null($result)) {

            // Only the producer will perform this process
            if (is_null($seconds)) {
                return $this->wait($seconds);
            }
        }

        return $result;
    }


    /**
     * @return Response|null
     * @throws IOException
     * @throws RuntimeException
     */
    public function handleRead()
    {
        // [totalSize] [cmdSize]
        $buffer = new Buffer($this->read(8));
        $frameSize = $buffer->readUint32();
        $commandSize = $buffer->readUint32();

        // [command]
        $commandBytes = $this->read($commandSize);

        // Write to Buffer
        // This buffer is holding a complete package
        $buffer->write($commandBytes);

        // This part does not need to be read subsequently in the
        $buffer->skip($commandSize);

        $baseCommand = new BaseCommand($commandBytes);
        $commandType = $baseCommand->getType();

        // receive PING reply PONG
        if ($commandType->value() == Type::PING_VALUE) {
            $this->pong();
            return null;
        }

        // receive PONG command
        // No processing required
        if ($commandType->value() == Type::PONG_VALUE) {
            return null;
        }

        // receive ACTIVE_CONSUMER_CHANGE
        // only consumer received
        if ($commandType->value() == Type::ACTIVE_CONSUMER_CHANGE_VALUE) {
            return null;
        }

        // check is payload message
        $unreadSize = $frameSize - ( $commandSize + 4 );
        if ($unreadSize >= 1) {
            $readSize = 0;
            $remainingSize = $unreadSize - $readSize;

            do {
                // read
                $bytes = $this->read($remainingSize);
                $readSize += strlen($bytes);
                $buffer->write($bytes);

                // update remaining size
                $remainingSize = $unreadSize - $readSize;
            } while ($remainingSize > 0);
        }

        return new Response($buffer, $baseCommand);
    }
}