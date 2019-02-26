<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method QuerySystemEventMetaGrey querySystemEventMetaGrey($options = [])
 * @method DeleteS2SEventTargets deleteS2SEventTargets($options = [])
 * @method ListS2SEventTargets listS2SEventTargets($options = [])
 * @method PutS2SEventTargets putS2SEventTargets($options = [])
 * @method DisableS2SEventRule disableS2SEventRule($options = [])
 * @method EnableS2SEventRule enableS2SEventRule($options = [])
 * @method ListS2SEventRule listS2SEventRule($options = [])
 * @method DeleteS2SEventRule deleteS2SEventRule($options = [])
 * @method PutS2SEventRule putS2SEventRule($options = [])
 * @method QuerySystemEventMeta querySystemEventMeta($options = [])
 * @method ApplyMonitoringTemplate applyMonitoringTemplate($options = [])
 * @method CreateMyGroupAlertBatch createMyGroupAlertBatch($options = [])
 * @method UpdateMyGroupAlert updateMyGroupAlert($options = [])
 * @method GetMyGroupAlert getMyGroupAlert($options = [])
 * @method ListCategoryMeta listCategoryMeta($options = [])
 * @method ListMetricMeta listMetricMeta($options = [])
 * @method ListMonitoringTemplates listMonitoringTemplates($options = [])
 * @method CreateMonitoringTemplate createMonitoringTemplate($options = [])
 * @method UpdateMonitoringTemplate updateMonitoringTemplate($options = [])
 * @method GetMonitoringTemplate getMonitoringTemplate($options = [])
 * @method DeleteMonitoringTemplate deleteMonitoringTemplate($options = [])
 * @method QueryProjectMeta queryProjectMeta($options = [])
 * @method QueryMetricMeta queryMetricMeta($options = [])
 * @method QueryStaticsResponseTime queryStaticsResponseTime($options = [])
 * @method QueryStaticsErrorRate queryStaticsErrorRate($options = [])
 * @method QueryStaticsAvailability queryStaticsAvailability($options = [])
 * @method QueryErrorDistribution queryErrorDistribution($options = [])
 * @method QueryTaskMonitorData queryTaskMonitorData($options = [])
 * @method QueryTaskConfig queryTaskConfig($options = [])
 * @method QueryMonitorData queryMonitorData($options = [])
 * @method QuerySystemEventDemo querySystemEventDemo($options = [])
 * @method SendDryRunSystemEvent sendDryRunSystemEvent($options = [])
 * @method PutMetricAlarm putMetricAlarm($options = [])
 * @method DescribeAlarmsForResources describeAlarmsForResources($options = [])
 * @method DescribeAlarms describeAlarms($options = [])
 * @method PutGroupDynamicRule putGroupDynamicRule($options = [])
 * @method DeleteGroupDynamicRule deleteGroupDynamicRule($options = [])
 * @method ListGroupDynamicRule listGroupDynamicRule($options = [])
 * @method ApplyTemplate applyTemplate($options = [])
 * @method DeleteEventRule deleteEventRule($options = [])
 * @method DescribeEventRule describeEventRule($options = [])
 * @method DeleteEventTargets deleteEventTargets($options = [])
 * @method DisableEventRule disableEventRule($options = [])
 * @method ListEventRules listEventRules($options = [])
 * @method EnableEventRule enableEventRule($options = [])
 * @method ListEventTargetsByRule listEventTargetsByRule($options = [])
 * @method ListEventRuleNamesByTarget listEventRuleNamesByTarget($options = [])
 * @method PutEventRule putEventRule($options = [])
 * @method PutEventTargets putEventTargets($options = [])
 * @method DescribeContact describeContact($options = [])
 * @method GetContacts getContacts($options = [])
 * @method DescribeTasks describeTasks($options = [])
 * @method DescribeTaskDetail describeTaskDetail($options = [])
 * @method CreateTask createTask($options = [])
 * @method ModifyTask modifyTask($options = [])
 * @method DeleteTasks deleteTasks($options = [])
 * @method StopTasks stopTasks($options = [])
 * @method StartTasks startTasks($options = [])
 * @method DescribeISPAreaCity describeISPAreaCity($options = [])
 * @method UpdateMyGroupMembers updateMyGroupMembers($options = [])
 * @method GetVoneStatus getVoneStatus($options = [])
 * @method QueryMetricData queryMetricData($options = [])
 * @method QueryMetricDimensions queryMetricDimensions($options = [])
 * @method QueryMetricLast queryMetricLast($options = [])
 * @method QueryMetricList queryMetricList($options = [])
 * @method QueryMetricTop queryMetricTop($options = [])
 * @method TaskConfigUnhealthy taskConfigUnhealthy($options = [])
 * @method TaskConfigDelete taskConfigDelete($options = [])
 * @method TaskConfigEnable taskConfigEnable($options = [])
 * @method TaskConfigList taskConfigList($options = [])
 * @method TaskConfigModify taskConfigModify($options = [])
 * @method TaskConfigCreate taskConfigCreate($options = [])
 * @method NodeProcessCreate nodeProcessCreate($options = [])
 * @method EnableAlarm enableAlarm($options = [])
 * @method UpdateAlarm updateAlarm($options = [])
 * @method PutMetricData putMetricData($options = [])
 * @method QueryCustomEventHistogram queryCustomEventHistogram($options = [])
 * @method ListAlarmHistory listAlarmHistory($options = [])
 * @method ListMyGroups listMyGroups($options = [])
 * @method NodeProcesses nodeProcesses($options = [])
 * @method EnableActiceAlert enableActiceAlert($options = [])
 * @method EnableActiveAlert enableActiveAlert($options = [])
 * @method PutSystemEvent putSystemEvent($options = [])
 * @method ProfileSet profileSet($options = [])
 * @method DeleteAlarm deleteAlarm($options = [])
 * @method NodeStatus nodeStatus($options = [])
 * @method QuerySystemEventHistogram querySystemEventHistogram($options = [])
 * @method ListContactGroup listContactGroup($options = [])
 * @method GetMyGroups getMyGroups($options = [])
 * @method ListActiveAlertRule listActiveAlertRule($options = [])
 * @method DeleteCustomMetric deleteCustomMetric($options = [])
 * @method PutEvent putEvent($options = [])
 * @method CreateAlarm createAlarm($options = [])
 * @method NodeUninstall nodeUninstall($options = [])
 * @method ListMyGroupCategories listMyGroupCategories($options = [])
 * @method AddMyGroupInstances addMyGroupInstances($options = [])
 * @method PutCustomMetric putCustomMetric($options = [])
 * @method ListAlarm listAlarm($options = [])
 * @method ListMyGroupInstancesDetails listMyGroupInstancesDetails($options = [])
 * @method DeleteMyGroupInstances deleteMyGroupInstances($options = [])
 * @method CreateMyGroups createMyGroups($options = [])
 * @method DisableActiveAlert disableActiveAlert($options = [])
 * @method ListProductOfActiveAlert listProductOfActiveAlert($options = [])
 * @method DisableActiceAlert disableActiceAlert($options = [])
 * @method ListProductOfActiceAlert listProductOfActiceAlert($options = [])
 * @method ListMyGroupInstances listMyGroupInstances($options = [])
 * @method DeleteMyGroups deleteMyGroups($options = [])
 * @method NodeInstall nodeInstall($options = [])
 * @method NodeList nodeList($options = [])
 * @method UpdateMyGroups updateMyGroups($options = [])
 * @method NodeProcessDelete nodeProcessDelete($options = [])
 * @method QueryCustomMetricList queryCustomMetricList($options = [])
 * @method GetNotifyPolicy getNotifyPolicy($options = [])
 * @method QueryCustomEventCount queryCustomEventCount($options = [])
 * @method QuerySystemEventCount querySystemEventCount($options = [])
 * @method ListNotifyPolicy listNotifyPolicy($options = [])
 * @method UpdateMyGroupInstances updateMyGroupInstances($options = [])
 * @method AccessKeyGet accessKeyGet($options = [])
 * @method CreateNotifyPolicy createNotifyPolicy($options = [])
 * @method ProfileGet profileGet($options = [])
 * @method DisableAlarm disableAlarm($options = [])
 * @method DeleteNotifyPolicy deleteNotifyPolicy($options = [])
 * @method DescribeAlarmHistory describeAlarmHistory($options = [])
 * @method NodeStatusList nodeStatusList($options = [])
 * @method QuerySystemEventDetail querySystemEventDetail($options = [])
 * @method QueryCustomEventDetail queryCustomEventDetail($options = [])
 */
