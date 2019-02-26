<?php

namespace AlibabaCloud\Cms\V00000000;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method UploadData uploadData($options = [])
 * @method UpdateTemplateApplyGroups updateTemplateApplyGroups($options = [])
 * @method UpdateSqlMetrics updateSqlMetrics($options = [])
 * @method UpdateProject updateProject($options = [])
 * @method UpdateOutput updateOutput($options = [])
 * @method UpdateMetricStream updateMetricStream($options = [])
 * @method UpdateMetrics updateMetrics($options = [])
 * @method UpdateMetricOutput updateMetricOutput($options = [])
 * @method UpdateLogHubMetric updateLogHubMetric($options = [])
 * @method UpdateLevelChannel updateLevelChannel($options = [])
 * @method UpdateEventTriggerDesc updateEventTriggerDesc($options = [])
 * @method UpdateEventMetric updateEventMetric($options = [])
 * @method UpdateDimTable updateDimTable($options = [])
 * @method UpdateDimensionsByGroupId updateDimensionsByGroupId($options = [])
 * @method UpdateDimensions updateDimensions($options = [])
 * @method UpdateDBSource updateDBSource($options = [])
 * @method UpdateDBMetric updateDBMetric($options = [])
 * @method UpdateContactGroup updateContactGroup($options = [])
 * @method UpdateContact updateContact($options = [])
 * @method UpdateAlertContactGroupByGroupId updateAlertContactGroupByGroupId($options = [])
 * @method UpdateAlertByGroupId updateAlertByGroupId($options = [])
 * @method UpdateAlert updateAlert($options = [])
 * @method UpdateAlarm updateAlarm($options = [])
 * @method UnsubscribeGoc unsubscribeGoc($options = [])
 * @method UnhealthyInstanceCountByGroupId unhealthyInstanceCountByGroupId($options = [])
 * @method TaskConfigUnhealthy taskConfigUnhealthy($options = [])
 * @method TaskConfigModify taskConfigModify($options = [])
 * @method TaskConfigList taskConfigList($options = [])
 * @method TaskConfigEnable taskConfigEnable($options = [])
 * @method TaskConfigDelete taskConfigDelete($options = [])
 * @method TaskConfigCreate taskConfigCreate($options = [])
 * @method SubscribeGoc subscribeGoc($options = [])
 * @method StopProject stopProject($options = [])
 * @method StopMetricStream stopMetricStream($options = [])
 * @method StatusProject statusProject($options = [])
 * @method StartProject startProject($options = [])
 * @method StartMetricStream startMetricStream($options = [])
 * @method SetEventTrigger setEventTrigger($options = [])
 * @method SendAlarm sendAlarm($options = [])
 * @method SearchAlert searchAlert($options = [])
 * @method RemoveProjectOwner removeProjectOwner($options = [])
 * @method QueryMetricTopN queryMetricTopN($options = [])
 * @method QueryMetricTop queryMetricTop($options = [])
 * @method QueryMetricsFresh queryMetricsFresh($options = [])
 * @method QueryMetricList queryMetricList($options = [])
 * @method QueryMetricLast queryMetricLast($options = [])
 * @method QueryMetricDimensions queryMetricDimensions($options = [])
 * @method QueryMetricData queryMetricData($options = [])
 * @method QueryMetricAgg queryMetricAgg($options = [])
 * @method QueryMetric queryMetric($options = [])
 * @method QueryListMetric queryListMetric($options = [])
 * @method QueryIncremental queryIncremental($options = [])
 * @method QueryEventLast queryEventLast($options = [])
 * @method QueryEvent queryEvent($options = [])
 * @method QueryDimTableDataByKey queryDimTableDataByKey($options = [])
 * @method QueryDimTableData queryDimTableData($options = [])
 * @method QueryCustomValue queryCustomValue($options = [])
 * @method QueryCustomTable queryCustomTable($options = [])
 * @method QueryCustomField queryCustomField($options = [])
 * @method putProductGroup putProductGroup($options = [])
 * @method PutMetrics putMetrics($options = [])
 * @method PutMetricMeta putMetricMeta($options = [])
 * @method PutMetricData putMetricData($options = [])
 * @method PutLogMonitor putLogMonitor($options = [])
 * @method PutDimTableData putDimTableData($options = [])
 * @method PutDashboardConfig putDashboardConfig($options = [])
 * @method PutCMSAlert putCMSAlert($options = [])
 * @method PutChartMetric putChartMetric($options = [])
 * @method PutAlertTemplate putAlertTemplate($options = [])
 * @method PutAlarmTemplate putAlarmTemplate($options = [])
 * @method ProjectList projectList($options = [])
 * @method ProfileSet profileSet($options = [])
 * @method ProfileGet profileGet($options = [])
 * @method NodeUninstall nodeUninstall($options = [])
 * @method NodeStatusList nodeStatusList($options = [])
 * @method NodeStatus nodeStatus($options = [])
 * @method NodeProcesses nodeProcesses($options = [])
 * @method NodeProcessDelete nodeProcessDelete($options = [])
 * @method NodeProcessCreate nodeProcessCreate($options = [])
 * @method NodeListUpdate nodeListUpdate($options = [])
 * @method NodeList nodeList($options = [])
 * @method NodeInstall nodeInstall($options = [])
 * @method NodeAgentVersion nodeAgentVersion($options = [])
 * @method MoveMetric moveMetric($options = [])
 * @method MetricSqlCheck metricSqlCheck($options = [])
 * @method MetricMeta metricMeta($options = [])
 * @method MetricData metricData($options = [])
 * @method ListSqlMetrics listSqlMetrics($options = [])
 * @method ListProjectsEvents listProjectsEvents($options = [])
 * @method ListProject listProject($options = [])
 * @method ListProductGroups listProductGroups($options = [])
 * @method ListProductGroupInstances listProductGroupInstances($options = [])
 * @method ListOverviewConfig listOverviewConfig($options = [])
 * @method ListOutput listOutput($options = [])
 * @method ListNotifyHistoryNew listNotifyHistoryNew($options = [])
 * @method ListNotifyHistory listNotifyHistory($options = [])
 * @method ListMyGroups listMyGroups($options = [])
 * @method ListMetricStream listMetricStream($options = [])
 * @method ListMetricsPlan listMetricsPlan($options = [])
 * @method ListMetricsMeta listMetricsMeta($options = [])
 * @method ListMetrics listMetrics($options = [])
 * @method ListMetricOutput listMetricOutput($options = [])
 * @method ListMetricMeta listMetricMeta($options = [])
 * @method ListLogMonitorByGroupId listLogMonitorByGroupId($options = [])
 * @method ListLogMonitor listLogMonitor($options = [])
 * @method ListLogHubMetric listLogHubMetric($options = [])
 * @method ListLevelChannel listLevelChannel($options = [])
 * @method ListEventTrigger listEventTrigger($options = [])
 * @method ListEventMetric listEventMetric($options = [])
 * @method ListDimTableData listDimTableData($options = [])
 * @method ListDimTable listDimTable($options = [])
 * @method ListDimensions listDimensions($options = [])
 * @method ListDBSource listDBSource($options = [])
 * @method ListDBMetric listDBMetric($options = [])
 * @method ListContactGroup listContactGroup($options = [])
 * @method ListContact listContact($options = [])
 * @method ListCMSAlertNew listCMSAlertNew($options = [])
 * @method ListCMSAlert listCMSAlert($options = [])
 * @method ListAlertTemplate listAlertTemplate($options = [])
 * @method ListAlertStateFaultList listAlertStateFaultList($options = [])
 * @method ListAlertStateByDimensions listAlertStateByDimensions($options = [])
 * @method ListAlertState listAlertState($options = [])
 * @method ListAlert listAlert($options = [])
 * @method ListAlarmTemplate listAlarmTemplate($options = [])
 * @method ListAlarmHistory listAlarmHistory($options = [])
 * @method ListAlarm listAlarm($options = [])
 * @method JVMConfigRemoveByInstanceId jVMConfigRemoveByInstanceId($options = [])
 * @method JVMConfigRemoveByIdList jVMConfigRemoveByIdList($options = [])
 * @method JVMConfigRemoveById jVMConfigRemoveById($options = [])
 * @method JVMConfigModify jVMConfigModify($options = [])
 * @method JVMConfigGetByInstanceId jVMConfigGetByInstanceId($options = [])
 * @method JVMConfigGetById jVMConfigGetById($options = [])
 * @method JVMConfigEnable jVMConfigEnable($options = [])
 * @method JVMConfigDisable jVMConfigDisable($options = [])
 * @method JVMConfigCreate jVMConfigCreate($options = [])
 * @method IsMetricNameValid isMetricNameValid($options = [])
 * @method Heartbeat heartbeat($options = [])
 * @method H5WeeklyReportUserIds h5WeeklyReportUserIds($options = [])
 * @method H5WeeklyReportUrl h5WeeklyReportUrl($options = [])
 * @method GrantProjectOwner grantProjectOwner($options = [])
 * @method GetSqlMetrics getSqlMetrics($options = [])
 * @method GetProject getProject($options = [])
 * @method GetProductGroupsAction getProductGroupsAction($options = [])
 * @method GetProductGroups getProductGroups($options = [])
 * @method GetProductGroupInstances getProductGroupInstances($options = [])
 * @method GetOverviewConfig getOverviewConfig($options = [])
 * @method GetOutput getOutput($options = [])
 * @method GetMetricStreamStatus getMetricStreamStatus($options = [])
 * @method GetMetricStreamMeta getMetricStreamMeta($options = [])
 * @method GetMetricStream getMetricStream($options = [])
 * @method GetMetricStatistics getMetricStatistics($options = [])
 * @method GetMetricsMeta getMetricsMeta($options = [])
 * @method GetMetrics getMetrics($options = [])
 * @method GetMetricRelatedEvents getMetricRelatedEvents($options = [])
 * @method GetMetricOutput getMetricOutput($options = [])
 * @method GetLogMonitorResourceControlInfo getLogMonitorResourceControlInfo($options = [])
 * @method GetLogMonitorByMetricName getLogMonitorByMetricName($options = [])
 * @method GetLogHubMetric getLogHubMetric($options = [])
 * @method GetLevelChannel getLevelChannel($options = [])
 * @method GetEventTrigger getEventTrigger($options = [])
 * @method GetEventMetric getEventMetric($options = [])
 * @method GetDimTable getDimTable($options = [])
 * @method GetDimensions getDimensions($options = [])
 * @method GetDBSource getDBSource($options = [])
 * @method GetDBMetric getDBMetric($options = [])
 * @method GetDashboardConfig getDashboardConfig($options = [])
 * @method GetContactGroup getContactGroup($options = [])
 * @method GetContact getContact($options = [])
 * @method GetAlert getAlert($options = [])
 * @method GetAlarmCountInLast7Days getAlarmCountInLast7Days($options = [])
 * @method EnableAlertByGroupId enableAlertByGroupId($options = [])
 * @method EnableAlert enableAlert($options = [])
 * @method EnableAlarm enableAlarm($options = [])
 * @method DisableAlertByGroupId disableAlertByGroupId($options = [])
 * @method DisableAlert disableAlert($options = [])
 * @method DisableAlarm disableAlarm($options = [])
 * @method DimensionValues dimensionValues($options = [])
 * @method DescribeMetricList describeMetricList($options = [])
 * @method DescribeMetricDatum describeMetricDatum($options = [])
 * @method DescribeMetric describeMetric($options = [])
 * @method DeleteProject deleteProject($options = [])
 * @method DeleteProductGroup deleteProductGroup($options = [])
 * @method DeleteOutput deleteOutput($options = [])
 * @method DeleteMetricStream deleteMetricStream($options = [])
 * @method DeleteMetrics deleteMetrics($options = [])
 * @method DeleteMetricOutput deleteMetricOutput($options = [])
 * @method DeleteLogMonitor deleteLogMonitor($options = [])
 * @method DeleteLogHubMetric deleteLogHubMetric($options = [])
 * @method DeleteLevelChannel deleteLevelChannel($options = [])
 * @method DeleteEventTrigger deleteEventTrigger($options = [])
 * @method DeleteEventMetric deleteEventMetric($options = [])
 * @method DeleteDimTableDataByKey deleteDimTableDataByKey($options = [])
 * @method DeleteDimTableData deleteDimTableData($options = [])
 * @method DeleteDimTable deleteDimTable($options = [])
 * @method DeleteDimensions deleteDimensions($options = [])
 * @method DeleteDBSource deleteDBSource($options = [])
 * @method DeleteDBMetric deleteDBMetric($options = [])
 * @method DeleteDashboardConfig deleteDashboardConfig($options = [])
 * @method DeleteContactGroup deleteContactGroup($options = [])
 * @method DeleteContact deleteContact($options = [])
 * @method DeleteChartMetric deleteChartMetric($options = [])
 * @method DeleteAlertTemplate deleteAlertTemplate($options = [])
 * @method DeleteAlertByMetric deleteAlertByMetric($options = [])
 * @method DeleteAlertByGroupId deleteAlertByGroupId($options = [])
 * @method DeleteAlert deleteAlert($options = [])
 * @method DeleteAlarmTemplate deleteAlarmTemplate($options = [])
 * @method DeleteAlarm deleteAlarm($options = [])
 * @method CreateSqlMetrics createSqlMetrics($options = [])
 * @method CreateProject createProject($options = [])
 * @method CreateOutput createOutput($options = [])
 * @method CreateMetricStream createMetricStream($options = [])
 * @method CreateMetrics createMetrics($options = [])
 * @method CreateMetricOutput createMetricOutput($options = [])
 * @method CreateLogHubMetric createLogHubMetric($options = [])
 * @method CreateLevelChannel createLevelChannel($options = [])
 * @method CreateEventMetric createEventMetric($options = [])
 * @method CreateDimTable createDimTable($options = [])
 * @method CreateDimensions createDimensions($options = [])
 * @method CreateDBSource createDBSource($options = [])
 * @method CreateDBMetric createDBMetric($options = [])
 * @method CreateContactGroup createContactGroup($options = [])
 * @method CreateContact createContact($options = [])
 * @method CreateAlert createAlert($options = [])
 * @method CreateAlarm createAlarm($options = [])
 * @method CountGoc countGoc($options = [])
 * @method CopyGroupDashboard copyGroupDashboard($options = [])
 * @method cmsShareGenerateToken cmsShareGenerateToken($options = [])
 * @method cmsShareDeleteTokenByToken cmsShareDeleteTokenByToken($options = [])
 * @method cmsListShares cmsListShares($options = [])
 * @method ChangeEventTriggerStatus changeEventTriggerStatus($options = [])
 * @method BatchQueryProject batchQueryProject($options = [])
 * @method BatchQueryMetric batchQueryMetric($options = [])
 * @method BatchPutDimTableData123 batchPutDimTableData123($options = [])
 * @method BatchPutDimTableData batchPutDimTableData($options = [])
 * @method BatchEnableAlerts batchEnableAlerts($options = [])
 * @method BatchDisableAlerts batchDisableAlerts($options = [])
 * @method BatchCreateSqlMetrics batchCreateSqlMetrics($options = [])
 * @method BatchCreateMetrics batchCreateMetrics($options = [])
 * @method AccessKeyQuery accessKeyQuery($options = [])
 * @method AccessKeyGet accessKeyGet($options = [])
 */
