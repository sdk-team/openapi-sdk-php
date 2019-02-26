<?php

namespace AlibabaCloud\EHPC\V20170714;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getImageOwnerAlias
 * @method self withImageOwnerAlias
 * @method string getBaseOsTag
 * @method self withBaseOsTag
 */
final class ListCustomImages extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListJobTemplates extends RpcRequest
{
}

/**
 * @method string getTemplateId
 * @method self withTemplateId
 * @method string getCommandLine
 * @method self withCommandLine
 * @method string getName
 * @method self withName
 * @method string getRunasUser
 * @method self withRunasUser
 * @method Integer getPriority
 * @method self withPriority
 * @method string getPackagePath
 * @method self withPackagePath
 * @method string getStdoutRedirectPath
 * @method self withStdoutRedirectPath
 * @method string getStderrRedirectPath
 * @method self withStderrRedirectPath
 * @method Boolean getReRunable
 * @method self withReRunable
 * @method string getArrayRequest
 * @method self withArrayRequest
 * @method string getVariables
 * @method self withVariables
 */
final class EditJobTemplate extends RpcRequest
{
}

/**
 * @method string getTemplates
 * @method self withTemplates
 */
final class DeleteJobTemplates extends RpcRequest
{
}

/**
 * @method string getCommandLine
 * @method self withCommandLine
 * @method string getName
 * @method self withName
 * @method string getRunasUser
 * @method self withRunasUser
 * @method Integer getPriority
 * @method self withPriority
 * @method string getPackagePath
 * @method self withPackagePath
 * @method string getStdoutRedirectPath
 * @method self withStdoutRedirectPath
 * @method string getStderrRedirectPath
 * @method self withStderrRedirectPath
 * @method Boolean getReRunable
 * @method self withReRunable
 * @method string getArrayRequest
 * @method self withArrayRequest
 * @method string getVariables
 * @method self withVariables
 */
final class CreateJobTemplate extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getClientVersion
 * @method self withClientVersion
 */
final class UpgradeClient extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getCommandLine
 * @method self withCommandLine
 * @method string getName
 * @method self withName
 * @method string getRunasUser
 * @method self withRunasUser
 * @method string getRunasUserPassword
 * @method self withRunasUserPassword
 * @method Integer getPriority
 * @method self withPriority
 * @method string getPackagePath
 * @method self withPackagePath
 * @method string getStdoutRedirectPath
 * @method self withStdoutRedirectPath
 * @method string getStderrRedirectPath
 * @method self withStderrRedirectPath
 * @method Boolean getReRunable
 * @method self withReRunable
 * @method string getArrayRequest
 * @method self withArrayRequest
 * @method string getVariables
 * @method self withVariables
 */
final class SubmitJob extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getJobs
 * @method self withJobs
 */
final class StopJobs extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getRunasUser
 * @method self withRunasUser
 * @method string getRunasUserPassword
 * @method self withRunasUserPassword
 */
final class SetJobUser extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getJobs
 * @method self withJobs
 */
final class RerunJobs extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getRole
 * @method self withRole
 * @method string getHostName
 * @method self withHostName
 * @method Boolean getOnlyDetached
 * @method self withOnlyDetached
 */
final class ListNodesNoPaging extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getOwner
 * @method self withOwner
 * @method string getState
 * @method self withState
 * @method string getRerunable
 * @method self withRerunable
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListJobs extends RpcRequest
{
}

final class ListCurrentClientVersion extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getJobs
 * @method self withJobs
 */
final class DeleteJobs extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method Boolean getEnableAutoGrow
 * @method self withEnableAutoGrow
 * @method Boolean getEnableAutoShrink
 * @method self withEnableAutoShrink
 * @method Integer getGrowIntervalInMinutes
 * @method self withGrowIntervalInMinutes
 * @method Integer getShrinkIntervalInMinutes
 * @method self withShrinkIntervalInMinutes
 * @method Integer getShrinkIdleTimes
 * @method self withShrinkIdleTimes
 * @method Integer getGrowTimeoutInMinutes
 * @method self withGrowTimeoutInMinutes
 * @method Integer getExtraNodesGrowRatio
 * @method self withExtraNodesGrowRatio
 * @method Integer getGrowRatio
 * @method self withGrowRatio
 * @method Integer getMaxNodesInCluster
 * @method self withMaxNodesInCluster
 * @method string getExcludeNodes
 * @method self withExcludeNodes
 */
