<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

final class QuerySystemEventMetaGrey extends RpcRequest
{
}

/**
 * @method string getRuleName
 * @method self withRuleName
 * @method RepeatList getIds
 * @method self withIds
 */
final class DeleteS2SEventTargets extends RpcRequest
{
}

/**
 * @method string getRuleName
 * @method self withRuleName
 */
final class ListS2SEventTargets extends RpcRequest
{
}

/**
 * @method string getRuleName
 * @method self withRuleName
 * @method RepeatList getFunctionComputers
 * @method self withFunctionComputers
 * @method RepeatList getMns
 * @method self withMns
 * @method string getActions
 * @method self withActions
 */
final class PutS2SEventTargets extends RpcRequest
{
}

/**
 * @method RepeatList getNames
 * @method self withNames
 */
final class DisableS2SEventRule extends RpcRequest
{
}

/**
 * @method RepeatList getNames
 * @method self withNames
 */
final class EnableS2SEventRule extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getPage
 * @method self withPage
 * @method string getPageSize
 * @method self withPageSize
 */
final class ListS2SEventRule extends RpcRequest
{
}

/**
 * @method RepeatList getNames
 * @method self withNames
 */
final class DeleteS2SEventRule extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 * @method string getState
 * @method self withState
 * @method RepeatList getEventPattern
 * @method self withEventPattern
 * @method Json getJSONFilter
 * @method self withJSONFilter
 */
final class PutS2SEventRule extends RpcRequest
{
}

final class QuerySystemEventMeta extends RpcRequest
{
}

/**
 * @method Long getSilenceTime
 * @method self withSilenceTime
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getTemplateIds
 * @method self withTemplateIds
 * @method Long getEnableStartTime
 * @method self withEnableStartTime
 * @method Long getEnableEndTime
 * @method self withEnableEndTime
 * @method Long getNotifyLevel
 * @method self withNotifyLevel
 * @method string getApplyMode
 * @method self withApplyMode
 * @method string getWebhook
 * @method self withWebhook
 */
final class ApplyMonitoringTemplate extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getGroupAlertJsonArray
 * @method self withGroupAlertJsonArray
 */
final class CreateMyGroupAlertBatch extends RpcRequest
{
}

/**
 * @method string getGroupAlertJson
 * @method self withGroupAlertJson
 */
final class UpdateMyGroupAlert extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getAlertName
 * @method self withAlertName
 */
final class GetMyGroupAlert extends RpcRequest
{
}

final class ListCategoryMeta extends RpcRequest
{
}

/**
 * @method string getCategory
 * @method self withCategory
 * @method string getTags
 * @method self withTags
 * @method string getDimension
 * @method self withDimension
 */
final class ListMetricMeta extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getKeyword
 * @method self withKeyword
 * @method Long getId
 * @method self withId
 * @method Boolean getTotal
 * @method self withTotal
 * @method Long getPageNumber
 * @method self withPageNumber
 * @method Long getPageSize
 * @method self withPageSize
 * @method Boolean getHistory
 * @method self withHistory
 */
final class ListMonitoringTemplates extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getNamespace
 * @method self withNamespace
 * @method string getAlertTemplatesJson
 * @method self withAlertTemplatesJson
 * @method string getDescription
 * @method self withDescription
 * @method string getEventRuleTemplatesJson
 * @method self withEventRuleTemplatesJson
 */
final class CreateMonitoringTemplate extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getAlertTemplatesJson
 * @method self withAlertTemplatesJson
 * @method string getDescription
 * @method self withDescription
 * @method Long getId
 * @method self withId
 * @method Long getRestVersion
 * @method self withRestVersion
 * @method string getEventRuleTemplatesJson
 * @method self withEventRuleTemplatesJson
 */
final class UpdateMonitoringTemplate extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getId
 * @method self withId
 */
final class GetMonitoringTemplate extends RpcRequest
{
}

/**
 * @method string getId
 * @method self withId
 */
final class DeleteMonitoringTemplate extends RpcRequest
{
}

/**
 * @method string getLabels
 * @method self withLabels
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryProjectMeta extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getLabels
 * @method self withLabels
 * @method string getMetric
 * @method self withMetric
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryMetricMeta extends RpcRequest
{
}

/**
 * @method string getTaskId
 * @method self withTaskId
 * @method string getTimeRange
 * @method self withTimeRange
 */
