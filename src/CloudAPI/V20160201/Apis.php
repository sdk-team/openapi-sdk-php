<?php

namespace AlibabaCloud\CloudAPI\V20160201;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DescribeUserWhiteLists describeUserWhiteLists($options = [])
 * @method IsIncludedByUserWhitelist isIncludedByUserWhitelist($options = [])
 * @method LoadVpcAccess loadVpcAccess($options = [])
 * @method DescribeModelsForInner describeModelsForInner($options = [])
 * @method VipMigrationByUid vipMigrationByUid($options = [])
 * @method DescribeBidByUserIdForInner describeBidByUserIdForInner($options = [])
 * @method DescribeAvailableVips describeAvailableVips($options = [])
 * @method VipMigration vipMigration($options = [])
 * @method ReactivateDomainForBackend reactivateDomainForBackend($options = [])
 * @method DescribeApiDocsForBackend describeApiDocsForBackend($options = [])
 * @method CheckAoneAppAudit checkAoneAppAudit($options = [])
 * @method DescribeRaceWorksForInner describeRaceWorksForInner($options = [])
 * @method DescribeRaceWorkForInner describeRaceWorkForInner($options = [])
 * @method CreateRaceWorkForInner createRaceWorkForInner($options = [])
 * @method ModifyDomainStatusForBackend modifyDomainStatusForBackend($options = [])
 * @method VpcRemoveAppServer vpcRemoveAppServer($options = [])
 * @method VpcRegisterApp vpcRegisterApp($options = [])
 * @method VpcQueryAppServers vpcQueryAppServers($options = [])
 * @method VpcCreateAddressPool vpcCreateAddressPool($options = [])
 * @method VpcAddAppServer vpcAddAppServer($options = [])
 * @method SwitchApiForInner switchApiForInner($options = [])
 * @method CheckAccountForInner checkAccountForInner($options = [])
 * @method IsInnerAccountForInner isInnerAccountForInner($options = [])
 * @method ModifyGroupExtendForBackend modifyGroupExtendForBackend($options = [])
 * @method RefundInstance refundInstance($options = [])
 * @method ResetAppCodeForInner resetAppCodeForInner($options = [])
 * @method ResetAppCode resetAppCode($options = [])
 * @method ModifyGroupAuthAppCodeForBackend modifyGroupAuthAppCodeForBackend($options = [])
 * @method CheckServiceAddressForInner checkServiceAddressForInner($options = [])
 * @method ModifyGroupStatusForBackend modifyGroupStatusForBackend($options = [])
 * @method CopyConsumerOpenForInner copyConsumerOpenForInner($options = [])
 * @method SetDomainForBackend setDomainForBackend($options = [])
 * @method SetAccessPermissionsForInner setAccessPermissionsForInner($options = [])
 * @method RemoveAccessPermissionByAppsForInner removeAccessPermissionByAppsForInner($options = [])
 * @method ModifyApiForInner modifyApiForInner($options = [])
 * @method DescribeApiGroupByApiForInner describeApiGroupByApiForInner($options = [])
 * @method DeployApiForInner deployApiForInner($options = [])
 * @method DeleteApiForInner deleteApiForInner($options = [])
 * @method CreateApiGroupForInner createApiGroupForInner($options = [])
 * @method CreateApiForInner createApiForInner($options = [])
 * @method AbolishApiForInner abolishApiForInner($options = [])
 * @method ModifyGroupQpsForBackend modifyGroupQpsForBackend($options = [])
 * @method ClearCacheForBackend clearCacheForBackend($options = [])
 * @method DeleteDomainForBackend deleteDomainForBackend($options = [])
 * @method SetPurchasedApiGroupStatus setPurchasedApiGroupStatus($options = [])
 * @method SetAccessPermissionByGroupForBackend setAccessPermissionByGroupForBackend($options = [])
 * @method CreateAppForBackend createAppForBackend($options = [])
 * @method CreateAppForInner createAppForInner($options = [])
 * @method DescribeDeployedApiForBackend describeDeployedApiForBackend($options = [])
 * @method DescribeApisForBackend describeApisForBackend($options = [])
 * @method DescribeApiGroupsForBackend describeApiGroupsForBackend($options = [])
 * @method DescribeApiGroupDetailForBackend describeApiGroupDetailForBackend($options = [])
 * @method DescribeApiForBackend describeApiForBackend($options = [])
 * @method UpdateConsumerOpenInvokeTimesNow updateConsumerOpenInvokeTimesNow($options = [])
 * @method DescribePurchasedApis describePurchasedApis($options = [])
 * @method DescribePurchasedApiGroups describePurchasedApiGroups($options = [])
 * @method DescribePurchasedApiGroupDetail describePurchasedApiGroupDetail($options = [])
 * @method DescribePurchasedApi describePurchasedApi($options = [])
 * @method CreateInstance createInstance($options = [])
 * @method SetMockIntegration setMockIntegration($options = [])
 * @method DescribeDomainResolution describeDomainResolution($options = [])
 * @method RecoverApiFromHistorical recoverApiFromHistorical($options = [])
 * @method RecoveryApiFromHistorical recoveryApiFromHistorical($options = [])
 * @method SwitchApi switchApi($options = [])
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
 * @method RecoveryApiDefineFromHistorical recoveryApiDefineFromHistorical($options = [])
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
 * @method DescribeHistoryApis describeHistoryApis($options = [])
 * @method DescribeHistoryApi describeHistoryApi($options = [])
 * @method DescribeDomain describeDomain($options = [])
 * @method DescribeDeployedApis describeDeployedApis($options = [])
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
 * @method DescribeApisByRule describeApisByRule($options = [])
 * @method DescribeApisByApp describeApisByApp($options = [])
 * @method DescribeApis describeApis($options = [])
 * @method DescribeApiRules describeApiRules($options = [])
 * @method DescribeApiQps describeApiQps($options = [])
 * @method DescribeApiLatency describeApiLatency($options = [])
 * @method DescribeApiGroups describeApiGroups($options = [])
 * @method DescribeApiGroupDetail describeApiGroupDetail($options = [])
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
 * @method CreateApp createApp($options = [])
 * @method CreateApiGroup createApiGroup($options = [])
 * @method CreateApi createApi($options = [])
 * @method AddTrafficSpecialControl addTrafficSpecialControl($options = [])
 * @method AddBlackList addBlackList($options = [])
 * @method AbolishApi abolishApi($options = [])
 */
