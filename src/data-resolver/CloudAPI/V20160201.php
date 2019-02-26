<?php

namespace AlibabaCloud\CloudAPI\V20160201;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getType
 * @method self withType
 * @method Long getUid
 * @method self withUid
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeUserWhiteLists extends RpcRequest
{
}

/**
 * @method string getType
 * @method self withType
 */
final class IsIncludedByUserWhitelist extends RpcRequest
{
}

/**
 * @method string getSourceVpcId
 * @method self withSourceVpcId
 * @method string getTargetVpcId
 * @method self withTargetVpcId
 * @method string getTargetInstance
 * @method self withTargetInstance
 * @method Integer getPort
 * @method self withPort
 */
final class LoadVpcAccess extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getModelName
 * @method self withModelName
 * @method string getModelId
 * @method self withModelId
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Long getAliUid
 * @method self withAliUid
 */
final class DescribeModelsForInner extends RpcRequest
{
}

/**
 * @method string getOriginalVip
 * @method self withOriginalVip
 * @method string getNewVip
 * @method self withNewVip
 */
final class VipMigrationByUid extends RpcRequest
{
}

/**
 * @method Long getAliUid
 * @method self withAliUid
 */
final class DescribeBidByUserIdForInner extends RpcRequest
{
}

/**
 * @method string getVip
 * @method self withVip
 */
final class DescribeAvailableVips extends RpcRequest
{
}

/**
 * @method string getOriginalVip
 * @method self withOriginalVip
 * @method string getNewVip
 * @method self withNewVip
 */
final class VipMigration extends RpcRequest
{
}

/**
 * @method Long getAliuid
 * @method self withAliuid
 * @method string getGroupId
 * @method self withGroupId
 * @method string getDomainName
 * @method self withDomainName
 */
final class ReactivateDomainForBackend extends RpcRequest
{
}

/**
 * @method Long getAliUid
 * @method self withAliUid
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStageName
 * @method self withStageName
 * @method string getApiId
 * @method self withApiId
 * @method string getApiName
 * @method self withApiName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeApiDocsForBackend extends RpcRequest
{
}

/**
 * @method string getAoneAppName
 * @method self withAoneAppName
 */
final class CheckAoneAppAudit extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class DescribeRaceWorksForInner extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 */
final class DescribeRaceWorkForInner extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getCommodityCode
 * @method self withCommodityCode
 * @method string getWorkName
 * @method self withWorkName
 * @method string getLogoUrl
 * @method self withLogoUrl
 * @method string getShortDescription
 * @method self withShortDescription
 * @method string getKeywords
 * @method self withKeywords
 */
final class CreateRaceWorkForInner extends RpcRequest
{
}

/**
 * @method Long getAliUid
 * @method self withAliUid
 * @method string getGroupId
 * @method self withGroupId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getDomainStatus
 * @method self withDomainStatus
 * @method string getRemark
 * @method self withRemark
 * @method string getBitValue
 * @method self withBitValue
 */
final class ModifyDomainStatusForBackend extends RpcRequest
{
}

/**
 * @method string getAppId
 * @method self withAppId
 * @method string getServerIp
 * @method self withServerIp
 * @method string getToken
 * @method self withToken
 */
final class VpcRemoveAppServer extends RpcRequest
{
}

/**
 * @method string getAppId
 * @method self withAppId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getToken
 * @method self withToken
 */
final class VpcRegisterApp extends RpcRequest
{
}

/**
 * @method string getAppId
 * @method self withAppId
 * @method string getAddressPoolId
 * @method self withAddressPoolId
 * @method string getServerIp
 * @method self withServerIp
 */
final class VpcQueryAppServers extends RpcRequest
{
}

/**
 * @method string getAppId
 * @method self withAppId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getToken
 * @method self withToken
 */
final class VpcCreateAddressPool extends RpcRequest
{
}

/**
 * @method string getAppId
 * @method self withAppId
 * @method string getAddressPoolId
 * @method self withAddressPoolId
 * @method string getServerIp
 * @method self withServerIp
 * @method string getToken
 * @method self withToken
 */
final class VpcAddAppServer extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 * @method string getDescription
 * @method self withDescription
 * @method string getHistoryVersion
 * @method self withHistoryVersion
 */
final class SwitchApiForInner extends RpcRequest
{
}

/**
 * @method Long getAliUid
 * @method self withAliUid
 */
final class CheckAccountForInner extends RpcRequest
{
}

