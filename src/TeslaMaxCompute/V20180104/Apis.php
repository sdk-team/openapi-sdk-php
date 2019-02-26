<?php

namespace AlibabaCloud\TeslaMaxCompute\V20180104;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method QueryCustomerSaleInfo queryCustomerSaleInfo($options = [])
 * @method QueryResourceInventory queryResourceInventory($options = [])
 * @method QueryTopology queryTopology($options = [])
 * @method GetClusterInstance getClusterInstance($options = [])
 * @method GetInstancesStatusCount getInstancesStatusCount($options = [])
 * @method GetProjectInstance getProjectInstance($options = [])
 * @method GetQuotaHistoryInfo getQuotaHistoryInfo($options = [])
 * @method GetQuotaInstance getQuotaInstance($options = [])
 * @method GetUserInstance getUserInstance($options = [])
 */
class V20180104
{
    use ApiResolverTrait;
}

/**
 * @method string getRegionName
 * @method self withRegionName(string $regionName)
 */
class QueryCustomerSaleInfo extends Rpc
{
    use R;
}

class QueryResourceInventory extends Rpc
{
    use R;
}

class QueryTopology extends Rpc
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
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method string getQuotaName
 * @method self withQuotaName(string $quotaName)
 * @method string getQuotaId
 * @method self withQuotaId(string $quotaId)
 */
class GetInstancesStatusCount extends Rpc
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
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getQuotaName
 * @method self withQuotaName(string $quotaName)
 */
class GetQuotaInstance extends Rpc
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
