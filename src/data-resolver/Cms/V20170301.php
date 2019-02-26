<?php

namespace AlibabaCloud\Cms\V20170301;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getCountry
 * @method self withCountry
 * @method Boolean getInterrupt
 * @method self withInterrupt
 * @method string getInvoker
 * @method self withInvoker
 * @method string getPk
 * @method self withPk
 * @method string getBid
 * @method self withBid
 * @method Long getHid
 * @method self withHid
 * @method string getTaskIdentifier
 * @method self withTaskIdentifier
 * @method string getTaskExtraData
 * @method self withTaskExtraData
 * @method string getGmtWakeup
 * @method self withGmtWakeup
 * @method Boolean getSuccess
 * @method self withSuccess
 * @method string getMessage
 * @method self withMessage
 * @method Long getLevel
 * @method self withLevel
 * @method string getUrl
 * @method self withUrl
 * @method string getPrompt
 * @method self withPrompt
 */
final class DoCheckResource extends RpcRequest
{
}

/**
 * @method Boolean getInterrupt
 * @method self withInterrupt
 * @method string getInvoker
 * @method self withInvoker
 * @method string getPk
 * @method self withPk
 * @method string getBid
 * @method self withBid
 * @method Long getHid
 * @method self withHid
 * @method string getCountry
 * @method self withCountry
 * @method string getTaskIdentifier
 * @method self withTaskIdentifier
 * @method string getTaskExtraData
 * @method self withTaskExtraData
 * @method string getGmtWakeup
 * @method self withGmtWakeup
 * @method Boolean getSuccess
 * @method self withSuccess
 * @method string getMessage
 * @method self withMessage
 */
final class DoLogicalDeleteResource extends RpcRequest
{
}

/**
 * @method Long getHid
 * @method self withHid
 * @method Boolean getInterrupt
 * @method self withInterrupt
 * @method string getInvoker
 * @method self withInvoker
 * @method string getPk
 * @method self withPk
 * @method string getBid
 * @method self withBid
 * @method string getCountry
 * @method self withCountry
 * @method string getTaskIdentifier
 * @method self withTaskIdentifier
 * @method string getTaskExtraData
 * @method self withTaskExtraData
 * @method string getGmtWakeup
 * @method self withGmtWakeup
 * @method Boolean getSuccess
 * @method self withSuccess
 * @method string getMessage
 * @method self withMessage
 */
final class DoPhysicalDeleteResource extends RpcRequest
{
}

/**
 * @method string getPeriod
 * @method self withPeriod
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
 * @method string getNoEffectiveInterval
 * @method self withNoEffectiveInterval
 * @method Integer getSilenceTime
 * @method self withSilenceTime
 * @method string getWebhook
 * @method self withWebhook
 * @method string getDisplayName
 * @method self withDisplayName
 * @method string getDescription
 * @method self withDescription
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
 * @method string getAlertState
 * @method self withAlertState
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
 * @method string getDimensions
 * @method self withDimensions
 */
final class DescribeAlarmsForDimensions extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
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
 * @method string getTaskType
 * @method self withTaskType
 * @method Long getId
 * @method self withId
 * @method string getTaskName
 * @method self withTaskName
 * @method string getTaskScope
 * @method self withTaskScope
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
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class TaskConfigList extends RpcRequest
{
}

/**
 * @method string getTaskType
 * @method self withTaskType
 * @method string getTaskName
 * @method self withTaskName
 * @method string getTaskScope
 * @method self withTaskScope
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getGroupName
 * @method self withGroupName
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
 * @method string getCommandJson
 * @method self withCommandJson
 */
final class PutUserResourceCommand extends RpcRequest
{
}

/**
 * @method string getQueryJson
 * @method self withQueryJson
 */
final class QueryUserCrmInfo extends RpcRequest
{
}

/**
 * @method string getQueryJson
 * @method self withQueryJson
 */
final class QueryUsedResourceCount extends RpcRequest
{
}

/**
 * @method string getUserId
 * @method self withUserId
 */
final class QueryBasicAccountInfo extends RpcRequest
{
}