/**
 * @method Long getAliUid
 * @method self withAliUid
 * @method Boolean getDefaultValue
 * @method self withDefaultValue
 */
final class IsInnerAccountForInner extends RpcRequest
{
}

/**
 * @method Long getAliUid
 * @method self withAliUid
 * @method string getGroupId
 * @method self withGroupId
 * @method string getExcludeApis
 * @method self withExcludeApis
 */
final class ModifyGroupExtendForBackend extends RpcRequest
{
}

/**
 * @method string getSkuId
 * @method self withSkuId
 * @method Long getAccountQuantity
 * @method self withAccountQuantity
 * @method string getToken
 * @method self withToken
 */
final class RefundInstance extends RpcRequest
{
}

/**
 * @method string getAppCode
 * @method self withAppCode
 * @method Long getAliUid
 * @method self withAliUid
 */
final class ResetAppCodeForInner extends RpcRequest
{
}

/**
 * @method string getAppCode
 * @method self withAppCode
 */
final class ResetAppCode extends RpcRequest
{
}

/**
 * @method string getAuthAppCode
 * @method self withAuthAppCode
 * @method string getGroupId
 * @method self withGroupId
 * @method Long getAliUid
 * @method self withAliUid
 */
final class ModifyGroupAuthAppCodeForBackend extends RpcRequest
{
}

/**
 * @method Long getAliUid
 * @method self withAliUid
 * @method string getServerAddress
 * @method self withServerAddress
 */
final class CheckServiceAddressForInner extends RpcRequest
{
}

/**
 * @method string getBillingStatus
 * @method self withBillingStatus
 * @method string getIllegalStatus
 * @method self withIllegalStatus
 * @method string getGroupId
 * @method self withGroupId
 * @method Long getAliUid
 * @method self withAliUid
 * @method string getClientToken
 * @method self withClientToken
 */
final class ModifyGroupStatusForBackend extends RpcRequest
{
}

/**
 * @method string getCopyList
 * @method self withCopyList
 */
final class CopyConsumerOpenForInner extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getCertificateName
 * @method self withCertificateName
 * @method string getCertificateBody
 * @method self withCertificateBody
 * @method string getCertificatePrivateKey
 * @method self withCertificatePrivateKey
 */
final class SetDomainForBackend extends RpcRequest
{
}

/**
 * @method Long getAliUid
 * @method self withAliUid
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 * @method string getAppIds
 * @method self withAppIds
 * @method string getDescription
 * @method self withDescription
 * @method string getSource
 * @method self withSource
 */
final class SetAccessPermissionsForInner extends RpcRequest
{
}

/**
 * @method Long getAliUid
 * @method self withAliUid
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 * @method string getAppIds
 * @method self withAppIds
 * @method string getSource
 * @method self withSource
 */
final class RemoveAccessPermissionByAppsForInner extends RpcRequest
{
}

/**
 * @method Long getAliUid
 * @method self withAliUid
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getApiName
 * @method self withApiName
 * @method string getDescription
 * @method self withDescription
 * @method string getVisibility
 * @method self withVisibility
 * @method string getAuthType
 * @method self withAuthType
 * @method string getRequestConfig
 * @method self withRequestConfig
 * @method string getServiceConfig
 * @method self withServiceConfig
 * @method string getRequestParamters
 * @method self withRequestParamters
 * @method string getServiceParameters
 * @method self withServiceParameters
 * @method string getServiceParametersMap
 * @method self withServiceParametersMap
 * @method string getResultType
 * @method self withResultType
 * @method string getResultSample
 * @method self withResultSample
 */
final class ModifyApiForInner extends RpcRequest
{
}

/**
 * @method Long getAliUid
 * @method self withAliUid
 * @method string getApiId
 * @method self withApiId
 */
final class DescribeApiGroupByApiForInner extends RpcRequest
{
}

/**
 * @method Long getAliUid
 * @method self withAliUid
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 * @method string getDescription
 * @method self withDescription
 */
final class DeployApiForInner extends RpcRequest
{
}

/**
 * @method Long getAliUid
 * @method self withAliUid
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 */
final class DeleteApiForInner extends RpcRequest
{
}

/**
 * @method Long getAliUid
 * @method self withAliUid
 * @method string getGroupName
 * @method self withGroupName
 * @method string getDescription
 * @method self withDescription
 * @method string getSource
 * @method self withSource
 */
final class CreateApiGroupForInner extends RpcRequest
{
}

