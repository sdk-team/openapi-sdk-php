<?php

namespace AlibabaCloud\Ecs\V20160314;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DescribeInstanceNeedReboot describeInstanceNeedReboot($options = [])
 * @method DescribeLinkedKMSKeys describeLinkedKMSKeys($options = [])
 * @method DescribeKMSKeys describeKMSKeys($options = [])
 * @method DescribeKMSKeyAttribute describeKMSKeyAttribute($options = [])
 * @method DescribeResources describeResources($options = [])
 * @method DescribeResourceRecommendFilters describeResourceRecommendFilters($options = [])
 * @method DescribeResourceFilterAttributes describeResourceFilterAttributes($options = [])
 * @method PurchaseReservedInstancesOffering purchaseReservedInstancesOffering($options = [])
 * @method ModifyReservedInstances modifyReservedInstances($options = [])
 * @method DescribeReservedInstances describeReservedInstances($options = [])
 * @method DescribeReservedInstancePrice describeReservedInstancePrice($options = [])
 * @method DeleteEniQosGroup deleteEniQosGroup($options = [])
 * @method QueryEniQosGroupByInstance queryEniQosGroupByInstance($options = [])
 * @method QueryEniQosGroupByEni queryEniQosGroupByEni($options = [])
 * @method ModifyEniQosGroup modifyEniQosGroup($options = [])
 * @method LeaveEniQosGroup leaveEniQosGroup($options = [])
 * @method JoinEniQosGroup joinEniQosGroup($options = [])
 * @method DescribeEniQosGroupInfo describeEniQosGroupInfo($options = [])
 * @method CreateEniQosGroup createEniQosGroup($options = [])
 * @method DescribeConfigLogSubscription describeConfigLogSubscription($options = [])
 * @method DescribeConfigLogHistory describeConfigLogHistory($options = [])
 * @method DeleteConfigLogSubscriptions deleteConfigLogSubscriptions($options = [])
 * @method CreateConfigLogSubscriptions createConfigLogSubscriptions($options = [])
 * @method DescribeAccountAttributes describeAccountAttributes($options = [])
 * @method GetLaunchTemplateData getLaunchTemplateData($options = [])
 * @method ModifyDedicatedHostAttribute modifyDedicatedHostAttribute($options = [])
 * @method RenewDedicatedHosts renewDedicatedHosts($options = [])
 * @method ReleaseDedicatedHost releaseDedicatedHost($options = [])
 * @method ModifyInstanceDeployment modifyInstanceDeployment($options = [])
 * @method ModifyDedicatedHostAutoRenewAttribute modifyDedicatedHostAutoRenewAttribute($options = [])
 * @method ModifyDedicatedHostAutoReleaseTime modifyDedicatedHostAutoReleaseTime($options = [])
 * @method DescribeDedicatedHosts describeDedicatedHosts($options = [])
 * @method DescribeDedicatedHostTypes describeDedicatedHostTypes($options = [])
 * @method DescribeDedicatedHostAutoRenew describeDedicatedHostAutoRenew($options = [])
 * @method AllocateDedicatedHosts allocateDedicatedHosts($options = [])
 * @method CreateVolumes createVolumes($options = [])
 * @method CreateVolumesGatedLaunch createVolumesGatedLaunch($options = [])
 * @method SetInstanceAutoReleaseTime setInstanceAutoReleaseTime($options = [])
 * @method RunInstancesGatedLaunch runInstancesGatedLaunch($options = [])
 * @method DescribePriceGatedLaunch describePriceGatedLaunch($options = [])
 * @method DescribeBandwidthPriceGatedLaunch describeBandwidthPriceGatedLaunch($options = [])
 * @method DescribeAccountLimitsGatedLaunch describeAccountLimitsGatedLaunch($options = [])
 * @method CreateOrderGatedLaunch createOrderGatedLaunch($options = [])
 * @method CreateDisksGatedLaunch createDisksGatedLaunch($options = [])
 * @method DescribeAccountLimits describeAccountLimits($options = [])
 * @method DescribePrice describePrice($options = [])
 * @method DescribeBandwidthPrice describeBandwidthPrice($options = [])
 * @method CreateDisks createDisks($options = [])
 * @method CreateOrder createOrder($options = [])
 * @method RunInstances runInstances($options = [])
 */
