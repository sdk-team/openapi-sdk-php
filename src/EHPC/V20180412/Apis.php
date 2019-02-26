<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method AddQueue addQueue($options = [])
 * @method DeleteQueue deleteQueue($options = [])
 * @method SetQueue setQueue($options = [])
 * @method ListNodesByQueue listNodesByQueue($options = [])
 * @method StopVisualService stopVisualService($options = [])
 * @method ListCpfsFileSystems listCpfsFileSystems($options = [])
 * @method ListAvailableFileSystemTypes listAvailableFileSystemTypes($options = [])
 * @method StartVisualService startVisualService($options = [])
 * @method GetVisualServiceStatus getVisualServiceStatus($options = [])
 * @method ModifyVisualServicePasswd modifyVisualServicePasswd($options = [])
 * @method ListClustersMeta listClustersMeta($options = [])
 * @method CreateJobFile createJobFile($options = [])
 * @method ListFileSystemWithMountTargets listFileSystemWithMountTargets($options = [])
 * @method ListAvailableEcsTypes listAvailableEcsTypes($options = [])
 * @method ListQueues listQueues($options = [])
 * @method DescribePrice describePrice($options = [])
 * @method DescribeImagePrice describeImagePrice($options = [])
 * @method GetCloudMetricProfiling getCloudMetricProfiling($options = [])
 * @method RunCloudMetricProfiling runCloudMetricProfiling($options = [])
 * @method ListCloudMetricProfilings listCloudMetricProfilings($options = [])
 * @method DeleteImage deleteImage($options = [])
 * @method DescribeImage describeImage($options = [])
 * @method ModifyImageGatewayConfig modifyImageGatewayConfig($options = [])
 * @method AddLocalNodes addLocalNodes($options = [])
 * @method GetCloudMetricLogs getCloudMetricLogs($options = [])
 * @method DescribeImageGatewayConfig describeImageGatewayConfig($options = [])
 * @method PullImage pullImage($options = [])
 * @method ListContainerImages listContainerImages($options = [])
 * @method ModifyContainerAppAttributes modifyContainerAppAttributes($options = [])
 * @method ListContainerApps listContainerApps($options = [])
 * @method GetHybridClusterConfig getHybridClusterConfig($options = [])
 * @method DescribeContainerApp describeContainerApp($options = [])
 * @method DeleteContainerApps deleteContainerApps($options = [])
 * @method CreateHybridCluster createHybridCluster($options = [])
 * @method AddContainerApp addContainerApp($options = [])
 * @method ListCommands listCommands($options = [])
 * @method ListInvocationStatus listInvocationStatus($options = [])
 * @method ListInvocationResults listInvocationResults($options = [])
 * @method InvokeShellCommand invokeShellCommand($options = [])
 * @method DescribeAutoScaleConfig describeAutoScaleConfig($options = [])
 * @method StopCluster stopCluster($options = [])
 * @method StartNodes startNodes($options = [])
 * @method StartCluster startCluster($options = [])
 * @method StopNodes stopNodes($options = [])
 * @method RecoverCluster recoverCluster($options = [])
 * @method StopJobs stopJobs($options = [])
 * @method ListNodesNoPaging listNodesNoPaging($options = [])
 * @method ListRegions listRegions($options = [])
 * @method ListClusters listClusters($options = [])
 * @method ModifyUserPasswords modifyUserPasswords($options = [])
 * @method ListJobs listJobs($options = [])
 * @method ModifyUserGroups modifyUserGroups($options = [])
 * @method GetAutoScaleConfig getAutoScaleConfig($options = [])
 * @method ListPreferredEcsTypes listPreferredEcsTypes($options = [])
 * @method AddNodes addNodes($options = [])
 * @method EditJobTemplate editJobTemplate($options = [])
 * @method SetAutoScaleConfig setAutoScaleConfig($options = [])
 * @method DeleteNodes deleteNodes($options = [])
 * @method DeleteJobs deleteJobs($options = [])
 * @method ListImages listImages($options = [])
 * @method DeleteUsers deleteUsers($options = [])
 * @method SetJobUser setJobUser($options = [])
 * @method ResetNodes resetNodes($options = [])
 * @method ListCustomImages listCustomImages($options = [])
 * @method AddUsers addUsers($options = [])
 * @method ListSoftwares listSoftwares($options = [])
 * @method ListJobTemplates listJobTemplates($options = [])
 * @method SubmitJob submitJob($options = [])
 * @method ListCurrentClientVersion listCurrentClientVersion($options = [])
 * @method DescribeCluster describeCluster($options = [])
 * @method ListNodes listNodes($options = [])
 * @method ListVolumes listVolumes($options = [])
 * @method CreateJobTemplate createJobTemplate($options = [])
 * @method ModifyClusterAttributes modifyClusterAttributes($options = [])
 * @method UpgradeClient upgradeClient($options = [])
 * @method ListUsers listUsers($options = [])
 * @method DeleteCluster deleteCluster($options = [])
 * @method CreateCluster createCluster($options = [])
 * @method RerunJobs rerunJobs($options = [])
 * @method DeleteJobTemplates deleteJobTemplates($options = [])
 * @method ListClusterLogs listClusterLogs($options = [])
 */
