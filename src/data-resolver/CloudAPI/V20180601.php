<?php

namespace AlibabaCloud\CloudAPI\V20180601;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getVpcId
 * @method self withVpcId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getInstancePort
 * @method self withInstancePort
 * @method string getToken
 * @method self withToken
 */
final class VpcRevokeAccess extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getVpcId
 * @method self withVpcId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getInstancePort
 * @method self withInstancePort
 * @method string getToken
 * @method self withToken
 */
final class VpcModifyAccess extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getName
 * @method self withName
 * @method string getVpcId
 * @method self withVpcId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getInstancePort
 * @method self withInstancePort
 * @method string getToken
 * @method self withToken
 */
final class VpcGrantAccess extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getVpcId
 * @method self withVpcId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getInstancePort
 * @method self withInstancePort
 * @method string getName
 * @method self withName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class VpcDescribeAccesses extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getInvokeParams
 * @method self withInvokeParams
 */
final class UpdateConsumerOpenInvokeTimesNow extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getIpControlId
 * @method self withIpControlId
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiIds
 * @method self withApiIds
 * @method string getStageName
 * @method self withStageName
 */
final class SetIpControlApis extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getActionValue
 * @method self withActionValue
 */
final class SetDomainWebSocketStatus extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 * @method string getLanguage
 * @method self withLanguage
 */
final class SdkGenerateByGroup extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getAppId
 * @method self withAppId
 * @method string getLanguage
 * @method self withLanguage
 */
final class SdkGenerateByApp extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 * @method Long getAppId
 * @method self withAppId
 * @method string getLanguage
 * @method self withLanguage
 */
final class SdkGenerate extends RpcRequest
{
}

/**
 * @method string getApiName
 * @method self withApiName
 * @method string getGroupId
 * @method self withGroupId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 * @method string getStageId
 * @method self withStageId
 */
final class ResetCustomized extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getAppKey
 * @method self withAppKey
 */
final class ResetAppKeySecret extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getIpControlId
 * @method self withIpControlId
 * @method string getPolicyItemIds
 * @method self withPolicyItemIds
 */
final class RemoveIpControlPolicyItem extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getIpControlId
 * @method self withIpControlId
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiIds
 * @method self withApiIds
 * @method string getStageName
 * @method self withStageName
 */
final class RemoveIpControlApis extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getBlackType
 * @method self withBlackType
 * @method string getBlackContent
 * @method self withBlackContent
 */
final class RemoveBlackList extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getBlackType
 * @method self withBlackType
 */
final class RemoveAllBlackList extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 * @method string getDomainName
 * @method self withDomainName
 */
final class RefreshDomain extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 * @method string getDomainName
 * @method self withDomainName
 */
final class ReactivateDomain extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getSlsProject
 * @method self withSlsProject
 * @method string getSlsLogStore
 * @method self withSlsLogStore
 * @method string getLogType
 * @method self withLogType
 */
final class ModifyLogConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getIpControlId
 * @method self withIpControlId
 * @method string getPolicyItemId
 * @method self withPolicyItemId
 * @method string getAppId
 * @method self withAppId
 * @method string getCidrIp
 * @method self withCidrIp
 */
final class ModifyIpControlPolicyItem extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getIpControlId
 * @method self withIpControlId
 * @method string getIpControlName
 * @method self withIpControlName
 * @method string getDescription
 * @method self withDescription
 */
final class ModifyIpControl extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getFailResultSample
 * @method self withFailResultSample
 * @method string getErrorCodeSamples
 * @method self withErrorCodeSamples
 * @method string getResultDescriptions
 * @method self withResultDescriptions
 * @method string getOpenIdConnectConfig
 * @method self withOpenIdConnectConfig
 * @method string getAllowSignatureMethod
 * @method self withAllowSignatureMethod
 * @method string getWebSocketApiType
 * @method self withWebSocketApiType
 */
final class ModifyApi extends RpcRequest
{
}

/**
 * @method string getApiName
 * @method self withApiName
 * @method string getGroupId
 * @method self withGroupId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 * @method string getStageId
 * @method self withStageId
 */
final class GetCustomizedInfo extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiPath
 * @method self withApiPath
 * @method string getStageName
 * @method self withStageName
 */
final class GetApiMethods extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 */
final class DescribeRaceWorkForInner extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getApiName
 * @method self withApiName
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class DescribePurchasedApis extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribePurchasedApiGroups extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 */
final class DescribePurchasedApiGroupDetail extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 */
final class DescribePurchasedApi extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getLogType
 * @method self withLogType
 */
final class DescribeLogConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getIpControlId
 * @method self withIpControlId
 * @method string getIpControlName
 * @method self withIpControlName
 * @method string getIpControlType
 * @method self withIpControlType
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeIpControls extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getIpControlId
 * @method self withIpControlId
 * @method string getPolicyItemId
 * @method self withPolicyItemId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeIpControlPolicyItems extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 * @method string getDomainNames
 * @method self withDomainNames
 */
