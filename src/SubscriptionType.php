<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 2:45 PM
 */

namespace Pulsar;

use Pulsar\Proto\CommandSubscribe_SubType;


/**
 * Class SubscriptionType
 *
 * @package Pulsar
 */
class SubscriptionType
{
    const Exclusive = CommandSubscribe_SubType::Exclusive;
    const Shared = CommandSubscribe_SubType::Shared;
    const Failover = CommandSubscribe_SubType::Failover;
    const Key_Shared = CommandSubscribe_SubType::Key_Shared;
}