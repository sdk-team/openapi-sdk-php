<?php

namespace AlibabaCloud\CloudAPI\V20160701;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DescribePlugins describePlugins($options = [])
 * @method AttachPlugin attachPlugin($options = [])
 * @method CreatePlugin createPlugin($options = [])
 * @method DeletePlugin deletePlugin($options = [])
 * @method DescribePluginApis describePluginApis($options = [])
 * @method DetachPlugin detachPlugin($options = [])
 * @method ModifyPlugin modifyPlugin($options = [])
 * @method DescribePluginsByApi describePluginsByApi($options = [])
 * @method CreateModel createModel($options = [])
 * @method ModifyModel modifyModel($options = [])
 * @method DescribeModels describeModels($options = [])
 * @method DeleteModel deleteModel($options = [])
 * @method CreateIntranetDomain createIntranetDomain($options = [])
 * @method ImportSwagger importSwagger($options = [])
 * @method GetApiMethods getApiMethods($options = [])
 * @method CreateCustomizedInfo createCustomizedInfo($options = [])
 * @method ResetCustomized resetCustomized($options = [])
 * @method GetCustomizedInfo getCustomizedInfo($options = [])
 * @method SetIpControlApis setIpControlApis($options = [])
 * @method RemoveIpControlPolicyItem removeIpControlPolicyItem($options = [])
 * @method RemoveIpControlApis removeIpControlApis($options = [])
 * @method ModifyIpControlPolicyItem modifyIpControlPolicyItem($options = [])
 * @method ModifyIpControl modifyIpControl($options = [])
 * @method DescribeIpControls describeIpControls($options = [])
 * @method DescribeIpControlPolicyItems describeIpControlPolicyItems($options = [])
 * @method DescribeApisByIpControl describeApisByIpControl($options = [])
 * @method DescribeApiIpControls describeApiIpControls($options = [])
 * @method DeleteIpControl deleteIpControl($options = [])
 * @method CreateIpControl createIpControl($options = [])
 * @method AddIpControlPolicyItem addIpControlPolicyItem($options = [])
 * @method CreateLogConfig createLogConfig($options = [])
 * @method ModifyLogConfig modifyLogConfig($options = [])
 * @method DeleteLogConfig deleteLogConfig($options = [])
 * @method DescribeLogConfig describeLogConfig($options = [])
 * @method SetDomainWebSocketStatus setDomainWebSocketStatus($options = [])
 * @method DescribeRaceWorkForInner describeRaceWorkForInner($options = [])
 * @method CreateRaceWorkForInner createRaceWorkForInner($options = [])
 * @method ReactivateDomain reactivateDomain($options = [])
 * @method VpcRevokeAccess vpcRevokeAccess($options = [])
 * @method VpcModifyAccess vpcModifyAccess($options = [])
 * @method VpcGrantAccess vpcGrantAccess($options = [])
 * @method VpcDescribeAccesses vpcDescribeAccesses($options = [])
 * @method SdkGenerateByGroup sdkGenerateByGroup($options = [])
 * @method SdkGenerateByApp sdkGenerateByApp($options = [])
 * @method SdkGenerate sdkGenerate($options = [])
 * @method DescribeApiGroupDetailForConsumer describeApiGroupDetailForConsumer($options = [])
 * @method DescribeApiGroupDetailGatedLaunch describeApiGroupDetailGatedLaunch($options = [])
 * @method DescribeApiStageDetail describeApiStageDetail($options = [])
 * @method DeleteApiStageVariable deleteApiStageVariable($options = [])
 * @method CreateApiStageVariable createApiStageVariable($options = [])
 * @method UpdateConsumerOpenInvokeTimesNow updateConsumerOpenInvokeTimesNow($options = [])
 * @method SwitchApi switchApi($options = [])
 * @method SetMockIntegration setMockIntegration($options = [])
 * @method SetDomainCertificate setDomainCertificate($options = [])
 * @method SetDomain setDomain($options = [])
 * @method SetApiRule setApiRule($options = [])
 * @method SetAccessPermissions setAccessPermissions($options = [])
 * @method SetAccessPermissionByApis setAccessPermissionByApis($options = [])
 * @method ResetAppKeySecret resetAppKeySecret($options = [])
 * @method RemoveBlackList removeBlackList($options = [])
 * @method RemoveAppsFromApi removeAppsFromApi($options = [])
 * @method RemoveApiRule removeApiRule($options = [])
 * @method RemoveAllBlackList removeAllBlackList($options = [])
 * @method RemoveAccessPermissionByApps removeAccessPermissionByApps($options = [])
 * @method RemoveAccessPermissionByApis removeAccessPermissionByApis($options = [])
 * @method RefreshDomain refreshDomain($options = [])
 * @method RecoveryApiFromHistorical recoveryApiFromHistorical($options = [])
 * @method RecoveryApiDefineFromHistorical recoveryApiDefineFromHistorical($options = [])
 * @method RecoverApiFromHistorical recoverApiFromHistorical($options = [])
 * @method ModifyTrafficControl modifyTrafficControl($options = [])
 * @method ModifySecretKey modifySecretKey($options = [])
 * @method ModifyApp modifyApp($options = [])
 * @method ModifyApiGroup modifyApiGroup($options = [])
 * @method ModifyApi modifyApi($options = [])
 * @method DescribeTrafficControls describeTrafficControls($options = [])
 * @method DescribeSystemParams describeSystemParams($options = [])
 * @method DescribeSystemParameters describeSystemParameters($options = [])
 * @method DescribeSecretKeys describeSecretKeys($options = [])
 * @method DescribeRulesByApi describeRulesByApi($options = [])
 * @method DescribeRegions describeRegions($options = [])
 * @method DescribePurchasedApis describePurchasedApis($options = [])
 * @method DescribePurchasedApiGroups describePurchasedApiGroups($options = [])
 * @method DescribePurchasedApiGroupDetail describePurchasedApiGroupDetail($options = [])
 * @method DescribePurchasedApi describePurchasedApi($options = [])
 * @method DescribeHistoryApis describeHistoryApis($options = [])
 * @method DescribeHistoryApi describeHistoryApi($options = [])
 * @method DescribeDomainResolution describeDomainResolution($options = [])
 * @method DescribeDomain describeDomain($options = [])
 * @method DescribeDeployedApis describeDeployedApis($options = [])
 * @method DescribeDeployedApiForBackend describeDeployedApiForBackend($options = [])
 * @method DescribeDeployedApi describeDeployedApi($options = [])
 * @method DescribeBlackLists describeBlackLists($options = [])
 * @method DescribeAppsForProvider describeAppsForProvider($options = [])
 * @method DescribeAppSecurity describeAppSecurity($options = [])
 * @method DescribeAppSecurities describeAppSecurities($options = [])
 * @method DescribeAppsByApi describeAppsByApi($options = [])
 * @method DescribeApps describeApps($options = [])
 * @method DescribeApp describeApp($options = [])
 * @method DescribeApiTraffic describeApiTraffic($options = [])
 * @method DescribeApisForConsole describeApisForConsole($options = [])
 * @method DescribeApisForBackend describeApisForBackend($options = [])
 * @method DescribeApisByRule describeApisByRule($options = [])
 * @method DescribeApisByApp describeApisByApp($options = [])
 * @method DescribeApis describeApis($options = [])
 * @method DescribeApiRules describeApiRules($options = [])
 * @method DescribeApiQps describeApiQps($options = [])
 * @method DescribeApiLatency describeApiLatency($options = [])
 * @method DescribeApiGroupsForBackend describeApiGroupsForBackend($options = [])
 * @method DescribeApiGroups describeApiGroups($options = [])
 * @method DescribeApiGroupDetailForBackend describeApiGroupDetailForBackend($options = [])
 * @method DescribeApiGroupDetail describeApiGroupDetail($options = [])
 * @method DescribeApiForBackend describeApiForBackend($options = [])
 * @method DescribeApiError describeApiError($options = [])
 * @method DescribeApiDocs describeApiDocs($options = [])
 * @method DescribeApiDoc describeApiDoc($options = [])
 * @method DescribeApi describeApi($options = [])
 * @method DeployApi deployApi($options = [])
 * @method DeleteTrafficSpecialControl deleteTrafficSpecialControl($options = [])
 * @method DeleteTrafficControl deleteTrafficControl($options = [])
 * @method DeleteSecretKey deleteSecretKey($options = [])
 * @method DeleteDomainCertificate deleteDomainCertificate($options = [])
 * @method DeleteDomain deleteDomain($options = [])
 * @method DeleteApp deleteApp($options = [])
 * @method DeleteApiGroup deleteApiGroup($options = [])
 * @method DeleteApi deleteApi($options = [])
 * @method DeleteAllTrafficSpecialControl deleteAllTrafficSpecialControl($options = [])
 * @method CreateTrafficControl createTrafficControl($options = [])
 * @method CreateSecretKey createSecretKey($options = [])
 * @method CreateInstance createInstance($options = [])
 * @method CreateApp createApp($options = [])
 * @method CreateApiGroup createApiGroup($options = [])
 * @method CreateApi createApi($options = [])
 * @method AddTrafficSpecialControl addTrafficSpecialControl($options = [])
 * @method AddBlackList addBlackList($options = [])
 * @method AbolishApi abolishApi($options = [])
 */