class V20180308
{
    use ApiResolverTrait;
}

class QuerySystemEventMetaGrey extends Roa
{
    use R;
}

/**
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 * @method array getIds
 * @method self withIds(array $ids)
 */
class DeleteS2SEventTargets extends Roa
{
    use R;
}

/**
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 */
class ListS2SEventTargets extends Roa
{
    use R;
}

/**
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 * @method array getFunctionComputers
 * @method self withFunctionComputers(array $functionComputers)
 * @method array getMns
 * @method self withMns(array $mns)
 * @method string getActions
 * @method self withActions(string $actions)
 */
class PutS2SEventTargets extends Roa
{
    use R;
}

/**
 * @method array getNames
 * @method self withNames(array $names)
 */
class DisableS2SEventRule extends Roa
{
    use R;
}

/**
 * @method array getNames
 * @method self withNames(array $names)
 */
class EnableS2SEventRule extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getPage
 * @method self withPage(string $page)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 */
class ListS2SEventRule extends Roa
{
    use R;
}

/**
 * @method array getNames
 * @method self withNames(array $names)
 */
class DeleteS2SEventRule extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getState
 * @method self withState(string $state)
 * @method array getEventPattern
 * @method self withEventPattern(array $eventPattern)
 * @method Json getJSONFilter
 * @method self withJSONFilter(Json $jSONFilter)
 */