/**
 * @method string getdata
 * @method self withdata
 */
final class CmsPayVerify extends RpcRequest
{
}

/**
 * @method string getdata
 * @method self withdata
 */
final class CmsPayRefund extends RpcRequest
{
}

/**
 * @method string getdata
 * @method self withdata
 */
final class CmsPayCallBack extends RpcRequest
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
 * @method string getProduct
 * @method self withProduct
 * @method string getUserId
 * @method self withUserId
 */
final class DisableActiveAlert extends RpcRequest
{
}

final class ListProductOfActiveAlert extends RpcRequest
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
 * @method string getUserId
 * @method self withUserId
 * @method string getProduct
 * @method self withProduct
 */
final class ListActiveAlertRule extends RpcRequest
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
final class DisableActiceAlert extends RpcRequest
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
final class QuerySystemEventCount extends RpcRequest
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
 * @method string getQueryJson
 * @method self withQueryJson
 */
final class QueryCustomEventDetail extends RpcRequest
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
 * @method string getInstanceRegionId
 * @method self withInstanceRegionId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Long getAliUid
 * @method self withAliUid
 * @method string getCategory
 * @method self withCategory
 * @method string getKey
 * @method self withKey
 * @method string getProperties
 * @method self withProperties
 */
final class CreateInstances extends RpcRequest
{
}

/**
 * @method string getInstanceRegionId
 * @method self withInstanceRegionId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Long getAliUid
 * @method self withAliUid
 * @method string getCategory
 * @method self withCategory
 * @method string getKey
 * @method self withKey
 * @method string getProperties
 * @method self withProperties
 */
final class UpdateInstances extends RpcRequest
{
}

/**
 * @method string getInstanceRegionId
 * @method self withInstanceRegionId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Long getAliUid
 * @method self withAliUid
 * @method string getCategory
 * @method self withCategory
 * @method string getKey
 * @method self withKey
 * @method string getProperties
 * @method self withProperties
 */
final class DeleteInstances extends RpcRequest
{
}

/**
 * @method Boolean getSelectContactGroups
 * @method self withSelectContactGroups
 * @method string getKeyword
 * @method self withKeyword
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getType
 * @method self withType
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
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getType
 * @method self withType
 * @method Boolean getSelectContactGroups
 * @method self withSelectContactGroups
 * @method string getBindUrl
 * @method self withBindUrl
 * @method string getGroupName
 * @method self withGroupName
 */
final class GetMyGroups extends RpcRequest
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
 * @method Boolean getTotal
 * @method self withTotal
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getCategory
 * @method self withCategory
 */
final class ListMyGroupInstancesDetails extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getInstanceIds
 * @method self withInstanceIds
 */
final class DeleteMyGroupInstances extends RpcRequest
{
}

/**
 * @method string getGroupName
 * @method self withGroupName
 * @method Long getServiceId
 * @method self withServiceId
 * @method string getBindUrl
 * @method self withBindUrl
 * @method string getType
 * @method self withType
 * @method string getContactGroups
 * @method self withContactGroups
 */
final class CreateMyGroups extends RpcRequest
{
}

/**
 * @method Boolean getTotal
 * @method self withTotal
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getCategory
 * @method self withCategory
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
 * @method string getGroupId
 * @method self withGroupId
 * @method string getGroupName
 * @method self withGroupName
 * @method Long getServiceId
 * @method self withServiceId
 * @method string getBindUrls
 * @method self withBindUrls
 * @method string getType
 * @method self withType
 * @method string getContactGroups
 * @method self withContactGroups
 */
final class UpdateMyGroups extends RpcRequest
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
 * @method string getEventInfo
 * @method self withEventInfo
 */
final class PutSystemEvent extends RpcRequest
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
 * @method string getGroupId
 * @method self withGroupId
 * @method string getMetricName
 * @method self withMetricName
 * @method string getDimension
 * @method self withDimension
 * @method string getMd5
 * @method self withMd5
 * @method string getUUID
 * @method self withUUID
 * @method string getPage
 * @method self withPage
 * @method string getSize
 * @method self withSize
 */
