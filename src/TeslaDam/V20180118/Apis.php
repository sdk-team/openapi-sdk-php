<?php

namespace AlibabaCloud\TeslaDam\V20180118;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method Action action($options = [])
 * @method ActionDiskRma actionDiskRma($options = [])
 * @method HostGets hostGets($options = [])
 * @method ActionDiskMask actionDiskMask($options = [])
 * @method ActionDiskCheck actionDiskCheck($options = [])
 */
class V20180118
{
    use ApiResolverTrait;
}

/**
 * @method Integer getOrderId
 * @method self withOrderId(Integer $orderId)
 * @method string getStepCode
 * @method self withStepCode(string $stepCode)
 */
class Action extends Rpc
{
    use R;
}

/**
 * @method string getHostname
 * @method self withHostname(string $hostname)
 * @method string getDiskMount
 * @method self withDiskMount(string $diskMount)
 * @method string getExecutionId
 * @method self withExecutionId(string $executionId)
 * @method string getDiskSlot
 * @method self withDiskSlot(string $diskSlot)
 * @method string getDiskName
 * @method self withDiskName(string $diskName)
 * @method string getDiskSn
 * @method self withDiskSn(string $diskSn)
 * @method string getDiskReason
 * @method self withDiskReason(string $diskReason)
 */
class ActionDiskRma extends Rpc
{
    use R;
}

/**
 * @method string getQueryType
 * @method self withQueryType(string $queryType)
 * @method string getQuery
 * @method self withQuery(string $query)
 * @method Integer getEndTime
 * @method self withEndTime(Integer $endTime)
 * @method Integer getStartTime
 * @method self withStartTime(Integer $startTime)
 */
class HostGets extends Rpc
{
    use R;
}

/**
 * @method string getIp
 * @method self withIp(string $ip)
 * @method string getDiskMount
 * @method self withDiskMount(string $diskMount)
 * @method string getOp
 * @method self withOp(string $op)
 */
class ActionDiskMask extends Rpc
{
    use R;
}

/**
 * @method string getIp
 * @method self withIp(string $ip)
 * @method string getDiskMount
 * @method self withDiskMount(string $diskMount)
 */
class ActionDiskCheck extends Rpc
{
    use R;
}
