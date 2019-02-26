<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getQueueName
 * @method self withQueueName
 */
final class AddQueue extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getQueueName
 * @method self withQueueName
 */
final class DeleteQueue extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getQueueName
 * @method self withQueueName
 * @method RepeatList getNode
 * @method self withNode
 */
final class SetQueue extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getQueueName
 * @method self withQueueName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListNodesByQueue extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getCidrIp
 * @method self withCidrIp
 * @method Integer getPort
 * @method self withPort
 */
final class StopVisualService extends RpcRequest
{
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListCpfsFileSystems extends RpcRequest
{
}

final class ListAvailableFileSystemTypes extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getCidrIp
 * @method self withCidrIp
 * @method Integer getPort
 * @method self withPort
 */
final class StartVisualService extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 */
final class GetVisualServiceStatus extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getRunasUser
 * @method self withRunasUser
 * @method string getRunasUserPassword
 * @method self withRunasUserPassword
 * @method string getPasswd
 * @method self withPasswd
 */
final class ModifyVisualServicePasswd extends RpcRequest
{
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListClustersMeta extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getRunasUser
 * @method self withRunasUser
 * @method string getRunasUserPassword
 * @method self withRunasUserPassword
 * @method string getContent
 * @method self withContent
 * @method string getTargetFile
 * @method self withTargetFile
 */
final class CreateJobFile extends RpcRequest
{
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListFileSystemWithMountTargets extends RpcRequest
{
}

/**
 * @method string getZoneId
 * @method self withZoneId
 * @method string getSpotStrategy
 * @method self withSpotStrategy
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType
 */
final class ListAvailableEcsTypes extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 */
final class ListQueues extends RpcRequest
{
}

/**
 * @method RepeatList getCommodities
 * @method self withCommodities
 * @method string getPriceUnit
 * @method self withPriceUnit
 * @method string getChargeType
 * @method self withChargeType
 * @method string getOrderType
 * @method self withOrderType
 */
final class DescribePrice extends RpcRequest
{
}

/**
 * @method string getImageId
 * @method self withImageId
 * @method string getPriceUnit
 * @method self withPriceUnit
 * @method string getSkuCode
 * @method self withSkuCode
 * @method Integer getPeriod
 * @method self withPeriod
 * @method Integer getAmount
 * @method self withAmount
 * @method string getOrderType
 * @method self withOrderType
 */
final class DescribeImagePrice extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getProfilingId
 * @method self withProfilingId
 */
final class GetCloudMetricProfiling extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getHostName
 * @method self withHostName
 * @method Integer getProcessId
 * @method self withProcessId
 * @method Integer getDuration
 * @method self withDuration
 * @method Integer getFreq
 * @method self withFreq
 */
final class RunCloudMetricProfiling extends RpcRequest
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
final class ListCloudMetricProfilings extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getRepository
 * @method self withRepository
 * @method string getImageTag
 * @method self withImageTag
 * @method string getContainerType
 * @method self withContainerType
 */
final class DeleteImage extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getRepository
 * @method self withRepository
 * @method string getImageTag
 * @method self withImageTag
 * @method string getContainerType
 * @method self withContainerType
 */
final class DescribeImage extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getDBType
 * @method self withDBType
 * @method string getDBUsername
 * @method self withDBUsername
 * @method string getDBPassword
 * @method self withDBPassword
 * @method string getDBServerInfo
 * @method self withDBServerInfo
 * @method string getDefaultRepoLocation
 * @method self withDefaultRepoLocation
 * @method Integer getPullUpdateTimeout
 * @method self withPullUpdateTimeout
 * @method string getImageExpirationTimeout
 * @method self withImageExpirationTimeout
 * @method RepeatList getRepo
 * @method self withRepo
 */
final class ModifyImageGatewayConfig extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getNodes
 * @method self withNodes
 */
final class AddLocalNodes extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method Integer getFrom
 * @method self withFrom
 * @method Integer getTo
 * @method self withTo
 * @method Boolean getReverse
 * @method self withReverse
 * @method string getAggregationType
 * @method self withAggregationType
 * @method Integer getAggregationInterval
 * @method self withAggregationInterval
 * @method string getMetricScope
 * @method self withMetricScope
 * @method string getFilter
 * @method self withFilter
 * @method string getMetricCategories
 * @method self withMetricCategories
 */
final class GetCloudMetricLogs extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 */
final class DescribeImageGatewayConfig extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getRepository
 * @method self withRepository
 * @method string getImageTag
 * @method self withImageTag
 * @method string getContainerType
 * @method self withContainerType
 */
final class PullImage extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getContainerType
 * @method self withContainerType
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListContainerImages extends RpcRequest
{
}

/**
 * @method string getContainerId
 * @method self withContainerId
 * @method string getDescription
 * @method self withDescription
 */
final class ModifyContainerAppAttributes extends RpcRequest
{
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListContainerApps extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getNode
 * @method self withNode
 */
final class GetHybridClusterConfig extends RpcRequest
{
}

/**
 * @method string getContainerId
 * @method self withContainerId
 */
final class DescribeContainerApp extends RpcRequest
{
}

/**
 * @method RepeatList getContainerApp
 * @method self withContainerApp
 */
final class DeleteContainerApps extends RpcRequest
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
 * @method string getClientVersion
 * @method self withClientVersion
 * @method string getOsTag
 * @method self withOsTag
 * @method string getDomain
 * @method self withDomain
 * @method string getNodes
 * @method self withNodes
 * @method string getLocation
 * @method self withLocation
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId
 * @method string getSecurityGroupName
 * @method self withSecurityGroupName
 * @method string getVpcId
 * @method self withVpcId
 * @method string getVSwitchId
 * @method self withVSwitchId
 * @method string getEcsOrder.Compute.InstanceType
 * @method self withEcsOrder.Compute.InstanceType
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
 * @method string getOnPremiseVolumeProtocol
 * @method self withOnPremiseVolumeProtocol
 * @method string getOnPremiseVolumeMountPoint
 * @method self withOnPremiseVolumeMountPoint
 * @method string getOnPremiseVolumeRemotePath
 * @method self withOnPremiseVolumeRemotePath
 * @method string getOnPremiseVolumeLocalPath
 * @method self withOnPremiseVolumeLocalPath
 * @method string getPassword
 * @method self withPassword
 * @method string getKeyPairName
 * @method self withKeyPairName
 * @method RepeatList getApplication
 * @method self withApplication
 * @method RepeatList getPostInstallScript
 * @method self withPostInstallScript
 * @method string getJobQueue
 * @method self withJobQueue
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 */
final class CreateHybridCluster extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getRepository
 * @method self withRepository
 * @method string getDescription
 * @method self withDescription
 * @method string getImageTag
 * @method self withImageTag
 * @method string getContainerType
 * @method self withContainerType
 */
final class AddContainerApp extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getCommandId
 * @method self withCommandId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListCommands extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getCommandId
 * @method self withCommandId
 */
final class ListInvocationStatus extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getCommandId
 * @method self withCommandId
 * @method string getInvokeRecordStatus
 * @method self withInvokeRecordStatus
 * @method RepeatList getInstance
 * @method self withInstance
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListInvocationResults extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getCommand
 * @method self withCommand
 * @method RepeatList getInstance
 * @method self withInstance
 * @method string getWorkingDir
 * @method self withWorkingDir
 * @method Integer getTimeout
 * @method self withTimeout
 */
final class InvokeShellCommand extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 */
final class DescribeAutoScaleConfig extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 */
final class StopCluster extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getRole
 * @method self withRole
 * @method RepeatList getInstance
 * @method self withInstance
 */
final class StartNodes extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 */
final class StartCluster extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getRole
 * @method self withRole
 * @method RepeatList getInstance
 * @method self withInstance
 */
final class StopNodes extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getOsTag
 * @method self withOsTag
 * @method string getAccountType
 * @method self withAccountType
 * @method string getSchedulerType
 * @method self withSchedulerType
 * @method string getImageOwnerAlias
 * @method self withImageOwnerAlias
 * @method string getImageId
 * @method self withImageId
 * @method string getClientVersion
 * @method self withClientVersion
 */
final class RecoverCluster extends RpcRequest
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

final class ListRegions extends RpcRequest
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
 * @method RepeatList getUser
 * @method self withUser
 */
final class ModifyUserPasswords extends RpcRequest
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
 */
final class GetAutoScaleConfig extends RpcRequest
{
}

/**
 * @method string getZoneId
 * @method self withZoneId
 * @method string getSpotStrategy
 * @method self withSpotStrategy
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType
 */
final class ListPreferredEcsTypes extends RpcRequest
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
 * @method string getInstanceType
 * @method self withInstanceType
 * @method string getComputeSpotStrategy
 * @method self withComputeSpotStrategy
 * @method string getComputeSpotPriceLimit
 * @method self withComputeSpotPriceLimit
 * @method string getEcsChargeType
 * @method self withEcsChargeType
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getPeriodUnit
 * @method self withPeriodUnit
 * @method string getAutoRenew
 * @method self withAutoRenew
 * @method Integer getAutoRenewPeriod
 * @method self withAutoRenewPeriod
 * @method string getJobQueue
 * @method self withJobQueue
 * @method string getCreateMode
 * @method self withCreateMode
 * @method Integer getSystemDiskSize
 * @method self withSystemDiskSize
 */
final class AddNodes extends RpcRequest
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
 * @method string getSpotStrategy
 * @method self withSpotStrategy
 * @method Float getSpotPriceLimit
 * @method self withSpotPriceLimit
 * @method RepeatList getQueues
 * @method self withQueues
 */
final class SetAutoScaleConfig extends RpcRequest
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
 * @method string getJobs
 * @method self withJobs
 */
final class DeleteJobs extends RpcRequest
{
}

final class ListImages extends RpcRequest
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
 * @method RepeatList getInstance
 * @method self withInstance
 */
final class ResetNodes extends RpcRequest
{
}

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
 * @method string getClusterId
 * @method self withClusterId
 * @method RepeatList getUser
 * @method self withUser
 */
final class AddUsers extends RpcRequest
{
}

/**
 * @method string getEhpcVersion
 * @method self withEhpcVersion
 */
final class ListSoftwares extends RpcRequest
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
 * @method string getClusterId
 * @method self withClusterId
 * @method string getCommandLine
 * @method self withCommandLine
 * @method string getRunasUser
 * @method self withRunasUser
 * @method string getRunasUserPassword
 * @method self withRunasUserPassword
 * @method string getName
 * @method self withName
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
 * @method string getInputFileUrl
 * @method self withInputFileUrl
 * @method string getUnzipCmd
 * @method self withUnzipCmd
 * @method string getPostCmdLine
 * @method self withPostCmdLine
 * @method string getContainerId
 * @method self withContainerId
 * @method string getJobQueue
 * @method self withJobQueue
 */
final class SubmitJob extends RpcRequest
{
}

final class ListCurrentClientVersion extends RpcRequest
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
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 */
final class ModifyClusterAttributes extends RpcRequest
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
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListUsers extends RpcRequest
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
 * @method string getClientVersion
 * @method self withClientVersion
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
 * @method string getDeployMode
 * @method self withDeployMode
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
 * @method RepeatList getPostInstallScript
 * @method self withPostInstallScript
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getPeriodUnit
 * @method self withPeriodUnit
 * @method string getAutoRenew
 * @method self withAutoRenew
 * @method Integer getAutoRenewPeriod
 * @method self withAutoRenewPeriod
 * @method string getInputFileUrl
 * @method self withInputFileUrl
 * @method string getJobQueue
 * @method self withJobQueue
 * @method Integer getSystemDiskSize
 * @method self withSystemDiskSize
 * @method string getRemoteVisEnable
 * @method self withRemoteVisEnable
 * @method string getResourceGroupId
 * @method self withResourceGroupId
 */
final class CreateCluster extends RpcRequest
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
 * @method string getTemplates
 * @method self withTemplates
 */
final class DeleteJobTemplates extends RpcRequest
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
