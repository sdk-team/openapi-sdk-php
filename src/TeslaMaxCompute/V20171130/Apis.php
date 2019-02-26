<?php

namespace AlibabaCloud\TeslaMaxCompute\V20171130;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method GetQuotaHistoryInfo getQuotaHistoryInfo($options = [])
 * @method GetInstancesStatusCount getInstancesStatusCount($options = [])
 * @method GetUserInstance getUserInstance($options = [])
 * @method GetQuotaInstance getQuotaInstance($options = [])
 * @method GetProjectInstance getProjectInstance($options = [])
 * @method GetClusterInstance getClusterInstance($options = [])
 * @method GetProjectInfo getProjectInfo($options = [])
 * @method GetQuotaInfo getQuotaInfo($options = [])
 * @method GetUserInfo getUserInfo($options = [])
 * @method GetClusterInfo getClusterInfo($options = [])
 */
class V20171130
{
    use ApiResolverTrait;
}

/**
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method Integer getEndTime
 * @method self withEndTime(Integer $endTime)
 * @method string getQuotaName
 * @method self withQuotaName(string $quotaName)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method Integer getStartTime
 * @method self withStartTime(Integer $startTime)
 */
class GetQuotaHistoryInfo extends Rpc
{
    use R;
}

/**
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getCluster
 * @method self withCluster(string $cluster)
 */
class GetInstancesStatusCount extends Rpc
{
    use R;
}

/**
 * @method string getUser
 * @method self withUser(string $user)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getRegion
 * @method self withRegion(string $region)
 */
class GetUserInstance extends Rpc
{
    use R;
}

/**
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method string getQuotaId
 * @method self withQuotaId(string $quotaId)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class GetQuotaInstance extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getRegion
 * @method self withRegion(string $region)
 */
class GetProjectInstance extends Rpc
{
    use R;
}

/**
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getRegion
 * @method self withRegion(string $region)
 */
class GetClusterInstance extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class GetProjectInfo extends Rpc
{
    use R;
}

/**
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method string getQuotaId
 * @method self withQuotaId(string $quotaId)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class GetQuotaInfo extends Rpc
{
    use R;
}

/**
 * @method string getUser
 * @method self withUser(string $user)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class GetUserInfo extends Rpc
{
    use R;
}

/**
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class GetClusterInfo extends Rpc
{
    use R;
}
