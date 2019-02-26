<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSnapshotName
 * @method self withSnapshotName
 * @method string getOssBucket
 * @method self withOssBucket
 * @method string getOssObject
 * @method self withOssObject
 * @method string getRoleName
 * @method self withRoleName
 */
final class ImportSnapshot extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSnapshotId
 * @method self withSnapshotId
 * @method string getOssBucket
 * @method self withOssBucket
 * @method string getRoleName
 * @method self withRoleName
 */
final class ExportSnapshot extends RpcRequest
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
 * @method RepeatList getResourceId
 * @method self withResourceId
 * @method string getResourceType
 * @method self withResourceType
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount
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
 * @method RepeatList getResourceId
 * @method self withResourceId
 * @method RepeatList getTag
 * @method self withTag
 * @method string getNextToken
 * @method self withNextToken
 * @method string getResourceType
 * @method self withResourceType
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
 * @method string getEventId
 * @method self withEventId
 */
final class AcceptInquiredSystemEvent extends RpcRequest
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
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Boolean getForceStop
 * @method self withForceStop
 */
final class RedeployInstance extends RpcRequest
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
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId
 * @method RepeatList getIpv6Address
 * @method self withIpv6Address
 */
final class UnassignIpv6Addresses extends RpcRequest
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
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId
 * @method RepeatList getIpv6Address
 * @method self withIpv6Address
 * @method Integer getIpv6AddressCount
 * @method self withIpv6AddressCount
 */
final class AssignIpv6Addresses extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceIds
 * @method self withInstanceIds
 */
final class DescribeInstanceTopology extends RpcRequest
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
 * @method string getDedicatedHostIds
 * @method self withDedicatedHostIds
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getPeriodUnit
 * @method self withPeriodUnit
 * @method string getClientToken
 * @method self withClientToken
 */
final class RenewDedicatedHosts extends RpcRequest
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
 * @method string getDedicatedHostId
 * @method self withDedicatedHostId
 */
final class ReleaseDedicatedHost extends RpcRequest
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
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getDedicatedHostId
 * @method self withDedicatedHostId
 * @method string getDeploymentSetId
 * @method self withDeploymentSetId
 * @method Boolean getForce
 * @method self withForce
 */
final class ModifyInstanceDeployment extends RpcRequest
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
 * @method string getDedicatedHostIds
 * @method self withDedicatedHostIds
 * @method Integer getDuration
 * @method self withDuration
 * @method string getPeriodUnit
 * @method self withPeriodUnit
 * @method Boolean getAutoRenew
 * @method self withAutoRenew
 * @method string getRenewalStatus
 * @method self withRenewalStatus
 */
final class ModifyDedicatedHostAutoRenewAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDedicatedHostId
 * @method self withDedicatedHostId
 * @method string getAutoReleaseTime
 * @method self withAutoReleaseTime
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyDedicatedHostAutoReleaseTime extends RpcRequest
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
 * @method string getDedicatedHostId
 * @method self withDedicatedHostId
 * @method string getDedicatedHostName
 * @method self withDedicatedHostName
 * @method string getDescription
 * @method self withDescription
 * @method string getActionOnMaintenance
 * @method self withActionOnMaintenance
 * @method Integer getNetworkAttributes.SlbUdpTimeout
 * @method self withNetworkAttributes.SlbUdpTimeout
 * @method Integer getNetworkAttributes.UdpTimeout
 * @method self withNetworkAttributes.UdpTimeout
 */
final class ModifyDedicatedHostAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getZoneId
 * @method self withZoneId
 * @method string getDedicatedHostIds
 * @method self withDedicatedHostIds
 * @method string getDedicatedHostName
 * @method self withDedicatedHostName
 * @method string getStatus
 * @method self withStatus
 * @method string getDedicatedHostType
 * @method self withDedicatedHostType
 * @method string getLockReason
 * @method self withLockReason
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method RepeatList getTag
 * @method self withTag
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 */
final class DescribeDedicatedHosts extends RpcRequest
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
 * @method string getDedicatedHostType
 * @method self withDedicatedHostType
 * @method string getSupportedInstanceTypeFamily
 * @method self withSupportedInstanceTypeFamily
 */
final class DescribeDedicatedHostTypes extends RpcRequest
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
 * @method string getDedicatedHostIds
 * @method self withDedicatedHostIds
 */
final class DescribeDedicatedHostAutoRenew extends RpcRequest
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
 * @method RepeatList getTag
 * @method self withTag
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method string getZoneId
 * @method self withZoneId
 * @method string getDedicatedHostName
 * @method self withDedicatedHostName
 * @method string getDedicatedHostType
 * @method self withDedicatedHostType
 * @method string getActionOnMaintenance
 * @method self withActionOnMaintenance
 * @method Integer getNetworkAttributes.SlbUdpTimeout
 * @method self withNetworkAttributes.SlbUdpTimeout
 * @method Integer getNetworkAttributes.UdpTimeout
 * @method self withNetworkAttributes.UdpTimeout
 * @method string getDescription
 * @method self withDescription
 * @method string getChargeType
 * @method self withChargeType
 * @method Integer getQuantity
 * @method self withQuantity
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getPeriodUnit
 * @method self withPeriodUnit
 * @method Boolean getAutoRenew
 * @method self withAutoRenew
 * @method Integer getAutoRenewPeriod
 * @method self withAutoRenewPeriod
 * @method string getAutoReleaseTime
 * @method self withAutoReleaseTime
 * @method string getClientToken
 * @method self withClientToken
 */
final class AllocateDedicatedHosts extends RpcRequest
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
 * @method RepeatList getInstanceId
 * @method self withInstanceId
 * @method string getEventType
 * @method self withEventType
 * @method string getNotBefore
 * @method self withNotBefore
 */
final class CreateSimulatedSystemEvents extends RpcRequest
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
 * @method RepeatList getEventId
 * @method self withEventId
 */
final class CancelSimulatedSystemEvents extends RpcRequest
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
 * @method string getEniId
 * @method self withEniId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPeriod
 * @method self withPeriod
 */
final class DescribeEniMonitorData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getZoneId
 * @method self withZoneId
 * @method RepeatList getAttributeName
 * @method self withAttributeName
 */
final class DescribeAccountAttributes extends RpcRequest
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
 * @method string getIpProtocol
 * @method self withIpProtocol
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getDirection
 * @method self withDirection
 * @method string getSourceIp
 * @method self withSourceIp
 * @method Integer getSourcePort
 * @method self withSourcePort
 * @method string getDestIp
 * @method self withDestIp
 * @method Integer getDestPort
 * @method self withDestPort
 * @method string getNicType
 * @method self withNicType
 */
final class ValidateSecurityGroup extends RpcRequest
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
 * @method string getLaunchTemplateId
 * @method self withLaunchTemplateId
 * @method string getLaunchTemplateName
 * @method self withLaunchTemplateName
 * @method Long getDefaultVersionNumber
 * @method self withDefaultVersionNumber
 */
final class ModifyLaunchTemplateDefaultVersion extends RpcRequest
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
 * @method RepeatList getTemplateTag
 * @method self withTemplateTag
 * @method RepeatList getLaunchTemplateId
 * @method self withLaunchTemplateId
 * @method RepeatList getLaunchTemplateName
 * @method self withLaunchTemplateName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getTemplateResourceGroupId
 * @method self withTemplateResourceGroupId
 */
final class DescribeLaunchTemplates extends RpcRequest
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
 * @method string getLaunchTemplateId
 * @method self withLaunchTemplateId
 * @method string getLaunchTemplateName
 * @method self withLaunchTemplateName
 * @method RepeatList getLaunchTemplateVersion
 * @method self withLaunchTemplateVersion
 * @method Long getMinVersion
 * @method self withMinVersion
 * @method Long getMaxVersion
 * @method self withMaxVersion
 * @method Boolean getDefaultVersion
 * @method self withDefaultVersion
 * @method Boolean getDetailFlag
 * @method self withDetailFlag
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeLaunchTemplateVersions extends RpcRequest
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
 * @method string getLaunchTemplateId
 * @method self withLaunchTemplateId
 * @method string getLaunchTemplateName
 * @method self withLaunchTemplateName
 * @method RepeatList getDeleteVersion
 * @method self withDeleteVersion
 */
final class DeleteLaunchTemplateVersion extends RpcRequest
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
 * @method string getLaunchTemplateId
 * @method self withLaunchTemplateId
 * @method string getLaunchTemplateName
 * @method self withLaunchTemplateName
 */
final class DeleteLaunchTemplate extends RpcRequest
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
 * @method string getLaunchTemplateId
 * @method self withLaunchTemplateId
 * @method string getLaunchTemplateName
 * @method self withLaunchTemplateName
 * @method string getVersionDescription
 * @method self withVersionDescription
 * @method string getImageId
 * @method self withImageId
 * @method string getImageOwnerAlias
 * @method self withImageOwnerAlias
 * @method Boolean getPasswordInherit
 * @method self withPasswordInherit
 * @method string getInstanceType
 * @method self withInstanceType
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getVpcId
 * @method self withVpcId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getInstanceName
 * @method self withInstanceName
 * @method string getDescription
 * @method self withDescription
 * @method Integer getInternetMaxBandwidthIn
 * @method self withInternetMaxBandwidthIn
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut
 * @method string getHostName
 * @method self withHostName
 * @method string getZoneId
 * @method self withZoneId
 * @method string getSystemDisk.Category
 * @method self withSystemDisk.Category
 * @method Integer getSystemDisk.Size
 * @method self withSystemDisk.Size
 * @method string getSystemDisk.DiskName
 * @method self withSystemDisk.DiskName
 * @method string getSystemDisk.Description
 * @method self withSystemDisk.Description
 * @method Integer getSystemDisk.Iops
 * @method self withSystemDisk.Iops
 * @method RepeatList getDataDisk
 * @method self withDataDisk
 * @method string getIoOptimized
 * @method self withIoOptimized
 * @method RepeatList getNetworkInterface
 * @method self withNetworkInterface
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getInternetChargeType
 * @method self withInternetChargeType
 * @method Boolean getEnableVmOsConfig
 * @method self withEnableVmOsConfig
 * @method string getNetworkType
 * @method self withNetworkType
 * @method string getUserData
 * @method self withUserData
 * @method string getKeyPairName
 * @method self withKeyPairName
 * @method string getRamRoleName
 * @method self withRamRoleName
 * @method string getAutoReleaseTime
 * @method self withAutoReleaseTime
 * @method string getSpotStrategy
 * @method self withSpotStrategy
 * @method Float getSpotPriceLimit
 * @method self withSpotPriceLimit
 * @method Integer getSpotDuration
 * @method self withSpotDuration
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method string getSecurityEnhancementStrategy
 * @method self withSecurityEnhancementStrategy
 * @method RepeatList getTag
 * @method self withTag
 */
final class CreateLaunchTemplateVersion extends RpcRequest
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
 * @method RepeatList getTemplateTag
 * @method self withTemplateTag
 * @method string getLaunchTemplateName
 * @method self withLaunchTemplateName
 * @method string getVersionDescription
 * @method self withVersionDescription
 * @method string getImageId
 * @method self withImageId
 * @method string getImageOwnerAlias
 * @method self withImageOwnerAlias
 * @method Boolean getPasswordInherit
 * @method self withPasswordInherit
 * @method string getInstanceType
 * @method self withInstanceType
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getVpcId
 * @method self withVpcId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getInstanceName
 * @method self withInstanceName
 * @method string getDescription
 * @method self withDescription
 * @method Integer getInternetMaxBandwidthIn
 * @method self withInternetMaxBandwidthIn
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut
 * @method string getHostName
 * @method self withHostName
 * @method string getZoneId
 * @method self withZoneId
 * @method string getSystemDisk.Category
 * @method self withSystemDisk.Category
 * @method Integer getSystemDisk.Size
 * @method self withSystemDisk.Size
 * @method string getSystemDisk.DiskName
 * @method self withSystemDisk.DiskName
 * @method string getSystemDisk.Description
 * @method self withSystemDisk.Description
 * @method Integer getSystemDisk.Iops
 * @method self withSystemDisk.Iops
 * @method RepeatList getDataDisk
 * @method self withDataDisk
 * @method string getIoOptimized
 * @method self withIoOptimized
 * @method RepeatList getNetworkInterface
 * @method self withNetworkInterface
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getInternetChargeType
 * @method self withInternetChargeType
 * @method Boolean getEnableVmOsConfig
 * @method self withEnableVmOsConfig
 * @method string getNetworkType
 * @method self withNetworkType
 * @method string getUserData
 * @method self withUserData
 * @method string getKeyPairName
 * @method self withKeyPairName
 * @method string getRamRoleName
 * @method self withRamRoleName
 * @method string getAutoReleaseTime
 * @method self withAutoReleaseTime
 * @method string getSpotStrategy
 * @method self withSpotStrategy
 * @method Float getSpotPriceLimit
 * @method self withSpotPriceLimit
 * @method Integer getSpotDuration
 * @method self withSpotDuration
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method string getTemplateResourceGroupId
 * @method self withTemplateResourceGroupId
 * @method string getSecurityEnhancementStrategy
 * @method self withSecurityEnhancementStrategy
 * @method RepeatList getTag
 * @method self withTag
 */
final class CreateLaunchTemplate extends RpcRequest
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
 * @method RepeatList getInstanceId
 * @method self withInstanceId
 */
final class InstallCloudAssistant extends RpcRequest
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
 * @method RepeatList getInstanceId
 * @method self withInstanceId
 */
final class DescribeCloudAssistantStatus extends RpcRequest
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
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId
 * @method RepeatList getPrivateIpAddress
 * @method self withPrivateIpAddress
 */
