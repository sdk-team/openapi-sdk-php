<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method RepeatList getResourceId
 * @method self withResourceId
 * @method string getResourceType
 * @method self withResourceType
 * @method RepeatList getTag
 * @method self withTag
 */
final class TagResources extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class DescribeUserTags extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method RepeatList getResourceId
 * @method self withResourceId
 * @method string getResourceType
 * @method self withResourceType
 * @method RepeatList getTag
 * @method self withTag
 * @method string getScope
 * @method self withScope
 */
final class DescribeTagResources extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method RepeatList getResourceId
 * @method self withResourceId
 * @method string getResourceType
 * @method self withResourceType
 * @method RepeatList getTagKey
 * @method self withTagKey
 */
final class UntagResources extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getModuleFilterCondition
 * @method self withModuleFilterCondition
 * @method Long getConfigId
 * @method self withConfigId
 */
final class SetSkipModuleConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 */
final class DescribeUserCdnStatus extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getCertName
 * @method self withCertName
 * @method string getCertType
 * @method self withCertType
 * @method string getSSLProtocol
 * @method self withSSLProtocol
 * @method string getSSLPub
 * @method self withSSLPub
 * @method string getSSLPri
 * @method self withSSLPri
 * @method string getRegion
 * @method self withRegion
 * @method string getForceSet
 * @method self withForceSet
 */
final class BatchSetCdnDomainServerCertificate extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDimension
 * @method self withDimension
 * @method string getArea
 * @method self withArea
 */
final class DescribeCdnUserBillPrediction extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeCdnUserBillType extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeCdnUserBillHistory extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getTaskId
 * @method self withTaskId
 */
final class DeleteUsageDetailDataExportTask extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getTaskId
 * @method self withTaskId
 */
final class DeleteUserUsageDataExportTask extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getProject
 * @method self withProject
 * @method string getLogstore
 * @method self withLogstore
 * @method string getRegion
 * @method self withRegion
 * @method string getDomain
 * @method self withDomain
 */
final class ModifyRealtimeLogDelivery extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class ListRealtimeLogDeliveryInfos extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomain
 * @method self withDomain
 */
final class EnableRealtimeLogDelivery extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomain
 * @method self withDomain
 */
final class DisableRealtimeLogDelivery extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class DescribeRealtimeLogAuthorized extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomain
 * @method self withDomain
 */
final class DescribeDomainRealtimeLogDelivery extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomain
 * @method self withDomain
 * @method string getProject
 * @method self withProject
 * @method string getLogstore
 * @method self withLogstore
 * @method string getRegion
 * @method self withRegion
 */
final class DeleteRealtimeLogDelivery extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getProject
 * @method self withProject
 * @method string getLogstore
 * @method self withLogstore
 * @method string getRegion
 * @method self withRegion
 * @method string getDomain
 * @method self withDomain
 */
final class CreateRealTimeLogDelivery extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class ListRealtimeLogDelivery extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getProject
 * @method self withProject
 * @method string getLogstore
 * @method self withLogstore
 * @method string getRegion
 * @method self withRegion
 */
final class ListRealtimeLogDeliveryDomains extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getInterval
 * @method self withInterval
 * @method string getProject
 * @method self withProject
 * @method string getLogStore
 * @method self withLogStore
 */
final class DescribeRealtimeDeliveryAcc extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeDomainIspLocationDetailData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getEventMetaName
 * @method self withEventMetaName
 * @method string getEventMetaVersion
 * @method self withEventMetaVersion
 */
final class ListFCTrigger extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getCertName
 * @method self withCertName
 */
final class DescribeCdnCertificateDetail extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAuthType
 * @method self withAuthType
 * @method string getKey1
 * @method self withKey1
 * @method string getKey2
 * @method self withKey2
 * @method string getTimeOut
 * @method self withTimeOut
 * @method string getAuthRemoteDesc
 * @method self withAuthRemoteDesc
 */
