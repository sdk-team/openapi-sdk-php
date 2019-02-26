<?php

namespace AlibabaCloud\Iot\V20160104;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getDeviceId
 * @method self withDeviceId
 * @method string getRpcContent
 * @method self withRpcContent
 * @method Integer getTimeOut
 * @method self withTimeOut
 */
final class RevertRpc extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getDeviceIds
 * @method self withDeviceIds
 * @method string getPushContent
 * @method self withPushContent
 */
final class PushByteMessage extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getTopicList
 * @method self withTopicList
 * @method RepeatList getTopic
 * @method self withTopic
 */
final class UnSub extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getSubCallback
 * @method self withSubCallback
 * @method string getTopicList
 * @method self withTopicList
 * @method RepeatList getTopic
 * @method self withTopic
 */
final class Sub extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getTopicFullName
 * @method self withTopicFullName
 * @method string getMessageContent
 * @method self withMessageContent
 */
final class Pub extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getDeviceId
 * @method self withDeviceId
 */
final class ListDevicePermits extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getTopicFullName
 * @method self withTopicFullName
 * @method string getDeviceId
 * @method self withDeviceId
 * @method string getGrantType
 * @method self withGrantType
 */
final class DeviceRevokeByTopic extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method Long getRuleId
 * @method self withRuleId
 * @method string getDeviceId
 * @method self withDeviceId
 */
final class DeviceRevokeById extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method Long getRuleId
 * @method self withRuleId
 * @method string getDeviceId
 * @method self withDeviceId
 * @method string getTopicFullName
 * @method self withTopicFullName
 * @method string getGrantType
 * @method self withGrantType
 */
final class DevicePermitModify extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getTopicFullName
 * @method self withTopicFullName
 * @method string getDeviceId
 * @method self withDeviceId
 * @method string getGrantType
 * @method self withGrantType
 */
final class DeviceGrant extends RpcRequest
{
}
