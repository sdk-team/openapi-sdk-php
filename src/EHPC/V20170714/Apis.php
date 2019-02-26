<?php

namespace AlibabaCloud\EHPC\V20170714;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ListCustomImages listCustomImages($options = [])
 * @method ListJobTemplates listJobTemplates($options = [])
 * @method EditJobTemplate editJobTemplate($options = [])
 * @method DeleteJobTemplates deleteJobTemplates($options = [])
 * @method CreateJobTemplate createJobTemplate($options = [])
 * @method UpgradeClient upgradeClient($options = [])
 * @method SubmitJob submitJob($options = [])
 * @method StopJobs stopJobs($options = [])
 * @method SetJobUser setJobUser($options = [])
 * @method RerunJobs rerunJobs($options = [])
 * @method ListNodesNoPaging listNodesNoPaging($options = [])
 * @method ListJobs listJobs($options = [])
 * @method ListCurrentClientVersion listCurrentClientVersion($options = [])
 * @method DeleteJobs deleteJobs($options = [])
 * @method SetAutoScaleConfig setAutoScaleConfig($options = [])
 * @method ListClusterLogs listClusterLogs($options = [])
 * @method GetAutoScaleConfig getAutoScaleConfig($options = [])
 * @method ResetNodes resetNodes($options = [])
 * @method ModifyUserPasswords modifyUserPasswords($options = [])
 * @method ModifyUserGroups modifyUserGroups($options = [])
 * @method ModifyClusterAttributes modifyClusterAttributes($options = [])
 * @method ListVolumes listVolumes($options = [])
 * @method ListUsers listUsers($options = [])
 * @method ListSoftwares listSoftwares($options = [])
 * @method ListRegions listRegions($options = [])
 * @method ListPreferredEcsTypes listPreferredEcsTypes($options = [])
 * @method ListNodes listNodes($options = [])
 * @method ListImages listImages($options = [])
 * @method ListClusters listClusters($options = [])
 * @method DescribeCluster describeCluster($options = [])
 * @method DeleteUsers deleteUsers($options = [])
 * @method DeleteNodes deleteNodes($options = [])
 * @method DeleteCluster deleteCluster($options = [])
 * @method CreateCluster createCluster($options = [])
 * @method AddUsers addUsers($options = [])
 * @method AddNodes addNodes($options = [])
 */
class V20170714
{
    use ApiResolverTrait;
}

/**
 * @method string getImageOwnerAlias
 * @method self withImageOwnerAlias(string $imageOwnerAlias)
 * @method string getBaseOsTag
 * @method self withBaseOsTag(string $baseOsTag)
 */
class ListCustomImages extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListJobTemplates extends Roa
{
    use R;
}

/**
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 * @method string getCommandLine
 * @method self withCommandLine(string $commandLine)
 * @method string getName
 * @method self withName(string $name)
 * @method string getRunasUser
 * @method self withRunasUser(string $runasUser)
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 * @method string getPackagePath
 * @method self withPackagePath(string $packagePath)
 * @method string getStdoutRedirectPath
 * @method self withStdoutRedirectPath(string $stdoutRedirectPath)
 * @method string getStderrRedirectPath
 * @method self withStderrRedirectPath(string $stderrRedirectPath)
 * @method bool getReRunable
 * @method self withReRunable(bool $reRunable)
 * @method string getArrayRequest
 * @method self withArrayRequest(string $arrayRequest)
 * @method string getVariables
 * @method self withVariables(string $variables)
 */
class EditJobTemplate extends Roa
{
    use R;
}

/**
 * @method string getTemplates
 * @method self withTemplates(string $templates)
 */
class DeleteJobTemplates extends Roa
{
    use R;
}

/**
 * @method string getCommandLine
 * @method self withCommandLine(string $commandLine)
 * @method string getName
 * @method self withName(string $name)
 * @method string getRunasUser
 * @method self withRunasUser(string $runasUser)
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 * @method string getPackagePath
 * @method self withPackagePath(string $packagePath)
 * @method string getStdoutRedirectPath
 * @method self withStdoutRedirectPath(string $stdoutRedirectPath)
 * @method string getStderrRedirectPath
 * @method self withStderrRedirectPath(string $stderrRedirectPath)
 * @method bool getReRunable
 * @method self withReRunable(bool $reRunable)
 * @method string getArrayRequest
 * @method self withArrayRequest(string $arrayRequest)
 * @method string getVariables
 * @method self withVariables(string $variables)
 */
