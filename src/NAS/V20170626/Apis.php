<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DescribeTieringJobs describeTieringJobs($options = [])
 * @method ModifyTieringJob modifyTieringJob($options = [])
 * @method DeleteTieringJob deleteTieringJob($options = [])
 * @method CreateTieringJob createTieringJob($options = [])
 * @method DescribeTieringPolicies describeTieringPolicies($options = [])
 * @method DeleteTieringPolicy deleteTieringPolicy($options = [])
 * @method ModifyTieringPolicy modifyTieringPolicy($options = [])
 * @method CreateTieringPolicy createTieringPolicy($options = [])
 * @method DescribeZones describeZones($options = [])
 * @method CPFSModifyFileSystem cPFSModifyFileSystem($options = [])
 * @method CPFSDescribeFileSystems cPFSDescribeFileSystems($options = [])
 * @method CPFSDeleteFileSystem cPFSDeleteFileSystem($options = [])
 * @method CPFSCreateFileSystem cPFSCreateFileSystem($options = [])
 * @method CreateAccessGroup createAccessGroup($options = [])
 * @method CreateMountTarget createMountTarget($options = [])
 * @method CreateFileSystem createFileSystem($options = [])
 * @method CreateAccessRule createAccessRule($options = [])
 * @method DescribeAccessRules describeAccessRules($options = [])
 * @method DescribeAccessGroups describeAccessGroups($options = [])
 * @method DeleteMountTarget deleteMountTarget($options = [])
 * @method DeleteFileSystem deleteFileSystem($options = [])
 * @method DeleteAccessRule deleteAccessRule($options = [])
 * @method DeleteAccessGroup deleteAccessGroup($options = [])
 * @method ModifyAccessRule modifyAccessRule($options = [])
 * @method ModifyAccessGroup modifyAccessGroup($options = [])
 * @method DescribeRegions describeRegions($options = [])
 * @method DescribeMountTargets describeMountTargets($options = [])
 * @method DescribeFileSystems describeFileSystems($options = [])
 * @method ModifyMountTarget modifyMountTarget($options = [])
 * @method ModifyFileSystem modifyFileSystem($options = [])
 */
class V20170626
{
    use ApiResolverTrait;
}

/**
 * @method string getVolume
 * @method self withVolume(string $volume)
 */
class DescribeTieringJobs extends Roa
{
    use R;
}

/**
 * @method string getVolume
 * @method self withVolume(string $volume)
 * @method string getName
 * @method self withName(string $name)
 * @method string getType
 * @method self withType(string $type)
 * @method string getPath
 * @method self withPath(string $path)
 * @method bool getRecursive
 * @method self withRecursive(bool $recursive)
 * @method string getPolicy
 * @method self withPolicy(string $policy)
 * @method Integer getWeekday
 * @method self withWeekday(Integer $weekday)
 * @method Integer getHour
 * @method self withHour(Integer $hour)
 * @method bool getEnabled
 * @method self withEnabled(bool $enabled)
 */
class ModifyTieringJob extends Roa
{
    use R;
}

/**
 * @method string getVolume
 * @method self withVolume(string $volume)
 * @method string getName
 * @method self withName(string $name)
 */
class DeleteTieringJob extends Roa
{
    use R;
}

/**
 * @method string getVolume
 * @method self withVolume(string $volume)
 * @method string getName
 * @method self withName(string $name)
 * @method string getType
 * @method self withType(string $type)
 * @method string getPath
 * @method self withPath(string $path)
 * @method bool getRecursive
 * @method self withRecursive(bool $recursive)
 * @method string getPolicy
 * @method self withPolicy(string $policy)
 * @method Integer getWeekday
 * @method self withWeekday(Integer $weekday)
 * @method Integer getHour
 * @method self withHour(Integer $hour)
 * @method bool getEnabled
 * @method self withEnabled(bool $enabled)
 */
class CreateTieringJob extends Roa
{
    use R;
}

class DescribeTieringPolicies extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 */
class DeleteTieringPolicy extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method int getMtime
 * @method self withMtime(int $mtime)
 * @method int getAtime
 * @method self withAtime(int $atime)
 * @method int getCtime
 * @method self withCtime(int $ctime)
 * @method int getSize
 * @method self withSize(int $size)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method int getRecallTime
 * @method self withRecallTime(int $recallTime)
 */
