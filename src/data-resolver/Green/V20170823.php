<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getName
 * @method self withName
 * @method string getImgUrl
 * @method self withImgUrl
 * @method string getReferArea
 * @method self withReferArea
 * @method string getRecognizeArea
 * @method self withRecognizeArea
 */
final class CreatCustomOcrTemplate extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method Long getId
 * @method self withId
 * @method string getName
 * @method self withName
 * @method string getReferArea
 * @method self withReferArea
 * @method string getRecognizeArea
 * @method self withRecognizeArea
 */
final class UpdateCustomOcrTemplate extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method Long getId
 * @method self withId
 * @method string getTestImgUrl
 * @method self withTestImgUrl
 */
final class VerifyCustomOcrTemplate extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getIds
 * @method self withIds
 */
final class DeleteCustomOcrTemplate extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getIds
 * @method self withIds
 */
final class DescribeCustomOcrTemplate extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getIds
 * @method self withIds
 * @method string getAuditResult
 * @method self withAuditResult
 * @method string getAuditIllegalReasons
 * @method self withAuditIllegalReasons
 */
final class MarkAuditContentItem extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method Integer getTotalCount
 * @method self withTotalCount
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method string getTaskId
 * @method self withTaskId
 * @method string getResourceType
 * @method self withResourceType
 */
final class DescribeAuditContentItem extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getContactTypes
 * @method self withContactTypes
 */
final class DeleteNotificationContacts extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getTaskId
 * @method self withTaskId
 */
final class DescribeUpdatePackageResult extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getBiz
 * @method self withBiz
 */
final class DescribeUploadInfo extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method Long getId
 * @method self withId
 * @method string getPackageUrl
 * @method self withPackageUrl
 * @method string getPlatform
 * @method self withPlatform
 * @method Boolean getDebug
 * @method self withDebug
 */
final class UpdateAppPackage extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method Long getId
 * @method self withId
 * @method Boolean getDebug
 * @method self withDebug
 */
final class DescribeSdkUrl extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method Integer getTotalCount
 * @method self withTotalCount
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method string getPlatform
 * @method self withPlatform
 */
final class DescribeAppInfo extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getVerifyMethod
 * @method self withVerifyMethod
 */
final class VerifyWebsiteInstance extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getStatus
 * @method self withStatus
 */
final class UpdateWebsiteInstanceStatus extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getUrls
 * @method self withUrls
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class UpdateWebsiteInstanceKeyUrl extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getSiteProtocol
 * @method self withSiteProtocol
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getWebsiteScanInterval
 * @method self withWebsiteScanInterval
 * @method string getDomain
 * @method self withDomain
 * @method Integer getIndexPageScanInterval
 * @method self withIndexPageScanInterval
 * @method string getIndexPage
 * @method self withIndexPage
 */
final class UpdateWebsiteInstance extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getFeedback
 * @method self withFeedback
 * @method string getUrls
 * @method self withUrls
 */
final class SendWebsiteFeedback extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getIds
 * @method self withIds
 */
final class MarkWebsiteScanResult extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class DescribeWebsiteVerifyInfo extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 */
final class DescribeWebsiteStat extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method Integer getId
 * @method self withId
 * @method string getResourceType
 * @method self withResourceType
 */
final class DescribeWebsiteScanResultDetail extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method Integer getTotalCount
 * @method self withTotalCount
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method string getSubServiceModule
 * @method self withSubServiceModule
 * @method string getLabel
 * @method self withLabel
 * @method string getDomain
 * @method self withDomain
 * @method string getSiteUrl
 * @method self withSiteUrl
 * @method string getHandleStatus
 * @method self withHandleStatus
 */
final class DescribeWebsiteScanResult extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class DescribeWebsiteInstanceKeyUrl extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 */
final class DescribeWebsiteInstanceId extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method Integer getTotalCount
 * @method self withTotalCount
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class DescribeWebsiteInstance extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class DescribeWebsiteIndexPageBaseline extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class CreateWebsiteIndexPageBaseline extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId
 */
final class RefundCdiBag extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId
 */
final class RefundCdiBaseBag extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId
 */
final class RefundWebSiteInstance extends RpcRequest
{
}

/**
 * @method string getClientToken
 * @method self withClientToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCommodityCode
 * @method self withCommodityCode
 * @method string getOrderType
 * @method self withOrderType
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getFlowOutSpec
 * @method self withFlowOutSpec
 */
final class UpgradeCdiBaseBag extends RpcRequest
{
}

/**
 * @method string getClientToken
 * @method self withClientToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCommodityCode
 * @method self withCommodityCode
 * @method string getOrderType
 * @method self withOrderType
 * @method Integer getFlowOutSpec
 * @method self withFlowOutSpec
 * @method Integer getOrderNum
 * @method self withOrderNum
 */