final class QueryStaticsResponseTime extends RpcRequest
{
}

/**
 * @method string getTaskId
 * @method self withTaskId
 * @method string getTimeRange
 * @method self withTimeRange
 */
final class QueryStaticsErrorRate extends RpcRequest
{
}

/**
 * @method string getTaskId
 * @method self withTaskId
 * @method string getTimeRange
 * @method self withTimeRange
 */
final class QueryStaticsAvailability extends RpcRequest
{
}

/**
 * @method string getTaskId
 * @method self withTaskId
 * @method string getTimeRange
 * @method self withTimeRange
 */
final class QueryErrorDistribution extends RpcRequest
{
}

/**
 * @method string getTaskId
 * @method self withTaskId
 * @method string getType
 * @method self withType
 * @method string getmetricName
 * @method self withmetricName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getPeriod
 * @method self withPeriod
 * @method string getCursor
 * @method self withCursor
 * @method Integer getLength
 * @method self withLength
 */
final class QueryTaskMonitorData extends RpcRequest
{
}

final class QueryTaskConfig extends RpcRequest
{
}

/**
 * @method string getTaskId
 * @method self withTaskId
 * @method string getType
 * @method self withType
 * @method string getmetricName
 * @method self withmetricName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getPeriod
 * @method self withPeriod
 * @method string getCursor
 * @method self withCursor
 * @method Integer getLength
 * @method self withLength
 */
final class QueryMonitorData extends RpcRequest
{
}

/**
 * @method string getProduct
 * @method self withProduct
 * @method string getEventName
 * @method self withEventName
 */
final class QuerySystemEventDemo extends RpcRequest
{
}

/**
 * @method string getProduct
 * @method self withProduct
 * @method string getEventName
 * @method self withEventName
 * @method string getGroupId
 * @method self withGroupId
 * @method string getEventContent
 * @method self withEventContent
 */
final class SendDryRunSystemEvent extends RpcRequest
{
}

/**
 * @method string getDescription
 * @method self withDescription
 * @method string getNamespace
 * @method self withNamespace
 * @method string getMetricName
 * @method self withMetricName
 * @method string getDimensions
 * @method self withDimensions
 * @method string getAlertName
 * @method self withAlertName
 * @method Integer getEvaluationCount
 * @method self withEvaluationCount
 * @method string getContactGroups
 * @method self withContactGroups
 * @method string getEffectiveInterval
 * @method self withEffectiveInterval
 * @method string getPeriod
 * @method self withPeriod
 * @method Integer getSilenceTime
 * @method self withSilenceTime
 * @method string getWebhook
 * @method self withWebhook
 * @method string getDisplayName
 * @method self withDisplayName
 * @method string getNoEffectiveInterval
 * @method self withNoEffectiveInterval
 * @method string getResources
 * @method self withResources
 * @method string getSubject
 * @method self withSubject
 * @method Integer getLevel
 * @method self withLevel
 * @method string getGroupId
 * @method self withGroupId
 * @method string getGroupName
 * @method self withGroupName
 * @method string getDeepDive
 * @method self withDeepDive
 * @method string getStatistics
 * @method self withStatistics
 * @method string getComparisonOperator
 * @method self withComparisonOperator
 * @method string getThreshold
 * @method self withThreshold
 * @method string getFilter
 * @method self withFilter
 * @method string getInterval
 * @method self withInterval
 */
final class PutMetricAlarm extends RpcRequest
{
}

/**
 * @method string getMetricName
 * @method self withMetricName
 * @method Boolean getEnableState
 * @method self withEnableState
 * @method string getNamespace
 * @method self withNamespace
 * @method string getGroupId
 * @method self withGroupId
 * @method string getPage
 * @method self withPage
 * @method string getPageSize
 * @method self withPageSize
 * @method string getAlertState
 * @method self withAlertState
 * @method string getDimensions
 * @method self withDimensions
 */
final class DescribeAlarmsForResources extends RpcRequest
{
}

