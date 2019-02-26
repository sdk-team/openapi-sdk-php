<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getResourceType
 * @method self withResourceType
 * @method RepeatList getResourceId
 * @method self withResourceId
 * @method RepeatList getTagKey
 * @method self withTagKey
 * @method Boolean getAll
 * @method self withAll
 */
final class UntagResources extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getResourceType
 * @method self withResourceType
 * @method RepeatList getResourceId
 * @method self withResourceId
 * @method RepeatList getTag
 * @method self withTag
 */
final class TagResources extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getResourceType
 * @method self withResourceType
 * @method string getNextToken
 * @method self withNextToken
 * @method RepeatList getResourceId
 * @method self withResourceId
 * @method RepeatList getTag
 * @method self withTag
 */
final class ListTagResources extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method Boolean getOnlyAmount
 * @method self withOnlyAmount
 */
final class DescribeIdleInstancesForGlobal extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getAddressType
 * @method self withAddressType
 * @method string getAddressIPVersion
 * @method self withAddressIPVersion
 */
final class DescribeAvailableResource extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method Integer getBandwidth
 * @method self withBandwidth
 * @method string getScheduler
 * @method self withScheduler
 * @method Integer getPersistenceTimeout
 * @method self withPersistenceTimeout
 * @method Integer getEstablishedTimeout
 * @method self withEstablishedTimeout
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold
 * @method Integer getHealthCheckConnectTimeout
 * @method self withHealthCheckConnectTimeout
 * @method Integer getHealthCheckConnectPort
 * @method self withHealthCheckConnectPort
 * @method Integer getHealthCheckInterval
 * @method self withHealthCheckInterval
 * @method string getHealthCheckDomain
 * @method self withHealthCheckDomain
 * @method string getHealthCheckURI
 * @method self withHealthCheckURI
 * @method string getHealthCheckHttpCode
 * @method self withHealthCheckHttpCode
 * @method string getHealthCheckType
 * @method self withHealthCheckType
 * @method string getSynProxy
 * @method self withSynProxy
 * @method Integer getMaxConnection
 * @method self withMaxConnection
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getVServerGroup
 * @method self withVServerGroup
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 * @method string getMasterSlaveServerGroupId
 * @method self withMasterSlaveServerGroupId
 * @method string getMasterSlaveServerGroup
 * @method self withMasterSlaveServerGroup
 * @method string getAclId
 * @method self withAclId
 * @method string getAclType
 * @method self withAclType
 * @method string getAclStatus
 * @method self withAclStatus
 * @method string getVpcIds
 * @method self withVpcIds
 * @method string getDescription
 * @method self withDescription
 * @method Integer getMss
 * @method self withMss
 */
final class SetLoadBalancerTCPListenerAttributePro extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeLoadBalancerTCPListenerAttributePro extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getEcsInstances
 * @method self withEcsInstances
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeLoadBalancerBackendServers extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 * @method string getVServerGroupName
 * @method self withVServerGroupName
 * @method string getBackendServers
 * @method self withBackendServers
 */
final class SetVServerGroupAttributeAsyn extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getBackendServers
 * @method self withBackendServers
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class SetBackendServersAsyn extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getClientToken
 * @method self withClientToken
 * @method string getTags
 * @method self withTags
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 * @method string getBackendServers
 * @method self withBackendServers
 */
final class RemoveVServerGroupBackendServersAsyn extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getBackendServers
 * @method self withBackendServers
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class RemoveBackendServersAsyn extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 * @method string getOldBackendServers
 * @method self withOldBackendServers
 * @method string getNewBackendServers
 * @method self withNewBackendServers
 */
final class ModifyVServerGroupBackendServersAsyn extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getTaskId
 * @method self withTaskId
 */
final class DescribeAsynTaskResult extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getClientToken
 * @method self withClientToken
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 * @method string getBackendServers
 * @method self withBackendServers
 */
final class AddVServerGroupBackendServersAsyn extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getBackendServers
 * @method self withBackendServers
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class AddBackendServersAsyn extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getdata
 * @method self withdata
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 */
final class CheckSlbOrder extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getCertificateId
 * @method self withCertificateId
 * @method string getCertType
 * @method self withCertType
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeCertificateRelations extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getRenewalDuration
 * @method self withRenewalDuration
 * @method string getRenewalCycUnit
 * @method self withRenewalCycUnit
 * @method string getRenewalStatus
 * @method self withRenewalStatus
 */
final class SetAutoRenewStatus extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getAddress
 * @method self withAddress
 */
final class ModifyLoadBalancerVPCAddress extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeSlbQuotas extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getLogProject
 * @method self withLogProject
 * @method string getLogStore
 * @method self withLogStore
 * @method string getLogType
 * @method self withLogType
 * @method string getStatus
 * @method self withStatus
 */