final class CreateCdiBag extends RpcRequest
{
}

/**
 * @method string getClientToken
 * @method self withClientToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCommodityCode
 * @method self withCommodityCode
 * @method string getOrderType
 * @method self withOrderType
 * @method Integer getDuration
 * @method self withDuration
 * @method Integer getFlowOutSpec
 * @method self withFlowOutSpec
 */
final class CreateCdiBaseBag extends RpcRequest
{
}

/**
 * @method string getClientToken
 * @method self withClientToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getCommodityCode
 * @method self withCommodityCode
 * @method string getOrderType
 * @method self withOrderType
 * @method Integer getDuration
 * @method self withDuration
 * @method string getPricingCycle
 * @method self withPricingCycle
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getOrderNum
 * @method self withOrderNum
 */
final class RenewWebSiteInstance extends RpcRequest
{
}

/**
 * @method string getClientToken
 * @method self withClientToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getOrderType
 * @method self withOrderType
 * @method Integer getDuration
 * @method self withDuration
 * @method string getPricingCycle
 * @method self withPricingCycle
 * @method Integer getOrderNum
 * @method self withOrderNum
 */
final class CreateWebSiteInstance extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getIds
 * @method self withIds
 * @method string getOperation
 * @method self withOperation
 * @method Boolean getStock
 * @method self withStock
 * @method string getResourceType
 * @method self withResourceType
 * @method string getScene
 * @method self withScene
 */
final class MarkOssResult extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method Integer getTotalCount
 * @method self withTotalCount
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method string getStartDate
 * @method self withStartDate
 * @method string getEndDate
 * @method self withEndDate
 * @method string getScene
 * @method self withScene
 * @method string getSuggestion
 * @method self withSuggestion
 * @method Boolean getStock
 * @method self withStock
 * @method Float getMinScore
 * @method self withMinScore
 * @method Float getMaxScore
 * @method self withMaxScore
 * @method string getResourceType
 * @method self withResourceType
 * @method string getBucket
 * @method self withBucket
 */
final class ExportOssResult extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 */
final class DescribeOssIncrementCheckSetting extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getBucketConfigList
 * @method self withBucketConfigList
 * @method string getImageScanLimit
 * @method self withImageScanLimit
 * @method string getImageSceneList
 * @method self withImageSceneList
 * @method string getVideoSceneList
 * @method self withVideoSceneList
 * @method string getImageAutoFreeze
 * @method self withImageAutoFreeze
 * @method string getVideoAutoFreezeSceneList
 * @method self withVideoAutoFreezeSceneList
 * @method Integer getVideoFrameInterval
 * @method self withVideoFrameInterval
 * @method Integer getVideoMaxFrames
 * @method self withVideoMaxFrames
 * @method Integer getVideoMaxSize
 * @method self withVideoMaxSize
 */
final class UpdateOssIncrementCheckSetting extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getOperation
 * @method self withOperation
 * @method string getStartDate
 * @method self withStartDate
 * @method string getEndDate
 * @method self withEndDate
 * @method string getBucketConfigList
 * @method self withBucketConfigList
 * @method string getResourceTypeList
 * @method self withResourceTypeList
 * @method string getSceneList
 * @method self withSceneList
 * @method string getImageAutoFreeze
 * @method self withImageAutoFreeze
 * @method string getVideoAutoFreezeSceneList
 * @method self withVideoAutoFreezeSceneList
 * @method Integer getVideoFrameInterval
 * @method self withVideoFrameInterval
 * @method Integer getVideoMaxFrames
 * @method self withVideoMaxFrames
 * @method Integer getVideoMaxSize
 * @method self withVideoMaxSize
 */
final class UpdateOssStockStatus extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 */
final class DescribeOssStockStatus extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method Integer getTotalCount
 * @method self withTotalCount
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method string getStartDate
 * @method self withStartDate
 * @method string getEndDate
 * @method self withEndDate
 * @method string getScene
 * @method self withScene
 * @method string getSuggestion
 * @method self withSuggestion
 * @method Boolean getStock
 * @method self withStock
 * @method Float getMinScore
 * @method self withMinScore
 * @method Float getMaxScore
 * @method self withMaxScore
 * @method string getResourceType
 * @method self withResourceType
 * @method string getBucket
 * @method self withBucket
 * @method string getQueryId
 * @method self withQueryId
 */
final class DescribeOssResultItems extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getResourceType
 * @method self withResourceType
 * @method string getScene
 * @method self withScene
 * @method string getStartDate
 * @method self withStartDate
 * @method string getEndDate
 * @method self withEndDate
 */