/**
 * @method string getGroupBy
 * @method self withGroupBy
 * @method string getMetricName
 * @method self withMetricName
 * @method Boolean getEnableState
 * @method self withEnableState
 * @method string getNamespace
 * @method self withNamespace
 * @method string getPage
 * @method self withPage
 * @method string getPageSize
 * @method self withPageSize
 * @method string getAlertState
 * @method self withAlertState
 * @method string getDisplayName
 * @method self withDisplayName
 * @method string getGroupId
 * @method self withGroupId
 * @method string getNames
 * @method self withNames
 * @method string getNameKeyword
 * @method self withNameKeyword
 */
final class DescribeAlarms extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getGroupRuleArrayJson
 * @method self withGroupRuleArrayJson
 */
final class PutGroupDynamicRule extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getCategory
 * @method self withCategory
 */
final class DeleteGroupDynamicRule extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 */
final class ListGroupDynamicRule extends RpcRequest
{
}

/**
 * @method string getTemplateIds
 * @method self withTemplateIds
 * @method Long getGroupId
 * @method self withGroupId
 * @method Long getSilenceTime
 * @method self withSilenceTime
 * @method Long getEnableStartTime
 * @method self withEnableStartTime
 * @method Long getEnableEndTime
 * @method self withEnableEndTime
 * @method Long getNotifyLevel
 * @method self withNotifyLevel
 * @method string getApplyMode
 * @method self withApplyMode
 */
final class ApplyTemplate extends RpcRequest
{
}

/**
 * @method string getRuleName
 * @method self withRuleName
 * @method RepeatList getRuleNames
 * @method self withRuleNames
 */
final class DeleteEventRule extends RpcRequest
{
}

/**
 * @method string getRuleName
 * @method self withRuleName
 */
final class DescribeEventRule extends RpcRequest
{
}

/**
 * @method string getRuleName
 * @method self withRuleName
 * @method RepeatList getIds
 * @method self withIds
 */
final class DeleteEventTargets extends RpcRequest
{
}

/**
 * @method string getRuleName
 * @method self withRuleName
 * @method RepeatList getRuleNames
 * @method self withRuleNames
 */
final class DisableEventRule extends RpcRequest
{
}

/**
 * @method string getNamePrefix
 * @method self withNamePrefix
 * @method string getPage
 * @method self withPage
 * @method string getPageSize
 * @method self withPageSize
 * @method string getGroupId
 * @method self withGroupId
 */
final class ListEventRules extends RpcRequest
{
}

/**
 * @method string getRuleName
 * @method self withRuleName
 * @method RepeatList getRuleNames
 * @method self withRuleNames
 */
final class EnableEventRule extends RpcRequest
{
}

/**
 * @method string getRuleName
 * @method self withRuleName
 */
final class ListEventTargetsByRule extends RpcRequest
{
}

/**
 * @method string getTargetArn
 * @method self withTargetArn
 * @method string getPage
 * @method self withPage
 * @method string getPageSize
 * @method self withPageSize
 */
final class ListEventRuleNamesByTarget extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getGroupId
 * @method self withGroupId
 * @method string getEventType
 * @method self withEventType
 * @method string getDescription
 * @method self withDescription
 * @method string getState
 * @method self withState
 * @method RepeatList getEventPattern
 * @method self withEventPattern
 */
final class PutEventRule extends RpcRequest
{
}

/**
 * @method string getRuleName
 * @method self withRuleName
 * @method RepeatList getFcParameters
 * @method self withFcParameters
 * @method RepeatList getContactParameters
 * @method self withContactParameters
 * @method RepeatList getMnsParameters
 * @method self withMnsParameters
 * @method RepeatList getWebhookParameters
 * @method self withWebhookParameters
 */
final class PutEventTargets extends RpcRequest
{
}

/**
 * @method string getContactName
 * @method self withContactName
 */
final class DescribeContact extends RpcRequest
{
}

/**
 * @method string getGroupName
 * @method self withGroupName
 */
final class GetContacts extends RpcRequest
{
}

/**
 * @method string getTaskId
 * @method self withTaskId
 * @method string getTaskType
 * @method self withTaskType
 * @method string getKeyword
 * @method self withKeyword
 * @method Integer getPage
 * @method self withPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class DescribeTasks extends RpcRequest
{
}

/**
 * @method string getTaskId
 * @method self withTaskId
 */
final class DescribeTaskDetail extends RpcRequest
{
}

