<?php

namespace AlibabaCloud\NAS\V20160229;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getSrcVolume
 * @method self withSrcVolume
 * @method string getResVolume
 * @method self withResVolume
 * @method string getVersionName
 * @method self withVersionName
 */
final class RestoreBackup extends RpcRequest
{
}

/**
 * @method string getSrcVolume
 * @method self withSrcVolume
 */
final class DescribeBackupVersions extends RpcRequest
{
}

final class DescribeBackupDemands extends RpcRequest
{
}

/**
 * @method string getSrcVolume
 * @method self withSrcVolume
 */
final class DeleteBackupDemand extends RpcRequest
{
}

/**
 * @method string getSrcVolume
 * @method self withSrcVolume
 */
final class BackupNow extends RpcRequest
{
}

/**
 * @method string getSrcVolume
 * @method self withSrcVolume
 * @method string getStartTime
 * @method self withStartTime
 * @method string getHourGap
 * @method self withHourGap
 * @method string getVersionCount
 * @method self withVersionCount
 * @method string getProtocolType
 * @method self withProtocolType
 */
final class AddBackupDemand extends RpcRequest
{
}

/**
 * @method string getFeature
 * @method self withFeature
 */
final class ListNasBeta extends RpcRequest
{
}

/**
 * @method string getFeature
 * @method self withFeature
 * @method string getPhone
 * @method self withPhone
 * @method string getCompany
 * @method self withCompany
 * @method string getDesc
 * @method self withDesc
 * @method string getEmail
 * @method self withEmail
 */
final class ApplyNasBeta extends RpcRequest
{
}

/**
 * @method string getResourceOwner
 * @method self withResourceOwner
 * @method string getFileSystemName
 * @method self withFileSystemName
 * @method string getDomainName
 * @method self withDomainName
 */
final class DeleteMountTargetInternal extends RpcRequest
{
}

/**
 * @method string getResourceOwner
 * @method self withResourceOwner
 * @method string getAccessGroupName
 * @method self withAccessGroupName
 * @method string getRuleId
 * @method self withRuleId
 */
final class DeleteAccessRuleInternal extends RpcRequest
{
}

/**
 * @method string getResourceOwner
 * @method self withResourceOwner
 * @method string getAccessGroupName
 * @method self withAccessGroupName
 */
final class DeleteAccessGroupInternal extends RpcRequest
{
}

/**
 * @method string getResourceOwner
 * @method self withResourceOwner
 * @method string getAccessGroupName
 * @method self withAccessGroupName
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp
 * @method string getPolicy
 * @method self withPolicy
 * @method string getSquashType
 * @method self withSquashType
 * @method string getPriority
 * @method self withPriority
 */
final class CreateAccessRuleInternal extends RpcRequest
{
}

/**
 * @method string getResourceOwner
 * @method self withResourceOwner
 * @method string getAccessGroupName
 * @method self withAccessGroupName
 * @method string getAccessGroupType
 * @method self withAccessGroupType
 * @method string getDescription
 * @method self withDescription
 */
final class CreateAccessGroupInternal extends RpcRequest
{
}

/**
 * @method string getFeature
 * @method self withFeature
 */
final class CheckNasBeta extends RpcRequest
{
}

/**
 * @method string getUid
 * @method self withUid
 * @method string getFeature
 * @method self withFeature
 * @method string getStatus
 * @method self withStatus
 */
final class SetNasBetaStatus extends RpcRequest
{
}

/**
 * @method string getVolumes
 * @method self withVolumes
 * @method string getAuthType
 * @method self withAuthType
 */
final class SetUserVolumeSkipAuth extends RpcRequest
{
}

/**
 * @method string getUserId
 * @method self withUserId
 * @method string getCountLimit
 * @method self withCountLimit
 */
final class SetUserVolumeCountLimit extends RpcRequest
{
}

/**
 * @method string getResourceOwner
 * @method self withResourceOwner
 * @method string getFileSystemName
 * @method self withFileSystemName
 * @method string getAccessGroupName
 * @method self withAccessGroupName
 * @method string getNetworkType
 * @method self withNetworkType
 * @method string getVpcId
 * @method self withVpcId
 * @method string getVSwitchId
 * @method self withVSwitchId
 */
final class CreateMountTargetInternal extends RpcRequest
{
}

/**
 * @method string getVolumeId
 * @method self withVolumeId
 * @method string getPackageId
 * @method self withPackageId
 */
final class UnBindVolumeStoragePackage extends RpcRequest
{
}

/**
 * @method string getVolumeId
 * @method self withVolumeId
 * @method string getPackageId
 * @method self withPackageId
 */
final class BindVolumeStoragePackage extends RpcRequest
{
}

/**
 * @method string getStorageId
 * @method self withStorageId
 * @method string getUserName
 * @method self withUserName
 * @method string getFsName
 * @method self withFsName
 */
