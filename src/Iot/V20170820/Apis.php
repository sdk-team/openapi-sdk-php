<?php

namespace AlibabaCloud\Iot\V20170820;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method QueryUserMessageCount queryUserMessageCount($options = [])
 * @method EnableDisableDevice enableDisableDevice($options = [])
 * @method UpdateTopicTemplate updateTopicTemplate($options = [])
 * @method UpdateDeviceSubInfo updateDeviceSubInfo($options = [])
 * @method UpdateDeviceSession updateDeviceSession($options = [])
 * @method QueryTopicTemplate queryTopicTemplate($options = [])
 * @method QueryMessageInfo queryMessageInfo($options = [])
 * @method QueryDeviceSubInfo queryDeviceSubInfo($options = [])
 * @method QueryDeviceSession queryDeviceSession($options = [])
 * @method QueryAppSubInfo queryAppSubInfo($options = [])
 * @method KickDevice kickDevice($options = [])
 * @method DeleteTopicTemplate deleteTopicTemplate($options = [])
 * @method DeleteDeviceSubInfo deleteDeviceSubInfo($options = [])
 * @method DeleteAppSubInfo deleteAppSubInfo($options = [])
 * @method CreateTopicTemplate createTopicTemplate($options = [])
 * @method CreateAppSubInfo createAppSubInfo($options = [])
 * @method UpdateDeviceStatusList updateDeviceStatusList($options = [])
 * @method UpdateDeviceStatus updateDeviceStatus($options = [])
 * @method UpdateDeviceOnlineState updateDeviceOnlineState($options = [])
 * @method UpdateDeviceInfo updateDeviceInfo($options = [])
 */
class V20170820
{
    use ApiResolverTrait;
}

/**
 * @method string getDate
 * @method self withDate(string $date)
 * @method Integer getMaxResult
 * @method self withMaxResult(Integer $maxResult)
 * @method string getNextToken
 * @method self withNextToken(string $nextToken)
 */
class QueryUserMessageCount extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getDeviceStatus
 * @method self withDeviceStatus(string $deviceStatus)
 */
class EnableDisableDevice extends Roa
{
    use R;
}

/**
 * @method string getTopicFullName
 * @method self withTopicFullName(string $topicFullName)
 * @method Integer getOperation
 * @method self withOperation(Integer $operation)
 * @method int getTemplateId
 * @method self withTemplateId(int $templateId)
 */
class UpdateTopicTemplate extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getTopicName
 * @method self withTopicName(string $topicName)
 * @method Integer getOperation
 * @method self withOperation(Integer $operation)
 */
class UpdateDeviceSubInfo extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getAsAddress
 * @method self withAsAddress(string $asAddress)
 * @method string getProtocolType
 * @method self withProtocolType(string $protocolType)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class UpdateDeviceSession extends Roa
{
    use R;
}

/**
 * @method string getTemplateKey
 * @method self withTemplateKey(string $templateKey)
 */
class QueryTopicTemplate extends Roa
{
    use R;
}

/**
 * @method string getUniMsgId
 * @method self withUniMsgId(string $uniMsgId)
 */
class QueryMessageInfo extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QueryDeviceSubInfo extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QueryDeviceSession extends Roa
{
    use R;
}

/**
 * @method string getAppName
 * @method self withAppName(string $appName)
 */
class QueryAppSubInfo extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class KickDevice extends Roa
{
    use R;
}

/**
 * @method int getTemplateId
 * @method self withTemplateId(int $templateId)
 */
class DeleteTopicTemplate extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getTopicFullName
 * @method self withTopicFullName(string $topicFullName)
 */
class DeleteDeviceSubInfo extends Roa
{
    use R;
}

/**
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getTopicFullName
 * @method self withTopicFullName(string $topicFullName)
 */
class DeleteAppSubInfo extends Roa
{
    use R;
}

/**
 * @method string getTopicFullName
 * @method self withTopicFullName(string $topicFullName)
 * @method Integer getOperation
 * @method self withOperation(Integer $operation)
 */
class CreateTopicTemplate extends Roa
{
    use R;
}

/**
 * @method string getTopicFullName
 * @method self withTopicFullName(string $topicFullName)
 * @method string getSubscribeId
 * @method self withSubscribeId(string $subscribeId)
 * @method string getExtInfo
 * @method self withExtInfo(string $extInfo)
 */
class CreateAppSubInfo extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getDeviceStatusList
 * @method self withDeviceStatusList(string $deviceStatusList)
 */
class UpdateDeviceStatusList extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getDeviceStatusPayload
 * @method self withDeviceStatusPayload(string $deviceStatusPayload)
 */
class UpdateDeviceStatus extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getOnlineState
 * @method self withOnlineState(string $onlineState)
 */
class UpdateDeviceOnlineState extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getDeviceInfoPayload
 * @method self withDeviceInfoPayload(string $deviceInfoPayload)
 */
class UpdateDeviceInfo extends Roa
{
    use R;
}
