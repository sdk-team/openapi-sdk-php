<?php

namespace AlibabaCloud\NAS\V20160229;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method RestoreBackup restoreBackup($options = [])
 * @method DescribeBackupVersions describeBackupVersions($options = [])
 * @method DescribeBackupDemands describeBackupDemands($options = [])
 * @method DeleteBackupDemand deleteBackupDemand($options = [])
 * @method BackupNow backupNow($options = [])
 * @method AddBackupDemand addBackupDemand($options = [])
 * @method ListNasBeta listNasBeta($options = [])
 * @method ApplyNasBeta applyNasBeta($options = [])
 * @method DeleteMountTargetInternal deleteMountTargetInternal($options = [])
 * @method DeleteAccessRuleInternal deleteAccessRuleInternal($options = [])
 * @method DeleteAccessGroupInternal deleteAccessGroupInternal($options = [])
 * @method CreateAccessRuleInternal createAccessRuleInternal($options = [])
 * @method CreateAccessGroupInternal createAccessGroupInternal($options = [])
 * @method CheckNasBeta checkNasBeta($options = [])
 * @method SetNasBetaStatus setNasBetaStatus($options = [])
 * @method SetUserVolumeSkipAuth setUserVolumeSkipAuth($options = [])
 * @method SetUserVolumeCountLimit setUserVolumeCountLimit($options = [])
 * @method CreateMountTargetInternal createMountTargetInternal($options = [])
 * @method UnBindVolumeStoragePackage unBindVolumeStoragePackage($options = [])
 * @method BindVolumeStoragePackage bindVolumeStoragePackage($options = [])
 * @method RemoveFiNasPoolUserFromVolume removeFiNasPoolUserFromVolume($options = [])
 * @method ModifyFiNasPoolUser modifyFiNasPoolUser($options = [])
 * @method DeleteFiNasPoolVolume deleteFiNasPoolVolume($options = [])
 * @method DeleteFiNasPoolUser deleteFiNasPoolUser($options = [])
 * @method SetNasPlusBetaStatus setNasPlusBetaStatus($options = [])
 * @method ListNasPlusBeta listNasPlusBeta($options = [])
 * @method GetFiNasTargetIp getFiNasTargetIp($options = [])
 * @method DescribeFiNasStoragePools describeFiNasStoragePools($options = [])
 * @method DescribeFiNasPoolVolumes describeFiNasPoolVolumes($options = [])
 * @method DescribeFiNasPoolUsers describeFiNasPoolUsers($options = [])
 * @method CreateFiNasStoragePool createFiNasStoragePool($options = [])
 * @method CreateFiNasPoolVolume createFiNasPoolVolume($options = [])
 * @method CreateFiNasPoolUser createFiNasPoolUser($options = [])
 * @method CheckNasPlusBeta checkNasPlusBeta($options = [])
 * @method ApplyNasPlusBeta applyNasPlusBeta($options = [])
 * @method AddFiNasPoolUserToVolume addFiNasPoolUserToVolume($options = [])
 * @method SetNasSmbBetaStatus setNasSmbBetaStatus($options = [])
 * @method ListNasSmbBeta listNasSmbBeta($options = [])
 * @method CheckNasSmbBeta checkNasSmbBeta($options = [])
 * @method ApplyNasSmbBeta applyNasSmbBeta($options = [])
 * @method RefundNasPackage refundNasPackage($options = [])
 * @method DescribeVolumeStoragePackages describeVolumeStoragePackages($options = [])
 * @method ProduceNasPackage produceNasPackage($options = [])
 * @method FillNasPackageSpec fillNasPackageSpec($options = [])
 * @method CompleteNasPackageOrder completeNasPackageOrder($options = [])
 * @method CheckNasPackageOrder checkNasPackageOrder($options = [])
 * @method DescribeFileSystemOptionalUsers describeFileSystemOptionalUsers($options = [])
 * @method DeleteFileSystemOptionalUser deleteFileSystemOptionalUser($options = [])
 * @method CreateFileSystemOptionalUser createFileSystemOptionalUser($options = [])
 * @method UpdateFileSystemInfo updateFileSystemInfo($options = [])
 * @method ProduceInstance produceInstance($options = [])
 * @method ModifyMountTargetStatus modifyMountTargetStatus($options = [])
 * @method ModifyMountTargetAccessGroup modifyMountTargetAccessGroup($options = [])
 * @method ModifyAccessRule modifyAccessRule($options = [])
 * @method ModifyAccessGroup modifyAccessGroup($options = [])
 * @method ListRegion listRegion($options = [])
 * @method FillInstanceParam fillInstanceParam($options = [])
 * @method DescribeMountTargets describeMountTargets($options = [])
 * @method DescribeFileSystems describeFileSystems($options = [])
 * @method DescribeAccessRules describeAccessRules($options = [])
 * @method DescribeAccessGroups describeAccessGroups($options = [])
 * @method DeleteMountTarget deleteMountTarget($options = [])
 * @method DeleteFileSystem deleteFileSystem($options = [])
 * @method DeleteAccessRule deleteAccessRule($options = [])
 * @method DeleteAccessGroup deleteAccessGroup($options = [])
 * @method CreateMountTarget createMountTarget($options = [])
 * @method CreateFileSystem createFileSystem($options = [])
 * @method CreateAccessRule createAccessRule($options = [])
 * @method CreateAccessGroup createAccessGroup($options = [])
 */