final class UnassignPrivateIpAddresses extends RpcRequest
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
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId
 * @method RepeatList getPrivateIpAddress
 * @method self withPrivateIpAddress
 * @method Integer getSecondaryPrivateIpAddressCount
 * @method self withSecondaryPrivateIpAddressCount
 */
final class AssignPrivateIpAddresses extends RpcRequest
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
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId
 * @method RepeatList getNetworkInterfacePermissionId
 * @method self withNetworkInterfacePermissionId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeNetworkInterfacePermissions extends RpcRequest
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
 * @method string getNetworkInterfacePermissionId
 * @method self withNetworkInterfacePermissionId
 * @method Boolean getForce
 * @method self withForce
 */
final class DeleteNetworkInterfacePermission extends RpcRequest
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
 * @method Long getAccountId
 * @method self withAccountId
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId
 * @method string getPermission
 * @method self withPermission
 */
final class CreateNetworkInterfacePermission extends RpcRequest
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
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Boolean getWakeUp
 * @method self withWakeUp
 */
final class GetInstanceScreenshot extends RpcRequest
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
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class GetInstanceConsoleOutput extends RpcRequest
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
 * @method string getEventId
 * @method self withEventId
 * @method string getNewPlanTime
 * @method self withNewPlanTime
 * @method string getNewExpireTime
 * @method self withNewExpireTime
 */
final class ModifyUserEventAttribute extends RpcRequest
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
 * @method string getEventId
 * @method self withEventId
 * @method string getEventType
 * @method self withEventType
 * @method string getStatus
 * @method self withStatus
 * @method string getPlanTime
 * @method self withPlanTime
 * @method string getExpireTime
 * @method self withExpireTime
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeEvents extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getEventId
 * @method self withEventId
 */
final class DescribeEventDetail extends RpcRequest
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
 * @method string getEventType
 * @method self withEventType
 * @method string getPlanTime
 * @method self withPlanTime
 * @method string getExpireTime
 * @method self withExpireTime
 */
final class CreateUserEvent extends RpcRequest
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
 * @method string getEventId
 * @method self withEventId
 */
final class CancelUserEvent extends RpcRequest
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
 * @method string getResourceId
 * @method self withResourceId
 * @method Boolean getMigrateAcrossZone
 * @method self withMigrateAcrossZone
 * @method string getDestinationResource
 * @method self withDestinationResource
 * @method string getOperationType
 * @method self withOperationType
 * @method string getInstanceType
 * @method self withInstanceType
 * @method Integer getCores
 * @method self withCores
 * @method Float getMemory
 * @method self withMemory
 */
final class DescribeResourcesModification extends RpcRequest
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
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType
 * @method string getSpotStrategy
 * @method self withSpotStrategy
 * @method string getInstanceType
 * @method self withInstanceType
 * @method string getResourceId
 * @method self withResourceId
 * @method string getOperationType
 * @method self withOperationType
 */
final class DescribeBandwidthLimitation extends RpcRequest
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
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType
 * @method string getSpotStrategy
 * @method self withSpotStrategy
 * @method string getDestinationResource
 * @method self withDestinationResource
 * @method string getZoneId
 * @method self withZoneId
 * @method string getIoOptimized
 * @method self withIoOptimized
 * @method string getDedicatedHostId
 * @method self withDedicatedHostId
 * @method string getInstanceType
 * @method self withInstanceType
 * @method string getSystemDiskCategory
 * @method self withSystemDiskCategory
 * @method string getDataDiskCategory
 * @method self withDataDiskCategory
 * @method string getNetworkCategory
 * @method self withNetworkCategory
 * @method Integer getCores
 * @method self withCores
 * @method Float getMemory
 * @method self withMemory
 * @method string getResourceType
 * @method self withResourceType
 * @method string getScope
 * @method self withScope
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
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ReActivateInstances extends RpcRequest
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
 * @method RepeatList getInstanceId
 * @method self withInstanceId
 * @method RepeatList getEventId
 * @method self withEventId
 * @method string getStatus
 * @method self withStatus
 * @method string getHealthStatus
 * @method self withHealthStatus
 * @method RepeatList getInstanceEventType
 * @method self withInstanceEventType
 * @method string getEventType
 * @method self withEventType
 * @method string getNotBefore.Start
 * @method self withNotBefore.Start
 * @method string getNotBefore.End
 * @method self withNotBefore.End
 * @method string getEventPublishTime.Start
 * @method self withEventPublishTime.Start
 * @method string getEventPublishTime.End
 * @method self withEventPublishTime.End
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeInstancesFullStatus extends RpcRequest
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
 * @method string getInstanceId
 * @method self withInstanceId
 * @method RepeatList getEventId
 * @method self withEventId
 * @method RepeatList getInstanceEventCycleStatus
 * @method self withInstanceEventCycleStatus
 * @method string getEventCycleStatus
 * @method self withEventCycleStatus
 * @method RepeatList getInstanceEventType
 * @method self withInstanceEventType
 * @method string getEventType
 * @method self withEventType
 * @method string getNotBefore.Start
 * @method self withNotBefore.Start
 * @method string getNotBefore.End
 * @method self withNotBefore.End
 * @method string getEventPublishTime.Start
 * @method self withEventPublishTime.Start
 * @method string getEventPublishTime.End
 * @method self withEventPublishTime.End
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeInstanceHistoryEvents extends RpcRequest
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
 * @method RepeatList getDiskId
 * @method self withDiskId
 * @method RepeatList getEventId
 * @method self withEventId
 * @method string getStatus
 * @method self withStatus
 * @method string getHealthStatus
 * @method self withHealthStatus
 * @method string getEventType
 * @method self withEventType
 * @method string getEventTime.Start
 * @method self withEventTime.Start
 * @method string getEventTime.End
 * @method self withEventTime.End
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeDisksFullStatus extends RpcRequest
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
 * @method string getstatusKey
 * @method self withstatusKey
 * @method string getstatusValue
 * @method self withstatusValue
 */
final class ModifyUserBusinessBehavior extends RpcRequest
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
 * @method string getstatusKey
 * @method self withstatusKey
 */
final class DescribeUserBusinessBehavior extends RpcRequest
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
 * @method string getImageId
 * @method self withImageId
 * @method string getInstanceType
 * @method self withInstanceType
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getInstanceName
 * @method self withInstanceName
 * @method string getDescription
 * @method self withDescription
 * @method Integer getInternetMaxBandwidthIn
 * @method self withInternetMaxBandwidthIn
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut
 * @method string getHostName
 * @method self withHostName
 * @method Boolean getUniqueSuffix
 * @method self withUniqueSuffix
 * @method string getPassword
 * @method self withPassword
 * @method Boolean getPasswordInherit
 * @method self withPasswordInherit
 * @method string getZoneId
 * @method self withZoneId
 * @method string getInternetChargeType
 * @method self withInternetChargeType
 * @method string getSystemDisk.Size
 * @method self withSystemDisk.Size
 * @method string getSystemDisk.Category
 * @method self withSystemDisk.Category
 * @method string getSystemDisk.DiskName
 * @method self withSystemDisk.DiskName
 * @method string getSystemDisk.Description
 * @method self withSystemDisk.Description
 * @method RepeatList getDataDisk
 * @method self withDataDisk
 * @method string getIoOptimized
 * @method self withIoOptimized
 * @method RepeatList getNetworkInterface
 * @method self withNetworkInterface
 * @method string getUserData
 * @method self withUserData
 * @method string getKeyPairName
 * @method self withKeyPairName
 * @method string getRamRoleName
 * @method self withRamRoleName
 * @method Integer getAmount
 * @method self withAmount
 * @method Integer getMinAmount
 * @method self withMinAmount
 * @method string getAutoReleaseTime
 * @method self withAutoReleaseTime
 * @method string getSpotStrategy
 * @method self withSpotStrategy
 * @method Float getSpotPriceLimit
 * @method self withSpotPriceLimit
 * @method string getSpotInterruptionBehavior
 * @method self withSpotInterruptionBehavior
 * @method string getSecurityEnhancementStrategy
 * @method self withSecurityEnhancementStrategy
 * @method string getClientToken
 * @method self withClientToken
 * @method RepeatList getTag
 * @method self withTag
 * @method string getHpcClusterId
 * @method self withHpcClusterId
 * @method Boolean getDryRun
 * @method self withDryRun
 * @method string getDedicatedHostId
 * @method self withDedicatedHostId
 * @method string getLaunchTemplateId
 * @method self withLaunchTemplateId
 * @method string getLaunchTemplateName
 * @method self withLaunchTemplateName
 * @method Long getLaunchTemplateVersion
 * @method self withLaunchTemplateVersion
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getPeriodUnit
 * @method self withPeriodUnit
 * @method Boolean getAutoRenew
 * @method self withAutoRenew
 * @method Integer getAutoRenewPeriod
 * @method self withAutoRenewPeriod
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType
 * @method string getDeploymentSetId
 * @method self withDeploymentSetId
 * @method string getPrivateIpAddress
 * @method self withPrivateIpAddress
 * @method string getCreditSpecification
 * @method self withCreditSpecification
 * @method RepeatList getIpv6Address
 * @method self withIpv6Address
 * @method Integer getIpv6AddressCount
 * @method self withIpv6AddressCount
 * @method Boolean getDeletionProtection
 * @method self withDeletionProtection
 */
final class RunInstances extends RpcRequest
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
 * @method string getAgreementType
 * @method self withAgreementType
 */
final class SignAgreement extends RpcRequest
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
 * @method string getAgreementType
 * @method self withAgreementType
 */
final class CancelAgreement extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class ConvertNatPublicIpToEip extends RpcRequest
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
 * @method string getStatus
 * @method self withStatus
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeRecycleBin extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getresourceIds
 * @method self withresourceIds
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteRecycleBin extends RpcRequest
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getHpcClusterId
 * @method self withHpcClusterId
 * @method string getDescription
 * @method self withDescription
 * @method string getName
 * @method self withName
 */
final class ModifyHpcClusterAttribute extends RpcRequest
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getHpcClusterIds
 * @method self withHpcClusterIds
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeHpcClusters extends RpcRequest
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getHpcClusterId
 * @method self withHpcClusterId
 */
final class DeleteHpcCluster extends RpcRequest
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getDescription
 * @method self withDescription
 * @method string getName
 * @method self withName
 */
final class CreateHpcCluster extends RpcRequest
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
final class DescribeSnapshotsUsage extends RpcRequest
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
 * @method string getZoneId
 * @method self withZoneId
 * @method string getNetworkType
 * @method self withNetworkType
 * @method string getInstanceType
 * @method self withInstanceType
 * @method string getIoOptimized
 * @method self withIoOptimized
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getOSType
 * @method self withOSType
 * @method Integer getOffset
 * @method self withOffset
 */
final class DescribeSpotPriceHistory extends RpcRequest
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
 * @method string getInvokeId
 * @method self withInvokeId
 * @method RepeatList getInstanceId
 * @method self withInstanceId
 */
final class StopInvocation extends RpcRequest
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
 * @method string getCommandId
 * @method self withCommandId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getCommandContent
 * @method self withCommandContent
 * @method string getWorkingDir
 * @method self withWorkingDir
 * @method Long getTimeout
 * @method self withTimeout
 */
final class ModifyCommand extends RpcRequest
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
 * @method string getCommandId
 * @method self withCommandId
 * @method Boolean getTimed
 * @method self withTimed
 * @method string getFrequency
 * @method self withFrequency
 * @method RepeatList getInstanceId
 * @method self withInstanceId
 */
final class InvokeCommand extends RpcRequest
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
 * @method string getInvokeId
 * @method self withInvokeId
 * @method string getCommandId
 * @method self withCommandId
 * @method string getCommandName
 * @method self withCommandName
 * @method string getCommandType
 * @method self withCommandType
 * @method Boolean getTimed
 * @method self withTimed
 * @method string getInvokeStatus
 * @method self withInvokeStatus
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 */
final class DescribeInvocations extends RpcRequest
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
 * @method string getInvokeId
 * @method self withInvokeId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getCommandId
 * @method self withCommandId
 * @method string getInvokeRecordStatus
 * @method self withInvokeRecordStatus
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 */
final class DescribeInvocationResults extends RpcRequest
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
 * @method string getCommandId
 * @method self withCommandId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getType
 * @method self withType
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 */
final class DescribeCommands extends RpcRequest
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
 * @method string getCommandId
 * @method self withCommandId
 */
final class DeleteCommand extends RpcRequest
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
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getType
 * @method self withType
 * @method string getCommandContent
 * @method self withCommandContent
 * @method string getWorkingDir
 * @method self withWorkingDir
 * @method Long getTimeout
 * @method self withTimeout
 */
final class CreateCommand extends RpcRequest
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
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getIpProtocol
 * @method self withIpProtocol
 * @method string getPortRange
 * @method self withPortRange
 * @method string getDestGroupId
 * @method self withDestGroupId
 * @method Long getDestGroupOwnerId
 * @method self withDestGroupOwnerId
 * @method string getDestGroupOwnerAccount
 * @method self withDestGroupOwnerAccount
 * @method string getDestCidrIp
 * @method self withDestCidrIp
 * @method string getIpv6DestCidrIp
 * @method self withIpv6DestCidrIp
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp
 * @method string getIpv6SourceCidrIp
 * @method self withIpv6SourceCidrIp
 * @method string getSourcePortRange
 * @method self withSourcePortRange
 * @method string getPolicy
 * @method self withPolicy
 * @method string getPriority
 * @method self withPriority
 * @method string getNicType
 * @method self withNicType
 * @method string getClientToken
 * @method self withClientToken
 * @method string getDescription
 * @method self withDescription
 */
