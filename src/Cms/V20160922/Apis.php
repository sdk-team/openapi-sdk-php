<?php

namespace AlibabaCloud\Cms\V20160922;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DeleteMetricOfLogMonitor deleteMetricOfLogMonitor($options = [])
 * @method ListMetricsOfLogMonitor listMetricsOfLogMonitor($options = [])
 * @method GetLogMonitorInAll getLogMonitorInAll($options = [])
 * @method QueryProject queryProject($options = [])
 * @method ListGroupsInner listGroupsInner($options = [])
 * @method QueryInstanceTop queryInstanceTop($options = [])
 * @method QueryIsMetricNameValid queryIsMetricNameValid($options = [])
 * @method ListMyGroups listMyGroups($options = [])
 * @method H5WeeklyReportUserIds h5WeeklyReportUserIds($options = [])
 * @method H5WeeklyReportUrl h5WeeklyReportUrl($options = [])
 * @method ProjectList projectList($options = [])
 * @method MetricMeta metricMeta($options = [])
 * @method MetricData metricData($options = [])
 * @method Heartbeat heartbeat($options = [])
 * @method DimensionValues dimensionValues($options = [])
 * @method QueryMetricsFresh queryMetricsFresh($options = [])
 * @method QueryMetricDimensions queryMetricDimensions($options = [])
 * @method QueryCustomValue queryCustomValue($options = [])
 * @method QueryCustomTable queryCustomTable($options = [])
 * @method QueryCustomField queryCustomField($options = [])
 * @method TaskConfigUnhealthy taskConfigUnhealthy($options = [])
 * @method TaskConfigModify taskConfigModify($options = [])
 * @method TaskConfigList taskConfigList($options = [])
 * @method TaskConfigEnable taskConfigEnable($options = [])
 * @method TaskConfigDelete taskConfigDelete($options = [])
 * @method TaskConfigCreate taskConfigCreate($options = [])
 * @method PutAlertTemplate putAlertTemplate($options = [])
 * @method GetLogMonitorResourceControlInfo getLogMonitorResourceControlInfo($options = [])
 * @method PutAlarmTemplate putAlarmTemplate($options = [])
 * @method ListAlarmTemplate listAlarmTemplate($options = [])
 * @method DeleteAlarmTemplate deleteAlarmTemplate($options = [])
 * @method JVMConfigRemoveByInstanceId jVMConfigRemoveByInstanceId($options = [])
 * @method JVMConfigRemoveByIdList jVMConfigRemoveByIdList($options = [])
 * @method JVMConfigRemoveById jVMConfigRemoveById($options = [])
 * @method JVMConfigModify jVMConfigModify($options = [])
 * @method JVMConfigGetByInstanceId jVMConfigGetByInstanceId($options = [])
 * @method JVMConfigGetById jVMConfigGetById($options = [])
 * @method JVMConfigEnable jVMConfigEnable($options = [])
 * @method JVMConfigDisable jVMConfigDisable($options = [])
 * @method JVMConfigCreate jVMConfigCreate($options = [])
 * @method QueryEventLast queryEventLast($options = [])
 * @method NodeListUpdate nodeListUpdate($options = [])
 * @method IsMetricNameValid isMetricNameValid($options = [])
 * @method PutLogMonitor putLogMonitor($options = [])
 * @method ListLogMonitorByGroupId listLogMonitorByGroupId($options = [])
 * @method ListLogMonitor listLogMonitor($options = [])
 * @method GetLogMonitorByMetricName getLogMonitorByMetricName($options = [])
 * @method DeleteLogMonitor deleteLogMonitor($options = [])
 * @method PutMetricMeta putMetricMeta($options = [])
 * @method UploadData uploadData($options = [])
 * @method UpdateOutput updateOutput($options = [])
 * @method UpdateMetrics updateMetrics($options = [])
 * @method StopMetricStream stopMetricStream($options = [])
 * @method StartMetricStream startMetricStream($options = [])
 * @method QueryIncremental queryIncremental($options = [])
 * @method putProductGroup putProductGroup($options = [])
 * @method ListOutput listOutput($options = [])
 * @method ListMetricsPlan listMetricsPlan($options = [])
 * @method ListMetrics listMetrics($options = [])
 * @method ListDimTableData listDimTableData($options = [])
 * @method getProductGroups getProductGroups($options = [])
 * @method getProductGroupInstances getProductGroupInstances($options = [])
 * @method GetOutput getOutput($options = [])
 * @method GetMetricStreamStatus getMetricStreamStatus($options = [])
 * @method GetMetricStreamMeta getMetricStreamMeta($options = [])
 * @method GetMetricStatistics getMetricStatistics($options = [])
 * @method GetMetrics getMetrics($options = [])
 * @method DescribeMetricList describeMetricList($options = [])
 * @method DescribeMetricDatum describeMetricDatum($options = [])
 * @method deleteProductGroup deleteProductGroup($options = [])
 * @method DeleteOutput deleteOutput($options = [])
 * @method CreateOutput createOutput($options = [])
 * @method CreateMetrics createMetrics($options = [])
 * @method cmsShareGenerateToken cmsShareGenerateToken($options = [])
 * @method cmsShareDeleteTokenByToken cmsShareDeleteTokenByToken($options = [])
 * @method cmsListShares cmsListShares($options = [])
 * @method BatchQueryMetric batchQueryMetric($options = [])
 * @method BatchCreateMetrics batchCreateMetrics($options = [])
 * @method NodeStatusList nodeStatusList($options = [])
 * @method ProfileSet profileSet($options = [])
 * @method ProfileGet profileGet($options = [])
 * @method AccessKeyQuery accessKeyQuery($options = [])
 * @method NodeUninstall nodeUninstall($options = [])
 * @method NodeAgentVersion nodeAgentVersion($options = [])
 * @method QueryMetric queryMetric($options = [])
 * @method UpdateSqlMetrics updateSqlMetrics($options = [])
 * @method UpdateProject updateProject($options = [])
 * @method UpdateMetricStream updateMetricStream($options = [])
 * @method UpdateMetricOutput updateMetricOutput($options = [])
 * @method UpdateDimTable updateDimTable($options = [])
 * @method StopProject stopProject($options = [])
 * @method StatusProject statusProject($options = [])
 * @method StartProject startProject($options = [])
 * @method QueryMetricTopN queryMetricTopN($options = [])
 * @method QueryMetricTop queryMetricTop($options = [])
 * @method QueryMetricList queryMetricList($options = [])
 * @method QueryMetricLast queryMetricLast($options = [])
 * @method QueryMetricData queryMetricData($options = [])
 * @method QueryListMetric queryListMetric($options = [])
 * @method QueryEvent queryEvent($options = [])
 * @method QueryDimTableDataByKey queryDimTableDataByKey($options = [])
 * @method QueryDimTableData queryDimTableData($options = [])
 * @method PutMetrics putMetrics($options = [])
 * @method PutMetricData putMetricData($options = [])
 * @method PutDimTableData putDimTableData($options = [])
 * @method NodeStatus nodeStatus($options = [])
 * @method NodeProcesses nodeProcesses($options = [])
 * @method NodeProcessDelete nodeProcessDelete($options = [])
 * @method NodeProcessCreate nodeProcessCreate($options = [])
 * @method NodeList nodeList($options = [])
 * @method NodeInstall nodeInstall($options = [])
 * @method MetricSqlCheck metricSqlCheck($options = [])
 * @method ListSqlMetrics listSqlMetrics($options = [])
 * @method ListProject listProject($options = [])
 * @method ListMetricStream listMetricStream($options = [])
 * @method ListMetricsMeta listMetricsMeta($options = [])
 * @method ListMetricOutput listMetricOutput($options = [])
 * @method ListDimTable listDimTable($options = [])
 * @method GetSqlMetrics getSqlMetrics($options = [])
 * @method GetProject getProject($options = [])
 * @method GetMetricStream getMetricStream($options = [])
 * @method GetMetricsMeta getMetricsMeta($options = [])
 * @method GetMetricOutput getMetricOutput($options = [])
 * @method GetDimTable getDimTable($options = [])
 * @method DescribeMetric describeMetric($options = [])
 * @method DeleteProject deleteProject($options = [])
 * @method DeleteMetricStream deleteMetricStream($options = [])
 * @method DeleteMetrics deleteMetrics($options = [])
 * @method DeleteMetricOutput deleteMetricOutput($options = [])
 * @method DeleteDimTableDataByKey deleteDimTableDataByKey($options = [])
 * @method DeleteDimTableData deleteDimTableData($options = [])
 * @method DeleteDimTable deleteDimTable($options = [])
 * @method CreateSqlMetrics createSqlMetrics($options = [])
 * @method CreateProject createProject($options = [])
 * @method CreateMetricStream createMetricStream($options = [])
 * @method CreateMetricOutput createMetricOutput($options = [])
 * @method CreateDimTable createDimTable($options = [])
 * @method BatchPutDimTableData123 batchPutDimTableData123($options = [])
 * @method BatchPutDimTableData batchPutDimTableData($options = [])
 * @method BatchCreateSqlMetrics batchCreateSqlMetrics($options = [])
 * @method AccessKeyGet accessKeyGet($options = [])
 * @method AccessKeyGenerate accessKeyGenerate($options = [])
 */
