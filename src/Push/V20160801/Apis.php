<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method QueryDevicesByAlias queryDevicesByAlias($options = [])
 * @method QueryDevicesByAccount queryDevicesByAccount($options = [])
 * @method PushGatedLaunch pushGatedLaunch($options = [])
 * @method UnbindAliasGatedLaunch unbindAliasGatedLaunch($options = [])
 * @method QueryAliasesGatedLaunch queryAliasesGatedLaunch($options = [])
 * @method BindAliasGatedLaunch bindAliasGatedLaunch($options = [])
 * @method QueryTagsGatedLaunch queryTagsGatedLaunch($options = [])
 * @method TestSms testSms($options = [])
 * @method UnbindPhone unbindPhone($options = [])
 * @method BindPhone bindPhone($options = [])
 * @method RemoveTag removeTag($options = [])
 * @method CheckDevices checkDevices($options = [])
 * @method QueryPushList queryPushList($options = [])
 * @method CheckDevice checkDevice($options = [])
 * @method QueryPushDetail queryPushDetail($options = [])
 * @method ValidateAppCert validateAppCert($options = [])
 * @method UploadAppCert uploadAppCert($options = [])
 * @method UnbindTag unbindTag($options = [])
 * @method UnbindAlias unbindAlias($options = [])
 * @method TracePush tracePush($options = [])
 * @method QueryUniqueDeviceStat queryUniqueDeviceStat($options = [])
 * @method QueryTags queryTags($options = [])
 * @method QueryPushStatByMsg queryPushStatByMsg($options = [])
 * @method QueryPushStatByApp queryPushStatByApp($options = [])
 * @method QueryDeviceStat queryDeviceStat($options = [])
 * @method QueryDeviceInfo queryDeviceInfo($options = [])
 * @method QueryAppSecurityInfo queryAppSecurityInfo($options = [])
 * @method QueryAppInfo queryAppInfo($options = [])
 * @method QueryAppConfig queryAppConfig($options = [])
 * @method QueryAliases queryAliases($options = [])
 * @method PushNoticeToiOS pushNoticeToiOS($options = [])
 * @method PushNoticeToAndroid pushNoticeToAndroid($options = [])
 * @method PushMessageToiOS pushMessageToiOS($options = [])
 * @method PushMessageToAndroid pushMessageToAndroid($options = [])
 * @method Push push($options = [])
 * @method ModifyAppExtensions modifyAppExtensions($options = [])
 * @method ModifyAppConfig modifyAppConfig($options = [])
 * @method ListTags listTags($options = [])
 * @method ListSummaryApps listSummaryApps($options = [])
 * @method ListPushRecords listPushRecords($options = [])
 * @method ListApps listApps($options = [])
 * @method DeleteApp deleteApp($options = [])
 * @method CreateApp createApp($options = [])
 * @method CertPreflight certPreflight($options = [])
 * @method BindTag bindTag($options = [])
 * @method BindAlias bindAlias($options = [])
 * @method CancelPush cancelPush($options = [])
 */