/**
 * @method Long getAliUid
 * @method self withAliUid
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiName
 * @method self withApiName
 * @method string getVisibility
 * @method self withVisibility
 * @method string getDescription
 * @method self withDescription
 * @method string getAuthType
 * @method self withAuthType
 * @method string getRequestConfig
 * @method self withRequestConfig
 * @method string getServiceConfig
 * @method self withServiceConfig
 * @method string getRequestParamters
 * @method self withRequestParamters
 * @method string getServiceParameters
 * @method self withServiceParameters
 * @method string getServiceParametersMap
 * @method self withServiceParametersMap
 * @method string getResultType
 * @method self withResultType
 * @method string getResultSample
 * @method self withResultSample
 */
final class CreateApiForInner extends RpcRequest
{
}

/**
 * @method Long getAliUid
 * @method self withAliUid
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 */
final class AbolishApiForInner extends RpcRequest
{
}

/**
 * @method Long getAliUid
 * @method self withAliUid
 * @method string getGroupId
 * @method self withGroupId
 * @method Integer getQpsLimit
 * @method self withQpsLimit
 */
final class ModifyGroupQpsForBackend extends RpcRequest
{
}

/**
 * @method Long getcallerUid
 * @method self withcallerUid
 * @method string getCacheNamespace
 * @method self withCacheNamespace
 * @method string getCacheKey
 * @method self withCacheKey
 */
final class ClearCacheForBackend extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DeleteDomainForBackend extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getBillingStatus
 * @method self withBillingStatus
 */
final class SetPurchasedApiGroupStatus extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method Long getAppId
 * @method self withAppId
 */
final class SetAccessPermissionByGroupForBackend extends RpcRequest
{
}

/**
 * @method string getAppName
 * @method self withAppName
 * @method string getDescription
 * @method self withDescription
 * @method Long getAliUid
 * @method self withAliUid
 * @method string getSource
 * @method self withSource
 */
final class CreateAppForBackend extends RpcRequest
{
}

/**
 * @method string getAppName
 * @method self withAppName
 * @method string getDescription
 * @method self withDescription
 * @method string getSource
 * @method self withSource
 * @method Long getAliUid
 * @method self withAliUid
 */
final class CreateAppForInner extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 */
final class DescribeDeployedApiForBackend extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStageName
 * @method self withStageName
 * @method string getApiId
 * @method self withApiId
 * @method string getApiName
 * @method self withApiName
 * @method string getVisibility
 * @method self withVisibility
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class DescribeApisForBackend extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getGroupName
 * @method self withGroupName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeApiGroupsForBackend extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 */
final class DescribeApiGroupDetailForBackend extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 */
final class DescribeApiForBackend extends RpcRequest
{
}

/**
 * @method string getInvokeParams
 * @method self withInvokeParams
 */
final class UpdateConsumerOpenInvokeTimesNow extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStageName
 * @method self withStageName
 * @method string getApiId
 * @method self withApiId
 * @method string getApiName
 * @method self withApiName
 * @method string getVisibility
 * @method self withVisibility
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class DescribePurchasedApis extends RpcRequest
{
}

/**
 * @method string getGroupIds
 * @method self withGroupIds
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribePurchasedApiGroups extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 */
final class DescribePurchasedApiGroupDetail extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 */
final class DescribePurchasedApi extends RpcRequest
{
}

/**
 * @method string getSkuId
 * @method self withSkuId
 * @method Long getAccountQuantity
 * @method self withAccountQuantity
 * @method string getExpiredOn
 * @method self withExpiredOn
 * @method Long getAppId
 * @method self withAppId
 * @method string getBillingType
 * @method self withBillingType
 * @method string getCloudMarketInstanceId
 * @method self withCloudMarketInstanceId
 * @method string getToken
 * @method self withToken
 * @method Long getAlarmQuota
 * @method self withAlarmQuota
 * @method Long getAliUid
 * @method self withAliUid
 */
final class CreateInstance extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getMock
 * @method self withMock
 * @method string getMockResult
 * @method self withMockResult
 */
final class SetMockIntegration extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getDomainNames
 * @method self withDomainNames
 */
final class DescribeDomainResolution extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 * @method string getHistoryVersion
 * @method self withHistoryVersion
 */
final class RecoverApiFromHistorical extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 * @method string getHistoryVersion
 * @method self withHistoryVersion
 */