final class SetAutoScaleConfig extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListClusterLogs extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 */
final class GetAutoScaleConfig extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method RepeatList getInstance
 * @method self withInstance
 */
final class ResetNodes extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method RepeatList getUser
 * @method self withUser
 */
final class ModifyUserPasswords extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method RepeatList getUser
 * @method self withUser
 */
final class ModifyUserGroups extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 */
final class ModifyClusterAttributes extends RpcRequest
{
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListVolumes extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListUsers extends RpcRequest
{
}

/**
 * @method string getEhpcVersion
 * @method self withEhpcVersion
 */
final class ListSoftwares extends RpcRequest
{
}

final class ListRegions extends RpcRequest
{
}

/**
 * @method string getZoneId
 * @method self withZoneId
 * @method string getSpotStrategy
 * @method self withSpotStrategy
 */
final class ListPreferredEcsTypes extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getRole
 * @method self withRole
 * @method string getHostName
 * @method self withHostName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListNodes extends RpcRequest
{
}

final class ListImages extends RpcRequest
{
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListClusters extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 */
final class DescribeCluster extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method RepeatList getUser
 * @method self withUser
 */
final class DeleteUsers extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method RepeatList getInstance
 * @method self withInstance
 * @method Boolean getReleaseInstance
 * @method self withReleaseInstance
 */
final class DeleteNodes extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getReleaseInstance
 * @method self withReleaseInstance
 */
final class DeleteCluster extends RpcRequest
{
}

/**
 * @method string getZoneId
 * @method self withZoneId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getEhpcVersion
 * @method self withEhpcVersion
 * @method string getOsTag
 * @method self withOsTag
 * @method string getAccountType
 * @method self withAccountType
 * @method string getSchedulerType
 * @method self withSchedulerType
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getSecurityGroupName
 * @method self withSecurityGroupName
 * @method string getVpcId
 * @method self withVpcId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getVolumeType
 * @method self withVolumeType
 * @method string getVolumeId
 * @method self withVolumeId
 * @method string getVolumeProtocol
 * @method self withVolumeProtocol
 * @method string getVolumeMountpoint
 * @method self withVolumeMountpoint
 * @method string getRemoteDirectory
 * @method self withRemoteDirectory
 * @method Boolean getHaEnable
 * @method self withHaEnable
 * @method string getEcsChargeType
 * @method self withEcsChargeType
 * @method string getPassword
 * @method self withPassword
 * @method string getKeyPairName
 * @method self withKeyPairName
 * @method string getImageOwnerAlias
 * @method self withImageOwnerAlias
 * @method string getImageId
 * @method self withImageId
 * @method Integer getEcsOrder.Manager.Count
 * @method self withEcsOrder.Manager.Count
 * @method string getEcsOrder.Manager.InstanceType
 * @method self withEcsOrder.Manager.InstanceType
 * @method Integer getEcsOrder.Compute.Count
 * @method self withEcsOrder.Compute.Count
 * @method string getEcsOrder.Compute.InstanceType
 * @method self withEcsOrder.Compute.InstanceType
 * @method Integer getEcsOrder.Login.Count
 * @method self withEcsOrder.Login.Count
 * @method string getEcsOrder.Login.InstanceType
 * @method self withEcsOrder.Login.InstanceType
 * @method string getSccClusterId
 * @method self withSccClusterId
 * @method string getComputeSpotStrategy
 * @method self withComputeSpotStrategy
 * @method string getComputeSpotPriceLimit
 * @method self withComputeSpotPriceLimit
 * @method RepeatList getApplication
 * @method self withApplication
 */
final class CreateCluster extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method RepeatList getUser
 * @method self withUser
 * @method Boolean getReleaseInstance
 * @method self withReleaseInstance
 */
final class AddUsers extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getImageOwnerAlias
 * @method self withImageOwnerAlias
 * @method string getImageId
 * @method self withImageId
 * @method Integer getCount
 * @method self withCount
 * @method string getComputeSpotStrategy
 * @method self withComputeSpotStrategy
 * @method string getComputeSpotPriceLimit
 * @method self withComputeSpotPriceLimit
 */
final class AddNodes extends RpcRequest
{
}
