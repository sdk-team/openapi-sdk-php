<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ModifyGroupInstance modifyGroupInstance($options = [])
 * @method DeletePlugin deletePlugin($options = [])
 * @method DescribePluginApis describePluginApis($options = [])
 * @method CreatePlugin createPlugin($options = [])
 * @method AttachPlugin attachPlugin($options = [])
 * @method DescribePlugins describePlugins($options = [])
 * @method DescribePluginsByApi describePluginsByApi($options = [])
 * @method DetachPlugin detachPlugin($options = [])
 * @method ModifyPlugin modifyPlugin($options = [])
 * @method DescribeApp describeApp($options = [])
 * @method SetGroupAuthAppCode setGroupAuthAppCode($options = [])
 * @method CreateModel createModel($options = [])
 * @method DeleteModel deleteModel($options = [])
 * @method DescribeModels describeModels($options = [])
 * @method ModifyModel modifyModel($options = [])
 * @method GenerateInstanceToken generateInstanceToken($options = [])
 * @method CreateIntranetDomain createIntranetDomain($options = [])
 * @method ImportSwagger importSwagger($options = [])
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
 * @method ModifyLogConfig modifyLogConfig($options = [])
 * @method DescribeLogConfig describeLogConfig($options = [])
 * @method DeleteLogConfig deleteLogConfig($options = [])
 * @method CreateLogConfig createLogConfig($options = [])
 * @method SetDomainWebSocketStatus setDomainWebSocketStatus($options = [])
 * @method RemoveCatalogRelations removeCatalogRelations($options = [])
 * @method RemoveCatalogRelation removeCatalogRelation($options = [])
 * @method ModifyCatalog modifyCatalog($options = [])
 * @method DescribeCatalogs describeCatalogs($options = [])
 * @method DescribeCatalog describeCatalog($options = [])
 * @method DeleteCatalog deleteCatalog($options = [])
 * @method CreateCatalog createCatalog($options = [])
 * @method ClearCatalogRelations clearCatalogRelations($options = [])
 * @method AddCatalogRelations addCatalogRelations($options = [])
 * @method AddCatalogRelation addCatalogRelation($options = [])
 * @method RemoveVpcAccess removeVpcAccess($options = [])
 * @method SetVpcAccess setVpcAccess($options = [])
 * @method DescribeVpcAccesses describeVpcAccesses($options = [])
 * @method ReactivateDomain reactivateDomain($options = [])
 * @method DescribeApiHistories describeApiHistories($options = [])
 * @method SdkGenerateByGroup sdkGenerateByGroup($options = [])
 * @method SdkGenerateByApp sdkGenerateByApp($options = [])
 * @method DescribeApisByApp describeApisByApp($options = [])
 * @method SdkGenerate sdkGenerate($options = [])
 * @method DescribeApiStage describeApiStage($options = [])
 * @method DeleteApiStageVariable deleteApiStageVariable($options = [])
 * @method CreateApiStageVariable createApiStageVariable($options = [])
 * @method SwitchApi switchApi($options = [])
 * @method SetTrafficControlApis setTrafficControlApis($options = [])
 * @method SetSignatureApis setSignatureApis($options = [])
 * @method SetDomainCertificate setDomainCertificate($options = [])
 * @method SetDomain setDomain($options = [])
 * @method SetAppsAuthorities setAppsAuthorities($options = [])
 * @method SetApisAuthorities setApisAuthorities($options = [])
 * @method ResetAppSecret resetAppSecret($options = [])
 * @method RemoveTrafficControlApis removeTrafficControlApis($options = [])
 * @method RemoveSignatureApis removeSignatureApis($options = [])
 * @method RemoveAppsAuthorities removeAppsAuthorities($options = [])
 * @method RemoveApisAuthorities removeApisAuthorities($options = [])
 * @method ModifyTrafficControl modifyTrafficControl($options = [])
 * @method ModifySignature modifySignature($options = [])
 * @method ModifyApp modifyApp($options = [])
 * @method ModifyApiGroup modifyApiGroup($options = [])
 * @method ModifyApi modifyApi($options = [])
 * @method DescribeTrafficControlsByApi describeTrafficControlsByApi($options = [])
 * @method DescribeTrafficControls describeTrafficControls($options = [])
 * @method DescribeSystemParameters describeSystemParameters($options = [])
 * @method DescribeSignaturesByApi describeSignaturesByApi($options = [])
 * @method DescribeSignatures describeSignatures($options = [])
 * @method DescribeRegions describeRegions($options = [])
 * @method DescribePurchasedApis describePurchasedApis($options = [])
 * @method DescribePurchasedApiGroups describePurchasedApiGroups($options = [])
 * @method DescribePurchasedApiGroup describePurchasedApiGroup($options = [])
 * @method DescribeHistoryApis describeHistoryApis($options = [])
 * @method DescribeDomainsResolution describeDomainsResolution($options = [])
 * @method DescribeDomain describeDomain($options = [])
 * @method DescribeDeployedApis describeDeployedApis($options = [])
 * @method DescribeDeployedApi describeDeployedApi($options = [])
 * @method DescribeAuthorizedApps describeAuthorizedApps($options = [])
 * @method DescribeAuthorizedApis describeAuthorizedApis($options = [])
 * @method DescribeAppSecurity describeAppSecurity($options = [])
 * @method DescribeApps describeApps($options = [])
 * @method DescribeAppAttributes describeAppAttributes($options = [])
 * @method DescribeApiTrafficData describeApiTrafficData($options = [])
 * @method DescribeApiTrafficControls describeApiTrafficControls($options = [])
 * @method DescribeApiSignatures describeApiSignatures($options = [])
 * @method DescribeApisByTrafficControl describeApisByTrafficControl($options = [])
 * @method DescribeApisBySignature describeApisBySignature($options = [])
 * @method DescribeApis describeApis($options = [])
 * @method DescribeApiQpsData describeApiQpsData($options = [])
 * @method DescribeApiLatencyData describeApiLatencyData($options = [])
 * @method DescribeApiHistory describeApiHistory($options = [])
 * @method DescribeApiGroups describeApiGroups($options = [])
 * @method DescribeApiGroup describeApiGroup($options = [])
 * @method DescribeApiErrorData describeApiErrorData($options = [])
 * @method DescribeApiDoc describeApiDoc($options = [])
 * @method DescribeApi describeApi($options = [])
 * @method DeployApi deployApi($options = [])
 * @method DeleteTrafficSpecialControl deleteTrafficSpecialControl($options = [])
 * @method DeleteTrafficControl deleteTrafficControl($options = [])
 * @method DeleteSignature deleteSignature($options = [])
 * @method DeleteDomainCertificate deleteDomainCertificate($options = [])
 * @method DeleteDomain deleteDomain($options = [])
 * @method DeleteApp deleteApp($options = [])
 * @method DeleteApiGroup deleteApiGroup($options = [])
 * @method DeleteApi deleteApi($options = [])
 * @method DeleteAllTrafficSpecialControl deleteAllTrafficSpecialControl($options = [])
 * @method CreateTrafficControl createTrafficControl($options = [])
 * @method CreateSignature createSignature($options = [])
 * @method CreateApp createApp($options = [])
 * @method CreateApiGroup createApiGroup($options = [])
 * @method CreateApi createApi($options = [])
 * @method AddTrafficSpecialControl addTrafficSpecialControl($options = [])
 * @method AbolishApi abolishApi($options = [])
 */
