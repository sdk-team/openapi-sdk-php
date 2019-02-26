<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ImportSnapshot importSnapshot($options = [])
 * @method ExportSnapshot exportSnapshot($options = [])
 * @method UntagResources untagResources($options = [])
 * @method TagResources tagResources($options = [])
 * @method ListTagResources listTagResources($options = [])
 * @method AcceptInquiredSystemEvent acceptInquiredSystemEvent($options = [])
 * @method RedeployInstance redeployInstance($options = [])
 * @method UnassignIpv6Addresses unassignIpv6Addresses($options = [])
 * @method AssignIpv6Addresses assignIpv6Addresses($options = [])
 * @method DescribeInstanceTopology describeInstanceTopology($options = [])
 * @method RenewDedicatedHosts renewDedicatedHosts($options = [])
 * @method ReleaseDedicatedHost releaseDedicatedHost($options = [])
 * @method ModifyInstanceDeployment modifyInstanceDeployment($options = [])
 * @method ModifyDedicatedHostAutoRenewAttribute modifyDedicatedHostAutoRenewAttribute($options = [])
 * @method ModifyDedicatedHostAutoReleaseTime modifyDedicatedHostAutoReleaseTime($options = [])
 * @method ModifyDedicatedHostAttribute modifyDedicatedHostAttribute($options = [])
 * @method DescribeDedicatedHosts describeDedicatedHosts($options = [])
 * @method DescribeDedicatedHostTypes describeDedicatedHostTypes($options = [])
 * @method DescribeDedicatedHostAutoRenew describeDedicatedHostAutoRenew($options = [])
 * @method AllocateDedicatedHosts allocateDedicatedHosts($options = [])
 * @method CreateSimulatedSystemEvents createSimulatedSystemEvents($options = [])
 * @method CancelSimulatedSystemEvents cancelSimulatedSystemEvents($options = [])
 * @method DescribeEniMonitorData describeEniMonitorData($options = [])
 * @method DescribeAccountAttributes describeAccountAttributes($options = [])
 * @method ValidateSecurityGroup validateSecurityGroup($options = [])
 * @method ModifyLaunchTemplateDefaultVersion modifyLaunchTemplateDefaultVersion($options = [])
 * @method DescribeLaunchTemplates describeLaunchTemplates($options = [])
 * @method DescribeLaunchTemplateVersions describeLaunchTemplateVersions($options = [])
 * @method DeleteLaunchTemplateVersion deleteLaunchTemplateVersion($options = [])
 * @method DeleteLaunchTemplate deleteLaunchTemplate($options = [])
 * @method CreateLaunchTemplateVersion createLaunchTemplateVersion($options = [])
 * @method CreateLaunchTemplate createLaunchTemplate($options = [])
 * @method InstallCloudAssistant installCloudAssistant($options = [])
 * @method DescribeCloudAssistantStatus describeCloudAssistantStatus($options = [])
 * @method UnassignPrivateIpAddresses unassignPrivateIpAddresses($options = [])
 * @method AssignPrivateIpAddresses assignPrivateIpAddresses($options = [])
 * @method DescribeNetworkInterfacePermissions describeNetworkInterfacePermissions($options = [])
 * @method DeleteNetworkInterfacePermission deleteNetworkInterfacePermission($options = [])
 * @method CreateNetworkInterfacePermission createNetworkInterfacePermission($options = [])
 * @method GetInstanceScreenshot getInstanceScreenshot($options = [])
 * @method GetInstanceConsoleOutput getInstanceConsoleOutput($options = [])
 * @method ModifyUserEventAttribute modifyUserEventAttribute($options = [])
 * @method DescribeEvents describeEvents($options = [])
 * @method DescribeEventDetail describeEventDetail($options = [])
 * @method CreateUserEvent createUserEvent($options = [])
 * @method CancelUserEvent cancelUserEvent($options = [])
 * @method DescribeResourcesModification describeResourcesModification($options = [])
 * @method DescribeBandwidthLimitation describeBandwidthLimitation($options = [])
 * @method DescribeAvailableResource describeAvailableResource($options = [])
 * @method ReActivateInstances reActivateInstances($options = [])
 * @method DescribeInstancesFullStatus describeInstancesFullStatus($options = [])
 * @method DescribeInstanceHistoryEvents describeInstanceHistoryEvents($options = [])
 * @method DescribeDisksFullStatus describeDisksFullStatus($options = [])
 * @method ModifyUserBusinessBehavior modifyUserBusinessBehavior($options = [])
 * @method DescribeUserBusinessBehavior describeUserBusinessBehavior($options = [])
 * @method RunInstances runInstances($options = [])
 * @method SignAgreement signAgreement($options = [])
 * @method CancelAgreement cancelAgreement($options = [])
 * @method ConvertNatPublicIpToEip convertNatPublicIpToEip($options = [])
 * @method DescribeRecycleBin describeRecycleBin($options = [])
 * @method DeleteRecycleBin deleteRecycleBin($options = [])
 * @method ModifyHpcClusterAttribute modifyHpcClusterAttribute($options = [])
 * @method DescribeHpcClusters describeHpcClusters($options = [])
 * @method DeleteHpcCluster deleteHpcCluster($options = [])
 * @method CreateHpcCluster createHpcCluster($options = [])
 * @method DescribeSnapshotsUsage describeSnapshotsUsage($options = [])
 * @method DescribeSpotPriceHistory describeSpotPriceHistory($options = [])
 * @method StopInvocation stopInvocation($options = [])
 * @method ModifyCommand modifyCommand($options = [])
 * @method InvokeCommand invokeCommand($options = [])
 * @method DescribeInvocations describeInvocations($options = [])
 * @method DescribeInvocationResults describeInvocationResults($options = [])
 * @method DescribeCommands describeCommands($options = [])
 * @method DeleteCommand deleteCommand($options = [])
 * @method CreateCommand createCommand($options = [])
 * @method ModifySecurityGroupEgressRule modifySecurityGroupEgressRule($options = [])
 * @method ModifyDiskChargeType modifyDiskChargeType($options = [])
 * @method ModifyNetworkInterfaceAttribute modifyNetworkInterfaceAttribute($options = [])
 * @method DetachNetworkInterface detachNetworkInterface($options = [])
 * @method DescribeNetworkInterfaces describeNetworkInterfaces($options = [])
 * @method DeleteNetworkInterface deleteNetworkInterface($options = [])
 * @method CreateNetworkInterface createNetworkInterface($options = [])
 * @method AttachNetworkInterface attachNetworkInterface($options = [])
 * @method DescribeRecommendInstanceType describeRecommendInstanceType($options = [])
 * @method ModifyPrepayInstanceSpec modifyPrepayInstanceSpec($options = [])
 * @method ModifyInstanceChargeType modifyInstanceChargeType($options = [])
 * @method JoinResourceGroup joinResourceGroup($options = [])
 * @method ModifySecurityGroupPolicy modifySecurityGroupPolicy($options = [])
 * @method DescribeSecurityGroupReferences describeSecurityGroupReferences($options = [])
 * @method DetachClassicLinkVpc detachClassicLinkVpc($options = [])
 * @method DescribeClassicLinkInstances describeClassicLinkInstances($options = [])
 * @method AttachClassicLinkVpc attachClassicLinkVpc($options = [])
 * @method DetachInstanceRamRole detachInstanceRamRole($options = [])
 * @method DescribeInstanceRamRole describeInstanceRamRole($options = [])
 * @method AttachInstanceRamRole attachInstanceRamRole($options = [])
 * @method DescribeSnapshotPackage describeSnapshotPackage($options = [])
 * @method ModifySecurityGroupRule modifySecurityGroupRule($options = [])
 * @method DescribeSnapshotMonitorData describeSnapshotMonitorData($options = [])
 * @method DescribeRenewalPrice describeRenewalPrice($options = [])
 * @method DescribePrice describePrice($options = [])
 * @method AddIpRange addIpRange($options = [])
 * @method DescribeDeploymentSetTopology describeDeploymentSetTopology($options = [])
 * @method ModifyDeploymentSetAttribute modifyDeploymentSetAttribute($options = [])
 * @method DescribeDeploymentSets describeDeploymentSets($options = [])
 * @method DeleteDeploymentSet deleteDeploymentSet($options = [])
 * @method CreateDeploymentSet createDeploymentSet($options = [])
 * @method ImportKeyPair importKeyPair($options = [])
 * @method DetachKeyPair detachKeyPair($options = [])
 * @method DescribeKeyPairs describeKeyPairs($options = [])
 * @method DeleteKeyPairs deleteKeyPairs($options = [])
 * @method CreateKeyPair createKeyPair($options = [])
 * @method AttachKeyPair attachKeyPair($options = [])
 * @method RollbackVolume rollbackVolume($options = [])
 * @method ResizeVolume resizeVolume($options = [])
 * @method ReInitVolume reInitVolume($options = [])
 * @method ModifyVolumeAttribute modifyVolumeAttribute($options = [])
 * @method DetachVolume detachVolume($options = [])
 * @method DescribeVolumes describeVolumes($options = [])
 * @method DeleteVolume deleteVolume($options = [])
 * @method CreateVolume createVolume($options = [])
 * @method AttachVolume attachVolume($options = [])
 * @method RollbackVolumeGatedLaunch rollbackVolumeGatedLaunch($options = [])
 * @method ResizeVolumeGatedLaunch resizeVolumeGatedLaunch($options = [])
 * @method ReInitVolumeGatedLaunch reInitVolumeGatedLaunch($options = [])
 * @method ModifyVolumeAttributeGatedLaunch modifyVolumeAttributeGatedLaunch($options = [])
 * @method DetachVolumeGatedLaunch detachVolumeGatedLaunch($options = [])
 * @method DescribeVolumesGatedLaunch describeVolumesGatedLaunch($options = [])
 * @method DeleteVolumeGatedLaunch deleteVolumeGatedLaunch($options = [])
 * @method CreateVolumeGatedLaunch createVolumeGatedLaunch($options = [])
 * @method AttachVolumeGatedLaunch attachVolumeGatedLaunch($options = [])
 * @method DescribeSnapshotLinksGatedLaunch describeSnapshotLinksGatedLaunch($options = [])
 * @method ModifyInstanceAutoRenewAttribute modifyInstanceAutoRenewAttribute($options = [])
 * @method DescribeInstanceAutoRenewAttribute describeInstanceAutoRenewAttribute($options = [])
 * @method ModifyInstanceAutoRenewAttributeGatedLaunch modifyInstanceAutoRenewAttributeGatedLaunch($options = [])
 * @method DescribeInstanceAutoRenewAttributeGatedLaunch describeInstanceAutoRenewAttributeGatedLaunch($options = [])
 * @method DescribeSnapshotLinks describeSnapshotLinks($options = [])
 * @method ModifyInstanceAutoReleaseTime modifyInstanceAutoReleaseTime($options = [])
 * @method UnbindIpRangeGatedLaunch unbindIpRangeGatedLaunch($options = [])
 * @method StopInstanceGatedLaunch stopInstanceGatedLaunch($options = [])
 * @method StartInstanceGatedLaunch startInstanceGatedLaunch($options = [])
 * @method RevokeSecurityGroupEgressGatedLaunch revokeSecurityGroupEgressGatedLaunch($options = [])
 * @method RevokeSecurityGroupGatedLaunch revokeSecurityGroupGatedLaunch($options = [])
 * @method ResizeDiskGatedLaunch resizeDiskGatedLaunch($options = [])
 * @method ResetDiskGatedLaunch resetDiskGatedLaunch($options = [])
 * @method ReplaceSystemDiskGatedLaunch replaceSystemDiskGatedLaunch($options = [])
 * @method RenewInstanceGatedLaunch renewInstanceGatedLaunch($options = [])
 * @method RemoveTagsGatedLaunch removeTagsGatedLaunch($options = [])
 * @method ReleasePublicIpAddressGatedLaunch releasePublicIpAddressGatedLaunch($options = [])
 * @method ReInitDiskGatedLaunch reInitDiskGatedLaunch($options = [])
 * @method RebootInstanceGatedLaunch rebootInstanceGatedLaunch($options = [])
 * @method ModifySnapshotAttributeGatedLaunch modifySnapshotAttributeGatedLaunch($options = [])
 * @method ModifySecurityGroupAttributeGatedLaunch modifySecurityGroupAttributeGatedLaunch($options = [])
 * @method ModifyIntranetBandwidthKbGatedLaunch modifyIntranetBandwidthKbGatedLaunch($options = [])
 * @method ModifyInstanceVpcAttributeGatedLaunch modifyInstanceVpcAttributeGatedLaunch($options = [])
 * @method ModifyInstanceVncPasswdGatedLaunch modifyInstanceVncPasswdGatedLaunch($options = [])
 * @method ModifyInstanceSpecGatedLaunch modifyInstanceSpecGatedLaunch($options = [])
 * @method ModifyInstanceNetworkSpecGatedLaunch modifyInstanceNetworkSpecGatedLaunch($options = [])
 * @method ModifyInstanceAttributeGatedLaunch modifyInstanceAttributeGatedLaunch($options = [])
 * @method ModifyImageSharePermissionGatedLaunch modifyImageSharePermissionGatedLaunch($options = [])
 * @method ModifyImageShareGroupPermissionGatedLaunch modifyImageShareGroupPermissionGatedLaunch($options = [])
 * @method ModifyImageAttributeGatedLaunch modifyImageAttributeGatedLaunch($options = [])
 * @method ModifyDiskAttributeGatedLaunch modifyDiskAttributeGatedLaunch($options = [])
 * @method ModifyAutoSnapshotPolicyExGatedLaunch modifyAutoSnapshotPolicyExGatedLaunch($options = [])
 * @method ModifyAutoSnapshotPolicyGatedLaunch modifyAutoSnapshotPolicyGatedLaunch($options = [])
 * @method LeaveSecurityGroupGatedLaunch leaveSecurityGroupGatedLaunch($options = [])
 * @method JoinSecurityGroupGatedLaunch joinSecurityGroupGatedLaunch($options = [])
 * @method ImportImageGatedLaunch importImageGatedLaunch($options = [])
 * @method ExportImageGatedLaunch exportImageGatedLaunch($options = [])
 * @method DetachDiskGatedLaunch detachDiskGatedLaunch($options = [])
 * @method DescribeZonesGatedLaunch describeZonesGatedLaunch($options = [])
 * @method DescribeUserDataGatedLaunch describeUserDataGatedLaunch($options = [])
 * @method DescribeTasksGatedLaunch describeTasksGatedLaunch($options = [])
 * @method DescribeTaskAttributeGatedLaunch describeTaskAttributeGatedLaunch($options = [])
 * @method DescribeTagsGatedLaunch describeTagsGatedLaunch($options = [])
 * @method DescribeTagKeysGatedLaunch describeTagKeysGatedLaunch($options = [])
 * @method DescribeSnapshotsGatedLaunch describeSnapshotsGatedLaunch($options = [])
 * @method DescribeSecurityGroupsGatedLaunch describeSecurityGroupsGatedLaunch($options = [])
 * @method DescribeSecurityGroupAttributeGatedLaunch describeSecurityGroupAttributeGatedLaunch($options = [])
 * @method DescribeResourceByTagsGatedLaunch describeResourceByTagsGatedLaunch($options = [])
 * @method DescribeRegionsGatedLaunch describeRegionsGatedLaunch($options = [])
 * @method DescribeLimitationGatedLaunch describeLimitationGatedLaunch($options = [])
 * @method DescribeIpRangesGatedLaunch describeIpRangesGatedLaunch($options = [])
 * @method DescribeIntranetAttributeKbGatedLaunch describeIntranetAttributeKbGatedLaunch($options = [])
 * @method DescribeInstanceVncUrlGatedLaunch describeInstanceVncUrlGatedLaunch($options = [])
 * @method DescribeInstanceVncPasswdGatedLaunch describeInstanceVncPasswdGatedLaunch($options = [])
 * @method DescribeInstanceTypesGatedLaunch describeInstanceTypesGatedLaunch($options = [])
 * @method DescribeInstanceTypeFamiliesGatedLaunch describeInstanceTypeFamiliesGatedLaunch($options = [])
 * @method DescribeInstanceStatusGatedLaunch describeInstanceStatusGatedLaunch($options = [])
 * @method DescribeInstancesGatedLaunch describeInstancesGatedLaunch($options = [])
 * @method DescribeInstancePhysicalAttributeGatedLaunch describeInstancePhysicalAttributeGatedLaunch($options = [])
 * @method DescribeInstanceMonitorDataGatedLaunch describeInstanceMonitorDataGatedLaunch($options = [])
 * @method DescribeInstanceAttributeGatedLaunch describeInstanceAttributeGatedLaunch($options = [])
 * @method DescribeImageSupportInstanceTypesGatedLaunch describeImageSupportInstanceTypesGatedLaunch($options = [])
 * @method DescribeImageSharePermissionGatedLaunch describeImageSharePermissionGatedLaunch($options = [])
 * @method DescribeImagesGatedLaunch describeImagesGatedLaunch($options = [])
 * @method DescribeDisksGatedLaunch describeDisksGatedLaunch($options = [])
 * @method DescribeDiskMonitorDataGatedLaunch describeDiskMonitorDataGatedLaunch($options = [])
 * @method DescribeClustersGatedLaunch describeClustersGatedLaunch($options = [])
 * @method DescribeAutoSnapshotPolicyExGatedLaunch describeAutoSnapshotPolicyExGatedLaunch($options = [])
 * @method DeleteSnapshotGatedLaunch deleteSnapshotGatedLaunch($options = [])
 * @method DeleteSecurityGroupGatedLaunch deleteSecurityGroupGatedLaunch($options = [])
 * @method DeleteInstanceGatedLaunch deleteInstanceGatedLaunch($options = [])
 * @method DeleteImageGatedLaunch deleteImageGatedLaunch($options = [])
 * @method DeleteDiskGatedLaunch deleteDiskGatedLaunch($options = [])
 * @method DeleteAutoSnapshotPolicyGatedLaunch deleteAutoSnapshotPolicyGatedLaunch($options = [])
 * @method CreateSnapshotGatedLaunch createSnapshotGatedLaunch($options = [])
 * @method CreateSecurityGroupGatedLaunch createSecurityGroupGatedLaunch($options = [])
 * @method CreateInstanceGatedLaunch createInstanceGatedLaunch($options = [])
 * @method CreateImageGatedLaunch createImageGatedLaunch($options = [])
 * @method CreateDiskGatedLaunch createDiskGatedLaunch($options = [])
 * @method CreateAutoSnapshotPolicyGatedLaunch createAutoSnapshotPolicyGatedLaunch($options = [])
 * @method CopyImageGatedLaunch copyImageGatedLaunch($options = [])
 * @method CheckDiskEnableAutoSnapshotValidationGatedLaunch checkDiskEnableAutoSnapshotValidationGatedLaunch($options = [])
 * @method CheckAutoSnapshotPolicyGatedLaunch checkAutoSnapshotPolicyGatedLaunch($options = [])
 * @method CancelTaskGatedLaunch cancelTaskGatedLaunch($options = [])
 * @method CancelCopyImageGatedLaunch cancelCopyImageGatedLaunch($options = [])
 * @method CancelAutoSnapshotPolicyGatedLaunch cancelAutoSnapshotPolicyGatedLaunch($options = [])
 * @method BindIpRangeGatedLaunch bindIpRangeGatedLaunch($options = [])
 * @method AuthorizeSecurityGroupEgressGatedLaunch authorizeSecurityGroupEgressGatedLaunch($options = [])
 * @method AuthorizeSecurityGroupGatedLaunch authorizeSecurityGroupGatedLaunch($options = [])
 * @method AttachDiskGatedLaunch attachDiskGatedLaunch($options = [])
 * @method ApplyAutoSnapshotPolicyGatedLaunch applyAutoSnapshotPolicyGatedLaunch($options = [])
 * @method AllocatePublicIpAddressGatedLaunch allocatePublicIpAddressGatedLaunch($options = [])
 * @method AddTagsGatedLaunch addTagsGatedLaunch($options = [])
 * @method DescribeAutoSnapshotPolicyGatedLaunch describeAutoSnapshotPolicyGatedLaunch($options = [])
 * @method DescribeNewProjectEipMonitorData describeNewProjectEipMonitorData($options = [])
 * @method DescribeUserData describeUserData($options = [])
 * @method RemoveBandwidthPackageIps removeBandwidthPackageIps($options = [])
 * @method ModifyForwardEntry modifyForwardEntry($options = [])
 * @method ModifyBandwidthPackageSpec modifyBandwidthPackageSpec($options = [])
 * @method DescribeNatGateways describeNatGateways($options = [])
 * @method DescribeForwardTableEntries describeForwardTableEntries($options = [])
 * @method DescribeBandwidthPackages describeBandwidthPackages($options = [])
 * @method DeleteNatGateway deleteNatGateway($options = [])
 * @method DeleteForwardEntry deleteForwardEntry($options = [])
 * @method DeleteBandwidthPackage deleteBandwidthPackage($options = [])
 * @method CreateNatGateway createNatGateway($options = [])
 * @method CreateForwardEntry createForwardEntry($options = [])
 * @method AddBandwidthPackageIps addBandwidthPackageIps($options = [])
 * @method EipFillProduct eipFillProduct($options = [])
 * @method EipNotifyPaid eipNotifyPaid($options = [])
 * @method EipFillParams eipFillParams($options = [])
 * @method ModifyAutoSnapshotPolicyEx modifyAutoSnapshotPolicyEx($options = [])
 * @method DescribeAutoSnapshotPolicyEx describeAutoSnapshotPolicyEx($options = [])
 * @method DeleteAutoSnapshotPolicy deleteAutoSnapshotPolicy($options = [])
 * @method CreateAutoSnapshotPolicy createAutoSnapshotPolicy($options = [])
 * @method CancelAutoSnapshotPolicy cancelAutoSnapshotPolicy($options = [])
 * @method ApplyAutoSnapshotPolicy applyAutoSnapshotPolicy($options = [])
 * @method DescribeImageSupportInstanceTypes describeImageSupportInstanceTypes($options = [])
 * @method TerminateVirtualBorderRouter terminateVirtualBorderRouter($options = [])
 * @method TerminatePhysicalConnection terminatePhysicalConnection($options = [])
 * @method RecoverVirtualBorderRouter recoverVirtualBorderRouter($options = [])
 * @method ModifyVirtualBorderRouterAttribute modifyVirtualBorderRouterAttribute($options = [])
 * @method ModifyPhysicalConnectionAttribute modifyPhysicalConnectionAttribute($options = [])
 * @method EnablePhysicalConnection enablePhysicalConnection($options = [])
 * @method DescribeVirtualBorderRoutersForPhysicalConnection describeVirtualBorderRoutersForPhysicalConnection($options = [])
 * @method DescribeVirtualBorderRouters describeVirtualBorderRouters($options = [])
 * @method DescribePhysicalConnections describePhysicalConnections($options = [])
 * @method DescribeAccessPoints describeAccessPoints($options = [])
 * @method DeleteVirtualBorderRouter deleteVirtualBorderRouter($options = [])
 * @method DeletePhysicalConnection deletePhysicalConnection($options = [])
 * @method CreateVirtualBorderRouter createVirtualBorderRouter($options = [])
 * @method CreatePhysicalConnection createPhysicalConnection($options = [])
 * @method CancelPhysicalConnection cancelPhysicalConnection($options = [])
 * @method ImportImage importImage($options = [])
 * @method ExportImage exportImage($options = [])
 * @method DescribeTasks describeTasks($options = [])
 * @method DescribeTaskAttribute describeTaskAttribute($options = [])
 * @method CancelTask cancelTask($options = [])
 * @method DescribeInstanceTypeFamilies describeInstanceTypeFamilies($options = [])
 * @method ModifyRouterInterfaceSpec modifyRouterInterfaceSpec($options = [])
 * @method ModifyRouterInterfaceAttribute modifyRouterInterfaceAttribute($options = [])
 * @method DescribeRouterInterfaces describeRouterInterfaces($options = [])
 * @method DeleteRouterInterface deleteRouterInterface($options = [])
 * @method DeactivateRouterInterface deactivateRouterInterface($options = [])
 * @method CreateRouterInterface createRouterInterface($options = [])
 * @method ConnectRouterInterface connectRouterInterface($options = [])
 * @method ActivateRouterInterface activateRouterInterface($options = [])
 * @method UnassociateHaVip unassociateHaVip($options = [])
 * @method ModifyHaVipAttribute modifyHaVipAttribute($options = [])
 * @method DescribeHaVips describeHaVips($options = [])
 * @method DeleteHaVip deleteHaVip($options = [])
 * @method CreateHaVip createHaVip($options = [])
 * @method AssociateHaVip associateHaVip($options = [])
 * @method RenewInstance renewInstance($options = [])
 * @method DescribeTagKeys describeTagKeys($options = [])
 * @method RemoveTags removeTags($options = [])
 * @method DescribeTags describeTags($options = [])
 * @method DescribeResourceByTags describeResourceByTags($options = [])
 * @method AddTags addTags($options = [])
 * @method UnbindIpRange unbindIpRange($options = [])
 * @method UnassociateEipAddress unassociateEipAddress($options = [])
 * @method StopInstance stopInstance($options = [])
 * @method StartInstance startInstance($options = [])
 * @method RevokeSecurityGroupEgress revokeSecurityGroupEgress($options = [])
 * @method RevokeSecurityGroup revokeSecurityGroup($options = [])
 * @method ResizeDisk resizeDisk($options = [])
 * @method ResetDisk resetDisk($options = [])
 * @method ReplaceSystemDisk replaceSystemDisk($options = [])
 * @method ReleasePublicIpAddress releasePublicIpAddress($options = [])
 * @method ReleaseEipAddress releaseEipAddress($options = [])
 * @method ReInitDisk reInitDisk($options = [])
 * @method RebootInstance rebootInstance($options = [])
 * @method ModifyVSwitchAttribute modifyVSwitchAttribute($options = [])
 * @method ModifyVRouterAttribute modifyVRouterAttribute($options = [])
 * @method ModifyVpcAttribute modifyVpcAttribute($options = [])
 * @method ModifySnapshotAttribute modifySnapshotAttribute($options = [])
 * @method ModifySecurityGroupAttribute modifySecurityGroupAttribute($options = [])
 * @method ModifyIntranetBandwidthKb modifyIntranetBandwidthKb($options = [])
 * @method ModifyInstanceVpcAttribute modifyInstanceVpcAttribute($options = [])
 * @method ModifyInstanceVncPasswd modifyInstanceVncPasswd($options = [])
 * @method ModifyInstanceSpec modifyInstanceSpec($options = [])
 * @method ModifyInstanceNetworkSpec modifyInstanceNetworkSpec($options = [])
 * @method ModifyInstanceAttribute modifyInstanceAttribute($options = [])
 * @method ModifyImageSharePermission modifyImageSharePermission($options = [])
 * @method ModifyImageShareGroupPermission modifyImageShareGroupPermission($options = [])
 * @method ModifyImageAttribute modifyImageAttribute($options = [])
 * @method ModifyEipAddressAttribute modifyEipAddressAttribute($options = [])
 * @method ModifyDiskAttribute modifyDiskAttribute($options = [])
 * @method ModifyAutoSnapshotPolicy modifyAutoSnapshotPolicy($options = [])
 * @method LeaveSecurityGroup leaveSecurityGroup($options = [])
 * @method JoinSecurityGroup joinSecurityGroup($options = [])
 * @method DetachDisk detachDisk($options = [])
 * @method DescribeZones describeZones($options = [])
 * @method DescribeVSwitches describeVSwitches($options = [])
 * @method DescribeVRouters describeVRouters($options = [])
 * @method DescribeVpcs describeVpcs($options = [])
 * @method DescribeSnapshots describeSnapshots($options = [])
 * @method DescribeSecurityGroups describeSecurityGroups($options = [])
 * @method DescribeSecurityGroupAttribute describeSecurityGroupAttribute($options = [])
 * @method DescribeRouteTables describeRouteTables($options = [])
 * @method DescribeRegions describeRegions($options = [])
 * @method DescribeLimitation describeLimitation($options = [])
 * @method DescribeIpRanges describeIpRanges($options = [])
 * @method DescribeIntranetAttributeKb describeIntranetAttributeKb($options = [])
 * @method DescribeInstanceVncUrl describeInstanceVncUrl($options = [])
 * @method DescribeInstanceVncPasswd describeInstanceVncPasswd($options = [])
 * @method DescribeInstanceTypes describeInstanceTypes($options = [])
 * @method DescribeInstanceStatus describeInstanceStatus($options = [])
 * @method DescribeInstances describeInstances($options = [])
 * @method DescribeInstancePhysicalAttribute describeInstancePhysicalAttribute($options = [])
 * @method DescribeInstanceMonitorData describeInstanceMonitorData($options = [])
 * @method DescribeInstanceAttribute describeInstanceAttribute($options = [])
 * @method DescribeImageSharePermission describeImageSharePermission($options = [])
 * @method DescribeImages describeImages($options = [])
 * @method DescribeEipMonitorData describeEipMonitorData($options = [])
 * @method DescribeEipAddresses describeEipAddresses($options = [])
 * @method DescribeDisks describeDisks($options = [])
 * @method DescribeDiskMonitorData describeDiskMonitorData($options = [])
 * @method DescribeClusters describeClusters($options = [])
 * @method DescribeAutoSnapshotPolicy describeAutoSnapshotPolicy($options = [])
 * @method DeleteVSwitch deleteVSwitch($options = [])
 * @method DeleteVpc deleteVpc($options = [])
 * @method DeleteSnapshot deleteSnapshot($options = [])
 * @method DeleteSecurityGroup deleteSecurityGroup($options = [])
 * @method DeleteRouteEntry deleteRouteEntry($options = [])
 * @method DeleteInstance deleteInstance($options = [])
 * @method DeleteImage deleteImage($options = [])
 * @method DeleteDisk deleteDisk($options = [])
 * @method CreateVSwitch createVSwitch($options = [])
 * @method CreateVpc createVpc($options = [])
 * @method CreateSnapshot createSnapshot($options = [])
 * @method CreateSecurityGroup createSecurityGroup($options = [])
 * @method CreateRouteEntry createRouteEntry($options = [])
 * @method CreateInstance createInstance($options = [])
 * @method CreateImage createImage($options = [])
 * @method CreateDisk createDisk($options = [])
 * @method CopyImage copyImage($options = [])
 * @method CheckDiskEnableAutoSnapshotValidation checkDiskEnableAutoSnapshotValidation($options = [])
 * @method CheckAutoSnapshotPolicy checkAutoSnapshotPolicy($options = [])
 * @method CancelCopyImage cancelCopyImage($options = [])
 * @method BindIpRange bindIpRange($options = [])
 * @method AuthorizeSecurityGroupEgress authorizeSecurityGroupEgress($options = [])
 * @method AuthorizeSecurityGroup authorizeSecurityGroup($options = [])
 * @method AttachDisk attachDisk($options = [])
 * @method AssociateEipAddress associateEipAddress($options = [])
 * @method AllocatePublicIpAddress allocatePublicIpAddress($options = [])
 * @method AllocateEipAddress allocateEipAddress($options = [])
 */
