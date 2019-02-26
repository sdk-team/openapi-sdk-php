<?php

namespace AlibabaCloud\Iot\V20170620;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getProductName
 * @method self withProductName
 * @method string getProductDesc
 * @method self withProductDesc
 * @method string getExtProps
 * @method self withExtProps
 * @method Long getCatId
 * @method self withCatId
 * @method string getProductKey
 * @method self withProductKey
 */
final class UpdateProduct extends RpcRequest
{
}

/**
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getShadowMessage
 * @method self withShadowMessage
 */
final class UpdateDeviceShadow extends RpcRequest
{
}

/**
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 */
final class RegistDevice extends RpcRequest
{
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Long getApplyId
 * @method self withApplyId
 */
final class QueryPageByApplyId extends RpcRequest
{
}

/**
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryDeviceByName extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 */
final class QueryDevice extends RpcRequest
{
}

/**
 * @method Long getApplyId
 * @method self withApplyId
 */
final class QueryApplyStatus extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getTopicFullName
 * @method self withTopicFullName
 * @method string getMessageContent
 * @method self withMessageContent
 */
final class PubBroadcast extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getQos
 * @method self withQos
 * @method string getTopicFullName
 * @method self withTopicFullName
 * @method string getMessageContent
 * @method self withMessageContent
 */
final class Pub extends RpcRequest
{
}

/**
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getShadowMessage
 * @method self withShadowMessage
 */
final class GetDeviceShadow extends RpcRequest
{
}

/**
 * @method Long getRootId
 * @method self withRootId
 */
final class GetCats extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method Long getCatId
 * @method self withCatId
 * @method string getDesc
 * @method self withDesc
 * @method string getExtProps
 * @method self withExtProps
 * @method string getSecurityPolicy
 * @method self withSecurityPolicy
 */
final class CreateProduct extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 */
final class BatchGetDeviceState extends RpcRequest
{
}

/**
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 */
final class ApplyDeviceWithNames extends RpcRequest
{
}