/**
 * @method string getAddress
 * @method self withAddress
 * @method string getTaskType
 * @method self withTaskType
 * @method string getTaskName
 * @method self withTaskName
 * @method string getInterval
 * @method self withInterval
 * @method string getIspCity
 * @method self withIspCity
 * @method string getOptions
 * @method self withOptions
 * @method string getAlertRule
 * @method self withAlertRule
 * @method string getAlertIds
 * @method self withAlertIds
 * @method string getcaller
 * @method self withcaller
 */
final class CreateTask extends RpcRequest
{
}

/**
 * @method string getAddress
 * @method self withAddress
 * @method string getTaskId
 * @method self withTaskId
 * @method string getTaskName
 * @method self withTaskName
 * @method string getInterval
 * @method self withInterval
 * @method string getIspCity
 * @method self withIspCity
 * @method string getOptions
 * @method self withOptions
 * @method string getAlertRule
 * @method self withAlertRule
 * @method string getAlertIds
 * @method self withAlertIds
 * @method string getcaller
 * @method self withcaller
 */
final class ModifyTask extends RpcRequest
{
}

/**
 * @method string getTaskIds
 * @method self withTaskIds
 * @method Integer getIsDeleteAlarms
 * @method self withIsDeleteAlarms
 */
final class DeleteTasks extends RpcRequest
{
}

/**
 * @method string getTaskIds
 * @method self withTaskIds
 */
final class StopTasks extends RpcRequest
{
}

/**
 * @method string getTaskIds
 * @method self withTaskIds
 */
final class StartTasks extends RpcRequest
{
}

/**
 * @method string getIsp
 * @method self withIsp
 * @method string getCity
 * @method self withCity
 */
final class DescribeISPAreaCity extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getMasters
 * @method self withMasters
 * @method string getReaders
 * @method self withReaders
 */
final class UpdateMyGroupMembers extends RpcRequest
{
}

final class GetVoneStatus extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getProject
 * @method self withProject
 * @method string getMetric
 * @method self withMetric
 * @method string getPeriod
 * @method self withPeriod
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDimensions
 * @method self withDimensions
 * @method string getExpress
 * @method self withExpress
 * @method string getLength
 * @method self withLength
 */
final class QueryMetricData extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getProject
 * @method self withProject
 * @method string getMetric
 * @method self withMetric
 * @method string getPeriod
 * @method self withPeriod
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDimensions
 * @method self withDimensions
 */
final class QueryMetricDimensions extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getMetric
 * @method self withMetric
 * @method string getPeriod
 * @method self withPeriod
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDimensions
 * @method self withDimensions
 * @method string getCursor
 * @method self withCursor
 * @method string getPage
 * @method self withPage
 * @method string getLength
 * @method self withLength
 * @method string getExpress
 * @method self withExpress
 */
final class QueryMetricLast extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getMetric
 * @method self withMetric
 * @method string getPeriod
 * @method self withPeriod
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDimensions
 * @method self withDimensions
 * @method string getCursor
 * @method self withCursor
 * @method string getLength
 * @method self withLength
 * @method string getExpress
 * @method self withExpress
 */
final class QueryMetricList extends RpcRequest
{
}

/**
 * @method string getPeriod
 * @method self withPeriod
 * @method string getProject
 * @method self withProject
 * @method string getMetric
 * @method self withMetric
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDimensions
 * @method self withDimensions
 * @method string getOrderby
 * @method self withOrderby
 * @method string getOrderDesc
 * @method self withOrderDesc
 * @method string getLength
 * @method self withLength
 * @method string getExpress
 * @method self withExpress
 */
final class QueryMetricTop extends RpcRequest
{
}

/**
 * @method RepeatList getTaskIdList
 * @method self withTaskIdList
 */
final class TaskConfigUnhealthy extends RpcRequest
{
}

/**
 * @method RepeatList getIdList
 * @method self withIdList
 */
final class TaskConfigDelete extends RpcRequest
{
}

/**
 * @method RepeatList getIdList
 * @method self withIdList
 * @method Boolean getEnabled
 * @method self withEnabled
 */
