<?php

namespace AlibabaCloud\Push\V20150827;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getTarget
 * @method self withTarget
 * @method string getTargetValue
 * @method self withTargetValue
 * @method Integer getType
 * @method self withType
 * @method Integer getDeviceType
 * @method self withDeviceType
 * @method string getTitle
 * @method self withTitle
 * @method string getBody
 * @method self withBody
 * @method string getSummary
 * @method self withSummary
 * @method Integer getTimeOut
 * @method self withTimeOut
 * @method Boolean getRemind
 * @method self withRemind
 * @method Boolean getStoreOffline
 * @method self withStoreOffline
 * @method string getAndroidActivity
 * @method self withAndroidActivity
 * @method string getXiaomiActivity
 * @method self withXiaomiActivity
 * @method string getAndroidOpenUrl
 * @method self withAndroidOpenUrl
 * @method string getAndroidExtParameters
 * @method self withAndroidExtParameters
 * @method string getAndroidOpenType
 * @method self withAndroidOpenType
 * @method string getAndroidMusic
 * @method self withAndroidMusic
 * @method string getBatchNumber
 * @method self withBatchNumber
 * @method string getiOSMusic
 * @method self withiOSMusic
 * @method string getiOSBadge
 * @method self withiOSBadge
 * @method string getiOSTitle
 * @method self withiOSTitle
 * @method string getiOSSubtitle
 * @method self withiOSSubtitle
 * @method string getiOSNotificationCategory
 * @method self withiOSNotificationCategory
 * @method Boolean getiOSMutableContent
 * @method self withiOSMutableContent
 * @method string getiOSExtParameters
 * @method self withiOSExtParameters
 * @method string getPushTime
 * @method self withPushTime
 * @method string getApnsEnv
 * @method self withApnsEnv
 * @method string getExpireTime
 * @method self withExpireTime
 */
final class Push_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method Long getMessageId
 * @method self withMessageId
 */
final class CancelPush extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getDeviceId
 * @method self withDeviceId
 * @method Integer getPage
 * @method self withPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListDevicePushRecords extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class QueryUniqueDeviceStat extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method Long getMessageId
 * @method self withMessageId
 */
final class QueryPushStat extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDeviceType
 * @method self withDeviceType
 * @method string getQueryType
 * @method self withQueryType
 */
final class QueryDeviceStat extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getGranularity
 * @method self withGranularity
 */
final class QueryAppPushStat extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getClientKey
 * @method self withClientKey
 * @method string getKeyType
 * @method self withKeyType
 * @method string getTagName
 * @method self withTagName
 */
final class UnbindTag extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getClientKey
 * @method self withClientKey
 * @method string getKeyType
 * @method self withKeyType
 */
final class QueryTags extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 */
final class ListTags extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getClientKey
 * @method self withClientKey
 * @method string getKeyType
 * @method self withKeyType
 * @method string getTagName
 * @method self withTagName
 */
final class BindTag extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getDevices
 * @method self withDevices
 */
final class GetDeviceInfos extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getTarget
 * @method self withTarget
 * @method string getTargetValue
 * @method self withTargetValue
 * @method Integer getType
 * @method self withType
 * @method Integer getDeviceType
 * @method self withDeviceType
 * @method string getTitle
 * @method self withTitle
 * @method string getBody
 * @method self withBody
 * @method string getSummary
 * @method self withSummary
 * @method Boolean getStoreOffline
 * @method self withStoreOffline
 * @method string getPushTime
 * @method self withPushTime
 * @method string getExpireTime
 * @method self withExpireTime
 * @method string getAndroidActivity
 * @method self withAndroidActivity
 * @method string getXiaomiActivity
 * @method self withXiaomiActivity
 * @method string getAndroidOpenUrl
 * @method self withAndroidOpenUrl
 * @method string getAndroidExtParameters
 * @method self withAndroidExtParameters
 * @method string getAndroidOpenType
 * @method self withAndroidOpenType
 * @method string getAndroidMusic
 * @method self withAndroidMusic
 * @method Boolean getRemind
 * @method self withRemind
 * @method string getiOSMusic
 * @method self withiOSMusic
 * @method Integer getiOSBadge
 * @method self withiOSBadge
 * @method string getiOSTitle
 * @method self withiOSTitle
 * @method string getiOSSubtitle
 * @method self withiOSSubtitle
 * @method string getiOSNotificationCategory
 * @method self withiOSNotificationCategory
 * @method Boolean getiOSMutableContent
 * @method self withiOSMutableContent
 * @method string getiOSExtParameters
 * @method self withiOSExtParameters
 * @method string getApnsEnv
 * @method self withApnsEnv
 */
final class Push extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getTarget
 * @method self withTarget
 * @method string getTargetValue
 * @method self withTargetValue
 * @method string getSummary
 * @method self withSummary
 * @method string getEnv
 * @method self withEnv
 * @method string getExt
 * @method self withExt
 * @method string getiOSExtParameters
 * @method self withiOSExtParameters
 */
final class PushNoticeToiOS extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getTarget
 * @method self withTarget
 * @method string getTargetValue
 * @method self withTargetValue
 * @method string getSummary
 * @method self withSummary
 * @method string getTitle
 * @method self withTitle
 * @method string getAndroidExtParameters
 * @method self withAndroidExtParameters
 */
final class PushNoticeToAndroid extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getTarget
 * @method self withTarget
 * @method string getTargetValue
 * @method self withTargetValue
 * @method string getSummary
 * @method self withSummary
 * @method string getMessage
 * @method self withMessage
 */
final class PushMessageToiOS extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getTarget
 * @method self withTarget
 * @method string getTargetValue
 * @method self withTargetValue
 * @method string getMessage
 * @method self withMessage
 */
final class PushMessageToAndroid extends RpcRequest
{
}

/**
 * @method string getDevices
 * @method self withDevices
 * @method Long getAppId
 * @method self withAppId
 */
final class BatchGetDevicesInfo extends RpcRequest
{
}

/**
 * @method Long getAppId
 * @method self withAppId
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
 * @method Long getAppId
 * @method self withAppId
 * @method Integer getSendType
 * @method self withSendType
 * @method string getAccounts
 * @method self withAccounts
 * @method string getDeviceIds
 * @method self withDeviceIds
 * @method string getPushContent
 * @method self withPushContent
 */
final class PushByteMessage extends RpcRequest
{
}
