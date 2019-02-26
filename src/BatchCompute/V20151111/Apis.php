<?php

namespace AlibabaCloud\BatchCompute\V20151111;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ListAvailableInstanceType listAvailableInstanceType($options = [])
 * @method ListRegions listRegions($options = [])
 * @method DeleteProject deleteProject($options = [])
 * @method ModifyApp modifyApp($options = [])
 * @method ListApps listApps($options = [])
 * @method GetApp getApp($options = [])
 * @method GetAppRevisions getAppRevisions($options = [])
 * @method GetAppDetail getAppDetail($options = [])
 * @method DeleteApp deleteApp($options = [])
 * @method CreateApp createApp($options = [])
 * @method RenewClusterInstance renewClusterInstance($options = [])
 * @method GetQuota getQuota($options = [])
 * @method ReportTaskStatus reportTaskStatus($options = [])
 * @method UpdateTaskStatus updateTaskStatus($options = [])
 * @method RecreateClusterInstance recreateClusterInstance($options = [])
 * @method ListClusterInstances listClusterInstances($options = [])
 * @method GetClusterInstance getClusterInstance($options = [])
 * @method DeleteClusterInstance deleteClusterInstance($options = [])
 * @method ModifyCluster modifyCluster($options = [])
 * @method StopJob stopJob($options = [])
 * @method StartJob startJob($options = [])
 * @method ReportWorkerStatus reportWorkerStatus($options = [])
 * @method PollForTask pollForTask($options = [])
 * @method ListTasks listTasks($options = [])
 * @method ListJobs listJobs($options = [])
 * @method ListInstances listInstances($options = [])
 * @method ListImages listImages($options = [])
 * @method ListClusters listClusters($options = [])
 * @method GetTask getTask($options = [])
 * @method GetJobDescription getJobDescription($options = [])
 * @method GetJob getJob($options = [])
 * @method GetInstance getInstance($options = [])
 * @method GetImage getImage($options = [])
 * @method GetCluster getCluster($options = [])
 * @method DeleteJob deleteJob($options = [])
 * @method DeleteImage deleteImage($options = [])
 * @method DeleteCluster deleteCluster($options = [])
 * @method CreateJob createJob($options = [])
 * @method CreateImage createImage($options = [])
 * @method CreateCluster createCluster($options = [])
 * @method ChangeJobPriority changeJobPriority($options = [])
 * @method CancelImage cancelImage($options = [])
 */
class V20151111
{
    use ApiResolverTrait;
}

class ListAvailableInstanceType extends Roa
{
    use R;
}

class ListRegions extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 */
class DeleteProject extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 */
class ModifyApp extends Roa
{
    use R;
}

class ListApps extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 */
class GetApp extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 */
class GetAppRevisions extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 */
class GetAppDetail extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 */
class DeleteApp extends Roa
{
    use R;
}

class CreateApp extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class RenewClusterInstance extends Roa
{
    use R;
}

class GetQuota extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getWorkerId
 * @method self withWorkerId(string $workerId)
 */
class ReportTaskStatus extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getWorkerId
 * @method self withWorkerId(string $workerId)
 */
class UpdateTaskStatus extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class RecreateClusterInstance extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class ListClusterInstances extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class GetClusterInstance extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DeleteClusterInstance extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 */
class ModifyCluster extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 */
class StopJob extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 */
class StartJob extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getWorkerId
 * @method self withWorkerId(string $workerId)
 */
class ReportWorkerStatus extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getWorkerId
 * @method self withWorkerId(string $workerId)
 */
class PollForTask extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 */
class ListTasks extends Roa
{
    use R;
}

class ListJobs extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 * @method string getTaskName
 * @method self withTaskName(string $taskName)
 */
class ListInstances extends Roa
{
    use R;
}

class ListImages extends Roa
{
    use R;
}

class ListClusters extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 * @method string getTaskName
 * @method self withTaskName(string $taskName)
 */
class GetTask extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 */
class GetJobDescription extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 */
class GetJob extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 * @method string getTaskName
 * @method self withTaskName(string $taskName)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class GetInstance extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 */
class GetImage extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 */
class GetCluster extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 */
class DeleteJob extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 */
class DeleteImage extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 */
class DeleteCluster extends Roa
{
    use R;
}

class CreateJob extends Roa
{
    use R;
}

class CreateImage extends Roa
{
    use R;
}

class CreateCluster extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 */
class ChangeJobPriority extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 */
class CancelImage extends Roa
{
    use R;
}