final class RecoveryApiFromHistorical extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 * @method string getDescription
 * @method self withDescription
 * @method string getHistoryVersion
 * @method self withHistoryVersion
 */
final class SwitchApi extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getCertificateName
 * @method self withCertificateName
 * @method string getCertificateBody
 * @method self withCertificateBody
 * @method string getPrivateKey
 * @method self withPrivateKey
 */
final class SetDomainCertificate extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getCertificateName
 * @method self withCertificateName
 * @method string getCertificateBody
 * @method self withCertificateBody
 * @method string getPrivateKey
 * @method self withPrivateKey
 */
final class SetDomain extends RpcRequest
{
}

/**
 * @method string getRuleId
 * @method self withRuleId
 * @method string getRuleType
 * @method self withRuleType
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiIds
 * @method self withApiIds
 * @method string getStageName
 * @method self withStageName
 */
final class SetApiRule extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 * @method string getAppIds
 * @method self withAppIds
 * @method string getDescription
 * @method self withDescription
 */
final class SetAccessPermissions extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method Long getAppId
 * @method self withAppId
 * @method string getStageName
 * @method self withStageName
 * @method string getApiIds
 * @method self withApiIds
 * @method string getDescription
 * @method self withDescription
 */
final class SetAccessPermissionByApis extends RpcRequest
{
}

/**
 * @method string getAppKey
 * @method self withAppKey
 */
final class ResetAppKeySecret extends RpcRequest
{
}

/**
 * @method string getBlackType
 * @method self withBlackType
 * @method string getBlackContent
 * @method self withBlackContent
 */
final class RemoveBlackList extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 * @method string getAppIds
 * @method self withAppIds
 */
final class RemoveAppsFromApi extends RpcRequest
{
}

/**
 * @method string getRuleId
 * @method self withRuleId
 * @method string getRuleType
 * @method self withRuleType
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiIds
 * @method self withApiIds
 * @method string getStageName
 * @method self withStageName
 */
final class RemoveApiRule extends RpcRequest
{
}

/**
 * @method string getBlackType
 * @method self withBlackType
 */
final class RemoveAllBlackList extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 * @method string getAppIds
 * @method self withAppIds
 */
final class RemoveAccessPermissionByApps extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method Long getAppId
 * @method self withAppId
 * @method string getStageName
 * @method self withStageName
 * @method string getApiIds
 * @method self withApiIds
 * @method string getDescription
 * @method self withDescription
 */
final class RemoveAccessPermissionByApis extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getDomainName
 * @method self withDomainName
 */
final class RefreshDomain extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 * @method string getHistoryVersion
 * @method self withHistoryVersion
 */
final class RecoveryApiDefineFromHistorical extends RpcRequest
{
}

/**
 * @method string getTrafficControlId
 * @method self withTrafficControlId
 * @method string getTrafficControlName
 * @method self withTrafficControlName
 * @method string getTrafficControlUnit
 * @method self withTrafficControlUnit
 * @method Integer getApiDefault
 * @method self withApiDefault
 * @method Integer getUserDefault
 * @method self withUserDefault
 * @method Integer getAppDefault
 * @method self withAppDefault
 * @method string getDescription
 * @method self withDescription
 */
final class ModifyTrafficControl extends RpcRequest
{
}

/**
 * @method string getSecretKeyId
 * @method self withSecretKeyId
 * @method string getSecretKeyName
 * @method self withSecretKeyName
 * @method string getSecretKey
 * @method self withSecretKey
 * @method string getSecretValue
 * @method self withSecretValue
 */
final class ModifySecretKey extends RpcRequest
{
}

/**
 * @method Long getAppId
 * @method self withAppId
 * @method string getAppName
 * @method self withAppName
 * @method string getDescription
 * @method self withDescription
 */
final class ModifyApp extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getGroupName
 * @method self withGroupName
 * @method string getDescription
 * @method self withDescription
 */