final class SetHighDefinitionMonitorLogStatus extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 */
final class DescribeHighDefinitionMonitorLogAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getServerId
 * @method self withServerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getLoadBalancerName
 * @method self withLoadBalancerName
 * @method string getServerIntranetAddress
 * @method self withServerIntranetAddress
 * @method string getAddressType
 * @method self withAddressType
 * @method string getInternetChargeType
 * @method self withInternetChargeType
 * @method string getVpcId
 * @method self withVpcId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getNetworkType
 * @method self withNetworkType
 * @method string getAddress
 * @method self withAddress
 * @method string getMasterZoneId
 * @method self withMasterZoneId
 * @method string getSlaveZoneId
 * @method self withSlaveZoneId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getPayType
 * @method self withPayType
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getFilterFuzzyMode
 * @method self withFilterFuzzyMode
 */
final class DescribeLoadBalancersPro extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getDomainExtensionId
 * @method self withDomainExtensionId
 * @method string getServerCertificateId
 * @method self withServerCertificateId
 */
final class SetDomainExtensionAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method string getDomainExtensionId
 * @method self withDomainExtensionId
 */
final class DescribeDomainExtensions extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getDomainExtensionId
 * @method self withDomainExtensionId
 */
final class DeleteDomainExtension extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method string getDomain
 * @method self withDomain
 * @method string getServerCertificateId
 * @method self withServerCertificateId
 */
final class CreateDomainExtension extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeLoadBalancerSpecs extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getRegionAction
 * @method self withRegionAction
 * @method string getUidAction
 * @method self withUidAction
 */
final class CheckProductFeatureControl extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getAclId
 * @method self withAclId
 * @method string getAclName
 * @method self withAclName
 */
final class SetAccessControlListAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getAclId
 * @method self withAclId
 * @method string getAclEntrys
 * @method self withAclEntrys
 */
final class RemoveAccessControlListEntry extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getAclName
 * @method self withAclName
 * @method string getAddressIPVersion
 * @method self withAddressIPVersion
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method RepeatList getTag
 * @method self withTag
 */
final class DescribeAccessControlLists extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getAclId
 * @method self withAclId
 * @method string getAclEntryComment
 * @method self withAclEntryComment
 */
final class DescribeAccessControlListAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getAclId
 * @method self withAclId
 */
final class DeleteAccessControlList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getAclId
 * @method self withAclId
 * @method string getAclEntrys
 * @method self withAclEntrys
 */
final class AddAccessControlListEntry extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getAclName
 * @method self withAclName
 * @method string getAddressIPVersion
 * @method self withAddressIPVersion
 */
final class CreateAccessControlList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getLogsDownloadAttributes
 * @method self withLogsDownloadAttributes
 */
final class SetAccessLogsDownloadAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getLogType
 * @method self withLogType
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeAccessLogsDownloadAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getLogsDownloadAttributes
 * @method self withLogsDownloadAttributes
 */
final class DeleteAccessLogsDownloadAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getVPCID
 * @method self withVPCID
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeVPCRelatedLoadBalancers extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 */
final class DescribeLoadBalancersRelatedEcs extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 */
final class DescribeLoadBalancersEcs extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getPayType
 * @method self withPayType
 * @method string getPricingCycle
 * @method self withPricingCycle
 * @method Integer getDuration
 * @method self withDuration
 * @method Boolean getAutoPay
 * @method self withAutoPay
 */
final class ModifyLoadBalancerPayType extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getResourceId
 * @method self withResourceId
 * @method string getResourceType
 * @method self withResourceType
 * @method string getNewResourceGroupId
 * @method self withNewResourceGroupId
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class MoveResourceGroup extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerSpec
 * @method self withLoadBalancerSpec
 * @method Boolean getAutoPay
 * @method self withAutoPay
 */
final class ModifyLoadBalancerInstanceSpec extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getdata
 * @method self withdata
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 */
final class ProducePrepaidSlbInstance extends RpcRequest
{
}

/**
 * @method string getdata
 * @method self withdata
 */
final class InnerSlbReleaseInstance extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Boolean getIncludeListener
 * @method self withIncludeListener
 */
final class DescribeMasterSlaveServerGroups extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getMasterSlaveServerGroupId
 * @method self withMasterSlaveServerGroupId
 */
final class DescribeMasterSlaveServerGroupAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getMasterSlaveServerGroupId
 * @method self withMasterSlaveServerGroupId
 */
final class DeleteMasterSlaveServerGroup extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getMasterSlaveServerGroupName
 * @method self withMasterSlaveServerGroupName
 * @method string getMasterSlaveBackendServers
 * @method self withMasterSlaveBackendServers
 */