class V00000000
{
    use ApiResolverTrait;
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
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 * @method string getGroupIds
 * @method self withGroupIds(string $groupIds)
 */
class UpdateTemplateApplyGroups extends Roa
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
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getMetric
 * @method self withMetric(string $metric)
 */
class UpdateLogHubMetric extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getLevel
 * @method self withLevel(string $level)
 * @method string getLevelChannelSetting
 * @method self withLevelChannelSetting(string $levelChannelSetting)
 */
class UpdateLevelChannel extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 * @method string getShowName
 * @method self withShowName(string $showName)
 * @method string getDetail
 * @method self withDetail(string $detail)
 */
class UpdateEventTriggerDesc extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getMetric
 * @method self withMetric(string $metric)
 */
class UpdateEventMetric extends Roa
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
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getGroups
 * @method self withGroups(string $groups)
 */
class UpdateDimensionsByGroupId extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method string getDimensionsId
 * @method self withDimensionsId(string $dimensionsId)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 */
class UpdateDimensions extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getSourceName
 * @method self withSourceName(string $sourceName)
 * @method string getSource
 * @method self withSource(string $source)
 */
class UpdateDBSource extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getMetric
 * @method self withMetric(string $metric)
 */
class UpdateDBMetric extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getContactGroup
 * @method self withContactGroup(string $contactGroup)
 */
class UpdateContactGroup extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getContactName
 * @method self withContactName(string $contactName)
 * @method string getContact
 * @method self withContact(string $contact)
 */
class UpdateContact extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getContactGroups
 * @method self withContactGroups(string $contactGroups)
 */
class UpdateAlertContactGroupByGroupId extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getAlert
 * @method self withAlert(string $alert)
 */
class UpdateAlertByGroupId extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method string getAlert
 * @method self withAlert(string $alert)
 */
class UpdateAlert extends Roa
{
    use R;
}

/**
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getId
 * @method self withId(string $id)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getStatistics
 * @method self withStatistics(string $statistics)
 * @method string getComparisonOperator
 * @method self withComparisonOperator(string $comparisonOperator)
 * @method string getThreshold
 * @method self withThreshold(string $threshold)
 * @method string getContactGroups
 * @method self withContactGroups(string $contactGroups)
 * @method Integer getStartTime
 * @method self withStartTime(Integer $startTime)
 * @method Integer getEndTime
 * @method self withEndTime(Integer $endTime)
 * @method Integer getSilenceTime
 * @method self withSilenceTime(Integer $silenceTime)
 * @method Integer getEvaluationCount
 * @method self withEvaluationCount(Integer $evaluationCount)
 * @method Integer getNotifyType
 * @method self withNotifyType(Integer $notifyType)
 */
class UpdateAlarm extends Roa
{
    use R;
}

/**
 * @method string getuuid
 * @method self withuuid(string $uuid)
 */
class UnsubscribeGoc extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class UnhealthyInstanceCountByGroupId extends Roa
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
 * @method int getId
 * @method self withId(int $id)
 * @method string getTaskName
 * @method self withTaskName(string $taskName)
 * @method string getTaskType
 * @method self withTaskType(string $taskType)
 * @method string getTaskScope
 * @method self withTaskScope(string $taskScope)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
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
 * @method string getTaskName
 * @method self withTaskName(string $taskName)
 * @method string getTaskType
 * @method self withTaskType(string $taskType)
 * @method string getTaskScope
 * @method self withTaskScope(string $taskScope)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
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
 * @method string getuuid
 * @method self withuuid(string $uuid)
 * @method Integer getstatus
 * @method self withstatus(Integer $status)
 */
class SubscribeGoc extends Roa
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
 * @method string geteventProduct
 * @method self witheventProduct(string $eventProduct)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 * @method string getEventName
 * @method self withEventName(string $eventName)
 * @method string getShowName
 * @method self withShowName(string $showName)
 * @method string getDetail
 * @method self withDetail(string $detail)
 * @method string getappGroupId
 * @method self withappGroupId(string $appGroupId)
 * @method string getappGroupName
 * @method self withappGroupName(string $appGroupName)
 * @method string getConditionJson
 * @method self withConditionJson(string $conditionJson)
 * @method string getMatchJson
 * @method self withMatchJson(string $matchJson)
 * @method string getTargetListJson
 * @method self withTargetListJson(string $targetListJson)
 */
class SetEventTrigger extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getContacts
 * @method self withContacts(string $contacts)
 * @method string getSubject
 * @method self withSubject(string $subject)
 * @method string getBody
 * @method self withBody(string $body)
 */
class SendAlarm extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getNamespace
 * @method self withNamespace(string $namespace)
 * @method string getNamePrefix
 * @method self withNamePrefix(string $namePrefix)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getAlarmState
 * @method self withAlarmState(string $alarmState)
 * @method Integer getnextToken
 * @method self withnextToken(Integer $nextToken)
 * @method Integer getMaxRecords
 * @method self withMaxRecords(Integer $maxRecords)
 * @method string getService
 * @method self withService(string $service)
 * @method string getCluster
 * @method self withCluster(string $cluster)
 */
class SearchAlert extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getOwners
 * @method self withOwners(string $owners)
 */
class RemoveProjectOwner extends Roa
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
 * @method string getgroupJson
 * @method self withgroupJson(string $groupJson)
 */
class putProductGroup extends Roa
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
 * @method string getgroupName
 * @method self withgroupName(string $groupName)
 * @method Integer gettimeRange
 * @method self withtimeRange(Integer $timeRange)
 * @method Integer getinterval
 * @method self withinterval(Integer $interval)
 * @method string getparams
 * @method self withparams(string $params)
 * @method string getgroupId
 * @method self withgroupId(string $groupId)
 * @method string gettype
 * @method self withtype(string $type)
 */
class PutDashboardConfig extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getType
 * @method self withType(string $type)
 * @method string getAlarms
 * @method self withAlarms(string $alarms)
 */
class PutCMSAlert extends Roa
{
    use R;
}

/**
 * @method string getgroupId
 * @method self withgroupId(string $groupId)
 * @method string getchartName
 * @method self withchartName(string $chartName)
 * @method string getchartType
 * @method self withchartType(string $chartType)
 * @method string getmetrics
 * @method self withmetrics(string $metrics)
 * @method Integer getwidth
 * @method self withwidth(Integer $width)
 * @method Integer getheight
 * @method self withheight(Integer $height)
 * @method string getstyle
 * @method self withstyle(string $style)
 * @method string geti18nKey
 * @method self withi18nKey(string $i18nKey)
 * @method string getid
 * @method self withid(string $id)
 * @method string getparams
 * @method self withparams(string $params)
 * @method string getunit
 * @method self withunit(string $unit)
 * @method string getvalueRange
 * @method self withvalueRange(string $valueRange)
 * @method string gettype
 * @method self withtype(string $type)
 */
class PutChartMetric extends Roa
{
    use R;
}

/**
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

class ProjectList extends Roa
{
    use R;
}

/**
 * @method int getUserId
 * @method self withUserId(int $userId)
 * @method bool getAutoInstall
 * @method self withAutoInstall(bool $autoInstall)
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
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class NodeUninstall extends Roa
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
 */
class NodeListUpdate extends Roa
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

class NodeAgentVersion extends Roa
{
    use R;
}

/**
 * @method string getgroupId
 * @method self withgroupId(string $groupId)
 * @method string getsortGroups
 * @method self withsortGroups(string $sortGroups)
 * @method string gettype
 * @method self withtype(string $type)
 */
class MoveMetric extends Roa
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
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getEventType
 * @method self withEventType(string $eventType)
 * @method string getEventName
 * @method self withEventName(string $eventName)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getCursor
 * @method self withCursor(string $cursor)
 */
class ListProjectsEvents extends Roa
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
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method string getNamespace
 * @method self withNamespace(string $namespace)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getService
 * @method self withService(string $service)
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getCursor
 * @method self withCursor(string $cursor)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method Integer getSendStatus
 * @method self withSendStatus(Integer $sendStatus)
 * @method bool getAscending
 * @method self withAscending(bool $ascending)
 */
class ListNotifyHistoryNew extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getService
 * @method self withService(string $service)
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class ListNotifyHistory extends Roa
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
 * @method string getproject
 * @method self withproject(string $project)
 * @method string getmetric
 * @method self withmetric(string $metric)
 */
class ListMetricMeta extends Roa
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
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListLogHubMetric extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getLevel
 * @method self withLevel(string $level)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListLevelChannel extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method int getOffset
 * @method self withOffset(int $offset)
 * @method int getLength
 * @method self withLength(int $length)
 */
class ListEventTrigger extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListEventMetric extends Roa
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
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListDimensions extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getSourceName
 * @method self withSourceName(string $sourceName)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListDBSource extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListDBMetric extends Roa
{
    use R;
}

/**
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListContactGroup extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getContactName
 * @method self withContactName(string $contactName)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListContact extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getNamespace
 * @method self withNamespace(string $namespace)
 * @method string getNamePrefix
 * @method self withNamePrefix(string $namePrefix)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getAlarmState
 * @method self withAlarmState(string $alarmState)
 * @method Integer getNextToken
 * @method self withNextToken(Integer $nextToken)
 * @method Integer getMaxRecords
 * @method self withMaxRecords(Integer $maxRecords)
 * @method string getEnableState
 * @method self withEnableState(string $enableState)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 */
class ListCMSAlertNew extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getNamespace
 * @method self withNamespace(string $namespace)
 * @method string getNamePrefix
 * @method self withNamePrefix(string $namePrefix)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getAlarmState
 * @method self withAlarmState(string $alarmState)
 * @method Integer getNextToken
 * @method self withNextToken(Integer $nextToken)
 * @method Integer getMaxRecords
 * @method self withMaxRecords(Integer $maxRecords)
 * @method string getEnableState
 * @method self withEnableState(string $enableState)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 */
class ListCMSAlert extends Roa
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
class ListAlertTemplate extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getService
 * @method self withService(string $service)
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method string getServerRole
 * @method self withServerRole(string $serverRole)
 * @method string getHost
 * @method self withHost(string $host)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListAlertStateFaultList extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getService
 * @method self withService(string $service)
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method string getServerRole
 * @method self withServerRole(string $serverRole)
 * @method string getHost
 * @method self withHost(string $host)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListAlertStateByDimensions extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getService
 * @method self withService(string $service)
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method string getServerRole
 * @method self withServerRole(string $serverRole)
 * @method string getHost
 * @method self withHost(string $host)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class ListAlertState extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getService
 * @method self withService(string $service)
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getMetricProject
 * @method self withMetricProject(string $metricProject)
 */
class ListAlert extends Roa
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
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getId
 * @method self withId(string $id)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getCursor
 * @method self withCursor(string $cursor)
 */
class ListAlarmHistory extends Roa
{
    use R;
}

/**
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getId
 * @method self withId(string $id)
 * @method string getName
 * @method self withName(string $name)
 * @method string getNamespace
 * @method self withNamespace(string $namespace)
 * @method string getDimension
 * @method self withDimension(string $dimension)
 * @method string getState
 * @method self withState(string $state)
 * @method bool getIsEnable
 * @method self withIsEnable(bool $isEnable)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListAlarm extends Roa
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
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 */
class IsMetricNameValid extends Roa
{
    use R;
}

class Heartbeat extends Roa
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
 */
class H5WeeklyReportUrl extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getOwners
 * @method self withOwners(string $owners)
 */
class GrantProjectOwner extends Roa
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

class GetProductGroupsAction extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcategory
 * @method self withcategory(string $category)
 * @method string getinstanceId
 * @method self withinstanceId(string $instanceId)
 */
class GetProductGroups extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getgroupId
 * @method self withgroupId(int $groupId)
 * @method string getgroupName
 * @method self withgroupName(string $groupName)
 */
class GetProductGroupInstances extends Roa
{
    use R;
}

class GetOverviewConfig extends Roa
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
 * @method string getAlertProject
 * @method self withAlertProject(string $alertProject)
 * @method string getMetricProject
 * @method self withMetricProject(string $metricProject)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getContext
 * @method self withContext(string $context)
 * @method string getRegion
 * @method self withRegion(string $region)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getCursor
 * @method self withCursor(string $cursor)
 */
class GetMetricRelatedEvents extends Roa
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
 */
class GetLogMonitorResourceControlInfo extends Roa
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
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 */
class GetLogHubMetric extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getLevel
 * @method self withLevel(string $level)
 */
class GetLevelChannel extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 */
class GetEventTrigger extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 */
class GetEventMetric extends Roa
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
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method string getDimensionsId
 * @method self withDimensionsId(string $dimensionsId)
 */
class GetDimensions extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getSourceName
 * @method self withSourceName(string $sourceName)
 */
class GetDBSource extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 */
class GetDBMetric extends Roa
{
    use R;
}

/**
 * @method string getgroupId
 * @method self withgroupId(string $groupId)
 * @method string gettype
 * @method self withtype(string $type)
 */
class GetDashboardConfig extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class GetContactGroup extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getContactName
 * @method self withContactName(string $contactName)
 */
class GetContact extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 */
class GetAlert extends Roa
{
    use R;
}

class GetAlarmCountInLast7Days extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class EnableAlertByGroupId extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 */
class EnableAlert extends Roa
{
    use R;
}

/**
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getId
 * @method self withId(string $id)
 */
class EnableAlarm extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class DisableAlertByGroupId extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 */
class DisableAlert extends Roa
{
    use R;
}

/**
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getId
 * @method self withId(string $id)
 */
class DisableAlarm extends Roa
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
 * @method int getgroupId
 * @method self withgroupId(int $groupId)
 */
class DeleteProductGroup extends Roa
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
 * @method int getLogId
 * @method self withLogId(int $logId)
 */
class DeleteLogMonitor extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 */
class DeleteLogHubMetric extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getLevel
 * @method self withLevel(string $level)
 */
class DeleteLevelChannel extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 */
class DeleteEventTrigger extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 */
class DeleteEventMetric extends Roa
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
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method string getDimensionsId
 * @method self withDimensionsId(string $dimensionsId)
 */
class DeleteDimensions extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getSourceName
 * @method self withSourceName(string $sourceName)
 */
class DeleteDBSource extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 */
class DeleteDBMetric extends Roa
{
    use R;
}

/**
 * @method string getgroupIds
 * @method self withgroupIds(string $groupIds)
 */
class DeleteDashboardConfig extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class DeleteContactGroup extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getContactName
 * @method self withContactName(string $contactName)
 */
class DeleteContact extends Roa
{
    use R;
}

/**
 * @method string getgroupId
 * @method self withgroupId(string $groupId)
 * @method string getids
 * @method self withids(string $ids)
 * @method string gettype
 * @method self withtype(string $type)
 */
class DeleteChartMetric extends Roa
{
    use R;
}

/**
 * @method Integer getTemplateId
 * @method self withTemplateId(Integer $templateId)
 */
class DeleteAlertTemplate extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getNamespace
 * @method self withNamespace(string $namespace)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 */
class DeleteAlertByMetric extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class DeleteAlertByGroupId extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 */
class DeleteAlert extends Roa
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
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getId
 * @method self withId(string $id)
 */
class DeleteAlarm extends Roa
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
 * @method string getMetricOutput
 * @method self withMetricOutput(string $metricOutput)
 */
class CreateOutput extends Roa
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
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetric
 * @method self withMetric(string $metric)
 */
class CreateLogHubMetric extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getLevelChannelSetting
 * @method self withLevelChannelSetting(string $levelChannelSetting)
 */
class CreateLevelChannel extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetric
 * @method self withMetric(string $metric)
 */
class CreateEventMetric extends Roa
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
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 */
class CreateDimensions extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getSource
 * @method self withSource(string $source)
 */
class CreateDBSource extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getMetric
 * @method self withMetric(string $metric)
 */
class CreateDBMetric extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getContactGroup
 * @method self withContactGroup(string $contactGroup)
 */
class CreateContactGroup extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getContact
 * @method self withContact(string $contact)
 */
class CreateContact extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getAlert
 * @method self withAlert(string $alert)
 */
class CreateAlert extends Roa
{
    use R;
}

/**
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
 * @method string getName
 * @method self withName(string $name)
 * @method string getNamespace
 * @method self withNamespace(string $namespace)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getStatistics
 * @method self withStatistics(string $statistics)
 * @method string getComparisonOperator
 * @method self withComparisonOperator(string $comparisonOperator)
 * @method string getThreshold
 * @method self withThreshold(string $threshold)
 * @method Integer getEvaluationCount
 * @method self withEvaluationCount(Integer $evaluationCount)
 * @method string getContactGroups
 * @method self withContactGroups(string $contactGroups)
 * @method Integer getStartTime
 * @method self withStartTime(Integer $startTime)
 * @method Integer getEndTime
 * @method self withEndTime(Integer $endTime)
 * @method Integer getSilenceTime
 * @method self withSilenceTime(Integer $silenceTime)
 * @method Integer getNotifyType
 * @method self withNotifyType(Integer $notifyType)
 */
class CreateAlarm extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getNames
 * @method self withNames(string $names)
 */
class CountGoc extends Roa
{
    use R;
}

/**
 * @method string getfromGroupId
 * @method self withfromGroupId(string $fromGroupId)
 * @method string gettoGroupId
 * @method self withtoGroupId(string $toGroupId)
 */
class CopyGroupDashboard extends Roa
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
 * @method string getUuid
 * @method self withUuid(string $uuid)
 * @method int getstatus
 * @method self withstatus(int $status)
 */
class ChangeEventTriggerStatus extends Roa
{
    use R;
}

/**
 * @method string getNames
 * @method self withNames(string $names)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class BatchQueryProject extends Roa
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
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getService
 * @method self withService(string $service)
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class BatchEnableAlerts extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getService
 * @method self withService(string $service)
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class BatchDisableAlerts extends Roa
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
 * @method string getAccessKey
 * @method self withAccessKey(string $accessKey)
 */
class AccessKeyQuery extends Roa
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