final class ModifyApiGroup extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getApiName
 * @method self withApiName
 * @method string getPath
 * @method self withPath
 * @method string getDescription
 * @method self withDescription
 * @method string getBodyFormat
 * @method self withBodyFormat
 * @method string getPostBodyType
 * @method self withPostBodyType
 * @method string getPostBodyDescription
 * @method self withPostBodyDescription
 * @method string getHttpMethod
 * @method self withHttpMethod
 * @method string getHttpProtocol
 * @method self withHttpProtocol
 * @method string getResultType
 * @method self withResultType
 * @method string getResultSample
 * @method self withResultSample
 * @method string getServiceProtocol
 * @method self withServiceProtocol
 * @method string getServiceAddress
 * @method self withServiceAddress
 * @method Integer getServiceTimeout
 * @method self withServiceTimeout
 * @method string getVisibility
 * @method self withVisibility
 * @method string getAuthType
 * @method self withAuthType
 * @method string getSystemParameters
 * @method self withSystemParameters
 * @method string getConstantParameters
 * @method self withConstantParameters
 * @method string getPathParameters
 * @method self withPathParameters
 * @method string getRequestHeaders
 * @method self withRequestHeaders
 * @method string getRequestQueries
 * @method self withRequestQueries
 * @method string getRequestBody
 * @method self withRequestBody
 */
final class ModifyApi extends RpcRequest
{
}

/**
 * @method string getTrafficControlId
 * @method self withTrafficControlId
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiUid
 * @method self withApiUid
 * @method string getStageName
 * @method self withStageName
 * @method string getTrafficControlName
 * @method self withTrafficControlName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeTrafficControls extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 */
final class DescribeSystemParams extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 */
final class DescribeSystemParameters extends RpcRequest
{
}

/**
 * @method string getSecretKeyId
 * @method self withSecretKeyId
 * @method string getSecretKeyName
 * @method self withSecretKeyName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeSecretKeys extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 */
final class DescribeRulesByApi extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getLanguage
 * @method self withLanguage
 */
final class DescribeRegions extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStageName
 * @method self withStageName
 * @method string getApiId
 * @method self withApiId
 * @method string getApiName
 * @method self withApiName
 * @method string getPageSize
 * @method self withPageSize
 * @method string getPageNumber
 * @method self withPageNumber
 */
final class DescribeHistoryApis extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 * @method string getHistoryVersion
 * @method self withHistoryVersion
 */
final class DescribeHistoryApi extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeDomain extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStageName
 * @method self withStageName
 * @method string getApiId
 * @method self withApiId
 * @method string getApiName
 * @method self withApiName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeDeployedApis extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 */
final class DescribeDeployedApi extends RpcRequest
{
}

/**
 * @method string getBlackType
 * @method self withBlackType
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeBlackLists extends RpcRequest
{
}

/**
 * @method Long getAppId
 * @method self withAppId
 * @method string getAppOwner
 * @method self withAppOwner
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeAppsForProvider extends RpcRequest
{
}

/**
 * @method string getAppKey
 * @method self withAppKey
 */
final class DescribeAppSecurity extends RpcRequest
{
}

/**
 * @method Long getAppId
 * @method self withAppId
 */
final class DescribeAppSecurities extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStageName
 * @method self withStageName
 * @method string getApiId
 * @method self withApiId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeAppsByApi extends RpcRequest
{
}

/**
 * @method Long getAppId
 * @method self withAppId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeApps extends RpcRequest
{
}

/**
 * @method Long getAppId
 * @method self withAppId
 */
final class DescribeApp extends RpcRequest
{
}

/**
 * @method string getApiId
 * @method self withApiId
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeApiTraffic extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStageName
 * @method self withStageName
 * @method string getApiId
 * @method self withApiId
 * @method string getApiName
 * @method self withApiName
 * @method string getVisibility
 * @method self withVisibility
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class DescribeApisForConsole extends RpcRequest
{
}

/**
 * @method string getRuleId
 * @method self withRuleId
 * @method string getRuleType
 * @method self withRuleType
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class DescribeApisByRule extends RpcRequest
{
}

/**
 * @method Long getAppId
 * @method self withAppId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeApisByApp extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getApiName
 * @method self withApiName
 * @method string getVisibility
 * @method self withVisibility
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class DescribeApis extends RpcRequest
{
}

/**
 * @method string getRuleType
 * @method self withRuleType
 * @method string getStageName
 * @method self withStageName
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiIds
 * @method self withApiIds
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeApiRules extends RpcRequest
{
}

/**
 * @method string getApiId
 * @method self withApiId
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeApiQps extends RpcRequest
{
}

/**
 * @method string getApiId
 * @method self withApiId
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeApiLatency extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getGroupName
 * @method self withGroupName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeApiGroups extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 */
final class DescribeApiGroupDetail extends RpcRequest
{
}

