<?php

namespace AlibabaCloud\Cms\V20170301;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DoCheckResource doCheckResource($options = [])
 * @method DoLogicalDeleteResource doLogicalDeleteResource($options = [])
 * @method DoPhysicalDeleteResource doPhysicalDeleteResource($options = [])
 * @method PutMetricAlarm putMetricAlarm($options = [])
 * @method DescribeAlarmsForDimensions describeAlarmsForDimensions($options = [])
 * @method DescribeAlarms describeAlarms($options = [])
 * @method TaskConfigModify taskConfigModify($options = [])
 * @method TaskConfigEnable taskConfigEnable($options = [])
 * @method TaskConfigDelete taskConfigDelete($options = [])
 * @method TaskConfigUnhealthy taskConfigUnhealthy($options = [])
 * @method TaskConfigList taskConfigList($options = [])
 * @method TaskConfigCreate taskConfigCreate($options = [])
 * @method PutUserResourceCommand putUserResourceCommand($options = [])
 * @method QueryUserCrmInfo queryUserCrmInfo($options = [])
 * @method QueryUsedResourceCount queryUsedResourceCount($options = [])
 * @method QueryBasicAccountInfo queryBasicAccountInfo($options = [])
 * @method CmsPayVerify cmsPayVerify($options = [])
 * @method CmsPayRefund cmsPayRefund($options = [])
 * @method CmsPayCallBack cmsPayCallBack($options = [])
 * @method EnableActiveAlert enableActiveAlert($options = [])
 * @method DisableActiveAlert disableActiveAlert($options = [])
 * @method ListProductOfActiveAlert listProductOfActiveAlert($options = [])
 * @method ListProductOfActiceAlert listProductOfActiceAlert($options = [])
 * @method ListActiveAlertRule listActiveAlertRule($options = [])
 * @method EnableActiceAlert enableActiceAlert($options = [])
 * @method DisableActiceAlert disableActiceAlert($options = [])
 * @method QuerySystemEventHistogram querySystemEventHistogram($options = [])
 * @method QuerySystemEventDetail querySystemEventDetail($options = [])
 * @method QuerySystemEventCount querySystemEventCount($options = [])
 * @method QueryCustomEventHistogram queryCustomEventHistogram($options = [])
 * @method QueryCustomEventDetail queryCustomEventDetail($options = [])
 * @method QueryCustomEventCount queryCustomEventCount($options = [])
 * @method CreateInstances createInstances($options = [])
 * @method UpdateInstances updateInstances($options = [])
 * @method DeleteInstances deleteInstances($options = [])
 * @method ListMyGroups listMyGroups($options = [])
 * @method GetMyGroups getMyGroups($options = [])
 * @method ListMyGroupCategories listMyGroupCategories($options = [])
 * @method AddMyGroupInstances addMyGroupInstances($options = [])
 * @method ListMyGroupInstancesDetails listMyGroupInstancesDetails($options = [])
 * @method DeleteMyGroupInstances deleteMyGroupInstances($options = [])
 * @method CreateMyGroups createMyGroups($options = [])
 * @method ListMyGroupInstances listMyGroupInstances($options = [])
 * @method DeleteMyGroups deleteMyGroups($options = [])
 * @method UpdateMyGroups updateMyGroups($options = [])
 * @method UpdateMyGroupInstances updateMyGroupInstances($options = [])
 * @method PutSystemEvent putSystemEvent($options = [])
 * @method PutCustomMetric putCustomMetric($options = [])
 * @method QueryCustomMetricList queryCustomMetricList($options = [])
 * @method DeleteCustomMetric deleteCustomMetric($options = [])
 * @method TjmListNotifyPolicy tjmListNotifyPolicy($options = [])
 * @method TjmGetNotifyPolicy tjmGetNotifyPolicy($options = [])
 * @method TjmDeleteNotifyPolicy tjmDeleteNotifyPolicy($options = [])
 * @method TjmCreateNotifyPolicy tjmCreateNotifyPolicy($options = [])
 * @method ListNotifyPolicy listNotifyPolicy($options = [])
 * @method GetNotifyPolicy getNotifyPolicy($options = [])
 * @method DescribeAlarmHistory describeAlarmHistory($options = [])
 * @method DeleteNotifyPolicy deleteNotifyPolicy($options = [])
 * @method CreateNotifyPolicy createNotifyPolicy($options = [])
 * @method PutEvent putEvent($options = [])
 * @method EventCustomPopUpload eventCustomPopUpload($options = [])
 * @method AccessKeyGenerate accessKeyGenerate($options = [])
 * @method UpdateAlarm updateAlarm($options = [])
 * @method QueryMetricList queryMetricList($options = [])
 * @method QueryMetricLast queryMetricLast($options = [])
 * @method PutMetricData putMetricData($options = [])
 * @method ProfileSet profileSet($options = [])
 * @method ProfileGet profileGet($options = [])
 * @method NodeUninstall nodeUninstall($options = [])
 * @method NodeStatusList nodeStatusList($options = [])
 * @method NodeStatus nodeStatus($options = [])
 * @method NodeProcesses nodeProcesses($options = [])
 * @method NodeProcessDelete nodeProcessDelete($options = [])
 * @method NodeProcessCreate nodeProcessCreate($options = [])
 * @method NodeList nodeList($options = [])
 * @method NodeInstall nodeInstall($options = [])
 * @method ListContactGroup listContactGroup($options = [])
 * @method ListAlarmHistory listAlarmHistory($options = [])
 * @method ListAlarm listAlarm($options = [])
 * @method EnableAlarm enableAlarm($options = [])
 * @method DisableAlarm disableAlarm($options = [])
 * @method DeleteAlarm deleteAlarm($options = [])
 * @method CreateAlarm createAlarm($options = [])
 * @method AccessKeyGet accessKeyGet($options = [])
 */