final class ModifySecurityGroupEgressRule extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getDiskIds
 * @method self withDiskIds
 * @method Boolean getAutoPay
 * @method self withAutoPay
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getDiskChargeType
 * @method self withDiskChargeType
 */
final class ModifyDiskChargeType extends RpcRequest
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
 * @method RepeatList getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getNetworkInterfaceName
 * @method self withNetworkInterfaceName
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId
 * @method string getDescription
 * @method self withDescription
 */
final class ModifyNetworkInterfaceAttribute extends RpcRequest
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
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class DetachNetworkInterface extends RpcRequest
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
 * @method RepeatList getTag
 * @method self withTag
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getVpcId
 * @method self withVpcId
 * @method string getPrimaryIpAddress
 * @method self withPrimaryIpAddress
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getNetworkInterfaceName
 * @method self withNetworkInterfaceName
 * @method string getType
 * @method self withType
 * @method string getInstanceId
 * @method self withInstanceId
 * @method RepeatList getNetworkInterfaceId
 * @method self withNetworkInterfaceId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeNetworkInterfaces extends RpcRequest
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
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId
 */
final class DeleteNetworkInterface extends RpcRequest
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
 * @method RepeatList getTag
 * @method self withTag
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getPrimaryIpAddress
 * @method self withPrimaryIpAddress
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getNetworkInterfaceName
 * @method self withNetworkInterfaceName
 * @method string getDescription
 * @method self withDescription
 * @method string getClientToken
 * @method self withClientToken
 */
final class CreateNetworkInterface extends RpcRequest
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
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class AttachNetworkInterface extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string gettoken
 * @method self withtoken
 * @method string getproxyId
 * @method self withproxyId
 * @method string getchannel
 * @method self withchannel
 * @method string getoperator
 * @method self withoperator
 * @method string getInstanceType
 * @method self withInstanceType
 * @method string getScene
 * @method self withScene
 * @method string getNetworkType
 * @method self withNetworkType
 */
final class DescribeRecommendInstanceType extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getInstanceType
 * @method self withInstanceType
 * @method string getOperatorType
 * @method self withOperatorType
 * @method string getClientToken
 * @method self withClientToken
 * @method Boolean getAutoPay
 * @method self withAutoPay
 * @method Boolean getMigrateAcrossZone
 * @method self withMigrateAcrossZone
 * @method string getSystemDisk.Category
 * @method self withSystemDisk.Category
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyPrepayInstanceSpec extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceIds
 * @method self withInstanceIds
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getPeriodUnit
 * @method self withPeriodUnit
 * @method Boolean getIncludeDataDisks
 * @method self withIncludeDataDisks
 * @method Boolean getDryRun
 * @method self withDryRun
 * @method Boolean getAutoPay
 * @method self withAutoPay
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyInstanceChargeType extends RpcRequest
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
 * @method string getResourceType
 * @method self withResourceType
 * @method string getResourceId
 * @method self withResourceId
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 */
final class JoinResourceGroup extends RpcRequest
{
}

/**
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getInnerAccessPolicy
 * @method self withInnerAccessPolicy
 * @method string getClientToken
 * @method self withClientToken
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class ModifySecurityGroupPolicy extends RpcRequest
{
}

/**
 * @method RepeatList getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Long getOwnerId
 * @method self withOwnerId
 */
final class DescribeSecurityGroupReferences extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getVpcId
 * @method self withVpcId
 */
final class DetachClassicLinkVpc extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVpcId
 * @method self withVpcId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getPageNumber
 * @method self withPageNumber
 * @method string getPageSize
 * @method self withPageSize
 */
final class DescribeClassicLinkInstances extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getVpcId
 * @method self withVpcId
 */
final class AttachClassicLinkVpc extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getRamRoleName
 * @method self withRamRoleName
 * @method string getInstanceIds
 * @method self withInstanceIds
 */
final class DetachInstanceRamRole extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getInstanceIds
 * @method self withInstanceIds
 * @method string getRamRoleName
 * @method self withRamRoleName
 */
final class DescribeInstanceRamRole extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getRamRoleName
 * @method self withRamRoleName
 * @method string getInstanceIds
 * @method self withInstanceIds
 */
final class AttachInstanceRamRole extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeSnapshotPackage extends RpcRequest
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
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getIpProtocol
 * @method self withIpProtocol
 * @method string getPortRange
 * @method self withPortRange
 * @method string getSourceGroupId
 * @method self withSourceGroupId
 * @method Long getSourceGroupOwnerId
 * @method self withSourceGroupOwnerId
 * @method string getSourceGroupOwnerAccount
 * @method self withSourceGroupOwnerAccount
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp
 * @method string getIpv6SourceCidrIp
 * @method self withIpv6SourceCidrIp
 * @method string getSourcePortRange
 * @method self withSourcePortRange
 * @method string getDestCidrIp
 * @method self withDestCidrIp
 * @method string getIpv6DestCidrIp
 * @method self withIpv6DestCidrIp
 * @method string getPolicy
 * @method self withPolicy
 * @method string getPriority
 * @method self withPriority
 * @method string getNicType
 * @method self withNicType
 * @method string getClientToken
 * @method self withClientToken
 * @method string getDescription
 * @method self withDescription
 */
final class ModifySecurityGroupRule extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeSnapshotMonitorData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getResourceType
 * @method self withResourceType
 * @method string getResourceId
 * @method self withResourceId
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getPriceUnit
 * @method self withPriceUnit
 */
final class DescribeRenewalPrice extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getResourceType
 * @method self withResourceType
 * @method string getImageId
 * @method self withImageId
 * @method string getInstanceType
 * @method self withInstanceType
 * @method string getIoOptimized
 * @method self withIoOptimized
 * @method string getInstanceNetworkType
 * @method self withInstanceNetworkType
 * @method string getInternetChargeType
 * @method self withInternetChargeType
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut
 * @method string getSystemDisk.Category
 * @method self withSystemDisk.Category
 * @method Integer getSystemDisk.Size
 * @method self withSystemDisk.Size
 * @method Integer getDataDisk.1.Size
 * @method self withDataDisk.1.Size
 * @method string getDataDisk.1.Category
 * @method self withDataDisk.1.Category
 * @method Integer getDataDisk.2.Size
 * @method self withDataDisk.2.Size
 * @method string getDataDisk.2.Category
 * @method self withDataDisk.2.Category
 * @method Integer getDataDisk.3.Size
 * @method self withDataDisk.3.Size
 * @method string getDataDisk.3.Category
 * @method self withDataDisk.3.Category
 * @method Integer getDataDisk.4.Size
 * @method self withDataDisk.4.Size
 * @method string getDataDisk.4.Category
 * @method self withDataDisk.4.Category
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getPriceUnit
 * @method self withPriceUnit
 * @method Integer getAmount
 * @method self withAmount
 */
final class DescribePrice extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getZoneId
 * @method self withZoneId
 * @method string getIpAddress
 * @method self withIpAddress
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class AddIpRange extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDeploymentSetId
 * @method self withDeploymentSetId
 * @method string getNetworkType
 * @method self withNetworkType
 * @method string getStrategy
 * @method self withStrategy
 * @method string getDeploymentSetName
 * @method self withDeploymentSetName
 * @method string getGranularity
 * @method self withGranularity
 * @method string getDomain
 * @method self withDomain
 */
final class DescribeDeploymentSetTopology extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDeploymentSetId
 * @method self withDeploymentSetId
 * @method string getDescription
 * @method self withDescription
 * @method string getDeploymentSetName
 * @method self withDeploymentSetName
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyDeploymentSetAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getDeploymentSetIds
 * @method self withDeploymentSetIds
 * @method string getNetworkType
 * @method self withNetworkType
 * @method string getStrategy
 * @method self withStrategy
 * @method string getDeploymentSetName
 * @method self withDeploymentSetName
 * @method string getGranularity
 * @method self withGranularity
 * @method string getDomain
 * @method self withDomain
 */
final class DescribeDeploymentSets extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDeploymentSetId
 * @method self withDeploymentSetId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteDeploymentSet extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOnUnableToRedeployFailedInstance
 * @method self withOnUnableToRedeployFailedInstance
 * @method string getDescription
 * @method self withDescription
 * @method string getClientToken
 * @method self withClientToken
 * @method string getDeploymentSetName
 * @method self withDeploymentSetName
 * @method string getDomain
 * @method self withDomain
 * @method string getGranularity
 * @method self withGranularity
 * @method string getStrategy
 * @method self withStrategy
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class CreateDeploymentSet extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getKeyPairName
 * @method self withKeyPairName
 * @method string getPublicKeyBody
 * @method self withPublicKeyBody
 */
final class ImportKeyPair extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getKeyPairName
 * @method self withKeyPairName
 * @method string getInstanceIds
 * @method self withInstanceIds
 */
final class DetachKeyPair extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getKeyPairName
 * @method self withKeyPairName
 * @method string getKeyPairFingerPrint
 * @method self withKeyPairFingerPrint
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method RepeatList getTag
 * @method self withTag
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 */
final class DescribeKeyPairs extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getKeyPairNames
 * @method self withKeyPairNames
 */
final class DeleteKeyPairs extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getKeyPairName
 * @method self withKeyPairName
 * @method RepeatList getTag
 * @method self withTag
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 */
final class CreateKeyPair extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getKeyPairName
 * @method self withKeyPairName
 * @method string getInstanceIds
 * @method self withInstanceIds
 */
final class AttachKeyPair extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVolumeId
 * @method self withVolumeId
 * @method string getSnapshotId
 * @method self withSnapshotId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class RollbackVolume extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVolumeId
 * @method self withVolumeId
 * @method Integer getNewSize
 * @method self withNewSize
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ResizeVolume extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVolumeId
 * @method self withVolumeId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getPassword
 * @method self withPassword
 */
final class ReInitVolume extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVolumeId
 * @method self withVolumeId
 * @method string getVolumeName
 * @method self withVolumeName
 * @method string getDescription
 * @method self withDescription
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyVolumeAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getVolumeId
 * @method self withVolumeId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DetachVolume extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getZoneId
 * @method self withZoneId
 * @method string getVolumeIds
 * @method self withVolumeIds
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getCategory
 * @method self withCategory
 * @method string getStatus
 * @method self withStatus
 * @method string getSnapshotId
 * @method self withSnapshotId
 * @method string getAutoSnapshotPolicyId
 * @method self withAutoSnapshotPolicyId
 * @method Boolean getEnableAutomatedSnapshotPolicy
 * @method self withEnableAutomatedSnapshotPolicy
 * @method string getLockReason
 * @method self withLockReason
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method RepeatList getTag
 * @method self withTag
 * @method string getKMSKeyId
 * @method self withKMSKeyId
 * @method Boolean getEncrypted
 * @method self withEncrypted
 */
final class DescribeVolumes extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVolumeId
 * @method self withVolumeId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteVolume extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getZoneId
 * @method self withZoneId
 * @method string getSnapshotId
 * @method self withSnapshotId
 * @method string getVolumeName
 * @method self withVolumeName
 * @method Integer getSize
 * @method self withSize
 * @method string getVolumeCategory
 * @method self withVolumeCategory
 * @method string getDescription
 * @method self withDescription
 * @method Boolean getVolumeEncrypted
 * @method self withVolumeEncrypted
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method RepeatList getTag
 * @method self withTag
 * @method string getKMSKeyId
 * @method self withKMSKeyId
 */
final class CreateVolume extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getVolumeId
 * @method self withVolumeId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class AttachVolume extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVolumeId
 * @method self withVolumeId
 * @method string getSnapshotId
 * @method self withSnapshotId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class RollbackVolume_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVolumeId
 * @method self withVolumeId
 * @method Integer getNewSize
 * @method self withNewSize
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ResizeVolume_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVolumeId
 * @method self withVolumeId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getPassword
 * @method self withPassword
 */
final class ReInitVolume_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVolumeId
 * @method self withVolumeId
 * @method string getVolumeName
 * @method self withVolumeName
 * @method string getDescription
 * @method self withDescription
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyVolumeAttribute_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getVolumeId
 * @method self withVolumeId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DetachVolume_GatedLaunch extends RpcRequest
{
}

final class DescribeVolumes_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVolumeId
 * @method self withVolumeId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteVolume_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getZoneId
 * @method self withZoneId
 * @method string getSnapshotId
 * @method self withSnapshotId
 * @method string getVolumeName
 * @method self withVolumeName
 * @method Integer getSize
 * @method self withSize
 * @method string getVolumeCategory
 * @method self withVolumeCategory
 * @method string getDescription
 * @method self withDescription
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method RepeatList getTag
 * @method self withTag
 */
final class CreateVolume_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getVolumeId
 * @method self withVolumeId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class AttachVolume_GatedLaunch extends RpcRequest
{
}

final class DescribeSnapshotLinks_GatedLaunch extends RpcRequest
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
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getDuration
 * @method self withDuration
 * @method Boolean getAutoRenew
 * @method self withAutoRenew
 * @method string getRenewalStatus
 * @method self withRenewalStatus
 * @method string getPeriodUnit
 * @method self withPeriodUnit
 */
final class ModifyInstanceAutoRenewAttribute extends RpcRequest
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
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getRenewalStatus
 * @method self withRenewalStatus
 * @method string getPageSize
 * @method self withPageSize
 * @method string getPageNumber
 * @method self withPageNumber
 */
final class DescribeInstanceAutoRenewAttribute extends RpcRequest
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
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getDuration
 * @method self withDuration
 * @method Boolean getAutoRenew
 * @method self withAutoRenew
 */