class V20160229
{
    use ApiResolverTrait;
}

/**
 * @method string getSrcVolume
 * @method self withSrcVolume(string $srcVolume)
 * @method string getResVolume
 * @method self withResVolume(string $resVolume)
 * @method string getVersionName
 * @method self withVersionName(string $versionName)
 */
class RestoreBackup extends Roa
{
    use R;
}

/**
 * @method string getSrcVolume
 * @method self withSrcVolume(string $srcVolume)
 */
class DescribeBackupVersions extends Roa
{
    use R;
}

class DescribeBackupDemands extends Roa
{
    use R;
}

/**
 * @method string getSrcVolume
 * @method self withSrcVolume(string $srcVolume)
 */
class DeleteBackupDemand extends Roa
{
    use R;
}

/**
 * @method string getSrcVolume
 * @method self withSrcVolume(string $srcVolume)
 */
class BackupNow extends Roa
{
    use R;
}

/**
 * @method string getSrcVolume
 * @method self withSrcVolume(string $srcVolume)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getHourGap
 * @method self withHourGap(string $hourGap)
 * @method string getVersionCount
 * @method self withVersionCount(string $versionCount)
 * @method string getProtocolType
 * @method self withProtocolType(string $protocolType)
 */
class AddBackupDemand extends Roa
{
    use R;
}

/**
 * @method string getFeature
 * @method self withFeature(string $feature)
 */
class ListNasBeta extends Roa
{
    use R;
}

/**
 * @method string getFeature
 * @method self withFeature(string $feature)
 * @method string getPhone
 * @method self withPhone(string $phone)
 * @method string getCompany
 * @method self withCompany(string $company)
 * @method string getDesc
 * @method self withDesc(string $desc)
 * @method string getEmail
 * @method self withEmail(string $email)
 */
class ApplyNasBeta extends Roa
{
    use R;
}

/**
 * @method string getResourceOwner
 * @method self withResourceOwner(string $resourceOwner)
 * @method string getFileSystemName
 * @method self withFileSystemName(string $fileSystemName)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DeleteMountTargetInternal extends Roa
{
    use R;
}

/**
 * @method string getResourceOwner
 * @method self withResourceOwner(string $resourceOwner)
 * @method string getAccessGroupName
 * @method self withAccessGroupName(string $accessGroupName)
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 */
class DeleteAccessRuleInternal extends Roa
{
    use R;
}

/**
 * @method string getResourceOwner
 * @method self withResourceOwner(string $resourceOwner)
 * @method string getAccessGroupName
 * @method self withAccessGroupName(string $accessGroupName)
 */
class DeleteAccessGroupInternal extends Roa
{
    use R;
}