final class DescribeOssIncrementStats extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 */
final class DescribeOssIncrementOverview extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method Integer getId
 * @method self withId
 * @method string getName
 * @method self withName
 * @method string getBizTypes
 * @method self withBizTypes
 */
final class UpdateKeywordLib extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getServiceModule
 * @method self withServiceModule
 */
final class DescribeKeywordLib extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method Integer getTotalCount
 * @method self withTotalCount
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getKeywordLibId
 * @method self withKeywordLibId
 * @method string getKeyword
 * @method self withKeyword
 */
final class DescribeKeyword extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method Integer getId
 * @method self withId
 */
final class DeleteKeywordLib extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getIds
 * @method self withIds
 * @method string getKeywordLibId
 * @method self withKeywordLibId
 */
final class DeleteKeyword extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getServiceModule
 * @method self withServiceModule
 * @method string getName
 * @method self withName
 * @method string getResourceType
 * @method self withResourceType
 * @method string getLibType
 * @method self withLibType
 * @method string getCategory
 * @method self withCategory
 * @method string getBizTypes
 * @method self withBizTypes
 */
final class CreateKeywordLib extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method Integer getKeywordLibId
 * @method self withKeywordLibId
 * @method string getKeywords
 * @method self withKeywords
 */
final class CreateKeyword extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getPhone
 * @method self withPhone
 * @method string getVerifyCode
 * @method self withVerifyCode
 */
final class VerifyPhone extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getVerifyCode
 * @method self withVerifyCode
 */
final class VerifyEmail extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getPhone
 * @method self withPhone
 */
final class SendVerifyCodeToPhone extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getEmail
 * @method self withEmail
 */
final class SendVerifyCodeToEmail extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method string getRealtimeMessageList
 * @method self withRealtimeMessageList
 * @method string getReminderModeList
 * @method self withReminderModeList
 * @method Integer getScheduleMessageTime
 * @method self withScheduleMessageTime
 * @method Integer getScheduleMessageTimeZone
 * @method self withScheduleMessageTimeZone
 */
final class UpdateNotificationSetting extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 */
final class DescribeNotificationSetting extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method Integer getImageLibId
 * @method self withImageLibId
 * @method string getImages
 * @method self withImages
 */
final class UploadImageToLib extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method Integer getId
 * @method self withId
 * @method string getName
 * @method self withName
 * @method string getScene
 * @method self withScene
 * @method string getCategory
 * @method self withCategory
 * @method string getBizTypes
 * @method self withBizTypes
 */
final class UpdateImageLib extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getSeed
 * @method self withSeed
 * @method string getCallback
 * @method self withCallback
 */
final class UpdateAuditSetting extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getIds
 * @method self withIds
 * @method string getAuditResult
 * @method self withAuditResult
 * @method string getAuditIllegalReasons
 * @method self withAuditIllegalReasons
 */
final class MarkAuditContent extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 */
final class DescribeUserStatus extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getStartDate
 * @method self withStartDate
 * @method string getEndDate
 * @method self withEndDate
 * @method string getResourceType
 * @method self withResourceType
 */
final class DescribeOpenApiUsage extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 */
final class DescribeImageUploadInfo extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getServiceModule
 * @method self withServiceModule
 */
final class DescribeImageLib extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method Integer getTotalCount
 * @method self withTotalCount
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getImageLibId
 * @method self withImageLibId
 */
final class DescribeImageFromLib extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 */
final class DescribeAuditSetting extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getLang
 * @method self withLang
 * @method Integer getTotalCount
 * @method self withTotalCount
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method string getStartDate
 * @method self withStartDate
 * @method string getEndDate
 * @method self withEndDate
 * @method string getScene
 * @method self withScene
 * @method string getSuggestion
 * @method self withSuggestion
 * @method string getLabel
 * @method self withLabel
 * @method string getTaskId
 * @method self withTaskId
 * @method string getDataId
 * @method self withDataId
 * @method string getBizType
 * @method self withBizType
 * @method string getAuditResult
 * @method self withAuditResult
 * @method string getResourceType
 * @method self withResourceType
 */
final class DescribeAuditContent extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method Integer getId
 * @method self withId
 */
final class DeleteImageLib extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getIds
 * @method self withIds
 */
final class DeleteImageFromLib extends RpcRequest
{
}

/**
 * @method string getSourceIp
 * @method self withSourceIp
 * @method string getServiceModule
 * @method self withServiceModule
 * @method string getName
 * @method self withName
 * @method string getScene
 * @method self withScene
 * @method string getCategory
 * @method self withCategory
 * @method string getBizTypes
 * @method self withBizTypes
 */
final class CreateImageLib extends RpcRequest
{
}