final class ModifyInstanceAutoRenewAttribute_GatedLaunch extends RpcRequest
{
}

final class DescribeInstanceAutoRenewAttribute_GatedLaunch extends RpcRequest
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
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getDiskIds
 * @method self withDiskIds
 * @method string getSnapshotLinkIds
 * @method self withSnapshotLinkIds
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeSnapshotLinks extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getAutoReleaseTime
 * @method self withAutoReleaseTime
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyInstanceAutoReleaseTime extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getIpAddress
 * @method self withIpAddress
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class UnbindIpRange_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Boolean getConfirmStop
 * @method self withConfirmStop
 * @method Boolean getForceStop
 * @method self withForceStop
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class StopInstance_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class StartInstance_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getIpProtocol
 * @method self withIpProtocol
 * @method string getPortRange
 * @method self withPortRange
 * @method string getDestGroupId
 * @method self withDestGroupId
 * @method Long getDestGroupOwnerId
 * @method self withDestGroupOwnerId
 * @method string getDestGroupOwnerAccount
 * @method self withDestGroupOwnerAccount
 * @method string getDestCidrIp
 * @method self withDestCidrIp
 * @method string getPolicy
 * @method self withPolicy
 * @method string getNicType
 * @method self withNicType
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class RevokeSecurityGroupEgress_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getIpProtocol
 * @method self withIpProtocol
 * @method string getPortRange
 * @method self withPortRange
 * @method string getSourceGroupId
 * @method self withSourceGroupId
 * @method Long getSourceGroupOwnerId
 * @method self withSourceGroupOwnerId
 * @method string getSourceGroupOwnerAccount
 * @method self withSourceGroupOwnerAccount
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp
 * @method string getPolicy
 * @method self withPolicy
 * @method string getNicType
 * @method self withNicType
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class RevokeSecurityGroup_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDiskId
 * @method self withDiskId
 * @method Integer getNewSize
 * @method self withNewSize
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ResizeDisk_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDiskId
 * @method self withDiskId
 * @method string getSnapshotId
 * @method self withSnapshotId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ResetDisk_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getImageId
 * @method self withImageId
 * @method Integer getSystemDisk.Size
 * @method self withSystemDisk.Size
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Boolean getUseAdditionalService
 * @method self withUseAdditionalService
 * @method string getPassword
 * @method self withPassword
 */
final class ReplaceSystemDisk_GatedLaunch extends RpcRequest
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
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getPeriod
 * @method self withPeriod
 */
final class RenewInstance_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getResourceType
 * @method self withResourceType
 * @method string getResourceId
 * @method self withResourceId
 * @method RepeatList getTag
 * @method self withTag
 */
final class RemoveTags_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getPublicIpAddress
 * @method self withPublicIpAddress
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ReleasePublicIpAddress_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDiskId
 * @method self withDiskId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getPassword
 * @method self withPassword
 */
final class ReInitDisk_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Boolean getForceStop
 * @method self withForceStop
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class RebootInstance_GatedLaunch extends RpcRequest
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
 * @method string getSnapshotId
 * @method self withSnapshotId
 * @method string getSnapshotName
 * @method self withSnapshotName
 * @method string getDescription
 * @method self withDescription
 */
final class ModifySnapshotAttribute_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getDescription
 * @method self withDescription
 * @method string getSecurityGroupName
 * @method self withSecurityGroupName
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifySecurityGroupAttribute_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getIntranetMaxBandwidthIn
 * @method self withIntranetMaxBandwidthIn
 * @method Integer getIntranetMaxBandwidthOut
 * @method self withIntranetMaxBandwidthOut
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyIntranetBandwidthKb_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getPrivateIpAddress
 * @method self withPrivateIpAddress
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyInstanceVpcAttribute_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getVncPassword
 * @method self withVncPassword
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyInstanceVncPasswd_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getInstanceType
 * @method self withInstanceType
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut
 * @method Integer getInternetMaxBandwidthIn
 * @method self withInternetMaxBandwidthIn
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getTemporary.StartTime
 * @method self withTemporary.StartTime
 * @method string getTemporary.EndTime
 * @method self withTemporary.EndTime
 * @method Integer getTemporary.InternetMaxBandwidthOut
 * @method self withTemporary.InternetMaxBandwidthOut
 * @method Boolean getAsync
 * @method self withAsync
 */
final class ModifyInstanceSpec_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut
 * @method Integer getInternetMaxBandwidthIn
 * @method self withInternetMaxBandwidthIn
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyInstanceNetworkSpec_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getPassword
 * @method self withPassword
 * @method string getHostName
 * @method self withHostName
 * @method string getInstanceName
 * @method self withInstanceName
 * @method string getDescription
 * @method self withDescription
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserData
 * @method self withUserData
 */
final class ModifyInstanceAttribute_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getImageId
 * @method self withImageId
 * @method string getAddAccount.1
 * @method self withAddAccount.1
 * @method string getAddAccount.2
 * @method self withAddAccount.2
 * @method string getAddAccount.3
 * @method self withAddAccount.3
 * @method string getAddAccount.4
 * @method self withAddAccount.4
 * @method string getAddAccount.5
 * @method self withAddAccount.5
 * @method string getAddAccount.6
 * @method self withAddAccount.6
 * @method string getAddAccount.7
 * @method self withAddAccount.7
 * @method string getAddAccount.8
 * @method self withAddAccount.8
 * @method string getAddAccount.9
 * @method self withAddAccount.9
 * @method string getAddAccount.10
 * @method self withAddAccount.10
 * @method string getRemoveAccount.1
 * @method self withRemoveAccount.1
 * @method string getRemoveAccount.2
 * @method self withRemoveAccount.2
 * @method string getRemoveAccount.3
 * @method self withRemoveAccount.3
 * @method string getRemoveAccount.4
 * @method self withRemoveAccount.4
 * @method string getRemoveAccount.5
 * @method self withRemoveAccount.5
 * @method string getRemoveAccount.6
 * @method self withRemoveAccount.6
 * @method string getRemoveAccount.7
 * @method self withRemoveAccount.7
 * @method string getRemoveAccount.8
 * @method self withRemoveAccount.8
 * @method string getRemoveAccount.9
 * @method self withRemoveAccount.9
 * @method string getRemoveAccount.10
 * @method self withRemoveAccount.10
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyImageSharePermission_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getImageId
 * @method self withImageId
 * @method string getAddGroup.1
 * @method self withAddGroup.1
 * @method string getRemoveGroup.1
 * @method self withRemoveGroup.1
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyImageShareGroupPermission_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getImageId
 * @method self withImageId
 * @method string getImageName
 * @method self withImageName
 * @method string getDescription
 * @method self withDescription
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyImageAttribute_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDiskId
 * @method self withDiskId
 * @method string getDiskName
 * @method self withDiskName
 * @method string getDescription
 * @method self withDescription
 * @method Boolean getDeleteWithInstance
 * @method self withDeleteWithInstance
 * @method Boolean getDeleteAutoSnapshot
 * @method self withDeleteAutoSnapshot
 * @method Boolean getEnableAutoSnapshot
 * @method self withEnableAutoSnapshot
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyDiskAttribute_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getregionId
 * @method self withregionId
 * @method string getautoSnapshotPolicyId
 * @method self withautoSnapshotPolicyId
 * @method string getautoSnapshotPolicyName
 * @method self withautoSnapshotPolicyName
 * @method string gettimePoints
 * @method self withtimePoints
 * @method string getrepeatWeekdays
 * @method self withrepeatWeekdays
 * @method Integer getretentionDays
 * @method self withretentionDays
 */
final class ModifyAutoSnapshotPolicyEx_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Boolean getSystemDiskPolicyEnabled
 * @method self withSystemDiskPolicyEnabled
 * @method Integer getSystemDiskPolicyTimePeriod
 * @method self withSystemDiskPolicyTimePeriod
 * @method Integer getSystemDiskPolicyRetentionDays
 * @method self withSystemDiskPolicyRetentionDays
 * @method Boolean getSystemDiskPolicyRetentionLastWeek
 * @method self withSystemDiskPolicyRetentionLastWeek
 * @method Boolean getDataDiskPolicyEnabled
 * @method self withDataDiskPolicyEnabled
 * @method Integer getDataDiskPolicyTimePeriod
 * @method self withDataDiskPolicyTimePeriod
 * @method Integer getDataDiskPolicyRetentionDays
 * @method self withDataDiskPolicyRetentionDays
 * @method Boolean getDataDiskPolicyRetentionLastWeek
 * @method self withDataDiskPolicyRetentionLastWeek
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyAutoSnapshotPolicy_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class LeaveSecurityGroup_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class JoinSecurityGroup_GatedLaunch extends RpcRequest
{
}

/**
 * @method RepeatList getDiskDeviceMapping
 * @method self withDiskDeviceMapping
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getImageName
 * @method self withImageName
 * @method string getDescription
 * @method self withDescription
 * @method string getArchitecture
 * @method self withArchitecture
 * @method string getOSType
 * @method self withOSType
 * @method string getPlatform
 * @method self withPlatform
 * @method string getRoleName
 * @method self withRoleName
 */
final class ImportImage_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getImageId
 * @method self withImageId
 * @method string getOSSBucket
 * @method self withOSSBucket
 * @method string getOSSPrefix
 * @method self withOSSPrefix
 * @method string getImageFormat
 * @method self withImageFormat
 * @method string getRoleName
 * @method self withRoleName
 */
final class ExportImage_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getDiskId
 * @method self withDiskId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DetachDisk_GatedLaunch extends RpcRequest
{
}

final class DescribeZones_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class DescribeUserData_GatedLaunch extends RpcRequest
{
}

final class DescribeTasks_GatedLaunch extends RpcRequest
{
}

final class DescribeTaskAttribute_GatedLaunch extends RpcRequest
{
}

final class DescribeTags_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method string getResourceType
 * @method self withResourceType
 * @method string getResourceId
 * @method self withResourceId
 */
final class DescribeTagKeys_GatedLaunch extends RpcRequest
{
}

final class DescribeSnapshots_GatedLaunch extends RpcRequest
{
}

final class DescribeSecurityGroups_GatedLaunch extends RpcRequest
{
}

final class DescribeSecurityGroupAttribute_GatedLaunch extends RpcRequest
{
}

final class DescribeResourceByTags_GatedLaunch extends RpcRequest
{
}

final class DescribeRegions_GatedLaunch extends RpcRequest
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
 * @method string getLimitation
 * @method self withLimitation
 */
final class DescribeLimitation_GatedLaunch extends RpcRequest
{
}

final class DescribeIpRanges_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeIntranetAttributeKb_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeInstanceVncUrl_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeInstanceVncPasswd_GatedLaunch extends RpcRequest
{
}

final class DescribeInstanceTypes_GatedLaunch extends RpcRequest
{
}

final class DescribeInstanceTypeFamilies_GatedLaunch extends RpcRequest
{
}

final class DescribeInstanceStatus_GatedLaunch extends RpcRequest
{
}

final class DescribeInstances_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeInstancePhysicalAttribute_GatedLaunch extends RpcRequest
{
}

final class DescribeInstanceMonitorData_GatedLaunch extends RpcRequest
{
}

final class DescribeInstanceAttribute_GatedLaunch extends RpcRequest
{
}

final class DescribeImageSupportInstanceTypes_GatedLaunch extends RpcRequest
{
}

final class DescribeImageSharePermission_GatedLaunch extends RpcRequest
{
}

final class DescribeImages_GatedLaunch extends RpcRequest
{
}

final class DescribeDisks_GatedLaunch extends RpcRequest
{
}

final class DescribeDiskMonitorData_GatedLaunch extends RpcRequest
{
}

final class DescribeClusters_GatedLaunch extends RpcRequest
{
}

final class DescribeAutoSnapshotPolicyEx_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSnapshotId
 * @method self withSnapshotId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteSnapshot_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteSecurityGroup_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Boolean getForce
 * @method self withForce
 */
final class DeleteInstance_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getImageId
 * @method self withImageId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteImage_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDiskId
 * @method self withDiskId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteDisk_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getregionId
 * @method self withregionId
 * @method string getautoSnapshotPolicyId
 * @method self withautoSnapshotPolicyId
 */
final class DeleteAutoSnapshotPolicy_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDiskId
 * @method self withDiskId
 * @method string getSnapshotName
 * @method self withSnapshotName
 * @method string getDescription
 * @method self withDescription
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method RepeatList getTag
 * @method self withTag
 */
final class CreateSnapshot_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDescription
 * @method self withDescription
 * @method string getClientToken
 * @method self withClientToken
 * @method string getSecurityGroupName
 * @method self withSecurityGroupName
 * @method string getVpcId
 * @method self withVpcId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method RepeatList getTag
 * @method self withTag
 */
