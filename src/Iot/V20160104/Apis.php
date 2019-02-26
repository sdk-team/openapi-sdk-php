<?php

namespace AlibabaCloud\Iot\V20160104;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method RevertRpc revertRpc($options = [])
 * @method PushByteMessage pushByteMessage($options = [])
 * @method UnSub unSub($options = [])
 * @method Sub sub($options = [])
 * @method Pub pub($options = [])
 * @method ListDevicePermits listDevicePermits($options = [])
 * @method DeviceRevokeByTopic deviceRevokeByTopic($options = [])
 * @method DeviceRevokeById deviceRevokeById($options = [])
 * @method DevicePermitModify devicePermitModify($options = [])
 * @method DeviceGrant deviceGrant($options = [])
 */
class V20160104
{
    use ApiResolverTrait;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getDeviceId
 * @method self withDeviceId(string $deviceId)
 * @method string getRpcContent
 * @method self withRpcContent(string $rpcContent)
 * @method Integer getTimeOut
 * @method self withTimeOut(Integer $timeOut)
 */
class RevertRpc extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getDeviceIds
 * @method self withDeviceIds(string $deviceIds)
 * @method string getPushContent
 * @method self withPushContent(string $pushContent)
 */
class PushByteMessage extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getTopicList
 * @method self withTopicList(string $topicList)
 * @method array getTopic
 * @method self withTopic(array $topic)
 */
class UnSub extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getSubCallback
 * @method self withSubCallback(string $subCallback)
 * @method string getTopicList
 * @method self withTopicList(string $topicList)
 * @method array getTopic
 * @method self withTopic(array $topic)
 */
class Sub extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getTopicFullName
 * @method self withTopicFullName(string $topicFullName)
 * @method string getMessageContent
 * @method self withMessageContent(string $messageContent)
 */
class Pub extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getDeviceId
 * @method self withDeviceId(string $deviceId)
 */
class ListDevicePermits extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getTopicFullName
 * @method self withTopicFullName(string $topicFullName)
 * @method string getDeviceId
 * @method self withDeviceId(string $deviceId)
 * @method string getGrantType
 * @method self withGrantType(string $grantType)
 */
class DeviceRevokeByTopic extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 * @method string getDeviceId
 * @method self withDeviceId(string $deviceId)
 */
class DeviceRevokeById extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 * @method string getDeviceId
 * @method self withDeviceId(string $deviceId)
 * @method string getTopicFullName
 * @method self withTopicFullName(string $topicFullName)
 * @method string getGrantType
 * @method self withGrantType(string $grantType)
 */
class DevicePermitModify extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getTopicFullName
 * @method self withTopicFullName(string $topicFullName)
 * @method string getDeviceId
 * @method self withDeviceId(string $deviceId)
 * @method string getGrantType
 * @method self withGrantType(string $grantType)
 */
class DeviceGrant extends Roa
{
    use R;
}
