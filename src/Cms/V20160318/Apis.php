<?php

namespace AlibabaCloud\Cms\V20160318;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ListOverviewConfig listOverviewConfig($options = [])
 * @method QueryMetricAgg queryMetricAgg($options = [])
 * @method ListProductGroups listProductGroups($options = [])
 * @method ListProductGroupInstances listProductGroupInstances($options = [])
 * @method putProductGroup putProductGroup($options = [])
 * @method getProductGroups getProductGroups($options = [])
 * @method getProductGroupInstances getProductGroupInstances($options = [])
 * @method deleteProductGroup deleteProductGroup($options = [])
 * @method cmsShareGenerateToken cmsShareGenerateToken($options = [])
 * @method cmsShareDeleteTokenByToken cmsShareDeleteTokenByToken($options = [])
 * @method cmsListShares cmsListShares($options = [])
 * @method UploadData uploadData($options = [])
 * @method UpdateOutput updateOutput($options = [])
 * @method ListOutput listOutput($options = [])
 * @method GetOutput getOutput($options = [])
 * @method DeleteOutput deleteOutput($options = [])
 * @method CreateOutput createOutput($options = [])
 * @method PutMetrics putMetrics($options = [])
 * @method BatchPutDimTableData123 batchPutDimTableData123($options = [])
 * @method MetricSqlCheck metricSqlCheck($options = [])
 * @method UpdateMetricOutput updateMetricOutput($options = [])
 * @method ListMetricOutput listMetricOutput($options = [])
 * @method GetMetricOutput getMetricOutput($options = [])
 * @method DeleteMetricOutput deleteMetricOutput($options = [])
 * @method CreateMetricOutput createMetricOutput($options = [])
 * @method NodeList nodeList($options = [])
 * @method AccessKeyGet accessKeyGet($options = [])
 * @method AccessKeyGenerate accessKeyGenerate($options = [])
 * @method NodeStatus nodeStatus($options = [])
 * @method NodeProcessDelete nodeProcessDelete($options = [])
 * @method NodeProcessCreate nodeProcessCreate($options = [])
 * @method NodeProcesses nodeProcesses($options = [])
 * @method NodeInstall nodeInstall($options = [])
 * @method PutMetricData putMetricData($options = [])
 * @method UpdateMetricStream updateMetricStream($options = [])
 * @method ListMetricStream listMetricStream($options = [])
 * @method GetMetricStream getMetricStream($options = [])
 * @method DeleteMetricStream deleteMetricStream($options = [])
 * @method CreateMetricStream createMetricStream($options = [])
 * @method QueryMetricTopN queryMetricTopN($options = [])
 * @method QueryMetricTop queryMetricTop($options = [])
 * @method QueryMetricList queryMetricList($options = [])
 * @method QueryMetricLast queryMetricLast($options = [])
 * @method QueryMetricData queryMetricData($options = [])
 * @method QueryListMetric queryListMetric($options = [])
 * @method QueryEvent queryEvent($options = [])
 * @method DescribeMetric describeMetric($options = [])
 * @method UpdateProject updateProject($options = [])
 * @method StopProject stopProject($options = [])
 * @method StatusProject statusProject($options = [])
 * @method StartProject startProject($options = [])
 * @method ListProject listProject($options = [])
 * @method GetProject getProject($options = [])
 * @method DeleteProject deleteProject($options = [])
 * @method CreateProject createProject($options = [])
 * @method UpdateSqlMetrics updateSqlMetrics($options = [])
 * @method ListSqlMetrics listSqlMetrics($options = [])
 * @method GetSqlMetrics getSqlMetrics($options = [])
 * @method CreateSqlMetrics createSqlMetrics($options = [])
 * @method BatchCreateSqlMetrics batchCreateSqlMetrics($options = [])
 * @method ListMetricsMeta listMetricsMeta($options = [])
 * @method GetMetricsMeta getMetricsMeta($options = [])
 * @method DeleteMetrics deleteMetrics($options = [])
 * @method UpdateDimTable updateDimTable($options = [])
 * @method QueryDimTableDataByKey queryDimTableDataByKey($options = [])
 * @method QueryDimTableData queryDimTableData($options = [])
 * @method PutDimTableData putDimTableData($options = [])
 * @method ListDimTable listDimTable($options = [])
 * @method GetDimTable getDimTable($options = [])
 * @method DeleteDimTableDataByKey deleteDimTableDataByKey($options = [])
 * @method DeleteDimTableData deleteDimTableData($options = [])
 * @method DeleteDimTable deleteDimTable($options = [])
 * @method CreateDimTable createDimTable($options = [])
 * @method BatchPutDimTableData batchPutDimTableData($options = [])
 */