class V20160201
{
    use ApiResolverTrait;
}

/**
 * @method string getType
 * @method self withType(string $type)
 * @method int getUid
 * @method self withUid(int $uid)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeUserWhiteLists extends Roa
{
    use R;
}

/**
 * @method string getType
 * @method self withType(string $type)
 */
class IsIncludedByUserWhitelist extends Roa
{
    use R;
}

/**
 * @method string getSourceVpcId
 * @method self withSourceVpcId(string $sourceVpcId)
 * @method string getTargetVpcId
 * @method self withTargetVpcId(string $targetVpcId)
 * @method string getTargetInstance
 * @method self withTargetInstance(string $targetInstance)
 * @method Integer getPort
 * @method self withPort(Integer $port)
 */
class LoadVpcAccess extends Roa
{
    use R;
}

/**
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getModelName
 * @method self withModelName(string $modelName)
 * @method string getModelId
 * @method self withModelId(string $modelId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 */
class DescribeModelsForInner extends Roa
{
    use R;
}

/**
 * @method string getOriginalVip
 * @method self withOriginalVip(string $originalVip)
 * @method string getNewVip
 * @method self withNewVip(string $newVip)
 */
class VipMigrationByUid extends Roa
{
    use R;
}

/**
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 */
class DescribeBidByUserIdForInner extends Roa
{
    use R;
}

/**
 * @method string getVip
 * @method self withVip(string $vip)
 */
class DescribeAvailableVips extends Roa
{
    use R;
}

/**
 * @method string getOriginalVip
 * @method self withOriginalVip(string $originalVip)
 * @method string getNewVip
 * @method self withNewVip(string $newVip)
 */
class VipMigration extends Roa
{
    use R;
}

/**
 * @method int getAliuid
 * @method self withAliuid(int $aliuid)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class ReactivateDomainForBackend extends Roa
{
    use R;
}

/**
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
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
class DescribeApiDocsForBackend extends Roa
{
    use R;
}

/**
 * @method string getAoneAppName
 * @method self withAoneAppName(string $aoneAppName)
 */
