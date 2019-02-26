<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SetAliAuthConfig setAliAuthConfig($options = [])
 * @method DescribeL2VipsByDynamicDomain describeL2VipsByDynamicDomain($options = [])
 * @method DescribeDomainRealTimeTrafficData describeDomainRealTimeTrafficData($options = [])
 * @method DescribeDomainRealTimeSrcTrafficData describeDomainRealTimeSrcTrafficData($options = [])
 * @method DescribeDomainRealTimeSrcHttpCodeData describeDomainRealTimeSrcHttpCodeData($options = [])
 * @method DescribeDomainRealTimeSrcBpsData describeDomainRealTimeSrcBpsData($options = [])
 * @method DescribeDomainRealTimeHttpCodeData describeDomainRealTimeHttpCodeData($options = [])
 * @method DescribeDiamondData describeDiamondData($options = [])
 * @method DescribeCdnUserQuota describeCdnUserQuota($options = [])
 * @method DescribeDomainIspLocationDetailData describeDomainIspLocationDetailData($options = [])
 * @method DescribeDomainsByCustomLogConfig describeDomainsByCustomLogConfig($options = [])
 * @method DescribeDomainLogConfig describeDomainLogConfig($options = [])
 * @method DescribeCdnDomainBillingData describeCdnDomainBillingData($options = [])
 * @method GetDomain getDomain($options = [])
 * @method UpdateFCTrigger updateFCTrigger($options = [])
 * @method DescribeFCTrigger describeFCTrigger($options = [])
 * @method DeleteFCTrigger deleteFCTrigger($options = [])
 * @method AddFCTrigger addFCTrigger($options = [])
 * @method DescribeDomainCertificateInfo describeDomainCertificateInfo($options = [])
 * @method IsDiamondUser isDiamondUser($options = [])
 * @method DescribeCdnDomainConfigs describeCdnDomainConfigs($options = [])
 * @method SetRegexRuleConfig setRegexRuleConfig($options = [])
 * @method DescribeDomainCname describeDomainCname($options = [])
 * @method DescribeUserCustomLogConfig describeUserCustomLogConfig($options = [])
 * @method SetWaitingRoomConfig setWaitingRoomConfig($options = [])
 * @method DescribeDomainRealTimeReqHitRateData describeDomainRealTimeReqHitRateData($options = [])
 * @method DescribeDomainRealTimeQpsData describeDomainRealTimeQpsData($options = [])
 * @method DescribeDomainRealTimeByteHitRateData describeDomainRealTimeByteHitRateData($options = [])
 * @method DescribeDomainRealTimeBpsData describeDomainRealTimeBpsData($options = [])
 * @method DescribeDomainSlowRatio describeDomainSlowRatio($options = [])
 * @method ModifyUserCustomLogConfig modifyUserCustomLogConfig($options = [])
 * @method ModifyDomainCustomLogConfig modifyDomainCustomLogConfig($options = [])
 * @method ListUserCustomLogConfig listUserCustomLogConfig($options = [])
 * @method ListDomainsByLogConfigId listDomainsByLogConfigId($options = [])
 * @method DescribeDomainCustomLogConfig describeDomainCustomLogConfig($options = [])
 * @method DescribeCustomLogConfig describeCustomLogConfig($options = [])
 * @method SetPathForceTtlCodeConfig setPathForceTtlCodeConfig($options = [])
 * @method SetFileTypeForceTtlCodeConfig setFileTypeForceTtlCodeConfig($options = [])
 * @method SetIpAllowListConfig setIpAllowListConfig($options = [])
 * @method BatchDescribeDomainBpsData batchDescribeDomainBpsData($options = [])
 * @method SetUserGreenManagerConfig setUserGreenManagerConfig($options = [])
 * @method SetDomainGreenManagerConfig setDomainGreenManagerConfig($options = [])
 * @method SetHttpsOptionConfig setHttpsOptionConfig($options = [])
 * @method SetAliBusinessConfig setAliBusinessConfig($options = [])
 * @method SetVarsConfig setVarsConfig($options = [])
 * @method DescribeDomainQoSRt describeDomainQoSRt($options = [])
 * @method DescribeDomainRealTimeMetric describeDomainRealTimeMetric($options = [])
 * @method DescribeDomainPnoData describeDomainPnoData($options = [])
 * @method DescribeMacStatistic describeMacStatistic($options = [])
 * @method DescribeMacAppInfo describeMacAppInfo($options = [])
 * @method DescribeDomainMonthBillingBpsData describeDomainMonthBillingBpsData($options = [])
 * @method SetMacServiceConfig setMacServiceConfig($options = [])
 * @method DescribeLiveStreamRelayPushBitRate describeLiveStreamRelayPushBitRate($options = [])
 * @method DescribeLiveStreamOnlineUserNumByDomain describeLiveStreamOnlineUserNumByDomain($options = [])
 * @method DescribeLiveStreamHlsOnlineUserNumByDomain describeLiveStreamHlsOnlineUserNumByDomain($options = [])
 * @method DescribeLiveStreamFrameAndBitRateByDomain describeLiveStreamFrameAndBitRateByDomain($options = [])
 * @method SetL2OssKeyConfig setL2OssKeyConfig($options = [])
 * @method DescribeWafConfig describeWafConfig($options = [])
 * @method SetWafMode setWafMode($options = [])
 * @method CloseWafConfig closeWafConfig($options = [])
 * @method OpenWafConfig openWafConfig($options = [])
 * @method DescribeLiveStreamBitRateData describeLiveStreamBitRateData($options = [])
 * @method BlockObjectCaches blockObjectCaches($options = [])
 * @method DescribeLiveStreamRoomUserNumber describeLiveStreamRoomUserNumber($options = [])
 * @method DescribeLiveStreamRoomBitRate describeLiveStreamRoomBitRate($options = [])
 * @method DescribeDomainAverageResponseTime describeDomainAverageResponseTime($options = [])
 * @method SetIpBlackListConfig setIpBlackListConfig($options = [])
 * @method DescribeDomainPathData describeDomainPathData($options = [])
 * @method SetRemoveQueryStringConfig setRemoveQueryStringConfig($options = [])
 * @method SetRemoteReqAuthConfig setRemoteReqAuthConfig($options = [])
 * @method DescribeUserCustomerLabels describeUserCustomerLabels($options = [])
 * @method SetDynamicConfig setDynamicConfig($options = [])
 * @method SetReqHeaderConfig setReqHeaderConfig($options = [])
 * @method DescribeExtensiveDomainData describeExtensiveDomainData($options = [])
 * @method DescribeLiveStreamFrameInfo describeLiveStreamFrameInfo($options = [])
 * @method DescribeLivePullStreamConfig describeLivePullStreamConfig($options = [])
 * @method DescribeLiveStreamTranscodeStreamNum describeLiveStreamTranscodeStreamNum($options = [])
 * @method DescribeDomainsBySource describeDomainsBySource($options = [])
 * @method DescribeLiveSpecificDomainMapping describeLiveSpecificDomainMapping($options = [])
 * @method DeleteLiveDomainMapping deleteLiveDomainMapping($options = [])
 * @method AddLiveDomainMapping addLiveDomainMapping($options = [])
 * @method DescribeLiveStreamRelayPushErrors describeLiveStreamRelayPushErrors($options = [])
 * @method DescribeLiveStreamRelayPushData describeLiveStreamRelayPushData($options = [])
 * @method DescribeLiveStreamPushErrors describeLiveStreamPushErrors($options = [])
 * @method DescribeLiveStreamPushData describeLiveStreamPushData($options = [])
 * @method DescribeL2VipsByDomain describeL2VipsByDomain($options = [])
 * @method SetHttpErrorPageConfig setHttpErrorPageConfig($options = [])
 * @method DeleteSpecificConfig deleteSpecificConfig($options = [])
 * @method SetUserAgentAcessRestriction setUserAgentAcessRestriction($options = [])
 * @method SetLocationAccessRestriction setLocationAccessRestriction($options = [])
 * @method DescribeDomainDownstreamBpsOfEdge describeDomainDownstreamBpsOfEdge($options = [])
 * @method DescribeLiveStreamBpsData describeLiveStreamBpsData($options = [])
 * @method DescribeDomainOnlineUserNumber describeDomainOnlineUserNumber($options = [])
 * @method DescribeDomainHttpsData describeDomainHttpsData($options = [])
 * @method BatchUpdateCdnDomain batchUpdateCdnDomain($options = [])
 * @method BatchStopCdnDomain batchStopCdnDomain($options = [])
 * @method BatchStartCdnDomain batchStartCdnDomain($options = [])
 * @method BatchSetCdnDomainConfig batchSetCdnDomainConfig($options = [])
 * @method BatchDeleteCdnDomainConfig batchDeleteCdnDomainConfig($options = [])
 * @method BatchAddCdnDomain batchAddCdnDomain($options = [])
 * @method DescribeDomainUpstreamOfCenter describeDomainUpstreamOfCenter($options = [])
 * @method DescribeDomainUpstreamBpsOfEdge describeDomainUpstreamBpsOfEdge($options = [])
 * @method DescribeRangeDataByLocateAndIspService describeRangeDataByLocateAndIspService($options = [])
 * @method UpdateLiveAppSnapshotConfig updateLiveAppSnapshotConfig($options = [])
 * @method DescribeLiveStreamSnapshotInfo describeLiveStreamSnapshotInfo($options = [])
 * @method DescribeLiveSnapshotConfig describeLiveSnapshotConfig($options = [])
 * @method DeleteLiveAppSnapshotConfig deleteLiveAppSnapshotConfig($options = [])
 * @method AddLiveAppSnapshotConfig addLiveAppSnapshotConfig($options = [])
 * @method DescribeLiveStreamNumberList describeLiveStreamNumberList($options = [])
 * @method StopMixStreamsService stopMixStreamsService($options = [])
 * @method StartMixStreamsService startMixStreamsService($options = [])
 * @method DescribeLiveStreamOnlineBps describeLiveStreamOnlineBps($options = [])
 * @method DescribeLiveStreamFrameLossRatio describeLiveStreamFrameLossRatio($options = [])
 * @method DescribeDomainRealTimeData describeDomainRealTimeData($options = [])
 * @method DescribeDomainBpsDataByTimeStamp describeDomainBpsDataByTimeStamp($options = [])
 * @method DeleteLivePullStreamInfo deleteLivePullStreamInfo($options = [])
 * @method AddLivePullStreamInfo addLivePullStreamInfo($options = [])
 * @method DescribeDomainMax95BpsData describeDomainMax95BpsData($options = [])
 * @method DescribeLiveStreamsFrameRateAndBitRateData describeLiveStreamsFrameRateAndBitRateData($options = [])
 * @method DescribeLiveStreamRecordIndexFiles describeLiveStreamRecordIndexFiles($options = [])
 * @method DescribeLiveStreamRecordIndexFile describeLiveStreamRecordIndexFile($options = [])
 * @method DescribeLiveStreamRecordContent describeLiveStreamRecordContent($options = [])
 * @method DescribeLiveRecordConfig describeLiveRecordConfig($options = [])
 * @method DescribeLiveAppRecordConfig describeLiveAppRecordConfig($options = [])
 * @method DeleteLiveAppRecordConfig deleteLiveAppRecordConfig($options = [])
 * @method CreateLiveStreamRecordIndexFiles createLiveStreamRecordIndexFiles($options = [])
 * @method AddLiveAppRecordConfig addLiveAppRecordConfig($options = [])
 * @method SetForwardSchemeConfig setForwardSchemeConfig($options = [])
 * @method SetOssLogConfig setOssLogConfig($options = [])
 * @method DescribeUserConfigs describeUserConfigs($options = [])
 * @method DescribeDomainReqHitRateData describeDomainReqHitRateData($options = [])
 * @method DescribeUserVipsByDomain describeUserVipsByDomain($options = [])
 * @method DescribeHistoryCharge95Info describeHistoryCharge95Info($options = [])
 * @method DescribeCurrentCharge95Info describeCurrentCharge95Info($options = [])
 * @method DescribeCdnRegionAndIsp describeCdnRegionAndIsp($options = [])
 * @method DescribeLiveStreamTranscodeInfo describeLiveStreamTranscodeInfo($options = [])
 * @method DescribeLiveStreamLimitInfo describeLiveStreamLimitInfo($options = [])
 * @method DescribeLiveStreamDomainAppInfo describeLiveStreamDomainAppInfo($options = [])
 * @method DeleteLiveStreamTranscode deleteLiveStreamTranscode($options = [])
 * @method AddLiveStreamTranscode addLiveStreamTranscode($options = [])
 * @method DescribeLiveStreamStreamStatus describeLiveStreamStreamStatus($options = [])
 * @method SetForceRedirectConfig setForceRedirectConfig($options = [])
 * @method SetUserDomainBlackList setUserDomainBlackList($options = [])
 * @method SetUserBlackList setUserBlackList($options = [])
 * @method GetUserDomainBlackList getUserDomainBlackList($options = [])
 * @method ClearUserDomainBlackList clearUserDomainBlackList($options = [])
 * @method ClearUserBlackList clearUserBlackList($options = [])
 * @method MigrateDomainToHttpsDelivery migrateDomainToHttpsDelivery($options = [])
 * @method DescribeTopDomainsByFlow describeTopDomainsByFlow($options = [])
 * @method DescribeDomainsUsageByDay describeDomainsUsageByDay($options = [])
 * @method DescribeCdnTypes describeCdnTypes($options = [])
 * @method SetDomainServerCertificate setDomainServerCertificate($options = [])
 * @method ModifyCdnDomain modifyCdnDomain($options = [])
 * @method IsGreyUser isGreyUser($options = [])
 * @method SetWafConfig setWafConfig($options = [])
 * @method SetVideoSeekConfig setVideoSeekConfig($options = [])
 * @method SetSourceHostConfig setSourceHostConfig($options = [])
 * @method SetReqAuthConfig setReqAuthConfig($options = [])
 * @method SetRefererConfig setRefererConfig($options = [])
 * @method SetRangeConfig setRangeConfig($options = [])
 * @method SetPathCacheExpiredConfig setPathCacheExpiredConfig($options = [])
 * @method SetPageCompressConfig setPageCompressConfig($options = [])
 * @method SetOptimizeConfig setOptimizeConfig($options = [])
 * @method SetIgnoreQueryStringConfig setIgnoreQueryStringConfig($options = [])
 * @method SetHttpHeaderConfig setHttpHeaderConfig($options = [])
 * @method SetFileCacheExpiredConfig setFileCacheExpiredConfig($options = [])
 * @method SetErrorPageConfig setErrorPageConfig($options = [])
 * @method SetCcConfig setCcConfig($options = [])
 * @method PurgeObjectCaches purgeObjectCaches($options = [])
 * @method PreloadObjectCaches preloadObjectCaches($options = [])
 * @method ModifyPathCacheExpiredConfig modifyPathCacheExpiredConfig($options = [])
 * @method ModifyHttpHeaderConfig modifyHttpHeaderConfig($options = [])
 * @method ModifyFileCacheExpiredConfig modifyFileCacheExpiredConfig($options = [])
 * @method DescribeRefreshQuota describeRefreshQuota($options = [])
 * @method DescribeIpInfo describeIpInfo($options = [])
 * @method DescribeDomainWafData describeDomainWafData($options = [])
 * @method DescribeDomainWafAttackInfo describeDomainWafAttackInfo($options = [])
 * @method DescribeDomainUvData describeDomainUvData($options = [])
 * @method DescribeDomainTopUrlVisit describeDomainTopUrlVisit($options = [])
 * @method DescribeDomainTopReferVisit describeDomainTopReferVisit($options = [])
 * @method DescribeDomainTopFileTypeVisit describeDomainTopFileTypeVisit($options = [])
 * @method DescribeDomainSrcFlowData describeDomainSrcFlowData($options = [])
 * @method DescribeDomainSrcBpsData describeDomainSrcBpsData($options = [])
 * @method DescribeDomainRegionData describeDomainRegionData($options = [])
 * @method DescribeDomainQpsData describeDomainQpsData($options = [])
 * @method DescribeDomainPvData describeDomainPvData($options = [])
 * @method DescribeDomainISPData describeDomainISPData($options = [])
 * @method DescribeDomainHttpCodeData describeDomainHttpCodeData($options = [])
 * @method DescribeDomainHitRateData describeDomainHitRateData($options = [])
 * @method DescribeDomainFlowData describeDomainFlowData($options = [])
 * @method DescribeDomainFileSizeProportionData describeDomainFileSizeProportionData($options = [])
 * @method DescribeDomainConfigs describeDomainConfigs($options = [])
 * @method DescribeDomainCCData describeDomainCCData($options = [])
 * @method DescribeDomainCCAttackInfo describeDomainCCAttackInfo($options = [])
 * @method DescribeDomainBpsData describeDomainBpsData($options = [])
 * @method DeleteHttpHeaderConfig deleteHttpHeaderConfig($options = [])
 * @method DeleteCacheExpiredConfig deleteCacheExpiredConfig($options = [])
 * @method SetLiveStreamsNotifyUrlConfig setLiveStreamsNotifyUrlConfig($options = [])
 * @method DescribeLiveStreamOnlineUserNum describeLiveStreamOnlineUserNum($options = [])
 * @method ResumeLiveStream resumeLiveStream($options = [])
 * @method ForbidLiveStream forbidLiveStream($options = [])
 * @method DescribeLiveStreamsPublishList describeLiveStreamsPublishList($options = [])
 * @method DescribeLiveStreamsOnlineList describeLiveStreamsOnlineList($options = [])
 * @method DescribeLiveStreamsControlHistory describeLiveStreamsControlHistory($options = [])
 * @method DescribeLiveStreamsBlockList describeLiveStreamsBlockList($options = [])
 * @method DescribeCdnDomainLogs describeCdnDomainLogs($options = [])
 * @method DescribeCdnDomainDetail describeCdnDomainDetail($options = [])
 * @method DescribeCdnDomainBaseDetail describeCdnDomainBaseDetail($options = [])
 * @method DeleteCdnDomain deleteCdnDomain($options = [])
 * @method AddCdnDomain addCdnDomain($options = [])
 * @method PushObjectCache pushObjectCache($options = [])
 * @method OpenCdnService openCdnService($options = [])
 * @method ModifyCdnService modifyCdnService($options = [])
 * @method DescribeUserDomains describeUserDomains($options = [])
 * @method DescribeRefreshTasks describeRefreshTasks($options = [])
 * @method DescribeOneMinuteData describeOneMinuteData($options = [])
 * @method DescribeCdnService describeCdnService($options = [])
 * @method DescribeCdnMonitorData describeCdnMonitorData($options = [])
 * @method StopCdnDomain stopCdnDomain($options = [])
 * @method StartCdnDomain startCdnDomain($options = [])
 * @method RefreshObjectCaches refreshObjectCaches($options = [])
 */