final class CreateSecurityGroup_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getImageId
 * @method self withImageId
 * @method string getInstanceType
 * @method self withInstanceType
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getDeploymentSetId
 * @method self withDeploymentSetId
 * @method string getInstanceName
 * @method self withInstanceName
 * @method string getInternetChargeType
 * @method self withInternetChargeType
 * @method Integer getInternetMaxBandwidthIn
 * @method self withInternetMaxBandwidthIn
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut
 * @method string getHostName
 * @method self withHostName
 * @method string getPassword
 * @method self withPassword
 * @method string getZoneId
 * @method self withZoneId
 * @method string getClusterId
 * @method self withClusterId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getVlanId
 * @method self withVlanId
 * @method string getInnerIpAddress
 * @method self withInnerIpAddress
 * @method Integer getSystemDisk.Size
 * @method self withSystemDisk.Size
 * @method string getSystemDisk.Category
 * @method self withSystemDisk.Category
 * @method string getSystemDisk.DiskName
 * @method self withSystemDisk.DiskName
 * @method string getSystemDisk.Description
 * @method self withSystemDisk.Description
 * @method Integer getDataDisk.1.Size
 * @method self withDataDisk.1.Size
 * @method string getDataDisk.1.Category
 * @method self withDataDisk.1.Category
 * @method string getDataDisk.1.SnapshotId
 * @method self withDataDisk.1.SnapshotId
 * @method string getDataDisk.1.DiskName
 * @method self withDataDisk.1.DiskName
 * @method string getDataDisk.1.Description
 * @method self withDataDisk.1.Description
 * @method string getDataDisk.1.Device
 * @method self withDataDisk.1.Device
 * @method Boolean getDataDisk.1.DeleteWithInstance
 * @method self withDataDisk.1.DeleteWithInstance
 * @method Integer getDataDisk.2.Size
 * @method self withDataDisk.2.Size
 * @method string getDataDisk.2.Category
 * @method self withDataDisk.2.Category
 * @method string getDataDisk.2.SnapshotId
 * @method self withDataDisk.2.SnapshotId
 * @method string getDataDisk.2.DiskName
 * @method self withDataDisk.2.DiskName
 * @method string getDataDisk.2.Description
 * @method self withDataDisk.2.Description
 * @method string getDataDisk.2.Device
 * @method self withDataDisk.2.Device
 * @method Boolean getDataDisk.2.DeleteWithInstance
 * @method self withDataDisk.2.DeleteWithInstance
 * @method Integer getDataDisk.3.Size
 * @method self withDataDisk.3.Size
 * @method string getDataDisk.3.Category
 * @method self withDataDisk.3.Category
 * @method string getDataDisk.3.SnapshotId
 * @method self withDataDisk.3.SnapshotId
 * @method string getDataDisk.3.DiskName
 * @method self withDataDisk.3.DiskName
 * @method string getDataDisk.3.Description
 * @method self withDataDisk.3.Description
 * @method string getDataDisk.3.Device
 * @method self withDataDisk.3.Device
 * @method Boolean getDataDisk.3.DeleteWithInstance
 * @method self withDataDisk.3.DeleteWithInstance
 * @method Integer getDataDisk.4.Size
 * @method self withDataDisk.4.Size
 * @method string getDataDisk.4.Category
 * @method self withDataDisk.4.Category
 * @method string getDataDisk.4.SnapshotId
 * @method self withDataDisk.4.SnapshotId
 * @method string getDataDisk.4.DiskName
 * @method self withDataDisk.4.DiskName
 * @method string getDataDisk.4.Description
 * @method self withDataDisk.4.Description
 * @method string getDataDisk.4.Device
 * @method self withDataDisk.4.Device
 * @method Boolean getDataDisk.4.DeleteWithInstance
 * @method self withDataDisk.4.DeleteWithInstance
 * @method string getNodeControllerId
 * @method self withNodeControllerId
 * @method string getDescription
 * @method self withDescription
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getPrivateIpAddress
 * @method self withPrivateIpAddress
 * @method string getIoOptimized
 * @method self withIoOptimized
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Boolean getUseAdditionalService
 * @method self withUseAdditionalService
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType
 * @method Integer getPeriod
 * @method self withPeriod
 * @method RepeatList getTag
 * @method self withTag
 * @method string getUserData
 * @method self withUserData
 * @method string getSpotStrategy
 * @method self withSpotStrategy
 */
final class CreateInstance_GatedLaunch extends RpcRequest
{
}

/**
 * @method RepeatList getDiskDeviceMapping
 * @method self withDiskDeviceMapping
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSnapshotId
 * @method self withSnapshotId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getImageName
 * @method self withImageName
 * @method string getImageVersion
 * @method self withImageVersion
 * @method string getDescription
 * @method self withDescription
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method RepeatList getTag
 * @method self withTag
 */
final class CreateImage_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getZoneId
 * @method self withZoneId
 * @method string getSnapshotId
 * @method self withSnapshotId
 * @method string getDiskName
 * @method self withDiskName
 * @method Integer getSize
 * @method self withSize
 * @method string getDiskCategory
 * @method self withDiskCategory
 * @method string getDescription
 * @method self withDescription
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method RepeatList getTag
 * @method self withTag
 */
final class CreateDisk_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getregionId
 * @method self withregionId
 * @method string getautoSnapshotPolicyName
 * @method self withautoSnapshotPolicyName
 * @method string gettimePoints
 * @method self withtimePoints
 * @method string getrepeatWeekdays
 * @method self withrepeatWeekdays
 * @method Integer getretentionDays
 * @method self withretentionDays
 */
final class CreateAutoSnapshotPolicy_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDestinationImageName
 * @method self withDestinationImageName
 * @method string getDestinationDescription
 * @method self withDestinationDescription
 * @method string getImageId
 * @method self withImageId
 * @method string getDestinationRegionId
 * @method self withDestinationRegionId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getTag.1.Key
 * @method self withTag.1.Key
 * @method string getTag.2.Key
 * @method self withTag.2.Key
 * @method string getTag.3.Key
 * @method self withTag.3.Key
 * @method string getTag.4.Key
 * @method self withTag.4.Key
 * @method string getTag.5.Key
 * @method self withTag.5.Key
 * @method string getTag.1.Value
 * @method self withTag.1.Value
 * @method string getTag.2.Value
 * @method self withTag.2.Value
 * @method string getTag.3.Value
 * @method self withTag.3.Value
 * @method string getTag.4.Value
 * @method self withTag.4.Value
 * @method string getTag.5.Value
 * @method self withTag.5.Value
 */
final class CopyImage_GatedLaunch extends RpcRequest
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
 * @method string getDiskIds
 * @method self withDiskIds
 */
final class CheckDiskEnableAutoSnapshotValidation_GatedLaunch extends RpcRequest
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
 * @method Boolean getSystemDiskPolicyEnabled
 * @method self withSystemDiskPolicyEnabled
 * @method Integer getSystemDiskPolicyTimePeriod
 * @method self withSystemDiskPolicyTimePeriod
 * @method Integer getSystemDiskPolicyRetentionDays
 * @method self withSystemDiskPolicyRetentionDays
 * @method Boolean getSystemDiskPolicyRetentionLastWeek
 * @method self withSystemDiskPolicyRetentionLastWeek
 * @method Boolean getDataDiskPolicyEnabled
 * @method self withDataDiskPolicyEnabled
 * @method Integer getDataDiskPolicyTimePeriod
 * @method self withDataDiskPolicyTimePeriod
 * @method Integer getDataDiskPolicyRetentionDays
 * @method self withDataDiskPolicyRetentionDays
 * @method Boolean getDataDiskPolicyRetentionLastWeek
 * @method self withDataDiskPolicyRetentionLastWeek
 */
final class CheckAutoSnapshotPolicy_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getTaskId
 * @method self withTaskId
 */
final class CancelTask_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getImageId
 * @method self withImageId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class CancelCopyImage_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getregionId
 * @method self withregionId
 * @method string getdiskIds
 * @method self withdiskIds
 */
final class CancelAutoSnapshotPolicy_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getIpAddress
 * @method self withIpAddress
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class BindIpRange_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getIpProtocol
 * @method self withIpProtocol
 * @method string getPortRange
 * @method self withPortRange
 * @method string getDestGroupId
 * @method self withDestGroupId
 * @method Long getDestGroupOwnerId
 * @method self withDestGroupOwnerId
 * @method string getDestGroupOwnerAccount
 * @method self withDestGroupOwnerAccount
 * @method string getDestCidrIp
 * @method self withDestCidrIp
 * @method string getPolicy
 * @method self withPolicy
 * @method string getPriority
 * @method self withPriority
 * @method string getNicType
 * @method self withNicType
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class AuthorizeSecurityGroupEgress_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getIpProtocol
 * @method self withIpProtocol
 * @method string getPortRange
 * @method self withPortRange
 * @method string getSourceGroupId
 * @method self withSourceGroupId
 * @method Long getSourceGroupOwnerId
 * @method self withSourceGroupOwnerId
 * @method string getSourceGroupOwnerAccount
 * @method self withSourceGroupOwnerAccount
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp
 * @method string getPolicy
 * @method self withPolicy
 * @method string getPriority
 * @method self withPriority
 * @method string getNicType
 * @method self withNicType
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class AuthorizeSecurityGroup_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getDiskId
 * @method self withDiskId
 * @method string getDevice
 * @method self withDevice
 * @method Boolean getDeleteWithInstance
 * @method self withDeleteWithInstance
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class AttachDisk_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getregionId
 * @method self withregionId
 * @method string getautoSnapshotPolicyId
 * @method self withautoSnapshotPolicyId
 * @method string getdiskIds
 * @method self withdiskIds
 */
final class ApplyAutoSnapshotPolicy_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getIpAddress
 * @method self withIpAddress
 * @method string getVlanId
 * @method self withVlanId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class AllocatePublicIpAddress_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getResourceType
 * @method self withResourceType
 * @method string getResourceId
 * @method self withResourceId
 * @method RepeatList getTag
 * @method self withTag
 */
final class AddTags_GatedLaunch extends RpcRequest
{
}

final class DescribeAutoSnapshotPolicy_GatedLaunch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getAllocationId
 * @method self withAllocationId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeNewProjectEipMonitorData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class DescribeUserData extends RpcRequest
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId
 * @method string getClientToken
 * @method self withClientToken
 * @method RepeatList getRemovedIpAddresses
 * @method self withRemovedIpAddresses
 */
final class RemoveBandwidthPackageIps extends RpcRequest
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
 * @method string getForwardTableId
 * @method self withForwardTableId
 * @method string getForwardEntryId
 * @method self withForwardEntryId
 * @method string getExternalIp
 * @method self withExternalIp
 * @method string getExternalPort
 * @method self withExternalPort
 * @method string getInternalIp
 * @method self withInternalIp
 * @method string getInternalPort
 * @method self withInternalPort
 * @method string getIpProtocol
 * @method self withIpProtocol
 */
final class ModifyForwardEntry extends RpcRequest
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId
 * @method string getBandwidth
 * @method self withBandwidth
 */
final class ModifyBandwidthPackageSpec extends RpcRequest
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
 * @method string getNatGatewayId
 * @method self withNatGatewayId
 * @method string getVpcId
 * @method self withVpcId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeNatGateways extends RpcRequest
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
 * @method string getForwardTableId
 * @method self withForwardTableId
 * @method string getForwardEntryId
 * @method self withForwardEntryId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeForwardTableEntries extends RpcRequest
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId
 * @method string getNatGatewayId
 * @method self withNatGatewayId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeBandwidthPackages extends RpcRequest
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
 * @method string getNatGatewayId
 * @method self withNatGatewayId
 */
final class DeleteNatGateway extends RpcRequest
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
 * @method string getForwardTableId
 * @method self withForwardTableId
 * @method string getForwardEntryId
 * @method self withForwardEntryId
 */
final class DeleteForwardEntry extends RpcRequest
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId
 */
final class DeleteBandwidthPackage extends RpcRequest
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
 * @method string getVpcId
 * @method self withVpcId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getClientToken
 * @method self withClientToken
 * @method RepeatList getBandwidthPackage
 * @method self withBandwidthPackage
 */
final class CreateNatGateway extends RpcRequest
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
 * @method string getForwardTableId
 * @method self withForwardTableId
 * @method string getExternalIp
 * @method self withExternalIp
 * @method string getExternalPort
 * @method self withExternalPort
 * @method string getInternalIp
 * @method self withInternalIp
 * @method string getInternalPort
 * @method self withInternalPort
 * @method string getIpProtocol
 * @method self withIpProtocol
 */
final class CreateForwardEntry extends RpcRequest
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId
 * @method string getIpCount
 * @method self withIpCount
 * @method string getClientToken
 * @method self withClientToken
 */
final class AddBandwidthPackageIps extends RpcRequest
{
}

/**
 * @method string getdata
 * @method self withdata
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserCidr
 * @method self withUserCidr
 */
final class EipFillProduct extends RpcRequest
{
}

/**
 * @method string getdata
 * @method self withdata
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserCidr
 * @method self withUserCidr
 */
final class EipNotifyPaid extends RpcRequest
{
}

/**
 * @method string getdata
 * @method self withdata
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserCidr
 * @method self withUserCidr
 */
final class EipFillParams extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getregionId
 * @method self withregionId
 * @method string getautoSnapshotPolicyId
 * @method self withautoSnapshotPolicyId
 * @method string getautoSnapshotPolicyName
 * @method self withautoSnapshotPolicyName
 * @method string gettimePoints
 * @method self withtimePoints
 * @method string getrepeatWeekdays
 * @method self withrepeatWeekdays
 * @method Integer getretentionDays
 * @method self withretentionDays
 */
final class ModifyAutoSnapshotPolicyEx extends RpcRequest
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
 * @method string getAutoSnapshotPolicyId
 * @method self withAutoSnapshotPolicyId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeAutoSnapshotPolicyEx extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getregionId
 * @method self withregionId
 * @method string getautoSnapshotPolicyId
 * @method self withautoSnapshotPolicyId
 */
final class DeleteAutoSnapshotPolicy extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getregionId
 * @method self withregionId
 * @method string getautoSnapshotPolicyName
 * @method self withautoSnapshotPolicyName
 * @method string gettimePoints
 * @method self withtimePoints
 * @method string getrepeatWeekdays
 * @method self withrepeatWeekdays
 * @method Integer getretentionDays
 * @method self withretentionDays
 */