class PutS2SEventRule extends Roa
{
    use R;
}

class QuerySystemEventMeta extends Roa
{
    use R;
}

/**
 * @method int getSilenceTime
 * @method self withSilenceTime(int $silenceTime)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getTemplateIds
 * @method self withTemplateIds(string $templateIds)
 * @method int getEnableStartTime
 * @method self withEnableStartTime(int $enableStartTime)
 * @method int getEnableEndTime
 * @method self withEnableEndTime(int $enableEndTime)
 * @method int getNotifyLevel
 * @method self withNotifyLevel(int $notifyLevel)
 * @method string getApplyMode
 * @method self withApplyMode(string $applyMode)
 * @method string getWebhook
 * @method self withWebhook(string $webhook)
 */
class ApplyMonitoringTemplate extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getGroupAlertJsonArray
 * @method self withGroupAlertJsonArray(string $groupAlertJsonArray)
 */
class CreateMyGroupAlertBatch extends Roa
{
    use R;
}

/**
 * @method string getGroupAlertJson
 * @method self withGroupAlertJson(string $groupAlertJson)
 */
class UpdateMyGroupAlert extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 */
class GetMyGroupAlert extends Roa
{
    use R;
}

class ListCategoryMeta extends Roa
{
    use R;
}

/**
 * @method string getCategory
 * @method self withCategory(string $category)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getDimension
 * @method self withDimension(string $dimension)
 */
class ListMetricMeta extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 * @method int getId
 * @method self withId(int $id)
 * @method bool getTotal
 * @method self withTotal(bool $total)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method bool getHistory
 * @method self withHistory(bool $history)
 */
class ListMonitoringTemplates extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getNamespace
 * @method self withNamespace(string $namespace)
 * @method string getAlertTemplatesJson
 * @method self withAlertTemplatesJson(string $alertTemplatesJson)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getEventRuleTemplatesJson
 * @method self withEventRuleTemplatesJson(string $eventRuleTemplatesJson)
 */
class CreateMonitoringTemplate extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getAlertTemplatesJson
 * @method self withAlertTemplatesJson(string $alertTemplatesJson)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method int getId
 * @method self withId(int $id)
 * @method int getRestVersion
 * @method self withRestVersion(int $restVersion)
 * @method string getEventRuleTemplatesJson
 * @method self withEventRuleTemplatesJson(string $eventRuleTemplatesJson)
 */
class UpdateMonitoringTemplate extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getId
 * @method self withId(string $id)
 */
class GetMonitoringTemplate extends Roa
{
    use R;
}

/**
 * @method string getId
 * @method self withId(string $id)
 */
class DeleteMonitoringTemplate extends Roa
{
    use R;
}

/**
 * @method string getLabels
 * @method self withLabels(string $labels)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryProjectMeta extends Roa
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getLabels
 * @method self withLabels(string $labels)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryMetricMeta extends Roa
{
    use R;
}

/**
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getTimeRange
 * @method self withTimeRange(string $timeRange)
 */
class QueryStaticsResponseTime extends Roa
{
    use R;
}

/**
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getTimeRange
 * @method self withTimeRange(string $timeRange)
 */