class V20160314
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
 * @method array getInstanceIds
 * @method self withInstanceIds(array $instanceIds)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeInstanceNeedReboot extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getappKey
 * @method self withappKey(string $appKey)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 */
class DescribeLinkedKMSKeys extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getappKey
 * @method self withappKey(string $appKey)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getPageNumber
 * @method self withPageNumber(string $pageNumber)
 */
class DescribeKMSKeys extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getappKey
 * @method self withappKey(string $appKey)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getKMSKeyId
 * @method self withKMSKeyId(string $kMSKeyId)
 */
class DescribeKMSKeyAttribute extends Rpc
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
 * @method array getTemplateTag
 * @method self withTemplateTag(array $templateTag)
 * @method string getProduct
 * @method self withProduct(string $product)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getGlobal
 * @method self withGlobal(string $global)
 * @method array getFilter
 * @method self withFilter(array $filter)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxItems
 * @method self withMaxItems(Integer $maxItems)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 */
class DescribeResources extends Rpc
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
 * @method array getTemplateTag
 * @method self withTemplateTag(array $templateTag)
 * @method string getProduct
 * @method self withProduct(string $product)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getGlobal
 * @method self withGlobal(string $global)
 * @method string getAttributeName
 * @method self withAttributeName(string $attributeName)
 * @method string getAttributeValue
 * @method self withAttributeValue(string $attributeValue)
 * @method Integer getMaxItems
 * @method self withMaxItems(Integer $maxItems)
 */
class DescribeResourceRecommendFilters extends Rpc
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
 * @method array getTemplateTag
 * @method self withTemplateTag(array $templateTag)
 * @method string getProduct
 * @method self withProduct(string $product)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 */
class DescribeResourceFilterAttributes extends Rpc
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
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getReservedInstanceName
 * @method self withReservedInstanceName(string $reservedInstanceName)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method Integer getInstanceAmount
 * @method self withInstanceAmount(Integer $instanceAmount)
 * @method string getOfferingType
 * @method self withOfferingType(string $offeringType)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getPeriodUnit
 * @method self withPeriodUnit(string $periodUnit)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getFromApp
 * @method self withFromApp(string $fromApp)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 */
class PurchaseReservedInstancesOffering extends Rpc
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
 * @method array getTag
 * @method self withTag(array $tag)
 * @method array getReservedInstanceId
 * @method self withReservedInstanceId(array $reservedInstanceId)
 * @method array getConfiguration
 * @method self withConfiguration(array $configuration)
 */
class ModifyReservedInstances extends Rpc
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
 * @method array getTag
 * @method self withTag(array $tag)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method array getReservedInstanceId
 * @method self withReservedInstanceId(array $reservedInstanceId)
 * @method string getReservedInstanceName
 * @method self withReservedInstanceName(string $reservedInstanceName)
 * @method array getStatus
 * @method self withStatus(array $status)
 * @method string getLockReason
 * @method self withLockReason(string $lockReason)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getInstanceTypeFamily
 * @method self withInstanceTypeFamily(string $instanceTypeFamily)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method string getOfferingType
 * @method self withOfferingType(string $offeringType)
 * @method string getExpiredTime
 * @method self withExpiredTime(string $expiredTime)
 */
class DescribeReservedInstances extends Rpc
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
 * @method array getTag
 * @method self withTag(array $tag)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method array getReservedInstanceId
 * @method self withReservedInstanceId(array $reservedInstanceId)
 */
class DescribeReservedInstancePrice extends Rpc
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
 * @method string getQosGroupName
 * @method self withQosGroupName(string $qosGroupName)
 */
class DeleteEniQosGroup extends Rpc
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class QueryEniQosGroupByInstance extends Rpc
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
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId(string $networkInterfaceId)
 */
class QueryEniQosGroupByEni extends Rpc
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
 * @method string getQosGroupName
 * @method self withQosGroupName(string $qosGroupName)
 * @method Integer getRx
 * @method self withRx(Integer $rx)
 * @method Integer getRxPps
 * @method self withRxPps(Integer $rxPps)
 * @method Integer getTx
 * @method self withTx(Integer $tx)
 * @method Integer getTxPps
 * @method self withTxPps(Integer $txPps)
 */
