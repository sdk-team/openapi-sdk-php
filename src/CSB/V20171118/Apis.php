<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method FindServiceStatisticalData findServiceStatisticalData($options = [])
 * @method GetInstance getInstance($options = [])
 * @method DeleteCasService deleteCasService($options = [])
 * @method FindInstanceList findInstanceList($options = [])
 * @method PublishCasService publishCasService($options = [])
 * @method CommitSuccessedServices commitSuccessedServices($options = [])
 * @method DeleteUnionCasService deleteUnionCasService($options = [])
 * @method PublishUnionCasService publishUnionCasService($options = [])
 * @method UpdateServiceQPS updateServiceQPS($options = [])
 * @method DeleteServiceList deleteServiceList($options = [])
 * @method UpdateOrderList updateOrderList($options = [])
 * @method UpdateServiceListStatus updateServiceListStatus($options = [])
 * @method UpdateProjectListStatus updateProjectListStatus($options = [])
 * @method ApproveOrderList approveOrderList($options = [])
 * @method DeleteProject deleteProject($options = [])
 * @method DeleteService deleteService($options = [])
 * @method DeleteOrderList deleteOrderList($options = [])
 * @method DeleteProjectList deleteProjectList($options = [])
 * @method CreateCredentials createCredentials($options = [])
 * @method CreateService createService($options = [])
 * @method UpdateService updateService($options = [])
 * @method UpdateOrder updateOrder($options = [])
 * @method CreateOrder createOrder($options = [])
 * @method UpdateProject updateProject($options = [])
 * @method CreateProject createProject($options = [])
 * @method DeleteCredentialsList deleteCredentialsList($options = [])
 * @method FindProjectsNameList findProjectsNameList($options = [])
 * @method GetProject getProject($options = [])
 * @method GetService getService($options = [])
 * @method CheckServiceExist checkServiceExist($options = [])
 * @method GetOrder getOrder($options = [])
 * @method FindProjectList findProjectList($options = [])
 * @method FindApprovalOrderList findApprovalOrderList($options = [])
 * @method FindApproveServiceList findApproveServiceList($options = [])
 * @method FindCredentialsList findCredentialsList($options = [])
 * @method RenewCredentials renewCredentials($options = [])
 * @method ReplaceCredential replaceCredential($options = [])
 * @method FindOrderableList findOrderableList($options = [])
 * @method FindOrderedList findOrderedList($options = [])
 * @method FindServiceList findServiceList($options = [])
 */
class V20171118
{
    use ApiResolverTrait;
}

/**
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 */
class FindServiceStatisticalData extends Rpc
{
    use R;
}

/**
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 */
class GetInstance extends Rpc
{
    use R;
}

/**
 * @method string getCasServiceId
 * @method self withCasServiceId(string $casServiceId)
 * @method string getCasCsbName
 * @method self withCasCsbName(string $casCsbName)
 * @method string getSrcUserId
 * @method self withSrcUserId(string $srcUserId)
 * @method bool getLeafOnly
 * @method self withLeafOnly(bool $leafOnly)
 */
class DeleteCasService extends Rpc
{
    use R;
}

/**
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method string getSearchTxt
 * @method self withSearchTxt(string $searchTxt)
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 */
class FindInstanceList extends Rpc
{
    use R;
}

/**
 * @method string getCasCsbName
 * @method self withCasCsbName(string $casCsbName)
 * @method string getData
 * @method self withData(string $data)
 */
class PublishCasService extends Rpc
{
    use R;
}

/**
 * @method string getCsbName
 * @method self withCsbName(string $csbName)
 * @method string getServices
 * @method self withServices(string $services)
 */
class CommitSuccessedServices extends Rpc
{
    use R;
}

/**
 * @method string getCasServiceId
 * @method self withCasServiceId(string $casServiceId)
 * @method string getCasCsbName
 * @method self withCasCsbName(string $casCsbName)
 * @method string getSrcUserId
 * @method self withSrcUserId(string $srcUserId)
 * @method bool getLeafOnly
 * @method self withLeafOnly(bool $leafOnly)
 */
class DeleteUnionCasService extends Rpc
{
    use R;
}

/**
 * @method string getCasCsbName
 * @method self withCasCsbName(string $casCsbName)
 * @method string getData
 * @method self withData(string $data)
 */
class PublishUnionCasService extends Rpc
{
    use R;
}

/**
 * @method int getServiceId
 * @method self withServiceId(int $serviceId)
 * @method string getQps
 * @method self withQps(string $qps)
 */
class UpdateServiceQPS extends Rpc
{
    use R;
}

/**
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 * @method string getData
 * @method self withData(string $data)
 */
class DeleteServiceList extends Rpc
{
    use R;
}

/**
 * @method string getData
 * @method self withData(string $data)
 */