final class CreateMasterSlaveServerGroup extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 */
final class DescribeAliCloudCertificates extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLogsDownloadStatus
 * @method self withLogsDownloadStatus
 * @method string getRoleName
 * @method self withRoleName
 */
final class SetLogsDownloadStatus extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLogType
 * @method self withLogType
 * @method string getOSSBucketName
 * @method self withOSSBucketName
 * @method string getRoleName
 * @method self withRoleName
 */
final class SetLogsDownloadAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getLogType
 * @method self withLogType
 * @method string getLogStartTime
 * @method self withLogStartTime
 * @method string getLogEndTime
 * @method self withLogEndTime
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeRealtimeLogs extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeLogsDownloadStatus extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeLogsDownloadAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getRoleName
 * @method self withRoleName
 */
final class DeleteLogsDownloadAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 */
final class DescribeMasterSlaveVServerGroups extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getMasterSlaveVServerGroupId
 * @method self withMasterSlaveVServerGroupId
 */
final class DescribeMasterSlaveVServerGroupAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getMasterSlaveVServerGroupId
 * @method self withMasterSlaveVServerGroupId
 */
final class DeleteMasterSlaveVServerGroup extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getMasterSlaveVServerGroupName
 * @method self withMasterSlaveVServerGroupName
 * @method string getMasterSlaveBackendServers
 * @method self withMasterSlaveBackendServers
 */
final class CreateMasterSlaveVServerGroup extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Long getAutoReleaseTime
 * @method self withAutoReleaseTime
 */
final class SetLoadBalancerAutoReleaseTime extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 */
final class DescribeLoadBalancerAutoReleaseTime extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getdata
 * @method self withdata
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 */
final class ProduceSlbInstance extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getdata
 * @method self withdata
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 */
final class FillSlbRestrictions extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getdata
 * @method self withdata
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 */
final class FillSlbParams extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class EnableVpcVipFlow extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getHostEcsInstanceId
 * @method self withHostEcsInstanceId
 * @method string getBackendServers
 * @method self withBackendServers
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class SetNcServers extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getBackendServers
 * @method self withBackendServers
 * @method string getHostEcsInstanceId
 * @method self withHostEcsInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class RemoveNcServers extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getHostEcsInstanceId
 * @method self withHostEcsInstanceId
 * @method string getBackendServers
 * @method self withBackendServers
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class AddNcServers extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getCACertificate
 * @method self withCACertificate
 * @method string getCACertificateName
 * @method self withCACertificateName
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 */
final class UploadCACertificate extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getCACertificateId
 * @method self withCACertificateId
 * @method string getCACertificateName
 * @method self withCACertificateName
 */
final class SetCACertificateName extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getCACertificateId
 * @method self withCACertificateId
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method RepeatList getTag
 * @method self withTag
 */
final class DescribeCACertificates extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getCACertificateId
 * @method self withCACertificateId
 */
final class DeleteCACertificate extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getTags
 * @method self withTags
 */
final class RemoveTags extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getTags
 * @method self withTags
 * @method Boolean getDistinctKey
 * @method self withDistinctKey
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class DescribeTags extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getTags
 * @method self withTags
 */
final class AddTags extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 * @method string getVServerGroupName
 * @method self withVServerGroupName
 * @method string getBackendServers
 * @method self withBackendServers
 */
final class SetVServerGroupAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getRuleId
 * @method self withRuleId
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 * @method string getRuleName
 * @method self withRuleName
 * @method string getListenerSync
 * @method self withListenerSync
 * @method string getScheduler
 * @method self withScheduler
 * @method string getStickySession
 * @method self withStickySession
 * @method string getStickySessionType
 * @method self withStickySessionType
 * @method Integer getCookieTimeout
 * @method self withCookieTimeout
 * @method string getCookie
 * @method self withCookie
 * @method string getHealthCheck
 * @method self withHealthCheck
 * @method string getHealthCheckDomain
 * @method self withHealthCheckDomain
 * @method string getHealthCheckURI
 * @method self withHealthCheckURI
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold
 * @method Integer getHealthCheckTimeout
 * @method self withHealthCheckTimeout
 * @method Integer getHealthCheckInterval
 * @method self withHealthCheckInterval
 * @method Integer getHealthCheckConnectPort
 * @method self withHealthCheckConnectPort
 * @method string getHealthCheckHttpCode
 * @method self withHealthCheckHttpCode
 */
final class SetRule extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 * @method string getBackendServers
 * @method self withBackendServers
 */
final class RemoveVServerGroupBackendServers extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 * @method string getOldBackendServers
 * @method self withOldBackendServers
 * @method string getNewBackendServers
 * @method self withNewBackendServers
 */