class ModifyEniQosGroup extends Rpc
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
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId(string $networkInterfaceId)
 */
class LeaveEniQosGroup extends Rpc
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
 * @method string getQosGroupName
 * @method self withQosGroupName(string $qosGroupName)
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId(string $networkInterfaceId)
 */
class JoinEniQosGroup extends Rpc
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
 * @method string getQosGroupName
 * @method self withQosGroupName(string $qosGroupName)
 */
class DescribeEniQosGroupInfo extends Rpc
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
 * @method string getQosGroupName
 * @method self withQosGroupName(string $qosGroupName)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getRx
 * @method self withRx(Integer $rx)
 * @method Integer getRxPps
 * @method self withRxPps(Integer $rxPps)
 * @method Integer getTx
 * @method self withTx(Integer $tx)
 * @method Integer getTxPps
 * @method self withTxPps(Integer $txPps)
 */
class CreateEniQosGroup extends Rpc
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
 * @method array getName
 * @method self withName(array $name)
 * @method array getResourceType
 * @method self withResourceType(array $resourceType)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeConfigLogSubscription extends Rpc
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
 * @method string getChronologicalOrder
 * @method self withChronologicalOrder(string $chronologicalOrder)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeConfigLogHistory extends Rpc
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
 * @method array getName
 * @method self withName(array $name)
 */
class DeleteConfigLogSubscriptions extends Rpc
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
 * @method array getSubscription
 * @method self withSubscription(array $subscription)
 */
class CreateConfigLogSubscriptions extends Rpc
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
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method array getAttributeName
 * @method self withAttributeName(array $attributeName)
 */