class UpdateOrderList extends Rpc
{
    use R;
}

/**
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 * @method string getData
 * @method self withData(string $data)
 */
class UpdateServiceListStatus extends Rpc
{
    use R;
}

/**
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 * @method string getData
 * @method self withData(string $data)
 */
class UpdateProjectListStatus extends Rpc
{
    use R;
}

/**
 * @method string getData
 * @method self withData(string $data)
 */
class ApproveOrderList extends Rpc
{
    use R;
}

/**
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 * @method int getProjectId
 * @method self withProjectId(int $projectId)
 */
class DeleteProject extends Rpc
{
    use R;
}

/**
 * @method int getServiceId
 * @method self withServiceId(int $serviceId)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 */
class DeleteService extends Rpc
{
    use R;
}

/**
 * @method string getData
 * @method self withData(string $data)
 */
class DeleteOrderList extends Rpc
{
    use R;
}

/**
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 * @method string getData
 * @method self withData(string $data)
 */
class DeleteProjectList extends Rpc
{
    use R;
}

/**
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 * @method string getData
 * @method self withData(string $data)
 */
class CreateCredentials extends Rpc
{
    use R;
}

/**
 * @method string getData
 * @method self withData(string $data)
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 */
class CreateService extends Rpc
{
    use R;
}

/**
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 * @method string getData
 * @method self withData(string $data)
 */
class UpdateService extends Rpc
{
    use R;
}

/**
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 * @method string getData
 * @method self withData(string $data)
 */
class UpdateOrder extends Rpc
{
    use R;
}

/**
 * @method string getData
 * @method self withData(string $data)
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 */
class CreateOrder extends Rpc
{
    use R;
}

/**
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 * @method string getData
 * @method self withData(string $data)
 */
class UpdateProject extends Rpc
{
    use R;
}

/**
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 * @method string getData
 * @method self withData(string $data)
 */
class CreateProject extends Rpc
{
    use R;
}

/**
 * @method bool getIgnoreDauth
 * @method self withIgnoreDauth(bool $ignoreDauth)
 * @method bool getForce
 * @method self withForce(bool $force)
 * @method string getData
 * @method self withData(string $data)
 */
class DeleteCredentialsList extends Rpc
{
    use R;
}

/**
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 * @method string getOperationFlag
 * @method self withOperationFlag(string $operationFlag)
 */
class FindProjectsNameList extends Rpc
{
    use R;
}

/**
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 */
class GetProject extends Rpc
{
    use R;
}

/**
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 * @method int getServiceId
 * @method self withServiceId(int $serviceId)
 */
class GetService extends Rpc
{
    use R;
}

/**
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 */
class CheckServiceExist extends Rpc
{
    use R;
}

/**
 * @method int getOrderId
 * @method self withOrderId(int $orderId)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 */
class GetOrder extends Rpc
{
    use R;
}

/**
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 */
class FindProjectList extends Rpc
{
    use R;
}

/**
 * @method string getAlias
 * @method self withAlias(string $alias)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method bool getOnlyPending
 * @method self withOnlyPending(bool $onlyPending)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 * @method int getServiceId
 * @method self withServiceId(int $serviceId)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 */
class FindApprovalOrderList extends Rpc
{
    use R;
}

/**
 * @method bool getShowDelService
 * @method self withShowDelService(bool $showDelService)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 * @method string getAlias
 * @method self withAlias(string $alias)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 * @method string getApproveLevel
 * @method self withApproveLevel(string $approveLevel)
 */
class FindApproveServiceList extends Rpc
{
    use R;
}

/**
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 */
class FindCredentialsList extends Rpc
{
    use R;
}

/**
 * @method int getCredentialId
 * @method self withCredentialId(int $credentialId)
 */
class RenewCredentials extends Rpc
{
    use R;
}

/**
 * @method int getCredentialId
 * @method self withCredentialId(int $credentialId)
 */
class ReplaceCredential extends Rpc
{
    use R;
}

/**
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 * @method string getAlias
 * @method self withAlias(string $alias)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 */
class FindOrderableList extends Rpc
{
    use R;
}

/**
 * @method bool getShowDelOrder
 * @method self withShowDelOrder(bool $showDelOrder)
 * @method string getAlias
 * @method self withAlias(string $alias)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method int getServiceId
 * @method self withServiceId(int $serviceId)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 */
class FindOrderedList extends Rpc
{
    use R;
}

/**
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 * @method string getAlias
 * @method self withAlias(string $alias)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method int getCsbId
 * @method self withCsbId(int $csbId)
 * @method bool getShowDelService
 * @method self withShowDelService(bool $showDelService)
 * @method Integer getCasShowType
 * @method self withCasShowType(Integer $casShowType)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 */
class FindServiceList extends Rpc
{
    use R;
}