class V20180412
{
    use ApiResolverTrait;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getQueueName
 * @method self withQueueName(string $queueName)
 */
class AddQueue extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getQueueName
 * @method self withQueueName(string $queueName)
 */
class DeleteQueue extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getQueueName
 * @method self withQueueName(string $queueName)
 * @method array getNode
 * @method self withNode(array $node)
 */
class SetQueue extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getQueueName
 * @method self withQueueName(string $queueName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListNodesByQueue extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getCidrIp
 * @method self withCidrIp(string $cidrIp)
 * @method Integer getPort
 * @method self withPort(Integer $port)
 */
class StopVisualService extends Roa
{
    use R;
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListCpfsFileSystems extends Roa
{
    use R;
}

class ListAvailableFileSystemTypes extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getCidrIp
 * @method self withCidrIp(string $cidrIp)
 * @method Integer getPort
 * @method self withPort(Integer $port)
 */
class StartVisualService extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class GetVisualServiceStatus extends Roa
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
 * @method string getPasswd
 * @method self withPasswd(string $passwd)
 */
class ModifyVisualServicePasswd extends Roa
{
    use R;
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListClustersMeta extends Roa
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
 * @method string getContent
 * @method self withContent(string $content)
 * @method string getTargetFile
 * @method self withTargetFile(string $targetFile)
 */
class CreateJobFile extends Roa
{
    use R;
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListFileSystemWithMountTargets extends Roa
{
    use R;
}

/**
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getSpotStrategy
 * @method self withSpotStrategy(string $spotStrategy)
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 */
class ListAvailableEcsTypes extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class ListQueues extends Roa
{
    use R;
}

/**
 * @method array getCommodities
 * @method self withCommodities(array $commodities)
 * @method string getPriceUnit
 * @method self withPriceUnit(string $priceUnit)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 */
class DescribePrice extends Roa
{
    use R;
}

/**
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getPriceUnit
 * @method self withPriceUnit(string $priceUnit)
 * @method string getSkuCode
 * @method self withSkuCode(string $skuCode)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method Integer getAmount
 * @method self withAmount(Integer $amount)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 */
class DescribeImagePrice extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getProfilingId
 * @method self withProfilingId(string $profilingId)
 */
class GetCloudMetricProfiling extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getHostName
 * @method self withHostName(string $hostName)
 * @method Integer getProcessId
 * @method self withProcessId(Integer $processId)
 * @method Integer getDuration
 * @method self withDuration(Integer $duration)
 * @method Integer getFreq
 * @method self withFreq(Integer $freq)
 */
class RunCloudMetricProfiling extends Roa
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
class ListCloudMetricProfilings extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getRepository
 * @method self withRepository(string $repository)
 * @method string getImageTag
 * @method self withImageTag(string $imageTag)
 * @method string getContainerType
 * @method self withContainerType(string $containerType)
 */
class DeleteImage extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getRepository
 * @method self withRepository(string $repository)
 * @method string getImageTag
 * @method self withImageTag(string $imageTag)
 * @method string getContainerType
 * @method self withContainerType(string $containerType)
 */
class DescribeImage extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getDBType
 * @method self withDBType(string $dBType)
 * @method string getDBUsername
 * @method self withDBUsername(string $dBUsername)
 * @method string getDBPassword
 * @method self withDBPassword(string $dBPassword)
 * @method string getDBServerInfo
 * @method self withDBServerInfo(string $dBServerInfo)
 * @method string getDefaultRepoLocation
 * @method self withDefaultRepoLocation(string $defaultRepoLocation)
 * @method Integer getPullUpdateTimeout
 * @method self withPullUpdateTimeout(Integer $pullUpdateTimeout)
 * @method string getImageExpirationTimeout
 * @method self withImageExpirationTimeout(string $imageExpirationTimeout)
 * @method array getRepo
 * @method self withRepo(array $repo)
 */
class ModifyImageGatewayConfig extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getNodes
 * @method self withNodes(string $nodes)
 */
class AddLocalNodes extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method Integer getFrom
 * @method self withFrom(Integer $from)
 * @method Integer getTo
 * @method self withTo(Integer $to)
 * @method bool getReverse
 * @method self withReverse(bool $reverse)
 * @method string getAggregationType
 * @method self withAggregationType(string $aggregationType)
 * @method Integer getAggregationInterval
 * @method self withAggregationInterval(Integer $aggregationInterval)
 * @method string getMetricScope
 * @method self withMetricScope(string $metricScope)
 * @method string getFilter
 * @method self withFilter(string $filter)
 * @method string getMetricCategories
 * @method self withMetricCategories(string $metricCategories)
 */
class GetCloudMetricLogs extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class DescribeImageGatewayConfig extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getRepository
 * @method self withRepository(string $repository)
 * @method string getImageTag
 * @method self withImageTag(string $imageTag)
 * @method string getContainerType
 * @method self withContainerType(string $containerType)
 */
class PullImage extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getContainerType
 * @method self withContainerType(string $containerType)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListContainerImages extends Roa
{
    use R;
}

/**
 * @method string getContainerId
 * @method self withContainerId(string $containerId)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class ModifyContainerAppAttributes extends Roa
{
    use R;
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListContainerApps extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getNode
 * @method self withNode(string $node)
 */
class GetHybridClusterConfig extends Roa
{
    use R;
}

/**
 * @method string getContainerId
 * @method self withContainerId(string $containerId)
 */
class DescribeContainerApp extends Roa
{
    use R;
}

/**
 * @method array getContainerApp
 * @method self withContainerApp(array $containerApp)
 */
class DeleteContainerApps extends Roa
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
 * @method string getClientVersion
 * @method self withClientVersion(string $clientVersion)
 * @method string getOsTag
 * @method self withOsTag(string $osTag)
 * @method string getDomain
 * @method self withDomain(string $domain)
 * @method string getNodes
 * @method self withNodes(string $nodes)
 * @method string getLocation
 * @method self withLocation(string $location)
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getSecurityGroupName
 * @method self withSecurityGroupName(string $securityGroupName)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getEcsOrderComputeInstanceType
 * @method self withEcsOrderComputeInstanceType(string $ecsOrderComputeInstanceType)
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
 * @method string getOnPremiseVolumeProtocol
 * @method self withOnPremiseVolumeProtocol(string $onPremiseVolumeProtocol)
 * @method string getOnPremiseVolumeMountPoint
 * @method self withOnPremiseVolumeMountPoint(string $onPremiseVolumeMountPoint)
 * @method string getOnPremiseVolumeRemotePath
 * @method self withOnPremiseVolumeRemotePath(string $onPremiseVolumeRemotePath)
 * @method string getOnPremiseVolumeLocalPath
 * @method self withOnPremiseVolumeLocalPath(string $onPremiseVolumeLocalPath)
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method string getKeyPairName
 * @method self withKeyPairName(string $keyPairName)
 * @method array getApplication
 * @method self withApplication(array $application)
 * @method array getPostInstallScript
 * @method self withPostInstallScript(array $postInstallScript)
 * @method string getJobQueue
 * @method self withJobQueue(string $jobQueue)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class CreateHybridCluster extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getRepository
 * @method self withRepository(string $repository)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getImageTag
 * @method self withImageTag(string $imageTag)
 * @method string getContainerType
 * @method self withContainerType(string $containerType)
 */
class AddContainerApp extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getCommandId
 * @method self withCommandId(string $commandId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListCommands extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getCommandId
 * @method self withCommandId(string $commandId)
 */
class ListInvocationStatus extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getCommandId
 * @method self withCommandId(string $commandId)
 * @method string getInvokeRecordStatus
 * @method self withInvokeRecordStatus(string $invokeRecordStatus)
 * @method array getInstance
 * @method self withInstance(array $instance)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListInvocationResults extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getCommand
 * @method self withCommand(string $command)
 * @method array getInstance
 * @method self withInstance(array $instance)
 * @method string getWorkingDir
 * @method self withWorkingDir(string $workingDir)
 * @method Integer getTimeout
 * @method self withTimeout(Integer $timeout)
 */
class InvokeShellCommand extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class DescribeAutoScaleConfig extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class StopCluster extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getRole
 * @method self withRole(string $role)
 * @method array getInstance
 * @method self withInstance(array $instance)
 */
class StartNodes extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class StartCluster extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getRole
 * @method self withRole(string $role)
 * @method array getInstance
 * @method self withInstance(array $instance)
 */
class StopNodes extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getOsTag
 * @method self withOsTag(string $osTag)
 * @method string getAccountType
 * @method self withAccountType(string $accountType)
 * @method string getSchedulerType
 * @method self withSchedulerType(string $schedulerType)
 * @method string getImageOwnerAlias
 * @method self withImageOwnerAlias(string $imageOwnerAlias)
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getClientVersion
 * @method self withClientVersion(string $clientVersion)
 */
class RecoverCluster extends Roa
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

class ListRegions extends Roa
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
 */
class GetAutoScaleConfig extends Roa
{
    use R;
}

/**
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getSpotStrategy
 * @method self withSpotStrategy(string $spotStrategy)
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 */
class ListPreferredEcsTypes extends Roa
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
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getComputeSpotStrategy
 * @method self withComputeSpotStrategy(string $computeSpotStrategy)
 * @method string getComputeSpotPriceLimit
 * @method self withComputeSpotPriceLimit(string $computeSpotPriceLimit)
 * @method string getEcsChargeType
 * @method self withEcsChargeType(string $ecsChargeType)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getPeriodUnit
 * @method self withPeriodUnit(string $periodUnit)
 * @method string getAutoRenew
 * @method self withAutoRenew(string $autoRenew)
 * @method Integer getAutoRenewPeriod
 * @method self withAutoRenewPeriod(Integer $autoRenewPeriod)
 * @method string getJobQueue
 * @method self withJobQueue(string $jobQueue)
 * @method string getCreateMode
 * @method self withCreateMode(string $createMode)
 * @method Integer getSystemDiskSize
 * @method self withSystemDiskSize(Integer $systemDiskSize)
 */
class AddNodes extends Roa
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
 * @method string getSpotStrategy
 * @method self withSpotStrategy(string $spotStrategy)
 * @method float getSpotPriceLimit
 * @method self withSpotPriceLimit(float $spotPriceLimit)
 * @method array getQueues
 * @method self withQueues(array $queues)
 */
class SetAutoScaleConfig extends Roa
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
 * @method string getJobs
 * @method self withJobs(string $jobs)
 */
class DeleteJobs extends Roa
{
    use R;
}

class ListImages extends Roa
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
 * @method array getInstance
 * @method self withInstance(array $instance)
 */
class ResetNodes extends Roa
{
    use R;
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
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method array getUser
 * @method self withUser(array $user)
 */
class AddUsers extends Roa
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
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getCommandLine
 * @method self withCommandLine(string $commandLine)
 * @method string getRunasUser
 * @method self withRunasUser(string $runasUser)
 * @method string getRunasUserPassword
 * @method self withRunasUserPassword(string $runasUserPassword)
 * @method string getName
 * @method self withName(string $name)
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
 * @method string getInputFileUrl
 * @method self withInputFileUrl(string $inputFileUrl)
 * @method string getUnzipCmd
 * @method self withUnzipCmd(string $unzipCmd)
 * @method string getPostCmdLine
 * @method self withPostCmdLine(string $postCmdLine)
 * @method string getContainerId
 * @method self withContainerId(string $containerId)
 * @method string getJobQueue
 * @method self withJobQueue(string $jobQueue)
 */
class SubmitJob extends Roa
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
 */
class DescribeCluster extends Roa
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
 * @method string getClientVersion
 * @method self withClientVersion(string $clientVersion)
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
 * @method string getDeployMode
 * @method self withDeployMode(string $deployMode)
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
 * @method array getPostInstallScript
 * @method self withPostInstallScript(array $postInstallScript)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getPeriodUnit
 * @method self withPeriodUnit(string $periodUnit)
 * @method string getAutoRenew
 * @method self withAutoRenew(string $autoRenew)
 * @method Integer getAutoRenewPeriod
 * @method self withAutoRenewPeriod(Integer $autoRenewPeriod)
 * @method string getInputFileUrl
 * @method self withInputFileUrl(string $inputFileUrl)
 * @method string getJobQueue
 * @method self withJobQueue(string $jobQueue)
 * @method Integer getSystemDiskSize
 * @method self withSystemDiskSize(Integer $systemDiskSize)
 * @method string getRemoteVisEnable
 * @method self withRemoteVisEnable(string $remoteVisEnable)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class CreateCluster extends Roa
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
 * @method string getTemplates
 * @method self withTemplates(string $templates)
 */
class DeleteJobTemplates extends Roa
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