/**
 * @method string getResourceOwner
 * @method self withResourceOwner(string $resourceOwner)
 * @method string getAccessGroupName
 * @method self withAccessGroupName(string $accessGroupName)
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp(string $sourceCidrIp)
 * @method string getPolicy
 * @method self withPolicy(string $policy)
 * @method string getSquashType
 * @method self withSquashType(string $squashType)
 * @method string getPriority
 * @method self withPriority(string $priority)
 */
class CreateAccessRuleInternal extends Roa
{
    use R;
}

/**
 * @method string getResourceOwner
 * @method self withResourceOwner(string $resourceOwner)
 * @method string getAccessGroupName
 * @method self withAccessGroupName(string $accessGroupName)
 * @method string getAccessGroupType
 * @method self withAccessGroupType(string $accessGroupType)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class CreateAccessGroupInternal extends Roa
{
    use R;
}

/**
 * @method string getFeature
 * @method self withFeature(string $feature)
 */
class CheckNasBeta extends Roa
{
    use R;
}

/**
 * @method string getUid
 * @method self withUid(string $uid)
 * @method string getFeature
 * @method self withFeature(string $feature)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class SetNasBetaStatus extends Roa
{
    use R;
}

/**
 * @method string getVolumes
 * @method self withVolumes(string $volumes)
 * @method string getAuthType
 * @method self withAuthType(string $authType)
 */
class SetUserVolumeSkipAuth extends Roa
{
    use R;
}

/**
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method string getCountLimit
 * @method self withCountLimit(string $countLimit)
 */
class SetUserVolumeCountLimit extends Roa
{
    use R;
}

/**
 * @method string getResourceOwner
 * @method self withResourceOwner(string $resourceOwner)
 * @method string getFileSystemName
 * @method self withFileSystemName(string $fileSystemName)
 * @method string getAccessGroupName
 * @method self withAccessGroupName(string $accessGroupName)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 */
class CreateMountTargetInternal extends Roa
{
    use R;
}

/**
 * @method string getVolumeId
 * @method self withVolumeId(string $volumeId)
 * @method string getPackageId
 * @method self withPackageId(string $packageId)
 */
class UnBindVolumeStoragePackage extends Roa
{
    use R;
}

/**
 * @method string getVolumeId
 * @method self withVolumeId(string $volumeId)
 * @method string getPackageId
 * @method self withPackageId(string $packageId)
 */
class BindVolumeStoragePackage extends Roa
{
    use R;
}

/**
 * @method string getStorageId
 * @method self withStorageId(string $storageId)
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getFsName
 * @method self withFsName(string $fsName)
 */
class RemoveFiNasPoolUserFromVolume extends Roa
{
    use R;
}

/**
 * @method string getStorageId
 * @method self withStorageId(string $storageId)
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getQuotaSize
 * @method self withQuotaSize(string $quotaSize)
 * @method string getPasswd
 * @method self withPasswd(string $passwd)
 */
class ModifyFiNasPoolUser extends Roa
{
    use R;
}

/**
 * @method string getStorageId
 * @method self withStorageId(string $storageId)
 * @method string getFsName
 * @method self withFsName(string $fsName)
 */
class DeleteFiNasPoolVolume extends Roa
{
    use R;
}

/**
 * @method string getStorageId
 * @method self withStorageId(string $storageId)
 * @method string getUserName
 * @method self withUserName(string $userName)
 */
class DeleteFiNasPoolUser extends Roa
{
    use R;
}

/**
 * @method string getUid
 * @method self withUid(string $uid)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class SetNasPlusBetaStatus extends Roa
{
    use R;
}

class ListNasPlusBeta extends Roa
{
    use R;
}

/**
 * @method string getStorageId
 * @method self withStorageId(string $storageId)
 */
class GetFiNasTargetIp extends Roa
{
    use R;
}

/**
 * @method string getStorageId
 * @method self withStorageId(string $storageId)
 */
class DescribeFiNasStoragePools extends Roa
{
    use R;
}

/**
 * @method string getStorageId
 * @method self withStorageId(string $storageId)
 */
class DescribeFiNasPoolVolumes extends Roa
{
    use R;
}

/**
 * @method string getStorageId
 * @method self withStorageId(string $storageId)
 */
class DescribeFiNasPoolUsers extends Roa
{
    use R;
}

