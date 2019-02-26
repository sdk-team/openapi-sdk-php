<?php

namespace AlibabaCloud\BatchCompute\V20151001;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method RenewClusterInstance renewClusterInstance($options = [])
 * @method UpdateTaskStatus updateTaskStatus($options = [])
 * @method CreateCluster createCluster($options = [])
 * @method ChangeJobPriority changeJobPriority($options = [])
 * @method CancelImage cancelImage($options = [])
 * @method DeleteImage deleteImage($options = [])
 * @method DeleteClusterInstance deleteClusterInstance($options = [])
 * @method DeleteCluster deleteCluster($options = [])
 * @method CreateJob createJob($options = [])
 * @method CreateImage createImage($options = [])
 * @method GetJobDescription getJobDescription($options = [])
 * @method GetJob getJob($options = [])
 * @method GetInstance getInstance($options = [])
 * @method GetImage getImage($options = [])
 * @method GetClusterInstance getClusterInstance($options = [])
 * @method GetCluster getCluster($options = [])
 * @method DeleteJob deleteJob($options = [])
 * @method ListJobs listJobs($options = [])
 * @method ListInstances listInstances($options = [])
 * @method ListImages listImages($options = [])
 * @method ListClusters listClusters($options = [])
 * @method ListClusterInstances listClusterInstances($options = [])
 * @method GetTask getTask($options = [])
 * @method ReportWorkerStatus reportWorkerStatus($options = [])
 * @method ReportTaskStatus reportTaskStatus($options = [])
 * @method RecreateClusterInstance recreateClusterInstance($options = [])
 * @method PollForTask pollForTask($options = [])
 * @method ModifyCluster modifyCluster($options = [])
 * @method ListTasks listTasks($options = [])
 * @method StopJob stopJob($options = [])
 * @method StartJob startJob($options = [])
 * @method GetQuota getQuota($options = [])
 */
class V20151001
{
    use ApiResolverTrait;
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

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 */
class DeleteImage extends Roa
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
class ReportTaskStatus extends Roa
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
class ModifyCluster extends Roa
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

class GetQuota extends Roa
{
    use R;
}
