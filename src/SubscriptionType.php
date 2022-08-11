<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 2022/6/26
 * Time: 2:45 PM
 */

namespace Pulsar;

use Pulsar\Proto\CommandSubscribe\SubType;


/**
 * Class SubscriptionType
 *
 * @package Pulsar
 */
class SubscriptionType
{
    const Exclusive = SubType::Exclusive_VALUE;
    const Shared = SubType::Shared_VALUE;
    const Failover = SubType::Failover_VALUE;
    const Key_Shared = SubType::Key_Shared_VALUE;
}