class CheckAoneAppAudit extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeRaceWorksForInner extends Roa
{
    use R;
}

/**
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class DescribeRaceWorkForInner extends Roa
{
    use R;
}

/**
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
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getDomainStatus
 * @method self withDomainStatus(string $domainStatus)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getBitValue
 * @method self withBitValue(string $bitValue)
 */
class ModifyDomainStatusForBackend extends Roa
{
    use R;
}

/**
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getServerIp
 * @method self withServerIp(string $serverIp)
 * @method string getToken
 * @method self withToken(string $token)
 */
class VpcRemoveAppServer extends Roa
{
    use R;
}

/**
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getToken
 * @method self withToken(string $token)
 */
class VpcRegisterApp extends Roa
{
    use R;
}

/**
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getAddressPoolId
 * @method self withAddressPoolId(string $addressPoolId)
 * @method string getServerIp
 * @method self withServerIp(string $serverIp)
 */
class VpcQueryAppServers extends Roa
{
    use R;
}

/**
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getToken
 * @method self withToken(string $token)
 */
class VpcCreateAddressPool extends Roa
{
    use R;
}

/**
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getAddressPoolId
 * @method self withAddressPoolId(string $addressPoolId)
 * @method string getServerIp
 * @method self withServerIp(string $serverIp)
 * @method string getToken
 * @method self withToken(string $token)
 */
class VpcAddAppServer extends Roa
{
    use R;
}

/**
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
class SwitchApiForInner extends Roa
{
    use R;
}

/**
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 */
class CheckAccountForInner extends Roa
{
    use R;
}

/**
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method bool getDefaultValue
 * @method self withDefaultValue(bool $defaultValue)
 */
class IsInnerAccountForInner extends Roa
{
    use R;
}

/**
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getExcludeApis
 * @method self withExcludeApis(string $excludeApis)
 */
class ModifyGroupExtendForBackend extends Roa
{
    use R;
}

/**
 * @method string getSkuId
 * @method self withSkuId(string $skuId)
 * @method int getAccountQuantity
 * @method self withAccountQuantity(int $accountQuantity)
 * @method string getToken
 * @method self withToken(string $token)
 */
class RefundInstance extends Roa
{
    use R;
}

/**
 * @method string getAppCode
 * @method self withAppCode(string $appCode)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 */
class ResetAppCodeForInner extends Roa
{
    use R;
}

/**
 * @method string getAppCode
 * @method self withAppCode(string $appCode)
 */
class ResetAppCode extends Roa
{
    use R;
}

/**
 * @method string getAuthAppCode
 * @method self withAuthAppCode(string $authAppCode)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 */
class ModifyGroupAuthAppCodeForBackend extends Roa
{
    use R;
}

/**
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getServerAddress
 * @method self withServerAddress(string $serverAddress)
 */
class CheckServiceAddressForInner extends Roa
{
    use R;
}

/**
 * @method string getBillingStatus
 * @method self withBillingStatus(string $billingStatus)
 * @method string getIllegalStatus
 * @method self withIllegalStatus(string $illegalStatus)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class ModifyGroupStatusForBackend extends Roa
{
    use R;
}

/**
 * @method string getCopyList
 * @method self withCopyList(string $copyList)
 */
class CopyConsumerOpenForInner extends Roa
{
    use R;
}

/**
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
class SetDomainForBackend extends Roa
{
    use R;
}

/**
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
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
 * @method string getSource
 * @method self withSource(string $source)
 */
class SetAccessPermissionsForInner extends Roa
{
    use R;
}

/**
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getAppIds
 * @method self withAppIds(string $appIds)
 * @method string getSource
 * @method self withSource(string $source)
 */
class RemoveAccessPermissionByAppsForInner extends Roa
{
    use R;
}

/**
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
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
 */
class ModifyApiForInner extends Roa
{
    use R;
}

/**
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 */
class DescribeApiGroupByApiForInner extends Roa
{
    use R;
}

/**
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class DeployApiForInner extends Roa
{
    use R;
}

/**
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 */
class DeleteApiForInner extends Roa
{
    use R;
}