final class ModifyVServerGroupBackendServers extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Boolean getIncludeRule
 * @method self withIncludeRule
 * @method Boolean getIncludeListener
 * @method self withIncludeListener
 */
final class DescribeVServerGroups extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 */
final class DescribeVServerGroupAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getProtocol
 * @method self withProtocol
 * @method Integer getListenerPort
 * @method self withListenerPort
 */
final class DescribeRules extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getRuleId
 * @method self withRuleId
 */
final class DescribeRuleAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 */
final class DeleteVServerGroup extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getRuleIds
 * @method self withRuleIds
 */
final class DeleteRules extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getVServerGroupName
 * @method self withVServerGroupName
 * @method string getBackendServers
 * @method self withBackendServers
 */
final class CreateVServerGroup extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method string getProtocol
 * @method self withProtocol
 * @method string getRuleList
 * @method self withRuleList
 */
final class CreateRules extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 * @method string getBackendServers
 * @method self withBackendServers
 */
final class AddVServerGroupBackendServers extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getWafStatus
 * @method self withWafStatus
 * @method string getCcStatus
 * @method self withCcStatus
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class SetProtectedDomainStatus extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getList
 * @method self withList
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class RemoveDomainWafWhiteList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getList
 * @method self withList
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class RemoveDomainWafBlackList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getList
 * @method self withList
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class RemoveDomainCcWhiteList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getList
 * @method self withList
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class RemoveDomainCcBlackList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getWafPolicyLevel
 * @method self withWafPolicyLevel
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class ModifyProtectedDomainSpec extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeProtectedDomains extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeProtectedDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeDomainWafWhiteList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeDomainWafBlackList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeDomainCcWhiteList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeDomainCcBlackList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DeleteProtectedDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getWafPolicyLevel
 * @method self withWafPolicyLevel
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class CreateProtectedDomain extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getList
 * @method self withList
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class AddDomainWafWhiteList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getList
 * @method self withList
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class AddDomainWafBlackList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getList
 * @method self withList
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class AddDomainCcWhiteList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDomainName
 * @method self withDomainName
 * @method string getList
 * @method self withList
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class AddDomainCcBlackList extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method string getSecurityStatus
 * @method self withSecurityStatus
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class SetListenerSecurityStatus extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getNamespace
 * @method self withNamespace
 * @method string getNamespaceUid
 * @method self withNamespaceUid
 * @method string getTags
 * @method self withTags
 */
final class DescribeLocations extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeZones extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeRegions4Location extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method Integer getBandwidth
 * @method self withBandwidth
 * @method string getScheduler
 * @method self withScheduler
 * @method Integer getPersistenceTimeout
 * @method self withPersistenceTimeout
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold
 * @method Integer getHealthCheckConnectTimeout
 * @method self withHealthCheckConnectTimeout
 * @method Integer getHealthCheckConnectPort
 * @method self withHealthCheckConnectPort
 * @method Integer getHealthCheckInterval
 * @method self withHealthCheckInterval
 * @method string gethealthCheckReq
 * @method self withhealthCheckReq
 * @method string gethealthCheckExp
 * @method self withhealthCheckExp
 * @method Integer getMaxConnection
 * @method self withMaxConnection
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getVServerGroup
 * @method self withVServerGroup
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 * @method string getMasterSlaveServerGroupId
 * @method self withMasterSlaveServerGroupId
 * @method string getMasterSlaveServerGroup
 * @method self withMasterSlaveServerGroup
 * @method string getAclId
 * @method self withAclId
 * @method string getAclType
 * @method self withAclType
 * @method string getAclStatus
 * @method self withAclStatus
 * @method string getVpcIds
 * @method self withVpcIds
 * @method string getDescription
 * @method self withDescription
 */
final class SetLoadBalancerUDPListenerAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeLoadBalancerUDPListenerAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method Integer getBackendServerPort
 * @method self withBackendServerPort
 * @method Integer getBandwidth
 * @method self withBandwidth
 * @method string getScheduler
 * @method self withScheduler
 * @method Integer getPersistenceTimeout
 * @method self withPersistenceTimeout
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold
 * @method Integer getHealthCheckConnectTimeout
 * @method self withHealthCheckConnectTimeout
 * @method Integer getHealthCheckConnectPort
 * @method self withHealthCheckConnectPort
 * @method Integer gethealthCheckInterval
 * @method self withhealthCheckInterval
 * @method string gethealthCheckReq
 * @method self withhealthCheckReq
 * @method string gethealthCheckExp
 * @method self withhealthCheckExp
 * @method Integer getMaxConnection
 * @method self withMaxConnection
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 * @method string getMasterSlaveServerGroupId
 * @method self withMasterSlaveServerGroupId
 * @method string getTags
 * @method self withTags
 * @method string getAclId
 * @method self withAclId
 * @method string getAclType
 * @method self withAclType
 * @method string getAclStatus
 * @method self withAclStatus
 * @method string getVpcIds
 * @method self withVpcIds
 * @method string getDescription
 * @method self withDescription
 */