final class TaskConfigEnable extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method Long getId
 * @method self withId
 * @method string getTaskName
 * @method self withTaskName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class TaskConfigList extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method Long getId
 * @method self withId
 * @method string getTaskName
 * @method self withTaskName
 * @method string getTaskScope
 * @method self withTaskScope
 * @method string getTaskType
 * @method self withTaskType
 * @method string getGroupName
 * @method self withGroupName
 * @method string getJsonData
 * @method self withJsonData
 * @method RepeatList getInstanceList
 * @method self withInstanceList
 * @method string getAlertConfig
 * @method self withAlertConfig
 */
final class TaskConfigModify extends RpcRequest
{
}

/**
 * @method string getGroupName
 * @method self withGroupName
 * @method string getTaskType
 * @method self withTaskType
 * @method string getTaskName
 * @method self withTaskName
 * @method string getTaskScope
 * @method self withTaskScope
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getJsonData
 * @method self withJsonData
 * @method RepeatList getInstanceList
 * @method self withInstanceList
 * @method string getAlertConfig
 * @method self withAlertConfig
 */
final class TaskConfigCreate extends RpcRequest
{
}

/**
 * @method string getProcessName
 * @method self withProcessName
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getName
 * @method self withName
 * @method string getProcessUser
 * @method self withProcessUser
 * @method string getCommand
 * @method self withCommand
 */
final class NodeProcessCreate extends RpcRequest
{
}

/**
 * @method string getId
 * @method self withId
 */
final class EnableAlarm extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getId
 * @method self withId
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getStatistics
 * @method self withStatistics
 * @method string getComparisonOperator
 * @method self withComparisonOperator
 * @method string getThreshold
 * @method self withThreshold
 * @method string getContactGroups
 * @method self withContactGroups
 * @method Integer getStartTime
 * @method self withStartTime
 * @method Integer getEndTime
 * @method self withEndTime
 * @method Integer getSilenceTime
 * @method self withSilenceTime
 * @method Integer getEvaluationCount
 * @method self withEvaluationCount
 * @method Integer getNotifyType
 * @method self withNotifyType
 * @method string getWebhook
 * @method self withWebhook
 * @method Boolean getDryRun
 * @method self withDryRun
 */
final class UpdateAlarm extends RpcRequest
{
}

/**
 * @method string getBody
 * @method self withBody
 */
final class PutMetricData extends RpcRequest
{
}

/**
 * @method string getQueryJson
 * @method self withQueryJson
 */
final class QueryCustomEventHistogram extends RpcRequest
{
}

/**
 * @method string getId
 * @method self withId
 * @method Integer getSize
 * @method self withSize
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getCursor
 * @method self withCursor
 */
final class ListAlarmHistory extends RpcRequest
{
}

/**
 * @method string getType
 * @method self withType
 * @method Boolean getSelectContactGroups
 * @method self withSelectContactGroups
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getKeyword
 * @method self withKeyword
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getBindUrls
 * @method self withBindUrls
 * @method string getGroupName
 * @method self withGroupName
 */
final class ListMyGroups extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class NodeProcesses extends RpcRequest
{
}

/**
 * @method string getProduct
 * @method self withProduct
 * @method string getUserId
 * @method self withUserId
 */
final class EnableActiceAlert extends RpcRequest
{
}

/**
 * @method string getProduct
 * @method self withProduct
 * @method string getUserId
 * @method self withUserId
 */
final class EnableActiveAlert extends RpcRequest
{
}

/**
 * @method string getEventInfo
 * @method self withEventInfo
 */
final class PutSystemEvent extends RpcRequest
{
}

/**
 * @method Long getUserId
 * @method self withUserId
 * @method Boolean getAutoInstall
 * @method self withAutoInstall
 * @method Boolean getEnableInstallAgentNewECS
 * @method self withEnableInstallAgentNewECS
 * @method string getEnableActiveAlert
 * @method self withEnableActiveAlert
 */
final class ProfileSet extends RpcRequest
{
}

/**
 * @method string getId
 * @method self withId
 */
final class DeleteAlarm extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class NodeStatus extends RpcRequest
{
}

/**
 * @method string getQueryJson
 * @method self withQueryJson
 */
final class QuerySystemEventHistogram extends RpcRequest
{
}