/**
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVswId
 * @method self withVswId(string $vswId)
 * @method string getPoolSize
 * @method self withPoolSize(string $poolSize)
 */
class CreateFiNasStoragePool extends Roa
{
    use R;
}

/**
 * @method string getStorageId
 * @method self withStorageId(string $storageId)
 * @method string getFsName
 * @method self withFsName(string $fsName)
 * @method string getQuotaSize
 * @method self withQuotaSize(string $quotaSize)
 */
class CreateFiNasPoolVolume extends Roa
{
    use R;
}

/**
 * @method string getStorageId
 * @method self withStorageId(string $storageId)
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getQuotaSize
 * @method self withQuotaSize(string $quotaSize)
 * @method string getPasswd
 * @method self withPasswd(string $passwd)
 */
class CreateFiNasPoolUser extends Roa
{
    use R;
}

class CheckNasPlusBeta extends Roa
{
    use R;
}

/**
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getPhone
 * @method self withPhone(string $phone)
 * @method string getCompany
 * @method self withCompany(string $company)
 * @method string getDesc
 * @method self withDesc(string $desc)
 */
class ApplyNasPlusBeta extends Roa
{
    use R;
}

/**
 * @method string getStorageId
 * @method self withStorageId(string $storageId)
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getFsName
 * @method self withFsName(string $fsName)
 * @method string getMode
 * @method self withMode(string $mode)
 */
class AddFiNasPoolUserToVolume extends Roa
{
    use R;
}

/**
 * @method string getUid
 * @method self withUid(string $uid)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class SetNasSmbBetaStatus extends Roa
{
    use R;
}

class ListNasSmbBeta extends Roa
{
    use R;
}

class CheckNasSmbBeta extends Roa
{
    use R;
}

/**
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getPhone
 * @method self withPhone(string $phone)
 * @method string getCompany
 * @method self withCompany(string $company)
 * @method string getDesc
 * @method self withDesc(string $desc)
 */
class ApplyNasSmbBeta extends Roa
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getproduct
 * @method self withproduct(string $product)
 * @method string getversion
 * @method self withversion(string $version)
 * @method string getaction
 * @method self withaction(string $action)
 * @method string getregionId
 * @method self withregionId(string $regionId)
 * @method string getdomain
 * @method self withdomain(string $domain)
 */
class RefundNasPackage extends Roa
{
    use R;
}

class DescribeVolumeStoragePackages extends Roa
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getproduct
 * @method self withproduct(string $product)
 * @method string getversion
 * @method self withversion(string $version)
 * @method string getaction
 * @method self withaction(string $action)
 * @method string getregionId
 * @method self withregionId(string $regionId)
 * @method string getdomain
 * @method self withdomain(string $domain)
 */
class ProduceNasPackage extends Roa
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getproduct
 * @method self withproduct(string $product)
 * @method string getversion
 * @method self withversion(string $version)
 * @method string getaction
 * @method self withaction(string $action)
 * @method string getregionId
 * @method self withregionId(string $regionId)
 * @method string getdomain
 * @method self withdomain(string $domain)
 */
class FillNasPackageSpec extends Roa
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getproduct
 * @method self withproduct(string $product)
 * @method string getversion
 * @method self withversion(string $version)
 * @method string getaction
 * @method self withaction(string $action)
 * @method string getregionId
 * @method self withregionId(string $regionId)
 * @method string getdomain
 * @method self withdomain(string $domain)
 */
class CompleteNasPackageOrder extends Roa
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getproduct
 * @method self withproduct(string $product)
 * @method string getversion
 * @method self withversion(string $version)
 * @method string getaction
 * @method self withaction(string $action)
 * @method string getregionId
 * @method self withregionId(string $regionId)
 * @method string getdomain
 * @method self withdomain(string $domain)
 */
