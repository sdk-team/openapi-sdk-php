<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getAlias
 * @method self withAlias
 */
final class QueryDevicesByAlias extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getAccount
 * @method self withAccount
 */
final class QueryDevicesByAccount extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getTarget
 * @method self withTarget
 * @method string getTargetValue
 * @method self withTargetValue
 * @method string getPushType
 * @method self withPushType
 * @method string getDeviceType
 * @method self withDeviceType
 * @method string getTitle
 * @method self withTitle
 * @method string getBody
 * @method self withBody
 * @method Integer getSendSpeed
 * @method self withSendSpeed
 * @method string getJobKey
 * @method self withJobKey
 * @method string getPushTime
 * @method self withPushTime
 * @method string getExpireTime
 * @method self withExpireTime
 * @method Boolean getStoreOffline
 * @method self withStoreOffline
 * @method string getBatchNumber
 * @method self withBatchNumber
 * @method string getAndroidNotifyType
 * @method self withAndroidNotifyType
 * @method string getAndroidOpenType
 * @method self withAndroidOpenType
 * @method string getAndroidActivity
 * @method self withAndroidActivity
 * @method string getAndroidOpenUrl
 * @method self withAndroidOpenUrl
 * @method string getAndroidXiaoMiActivity
 * @method self withAndroidXiaoMiActivity
 * @method string getAndroidXiaoMiNotifyTitle
 * @method self withAndroidXiaoMiNotifyTitle
 * @method string getAndroidXiaoMiNotifyBody
 * @method self withAndroidXiaoMiNotifyBody
 * @method string getAndroidPopupActivity
 * @method self withAndroidPopupActivity
 * @method string getAndroidPopupTitle
 * @method self withAndroidPopupTitle
 * @method string getAndroidPopupBody
 * @method self withAndroidPopupBody
 * @method string getAndroidMusic
 * @method self withAndroidMusic
 * @method Integer getAndroidNotificationBarType
 * @method self withAndroidNotificationBarType
 * @method Integer getAndroidNotificationBarPriority
 * @method self withAndroidNotificationBarPriority
 * @method string getAndroidNotificationChannel
 * @method self withAndroidNotificationChannel
 * @method string getAndroidExtParameters
 * @method self withAndroidExtParameters
 * @method Boolean getAndroidRemind
 * @method self withAndroidRemind
 * @method string getiOSApnsEnv
 * @method self withiOSApnsEnv
 * @method Boolean getiOSRemind
 * @method self withiOSRemind
 * @method string getiOSRemindBody
 * @method self withiOSRemindBody
 * @method string getiOSMusic
 * @method self withiOSMusic
 * @method Integer getiOSBadge
 * @method self withiOSBadge
 * @method Boolean getiOSBadgeAutoIncrement
 * @method self withiOSBadgeAutoIncrement
 * @method Boolean getiOSSilentNotification
 * @method self withiOSSilentNotification
 * @method string getiOSSubtitle
 * @method self withiOSSubtitle
 * @method string getiOSNotificationCategory
 * @method self withiOSNotificationCategory
 * @method Boolean getiOSMutableContent
 * @method self withiOSMutableContent
 * @method string getiOSExtParameters
 * @method self withiOSExtParameters
 * @method string getSmsTemplateName
 * @method self withSmsTemplateName
 * @method string getSmsSignName
 * @method self withSmsSignName
 * @method string getSmsParams
 * @method self withSmsParams
 * @method Integer getSmsDelaySecs
 * @method self withSmsDelaySecs
 * @method Integer getSmsSendPolicy
 * @method self withSmsSendPolicy
 */
final class Push_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getDeviceId
 * @method self withDeviceId
 * @method string getAliasName
 * @method self withAliasName
 * @method Boolean getUnbindAll
 * @method self withUnbindAll
 */
final class UnbindAlias_GatedLaunch extends RpcRequest
{
}

final class QueryAliases_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getDeviceId
 * @method self withDeviceId
 * @method string getAliasName
 * @method self withAliasName
 */
final class BindAlias_GatedLaunch extends RpcRequest
{
}

final class QueryTags_GatedLaunch extends RpcRequest
{
}