class V20140526
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
 * @method string getSnapshotName
 * @method self withSnapshotName(string $snapshotName)
 * @method string getOssBucket
 * @method self withOssBucket(string $ossBucket)
 * @method string getOssObject
 * @method self withOssObject(string $ossObject)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 */
class ImportSnapshot extends Rpc
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
 * @method string getSnapshotId
 * @method self withSnapshotId(string $snapshotId)
 * @method string getOssBucket
 * @method self withOssBucket(string $ossBucket)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 */
class ExportSnapshot extends Rpc
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
 * @method array getResourceId
 * @method self withResourceId(array $resourceId)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
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
 * @method array getResourceId
 * @method self withResourceId(array $resourceId)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getNextToken
 * @method self withNextToken(string $nextToken)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
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
 * @method string getEventId
 * @method self withEventId(string $eventId)
 */
class AcceptInquiredSystemEvent extends Rpc
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
 * @method bool getForceStop
 * @method self withForceStop(bool $forceStop)
 */
class RedeployInstance extends Rpc
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
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId(string $networkInterfaceId)
 * @method array getIpv6Address
 * @method self withIpv6Address(array $ipv6Address)
 */
class UnassignIpv6Addresses extends Rpc
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
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId(string $networkInterfaceId)
 * @method array getIpv6Address
 * @method self withIpv6Address(array $ipv6Address)
 * @method Integer getIpv6AddressCount
 * @method self withIpv6AddressCount(Integer $ipv6AddressCount)
 */