class QueryStaticsErrorRate extends Roa
{
    use R;
}

/**
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getTimeRange
 * @method self withTimeRange(string $timeRange)
 */
class QueryStaticsAvailability extends Roa
{
    use R;
}

/**
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getTimeRange
 * @method self withTimeRange(string $timeRange)
 */
class QueryErrorDistribution extends Roa
{
    use R;
}

/**
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getType
 * @method self withType(string $type)
 * @method string getmetricName
 * @method self withmetricName(string $metricName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getCursor
 * @method self withCursor(string $cursor)
 * @method Integer getLength
 * @method self withLength(Integer $length)
 */
class QueryTaskMonitorData extends Roa
{
    use R;
}

class QueryTaskConfig extends Roa
{
    use R;
}

/**
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getType
 * @method self withType(string $type)
 * @method string getmetricName
 * @method self withmetricName(string $metricName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getCursor
 * @method self withCursor(string $cursor)
 * @method Integer getLength
 * @method self withLength(Integer $length)
 */
class QueryMonitorData extends Roa
{
    use R;
}

/**
 * @method string getProduct
 * @method self withProduct(string $product)
 * @method string getEventName
 * @method self withEventName(string $eventName)
 */
class QuerySystemEventDemo extends Roa
{
    use R;
}

/**
 * @method string getProduct
 * @method self withProduct(string $product)
 * @method string getEventName
 * @method self withEventName(string $eventName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getEventContent
 * @method self withEventContent(string $eventContent)
 */
class SendDryRunSystemEvent extends Roa
{
    use R;
}

/**
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getNamespace
 * @method self withNamespace(string $namespace)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method Integer getEvaluationCount
 * @method self withEvaluationCount(Integer $evaluationCount)
 * @method string getContactGroups
 * @method self withContactGroups(string $contactGroups)
 * @method string getEffectiveInterval
 * @method self withEffectiveInterval(string $effectiveInterval)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method Integer getSilenceTime
 * @method self withSilenceTime(Integer $silenceTime)
 * @method string getWebhook
 * @method self withWebhook(string $webhook)
 * @method string getDisplayName
 * @method self withDisplayName(string $displayName)
 * @method string getNoEffectiveInterval
 * @method self withNoEffectiveInterval(string $noEffectiveInterval)
 * @method string getResources
 * @method self withResources(string $resources)
 * @method string getSubject
 * @method self withSubject(string $subject)
 * @method Integer getLevel
 * @method self withLevel(Integer $level)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getDeepDive
 * @method self withDeepDive(string $deepDive)
 * @method string getStatistics
 * @method self withStatistics(string $statistics)
 * @method string getComparisonOperator
 * @method self withComparisonOperator(string $comparisonOperator)
 * @method string getThreshold
 * @method self withThreshold(string $threshold)
 * @method string getFilter
 * @method self withFilter(string $filter)
 * @method string getInterval
 * @method self withInterval(string $interval)
 */
class PutMetricAlarm extends Roa
{
    use R;
}

/**
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method bool getEnableState
 * @method self withEnableState(bool $enableState)
 * @method string getNamespace
 * @method self withNamespace(string $namespace)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getPage
 * @method self withPage(string $page)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getAlertState
 * @method self withAlertState(string $alertState)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 */
class DescribeAlarmsForResources extends Roa
{
    use R;
}

/**
 * @method string getGroupBy
 * @method self withGroupBy(string $groupBy)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method bool getEnableState
 * @method self withEnableState(bool $enableState)
 * @method string getNamespace
 * @method self withNamespace(string $namespace)
 * @method string getPage
 * @method self withPage(string $page)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getAlertState
 * @method self withAlertState(string $alertState)
 * @method string getDisplayName
 * @method self withDisplayName(string $displayName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getNames
 * @method self withNames(string $names)
 * @method string getNameKeyword
 * @method self withNameKeyword(string $nameKeyword)
 */
class DescribeAlarms extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getGroupRuleArrayJson
 * @method self withGroupRuleArrayJson(string $groupRuleArrayJson)
 */
class PutGroupDynamicRule extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getCategory
 * @method self withCategory(string $category)
 */
class DeleteGroupDynamicRule extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 */
class ListGroupDynamicRule extends Roa
{
    use R;
}

