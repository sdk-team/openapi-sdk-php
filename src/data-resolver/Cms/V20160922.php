<?php

namespace AlibabaCloud\Cms\V20160922;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method Long getMetricId
 * @method self withMetricId
 */
final class DeleteMetricOfLogMonitor extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method Long getLogId
 * @method self withLogId
 */
final class ListMetricsOfLogMonitor extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method Long getLogId
 * @method self withLogId
 */
final class GetLogMonitorInAll extends RpcRequest
{
}

/**
 * @method string getProjectOwner
 * @method self withProjectOwner
 * @method Long getPage
 * @method self withPage
 * @method Long getPageSize
 * @method self withPageSize
 * @method string getProjectName
 * @method self withProjectName
 */
final class QueryProject extends RpcRequest
{
}

/**
 * @method Boolean getSelectContactGroups
 * @method self withSelectContactGroups
 * @method string getGroupType
 * @method self withGroupType
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
 * @method Long getAliUid
 * @method self withAliUid
 */
final class ListGroupsInner extends RpcRequest
{
}

/**
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
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
 * @method string getOrderby
 * @method self withOrderby
 * @method string getOrderDesc
 * @method self withOrderDesc
 * @method string getLength
 * @method self withLength
 * @method string getExpress
 * @method self withExpress
 */
final class QueryInstanceTop extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getMetricName
 * @method self withMetricName
 */
final class QueryIsMetricNameValid extends RpcRequest
{
}

/**
 * @method string getKeyword
 * @method self withKeyword
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListMyGroups extends RpcRequest
{
}

/**
 * @method Long getUserId
 * @method self withUserId
 * @method Integer getYear
 * @method self withYear
 * @method Integer getWeekOfYear
 * @method self withWeekOfYear
 */
final class H5WeeklyReportUserIds extends RpcRequest
{
}

/**
 * @method Long getUserId
 * @method self withUserId
 * @method Integer getYear
 * @method self withYear
 * @method Integer getWeekOfYear
 * @method self withWeekOfYear
 * @method string getFileType
 * @method self withFileType
 */
final class H5WeeklyReportUrl extends RpcRequest
{
}

final class ProjectList extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricName
 * @method self withMetricName
 */
final class MetricMeta extends RpcRequest
{
}

/**
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
 * @method string getFieldNames
 * @method self withFieldNames
 * @method string getListByTop
 * @method self withListByTop
 * @method string getOrderby
 * @method self withOrderby
 * @method string getOrderDesc
 * @method self withOrderDesc
 * @method string getLimit
 * @method self withLimit
 * @method string getTargetPrefix
 * @method self withTargetPrefix
 * @method string getPage
 * @method self withPage
 * @method string getLength
 * @method self withLength
 */
final class MetricData extends RpcRequest
{
}

final class Heartbeat extends RpcRequest
{
}

/**
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
 * @method string getNextKey
 * @method self withNextKey
 */
final class DimensionValues extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getNamespace
 * @method self withNamespace
 * @method string getMetricNames
 * @method self withMetricNames
 * @method string getDimensions
 * @method self withDimensions
 * @method string getInterval
 * @method self withInterval
 * @method string getFilter
 * @method self withFilter
 */
final class QueryMetricsFresh extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
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
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getMetric
 * @method self withMetric
 * @method string getDimension
 * @method self withDimension
 * @method string getWhere
 * @method self withWhere
 * @method string getLimit
 * @method self withLimit
 */
final class QueryCustomValue extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 */
final class QueryCustomTable extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getMetric
 * @method self withMetric
 * @method string getIsdim
 * @method self withIsdim
 */
final class QueryCustomField extends RpcRequest
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
 * @method Long getId
 * @method self withId
 * @method string getTaskName
 * @method self withTaskName
 * @method Long getGroupId
 * @method self withGroupId
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class TaskConfigList extends RpcRequest
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
 * @method RepeatList getIdList
 * @method self withIdList
 */
final class TaskConfigDelete extends RpcRequest
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
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getTemplateId
 * @method self withTemplateId
 * @method string getTemplateName
 * @method self withTemplateName
 * @method string getTemplateDescribe
 * @method self withTemplateDescribe
 * @method string getSilenceTime
 * @method self withSilenceTime
 * @method string getEnableStartTime
 * @method self withEnableStartTime
 * @method string getEnableEndTime
 * @method self withEnableEndTime
 * @method string getNotifyLevel
 * @method self withNotifyLevel
 * @method string getTemplateType
 * @method self withTemplateType
 * @method string getApplyGroups
 * @method self withApplyGroups
 * @method string getAlarmTemplateItems
 * @method self withAlarmTemplateItems
 */