final class CreateAutoSnapshotPolicy extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getregionId
 * @method self withregionId
 * @method string getdiskIds
 * @method self withdiskIds
 */
final class CancelAutoSnapshotPolicy extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getregionId
 * @method self withregionId
 * @method string getautoSnapshotPolicyId
 * @method self withautoSnapshotPolicyId
 * @method string getdiskIds
 * @method self withdiskIds
 */
final class ApplyAutoSnapshotPolicy extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getImageId
 * @method self withImageId
 * @method string getActionType
 * @method self withActionType
 * @method RepeatList getFilter
 * @method self withFilter
 */
final class DescribeImageSupportInstanceTypes extends RpcRequest
{
}

/**
 * @method string getVbrId
 * @method self withVbrId
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserCidr
 * @method self withUserCidr
 */
final class TerminateVirtualBorderRouter extends RpcRequest
{
}

/**
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserCidr
 * @method self withUserCidr
 */
final class TerminatePhysicalConnection extends RpcRequest
{
}

/**
 * @method string getVbrId
 * @method self withVbrId
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserCidr
 * @method self withUserCidr
 */
final class RecoverVirtualBorderRouter extends RpcRequest
{
}

/**
 * @method string getVbrId
 * @method self withVbrId
 * @method Integer getVlanId
 * @method self withVlanId
 * @method string getCircuitCode
 * @method self withCircuitCode
 * @method string getLocalGatewayIp
 * @method self withLocalGatewayIp
 * @method string getPeerGatewayIp
 * @method self withPeerGatewayIp
 * @method string getPeeringSubnetMask
 * @method self withPeeringSubnetMask
 * @method string getDescription
 * @method self withDescription
 * @method string getName
 * @method self withName
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserCidr
 * @method self withUserCidr
 */
final class ModifyVirtualBorderRouterAttribute extends RpcRequest
{
}

/**
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId
 * @method string getLineOperator
 * @method self withLineOperator
 * @method Integer getbandwidth
 * @method self withbandwidth
 * @method string getPeerLocation
 * @method self withPeerLocation
 * @method string getPortType
 * @method self withPortType
 * @method string getRedundantPhysicalConnectionId
 * @method self withRedundantPhysicalConnectionId
 * @method string getDescription
 * @method self withDescription
 * @method string getName
 * @method self withName
 * @method string getClientToken
 * @method self withClientToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserCidr
 * @method self withUserCidr
 * @method string getCircuitCode
 * @method self withCircuitCode
 */
final class ModifyPhysicalConnectionAttribute extends RpcRequest
{
}

/**
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserCidr
 * @method self withUserCidr
 */
final class EnablePhysicalConnection extends RpcRequest
{
}

/**
 * @method RepeatList getFilter
 * @method self withFilter
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeVirtualBorderRoutersForPhysicalConnection extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method RepeatList getFilter
 * @method self withFilter
 */