class V20141111
{
    use ApiResolverTrait;
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeL2VipsByDynamicDomain extends Roa
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
 */
class DescribeCdnUserQuota extends Roa
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
 */
class DescribeDomainLogConfig extends Roa
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
 */
class GetDomain extends Roa
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
 * @method string getFunctionARN
 * @method self withFunctionARN(string $functionARN)
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
 * @method string getTriggerARN
 * @method self withTriggerARN(string $triggerARN)
 * @method string getEventMetaName
 * @method self withEventMetaName(string $eventMetaName)
 * @method string getEventMetaVersion
 * @method self withEventMetaVersion(string $eventMetaVersion)
 * @method string getSourceARN
 * @method self withSourceARN(string $sourceARN)
 * @method string getFunctionARN
 * @method self withFunctionARN(string $functionARN)
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
 */
class DescribeDomainCname extends Roa
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
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
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
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 */
class DescribeDomainMonthBillingBpsData extends Roa
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
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 */
class DescribeLiveStreamRelayPushBitRate extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getHlsSwitch
 * @method self withHlsSwitch(string $hlsSwitch)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class DescribeLiveStreamOnlineUserNumByDomain extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getHlsSwitch
 * @method self withHlsSwitch(string $hlsSwitch)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class DescribeLiveStreamHlsOnlineUserNumByDomain extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class DescribeLiveStreamFrameAndBitRateByDomain extends Roa
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
 * @method string getPrivateOssAuth
 * @method self withPrivateOssAuth(string $privateOssAuth)
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
 */
class DescribeWafConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAffectMode
 * @method self withAffectMode(string $affectMode)
 */
class SetWafMode extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class CloseWafConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class OpenWafConfig extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveStreamBitRateData extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getHlsSwitch
 * @method self withHlsSwitch(string $hlsSwitch)
 */
class DescribeLiveStreamRoomUserNumber extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveStreamRoomBitRate extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getTimeMerge
 * @method self withTimeMerge(string $timeMerge)
 * @method string getOutString
 * @method self withOutString(string $outString)
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getBlockIps
 * @method self withBlockIps(string $blockIps)
 */
class SetIpBlackListConfig extends Roa
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
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
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
 * @method int getUid
 * @method self withUid(int $uid)
 */
class DescribeUserCustomerLabels extends Roa
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
 * @method string getDynamicOrigin
 * @method self withDynamicOrigin(string $dynamicOrigin)
 * @method string getStaticType
 * @method self withStaticType(string $staticType)
 * @method string getStaticUri
 * @method self withStaticUri(string $staticUri)
 * @method string getStaticPath
 * @method self withStaticPath(string $staticPath)
 * @method string getDynamicCacheControl
 * @method self withDynamicCacheControl(string $dynamicCacheControl)
 */
class SetDynamicConfig extends Roa
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
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveStreamFrameInfo extends Roa
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
class DescribeLivePullStreamConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getPullDomain
 * @method self withPullDomain(string $pullDomain)
 * @method string getPushDomain
 * @method self withPushDomain(string $pushDomain)
 */
class DescribeLiveStreamTranscodeStreamNum extends Roa
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
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getPushDomain
 * @method self withPushDomain(string $pushDomain)
 * @method string getPullDomain
 * @method self withPullDomain(string $pullDomain)
 */
class DescribeLiveSpecificDomainMapping extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getPushDomain
 * @method self withPushDomain(string $pushDomain)
 * @method string getPullDomain
 * @method self withPullDomain(string $pullDomain)
 */
class DeleteLiveDomainMapping extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getPushDomain
 * @method self withPushDomain(string $pushDomain)
 * @method string getPullDomain
 * @method self withPullDomain(string $pullDomain)
 */
class AddLiveDomainMapping extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getRelayDomain
 * @method self withRelayDomain(string $relayDomain)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveStreamRelayPushErrors extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getRelayDomain
 * @method self withRelayDomain(string $relayDomain)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveStreamRelayPushData extends Roa
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
class DescribeLiveStreamPushErrors extends Roa
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
class DescribeLiveStreamPushData extends Roa
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
 * @method string getPageUrl
 * @method self withPageUrl(string $pageUrl)
 * @method string getErrorCode
 * @method self withErrorCode(string $errorCode)
 */
class SetHttpErrorPageConfig extends Roa
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
 * @method string getFunctionName
 * @method self withFunctionName(string $functionName)
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
 * @method string getUserAgent
 * @method self withUserAgent(string $userAgent)
 * @method string getType
 * @method self withType(string $type)
 */
class SetUserAgentAcessRestriction extends Roa
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
 * @method string getLocation
 * @method self withLocation(string $location)
 * @method string getType
 * @method self withType(string $type)
 */
class SetLocationAccessRestriction extends Roa
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
class DescribeDomainDownstreamBpsOfEdge extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveStreamBpsData extends Roa
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
class DescribeDomainOnlineUserNumber extends Roa
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
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDomainType
 * @method self withDomainType(string $domainType)
 * @method string getTimeMerge
 * @method self withTimeMerge(string $timeMerge)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getCls
 * @method self withCls(string $cls)
 * @method string getFixTimeGap
 * @method self withFixTimeGap(string $fixTimeGap)
 */
class DescribeDomainHttpsData extends Roa
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
 * @method string getSourceType
 * @method self withSourceType(string $sourceType)
 * @method string getSources
 * @method self withSources(string $sources)
 * @method Integer getSourcePort
 * @method self withSourcePort(Integer $sourcePort)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getPriorities
 * @method self withPriorities(string $priorities)
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 * @method string getTopLevelDomain
 * @method self withTopLevelDomain(string $topLevelDomain)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getCdnType
 * @method self withCdnType(string $cdnType)
 * @method string getSourceType
 * @method self withSourceType(string $sourceType)
 * @method string getSources
 * @method self withSources(string $sources)
 * @method Integer getSourcePort
 * @method self withSourcePort(Integer $sourcePort)
 * @method string getCheckUrl
 * @method self withCheckUrl(string $checkUrl)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method string getPriorities
 * @method self withPriorities(string $priorities)
 */
class BatchAddCdnDomain extends Roa
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
class DescribeDomainUpstreamOfCenter extends Roa
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
class DescribeDomainUpstreamBpsOfEdge extends Roa
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
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method Integer getTimeInterval
 * @method self withTimeInterval(Integer $timeInterval)
 * @method string getOssEndpoint
 * @method self withOssEndpoint(string $ossEndpoint)
 * @method string getOssBucket
 * @method self withOssBucket(string $ossBucket)
 * @method string getOverwriteOssObject
 * @method self withOverwriteOssObject(string $overwriteOssObject)
 * @method string getSequenceOssObject
 * @method self withSequenceOssObject(string $sequenceOssObject)
 */
class UpdateLiveAppSnapshotConfig extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method Integer getLimit
 * @method self withLimit(Integer $limit)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveStreamSnapshotInfo extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOrder
 * @method self withOrder(string $order)
 */
class DescribeLiveSnapshotConfig extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 */
class DeleteLiveAppSnapshotConfig extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method Integer getTimeInterval
 * @method self withTimeInterval(Integer $timeInterval)
 * @method string getOssEndpoint
 * @method self withOssEndpoint(string $ossEndpoint)
 * @method string getOssBucket
 * @method self withOssBucket(string $ossBucket)
 * @method string getOverwriteOssObject
 * @method self withOverwriteOssObject(string $overwriteOssObject)
 * @method string getSequenceOssObject
 * @method self withSequenceOssObject(string $sequenceOssObject)
 */
class AddLiveAppSnapshotConfig extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveStreamNumberList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getMainDomainName
 * @method self withMainDomainName(string $mainDomainName)
 * @method string getMainAppName
 * @method self withMainAppName(string $mainAppName)
 * @method string getMainStreamName
 * @method self withMainStreamName(string $mainStreamName)
 * @method string getMixDomainName
 * @method self withMixDomainName(string $mixDomainName)
 * @method string getMixAppName
 * @method self withMixAppName(string $mixAppName)
 * @method string getMixStreamName
 * @method self withMixStreamName(string $mixStreamName)
 */
class StopMixStreamsService extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getMainDomainName
 * @method self withMainDomainName(string $mainDomainName)
 * @method string getMainAppName
 * @method self withMainAppName(string $mainAppName)
 * @method string getMainStreamName
 * @method self withMainStreamName(string $mainStreamName)
 * @method string getMixDomainName
 * @method self withMixDomainName(string $mixDomainName)
 * @method string getMixAppName
 * @method self withMixAppName(string $mixAppName)
 * @method string getMixStreamName
 * @method self withMixStreamName(string $mixStreamName)
 * @method string getMixTemplate
 * @method self withMixTemplate(string $mixTemplate)
 * @method string getMixType
 * @method self withMixType(string $mixType)
 */
class StartMixStreamsService extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveStreamOnlineBps extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveStreamFrameLossRatio extends Roa
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
 * @method string getField
 * @method self withField(string $field)
 */
class DescribeDomainRealTimeData extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 */
class DeleteLivePullStreamInfo extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getSourceUrl
 * @method self withSourceUrl(string $sourceUrl)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class AddLivePullStreamInfo extends Roa
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

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveStreamsFrameRateAndBitRateData extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveStreamRecordIndexFiles extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getRecordId
 * @method self withRecordId(string $recordId)
 */
class DescribeLiveStreamRecordIndexFile extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveStreamRecordContent extends Roa
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
class DescribeLiveRecordConfig extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 */
class DescribeLiveAppRecordConfig extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 */
class DeleteLiveAppRecordConfig extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getOssEndpoint
 * @method self withOssEndpoint(string $ossEndpoint)
 * @method string getOssBucket
 * @method self withOssBucket(string $ossBucket)
 * @method string getOssObject
 * @method self withOssObject(string $ossObject)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class CreateLiveStreamRecordIndexFiles extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getOssEndpoint
 * @method self withOssEndpoint(string $ossEndpoint)
 * @method string getOssBucket
 * @method self withOssBucket(string $ossBucket)
 * @method string getOssObjectPrefix
 * @method self withOssObjectPrefix(string $ossObjectPrefix)
 */
class AddLiveAppRecordConfig extends Roa
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
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
 */
class DescribeCurrentCharge95Info extends Roa
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
 * @method string getDomainTranscodeName
 * @method self withDomainTranscodeName(string $domainTranscodeName)
 */
class DescribeLiveStreamTranscodeInfo extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getLimitDomain
 * @method self withLimitDomain(string $limitDomain)
 */
class DescribeLiveStreamLimitInfo extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getAppDomain
 * @method self withAppDomain(string $appDomain)
 */
class DescribeLiveStreamDomainAppInfo extends Roa
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
 * @method string getDomain
 * @method self withDomain(string $domain)
 * @method string getTemplate
 * @method self withTemplate(string $template)
 * @method string getApp
 * @method self withApp(string $app)
 */
class DeleteLiveStreamTranscode extends Roa
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
 * @method string getDomain
 * @method self withDomain(string $domain)
 * @method string getTemplate
 * @method self withTemplate(string $template)
 * @method string getRecord
 * @method self withRecord(string $record)
 * @method string getSnapshot
 * @method self withSnapshot(string $snapshot)
 * @method string getApp
 * @method self withApp(string $app)
 */
class AddLiveStreamTranscode extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 */
class DescribeLiveStreamStreamStatus extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class SetUserDomainBlackList extends Roa
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
 * @method string getConfigUrl
 * @method self withConfigUrl(string $configUrl)
 */
class SetUserBlackList extends Roa
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
 */
class GetUserDomainBlackList extends Roa
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
 */
class ClearUserDomainBlackList extends Roa
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
class ClearUserBlackList extends Roa
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
 * @method string getServerCertificate
 * @method self withServerCertificate(string $serverCertificate)
 * @method string getPrivateKey
 * @method self withPrivateKey(string $privateKey)
 */
class MigrateDomainToHttpsDelivery extends Roa
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getCertName
 * @method self withCertName(string $certName)
 * @method string getServerCertificateStatus
 * @method self withServerCertificateStatus(string $serverCertificateStatus)
 * @method string getServerCertificate
 * @method self withServerCertificate(string $serverCertificate)
 * @method string getPrivateKey
 * @method self withPrivateKey(string $privateKey)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getCertType
 * @method self withCertType(string $certType)
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
 * @method string getSourceType
 * @method self withSourceType(string $sourceType)
 * @method Integer getSourcePort
 * @method self withSourcePort(Integer $sourcePort)
 * @method string getSources
 * @method self withSources(string $sources)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getPriorities
 * @method self withPriorities(string $priorities)
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class IsGreyUser extends Roa
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
 */
class SetWafConfig extends Roa
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
 */
class SetVideoSeekConfig extends Roa
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
 * @method string getEnable
 * @method self withEnable(string $enable)
 */
class SetRangeConfig extends Roa
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
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
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
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
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
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
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
 * @method string getCacheContent
 * @method self withCacheContent(string $cacheContent)
 * @method string getTTL
 * @method self withTTL(string $tTL)
 * @method string getWeight
 * @method self withWeight(string $weight)
 */
class SetFileCacheExpiredConfig extends Roa
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
class DescribeDomainWafData extends Roa
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
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeDomainWafAttackInfo extends Roa
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 */
class DescribeDomainTopUrlVisit extends Roa
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
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
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
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 */
class DescribeDomainTopFileTypeVisit extends Roa
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
 * @method string getTimeMerge
 * @method self withTimeMerge(string $timeMerge)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getFixTimeGap
 * @method self withFixTimeGap(string $fixTimeGap)
 */
class DescribeDomainSrcFlowData extends Roa
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
 * @method string getTimeMerge
 * @method self withTimeMerge(string $timeMerge)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getFixTimeGap
 * @method self withFixTimeGap(string $fixTimeGap)
 */
class DescribeDomainSrcBpsData extends Roa
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
class DescribeDomainQpsData extends Roa
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
 * @method string getTimeMerge
 * @method self withTimeMerge(string $timeMerge)
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
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getTimeMerge
 * @method self withTimeMerge(string $timeMerge)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getDomainType
 * @method self withDomainType(string $domainType)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getFixTimeGap
 * @method self withFixTimeGap(string $fixTimeGap)
 */
class DescribeDomainFlowData extends Roa
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
 * @method string getConfigList
 * @method self withConfigList(string $configList)
 */
class DescribeDomainConfigs extends Roa
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
class DescribeDomainCCData extends Roa
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
class DescribeDomainCCAttackInfo extends Roa
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
 * @method string getTimeMerge
 * @method self withTimeMerge(string $timeMerge)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getDomainType
 * @method self withDomainType(string $domainType)
 * @method string getFixTimeGap
 * @method self withFixTimeGap(string $fixTimeGap)
 */
class DescribeDomainBpsData extends Roa
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getCacheType
 * @method self withCacheType(string $cacheType)
 * @method string getConfigID
 * @method self withConfigID(string $configID)
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getNotifyUrl
 * @method self withNotifyUrl(string $notifyUrl)
 */
class SetLiveStreamsNotifyUrlConfig extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getHlsSwitch
 * @method self withHlsSwitch(string $hlsSwitch)
 */
class DescribeLiveStreamOnlineUserNum extends Roa
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
 * @method string getLiveStreamType
 * @method self withLiveStreamType(string $liveStreamType)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 */
class ResumeLiveStream extends Roa
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
 * @method string getLiveStreamType
 * @method self withLiveStreamType(string $liveStreamType)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getResumeTime
 * @method self withResumeTime(string $resumeTime)
 */
class ForbidLiveStream extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 */
class DescribeLiveStreamsPublishList extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method string getStreamType
 * @method self withStreamType(string $streamType)
 */
class DescribeLiveStreamsOnlineList extends Roa
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeLiveStreamsControlHistory extends Roa
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
class DescribeLiveStreamsBlockList extends Roa
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
 * @method string getLogDay
 * @method self withLogDay(string $logDay)
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
 */
class DescribeCdnDomainBaseDetail extends Roa
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getCdnType
 * @method self withCdnType(string $cdnType)
 * @method string getTopLevelDomain
 * @method self withTopLevelDomain(string $topLevelDomain)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getSourceType
 * @method self withSourceType(string $sourceType)
 * @method string getSources
 * @method self withSources(string $sources)
 * @method Integer getSourcePort
 * @method self withSourcePort(Integer $sourcePort)
 * @method string getCheckUrl
 * @method self withCheckUrl(string $checkUrl)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method string getPriorities
 * @method self withPriorities(string $priorities)
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
 * @method string getSources
 * @method self withSources(string $sources)
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
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getObjectPath
 * @method self withObjectPath(string $objectPath)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getObjectType
 * @method self withObjectType(string $objectType)
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
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getDataTime
 * @method self withDataTime(string $dataTime)
 */
class DescribeOneMinuteData extends Roa
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
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeCdnMonitorData extends Roa
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
 */
class StartCdnDomain extends Roa
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