final class CreateLoadBalancerUDPListener extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getAliCloudCertificateId
 * @method self withAliCloudCertificateId
 * @method string getAliCloudCertificateName
 * @method self withAliCloudCertificateName
 * @method string getServerCertificate
 * @method self withServerCertificate
 * @method string getPrivateKey
 * @method self withPrivateKey
 * @method string getServerCertificateName
 * @method self withServerCertificateName
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 */
final class UploadServerCertificate extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getProtocol
 * @method self withProtocol
 * @method string getTags
 * @method self withTags
 */
final class StopLoadBalancerListener extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getProtocol
 * @method self withProtocol
 * @method string getTags
 * @method self withTags
 */
final class StartLoadBalancerListener extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getServerCertificateId
 * @method self withServerCertificateId
 * @method string getServerCertificateName
 * @method self withServerCertificateName
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class SetServerCertificateName extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method Integer getBandwidth
 * @method self withBandwidth
 * @method string getScheduler
 * @method self withScheduler
 * @method Integer getPersistenceTimeout
 * @method self withPersistenceTimeout
 * @method Integer getEstablishedTimeout
 * @method self withEstablishedTimeout
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold
 * @method Integer getHealthCheckConnectTimeout
 * @method self withHealthCheckConnectTimeout
 * @method Integer getHealthCheckConnectPort
 * @method self withHealthCheckConnectPort
 * @method Integer getHealthCheckInterval
 * @method self withHealthCheckInterval
 * @method string getHealthCheckDomain
 * @method self withHealthCheckDomain
 * @method string getHealthCheckURI
 * @method self withHealthCheckURI
 * @method string getHealthCheckHttpCode
 * @method self withHealthCheckHttpCode
 * @method string getHealthCheckType
 * @method self withHealthCheckType
 * @method string getSynProxy
 * @method self withSynProxy
 * @method Integer getMaxConnection
 * @method self withMaxConnection
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getVServerGroup
 * @method self withVServerGroup
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 * @method string getMasterSlaveServerGroupId
 * @method self withMasterSlaveServerGroupId
 * @method string getMasterSlaveServerGroup
 * @method self withMasterSlaveServerGroup
 * @method string getAclId
 * @method self withAclId
 * @method string getAclType
 * @method self withAclType
 * @method string getAclStatus
 * @method self withAclStatus
 * @method string getVpcIds
 * @method self withVpcIds
 * @method string getDescription
 * @method self withDescription
 */
final class SetLoadBalancerTCPListenerAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getLoadBalancerStatus
 * @method self withLoadBalancerStatus
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class SetLoadBalancerStatus extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getLoadBalancerName
 * @method self withLoadBalancerName
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class SetLoadBalancerName extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method Integer getBandwidth
 * @method self withBandwidth
 * @method string getXForwardedFor
 * @method self withXForwardedFor
 * @method string getScheduler
 * @method self withScheduler
 * @method string getStickySession
 * @method self withStickySession
 * @method string getStickySessionType
 * @method self withStickySessionType
 * @method Integer getCookieTimeout
 * @method self withCookieTimeout
 * @method string getCookie
 * @method self withCookie
 * @method string getHealthCheck
 * @method self withHealthCheck
 * @method string getHealthCheckDomain
 * @method self withHealthCheckDomain
 * @method string getHealthCheckURI
 * @method self withHealthCheckURI
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold
 * @method Integer getHealthCheckTimeout
 * @method self withHealthCheckTimeout
 * @method Integer getHealthCheckInterval
 * @method self withHealthCheckInterval
 * @method Integer getHealthCheckConnectPort
 * @method self withHealthCheckConnectPort
 * @method string getHealthCheckHttpCode
 * @method self withHealthCheckHttpCode
 * @method Integer getMaxConnection
 * @method self withMaxConnection
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getServerCertificateId
 * @method self withServerCertificateId
 * @method string getCACertificateId
 * @method self withCACertificateId
 * @method string getVServerGroup
 * @method self withVServerGroup
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 * @method string getTags
 * @method self withTags
 * @method string getXForwardedFor_SLBIP
 * @method self withXForwardedFor_SLBIP
 * @method string getXForwardedFor_SLBID
 * @method self withXForwardedFor_SLBID
 * @method string getXForwardedFor_proto
 * @method self withXForwardedFor_proto
 * @method string getGzip
 * @method self withGzip
 * @method string getAclId
 * @method self withAclId
 * @method string getAclType
 * @method self withAclType
 * @method string getAclStatus
 * @method self withAclStatus
 * @method string getVpcIds
 * @method self withVpcIds
 * @method Integer getIdleTimeout
 * @method self withIdleTimeout
 * @method Integer getRequestTimeout
 * @method self withRequestTimeout
 * @method string getEnableHttp2
 * @method self withEnableHttp2
 * @method string getTLSCipherPolicy
 * @method self withTLSCipherPolicy
 * @method string getDescription
 * @method self withDescription
 */
final class SetLoadBalancerHTTPSListenerAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method Integer getBandwidth
 * @method self withBandwidth
 * @method string getXForwardedFor
 * @method self withXForwardedFor
 * @method string getScheduler
 * @method self withScheduler
 * @method string getStickySession
 * @method self withStickySession
 * @method string getStickySessionType
 * @method self withStickySessionType
 * @method Integer getCookieTimeout
 * @method self withCookieTimeout
 * @method string getCookie
 * @method self withCookie
 * @method string getHealthCheck
 * @method self withHealthCheck
 * @method string getHealthCheckDomain
 * @method self withHealthCheckDomain
 * @method string getHealthCheckURI
 * @method self withHealthCheckURI
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold
 * @method Integer getHealthCheckTimeout
 * @method self withHealthCheckTimeout
 * @method Integer getHealthCheckInterval
 * @method self withHealthCheckInterval
 * @method Integer getHealthCheckConnectPort
 * @method self withHealthCheckConnectPort
 * @method string getHealthCheckHttpCode
 * @method self withHealthCheckHttpCode
 * @method Integer getMaxConnection
 * @method self withMaxConnection
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getVServerGroup
 * @method self withVServerGroup
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 * @method string getTags
 * @method self withTags
 * @method string getXForwardedFor_SLBIP
 * @method self withXForwardedFor_SLBIP
 * @method string getXForwardedFor_SLBID
 * @method self withXForwardedFor_SLBID
 * @method string getXForwardedFor_proto
 * @method self withXForwardedFor_proto
 * @method string getGzip
 * @method self withGzip
 * @method string getAclId
 * @method self withAclId
 * @method string getAclType
 * @method self withAclType
 * @method string getAclStatus
 * @method self withAclStatus
 * @method string getVpcIds
 * @method self withVpcIds
 * @method Integer getIdleTimeout
 * @method self withIdleTimeout
 * @method Integer getRequestTimeout
 * @method self withRequestTimeout
 * @method string getDescription
 * @method self withDescription
 */
final class SetLoadBalancerHTTPListenerAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method string getAccessControlStatus
 * @method self withAccessControlStatus
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getProtocol
 * @method self withProtocol
 * @method string getTags
 * @method self withTags
 */
final class SetListenerAccessControlStatus extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getBackendServers
 * @method self withBackendServers
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class SetBackendServers extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method string getSourceItems
 * @method self withSourceItems
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getProtocol
 * @method self withProtocol
 * @method string getTags
 * @method self withTags
 */
final class RemoveListenerWhiteListItem extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getBackendServers
 * @method self withBackendServers
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class RemoveBackendServers extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getInternetChargeType
 * @method self withInternetChargeType
 * @method Integer getBandwidth
 * @method self withBandwidth
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method Boolean getAutoPay
 * @method self withAutoPay
 * @method Integer getRatio
 * @method self withRatio
 */
final class ModifyLoadBalancerInternetSpec extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getServerCertificateId
 * @method self withServerCertificateId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method RepeatList getTag
 * @method self withTag
 */
final class DescribeServerCertificates extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getServerCertificateId
 * @method self withServerCertificateId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeServerCertificate extends RpcRequest
{
}

/**
 * @method string getAcceptLanguage
 * @method self withAcceptLanguage
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeRegions extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeLoadBalancerTCPListenerAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getServerId
 * @method self withServerId
 * @method string getAddressIPVersion
 * @method self withAddressIPVersion
 * @method string getLoadBalancerStatus
 * @method self withLoadBalancerStatus
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getLoadBalancerName
 * @method self withLoadBalancerName
 * @method string getServerIntranetAddress
 * @method self withServerIntranetAddress
 * @method string getAddressType
 * @method self withAddressType
 * @method string getInternetChargeType
 * @method self withInternetChargeType
 * @method string getVpcId
 * @method self withVpcId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getNetworkType
 * @method self withNetworkType
 * @method string getAddress
 * @method self withAddress
 * @method string getMasterZoneId
 * @method self withMasterZoneId
 * @method string getSlaveZoneId
 * @method self withSlaveZoneId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getPayType
 * @method self withPayType
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method RepeatList getTag
 * @method self withTag
 * @method string getFuzzy
 * @method self withFuzzy
 */