final class DescribeVirtualBorderRouters extends RpcRequest
{
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method RepeatList getFilter
 * @method self withFilter
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserCidr
 * @method self withUserCidr
 */
final class DescribePhysicalConnections extends RpcRequest
{
}

/**
 * @method RepeatList getFilter
 * @method self withFilter
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getType
 * @method self withType
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeAccessPoints extends RpcRequest
{
}

/**
 * @method string getVbrId
 * @method self withVbrId
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserCidr
 * @method self withUserCidr
 */
final class DeleteVirtualBorderRouter extends RpcRequest
{
}

/**
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeletePhysicalConnection extends RpcRequest
{
}

/**
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId
 * @method Long getVbrOwnerId
 * @method self withVbrOwnerId
 * @method Integer getVlanId
 * @method self withVlanId
 * @method string getCircuitCode
 * @method self withCircuitCode
 * @method string getLocalGatewayIp
 * @method self withLocalGatewayIp
 * @method string getPeerGatewayIp
 * @method self withPeerGatewayIp
 * @method string getPeeringSubnetMask
 * @method self withPeeringSubnetMask
 * @method string getDescription
 * @method self withDescription
 * @method string getName
 * @method self withName
 * @method string getClientToken
 * @method self withClientToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserCidr
 * @method self withUserCidr
 */
final class CreateVirtualBorderRouter extends RpcRequest
{
}

/**
 * @method string getAccessPointId
 * @method self withAccessPointId
 * @method string getType
 * @method self withType
 * @method string getLineOperator
 * @method self withLineOperator
 * @method Integer getbandwidth
 * @method self withbandwidth
 * @method string getPeerLocation
 * @method self withPeerLocation
 * @method string getPortType
 * @method self withPortType
 * @method string getRedundantPhysicalConnectionId
 * @method self withRedundantPhysicalConnectionId
 * @method string getDescription
 * @method self withDescription
 * @method string getName
 * @method self withName
 * @method string getCircuitCode
 * @method self withCircuitCode
 * @method string getClientToken
 * @method self withClientToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserCidr
 * @method self withUserCidr
 */
final class CreatePhysicalConnection extends RpcRequest
{
}

/**
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserCidr
 * @method self withUserCidr
 */
final class CancelPhysicalConnection extends RpcRequest
{
}

/**
 * @method RepeatList getDiskDeviceMapping
 * @method self withDiskDeviceMapping
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getImageName
 * @method self withImageName
 * @method string getDescription
 * @method self withDescription
 * @method string getArchitecture
 * @method self withArchitecture
 * @method string getOSType
 * @method self withOSType
 * @method string getPlatform
 * @method self withPlatform
 * @method string getRoleName
 * @method self withRoleName
 */
final class ImportImage extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getImageId
 * @method self withImageId
 * @method string getOSSBucket
 * @method self withOSSBucket
 * @method string getOSSPrefix
 * @method self withOSSPrefix
 * @method string getImageFormat
 * @method self withImageFormat
 * @method string getRoleName
 * @method self withRoleName
 */
final class ExportImage extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getTaskIds
 * @method self withTaskIds
 * @method string getTaskAction
 * @method self withTaskAction
 * @method string getTaskStatus
 * @method self withTaskStatus
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 */
final class DescribeTasks extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getTaskId
 * @method self withTaskId
 */
final class DescribeTaskAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getTaskId
 * @method self withTaskId
 */
final class CancelTask extends RpcRequest
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
 * @method string getGeneration
 * @method self withGeneration
 */
final class DescribeInstanceTypeFamilies extends RpcRequest
{
}

/**
 * @method string getRouterInterfaceId
 * @method self withRouterInterfaceId
 * @method string getSpec
 * @method self withSpec
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserCidr
 * @method self withUserCidr
 */
final class ModifyRouterInterfaceSpec extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getRouterInterfaceId
 * @method self withRouterInterfaceId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getOppositeInterfaceId
 * @method self withOppositeInterfaceId
 * @method string getOppositeRouterId
 * @method self withOppositeRouterId
 * @method string getOppositeRouterType
 * @method self withOppositeRouterType
 * @method Long getOppositeInterfaceOwnerId
 * @method self withOppositeInterfaceOwnerId
 * @method string getHealthCheckSourceIp
 * @method self withHealthCheckSourceIp
 * @method string getHealthCheckTargetIp
 * @method self withHealthCheckTargetIp
 */
final class ModifyRouterInterfaceAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method RepeatList getFilter
 * @method self withFilter
 */
final class DescribeRouterInterfaces extends RpcRequest
{
}

/**
 * @method string getRouterInterfaceId
 * @method self withRouterInterfaceId
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserCidr
 * @method self withUserCidr
 */
final class DeleteRouterInterface extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getRouterInterfaceId
 * @method self withRouterInterfaceId
 */
final class DeactivateRouterInterface extends RpcRequest
{
}

/**
 * @method string getRole
 * @method self withRole
 * @method string getOppositeRegionId
 * @method self withOppositeRegionId
 * @method string getSpec
 * @method self withSpec
 * @method string getRouterType
 * @method self withRouterType
 * @method string getRouterId
 * @method self withRouterId
 * @method string getOppositeInterfaceId
 * @method self withOppositeInterfaceId
 * @method string getOppositeRouterId
 * @method self withOppositeRouterId
 * @method string getOppositeRouterType
 * @method self withOppositeRouterType
 * @method string getOppositeInterfaceOwnerId
 * @method self withOppositeInterfaceOwnerId
 * @method string getHealthCheckSourceIp
 * @method self withHealthCheckSourceIp
 * @method string getHealthCheckTargetIp
 * @method self withHealthCheckTargetIp
 * @method string getAccessPointId
 * @method self withAccessPointId
 * @method string getOppositeAccessPointId
 * @method self withOppositeAccessPointId
 * @method string getDescription
 * @method self withDescription
 * @method string getName
 * @method self withName
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType
 * @method Boolean getAutoPay
 * @method self withAutoPay
 * @method string getPricingCycle
 * @method self withPricingCycle
 * @method string getClientToken
 * @method self withClientToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserCidr
 * @method self withUserCidr
 */
final class CreateRouterInterface extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getRouterInterfaceId
 * @method self withRouterInterfaceId
 */
final class ConnectRouterInterface extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getRouterInterfaceId
 * @method self withRouterInterfaceId
 */
final class ActivateRouterInterface extends RpcRequest
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
 * @method string getHaVipId
 * @method self withHaVipId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getForce
 * @method self withForce
 */
final class UnassociateHaVip extends RpcRequest
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
 * @method string getHaVipId
 * @method self withHaVipId
 * @method string getDescription
 * @method self withDescription
 */
final class ModifyHaVipAttribute extends RpcRequest
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
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method RepeatList getFilter
 * @method self withFilter
 */
final class DescribeHaVips extends RpcRequest
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
 * @method string getHaVipId
 * @method self withHaVipId
 */
final class DeleteHaVip extends RpcRequest
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
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getIpAddress
 * @method self withIpAddress
 * @method string getDescription
 * @method self withDescription
 */
final class CreateHaVip extends RpcRequest
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
 * @method string getHaVipId
 * @method self withHaVipId
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class AssociateHaVip extends RpcRequest
{
}

/**
 * @method string getClientToken
 * @method self withClientToken
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getPeriodUnit
 * @method self withPeriodUnit
 */
final class RenewInstance extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method string getResourceType
 * @method self withResourceType
 * @method string getResourceId
 * @method self withResourceId
 */
final class DescribeTagKeys extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getResourceType
 * @method self withResourceType
 * @method string getResourceId
 * @method self withResourceId
 * @method RepeatList getTag
 * @method self withTag
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
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method string getResourceType
 * @method self withResourceType
 * @method string getResourceId
 * @method self withResourceId
 * @method RepeatList getTag
 * @method self withTag
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
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method string getResourceType
 * @method self withResourceType
 * @method RepeatList getTag
 * @method self withTag
 */
final class DescribeResourceByTags extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getResourceType
 * @method self withResourceType
 * @method string getResourceId
 * @method self withResourceId
 * @method RepeatList getTag
 * @method self withTag
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
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getIpAddress
 * @method self withIpAddress
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class UnbindIpRange extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getAllocationId
 * @method self withAllocationId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getInstanceType
 * @method self withInstanceType
 */
final class UnassociateEipAddress extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Boolean getConfirmStop
 * @method self withConfirmStop
 * @method Boolean getForceStop
 * @method self withForceStop
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getStoppedMode
 * @method self withStoppedMode
 * @method Boolean getDryRun
 * @method self withDryRun
 */
final class StopInstance extends RpcRequest
{
}

/**
 * @method string getSourceRegionId
 * @method self withSourceRegionId
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Boolean getInitLocalDisk
 * @method self withInitLocalDisk
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Boolean getDryRun
 * @method self withDryRun
 */
final class StartInstance extends RpcRequest
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
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getIpProtocol
 * @method self withIpProtocol
 * @method string getPortRange
 * @method self withPortRange
 * @method string getDestGroupId
 * @method self withDestGroupId
 * @method Long getDestGroupOwnerId
 * @method self withDestGroupOwnerId
 * @method string getDestGroupOwnerAccount
 * @method self withDestGroupOwnerAccount
 * @method string getDestCidrIp
 * @method self withDestCidrIp
 * @method string getIpv6DestCidrIp
 * @method self withIpv6DestCidrIp
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp
 * @method string getIpv6SourceCidrIp
 * @method self withIpv6SourceCidrIp
 * @method string getSourcePortRange
 * @method self withSourcePortRange
 * @method string getPolicy
 * @method self withPolicy
 * @method string getPriority
 * @method self withPriority
 * @method string getNicType
 * @method self withNicType
 * @method string getClientToken
 * @method self withClientToken
 * @method string getDescription
 * @method self withDescription
 */
final class RevokeSecurityGroupEgress extends RpcRequest
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
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getDestCidrIp
 * @method self withDestCidrIp
 * @method string getIpv6DestCidrIp
 * @method self withIpv6DestCidrIp
 * @method string getPortRange
 * @method self withPortRange
 * @method string getIpProtocol
 * @method self withIpProtocol
 * @method string getSourceGroupId
 * @method self withSourceGroupId
 * @method Long getSourceGroupOwnerId
 * @method self withSourceGroupOwnerId
 * @method string getSourceGroupOwnerAccount
 * @method self withSourceGroupOwnerAccount
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp
 * @method string getIpv6SourceCidrIp
 * @method self withIpv6SourceCidrIp
 * @method string getSourcePortRange
 * @method self withSourcePortRange
 * @method string getPolicy
 * @method self withPolicy
 * @method string getPriority
 * @method self withPriority
 * @method string getNicType
 * @method self withNicType
 * @method string getClientToken
 * @method self withClientToken
 * @method string getDescription
 * @method self withDescription
 */
final class RevokeSecurityGroup extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDiskId
 * @method self withDiskId
 * @method string getType
 * @method self withType
 * @method Integer getNewSize
 * @method self withNewSize
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ResizeDisk extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDiskId
 * @method self withDiskId
 * @method string getSnapshotId
 * @method self withSnapshotId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ResetDisk extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getImageId
 * @method self withImageId
 * @method Integer getSystemDisk.Size
 * @method self withSystemDisk.Size
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Boolean getUseAdditionalService
 * @method self withUseAdditionalService
 * @method string getPassword
 * @method self withPassword
 * @method Boolean getPasswordInherit
 * @method self withPasswordInherit
 * @method string getKeyPairName
 * @method self withKeyPairName
 * @method string getDiskId
 * @method self withDiskId
 * @method string getPlatform
 * @method self withPlatform
 * @method string getArchitecture
 * @method self withArchitecture
 * @method string getSecurityEnhancementStrategy
 * @method self withSecurityEnhancementStrategy
 */
final class ReplaceSystemDisk extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getPublicIpAddress
 * @method self withPublicIpAddress
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ReleasePublicIpAddress extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getAllocationId
 * @method self withAllocationId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ReleaseEipAddress extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDiskId
 * @method self withDiskId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getPassword
 * @method self withPassword
 * @method string getKeyPairName
 * @method self withKeyPairName
 * @method Boolean getAutoStartInstance
 * @method self withAutoStartInstance
 * @method string getSecurityEnhancementStrategy
 * @method self withSecurityEnhancementStrategy
 */
final class ReInitDisk extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Boolean getForceStop
 * @method self withForceStop
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Boolean getDryRun
 * @method self withDryRun
 */
final class RebootInstance extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getVSwitchName
 * @method self withVSwitchName
 * @method string getDescription
 * @method self withDescription
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyVSwitchAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVRouterId
 * @method self withVRouterId
 * @method string getVRouterName
 * @method self withVRouterName
 * @method string getDescription
 * @method self withDescription
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyVRouterAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVpcId
 * @method self withVpcId
 * @method string getDescription
 * @method self withDescription
 * @method string getVpcName
 * @method self withVpcName
 * @method string getCidrBlock
 * @method self withCidrBlock
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserCidr
 * @method self withUserCidr
 */
final class ModifyVpcAttribute extends RpcRequest
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
 * @method string getSnapshotId
 * @method self withSnapshotId
 * @method string getSnapshotName
 * @method self withSnapshotName
 * @method string getDescription
 * @method self withDescription
 */
final class ModifySnapshotAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getDescription
 * @method self withDescription
 * @method string getSecurityGroupName
 * @method self withSecurityGroupName
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifySecurityGroupAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getIntranetMaxBandwidthIn
 * @method self withIntranetMaxBandwidthIn
 * @method Integer getIntranetMaxBandwidthOut
 * @method self withIntranetMaxBandwidthOut
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyIntranetBandwidthKb extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getPrivateIpAddress
 * @method self withPrivateIpAddress
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyInstanceVpcAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getVncPassword
 * @method self withVncPassword
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyInstanceVncPasswd extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getInstanceType
 * @method self withInstanceType
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut
 * @method Integer getInternetMaxBandwidthIn
 * @method self withInternetMaxBandwidthIn
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getTemporary.StartTime
 * @method self withTemporary.StartTime
 * @method string getTemporary.EndTime
 * @method self withTemporary.EndTime
 * @method Integer getTemporary.InternetMaxBandwidthOut
 * @method self withTemporary.InternetMaxBandwidthOut
 * @method Boolean getAsync
 * @method self withAsync
 * @method Boolean getAllowMigrateAcrossZone
 * @method self withAllowMigrateAcrossZone
 * @method string getSystemDisk.Category
 * @method self withSystemDisk.Category
 * @method string getClientToken
 * @method self withClientToken
 */
final class ModifyInstanceSpec extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut
 * @method Integer getInternetMaxBandwidthIn
 * @method self withInternetMaxBandwidthIn
 * @method string getNetworkChargeType
 * @method self withNetworkChargeType
 * @method Boolean getAllocatePublicIp
 * @method self withAllocatePublicIp
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Boolean getAutoPay
 * @method self withAutoPay
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyInstanceNetworkSpec extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getPassword
 * @method self withPassword
 * @method string getHostName
 * @method self withHostName
 * @method string getInstanceName
 * @method self withInstanceName
 * @method string getDescription
 * @method self withDescription
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserData
 * @method self withUserData
 * @method Boolean getRecyclable
 * @method self withRecyclable
 * @method string getCreditSpecification
 * @method self withCreditSpecification
 * @method Boolean getDeletionProtection
 * @method self withDeletionProtection
 */
final class ModifyInstanceAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getImageId
 * @method self withImageId
 * @method RepeatList getAddAccount
 * @method self withAddAccount
 * @method RepeatList getRemoveAccount
 * @method self withRemoveAccount
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyImageSharePermission extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getImageId
 * @method self withImageId
 * @method string getAddGroup.1
 * @method self withAddGroup.1
 * @method string getRemoveGroup.1
 * @method self withRemoveGroup.1
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyImageShareGroupPermission extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getImageId
 * @method self withImageId
 * @method string getImageName
 * @method self withImageName
 * @method string getDescription
 * @method self withDescription
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyImageAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getAllocationId
 * @method self withAllocationId
 * @method string getBandwidth
 * @method self withBandwidth
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyEipAddressAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDiskId
 * @method self withDiskId
 * @method string getDiskName
 * @method self withDiskName
 * @method string getDescription
 * @method self withDescription
 * @method Boolean getDeleteWithInstance
 * @method self withDeleteWithInstance
 * @method Boolean getDeleteAutoSnapshot
 * @method self withDeleteAutoSnapshot
 * @method Boolean getEnableAutoSnapshot
 * @method self withEnableAutoSnapshot
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyDiskAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Boolean getSystemDiskPolicyEnabled
 * @method self withSystemDiskPolicyEnabled
 * @method Integer getSystemDiskPolicyTimePeriod
 * @method self withSystemDiskPolicyTimePeriod
 * @method Integer getSystemDiskPolicyRetentionDays
 * @method self withSystemDiskPolicyRetentionDays
 * @method Boolean getSystemDiskPolicyRetentionLastWeek
 * @method self withSystemDiskPolicyRetentionLastWeek
 * @method Boolean getDataDiskPolicyEnabled
 * @method self withDataDiskPolicyEnabled
 * @method Integer getDataDiskPolicyTimePeriod
 * @method self withDataDiskPolicyTimePeriod
 * @method Integer getDataDiskPolicyRetentionDays
 * @method self withDataDiskPolicyRetentionDays
 * @method Boolean getDataDiskPolicyRetentionLastWeek
 * @method self withDataDiskPolicyRetentionLastWeek
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class ModifyAutoSnapshotPolicy extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class LeaveSecurityGroup extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class JoinSecurityGroup extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getDiskId
 * @method self withDiskId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DetachDisk extends RpcRequest
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
 * @method Boolean getVerbose
 * @method self withVerbose
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType
 * @method string getSpotStrategy
 * @method self withSpotStrategy
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
 * @method string getVpcId
 * @method self withVpcId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getZoneId
 * @method self withZoneId
 * @method Boolean getIsDefault
 * @method self withIsDefault
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeVSwitches extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVRouterId
 * @method self withVRouterId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeVRouters extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVpcId
 * @method self withVpcId
 * @method Boolean getIsDefault
 * @method self withIsDefault
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeVpcs extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getDiskId
 * @method self withDiskId
 * @method string getSnapshotLinkId
 * @method self withSnapshotLinkId
 * @method string getSnapshotIds
 * @method self withSnapshotIds
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getSnapshotName
 * @method self withSnapshotName
 * @method string getStatus
 * @method self withStatus
 * @method string getSnapshotType
 * @method self withSnapshotType
 * @method string getFilter.1.Key
 * @method self withFilter.1.Key
 * @method string getFilter.2.Key
 * @method self withFilter.2.Key
 * @method string getFilter.1.Value
 * @method self withFilter.1.Value
 * @method string getFilter.2.Value
 * @method self withFilter.2.Value
 * @method string getUsage
 * @method self withUsage
 * @method string getSourceDiskType
 * @method self withSourceDiskType
 * @method RepeatList getTag
 * @method self withTag
 * @method Boolean getEncrypted
 * @method self withEncrypted
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method Boolean getDryRun
 * @method self withDryRun
 * @method string getKMSKeyId
 * @method self withKMSKeyId
 */
final class DescribeSnapshots extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVpcId
 * @method self withVpcId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getSecurityGroupIds
 * @method self withSecurityGroupIds
 * @method RepeatList getTag
 * @method self withTag
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method string getNetworkType
 * @method self withNetworkType
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getSecurityGroupName
 * @method self withSecurityGroupName
 * @method Boolean getIsQueryEcsCount
 * @method self withIsQueryEcsCount
 * @method Boolean getFuzzyQuery
 * @method self withFuzzyQuery
 * @method Boolean getDryRun
 * @method self withDryRun
 */
final class DescribeSecurityGroups extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getNicType
 * @method self withNicType
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getDirection
 * @method self withDirection
 */
final class DescribeSecurityGroupAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVRouterId
 * @method self withVRouterId
 * @method string getRouteTableId
 * @method self withRouteTableId
 * @method string getRouterType
 * @method self withRouterType
 * @method string getRouterId
 * @method self withRouterId
 * @method string getRouteTableName
 * @method self withRouteTableName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeRouteTables extends RpcRequest
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
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType
 * @method string getResourceType
 * @method self withResourceType
 * @method string getAcceptLanguage
 * @method self withAcceptLanguage
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getLimitation
 * @method self withLimitation
 */
final class DescribeLimitation extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getClusterId
 * @method self withClusterId
 * @method string getNicType
 * @method self withNicType
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeIpRanges extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeIntranetAttributeKb extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeInstanceVncUrl extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeInstanceVncPasswd extends RpcRequest
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
 * @method string getInstanceTypeFamily
 * @method self withInstanceTypeFamily
 */
final class DescribeInstanceTypes extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getZoneId
 * @method self withZoneId
 * @method string getClusterId
 * @method self withClusterId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeInstanceStatus extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVpcId
 * @method self withVpcId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getZoneId
 * @method self withZoneId
 * @method string getInstanceNetworkType
 * @method self withInstanceNetworkType
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getInstanceIds
 * @method self withInstanceIds
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getInnerIpAddresses
 * @method self withInnerIpAddresses
 * @method string getPrivateIpAddresses
 * @method self withPrivateIpAddresses
 * @method string getPublicIpAddresses
 * @method self withPublicIpAddresses
 * @method string getEipAddresses
 * @method self withEipAddresses
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType
 * @method string getInternetChargeType
 * @method self withInternetChargeType
 * @method string getInstanceName
 * @method self withInstanceName
 * @method string getImageId
 * @method self withImageId
 * @method string getStatus
 * @method self withStatus
 * @method string getLockReason
 * @method self withLockReason
 * @method string getFilter.1.Key
 * @method self withFilter.1.Key
 * @method string getFilter.2.Key
 * @method self withFilter.2.Key
 * @method string getFilter.3.Key
 * @method self withFilter.3.Key
 * @method string getFilter.4.Key
 * @method self withFilter.4.Key
 * @method string getFilter.1.Value
 * @method self withFilter.1.Value
 * @method string getFilter.2.Value
 * @method self withFilter.2.Value
 * @method string getFilter.3.Value
 * @method self withFilter.3.Value
 * @method string getFilter.4.Value
 * @method self withFilter.4.Value
 * @method Boolean getDeviceAvailable
 * @method self withDeviceAvailable
 * @method Boolean getIoOptimized
 * @method self withIoOptimized
 * @method Boolean getNeedSaleCycle
 * @method self withNeedSaleCycle
 * @method RepeatList getTag
 * @method self withTag
 * @method string getInstanceType
 * @method self withInstanceType
 * @method string getInstanceTypeFamily
 * @method self withInstanceTypeFamily
 * @method string getKeyPairName
 * @method self withKeyPairName
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method string getHpcClusterId
 * @method self withHpcClusterId
 * @method string getRdmaIpAddresses
 * @method self withRdmaIpAddresses
 * @method Boolean getDryRun
 * @method self withDryRun
 */
final class DescribeInstances extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeInstancePhysicalAttribute extends RpcRequest
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
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPeriod
 * @method self withPeriod
 */
final class DescribeInstanceMonitorData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeInstanceAttribute extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getImageId
 * @method self withImageId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeImageSharePermission extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getStatus
 * @method self withStatus
 * @method string getImageId
 * @method self withImageId
 * @method Boolean getShowExpired
 * @method self withShowExpired
 * @method string getSnapshotId
 * @method self withSnapshotId
 * @method string getImageName
 * @method self withImageName
 * @method string getImageOwnerAlias
 * @method self withImageOwnerAlias
 * @method string getInstanceType
 * @method self withInstanceType
 * @method Boolean getIsSupportIoOptimized
 * @method self withIsSupportIoOptimized
 * @method Boolean getIsSupportCloudinit
 * @method self withIsSupportCloudinit
 * @method string getOSType
 * @method self withOSType
 * @method string getArchitecture
 * @method self withArchitecture
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUsage
 * @method self withUsage
 * @method RepeatList getTag
 * @method self withTag
 * @method Boolean getDryRun
 * @method self withDryRun
 * @method string getActionType
 * @method self withActionType
 * @method RepeatList getFilter
 * @method self withFilter
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 */
final class DescribeImages extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getAllocationId
 * @method self withAllocationId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DescribeEipMonitorData extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getStatus
 * @method self withStatus
 * @method string getEipAddress
 * @method self withEipAddress
 * @method string getAllocationId
 * @method self withAllocationId
 * @method string getISP
 * @method self withISP
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getFilter.1.Key
 * @method self withFilter.1.Key
 * @method string getFilter.2.Key
 * @method self withFilter.2.Key
 * @method string getFilter.1.Value
 * @method self withFilter.1.Value
 * @method string getFilter.2.Value
 * @method self withFilter.2.Value
 * @method string getLockReason
 * @method self withLockReason
 * @method string getAssociatedInstanceType
 * @method self withAssociatedInstanceType
 * @method string getAssociatedInstanceId
 * @method self withAssociatedInstanceId
 * @method string getChargeType
 * @method self withChargeType
 */
final class DescribeEipAddresses extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getZoneId
 * @method self withZoneId
 * @method string getDiskIds
 * @method self withDiskIds
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getDiskType
 * @method self withDiskType
 * @method string getCategory
 * @method self withCategory
 * @method string getStatus
 * @method self withStatus
 * @method string getSnapshotId
 * @method self withSnapshotId
 * @method Boolean getPortable
 * @method self withPortable
 * @method Boolean getDeleteWithInstance
 * @method self withDeleteWithInstance
 * @method Boolean getDeleteAutoSnapshot
 * @method self withDeleteAutoSnapshot
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getDiskName
 * @method self withDiskName
 * @method string getAutoSnapshotPolicyId
 * @method self withAutoSnapshotPolicyId
 * @method Boolean getEnableAutoSnapshot
 * @method self withEnableAutoSnapshot
 * @method Boolean getEnableAutomatedSnapshotPolicy
 * @method self withEnableAutomatedSnapshotPolicy
 * @method string getDiskChargeType
 * @method self withDiskChargeType
 * @method string getLockReason
 * @method self withLockReason
 * @method string getFilter.1.Key
 * @method self withFilter.1.Key
 * @method string getFilter.2.Key
 * @method self withFilter.2.Key
 * @method string getFilter.1.Value
 * @method self withFilter.1.Value
 * @method string getFilter.2.Value
 * @method self withFilter.2.Value
 * @method RepeatList getTag
 * @method self withTag
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method Boolean getEnableShared
 * @method self withEnableShared
 * @method Boolean getEncrypted
 * @method self withEncrypted
 * @method RepeatList getAdditionalAttributes
 * @method self withAdditionalAttributes
 * @method Boolean getDryRun
 * @method self withDryRun
 * @method string getKMSKeyId
 * @method self withKMSKeyId
 */
final class DescribeDisks extends RpcRequest
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
 * @method string getDiskId
 * @method self withDiskId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPeriod
 * @method self withPeriod
 */
final class DescribeDiskMonitorData extends RpcRequest
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
final class DescribeClusters extends RpcRequest
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
final class DescribeAutoSnapshotPolicy extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteVSwitch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVpcId
 * @method self withVpcId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteVpc extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSnapshotId
 * @method self withSnapshotId
 * @method Boolean getForce
 * @method self withForce
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteSnapshot extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteSecurityGroup extends RpcRequest
{
}

/**
 * @method RepeatList getNextHopList
 * @method self withNextHopList
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getRouteTableId
 * @method self withRouteTableId
 * @method string getDestinationCidrBlock
 * @method self withDestinationCidrBlock
 * @method string getNextHopId
 * @method self withNextHopId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteRouteEntry extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Boolean getForce
 * @method self withForce
 * @method Boolean getTerminateSubscription
 * @method self withTerminateSubscription
 */
final class DeleteInstance extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getImageId
 * @method self withImageId
 * @method Boolean getForce
 * @method self withForce
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteImage extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDiskId
 * @method self withDiskId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class DeleteDisk extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getZoneId
 * @method self withZoneId
 * @method string getCidrBlock
 * @method self withCidrBlock
 * @method string getVpcId
 * @method self withVpcId
 * @method string getVSwitchName
 * @method self withVSwitchName
 * @method string getDescription
 * @method self withDescription
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class CreateVSwitch extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getCidrBlock
 * @method self withCidrBlock
 * @method string getVpcName
 * @method self withVpcName
 * @method string getDescription
 * @method self withDescription
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getUserCidr
 * @method self withUserCidr
 */
final class CreateVpc extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDiskId
 * @method self withDiskId
 * @method string getSnapshotName
 * @method self withSnapshotName
 * @method string getDescription
 * @method self withDescription
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method RepeatList getTag
 * @method self withTag
 */
final class CreateSnapshot extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDescription
 * @method self withDescription
 * @method string getClientToken
 * @method self withClientToken
 * @method string getSecurityGroupName
 * @method self withSecurityGroupName
 * @method string getVpcId
 * @method self withVpcId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method RepeatList getTag
 * @method self withTag
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 */
final class CreateSecurityGroup extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getRouteTableId
 * @method self withRouteTableId
 * @method string getDestinationCidrBlock
 * @method self withDestinationCidrBlock
 * @method string getNextHopId
 * @method self withNextHopId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getNextHopType
 * @method self withNextHopType
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method RepeatList getNextHopList
 * @method self withNextHopList
 */
final class CreateRouteEntry extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getImageId
 * @method self withImageId
 * @method string getInstanceType
 * @method self withInstanceType
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getInstanceName
 * @method self withInstanceName
 * @method string getInternetChargeType
 * @method self withInternetChargeType
 * @method Boolean getAutoRenew
 * @method self withAutoRenew
 * @method Integer getAutoRenewPeriod
 * @method self withAutoRenewPeriod
 * @method Integer getInternetMaxBandwidthIn
 * @method self withInternetMaxBandwidthIn
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut
 * @method string getHostName
 * @method self withHostName
 * @method string getPassword
 * @method self withPassword
 * @method Boolean getPasswordInherit
 * @method self withPasswordInherit
 * @method string getDeploymentSetId
 * @method self withDeploymentSetId
 * @method string getZoneId
 * @method self withZoneId
 * @method string getClusterId
 * @method self withClusterId
 * @method string getClientToken
 * @method self withClientToken
 * @method string getVlanId
 * @method self withVlanId
 * @method string getInnerIpAddress
 * @method self withInnerIpAddress
 * @method Integer getSystemDisk.Size
 * @method self withSystemDisk.Size
 * @method string getSystemDisk.Category
 * @method self withSystemDisk.Category
 * @method string getSystemDisk.DiskName
 * @method self withSystemDisk.DiskName
 * @method string getSystemDisk.Description
 * @method self withSystemDisk.Description
 * @method RepeatList getDataDisk
 * @method self withDataDisk
 * @method string getNodeControllerId
 * @method self withNodeControllerId
 * @method string getDescription
 * @method self withDescription
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getPrivateIpAddress
 * @method self withPrivateIpAddress
 * @method string getIoOptimized
 * @method self withIoOptimized
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Boolean getUseAdditionalService
 * @method self withUseAdditionalService
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getPeriodUnit
 * @method self withPeriodUnit
 * @method RepeatList getTag
 * @method self withTag
 * @method string getUserData
 * @method self withUserData
 * @method string getSpotStrategy
 * @method self withSpotStrategy
 * @method string getKeyPairName
 * @method self withKeyPairName
 * @method Float getSpotPriceLimit
 * @method self withSpotPriceLimit
 * @method string getSpotInterruptionBehavior
 * @method self withSpotInterruptionBehavior
 * @method string getRamRoleName
 * @method self withRamRoleName
 * @method string getSecurityEnhancementStrategy
 * @method self withSecurityEnhancementStrategy
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method string getHpcClusterId
 * @method self withHpcClusterId
 * @method Boolean getDryRun
 * @method self withDryRun
 * @method string getDedicatedHostId
 * @method self withDedicatedHostId
 * @method string getCreditSpecification
 * @method self withCreditSpecification
 * @method Boolean getDeletionProtection
 * @method self withDeletionProtection
 */
final class CreateInstance extends RpcRequest
{
}

/**
 * @method RepeatList getDiskDeviceMapping
 * @method self withDiskDeviceMapping
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getSnapshotId
 * @method self withSnapshotId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getImageName
 * @method self withImageName
 * @method string getImageVersion
 * @method self withImageVersion
 * @method string getDescription
 * @method self withDescription
 * @method string getPlatform
 * @method self withPlatform
 * @method string getArchitecture
 * @method self withArchitecture
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method RepeatList getTag
 * @method self withTag
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 */
final class CreateImage extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getZoneId
 * @method self withZoneId
 * @method string getSnapshotId
 * @method self withSnapshotId
 * @method string getDiskName
 * @method self withDiskName
 * @method Integer getSize
 * @method self withSize
 * @method string getDiskCategory
 * @method self withDiskCategory
 * @method string getDescription
 * @method self withDescription
 * @method Boolean getEncrypted
 * @method self withEncrypted
 * @method string getClientToken
 * @method self withClientToken
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method RepeatList getTag
 * @method self withTag
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 * @method string getKMSKeyId
 * @method self withKMSKeyId
 */
final class CreateDisk extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getDestinationImageName
 * @method self withDestinationImageName
 * @method string getDestinationDescription
 * @method self withDestinationDescription
 * @method string getImageId
 * @method self withImageId
 * @method string getDestinationRegionId
 * @method self withDestinationRegionId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method RepeatList getTag
 * @method self withTag
 * @method Boolean getEncrypted
 * @method self withEncrypted
 */
final class CopyImage extends RpcRequest
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
 * @method string getDiskIds
 * @method self withDiskIds
 */
final class CheckDiskEnableAutoSnapshotValidation extends RpcRequest
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
 * @method Boolean getSystemDiskPolicyEnabled
 * @method self withSystemDiskPolicyEnabled
 * @method Integer getSystemDiskPolicyTimePeriod
 * @method self withSystemDiskPolicyTimePeriod
 * @method Integer getSystemDiskPolicyRetentionDays
 * @method self withSystemDiskPolicyRetentionDays
 * @method Boolean getSystemDiskPolicyRetentionLastWeek
 * @method self withSystemDiskPolicyRetentionLastWeek
 * @method Boolean getDataDiskPolicyEnabled
 * @method self withDataDiskPolicyEnabled
 * @method Integer getDataDiskPolicyTimePeriod
 * @method self withDataDiskPolicyTimePeriod
 * @method Integer getDataDiskPolicyRetentionDays
 * @method self withDataDiskPolicyRetentionDays
 * @method Boolean getDataDiskPolicyRetentionLastWeek
 * @method self withDataDiskPolicyRetentionLastWeek
 */
final class CheckAutoSnapshotPolicy extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getImageId
 * @method self withImageId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class CancelCopyImage extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getIpAddress
 * @method self withIpAddress
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class BindIpRange extends RpcRequest
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
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getIpProtocol
 * @method self withIpProtocol
 * @method string getPortRange
 * @method self withPortRange
 * @method string getDestGroupId
 * @method self withDestGroupId
 * @method Long getDestGroupOwnerId
 * @method self withDestGroupOwnerId
 * @method string getDestGroupOwnerAccount
 * @method self withDestGroupOwnerAccount
 * @method string getDestCidrIp
 * @method self withDestCidrIp
 * @method string getIpv6DestCidrIp
 * @method self withIpv6DestCidrIp
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp
 * @method string getIpv6SourceCidrIp
 * @method self withIpv6SourceCidrIp
 * @method string getSourcePortRange
 * @method self withSourcePortRange
 * @method string getPolicy
 * @method self withPolicy
 * @method string getPriority
 * @method self withPriority
 * @method string getNicType
 * @method self withNicType
 * @method string getClientToken
 * @method self withClientToken
 * @method string getDescription
 * @method self withDescription
 */
final class AuthorizeSecurityGroupEgress extends RpcRequest
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
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getIpProtocol
 * @method self withIpProtocol
 * @method string getPortRange
 * @method self withPortRange
 * @method string getSourceGroupId
 * @method self withSourceGroupId
 * @method Long getSourceGroupOwnerId
 * @method self withSourceGroupOwnerId
 * @method string getSourceGroupOwnerAccount
 * @method self withSourceGroupOwnerAccount
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp
 * @method string getIpv6SourceCidrIp
 * @method self withIpv6SourceCidrIp
 * @method string getSourcePortRange
 * @method self withSourcePortRange
 * @method string getDestCidrIp
 * @method self withDestCidrIp
 * @method string getIpv6DestCidrIp
 * @method self withIpv6DestCidrIp
 * @method string getPolicy
 * @method self withPolicy
 * @method string getPriority
 * @method self withPriority
 * @method string getNicType
 * @method self withNicType
 * @method string getClientToken
 * @method self withClientToken
 * @method string getDescription
 * @method self withDescription
 */
final class AuthorizeSecurityGroup extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getDiskId
 * @method self withDiskId
 * @method string getDevice
 * @method self withDevice
 * @method Boolean getDeleteWithInstance
 * @method self withDeleteWithInstance
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class AttachDisk extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getAllocationId
 * @method self withAllocationId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getInstanceType
 * @method self withInstanceType
 */
final class AssociateEipAddress extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getIpAddress
 * @method self withIpAddress
 * @method string getVlanId
 * @method self withVlanId
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 */
final class AllocatePublicIpAddress extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getBandwidth
 * @method self withBandwidth
 * @method string getISP
 * @method self withISP
 * @method string getInternetChargeType
 * @method self withInternetChargeType
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getClientToken
 * @method self withClientToken
 */
final class AllocateEipAddress extends RpcRequest
{
}