final class SetReqAuthConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getTriggerARN
 * @method self withTriggerARN
 * @method string getSourceARN
 * @method self withSourceARN
 * @method string getRoleARN
 * @method self withRoleARN
 * @method string getNotes
 * @method self withNotes
 */
final class UpdateFCTrigger extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getWaitUri
 * @method self withWaitUri
 * @method Integer getAllowPct
 * @method self withAllowPct
 * @method Integer getMaxTimeWait
 * @method self withMaxTimeWait
 * @method Integer getGapTime
 * @method self withGapTime
 * @method string getWaitUrl
 * @method self withWaitUrl
 */
final class SetWaitingRoomConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method Long getConfigId
 * @method self withConfigId
 * @method string getEnable
 * @method self withEnable
 */
final class SetWafConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method Long getConfigId
 * @method self withConfigId
 * @method string getEnable
 * @method self withEnable
 */
final class SetVideoSeekConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getVarName
 * @method self withVarName
 * @method string getVarValue
 * @method self withVarValue
 * @method Long getConfigId
 * @method self withConfigId
 */
final class SetVarsConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getUserAgent
 * @method self withUserAgent
 * @method string getType
 * @method self withType
 * @method Long getConfigId
 * @method self withConfigId
 */
final class SetUserAgentAcessRestriction extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method Long getConfigId
 * @method self withConfigId
 * @method string getAliRemoveArgs
 * @method self withAliRemoveArgs
 * @method string getKeepOssArgs
 * @method self withKeepOssArgs
 */
final class SetRemoveQueryStringConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getEnabled
 * @method self withEnabled
 * @method string getUri
 * @method self withUri
 * @method string getOrigin
 * @method self withOrigin
 * @method Long getConfigId
 * @method self withConfigId
 */
final class SetRegexRuleConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getEnable
 * @method self withEnable
 * @method Long getConfigId
 * @method self withConfigId
 */
final class SetRangeConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getPath
 * @method self withPath
 * @method string getCodeString
 * @method self withCodeString
 */
final class SetPathForceTtlCodeConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getCacheContent
 * @method self withCacheContent
 * @method string getTTL
 * @method self withTTL
 * @method string getWeight
 * @method self withWeight
 */
final class SetPathCacheExpiredConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method Long getConfigId
 * @method self withConfigId
 * @method string getEnable
 * @method self withEnable
 */
final class SetPageCompressConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method Long getConfigId
 * @method self withConfigId
 * @method string getEnable
 * @method self withEnable
 */
final class SetOptimizeConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getEnabled
 * @method self withEnabled
 * @method string getProcessResult
 * @method self withProcessResult
 * @method string getAppList
 * @method self withAppList
 */
final class SetMacServiceConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getPrivateOssAuth
 * @method self withPrivateOssAuth
 * @method Long getConfigId
 * @method self withConfigId
 */
final class SetL2OssKeyConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getBlockIps
 * @method self withBlockIps
 * @method Long getConfigId
 * @method self withConfigId
 */
final class SetIpBlackListConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method Long getConfigId
 * @method self withConfigId
 * @method string getEnable
 * @method self withEnable
 * @method string getHashKeyArgs
 * @method self withHashKeyArgs
 * @method string getKeepOssArgs
 * @method self withKeepOssArgs
 */
final class SetIgnoreQueryStringConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method Long getConfigId
 * @method self withConfigId
 * @method string getHttp2
 * @method self withHttp2
 */
final class SetHttpsOptionConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getErrorCode
 * @method self withErrorCode
 * @method string getPageUrl
 * @method self withPageUrl
 * @method Long getConfigId
 * @method self withConfigId
 */
final class SetHttpErrorPageConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method Long getConfigId
 * @method self withConfigId
 * @method string getEnable
 * @method self withEnable
 * @method string getSchemeOrigin
 * @method self withSchemeOrigin
 * @method string getSchemeOriginPort
 * @method self withSchemeOriginPort
 */
final class SetForwardSchemeConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getFileType
 * @method self withFileType
 * @method string getCodeString
 * @method self withCodeString
 */
final class SetFileTypeForceTtlCodeConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method Long getConfigId
 * @method self withConfigId
 * @method string getCacheContent
 * @method self withCacheContent
 * @method string getTTL
 * @method self withTTL
 */
final class SetFileCacheExpiredConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getEnable
 * @method self withEnable
 */
final class SetDomainGreenManagerConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAliBusinessType
 * @method self withAliBusinessType
 * @method string getAliBusinessTable
 * @method self withAliBusinessTable
 * @method Long getConfigId
 * @method self withConfigId
 */
final class SetAliBusinessConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAuthType
 * @method self withAuthType
 * @method string getAliAuthDual
 * @method self withAliAuthDual
 * @method Long getConfigId
 * @method self withConfigId
 */
final class SetAliAuthConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getConfigId
 * @method self withConfigId
 * @method string getTag
 * @method self withTag
 */
final class ModifyUserCustomLogConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getConfigId
 * @method self withConfigId
 */
final class ModifyDomainCustomLogConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class ListUserCustomLogConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getConfigId
 * @method self withConfigId
 */
final class ListDomainsByLogConfigId extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getPageSize
 * @method self withPageSize
 * @method string getPageNumber
 * @method self withPageNumber
 */
final class DescribeUserUsageDetailDataExportTask extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getPageSize
 * @method self withPageSize
 * @method string getPageNumber
 * @method self withPageNumber
 */
final class DescribeUserUsageDataExportTask extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class DescribeUserCustomLogConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getProduct
 * @method self withProduct
 * @method Long getLimit
 * @method self withLimit
 */
final class DescribeTopDomainsByFlow extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getRegion
 * @method self withRegion
 * @method string getCarrierOperator
 * @method self withCarrierOperator
 * @method string getInterval
 * @method self withInterval
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getProtocol
 * @method self withProtocol
 */
final class DescribeMacStatistic extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class DescribeMacAppInfo extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getTriggerARN
 * @method self withTriggerARN
 */
final class DescribeFCTrigger extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getExtensiveDomain
 * @method self withExtensiveDomain
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeExtensiveDomainData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getType
 * @method self withType
 * @method string getDataProtocol
 * @method self withDataProtocol
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getArea
 * @method self withArea
 * @method string getField
 * @method self withField
 */
final class DescribeDomainUsageData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getInterval
 * @method self withInterval
 * @method string getIspNameEn
 * @method self withIspNameEn
 * @method string getLocationNameEn
 * @method self withLocationNameEn
 */
final class DescribeDomainTrafficData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getInterval
 * @method self withInterval
 */
final class DescribeDomainSrcTrafficData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getInterval
 * @method self withInterval
 */
final class DescribeDomainSrcBpsData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDomainName
 * @method self withDomainName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getStartTime
 * @method self withStartTime
 */
final class DescribeDomainSlowRatio extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getConfigId
 * @method self withConfigId
 */
final class DescribeDomainsByCustomLogConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getInterval
 * @method self withInterval
 */
final class DescribeDomainReqHitRateData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeDomainRegionData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeDomainRealTimeTrafficData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeDomainRealTimeSrcTrafficData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getIspNameEn
 * @method self withIspNameEn
 * @method string getLocationNameEn
 * @method self withLocationNameEn
 */
final class DescribeDomainRealTimeSrcHttpCodeData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeDomainRealTimeSrcBpsData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeDomainRealTimeReqHitRateData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getIspNameEn
 * @method self withIspNameEn
 * @method string getLocationNameEn
 * @method self withLocationNameEn
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeDomainRealTimeQpsData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeDomainRealTimeMetric extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getIspNameEn
 * @method self withIspNameEn
 * @method string getLocationNameEn
 * @method self withLocationNameEn
 */
