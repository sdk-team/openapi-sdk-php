<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method UntagResources untagResources($options = [])
 * @method TagResources tagResources($options = [])
 * @method ListTagResources listTagResources($options = [])
 * @method DescribeIdleInstancesForGlobal describeIdleInstancesForGlobal($options = [])
 * @method DescribeAvailableResource describeAvailableResource($options = [])
 * @method SetLoadBalancerTCPListenerAttributePro setLoadBalancerTCPListenerAttributePro($options = [])
 * @method DescribeLoadBalancerTCPListenerAttributePro describeLoadBalancerTCPListenerAttributePro($options = [])
 * @method DescribeLoadBalancerBackendServers describeLoadBalancerBackendServers($options = [])
 * @method SetVServerGroupAttributeAsyn setVServerGroupAttributeAsyn($options = [])
 * @method SetBackendServersAsyn setBackendServersAsyn($options = [])
 * @method RemoveVServerGroupBackendServersAsyn removeVServerGroupBackendServersAsyn($options = [])
 * @method RemoveBackendServersAsyn removeBackendServersAsyn($options = [])
 * @method ModifyVServerGroupBackendServersAsyn modifyVServerGroupBackendServersAsyn($options = [])
 * @method DescribeAsynTaskResult describeAsynTaskResult($options = [])
 * @method AddVServerGroupBackendServersAsyn addVServerGroupBackendServersAsyn($options = [])
 * @method AddBackendServersAsyn addBackendServersAsyn($options = [])
 * @method CheckSlbOrder checkSlbOrder($options = [])
 * @method DescribeCertificateRelations describeCertificateRelations($options = [])
 * @method SetAutoRenewStatus setAutoRenewStatus($options = [])
 * @method ModifyLoadBalancerVPCAddress modifyLoadBalancerVPCAddress($options = [])
 * @method DescribeSlbQuotas describeSlbQuotas($options = [])
 * @method SetHighDefinitionMonitorLogStatus setHighDefinitionMonitorLogStatus($options = [])
 * @method DescribeHighDefinitionMonitorLogAttribute describeHighDefinitionMonitorLogAttribute($options = [])
 * @method DescribeLoadBalancersPro describeLoadBalancersPro($options = [])
 * @method SetDomainExtensionAttribute setDomainExtensionAttribute($options = [])
 * @method DescribeDomainExtensions describeDomainExtensions($options = [])
 * @method DeleteDomainExtension deleteDomainExtension($options = [])
 * @method CreateDomainExtension createDomainExtension($options = [])
 * @method DescribeLoadBalancerSpecs describeLoadBalancerSpecs($options = [])
 * @method CheckProductFeatureControl checkProductFeatureControl($options = [])
 * @method SetAccessControlListAttribute setAccessControlListAttribute($options = [])
 * @method RemoveAccessControlListEntry removeAccessControlListEntry($options = [])
 * @method DescribeAccessControlLists describeAccessControlLists($options = [])
 * @method DescribeAccessControlListAttribute describeAccessControlListAttribute($options = [])
 * @method DeleteAccessControlList deleteAccessControlList($options = [])
 * @method AddAccessControlListEntry addAccessControlListEntry($options = [])
 * @method CreateAccessControlList createAccessControlList($options = [])
 * @method SetAccessLogsDownloadAttribute setAccessLogsDownloadAttribute($options = [])
 * @method DescribeAccessLogsDownloadAttribute describeAccessLogsDownloadAttribute($options = [])
 * @method DeleteAccessLogsDownloadAttribute deleteAccessLogsDownloadAttribute($options = [])
 * @method DescribeVPCRelatedLoadBalancers describeVPCRelatedLoadBalancers($options = [])
 * @method DescribeLoadBalancersRelatedEcs describeLoadBalancersRelatedEcs($options = [])
 * @method DescribeLoadBalancersEcs describeLoadBalancersEcs($options = [])
 * @method ModifyLoadBalancerPayType modifyLoadBalancerPayType($options = [])
 * @method MoveResourceGroup moveResourceGroup($options = [])
 * @method ModifyLoadBalancerInstanceSpec modifyLoadBalancerInstanceSpec($options = [])
 * @method ProducePrepaidSlbInstance producePrepaidSlbInstance($options = [])
 * @method InnerSlbReleaseInstance innerSlbReleaseInstance($options = [])
 * @method DescribeMasterSlaveServerGroups describeMasterSlaveServerGroups($options = [])
 * @method DescribeMasterSlaveServerGroupAttribute describeMasterSlaveServerGroupAttribute($options = [])
 * @method DeleteMasterSlaveServerGroup deleteMasterSlaveServerGroup($options = [])
 * @method CreateMasterSlaveServerGroup createMasterSlaveServerGroup($options = [])
 * @method DescribeAliCloudCertificates describeAliCloudCertificates($options = [])
 * @method SetLogsDownloadStatus setLogsDownloadStatus($options = [])
 * @method SetLogsDownloadAttribute setLogsDownloadAttribute($options = [])
 * @method DescribeRealtimeLogs describeRealtimeLogs($options = [])
 * @method DescribeLogsDownloadStatus describeLogsDownloadStatus($options = [])
 * @method DescribeLogsDownloadAttribute describeLogsDownloadAttribute($options = [])
 * @method DeleteLogsDownloadAttribute deleteLogsDownloadAttribute($options = [])
 * @method DescribeMasterSlaveVServerGroups describeMasterSlaveVServerGroups($options = [])
 * @method DescribeMasterSlaveVServerGroupAttribute describeMasterSlaveVServerGroupAttribute($options = [])
 * @method DeleteMasterSlaveVServerGroup deleteMasterSlaveVServerGroup($options = [])
 * @method CreateMasterSlaveVServerGroup createMasterSlaveVServerGroup($options = [])
 * @method SetLoadBalancerAutoReleaseTime setLoadBalancerAutoReleaseTime($options = [])
 * @method DescribeLoadBalancerAutoReleaseTime describeLoadBalancerAutoReleaseTime($options = [])
 * @method ProduceSlbInstance produceSlbInstance($options = [])
 * @method FillSlbRestrictions fillSlbRestrictions($options = [])
 * @method FillSlbParams fillSlbParams($options = [])
 * @method EnableVpcVipFlow enableVpcVipFlow($options = [])
 * @method SetNcServers setNcServers($options = [])
 * @method RemoveNcServers removeNcServers($options = [])
 * @method AddNcServers addNcServers($options = [])
 * @method UploadCACertificate uploadCACertificate($options = [])
 * @method SetCACertificateName setCACertificateName($options = [])
 * @method DescribeCACertificates describeCACertificates($options = [])
 * @method DeleteCACertificate deleteCACertificate($options = [])
 * @method RemoveTags removeTags($options = [])
 * @method DescribeTags describeTags($options = [])
 * @method AddTags addTags($options = [])
 * @method SetVServerGroupAttribute setVServerGroupAttribute($options = [])
 * @method SetRule setRule($options = [])
 * @method RemoveVServerGroupBackendServers removeVServerGroupBackendServers($options = [])
 * @method ModifyVServerGroupBackendServers modifyVServerGroupBackendServers($options = [])
 * @method DescribeVServerGroups describeVServerGroups($options = [])
 * @method DescribeVServerGroupAttribute describeVServerGroupAttribute($options = [])
 * @method DescribeRules describeRules($options = [])
 * @method DescribeRuleAttribute describeRuleAttribute($options = [])
 * @method DeleteVServerGroup deleteVServerGroup($options = [])
 * @method DeleteRules deleteRules($options = [])
 * @method CreateVServerGroup createVServerGroup($options = [])
 * @method CreateRules createRules($options = [])
 * @method AddVServerGroupBackendServers addVServerGroupBackendServers($options = [])
 * @method SetProtectedDomainStatus setProtectedDomainStatus($options = [])
 * @method RemoveDomainWafWhiteList removeDomainWafWhiteList($options = [])
 * @method RemoveDomainWafBlackList removeDomainWafBlackList($options = [])
 * @method RemoveDomainCcWhiteList removeDomainCcWhiteList($options = [])
 * @method RemoveDomainCcBlackList removeDomainCcBlackList($options = [])
 * @method ModifyProtectedDomainSpec modifyProtectedDomainSpec($options = [])
 * @method DescribeProtectedDomains describeProtectedDomains($options = [])
 * @method DescribeProtectedDomain describeProtectedDomain($options = [])
 * @method DescribeDomainWafWhiteList describeDomainWafWhiteList($options = [])
 * @method DescribeDomainWafBlackList describeDomainWafBlackList($options = [])
 * @method DescribeDomainCcWhiteList describeDomainCcWhiteList($options = [])
 * @method DescribeDomainCcBlackList describeDomainCcBlackList($options = [])
 * @method DeleteProtectedDomain deleteProtectedDomain($options = [])
 * @method CreateProtectedDomain createProtectedDomain($options = [])
 * @method AddDomainWafWhiteList addDomainWafWhiteList($options = [])
 * @method AddDomainWafBlackList addDomainWafBlackList($options = [])
 * @method AddDomainCcWhiteList addDomainCcWhiteList($options = [])
 * @method AddDomainCcBlackList addDomainCcBlackList($options = [])
 * @method SetListenerSecurityStatus setListenerSecurityStatus($options = [])
 * @method DescribeLocations describeLocations($options = [])
 * @method DescribeZones describeZones($options = [])
 * @method DescribeRegions4Location describeRegions4Location($options = [])
 * @method SetLoadBalancerUDPListenerAttribute setLoadBalancerUDPListenerAttribute($options = [])
 * @method DescribeLoadBalancerUDPListenerAttribute describeLoadBalancerUDPListenerAttribute($options = [])
 * @method CreateLoadBalancerUDPListener createLoadBalancerUDPListener($options = [])
 * @method UploadServerCertificate uploadServerCertificate($options = [])
 * @method StopLoadBalancerListener stopLoadBalancerListener($options = [])
 * @method StartLoadBalancerListener startLoadBalancerListener($options = [])
 * @method SetServerCertificateName setServerCertificateName($options = [])
 * @method SetLoadBalancerTCPListenerAttribute setLoadBalancerTCPListenerAttribute($options = [])
 * @method SetLoadBalancerStatus setLoadBalancerStatus($options = [])
 * @method SetLoadBalancerName setLoadBalancerName($options = [])
 * @method SetLoadBalancerHTTPSListenerAttribute setLoadBalancerHTTPSListenerAttribute($options = [])
 * @method SetLoadBalancerHTTPListenerAttribute setLoadBalancerHTTPListenerAttribute($options = [])
 * @method SetListenerAccessControlStatus setListenerAccessControlStatus($options = [])
 * @method SetBackendServers setBackendServers($options = [])
 * @method RemoveListenerWhiteListItem removeListenerWhiteListItem($options = [])
 * @method RemoveBackendServers removeBackendServers($options = [])
 * @method ModifyLoadBalancerInternetSpec modifyLoadBalancerInternetSpec($options = [])
 * @method DescribeServerCertificates describeServerCertificates($options = [])
 * @method DescribeServerCertificate describeServerCertificate($options = [])
 * @method DescribeRegions describeRegions($options = [])
 * @method DescribeLoadBalancerTCPListenerAttribute describeLoadBalancerTCPListenerAttribute($options = [])
 * @method DescribeLoadBalancers describeLoadBalancers($options = [])
 * @method DescribeLoadBalancerHTTPSListenerAttribute describeLoadBalancerHTTPSListenerAttribute($options = [])
 * @method DescribeLoadBalancerHTTPListenerAttribute describeLoadBalancerHTTPListenerAttribute($options = [])
 * @method DescribeLoadBalancerAttribute describeLoadBalancerAttribute($options = [])
 * @method DescribeListenerAccessControlAttribute describeListenerAccessControlAttribute($options = [])
 * @method DescribeHealthStatus describeHealthStatus($options = [])
 * @method DeleteServerCertificate deleteServerCertificate($options = [])
 * @method DeleteLoadBalancerListener deleteLoadBalancerListener($options = [])
 * @method DeleteLoadBalancer deleteLoadBalancer($options = [])
 * @method CreateLoadBalancerTCPListener createLoadBalancerTCPListener($options = [])
 * @method CreateLoadBalancerPro createLoadBalancerPro($options = [])
 * @method CreateLoadBalancerHTTPSListener createLoadBalancerHTTPSListener($options = [])
 * @method CreateLoadBalancerHTTPListener createLoadBalancerHTTPListener($options = [])
 * @method CreateLoadBalancer createLoadBalancer($options = [])
 * @method AddListenerWhiteListItem addListenerWhiteListItem($options = [])
 * @method AddBackendServers addBackendServers($options = [])
 */