final class PutAlertTemplate extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 */
final class GetLogMonitorResourceControlInfo extends RpcRequest
{
}

/**
 * @method Long getTemplateId
 * @method self withTemplateId
 * @method Integer getPage
 * @method self withPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class PutAlarmTemplate extends RpcRequest
{
}

/**
 * @method Long getTemplateId
 * @method self withTemplateId
 * @method Integer getPage
 * @method self withPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListAlarmTemplate extends RpcRequest
{
}

/**
 * @method Integer gettemplateId
 * @method self withtemplateId
 */
final class DeleteAlarmTemplate extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class JVMConfigRemoveByInstanceId extends RpcRequest
{
}

/**
 * @method string getIdList
 * @method self withIdList
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class JVMConfigRemoveByIdList extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class JVMConfigRemoveById extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Long getUserId
 * @method self withUserId
 * @method string getHost
 * @method self withHost
 * @method Integer getPort
 * @method self withPort
 * @method string getObjectNameJsonStr
 * @method self withObjectNameJsonStr
 */
final class JVMConfigModify extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class JVMConfigGetByInstanceId extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class JVMConfigGetById extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class JVMConfigEnable extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class JVMConfigDisable extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Long getUserId
 * @method self withUserId
 * @method string getHost
 * @method self withHost
 * @method Integer getPort
 * @method self withPort
 * @method string getObjectNameJsonStr
 * @method self withObjectNameJsonStr
 */
final class JVMConfigCreate extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProject
 * @method self withProject
 * @method string getEventName
 * @method self withEventName
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
 * @method string getFilter
 * @method self withFilter
 */
final class QueryEventLast extends RpcRequest
{
}

/**
 * @method Long getUserId
 * @method self withUserId
 */
final class NodeListUpdate extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getMetricName
 * @method self withMetricName
 */
final class IsMetricNameValid extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getLogMonitor
 * @method self withLogMonitor
 */
final class PutLogMonitor extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method Long getGroupId
 * @method self withGroupId
 */
final class ListLogMonitorByGroupId extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method Integer getPage
 * @method self withPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getSearchValue
 * @method self withSearchValue
 * @method Long getGroupId
 * @method self withGroupId
 */
final class ListLogMonitor extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getMetricName
 * @method self withMetricName
 */
final class GetLogMonitorByMetricName extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method Long getLogId
 * @method self withLogId
 */
final class DeleteLogMonitor extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getMetricMeta
 * @method self withMetricMeta
 */
final class PutMetricMeta extends RpcRequest
{
}

/**
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProject
 * @method self withProject
 * @method string getMetric
 * @method self withMetric
 * @method string getPeriod
 * @method self withPeriod
 * @method string getData
 * @method self withData
 */
final class UploadData extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricOutputName
 * @method self withMetricOutputName
 * @method string getMetricOutput
 * @method self withMetricOutput
 */
final class UpdateOutput extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 * @method string getMetricName
 * @method self withMetricName
 * @method string getMetrics
 * @method self withMetrics
 */
final class UpdateMetrics extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 */
final class StopMetricStream extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 */
final class StartMetricStream extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
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
 * @method string getTargetPeriod
 * @method self withTargetPeriod
 * @method string getColumns
 * @method self withColumns
 * @method string getExtend
 * @method self withExtend
 */
final class QueryIncremental extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getgroupJson
 * @method self withgroupJson
 */
final class putProductGroup extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricOutputName
 * @method self withMetricOutputName
 * @method Long getPage
 * @method self withPage
 * @method Long getPageSize
 * @method self withPageSize
 */
final class ListOutput extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 * @method string getMetricName
 * @method self withMetricName
 * @method Long getPage
 * @method self withPage
 * @method Long getPageSize
 * @method self withPageSize
 */
final class ListMetricsPlan extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 * @method string getMetricName
 * @method self withMetricName
 * @method Long getPage
 * @method self withPage
 * @method Long getPageSize
 * @method self withPageSize
 */
final class ListMetrics extends RpcRequest
{
}

/**
 * @method string getDimTableName
 * @method self withDimTableName
 * @method string getKey
 * @method self withKey
 */
final class ListDimTableData extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcategory
 * @method self withcategory
 */
final class getProductGroups extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Long getgroupId
 * @method self withgroupId
 */
final class getProductGroupInstances extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricOutputName
 * @method self withMetricOutputName
 */