class V20170301
{
    use ApiResolverTrait;
}

/**
 * @method string getCountry
 * @method self withCountry(string $country)
 * @method bool getInterrupt
 * @method self withInterrupt(bool $interrupt)
 * @method string getInvoker
 * @method self withInvoker(string $invoker)
 * @method string getPk
 * @method self withPk(string $pk)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method int getHid
 * @method self withHid(int $hid)
 * @method string getTaskIdentifier
 * @method self withTaskIdentifier(string $taskIdentifier)
 * @method string getTaskExtraData
 * @method self withTaskExtraData(string $taskExtraData)
 * @method string getGmtWakeup
 * @method self withGmtWakeup(string $gmtWakeup)
 * @method bool getSuccess
 * @method self withSuccess(bool $success)
 * @method string getMessage
 * @method self withMessage(string $message)
 * @method int getLevel
 * @method self withLevel(int $level)
 * @method string getUrl
 * @method self withUrl(string $url)
 * @method string getPrompt
 * @method self withPrompt(string $prompt)
 */
class DoCheckResource extends Roa
{
    use R;
}

/**
 * @method bool getInterrupt
 * @method self withInterrupt(bool $interrupt)
 * @method string getInvoker
 * @method self withInvoker(string $invoker)
 * @method string getPk
 * @method self withPk(string $pk)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method int getHid
 * @method self withHid(int $hid)
 * @method string getCountry
 * @method self withCountry(string $country)
 * @method string getTaskIdentifier
 * @method self withTaskIdentifier(string $taskIdentifier)
 * @method string getTaskExtraData
 * @method self withTaskExtraData(string $taskExtraData)
 * @method string getGmtWakeup
 * @method self withGmtWakeup(string $gmtWakeup)
 * @method bool getSuccess
 * @method self withSuccess(bool $success)
 * @method string getMessage
 * @method self withMessage(string $message)
 */
class DoLogicalDeleteResource extends Roa
{
    use R;
}