final class RemoveFiNasPoolUserFromVolume extends RpcRequest
{
}

/**
 * @method string getStorageId
 * @method self withStorageId
 * @method string getUserName
 * @method self withUserName
 * @method string getQuotaSize
 * @method self withQuotaSize
 * @method string getPasswd
 * @method self withPasswd
 */
final class ModifyFiNasPoolUser extends RpcRequest
{
}

/**
 * @method string getStorageId
 * @method self withStorageId
 * @method string getFsName
 * @method self withFsName
 */
final class DeleteFiNasPoolVolume extends RpcRequest
{
}

/**
 * @method string getStorageId
 * @method self withStorageId
 * @method string getUserName
 * @method self withUserName
 */
final class DeleteFiNasPoolUser extends RpcRequest
{
}

/**
 * @method string getUid
 * @method self withUid
 * @method string getStatus
 * @method self withStatus
 */
final class SetNasPlusBetaStatus extends RpcRequest
{
}

final class ListNasPlusBeta extends RpcRequest
{
}

/**
 * @method string getStorageId
 * @method self withStorageId
 */
final class GetFiNasTargetIp extends RpcRequest
{
}

/**
 * @method string getStorageId
 * @method self withStorageId
 */
final class DescribeFiNasStoragePools extends RpcRequest
{
}

/**
 * @method string getStorageId
 * @method self withStorageId
 */
final class DescribeFiNasPoolVolumes extends RpcRequest
{
}

/**
 * @method string getStorageId
 * @method self withStorageId
 */
final class DescribeFiNasPoolUsers extends RpcRequest
{
}

/**
 * @method string getVpcId
 * @method self withVpcId
 * @method string getVswId
 * @method self withVswId
 * @method string getPoolSize
 * @method self withPoolSize
 */
final class CreateFiNasStoragePool extends RpcRequest
{
}

/**
 * @method string getStorageId
 * @method self withStorageId
 * @method string getFsName
 * @method self withFsName
 * @method string getQuotaSize
 * @method self withQuotaSize
 */
final class CreateFiNasPoolVolume extends RpcRequest
{
}

/**
 * @method string getStorageId
 * @method self withStorageId
 * @method string getUserName
 * @method self withUserName
 * @method string getQuotaSize
 * @method self withQuotaSize
 * @method string getPasswd
 * @method self withPasswd
 */
final class CreateFiNasPoolUser extends RpcRequest
{
}

final class CheckNasPlusBeta extends RpcRequest
{
}

/**
 * @method string getEmail
 * @method self withEmail
 * @method string getPhone
 * @method self withPhone
 * @method string getCompany
 * @method self withCompany
 * @method string getDesc
 * @method self withDesc
 */
final class ApplyNasPlusBeta extends RpcRequest
{
}

/**
 * @method string getStorageId
 * @method self withStorageId
 * @method string getUserName
 * @method self withUserName
 * @method string getFsName
 * @method self withFsName
 * @method string getMode
 * @method self withMode
 */
final class AddFiNasPoolUserToVolume extends RpcRequest
{
}

/**
 * @method string getUid
 * @method self withUid
 * @method string getStatus
 * @method self withStatus
 */
final class SetNasSmbBetaStatus extends RpcRequest
{
}

final class ListNasSmbBeta extends RpcRequest
{
}

final class CheckNasSmbBeta extends RpcRequest
{
}

/**
 * @method string getEmail
 * @method self withEmail
 * @method string getPhone
 * @method self withPhone
 * @method string getCompany
 * @method self withCompany
 * @method string getDesc
 * @method self withDesc
 */
final class ApplyNasSmbBeta extends RpcRequest
{
}

/**
 * @method string getdata
 * @method self withdata
 * @method string getproduct
 * @method self withproduct
 * @method string getversion
 * @method self withversion
 * @method string getaction
 * @method self withaction
 * @method string getregionId
 * @method self withregionId
 * @method string getdomain
 * @method self withdomain
 */
final class RefundNasPackage extends RpcRequest
{
}

final class DescribeVolumeStoragePackages extends RpcRequest
{
}

/**
 * @method string getdata
 * @method self withdata
 * @method string getproduct
 * @method self withproduct
 * @method string getversion
 * @method self withversion
 * @method string getaction
 * @method self withaction
 * @method string getregionId
 * @method self withregionId
 * @method string getdomain
 * @method self withdomain
 */
final class ProduceNasPackage extends RpcRequest
{
}

/**
 * @method string getdata
 * @method self withdata
 * @method string getproduct
 * @method self withproduct
 * @method string getversion
 * @method self withversion
 * @method string getaction
 * @method self withaction
 * @method string getregionId
 * @method self withregionId
 * @method string getdomain
 * @method self withdomain
 */