final class DescribeDomainRealTimeHttpCodeData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeDomainRealTimeByteHitRateData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getIspNameEn
 * @method self withIspNameEn
 * @method string getLocationNameEn
 * @method self withLocationNameEn
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeDomainRealTimeBpsData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getInterval
 * @method self withInterval
 * @method string getIspNameEn
 * @method self withIspNameEn
 * @method string getLocationNameEn
 * @method self withLocationNameEn
 */
final class DescribeDomainQpsData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getIp
 * @method self withIp
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeDomainQoSRt extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getNeedSum
 * @method self withNeedSum
 * @method string getPno
 * @method self withPno
 */
final class DescribeDomainPnoData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getPath
 * @method self withPath
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeDomainPathData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeDomainLogConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainNames
 * @method self withDomainNames
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getInterval
 * @method self withInterval
 */
final class DescribeDomainHttpsData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getInterval
 * @method self withInterval
 */
final class DescribeDomainHttpCodeData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getInterval
 * @method self withInterval
 */
final class DescribeDomainHitRateData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeDomainCustomLogConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeDomainCname extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeDomainCertificateInfo extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getInterval
 * @method self withInterval
 * @method string getIspNameEn
 * @method self withIspNameEn
 * @method string getLocationNameEn
 * @method self withLocationNameEn
 */
final class DescribeDomainBpsData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getConfigId
 * @method self withConfigId
 */
final class DescribeCustomLogConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class DescribeCurrentCharge95Info extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method Long getPageSize
 * @method self withPageSize
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeCdnDomainLogs extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDataType
 * @method self withDataType
 * @method string getArea
 * @method self withArea
 * @method string getProtocol
 * @method self withProtocol
 * @method string getTrafficType
 * @method self withTrafficType
 */
final class DescribeCdnDomainBillingData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getTriggerARN
 * @method self withTriggerARN
 */
final class DeleteFCTrigger extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getTaskName
 * @method self withTaskName
 * @method string getLanguage
 * @method self withLanguage
 */
final class CreateUserUsageDataExportTask extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getGroup
 * @method self withGroup
 * @method string getDomainNames
 * @method self withDomainNames
 * @method string getType
 * @method self withType
 * @method string getTaskName
 * @method self withTaskName
 */
final class CreateUsageDetailDataExportTask extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class BatchDescribeDomainBpsData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getTriggerARN
 * @method self withTriggerARN
 * @method string getEventMetaName
 * @method self withEventMetaName
 * @method string getEventMetaVersion
 * @method self withEventMetaVersion
 * @method string getSourceARN
 * @method self withSourceARN
 * @method string getRoleARN
 * @method self withRoleARN
 * @method string getNotes
 * @method self withNotes
 */
final class AddFCTrigger extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getObjectPath
 * @method self withObjectPath
 * @method string getArea
 * @method self withArea
 */
final class PreloadObjectCaches extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAvailable
 * @method self withAvailable
 */
final class DescribeUserVipsByDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDiamondDataId
 * @method self withDiamondDataId
 */
final class IsDiamondUser extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 */
final class StartCdnDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getCdnType
 * @method self withCdnType
 * @method string getDomainName
 * @method self withDomainName
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method string getSources
 * @method self withSources
 * @method string getCheckUrl
 * @method self withCheckUrl
 * @method string getScope
 * @method self withScope
 * @method string getTopLevelDomain
 * @method self withTopLevelDomain
 */
final class BatchAddCdnDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainNames
 * @method self withDomainNames
 * @method string getFunctions
 * @method self withFunctions
 */
final class BatchSetCdnDomainConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 */
final class DescribeCdnUserResourcePackage extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getEnable
 * @method self withEnable
 * @method string getBucket
 * @method self withBucket
 * @method string getPrefix
 * @method self withPrefix
 */
final class SetOssLogConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getTimeMerge
 * @method self withTimeMerge
 * @method string getDomainType
 * @method self withDomainType
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getInterval
 * @method self withInterval
 * @method string getIspNameEn
 * @method self withIspNameEn
 * @method string getLocationNameEn
 * @method self withLocationNameEn
 */
final class DescribeDomainAverageResponseTime extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainNames
 * @method self withDomainNames
 */