/**
 * @method int getHid
 * @method self withHid(int $hid)
 * @method bool getInterrupt
 * @method self withInterrupt(bool $interrupt)
 * @method string getInvoker
 * @method self withInvoker(string $invoker)
 * @method string getPk
 * @method self withPk(string $pk)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method string getCountry
 * @method self withCountry(string $country)
 * @method string getTaskIdentifier
 * @method self withTaskIdentifier(string $taskIdentifier)
 * @method string getTaskExtraData
 * @method self withTaskExtraData(string $taskExtraData)
 * @method string getGmtWakeup
 * @method self withGmtWakeup(string $gmtWakeup)
 * @method bool getSuccess
 * @method self withSuccess(bool $success)
 * @method string getMessage
 * @method self withMessage(string $message)
 */
class DoPhysicalDeleteResource extends Roa
{
    use R;
}

/**
 * @method string getPeriod
 * @method self withPeriod(string $period)
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
 * @method string getNoEffectiveInterval
 * @method self withNoEffectiveInterval(string $noEffectiveInterval)
 * @method Integer getSilenceTime
 * @method self withSilenceTime(Integer $silenceTime)
 * @method string getWebhook
 * @method self withWebhook(string $webhook)
 * @method string getDisplayName
 * @method self withDisplayName(string $displayName)
 * @method string getDescription
 * @method self withDescription(string $description)
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
 * @method string getAlertState
 * @method self withAlertState(string $alertState)
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
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 */
class DescribeAlarmsForDimensions extends Roa
{
    use R;
}

/**
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
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
 * @method string getTaskType
 * @method self withTaskType(string $taskType)
 * @method int getId
 * @method self withId(int $id)
 * @method string getTaskName
 * @method self withTaskName(string $taskName)
 * @method string getTaskScope
 * @method self withTaskScope(string $taskScope)
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
 * @method string getTaskType
 * @method self withTaskType(string $taskType)
 * @method string getTaskName
 * @method self withTaskName(string $taskName)
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
 * @method string getCommandJson
 * @method self withCommandJson(string $commandJson)
 */
class PutUserResourceCommand extends Roa
{
    use R;
}

/**
 * @method string getQueryJson
 * @method self withQueryJson(string $queryJson)
 */
class QueryUserCrmInfo extends Roa
{
    use R;
}

/**
 * @method string getQueryJson
 * @method self withQueryJson(string $queryJson)
 */
class QueryUsedResourceCount extends Roa
{
    use R;
}

/**
 * @method string getUserId
 * @method self withUserId(string $userId)
 */
class QueryBasicAccountInfo extends Roa
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 */
class CmsPayVerify extends Roa
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 */
class CmsPayRefund extends Roa
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 */
class CmsPayCallBack extends Roa
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
 * @method string getProduct
 * @method self withProduct(string $product)
 * @method string getUserId
 * @method self withUserId(string $userId)
 */
class DisableActiveAlert extends Roa
{
    use R;
}

class ListProductOfActiveAlert extends Roa
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
class DisableActiceAlert extends Roa
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
class QuerySystemEventCount extends Roa
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
 * @method string getQueryJson
 * @method self withQueryJson(string $queryJson)
 */