class V20160701
{
    use ApiResolverTrait;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getPluginId
 * @method self withPluginId(string $pluginId)
 * @method string getPluginType
 * @method self withPluginType(string $pluginType)
 * @method string getPluginName
 * @method self withPluginName(string $pluginName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribePlugins extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getPluginId
 * @method self withPluginId(string $pluginId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiIds
 * @method self withApiIds(string $apiIds)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getApiUid
 * @method self withApiUid(string $apiUid)
 */
class AttachPlugin extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getPluginName
 * @method self withPluginName(string $pluginName)
 * @method string getPluginType
 * @method self withPluginType(string $pluginType)
 * @method string getPluginData
 * @method self withPluginData(string $pluginData)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class CreatePlugin extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getPluginId
 * @method self withPluginId(string $pluginId)
 */
class DeletePlugin extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getPluginId
 * @method self withPluginId(string $pluginId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribePluginApis extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getPluginId
 * @method self withPluginId(string $pluginId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiIds
 * @method self withApiIds(string $apiIds)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getApiUid
 * @method self withApiUid(string $apiUid)
 */
class DetachPlugin extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getPluginId
 * @method self withPluginId(string $pluginId)
 * @method string getPluginName
 * @method self withPluginName(string $pluginName)
 * @method string getPluginData
 * @method self withPluginData(string $pluginData)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyPlugin extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 */
class DescribePluginsByApi extends Roa
{
    use R;
}

/**
 * @method string getModelName
 * @method self withModelName(string $modelName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getSchema
 * @method self withSchema(string $schema)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class CreateModel extends Roa
{
    use R;
}

/**
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getModelName
 * @method self withModelName(string $modelName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getSchema
 * @method self withSchema(string $schema)
 * @method string getNewModelName
 * @method self withNewModelName(string $newModelName)
 */
class ModifyModel extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getModelName
 * @method self withModelName(string $modelName)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getModelId
 * @method self withModelId(string $modelId)
 */
class DescribeModels extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getModelName
 * @method self withModelName(string $modelName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class DeleteModel extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method bool getDeleteInternetDomain
 * @method self withDeleteInternetDomain(bool $deleteInternetDomain)
 */
class CreateIntranetDomain extends Roa
{
    use R;
}

/**
 * @method bool getOverwrite
 * @method self withOverwrite(bool $overwrite)
 * @method string getDataFormat
 * @method self withDataFormat(string $dataFormat)
 * @method string getData
 * @method self withData(string $data)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method bool getDryRun
 * @method self withDryRun(bool $dryRun)
 */
class ImportSwagger extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiPath
 * @method self withApiPath(string $apiPath)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 */
class GetApiMethods extends Roa
{
    use R;
}

/**
 * @method string getApiName
 * @method self withApiName(string $apiName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getStageId
 * @method self withStageId(string $stageId)
 * @method string getJavaDemo
 * @method self withJavaDemo(string $javaDemo)
 * @method string getPythonDemo
 * @method self withPythonDemo(string $pythonDemo)
 * @method string getCsharpDemo
 * @method self withCsharpDemo(string $csharpDemo)
 * @method string getPhpDemo
 * @method self withPhpDemo(string $phpDemo)
 * @method string getObjectcDemo
 * @method self withObjectcDemo(string $objectcDemo)
 * @method string getCurlDemo
 * @method self withCurlDemo(string $curlDemo)
 */
class CreateCustomizedInfo extends Roa
{
    use R;
}

/**
 * @method string getApiName
 * @method self withApiName(string $apiName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getStageId
 * @method self withStageId(string $stageId)
 */
class ResetCustomized extends Roa
{
    use R;
}

/**
 * @method string getApiName
 * @method self withApiName(string $apiName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getStageId
 * @method self withStageId(string $stageId)
 */
class GetCustomizedInfo extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getIpControlId
 * @method self withIpControlId(string $ipControlId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiIds
 * @method self withApiIds(string $apiIds)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 */
class SetIpControlApis extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getIpControlId
 * @method self withIpControlId(string $ipControlId)
 * @method string getPolicyItemIds
 * @method self withPolicyItemIds(string $policyItemIds)
 */
class RemoveIpControlPolicyItem extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getIpControlId
 * @method self withIpControlId(string $ipControlId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiIds
 * @method self withApiIds(string $apiIds)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 */
class RemoveIpControlApis extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getIpControlId
 * @method self withIpControlId(string $ipControlId)
 * @method string getPolicyItemId
 * @method self withPolicyItemId(string $policyItemId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getCidrIp
 * @method self withCidrIp(string $cidrIp)
 */
class ModifyIpControlPolicyItem extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getIpControlId
 * @method self withIpControlId(string $ipControlId)
 * @method string getIpControlName
 * @method self withIpControlName(string $ipControlName)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyIpControl extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getIpControlId
 * @method self withIpControlId(string $ipControlId)
 * @method string getIpControlName
 * @method self withIpControlName(string $ipControlName)
 * @method string getIpControlType
 * @method self withIpControlType(string $ipControlType)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeIpControls extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getIpControlId
 * @method self withIpControlId(string $ipControlId)
 * @method string getPolicyItemId
 * @method self withPolicyItemId(string $policyItemId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeIpControlPolicyItems extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getIpControlId
 * @method self withIpControlId(string $ipControlId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeApisByIpControl extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiIds
 * @method self withApiIds(string $apiIds)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeApiIpControls extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getIpControlId
 * @method self withIpControlId(string $ipControlId)
 */
class DeleteIpControl extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getIpControlName
 * @method self withIpControlName(string $ipControlName)
 * @method string getIpControlType
 * @method self withIpControlType(string $ipControlType)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method array getIpControlPolicys
 * @method self withIpControlPolicys(array $ipControlPolicys)
 */
class CreateIpControl extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getIpControlId
 * @method self withIpControlId(string $ipControlId)
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getCidrIp
 * @method self withCidrIp(string $cidrIp)
 */
class AddIpControlPolicyItem extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getSlsProject
 * @method self withSlsProject(string $slsProject)
 * @method string getSlsLogStore
 * @method self withSlsLogStore(string $slsLogStore)
 * @method string getLogType
 * @method self withLogType(string $logType)
 */
class CreateLogConfig extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getSlsProject
 * @method self withSlsProject(string $slsProject)
 * @method string getSlsLogStore
 * @method self withSlsLogStore(string $slsLogStore)
 * @method string getLogType
 * @method self withLogType(string $logType)
 */
class ModifyLogConfig extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getLogType
 * @method self withLogType(string $logType)
 */
class DeleteLogConfig extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getLogType
 * @method self withLogType(string $logType)
 */
class DescribeLogConfig extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getActionValue
 * @method self withActionValue(string $actionValue)
 */
class SetDomainWebSocketStatus extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class DescribeRaceWorkForInner extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getWorkName
 * @method self withWorkName(string $workName)
 * @method string getLogoUrl
 * @method self withLogoUrl(string $logoUrl)
 * @method string getShortDescription
 * @method self withShortDescription(string $shortDescription)
 * @method string getKeywords
 * @method self withKeywords(string $keywords)
 */
class CreateRaceWorkForInner extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class ReactivateDomain extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInstancePort
 * @method self withInstancePort(string $instancePort)
 * @method string getToken
 * @method self withToken(string $token)
 */
class VpcRevokeAccess extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInstancePort
 * @method self withInstancePort(string $instancePort)
 * @method string getToken
 * @method self withToken(string $token)
 */
class VpcModifyAccess extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getName
 * @method self withName(string $name)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInstancePort
 * @method self withInstancePort(string $instancePort)
 * @method string getToken
 * @method self withToken(string $token)
 */
class VpcGrantAccess extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInstancePort
 * @method self withInstancePort(string $instancePort)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class VpcDescribeAccesses extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getLanguage
 * @method self withLanguage(string $language)
 */
class SdkGenerateByGroup extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getAppId
 * @method self withAppId(int $appId)
 * @method string getLanguage
 * @method self withLanguage(string $language)
 */
class SdkGenerateByApp extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method int getAppId
 * @method self withAppId(int $appId)
 * @method string getLanguage
 * @method self withLanguage(string $language)
 */
class SdkGenerate extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 */
class DescribeApiGroupDetailForConsumer extends Roa
{
    use R;
}

class DescribeApiGroupDetailGatedLaunch extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStageId
 * @method self withStageId(string $stageId)
 */
class DescribeApiStageDetail extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStageId
 * @method self withStageId(string $stageId)
 * @method string getVariableName
 * @method self withVariableName(string $variableName)
 */
class DeleteApiStageVariable extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStageId
 * @method self withStageId(string $stageId)
 * @method string getVariableName
 * @method self withVariableName(string $variableName)
 * @method bool getSupportRoute
 * @method self withSupportRoute(bool $supportRoute)
 * @method string getVariableValue
 * @method self withVariableValue(string $variableValue)
 * @method string getStageRouteModel
 * @method self withStageRouteModel(string $stageRouteModel)
 */
class CreateApiStageVariable extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getInvokeParams
 * @method self withInvokeParams(string $invokeParams)
 */
class UpdateConsumerOpenInvokeTimesNow extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getHistoryVersion
 * @method self withHistoryVersion(string $historyVersion)
 */
class SwitchApi extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getMock
 * @method self withMock(string $mock)
 * @method string getMockResult
 * @method self withMockResult(string $mockResult)
 */
class SetMockIntegration extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getCertificateName
 * @method self withCertificateName(string $certificateName)
 * @method string getCertificateBody
 * @method self withCertificateBody(string $certificateBody)
 * @method string getPrivateKey
 * @method self withPrivateKey(string $privateKey)
 */
class SetDomainCertificate extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getCertificateName
 * @method self withCertificateName(string $certificateName)
 * @method string getCertificateBody
 * @method self withCertificateBody(string $certificateBody)
 * @method string getPrivateKey
 * @method self withPrivateKey(string $privateKey)
 */
class SetDomain extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 * @method string getRuleType
 * @method self withRuleType(string $ruleType)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiIds
 * @method self withApiIds(string $apiIds)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 */
class SetApiRule extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getAppIds
 * @method self withAppIds(string $appIds)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class SetAccessPermissions extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method int getAppId
 * @method self withAppId(int $appId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getApiIds
 * @method self withApiIds(string $apiIds)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getAuthVaildTime
 * @method self withAuthVaildTime(string $authVaildTime)
 * @method string getAuthValidTime
 * @method self withAuthValidTime(string $authValidTime)
 */
class SetAccessPermissionByApis extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getAppKey
 * @method self withAppKey(string $appKey)
 */
class ResetAppKeySecret extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getBlackType
 * @method self withBlackType(string $blackType)
 * @method string getBlackContent
 * @method self withBlackContent(string $blackContent)
 */
class RemoveBlackList extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getAppIds
 * @method self withAppIds(string $appIds)
 */
class RemoveAppsFromApi extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 * @method string getRuleType
 * @method self withRuleType(string $ruleType)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiIds
 * @method self withApiIds(string $apiIds)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 */
class RemoveApiRule extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getBlackType
 * @method self withBlackType(string $blackType)
 */
class RemoveAllBlackList extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getAppIds
 * @method self withAppIds(string $appIds)
 */
class RemoveAccessPermissionByApps extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method int getAppId
 * @method self withAppId(int $appId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getApiIds
 * @method self withApiIds(string $apiIds)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class RemoveAccessPermissionByApis extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class RefreshDomain extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getHistoryVersion
 * @method self withHistoryVersion(string $historyVersion)
 */
class RecoveryApiFromHistorical extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getHistoryVersion
 * @method self withHistoryVersion(string $historyVersion)
 */
class RecoveryApiDefineFromHistorical extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getHistoryVersion
 * @method self withHistoryVersion(string $historyVersion)
 */
class RecoverApiFromHistorical extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getTrafficControlId
 * @method self withTrafficControlId(string $trafficControlId)
 * @method string getTrafficControlName
 * @method self withTrafficControlName(string $trafficControlName)
 * @method string getTrafficControlUnit
 * @method self withTrafficControlUnit(string $trafficControlUnit)
 * @method Integer getApiDefault
 * @method self withApiDefault(Integer $apiDefault)
 * @method Integer getUserDefault
 * @method self withUserDefault(Integer $userDefault)
 * @method Integer getAppDefault
 * @method self withAppDefault(Integer $appDefault)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyTrafficControl extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getSecretKeyId
 * @method self withSecretKeyId(string $secretKeyId)
 * @method string getSecretKeyName
 * @method self withSecretKeyName(string $secretKeyName)
 * @method string getSecretKey
 * @method self withSecretKey(string $secretKey)
 * @method string getSecretValue
 * @method self withSecretValue(string $secretValue)
 */
class ModifySecretKey extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getAppId
 * @method self withAppId(int $appId)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyApp extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyApiGroup extends Roa
{
    use R;
}

/**
 * @method string getApiName
 * @method self withApiName(string $apiName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getVisibility
 * @method self withVisibility(string $visibility)
 * @method string getAuthType
 * @method self withAuthType(string $authType)
 * @method string getRequestConfig
 * @method self withRequestConfig(string $requestConfig)
 * @method string getServiceConfig
 * @method self withServiceConfig(string $serviceConfig)
 * @method string getRequestParamters
 * @method self withRequestParamters(string $requestParamters)
 * @method string getServiceParameters
 * @method self withServiceParameters(string $serviceParameters)
 * @method string getServiceParametersMap
 * @method self withServiceParametersMap(string $serviceParametersMap)
 * @method string getResultType
 * @method self withResultType(string $resultType)
 * @method string getResultSample
 * @method self withResultSample(string $resultSample)
 * @method string getFailResultSample
 * @method self withFailResultSample(string $failResultSample)
 * @method string getErrorCodeSamples
 * @method self withErrorCodeSamples(string $errorCodeSamples)
 * @method string getResultDescriptions
 * @method self withResultDescriptions(string $resultDescriptions)
 * @method string getOpenIdConnectConfig
 * @method self withOpenIdConnectConfig(string $openIdConnectConfig)
 * @method string getAllowSignatureMethod
 * @method self withAllowSignatureMethod(string $allowSignatureMethod)
 * @method string getWebSocketApiType
 * @method self withWebSocketApiType(string $webSocketApiType)
 * @method string getResultBodyModel
 * @method self withResultBodyModel(string $resultBodyModel)
 * @method bool getForceNonceCheck
 * @method self withForceNonceCheck(bool $forceNonceCheck)
 * @method bool getDisableInternet
 * @method self withDisableInternet(bool $disableInternet)
 */
class ModifyApi extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getTrafficControlId
 * @method self withTrafficControlId(string $trafficControlId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiUid
 * @method self withApiUid(string $apiUid)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getTrafficControlName
 * @method self withTrafficControlName(string $trafficControlName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeTrafficControls extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeSystemParams extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeSystemParameters extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getSecretKeyId
 * @method self withSecretKeyId(string $secretKeyId)
 * @method string getSecretKeyName
 * @method self withSecretKeyName(string $secretKeyName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeSecretKeys extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 */
class DescribeRulesByApi extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getLanguage
 * @method self withLanguage(string $language)
 */
class DescribeRegions extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getApiName
 * @method self withApiName(string $apiName)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribePurchasedApis extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribePurchasedApiGroups extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class DescribePurchasedApiGroupDetail extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 */
class DescribePurchasedApi extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getApiName
 * @method self withApiName(string $apiName)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getPageNumber
 * @method self withPageNumber(string $pageNumber)
 */
class DescribeHistoryApis extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getHistoryVersion
 * @method self withHistoryVersion(string $historyVersion)
 */
class DescribeHistoryApi extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 */
class DescribeDomainResolution extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeDomain extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getApiName
 * @method self withApiName(string $apiName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeDeployedApis extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 */
class DescribeDeployedApiForBackend extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 */
class DescribeDeployedApi extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getBlackType
 * @method self withBlackType(string $blackType)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeBlackLists extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getAppId
 * @method self withAppId(int $appId)
 * @method int getAppOwnerId
 * @method self withAppOwnerId(int $appOwnerId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeAppsForProvider extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getAppKey
 * @method self withAppKey(string $appKey)
 */
class DescribeAppSecurity extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getAppId
 * @method self withAppId(int $appId)
 */
class DescribeAppSecurities extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeAppsByApi extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getAppId
 * @method self withAppId(int $appId)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeApps extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getAppId
 * @method self withAppId(int $appId)
 */
class DescribeApp extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeApiTraffic extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getApiName
 * @method self withApiName(string $apiName)
 * @method string getVisibility
 * @method self withVisibility(string $visibility)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeApisForConsole extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getApiName
 * @method self withApiName(string $apiName)
 * @method string getVisibility
 * @method self withVisibility(string $visibility)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeApisForBackend extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 * @method string getRuleType
 * @method self withRuleType(string $ruleType)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeApisByRule extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getAppId
 * @method self withAppId(int $appId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeApisByApp extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getApiName
 * @method self withApiName(string $apiName)
 * @method string getVisibility
 * @method self withVisibility(string $visibility)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeApis extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getRuleType
 * @method self withRuleType(string $ruleType)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiIds
 * @method self withApiIds(string $apiIds)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getApiName
 * @method self withApiName(string $apiName)
 */
class DescribeApiRules extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeApiQps extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeApiLatency extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeApiGroupsForBackend extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeApiGroups extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 */
class DescribeApiGroupDetailForBackend extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class DescribeApiGroupDetail extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 */
class DescribeApiForBackend extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeApiError extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getApiName
 * @method self withApiName(string $apiName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeApiDocs extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 */
class DescribeApiDoc extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 */
class DescribeApi extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getSupportMock
 * @method self withSupportMock(string $supportMock)
 */
class DeployApi extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getTrafficControlId
 * @method self withTrafficControlId(string $trafficControlId)
 * @method string getSpecialType
 * @method self withSpecialType(string $specialType)
 * @method string getSpecialKey
 * @method self withSpecialKey(string $specialKey)
 */
class DeleteTrafficSpecialControl extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getTrafficControlId
 * @method self withTrafficControlId(string $trafficControlId)
 */
class DeleteTrafficControl extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getSecretKeyId
 * @method self withSecretKeyId(string $secretKeyId)
 */
class DeleteSecretKey extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getCertificateId
 * @method self withCertificateId(string $certificateId)
 */
class DeleteDomainCertificate extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DeleteDomain extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getAppId
 * @method self withAppId(int $appId)
 */
class DeleteApp extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class DeleteApiGroup extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 */
class DeleteApi extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getTrafficControlId
 * @method self withTrafficControlId(string $trafficControlId)
 */
class DeleteAllTrafficSpecialControl extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getTrafficControlName
 * @method self withTrafficControlName(string $trafficControlName)
 * @method string getTrafficControlUnit
 * @method self withTrafficControlUnit(string $trafficControlUnit)
 * @method Integer getApiDefault
 * @method self withApiDefault(Integer $apiDefault)
 * @method Integer getUserDefault
 * @method self withUserDefault(Integer $userDefault)
 * @method Integer getAppDefault
 * @method self withAppDefault(Integer $appDefault)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class CreateTrafficControl extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getSecretKeyName
 * @method self withSecretKeyName(string $secretKeyName)
 * @method string getSecretKey
 * @method self withSecretKey(string $secretKey)
 * @method string getSecretValue
 * @method self withSecretValue(string $secretValue)
 */
class CreateSecretKey extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getSkuId
 * @method self withSkuId(string $skuId)
 * @method Integer getAccountQuantity
 * @method self withAccountQuantity(Integer $accountQuantity)
 * @method string getExpiredOn
 * @method self withExpiredOn(string $expiredOn)
 * @method string getToken
 * @method self withToken(string $token)
 */
class CreateInstance extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class CreateApp extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class CreateApiGroup extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiName
 * @method self withApiName(string $apiName)
 * @method string getVisibility
 * @method self withVisibility(string $visibility)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getAuthType
 * @method self withAuthType(string $authType)
 * @method string getRequestConfig
 * @method self withRequestConfig(string $requestConfig)
 * @method string getServiceConfig
 * @method self withServiceConfig(string $serviceConfig)
 * @method string getRequestParamters
 * @method self withRequestParamters(string $requestParamters)
 * @method string getServiceParameters
 * @method self withServiceParameters(string $serviceParameters)
 * @method string getServiceParametersMap
 * @method self withServiceParametersMap(string $serviceParametersMap)
 * @method string getResultType
 * @method self withResultType(string $resultType)
 * @method string getResultSample
 * @method self withResultSample(string $resultSample)
 * @method string getFailResultSample
 * @method self withFailResultSample(string $failResultSample)
 * @method string getErrorCodeSamples
 * @method self withErrorCodeSamples(string $errorCodeSamples)
 * @method string getResultDescriptions
 * @method self withResultDescriptions(string $resultDescriptions)
 * @method string getOpenIdConnectConfig
 * @method self withOpenIdConnectConfig(string $openIdConnectConfig)
 * @method string getAllowSignatureMethod
 * @method self withAllowSignatureMethod(string $allowSignatureMethod)
 * @method string getWebSocketApiType
 * @method self withWebSocketApiType(string $webSocketApiType)
 * @method string getResultBodyModel
 * @method self withResultBodyModel(string $resultBodyModel)
 * @method bool getForceNonceCheck
 * @method self withForceNonceCheck(bool $forceNonceCheck)
 * @method bool getDisableInternet
 * @method self withDisableInternet(bool $disableInternet)
 */
class CreateApi extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getTrafficControlId
 * @method self withTrafficControlId(string $trafficControlId)
 * @method string getSpecialType
 * @method self withSpecialType(string $specialType)
 * @method string getSpecialKey
 * @method self withSpecialKey(string $specialKey)
 * @method Integer getTrafficValue
 * @method self withTrafficValue(Integer $trafficValue)
 */
class AddTrafficSpecialControl extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getBlackType
 * @method self withBlackType(string $blackType)
 * @method string getBlackContent
 * @method self withBlackContent(string $blackContent)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class AddBlackList extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 */
class AbolishApi extends Roa
{
    use R;
}