/**
 * @method string getTemplateIds
 * @method self withTemplateIds(string $templateIds)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method int getSilenceTime
 * @method self withSilenceTime(int $silenceTime)
 * @method int getEnableStartTime
 * @method self withEnableStartTime(int $enableStartTime)
 * @method int getEnableEndTime
 * @method self withEnableEndTime(int $enableEndTime)
 * @method int getNotifyLevel
 * @method self withNotifyLevel(int $notifyLevel)
 * @method string getApplyMode
 * @method self withApplyMode(string $applyMode)
 */
class ApplyTemplate extends Roa
{
    use R;
}

/**
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 * @method array getRuleNames
 * @method self withRuleNames(array $ruleNames)
 */
class DeleteEventRule extends Roa
{
    use R;
}

/**
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 */
class DescribeEventRule extends Roa
{
    use R;
}

/**
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 * @method array getIds
 * @method self withIds(array $ids)
 */
class DeleteEventTargets extends Roa
{
    use R;
}

/**
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 * @method array getRuleNames
 * @method self withRuleNames(array $ruleNames)
 */
class DisableEventRule extends Roa
{
    use R;
}

/**
 * @method string getNamePrefix
 * @method self withNamePrefix(string $namePrefix)
 * @method string getPage
 * @method self withPage(string $page)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class ListEventRules extends Roa
{
    use R;
}

/**
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 * @method array getRuleNames
 * @method self withRuleNames(array $ruleNames)
 */
class EnableEventRule extends Roa
{
    use R;
}

/**
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 */
class ListEventTargetsByRule extends Roa
{
    use R;
}

/**
 * @method string getTargetArn
 * @method self withTargetArn(string $targetArn)
 * @method string getPage
 * @method self withPage(string $page)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 */
class ListEventRuleNamesByTarget extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getEventType
 * @method self withEventType(string $eventType)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getState
 * @method self withState(string $state)
 * @method array getEventPattern
 * @method self withEventPattern(array $eventPattern)
 */
class PutEventRule extends Roa
{
    use R;
}

/**
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 * @method array getFcParameters
 * @method self withFcParameters(array $fcParameters)
 * @method array getContactParameters
 * @method self withContactParameters(array $contactParameters)
 * @method array getMnsParameters
 * @method self withMnsParameters(array $mnsParameters)
 * @method array getWebhookParameters
 * @method self withWebhookParameters(array $webhookParameters)
 */
class PutEventTargets extends Roa
{
    use R;
}

/**
 * @method string getContactName
 * @method self withContactName(string $contactName)
 */
class DescribeContact extends Roa
{
    use R;
}

/**
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class GetContacts extends Roa
{
    use R;
}

/**
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getTaskType
 * @method self withTaskType(string $taskType)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
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
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class DescribeTaskDetail extends Roa
{
    use R;
}

/**
 * @method string getAddress
 * @method self withAddress(string $address)
 * @method string getTaskType
 * @method self withTaskType(string $taskType)
 * @method string getTaskName
 * @method self withTaskName(string $taskName)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getIspCity
 * @method self withIspCity(string $ispCity)
 * @method string getOptions
 * @method self withOptions(string $options)
 * @method string getAlertRule
 * @method self withAlertRule(string $alertRule)
 * @method string getAlertIds
 * @method self withAlertIds(string $alertIds)
 * @method string getcaller
 * @method self withcaller(string $caller)
 */
class CreateTask extends Roa
{
    use R;
}

/**
 * @method string getAddress
 * @method self withAddress(string $address)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getTaskName
 * @method self withTaskName(string $taskName)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getIspCity
 * @method self withIspCity(string $ispCity)
 * @method string getOptions
 * @method self withOptions(string $options)
 * @method string getAlertRule
 * @method self withAlertRule(string $alertRule)
 * @method string getAlertIds
 * @method self withAlertIds(string $alertIds)
 * @method string getcaller
 * @method self withcaller(string $caller)
 */
class ModifyTask extends Roa
{
    use R;
}

/**
 * @method string getTaskIds
 * @method self withTaskIds(string $taskIds)
 * @method Integer getIsDeleteAlarms
 * @method self withIsDeleteAlarms(Integer $isDeleteAlarms)
 */
class DeleteTasks extends Roa
{
    use R;
}

/**
 * @method string getTaskIds
 * @method self withTaskIds(string $taskIds)
 */
class StopTasks extends Roa
{
    use R;
}

/**
 * @method string getTaskIds
 * @method self withTaskIds(string $taskIds)
 */