class CreateJobTemplate extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getClientVersion
 * @method self withClientVersion(string $clientVersion)
 */
class UpgradeClient extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getCommandLine
 * @method self withCommandLine(string $commandLine)
 * @method string getName
 * @method self withName(string $name)
 * @method string getRunasUser
 * @method self withRunasUser(string $runasUser)
 * @method string getRunasUserPassword
 * @method self withRunasUserPassword(string $runasUserPassword)
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 * @method string getPackagePath
 * @method self withPackagePath(string $packagePath)
 * @method string getStdoutRedirectPath
 * @method self withStdoutRedirectPath(string $stdoutRedirectPath)
 * @method string getStderrRedirectPath
 * @method self withStderrRedirectPath(string $stderrRedirectPath)
 * @method bool getReRunable
 * @method self withReRunable(bool $reRunable)
 * @method string getArrayRequest
 * @method self withArrayRequest(string $arrayRequest)
 * @method string getVariables
 * @method self withVariables(string $variables)
 */
class SubmitJob extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getJobs
 * @method self withJobs(string $jobs)
 */
class StopJobs extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getRunasUser
 * @method self withRunasUser(string $runasUser)
 * @method string getRunasUserPassword
 * @method self withRunasUserPassword(string $runasUserPassword)
 */
class SetJobUser extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getJobs
 * @method self withJobs(string $jobs)
 */
class RerunJobs extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getRole
 * @method self withRole(string $role)
 * @method string getHostName
 * @method self withHostName(string $hostName)
 * @method bool getOnlyDetached
 * @method self withOnlyDetached(bool $onlyDetached)
 */
class ListNodesNoPaging extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getOwner
 * @method self withOwner(string $owner)
 * @method string getState
 * @method self withState(string $state)
 * @method string getRerunable
 * @method self withRerunable(string $rerunable)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListJobs extends Roa
{
    use R;
}

class ListCurrentClientVersion extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getJobs
 * @method self withJobs(string $jobs)
 */
class DeleteJobs extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method bool getEnableAutoGrow
 * @method self withEnableAutoGrow(bool $enableAutoGrow)
 * @method bool getEnableAutoShrink
 * @method self withEnableAutoShrink(bool $enableAutoShrink)
 * @method Integer getGrowIntervalInMinutes
 * @method self withGrowIntervalInMinutes(Integer $growIntervalInMinutes)
 * @method Integer getShrinkIntervalInMinutes
 * @method self withShrinkIntervalInMinutes(Integer $shrinkIntervalInMinutes)
 * @method Integer getShrinkIdleTimes
 * @method self withShrinkIdleTimes(Integer $shrinkIdleTimes)
 * @method Integer getGrowTimeoutInMinutes
 * @method self withGrowTimeoutInMinutes(Integer $growTimeoutInMinutes)
 * @method Integer getExtraNodesGrowRatio
 * @method self withExtraNodesGrowRatio(Integer $extraNodesGrowRatio)
 * @method Integer getGrowRatio
 * @method self withGrowRatio(Integer $growRatio)
 * @method Integer getMaxNodesInCluster
 * @method self withMaxNodesInCluster(Integer $maxNodesInCluster)
 * @method string getExcludeNodes
 * @method self withExcludeNodes(string $excludeNodes)
 */
class SetAutoScaleConfig extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListClusterLogs extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class GetAutoScaleConfig extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method array getInstance
 * @method self withInstance(array $instance)
 */
class ResetNodes extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method array getUser
 * @method self withUser(array $user)
 */
class ModifyUserPasswords extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method array getUser
 * @method self withUser(array $user)
 */