class V20160318
{
    use ApiResolverTrait;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 */
class ListOverviewConfig extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 */
class QueryMetricAgg extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcategory
 * @method self withcategory(string $category)
 */
class ListProductGroups extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getgroupId
 * @method self withgroupId(int $groupId)
 */
class ListProductGroupInstances extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getgroupJson
 * @method self withgroupJson(string $groupJson)
 */
class putProductGroup extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcategory
 * @method self withcategory(string $category)
 */
class getProductGroups extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getgroupId
 * @method self withgroupId(int $groupId)
 */
class getProductGroupInstances extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getgroupId
 * @method self withgroupId(int $groupId)
 */
class deleteProductGroup extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getparams
 * @method self withparams(string $params)
 * @method string getname
 * @method self withname(string $name)
 * @method string getviewId
 * @method self withviewId(string $viewId)
 * @method string getviewConf
 * @method self withviewConf(string $viewConf)
 * @method string gettype
 * @method self withtype(string $type)
 */
class cmsShareGenerateToken extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 */
class cmsShareDeleteTokenByToken extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method Integer getpageNo
 * @method self withpageNo(Integer $pageNo)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 */
class cmsListShares extends Roa
{
    use R;
}

/**
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getData
 * @method self withData(string $data)
 */
class UploadData extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricOutputName
 * @method self withMetricOutputName(string $metricOutputName)
 * @method string getMetricOutput
 * @method self withMetricOutput(string $metricOutput)
 */
class UpdateOutput extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricOutputName
 * @method self withMetricOutputName(string $metricOutputName)
 * @method int getPage
 * @method self withPage(int $page)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class ListOutput extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricOutputName
 * @method self withMetricOutputName(string $metricOutputName)
 */
class GetOutput extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricOutputName
 * @method self withMetricOutputName(string $metricOutputName)
 */
class DeleteOutput extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricOutput
 * @method self withMetricOutput(string $metricOutput)
 */
class CreateOutput extends Roa
{
    use R;
}

/**
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getData
 * @method self withData(string $data)
 */
class PutMetrics extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 * @method string getBody
 * @method self withBody(string $body)
 */
class BatchPutDimTableData123 extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getSql
 * @method self withSql(string $sql)
 * @method string getInput
 * @method self withInput(string $input)
 */
class MetricSqlCheck extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricOutputName
 * @method self withMetricOutputName(string $metricOutputName)
 * @method string getMetricOutput
 * @method self withMetricOutput(string $metricOutput)
 */
class UpdateMetricOutput extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricOutputName
 * @method self withMetricOutputName(string $metricOutputName)
 * @method int getPage
 * @method self withPage(int $page)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class ListMetricOutput extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricOutputName
 * @method self withMetricOutputName(string $metricOutputName)
 */
class GetMetricOutput extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricOutputName
 * @method self withMetricOutputName(string $metricOutputName)
 */
class DeleteMetricOutput extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricOutput
 * @method self withMetricOutput(string $metricOutput)
 */
class CreateMetricOutput extends Roa
{
    use R;
}

/**
 * @method int getUserId
 * @method self withUserId(int $userId)
 * @method string getHostName
 * @method self withHostName(string $hostName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class NodeList extends Roa
{
    use R;
}

/**
 * @method int getUserId
 * @method self withUserId(int $userId)
 */
class AccessKeyGet extends Roa
{
    use R;
}

/**
 * @method int getUserId
 * @method self withUserId(int $userId)
 */
class AccessKeyGenerate extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class NodeStatus extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 */
class NodeProcessDelete extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 */
class NodeProcessCreate extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class NodeProcesses extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class NodeInstall extends Roa
{
    use R;
}

/**
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getBody
 * @method self withBody(string $body)
 */
class PutMetricData extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 * @method string getMetricStream
 * @method self withMetricStream(string $metricStream)
 */
class UpdateMetricStream extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 * @method int getPage
 * @method self withPage(int $page)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class ListMetricStream extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 */
class GetMetricStream extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 */
class DeleteMetricStream extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStream
 * @method self withMetricStream(string $metricStream)
 */
class CreateMetricStream extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getValueKey
 * @method self withValueKey(string $valueKey)
 * @method string getTop
 * @method self withTop(string $top)
 * @method string getExtend
 * @method self withExtend(string $extend)
 */
class QueryMetricTopN extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getOrderby
 * @method self withOrderby(string $orderby)
 * @method string getOrderDesc
 * @method self withOrderDesc(string $orderDesc)
 * @method string getLength
 * @method self withLength(string $length)
 * @method string getExpress
 * @method self withExpress(string $express)
 */
class QueryMetricTop extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getCursor
 * @method self withCursor(string $cursor)
 * @method string getLength
 * @method self withLength(string $length)
 * @method string getExpress
 * @method self withExpress(string $express)
 */
class QueryMetricList extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getCursor
 * @method self withCursor(string $cursor)
 * @method string getLength
 * @method self withLength(string $length)
 * @method string getExpress
 * @method self withExpress(string $express)
 */
class QueryMetricLast extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getExpress
 * @method self withExpress(string $express)
 * @method string getLength
 * @method self withLength(string $length)
 */
class QueryMetricData extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getPage
 * @method self withPage(string $page)
 * @method string getLength
 * @method self withLength(string $length)
 * @method string getExtend
 * @method self withExtend(string $extend)
 * @method string getFilter
 * @method self withFilter(string $filter)
 */
class QueryListMetric extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getEventName
 * @method self withEventName(string $eventName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getPage
 * @method self withPage(string $page)
 * @method string getCursor
 * @method self withCursor(string $cursor)
 * @method string getLength
 * @method self withLength(string $length)
 * @method string getFilter
 * @method self withFilter(string $filter)
 * @method bool getOrderDesc
 * @method self withOrderDesc(bool $orderDesc)
 */
class QueryEvent extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 */
class DescribeMetric extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getProject
 * @method self withProject(string $project)
 */
class UpdateProject extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 */
class StopProject extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 */
class StatusProject extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getType
 * @method self withType(string $type)
 */
class StartProject extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectOwner
 * @method self withProjectOwner(string $projectOwner)
 * @method int getPage
 * @method self withPage(int $page)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 */
class ListProject extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 */
class GetProject extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 */
class DeleteProject extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProject
 * @method self withProject(string $project)
 */
class CreateProject extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getSql
 * @method self withSql(string $sql)
 * @method Integer getIsPublic
 * @method self withIsPublic(Integer $isPublic)
 */
class UpdateSqlMetrics extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method int getPage
 * @method self withPage(int $page)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class ListSqlMetrics extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 */
class GetSqlMetrics extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getSql
 * @method self withSql(string $sql)
 * @method Integer getIsPublic
 * @method self withIsPublic(Integer $isPublic)
 */
class CreateSqlMetrics extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getSqls
 * @method self withSqls(string $sqls)
 * @method Integer getIsPublic
 * @method self withIsPublic(Integer $isPublic)
 */
class BatchCreateSqlMetrics extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method int getPage
 * @method self withPage(int $page)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method Integer getMetricType
 * @method self withMetricType(Integer $metricType)
 * @method bool getIsEvent
 * @method self withIsEvent(bool $isEvent)
 */
class ListMetricsMeta extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 */
class GetMetricsMeta extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 */
class DeleteMetrics extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 * @method string getDimTable
 * @method self withDimTable(string $dimTable)
 */
class UpdateDimTable extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 * @method string getKey
 * @method self withKey(string $key)
 * @method string getValue
 * @method self withValue(string $value)
 * @method int getPage
 * @method self withPage(int $page)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class QueryDimTableDataByKey extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 * @method string getKey
 * @method self withKey(string $key)
 */
class QueryDimTableData extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 * @method string getBody
 * @method self withBody(string $body)
 */
class PutDimTableData extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 * @method int getPage
 * @method self withPage(int $page)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class ListDimTable extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 */
class GetDimTable extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 * @method string getKey
 * @method self withKey(string $key)
 * @method string getValue
 * @method self withValue(string $value)
 */
class DeleteDimTableDataByKey extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 * @method string getKey
 * @method self withKey(string $key)
 */
class DeleteDimTableData extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 */
class DeleteDimTable extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getDimTable
 * @method self withDimTable(string $dimTable)
 */
class CreateDimTable extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 * @method string getBody
 * @method self withBody(string $body)
 */
class BatchPutDimTableData extends Roa
{
    use R;
}