/**
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListContactGroup extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getType
 * @method self withType
 * @method Boolean getSelectContactGroups
 * @method self withSelectContactGroups
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getBindUrl
 * @method self withBindUrl
 * @method string getGroupName
 * @method self withGroupName
 */
final class GetMyGroups extends RpcRequest
{
}

/**
 * @method string getUserId
 * @method self withUserId
 * @method string getProduct
 * @method self withProduct
 */
final class ListActiveAlertRule extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getMetricName
 * @method self withMetricName
 * @method string getMd5
 * @method self withMd5
 * @method string getUUID
 * @method self withUUID
 */
final class DeleteCustomMetric extends RpcRequest
{
}

/**
 * @method string getEventInfo
 * @method self withEventInfo
 */
final class PutEvent extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getNamespace
 * @method self withNamespace
 * @method string getMetricName
 * @method self withMetricName
 * @method string getDimensions
 * @method self withDimensions
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getStatistics
 * @method self withStatistics
 * @method string getComparisonOperator
 * @method self withComparisonOperator
 * @method string getThreshold
 * @method self withThreshold
 * @method Integer getEvaluationCount
 * @method self withEvaluationCount
 * @method string getContactGroups
 * @method self withContactGroups
 * @method Integer getStartTime
 * @method self withStartTime
 * @method Integer getEndTime
 * @method self withEndTime
 * @method Integer getSilenceTime
 * @method self withSilenceTime
 * @method Integer getNotifyType
 * @method self withNotifyType
 * @method string getWebhook
 * @method self withWebhook
 * @method Boolean getDryRun
 * @method self withDryRun
 */
final class CreateAlarm extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class NodeUninstall extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 */
final class ListMyGroupCategories extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getInstances
 * @method self withInstances
 */
final class AddMyGroupInstances extends RpcRequest
{
}

/**
 * @method string getMetricList
 * @method self withMetricList
 */
final class PutCustomMetric extends RpcRequest
{
}

/**
 * @method string getId
 * @method self withId
 * @method string getName
 * @method self withName
 * @method string getNamespace
 * @method self withNamespace
 * @method string getDimension
 * @method self withDimension
 * @method string getState
 * @method self withState
 * @method Boolean getIsEnable
 * @method self withIsEnable
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListAlarm extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Boolean getTotal
 * @method self withTotal
 * @method string getCategory
 * @method self withCategory
 * @method string getKeyword
 * @method self withKeyword
 * @method string getInstanceIds
 * @method self withInstanceIds
 */
final class ListMyGroupInstancesDetails extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getInstanceIds
 * @method self withInstanceIds
 * @method string getInstanceIdList
 * @method self withInstanceIdList
 * @method string getCategory
 * @method self withCategory
 */
final class DeleteMyGroupInstances extends RpcRequest
{
}

/**
 * @method string getType
 * @method self withType
 * @method string getGroupName
 * @method self withGroupName
 * @method Long getServiceId
 * @method self withServiceId
 * @method string getBindUrl
 * @method self withBindUrl
 * @method string getContactGroups
 * @method self withContactGroups
 * @method string getOptions
 * @method self withOptions
 */
final class CreateMyGroups extends RpcRequest
{
}

/**
 * @method string getProduct
 * @method self withProduct
 * @method string getUserId
 * @method self withUserId
 */
final class DisableActiveAlert extends RpcRequest
{
}

/**
 * @method string getUserId
 * @method self withUserId
 */
final class ListProductOfActiveAlert extends RpcRequest
{
}

/**
 * @method string getProduct
 * @method self withProduct
 * @method string getUserId
 * @method self withUserId
 */
final class DisableActiceAlert extends RpcRequest
{
}

/**
 * @method string getUserId
 * @method self withUserId
 */
final class ListProductOfActiceAlert extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Boolean getTotal
 * @method self withTotal
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getCategory
 * @method self withCategory
 * @method string getKeyword
 * @method self withKeyword
 * @method string getInstanceIds
 * @method self withInstanceIds
 */
final class ListMyGroupInstances extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 */
final class DeleteMyGroups extends RpcRequest
{
}

/**
 * @method string getUserId
 * @method self withUserId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Boolean getForce
 * @method self withForce
 */
final class NodeInstall extends RpcRequest
{
}