class CheckNasPackageOrder extends Roa
{
    use R;
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName(string $fileSystemName)
 * @method string getFileSystemUser
 * @method self withFileSystemUser(string $fileSystemUser)
 */
class DescribeFileSystemOptionalUsers extends Roa
{
    use R;
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName(string $fileSystemName)
 * @method string getFileSystemUser
 * @method self withFileSystemUser(string $fileSystemUser)
 */
class DeleteFileSystemOptionalUser extends Roa
{
    use R;
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName(string $fileSystemName)
 * @method string getFileSystemUser
 * @method self withFileSystemUser(string $fileSystemUser)
 */
class CreateFileSystemOptionalUser extends Roa
{
    use R;
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName(string $fileSystemName)
 * @method string getFileSystemDesc
 * @method self withFileSystemDesc(string $fileSystemDesc)
 */
class UpdateFileSystemInfo extends Roa
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getproduct
 * @method self withproduct(string $product)
 * @method string getversion
 * @method self withversion(string $version)
 * @method string getaction
 * @method self withaction(string $action)
 * @method string getregionId
 * @method self withregionId(string $regionId)
 * @method string getdomain
 * @method self withdomain(string $domain)
 */
class ProduceInstance extends Roa
{
    use R;
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName(string $fileSystemName)
 * @method string getMountTargetId
 * @method self withMountTargetId(string $mountTargetId)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class ModifyMountTargetStatus extends Roa
{
    use R;
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName(string $fileSystemName)
 * @method string getMountTargetId
 * @method self withMountTargetId(string $mountTargetId)
 * @method string getAccessGroupName
 * @method self withAccessGroupName(string $accessGroupName)
 */
class ModifyMountTargetAccessGroup extends Roa
{
    use R;
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName(string $accessGroupName)
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp(string $sourceCidrIp)
 * @method string getPolicy
 * @method self withPolicy(string $policy)
 * @method string getSquashType
 * @method self withSquashType(string $squashType)
 * @method string getPriority
 * @method self withPriority(string $priority)
 */
class ModifyAccessRule extends Roa
{
    use R;
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName(string $accessGroupName)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyAccessGroup extends Roa
{
    use R;
}

class ListRegion extends Roa
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getproduct
 * @method self withproduct(string $product)
 * @method string getversion
 * @method self withversion(string $version)
 * @method string getaction
 * @method self withaction(string $action)
 * @method string getregionId
 * @method self withregionId(string $regionId)
 * @method string getdomain
 * @method self withdomain(string $domain)
 */
class FillInstanceParam extends Roa
{
    use R;
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName(string $fileSystemName)
 */
class DescribeMountTargets extends Roa
{
    use R;
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName(string $fileSystemName)
 */
class DescribeFileSystems extends Roa
{
    use R;
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName(string $accessGroupName)
 */
class DescribeAccessRules extends Roa
{
    use R;
}

class DescribeAccessGroups extends Roa
{
    use R;
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName(string $fileSystemName)
 * @method string getMountTargetId
 * @method self withMountTargetId(string $mountTargetId)
 */
class DeleteMountTarget extends Roa
{
    use R;
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName(string $fileSystemName)
 */
class DeleteFileSystem extends Roa
{
    use R;
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName(string $accessGroupName)
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 */
class DeleteAccessRule extends Roa
{
    use R;
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName(string $accessGroupName)
 */
class DeleteAccessGroup extends Roa
{
    use R;
}

/**
 * @method string getFileSystemName
 * @method self withFileSystemName(string $fileSystemName)
 * @method string getAccessGroupName
 * @method self withAccessGroupName(string $accessGroupName)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 */
class CreateMountTarget extends Roa
{
    use R;
}

/**
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getFileSystemType
 * @method self withFileSystemType(string $fileSystemType)
 * @method string getProtocolType
 * @method self withProtocolType(string $protocolType)
 */
class CreateFileSystem extends Roa
{
    use R;
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName(string $accessGroupName)
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp(string $sourceCidrIp)
 * @method string getPolicy
 * @method self withPolicy(string $policy)
 * @method string getSquashType
 * @method self withSquashType(string $squashType)
 * @method string getPriority
 * @method self withPriority(string $priority)
 */
class CreateAccessRule extends Roa
{
    use R;
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName(string $accessGroupName)
 * @method string getAccessGroupType
 * @method self withAccessGroupType(string $accessGroupType)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class CreateAccessGroup extends Roa
{
    use R;
}
