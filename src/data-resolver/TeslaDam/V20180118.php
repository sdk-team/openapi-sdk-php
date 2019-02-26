<?php

namespace AlibabaCloud\TeslaDam\V20180118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Integer getOrderId
 * @method self withOrderId
 * @method string getStepCode
 * @method self withStepCode
 */
final class Action extends RpcRequest
{
}

/**
 * @method string getHostname
 * @method self withHostname
 * @method string getDiskMount
 * @method self withDiskMount
 * @method string getExecutionId
 * @method self withExecutionId
 * @method string getDiskSlot
 * @method self withDiskSlot
 * @method string getDiskName
 * @method self withDiskName
 * @method string getDiskSn
 * @method self withDiskSn
 * @method string getDiskReason
 * @method self withDiskReason
 */
final class ActionDiskRma extends RpcRequest
{
}

/**
 * @method string getQueryType
 * @method self withQueryType
 * @method string getQuery
 * @method self withQuery
 * @method Integer getEndTime
 * @method self withEndTime
 * @method Integer getStartTime
 * @method self withStartTime
 */
final class HostGets extends RpcRequest
{
}

/**
 * @method string getIp
 * @method self withIp
 * @method string getDiskMount
 * @method self withDiskMount
 * @method string getOp
 * @method self withOp
 */
final class ActionDiskMask extends RpcRequest
{
}

/**
 * @method string getIp
 * @method self withIp
 * @method string getDiskMount
 * @method self withDiskMount
 */
final class ActionDiskCheck extends RpcRequest
{
}