class DescribeAccountAttributes extends Rpc
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class GetLaunchTemplateData extends Rpc
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
 * @method string getDedicatedHostId
 * @method self withDedicatedHostId(string $dedicatedHostId)
 * @method string getDedicatedHostName
 * @method self withDedicatedHostName(string $dedicatedHostName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getActionOnMaintenance
 * @method self withActionOnMaintenance(string $actionOnMaintenance)
 * @method Integer getNetworkAttributesSlbUdpTimeout
 * @method self withNetworkAttributesSlbUdpTimeout(Integer $networkAttributesSlbUdpTimeout)
 * @method Integer getNetworkAttributesUdpTimeout
 * @method self withNetworkAttributesUdpTimeout(Integer $networkAttributesUdpTimeout)
 */
class ModifyDedicatedHostAttribute extends Rpc
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
 * @method string getDedicatedHostIds
 * @method self withDedicatedHostIds(string $dedicatedHostIds)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getPeriodUnit
 * @method self withPeriodUnit(string $periodUnit)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getFromApp
 * @method self withFromApp(string $fromApp)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class RenewDedicatedHosts extends Rpc
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
 * @method string getDedicatedHostId
 * @method self withDedicatedHostId(string $dedicatedHostId)
 * @method string getToken
 * @method self withToken(string $token)
 * @method bool getForce
 * @method self withForce(bool $force)
 */
class ReleaseDedicatedHost extends Rpc
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getDedicatedHostId
 * @method self withDedicatedHostId(string $dedicatedHostId)
 */
class ModifyInstanceDeployment extends Rpc
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
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method Integer getDuration
 * @method self withDuration(Integer $duration)
 * @method string getPeriodUnit
 * @method self withPeriodUnit(string $periodUnit)
 * @method bool getAutoRenew
 * @method self withAutoRenew(bool $autoRenew)
 * @method string getRenewalStatus
 * @method self withRenewalStatus(string $renewalStatus)
 */
class ModifyDedicatedHostAutoRenewAttribute extends Rpc
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getAutoReleaseTime
 * @method self withAutoReleaseTime(string $autoReleaseTime)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyDedicatedHostAutoReleaseTime extends Rpc
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
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getDedicatedHostIds
 * @method self withDedicatedHostIds(string $dedicatedHostIds)
 * @method string getDedicatedHostName
 * @method self withDedicatedHostName(string $dedicatedHostName)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getDedicatedHostType
 * @method self withDedicatedHostType(string $dedicatedHostType)
 * @method string getLockReason
 * @method self withLockReason(string $lockReason)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class DescribeDedicatedHosts extends Rpc
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
 * @method string getDedicatedHostType
 * @method self withDedicatedHostType(string $dedicatedHostType)
 * @method string getSupportInstanceTypeFamily
 * @method self withSupportInstanceTypeFamily(string $supportInstanceTypeFamily)
 * @method string getGeneration
 * @method self withGeneration(string $generation)
 */
class DescribeDedicatedHostTypes extends Rpc
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
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 */
class DescribeDedicatedHostAutoRenew extends Rpc
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
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getDedicatedHostName
 * @method self withDedicatedHostName(string $dedicatedHostName)
 * @method string getDedicatedHostType
 * @method self withDedicatedHostType(string $dedicatedHostType)
 * @method string getActionOnMaintenance
 * @method self withActionOnMaintenance(string $actionOnMaintenance)
 * @method Integer getNetworkAttributesSlbUdpTimeout
 * @method self withNetworkAttributesSlbUdpTimeout(Integer $networkAttributesSlbUdpTimeout)
 * @method Integer getNetworkAttributesUdpTimeout
 * @method self withNetworkAttributesUdpTimeout(Integer $networkAttributesUdpTimeout)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 * @method Integer getQuantity
 * @method self withQuantity(Integer $quantity)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getPeriodUnit
 * @method self withPeriodUnit(string $periodUnit)
 * @method bool getAutoRenew
 * @method self withAutoRenew(bool $autoRenew)
 * @method Integer getAutoRenewPeriod
 * @method self withAutoRenewPeriod(Integer $autoRenewPeriod)
 * @method string getAutoReleaseTime
 * @method self withAutoReleaseTime(string $autoReleaseTime)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getFromApp
 * @method self withFromApp(string $fromApp)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class AllocateDedicatedHosts extends Rpc
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
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getSnapshotId
 * @method self withSnapshotId(string $snapshotId)
 * @method string getVolumeName
 * @method self withVolumeName(string $volumeName)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method Integer getAmount
 * @method self withAmount(Integer $amount)
 * @method string getVolumeCategory
 * @method self withVolumeCategory(string $volumeCategory)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method bool getVolumeEncrypted
 * @method self withVolumeEncrypted(bool $volumeEncrypted)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getKMSKeyId
 * @method self withKMSKeyId(string $kMSKeyId)
 */
class CreateVolumes extends Rpc
{
    use R;
}

class CreateVolumesGatedLaunch extends Rpc
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getAutoReleaseTime
 * @method self withAutoReleaseTime(string $autoReleaseTime)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SetInstanceAutoReleaseTime extends Rpc
{
    use R;
}

class RunInstancesGatedLaunch extends Rpc
{
    use R;
}

class DescribePriceGatedLaunch extends Rpc
{
    use R;
}

class DescribeBandwidthPriceGatedLaunch extends Rpc
{
    use R;
}

class DescribeAccountLimitsGatedLaunch extends Rpc
{
    use R;
}

class CreateOrderGatedLaunch extends Rpc
{
    use R;
}

class CreateDisksGatedLaunch extends Rpc
{
    use R;
}

/**
 * @method array getFilter
 * @method self withFilter(array $filter)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeAccountLimits extends Rpc
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
 * @method string getDefaultVpc
 * @method self withDefaultVpc(string $defaultVpc)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method string getCommodity
 * @method self withCommodity(string $commodity)
 * @method bool getVerbose
 * @method self withVerbose(bool $verbose)
 * @method bool getNeedSpotPrice
 * @method self withNeedSpotPrice(bool $needSpotPrice)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getFromApp
 * @method self withFromApp(string $fromApp)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribePrice extends Rpc
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
 * @method string getPriceUnit
 * @method self withPriceUnit(string $priceUnit)
 * @method bool getVerbose
 * @method self withVerbose(bool $verbose)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeBandwidthPrice extends Rpc
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
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method string getSnapshotId
 * @method self withSnapshotId(string $snapshotId)
 * @method string getCategory
 * @method self withCategory(string $category)
 * @method string getDiskName
 * @method self withDiskName(string $diskName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method bool getEncrypted
 * @method self withEncrypted(bool $encrypted)
 * @method Integer getAmount
 * @method self withAmount(Integer $amount)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getKMSKeyId
 * @method self withKMSKeyId(string $kMSKeyId)
 */
class CreateDisks extends Rpc
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
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 * @method string getCommodity
 * @method self withCommodity(string $commodity)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getFromApp
 * @method self withFromApp(string $fromApp)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDedicatedHostId
 * @method self withDedicatedHostId(string $dedicatedHostId)
 * @method bool getAsyncPattern
 * @method self withAsyncPattern(bool $asyncPattern)
 */
class CreateOrder extends Rpc
{
    use R;
}

/**
 * @method array getDataDisk
 * @method self withDataDisk(array $dataDisk)
 * @method array getNetworkInterface
 * @method self withNetworkInterface(array $networkInterface)
 * @method array getSecurityGroupRule
 * @method self withSecurityGroupRule(array $securityGroupRule)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDefaultVpc
 * @method self withDefaultVpc(string $defaultVpc)
 * @method string getDeploymentSetId
 * @method self withDeploymentSetId(string $deploymentSetId)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut(Integer $internetMaxBandwidthOut)
 * @method Integer getInternetMaxBandwidthIn
 * @method self withInternetMaxBandwidthIn(Integer $internetMaxBandwidthIn)
 * @method string getIoOptimized
 * @method self withIoOptimized(string $ioOptimized)
 * @method string getSystemDiskCategory
 * @method self withSystemDiskCategory(string $systemDiskCategory)
 * @method string getSystemDiskDiskName
 * @method self withSystemDiskDiskName(string $systemDiskDiskName)
 * @method string getSystemDiskDescription
 * @method self withSystemDiskDescription(string $systemDiskDescription)
 * @method string getSystemDiskSize
 * @method self withSystemDiskSize(string $systemDiskSize)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method Integer getMinAmount
 * @method self withMinAmount(Integer $minAmount)
 * @method Integer getMaxAmount
 * @method self withMaxAmount(Integer $maxAmount)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getHostName
 * @method self withHostName(string $hostName)
 * @method bool getUniqueSuffix
 * @method self withUniqueSuffix(bool $uniqueSuffix)
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method bool getPasswordInherit
 * @method self withPasswordInherit(bool $passwordInherit)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getAutoReleaseTime
 * @method self withAutoReleaseTime(string $autoReleaseTime)
 * @method string getFromApp
 * @method self withFromApp(string $fromApp)
 * @method string getNodeControllerId
 * @method self withNodeControllerId(string $nodeControllerId)
 * @method string getRelationOrderId
 * @method self withRelationOrderId(string $relationOrderId)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getSpotStrategy
 * @method self withSpotStrategy(string $spotStrategy)
 * @method string getKeyPairName
 * @method self withKeyPairName(string $keyPairName)
 * @method float getSpotPriceLimit
 * @method self withSpotPriceLimit(float $spotPriceLimit)
 * @method string getSpotInterruptionBehavior
 * @method self withSpotInterruptionBehavior(string $spotInterruptionBehavior)
 * @method string getRamRoleName
 * @method self withRamRoleName(string $ramRoleName)
 * @method string getSecurityEnhancementStrategy
 * @method self withSecurityEnhancementStrategy(string $securityEnhancementStrategy)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getHpcClusterId
 * @method self withHpcClusterId(string $hpcClusterId)
 * @method string getRecycleBinResourceId
 * @method self withRecycleBinResourceId(string $recycleBinResourceId)
 * @method bool getDryRun
 * @method self withDryRun(bool $dryRun)
 * @method string getDedicatedHostId
 * @method self withDedicatedHostId(string $dedicatedHostId)
 * @method string getCreditSpecification
 * @method self withCreditSpecification(string $creditSpecification)
 * @method array getIpv6Address
 * @method self withIpv6Address(array $ipv6Address)
 * @method Integer getIpv6AddressCount
 * @method self withIpv6AddressCount(Integer $ipv6AddressCount)
 * @method bool getDeletionProtection
 * @method self withDeletionProtection(bool $deletionProtection)
 */
class RunInstances extends Rpc
{
    use R;
}