/**
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getSource
 * @method self withSource(string $source)
 */
class CreateApiGroupForInner extends Roa
{
    use R;
}

/**
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
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
 */
class CreateApiForInner extends Roa
{
    use R;
}

/**
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getStageName
 * @method self withStageName(string $stageName)
 */
class AbolishApiForInner extends Roa
{
    use R;
}

/**
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method Integer getQpsLimit
 * @method self withQpsLimit(Integer $qpsLimit)
 */
class ModifyGroupQpsForBackend extends Roa
{
    use R;
}

/**
 * @method int getcallerUid
 * @method self withcallerUid(int $callerUid)
 * @method string getCacheNamespace
 * @method self withCacheNamespace(string $cacheNamespace)
 * @method string getCacheKey
 * @method self withCacheKey(string $cacheKey)
 */
class ClearCacheForBackend extends Roa
{
    use R;
}

/**
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DeleteDomainForBackend extends Roa
{
    use R;
}

/**
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getBillingStatus
 * @method self withBillingStatus(string $billingStatus)
 */
class SetPurchasedApiGroupStatus extends Roa
{
    use R;
}

/**
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method int getAppId
 * @method self withAppId(int $appId)
 */
class SetAccessPermissionByGroupForBackend extends Roa
{
    use R;
}

/**
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getSource
 * @method self withSource(string $source)
 */
class CreateAppForBackend extends Roa
{
    use R;
}

/**
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getSource
 * @method self withSource(string $source)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 */
class CreateAppForInner extends Roa
{
    use R;
}

/**
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
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class DescribeApiGroupDetailForBackend extends Roa
{
    use R;
}

/**
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
 * @method string getInvokeParams
 * @method self withInvokeParams(string $invokeParams)
 */
class UpdateConsumerOpenInvokeTimesNow extends Roa
{
    use R;
}

/**
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
 * @method string getGroupIds
 * @method self withGroupIds(string $groupIds)
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
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class DescribePurchasedApiGroupDetail extends Roa
{
    use R;
}

/**
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
 * @method string getSkuId
 * @method self withSkuId(string $skuId)
 * @method int getAccountQuantity
 * @method self withAccountQuantity(int $accountQuantity)
 * @method string getExpiredOn
 * @method self withExpiredOn(string $expiredOn)
 * @method int getAppId
 * @method self withAppId(int $appId)
 * @method string getBillingType
 * @method self withBillingType(string $billingType)
 * @method string getCloudMarketInstanceId
 * @method self withCloudMarketInstanceId(string $cloudMarketInstanceId)
 * @method string getToken
 * @method self withToken(string $token)
 * @method int getAlarmQuota
 * @method self withAlarmQuota(int $alarmQuota)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 */
class CreateInstance extends Roa
{
    use R;
}

/**
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
class SetAccessPermissionByApis extends Roa
{
    use R;
}

/**
 * @method string getAppKey
 * @method self withAppKey(string $appKey)
 */
class ResetAppKeySecret extends Roa
{
    use R;
}

/**
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
 * @method string getBlackType
 * @method self withBlackType(string $blackType)
 */
class RemoveAllBlackList extends Roa
{
    use R;
}

/**
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
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiId
 * @method self withApiId(string $apiId)
 * @method string getApiName
 * @method self withApiName(string $apiName)
 * @method string getPath
 * @method self withPath(string $path)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getBodyFormat
 * @method self withBodyFormat(string $bodyFormat)
 * @method string getPostBodyType
 * @method self withPostBodyType(string $postBodyType)
 * @method string getPostBodyDescription
 * @method self withPostBodyDescription(string $postBodyDescription)
 * @method string getHttpMethod
 * @method self withHttpMethod(string $httpMethod)
 * @method string getHttpProtocol
 * @method self withHttpProtocol(string $httpProtocol)
 * @method string getResultType
 * @method self withResultType(string $resultType)
 * @method string getResultSample
 * @method self withResultSample(string $resultSample)
 * @method string getServiceProtocol
 * @method self withServiceProtocol(string $serviceProtocol)
 * @method string getServiceAddress
 * @method self withServiceAddress(string $serviceAddress)
 * @method Integer getServiceTimeout
 * @method self withServiceTimeout(Integer $serviceTimeout)
 * @method string getVisibility
 * @method self withVisibility(string $visibility)
 * @method string getAuthType
 * @method self withAuthType(string $authType)
 * @method string getSystemParameters
 * @method self withSystemParameters(string $systemParameters)
 * @method string getConstantParameters
 * @method self withConstantParameters(string $constantParameters)
 * @method string getPathParameters
 * @method self withPathParameters(string $pathParameters)
 * @method string getRequestHeaders
 * @method self withRequestHeaders(string $requestHeaders)
 * @method string getRequestQueries
 * @method self withRequestQueries(string $requestQueries)
 * @method string getRequestBody
 * @method self withRequestBody(string $requestBody)
 */
