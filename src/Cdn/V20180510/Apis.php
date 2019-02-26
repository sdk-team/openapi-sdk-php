<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method TagResources tagResources($options = [])
 * @method DescribeUserTags describeUserTags($options = [])
 * @method DescribeTagResources describeTagResources($options = [])
 * @method UntagResources untagResources($options = [])
 * @method SetSkipModuleConfig setSkipModuleConfig($options = [])
 * @method DescribeUserCdnStatus describeUserCdnStatus($options = [])
 * @method BatchSetCdnDomainServerCertificate batchSetCdnDomainServerCertificate($options = [])
 * @method DescribeCdnUserBillPrediction describeCdnUserBillPrediction($options = [])
 * @method DescribeCdnUserBillType describeCdnUserBillType($options = [])
 * @method DescribeCdnUserBillHistory describeCdnUserBillHistory($options = [])
 * @method DeleteUsageDetailDataExportTask deleteUsageDetailDataExportTask($options = [])
 * @method DeleteUserUsageDataExportTask deleteUserUsageDataExportTask($options = [])
 * @method ModifyRealtimeLogDelivery modifyRealtimeLogDelivery($options = [])
 * @method ListRealtimeLogDeliveryInfos listRealtimeLogDeliveryInfos($options = [])
 * @method EnableRealtimeLogDelivery enableRealtimeLogDelivery($options = [])
 * @method DisableRealtimeLogDelivery disableRealtimeLogDelivery($options = [])
 * @method DescribeRealtimeLogAuthorized describeRealtimeLogAuthorized($options = [])
 * @method DescribeDomainRealtimeLogDelivery describeDomainRealtimeLogDelivery($options = [])
 * @method DeleteRealtimeLogDelivery deleteRealtimeLogDelivery($options = [])
 * @method CreateRealTimeLogDelivery createRealTimeLogDelivery($options = [])
 * @method ListRealtimeLogDelivery listRealtimeLogDelivery($options = [])
 * @method ListRealtimeLogDeliveryDomains listRealtimeLogDeliveryDomains($options = [])
 * @method DescribeRealtimeDeliveryAcc describeRealtimeDeliveryAcc($options = [])
 * @method DescribeDomainIspLocationDetailData describeDomainIspLocationDetailData($options = [])
 * @method ListFCTrigger listFCTrigger($options = [])
 * @method DescribeCdnCertificateDetail describeCdnCertificateDetail($options = [])
 * @method SetReqAuthConfig setReqAuthConfig($options = [])
 * @method UpdateFCTrigger updateFCTrigger($options = [])
 * @method SetWaitingRoomConfig setWaitingRoomConfig($options = [])
 * @method SetWafConfig setWafConfig($options = [])
 * @method SetVideoSeekConfig setVideoSeekConfig($options = [])
 * @method SetVarsConfig setVarsConfig($options = [])
 * @method SetUserAgentAcessRestriction setUserAgentAcessRestriction($options = [])
 * @method SetRemoveQueryStringConfig setRemoveQueryStringConfig($options = [])
 * @method SetRegexRuleConfig setRegexRuleConfig($options = [])
 * @method SetRangeConfig setRangeConfig($options = [])
 * @method SetPathForceTtlCodeConfig setPathForceTtlCodeConfig($options = [])
 * @method SetPathCacheExpiredConfig setPathCacheExpiredConfig($options = [])
 * @method SetPageCompressConfig setPageCompressConfig($options = [])
 * @method SetOptimizeConfig setOptimizeConfig($options = [])
 * @method SetMacServiceConfig setMacServiceConfig($options = [])
 * @method SetL2OssKeyConfig setL2OssKeyConfig($options = [])
 * @method SetIpBlackListConfig setIpBlackListConfig($options = [])
 * @method SetIgnoreQueryStringConfig setIgnoreQueryStringConfig($options = [])
 * @method SetHttpsOptionConfig setHttpsOptionConfig($options = [])
 * @method SetHttpErrorPageConfig setHttpErrorPageConfig($options = [])
 * @method SetForwardSchemeConfig setForwardSchemeConfig($options = [])
 * @method SetFileTypeForceTtlCodeConfig setFileTypeForceTtlCodeConfig($options = [])
 * @method SetFileCacheExpiredConfig setFileCacheExpiredConfig($options = [])
 * @method SetDomainGreenManagerConfig setDomainGreenManagerConfig($options = [])
 * @method SetAliBusinessConfig setAliBusinessConfig($options = [])
 * @method SetAliAuthConfig setAliAuthConfig($options = [])
 * @method ModifyUserCustomLogConfig modifyUserCustomLogConfig($options = [])
 * @method ModifyDomainCustomLogConfig modifyDomainCustomLogConfig($options = [])
 * @method ListUserCustomLogConfig listUserCustomLogConfig($options = [])
 * @method ListDomainsByLogConfigId listDomainsByLogConfigId($options = [])
 * @method DescribeUserUsageDetailDataExportTask describeUserUsageDetailDataExportTask($options = [])
 * @method DescribeUserUsageDataExportTask describeUserUsageDataExportTask($options = [])
 * @method DescribeUserCustomLogConfig describeUserCustomLogConfig($options = [])
 * @method DescribeTopDomainsByFlow describeTopDomainsByFlow($options = [])
 * @method DescribeMacStatistic describeMacStatistic($options = [])
 * @method DescribeMacAppInfo describeMacAppInfo($options = [])
 * @method DescribeFCTrigger describeFCTrigger($options = [])
 * @method DescribeExtensiveDomainData describeExtensiveDomainData($options = [])
 * @method DescribeDomainUsageData describeDomainUsageData($options = [])
 * @method DescribeDomainTrafficData describeDomainTrafficData($options = [])
 * @method DescribeDomainSrcTrafficData describeDomainSrcTrafficData($options = [])
 * @method DescribeDomainSrcBpsData describeDomainSrcBpsData($options = [])
 * @method DescribeDomainSlowRatio describeDomainSlowRatio($options = [])
 * @method DescribeDomainsByCustomLogConfig describeDomainsByCustomLogConfig($options = [])
 * @method DescribeDomainReqHitRateData describeDomainReqHitRateData($options = [])
 * @method DescribeDomainRegionData describeDomainRegionData($options = [])
 * @method DescribeDomainRealTimeTrafficData describeDomainRealTimeTrafficData($options = [])
 * @method DescribeDomainRealTimeSrcTrafficData describeDomainRealTimeSrcTrafficData($options = [])
 * @method DescribeDomainRealTimeSrcHttpCodeData describeDomainRealTimeSrcHttpCodeData($options = [])
 * @method DescribeDomainRealTimeSrcBpsData describeDomainRealTimeSrcBpsData($options = [])
 * @method DescribeDomainRealTimeReqHitRateData describeDomainRealTimeReqHitRateData($options = [])
 * @method DescribeDomainRealTimeQpsData describeDomainRealTimeQpsData($options = [])
 * @method DescribeDomainRealTimeMetric describeDomainRealTimeMetric($options = [])
 * @method DescribeDomainRealTimeHttpCodeData describeDomainRealTimeHttpCodeData($options = [])
 * @method DescribeDomainRealTimeByteHitRateData describeDomainRealTimeByteHitRateData($options = [])
 * @method DescribeDomainRealTimeBpsData describeDomainRealTimeBpsData($options = [])
 * @method DescribeDomainQpsData describeDomainQpsData($options = [])
 * @method DescribeDomainQoSRt describeDomainQoSRt($options = [])
 * @method DescribeDomainPnoData describeDomainPnoData($options = [])
 * @method DescribeDomainPathData describeDomainPathData($options = [])
 * @method DescribeDomainLogConfig describeDomainLogConfig($options = [])
 * @method DescribeDomainHttpsData describeDomainHttpsData($options = [])
 * @method DescribeDomainHttpCodeData describeDomainHttpCodeData($options = [])
 * @method DescribeDomainHitRateData describeDomainHitRateData($options = [])
 * @method DescribeDomainCustomLogConfig describeDomainCustomLogConfig($options = [])
 * @method DescribeDomainCname describeDomainCname($options = [])
 * @method DescribeDomainCertificateInfo describeDomainCertificateInfo($options = [])
 * @method DescribeDomainBpsData describeDomainBpsData($options = [])
 * @method DescribeCustomLogConfig describeCustomLogConfig($options = [])
 * @method DescribeCurrentCharge95Info describeCurrentCharge95Info($options = [])
 * @method DescribeCdnDomainLogs describeCdnDomainLogs($options = [])
 * @method DescribeCdnDomainBillingData describeCdnDomainBillingData($options = [])
 * @method DeleteFCTrigger deleteFCTrigger($options = [])
 * @method CreateUserUsageDataExportTask createUserUsageDataExportTask($options = [])
 * @method CreateUsageDetailDataExportTask createUsageDetailDataExportTask($options = [])
 * @method BatchDescribeDomainBpsData batchDescribeDomainBpsData($options = [])
 * @method AddFCTrigger addFCTrigger($options = [])
 * @method PreloadObjectCaches preloadObjectCaches($options = [])
 * @method DescribeUserVipsByDomain describeUserVipsByDomain($options = [])
 * @method IsDiamondUser isDiamondUser($options = [])
 * @method StartCdnDomain startCdnDomain($options = [])
 * @method BatchAddCdnDomain batchAddCdnDomain($options = [])
 * @method BatchSetCdnDomainConfig batchSetCdnDomainConfig($options = [])
 * @method DescribeCdnUserResourcePackage describeCdnUserResourcePackage($options = [])
 * @method SetOssLogConfig setOssLogConfig($options = [])
 * @method DescribeDomainAverageResponseTime describeDomainAverageResponseTime($options = [])
 * @method BatchStartCdnDomain batchStartCdnDomain($options = [])
 * @method ModifyFileCacheExpiredConfig modifyFileCacheExpiredConfig($options = [])
 * @method DescribeIpInfo describeIpInfo($options = [])
 * @method DescribeDomainFileSizeProportionData describeDomainFileSizeProportionData($options = [])
 * @method SetHttpHeaderConfig setHttpHeaderConfig($options = [])
 * @method BatchUpdateCdnDomain batchUpdateCdnDomain($options = [])
 * @method DescribeDomainPvData describeDomainPvData($options = [])
 * @method DescribeCdnUserQuota describeCdnUserQuota($options = [])
 * @method SetUserGreenManagerConfig setUserGreenManagerConfig($options = [])
 * @method BatchDeleteCdnDomainConfig batchDeleteCdnDomainConfig($options = [])
 * @method DescribeRefreshQuota describeRefreshQuota($options = [])
 * @method SetRemoteReqAuthConfig setRemoteReqAuthConfig($options = [])
 * @method SetDomainServerCertificate setDomainServerCertificate($options = [])
 * @method DeleteSpecificConfig deleteSpecificConfig($options = [])
 * @method SetSourceHostConfig setSourceHostConfig($options = [])
 * @method DescribeCdnRegionAndIsp describeCdnRegionAndIsp($options = [])
 * @method OpenCdnService openCdnService($options = [])
 * @method DescribeDomainTopReferVisit describeDomainTopReferVisit($options = [])
 * @method SetCcConfig setCcConfig($options = [])
 * @method DescribeL2VipsByDomain describeL2VipsByDomain($options = [])
 * @method DescribeCdnCertificateList describeCdnCertificateList($options = [])
 * @method DeleteCdnDomain deleteCdnDomain($options = [])
 * @method ModifyPathCacheExpiredConfig modifyPathCacheExpiredConfig($options = [])
 * @method PushObjectCache pushObjectCache($options = [])
 * @method StopCdnDomain stopCdnDomain($options = [])
 * @method DescribeDomainUvData describeDomainUvData($options = [])
 * @method BatchStopCdnDomain batchStopCdnDomain($options = [])
 * @method ModifyCdnService modifyCdnService($options = [])
 * @method DescribeCdnService describeCdnService($options = [])
 * @method ModifyCdnDomain modifyCdnDomain($options = [])
 * @method DescribeCdnDomainConfigs describeCdnDomainConfigs($options = [])
 * @method DescribeRefreshTasks describeRefreshTasks($options = [])
 * @method DescribeCdnDomainDetail describeCdnDomainDetail($options = [])
 * @method DeleteHttpHeaderConfig deleteHttpHeaderConfig($options = [])
 * @method DescribeUserDomains describeUserDomains($options = [])
 * @method SetIpAllowListConfig setIpAllowListConfig($options = [])
 * @method AddCdnDomain addCdnDomain($options = [])
 * @method DescribeDiamondData describeDiamondData($options = [])
 * @method RefreshObjectCaches refreshObjectCaches($options = [])
 * @method DescribeCdnTypes describeCdnTypes($options = [])
 * @method BlockObjectCaches blockObjectCaches($options = [])
 * @method PurgeObjectCaches purgeObjectCaches($options = [])
 * @method DescribeRangeDataByLocateAndIspService describeRangeDataByLocateAndIspService($options = [])
 * @method SetErrorPageConfig setErrorPageConfig($options = [])
 * @method SetReqHeaderConfig setReqHeaderConfig($options = [])
 * @method DescribeDomainBpsDataByTimeStamp describeDomainBpsDataByTimeStamp($options = [])
 * @method SetRefererConfig setRefererConfig($options = [])
 * @method SetForceRedirectConfig setForceRedirectConfig($options = [])
 * @method DescribeDomainISPData describeDomainISPData($options = [])
 * @method DeleteCacheExpiredConfig deleteCacheExpiredConfig($options = [])
 * @method DescribeUserConfigs describeUserConfigs($options = [])
 * @method DescribeHistoryCharge95Info describeHistoryCharge95Info($options = [])
 * @method ModifyHttpHeaderConfig modifyHttpHeaderConfig($options = [])
 * @method DescribeDomainsBySource describeDomainsBySource($options = [])
 * @method DescribeDomainTopUrlVisit describeDomainTopUrlVisit($options = [])
 * @method DescribeDomainsUsageByDay describeDomainsUsageByDay($options = [])
 * @method DescribeDomainSrcHttpCodeData describeDomainSrcHttpCodeData($options = [])
 * @method DescribeDomainMax95BpsData describeDomainMax95BpsData($options = [])
 */