final class DescribeLoadBalancers extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeLoadBalancerHTTPSListenerAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeLoadBalancerHTTPListenerAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method Boolean getIncludeReservedData
 * @method self withIncludeReservedData
 */
final class DescribeLoadBalancerAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method string getProtocol
 * @method self withProtocol
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DescribeListenerAccessControlAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getProtocol
 * @method self withProtocol
 */
final class DescribeHealthStatus extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getServerCertificateId
 * @method self withServerCertificateId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DeleteServerCertificate extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method string getProtocol
 * @method self withProtocol
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DeleteLoadBalancerListener extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class DeleteLoadBalancer extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method Integer getBackendServerPort
 * @method self withBackendServerPort
 * @method Integer getBandwidth
 * @method self withBandwidth
 * @method string getScheduler
 * @method self withScheduler
 * @method Integer getPersistenceTimeout
 * @method self withPersistenceTimeout
 * @method Integer getEstablishedTimeout
 * @method self withEstablishedTimeout
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold
 * @method Integer getHealthCheckConnectTimeout
 * @method self withHealthCheckConnectTimeout
 * @method Integer getHealthCheckConnectPort
 * @method self withHealthCheckConnectPort
 * @method Integer gethealthCheckInterval
 * @method self withhealthCheckInterval
 * @method string getHealthCheckDomain
 * @method self withHealthCheckDomain
 * @method string getHealthCheckURI
 * @method self withHealthCheckURI
 * @method string getHealthCheckHttpCode
 * @method self withHealthCheckHttpCode
 * @method string getHealthCheckType
 * @method self withHealthCheckType
 * @method Integer getMaxConnection
 * @method self withMaxConnection
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 * @method string getMasterSlaveServerGroupId
 * @method self withMasterSlaveServerGroupId
 * @method string getTags
 * @method self withTags
 * @method string getAclId
 * @method self withAclId
 * @method string getAclType
 * @method self withAclType
 * @method string getAclStatus
 * @method self withAclStatus
 * @method string getVpcIds
 * @method self withVpcIds
 * @method string getDescription
 * @method self withDescription
 */
final class CreateLoadBalancerTCPListener extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getAddressType
 * @method self withAddressType
 * @method string getInternetChargeType
 * @method self withInternetChargeType
 * @method Integer getBandwidth
 * @method self withBandwidth
 * @method string getClientToken
 * @method self withClientToken
 * @method string getLoadBalancerName
 * @method self withLoadBalancerName
 * @method string getLoadBalancerMode
 * @method self withLoadBalancerMode
 * @method string getAddress
 * @method self withAddress
 * @method string getVpcId
 * @method self withVpcId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getSuName
 * @method self withSuName
 * @method string getCidrType
 * @method self withCidrType
 * @method string getTunnelType
 * @method self withTunnelType
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getMasterZoneId
 * @method self withMasterZoneId
 * @method string getSlaveZoneId
 * @method self withSlaveZoneId
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getEnableVpcVipFlow
 * @method self withEnableVpcVipFlow
 * @method string getLoadBalancerSpec
 * @method self withLoadBalancerSpec
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method string getPayType
 * @method self withPayType
 * @method string getPricingCycle
 * @method self withPricingCycle
 * @method Integer getDuration
 * @method self withDuration
 * @method string getAddressIPVersion
 * @method self withAddressIPVersion
 * @method Boolean getAutoPay
 * @method self withAutoPay
 * @method Integer getRatio
 * @method self withRatio
 */
final class CreateLoadBalancerPro extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getBandwidth
 * @method self withBandwidth
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method Integer getBackendServerPort
 * @method self withBackendServerPort
 * @method string getXForwardedFor
 * @method self withXForwardedFor
 * @method string getScheduler
 * @method self withScheduler
 * @method string getStickySession
 * @method self withStickySession
 * @method string getStickySessionType
 * @method self withStickySessionType
 * @method Integer getCookieTimeout
 * @method self withCookieTimeout
 * @method string getCookie
 * @method self withCookie
 * @method string getHealthCheck
 * @method self withHealthCheck
 * @method string getHealthCheckDomain
 * @method self withHealthCheckDomain
 * @method string getHealthCheckURI
 * @method self withHealthCheckURI
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold
 * @method Integer getHealthCheckTimeout
 * @method self withHealthCheckTimeout
 * @method Integer getHealthCheckConnectPort
 * @method self withHealthCheckConnectPort
 * @method Integer getHealthCheckInterval
 * @method self withHealthCheckInterval
 * @method string getHealthCheckHttpCode
 * @method self withHealthCheckHttpCode
 * @method string getServerCertificateId
 * @method self withServerCertificateId
 * @method Integer getMaxConnection
 * @method self withMaxConnection
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 * @method string getCACertificateId
 * @method self withCACertificateId
 * @method string getTags
 * @method self withTags
 * @method string getXForwardedFor_SLBIP
 * @method self withXForwardedFor_SLBIP
 * @method string getXForwardedFor_SLBID
 * @method self withXForwardedFor_SLBID
 * @method string getXForwardedFor_proto
 * @method self withXForwardedFor_proto
 * @method string getGzip
 * @method self withGzip
 * @method string getAclId
 * @method self withAclId
 * @method string getAclType
 * @method self withAclType
 * @method string getAclStatus
 * @method self withAclStatus
 * @method string getVpcIds
 * @method self withVpcIds
 * @method string getDescription
 * @method self withDescription
 * @method Integer getIdleTimeout
 * @method self withIdleTimeout
 * @method Integer getRequestTimeout
 * @method self withRequestTimeout
 * @method string getEnableHttp2
 * @method self withEnableHttp2
 * @method string getTLSCipherPolicy
 * @method self withTLSCipherPolicy
 */