class V20140515
{
    use ApiResolverTrait;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method array getResourceId
 * @method self withResourceId(array $resourceId)
 * @method array getTagKey
 * @method self withTagKey(array $tagKey)
 * @method bool getAll
 * @method self withAll(bool $all)
 */
class UntagResources extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method array getResourceId
 * @method self withResourceId(array $resourceId)
 * @method array getTag
 * @method self withTag(array $tag)
 */
class TagResources extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getNextToken
 * @method self withNextToken(string $nextToken)
 * @method array getResourceId
 * @method self withResourceId(array $resourceId)
 * @method array getTag
 * @method self withTag(array $tag)
 */
class ListTagResources extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method bool getOnlyAmount
 * @method self withOnlyAmount(bool $onlyAmount)
 */
class DescribeIdleInstancesForGlobal extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getAddressType
 * @method self withAddressType(string $addressType)
 * @method string getAddressIPVersion
 * @method self withAddressIPVersion(string $addressIPVersion)
 */
class DescribeAvailableResource extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method Integer getBandwidth
 * @method self withBandwidth(Integer $bandwidth)
 * @method string getScheduler
 * @method self withScheduler(string $scheduler)
 * @method Integer getPersistenceTimeout
 * @method self withPersistenceTimeout(Integer $persistenceTimeout)
 * @method Integer getEstablishedTimeout
 * @method self withEstablishedTimeout(Integer $establishedTimeout)
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold(Integer $healthyThreshold)
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold(Integer $unhealthyThreshold)
 * @method Integer getHealthCheckConnectTimeout
 * @method self withHealthCheckConnectTimeout(Integer $healthCheckConnectTimeout)
 * @method Integer getHealthCheckConnectPort
 * @method self withHealthCheckConnectPort(Integer $healthCheckConnectPort)
 * @method Integer getHealthCheckInterval
 * @method self withHealthCheckInterval(Integer $healthCheckInterval)
 * @method string getHealthCheckDomain
 * @method self withHealthCheckDomain(string $healthCheckDomain)
 * @method string getHealthCheckURI
 * @method self withHealthCheckURI(string $healthCheckURI)
 * @method string getHealthCheckHttpCode
 * @method self withHealthCheckHttpCode(string $healthCheckHttpCode)
 * @method string getHealthCheckType
 * @method self withHealthCheckType(string $healthCheckType)
 * @method string getSynProxy
 * @method self withSynProxy(string $synProxy)
 * @method Integer getMaxConnection
 * @method self withMaxConnection(Integer $maxConnection)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getVServerGroup
 * @method self withVServerGroup(string $vServerGroup)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 * @method string getMasterSlaveServerGroupId
 * @method self withMasterSlaveServerGroupId(string $masterSlaveServerGroupId)
 * @method string getMasterSlaveServerGroup
 * @method self withMasterSlaveServerGroup(string $masterSlaveServerGroup)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 * @method string getAclType
 * @method self withAclType(string $aclType)
 * @method string getAclStatus
 * @method self withAclStatus(string $aclStatus)
 * @method string getVpcIds
 * @method self withVpcIds(string $vpcIds)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method Integer getMss
 * @method self withMss(Integer $mss)
 */
class SetLoadBalancerTCPListenerAttributePro extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeLoadBalancerTCPListenerAttributePro extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getEcsInstances
 * @method self withEcsInstances(string $ecsInstances)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeLoadBalancerBackendServers extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 * @method string getVServerGroupName
 * @method self withVServerGroupName(string $vServerGroupName)
 * @method string getBackendServers
 * @method self withBackendServers(string $backendServers)
 */
class SetVServerGroupAttributeAsyn extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getBackendServers
 * @method self withBackendServers(string $backendServers)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class SetBackendServersAsyn extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 * @method string getBackendServers
 * @method self withBackendServers(string $backendServers)
 */
class RemoveVServerGroupBackendServersAsyn extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getBackendServers
 * @method self withBackendServers(string $backendServers)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class RemoveBackendServersAsyn extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 * @method string getOldBackendServers
 * @method self withOldBackendServers(string $oldBackendServers)
 * @method string getNewBackendServers
 * @method self withNewBackendServers(string $newBackendServers)
 */
class ModifyVServerGroupBackendServersAsyn extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class DescribeAsynTaskResult extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 * @method string getBackendServers
 * @method self withBackendServers(string $backendServers)
 */
class AddVServerGroupBackendServersAsyn extends Rpc
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
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getBackendServers
 * @method self withBackendServers(string $backendServers)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class AddBackendServersAsyn extends Rpc
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
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 */
class CheckSlbOrder extends Rpc
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
 * @method string getCertificateId
 * @method self withCertificateId(string $certificateId)
 * @method string getCertType
 * @method self withCertType(string $certType)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeCertificateRelations extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getRenewalDuration
 * @method self withRenewalDuration(Integer $renewalDuration)
 * @method string getRenewalCycUnit
 * @method self withRenewalCycUnit(string $renewalCycUnit)
 * @method string getRenewalStatus
 * @method self withRenewalStatus(string $renewalStatus)
 */
class SetAutoRenewStatus extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getAddress
 * @method self withAddress(string $address)
 */
class ModifyLoadBalancerVPCAddress extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeSlbQuotas extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getLogProject
 * @method self withLogProject(string $logProject)
 * @method string getLogStore
 * @method self withLogStore(string $logStore)
 * @method string getLogType
 * @method self withLogType(string $logType)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class SetHighDefinitionMonitorLogStatus extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 */
class DescribeHighDefinitionMonitorLogAttribute extends Rpc
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
 * @method string getServerId
 * @method self withServerId(string $serverId)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getLoadBalancerName
 * @method self withLoadBalancerName(string $loadBalancerName)
 * @method string getServerIntranetAddress
 * @method self withServerIntranetAddress(string $serverIntranetAddress)
 * @method string getAddressType
 * @method self withAddressType(string $addressType)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getAddress
 * @method self withAddress(string $address)
 * @method string getMasterZoneId
 * @method self withMasterZoneId(string $masterZoneId)
 * @method string getSlaveZoneId
 * @method self withSlaveZoneId(string $slaveZoneId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getFilterFuzzyMode
 * @method self withFilterFuzzyMode(string $filterFuzzyMode)
 */
class DescribeLoadBalancersPro extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getDomainExtensionId
 * @method self withDomainExtensionId(string $domainExtensionId)
 * @method string getServerCertificateId
 * @method self withServerCertificateId(string $serverCertificateId)
 */
class SetDomainExtensionAttribute extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method string getDomainExtensionId
 * @method self withDomainExtensionId(string $domainExtensionId)
 */
class DescribeDomainExtensions extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getDomainExtensionId
 * @method self withDomainExtensionId(string $domainExtensionId)
 */
class DeleteDomainExtension extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method string getDomain
 * @method self withDomain(string $domain)
 * @method string getServerCertificateId
 * @method self withServerCertificateId(string $serverCertificateId)
 */
class CreateDomainExtension extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeLoadBalancerSpecs extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getRegionAction
 * @method self withRegionAction(string $regionAction)
 * @method string getUidAction
 * @method self withUidAction(string $uidAction)
 */
class CheckProductFeatureControl extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 * @method string getAclName
 * @method self withAclName(string $aclName)
 */
class SetAccessControlListAttribute extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 * @method string getAclEntrys
 * @method self withAclEntrys(string $aclEntrys)
 */
class RemoveAccessControlListEntry extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getAclName
 * @method self withAclName(string $aclName)
 * @method string getAddressIPVersion
 * @method self withAddressIPVersion(string $addressIPVersion)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method array getTag
 * @method self withTag(array $tag)
 */
class DescribeAccessControlLists extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 * @method string getAclEntryComment
 * @method self withAclEntryComment(string $aclEntryComment)
 */
class DescribeAccessControlListAttribute extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 */
class DeleteAccessControlList extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 * @method string getAclEntrys
 * @method self withAclEntrys(string $aclEntrys)
 */
class AddAccessControlListEntry extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getAclName
 * @method self withAclName(string $aclName)
 * @method string getAddressIPVersion
 * @method self withAddressIPVersion(string $addressIPVersion)
 */
class CreateAccessControlList extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getLogsDownloadAttributes
 * @method self withLogsDownloadAttributes(string $logsDownloadAttributes)
 */
class SetAccessLogsDownloadAttribute extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getLogType
 * @method self withLogType(string $logType)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeAccessLogsDownloadAttribute extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getLogsDownloadAttributes
 * @method self withLogsDownloadAttributes(string $logsDownloadAttributes)
 */
class DeleteAccessLogsDownloadAttribute extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getVPCID
 * @method self withVPCID(string $vPCID)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeVPCRelatedLoadBalancers extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 */
class DescribeLoadBalancersRelatedEcs extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 */
class DescribeLoadBalancersEcs extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getPricingCycle
 * @method self withPricingCycle(string $pricingCycle)
 * @method Integer getDuration
 * @method self withDuration(Integer $duration)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 */
class ModifyLoadBalancerPayType extends Rpc
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
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getNewResourceGroupId
 * @method self withNewResourceGroupId(string $newResourceGroupId)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class MoveResourceGroup extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerSpec
 * @method self withLoadBalancerSpec(string $loadBalancerSpec)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 */
class ModifyLoadBalancerInstanceSpec extends Rpc
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
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 */
class ProducePrepaidSlbInstance extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 */
class InnerSlbReleaseInstance extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method bool getIncludeListener
 * @method self withIncludeListener(bool $includeListener)
 */
class DescribeMasterSlaveServerGroups extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getMasterSlaveServerGroupId
 * @method self withMasterSlaveServerGroupId(string $masterSlaveServerGroupId)
 */
class DescribeMasterSlaveServerGroupAttribute extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getMasterSlaveServerGroupId
 * @method self withMasterSlaveServerGroupId(string $masterSlaveServerGroupId)
 */
class DeleteMasterSlaveServerGroup extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getMasterSlaveServerGroupName
 * @method self withMasterSlaveServerGroupName(string $masterSlaveServerGroupName)
 * @method string getMasterSlaveBackendServers
 * @method self withMasterSlaveBackendServers(string $masterSlaveBackendServers)
 */
class CreateMasterSlaveServerGroup extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 */
class DescribeAliCloudCertificates extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLogsDownloadStatus
 * @method self withLogsDownloadStatus(string $logsDownloadStatus)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 */
class SetLogsDownloadStatus extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLogType
 * @method self withLogType(string $logType)
 * @method string getOSSBucketName
 * @method self withOSSBucketName(string $oSSBucketName)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 */
class SetLogsDownloadAttribute extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getLogType
 * @method self withLogType(string $logType)
 * @method string getLogStartTime
 * @method self withLogStartTime(string $logStartTime)
 * @method string getLogEndTime
 * @method self withLogEndTime(string $logEndTime)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeRealtimeLogs extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeLogsDownloadStatus extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeLogsDownloadAttribute extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 */
class DeleteLogsDownloadAttribute extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 */
class DescribeMasterSlaveVServerGroups extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getMasterSlaveVServerGroupId
 * @method self withMasterSlaveVServerGroupId(string $masterSlaveVServerGroupId)
 */
class DescribeMasterSlaveVServerGroupAttribute extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getMasterSlaveVServerGroupId
 * @method self withMasterSlaveVServerGroupId(string $masterSlaveVServerGroupId)
 */
class DeleteMasterSlaveVServerGroup extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getMasterSlaveVServerGroupName
 * @method self withMasterSlaveVServerGroupName(string $masterSlaveVServerGroupName)
 * @method string getMasterSlaveBackendServers
 * @method self withMasterSlaveBackendServers(string $masterSlaveBackendServers)
 */
class CreateMasterSlaveVServerGroup extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method int getAutoReleaseTime
 * @method self withAutoReleaseTime(int $autoReleaseTime)
 */
class SetLoadBalancerAutoReleaseTime extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 */
class DescribeLoadBalancerAutoReleaseTime extends Rpc
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
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 */
class ProduceSlbInstance extends Rpc
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
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 */
class FillSlbRestrictions extends Rpc
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
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 */
class FillSlbParams extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class EnableVpcVipFlow extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getHostEcsInstanceId
 * @method self withHostEcsInstanceId(string $hostEcsInstanceId)
 * @method string getBackendServers
 * @method self withBackendServers(string $backendServers)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class SetNcServers extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getBackendServers
 * @method self withBackendServers(string $backendServers)
 * @method string getHostEcsInstanceId
 * @method self withHostEcsInstanceId(string $hostEcsInstanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class RemoveNcServers extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getHostEcsInstanceId
 * @method self withHostEcsInstanceId(string $hostEcsInstanceId)
 * @method string getBackendServers
 * @method self withBackendServers(string $backendServers)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class AddNcServers extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getCACertificate
 * @method self withCACertificate(string $cACertificate)
 * @method string getCACertificateName
 * @method self withCACertificateName(string $cACertificateName)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class UploadCACertificate extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getCACertificateId
 * @method self withCACertificateId(string $cACertificateId)
 * @method string getCACertificateName
 * @method self withCACertificateName(string $cACertificateName)
 */
class SetCACertificateName extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getCACertificateId
 * @method self withCACertificateId(string $cACertificateId)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method array getTag
 * @method self withTag(array $tag)
 */
class DescribeCACertificates extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getCACertificateId
 * @method self withCACertificateId(string $cACertificateId)
 */
class DeleteCACertificate extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class RemoveTags extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method bool getDistinctKey
 * @method self withDistinctKey(bool $distinctKey)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeTags extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class AddTags extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 * @method string getVServerGroupName
 * @method self withVServerGroupName(string $vServerGroupName)
 * @method string getBackendServers
 * @method self withBackendServers(string $backendServers)
 */
class SetVServerGroupAttribute extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 * @method string getListenerSync
 * @method self withListenerSync(string $listenerSync)
 * @method string getScheduler
 * @method self withScheduler(string $scheduler)
 * @method string getStickySession
 * @method self withStickySession(string $stickySession)
 * @method string getStickySessionType
 * @method self withStickySessionType(string $stickySessionType)
 * @method Integer getCookieTimeout
 * @method self withCookieTimeout(Integer $cookieTimeout)
 * @method string getCookie
 * @method self withCookie(string $cookie)
 * @method string getHealthCheck
 * @method self withHealthCheck(string $healthCheck)
 * @method string getHealthCheckDomain
 * @method self withHealthCheckDomain(string $healthCheckDomain)
 * @method string getHealthCheckURI
 * @method self withHealthCheckURI(string $healthCheckURI)
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold(Integer $healthyThreshold)
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold(Integer $unhealthyThreshold)
 * @method Integer getHealthCheckTimeout
 * @method self withHealthCheckTimeout(Integer $healthCheckTimeout)
 * @method Integer getHealthCheckInterval
 * @method self withHealthCheckInterval(Integer $healthCheckInterval)
 * @method Integer getHealthCheckConnectPort
 * @method self withHealthCheckConnectPort(Integer $healthCheckConnectPort)
 * @method string getHealthCheckHttpCode
 * @method self withHealthCheckHttpCode(string $healthCheckHttpCode)
 */
class SetRule extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 * @method string getBackendServers
 * @method self withBackendServers(string $backendServers)
 */
class RemoveVServerGroupBackendServers extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 * @method string getOldBackendServers
 * @method self withOldBackendServers(string $oldBackendServers)
 * @method string getNewBackendServers
 * @method self withNewBackendServers(string $newBackendServers)
 */
class ModifyVServerGroupBackendServers extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method bool getIncludeRule
 * @method self withIncludeRule(bool $includeRule)
 * @method bool getIncludeListener
 * @method self withIncludeListener(bool $includeListener)
 */
class DescribeVServerGroups extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 */
class DescribeVServerGroupAttribute extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getProtocol
 * @method self withProtocol(string $protocol)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 */
class DescribeRules extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 */
class DescribeRuleAttribute extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 */
class DeleteVServerGroup extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getRuleIds
 * @method self withRuleIds(string $ruleIds)
 */
class DeleteRules extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getVServerGroupName
 * @method self withVServerGroupName(string $vServerGroupName)
 * @method string getBackendServers
 * @method self withBackendServers(string $backendServers)
 */
class CreateVServerGroup extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method string getProtocol
 * @method self withProtocol(string $protocol)
 * @method string getRuleList
 * @method self withRuleList(string $ruleList)
 */
class CreateRules extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 * @method string getBackendServers
 * @method self withBackendServers(string $backendServers)
 */
class AddVServerGroupBackendServers extends Rpc
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
 * @method string getWafStatus
 * @method self withWafStatus(string $wafStatus)
 * @method string getCcStatus
 * @method self withCcStatus(string $ccStatus)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class SetProtectedDomainStatus extends Rpc
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
 * @method string getList
 * @method self withList(string $list)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class RemoveDomainWafWhiteList extends Rpc
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
 * @method string getList
 * @method self withList(string $list)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class RemoveDomainWafBlackList extends Rpc
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
 * @method string getList
 * @method self withList(string $list)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class RemoveDomainCcWhiteList extends Rpc
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
 * @method string getList
 * @method self withList(string $list)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class RemoveDomainCcBlackList extends Rpc
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
 * @method string getWafPolicyLevel
 * @method self withWafPolicyLevel(string $wafPolicyLevel)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class ModifyProtectedDomainSpec extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeProtectedDomains extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeProtectedDomain extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeDomainWafWhiteList extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeDomainWafBlackList extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeDomainCcWhiteList extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeDomainCcBlackList extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DeleteProtectedDomain extends Rpc
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
 * @method string getWafPolicyLevel
 * @method self withWafPolicyLevel(string $wafPolicyLevel)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class CreateProtectedDomain extends Rpc
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
 * @method string getList
 * @method self withList(string $list)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class AddDomainWafWhiteList extends Rpc
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
 * @method string getList
 * @method self withList(string $list)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class AddDomainWafBlackList extends Rpc
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
 * @method string getList
 * @method self withList(string $list)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class AddDomainCcWhiteList extends Rpc
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
 * @method string getList
 * @method self withList(string $list)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class AddDomainCcBlackList extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method string getSecurityStatus
 * @method self withSecurityStatus(string $securityStatus)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class SetListenerSecurityStatus extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getNamespace
 * @method self withNamespace(string $namespace)
 * @method string getNamespaceUid
 * @method self withNamespaceUid(string $namespaceUid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeLocations extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeZones extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeRegions4Location extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method Integer getBandwidth
 * @method self withBandwidth(Integer $bandwidth)
 * @method string getScheduler
 * @method self withScheduler(string $scheduler)
 * @method Integer getPersistenceTimeout
 * @method self withPersistenceTimeout(Integer $persistenceTimeout)
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold(Integer $healthyThreshold)
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold(Integer $unhealthyThreshold)
 * @method Integer getHealthCheckConnectTimeout
 * @method self withHealthCheckConnectTimeout(Integer $healthCheckConnectTimeout)
 * @method Integer getHealthCheckConnectPort
 * @method self withHealthCheckConnectPort(Integer $healthCheckConnectPort)
 * @method Integer getHealthCheckInterval
 * @method self withHealthCheckInterval(Integer $healthCheckInterval)
 * @method string gethealthCheckReq
 * @method self withhealthCheckReq(string $healthCheckReq)
 * @method string gethealthCheckExp
 * @method self withhealthCheckExp(string $healthCheckExp)
 * @method Integer getMaxConnection
 * @method self withMaxConnection(Integer $maxConnection)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getVServerGroup
 * @method self withVServerGroup(string $vServerGroup)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 * @method string getMasterSlaveServerGroupId
 * @method self withMasterSlaveServerGroupId(string $masterSlaveServerGroupId)
 * @method string getMasterSlaveServerGroup
 * @method self withMasterSlaveServerGroup(string $masterSlaveServerGroup)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 * @method string getAclType
 * @method self withAclType(string $aclType)
 * @method string getAclStatus
 * @method self withAclStatus(string $aclStatus)
 * @method string getVpcIds
 * @method self withVpcIds(string $vpcIds)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class SetLoadBalancerUDPListenerAttribute extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeLoadBalancerUDPListenerAttribute extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method Integer getBackendServerPort
 * @method self withBackendServerPort(Integer $backendServerPort)
 * @method Integer getBandwidth
 * @method self withBandwidth(Integer $bandwidth)
 * @method string getScheduler
 * @method self withScheduler(string $scheduler)
 * @method Integer getPersistenceTimeout
 * @method self withPersistenceTimeout(Integer $persistenceTimeout)
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold(Integer $healthyThreshold)
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold(Integer $unhealthyThreshold)
 * @method Integer getHealthCheckConnectTimeout
 * @method self withHealthCheckConnectTimeout(Integer $healthCheckConnectTimeout)
 * @method Integer getHealthCheckConnectPort
 * @method self withHealthCheckConnectPort(Integer $healthCheckConnectPort)
 * @method Integer gethealthCheckInterval
 * @method self withhealthCheckInterval(Integer $healthCheckInterval)
 * @method string gethealthCheckReq
 * @method self withhealthCheckReq(string $healthCheckReq)
 * @method string gethealthCheckExp
 * @method self withhealthCheckExp(string $healthCheckExp)
 * @method Integer getMaxConnection
 * @method self withMaxConnection(Integer $maxConnection)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 * @method string getMasterSlaveServerGroupId
 * @method self withMasterSlaveServerGroupId(string $masterSlaveServerGroupId)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 * @method string getAclType
 * @method self withAclType(string $aclType)
 * @method string getAclStatus
 * @method self withAclStatus(string $aclStatus)
 * @method string getVpcIds
 * @method self withVpcIds(string $vpcIds)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class CreateLoadBalancerUDPListener extends Rpc
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
 * @method string getAliCloudCertificateId
 * @method self withAliCloudCertificateId(string $aliCloudCertificateId)
 * @method string getAliCloudCertificateName
 * @method self withAliCloudCertificateName(string $aliCloudCertificateName)
 * @method string getServerCertificate
 * @method self withServerCertificate(string $serverCertificate)
 * @method string getPrivateKey
 * @method self withPrivateKey(string $privateKey)
 * @method string getServerCertificateName
 * @method self withServerCertificateName(string $serverCertificateName)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class UploadServerCertificate extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getProtocol
 * @method self withProtocol(string $protocol)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class StopLoadBalancerListener extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getProtocol
 * @method self withProtocol(string $protocol)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class StartLoadBalancerListener extends Rpc
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
 * @method string getServerCertificateId
 * @method self withServerCertificateId(string $serverCertificateId)
 * @method string getServerCertificateName
 * @method self withServerCertificateName(string $serverCertificateName)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class SetServerCertificateName extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method Integer getBandwidth
 * @method self withBandwidth(Integer $bandwidth)
 * @method string getScheduler
 * @method self withScheduler(string $scheduler)
 * @method Integer getPersistenceTimeout
 * @method self withPersistenceTimeout(Integer $persistenceTimeout)
 * @method Integer getEstablishedTimeout
 * @method self withEstablishedTimeout(Integer $establishedTimeout)
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold(Integer $healthyThreshold)
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold(Integer $unhealthyThreshold)
 * @method Integer getHealthCheckConnectTimeout
 * @method self withHealthCheckConnectTimeout(Integer $healthCheckConnectTimeout)
 * @method Integer getHealthCheckConnectPort
 * @method self withHealthCheckConnectPort(Integer $healthCheckConnectPort)
 * @method Integer getHealthCheckInterval
 * @method self withHealthCheckInterval(Integer $healthCheckInterval)
 * @method string getHealthCheckDomain
 * @method self withHealthCheckDomain(string $healthCheckDomain)
 * @method string getHealthCheckURI
 * @method self withHealthCheckURI(string $healthCheckURI)
 * @method string getHealthCheckHttpCode
 * @method self withHealthCheckHttpCode(string $healthCheckHttpCode)
 * @method string getHealthCheckType
 * @method self withHealthCheckType(string $healthCheckType)
 * @method string getSynProxy
 * @method self withSynProxy(string $synProxy)
 * @method Integer getMaxConnection
 * @method self withMaxConnection(Integer $maxConnection)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getVServerGroup
 * @method self withVServerGroup(string $vServerGroup)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 * @method string getMasterSlaveServerGroupId
 * @method self withMasterSlaveServerGroupId(string $masterSlaveServerGroupId)
 * @method string getMasterSlaveServerGroup
 * @method self withMasterSlaveServerGroup(string $masterSlaveServerGroup)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 * @method string getAclType
 * @method self withAclType(string $aclType)
 * @method string getAclStatus
 * @method self withAclStatus(string $aclStatus)
 * @method string getVpcIds
 * @method self withVpcIds(string $vpcIds)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class SetLoadBalancerTCPListenerAttribute extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getLoadBalancerStatus
 * @method self withLoadBalancerStatus(string $loadBalancerStatus)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class SetLoadBalancerStatus extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getLoadBalancerName
 * @method self withLoadBalancerName(string $loadBalancerName)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class SetLoadBalancerName extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method Integer getBandwidth
 * @method self withBandwidth(Integer $bandwidth)
 * @method string getXForwardedFor
 * @method self withXForwardedFor(string $xForwardedFor)
 * @method string getScheduler
 * @method self withScheduler(string $scheduler)
 * @method string getStickySession
 * @method self withStickySession(string $stickySession)
 * @method string getStickySessionType
 * @method self withStickySessionType(string $stickySessionType)
 * @method Integer getCookieTimeout
 * @method self withCookieTimeout(Integer $cookieTimeout)
 * @method string getCookie
 * @method self withCookie(string $cookie)
 * @method string getHealthCheck
 * @method self withHealthCheck(string $healthCheck)
 * @method string getHealthCheckDomain
 * @method self withHealthCheckDomain(string $healthCheckDomain)
 * @method string getHealthCheckURI
 * @method self withHealthCheckURI(string $healthCheckURI)
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold(Integer $healthyThreshold)
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold(Integer $unhealthyThreshold)
 * @method Integer getHealthCheckTimeout
 * @method self withHealthCheckTimeout(Integer $healthCheckTimeout)
 * @method Integer getHealthCheckInterval
 * @method self withHealthCheckInterval(Integer $healthCheckInterval)
 * @method Integer getHealthCheckConnectPort
 * @method self withHealthCheckConnectPort(Integer $healthCheckConnectPort)
 * @method string getHealthCheckHttpCode
 * @method self withHealthCheckHttpCode(string $healthCheckHttpCode)
 * @method Integer getMaxConnection
 * @method self withMaxConnection(Integer $maxConnection)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getServerCertificateId
 * @method self withServerCertificateId(string $serverCertificateId)
 * @method string getCACertificateId
 * @method self withCACertificateId(string $cACertificateId)
 * @method string getVServerGroup
 * @method self withVServerGroup(string $vServerGroup)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getXForwardedForSLBIP
 * @method self withXForwardedForSLBIP(string $xForwardedForSLBIP)
 * @method string getXForwardedForSLBID
 * @method self withXForwardedForSLBID(string $xForwardedForSLBID)
 * @method string getXForwardedForproto
 * @method self withXForwardedForproto(string $xForwardedForproto)
 * @method string getGzip
 * @method self withGzip(string $gzip)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 * @method string getAclType
 * @method self withAclType(string $aclType)
 * @method string getAclStatus
 * @method self withAclStatus(string $aclStatus)
 * @method string getVpcIds
 * @method self withVpcIds(string $vpcIds)
 * @method Integer getIdleTimeout
 * @method self withIdleTimeout(Integer $idleTimeout)
 * @method Integer getRequestTimeout
 * @method self withRequestTimeout(Integer $requestTimeout)
 * @method string getEnableHttp2
 * @method self withEnableHttp2(string $enableHttp2)
 * @method string getTLSCipherPolicy
 * @method self withTLSCipherPolicy(string $tLSCipherPolicy)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class SetLoadBalancerHTTPSListenerAttribute extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method Integer getBandwidth
 * @method self withBandwidth(Integer $bandwidth)
 * @method string getXForwardedFor
 * @method self withXForwardedFor(string $xForwardedFor)
 * @method string getScheduler
 * @method self withScheduler(string $scheduler)
 * @method string getStickySession
 * @method self withStickySession(string $stickySession)
 * @method string getStickySessionType
 * @method self withStickySessionType(string $stickySessionType)
 * @method Integer getCookieTimeout
 * @method self withCookieTimeout(Integer $cookieTimeout)
 * @method string getCookie
 * @method self withCookie(string $cookie)
 * @method string getHealthCheck
 * @method self withHealthCheck(string $healthCheck)
 * @method string getHealthCheckDomain
 * @method self withHealthCheckDomain(string $healthCheckDomain)
 * @method string getHealthCheckURI
 * @method self withHealthCheckURI(string $healthCheckURI)
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold(Integer $healthyThreshold)
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold(Integer $unhealthyThreshold)
 * @method Integer getHealthCheckTimeout
 * @method self withHealthCheckTimeout(Integer $healthCheckTimeout)
 * @method Integer getHealthCheckInterval
 * @method self withHealthCheckInterval(Integer $healthCheckInterval)
 * @method Integer getHealthCheckConnectPort
 * @method self withHealthCheckConnectPort(Integer $healthCheckConnectPort)
 * @method string getHealthCheckHttpCode
 * @method self withHealthCheckHttpCode(string $healthCheckHttpCode)
 * @method Integer getMaxConnection
 * @method self withMaxConnection(Integer $maxConnection)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getVServerGroup
 * @method self withVServerGroup(string $vServerGroup)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getXForwardedForSLBIP
 * @method self withXForwardedForSLBIP(string $xForwardedForSLBIP)
 * @method string getXForwardedForSLBID
 * @method self withXForwardedForSLBID(string $xForwardedForSLBID)
 * @method string getXForwardedForproto
 * @method self withXForwardedForproto(string $xForwardedForproto)
 * @method string getGzip
 * @method self withGzip(string $gzip)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 * @method string getAclType
 * @method self withAclType(string $aclType)
 * @method string getAclStatus
 * @method self withAclStatus(string $aclStatus)
 * @method string getVpcIds
 * @method self withVpcIds(string $vpcIds)
 * @method Integer getIdleTimeout
 * @method self withIdleTimeout(Integer $idleTimeout)
 * @method Integer getRequestTimeout
 * @method self withRequestTimeout(Integer $requestTimeout)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class SetLoadBalancerHTTPListenerAttribute extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method string getAccessControlStatus
 * @method self withAccessControlStatus(string $accessControlStatus)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getProtocol
 * @method self withProtocol(string $protocol)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class SetListenerAccessControlStatus extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getBackendServers
 * @method self withBackendServers(string $backendServers)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class SetBackendServers extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method string getSourceItems
 * @method self withSourceItems(string $sourceItems)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getProtocol
 * @method self withProtocol(string $protocol)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class RemoveListenerWhiteListItem extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getBackendServers
 * @method self withBackendServers(string $backendServers)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class RemoveBackendServers extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method Integer getBandwidth
 * @method self withBandwidth(Integer $bandwidth)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method Integer getRatio
 * @method self withRatio(Integer $ratio)
 */
class ModifyLoadBalancerInternetSpec extends Rpc
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
 * @method string getServerCertificateId
 * @method self withServerCertificateId(string $serverCertificateId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method array getTag
 * @method self withTag(array $tag)
 */
class DescribeServerCertificates extends Rpc
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
 * @method string getServerCertificateId
 * @method self withServerCertificateId(string $serverCertificateId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeServerCertificate extends Rpc
{
    use R;
}

/**
 * @method string getAcceptLanguage
 * @method self withAcceptLanguage(string $acceptLanguage)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeRegions extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeLoadBalancerTCPListenerAttribute extends Rpc
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
 * @method string getServerId
 * @method self withServerId(string $serverId)
 * @method string getAddressIPVersion
 * @method self withAddressIPVersion(string $addressIPVersion)
 * @method string getLoadBalancerStatus
 * @method self withLoadBalancerStatus(string $loadBalancerStatus)
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getLoadBalancerName
 * @method self withLoadBalancerName(string $loadBalancerName)
 * @method string getServerIntranetAddress
 * @method self withServerIntranetAddress(string $serverIntranetAddress)
 * @method string getAddressType
 * @method self withAddressType(string $addressType)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getAddress
 * @method self withAddress(string $address)
 * @method string getMasterZoneId
 * @method self withMasterZoneId(string $masterZoneId)
 * @method string getSlaveZoneId
 * @method self withSlaveZoneId(string $slaveZoneId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getFuzzy
 * @method self withFuzzy(string $fuzzy)
 */
class DescribeLoadBalancers extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeLoadBalancerHTTPSListenerAttribute extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeLoadBalancerHTTPListenerAttribute extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method bool getIncludeReservedData
 * @method self withIncludeReservedData(bool $includeReservedData)
 */
class DescribeLoadBalancerAttribute extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method string getProtocol
 * @method self withProtocol(string $protocol)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeListenerAccessControlAttribute extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getProtocol
 * @method self withProtocol(string $protocol)
 */
class DescribeHealthStatus extends Rpc
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
 * @method string getServerCertificateId
 * @method self withServerCertificateId(string $serverCertificateId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DeleteServerCertificate extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method string getProtocol
 * @method self withProtocol(string $protocol)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DeleteLoadBalancerListener extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DeleteLoadBalancer extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method Integer getBackendServerPort
 * @method self withBackendServerPort(Integer $backendServerPort)
 * @method Integer getBandwidth
 * @method self withBandwidth(Integer $bandwidth)
 * @method string getScheduler
 * @method self withScheduler(string $scheduler)
 * @method Integer getPersistenceTimeout
 * @method self withPersistenceTimeout(Integer $persistenceTimeout)
 * @method Integer getEstablishedTimeout
 * @method self withEstablishedTimeout(Integer $establishedTimeout)
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold(Integer $healthyThreshold)
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold(Integer $unhealthyThreshold)
 * @method Integer getHealthCheckConnectTimeout
 * @method self withHealthCheckConnectTimeout(Integer $healthCheckConnectTimeout)
 * @method Integer getHealthCheckConnectPort
 * @method self withHealthCheckConnectPort(Integer $healthCheckConnectPort)
 * @method Integer gethealthCheckInterval
 * @method self withhealthCheckInterval(Integer $healthCheckInterval)
 * @method string getHealthCheckDomain
 * @method self withHealthCheckDomain(string $healthCheckDomain)
 * @method string getHealthCheckURI
 * @method self withHealthCheckURI(string $healthCheckURI)
 * @method string getHealthCheckHttpCode
 * @method self withHealthCheckHttpCode(string $healthCheckHttpCode)
 * @method string getHealthCheckType
 * @method self withHealthCheckType(string $healthCheckType)
 * @method Integer getMaxConnection
 * @method self withMaxConnection(Integer $maxConnection)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 * @method string getMasterSlaveServerGroupId
 * @method self withMasterSlaveServerGroupId(string $masterSlaveServerGroupId)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 * @method string getAclType
 * @method self withAclType(string $aclType)
 * @method string getAclStatus
 * @method self withAclStatus(string $aclStatus)
 * @method string getVpcIds
 * @method self withVpcIds(string $vpcIds)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class CreateLoadBalancerTCPListener extends Rpc
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
 * @method string getAddressType
 * @method self withAddressType(string $addressType)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method Integer getBandwidth
 * @method self withBandwidth(Integer $bandwidth)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getLoadBalancerName
 * @method self withLoadBalancerName(string $loadBalancerName)
 * @method string getLoadBalancerMode
 * @method self withLoadBalancerMode(string $loadBalancerMode)
 * @method string getAddress
 * @method self withAddress(string $address)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getSuName
 * @method self withSuName(string $suName)
 * @method string getCidrType
 * @method self withCidrType(string $cidrType)
 * @method string getTunnelType
 * @method self withTunnelType(string $tunnelType)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getMasterZoneId
 * @method self withMasterZoneId(string $masterZoneId)
 * @method string getSlaveZoneId
 * @method self withSlaveZoneId(string $slaveZoneId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getEnableVpcVipFlow
 * @method self withEnableVpcVipFlow(string $enableVpcVipFlow)
 * @method string getLoadBalancerSpec
 * @method self withLoadBalancerSpec(string $loadBalancerSpec)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getPricingCycle
 * @method self withPricingCycle(string $pricingCycle)
 * @method Integer getDuration
 * @method self withDuration(Integer $duration)
 * @method string getAddressIPVersion
 * @method self withAddressIPVersion(string $addressIPVersion)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method Integer getRatio
 * @method self withRatio(Integer $ratio)
 */
class CreateLoadBalancerPro extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getBandwidth
 * @method self withBandwidth(Integer $bandwidth)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method Integer getBackendServerPort
 * @method self withBackendServerPort(Integer $backendServerPort)
 * @method string getXForwardedFor
 * @method self withXForwardedFor(string $xForwardedFor)
 * @method string getScheduler
 * @method self withScheduler(string $scheduler)
 * @method string getStickySession
 * @method self withStickySession(string $stickySession)
 * @method string getStickySessionType
 * @method self withStickySessionType(string $stickySessionType)
 * @method Integer getCookieTimeout
 * @method self withCookieTimeout(Integer $cookieTimeout)
 * @method string getCookie
 * @method self withCookie(string $cookie)
 * @method string getHealthCheck
 * @method self withHealthCheck(string $healthCheck)
 * @method string getHealthCheckDomain
 * @method self withHealthCheckDomain(string $healthCheckDomain)
 * @method string getHealthCheckURI
 * @method self withHealthCheckURI(string $healthCheckURI)
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold(Integer $healthyThreshold)
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold(Integer $unhealthyThreshold)
 * @method Integer getHealthCheckTimeout
 * @method self withHealthCheckTimeout(Integer $healthCheckTimeout)
 * @method Integer getHealthCheckConnectPort
 * @method self withHealthCheckConnectPort(Integer $healthCheckConnectPort)
 * @method Integer getHealthCheckInterval
 * @method self withHealthCheckInterval(Integer $healthCheckInterval)
 * @method string getHealthCheckHttpCode
 * @method self withHealthCheckHttpCode(string $healthCheckHttpCode)
 * @method string getServerCertificateId
 * @method self withServerCertificateId(string $serverCertificateId)
 * @method Integer getMaxConnection
 * @method self withMaxConnection(Integer $maxConnection)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 * @method string getCACertificateId
 * @method self withCACertificateId(string $cACertificateId)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getXForwardedForSLBIP
 * @method self withXForwardedForSLBIP(string $xForwardedForSLBIP)
 * @method string getXForwardedForSLBID
 * @method self withXForwardedForSLBID(string $xForwardedForSLBID)
 * @method string getXForwardedForproto
 * @method self withXForwardedForproto(string $xForwardedForproto)
 * @method string getGzip
 * @method self withGzip(string $gzip)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 * @method string getAclType
 * @method self withAclType(string $aclType)
 * @method string getAclStatus
 * @method self withAclStatus(string $aclStatus)
 * @method string getVpcIds
 * @method self withVpcIds(string $vpcIds)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method Integer getIdleTimeout
 * @method self withIdleTimeout(Integer $idleTimeout)
 * @method Integer getRequestTimeout
 * @method self withRequestTimeout(Integer $requestTimeout)
 * @method string getEnableHttp2
 * @method self withEnableHttp2(string $enableHttp2)
 * @method string getTLSCipherPolicy
 * @method self withTLSCipherPolicy(string $tLSCipherPolicy)
 */
class CreateLoadBalancerHTTPSListener extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getBandwidth
 * @method self withBandwidth(Integer $bandwidth)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method Integer getBackendServerPort
 * @method self withBackendServerPort(Integer $backendServerPort)
 * @method string getXForwardedFor
 * @method self withXForwardedFor(string $xForwardedFor)
 * @method string getScheduler
 * @method self withScheduler(string $scheduler)
 * @method string getStickySession
 * @method self withStickySession(string $stickySession)
 * @method string getStickySessionType
 * @method self withStickySessionType(string $stickySessionType)
 * @method Integer getCookieTimeout
 * @method self withCookieTimeout(Integer $cookieTimeout)
 * @method string getCookie
 * @method self withCookie(string $cookie)
 * @method string getHealthCheck
 * @method self withHealthCheck(string $healthCheck)
 * @method string getHealthCheckDomain
 * @method self withHealthCheckDomain(string $healthCheckDomain)
 * @method string getHealthCheckURI
 * @method self withHealthCheckURI(string $healthCheckURI)
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold(Integer $healthyThreshold)
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold(Integer $unhealthyThreshold)
 * @method Integer getHealthCheckTimeout
 * @method self withHealthCheckTimeout(Integer $healthCheckTimeout)
 * @method Integer getHealthCheckConnectPort
 * @method self withHealthCheckConnectPort(Integer $healthCheckConnectPort)
 * @method Integer getHealthCheckInterval
 * @method self withHealthCheckInterval(Integer $healthCheckInterval)
 * @method string getHealthCheckHttpCode
 * @method self withHealthCheckHttpCode(string $healthCheckHttpCode)
 * @method Integer getMaxConnection
 * @method self withMaxConnection(Integer $maxConnection)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getVServerGroupId
 * @method self withVServerGroupId(string $vServerGroupId)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getXForwardedForSLBIP
 * @method self withXForwardedForSLBIP(string $xForwardedForSLBIP)
 * @method string getXForwardedForSLBID
 * @method self withXForwardedForSLBID(string $xForwardedForSLBID)
 * @method string getXForwardedForproto
 * @method self withXForwardedForproto(string $xForwardedForproto)
 * @method string getGzip
 * @method self withGzip(string $gzip)
 * @method string getAclId
 * @method self withAclId(string $aclId)
 * @method string getAclType
 * @method self withAclType(string $aclType)
 * @method string getAclStatus
 * @method self withAclStatus(string $aclStatus)
 * @method string getVpcIds
 * @method self withVpcIds(string $vpcIds)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getListenerForward
 * @method self withListenerForward(string $listenerForward)
 * @method Integer getForwardPort
 * @method self withForwardPort(Integer $forwardPort)
 * @method Integer getIdleTimeout
 * @method self withIdleTimeout(Integer $idleTimeout)
 * @method Integer getRequestTimeout
 * @method self withRequestTimeout(Integer $requestTimeout)
 */
class CreateLoadBalancerHTTPListener extends Rpc
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
 * @method string getAddressType
 * @method self withAddressType(string $addressType)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method Integer getBandwidth
 * @method self withBandwidth(Integer $bandwidth)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getLoadBalancerName
 * @method self withLoadBalancerName(string $loadBalancerName)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getMasterZoneId
 * @method self withMasterZoneId(string $masterZoneId)
 * @method string getSlaveZoneId
 * @method self withSlaveZoneId(string $slaveZoneId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getEnableVpcVipFlow
 * @method self withEnableVpcVipFlow(string $enableVpcVipFlow)
 * @method string getLoadBalancerSpec
 * @method self withLoadBalancerSpec(string $loadBalancerSpec)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getPricingCycle
 * @method self withPricingCycle(string $pricingCycle)
 * @method Integer getDuration
 * @method self withDuration(Integer $duration)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getAddressIPVersion
 * @method self withAddressIPVersion(string $addressIPVersion)
 * @method string getAddress
 * @method self withAddress(string $address)
 * @method Integer getRatio
 * @method self withRatio(Integer $ratio)
 */
class CreateLoadBalancer extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method string getSourceItems
 * @method self withSourceItems(string $sourceItems)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getProtocol
 * @method self withProtocol(string $protocol)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class AddListenerWhiteListItem extends Rpc
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method string getBackendServers
 * @method self withBackendServers(string $backendServers)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class AddBackendServers extends Rpc
{
    use R;
}