class StartTasks extends Roa
{
    use R;
}

/**
 * @method string getIsp
 * @method self withIsp(string $isp)
 * @method string getCity
 * @method self withCity(string $city)
 */
class DescribeISPAreaCity extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getMasters
 * @method self withMasters(string $masters)
 * @method string getReaders
 * @method self withReaders(string $readers)
 */
class UpdateMyGroupMembers extends Roa
{
    use R;
}

class GetVoneStatus extends Roa
{
    use R;
}

/**
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
 * @method string getProject
 * @method self withProject(string $project)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
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
 * @method string getProject
 * @method self withProject(string $project)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
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
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
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
 * @method array getTaskIdList
 * @method self withTaskIdList(array $taskIdList)
 */
class TaskConfigUnhealthy extends Roa
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
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method int getId
 * @method self withId(int $id)
 * @method string getTaskName
 * @method self withTaskName(string $taskName)
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
 * @method string getProcessName
 * @method self withProcessName(string $processName)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
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
 * @method string getId
 * @method self withId(string $id)
 */
class EnableAlarm extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getId
 * @method self withId(string $id)
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
 * @method string getWebhook
 * @method self withWebhook(string $webhook)
 * @method bool getDryRun
 * @method self withDryRun(bool $dryRun)
 */
class UpdateAlarm extends Roa
{
    use R;
}

/**
 * @method string getBody
 * @method self withBody(string $body)
 */
class PutMetricData extends Roa
{
    use R;
}

/**
 * @method string getQueryJson
 * @method self withQueryJson(string $queryJson)
 */
class QueryCustomEventHistogram extends Roa
{
    use R;
}

/**
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
 * @method string getType
 * @method self withType(string $type)
 * @method bool getSelectContactGroups
 * @method self withSelectContactGroups(bool $selectContactGroups)
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
 */
class ListMyGroups extends Roa
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
 * @method string getProduct
 * @method self withProduct(string $product)
 * @method string getUserId
 * @method self withUserId(string $userId)
 */
class EnableActiceAlert extends Roa
{
    use R;
}

/**
 * @method string getProduct
 * @method self withProduct(string $product)
 * @method string getUserId
 * @method self withUserId(string $userId)
 */
class EnableActiveAlert extends Roa
{
    use R;
}

/**
 * @method string getEventInfo
 * @method self withEventInfo(string $eventInfo)
 */
class PutSystemEvent extends Roa
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
 * @method string getEnableActiveAlert
 * @method self withEnableActiveAlert(string $enableActiveAlert)
 */
class ProfileSet extends Roa
{
    use R;
}

/**
 * @method string getId
 * @method self withId(string $id)
 */
class DeleteAlarm extends Roa
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
 * @method string getQueryJson
 * @method self withQueryJson(string $queryJson)
 */
class QuerySystemEventHistogram extends Roa
{
    use R;
}

/**
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
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getType
 * @method self withType(string $type)
 * @method bool getSelectContactGroups
 * @method self withSelectContactGroups(bool $selectContactGroups)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getBindUrl
 * @method self withBindUrl(string $bindUrl)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class GetMyGroups extends Roa
{
    use R;
}

/**
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method string getProduct
 * @method self withProduct(string $product)
 */
class ListActiveAlertRule extends Roa
{
    use R;
}

/**
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getMd5
 * @method self withMd5(string $md5)
 * @method string getUUID
 * @method self withUUID(string $uUID)
 */
class DeleteCustomMetric extends Roa
{
    use R;
}

/**
 * @method string getEventInfo
 * @method self withEventInfo(string $eventInfo)
 */
class PutEvent extends Roa
{
    use R;
}

/**
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
 * @method string getWebhook
 * @method self withWebhook(string $webhook)
 * @method bool getDryRun
 * @method self withDryRun(bool $dryRun)
 */
class CreateAlarm extends Roa
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
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 */
class ListMyGroupCategories extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getInstances
 * @method self withInstances(string $instances)
 */
class AddMyGroupInstances extends Roa
{
    use R;
}

/**
 * @method string getMetricList
 * @method self withMetricList(string $metricList)
 */
class PutCustomMetric extends Roa
{
    use R;
}

/**
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
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method bool getTotal
 * @method self withTotal(bool $total)
 * @method string getCategory
 * @method self withCategory(string $category)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 */