final class QueryCustomMetricList extends RpcRequest
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
 * @method string getProject
 * @method self withProject
 * @method string getService
 * @method self withService
 * @method string getCluster
 * @method self withCluster
 * @method string getAlertName
 * @method self withAlertName
 * @method string getDimensions
 * @method self withDimensions
 * @method string getPolicyType
 * @method self withPolicyType
 * @method string getId
 * @method self withId
 */
final class TjmListNotifyPolicy extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getService
 * @method self withService
 * @method string getCluster
 * @method self withCluster
 * @method string getAlertName
 * @method self withAlertName
 * @method string getDimensions
 * @method self withDimensions
 * @method string getPolicyType
 * @method self withPolicyType
 * @method string getId
 * @method self withId
 */
final class TjmGetNotifyPolicy extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getService
 * @method self withService
 * @method string getCluster
 * @method self withCluster
 * @method string getAlertName
 * @method self withAlertName
 * @method string getDimensions
 * @method self withDimensions
 * @method string getType
 * @method self withType
 * @method string getId
 * @method self withId
 */
final class TjmDeleteNotifyPolicy extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getService
 * @method self withService
 * @method string getCluster
 * @method self withCluster
 * @method string getAlertName
 * @method self withAlertName
 * @method string getDimensions
 * @method self withDimensions
 * @method string getPolicyType
 * @method self withPolicyType
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 */
final class TjmCreateNotifyPolicy extends RpcRequest
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
 */
final class ListNotifyPolicy extends RpcRequest
{
}

/**
 * @method string getAlertName
 * @method self withAlertName
 * @method string getPolicyType
 * @method self withPolicyType
 * @method string getId
 * @method self withId
 * @method string getDimensions
 * @method self withDimensions
 */
final class GetNotifyPolicy extends RpcRequest
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
 * @method string getDimensions
 * @method self withDimensions
 * @method string getPolicyType
 * @method self withPolicyType
 * @method string getId
 * @method self withId
 * @method string getAlertName
 * @method self withAlertName
 */
final class DeleteNotifyPolicy extends RpcRequest
{
}

/**
 * @method string getDimensions
 * @method self withDimensions
 * @method string getPolicyType
 * @method self withPolicyType
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method string getAlertName
 * @method self withAlertName
 */
final class CreateNotifyPolicy extends RpcRequest
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
 * @method string getEventInfo
 * @method self withEventInfo
 */
final class EventCustomPopUpload extends RpcRequest
{
}

/**
 * @method Long getUserId
 * @method self withUserId
 */
final class AccessKeyGenerate extends RpcRequest
{
}

/**
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getId
 * @method self withId
 * @method string getName
 * @method self withName
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
 */
final class UpdateAlarm extends RpcRequest
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
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getBody
 * @method self withBody
 */
final class PutMetricData extends RpcRequest
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
 * @method Long getUserId
 * @method self withUserId
 */
final class ProfileGet extends RpcRequest
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
 * @method string getInstanceIds
 * @method self withInstanceIds
 */
final class NodeStatusList extends RpcRequest
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
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Long getUserId
 * @method self withUserId
 * @method string getHostName
 * @method self withHostName
 * @method string getInstanceIds
 * @method self withInstanceIds
 * @method string getSerialNumbers
 * @method self withSerialNumbers
 * @method string getKeyWord
 * @method self withKeyWord
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
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListContactGroup extends RpcRequest
{
}

/**
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
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
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
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
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getId
 * @method self withId
 */
final class EnableAlarm extends RpcRequest
{
}

/**
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getId
 * @method self withId
 */
final class DisableAlarm extends RpcRequest
{
}

/**
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
 * @method string getId
 * @method self withId
 */
final class DeleteAlarm extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getcallby_cms_owner
 * @method self withcallby_cms_owner
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
 */
final class CreateAlarm extends RpcRequest
{
}

/**
 * @method Long getUserId
 * @method self withUserId
 */
final class AccessKeyGet extends RpcRequest
{
}