class V20180510
{
    use ApiResolverTrait;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method array getResourceId
 * @method self withResourceId(array $resourceId)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method array getTag
 * @method self withTag(array $tag)
 */
class TagResources extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class DescribeUserTags extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method array getResourceId
 * @method self withResourceId(array $resourceId)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getScope
 * @method self withScope(string $scope)
 */
class DescribeTagResources extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method array getResourceId
 * @method self withResourceId(array $resourceId)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method array getTagKey
 * @method self withTagKey(array $tagKey)
 */
class UntagResources extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getModuleFilterCondition
 * @method self withModuleFilterCondition(string $moduleFilterCondition)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 */
class SetSkipModuleConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeUserCdnStatus extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getCertName
 * @method self withCertName(string $certName)
 * @method string getCertType
 * @method self withCertType(string $certType)
 * @method string getSSLProtocol
 * @method self withSSLProtocol(string $sSLProtocol)
 * @method string getSSLPub
 * @method self withSSLPub(string $sSLPub)
 * @method string getSSLPri
 * @method self withSSLPri(string $sSLPri)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getForceSet
 * @method self withForceSet(string $forceSet)
 */
class BatchSetCdnDomainServerCertificate extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDimension
 * @method self withDimension(string $dimension)
 * @method string getArea
 * @method self withArea(string $area)
 */
class DescribeCdnUserBillPrediction extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeCdnUserBillType extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeCdnUserBillHistory extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class DeleteUsageDetailDataExportTask extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class DeleteUserUsageDataExportTask extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getLogstore
 * @method self withLogstore(string $logstore)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getDomain
 * @method self withDomain(string $domain)
 */
class ModifyRealtimeLogDelivery extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class ListRealtimeLogDeliveryInfos extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomain
 * @method self withDomain(string $domain)
 */
class EnableRealtimeLogDelivery extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomain
 * @method self withDomain(string $domain)
 */
class DisableRealtimeLogDelivery extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class DescribeRealtimeLogAuthorized extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomain
 * @method self withDomain(string $domain)
 */
class DescribeDomainRealtimeLogDelivery extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomain
 * @method self withDomain(string $domain)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getLogstore
 * @method self withLogstore(string $logstore)
 * @method string getRegion
 * @method self withRegion(string $region)
 */
class DeleteRealtimeLogDelivery extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getLogstore
 * @method self withLogstore(string $logstore)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getDomain
 * @method self withDomain(string $domain)
 */
class CreateRealTimeLogDelivery extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class ListRealtimeLogDelivery extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getLogstore
 * @method self withLogstore(string $logstore)
 * @method string getRegion
 * @method self withRegion(string $region)
 */
class ListRealtimeLogDeliveryDomains extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getLogStore
 * @method self withLogStore(string $logStore)
 */
class DescribeRealtimeDeliveryAcc extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDomainIspLocationDetailData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getEventMetaName
 * @method self withEventMetaName(string $eventMetaName)
 * @method string getEventMetaVersion
 * @method self withEventMetaVersion(string $eventMetaVersion)
 */
class ListFCTrigger extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getCertName
 * @method self withCertName(string $certName)
 */
class DescribeCdnCertificateDetail extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAuthType
 * @method self withAuthType(string $authType)
 * @method string getKey1
 * @method self withKey1(string $key1)
 * @method string getKey2
 * @method self withKey2(string $key2)
 * @method string getTimeOut
 * @method self withTimeOut(string $timeOut)
 * @method string getAuthRemoteDesc
 * @method self withAuthRemoteDesc(string $authRemoteDesc)
 */
class SetReqAuthConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getTriggerARN
 * @method self withTriggerARN(string $triggerARN)
 * @method string getSourceARN
 * @method self withSourceARN(string $sourceARN)
 * @method string getRoleARN
 * @method self withRoleARN(string $roleARN)
 * @method string getNotes
 * @method self withNotes(string $notes)
 */
class UpdateFCTrigger extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getWaitUri
 * @method self withWaitUri(string $waitUri)
 * @method Integer getAllowPct
 * @method self withAllowPct(Integer $allowPct)
 * @method Integer getMaxTimeWait
 * @method self withMaxTimeWait(Integer $maxTimeWait)
 * @method Integer getGapTime
 * @method self withGapTime(Integer $gapTime)
 * @method string getWaitUrl
 * @method self withWaitUrl(string $waitUrl)
 */
class SetWaitingRoomConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 * @method string getEnable
 * @method self withEnable(string $enable)
 */
class SetWafConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 * @method string getEnable
 * @method self withEnable(string $enable)
 */
class SetVideoSeekConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getVarName
 * @method self withVarName(string $varName)
 * @method string getVarValue
 * @method self withVarValue(string $varValue)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 */
class SetVarsConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getUserAgent
 * @method self withUserAgent(string $userAgent)
 * @method string getType
 * @method self withType(string $type)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 */
class SetUserAgentAcessRestriction extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 * @method string getAliRemoveArgs
 * @method self withAliRemoveArgs(string $aliRemoveArgs)
 * @method string getKeepOssArgs
 * @method self withKeepOssArgs(string $keepOssArgs)
 */
class SetRemoveQueryStringConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getEnabled
 * @method self withEnabled(string $enabled)
 * @method string getUri
 * @method self withUri(string $uri)
 * @method string getOrigin
 * @method self withOrigin(string $origin)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 */
class SetRegexRuleConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getEnable
 * @method self withEnable(string $enable)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 */
class SetRangeConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getPath
 * @method self withPath(string $path)
 * @method string getCodeString
 * @method self withCodeString(string $codeString)
 */
class SetPathForceTtlCodeConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getCacheContent
 * @method self withCacheContent(string $cacheContent)
 * @method string getTTL
 * @method self withTTL(string $tTL)
 * @method string getWeight
 * @method self withWeight(string $weight)
 */
class SetPathCacheExpiredConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 * @method string getEnable
 * @method self withEnable(string $enable)
 */
class SetPageCompressConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 * @method string getEnable
 * @method self withEnable(string $enable)
 */
class SetOptimizeConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getEnabled
 * @method self withEnabled(string $enabled)
 * @method string getProcessResult
 * @method self withProcessResult(string $processResult)
 * @method string getAppList
 * @method self withAppList(string $appList)
 */
class SetMacServiceConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getPrivateOssAuth
 * @method self withPrivateOssAuth(string $privateOssAuth)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 */
class SetL2OssKeyConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getBlockIps
 * @method self withBlockIps(string $blockIps)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 */
class SetIpBlackListConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 * @method string getEnable
 * @method self withEnable(string $enable)
 * @method string getHashKeyArgs
 * @method self withHashKeyArgs(string $hashKeyArgs)
 * @method string getKeepOssArgs
 * @method self withKeepOssArgs(string $keepOssArgs)
 */
class SetIgnoreQueryStringConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 * @method string getHttp2
 * @method self withHttp2(string $http2)
 */
class SetHttpsOptionConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getErrorCode
 * @method self withErrorCode(string $errorCode)
 * @method string getPageUrl
 * @method self withPageUrl(string $pageUrl)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 */
class SetHttpErrorPageConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 * @method string getEnable
 * @method self withEnable(string $enable)
 * @method string getSchemeOrigin
 * @method self withSchemeOrigin(string $schemeOrigin)
 * @method string getSchemeOriginPort
 * @method self withSchemeOriginPort(string $schemeOriginPort)
 */
class SetForwardSchemeConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getFileType
 * @method self withFileType(string $fileType)
 * @method string getCodeString
 * @method self withCodeString(string $codeString)
 */
class SetFileTypeForceTtlCodeConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 * @method string getCacheContent
 * @method self withCacheContent(string $cacheContent)
 * @method string getTTL
 * @method self withTTL(string $tTL)
 */
class SetFileCacheExpiredConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getEnable
 * @method self withEnable(string $enable)
 */
class SetDomainGreenManagerConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAliBusinessType
 * @method self withAliBusinessType(string $aliBusinessType)
 * @method string getAliBusinessTable
 * @method self withAliBusinessTable(string $aliBusinessTable)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 */
class SetAliBusinessConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAuthType
 * @method self withAuthType(string $authType)
 * @method string getAliAuthDual
 * @method self withAliAuthDual(string $aliAuthDual)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 */
class SetAliAuthConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getConfigId
 * @method self withConfigId(string $configId)
 * @method string getTag
 * @method self withTag(string $tag)
 */
class ModifyUserCustomLogConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getConfigId
 * @method self withConfigId(string $configId)
 */
class ModifyDomainCustomLogConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class ListUserCustomLogConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getConfigId
 * @method self withConfigId(string $configId)
 */
class ListDomainsByLogConfigId extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getPageNumber
 * @method self withPageNumber(string $pageNumber)
 */
class DescribeUserUsageDetailDataExportTask extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getPageNumber
 * @method self withPageNumber(string $pageNumber)
 */
class DescribeUserUsageDataExportTask extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class DescribeUserCustomLogConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getProduct
 * @method self withProduct(string $product)
 * @method int getLimit
 * @method self withLimit(int $limit)
 */
class DescribeTopDomainsByFlow extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getCarrierOperator
 * @method self withCarrierOperator(string $carrierOperator)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getProtocol
 * @method self withProtocol(string $protocol)
 */
class DescribeMacStatistic extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class DescribeMacAppInfo extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getTriggerARN
 * @method self withTriggerARN(string $triggerARN)
 */
class DescribeFCTrigger extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getExtensiveDomain
 * @method self withExtensiveDomain(string $extensiveDomain)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeExtensiveDomainData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getType
 * @method self withType(string $type)
 * @method string getDataProtocol
 * @method self withDataProtocol(string $dataProtocol)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getArea
 * @method self withArea(string $area)
 * @method string getField
 * @method self withField(string $field)
 */
class DescribeDomainUsageData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeDomainTrafficData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 */
class DescribeDomainSrcTrafficData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 */
class DescribeDomainSrcBpsData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 */
class DescribeDomainSlowRatio extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getConfigId
 * @method self withConfigId(string $configId)
 */
class DescribeDomainsByCustomLogConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 */
class DescribeDomainReqHitRateData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDomainRegionData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDomainRealTimeTrafficData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDomainRealTimeSrcTrafficData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeDomainRealTimeSrcHttpCodeData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDomainRealTimeSrcBpsData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDomainRealTimeReqHitRateData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDomainRealTimeQpsData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeDomainRealTimeMetric extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeDomainRealTimeHttpCodeData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDomainRealTimeByteHitRateData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDomainRealTimeBpsData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeDomainQpsData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getIp
 * @method self withIp(string $ip)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeDomainQoSRt extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getNeedSum
 * @method self withNeedSum(string $needSum)
 * @method string getPno
 * @method self withPno(string $pno)
 */
class DescribeDomainPnoData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getPath
 * @method self withPath(string $path)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeDomainPathData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeDomainLogConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 */
class DescribeDomainHttpsData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 */
class DescribeDomainHttpCodeData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 */
class DescribeDomainHitRateData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeDomainCustomLogConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeDomainCname extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeDomainCertificateInfo extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeDomainBpsData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getConfigId
 * @method self withConfigId(string $configId)
 */
class DescribeCustomLogConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class DescribeCurrentCharge95Info extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeCdnDomainLogs extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDataType
 * @method self withDataType(string $dataType)
 * @method string getArea
 * @method self withArea(string $area)
 * @method string getProtocol
 * @method self withProtocol(string $protocol)
 * @method string getTrafficType
 * @method self withTrafficType(string $trafficType)
 */
class DescribeCdnDomainBillingData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getTriggerARN
 * @method self withTriggerARN(string $triggerARN)
 */
class DeleteFCTrigger extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getTaskName
 * @method self withTaskName(string $taskName)
 * @method string getLanguage
 * @method self withLanguage(string $language)
 */
class CreateUserUsageDataExportTask extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getGroup
 * @method self withGroup(string $group)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 * @method string getType
 * @method self withType(string $type)
 * @method string getTaskName
 * @method self withTaskName(string $taskName)
 */
class CreateUsageDetailDataExportTask extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class BatchDescribeDomainBpsData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getTriggerARN
 * @method self withTriggerARN(string $triggerARN)
 * @method string getEventMetaName
 * @method self withEventMetaName(string $eventMetaName)
 * @method string getEventMetaVersion
 * @method self withEventMetaVersion(string $eventMetaVersion)
 * @method string getSourceARN
 * @method self withSourceARN(string $sourceARN)
 * @method string getRoleARN
 * @method self withRoleARN(string $roleARN)
 * @method string getNotes
 * @method self withNotes(string $notes)
 */
class AddFCTrigger extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getObjectPath
 * @method self withObjectPath(string $objectPath)
 * @method string getArea
 * @method self withArea(string $area)
 */
class PreloadObjectCaches extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAvailable
 * @method self withAvailable(string $available)
 */
class DescribeUserVipsByDomain extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDiamondDataId
 * @method self withDiamondDataId(string $diamondDataId)
 */
class IsDiamondUser extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class StartCdnDomain extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getCdnType
 * @method self withCdnType(string $cdnType)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getSources
 * @method self withSources(string $sources)
 * @method string getCheckUrl
 * @method self withCheckUrl(string $checkUrl)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method string getTopLevelDomain
 * @method self withTopLevelDomain(string $topLevelDomain)
 */
class BatchAddCdnDomain extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 * @method string getFunctions
 * @method self withFunctions(string $functions)
 */
class BatchSetCdnDomainConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeCdnUserResourcePackage extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getEnable
 * @method self withEnable(string $enable)
 * @method string getBucket
 * @method self withBucket(string $bucket)
 * @method string getPrefix
 * @method self withPrefix(string $prefix)
 */
class SetOssLogConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getTimeMerge
 * @method self withTimeMerge(string $timeMerge)
 * @method string getDomainType
 * @method self withDomainType(string $domainType)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeDomainAverageResponseTime extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 */
class BatchStartCdnDomain extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getConfigID
 * @method self withConfigID(string $configID)
 * @method string getCacheContent
 * @method self withCacheContent(string $cacheContent)
 * @method string getTTL
 * @method self withTTL(string $tTL)
 * @method string getWeight
 * @method self withWeight(string $weight)
 */
class ModifyFileCacheExpiredConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getIP
 * @method self withIP(string $iP)
 */
class DescribeIpInfo extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDomainFileSizeProportionData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getHeaderKey
 * @method self withHeaderKey(string $headerKey)
 * @method string getHeaderValue
 * @method self withHeaderValue(string $headerValue)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 */
class SetHttpHeaderConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getSources
 * @method self withSources(string $sources)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getTopLevelDomain
 * @method self withTopLevelDomain(string $topLevelDomain)
 */
class BatchUpdateCdnDomain extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDomainPvData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeCdnUserQuota extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getQuota
 * @method self withQuota(string $quota)
 * @method string getRatio
 * @method self withRatio(string $ratio)
 */
class SetUserGreenManagerConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 * @method string getFunctionNames
 * @method self withFunctionNames(string $functionNames)
 */
class BatchDeleteCdnDomainConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeRefreshQuota extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAuthType
 * @method self withAuthType(string $authType)
 * @method string getTimeOut
 * @method self withTimeOut(string $timeOut)
 * @method string getAuthAddr
 * @method self withAuthAddr(string $authAddr)
 * @method string getAuthCrash
 * @method self withAuthCrash(string $authCrash)
 * @method string getAuthEnable
 * @method self withAuthEnable(string $authEnable)
 * @method string getAuthProvider
 * @method self withAuthProvider(string $authProvider)
 * @method string getAuthPath
 * @method self withAuthPath(string $authPath)
 * @method string getAuthFileType
 * @method self withAuthFileType(string $authFileType)
 */
class SetRemoteReqAuthConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getCertName
 * @method self withCertName(string $certName)
 * @method string getCertType
 * @method self withCertType(string $certType)
 * @method string getServerCertificateStatus
 * @method self withServerCertificateStatus(string $serverCertificateStatus)
 * @method string getServerCertificate
 * @method self withServerCertificate(string $serverCertificate)
 * @method string getPrivateKey
 * @method self withPrivateKey(string $privateKey)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getForceSet
 * @method self withForceSet(string $forceSet)
 */
class SetDomainServerCertificate extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getConfigId
 * @method self withConfigId(string $configId)
 */
class DeleteSpecificConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getEnable
 * @method self withEnable(string $enable)
 * @method string getBackSrcDomain
 * @method self withBackSrcDomain(string $backSrcDomain)
 */
class SetSourceHostConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeCdnRegionAndIsp extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 */
class OpenCdnService extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 * @method string getPercent
 * @method self withPercent(string $percent)
 */
class DescribeDomainTopReferVisit extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAllowIps
 * @method self withAllowIps(string $allowIps)
 * @method string getBlockIps
 * @method self withBlockIps(string $blockIps)
 */
class SetCcConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeL2VipsByDomain extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeCdnCertificateList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class DeleteCdnDomain extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getConfigID
 * @method self withConfigID(string $configID)
 * @method string getCacheContent
 * @method self withCacheContent(string $cacheContent)
 * @method string getTTL
 * @method self withTTL(string $tTL)
 * @method string getWeight
 * @method self withWeight(string $weight)
 */
class ModifyPathCacheExpiredConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getObjectPath
 * @method self withObjectPath(string $objectPath)
 * @method string getArea
 * @method self withArea(string $area)
 */
class PushObjectCache extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class StopCdnDomain extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDomainUvData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 */
class BatchStopCdnDomain extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 */
class ModifyCdnService extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeCdnService extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getSources
 * @method self withSources(string $sources)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getTopLevelDomain
 * @method self withTopLevelDomain(string $topLevelDomain)
 */
class ModifyCdnDomain extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getFunctionNames
 * @method self withFunctionNames(string $functionNames)
 */
class DescribeCdnDomainConfigs extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getObjectPath
 * @method self withObjectPath(string $objectPath)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getObjectType
 * @method self withObjectType(string $objectType)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class DescribeRefreshTasks extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeCdnDomainDetail extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getConfigId
 * @method self withConfigId(string $configId)
 */
class DeleteHttpHeaderConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getDomainStatus
 * @method self withDomainStatus(string $domainStatus)
 * @method string getDomainSearchType
 * @method self withDomainSearchType(string $domainSearchType)
 * @method string getCdnType
 * @method self withCdnType(string $cdnType)
 * @method bool getCheckDomainShow
 * @method self withCheckDomainShow(bool $checkDomainShow)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getFuncId
 * @method self withFuncId(string $funcId)
 * @method string getFuncFilter
 * @method self withFuncFilter(string $funcFilter)
 * @method array getTag
 * @method self withTag(array $tag)
 */
class DescribeUserDomains extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAllowIps
 * @method self withAllowIps(string $allowIps)
 */
class SetIpAllowListConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getCdnType
 * @method self withCdnType(string $cdnType)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getSources
 * @method self withSources(string $sources)
 * @method string getCheckUrl
 * @method self withCheckUrl(string $checkUrl)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method string getTopLevelDomain
 * @method self withTopLevelDomain(string $topLevelDomain)
 */
class AddCdnDomain extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDiamondDataId
 * @method self withDiamondDataId(string $diamondDataId)
 */
class DescribeDiamondData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getObjectPath
 * @method self withObjectPath(string $objectPath)
 * @method string getObjectType
 * @method self withObjectType(string $objectType)
 */
class RefreshObjectCaches extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeCdnTypes extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getObjectPath
 * @method self withObjectPath(string $objectPath)
 * @method string getType
 * @method self withType(string $type)
 * @method Integer getMaxage
 * @method self withMaxage(Integer $maxage)
 */
class BlockObjectCaches extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getObjectPath
 * @method self withObjectPath(string $objectPath)
 * @method string getObjectType
 * @method self withObjectType(string $objectType)
 */
class PurgeObjectCaches extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 * @method string getLocationNames
 * @method self withLocationNames(string $locationNames)
 * @method string getIspNames
 * @method self withIspNames(string $ispNames)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeRangeDataByLocateAndIspService extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getPageType
 * @method self withPageType(string $pageType)
 * @method string getCustomPageUrl
 * @method self withCustomPageUrl(string $customPageUrl)
 */
class SetErrorPageConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getKey
 * @method self withKey(string $key)
 * @method string getValue
 * @method self withValue(string $value)
 * @method int getConfigId
 * @method self withConfigId(int $configId)
 */
class SetReqHeaderConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLocationNames
 * @method self withLocationNames(string $locationNames)
 * @method string getIspNames
 * @method self withIspNames(string $ispNames)
 * @method string getTimePoint
 * @method self withTimePoint(string $timePoint)
 */
class DescribeDomainBpsDataByTimeStamp extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getReferType
 * @method self withReferType(string $referType)
 * @method string getReferList
 * @method self withReferList(string $referList)
 * @method string getAllowEmpty
 * @method self withAllowEmpty(string $allowEmpty)
 * @method string getDisableAst
 * @method self withDisableAst(string $disableAst)
 */
class SetRefererConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getRedirectType
 * @method self withRedirectType(string $redirectType)
 */
class SetForceRedirectConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDomainISPData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getConfigId
 * @method self withConfigId(string $configId)
 */
class DeleteCacheExpiredConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getConfig
 * @method self withConfig(string $config)
 */
class DescribeUserConfigs extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getChargeItem
 * @method self withChargeItem(string $chargeItem)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeHistoryCharge95Info extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getHeaderKey
 * @method self withHeaderKey(string $headerKey)
 * @method string getHeaderValue
 * @method self withHeaderValue(string $headerValue)
 * @method string getConfigID
 * @method self withConfigID(string $configID)
 */
class ModifyHttpHeaderConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getSources
 * @method self withSources(string $sources)
 */
class DescribeDomainsBySource extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 * @method string getPercent
 * @method self withPercent(string $percent)
 */
class DescribeDomainTopUrlVisit extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDomainsUsageByDay extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 */
class DescribeDomainSrcHttpCodeData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeDomainMax95BpsData extends Roa
{
    use R;
}