class V20160922
{
    use ApiResolverTrait;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method int getMetricId
 * @method self withMetricId(int $metricId)
 */
class DeleteMetricOfLogMonitor extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method int getLogId
 * @method self withLogId(int $logId)
 */
class ListMetricsOfLogMonitor extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method int getLogId
 * @method self withLogId(int $logId)
 */
class GetLogMonitorInAll extends Roa
{
    use R;
}

/**
 * @method string getProjectOwner
 * @method self withProjectOwner(string $projectOwner)
 * @method int getPage
 * @method self withPage(int $page)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 */
class QueryProject extends Roa
{
    use R;
}

/**
 * @method bool getSelectContactGroups
 * @method self withSelectContactGroups(bool $selectContactGroups)
 * @method string getGroupType
 * @method self withGroupType(string $groupType)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getBindUrls
 * @method self withBindUrls(string $bindUrls)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 */
class ListGroupsInner extends Roa
{
    use R;
}

/**
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
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
class QueryInstanceTop extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 */
class QueryIsMetricNameValid extends Roa
{
    use R;
}

/**
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListMyGroups extends Roa
{
    use R;
}

/**
 * @method int getUserId
 * @method self withUserId(int $userId)
 * @method Integer getYear
 * @method self withYear(Integer $year)
 * @method Integer getWeekOfYear
 * @method self withWeekOfYear(Integer $weekOfYear)
 */
class H5WeeklyReportUserIds extends Roa
{
    use R;
}

/**
 * @method int getUserId
 * @method self withUserId(int $userId)
 * @method Integer getYear
 * @method self withYear(Integer $year)
 * @method Integer getWeekOfYear
 * @method self withWeekOfYear(Integer $weekOfYear)
 * @method string getFileType
 * @method self withFileType(string $fileType)
 */
class H5WeeklyReportUrl extends Roa
{
    use R;
}

class ProjectList extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 */
class MetricMeta extends Roa
{
    use R;
}

/**
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
 * @method string getFieldNames
 * @method self withFieldNames(string $fieldNames)
 * @method string getListByTop
 * @method self withListByTop(string $listByTop)
 * @method string getOrderby
 * @method self withOrderby(string $orderby)
 * @method string getOrderDesc
 * @method self withOrderDesc(string $orderDesc)
 * @method string getLimit
 * @method self withLimit(string $limit)
 * @method string getTargetPrefix
 * @method self withTargetPrefix(string $targetPrefix)
 * @method string getPage
 * @method self withPage(string $page)
 * @method string getLength
 * @method self withLength(string $length)
 */
class MetricData extends Roa
{
    use R;
}

class Heartbeat extends Roa
{
    use R;
}

/**
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
 * @method string getNextKey
 * @method self withNextKey(string $nextKey)
 */
class DimensionValues extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getNamespace
 * @method self withNamespace(string $namespace)
 * @method string getMetricNames
 * @method self withMetricNames(string $metricNames)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getFilter
 * @method self withFilter(string $filter)
 */
class QueryMetricsFresh extends Roa
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
class QueryMetricDimensions extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getDimension
 * @method self withDimension(string $dimension)
 * @method string getWhere
 * @method self withWhere(string $where)
 * @method string getLimit
 * @method self withLimit(string $limit)
 */
class QueryCustomValue extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 */
class QueryCustomTable extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getIsdim
 * @method self withIsdim(string $isdim)
 */
class QueryCustomField extends Roa
{
    use R;
}

/**
 * @method array getTaskIdList
 * @method self withTaskIdList(array $taskIdList)
 */
class TaskConfigUnhealthy extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method int getId
 * @method self withId(int $id)
 * @method string getTaskName
 * @method self withTaskName(string $taskName)
 * @method string getTaskScope
 * @method self withTaskScope(string $taskScope)
 * @method string getTaskType
 * @method self withTaskType(string $taskType)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getJsonData
 * @method self withJsonData(string $jsonData)
 * @method array getInstanceList
 * @method self withInstanceList(array $instanceList)
 * @method string getAlertConfig
 * @method self withAlertConfig(string $alertConfig)
 */
class TaskConfigModify extends Roa
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method string getTaskName
 * @method self withTaskName(string $taskName)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class TaskConfigList extends Roa
{
    use R;
}

/**
 * @method array getIdList
 * @method self withIdList(array $idList)
 * @method bool getEnabled
 * @method self withEnabled(bool $enabled)
 */
class TaskConfigEnable extends Roa
{
    use R;
}

/**
 * @method array getIdList
 * @method self withIdList(array $idList)
 */
class TaskConfigDelete extends Roa
{
    use R;
}

/**
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getTaskType
 * @method self withTaskType(string $taskType)
 * @method string getTaskName
 * @method self withTaskName(string $taskName)
 * @method string getTaskScope
 * @method self withTaskScope(string $taskScope)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getJsonData
 * @method self withJsonData(string $jsonData)
 * @method array getInstanceList
 * @method self withInstanceList(array $instanceList)
 * @method string getAlertConfig
 * @method self withAlertConfig(string $alertConfig)
 */
class TaskConfigCreate extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method Integer getTemplateId
 * @method self withTemplateId(Integer $templateId)
 * @method string getTemplateName
 * @method self withTemplateName(string $templateName)
 * @method string getTemplateDescribe
 * @method self withTemplateDescribe(string $templateDescribe)
 * @method string getSilenceTime
 * @method self withSilenceTime(string $silenceTime)
 * @method string getEnableStartTime
 * @method self withEnableStartTime(string $enableStartTime)
 * @method string getEnableEndTime
 * @method self withEnableEndTime(string $enableEndTime)
 * @method string getNotifyLevel
 * @method self withNotifyLevel(string $notifyLevel)
 * @method string getTemplateType
 * @method self withTemplateType(string $templateType)
 * @method string getApplyGroups
 * @method self withApplyGroups(string $applyGroups)
 * @method string getAlarmTemplateItems
 * @method self withAlarmTemplateItems(string $alarmTemplateItems)
 */
class PutAlertTemplate extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 */
class GetLogMonitorResourceControlInfo extends Roa
{
    use R;
}

/**
 * @method int getTemplateId
 * @method self withTemplateId(int $templateId)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class PutAlarmTemplate extends Roa
{
    use R;
}

/**
 * @method int getTemplateId
 * @method self withTemplateId(int $templateId)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListAlarmTemplate extends Roa
{
    use R;
}

/**
 * @method Integer gettemplateId
 * @method self withtemplateId(Integer $templateId)
 */
class DeleteAlarmTemplate extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class JVMConfigRemoveByInstanceId extends Roa
{
    use R;
}

/**
 * @method string getIdList
 * @method self withIdList(string $idList)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class JVMConfigRemoveByIdList extends Roa
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class JVMConfigRemoveById extends Roa
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getUserId
 * @method self withUserId(int $userId)
 * @method string getHost
 * @method self withHost(string $host)
 * @method Integer getPort
 * @method self withPort(Integer $port)
 * @method string getObjectNameJsonStr
 * @method self withObjectNameJsonStr(string $objectNameJsonStr)
 */
class JVMConfigModify extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class JVMConfigGetByInstanceId extends Roa
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class JVMConfigGetById extends Roa
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class JVMConfigEnable extends Roa
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class JVMConfigDisable extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getUserId
 * @method self withUserId(int $userId)
 * @method string getHost
 * @method self withHost(string $host)
 * @method Integer getPort
 * @method self withPort(Integer $port)
 * @method string getObjectNameJsonStr
 * @method self withObjectNameJsonStr(string $objectNameJsonStr)
 */
class JVMConfigCreate extends Roa
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
 * @method string getCursor
 * @method self withCursor(string $cursor)
 * @method string getLength
 * @method self withLength(string $length)
 * @method string getFilter
 * @method self withFilter(string $filter)
 */
class QueryEventLast extends Roa
{
    use R;
}

/**
 * @method int getUserId
 * @method self withUserId(int $userId)
 */
class NodeListUpdate extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 */
class IsMetricNameValid extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getLogMonitor
 * @method self withLogMonitor(string $logMonitor)
 */
class PutLogMonitor extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 */
class ListLogMonitorByGroupId extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getSearchValue
 * @method self withSearchValue(string $searchValue)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 */
class ListLogMonitor extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 */
class GetLogMonitorByMetricName extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method int getLogId
 * @method self withLogId(int $logId)
 */
class DeleteLogMonitor extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMetricMeta
 * @method self withMetricMeta(string $metricMeta)
 */
class PutMetricMeta extends Roa
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
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getMetrics
 * @method self withMetrics(string $metrics)
 */
class UpdateMetrics extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 */
class StopMetricStream extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 */
class StartMetricStream extends Roa
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
 * @method string getTargetPeriod
 * @method self withTargetPeriod(string $targetPeriod)
 * @method string getColumns
 * @method self withColumns(string $columns)
 * @method string getExtend
 * @method self withExtend(string $extend)
 */
class QueryIncremental extends Roa
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
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method int getPage
 * @method self withPage(int $page)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class ListMetricsPlan extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method int getPage
 * @method self withPage(int $page)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class ListMetrics extends Roa
{
    use R;
}

/**
 * @method string getDimTableName
 * @method self withDimTableName(string $dimTableName)
 * @method string getKey
 * @method self withKey(string $key)
 */
class ListDimTableData extends Roa
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
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 */
class GetMetricStreamStatus extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 */
class GetMetricStreamMeta extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getNamespace
 * @method self withNamespace(string $namespace)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method Integer getNextToken
 * @method self withNextToken(Integer $nextToken)
 * @method Integer getLength
 * @method self withLength(Integer $length)
 */
class GetMetricStatistics extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 */
class GetMetrics extends Roa
{
    use R;
}

/**
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
 */
class DescribeMetricList extends Roa
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
 */
class DescribeMetricDatum extends Roa
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
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method Integer getIsPublic
 * @method self withIsPublic(Integer $isPublic)
 * @method string getMetrics
 * @method self withMetrics(string $metrics)
 */
class CreateMetrics extends Roa
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
 * @method string getExtend
 * @method self withExtend(string $extend)
 * @method string getFilter
 * @method self withFilter(string $filter)
 */
class BatchQueryMetric extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricStreamName
 * @method self withMetricStreamName(string $metricStreamName)
 * @method string getSqls
 * @method self withSqls(string $sqls)
 */
class BatchCreateMetrics extends Roa
{
    use R;
}

/**
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 */
class NodeStatusList extends Roa
{
    use R;
}

/**
 * @method int getUserId
 * @method self withUserId(int $userId)
 * @method bool getAutoInstall
 * @method self withAutoInstall(bool $autoInstall)
 * @method bool getEnableInstallAgentNewECS
 * @method self withEnableInstallAgentNewECS(bool $enableInstallAgentNewECS)
 */
class ProfileSet extends Roa
{
    use R;
}

/**
 * @method int getUserId
 * @method self withUserId(int $userId)
 */
class ProfileGet extends Roa
{
    use R;
}

/**
 * @method string getAccessKey
 * @method self withAccessKey(string $accessKey)
 */
class AccessKeyQuery extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class NodeUninstall extends Roa
{
    use R;
}

class NodeAgentVersion extends Roa
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
 */
class QueryMetric extends Roa
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
 * @method string getPage
 * @method self withPage(string $page)
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
 * @method string getPage
 * @method self withPage(string $page)
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
 */
class NodeProcesses extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getId
 * @method self withId(string $id)
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
 * @method string getProcessName
 * @method self withProcessName(string $processName)
 * @method string getProcessUser
 * @method self withProcessUser(string $processUser)
 * @method string getCommand
 * @method self withCommand(string $command)
 */
class NodeProcessCreate extends Roa
{
    use R;
}

/**
 * @method int getUserId
 * @method self withUserId(int $userId)
 * @method string getHostName
 * @method self withHostName(string $hostName)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 * @method string getSerialNumbers
 * @method self withSerialNumbers(string $serialNumbers)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class NodeList extends Roa
{
    use R;
}

/**
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method bool getForce
 * @method self withForce(bool $force)
 */
class NodeInstall extends Roa
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
 * @method string getProjectOwner
 * @method self withProjectOwner(string $projectOwner)
 * @method int getPage
 * @method self withPage(int $page)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
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
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method int getPage
 * @method self withPage(int $page)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
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
class BatchPutDimTableData123 extends Roa
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