/**
 * @method string getApiId
 * @method self withApiId
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeApiError extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStageName
 * @method self withStageName
 * @method string getApiId
 * @method self withApiId
 * @method string getApiName
 * @method self withApiName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeApiDocs extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStageName
 * @method self withStageName
 * @method string getApiId
 * @method self withApiId
 */
final class DescribeApiDoc extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 */
final class DescribeApi extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 * @method string getDescription
 * @method self withDescription
 */
final class DeployApi extends RpcRequest
{
}

/**
 * @method string getTrafficControlId
 * @method self withTrafficControlId
 * @method string getSpecialType
 * @method self withSpecialType
 * @method string getSpecialKey
 * @method self withSpecialKey
 */
final class DeleteTrafficSpecialControl extends RpcRequest
{
}

/**
 * @method string getTrafficControlId
 * @method self withTrafficControlId
 */
final class DeleteTrafficControl extends RpcRequest
{
}

/**
 * @method string getSecretKeyId
 * @method self withSecretKeyId
 */
final class DeleteSecretKey extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getCertificateId
 * @method self withCertificateId
 */
final class DeleteDomainCertificate extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DeleteDomain extends RpcRequest
{
}

/**
 * @method Long getAppId
 * @method self withAppId
 */
final class DeleteApp extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 */
final class DeleteApiGroup extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 */
final class DeleteApi extends RpcRequest
{
}

/**
 * @method string getTrafficControlId
 * @method self withTrafficControlId
 */
final class DeleteAllTrafficSpecialControl extends RpcRequest
{
}

/**
 * @method string getTrafficControlName
 * @method self withTrafficControlName
 * @method string getTrafficControlUnit
 * @method self withTrafficControlUnit
 * @method Integer getApiDefault
 * @method self withApiDefault
 * @method Integer getUserDefault
 * @method self withUserDefault
 * @method Integer getAppDefault
 * @method self withAppDefault
 * @method string getDescription
 * @method self withDescription
 */
final class CreateTrafficControl extends RpcRequest
{
}

/**
 * @method string getSecretKeyName
 * @method self withSecretKeyName
 * @method string getSecretKey
 * @method self withSecretKey
 * @method string getSecretValue
 * @method self withSecretValue
 */
final class CreateSecretKey extends RpcRequest
{
}

/**
 * @method string getAppName
 * @method self withAppName
 * @method string getDescription
 * @method self withDescription
 */
final class CreateApp extends RpcRequest
{
}

/**
 * @method string getGroupName
 * @method self withGroupName
 * @method string getDescription
 * @method self withDescription
 */
final class CreateApiGroup extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiName
 * @method self withApiName
 * @method string getPath
 * @method self withPath
 * @method string getDescription
 * @method self withDescription
 * @method string getBodyFormat
 * @method self withBodyFormat
 * @method string getPostBodyType
 * @method self withPostBodyType
 * @method string getPostBodyDescription
 * @method self withPostBodyDescription
 * @method string getHttpMethod
 * @method self withHttpMethod
 * @method string getHttpProtocol
 * @method self withHttpProtocol
 * @method string getResultType
 * @method self withResultType
 * @method string getResultSample
 * @method self withResultSample
 * @method string getServiceProtocol
 * @method self withServiceProtocol
 * @method string getServiceAddress
 * @method self withServiceAddress
 * @method Integer getServiceTimeout
 * @method self withServiceTimeout
 * @method string getVisibility
 * @method self withVisibility
 * @method string getAuthType
 * @method self withAuthType
 * @method string getSystemParameters
 * @method self withSystemParameters
 * @method string getConstantParameters
 * @method self withConstantParameters
 * @method string getPathParameters
 * @method self withPathParameters
 * @method string getRequestHeaders
 * @method self withRequestHeaders
 * @method string getRequestQueries
 * @method self withRequestQueries
 * @method string getRequestBody
 * @method self withRequestBody
 */
final class CreateApi extends RpcRequest
{
}

/**
 * @method string getTrafficControlId
 * @method self withTrafficControlId
 * @method string getSpecialType
 * @method self withSpecialType
 * @method string getSpecialKey
 * @method self withSpecialKey
 * @method Integer getTrafficValue
 * @method self withTrafficValue
 */
final class AddTrafficSpecialControl extends RpcRequest
{
}

/**
 * @method string getBlackType
 * @method self withBlackType
 * @method string getBlackContent
 * @method self withBlackContent
 * @method string getDescription
 * @method self withDescription
 */
final class AddBlackList extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 */
final class AbolishApi extends RpcRequest
{
}