class ListMyGroupInstancesDetails extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 * @method string getInstanceIdList
 * @method self withInstanceIdList(string $instanceIdList)
 * @method string getCategory
 * @method self withCategory(string $category)
 */
class DeleteMyGroupInstances extends Roa
{
    use R;
}

/**
 * @method string getType
 * @method self withType(string $type)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method int getServiceId
 * @method self withServiceId(int $serviceId)
 * @method string getBindUrl
 * @method self withBindUrl(string $bindUrl)
 * @method string getContactGroups
 * @method self withContactGroups(string $contactGroups)
 * @method string getOptions
 * @method self withOptions(string $options)
 */
class CreateMyGroups extends Roa
{
    use R;
}

/**
 * @method string getProduct
 * @method self withProduct(string $product)
 * @method string getUserId
 * @method self withUserId(string $userId)
 */
class DisableActiveAlert extends Roa
{
    use R;
}

/**
 * @method string getUserId
 * @method self withUserId(string $userId)
 */
class ListProductOfActiveAlert extends Roa
{
    use R;
}

/**
 * @method string getProduct
 * @method self withProduct(string $product)
 * @method string getUserId
 * @method self withUserId(string $userId)
 */
class DisableActiceAlert extends Roa
{
    use R;
}

/**
 * @method string getUserId
 * @method self withUserId(string $userId)
 */
class ListProductOfActiceAlert extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method bool getTotal
 * @method self withTotal(bool $total)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getCategory
 * @method self withCategory(string $category)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 */
class ListMyGroupInstances extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 */
class DeleteMyGroups extends Roa
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
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method int getUserId
 * @method self withUserId(int $userId)
 * @method string getHostName
 * @method self withHostName(string $hostName)
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
 * @method string getInstanceRegionId
 * @method self withInstanceRegionId(string $instanceRegionId)
 */
class NodeList extends Roa
{
    use R;
}

/**
 * @method string getBindUrls
 * @method self withBindUrls(string $bindUrls)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method int getServiceId
 * @method self withServiceId(int $serviceId)
 * @method string getType
 * @method self withType(string $type)
 * @method string getContactGroups
 * @method self withContactGroups(string $contactGroups)
 */
class UpdateMyGroups extends Roa
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
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getDimension
 * @method self withDimension(string $dimension)
 * @method string getMd5
 * @method self withMd5(string $md5)
 * @method string getPage
 * @method self withPage(string $page)
 * @method string getSize
 * @method self withSize(string $size)
 */
class QueryCustomMetricList extends Roa
{
    use R;
}

/**
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getPolicyType
 * @method self withPolicyType(string $policyType)
 * @method string getId
 * @method self withId(string $id)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class GetNotifyPolicy extends Roa
{
    use R;
}

/**
 * @method string getQueryJson
 * @method self withQueryJson(string $queryJson)
 */
class QueryCustomEventCount extends Roa
{
    use R;
}

/**
 * @method string getQueryJson
 * @method self withQueryJson(string $queryJson)
 */
class QuerySystemEventCount extends Roa
{
    use R;
}

/**
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method string getPolicyType
 * @method self withPolicyType(string $policyType)
 * @method string getId
 * @method self withId(string $id)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class ListNotifyPolicy extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getInstances
 * @method self withInstances(string $instances)
 */
class UpdateMyGroupInstances extends Roa
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
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method string getPolicyType
 * @method self withPolicyType(string $policyType)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class CreateNotifyPolicy extends Roa
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
 * @method string getId
 * @method self withId(string $id)
 */
class DisableAlarm extends Roa
{
    use R;
}

/**
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getPolicyType
 * @method self withPolicyType(string $policyType)
 * @method string getId
 * @method self withId(string $id)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class DeleteNotifyPolicy extends Roa
{
    use R;
}

/**
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 * @method string getNamespace
 * @method self withNamespace(string $namespace)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getState
 * @method self withState(string $state)
 * @method bool getAscending
 * @method self withAscending(bool $ascending)
 * @method bool getOnlyCount
 * @method self withOnlyCount(bool $onlyCount)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 */
class DescribeAlarmHistory extends Roa
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
 * @method string getQueryJson
 * @method self withQueryJson(string $queryJson)
 */
class QuerySystemEventDetail extends Roa
{
    use R;
}

/**
 * @method string getQueryJson
 * @method self withQueryJson(string $queryJson)
 */
class QueryCustomEventDetail extends Roa
{
    use R;
}