final class FillNasPackageSpec extends RpcRequest
{
}

/**
 * @method string getdata
 * @method self withdata
 * @method string getproduct
 * @method self withproduct
 * @method string getversion
 * @method self withversion
 * @method string getaction
 * @method self withaction
 * @method string getregionId
 * @method self withregionId
 * @method string getdomain
 * @method self withdomain
 */
final class CompleteNasPackageOrder extends RpcRequest
{
}

/**
 * @method string getdata
 * @method self withdata
 * @method string getproduct
 * @method self withproduct
 * @method string getversion
 * @method self withversion
 * @method string getaction
 * @method self withaction
 * @method string getregionId
 * @method self withregionId
 * @method string getdomain
 * @method self withdomain
 */
final class CheckNasPackageOrder extends RpcRequest
{
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName
 * @method string getFileSystemUser
 * @method self withFileSystemUser
 */
final class DescribeFileSystemOptionalUsers extends RpcRequest
{
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName
 * @method string getFileSystemUser
 * @method self withFileSystemUser
 */
final class DeleteFileSystemOptionalUser extends RpcRequest
{
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName
 * @method string getFileSystemUser
 * @method self withFileSystemUser
 */
final class CreateFileSystemOptionalUser extends RpcRequest
{
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName
 * @method string getFileSystemDesc
 * @method self withFileSystemDesc
 */
final class UpdateFileSystemInfo extends RpcRequest
{
}

/**
 * @method string getdata
 * @method self withdata
 * @method string getproduct
 * @method self withproduct
 * @method string getversion
 * @method self withversion
 * @method string getaction
 * @method self withaction
 * @method string getregionId
 * @method self withregionId
 * @method string getdomain
 * @method self withdomain
 */
final class ProduceInstance extends RpcRequest
{
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName
 * @method string getMountTargetId
 * @method self withMountTargetId
 * @method string getStatus
 * @method self withStatus
 */
final class ModifyMountTargetStatus extends RpcRequest
{
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName
 * @method string getMountTargetId
 * @method self withMountTargetId
 * @method string getAccessGroupName
 * @method self withAccessGroupName
 */
final class ModifyMountTargetAccessGroup extends RpcRequest
{
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName
 * @method string getRuleId
 * @method self withRuleId
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp
 * @method string getPolicy
 * @method self withPolicy
 * @method string getSquashType
 * @method self withSquashType
 * @method string getPriority
 * @method self withPriority
 */
final class ModifyAccessRule extends RpcRequest
{
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName
 * @method string getDescription
 * @method self withDescription
 */
final class ModifyAccessGroup extends RpcRequest
{
}

final class ListRegion extends RpcRequest
{
}

/**
 * @method string getdata
 * @method self withdata
 * @method string getproduct
 * @method self withproduct
 * @method string getversion
 * @method self withversion
 * @method string getaction
 * @method self withaction
 * @method string getregionId
 * @method self withregionId
 * @method string getdomain
 * @method self withdomain
 */
final class FillInstanceParam extends RpcRequest
{
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName
 */
final class DescribeMountTargets extends RpcRequest
{
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName
 */
final class DescribeFileSystems extends RpcRequest
{
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName
 */
final class DescribeAccessRules extends RpcRequest
{
}

final class DescribeAccessGroups extends RpcRequest
{
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName
 * @method string getMountTargetId
 * @method self withMountTargetId
 */
final class DeleteMountTarget extends RpcRequest
{
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName
 */
final class DeleteFileSystem extends RpcRequest
{
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName
 * @method string getRuleId
 * @method self withRuleId
 */
final class DeleteAccessRule extends RpcRequest
{
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName
 */
final class DeleteAccessGroup extends RpcRequest
{
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName
 * @method string getAccessGroupName
 * @method self withAccessGroupName
 * @method string getNetworkType
 * @method self withNetworkType
 * @method string getVpcId
 * @method self withVpcId
 * @method string getVSwitchId
 * @method self withVSwitchId
 */
final class CreateMountTarget extends RpcRequest
{
}

/**
 * @method string getZoneId
 * @method self withZoneId
 * @method string getFileSystemType
 * @method self withFileSystemType
 * @method string getProtocolType
 * @method self withProtocolType
 */
final class CreateFileSystem extends RpcRequest
{
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp
 * @method string getPolicy
 * @method self withPolicy
 * @method string getSquashType
 * @method self withSquashType
 * @method string getPriority
 * @method self withPriority
 */
final class CreateAccessRule extends RpcRequest
{
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName
 * @method string getAccessGroupType
 * @method self withAccessGroupType
 * @method string getDescription
 * @method self withDescription
 */
final class CreateAccessGroup extends RpcRequest
{
}
