<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method CreatCustomOcrTemplate creatCustomOcrTemplate($options = [])
 * @method UpdateCustomOcrTemplate updateCustomOcrTemplate($options = [])
 * @method VerifyCustomOcrTemplate verifyCustomOcrTemplate($options = [])
 * @method DeleteCustomOcrTemplate deleteCustomOcrTemplate($options = [])
 * @method DescribeCustomOcrTemplate describeCustomOcrTemplate($options = [])
 * @method MarkAuditContentItem markAuditContentItem($options = [])
 * @method DescribeAuditContentItem describeAuditContentItem($options = [])
 * @method DeleteNotificationContacts deleteNotificationContacts($options = [])
 * @method DescribeUpdatePackageResult describeUpdatePackageResult($options = [])
 * @method DescribeUploadInfo describeUploadInfo($options = [])
 * @method UpdateAppPackage updateAppPackage($options = [])
 * @method DescribeSdkUrl describeSdkUrl($options = [])
 * @method DescribeAppInfo describeAppInfo($options = [])
 * @method VerifyWebsiteInstance verifyWebsiteInstance($options = [])
 * @method UpdateWebsiteInstanceStatus updateWebsiteInstanceStatus($options = [])
 * @method UpdateWebsiteInstanceKeyUrl updateWebsiteInstanceKeyUrl($options = [])
 * @method UpdateWebsiteInstance updateWebsiteInstance($options = [])
 * @method SendWebsiteFeedback sendWebsiteFeedback($options = [])
 * @method MarkWebsiteScanResult markWebsiteScanResult($options = [])
 * @method DescribeWebsiteVerifyInfo describeWebsiteVerifyInfo($options = [])
 * @method DescribeWebsiteStat describeWebsiteStat($options = [])
 * @method DescribeWebsiteScanResultDetail describeWebsiteScanResultDetail($options = [])
 * @method DescribeWebsiteScanResult describeWebsiteScanResult($options = [])
 * @method DescribeWebsiteInstanceKeyUrl describeWebsiteInstanceKeyUrl($options = [])
 * @method DescribeWebsiteInstanceId describeWebsiteInstanceId($options = [])
 * @method DescribeWebsiteInstance describeWebsiteInstance($options = [])
 * @method DescribeWebsiteIndexPageBaseline describeWebsiteIndexPageBaseline($options = [])
 * @method CreateWebsiteIndexPageBaseline createWebsiteIndexPageBaseline($options = [])
 * @method RefundCdiBag refundCdiBag($options = [])
 * @method RefundCdiBaseBag refundCdiBaseBag($options = [])
 * @method RefundWebSiteInstance refundWebSiteInstance($options = [])
 * @method UpgradeCdiBaseBag upgradeCdiBaseBag($options = [])
 * @method CreateCdiBag createCdiBag($options = [])
 * @method CreateCdiBaseBag createCdiBaseBag($options = [])
 * @method RenewWebSiteInstance renewWebSiteInstance($options = [])
 * @method CreateWebSiteInstance createWebSiteInstance($options = [])
 * @method MarkOssResult markOssResult($options = [])
 * @method ExportOssResult exportOssResult($options = [])
 * @method DescribeOssIncrementCheckSetting describeOssIncrementCheckSetting($options = [])
 * @method UpdateOssIncrementCheckSetting updateOssIncrementCheckSetting($options = [])
 * @method UpdateOssStockStatus updateOssStockStatus($options = [])
 * @method DescribeOssStockStatus describeOssStockStatus($options = [])
 * @method DescribeOssResultItems describeOssResultItems($options = [])
 * @method DescribeOssIncrementStats describeOssIncrementStats($options = [])
 * @method DescribeOssIncrementOverview describeOssIncrementOverview($options = [])
 * @method UpdateKeywordLib updateKeywordLib($options = [])
 * @method DescribeKeywordLib describeKeywordLib($options = [])
 * @method DescribeKeyword describeKeyword($options = [])
 * @method DeleteKeywordLib deleteKeywordLib($options = [])
 * @method DeleteKeyword deleteKeyword($options = [])
 * @method CreateKeywordLib createKeywordLib($options = [])
 * @method CreateKeyword createKeyword($options = [])
 * @method VerifyPhone verifyPhone($options = [])
 * @method VerifyEmail verifyEmail($options = [])
 * @method SendVerifyCodeToPhone sendVerifyCodeToPhone($options = [])
 * @method SendVerifyCodeToEmail sendVerifyCodeToEmail($options = [])
 * @method UpdateNotificationSetting updateNotificationSetting($options = [])
 * @method DescribeNotificationSetting describeNotificationSetting($options = [])
 * @method UploadImageToLib uploadImageToLib($options = [])
 * @method UpdateImageLib updateImageLib($options = [])
 * @method UpdateAuditSetting updateAuditSetting($options = [])
 * @method MarkAuditContent markAuditContent($options = [])
 * @method DescribeUserStatus describeUserStatus($options = [])
 * @method DescribeOpenApiUsage describeOpenApiUsage($options = [])
 * @method DescribeImageUploadInfo describeImageUploadInfo($options = [])
 * @method DescribeImageLib describeImageLib($options = [])
 * @method DescribeImageFromLib describeImageFromLib($options = [])
 * @method DescribeAuditSetting describeAuditSetting($options = [])
 * @method DescribeAuditContent describeAuditContent($options = [])
 * @method DeleteImageLib deleteImageLib($options = [])
 * @method DeleteImageFromLib deleteImageFromLib($options = [])
 * @method CreateImageLib createImageLib($options = [])
 */