final class GetOutput extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 */
final class GetMetricStreamStatus extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 */
final class GetMetricStreamMeta extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getNamespace
 * @method self withNamespace
 * @method string getMetricName
 * @method self withMetricName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getInterval
 * @method self withInterval
 * @method string getDimensions
 * @method self withDimensions
 * @method Integer getNextToken
 * @method self withNextToken
 * @method Integer getLength
 * @method self withLength
 */
final class GetMetricStatistics extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 * @method string getMetricName
 * @method self withMetricName
 */
final class GetMetrics extends RpcRequest
{
}

/**
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
 * @method string getPage
 * @method self withPage
 * @method string getLength
 * @method self withLength
 */
final class DescribeMetricList extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
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
 * @method string getPage
 * @method self withPage
 * @method string getLength
 * @method self withLength
 * @method string getExtend
 * @method self withExtend
 */
final class DescribeMetricDatum extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Long getgroupId
 * @method self withgroupId
 */
final class deleteProductGroup extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricOutputName
 * @method self withMetricOutputName
 */
final class DeleteOutput extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricOutput
 * @method self withMetricOutput
 */
final class CreateOutput extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method Integer getIsPublic
 * @method self withIsPublic
 * @method string getMetrics
 * @method self withMetrics
 */
final class CreateMetrics extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getparams
 * @method self withparams
 * @method string getname
 * @method self withname
 * @method string getviewId
 * @method self withviewId
 * @method string getviewConf
 * @method self withviewConf
 * @method string gettype
 * @method self withtype
 */
final class cmsShareGenerateToken extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string gettoken
 * @method self withtoken
 */
final class cmsShareDeleteTokenByToken extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method Integer getpageNo
 * @method self withpageNo
 * @method Integer getpageSize
 * @method self withpageSize
 */
final class cmsListShares extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
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
 * @method string getExtend
 * @method self withExtend
 * @method string getFilter
 * @method self withFilter
 */
final class BatchQueryMetric extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 * @method string getSqls
 * @method self withSqls
 */
final class BatchCreateMetrics extends RpcRequest
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
 * @method Long getUserId
 * @method self withUserId
 * @method Boolean getAutoInstall
 * @method self withAutoInstall
 * @method Boolean getEnableInstallAgentNewECS
 * @method self withEnableInstallAgentNewECS
 */
final class ProfileSet extends RpcRequest
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
 * @method string getAccessKey
 * @method self withAccessKey
 */
final class AccessKeyQuery extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class NodeUninstall extends RpcRequest
{
}

final class NodeAgentVersion extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
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
 * @method string getPage
 * @method self withPage
 * @method string getLength
 * @method self withLength
 * @method string getExtend
 * @method self withExtend
 */
final class QueryMetric extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricName
 * @method self withMetricName
 * @method string getSql
 * @method self withSql
 * @method Integer getIsPublic
 * @method self withIsPublic
 */
final class UpdateSqlMetrics extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getProject
 * @method self withProject
 */
final class UpdateProject extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 * @method string getMetricStream
 * @method self withMetricStream
 */
final class UpdateMetricStream extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricOutputName
 * @method self withMetricOutputName
 * @method string getMetricOutput
 * @method self withMetricOutput
 */
final class UpdateMetricOutput extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getDimTableName
 * @method self withDimTableName
 * @method string getDimTable
 * @method self withDimTable
 */
final class UpdateDimTable extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 */
final class StopProject extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 */
final class StatusProject extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getType
 * @method self withType
 */
final class StartProject extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
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
 * @method string getValueKey
 * @method self withValueKey
 * @method string getTop
 * @method self withTop
 * @method string getExtend
 * @method self withExtend
 */
final class QueryMetricTopN extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
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
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
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
 * @method string getPage
 * @method self withPage
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
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
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
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
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
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
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
 * @method string getPage
 * @method self withPage
 * @method string getLength
 * @method self withLength
 * @method string getExtend
 * @method self withExtend
 * @method string getFilter
 * @method self withFilter
 */
final class QueryListMetric extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProject
 * @method self withProject
 * @method string getEventName
 * @method self withEventName
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getDimensions
 * @method self withDimensions
 * @method string getPage
 * @method self withPage
 * @method string getCursor
 * @method self withCursor
 * @method string getLength
 * @method self withLength
 * @method string getFilter
 * @method self withFilter
 * @method Boolean getOrderDesc
 * @method self withOrderDesc
 */
final class QueryEvent extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getDimTableName
 * @method self withDimTableName
 * @method string getKey
 * @method self withKey
 * @method string getValue
 * @method self withValue
 * @method Long getPage
 * @method self withPage
 * @method Long getPageSize
 * @method self withPageSize
 */