class ModifyTieringPolicy extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method int getMtime
 * @method self withMtime(int $mtime)
 * @method int getAtime
 * @method self withAtime(int $atime)
 * @method int getCtime
 * @method self withCtime(int $ctime)
 * @method int getSize
 * @method self withSize(int $size)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method int getRecallTime
 * @method self withRecallTime(int $recallTime)
 * @method bool getCheckLimit
 * @method self withCheckLimit(bool $checkLimit)
 */
class CreateTieringPolicy extends Roa
{
    use R;
}

class DescribeZones extends Roa
{
    use R;
}

/**
 * @method string getFsId
 * @method self withFsId(string $fsId)
 * @method string getFsDesc
 * @method self withFsDesc(string $fsDesc)
 * @method int getBandwidth
 * @method self withBandwidth(int $bandwidth)
 * @method int getCapacity
 * @method self withCapacity(int $capacity)
 */
class CPFSModifyFileSystem extends Roa
{
    use R;
}

/**
 * @method string getFsId
 * @method self withFsId(string $fsId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class CPFSDescribeFileSystems extends Roa
{
    use R;
}

/**
 * @method string getFsId
 * @method self withFsId(string $fsId)
 */
class CPFSDeleteFileSystem extends Roa
{
    use R;
}

/**
 * @method string getFsDesc
 * @method self withFsDesc(string $fsDesc)
 * @method string getFsSpec
 * @method self withFsSpec(string $fsSpec)
 * @method int getBandwidth
 * @method self withBandwidth(int $bandwidth)
 * @method int getCapacity
 * @method self withCapacity(int $capacity)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 */
class CPFSCreateFileSystem extends Roa
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

/**
 * @method string getFileSystemId
 * @method self withFileSystemId(string $fileSystemId)
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
 * @method string getStorageType
 * @method self withStorageType(string $storageType)
 * @method string getProtocolType
 * @method self withProtocolType(string $protocolType)
 * @method string getDescription
 * @method self withDescription(string $description)
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
 * @method string getRWAccessType
 * @method self withRWAccessType(string $rWAccessType)
 * @method string getUserAccessType
 * @method self withUserAccessType(string $userAccessType)
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 */
class CreateAccessRule extends Roa
{
    use R;
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName(string $accessGroupName)
 * @method string getAccessRuleId
 * @method self withAccessRuleId(string $accessRuleId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeAccessRules extends Roa
{
    use R;
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName(string $accessGroupName)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeAccessGroups extends Roa
{
    use R;
}

/**
 * @method string getFileSystemId
 * @method self withFileSystemId(string $fileSystemId)
 * @method string getMountTargetDomain
 * @method self withMountTargetDomain(string $mountTargetDomain)
 */
class DeleteMountTarget extends Roa
{
    use R;
}

/**
 * @method string getFileSystemId
 * @method self withFileSystemId(string $fileSystemId)
 */
class DeleteFileSystem extends Roa
{
    use R;
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName(string $accessGroupName)
 * @method string getAccessRuleId
 * @method self withAccessRuleId(string $accessRuleId)
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
 * @method string getAccessGroupName
 * @method self withAccessGroupName(string $accessGroupName)
 * @method string getAccessRuleId
 * @method self withAccessRuleId(string $accessRuleId)
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp(string $sourceCidrIp)
 * @method string getRWAccessType
 * @method self withRWAccessType(string $rWAccessType)
 * @method string getUserAccessType
 * @method self withUserAccessType(string $userAccessType)
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
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

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeRegions extends Roa
{
    use R;
}

/**
 * @method string getFileSystemId
 * @method self withFileSystemId(string $fileSystemId)
 * @method string getMountTargetDomain
 * @method self withMountTargetDomain(string $mountTargetDomain)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeMountTargets extends Roa
{
    use R;
}

/**
 * @method string getFileSystemId
 * @method self withFileSystemId(string $fileSystemId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeFileSystems extends Roa
{
    use R;
}

/**
 * @method string getFileSystemId
 * @method self withFileSystemId(string $fileSystemId)
 * @method string getMountTargetDomain
 * @method self withMountTargetDomain(string $mountTargetDomain)
 * @method string getAccessGroupName
 * @method self withAccessGroupName(string $accessGroupName)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class ModifyMountTarget extends Roa
{
    use R;
}

/**
 * @method string getFileSystemId
 * @method self withFileSystemId(string $fileSystemId)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyFileSystem extends Roa
{
    use R;
}