/**
 * @method string getKeyWord
 * @method self withKeyWord
 * @method Long getUserId
 * @method self withUserId
 * @method string getHostName
 * @method self withHostName
 * @method string getInstanceIds
 * @method self withInstanceIds
 * @method string getSerialNumbers
 * @method self withSerialNumbers
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getStatus
 * @method self withStatus
 * @method string getInstanceRegionId
 * @method self withInstanceRegionId
 */
final class NodeList extends RpcRequest
{
}

/**
 * @method string getBindUrls
 * @method self withBindUrls
 * @method string getGroupId
 * @method self withGroupId
 * @method string getGroupName
 * @method self withGroupName
 * @method Long getServiceId
 * @method self withServiceId
 * @method string getType
 * @method self withType
 * @method string getContactGroups
 * @method self withContactGroups
 */
final class UpdateMyGroups extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getName
 * @method self withName
 * @method string getId
 * @method self withId
 */
final class NodeProcessDelete extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getMetricName
 * @method self withMetricName
 * @method string getDimension
 * @method self withDimension
 * @method string getMd5
 * @method self withMd5
 * @method string getPage
 * @method self withPage
 * @method string getSize
 * @method self withSize
 */
final class QueryCustomMetricList extends RpcRequest
{
}

/**
 * @method string getDimensions
 * @method self withDimensions
 * @method string getPolicyType
 * @method self withPolicyType
 * @method string getId
 * @method self withId
 * @method string getAlertName
 * @method self withAlertName
 * @method string getGroupId
 * @method self withGroupId
 */
final class GetNotifyPolicy extends RpcRequest
{
}

/**
 * @method string getQueryJson
 * @method self withQueryJson
 */
final class QueryCustomEventCount extends RpcRequest
{
}

/**
 * @method string getQueryJson
 * @method self withQueryJson
 */
final class QuerySystemEventCount extends RpcRequest
{
}

/**
 * @method string getAlertName
 * @method self withAlertName
 * @method string getPolicyType
 * @method self withPolicyType
 * @method string getId
 * @method self withId
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getDimensions
 * @method self withDimensions
 * @method string getGroupId
 * @method self withGroupId
 */
final class ListNotifyPolicy extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getInstances
 * @method self withInstances
 */
final class UpdateMyGroupInstances extends RpcRequest
{
}

/**
 * @method Long getUserId
 * @method self withUserId
 */
final class AccessKeyGet extends RpcRequest
{
}

/**
 * @method string getAlertName
 * @method self withAlertName
 * @method string getPolicyType
 * @method self withPolicyType
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method string getDimensions
 * @method self withDimensions
 * @method string getGroupId
 * @method self withGroupId
 */
final class CreateNotifyPolicy extends RpcRequest
{
}

/**
 * @method Long getUserId
 * @method self withUserId
 */
final class ProfileGet extends RpcRequest
{
}

/**
 * @method string getId
 * @method self withId
 */
final class DisableAlarm extends RpcRequest
{
}

/**
 * @method string getDimensions
 * @method self withDimensions
 * @method string getPolicyType
 * @method self withPolicyType
 * @method string getId
 * @method self withId
 * @method string getAlertName
 * @method self withAlertName
 * @method string getGroupId
 * @method self withGroupId
 */
final class DeleteNotifyPolicy extends RpcRequest
{
}

/**
 * @method string getAlertName
 * @method self withAlertName
 * @method string getRuleName
 * @method self withRuleName
 * @method string getNamespace
 * @method self withNamespace
 * @method string getMetricName
 * @method self withMetricName
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStatus
 * @method self withStatus
 * @method string getState
 * @method self withState
 * @method Boolean getAscending
 * @method self withAscending
 * @method Boolean getOnlyCount
 * @method self withOnlyCount
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPage
 * @method self withPage
 */
final class DescribeAlarmHistory extends RpcRequest
{
}

/**
 * @method string getInstanceIds
 * @method self withInstanceIds
 */
final class NodeStatusList extends RpcRequest
{
}

/**
 * @method string getQueryJson
 * @method self withQueryJson
 */
final class QuerySystemEventDetail extends RpcRequest
{
}

/**
 * @method string getQueryJson
 * @method self withQueryJson
 */
final class QueryCustomEventDetail extends RpcRequest
{
}