class V20160801
{
    use ApiResolverTrait;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getAlias
 * @method self withAlias(string $alias)
 */
class QueryDevicesByAlias extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getAccount
 * @method self withAccount(string $account)
 */
class QueryDevicesByAccount extends Roa
{
    use R;
}

class PushGatedLaunch extends Roa
{
    use R;
}

class UnbindAliasGatedLaunch extends Roa
{
    use R;
}

class QueryAliasesGatedLaunch extends Roa
{
    use R;
}

class BindAliasGatedLaunch extends Roa
{
    use R;
}

class QueryTagsGatedLaunch extends Roa
{
    use R;
}

/**
 * @method string getSmsTemplateName
 * @method self withSmsTemplateName(string $smsTemplateName)
 * @method string getSmsSign
 * @method self withSmsSign(string $smsSign)
 * @method string getSmsTemplateParams
 * @method self withSmsTemplateParams(string $smsTemplateParams)
 * @method string getSmsReceiver
 * @method self withSmsReceiver(string $smsReceiver)
 */
class TestSms extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getDeviceId
 * @method self withDeviceId(string $deviceId)
 */
class UnbindPhone extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getDeviceId
 * @method self withDeviceId(string $deviceId)
 * @method string getPhoneNumber
 * @method self withPhoneNumber(string $phoneNumber)
 */
class BindPhone extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getTagName
 * @method self withTagName(string $tagName)
 */
class RemoveTag extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getDeviceIds
 * @method self withDeviceIds(string $deviceIds)
 */
class CheckDevices extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getPushType
 * @method self withPushType(string $pushType)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryPushList extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getDeviceId
 * @method self withDeviceId(string $deviceId)
 */
class CheckDevice extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getMessageId
 * @method self withMessageId(string $messageId)
 */
class QueryPushDetail extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getCertPass
 * @method self withCertPass(string $certPass)
 * @method bool getIsDevCert
 * @method self withIsDevCert(bool $isDevCert)
 */
class ValidateAppCert extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getFileItem
 * @method self withFileItem(string $fileItem)
 * @method bool getIsDevCert
 * @method self withIsDevCert(bool $isDevCert)
 */
class UploadAppCert extends Roa
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
 * @method string getDeviceId
 * @method self withDeviceId(string $deviceId)
 * @method string getAliasName
 * @method self withAliasName(string $aliasName)
 * @method bool getUnbindAll
 * @method self withUnbindAll(bool $unbindAll)
 */
class UnbindAlias extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method int getMessageId
 * @method self withMessageId(int $messageId)
 * @method string getDeviceId
 * @method self withDeviceId(string $deviceId)
 */
class TracePush extends Roa
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
class QueryUniqueDeviceStat extends Roa
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
 * @method int getMessageId
 * @method self withMessageId(int $messageId)
 */
class QueryPushStatByMsg extends Roa
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
class QueryPushStatByApp extends Roa
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
 * @method string getDeviceId
 * @method self withDeviceId(string $deviceId)
 */
class QueryDeviceInfo extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 */
class QueryAppSecurityInfo extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 */
class QueryAppInfo extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 */
class QueryAppConfig extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getDeviceId
 * @method self withDeviceId(string $deviceId)
 */
class QueryAliases extends Roa
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
 * @method string getApnsEnv
 * @method self withApnsEnv(string $apnsEnv)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getBody
 * @method self withBody(string $body)
 * @method string getJobKey
 * @method self withJobKey(string $jobKey)
 * @method string getExtParameters
 * @method self withExtParameters(string $extParameters)
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
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getBody
 * @method self withBody(string $body)
 * @method string getJobKey
 * @method self withJobKey(string $jobKey)
 * @method string getExtParameters
 * @method self withExtParameters(string $extParameters)
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
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getBody
 * @method self withBody(string $body)
 * @method string getJobKey
 * @method self withJobKey(string $jobKey)
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
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getBody
 * @method self withBody(string $body)
 * @method string getJobKey
 * @method self withJobKey(string $jobKey)
 */
class PushMessageToAndroid extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getPushType
 * @method self withPushType(string $pushType)
 * @method string getDeviceType
 * @method self withDeviceType(string $deviceType)
 * @method string getTarget
 * @method self withTarget(string $target)
 * @method string getTargetValue
 * @method self withTargetValue(string $targetValue)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getBody
 * @method self withBody(string $body)
 * @method string getJobKey
 * @method self withJobKey(string $jobKey)
 * @method Integer getSendSpeed
 * @method self withSendSpeed(Integer $sendSpeed)
 * @method bool getStoreOffline
 * @method self withStoreOffline(bool $storeOffline)
 * @method string getPushTime
 * @method self withPushTime(string $pushTime)
 * @method string getExpireTime
 * @method self withExpireTime(string $expireTime)
 * @method string getiOSApnsEnv
 * @method self withiOSApnsEnv(string $iOSApnsEnv)
 * @method bool getiOSRemind
 * @method self withiOSRemind(bool $iOSRemind)
 * @method string getiOSRemindBody
 * @method self withiOSRemindBody(string $iOSRemindBody)
 * @method Integer getiOSBadge
 * @method self withiOSBadge(Integer $iOSBadge)
 * @method bool getiOSBadgeAutoIncrement
 * @method self withiOSBadgeAutoIncrement(bool $iOSBadgeAutoIncrement)
 * @method bool getiOSSilentNotification
 * @method self withiOSSilentNotification(bool $iOSSilentNotification)
 * @method string getiOSMusic
 * @method self withiOSMusic(string $iOSMusic)
 * @method string getiOSSubtitle
 * @method self withiOSSubtitle(string $iOSSubtitle)
 * @method string getiOSNotificationCategory
 * @method self withiOSNotificationCategory(string $iOSNotificationCategory)
 * @method bool getiOSMutableContent
 * @method self withiOSMutableContent(bool $iOSMutableContent)
 * @method string getiOSExtParameters
 * @method self withiOSExtParameters(string $iOSExtParameters)
 * @method string getAndroidNotifyType
 * @method self withAndroidNotifyType(string $androidNotifyType)
 * @method string getAndroidOpenType
 * @method self withAndroidOpenType(string $androidOpenType)
 * @method string getAndroidActivity
 * @method self withAndroidActivity(string $androidActivity)
 * @method string getAndroidMusic
 * @method self withAndroidMusic(string $androidMusic)
 * @method string getAndroidOpenUrl
 * @method self withAndroidOpenUrl(string $androidOpenUrl)
 * @method string getAndroidXiaoMiActivity
 * @method self withAndroidXiaoMiActivity(string $androidXiaoMiActivity)
 * @method string getAndroidXiaoMiNotifyTitle
 * @method self withAndroidXiaoMiNotifyTitle(string $androidXiaoMiNotifyTitle)
 * @method string getAndroidXiaoMiNotifyBody
 * @method self withAndroidXiaoMiNotifyBody(string $androidXiaoMiNotifyBody)
 * @method string getAndroidPopupActivity
 * @method self withAndroidPopupActivity(string $androidPopupActivity)
 * @method string getAndroidPopupTitle
 * @method self withAndroidPopupTitle(string $androidPopupTitle)
 * @method string getAndroidPopupBody
 * @method self withAndroidPopupBody(string $androidPopupBody)
 * @method Integer getAndroidNotificationBarType
 * @method self withAndroidNotificationBarType(Integer $androidNotificationBarType)
 * @method Integer getAndroidNotificationBarPriority
 * @method self withAndroidNotificationBarPriority(Integer $androidNotificationBarPriority)
 * @method string getAndroidExtParameters
 * @method self withAndroidExtParameters(string $androidExtParameters)
 * @method bool getAndroidRemind
 * @method self withAndroidRemind(bool $androidRemind)
 * @method string getAndroidNotificationChannel
 * @method self withAndroidNotificationChannel(string $androidNotificationChannel)
 * @method string getSmsTemplateName
 * @method self withSmsTemplateName(string $smsTemplateName)
 * @method string getSmsSignName
 * @method self withSmsSignName(string $smsSignName)
 * @method string getSmsParams
 * @method self withSmsParams(string $smsParams)
 * @method Integer getSmsDelaySecs
 * @method self withSmsDelaySecs(Integer $smsDelaySecs)
 * @method Integer getSmsSendPolicy
 * @method self withSmsSendPolicy(Integer $smsSendPolicy)
 */
class Push extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getXmAppSecretKey
 * @method self withXmAppSecretKey(string $xmAppSecretKey)
 * @method string getHwAppKey
 * @method self withHwAppKey(string $hwAppKey)
 * @method string getHwAppSecretKey
 * @method self withHwAppSecretKey(string $hwAppSecretKey)
 * @method string getGcmToken
 * @method self withGcmToken(string $gcmToken)
 * @method string getOppoAppKey
 * @method self withOppoAppKey(string $oppoAppKey)
 * @method string getOppoMasterSecret
 * @method self withOppoMasterSecret(string $oppoMasterSecret)
 */
class ModifyAppExtensions extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getPackageName
 * @method self withPackageName(string $packageName)
 * @method string getDevCertKey
 * @method self withDevCertKey(string $devCertKey)
 * @method string getDevCertPass
 * @method self withDevCertPass(string $devCertPass)
 * @method string getProductCertKey
 * @method self withProductCertKey(string $productCertKey)
 * @method string getProductCertPass
 * @method self withProductCertPass(string $productCertPass)
 * @method string getBundleId
 * @method self withBundleId(string $bundleId)
 */
class ModifyAppConfig extends Roa
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

class ListSummaryApps extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getPushType
 * @method self withPushType(string $pushType)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListPushRecords extends Roa
{
    use R;
}

class ListApps extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 */
class DeleteApp extends Roa
{
    use R;
}

/**
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method Integer getIndustryId
 * @method self withIndustryId(Integer $industryId)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class CreateApp extends Roa
{
    use R;
}

/**
 * @method int getAppKey
 * @method self withAppKey(int $appKey)
 * @method string getDeviceToken
 * @method self withDeviceToken(string $deviceToken)
 * @method string getPass
 * @method self withPass(string $pass)
 * @method string getBody
 * @method self withBody(string $body)
 * @method bool getIsDevCert
 * @method self withIsDevCert(bool $isDevCert)
 */
class CertPreflight extends Roa
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
 * @method string getDeviceId
 * @method self withDeviceId(string $deviceId)
 * @method string getAliasName
 * @method self withAliasName(string $aliasName)
 */
class BindAlias extends Roa
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