final class CreateLoadBalancerHTTPSListener extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getBandwidth
 * @method self withBandwidth
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method Integer getBackendServerPort
 * @method self withBackendServerPort
 * @method string getXForwardedFor
 * @method self withXForwardedFor
 * @method string getScheduler
 * @method self withScheduler
 * @method string getStickySession
 * @method self withStickySession
 * @method string getStickySessionType
 * @method self withStickySessionType
 * @method Integer getCookieTimeout
 * @method self withCookieTimeout
 * @method string getCookie
 * @method self withCookie
 * @method string getHealthCheck
 * @method self withHealthCheck
 * @method string getHealthCheckDomain
 * @method self withHealthCheckDomain
 * @method string getHealthCheckURI
 * @method self withHealthCheckURI
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold
 * @method Integer getHealthCheckTimeout
 * @method self withHealthCheckTimeout
 * @method Integer getHealthCheckConnectPort
 * @method self withHealthCheckConnectPort
 * @method Integer getHealthCheckInterval
 * @method self withHealthCheckInterval
 * @method string getHealthCheckHttpCode
 * @method self withHealthCheckHttpCode
 * @method Integer getMaxConnection
 * @method self withMaxConnection
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getVServerGroupId
 * @method self withVServerGroupId
 * @method string getTags
 * @method self withTags
 * @method string getXForwardedFor_SLBIP
 * @method self withXForwardedFor_SLBIP
 * @method string getXForwardedFor_SLBID
 * @method self withXForwardedFor_SLBID
 * @method string getXForwardedFor_proto
 * @method self withXForwardedFor_proto
 * @method string getGzip
 * @method self withGzip
 * @method string getAclId
 * @method self withAclId
 * @method string getAclType
 * @method self withAclType
 * @method string getAclStatus
 * @method self withAclStatus
 * @method string getVpcIds
 * @method self withVpcIds
 * @method string getDescription
 * @method self withDescription
 * @method string getListenerForward
 * @method self withListenerForward
 * @method Integer getForwardPort
 * @method self withForwardPort
 * @method Integer getIdleTimeout
 * @method self withIdleTimeout
 * @method Integer getRequestTimeout
 * @method self withRequestTimeout
 */
final class CreateLoadBalancerHTTPListener extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getAddressType
 * @method self withAddressType
 * @method string getInternetChargeType
 * @method self withInternetChargeType
 * @method Integer getBandwidth
 * @method self withBandwidth
 * @method string getClientToken
 * @method self withClientToken
 * @method string getLoadBalancerName
 * @method self withLoadBalancerName
 * @method string getVpcId
 * @method self withVpcId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getMasterZoneId
 * @method self withMasterZoneId
 * @method string getSlaveZoneId
 * @method self withSlaveZoneId
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 * @method string getEnableVpcVipFlow
 * @method self withEnableVpcVipFlow
 * @method string getLoadBalancerSpec
 * @method self withLoadBalancerSpec
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method string getPayType
 * @method self withPayType
 * @method string getPricingCycle
 * @method self withPricingCycle
 * @method Integer getDuration
 * @method self withDuration
 * @method Boolean getAutoPay
 * @method self withAutoPay
 * @method string getAddressIPVersion
 * @method self withAddressIPVersion
 * @method string getAddress
 * @method self withAddress
 * @method Integer getRatio
 * @method self withRatio
 */
final class CreateLoadBalancer extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method Integer getListenerPort
 * @method self withListenerPort
 * @method string getSourceItems
 * @method self withSourceItems
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getProtocol
 * @method self withProtocol
 * @method string getTags
 * @method self withTags
 */
final class AddListenerWhiteListItem extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId
 * @method string getBackendServers
 * @method self withBackendServers
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getaccess_key_id
 * @method self withaccess_key_id
 * @method string getTags
 * @method self withTags
 */
final class AddBackendServers extends RpcRequest
{
}