final class QueryDimTableDataByKey extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getDimTableName
 * @method self withDimTableName
 * @method string getKey
 * @method self withKey
 */
final class QueryDimTableData extends RpcRequest
{
}

/**
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProject
 * @method self withProject
 * @method string getMetric
 * @method self withMetric
 * @method string getPeriod
 * @method self withPeriod
 * @method string getData
 * @method self withData
 */
final class PutMetrics extends RpcRequest
{
}

/**
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getBody
 * @method self withBody
 */
final class PutMetricData extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getDimTableName
 * @method self withDimTableName
 * @method string getBody
 * @method self withBody
 */
final class PutDimTableData extends RpcRequest
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
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class NodeProcesses extends RpcRequest
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
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getName
 * @method self withName
 * @method string getProcessName
 * @method self withProcessName
 * @method string getProcessUser
 * @method self withProcessUser
 * @method string getCommand
 * @method self withCommand
 */
final class NodeProcessCreate extends RpcRequest
{
}

/**
 * @method Long getUserId
 * @method self withUserId
 * @method string getHostName
 * @method self withHostName
 * @method string getKeyWord
 * @method self withKeyWord
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
 */
final class NodeList extends RpcRequest
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
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getSql
 * @method self withSql
 * @method string getInput
 * @method self withInput
 */
final class MetricSqlCheck extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricName
 * @method self withMetricName
 * @method Long getPage
 * @method self withPage
 * @method Long getPageSize
 * @method self withPageSize
 */
final class ListSqlMetrics extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectOwner
 * @method self withProjectOwner
 * @method Long getPage
 * @method self withPage
 * @method Long getPageSize
 * @method self withPageSize
 */
final class ListProject extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 * @method Long getPage
 * @method self withPage
 * @method Long getPageSize
 * @method self withPageSize
 */
final class ListMetricStream extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricName
 * @method self withMetricName
 * @method Long getPage
 * @method self withPage
 * @method Long getPageSize
 * @method self withPageSize
 */
final class ListMetricsMeta extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricOutputName
 * @method self withMetricOutputName
 * @method Long getPage
 * @method self withPage
 * @method Long getPageSize
 * @method self withPageSize
 */
final class ListMetricOutput extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getDimTableName
 * @method self withDimTableName
 * @method Long getPage
 * @method self withPage
 * @method Long getPageSize
 * @method self withPageSize
 */
final class ListDimTable extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricName
 * @method self withMetricName
 */
final class GetSqlMetrics extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 */
final class GetProject extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 */
final class GetMetricStream extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricName
 * @method self withMetricName
 */
final class GetMetricsMeta extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricOutputName
 * @method self withMetricOutputName
 */
final class GetMetricOutput extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getDimTableName
 * @method self withDimTableName
 */
final class GetDimTable extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
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
final class DescribeMetric extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 */
final class DeleteProject extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStreamName
 * @method self withMetricStreamName
 */
final class DeleteMetricStream extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricName
 * @method self withMetricName
 */
final class DeleteMetrics extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricOutputName
 * @method self withMetricOutputName
 */
final class DeleteMetricOutput extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getDimTableName
 * @method self withDimTableName
 * @method string getKey
 * @method self withKey
 * @method string getValue
 * @method self withValue
 */
final class DeleteDimTableDataByKey extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getDimTableName
 * @method self withDimTableName
 * @method string getKey
 * @method self withKey
 */
final class DeleteDimTableData extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getDimTableName
 * @method self withDimTableName
 */
final class DeleteDimTable extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getSql
 * @method self withSql
 * @method Integer getIsPublic
 * @method self withIsPublic
 */
final class CreateSqlMetrics extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProject
 * @method self withProject
 */
final class CreateProject extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricStream
 * @method self withMetricStream
 */
final class CreateMetricStream extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getMetricOutput
 * @method self withMetricOutput
 */
final class CreateMetricOutput extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getDimTable
 * @method self withDimTable
 */
final class CreateDimTable extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getDimTableName
 * @method self withDimTableName
 * @method string getBody
 * @method self withBody
 */
final class BatchPutDimTableData123 extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getDimTableName
 * @method self withDimTableName
 * @method string getBody
 * @method self withBody
 */
final class BatchPutDimTableData extends RpcRequest
{
}

/**
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getProjectName
 * @method self withProjectName
 * @method string getSqls
 * @method self withSqls
 * @method Integer getIsPublic
 * @method self withIsPublic
 */
final class BatchCreateSqlMetrics extends RpcRequest
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
 * @method Long getUserId
 * @method self withUserId
 */
final class AccessKeyGenerate extends RpcRequest
{
}
