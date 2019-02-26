<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getVolume
 * @method self withVolume
 */
final class DescribeTieringJobs extends RpcRequest
{
}

/**
 * @method string getVolume
 * @method self withVolume
 * @method string getName
 * @method self withName
 * @method string getType
 * @method self withType
 * @method string getPath
 * @method self withPath
 * @method Boolean getRecursive
 * @method self withRecursive
 * @method string getPolicy
 * @method self withPolicy
 * @method Integer getWeekday
 * @method self withWeekday
 * @method Integer getHour
 * @method self withHour
 * @method Boolean getEnabled
 * @method self withEnabled
 */
final class ModifyTieringJob extends RpcRequest
{
}

/**
 * @method string getVolume
 * @method self withVolume
 * @method string getName
 * @method self withName
 */
final class DeleteTieringJob extends RpcRequest
{
}

/**
 * @method string getVolume
 * @method self withVolume
 * @method string getName
 * @method self withName
 * @method string getType
 * @method self withType
 * @method string getPath
 * @method self withPath
 * @method Boolean getRecursive
 * @method self withRecursive
 * @method string getPolicy
 * @method self withPolicy
 * @method Integer getWeekday
 * @method self withWeekday
 * @method Integer getHour
 * @method self withHour
 * @method Boolean getEnabled
 * @method self withEnabled
 */
final class CreateTieringJob extends RpcRequest
{
}

final class DescribeTieringPolicies extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 */
final class DeleteTieringPolicy extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method Long getMtime
 * @method self withMtime
 * @method Long getAtime
 * @method self withAtime
 * @method Long getCtime
 * @method self withCtime
 * @method Long getSize
 * @method self withSize
 * @method string getFileName
 * @method self withFileName
 * @method Long getRecallTime
 * @method self withRecallTime
 */
final class ModifyTieringPolicy extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method Long getMtime
 * @method self withMtime
 * @method Long getAtime
 * @method self withAtime
 * @method Long getCtime
 * @method self withCtime
 * @method Long getSize
 * @method self withSize
 * @method string getFileName
 * @method self withFileName
 * @method Long getRecallTime
 * @method self withRecallTime
 * @method Boolean getCheckLimit
 * @method self withCheckLimit
 */
final class CreateTieringPolicy extends RpcRequest
{
}

final class DescribeZones extends RpcRequest
{
}

/**
 * @method string getFsId
 * @method self withFsId
 * @method string getFsDesc
 * @method self withFsDesc
 * @method Long getBandwidth
 * @method self withBandwidth
 * @method Long getCapacity
 * @method self withCapacity
 */
final class CPFSModifyFileSystem extends RpcRequest
{
}

/**
 * @method string getFsId
 * @method self withFsId
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class CPFSDescribeFileSystems extends RpcRequest
{
}

/**
 * @method string getFsId
 * @method self withFsId
 */
final class CPFSDeleteFileSystem extends RpcRequest
{
}

/**
 * @method string getFsDesc
 * @method self withFsDesc
 * @method string getFsSpec
 * @method self withFsSpec
 * @method Long getBandwidth
 * @method self withBandwidth
 * @method Long getCapacity
 * @method self withCapacity
 * @method string getNetworkType
 * @method self withNetworkType
 * @method string getZoneId
 * @method self withZoneId
 * @method string getVpcId
 * @method self withVpcId
 * @method string getVSwitchId
 * @method self withVSwitchId
 */
final class CPFSCreateFileSystem extends RpcRequest
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

/**
 * @method string getFileSystemId
 * @method self withFileSystemId
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
 * @method string getStorageType
 * @method self withStorageType
 * @method string getProtocolType
 * @method self withProtocolType
 * @method string getDescription
 * @method self withDescription
 */
final class CreateFileSystem extends RpcRequest
{
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp
 * @method string getRWAccessType
 * @method self withRWAccessType
 * @method string getUserAccessType
 * @method self withUserAccessType
 * @method Integer getPriority
 * @method self withPriority
 */
final class CreateAccessRule extends RpcRequest
{
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName
 * @method string getAccessRuleId
 * @method self withAccessRuleId
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class DescribeAccessRules extends RpcRequest
{
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class DescribeAccessGroups extends RpcRequest
{
}

/**
 * @method string getFileSystemId
 * @method self withFileSystemId
 * @method string getMountTargetDomain
 * @method self withMountTargetDomain
 */
final class DeleteMountTarget extends RpcRequest
{
}

/**
 * @method string getFileSystemId
 * @method self withFileSystemId
 */
final class DeleteFileSystem extends RpcRequest
{
}

/**
 * @method string getAccessGroupName
 * @method self withAccessGroupName
 * @method string getAccessRuleId
 * @method self withAccessRuleId
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
 * @method string getAccessGroupName
 * @method self withAccessGroupName
 * @method string getAccessRuleId
 * @method self withAccessRuleId
 * @method string getSourceCidrIp
 * @method self withSourceCidrIp
 * @method string getRWAccessType
 * @method self withRWAccessType
 * @method string getUserAccessType
 * @method self withUserAccessType
 * @method Integer getPriority
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

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class DescribeRegions extends RpcRequest
{
}

/**
 * @method string getFileSystemId
 * @method self withFileSystemId
 * @method string getMountTargetDomain
 * @method self withMountTargetDomain
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class DescribeMountTargets extends RpcRequest
{
}

/**
 * @method string getFileSystemId
 * @method self withFileSystemId
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class DescribeFileSystems extends RpcRequest
{
}

/**
 * @method string getFileSystemId
 * @method self withFileSystemId
 * @method string getMountTargetDomain
 * @method self withMountTargetDomain
 * @method string getAccessGroupName
 * @method self withAccessGroupName
 * @method string getStatus
 * @method self withStatus
 */
final class ModifyMountTarget extends RpcRequest
{
}

/**
 * @method string getFileSystemId
 * @method self withFileSystemId
 * @method string getDescription
 * @method self withDescription
 */
final class ModifyFileSystem extends RpcRequest
{
}