class ModifyUserGroups extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyClusterAttributes extends Roa
{
    use R;
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListVolumes extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListUsers extends Roa
{
    use R;
}

/**
 * @method string getEhpcVersion
 * @method self withEhpcVersion(string $ehpcVersion)
 */
class ListSoftwares extends Roa
{
    use R;
}

class ListRegions extends Roa
{
    use R;
}

/**
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getSpotStrategy
 * @method self withSpotStrategy(string $spotStrategy)
 */
class ListPreferredEcsTypes extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getRole
 * @method self withRole(string $role)
 * @method string getHostName
 * @method self withHostName(string $hostName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListNodes extends Roa
{
    use R;
}

class ListImages extends Roa
{
    use R;
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListClusters extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class DescribeCluster extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method array getUser
 * @method self withUser(array $user)
 */
class DeleteUsers extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method array getInstance
 * @method self withInstance(array $instance)
 * @method bool getReleaseInstance
 * @method self withReleaseInstance(bool $releaseInstance)
 */
class DeleteNodes extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getReleaseInstance
 * @method self withReleaseInstance(string $releaseInstance)
 */
class DeleteCluster extends Roa
{
    use R;
}

/**
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getEhpcVersion
 * @method self withEhpcVersion(string $ehpcVersion)
 * @method string getOsTag
 * @method self withOsTag(string $osTag)
 * @method string getAccountType
 * @method self withAccountType(string $accountType)
 * @method string getSchedulerType
 * @method self withSchedulerType(string $schedulerType)
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getSecurityGroupName
 * @method self withSecurityGroupName(string $securityGroupName)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getVolumeType
 * @method self withVolumeType(string $volumeType)
 * @method string getVolumeId
 * @method self withVolumeId(string $volumeId)
 * @method string getVolumeProtocol
 * @method self withVolumeProtocol(string $volumeProtocol)
 * @method string getVolumeMountpoint
 * @method self withVolumeMountpoint(string $volumeMountpoint)
 * @method string getRemoteDirectory
 * @method self withRemoteDirectory(string $remoteDirectory)
 * @method bool getHaEnable
 * @method self withHaEnable(bool $haEnable)
 * @method string getEcsChargeType
 * @method self withEcsChargeType(string $ecsChargeType)
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method string getKeyPairName
 * @method self withKeyPairName(string $keyPairName)
 * @method string getImageOwnerAlias
 * @method self withImageOwnerAlias(string $imageOwnerAlias)
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method Integer getEcsOrderManagerCount
 * @method self withEcsOrderManagerCount(Integer $ecsOrderManagerCount)
 * @method string getEcsOrderManagerInstanceType
 * @method self withEcsOrderManagerInstanceType(string $ecsOrderManagerInstanceType)
 * @method Integer getEcsOrderComputeCount
 * @method self withEcsOrderComputeCount(Integer $ecsOrderComputeCount)
 * @method string getEcsOrderComputeInstanceType
 * @method self withEcsOrderComputeInstanceType(string $ecsOrderComputeInstanceType)
 * @method Integer getEcsOrderLoginCount
 * @method self withEcsOrderLoginCount(Integer $ecsOrderLoginCount)
 * @method string getEcsOrderLoginInstanceType
 * @method self withEcsOrderLoginInstanceType(string $ecsOrderLoginInstanceType)
 * @method string getSccClusterId
 * @method self withSccClusterId(string $sccClusterId)
 * @method string getComputeSpotStrategy
 * @method self withComputeSpotStrategy(string $computeSpotStrategy)
 * @method string getComputeSpotPriceLimit
 * @method self withComputeSpotPriceLimit(string $computeSpotPriceLimit)
 * @method array getApplication
 * @method self withApplication(array $application)
 */
class CreateCluster extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method array getUser
 * @method self withUser(array $user)
 * @method bool getReleaseInstance
 * @method self withReleaseInstance(bool $releaseInstance)
 */
class AddUsers extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getImageOwnerAlias
 * @method self withImageOwnerAlias(string $imageOwnerAlias)
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method Integer getCount
 * @method self withCount(Integer $count)
 * @method string getComputeSpotStrategy
 * @method self withComputeSpotStrategy(string $computeSpotStrategy)
 * @method string getComputeSpotPriceLimit
 * @method self withComputeSpotPriceLimit(string $computeSpotPriceLimit)
 */
class AddNodes extends Roa
{
    use R;
}