class QueryCustomEventDetail extends Roa
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
 * @method string getInstanceRegionId
 * @method self withInstanceRegionId(string $instanceRegionId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getCategory
 * @method self withCategory(string $category)
 * @method string getKey
 * @method self withKey(string $key)
 * @method string getProperties
 * @method self withProperties(string $properties)
 */
class CreateInstances extends Roa
{
    use R;
}

/**
 * @method string getInstanceRegionId
 * @method self withInstanceRegionId(string $instanceRegionId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getCategory
 * @method self withCategory(string $category)
 * @method string getKey
 * @method self withKey(string $key)
 * @method string getProperties
 * @method self withProperties(string $properties)
 */
class UpdateInstances extends Roa
{
    use R;
}

/**
 * @method string getInstanceRegionId
 * @method self withInstanceRegionId(string $instanceRegionId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getCategory
 * @method self withCategory(string $category)
 * @method string getKey
 * @method self withKey(string $key)
 * @method string getProperties
 * @method self withProperties(string $properties)
 */
class DeleteInstances extends Roa
{
    use R;
}

/**
 * @method bool getSelectContactGroups
 * @method self withSelectContactGroups(bool $selectContactGroups)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getType
 * @method self withType(string $type)
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
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getType
 * @method self withType(string $type)
 * @method bool getSelectContactGroups
 * @method self withSelectContactGroups(bool $selectContactGroups)
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
 * @method bool getTotal
 * @method self withTotal(bool $total)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getCategory
 * @method self withCategory(string $category)
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
 */
class DeleteMyGroupInstances extends Roa
{
    use R;
}

/**
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method int getServiceId
 * @method self withServiceId(int $serviceId)
 * @method string getBindUrl
 * @method self withBindUrl(string $bindUrl)
 * @method string getType
 * @method self withType(string $type)
 * @method string getContactGroups
 * @method self withContactGroups(string $contactGroups)
 */
class CreateMyGroups extends Roa
{
    use R;
}

/**
 * @method bool getTotal
 * @method self withTotal(bool $total)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getCategory
 * @method self withCategory(string $category)
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
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method int getServiceId
 * @method self withServiceId(int $serviceId)
 * @method string getBindUrls
 * @method self withBindUrls(string $bindUrls)
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
 * @method string getEventInfo
 * @method self withEventInfo(string $eventInfo)
 */
class PutSystemEvent extends Roa
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
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getMetricName
 * @method self withMetricName(string $metricName)
 * @method string getDimension
 * @method self withDimension(string $dimension)
 * @method string getMd5
 * @method self withMd5(string $md5)
 * @method string getUUID
 * @method self withUUID(string $uUID)
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
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getService
 * @method self withService(string $service)
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getPolicyType
 * @method self withPolicyType(string $policyType)
 * @method string getId
 * @method self withId(string $id)
 */
class TjmListNotifyPolicy extends Roa
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getService
 * @method self withService(string $service)
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getPolicyType
 * @method self withPolicyType(string $policyType)
 * @method string getId
 * @method self withId(string $id)
 */
class TjmGetNotifyPolicy extends Roa
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getService
 * @method self withService(string $service)
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getType
 * @method self withType(string $type)
 * @method string getId
 * @method self withId(string $id)
 */
class TjmDeleteNotifyPolicy extends Roa
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getService
 * @method self withService(string $service)
 * @method string getCluster
 * @method self withCluster(string $cluster)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getPolicyType
 * @method self withPolicyType(string $policyType)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 */
class TjmCreateNotifyPolicy extends Roa
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
 */
class ListNotifyPolicy extends Roa
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
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 */
class GetNotifyPolicy extends Roa
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
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getPolicyType
 * @method self withPolicyType(string $policyType)
 * @method string getId
 * @method self withId(string $id)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 */
class DeleteNotifyPolicy extends Roa
{
    use R;
}

/**
 * @method string getDimensions
 * @method self withDimensions(string $dimensions)
 * @method string getPolicyType
 * @method self withPolicyType(string $policyType)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method string getAlertName
 * @method self withAlertName(string $alertName)
 */
class CreateNotifyPolicy extends Roa
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
 * @method string getEventInfo
 * @method self withEventInfo(string $eventInfo)
 */
class EventCustomPopUpload extends Roa
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
 * @method string getWebhook
 * @method self withWebhook(string $webhook)
 */
class UpdateAlarm extends Roa
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
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method int getUserId
 * @method self withUserId(int $userId)
 * @method string getHostName
 * @method self withHostName(string $hostName)
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 * @method string getSerialNumbers
 * @method self withSerialNumbers(string $serialNumbers)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
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
 * @method string getName
 * @method self withName(string $name)
 * @method string getcallbycmsowner
 * @method self withcallbycmsowner(string $callbycmsowner)
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
 */
class CreateAlarm extends Roa
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