final class DescribeDomainResolution extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DescribeDomain extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getAppId
 * @method self withAppId
 * @method Long getAppOwnerId
 * @method self withAppOwnerId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeAppsForProvider extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getAppKey
 * @method self withAppKey
 */
final class DescribeAppSecurity extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getAppId
 * @method self withAppId
 */
final class DescribeAppSecurities extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getAppId
 * @method self withAppId
 * @method string getAppName
 * @method self withAppName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeApps extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getAppId
 * @method self withAppId
 */
final class DescribeApp extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStageId
 * @method self withStageId
 */
final class DescribeApiStageDetail extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getIpControlId
 * @method self withIpControlId
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class DescribeApisByIpControl extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getApiName
 * @method self withApiName
 */
final class DescribeApiRules extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
final class DescribeApiIpControls extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStageName
 * @method self withStageName
 * @method string getApiId
 * @method self withApiId
 */
final class DescribeApiGroupDetailForConsumer extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 */
final class DescribeApiGroupDetailForBackend extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 */
final class DescribeApiGroupDetail extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 */
final class DescribeApiForBackend extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 */
final class DescribeApi extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 * @method string getDescription
 * @method self withDescription
 * @method string getSupportMock
 * @method self withSupportMock
 */
final class DeployApi extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getTrafficControlId
 * @method self withTrafficControlId
 */
final class DeleteTrafficControl extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getSecretKeyId
 * @method self withSecretKeyId
 */
final class DeleteSecretKey extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getLogType
 * @method self withLogType
 */
final class DeleteLogConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getIpControlId
 * @method self withIpControlId
 */
final class DeleteIpControl extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 * @method string getDomainName
 * @method self withDomainName
 */
final class DeleteDomain extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method Long getAppId
 * @method self withAppId
 */
final class DeleteApp extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStageId
 * @method self withStageId
 * @method string getVariableName
 * @method self withVariableName
 */
final class DeleteApiStageVariable extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 */
final class DeleteApiGroup extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 * @method string getApiId
 * @method self withApiId
 */
final class DeleteApi extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getTrafficControlId
 * @method self withTrafficControlId
 */
final class DeleteAllTrafficSpecialControl extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getSlsProject
 * @method self withSlsProject
 * @method string getSlsLogStore
 * @method self withSlsLogStore
 * @method string getLogType
 * @method self withLogType
 */
final class CreateLogConfig extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getIpControlName
 * @method self withIpControlName
 * @method string getIpControlType
 * @method self withIpControlType
 * @method string getDescription
 * @method self withDescription
 * @method RepeatList getIpControlPolicys
 * @method self withIpControlPolicys
 */
final class CreateIpControl extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getSkuId
 * @method self withSkuId
 * @method Integer getAccountQuantity
 * @method self withAccountQuantity
 * @method string getExpiredOn
 * @method self withExpiredOn
 * @method string getToken
 * @method self withToken
 */
final class CreateInstance extends RpcRequest
{
}

/**
 * @method string getApiName
 * @method self withApiName
 * @method string getGroupId
 * @method self withGroupId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getApiId
 * @method self withApiId
 * @method string getStageName
 * @method self withStageName
 * @method string getStageId
 * @method self withStageId
 * @method string getJavaDemo
 * @method self withJavaDemo
 * @method string getPythonDemo
 * @method self withPythonDemo
 * @method string getCsharpDemo
 * @method self withCsharpDemo
 * @method string getPhpDemo
 * @method self withPhpDemo
 * @method string getObjectcDemo
 * @method self withObjectcDemo
 * @method string getCurlDemo
 * @method self withCurlDemo
 */
final class CreateCustomizedInfo extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getAppName
 * @method self withAppName
 * @method string getDescription
 * @method self withDescription
 */
final class CreateApp extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStageId
 * @method self withStageId
 * @method string getVariableName
 * @method self withVariableName
 * @method Boolean getSupportRoute
 * @method self withSupportRoute
 * @method string getVariableValue
 * @method self withVariableValue
 * @method string getStageRouteModel
 * @method self withStageRouteModel
 */
final class CreateApiStageVariable extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getGroupName
 * @method self withGroupName
 * @method string getDescription
 * @method self withDescription
 */
final class CreateApiGroup extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getFailResultSample
 * @method self withFailResultSample
 * @method string getErrorCodeSamples
 * @method self withErrorCodeSamples
 * @method string getResultDescriptions
 * @method self withResultDescriptions
 * @method string getOpenIdConnectConfig
 * @method self withOpenIdConnectConfig
 * @method string getAllowSignatureMethod
 * @method self withAllowSignatureMethod
 * @method string getWebSocketApiType
 * @method self withWebSocketApiType
 */
final class CreateApi extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getIpControlId
 * @method self withIpControlId
 * @method string getAppId
 * @method self withAppId
 * @method string getCidrIp
 * @method self withCidrIp
 */
final class AddIpControlPolicyItem extends RpcRequest
{
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken
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
 * @method string getSecurityToken
 * @method self withSecurityToken
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