class V20160714
{
    use ApiResolverTrait;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getTargetInstanceId
 * @method self withTargetInstanceId(string $targetInstanceId)
 * @method string getRemark
 * @method self withRemark(string $remark)
 */
class ModifyGroupInstance extends Roa
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
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiIds
 * @method self withApiIds(string $apiIds)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 */
class AttachPlugin extends Roa
{
    use R;
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
 * @method string getApiId
 * @method self withApiId(string $apiId)
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
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getAuthAppCode
 * @method self withAuthAppCode(string $authAppCode)
 */
class SetGroupAuthAppCode extends Roa
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
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getSchema
 * @method self withSchema(string $schema)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getNewModelName
 * @method self withNewModelName(string $newModelName)
 */
class ModifyModel extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class GenerateInstanceToken extends Roa
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
 */
class ImportSwagger extends Roa
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
class DescribeLogConfig extends Roa
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
 * @method string getCatalogId
 * @method self withCatalogId(string $catalogId)
 */
class RemoveCatalogRelations extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getCatalogId
 * @method self withCatalogId(string $catalogId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 */
class RemoveCatalogRelation extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getCatalogId
 * @method self withCatalogId(string $catalogId)
 * @method string getCatalogName
 * @method self withCatalogName(string $catalogName)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyCatalog extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeCatalogs extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getCatalogId
 * @method self withCatalogId(string $catalogId)
 */
class DescribeCatalog extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getCatalogId
 * @method self withCatalogId(string $catalogId)
 */
class DeleteCatalog extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getCatalogName
 * @method self withCatalogName(string $catalogName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getParentId
 * @method self withParentId(string $parentId)
 */
class CreateCatalog extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getCatalogId
 * @method self withCatalogId(string $catalogId)
 */
class ClearCatalogRelations extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getCatalogId
 * @method self withCatalogId(string $catalogId)
 * @method string getApiIds
 * @method self withApiIds(string $apiIds)
 */
class AddCatalogRelations extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getCatalogId
 * @method self withCatalogId(string $catalogId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 */
class AddCatalogRelation extends Roa
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
 * @method Integer getPort
 * @method self withPort(Integer $port)
 */
class RemoveVpcAccess extends Roa
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
 * @method Integer getPort
 * @method self withPort(Integer $port)
 */
class SetVpcAccess extends Roa
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
class DescribeVpcAccesses extends Roa
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
class DescribeApiHistories extends Roa
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
 * @method string getStageId
 * @method self withStageId(string $stageId)
 */
class DescribeApiStage extends Roa
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
 * @method string getTrafficControlId
 * @method self withTrafficControlId(string $trafficControlId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiIds
 * @method self withApiIds(string $apiIds)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 */
class SetTrafficControlApis extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getSignatureId
 * @method self withSignatureId(string $signatureId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiIds
 * @method self withApiIds(string $apiIds)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 */
class SetSignatureApis extends Roa
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
 * @method string getCertificatePrivateKey
 * @method self withCertificatePrivateKey(string $certificatePrivateKey)
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
 * @method string getCertificatePrivateKey
 * @method self withCertificatePrivateKey(string $certificatePrivateKey)
 */
class SetDomain extends Roa
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
 * @method string getAuthVaildTime
 * @method self withAuthVaildTime(string $authVaildTime)
 * @method string getAuthValidTime
 * @method self withAuthValidTime(string $authValidTime)
 */
class SetAppsAuthorities extends Roa
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
class SetApisAuthorities extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getAppKey
 * @method self withAppKey(string $appKey)
 */
class ResetAppSecret extends Roa
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
 * @method string getApiIds
 * @method self withApiIds(string $apiIds)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 */
class RemoveTrafficControlApis extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getSignatureId
 * @method self withSignatureId(string $signatureId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiIds
 * @method self withApiIds(string $apiIds)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 */
class RemoveSignatureApis extends Roa
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
class RemoveAppsAuthorities extends Roa
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
class RemoveApisAuthorities extends Roa
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
 * @method string getSignatureId
 * @method self withSignatureId(string $signatureId)
 * @method string getSignatureName
 * @method self withSignatureName(string $signatureName)
 * @method string getSignatureKey
 * @method self withSignatureKey(string $signatureKey)
 * @method string getSignatureSecret
 * @method self withSignatureSecret(string $signatureSecret)
 */
class ModifySignature extends Roa
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
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getApiName
 * @method self withApiName(string $apiName)
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
 * @method string getRequestParameters
 * @method self withRequestParameters(string $requestParameters)
 * @method string getSystemParameters
 * @method self withSystemParameters(string $systemParameters)
 * @method string getConstantParameters
 * @method self withConstantParameters(string $constantParameters)
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
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 */
class DescribeTrafficControlsByApi extends Roa
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
 * @method string getApiId
 * @method self withApiId(string $apiId)
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
class DescribeSystemParameters extends Roa
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
class DescribeSignaturesByApi extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getSignatureId
 * @method self withSignatureId(string $signatureId)
 * @method string getSignatureName
 * @method self withSignatureName(string $signatureName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeSignatures extends Roa
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
class DescribePurchasedApiGroup extends Roa
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
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 */
class DescribeDomainsResolution extends Roa
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
class DescribeDeployedApi extends Roa
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
class DescribeAuthorizedApps extends Roa
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
class DescribeAuthorizedApis extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getAppId
 * @method self withAppId(int $appId)
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
 * @method int getAppOwner
 * @method self withAppOwner(int $appOwner)
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
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeAppAttributes extends Roa
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
class DescribeApiTrafficData extends Roa
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
class DescribeApiTrafficControls extends Roa
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
class DescribeApiSignatures extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getTrafficControlId
 * @method self withTrafficControlId(string $trafficControlId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeApisByTrafficControl extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getSignatureId
 * @method self withSignatureId(string $signatureId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeApisBySignature extends Roa
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
 * @method string getCatalogId
 * @method self withCatalogId(string $catalogId)
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
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeApiQpsData extends Roa
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
class DescribeApiLatencyData extends Roa
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
class DescribeApiHistory extends Roa
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
 */
class DescribeApiGroup extends Roa
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
class DescribeApiErrorData extends Roa
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
 * @method string getSignatureId
 * @method self withSignatureId(string $signatureId)
 */
class DeleteSignature extends Roa
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
 * @method string getSignatureName
 * @method self withSignatureName(string $signatureName)
 * @method string getSignatureKey
 * @method self withSignatureKey(string $signatureKey)
 * @method string getSignatureSecret
 * @method self withSignatureSecret(string $signatureSecret)
 */
class CreateSignature extends Roa
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
 * @method string getSource
 * @method self withSource(string $source)
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
 * @method string getRequestParameters
 * @method self withRequestParameters(string $requestParameters)
 * @method string getSystemParameters
 * @method self withSystemParameters(string $systemParameters)
 * @method string getConstantParameters
 * @method self withConstantParameters(string $constantParameters)
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