class ModifyApi extends Roa
{
    use R;
}

/**
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
 * @method int getAppId
 * @method self withAppId(int $appId)
 * @method string getAppOwner
 * @method self withAppOwner(string $appOwner)
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
 * @method string getAppKey
 * @method self withAppKey(string $appKey)
 */
class DescribeAppSecurity extends Roa
{
    use R;
}

/**
 * @method int getAppId
 * @method self withAppId(int $appId)
 */
class DescribeAppSecurities extends Roa
{
    use R;
}

/**
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
 * @method int getAppId
 * @method self withAppId(int $appId)
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
 * @method int getAppId
 * @method self withAppId(int $appId)
 */
class DescribeApp extends Roa
{
    use R;
}

/**
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
 */
class DescribeApiRules extends Roa
{
    use R;
}

/**
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
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class DescribeApiGroupDetail extends Roa
{
    use R;
}

/**
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
 * @method string getTrafficControlId
 * @method self withTrafficControlId(string $trafficControlId)
 */
class DeleteTrafficControl extends Roa
{
    use R;
}

/**
 * @method string getSecretKeyId
 * @method self withSecretKeyId(string $secretKeyId)
 */
class DeleteSecretKey extends Roa
{
    use R;
}

/**
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
 * @method int getAppId
 * @method self withAppId(int $appId)
 */
class DeleteApp extends Roa
{
    use R;
}

/**
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class DeleteApiGroup extends Roa
{
    use R;
}

/**
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
 * @method string getTrafficControlId
 * @method self withTrafficControlId(string $trafficControlId)
 */
class DeleteAllTrafficSpecialControl extends Roa
{
    use R;
}

/**
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
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getApiName
 * @method self withApiName(string $apiName)
 * @method string getPath
 * @method self withPath(string $path)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getBodyFormat
 * @method self withBodyFormat(string $bodyFormat)
 * @method string getPostBodyType
 * @method self withPostBodyType(string $postBodyType)
 * @method string getPostBodyDescription
 * @method self withPostBodyDescription(string $postBodyDescription)
 * @method string getHttpMethod
 * @method self withHttpMethod(string $httpMethod)
 * @method string getHttpProtocol
 * @method self withHttpProtocol(string $httpProtocol)
 * @method string getResultType
 * @method self withResultType(string $resultType)
 * @method string getResultSample
 * @method self withResultSample(string $resultSample)
 * @method string getServiceProtocol
 * @method self withServiceProtocol(string $serviceProtocol)
 * @method string getServiceAddress
 * @method self withServiceAddress(string $serviceAddress)
 * @method Integer getServiceTimeout
 * @method self withServiceTimeout(Integer $serviceTimeout)
 * @method string getVisibility
 * @method self withVisibility(string $visibility)
 * @method string getAuthType
 * @method self withAuthType(string $authType)
 * @method string getSystemParameters
 * @method self withSystemParameters(string $systemParameters)
 * @method string getConstantParameters
 * @method self withConstantParameters(string $constantParameters)
 * @method string getPathParameters
 * @method self withPathParameters(string $pathParameters)
 * @method string getRequestHeaders
 * @method self withRequestHeaders(string $requestHeaders)
 * @method string getRequestQueries
 * @method self withRequestQueries(string $requestQueries)
 * @method string getRequestBody
 * @method self withRequestBody(string $requestBody)
 */
class CreateApi extends Roa
{
    use R;
}

/**
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
