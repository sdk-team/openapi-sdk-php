<?php

namespace AlibabaCloud\Cms\V20170824;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DeleteMetricMeta deleteMetricMeta($options = [])
 * @method ListMetricMetaProject listMetricMetaProject($options = [])
 * @method StopTasks stopTasks($options = [])
 * @method ModifyTask modifyTask($options = [])
 * @method DescribeTasks describeTasks($options = [])
 * @method DescribeTaskDetail describeTaskDetail($options = [])
 * @method DescribeISPAreaCity describeISPAreaCity($options = [])
 * @method DeleteTasks deleteTasks($options = [])
 * @method GetISPAreaCity getISPAreaCity($options = [])
 * @method UpdateTask updateTask($options = [])
 * @method StartTasks startTasks($options = [])
 * @method QueryTaskRate queryTaskRate($options = [])
 * @method QueryTaskInfo queryTaskInfo($options = [])
 * @method QueryTask queryTask($options = [])
 * @method QuerySlaTask querySlaTask($options = [])
 * @method QueryReportTask queryReportTask($options = [])
 * @method QueryOverdueTask queryOverdueTask($options = [])
 * @method QueryMiniTask queryMiniTask($options = [])
 * @method PauseTasks pauseTasks($options = [])
 * @method GetTracerouteRouteInfo getTracerouteRouteInfo($options = [])
 * @method GetLastRecord getLastRecord($options = [])
 * @method GetIspRegionTrend getIspRegionTrend($options = [])
 * @method getIspCityTrend getIspCityTrend($options = [])
 * @method GetErrorRateTrend getErrorRateTrend($options = [])
 * @method GetErrorKindRateTrend getErrorKindRateTrend($options = [])
 * @method GetErrorInfoUnconverge getErrorInfoUnconverge($options = [])
 * @method GetErrorInfo getErrorInfo($options = [])
 * @method GetAgentSingleIndexTrend getAgentSingleIndexTrend($options = [])
 * @method GetAgentRegionTrend getAgentRegionTrend($options = [])
 * @method GetAgentIspTrend getAgentIspTrend($options = [])
 * @method GetAgentIspCombineTrend getAgentIspCombineTrend($options = [])
 * @method GetAgentIndexTrend getAgentIndexTrend($options = [])
 * @method GetAgentIndexCombineTrend getAgentIndexCombineTrend($options = [])
 * @method GetAgentCountryTrend getAgentCountryTrend($options = [])
 * @method GetAgentCityTrend getAgentCityTrend($options = [])
 * @method GetAgentAllCityTrend getAgentAllCityTrend($options = [])
 * @method GetAgentAllCityAvailRate getAgentAllCityAvailRate($options = [])
 * @method GetAccessStrategy getAccessStrategy($options = [])
 * @method DeleteTask deleteTask($options = [])
 * @method CreateTask createTask($options = [])
 * @method CountTaskInfo countTaskInfo($options = [])
 * @method BatchDeleteTask batchDeleteTask($options = [])
 * @method BatchCreateOnceTask batchCreateOnceTask($options = [])
 * @method UpdateTemplateApplyGroups updateTemplateApplyGroups($options = [])
 * @method putProductGroup putProductGroup($options = [])
 * @method PutDashboardConfig putDashboardConfig($options = [])
 * @method PutChartMetric putChartMetric($options = [])
 * @method PutAlertTemplate putAlertTemplate($options = [])
 * @method MoveMetric moveMetric($options = [])
 * @method ListMetricMeta listMetricMeta($options = [])
 * @method ListAlertTemplate listAlertTemplate($options = [])
 * @method GetProductGroupsAction getProductGroupsAction($options = [])
 * @method GetProductGroupInstances getProductGroupInstances($options = [])
 * @method GetOverviewConfig getOverviewConfig($options = [])
 * @method GetProductGroups getProductGroups($options = [])
 * @method GetDashboardConfig getDashboardConfig($options = [])
 * @method DeleteProductGroup deleteProductGroup($options = [])
 * @method DeleteDashboardConfig deleteDashboardConfig($options = [])
 * @method DeleteChartMetric deleteChartMetric($options = [])
 * @method DeleteAlertTemplate deleteAlertTemplate($options = [])
 * @method CopyGroupDashboard copyGroupDashboard($options = [])
 */