final class BatchStartCdnDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getConfigID
 * @method self withConfigID
 * @method string getCacheContent
 * @method self withCacheContent
 * @method string getTTL
 * @method self withTTL
 * @method string getWeight
 * @method self withWeight
 */
final class ModifyFileCacheExpiredConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getIP
 * @method self withIP
 */
final class DescribeIpInfo extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeDomainFileSizeProportionData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getHeaderKey
 * @method self withHeaderKey
 * @method string getHeaderValue
 * @method self withHeaderValue
 * @method Long getConfigId
 * @method self withConfigId
 */
final class SetHttpHeaderConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getSources
 * @method self withSources
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method string getTopLevelDomain
 * @method self withTopLevelDomain
 */
final class BatchUpdateCdnDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeDomainPvData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 */
final class DescribeCdnUserQuota extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getQuota
 * @method self withQuota
 * @method string getRatio
 * @method self withRatio
 */
final class SetUserGreenManagerConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainNames
 * @method self withDomainNames
 * @method string getFunctionNames
 * @method self withFunctionNames
 */
final class BatchDeleteCdnDomainConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 */
final class DescribeRefreshQuota extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAuthType
 * @method self withAuthType
 * @method string getTimeOut
 * @method self withTimeOut
 * @method string getAuthAddr
 * @method self withAuthAddr
 * @method string getAuthCrash
 * @method self withAuthCrash
 * @method string getAuthEnable
 * @method self withAuthEnable
 * @method string getAuthProvider
 * @method self withAuthProvider
 * @method string getAuthPath
 * @method self withAuthPath
 * @method string getAuthFileType
 * @method self withAuthFileType
 */
final class SetRemoteReqAuthConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getCertName
 * @method self withCertName
 * @method string getCertType
 * @method self withCertType
 * @method string getServerCertificateStatus
 * @method self withServerCertificateStatus
 * @method string getServerCertificate
 * @method self withServerCertificate
 * @method string getPrivateKey
 * @method self withPrivateKey
 * @method string getRegion
 * @method self withRegion
 * @method string getForceSet
 * @method self withForceSet
 */
final class SetDomainServerCertificate extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getConfigId
 * @method self withConfigId
 */
final class DeleteSpecificConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getEnable
 * @method self withEnable
 * @method string getBackSrcDomain
 * @method self withBackSrcDomain
 */
final class SetSourceHostConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 */
final class DescribeCdnRegionAndIsp extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getInternetChargeType
 * @method self withInternetChargeType
 */
final class OpenCdnService extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getSortBy
 * @method self withSortBy
 * @method string getPercent
 * @method self withPercent
 */
final class DescribeDomainTopReferVisit extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAllowIps
 * @method self withAllowIps
 * @method string getBlockIps
 * @method self withBlockIps
 */
final class SetCcConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeL2VipsByDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeCdnCertificateList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 */
final class DeleteCdnDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getConfigID
 * @method self withConfigID
 * @method string getCacheContent
 * @method self withCacheContent
 * @method string getTTL
 * @method self withTTL
 * @method string getWeight
 * @method self withWeight
 */
final class ModifyPathCacheExpiredConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getObjectPath
 * @method self withObjectPath
 * @method string getArea
 * @method self withArea
 */
final class PushObjectCache extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 */
final class StopCdnDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeDomainUvData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainNames
 * @method self withDomainNames
 */
final class BatchStopCdnDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getInternetChargeType
 * @method self withInternetChargeType
 */
final class ModifyCdnService extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 */
final class DescribeCdnService extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getSources
 * @method self withSources
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method string getTopLevelDomain
 * @method self withTopLevelDomain
 */
final class ModifyCdnDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getFunctionNames
 * @method self withFunctionNames
 */
final class DescribeCdnDomainConfigs extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getTaskId
 * @method self withTaskId
 * @method string getObjectPath
 * @method self withObjectPath
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method string getObjectType
 * @method self withObjectType
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStatus
 * @method self withStatus
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 */
final class DescribeRefreshTasks extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeCdnDomainDetail extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getConfigId
 * @method self withConfigId
 */
