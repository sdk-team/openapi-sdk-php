<?php

namespace AlibabaCloud\Push\V20150827;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method PushGatedLaunch pushGatedLaunch($options = [])
 * @method CancelPush cancelPush($options = [])
 * @method ListDevicePushRecords listDevicePushRecords($options = [])
 * @method QueryUniqueDeviceStat queryUniqueDeviceStat($options = [])
 * @method QueryPushStat queryPushStat($options = [])
 * @method QueryDeviceStat queryDeviceStat($options = [])
 * @method QueryAppPushStat queryAppPushStat($options = [])
 * @method UnbindTag unbindTag($options = [])
 * @method QueryTags queryTags($options = [])
 * @method ListTags listTags($options = [])
 * @method BindTag bindTag($options = [])
 * @method GetDeviceInfos getDeviceInfos($options = [])
 * @method Push push($options = [])
 * @method PushNoticeToiOS pushNoticeToiOS($options = [])
 * @method PushNoticeToAndroid pushNoticeToAndroid($options = [])
 * @method PushMessageToiOS pushMessageToiOS($options = [])
 * @method PushMessageToAndroid pushMessageToAndroid($options = [])
 * @method BatchGetDevicesInfo batchGetDevicesInfo($options = [])
 * @method RevertRpc revertRpc($options = [])
 * @method PushByteMessage pushByteMessage($options = [])
 */
class V20150827
{
    use ApiResolverTrait;
}

class PushGatedLaunch extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method int getMessageId
 * @method self withMessageId(int $messageId)
 */
class CancelPush extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getDeviceId
 * @method self withDeviceId(string $deviceId)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListDevicePushRecords extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class QueryUniqueDeviceStat extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method int getMessageId
 * @method self withMessageId(int $messageId)
 */
class QueryPushStat extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDeviceType
 * @method self withDeviceType(string $deviceType)
 * @method string getQueryType
 * @method self withQueryType(string $queryType)
 */
class QueryDeviceStat extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getGranularity
 * @method self withGranularity(string $granularity)
 */
class QueryAppPushStat extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getClientKey
 * @method self withClientKey(string $clientKey)
 * @method string getKeyType
 * @method self withKeyType(string $keyType)
 * @method string getTagName
 * @method self withTagName(string $tagName)
 */
class UnbindTag extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getClientKey
 * @method self withClientKey(string $clientKey)
 * @method string getKeyType
 * @method self withKeyType(string $keyType)
 */
class QueryTags extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 */
class ListTags extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getClientKey
 * @method self withClientKey(string $clientKey)
 * @method string getKeyType
 * @method self withKeyType(string $keyType)
 * @method string getTagName
 * @method self withTagName(string $tagName)
 */
class BindTag extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getDevices
 * @method self withDevices(string $devices)
 */
class GetDeviceInfos extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getTarget
 * @method self withTarget(string $target)
 * @method string getTargetValue
 * @method self withTargetValue(string $targetValue)
 * @method Integer getType
 * @method self withType(Integer $type)
 * @method Integer getDeviceType
 * @method self withDeviceType(Integer $deviceType)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getBody
 * @method self withBody(string $body)
 * @method string getSummary
 * @method self withSummary(string $summary)
 * @method bool getStoreOffline
 * @method self withStoreOffline(bool $storeOffline)
 * @method string getPushTime
 * @method self withPushTime(string $pushTime)
 * @method string getExpireTime
 * @method self withExpireTime(string $expireTime)
 * @method string getAndroidActivity
 * @method self withAndroidActivity(string $androidActivity)
 * @method string getXiaomiActivity
 * @method self withXiaomiActivity(string $xiaomiActivity)
 * @method string getAndroidOpenUrl
 * @method self withAndroidOpenUrl(string $androidOpenUrl)
 * @method string getAndroidExtParameters
 * @method self withAndroidExtParameters(string $androidExtParameters)
 * @method string getAndroidOpenType
 * @method self withAndroidOpenType(string $androidOpenType)
 * @method string getAndroidMusic
 * @method self withAndroidMusic(string $androidMusic)
 * @method bool getRemind
 * @method self withRemind(bool $remind)
 * @method string getiOSMusic
 * @method self withiOSMusic(string $iOSMusic)
 * @method Integer getiOSBadge
 * @method self withiOSBadge(Integer $iOSBadge)
 * @method string getiOSTitle
 * @method self withiOSTitle(string $iOSTitle)
 * @method string getiOSSubtitle
 * @method self withiOSSubtitle(string $iOSSubtitle)
 * @method string getiOSNotificationCategory
 * @method self withiOSNotificationCategory(string $iOSNotificationCategory)
 * @method bool getiOSMutableContent
 * @method self withiOSMutableContent(bool $iOSMutableContent)
 * @method string getiOSExtParameters
 * @method self withiOSExtParameters(string $iOSExtParameters)
 * @method string getApnsEnv
 * @method self withApnsEnv(string $apnsEnv)
 */
class Push extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getTarget
 * @method self withTarget(string $target)
 * @method string getTargetValue
 * @method self withTargetValue(string $targetValue)
 * @method string getSummary
 * @method self withSummary(string $summary)
 * @method string getEnv
 * @method self withEnv(string $env)
 * @method string getExt
 * @method self withExt(string $ext)
 * @method string getiOSExtParameters
 * @method self withiOSExtParameters(string $iOSExtParameters)
 */
class PushNoticeToiOS extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getTarget
 * @method self withTarget(string $target)
 * @method string getTargetValue
 * @method self withTargetValue(string $targetValue)
 * @method string getSummary
 * @method self withSummary(string $summary)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getAndroidExtParameters
 * @method self withAndroidExtParameters(string $androidExtParameters)
 */
class PushNoticeToAndroid extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getTarget
 * @method self withTarget(string $target)
 * @method string getTargetValue
 * @method self withTargetValue(string $targetValue)
 * @method string getSummary
 * @method self withSummary(string $summary)
 * @method string getMessage
 * @method self withMessage(string $message)
 */
class PushMessageToiOS extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getTarget
 * @method self withTarget(string $target)
 * @method string getTargetValue
 * @method self withTargetValue(string $targetValue)
 * @method string getMessage
 * @method self withMessage(string $message)
 */
class PushMessageToAndroid extends Roa
{
    use R;
}

/**
 * @method string getDevices
 * @method self withDevices(string $devices)
 * @method int getAppId
 * @method self withAppId(int $appId)
 */
class BatchGetDevicesInfo extends Roa
{
    use R;
}

/**
 * @method int getAppId
 * @method self withAppId(int $appId)
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
 * @method int getAppId
 * @method self withAppId(int $appId)
 * @method Integer getSendType
 * @method self withSendType(Integer $sendType)
 * @method string getAccounts
 * @method self withAccounts(string $accounts)
 * @method string getDeviceIds
 * @method self withDeviceIds(string $deviceIds)
 * @method string getPushContent
 * @method self withPushContent(string $pushContent)
 */
class PushByteMessage extends Roa
{
    use R;
}