/**
 * @method string getSmsTemplateName
 * @method self withSmsTemplateName
 * @method string getSmsSign
 * @method self withSmsSign
 * @method string getSmsTemplateParams
 * @method self withSmsTemplateParams
 * @method string getSmsReceiver
 * @method self withSmsReceiver
 */
final class TestSms extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getDeviceId
 * @method self withDeviceId
 */
final class UnbindPhone extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getDeviceId
 * @method self withDeviceId
 * @method string getPhoneNumber
 * @method self withPhoneNumber
 */
final class BindPhone extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getTagName
 * @method self withTagName
 */
final class RemoveTag extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getDeviceIds
 * @method self withDeviceIds
 */
final class CheckDevices extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getPushType
 * @method self withPushType
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPage
 * @method self withPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryPushList extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getDeviceId
 * @method self withDeviceId
 */
final class CheckDevice extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getMessageId
 * @method self withMessageId
 */
final class QueryPushDetail extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getCertPass
 * @method self withCertPass
 * @method Boolean getIsDevCert
 * @method self withIsDevCert
 */
final class ValidateAppCert extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getFileItem
 * @method self withFileItem
 * @method Boolean getIsDevCert
 * @method self withIsDevCert
 */
final class UploadAppCert extends RpcRequest
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
 * @method string getDeviceId
 * @method self withDeviceId
 * @method string getAliasName
 * @method self withAliasName
 * @method Boolean getUnbindAll
 * @method self withUnbindAll
 */
final class UnbindAlias extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method Long getMessageId
 * @method self withMessageId
 * @method string getDeviceId
 * @method self withDeviceId
 */
final class TracePush extends RpcRequest
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
final class QueryUniqueDeviceStat extends RpcRequest
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
 * @method Long getMessageId
 * @method self withMessageId
 */
final class QueryPushStatByMsg extends RpcRequest
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
final class QueryPushStatByApp extends RpcRequest
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
 * @method string getDeviceId
 * @method self withDeviceId
 */
final class QueryDeviceInfo extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 */
final class QueryAppSecurityInfo extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 */
final class QueryAppInfo extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 */
final class QueryAppConfig extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getDeviceId
 * @method self withDeviceId
 */
final class QueryAliases extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getTarget
 * @method self withTarget
 * @method string getTargetValue
 * @method self withTargetValue
 * @method string getApnsEnv
 * @method self withApnsEnv
 * @method string getTitle
 * @method self withTitle
 * @method string getBody
 * @method self withBody
 * @method string getJobKey
 * @method self withJobKey
 * @method string getExtParameters
 * @method self withExtParameters
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
 * @method string getTitle
 * @method self withTitle
 * @method string getBody
 * @method self withBody
 * @method string getJobKey
 * @method self withJobKey
 * @method string getExtParameters
 * @method self withExtParameters
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
 * @method string getTitle
 * @method self withTitle
 * @method string getBody
 * @method self withBody
 * @method string getJobKey
 * @method self withJobKey
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
 * @method string getTitle
 * @method self withTitle
 * @method string getBody
 * @method self withBody
 * @method string getJobKey
 * @method self withJobKey
 */