class AssignIpv6Addresses extends Rpc
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
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 */
class DescribeInstanceTopology extends Rpc
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
 * @method string getDeploymentSetId
 * @method self withDeploymentSetId(string $deploymentSetId)
 * @method bool getForce
 * @method self withForce(bool $force)
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
 * @method string getDedicatedHostIds
 * @method self withDedicatedHostIds(string $dedicatedHostIds)
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
 * @method string getDedicatedHostId
 * @method self withDedicatedHostId(string $dedicatedHostId)
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
 * @method string getSupportedInstanceTypeFamily
 * @method self withSupportedInstanceTypeFamily(string $supportedInstanceTypeFamily)
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
 * @method string getDedicatedHostIds
 * @method self withDedicatedHostIds(string $dedicatedHostIds)
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getInstanceId
 * @method self withInstanceId(array $instanceId)
 * @method string getEventType
 * @method self withEventType(string $eventType)
 * @method string getNotBefore
 * @method self withNotBefore(string $notBefore)
 */
class CreateSimulatedSystemEvents extends Rpc
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
 * @method array getEventId
 * @method self withEventId(array $eventId)
 */
class CancelSimulatedSystemEvents extends Rpc
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
 * @method string getEniId
 * @method self withEniId(string $eniId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 */
class DescribeEniMonitorData extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getIpProtocol
 * @method self withIpProtocol(string $ipProtocol)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getDirection
 * @method self withDirection(string $direction)
 * @method string getSourceIp
 * @method self withSourceIp(string $sourceIp)
 * @method Integer getSourcePort
 * @method self withSourcePort(Integer $sourcePort)
 * @method string getDestIp
 * @method self withDestIp(string $destIp)
 * @method Integer getDestPort
 * @method self withDestPort(Integer $destPort)
 * @method string getNicType
 * @method self withNicType(string $nicType)
 */
class ValidateSecurityGroup extends Rpc
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
 * @method string getLaunchTemplateId
 * @method self withLaunchTemplateId(string $launchTemplateId)
 * @method string getLaunchTemplateName
 * @method self withLaunchTemplateName(string $launchTemplateName)
 * @method int getDefaultVersionNumber
 * @method self withDefaultVersionNumber(int $defaultVersionNumber)
 */
class ModifyLaunchTemplateDefaultVersion extends Rpc
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
 * @method array getLaunchTemplateId
 * @method self withLaunchTemplateId(array $launchTemplateId)
 * @method array getLaunchTemplateName
 * @method self withLaunchTemplateName(array $launchTemplateName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getTemplateResourceGroupId
 * @method self withTemplateResourceGroupId(string $templateResourceGroupId)
 */
class DescribeLaunchTemplates extends Rpc
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
 * @method string getLaunchTemplateId
 * @method self withLaunchTemplateId(string $launchTemplateId)
 * @method string getLaunchTemplateName
 * @method self withLaunchTemplateName(string $launchTemplateName)
 * @method array getLaunchTemplateVersion
 * @method self withLaunchTemplateVersion(array $launchTemplateVersion)
 * @method int getMinVersion
 * @method self withMinVersion(int $minVersion)
 * @method int getMaxVersion
 * @method self withMaxVersion(int $maxVersion)
 * @method bool getDefaultVersion
 * @method self withDefaultVersion(bool $defaultVersion)
 * @method bool getDetailFlag
 * @method self withDetailFlag(bool $detailFlag)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeLaunchTemplateVersions extends Rpc
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
 * @method string getLaunchTemplateId
 * @method self withLaunchTemplateId(string $launchTemplateId)
 * @method string getLaunchTemplateName
 * @method self withLaunchTemplateName(string $launchTemplateName)
 * @method array getDeleteVersion
 * @method self withDeleteVersion(array $deleteVersion)
 */
class DeleteLaunchTemplateVersion extends Rpc
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
 * @method string getLaunchTemplateId
 * @method self withLaunchTemplateId(string $launchTemplateId)
 * @method string getLaunchTemplateName
 * @method self withLaunchTemplateName(string $launchTemplateName)
 */
class DeleteLaunchTemplate extends Rpc
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
 * @method string getLaunchTemplateId
 * @method self withLaunchTemplateId(string $launchTemplateId)
 * @method string getLaunchTemplateName
 * @method self withLaunchTemplateName(string $launchTemplateName)
 * @method string getVersionDescription
 * @method self withVersionDescription(string $versionDescription)
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getImageOwnerAlias
 * @method self withImageOwnerAlias(string $imageOwnerAlias)
 * @method bool getPasswordInherit
 * @method self withPasswordInherit(bool $passwordInherit)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method Integer getInternetMaxBandwidthIn
 * @method self withInternetMaxBandwidthIn(Integer $internetMaxBandwidthIn)
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut(Integer $internetMaxBandwidthOut)
 * @method string getHostName
 * @method self withHostName(string $hostName)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getSystemDiskCategory
 * @method self withSystemDiskCategory(string $systemDiskCategory)
 * @method Integer getSystemDiskSize
 * @method self withSystemDiskSize(Integer $systemDiskSize)
 * @method string getSystemDiskDiskName
 * @method self withSystemDiskDiskName(string $systemDiskDiskName)
 * @method string getSystemDiskDescription
 * @method self withSystemDiskDescription(string $systemDiskDescription)
 * @method Integer getSystemDiskIops
 * @method self withSystemDiskIops(Integer $systemDiskIops)
 * @method array getDataDisk
 * @method self withDataDisk(array $dataDisk)
 * @method string getIoOptimized
 * @method self withIoOptimized(string $ioOptimized)
 * @method array getNetworkInterface
 * @method self withNetworkInterface(array $networkInterface)
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method bool getEnableVmOsConfig
 * @method self withEnableVmOsConfig(bool $enableVmOsConfig)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getKeyPairName
 * @method self withKeyPairName(string $keyPairName)
 * @method string getRamRoleName
 * @method self withRamRoleName(string $ramRoleName)
 * @method string getAutoReleaseTime
 * @method self withAutoReleaseTime(string $autoReleaseTime)
 * @method string getSpotStrategy
 * @method self withSpotStrategy(string $spotStrategy)
 * @method float getSpotPriceLimit
 * @method self withSpotPriceLimit(float $spotPriceLimit)
 * @method Integer getSpotDuration
 * @method self withSpotDuration(Integer $spotDuration)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getSecurityEnhancementStrategy
 * @method self withSecurityEnhancementStrategy(string $securityEnhancementStrategy)
 * @method array getTag
 * @method self withTag(array $tag)
 */
class CreateLaunchTemplateVersion extends Rpc
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
 * @method string getLaunchTemplateName
 * @method self withLaunchTemplateName(string $launchTemplateName)
 * @method string getVersionDescription
 * @method self withVersionDescription(string $versionDescription)
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getImageOwnerAlias
 * @method self withImageOwnerAlias(string $imageOwnerAlias)
 * @method bool getPasswordInherit
 * @method self withPasswordInherit(bool $passwordInherit)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method Integer getInternetMaxBandwidthIn
 * @method self withInternetMaxBandwidthIn(Integer $internetMaxBandwidthIn)
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut(Integer $internetMaxBandwidthOut)
 * @method string getHostName
 * @method self withHostName(string $hostName)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getSystemDiskCategory
 * @method self withSystemDiskCategory(string $systemDiskCategory)
 * @method Integer getSystemDiskSize
 * @method self withSystemDiskSize(Integer $systemDiskSize)
 * @method string getSystemDiskDiskName
 * @method self withSystemDiskDiskName(string $systemDiskDiskName)
 * @method string getSystemDiskDescription
 * @method self withSystemDiskDescription(string $systemDiskDescription)
 * @method Integer getSystemDiskIops
 * @method self withSystemDiskIops(Integer $systemDiskIops)
 * @method array getDataDisk
 * @method self withDataDisk(array $dataDisk)
 * @method string getIoOptimized
 * @method self withIoOptimized(string $ioOptimized)
 * @method array getNetworkInterface
 * @method self withNetworkInterface(array $networkInterface)
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method bool getEnableVmOsConfig
 * @method self withEnableVmOsConfig(bool $enableVmOsConfig)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getKeyPairName
 * @method self withKeyPairName(string $keyPairName)
 * @method string getRamRoleName
 * @method self withRamRoleName(string $ramRoleName)
 * @method string getAutoReleaseTime
 * @method self withAutoReleaseTime(string $autoReleaseTime)
 * @method string getSpotStrategy
 * @method self withSpotStrategy(string $spotStrategy)
 * @method float getSpotPriceLimit
 * @method self withSpotPriceLimit(float $spotPriceLimit)
 * @method Integer getSpotDuration
 * @method self withSpotDuration(Integer $spotDuration)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getTemplateResourceGroupId
 * @method self withTemplateResourceGroupId(string $templateResourceGroupId)
 * @method string getSecurityEnhancementStrategy
 * @method self withSecurityEnhancementStrategy(string $securityEnhancementStrategy)
 * @method array getTag
 * @method self withTag(array $tag)
 */
class CreateLaunchTemplate extends Rpc
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
 * @method array getInstanceId
 * @method self withInstanceId(array $instanceId)
 */
class InstallCloudAssistant extends Rpc
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
 * @method array getInstanceId
 * @method self withInstanceId(array $instanceId)
 */
class DescribeCloudAssistantStatus extends Rpc
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
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId(string $networkInterfaceId)
 * @method array getPrivateIpAddress
 * @method self withPrivateIpAddress(array $privateIpAddress)
 */
class UnassignPrivateIpAddresses extends Rpc
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
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId(string $networkInterfaceId)
 * @method array getPrivateIpAddress
 * @method self withPrivateIpAddress(array $privateIpAddress)
 * @method Integer getSecondaryPrivateIpAddressCount
 * @method self withSecondaryPrivateIpAddressCount(Integer $secondaryPrivateIpAddressCount)
 */
class AssignPrivateIpAddresses extends Rpc
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
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId(string $networkInterfaceId)
 * @method array getNetworkInterfacePermissionId
 * @method self withNetworkInterfacePermissionId(array $networkInterfacePermissionId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeNetworkInterfacePermissions extends Rpc
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
 * @method string getNetworkInterfacePermissionId
 * @method self withNetworkInterfacePermissionId(string $networkInterfacePermissionId)
 * @method bool getForce
 * @method self withForce(bool $force)
 */
class DeleteNetworkInterfacePermission extends Rpc
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
 * @method int getAccountId
 * @method self withAccountId(int $accountId)
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId(string $networkInterfaceId)
 * @method string getPermission
 * @method self withPermission(string $permission)
 */
class CreateNetworkInterfacePermission extends Rpc
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
 * @method bool getWakeUp
 * @method self withWakeUp(bool $wakeUp)
 */
class GetInstanceScreenshot extends Rpc
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
 */
class GetInstanceConsoleOutput extends Rpc
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
 * @method string getEventId
 * @method self withEventId(string $eventId)
 * @method string getNewPlanTime
 * @method self withNewPlanTime(string $newPlanTime)
 * @method string getNewExpireTime
 * @method self withNewExpireTime(string $newExpireTime)
 */
class ModifyUserEventAttribute extends Rpc
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
 * @method string getEventId
 * @method self withEventId(string $eventId)
 * @method string getEventType
 * @method self withEventType(string $eventType)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getPlanTime
 * @method self withPlanTime(string $planTime)
 * @method string getExpireTime
 * @method self withExpireTime(string $expireTime)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeEvents extends Rpc
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
 * @method string getEventId
 * @method self withEventId(string $eventId)
 */
class DescribeEventDetail extends Rpc
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
 * @method string getEventType
 * @method self withEventType(string $eventType)
 * @method string getPlanTime
 * @method self withPlanTime(string $planTime)
 * @method string getExpireTime
 * @method self withExpireTime(string $expireTime)
 */
class CreateUserEvent extends Rpc
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
 * @method string getEventId
 * @method self withEventId(string $eventId)
 */
class CancelUserEvent extends Rpc
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
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method bool getMigrateAcrossZone
 * @method self withMigrateAcrossZone(bool $migrateAcrossZone)
 * @method string getDestinationResource
 * @method self withDestinationResource(string $destinationResource)
 * @method string getOperationType
 * @method self withOperationType(string $operationType)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method Integer getCores
 * @method self withCores(Integer $cores)
 * @method float getMemory
 * @method self withMemory(float $memory)
 */
class DescribeResourcesModification extends Rpc
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
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method string getSpotStrategy
 * @method self withSpotStrategy(string $spotStrategy)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method string getOperationType
 * @method self withOperationType(string $operationType)
 */
class DescribeBandwidthLimitation extends Rpc
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
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method string getSpotStrategy
 * @method self withSpotStrategy(string $spotStrategy)
 * @method string getDestinationResource
 * @method self withDestinationResource(string $destinationResource)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getIoOptimized
 * @method self withIoOptimized(string $ioOptimized)
 * @method string getDedicatedHostId
 * @method self withDedicatedHostId(string $dedicatedHostId)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getSystemDiskCategory
 * @method self withSystemDiskCategory(string $systemDiskCategory)
 * @method string getDataDiskCategory
 * @method self withDataDiskCategory(string $dataDiskCategory)
 * @method string getNetworkCategory
 * @method self withNetworkCategory(string $networkCategory)
 * @method Integer getCores
 * @method self withCores(Integer $cores)
 * @method float getMemory
 * @method self withMemory(float $memory)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getScope
 * @method self withScope(string $scope)
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ReActivateInstances extends Rpc
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
 * @method array getInstanceId
 * @method self withInstanceId(array $instanceId)
 * @method array getEventId
 * @method self withEventId(array $eventId)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getHealthStatus
 * @method self withHealthStatus(string $healthStatus)
 * @method array getInstanceEventType
 * @method self withInstanceEventType(array $instanceEventType)
 * @method string getEventType
 * @method self withEventType(string $eventType)
 * @method string getNotBeforeStart
 * @method self withNotBeforeStart(string $notBeforeStart)
 * @method string getNotBeforeEnd
 * @method self withNotBeforeEnd(string $notBeforeEnd)
 * @method string getEventPublishTimeStart
 * @method self withEventPublishTimeStart(string $eventPublishTimeStart)
 * @method string getEventPublishTimeEnd
 * @method self withEventPublishTimeEnd(string $eventPublishTimeEnd)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeInstancesFullStatus extends Rpc
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
 * @method array getEventId
 * @method self withEventId(array $eventId)
 * @method array getInstanceEventCycleStatus
 * @method self withInstanceEventCycleStatus(array $instanceEventCycleStatus)
 * @method string getEventCycleStatus
 * @method self withEventCycleStatus(string $eventCycleStatus)
 * @method array getInstanceEventType
 * @method self withInstanceEventType(array $instanceEventType)
 * @method string getEventType
 * @method self withEventType(string $eventType)
 * @method string getNotBeforeStart
 * @method self withNotBeforeStart(string $notBeforeStart)
 * @method string getNotBeforeEnd
 * @method self withNotBeforeEnd(string $notBeforeEnd)
 * @method string getEventPublishTimeStart
 * @method self withEventPublishTimeStart(string $eventPublishTimeStart)
 * @method string getEventPublishTimeEnd
 * @method self withEventPublishTimeEnd(string $eventPublishTimeEnd)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeInstanceHistoryEvents extends Rpc
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
 * @method array getDiskId
 * @method self withDiskId(array $diskId)
 * @method array getEventId
 * @method self withEventId(array $eventId)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getHealthStatus
 * @method self withHealthStatus(string $healthStatus)
 * @method string getEventType
 * @method self withEventType(string $eventType)
 * @method string getEventTimeStart
 * @method self withEventTimeStart(string $eventTimeStart)
 * @method string getEventTimeEnd
 * @method self withEventTimeEnd(string $eventTimeEnd)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeDisksFullStatus extends Rpc
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
 * @method string getstatusKey
 * @method self withstatusKey(string $statusKey)
 * @method string getstatusValue
 * @method self withstatusValue(string $statusValue)
 */
class ModifyUserBusinessBehavior extends Rpc
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
 * @method string getstatusKey
 * @method self withstatusKey(string $statusKey)
 */
class DescribeUserBusinessBehavior extends Rpc
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
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method Integer getInternetMaxBandwidthIn
 * @method self withInternetMaxBandwidthIn(Integer $internetMaxBandwidthIn)
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut(Integer $internetMaxBandwidthOut)
 * @method string getHostName
 * @method self withHostName(string $hostName)
 * @method bool getUniqueSuffix
 * @method self withUniqueSuffix(bool $uniqueSuffix)
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method bool getPasswordInherit
 * @method self withPasswordInherit(bool $passwordInherit)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method string getSystemDiskSize
 * @method self withSystemDiskSize(string $systemDiskSize)
 * @method string getSystemDiskCategory
 * @method self withSystemDiskCategory(string $systemDiskCategory)
 * @method string getSystemDiskDiskName
 * @method self withSystemDiskDiskName(string $systemDiskDiskName)
 * @method string getSystemDiskDescription
 * @method self withSystemDiskDescription(string $systemDiskDescription)
 * @method array getDataDisk
 * @method self withDataDisk(array $dataDisk)
 * @method string getIoOptimized
 * @method self withIoOptimized(string $ioOptimized)
 * @method array getNetworkInterface
 * @method self withNetworkInterface(array $networkInterface)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getKeyPairName
 * @method self withKeyPairName(string $keyPairName)
 * @method string getRamRoleName
 * @method self withRamRoleName(string $ramRoleName)
 * @method Integer getAmount
 * @method self withAmount(Integer $amount)
 * @method Integer getMinAmount
 * @method self withMinAmount(Integer $minAmount)
 * @method string getAutoReleaseTime
 * @method self withAutoReleaseTime(string $autoReleaseTime)
 * @method string getSpotStrategy
 * @method self withSpotStrategy(string $spotStrategy)
 * @method float getSpotPriceLimit
 * @method self withSpotPriceLimit(float $spotPriceLimit)
 * @method string getSpotInterruptionBehavior
 * @method self withSpotInterruptionBehavior(string $spotInterruptionBehavior)
 * @method string getSecurityEnhancementStrategy
 * @method self withSecurityEnhancementStrategy(string $securityEnhancementStrategy)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getHpcClusterId
 * @method self withHpcClusterId(string $hpcClusterId)
 * @method bool getDryRun
 * @method self withDryRun(bool $dryRun)
 * @method string getDedicatedHostId
 * @method self withDedicatedHostId(string $dedicatedHostId)
 * @method string getLaunchTemplateId
 * @method self withLaunchTemplateId(string $launchTemplateId)
 * @method string getLaunchTemplateName
 * @method self withLaunchTemplateName(string $launchTemplateName)
 * @method int getLaunchTemplateVersion
 * @method self withLaunchTemplateVersion(int $launchTemplateVersion)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getPeriodUnit
 * @method self withPeriodUnit(string $periodUnit)
 * @method bool getAutoRenew
 * @method self withAutoRenew(bool $autoRenew)
 * @method Integer getAutoRenewPeriod
 * @method self withAutoRenewPeriod(Integer $autoRenewPeriod)
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method string getDeploymentSetId
 * @method self withDeploymentSetId(string $deploymentSetId)
 * @method string getPrivateIpAddress
 * @method self withPrivateIpAddress(string $privateIpAddress)
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

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getAgreementType
 * @method self withAgreementType(string $agreementType)
 */
class SignAgreement extends Rpc
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
 * @method string getAgreementType
 * @method self withAgreementType(string $agreementType)
 */
class CancelAgreement extends Rpc
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
class ConvertNatPublicIpToEip extends Rpc
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
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeRecycleBin extends Rpc
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
 * @method string getresourceIds
 * @method self withresourceIds(string $resourceIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteRecycleBin extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getHpcClusterId
 * @method self withHpcClusterId(string $hpcClusterId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getName
 * @method self withName(string $name)
 */
class ModifyHpcClusterAttribute extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getHpcClusterIds
 * @method self withHpcClusterIds(string $hpcClusterIds)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeHpcClusters extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getHpcClusterId
 * @method self withHpcClusterId(string $hpcClusterId)
 */
class DeleteHpcCluster extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getName
 * @method self withName(string $name)
 */
class CreateHpcCluster extends Rpc
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
class DescribeSnapshotsUsage extends Rpc
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
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getIoOptimized
 * @method self withIoOptimized(string $ioOptimized)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getOSType
 * @method self withOSType(string $oSType)
 * @method Integer getOffset
 * @method self withOffset(Integer $offset)
 */
class DescribeSpotPriceHistory extends Rpc
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
 * @method string getInvokeId
 * @method self withInvokeId(string $invokeId)
 * @method array getInstanceId
 * @method self withInstanceId(array $instanceId)
 */
class StopInvocation extends Rpc
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
 * @method string getCommandId
 * @method self withCommandId(string $commandId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getCommandContent
 * @method self withCommandContent(string $commandContent)
 * @method string getWorkingDir
 * @method self withWorkingDir(string $workingDir)
 * @method int getTimeout
 * @method self withTimeout(int $timeout)
 */
class ModifyCommand extends Rpc
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
 * @method string getCommandId
 * @method self withCommandId(string $commandId)
 * @method bool getTimed
 * @method self withTimed(bool $timed)
 * @method string getFrequency
 * @method self withFrequency(string $frequency)
 * @method array getInstanceId
 * @method self withInstanceId(array $instanceId)
 */
class InvokeCommand extends Rpc
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
 * @method string getInvokeId
 * @method self withInvokeId(string $invokeId)
 * @method string getCommandId
 * @method self withCommandId(string $commandId)
 * @method string getCommandName
 * @method self withCommandName(string $commandName)
 * @method string getCommandType
 * @method self withCommandType(string $commandType)
 * @method bool getTimed
 * @method self withTimed(bool $timed)
 * @method string getInvokeStatus
 * @method self withInvokeStatus(string $invokeStatus)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class DescribeInvocations extends Rpc
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
 * @method string getInvokeId
 * @method self withInvokeId(string $invokeId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getCommandId
 * @method self withCommandId(string $commandId)
 * @method string getInvokeRecordStatus
 * @method self withInvokeRecordStatus(string $invokeRecordStatus)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class DescribeInvocationResults extends Rpc
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
 * @method string getCommandId
 * @method self withCommandId(string $commandId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getType
 * @method self withType(string $type)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class DescribeCommands extends Rpc
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
 * @method string getCommandId
 * @method self withCommandId(string $commandId)
 */
class DeleteCommand extends Rpc
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
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getType
 * @method self withType(string $type)
 * @method string getCommandContent
 * @method self withCommandContent(string $commandContent)
 * @method string getWorkingDir
 * @method self withWorkingDir(string $workingDir)
 * @method int getTimeout
 * @method self withTimeout(int $timeout)
 */
class CreateCommand extends Rpc
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
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getIpProtocol
 * @method self withIpProtocol(string $ipProtocol)
 * @method string getPortRange
 * @method self withPortRange(string $portRange)
 * @method string getDestGroupId
 * @method self withDestGroupId(string $destGroupId)
 * @method int getDestGroupOwnerId
 * @method self withDestGroupOwnerId(int $destGroupOwnerId)
 * @method string getDestGroupOwnerAccount
 * @method self withDestGroupOwnerAccount(string $destGroupOwnerAccount)
 * @method string getDestCidrIp
 * @method self withDestCidrIp(string $destCidrIp)
 * @method string getIpv6DestCidrIp
 * @method self withIpv6DestCidrIp(string $ipv6DestCidrIp)
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp(string $sourceCidrIp)
 * @method string getIpv6SourceCidrIp
 * @method self withIpv6SourceCidrIp(string $ipv6SourceCidrIp)
 * @method string getSourcePortRange
 * @method self withSourcePortRange(string $sourcePortRange)
 * @method string getPolicy
 * @method self withPolicy(string $policy)
 * @method string getPriority
 * @method self withPriority(string $priority)
 * @method string getNicType
 * @method self withNicType(string $nicType)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifySecurityGroupEgressRule extends Rpc
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
 * @method string getDiskIds
 * @method self withDiskIds(string $diskIds)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDiskChargeType
 * @method self withDiskChargeType(string $diskChargeType)
 */
class ModifyDiskChargeType extends Rpc
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
 * @method array getSecurityGroupId
 * @method self withSecurityGroupId(array $securityGroupId)
 * @method string getNetworkInterfaceName
 * @method self withNetworkInterfaceName(string $networkInterfaceName)
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId(string $networkInterfaceId)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyNetworkInterfaceAttribute extends Rpc
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
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId(string $networkInterfaceId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DetachNetworkInterface extends Rpc
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
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getPrimaryIpAddress
 * @method self withPrimaryIpAddress(string $primaryIpAddress)
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getNetworkInterfaceName
 * @method self withNetworkInterfaceName(string $networkInterfaceName)
 * @method string getType
 * @method self withType(string $type)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method array getNetworkInterfaceId
 * @method self withNetworkInterfaceId(array $networkInterfaceId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeNetworkInterfaces extends Rpc
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
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId(string $networkInterfaceId)
 */
class DeleteNetworkInterface extends Rpc
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
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getPrimaryIpAddress
 * @method self withPrimaryIpAddress(string $primaryIpAddress)
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getNetworkInterfaceName
 * @method self withNetworkInterfaceName(string $networkInterfaceName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class CreateNetworkInterface extends Rpc
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
 * @method string getNetworkInterfaceId
 * @method self withNetworkInterfaceId(string $networkInterfaceId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class AttachNetworkInterface extends Rpc
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
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getScene
 * @method self withScene(string $scene)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 */
class DescribeRecommendInstanceType extends Rpc
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
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getOperatorType
 * @method self withOperatorType(string $operatorType)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method bool getMigrateAcrossZone
 * @method self withMigrateAcrossZone(bool $migrateAcrossZone)
 * @method string getSystemDiskCategory
 * @method self withSystemDiskCategory(string $systemDiskCategory)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyPrepayInstanceSpec extends Rpc
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
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getPeriodUnit
 * @method self withPeriodUnit(string $periodUnit)
 * @method bool getIncludeDataDisks
 * @method self withIncludeDataDisks(bool $includeDataDisks)
 * @method bool getDryRun
 * @method self withDryRun(bool $dryRun)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyInstanceChargeType extends Rpc
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
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class JoinResourceGroup extends Rpc
{
    use R;
}

/**
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getInnerAccessPolicy
 * @method self withInnerAccessPolicy(string $innerAccessPolicy)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class ModifySecurityGroupPolicy extends Rpc
{
    use R;
}

/**
 * @method array getSecurityGroupId
 * @method self withSecurityGroupId(array $securityGroupId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class DescribeSecurityGroupReferences extends Rpc
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
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 */
class DetachClassicLinkVpc extends Rpc
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
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getPageNumber
 * @method self withPageNumber(string $pageNumber)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 */
class DescribeClassicLinkInstances extends Rpc
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
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 */
class AttachClassicLinkVpc extends Rpc
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
 * @method string getRamRoleName
 * @method self withRamRoleName(string $ramRoleName)
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 */
class DetachInstanceRamRole extends Rpc
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
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 * @method string getRamRoleName
 * @method self withRamRoleName(string $ramRoleName)
 */
class DescribeInstanceRamRole extends Rpc
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
 * @method string getRamRoleName
 * @method self withRamRoleName(string $ramRoleName)
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 */
class AttachInstanceRamRole extends Rpc
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
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeSnapshotPackage extends Rpc
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
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getIpProtocol
 * @method self withIpProtocol(string $ipProtocol)
 * @method string getPortRange
 * @method self withPortRange(string $portRange)
 * @method string getSourceGroupId
 * @method self withSourceGroupId(string $sourceGroupId)
 * @method int getSourceGroupOwnerId
 * @method self withSourceGroupOwnerId(int $sourceGroupOwnerId)
 * @method string getSourceGroupOwnerAccount
 * @method self withSourceGroupOwnerAccount(string $sourceGroupOwnerAccount)
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp(string $sourceCidrIp)
 * @method string getIpv6SourceCidrIp
 * @method self withIpv6SourceCidrIp(string $ipv6SourceCidrIp)
 * @method string getSourcePortRange
 * @method self withSourcePortRange(string $sourcePortRange)
 * @method string getDestCidrIp
 * @method self withDestCidrIp(string $destCidrIp)
 * @method string getIpv6DestCidrIp
 * @method self withIpv6DestCidrIp(string $ipv6DestCidrIp)
 * @method string getPolicy
 * @method self withPolicy(string $policy)
 * @method string getPriority
 * @method self withPriority(string $priority)
 * @method string getNicType
 * @method self withNicType(string $nicType)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifySecurityGroupRule extends Rpc
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
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeSnapshotMonitorData extends Rpc
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
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getPriceUnit
 * @method self withPriceUnit(string $priceUnit)
 */
class DescribeRenewalPrice extends Rpc
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
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getIoOptimized
 * @method self withIoOptimized(string $ioOptimized)
 * @method string getInstanceNetworkType
 * @method self withInstanceNetworkType(string $instanceNetworkType)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut(Integer $internetMaxBandwidthOut)
 * @method string getSystemDiskCategory
 * @method self withSystemDiskCategory(string $systemDiskCategory)
 * @method Integer getSystemDiskSize
 * @method self withSystemDiskSize(Integer $systemDiskSize)
 * @method Integer getDataDisk1Size
 * @method self withDataDisk1Size(Integer $dataDisk1Size)
 * @method string getDataDisk1Category
 * @method self withDataDisk1Category(string $dataDisk1Category)
 * @method Integer getDataDisk2Size
 * @method self withDataDisk2Size(Integer $dataDisk2Size)
 * @method string getDataDisk2Category
 * @method self withDataDisk2Category(string $dataDisk2Category)
 * @method Integer getDataDisk3Size
 * @method self withDataDisk3Size(Integer $dataDisk3Size)
 * @method string getDataDisk3Category
 * @method self withDataDisk3Category(string $dataDisk3Category)
 * @method Integer getDataDisk4Size
 * @method self withDataDisk4Size(Integer $dataDisk4Size)
 * @method string getDataDisk4Category
 * @method self withDataDisk4Category(string $dataDisk4Category)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getPriceUnit
 * @method self withPriceUnit(string $priceUnit)
 * @method Integer getAmount
 * @method self withAmount(Integer $amount)
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
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getIpAddress
 * @method self withIpAddress(string $ipAddress)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AddIpRange extends Rpc
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
 * @method string getDeploymentSetId
 * @method self withDeploymentSetId(string $deploymentSetId)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getStrategy
 * @method self withStrategy(string $strategy)
 * @method string getDeploymentSetName
 * @method self withDeploymentSetName(string $deploymentSetName)
 * @method string getGranularity
 * @method self withGranularity(string $granularity)
 * @method string getDomain
 * @method self withDomain(string $domain)
 */
class DescribeDeploymentSetTopology extends Rpc
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
 * @method string getDeploymentSetId
 * @method self withDeploymentSetId(string $deploymentSetId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getDeploymentSetName
 * @method self withDeploymentSetName(string $deploymentSetName)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyDeploymentSetAttribute extends Rpc
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
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDeploymentSetIds
 * @method self withDeploymentSetIds(string $deploymentSetIds)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getStrategy
 * @method self withStrategy(string $strategy)
 * @method string getDeploymentSetName
 * @method self withDeploymentSetName(string $deploymentSetName)
 * @method string getGranularity
 * @method self withGranularity(string $granularity)
 * @method string getDomain
 * @method self withDomain(string $domain)
 */
class DescribeDeploymentSets extends Rpc
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
 * @method string getDeploymentSetId
 * @method self withDeploymentSetId(string $deploymentSetId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteDeploymentSet extends Rpc
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
 * @method string getOnUnableToRedeployFailedInstance
 * @method self withOnUnableToRedeployFailedInstance(string $onUnableToRedeployFailedInstance)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getDeploymentSetName
 * @method self withDeploymentSetName(string $deploymentSetName)
 * @method string getDomain
 * @method self withDomain(string $domain)
 * @method string getGranularity
 * @method self withGranularity(string $granularity)
 * @method string getStrategy
 * @method self withStrategy(string $strategy)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateDeploymentSet extends Rpc
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
 * @method string getKeyPairName
 * @method self withKeyPairName(string $keyPairName)
 * @method string getPublicKeyBody
 * @method self withPublicKeyBody(string $publicKeyBody)
 */
class ImportKeyPair extends Rpc
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
 * @method string getKeyPairName
 * @method self withKeyPairName(string $keyPairName)
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 */
class DetachKeyPair extends Rpc
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
 * @method string getKeyPairName
 * @method self withKeyPairName(string $keyPairName)
 * @method string getKeyPairFingerPrint
 * @method self withKeyPairFingerPrint(string $keyPairFingerPrint)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class DescribeKeyPairs extends Rpc
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
 * @method string getKeyPairNames
 * @method self withKeyPairNames(string $keyPairNames)
 */
class DeleteKeyPairs extends Rpc
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
 * @method string getKeyPairName
 * @method self withKeyPairName(string $keyPairName)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class CreateKeyPair extends Rpc
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
 * @method string getKeyPairName
 * @method self withKeyPairName(string $keyPairName)
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 */
class AttachKeyPair extends Rpc
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
 * @method string getVolumeId
 * @method self withVolumeId(string $volumeId)
 * @method string getSnapshotId
 * @method self withSnapshotId(string $snapshotId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class RollbackVolume extends Rpc
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
 * @method string getVolumeId
 * @method self withVolumeId(string $volumeId)
 * @method Integer getNewSize
 * @method self withNewSize(Integer $newSize)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ResizeVolume extends Rpc
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
 * @method string getVolumeId
 * @method self withVolumeId(string $volumeId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getPassword
 * @method self withPassword(string $password)
 */
class ReInitVolume extends Rpc
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
 * @method string getVolumeId
 * @method self withVolumeId(string $volumeId)
 * @method string getVolumeName
 * @method self withVolumeName(string $volumeName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyVolumeAttribute extends Rpc
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
 * @method string getVolumeId
 * @method self withVolumeId(string $volumeId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DetachVolume extends Rpc
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
 * @method string getVolumeIds
 * @method self withVolumeIds(string $volumeIds)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getCategory
 * @method self withCategory(string $category)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getSnapshotId
 * @method self withSnapshotId(string $snapshotId)
 * @method string getAutoSnapshotPolicyId
 * @method self withAutoSnapshotPolicyId(string $autoSnapshotPolicyId)
 * @method bool getEnableAutomatedSnapshotPolicy
 * @method self withEnableAutomatedSnapshotPolicy(bool $enableAutomatedSnapshotPolicy)
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
 * @method string getKMSKeyId
 * @method self withKMSKeyId(string $kMSKeyId)
 * @method bool getEncrypted
 * @method self withEncrypted(bool $encrypted)
 */
class DescribeVolumes extends Rpc
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
 * @method string getVolumeId
 * @method self withVolumeId(string $volumeId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteVolume extends Rpc
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
class CreateVolume extends Rpc
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
 * @method string getVolumeId
 * @method self withVolumeId(string $volumeId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AttachVolume extends Rpc
{
    use R;
}

class RollbackVolumeGatedLaunch extends Rpc
{
    use R;
}

class ResizeVolumeGatedLaunch extends Rpc
{
    use R;
}

class ReInitVolumeGatedLaunch extends Rpc
{
    use R;
}

class ModifyVolumeAttributeGatedLaunch extends Rpc
{
    use R;
}

class DetachVolumeGatedLaunch extends Rpc
{
    use R;
}

class DescribeVolumesGatedLaunch extends Rpc
{
    use R;
}

class DeleteVolumeGatedLaunch extends Rpc
{
    use R;
}

class CreateVolumeGatedLaunch extends Rpc
{
    use R;
}

class AttachVolumeGatedLaunch extends Rpc
{
    use R;
}

class DescribeSnapshotLinksGatedLaunch extends Rpc
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
 * @method Integer getDuration
 * @method self withDuration(Integer $duration)
 * @method bool getAutoRenew
 * @method self withAutoRenew(bool $autoRenew)
 * @method string getRenewalStatus
 * @method self withRenewalStatus(string $renewalStatus)
 * @method string getPeriodUnit
 * @method self withPeriodUnit(string $periodUnit)
 */
class ModifyInstanceAutoRenewAttribute extends Rpc
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
 * @method string getRenewalStatus
 * @method self withRenewalStatus(string $renewalStatus)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getPageNumber
 * @method self withPageNumber(string $pageNumber)
 */
class DescribeInstanceAutoRenewAttribute extends Rpc
{
    use R;
}

class ModifyInstanceAutoRenewAttributeGatedLaunch extends Rpc
{
    use R;
}

class DescribeInstanceAutoRenewAttributeGatedLaunch extends Rpc
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
 * @method string getDiskIds
 * @method self withDiskIds(string $diskIds)
 * @method string getSnapshotLinkIds
 * @method self withSnapshotLinkIds(string $snapshotLinkIds)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeSnapshotLinks extends Rpc
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
class ModifyInstanceAutoReleaseTime extends Rpc
{
    use R;
}

class UnbindIpRangeGatedLaunch extends Rpc
{
    use R;
}

class StopInstanceGatedLaunch extends Rpc
{
    use R;
}

class StartInstanceGatedLaunch extends Rpc
{
    use R;
}

class RevokeSecurityGroupEgressGatedLaunch extends Rpc
{
    use R;
}

class RevokeSecurityGroupGatedLaunch extends Rpc
{
    use R;
}

class ResizeDiskGatedLaunch extends Rpc
{
    use R;
}

class ResetDiskGatedLaunch extends Rpc
{
    use R;
}

class ReplaceSystemDiskGatedLaunch extends Rpc
{
    use R;
}

class RenewInstanceGatedLaunch extends Rpc
{
    use R;
}

class RemoveTagsGatedLaunch extends Rpc
{
    use R;
}

class ReleasePublicIpAddressGatedLaunch extends Rpc
{
    use R;
}

class ReInitDiskGatedLaunch extends Rpc
{
    use R;
}

class RebootInstanceGatedLaunch extends Rpc
{
    use R;
}

class ModifySnapshotAttributeGatedLaunch extends Rpc
{
    use R;
}

class ModifySecurityGroupAttributeGatedLaunch extends Rpc
{
    use R;
}

class ModifyIntranetBandwidthKbGatedLaunch extends Rpc
{
    use R;
}

class ModifyInstanceVpcAttributeGatedLaunch extends Rpc
{
    use R;
}

class ModifyInstanceVncPasswdGatedLaunch extends Rpc
{
    use R;
}

class ModifyInstanceSpecGatedLaunch extends Rpc
{
    use R;
}

class ModifyInstanceNetworkSpecGatedLaunch extends Rpc
{
    use R;
}

class ModifyInstanceAttributeGatedLaunch extends Rpc
{
    use R;
}

class ModifyImageSharePermissionGatedLaunch extends Rpc
{
    use R;
}

class ModifyImageShareGroupPermissionGatedLaunch extends Rpc
{
    use R;
}

class ModifyImageAttributeGatedLaunch extends Rpc
{
    use R;
}

class ModifyDiskAttributeGatedLaunch extends Rpc
{
    use R;
}

class ModifyAutoSnapshotPolicyExGatedLaunch extends Rpc
{
    use R;
}

class ModifyAutoSnapshotPolicyGatedLaunch extends Rpc
{
    use R;
}

class LeaveSecurityGroupGatedLaunch extends Rpc
{
    use R;
}

class JoinSecurityGroupGatedLaunch extends Rpc
{
    use R;
}

class ImportImageGatedLaunch extends Rpc
{
    use R;
}

class ExportImageGatedLaunch extends Rpc
{
    use R;
}

class DetachDiskGatedLaunch extends Rpc
{
    use R;
}

class DescribeZonesGatedLaunch extends Rpc
{
    use R;
}

class DescribeUserDataGatedLaunch extends Rpc
{
    use R;
}

class DescribeTasksGatedLaunch extends Rpc
{
    use R;
}

class DescribeTaskAttributeGatedLaunch extends Rpc
{
    use R;
}

class DescribeTagsGatedLaunch extends Rpc
{
    use R;
}

class DescribeTagKeysGatedLaunch extends Rpc
{
    use R;
}

class DescribeSnapshotsGatedLaunch extends Rpc
{
    use R;
}

class DescribeSecurityGroupsGatedLaunch extends Rpc
{
    use R;
}

class DescribeSecurityGroupAttributeGatedLaunch extends Rpc
{
    use R;
}

class DescribeResourceByTagsGatedLaunch extends Rpc
{
    use R;
}

class DescribeRegionsGatedLaunch extends Rpc
{
    use R;
}

class DescribeLimitationGatedLaunch extends Rpc
{
    use R;
}

class DescribeIpRangesGatedLaunch extends Rpc
{
    use R;
}

class DescribeIntranetAttributeKbGatedLaunch extends Rpc
{
    use R;
}

class DescribeInstanceVncUrlGatedLaunch extends Rpc
{
    use R;
}

class DescribeInstanceVncPasswdGatedLaunch extends Rpc
{
    use R;
}

class DescribeInstanceTypesGatedLaunch extends Rpc
{
    use R;
}

class DescribeInstanceTypeFamiliesGatedLaunch extends Rpc
{
    use R;
}

class DescribeInstanceStatusGatedLaunch extends Rpc
{
    use R;
}

class DescribeInstancesGatedLaunch extends Rpc
{
    use R;
}

class DescribeInstancePhysicalAttributeGatedLaunch extends Rpc
{
    use R;
}

class DescribeInstanceMonitorDataGatedLaunch extends Rpc
{
    use R;
}

class DescribeInstanceAttributeGatedLaunch extends Rpc
{
    use R;
}

class DescribeImageSupportInstanceTypesGatedLaunch extends Rpc
{
    use R;
}

class DescribeImageSharePermissionGatedLaunch extends Rpc
{
    use R;
}

class DescribeImagesGatedLaunch extends Rpc
{
    use R;
}

class DescribeDisksGatedLaunch extends Rpc
{
    use R;
}

class DescribeDiskMonitorDataGatedLaunch extends Rpc
{
    use R;
}

class DescribeClustersGatedLaunch extends Rpc
{
    use R;
}

class DescribeAutoSnapshotPolicyExGatedLaunch extends Rpc
{
    use R;
}

class DeleteSnapshotGatedLaunch extends Rpc
{
    use R;
}

class DeleteSecurityGroupGatedLaunch extends Rpc
{
    use R;
}

class DeleteInstanceGatedLaunch extends Rpc
{
    use R;
}

class DeleteImageGatedLaunch extends Rpc
{
    use R;
}

class DeleteDiskGatedLaunch extends Rpc
{
    use R;
}

class DeleteAutoSnapshotPolicyGatedLaunch extends Rpc
{
    use R;
}

class CreateSnapshotGatedLaunch extends Rpc
{
    use R;
}

class CreateSecurityGroupGatedLaunch extends Rpc
{
    use R;
}

class CreateInstanceGatedLaunch extends Rpc
{
    use R;
}

class CreateImageGatedLaunch extends Rpc
{
    use R;
}

class CreateDiskGatedLaunch extends Rpc
{
    use R;
}

class CreateAutoSnapshotPolicyGatedLaunch extends Rpc
{
    use R;
}

class CopyImageGatedLaunch extends Rpc
{
    use R;
}

class CheckDiskEnableAutoSnapshotValidationGatedLaunch extends Rpc
{
    use R;
}

class CheckAutoSnapshotPolicyGatedLaunch extends Rpc
{
    use R;
}

class CancelTaskGatedLaunch extends Rpc
{
    use R;
}

class CancelCopyImageGatedLaunch extends Rpc
{
    use R;
}

class CancelAutoSnapshotPolicyGatedLaunch extends Rpc
{
    use R;
}

class BindIpRangeGatedLaunch extends Rpc
{
    use R;
}

class AuthorizeSecurityGroupEgressGatedLaunch extends Rpc
{
    use R;
}

class AuthorizeSecurityGroupGatedLaunch extends Rpc
{
    use R;
}

class AttachDiskGatedLaunch extends Rpc
{
    use R;
}

class ApplyAutoSnapshotPolicyGatedLaunch extends Rpc
{
    use R;
}

class AllocatePublicIpAddressGatedLaunch extends Rpc
{
    use R;
}

class AddTagsGatedLaunch extends Rpc
{
    use R;
}

class DescribeAutoSnapshotPolicyGatedLaunch extends Rpc
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
 * @method string getAllocationId
 * @method self withAllocationId(string $allocationId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeNewProjectEipMonitorData extends Rpc
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
class DescribeUserData extends Rpc
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId(string $bandwidthPackageId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method array getRemovedIpAddresses
 * @method self withRemovedIpAddresses(array $removedIpAddresses)
 */
class RemoveBandwidthPackageIps extends Rpc
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
 * @method string getForwardTableId
 * @method self withForwardTableId(string $forwardTableId)
 * @method string getForwardEntryId
 * @method self withForwardEntryId(string $forwardEntryId)
 * @method string getExternalIp
 * @method self withExternalIp(string $externalIp)
 * @method string getExternalPort
 * @method self withExternalPort(string $externalPort)
 * @method string getInternalIp
 * @method self withInternalIp(string $internalIp)
 * @method string getInternalPort
 * @method self withInternalPort(string $internalPort)
 * @method string getIpProtocol
 * @method self withIpProtocol(string $ipProtocol)
 */
class ModifyForwardEntry extends Rpc
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId(string $bandwidthPackageId)
 * @method string getBandwidth
 * @method self withBandwidth(string $bandwidth)
 */
class ModifyBandwidthPackageSpec extends Rpc
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
 * @method string getNatGatewayId
 * @method self withNatGatewayId(string $natGatewayId)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeNatGateways extends Rpc
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
 * @method string getForwardTableId
 * @method self withForwardTableId(string $forwardTableId)
 * @method string getForwardEntryId
 * @method self withForwardEntryId(string $forwardEntryId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeForwardTableEntries extends Rpc
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId(string $bandwidthPackageId)
 * @method string getNatGatewayId
 * @method self withNatGatewayId(string $natGatewayId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeBandwidthPackages extends Rpc
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
 * @method string getNatGatewayId
 * @method self withNatGatewayId(string $natGatewayId)
 */
class DeleteNatGateway extends Rpc
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
 * @method string getForwardTableId
 * @method self withForwardTableId(string $forwardTableId)
 * @method string getForwardEntryId
 * @method self withForwardEntryId(string $forwardEntryId)
 */
class DeleteForwardEntry extends Rpc
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId(string $bandwidthPackageId)
 */
class DeleteBandwidthPackage extends Rpc
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
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method array getBandwidthPackage
 * @method self withBandwidthPackage(array $bandwidthPackage)
 */
class CreateNatGateway extends Rpc
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
 * @method string getForwardTableId
 * @method self withForwardTableId(string $forwardTableId)
 * @method string getExternalIp
 * @method self withExternalIp(string $externalIp)
 * @method string getExternalPort
 * @method self withExternalPort(string $externalPort)
 * @method string getInternalIp
 * @method self withInternalIp(string $internalIp)
 * @method string getInternalPort
 * @method self withInternalPort(string $internalPort)
 * @method string getIpProtocol
 * @method self withIpProtocol(string $ipProtocol)
 */
class CreateForwardEntry extends Rpc
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
 * @method string getBandwidthPackageId
 * @method self withBandwidthPackageId(string $bandwidthPackageId)
 * @method string getIpCount
 * @method self withIpCount(string $ipCount)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class AddBandwidthPackageIps extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class EipFillProduct extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class EipNotifyPaid extends Rpc
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class EipFillParams extends Rpc
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
 * @method string getregionId
 * @method self withregionId(string $regionId)
 * @method string getautoSnapshotPolicyId
 * @method self withautoSnapshotPolicyId(string $autoSnapshotPolicyId)
 * @method string getautoSnapshotPolicyName
 * @method self withautoSnapshotPolicyName(string $autoSnapshotPolicyName)
 * @method string gettimePoints
 * @method self withtimePoints(string $timePoints)
 * @method string getrepeatWeekdays
 * @method self withrepeatWeekdays(string $repeatWeekdays)
 * @method Integer getretentionDays
 * @method self withretentionDays(Integer $retentionDays)
 */
class ModifyAutoSnapshotPolicyEx extends Rpc
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
 * @method string getAutoSnapshotPolicyId
 * @method self withAutoSnapshotPolicyId(string $autoSnapshotPolicyId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeAutoSnapshotPolicyEx extends Rpc
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
 * @method string getregionId
 * @method self withregionId(string $regionId)
 * @method string getautoSnapshotPolicyId
 * @method self withautoSnapshotPolicyId(string $autoSnapshotPolicyId)
 */
class DeleteAutoSnapshotPolicy extends Rpc
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
 * @method string getregionId
 * @method self withregionId(string $regionId)
 * @method string getautoSnapshotPolicyName
 * @method self withautoSnapshotPolicyName(string $autoSnapshotPolicyName)
 * @method string gettimePoints
 * @method self withtimePoints(string $timePoints)
 * @method string getrepeatWeekdays
 * @method self withrepeatWeekdays(string $repeatWeekdays)
 * @method Integer getretentionDays
 * @method self withretentionDays(Integer $retentionDays)
 */
class CreateAutoSnapshotPolicy extends Rpc
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
 * @method string getregionId
 * @method self withregionId(string $regionId)
 * @method string getdiskIds
 * @method self withdiskIds(string $diskIds)
 */
class CancelAutoSnapshotPolicy extends Rpc
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
 * @method string getregionId
 * @method self withregionId(string $regionId)
 * @method string getautoSnapshotPolicyId
 * @method self withautoSnapshotPolicyId(string $autoSnapshotPolicyId)
 * @method string getdiskIds
 * @method self withdiskIds(string $diskIds)
 */
class ApplyAutoSnapshotPolicy extends Rpc
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
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getActionType
 * @method self withActionType(string $actionType)
 * @method array getFilter
 * @method self withFilter(array $filter)
 */
class DescribeImageSupportInstanceTypes extends Rpc
{
    use R;
}

/**
 * @method string getVbrId
 * @method self withVbrId(string $vbrId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class TerminateVirtualBorderRouter extends Rpc
{
    use R;
}

/**
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId(string $physicalConnectionId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class TerminatePhysicalConnection extends Rpc
{
    use R;
}

/**
 * @method string getVbrId
 * @method self withVbrId(string $vbrId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class RecoverVirtualBorderRouter extends Rpc
{
    use R;
}

/**
 * @method string getVbrId
 * @method self withVbrId(string $vbrId)
 * @method Integer getVlanId
 * @method self withVlanId(Integer $vlanId)
 * @method string getCircuitCode
 * @method self withCircuitCode(string $circuitCode)
 * @method string getLocalGatewayIp
 * @method self withLocalGatewayIp(string $localGatewayIp)
 * @method string getPeerGatewayIp
 * @method self withPeerGatewayIp(string $peerGatewayIp)
 * @method string getPeeringSubnetMask
 * @method self withPeeringSubnetMask(string $peeringSubnetMask)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getName
 * @method self withName(string $name)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class ModifyVirtualBorderRouterAttribute extends Rpc
{
    use R;
}

/**
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId(string $physicalConnectionId)
 * @method string getLineOperator
 * @method self withLineOperator(string $lineOperator)
 * @method Integer getbandwidth
 * @method self withbandwidth(Integer $bandwidth)
 * @method string getPeerLocation
 * @method self withPeerLocation(string $peerLocation)
 * @method string getPortType
 * @method self withPortType(string $portType)
 * @method string getRedundantPhysicalConnectionId
 * @method self withRedundantPhysicalConnectionId(string $redundantPhysicalConnectionId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getName
 * @method self withName(string $name)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 * @method string getCircuitCode
 * @method self withCircuitCode(string $circuitCode)
 */
class ModifyPhysicalConnectionAttribute extends Rpc
{
    use R;
}

/**
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId(string $physicalConnectionId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class EnablePhysicalConnection extends Rpc
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
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId(string $physicalConnectionId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeVirtualBorderRoutersForPhysicalConnection extends Rpc
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
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method array getFilter
 * @method self withFilter(array $filter)
 */
class DescribeVirtualBorderRouters extends Rpc
{
    use R;
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method array getFilter
 * @method self withFilter(array $filter)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class DescribePhysicalConnections extends Rpc
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
 * @method string getType
 * @method self withType(string $type)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeAccessPoints extends Rpc
{
    use R;
}

/**
 * @method string getVbrId
 * @method self withVbrId(string $vbrId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class DeleteVirtualBorderRouter extends Rpc
{
    use R;
}

/**
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId(string $physicalConnectionId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeletePhysicalConnection extends Rpc
{
    use R;
}

/**
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId(string $physicalConnectionId)
 * @method int getVbrOwnerId
 * @method self withVbrOwnerId(int $vbrOwnerId)
 * @method Integer getVlanId
 * @method self withVlanId(Integer $vlanId)
 * @method string getCircuitCode
 * @method self withCircuitCode(string $circuitCode)
 * @method string getLocalGatewayIp
 * @method self withLocalGatewayIp(string $localGatewayIp)
 * @method string getPeerGatewayIp
 * @method self withPeerGatewayIp(string $peerGatewayIp)
 * @method string getPeeringSubnetMask
 * @method self withPeeringSubnetMask(string $peeringSubnetMask)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getName
 * @method self withName(string $name)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class CreateVirtualBorderRouter extends Rpc
{
    use R;
}

/**
 * @method string getAccessPointId
 * @method self withAccessPointId(string $accessPointId)
 * @method string getType
 * @method self withType(string $type)
 * @method string getLineOperator
 * @method self withLineOperator(string $lineOperator)
 * @method Integer getbandwidth
 * @method self withbandwidth(Integer $bandwidth)
 * @method string getPeerLocation
 * @method self withPeerLocation(string $peerLocation)
 * @method string getPortType
 * @method self withPortType(string $portType)
 * @method string getRedundantPhysicalConnectionId
 * @method self withRedundantPhysicalConnectionId(string $redundantPhysicalConnectionId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getName
 * @method self withName(string $name)
 * @method string getCircuitCode
 * @method self withCircuitCode(string $circuitCode)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class CreatePhysicalConnection extends Rpc
{
    use R;
}

/**
 * @method string getPhysicalConnectionId
 * @method self withPhysicalConnectionId(string $physicalConnectionId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class CancelPhysicalConnection extends Rpc
{
    use R;
}

/**
 * @method array getDiskDeviceMapping
 * @method self withDiskDeviceMapping(array $diskDeviceMapping)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getImageName
 * @method self withImageName(string $imageName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getArchitecture
 * @method self withArchitecture(string $architecture)
 * @method string getOSType
 * @method self withOSType(string $oSType)
 * @method string getPlatform
 * @method self withPlatform(string $platform)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 */
class ImportImage extends Rpc
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
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getOSSBucket
 * @method self withOSSBucket(string $oSSBucket)
 * @method string getOSSPrefix
 * @method self withOSSPrefix(string $oSSPrefix)
 * @method string getImageFormat
 * @method self withImageFormat(string $imageFormat)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 */
class ExportImage extends Rpc
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
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getTaskIds
 * @method self withTaskIds(string $taskIds)
 * @method string getTaskAction
 * @method self withTaskAction(string $taskAction)
 * @method string getTaskStatus
 * @method self withTaskStatus(string $taskStatus)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeTasks extends Rpc
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
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class DescribeTaskAttribute extends Rpc
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
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class CancelTask extends Rpc
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
 * @method string getGeneration
 * @method self withGeneration(string $generation)
 */
class DescribeInstanceTypeFamilies extends Rpc
{
    use R;
}

/**
 * @method string getRouterInterfaceId
 * @method self withRouterInterfaceId(string $routerInterfaceId)
 * @method string getSpec
 * @method self withSpec(string $spec)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class ModifyRouterInterfaceSpec extends Rpc
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
 * @method string getRouterInterfaceId
 * @method self withRouterInterfaceId(string $routerInterfaceId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getOppositeInterfaceId
 * @method self withOppositeInterfaceId(string $oppositeInterfaceId)
 * @method string getOppositeRouterId
 * @method self withOppositeRouterId(string $oppositeRouterId)
 * @method string getOppositeRouterType
 * @method self withOppositeRouterType(string $oppositeRouterType)
 * @method int getOppositeInterfaceOwnerId
 * @method self withOppositeInterfaceOwnerId(int $oppositeInterfaceOwnerId)
 * @method string getHealthCheckSourceIp
 * @method self withHealthCheckSourceIp(string $healthCheckSourceIp)
 * @method string getHealthCheckTargetIp
 * @method self withHealthCheckTargetIp(string $healthCheckTargetIp)
 */
class ModifyRouterInterfaceAttribute extends Rpc
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
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method array getFilter
 * @method self withFilter(array $filter)
 */
class DescribeRouterInterfaces extends Rpc
{
    use R;
}

/**
 * @method string getRouterInterfaceId
 * @method self withRouterInterfaceId(string $routerInterfaceId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class DeleteRouterInterface extends Rpc
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
 * @method string getRouterInterfaceId
 * @method self withRouterInterfaceId(string $routerInterfaceId)
 */
class DeactivateRouterInterface extends Rpc
{
    use R;
}

/**
 * @method string getRole
 * @method self withRole(string $role)
 * @method string getOppositeRegionId
 * @method self withOppositeRegionId(string $oppositeRegionId)
 * @method string getSpec
 * @method self withSpec(string $spec)
 * @method string getRouterType
 * @method self withRouterType(string $routerType)
 * @method string getRouterId
 * @method self withRouterId(string $routerId)
 * @method string getOppositeInterfaceId
 * @method self withOppositeInterfaceId(string $oppositeInterfaceId)
 * @method string getOppositeRouterId
 * @method self withOppositeRouterId(string $oppositeRouterId)
 * @method string getOppositeRouterType
 * @method self withOppositeRouterType(string $oppositeRouterType)
 * @method string getOppositeInterfaceOwnerId
 * @method self withOppositeInterfaceOwnerId(string $oppositeInterfaceOwnerId)
 * @method string getHealthCheckSourceIp
 * @method self withHealthCheckSourceIp(string $healthCheckSourceIp)
 * @method string getHealthCheckTargetIp
 * @method self withHealthCheckTargetIp(string $healthCheckTargetIp)
 * @method string getAccessPointId
 * @method self withAccessPointId(string $accessPointId)
 * @method string getOppositeAccessPointId
 * @method self withOppositeAccessPointId(string $oppositeAccessPointId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getPricingCycle
 * @method self withPricingCycle(string $pricingCycle)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class CreateRouterInterface extends Rpc
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
 * @method string getRouterInterfaceId
 * @method self withRouterInterfaceId(string $routerInterfaceId)
 */
class ConnectRouterInterface extends Rpc
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
 * @method string getRouterInterfaceId
 * @method self withRouterInterfaceId(string $routerInterfaceId)
 */
class ActivateRouterInterface extends Rpc
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
 * @method string getHaVipId
 * @method self withHaVipId(string $haVipId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getForce
 * @method self withForce(string $force)
 */
class UnassociateHaVip extends Rpc
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
 * @method string getHaVipId
 * @method self withHaVipId(string $haVipId)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyHaVipAttribute extends Rpc
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
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method array getFilter
 * @method self withFilter(array $filter)
 */
class DescribeHaVips extends Rpc
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
 * @method string getHaVipId
 * @method self withHaVipId(string $haVipId)
 */
class DeleteHaVip extends Rpc
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
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getIpAddress
 * @method self withIpAddress(string $ipAddress)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class CreateHaVip extends Rpc
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
 * @method string getHaVipId
 * @method self withHaVipId(string $haVipId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class AssociateHaVip extends Rpc
{
    use R;
}

/**
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
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
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getPeriodUnit
 * @method self withPeriodUnit(string $periodUnit)
 */
class RenewInstance extends Rpc
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
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 */
class DescribeTagKeys extends Rpc
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
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method array getTag
 * @method self withTag(array $tag)
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
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method array getTag
 * @method self withTag(array $tag)
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
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method array getTag
 * @method self withTag(array $tag)
 */
class DescribeResourceByTags extends Rpc
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
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method array getTag
 * @method self withTag(array $tag)
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getIpAddress
 * @method self withIpAddress(string $ipAddress)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UnbindIpRange extends Rpc
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
 * @method string getAllocationId
 * @method self withAllocationId(string $allocationId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 */
class UnassociateEipAddress extends Rpc
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
 * @method bool getConfirmStop
 * @method self withConfirmStop(bool $confirmStop)
 * @method bool getForceStop
 * @method self withForceStop(bool $forceStop)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getStoppedMode
 * @method self withStoppedMode(string $stoppedMode)
 * @method bool getDryRun
 * @method self withDryRun(bool $dryRun)
 */
class StopInstance extends Rpc
{
    use R;
}

/**
 * @method string getSourceRegionId
 * @method self withSourceRegionId(string $sourceRegionId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method bool getInitLocalDisk
 * @method self withInitLocalDisk(bool $initLocalDisk)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method bool getDryRun
 * @method self withDryRun(bool $dryRun)
 */
class StartInstance extends Rpc
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
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getIpProtocol
 * @method self withIpProtocol(string $ipProtocol)
 * @method string getPortRange
 * @method self withPortRange(string $portRange)
 * @method string getDestGroupId
 * @method self withDestGroupId(string $destGroupId)
 * @method int getDestGroupOwnerId
 * @method self withDestGroupOwnerId(int $destGroupOwnerId)
 * @method string getDestGroupOwnerAccount
 * @method self withDestGroupOwnerAccount(string $destGroupOwnerAccount)
 * @method string getDestCidrIp
 * @method self withDestCidrIp(string $destCidrIp)
 * @method string getIpv6DestCidrIp
 * @method self withIpv6DestCidrIp(string $ipv6DestCidrIp)
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp(string $sourceCidrIp)
 * @method string getIpv6SourceCidrIp
 * @method self withIpv6SourceCidrIp(string $ipv6SourceCidrIp)
 * @method string getSourcePortRange
 * @method self withSourcePortRange(string $sourcePortRange)
 * @method string getPolicy
 * @method self withPolicy(string $policy)
 * @method string getPriority
 * @method self withPriority(string $priority)
 * @method string getNicType
 * @method self withNicType(string $nicType)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class RevokeSecurityGroupEgress extends Rpc
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
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getDestCidrIp
 * @method self withDestCidrIp(string $destCidrIp)
 * @method string getIpv6DestCidrIp
 * @method self withIpv6DestCidrIp(string $ipv6DestCidrIp)
 * @method string getPortRange
 * @method self withPortRange(string $portRange)
 * @method string getIpProtocol
 * @method self withIpProtocol(string $ipProtocol)
 * @method string getSourceGroupId
 * @method self withSourceGroupId(string $sourceGroupId)
 * @method int getSourceGroupOwnerId
 * @method self withSourceGroupOwnerId(int $sourceGroupOwnerId)
 * @method string getSourceGroupOwnerAccount
 * @method self withSourceGroupOwnerAccount(string $sourceGroupOwnerAccount)
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp(string $sourceCidrIp)
 * @method string getIpv6SourceCidrIp
 * @method self withIpv6SourceCidrIp(string $ipv6SourceCidrIp)
 * @method string getSourcePortRange
 * @method self withSourcePortRange(string $sourcePortRange)
 * @method string getPolicy
 * @method self withPolicy(string $policy)
 * @method string getPriority
 * @method self withPriority(string $priority)
 * @method string getNicType
 * @method self withNicType(string $nicType)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class RevokeSecurityGroup extends Rpc
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
 * @method string getDiskId
 * @method self withDiskId(string $diskId)
 * @method string getType
 * @method self withType(string $type)
 * @method Integer getNewSize
 * @method self withNewSize(Integer $newSize)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ResizeDisk extends Rpc
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
 * @method string getDiskId
 * @method self withDiskId(string $diskId)
 * @method string getSnapshotId
 * @method self withSnapshotId(string $snapshotId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ResetDisk extends Rpc
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
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method Integer getSystemDiskSize
 * @method self withSystemDiskSize(Integer $systemDiskSize)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method bool getUseAdditionalService
 * @method self withUseAdditionalService(bool $useAdditionalService)
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method bool getPasswordInherit
 * @method self withPasswordInherit(bool $passwordInherit)
 * @method string getKeyPairName
 * @method self withKeyPairName(string $keyPairName)
 * @method string getDiskId
 * @method self withDiskId(string $diskId)
 * @method string getPlatform
 * @method self withPlatform(string $platform)
 * @method string getArchitecture
 * @method self withArchitecture(string $architecture)
 * @method string getSecurityEnhancementStrategy
 * @method self withSecurityEnhancementStrategy(string $securityEnhancementStrategy)
 */
class ReplaceSystemDisk extends Rpc
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
 * @method string getPublicIpAddress
 * @method self withPublicIpAddress(string $publicIpAddress)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ReleasePublicIpAddress extends Rpc
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
 * @method string getAllocationId
 * @method self withAllocationId(string $allocationId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ReleaseEipAddress extends Rpc
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
 * @method string getDiskId
 * @method self withDiskId(string $diskId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method string getKeyPairName
 * @method self withKeyPairName(string $keyPairName)
 * @method bool getAutoStartInstance
 * @method self withAutoStartInstance(bool $autoStartInstance)
 * @method string getSecurityEnhancementStrategy
 * @method self withSecurityEnhancementStrategy(string $securityEnhancementStrategy)
 */
class ReInitDisk extends Rpc
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
 * @method bool getForceStop
 * @method self withForceStop(bool $forceStop)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method bool getDryRun
 * @method self withDryRun(bool $dryRun)
 */
class RebootInstance extends Rpc
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
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getVSwitchName
 * @method self withVSwitchName(string $vSwitchName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyVSwitchAttribute extends Rpc
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
 * @method string getVRouterId
 * @method self withVRouterId(string $vRouterId)
 * @method string getVRouterName
 * @method self withVRouterName(string $vRouterName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyVRouterAttribute extends Rpc
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
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getVpcName
 * @method self withVpcName(string $vpcName)
 * @method string getCidrBlock
 * @method self withCidrBlock(string $cidrBlock)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class ModifyVpcAttribute extends Rpc
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
 * @method string getSnapshotId
 * @method self withSnapshotId(string $snapshotId)
 * @method string getSnapshotName
 * @method self withSnapshotName(string $snapshotName)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifySnapshotAttribute extends Rpc
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
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getSecurityGroupName
 * @method self withSecurityGroupName(string $securityGroupName)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifySecurityGroupAttribute extends Rpc
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
 * @method Integer getIntranetMaxBandwidthIn
 * @method self withIntranetMaxBandwidthIn(Integer $intranetMaxBandwidthIn)
 * @method Integer getIntranetMaxBandwidthOut
 * @method self withIntranetMaxBandwidthOut(Integer $intranetMaxBandwidthOut)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyIntranetBandwidthKb extends Rpc
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
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getPrivateIpAddress
 * @method self withPrivateIpAddress(string $privateIpAddress)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyInstanceVpcAttribute extends Rpc
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
 * @method string getVncPassword
 * @method self withVncPassword(string $vncPassword)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyInstanceVncPasswd extends Rpc
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
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut(Integer $internetMaxBandwidthOut)
 * @method Integer getInternetMaxBandwidthIn
 * @method self withInternetMaxBandwidthIn(Integer $internetMaxBandwidthIn)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getTemporaryStartTime
 * @method self withTemporaryStartTime(string $temporaryStartTime)
 * @method string getTemporaryEndTime
 * @method self withTemporaryEndTime(string $temporaryEndTime)
 * @method Integer getTemporaryInternetMaxBandwidthOut
 * @method self withTemporaryInternetMaxBandwidthOut(Integer $temporaryInternetMaxBandwidthOut)
 * @method bool getAsync
 * @method self withAsync(bool $async)
 * @method bool getAllowMigrateAcrossZone
 * @method self withAllowMigrateAcrossZone(bool $allowMigrateAcrossZone)
 * @method string getSystemDiskCategory
 * @method self withSystemDiskCategory(string $systemDiskCategory)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class ModifyInstanceSpec extends Rpc
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
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut(Integer $internetMaxBandwidthOut)
 * @method Integer getInternetMaxBandwidthIn
 * @method self withInternetMaxBandwidthIn(Integer $internetMaxBandwidthIn)
 * @method string getNetworkChargeType
 * @method self withNetworkChargeType(string $networkChargeType)
 * @method bool getAllocatePublicIp
 * @method self withAllocatePublicIp(bool $allocatePublicIp)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method bool getAutoPay
 * @method self withAutoPay(bool $autoPay)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyInstanceNetworkSpec extends Rpc
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
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method string getHostName
 * @method self withHostName(string $hostName)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method bool getRecyclable
 * @method self withRecyclable(bool $recyclable)
 * @method string getCreditSpecification
 * @method self withCreditSpecification(string $creditSpecification)
 * @method bool getDeletionProtection
 * @method self withDeletionProtection(bool $deletionProtection)
 */
class ModifyInstanceAttribute extends Rpc
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
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method array getAddAccount
 * @method self withAddAccount(array $addAccount)
 * @method array getRemoveAccount
 * @method self withRemoveAccount(array $removeAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyImageSharePermission extends Rpc
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
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getAddGroup1
 * @method self withAddGroup1(string $addGroup1)
 * @method string getRemoveGroup1
 * @method self withRemoveGroup1(string $removeGroup1)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyImageShareGroupPermission extends Rpc
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
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getImageName
 * @method self withImageName(string $imageName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyImageAttribute extends Rpc
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
 * @method string getAllocationId
 * @method self withAllocationId(string $allocationId)
 * @method string getBandwidth
 * @method self withBandwidth(string $bandwidth)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyEipAddressAttribute extends Rpc
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
 * @method string getDiskId
 * @method self withDiskId(string $diskId)
 * @method string getDiskName
 * @method self withDiskName(string $diskName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method bool getDeleteWithInstance
 * @method self withDeleteWithInstance(bool $deleteWithInstance)
 * @method bool getDeleteAutoSnapshot
 * @method self withDeleteAutoSnapshot(bool $deleteAutoSnapshot)
 * @method bool getEnableAutoSnapshot
 * @method self withEnableAutoSnapshot(bool $enableAutoSnapshot)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyDiskAttribute extends Rpc
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
 * @method bool getSystemDiskPolicyEnabled
 * @method self withSystemDiskPolicyEnabled(bool $systemDiskPolicyEnabled)
 * @method Integer getSystemDiskPolicyTimePeriod
 * @method self withSystemDiskPolicyTimePeriod(Integer $systemDiskPolicyTimePeriod)
 * @method Integer getSystemDiskPolicyRetentionDays
 * @method self withSystemDiskPolicyRetentionDays(Integer $systemDiskPolicyRetentionDays)
 * @method bool getSystemDiskPolicyRetentionLastWeek
 * @method self withSystemDiskPolicyRetentionLastWeek(bool $systemDiskPolicyRetentionLastWeek)
 * @method bool getDataDiskPolicyEnabled
 * @method self withDataDiskPolicyEnabled(bool $dataDiskPolicyEnabled)
 * @method Integer getDataDiskPolicyTimePeriod
 * @method self withDataDiskPolicyTimePeriod(Integer $dataDiskPolicyTimePeriod)
 * @method Integer getDataDiskPolicyRetentionDays
 * @method self withDataDiskPolicyRetentionDays(Integer $dataDiskPolicyRetentionDays)
 * @method bool getDataDiskPolicyRetentionLastWeek
 * @method self withDataDiskPolicyRetentionLastWeek(bool $dataDiskPolicyRetentionLastWeek)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ModifyAutoSnapshotPolicy extends Rpc
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
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class LeaveSecurityGroup extends Rpc
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
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class JoinSecurityGroup extends Rpc
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
 * @method string getDiskId
 * @method self withDiskId(string $diskId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DetachDisk extends Rpc
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
 * @method bool getVerbose
 * @method self withVerbose(bool $verbose)
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method string getSpotStrategy
 * @method self withSpotStrategy(string $spotStrategy)
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
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method bool getIsDefault
 * @method self withIsDefault(bool $isDefault)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeVSwitches extends Rpc
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
 * @method string getVRouterId
 * @method self withVRouterId(string $vRouterId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeVRouters extends Rpc
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
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method bool getIsDefault
 * @method self withIsDefault(bool $isDefault)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeVpcs extends Rpc
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
 * @method string getDiskId
 * @method self withDiskId(string $diskId)
 * @method string getSnapshotLinkId
 * @method self withSnapshotLinkId(string $snapshotLinkId)
 * @method string getSnapshotIds
 * @method self withSnapshotIds(string $snapshotIds)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSnapshotName
 * @method self withSnapshotName(string $snapshotName)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getSnapshotType
 * @method self withSnapshotType(string $snapshotType)
 * @method string getFilter1Key
 * @method self withFilter1Key(string $filter1Key)
 * @method string getFilter2Key
 * @method self withFilter2Key(string $filter2Key)
 * @method string getFilter1Value
 * @method self withFilter1Value(string $filter1Value)
 * @method string getFilter2Value
 * @method self withFilter2Value(string $filter2Value)
 * @method string getUsage
 * @method self withUsage(string $usage)
 * @method string getSourceDiskType
 * @method self withSourceDiskType(string $sourceDiskType)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method bool getEncrypted
 * @method self withEncrypted(bool $encrypted)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method bool getDryRun
 * @method self withDryRun(bool $dryRun)
 * @method string getKMSKeyId
 * @method self withKMSKeyId(string $kMSKeyId)
 */
class DescribeSnapshots extends Rpc
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
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSecurityGroupIds
 * @method self withSecurityGroupIds(string $securityGroupIds)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getSecurityGroupName
 * @method self withSecurityGroupName(string $securityGroupName)
 * @method bool getIsQueryEcsCount
 * @method self withIsQueryEcsCount(bool $isQueryEcsCount)
 * @method bool getFuzzyQuery
 * @method self withFuzzyQuery(bool $fuzzyQuery)
 * @method bool getDryRun
 * @method self withDryRun(bool $dryRun)
 */
class DescribeSecurityGroups extends Rpc
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
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getNicType
 * @method self withNicType(string $nicType)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDirection
 * @method self withDirection(string $direction)
 */
class DescribeSecurityGroupAttribute extends Rpc
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
 * @method string getVRouterId
 * @method self withVRouterId(string $vRouterId)
 * @method string getRouteTableId
 * @method self withRouteTableId(string $routeTableId)
 * @method string getRouterType
 * @method self withRouterType(string $routerType)
 * @method string getRouterId
 * @method self withRouterId(string $routerId)
 * @method string getRouteTableName
 * @method self withRouteTableName(string $routeTableName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeRouteTables extends Rpc
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
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getAcceptLanguage
 * @method self withAcceptLanguage(string $acceptLanguage)
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getLimitation
 * @method self withLimitation(string $limitation)
 */
class DescribeLimitation extends Rpc
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
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getNicType
 * @method self withNicType(string $nicType)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeIpRanges extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeIntranetAttributeKb extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeInstanceVncUrl extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeInstanceVncPasswd extends Rpc
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
 * @method string getInstanceTypeFamily
 * @method self withInstanceTypeFamily(string $instanceTypeFamily)
 */
class DescribeInstanceTypes extends Rpc
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
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeInstanceStatus extends Rpc
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
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getInstanceNetworkType
 * @method self withInstanceNetworkType(string $instanceNetworkType)
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getInnerIpAddresses
 * @method self withInnerIpAddresses(string $innerIpAddresses)
 * @method string getPrivateIpAddresses
 * @method self withPrivateIpAddresses(string $privateIpAddresses)
 * @method string getPublicIpAddresses
 * @method self withPublicIpAddresses(string $publicIpAddresses)
 * @method string getEipAddresses
 * @method self withEipAddresses(string $eipAddresses)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getLockReason
 * @method self withLockReason(string $lockReason)
 * @method string getFilter1Key
 * @method self withFilter1Key(string $filter1Key)
 * @method string getFilter2Key
 * @method self withFilter2Key(string $filter2Key)
 * @method string getFilter3Key
 * @method self withFilter3Key(string $filter3Key)
 * @method string getFilter4Key
 * @method self withFilter4Key(string $filter4Key)
 * @method string getFilter1Value
 * @method self withFilter1Value(string $filter1Value)
 * @method string getFilter2Value
 * @method self withFilter2Value(string $filter2Value)
 * @method string getFilter3Value
 * @method self withFilter3Value(string $filter3Value)
 * @method string getFilter4Value
 * @method self withFilter4Value(string $filter4Value)
 * @method bool getDeviceAvailable
 * @method self withDeviceAvailable(bool $deviceAvailable)
 * @method bool getIoOptimized
 * @method self withIoOptimized(bool $ioOptimized)
 * @method bool getNeedSaleCycle
 * @method self withNeedSaleCycle(bool $needSaleCycle)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getInstanceTypeFamily
 * @method self withInstanceTypeFamily(string $instanceTypeFamily)
 * @method string getKeyPairName
 * @method self withKeyPairName(string $keyPairName)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getHpcClusterId
 * @method self withHpcClusterId(string $hpcClusterId)
 * @method string getRdmaIpAddresses
 * @method self withRdmaIpAddresses(string $rdmaIpAddresses)
 * @method bool getDryRun
 * @method self withDryRun(bool $dryRun)
 */
class DescribeInstances extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeInstancePhysicalAttribute extends Rpc
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
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 */
class DescribeInstanceMonitorData extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeInstanceAttribute extends Rpc
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
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeImageSharePermission extends Rpc
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
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method bool getShowExpired
 * @method self withShowExpired(bool $showExpired)
 * @method string getSnapshotId
 * @method self withSnapshotId(string $snapshotId)
 * @method string getImageName
 * @method self withImageName(string $imageName)
 * @method string getImageOwnerAlias
 * @method self withImageOwnerAlias(string $imageOwnerAlias)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method bool getIsSupportIoOptimized
 * @method self withIsSupportIoOptimized(bool $isSupportIoOptimized)
 * @method bool getIsSupportCloudinit
 * @method self withIsSupportCloudinit(bool $isSupportCloudinit)
 * @method string getOSType
 * @method self withOSType(string $oSType)
 * @method string getArchitecture
 * @method self withArchitecture(string $architecture)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUsage
 * @method self withUsage(string $usage)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method bool getDryRun
 * @method self withDryRun(bool $dryRun)
 * @method string getActionType
 * @method self withActionType(string $actionType)
 * @method array getFilter
 * @method self withFilter(array $filter)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class DescribeImages extends Rpc
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
 * @method string getAllocationId
 * @method self withAllocationId(string $allocationId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeEipMonitorData extends Rpc
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
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getEipAddress
 * @method self withEipAddress(string $eipAddress)
 * @method string getAllocationId
 * @method self withAllocationId(string $allocationId)
 * @method string getISP
 * @method self withISP(string $iSP)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getFilter1Key
 * @method self withFilter1Key(string $filter1Key)
 * @method string getFilter2Key
 * @method self withFilter2Key(string $filter2Key)
 * @method string getFilter1Value
 * @method self withFilter1Value(string $filter1Value)
 * @method string getFilter2Value
 * @method self withFilter2Value(string $filter2Value)
 * @method string getLockReason
 * @method self withLockReason(string $lockReason)
 * @method string getAssociatedInstanceType
 * @method self withAssociatedInstanceType(string $associatedInstanceType)
 * @method string getAssociatedInstanceId
 * @method self withAssociatedInstanceId(string $associatedInstanceId)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 */
class DescribeEipAddresses extends Rpc
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
 * @method string getDiskIds
 * @method self withDiskIds(string $diskIds)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getDiskType
 * @method self withDiskType(string $diskType)
 * @method string getCategory
 * @method self withCategory(string $category)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getSnapshotId
 * @method self withSnapshotId(string $snapshotId)
 * @method bool getPortable
 * @method self withPortable(bool $portable)
 * @method bool getDeleteWithInstance
 * @method self withDeleteWithInstance(bool $deleteWithInstance)
 * @method bool getDeleteAutoSnapshot
 * @method self withDeleteAutoSnapshot(bool $deleteAutoSnapshot)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDiskName
 * @method self withDiskName(string $diskName)
 * @method string getAutoSnapshotPolicyId
 * @method self withAutoSnapshotPolicyId(string $autoSnapshotPolicyId)
 * @method bool getEnableAutoSnapshot
 * @method self withEnableAutoSnapshot(bool $enableAutoSnapshot)
 * @method bool getEnableAutomatedSnapshotPolicy
 * @method self withEnableAutomatedSnapshotPolicy(bool $enableAutomatedSnapshotPolicy)
 * @method string getDiskChargeType
 * @method self withDiskChargeType(string $diskChargeType)
 * @method string getLockReason
 * @method self withLockReason(string $lockReason)
 * @method string getFilter1Key
 * @method self withFilter1Key(string $filter1Key)
 * @method string getFilter2Key
 * @method self withFilter2Key(string $filter2Key)
 * @method string getFilter1Value
 * @method self withFilter1Value(string $filter1Value)
 * @method string getFilter2Value
 * @method self withFilter2Value(string $filter2Value)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method bool getEnableShared
 * @method self withEnableShared(bool $enableShared)
 * @method bool getEncrypted
 * @method self withEncrypted(bool $encrypted)
 * @method array getAdditionalAttributes
 * @method self withAdditionalAttributes(array $additionalAttributes)
 * @method bool getDryRun
 * @method self withDryRun(bool $dryRun)
 * @method string getKMSKeyId
 * @method self withKMSKeyId(string $kMSKeyId)
 */
class DescribeDisks extends Rpc
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
 * @method string getDiskId
 * @method self withDiskId(string $diskId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 */
class DescribeDiskMonitorData extends Rpc
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
class DescribeClusters extends Rpc
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
class DescribeAutoSnapshotPolicy extends Rpc
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
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteVSwitch extends Rpc
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
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteVpc extends Rpc
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
 * @method string getSnapshotId
 * @method self withSnapshotId(string $snapshotId)
 * @method bool getForce
 * @method self withForce(bool $force)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteSnapshot extends Rpc
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
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteSecurityGroup extends Rpc
{
    use R;
}

/**
 * @method array getNextHopList
 * @method self withNextHopList(array $nextHopList)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getRouteTableId
 * @method self withRouteTableId(string $routeTableId)
 * @method string getDestinationCidrBlock
 * @method self withDestinationCidrBlock(string $destinationCidrBlock)
 * @method string getNextHopId
 * @method self withNextHopId(string $nextHopId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteRouteEntry extends Rpc
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method bool getForce
 * @method self withForce(bool $force)
 * @method bool getTerminateSubscription
 * @method self withTerminateSubscription(bool $terminateSubscription)
 */
class DeleteInstance extends Rpc
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
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method bool getForce
 * @method self withForce(bool $force)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteImage extends Rpc
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
 * @method string getDiskId
 * @method self withDiskId(string $diskId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteDisk extends Rpc
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
 * @method string getCidrBlock
 * @method self withCidrBlock(string $cidrBlock)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchName
 * @method self withVSwitchName(string $vSwitchName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateVSwitch extends Rpc
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
 * @method string getCidrBlock
 * @method self withCidrBlock(string $cidrBlock)
 * @method string getVpcName
 * @method self withVpcName(string $vpcName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserCidr
 * @method self withUserCidr(string $userCidr)
 */
class CreateVpc extends Rpc
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
 * @method string getDiskId
 * @method self withDiskId(string $diskId)
 * @method string getSnapshotName
 * @method self withSnapshotName(string $snapshotName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getTag
 * @method self withTag(array $tag)
 */
class CreateSnapshot extends Rpc
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
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getSecurityGroupName
 * @method self withSecurityGroupName(string $securityGroupName)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class CreateSecurityGroup extends Rpc
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
 * @method string getRouteTableId
 * @method self withRouteTableId(string $routeTableId)
 * @method string getDestinationCidrBlock
 * @method self withDestinationCidrBlock(string $destinationCidrBlock)
 * @method string getNextHopId
 * @method self withNextHopId(string $nextHopId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getNextHopType
 * @method self withNextHopType(string $nextHopType)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getNextHopList
 * @method self withNextHopList(array $nextHopList)
 */
class CreateRouteEntry extends Rpc
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
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method bool getAutoRenew
 * @method self withAutoRenew(bool $autoRenew)
 * @method Integer getAutoRenewPeriod
 * @method self withAutoRenewPeriod(Integer $autoRenewPeriod)
 * @method Integer getInternetMaxBandwidthIn
 * @method self withInternetMaxBandwidthIn(Integer $internetMaxBandwidthIn)
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut(Integer $internetMaxBandwidthOut)
 * @method string getHostName
 * @method self withHostName(string $hostName)
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method bool getPasswordInherit
 * @method self withPasswordInherit(bool $passwordInherit)
 * @method string getDeploymentSetId
 * @method self withDeploymentSetId(string $deploymentSetId)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getVlanId
 * @method self withVlanId(string $vlanId)
 * @method string getInnerIpAddress
 * @method self withInnerIpAddress(string $innerIpAddress)
 * @method Integer getSystemDiskSize
 * @method self withSystemDiskSize(Integer $systemDiskSize)
 * @method string getSystemDiskCategory
 * @method self withSystemDiskCategory(string $systemDiskCategory)
 * @method string getSystemDiskDiskName
 * @method self withSystemDiskDiskName(string $systemDiskDiskName)
 * @method string getSystemDiskDescription
 * @method self withSystemDiskDescription(string $systemDiskDescription)
 * @method array getDataDisk
 * @method self withDataDisk(array $dataDisk)
 * @method string getNodeControllerId
 * @method self withNodeControllerId(string $nodeControllerId)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getPrivateIpAddress
 * @method self withPrivateIpAddress(string $privateIpAddress)
 * @method string getIoOptimized
 * @method self withIoOptimized(string $ioOptimized)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method bool getUseAdditionalService
 * @method self withUseAdditionalService(bool $useAdditionalService)
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getPeriodUnit
 * @method self withPeriodUnit(string $periodUnit)
 * @method array getTag
 * @method self withTag(array $tag)
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
 * @method bool getDryRun
 * @method self withDryRun(bool $dryRun)
 * @method string getDedicatedHostId
 * @method self withDedicatedHostId(string $dedicatedHostId)
 * @method string getCreditSpecification
 * @method self withCreditSpecification(string $creditSpecification)
 * @method bool getDeletionProtection
 * @method self withDeletionProtection(bool $deletionProtection)
 */
class CreateInstance extends Rpc
{
    use R;
}

/**
 * @method array getDiskDeviceMapping
 * @method self withDiskDeviceMapping(array $diskDeviceMapping)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getSnapshotId
 * @method self withSnapshotId(string $snapshotId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getImageName
 * @method self withImageName(string $imageName)
 * @method string getImageVersion
 * @method self withImageVersion(string $imageVersion)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getPlatform
 * @method self withPlatform(string $platform)
 * @method string getArchitecture
 * @method self withArchitecture(string $architecture)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class CreateImage extends Rpc
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
 * @method string getDiskName
 * @method self withDiskName(string $diskName)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method string getDiskCategory
 * @method self withDiskCategory(string $diskCategory)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method bool getEncrypted
 * @method self withEncrypted(bool $encrypted)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getKMSKeyId
 * @method self withKMSKeyId(string $kMSKeyId)
 */
class CreateDisk extends Rpc
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
 * @method string getDestinationImageName
 * @method self withDestinationImageName(string $destinationImageName)
 * @method string getDestinationDescription
 * @method self withDestinationDescription(string $destinationDescription)
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getDestinationRegionId
 * @method self withDestinationRegionId(string $destinationRegionId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method bool getEncrypted
 * @method self withEncrypted(bool $encrypted)
 */
class CopyImage extends Rpc
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
 * @method string getDiskIds
 * @method self withDiskIds(string $diskIds)
 */
class CheckDiskEnableAutoSnapshotValidation extends Rpc
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
 * @method bool getSystemDiskPolicyEnabled
 * @method self withSystemDiskPolicyEnabled(bool $systemDiskPolicyEnabled)
 * @method Integer getSystemDiskPolicyTimePeriod
 * @method self withSystemDiskPolicyTimePeriod(Integer $systemDiskPolicyTimePeriod)
 * @method Integer getSystemDiskPolicyRetentionDays
 * @method self withSystemDiskPolicyRetentionDays(Integer $systemDiskPolicyRetentionDays)
 * @method bool getSystemDiskPolicyRetentionLastWeek
 * @method self withSystemDiskPolicyRetentionLastWeek(bool $systemDiskPolicyRetentionLastWeek)
 * @method bool getDataDiskPolicyEnabled
 * @method self withDataDiskPolicyEnabled(bool $dataDiskPolicyEnabled)
 * @method Integer getDataDiskPolicyTimePeriod
 * @method self withDataDiskPolicyTimePeriod(Integer $dataDiskPolicyTimePeriod)
 * @method Integer getDataDiskPolicyRetentionDays
 * @method self withDataDiskPolicyRetentionDays(Integer $dataDiskPolicyRetentionDays)
 * @method bool getDataDiskPolicyRetentionLastWeek
 * @method self withDataDiskPolicyRetentionLastWeek(bool $dataDiskPolicyRetentionLastWeek)
 */
class CheckAutoSnapshotPolicy extends Rpc
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
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CancelCopyImage extends Rpc
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
 * @method string getIpAddress
 * @method self withIpAddress(string $ipAddress)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class BindIpRange extends Rpc
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
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getIpProtocol
 * @method self withIpProtocol(string $ipProtocol)
 * @method string getPortRange
 * @method self withPortRange(string $portRange)
 * @method string getDestGroupId
 * @method self withDestGroupId(string $destGroupId)
 * @method int getDestGroupOwnerId
 * @method self withDestGroupOwnerId(int $destGroupOwnerId)
 * @method string getDestGroupOwnerAccount
 * @method self withDestGroupOwnerAccount(string $destGroupOwnerAccount)
 * @method string getDestCidrIp
 * @method self withDestCidrIp(string $destCidrIp)
 * @method string getIpv6DestCidrIp
 * @method self withIpv6DestCidrIp(string $ipv6DestCidrIp)
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp(string $sourceCidrIp)
 * @method string getIpv6SourceCidrIp
 * @method self withIpv6SourceCidrIp(string $ipv6SourceCidrIp)
 * @method string getSourcePortRange
 * @method self withSourcePortRange(string $sourcePortRange)
 * @method string getPolicy
 * @method self withPolicy(string $policy)
 * @method string getPriority
 * @method self withPriority(string $priority)
 * @method string getNicType
 * @method self withNicType(string $nicType)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class AuthorizeSecurityGroupEgress extends Rpc
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
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getIpProtocol
 * @method self withIpProtocol(string $ipProtocol)
 * @method string getPortRange
 * @method self withPortRange(string $portRange)
 * @method string getSourceGroupId
 * @method self withSourceGroupId(string $sourceGroupId)
 * @method int getSourceGroupOwnerId
 * @method self withSourceGroupOwnerId(int $sourceGroupOwnerId)
 * @method string getSourceGroupOwnerAccount
 * @method self withSourceGroupOwnerAccount(string $sourceGroupOwnerAccount)
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp(string $sourceCidrIp)
 * @method string getIpv6SourceCidrIp
 * @method self withIpv6SourceCidrIp(string $ipv6SourceCidrIp)
 * @method string getSourcePortRange
 * @method self withSourcePortRange(string $sourcePortRange)
 * @method string getDestCidrIp
 * @method self withDestCidrIp(string $destCidrIp)
 * @method string getIpv6DestCidrIp
 * @method self withIpv6DestCidrIp(string $ipv6DestCidrIp)
 * @method string getPolicy
 * @method self withPolicy(string $policy)
 * @method string getPriority
 * @method self withPriority(string $priority)
 * @method string getNicType
 * @method self withNicType(string $nicType)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class AuthorizeSecurityGroup extends Rpc
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
 * @method string getDiskId
 * @method self withDiskId(string $diskId)
 * @method string getDevice
 * @method self withDevice(string $device)
 * @method bool getDeleteWithInstance
 * @method self withDeleteWithInstance(bool $deleteWithInstance)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AttachDisk extends Rpc
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
 * @method string getAllocationId
 * @method self withAllocationId(string $allocationId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 */
class AssociateEipAddress extends Rpc
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
 * @method string getIpAddress
 * @method self withIpAddress(string $ipAddress)
 * @method string getVlanId
 * @method self withVlanId(string $vlanId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AllocatePublicIpAddress extends Rpc
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
 * @method string getBandwidth
 * @method self withBandwidth(string $bandwidth)
 * @method string getISP
 * @method self withISP(string $iSP)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 */
class AllocateEipAddress extends Rpc
{
    use R;
}