final class DeleteHttpHeaderConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method string getDomainName
 * @method self withDomainName
 * @method string getDomainStatus
 * @method self withDomainStatus
 * @method string getDomainSearchType
 * @method self withDomainSearchType
 * @method string getCdnType
 * @method self withCdnType
 * @method Boolean getCheckDomainShow
 * @method self withCheckDomainShow
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method string getFuncId
 * @method self withFuncId
 * @method string getFuncFilter
 * @method self withFuncFilter
 * @method RepeatList getTag
 * @method self withTag
 */
final class DescribeUserDomains extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAllowIps
 * @method self withAllowIps
 */
final class SetIpAllowListConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getCdnType
 * @method self withCdnType
 * @method string getDomainName
 * @method self withDomainName
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method string getSources
 * @method self withSources
 * @method string getCheckUrl
 * @method self withCheckUrl
 * @method string getScope
 * @method self withScope
 * @method string getTopLevelDomain
 * @method self withTopLevelDomain
 */
final class AddCdnDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDiamondDataId
 * @method self withDiamondDataId
 */
final class DescribeDiamondData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getObjectPath
 * @method self withObjectPath
 * @method string getObjectType
 * @method self withObjectType
 */
final class RefreshObjectCaches extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getSecurityToken
 * @method self withSecurityToken
 */
final class DescribeCdnTypes extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getObjectPath
 * @method self withObjectPath
 * @method string getType
 * @method self withType
 * @method Integer getMaxage
 * @method self withMaxage
 */
final class BlockObjectCaches extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getObjectPath
 * @method self withObjectPath
 * @method string getObjectType
 * @method self withObjectType
 */
final class PurgeObjectCaches extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainNames
 * @method self withDomainNames
 * @method string getLocationNames
 * @method self withLocationNames
 * @method string getIspNames
 * @method self withIspNames
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeRangeDataByLocateAndIspService extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getPageType
 * @method self withPageType
 * @method string getCustomPageUrl
 * @method self withCustomPageUrl
 */
final class SetErrorPageConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getKey
 * @method self withKey
 * @method string getValue
 * @method self withValue
 * @method Long getConfigId
 * @method self withConfigId
 */
final class SetReqHeaderConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLocationNames
 * @method self withLocationNames
 * @method string getIspNames
 * @method self withIspNames
 * @method string getTimePoint
 * @method self withTimePoint
 */
final class DescribeDomainBpsDataByTimeStamp extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getReferType
 * @method self withReferType
 * @method string getReferList
 * @method self withReferList
 * @method string getAllowEmpty
 * @method self withAllowEmpty
 * @method string getDisableAst
 * @method self withDisableAst
 */
final class SetRefererConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getRedirectType
 * @method self withRedirectType
 */
final class SetForceRedirectConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeDomainISPData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getConfigId
 * @method self withConfigId
 */
final class DeleteCacheExpiredConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getConfig
 * @method self withConfig
 */
final class DescribeUserConfigs extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getChargeItem
 * @method self withChargeItem
 * @method Long getPageSize
 * @method self withPageSize
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeHistoryCharge95Info extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getDomainName
 * @method self withDomainName
 * @method string getHeaderKey
 * @method self withHeaderKey
 * @method string getHeaderValue
 * @method self withHeaderValue
 * @method string getConfigID
 * @method self withConfigID
 */
final class ModifyHttpHeaderConfig extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getSources
 * @method self withSources
 */
final class DescribeDomainsBySource extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getSortBy
 * @method self withSortBy
 * @method string getPercent
 * @method self withPercent
 */
final class DescribeDomainTopUrlVisit extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeDomainsUsageByDay extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getInterval
 * @method self withInterval
 */
final class DescribeDomainSrcHttpCodeData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeDomainMax95BpsData extends RpcRequest
{
}