class V20170824
{
    use ApiResolverTrait;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 */
class DeleteMetricMeta extends Roa
{
    use R;
}

class ListMetricMetaProject extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 */
class StopTasks extends Roa
{
    use R;
}

/**
 * @method string getalertName
 * @method self withalertName(string $alertName)
 * @method string gettaskId
 * @method self withtaskId(string $taskId)
 * @method string getclientIds
 * @method self withclientIds(string $clientIds)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 * @method string gettaskName
 * @method self withtaskName(string $taskName)
 * @method string gettaskState
 * @method self withtaskState(string $taskState)
 * @method string getagentGroup
 * @method self withagentGroup(string $agentGroup)
 * @method string getagentType
 * @method self withagentType(string $agentType)
 * @method string getreportProject
 * @method self withreportProject(string $reportProject)
 * @method string getaddress
 * @method self withaddress(string $address)
 * @method string getinterval
 * @method self withinterval(string $interval)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string getispCity
 * @method self withispCity(string $ispCity)
 * @method string getoptions
 * @method self withoptions(string $options)
 * @method string getalertInfo
 * @method self withalertInfo(string $alertInfo)
 * @method string getalertRule
 * @method self withalertRule(string $alertRule)
 * @method string getip
 * @method self withip(string $ip)
 */
class ModifyTask extends Roa
{
    use R;
}

/**
 * @method string gettaskId
 * @method self withtaskId(string $taskId)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 * @method string getkeyword
 * @method self withkeyword(string $keyword)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeTasks extends Roa
{
    use R;
}

/**
 * @method string gettaskId
 * @method self withtaskId(string $taskId)
 */
class DescribeTaskDetail extends Roa
{
    use R;
}

class DescribeISPAreaCity extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 */
class DeleteTasks extends Roa
{
    use R;
}

class GetISPAreaCity extends Roa
{
    use R;
}

/**
 * @method string getalertName
 * @method self withalertName(string $alertName)
 * @method string gettaskId
 * @method self withtaskId(string $taskId)
 * @method string getclientIds
 * @method self withclientIds(string $clientIds)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 * @method string gettaskName
 * @method self withtaskName(string $taskName)
 * @method string gettaskState
 * @method self withtaskState(string $taskState)
 * @method string getagentGroup
 * @method self withagentGroup(string $agentGroup)
 * @method string getagentType
 * @method self withagentType(string $agentType)
 * @method string getreportProject
 * @method self withreportProject(string $reportProject)
 * @method string getaddress
 * @method self withaddress(string $address)
 * @method string getinterval
 * @method self withinterval(string $interval)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string getispCity
 * @method self withispCity(string $ispCity)
 * @method string getoptions
 * @method self withoptions(string $options)
 * @method string getalertInfo
 * @method self withalertInfo(string $alertInfo)
 * @method string getalertRule
 * @method self withalertRule(string $alertRule)
 * @method string getip
 * @method self withip(string $ip)
 */
class UpdateTask extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 */
class StartTasks extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 */
class QueryTaskRate extends Roa
{
    use R;
}

/**
 * @method string gettaskId
 * @method self withtaskId(string $taskId)
 */
class QueryTaskInfo extends Roa
{
    use R;
}

/**
 * @method string gettaskId
 * @method self withtaskId(string $taskId)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 * @method string getkeyword
 * @method self withkeyword(string $keyword)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryTask extends Roa
{
    use R;
}

/**
 * @method string getpageSize
 * @method self withpageSize(string $pageSize)
 */
class QuerySlaTask extends Roa
{
    use R;
}

/**
 * @method string gettaskId
 * @method self withtaskId(string $taskId)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 * @method string getkeyword
 * @method self withkeyword(string $keyword)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryReportTask extends Roa
{
    use R;
}

/**
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method Integer getpage
 * @method self withpage(Integer $page)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 */
class QueryOverdueTask extends Roa
{
    use R;
}

class QueryMiniTask extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 */
class PauseTasks extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 */
class GetTracerouteRouteInfo extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 */
class GetLastRecord extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 */
class GetIspRegionTrend extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 */
class getIspCityTrend extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 */
class GetErrorRateTrend extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 */
class GetErrorKindRateTrend extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 */
class GetErrorInfoUnconverge extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 */
class GetErrorInfo extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 */
class GetAgentSingleIndexTrend extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 */
class GetAgentRegionTrend extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 */
class GetAgentIspTrend extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 */
class GetAgentIspCombineTrend extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 */
class GetAgentIndexTrend extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 */
class GetAgentIndexCombineTrend extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 */
class GetAgentCountryTrend extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 */
class GetAgentCityTrend extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 */
class GetAgentAllCityTrend extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 */
class GetAgentAllCityAvailRate extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 */
class GetAccessStrategy extends Roa
{
    use R;
}

/**
 * @method string gettaskId
 * @method self withtaskId(string $taskId)
 */
class DeleteTask extends Roa
{
    use R;
}

/**
 * @method string getalertName
 * @method self withalertName(string $alertName)
 * @method string gettaskId
 * @method self withtaskId(string $taskId)
 * @method string getclientIds
 * @method self withclientIds(string $clientIds)
 * @method string gettaskType
 * @method self withtaskType(string $taskType)
 * @method string gettaskName
 * @method self withtaskName(string $taskName)
 * @method string gettaskState
 * @method self withtaskState(string $taskState)
 * @method string getagentGroup
 * @method self withagentGroup(string $agentGroup)
 * @method string getagentType
 * @method self withagentType(string $agentType)
 * @method string getreportProject
 * @method self withreportProject(string $reportProject)
 * @method string getaddress
 * @method self withaddress(string $address)
 * @method string getinterval
 * @method self withinterval(string $interval)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method string getispCity
 * @method self withispCity(string $ispCity)
 * @method string getoptions
 * @method self withoptions(string $options)
 * @method string getalertInfo
 * @method self withalertInfo(string $alertInfo)
 * @method string getalertRule
 * @method self withalertRule(string $alertRule)
 * @method string getip
 * @method self withip(string $ip)
 */
class CreateTask extends Roa
{
    use R;
}

/**
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method Integer getpage
 * @method self withpage(Integer $page)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 */
class CountTaskInfo extends Roa
{
    use R;
}

/**
 * @method string gettaskIds
 * @method self withtaskIds(string $taskIds)
 */
class BatchDeleteTask extends Roa
{
    use R;
}

/**
 * @method string gettaskList
 * @method self withtaskList(string $taskList)
 */
class BatchCreateOnceTask extends Roa
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
 * @method string getgroupJson
 * @method self withgroupJson(string $groupJson)
 */
class putProductGroup extends Roa
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
 * @method Integer getheight
 * @method self withheight(Integer $height)
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
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getPage
 * @method self withPage(string $page)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 */
class ListMetricMeta extends Roa
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

class GetProductGroupsAction extends Roa
{
    use R;
}

/**
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
 * @method int getgroupId
 * @method self withgroupId(int $groupId)
 */
class DeleteProductGroup extends Roa
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
 * @method string getfromGroupId
 * @method self withfromGroupId(string $fromGroupId)
 * @method string gettoGroupId
 * @method self withtoGroupId(string $toGroupId)
 */
class CopyGroupDashboard extends Roa
{
    use R;
}