class V20170823
{
    use ApiResolverTrait;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getName
 * @method self withName(string $name)
 * @method string getImgUrl
 * @method self withImgUrl(string $imgUrl)
 * @method string getReferArea
 * @method self withReferArea(string $referArea)
 * @method string getRecognizeArea
 * @method self withRecognizeArea(string $recognizeArea)
 */
class CreatCustomOcrTemplate extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getId
 * @method self withId(int $id)
 * @method string getName
 * @method self withName(string $name)
 * @method string getReferArea
 * @method self withReferArea(string $referArea)
 * @method string getRecognizeArea
 * @method self withRecognizeArea(string $recognizeArea)
 */
class UpdateCustomOcrTemplate extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method int getId
 * @method self withId(int $id)
 * @method string getTestImgUrl
 * @method self withTestImgUrl(string $testImgUrl)
 */
class VerifyCustomOcrTemplate extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getIds
 * @method self withIds(string $ids)
 */
class DeleteCustomOcrTemplate extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getIds
 * @method self withIds(string $ids)
 */
class DescribeCustomOcrTemplate extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getIds
 * @method self withIds(string $ids)
 * @method string getAuditResult
 * @method self withAuditResult(string $auditResult)
 * @method string getAuditIllegalReasons
 * @method self withAuditIllegalReasons(string $auditIllegalReasons)
 */
class MarkAuditContentItem extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getTotalCount
 * @method self withTotalCount(Integer $totalCount)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 */
class DescribeAuditContentItem extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getContactTypes
 * @method self withContactTypes(string $contactTypes)
 */
class DeleteNotificationContacts extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class DescribeUpdatePackageResult extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getBiz
 * @method self withBiz(string $biz)
 */
class DescribeUploadInfo extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getId
 * @method self withId(int $id)
 * @method string getPackageUrl
 * @method self withPackageUrl(string $packageUrl)
 * @method string getPlatform
 * @method self withPlatform(string $platform)
 * @method bool getDebug
 * @method self withDebug(bool $debug)
 */
class UpdateAppPackage extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getId
 * @method self withId(int $id)
 * @method bool getDebug
 * @method self withDebug(bool $debug)
 */
class DescribeSdkUrl extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getTotalCount
 * @method self withTotalCount(Integer $totalCount)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getPlatform
 * @method self withPlatform(string $platform)
 */
class DescribeAppInfo extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getVerifyMethod
 * @method self withVerifyMethod(string $verifyMethod)
 */
class VerifyWebsiteInstance extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class UpdateWebsiteInstanceStatus extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUrls
 * @method self withUrls(string $urls)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class UpdateWebsiteInstanceKeyUrl extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getSiteProtocol
 * @method self withSiteProtocol(string $siteProtocol)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getWebsiteScanInterval
 * @method self withWebsiteScanInterval(Integer $websiteScanInterval)
 * @method string getDomain
 * @method self withDomain(string $domain)
 * @method Integer getIndexPageScanInterval
 * @method self withIndexPageScanInterval(Integer $indexPageScanInterval)
 * @method string getIndexPage
 * @method self withIndexPage(string $indexPage)
 */
class UpdateWebsiteInstance extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getFeedback
 * @method self withFeedback(string $feedback)
 * @method string getUrls
 * @method self withUrls(string $urls)
 */
class SendWebsiteFeedback extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getIds
 * @method self withIds(string $ids)
 */
class MarkWebsiteScanResult extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeWebsiteVerifyInfo extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeWebsiteStat extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getId
 * @method self withId(Integer $id)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 */
class DescribeWebsiteScanResultDetail extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getTotalCount
 * @method self withTotalCount(Integer $totalCount)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getSubServiceModule
 * @method self withSubServiceModule(string $subServiceModule)
 * @method string getLabel
 * @method self withLabel(string $label)
 * @method string getDomain
 * @method self withDomain(string $domain)
 * @method string getSiteUrl
 * @method self withSiteUrl(string $siteUrl)
 * @method string getHandleStatus
 * @method self withHandleStatus(string $handleStatus)
 */
class DescribeWebsiteScanResult extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeWebsiteInstanceKeyUrl extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeWebsiteInstanceId extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getTotalCount
 * @method self withTotalCount(Integer $totalCount)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeWebsiteInstance extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DescribeWebsiteIndexPageBaseline extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class CreateWebsiteIndexPageBaseline extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 */
class RefundCdiBag extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 */
class RefundCdiBaseBag extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 */
class RefundWebSiteInstance extends Rpc
{
    use R;
}

/**
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getFlowOutSpec
 * @method self withFlowOutSpec(Integer $flowOutSpec)
 */
class UpgradeCdiBaseBag extends Rpc
{
    use R;
}

/**
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method Integer getFlowOutSpec
 * @method self withFlowOutSpec(Integer $flowOutSpec)
 * @method Integer getOrderNum
 * @method self withOrderNum(Integer $orderNum)
 */
class CreateCdiBag extends Rpc
{
    use R;
}

/**
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method Integer getDuration
 * @method self withDuration(Integer $duration)
 * @method Integer getFlowOutSpec
 * @method self withFlowOutSpec(Integer $flowOutSpec)
 */
class CreateCdiBaseBag extends Rpc
{
    use R;
}

/**
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method Integer getDuration
 * @method self withDuration(Integer $duration)
 * @method string getPricingCycle
 * @method self withPricingCycle(string $pricingCycle)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getOrderNum
 * @method self withOrderNum(Integer $orderNum)
 */
class RenewWebSiteInstance extends Rpc
{
    use R;
}

/**
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method Integer getDuration
 * @method self withDuration(Integer $duration)
 * @method string getPricingCycle
 * @method self withPricingCycle(string $pricingCycle)
 * @method Integer getOrderNum
 * @method self withOrderNum(Integer $orderNum)
 */
class CreateWebSiteInstance extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getIds
 * @method self withIds(string $ids)
 * @method string getOperation
 * @method self withOperation(string $operation)
 * @method bool getStock
 * @method self withStock(bool $stock)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getScene
 * @method self withScene(string $scene)
 */
class MarkOssResult extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getTotalCount
 * @method self withTotalCount(Integer $totalCount)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method string getEndDate
 * @method self withEndDate(string $endDate)
 * @method string getScene
 * @method self withScene(string $scene)
 * @method string getSuggestion
 * @method self withSuggestion(string $suggestion)
 * @method bool getStock
 * @method self withStock(bool $stock)
 * @method float getMinScore
 * @method self withMinScore(float $minScore)
 * @method float getMaxScore
 * @method self withMaxScore(float $maxScore)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getBucket
 * @method self withBucket(string $bucket)
 */
class ExportOssResult extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeOssIncrementCheckSetting extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getBucketConfigList
 * @method self withBucketConfigList(string $bucketConfigList)
 * @method string getImageScanLimit
 * @method self withImageScanLimit(string $imageScanLimit)
 * @method string getImageSceneList
 * @method self withImageSceneList(string $imageSceneList)
 * @method string getVideoSceneList
 * @method self withVideoSceneList(string $videoSceneList)
 * @method string getImageAutoFreeze
 * @method self withImageAutoFreeze(string $imageAutoFreeze)
 * @method string getVideoAutoFreezeSceneList
 * @method self withVideoAutoFreezeSceneList(string $videoAutoFreezeSceneList)
 * @method Integer getVideoFrameInterval
 * @method self withVideoFrameInterval(Integer $videoFrameInterval)
 * @method Integer getVideoMaxFrames
 * @method self withVideoMaxFrames(Integer $videoMaxFrames)
 * @method Integer getVideoMaxSize
 * @method self withVideoMaxSize(Integer $videoMaxSize)
 */
class UpdateOssIncrementCheckSetting extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getOperation
 * @method self withOperation(string $operation)
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method string getEndDate
 * @method self withEndDate(string $endDate)
 * @method string getBucketConfigList
 * @method self withBucketConfigList(string $bucketConfigList)
 * @method string getResourceTypeList
 * @method self withResourceTypeList(string $resourceTypeList)
 * @method string getSceneList
 * @method self withSceneList(string $sceneList)
 * @method string getImageAutoFreeze
 * @method self withImageAutoFreeze(string $imageAutoFreeze)
 * @method string getVideoAutoFreezeSceneList
 * @method self withVideoAutoFreezeSceneList(string $videoAutoFreezeSceneList)
 * @method Integer getVideoFrameInterval
 * @method self withVideoFrameInterval(Integer $videoFrameInterval)
 * @method Integer getVideoMaxFrames
 * @method self withVideoMaxFrames(Integer $videoMaxFrames)
 * @method Integer getVideoMaxSize
 * @method self withVideoMaxSize(Integer $videoMaxSize)
 */
class UpdateOssStockStatus extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeOssStockStatus extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getTotalCount
 * @method self withTotalCount(Integer $totalCount)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method string getEndDate
 * @method self withEndDate(string $endDate)
 * @method string getScene
 * @method self withScene(string $scene)
 * @method string getSuggestion
 * @method self withSuggestion(string $suggestion)
 * @method bool getStock
 * @method self withStock(bool $stock)
 * @method float getMinScore
 * @method self withMinScore(float $minScore)
 * @method float getMaxScore
 * @method self withMaxScore(float $maxScore)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getBucket
 * @method self withBucket(string $bucket)
 * @method string getQueryId
 * @method self withQueryId(string $queryId)
 */
class DescribeOssResultItems extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getScene
 * @method self withScene(string $scene)
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method string getEndDate
 * @method self withEndDate(string $endDate)
 */
class DescribeOssIncrementStats extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeOssIncrementOverview extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getId
 * @method self withId(Integer $id)
 * @method string getName
 * @method self withName(string $name)
 * @method string getBizTypes
 * @method self withBizTypes(string $bizTypes)
 */
class UpdateKeywordLib extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getServiceModule
 * @method self withServiceModule(string $serviceModule)
 */
class DescribeKeywordLib extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getTotalCount
 * @method self withTotalCount(Integer $totalCount)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getKeywordLibId
 * @method self withKeywordLibId(Integer $keywordLibId)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 */
class DescribeKeyword extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getId
 * @method self withId(Integer $id)
 */
class DeleteKeywordLib extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getIds
 * @method self withIds(string $ids)
 * @method string getKeywordLibId
 * @method self withKeywordLibId(string $keywordLibId)
 */
class DeleteKeyword extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getServiceModule
 * @method self withServiceModule(string $serviceModule)
 * @method string getName
 * @method self withName(string $name)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getLibType
 * @method self withLibType(string $libType)
 * @method string getCategory
 * @method self withCategory(string $category)
 * @method string getBizTypes
 * @method self withBizTypes(string $bizTypes)
 */
class CreateKeywordLib extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getKeywordLibId
 * @method self withKeywordLibId(Integer $keywordLibId)
 * @method string getKeywords
 * @method self withKeywords(string $keywords)
 */
class CreateKeyword extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getPhone
 * @method self withPhone(string $phone)
 * @method string getVerifyCode
 * @method self withVerifyCode(string $verifyCode)
 */
class VerifyPhone extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getVerifyCode
 * @method self withVerifyCode(string $verifyCode)
 */
class VerifyEmail extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getPhone
 * @method self withPhone(string $phone)
 */
class SendVerifyCodeToPhone extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getEmail
 * @method self withEmail(string $email)
 */
class SendVerifyCodeToEmail extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getRealtimeMessageList
 * @method self withRealtimeMessageList(string $realtimeMessageList)
 * @method string getReminderModeList
 * @method self withReminderModeList(string $reminderModeList)
 * @method Integer getScheduleMessageTime
 * @method self withScheduleMessageTime(Integer $scheduleMessageTime)
 * @method Integer getScheduleMessageTimeZone
 * @method self withScheduleMessageTimeZone(Integer $scheduleMessageTimeZone)
 */
class UpdateNotificationSetting extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeNotificationSetting extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getImageLibId
 * @method self withImageLibId(Integer $imageLibId)
 * @method string getImages
 * @method self withImages(string $images)
 */
class UploadImageToLib extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getId
 * @method self withId(Integer $id)
 * @method string getName
 * @method self withName(string $name)
 * @method string getScene
 * @method self withScene(string $scene)
 * @method string getCategory
 * @method self withCategory(string $category)
 * @method string getBizTypes
 * @method self withBizTypes(string $bizTypes)
 */
class UpdateImageLib extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getSeed
 * @method self withSeed(string $seed)
 * @method string getCallback
 * @method self withCallback(string $callback)
 */
class UpdateAuditSetting extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getIds
 * @method self withIds(string $ids)
 * @method string getAuditResult
 * @method self withAuditResult(string $auditResult)
 * @method string getAuditIllegalReasons
 * @method self withAuditIllegalReasons(string $auditIllegalReasons)
 */
class MarkAuditContent extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeUserStatus extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method string getEndDate
 * @method self withEndDate(string $endDate)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 */
class DescribeOpenApiUsage extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 */
class DescribeImageUploadInfo extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getServiceModule
 * @method self withServiceModule(string $serviceModule)
 */
class DescribeImageLib extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getTotalCount
 * @method self withTotalCount(Integer $totalCount)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getImageLibId
 * @method self withImageLibId(Integer $imageLibId)
 */
class DescribeImageFromLib extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class DescribeAuditSetting extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getTotalCount
 * @method self withTotalCount(Integer $totalCount)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getStartDate
 * @method self withStartDate(string $startDate)
 * @method string getEndDate
 * @method self withEndDate(string $endDate)
 * @method string getScene
 * @method self withScene(string $scene)
 * @method string getSuggestion
 * @method self withSuggestion(string $suggestion)
 * @method string getLabel
 * @method self withLabel(string $label)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getDataId
 * @method self withDataId(string $dataId)
 * @method string getBizType
 * @method self withBizType(string $bizType)
 * @method string getAuditResult
 * @method self withAuditResult(string $auditResult)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 */
class DescribeAuditContent extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getId
 * @method self withId(Integer $id)
 */
class DeleteImageLib extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getIds
 * @method self withIds(string $ids)
 */
class DeleteImageFromLib extends Rpc
{
    use R;
}

/**
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method string getServiceModule
 * @method self withServiceModule(string $serviceModule)
 * @method string getName
 * @method self withName(string $name)
 * @method string getScene
 * @method self withScene(string $scene)
 * @method string getCategory
 * @method self withCategory(string $category)
 * @method string getBizTypes
 * @method self withBizTypes(string $bizTypes)
 */
class CreateImageLib extends Rpc
{
    use R;
}
