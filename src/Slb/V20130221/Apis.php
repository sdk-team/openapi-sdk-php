<?php

namespace AlibabaCloud\Slb\V20130221;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SetLoadBanancerListenerStatus setLoadBanancerListenerStatus($options = [])
 * @method SetLoadBalancerTCPListenerAttribute setLoadBalancerTCPListenerAttribute($options = [])
 * @method SetLoadBalancerStatus setLoadBalancerStatus($options = [])
 * @method SetLoadBalancerName setLoadBalancerName($options = [])
 * @method SetLoadBalancerListenerStatus setLoadBalancerListenerStatus($options = [])
 * @method SetLoadBalancerHTTPListenerAttribute setLoadBalancerHTTPListenerAttribute($options = [])
 * @method RemoveBackendServers removeBackendServers($options = [])
 * @method DescribeRegions describeRegions($options = [])
 * @method DescribeLoadBalancerTCPListenerAttribute describeLoadBalancerTCPListenerAttribute($options = [])
 * @method DescribeLoadBalancers describeLoadBalancers($options = [])
 * @method DescribeLoadBalancerHTTPListenerAttribute describeLoadBalancerHTTPListenerAttribute($options = [])
 * @method DescribeLoadBalancerAttribute describeLoadBalancerAttribute($options = [])
 * @method DescribeBackendServers describeBackendServers($options = [])
 * @method DeleteLoadBalancerListener deleteLoadBalancerListener($options = [])
 * @method DeleteLoadBalancer deleteLoadBalancer($options = [])
 * @method CreateLoadBalancerTCPListener createLoadBalancerTCPListener($options = [])
 * @method CreateLoadBalancerHTTPListener createLoadBalancerHTTPListener($options = [])
 * @method CreateLoadBalancer createLoadBalancer($options = [])
 * @method AddBackendServers addBackendServers($options = [])
 */
class V20130221
{
    use ApiResolverTrait;
}

/**
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method string getListenerStatus
 * @method self withListenerStatus(string $listenerStatus)
 * @method string getHostId
 * @method self withHostId(string $hostId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SetLoadBanancerListenerStatus extends Rpc
{
    use R;
}

/**
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method string getScheduler
 * @method self withScheduler(string $scheduler)
 * @method Integer getPersistenceTimeout
 * @method self withPersistenceTimeout(Integer $persistenceTimeout)
 * @method string getHealthCheck
 * @method self withHealthCheck(string $healthCheck)
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold(Integer $healthyThreshold)
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold(Integer $unhealthyThreshold)
 * @method Integer getConnectTimeout
 * @method self withConnectTimeout(Integer $connectTimeout)
 * @method Integer getConnectPort
 * @method self withConnectPort(Integer $connectPort)
 * @method Integer getInterval
 * @method self withInterval(Integer $interval)
 * @method string getHostId
 * @method self withHostId(string $hostId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
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
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method string getListenerStatus
 * @method self withListenerStatus(string $listenerStatus)
 * @method string getHostId
 * @method self withHostId(string $hostId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SetLoadBalancerListenerStatus extends Rpc
{
    use R;
}

/**
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
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
 * @method string getDomain
 * @method self withDomain(string $domain)
 * @method string getURI
 * @method self withURI(string $uRI)
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold(Integer $healthyThreshold)
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold(Integer $unhealthyThreshold)
 * @method Integer getHealthCheckTimeout
 * @method self withHealthCheckTimeout(Integer $healthCheckTimeout)
 * @method Integer getInterval
 * @method self withInterval(Integer $interval)
 * @method string getHostId
 * @method self withHostId(string $hostId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class DescribeBackendServers extends Rpc
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
 * @method string getListenerStatus
 * @method self withListenerStatus(string $listenerStatus)
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
 * @method string getHealthCheck
 * @method self withHealthCheck(string $healthCheck)
 * @method Integer getConnectTimeout
 * @method self withConnectTimeout(Integer $connectTimeout)
 * @method Integer getConnectPort
 * @method self withConnectPort(Integer $connectPort)
 * @method Integer getInterval
 * @method self withInterval(Integer $interval)
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
 */
class CreateLoadBalancerTCPListener extends Rpc
{
    use R;
}

/**
 * @method string getLoadBalancerId
 * @method self withLoadBalancerId(string $loadBalancerId)
 * @method Integer getListenerPort
 * @method self withListenerPort(Integer $listenerPort)
 * @method Integer getBackendServerPort
 * @method self withBackendServerPort(Integer $backendServerPort)
 * @method string getListenerStatus
 * @method self withListenerStatus(string $listenerStatus)
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
 * @method string getDomain
 * @method self withDomain(string $domain)
 * @method string getURI
 * @method self withURI(string $uRI)
 * @method Integer getHealthyThreshold
 * @method self withHealthyThreshold(Integer $healthyThreshold)
 * @method Integer getUnhealthyThreshold
 * @method self withUnhealthyThreshold(Integer $unhealthyThreshold)
 * @method Integer getHealthCheckTimeout
 * @method self withHealthCheckTimeout(Integer $healthCheckTimeout)
 * @method Integer getInterval
 * @method self withInterval(Integer $interval)
 * @method string getHostId
 * @method self withHostId(string $hostId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
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
 * @method string getIsPublicAddress
 * @method self withIsPublicAddress(string $isPublicAddress)
 * @method string getAddress
 * @method self withAddress(string $address)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getLoadBalancerName
 * @method self withLoadBalancerName(string $loadBalancerName)
 * @method string getLoadBalancerMode
 * @method self withLoadBalancerMode(string $loadBalancerMode)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
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