final class PushMessageToAndroid extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getPushType
 * @method self withPushType
 * @method string getDeviceType
 * @method self withDeviceType
 * @method string getTarget
 * @method self withTarget
 * @method string getTargetValue
 * @method self withTargetValue
 * @method string getTitle
 * @method self withTitle
 * @method string getBody
 * @method self withBody
 * @method string getJobKey
 * @method self withJobKey
 * @method Integer getSendSpeed
 * @method self withSendSpeed
 * @method Boolean getStoreOffline
 * @method self withStoreOffline
 * @method string getPushTime
 * @method self withPushTime
 * @method string getExpireTime
 * @method self withExpireTime
 * @method string getiOSApnsEnv
 * @method self withiOSApnsEnv
 * @method Boolean getiOSRemind
 * @method self withiOSRemind
 * @method string getiOSRemindBody
 * @method self withiOSRemindBody
 * @method Integer getiOSBadge
 * @method self withiOSBadge
 * @method Boolean getiOSBadgeAutoIncrement
 * @method self withiOSBadgeAutoIncrement
 * @method Boolean getiOSSilentNotification
 * @method self withiOSSilentNotification
 * @method string getiOSMusic
 * @method self withiOSMusic
 * @method string getiOSSubtitle
 * @method self withiOSSubtitle
 * @method string getiOSNotificationCategory
 * @method self withiOSNotificationCategory
 * @method Boolean getiOSMutableContent
 * @method self withiOSMutableContent
 * @method string getiOSExtParameters
 * @method self withiOSExtParameters
 * @method string getAndroidNotifyType
 * @method self withAndroidNotifyType
 * @method string getAndroidOpenType
 * @method self withAndroidOpenType
 * @method string getAndroidActivity
 * @method self withAndroidActivity
 * @method string getAndroidMusic
 * @method self withAndroidMusic
 * @method string getAndroidOpenUrl
 * @method self withAndroidOpenUrl
 * @method string getAndroidXiaoMiActivity
 * @method self withAndroidXiaoMiActivity
 * @method string getAndroidXiaoMiNotifyTitle
 * @method self withAndroidXiaoMiNotifyTitle
 * @method string getAndroidXiaoMiNotifyBody
 * @method self withAndroidXiaoMiNotifyBody
 * @method string getAndroidPopupActivity
 * @method self withAndroidPopupActivity
 * @method string getAndroidPopupTitle
 * @method self withAndroidPopupTitle
 * @method string getAndroidPopupBody
 * @method self withAndroidPopupBody
 * @method Integer getAndroidNotificationBarType
 * @method self withAndroidNotificationBarType
 * @method Integer getAndroidNotificationBarPriority
 * @method self withAndroidNotificationBarPriority
 * @method string getAndroidExtParameters
 * @method self withAndroidExtParameters
 * @method Boolean getAndroidRemind
 * @method self withAndroidRemind
 * @method string getAndroidNotificationChannel
 * @method self withAndroidNotificationChannel
 * @method string getSmsTemplateName
 * @method self withSmsTemplateName
 * @method string getSmsSignName
 * @method self withSmsSignName
 * @method string getSmsParams
 * @method self withSmsParams
 * @method Integer getSmsDelaySecs
 * @method self withSmsDelaySecs
 * @method Integer getSmsSendPolicy
 * @method self withSmsSendPolicy
 */
final class Push extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getXmAppSecretKey
 * @method self withXmAppSecretKey
 * @method string getHwAppKey
 * @method self withHwAppKey
 * @method string getHwAppSecretKey
 * @method self withHwAppSecretKey
 * @method string getGcmToken
 * @method self withGcmToken
 * @method string getOppoAppKey
 * @method self withOppoAppKey
 * @method string getOppoMasterSecret
 * @method self withOppoMasterSecret
 */
final class ModifyAppExtensions extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getPackageName
 * @method self withPackageName
 * @method string getDevCertKey
 * @method self withDevCertKey
 * @method string getDevCertPass
 * @method self withDevCertPass
 * @method string getProductCertKey
 * @method self withProductCertKey
 * @method string getProductCertPass
 * @method self withProductCertPass
 * @method string getBundleId
 * @method self withBundleId
 */
final class ModifyAppConfig extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 */
final class ListTags extends RpcRequest
{
}

final class ListSummaryApps extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getPushType
 * @method self withPushType
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPage
 * @method self withPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListPushRecords extends RpcRequest
{
}

final class ListApps extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 */
final class DeleteApp extends RpcRequest
{
}

/**
 * @method string getAppName
 * @method self withAppName
 * @method Integer getIndustryId
 * @method self withIndustryId
 * @method string getDescription
 * @method self withDescription
 */
final class CreateApp extends RpcRequest
{
}

/**
 * @method Long getAppKey
 * @method self withAppKey
 * @method string getDeviceToken
 * @method self withDeviceToken
 * @method string getPass
 * @method self withPass
 * @method string getBody
 * @method self withBody
 * @method Boolean getIsDevCert
 * @method self withIsDevCert
 */
final class CertPreflight extends RpcRequest
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
 * @method string getDeviceId
 * @method self withDeviceId
 * @method string getAliasName
 * @method self withAliasName
 */
final class BindAlias extends RpcRequest
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
