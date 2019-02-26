<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getProductKey
 * @method self withProductKey
 */
final class RelateProduct extends RpcRequest
{
}

final class GetArrears extends RpcRequest
{
}

final class GetLVCategoryList extends RpcRequest
{
}

final class CheckLVCloudProductOpened extends RpcRequest
{
}

/**
 * @method string getCategoryKey
 * @method self withCategoryKey
 * @method string getProductName
 * @method self withProductName
 * @method Integer getRelated
 * @method self withRelated
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class GetProductListByRelation extends RpcRequest
{
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getAppId
 * @method self withAppId
 */
final class QueryApiServices extends RpcRequest
{
}

/**
 * @method Json getServiceIds
 * @method self withServiceIds
 * @method string getAppId
 * @method self withAppId
 */
final class GrantApiServices extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 */
final class CreateLdpApp extends RpcRequest
{
}

/**
 * @method string getAppId
 * @method self withAppId
 * @method string getName
 * @method self withName
 * @method string getDescription
 * @method self withDescription
 */
final class UpdateLdpApp extends RpcRequest
{
}

/**
 * @method string getAppId
 * @method self withAppId
 */
final class DeleteLdpApp extends RpcRequest
{
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryLdpAppsList extends RpcRequest
{
}

/**
 * @method string getDisplayName
 * @method self withDisplayName
 * @method string getDataAssetUid
 * @method self withDataAssetUid
 * @method string getDataAssetName
 * @method self withDataAssetName
 * @method string getDataAssetType
 * @method self withDataAssetType
 * @method Long getStartHoldingTime
 * @method self withStartHoldingTime
 * @method Integer getHoldingCycleValue
 * @method self withHoldingCycleValue
 * @method string getHoldingCycleUnits
 * @method self withHoldingCycleUnits
 */
final class ApplyDataAsset extends RpcRequest
{
}

/**
 * @method string getDataAssetId
 * @method self withDataAssetId
 * @method Integer getHoldingCycleValue
 * @method self withHoldingCycleValue
 * @method string getHoldingCycleUnits
 * @method self withHoldingCycleUnits
 */
final class UpdateDataAsset extends RpcRequest
{
}

/**
 * @method string getDataAssetUid
 * @method self withDataAssetUid
 * @method string getDataAssetName
 * @method self withDataAssetName
 * @method string getDataAssetType
 * @method self withDataAssetType
 * @method Json getPage
 * @method self withPage
 * @method Json getOrder
 * @method self withOrder
 */
final class GetDataAssetList extends RpcRequest
{
}

/**
 * @method string getDataAssetUid
 * @method self withDataAssetUid
 */
final class DeleteDataAsset extends RpcRequest
{
}

/**
 * @method string getFolderName
 * @method self withFolderName
 * @method string getParentFolderId
 * @method self withParentFolderId
 */
final class CreateJobFolder extends RpcRequest
{
}

/**
 * @method string getFolderId
 * @method self withFolderId
 * @method string getNewFolderName
 * @method self withNewFolderName
 */
final class RenameJobFolder extends RpcRequest
{
}

/**
 * @method string getFolderId
 * @method self withFolderId
 */
final class TryToDeleteJobFolderIfNecessarily extends RpcRequest
{
}

final class GetQueryJobFolderTree extends RpcRequest
{
}

/**
 * @method string getFolderId
 * @method self withFolderId
 */
final class DeleteJobFolder extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNo
 * @method self withPageNo
 */
final class GetUserSourceTableList extends RpcRequest
{
}

/**
 * @method string getAbilityType
 * @method self withAbilityType
 * @method string getProductKey
 * @method self withProductKey
 */
final class GetProductAbilityTableList extends RpcRequest
{
}

/**
 * @method string getSourceUid
 * @method self withSourceUid
 * @method string getTableName
 * @method self withTableName
 */
final class GetSourceOverviewData extends RpcRequest
{
}

/**
 * @method string getJobName
 * @method self withJobName
 * @method string getSqlStatement
 * @method self withSqlStatement
 * @method string getFolderId
 * @method self withFolderId
 * @method string getServiceRank
 * @method self withServiceRank
 */
final class CreateQueryJobBySQL extends RpcRequest
{
}

/**
 * @method string getTableName
 * @method self withTableName
 */
final class GetProductAbilityOverviewData extends RpcRequest
{
}

/**
 * @method string getSqlStatement
 * @method self withSqlStatement
 * @method string getServiceRank
 * @method self withServiceRank
 */
final class ValidateSqlStatement extends RpcRequest
{
}

/**
 * @method Json getPage
 * @method self withPage
 * @method Boolean getAsyncExecution
 * @method self withAsyncExecution
 * @method string getJobId
 * @method self withJobId
 */
final class SyncExecQueryJob extends RpcRequest
{
}

/**
 * @method string getJobId
 * @method self withJobId
 */
final class CancelQueryJob extends RpcRequest
{
}

/**
 * @method string getRequestIdX
 * @method self withRequestIdX
 */
final class GetQueryJobExecLog extends RpcRequest
{
}

/**
 * @method string getJobId
 * @method self withJobId
 */
final class DeleteQueryJob extends RpcRequest
{
}

/**
 * @method string getJobId
 * @method self withJobId
 * @method string getNewJobName
 * @method self withNewJobName
 */
final class RenameQueryJob extends RpcRequest
{
}

/**
 * @method string getAsyncRequestId
 * @method self withAsyncRequestId
 * @method string getJobId
 * @method self withJobId
 */
final class AsyncExecuteQueryJobForDownload extends RpcRequest
{
}

/**
 * @method string getSqlStatement
 * @method self withSqlStatement
 * @method string getJobId
 * @method self withJobId
 */
final class UpdateQueryJob extends RpcRequest
{
}

/**
 * @method string getAbilityType
 * @method self withAbilityType
 * @method string getProductKey
 * @method self withProductKey
 */
final class RefreshProductAbilityTableList extends RpcRequest
{
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getJunior
 * @method self withJunior
 * @method string getProductName
 * @method self withProductName
 */
final class GetAvailableProductList extends RpcRequest
{
}

/**
 * @method string getJobId
 * @method self withJobId
 */
final class GetQueryJob extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 */
final class GetAppPermissionList extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getPodName
 * @method self withPodName
 * @method string getContainer
 * @method self withContainer
 * @method Integer getTailLines
 * @method self withTailLines
 */
final class GetPodContainerLog extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 */
final class GetAppOperatingInfo extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getPublishStatus
 * @method self withPublishStatus
 */
final class UpdateSaaSAppPublishStatus extends RpcRequest
{
}

/**
 * @method string getMetaCode
 * @method self withMetaCode
 * @method string getNodeId
 * @method self withNodeId
 */
final class GetAppUploadPath extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getPodName
 * @method self withPodName
 */
final class GetNamespacedPodEvent extends RpcRequest
{
}

/**
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryAuthorizedAppList extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QueryDebugOnlineLogContent extends RpcRequest
{
}

final class QuerySolutionInstance extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotInstanceName
 * @method self withIotInstanceName
 */
final class ModifySolutionInstance extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 */
final class GetSolutionInstance extends RpcRequest
{
}

/**
 * @method string getProjectName
 * @method self withProjectName
 * @method string getDescription
 * @method self withDescription
 */
final class CreateProject extends RpcRequest
{
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryProjectsList extends RpcRequest
{
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getProjectId
 * @method self withProjectId
 * @method Json getSort
 * @method self withSort
 */
final class QueryMobileAppsList extends RpcRequest
{
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getProjectId
 * @method self withProjectId
 * @method Json getSort
 * @method self withSort
 */
final class QueryWebAppsList extends RpcRequest
{
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getProjectId
 * @method self withProjectId
 * @method Json getSort
 * @method self withSort
 */
final class QueryServicesList extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getConfigName
 * @method self withConfigName
 * @method string getPayload
 * @method self withPayload
 */
final class DeployCustomConfigToEdgeInstance extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class UnbindGatewayFromEdgeInstance extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getRuleId
 * @method self withRuleId
 */
final class EnableEdgeInstanceAutomationRule extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryEdgeInstanceHistoricDeployment extends RpcRequest
{
}

/**
 * @method string getFunctionId
 * @method self withFunctionId
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 */
final class QueryEdgeInstanceByFunction extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getDeployId
 * @method self withDeployId
 */
final class QueryEdgeInstanceDeployment extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getRuleId
 * @method self withRuleId
 */
final class DisableEdgeInstanceAutomationRule extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getRuleIds
 * @method self withRuleIds
 */
final class BatchGetEdgeInstanceAutomationRule extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 */
final class GetEdgeInstanceByName extends RpcRequest
{
}

/**
 * @method string getRuleName
 * @method self withRuleName
 * @method string getRuleContent
 * @method self withRuleContent
 * @method string getRuleDescription
 * @method self withRuleDescription
 * @method string getRuleType
 * @method self withRuleType
 */
final class CreateFlowRule extends RpcRequest
{
}

/**
 * @method string getRuleId
 * @method self withRuleId
 * @method string getRuleName
 * @method self withRuleName
 * @method string getRuleContent
 * @method self withRuleContent
 * @method string getRuleDescription
 * @method self withRuleDescription
 */
final class UpdateFlowRule extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getTags
 * @method self withTags
 * @method string getSource
 * @method self withSource
 */
final class CreateEdgeClusterInstance extends RpcRequest
{
}

/**
 * @method Long getStartDay
 * @method self withStartDay
 * @method Integer getSustainDays
 * @method self withSustainDays
 */
final class QueryMeasureList extends RpcRequest
{
}

/**
 * @method Long getStartDay
 * @method self withStartDay
 * @method Integer getSustainDays
 * @method self withSustainDays
 */
final class QueryMeasureSummary extends RpcRequest
{
}

/**
 * @method Long getStartDay
 * @method self withStartDay
 * @method Integer getSustainDays
 * @method self withSustainDays
 * @method Integer getTopCount
 * @method self withTopCount
 */
final class QueryMeasureTop extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class GetRemoteDebugServiceMeta extends RpcRequest
{
}

/**
 * @method string getSceneId
 * @method self withSceneId
 */
final class ImportDemoScene extends RpcRequest
{
}

/**
 * @method Long getTimeFrame
 * @method self withTimeFrame
 * @method string getSceneId
 * @method self withSceneId
 * @method string getIotInfos
 * @method self withIotInfos
 */
final class GetDeviceEventsForBim extends RpcRequest
{
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getProductKey
 * @method self withProductKey
 * @method string getStatus
 * @method self withStatus
 * @method string getGroupId
 * @method self withGroupId
 * @method Long getTimeFrame
 * @method self withTimeFrame
 */
final class QueryGeoMultiDeviceEventsByPage extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIotId
 * @method self withIotId
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class GetGatewayBySubDeviceBiz extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class RemoveThingTopoBiz extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class GetDeviceStatusBiz extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductName
 * @method self withProductName
 * @method Integer getNodeType
 * @method self withNodeType
 * @method Integer getDataFormat
 * @method self withDataFormat
 * @method string getDescription
 * @method self withDescription
 * @method string getAliyunCommodityCode
 * @method self withAliyunCommodityCode
 * @method Boolean getId2
 * @method self withId2
 * @method Long getCategoryId
 * @method self withCategoryId
 * @method string getProtocolType
 * @method self withProtocolType
 * @method string getNetType
 * @method self withNetType
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class CreateProductBiz extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getProductName
 * @method self withProductName
 * @method string getDescription
 * @method self withDescription
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class UpdateProductBiz extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class EnableThingBiz extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class DisableThingBiz extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QueryDeviceDetailBiz extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getEventType
 * @method self withEventType
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getAsc
 * @method self withAsc
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QueryDeviceEventDataBiz extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getAsc
 * @method self withAsc
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QueryDeviceServiceDataBiz extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QueryDevicePropBiz extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class DeleteProductBiz extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QueryDevicePropertyStatusBiz extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getAsc
 * @method self withAsc
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QueryDevicePropertyDataBiz extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QueryProductTopicBiz extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getTopicShortName
 * @method self withTopicShortName
 * @method string getOperation
 * @method self withOperation
 * @method string getDesc
 * @method self withDesc
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class CreateProductTopicBiz extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getDesc
 * @method self withDesc
 * @method string getOperation
 * @method self withOperation
 * @method string getTopicShortName
 * @method self withTopicShortName
 * @method string getTopicId
 * @method self withTopicId
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class UpdateProductTopicBiz extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getTopicId
 * @method self withTopicId
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class DeleteProductTopicBiz extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QueryProductBiz extends RpcRequest
{
}

/**
 * @method Long getDataSourceId
 * @method self withDataSourceId
 * @method Long getTaskId
 * @method self withTaskId
 * @method Json getPage
 * @method self withPage
 * @method Json getTableName
 * @method self withTableName
 */
final class ListTables extends RpcRequest
{
}

/**
 * @method Long getDataSourceId
 * @method self withDataSourceId
 * @method Long getTaskId
 * @method self withTaskId
 * @method string getTableName
 * @method self withTableName
 * @method string getColumnType
 * @method self withColumnType
 * @method Boolean getIsPrimary
 * @method self withIsPrimary
 */
final class ListColumns extends RpcRequest
{
}

/**
 * @method Long getTaskId
 * @method self withTaskId
 * @method string getViewName
 * @method self withViewName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceList
 * @method self withDeviceList
 */
final class SaveSqlTaskView extends RpcRequest
{
}

/**
 * @method Long getTaskId
 * @method self withTaskId
 * @method string getViewName
 * @method self withViewName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceList
 * @method self withDeviceList
 * @method Long getId
 * @method self withId
 */
final class UpdateSqlTaskView extends RpcRequest
{
}

/**
 * @method Long getTaskId
 * @method self withTaskId
 * @method Json getPage
 * @method self withPage
 * @method Long getId
 * @method self withId
 */
final class ListSqlTaskView extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method Long getTaskId
 * @method self withTaskId
 */
final class DeleteSqlTaskView extends RpcRequest
{
}

/**
 * @method Long getTaskId
 * @method self withTaskId
 * @method string getComponents
 * @method self withComponents
 * @method string getParams
 * @method self withParams
 */
final class PreviewTaskSql extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method RepeatList getProductTag
 * @method self withProductTag
 */
final class CreateProductTags extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method RepeatList getProductTag
 * @method self withProductTag
 */
final class UpdateProductTags extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method RepeatList getProductTagKey
 * @method self withProductTagKey
 */
final class DeleteProductTags extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class ListProductTags extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method RepeatList getProductTag
 * @method self withProductTag
 */
final class ListProductByTags extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method RepeatList getTag
 * @method self withTag
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryDeviceGroupByTags extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getTslUrl
 * @method self withTslUrl
 */
final class ImportTslFromOss extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 */
final class GenerateOssUriForTsl extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getMethod
 * @method self withMethod
 * @method string getPlatform
 * @method self withPlatform
 * @method string getProjectId
 * @method self withProjectId
 * @method Json getParams
 * @method self withParams
 */
final class LpPortalAccessService extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getAppConfigVersionUuid
 * @method self withAppConfigVersionUuid
 */
final class UpgradeApp extends RpcRequest
{
}

/**
 * @method string getConfigUuid
 * @method self withConfigUuid
 * @method string getVersionName
 * @method self withVersionName
 * @method string getDescription
 * @method self withDescription
 * @method RepeatList getNodeImageList
 * @method self withNodeImageList
 */
final class SaveImageUpgradeConfigVersion extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getServiceName
 * @method self withServiceName
 */
final class QueryAppResourceConfig extends RpcRequest
{
}

/**
 * @method string getConfigureUuid
 * @method self withConfigureUuid
 */
final class PublishImageUpgradeConfigVersion extends RpcRequest
{
}

/**
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getConfigUuid
 * @method self withConfigUuid
 * @method string getAppUuid
 * @method self withAppUuid
 */
final class ListConfigVersion extends RpcRequest
{
}

/**
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getConfigUuid
 * @method self withConfigUuid
 * @method string getConfigVersionUuid
 * @method self withConfigVersionUuid
 */
final class ListConfigNodeImage extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getName
 * @method self withName
 */
final class IsOperable extends RpcRequest
{
}

/**
 * @method string getAppConfigId
 * @method self withAppConfigId
 */
final class GetServiceNameAndPort extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getName
 * @method self withName
 */
final class GetOperationIngress extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 */
final class GetDomainNameConfig extends RpcRequest
{
}

/**
 * @method string getType
 * @method self withType
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getServiceName
 * @method self withServiceName
 * @method string getCpuCapacityLimit
 * @method self withCpuCapacityLimit
 * @method string getMemCapacityLimit
 * @method self withMemCapacityLimit
 * @method string getCpuCapacityRequest
 * @method self withCpuCapacityRequest
 * @method string getMemCapacityRequest
 * @method self withMemCapacityRequest
 * @method Integer getReplicaCount
 * @method self withReplicaCount
 */
final class ExpandAppResource extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getName
 * @method self withName
 * @method Long getExpireInterval
 * @method self withExpireInterval
 */
final class EnableOperationIngress extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getName
 * @method self withName
 */
final class DisableOperationIngress extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getDomain
 * @method self withDomain
 * @method string getCertBody
 * @method self withCertBody
 * @method string getCertKey
 * @method self withCertKey
 * @method string getCertName
 * @method self withCertName
 */
final class BindAppDomain extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class QueryEdgeInstanceDeviceByName extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class GetRemoteDebugToken extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getFirmwareName
 * @method self withFirmwareName
 */
final class QueryDeviceUpgradeCount extends RpcRequest
{
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getDeviceGroupId
 * @method self withDeviceGroupId
 * @method string getStatus
 * @method self withStatus
 * @method string getGeoProjectId
 * @method self withGeoProjectId
 * @method Json getProductAttributesMap
 * @method self withProductAttributesMap
 */
final class QueryGeoDevicePropertyByPage extends RpcRequest
{
}

/**
 * @method string getLocatingInfo
 * @method self withLocatingInfo
 */
final class LocateDeviceByFingerprint extends RpcRequest
{
}

/**
 * @method string getSceneId
 * @method self withSceneId
 * @method string getPhones
 * @method self withPhones
 * @method Long getExpiredTime
 * @method self withExpiredTime
 * @method string getSysCode
 * @method self withSysCode
 */
final class SaveShareInfo extends RpcRequest
{
}

/**
 * @method string getSceneId
 * @method self withSceneId
 */
final class GetShareInfo extends RpcRequest
{
}

/**
 * @method Integer getLicenseType
 * @method self withLicenseType
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryLinkFaceLicense extends RpcRequest
{
}

/**
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryLinkFaceActiveCodeInfo extends RpcRequest
{
}

/**
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getCategoryName
 * @method self withCategoryName
 */
final class QueryLinkFaceProductInfo extends RpcRequest
{
}

/**
 * @method RepeatList getProductKeys
 * @method self withProductKeys
 */
final class QueryLinkFaceConsumerByCodes extends RpcRequest
{
}

/**
 * @method Long getNum
 * @method self withNum
 */
final class BuyLinkFaceLicenseToBusiness extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 */
final class OpenLinkFaceService extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getGwProductKey
 * @method self withGwProductKey
 * @method string getGwDeviceName
 * @method self withGwDeviceName
 * @method Json getExt
 * @method self withExt
 * @method RepeatList getTopoAddItem
 * @method self withTopoAddItem
 */
final class BatchAddThingTopo extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getGroupId
 * @method self withGroupId
 */
final class QueryDeviceListByDeviceGroup extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method RepeatList getIdentifier
 * @method self withIdentifier
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getAsc
 * @method self withAsc
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryDevicePropertiesData extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getStatus
 * @method self withStatus
 * @method Integer getTtl
 * @method self withTtl
 * @method string getLogLevel
 * @method self withLogLevel
 */
final class UpdateEdgeInstanceSls extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Long getRouteId
 * @method self withRouteId
 * @method string getTopicFilter
 * @method self withTopicFilter
 * @method string getSourceType
 * @method self withSourceType
 * @method string getSourceData
 * @method self withSourceData
 * @method string getTargetType
 * @method self withTargetType
 * @method string getTargetData
 * @method self withTargetData
 * @method Integer getTargetIotHubQos
 * @method self withTargetIotHubQos
 */
final class UpdateEdgeInstanceMessageRoute extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class UnbindRoleFromEdgeInstance extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class BindDeviceToEdgeInstance extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getName
 * @method self withName
 * @method string getTags
 * @method self withTags
 */
final class UpdateEdgeInstance extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryEdgeInstanceDeployDetail extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getFunctionId
 * @method self withFunctionId
 */
final class UnbindFunctionFromEdgeInstance extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class QueryDeviceDebugStatus extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class ResetEdgeInstanceDeployments extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getFunctionName
 * @method self withFunctionName
 */
final class QueryEdgeInstanceFunction extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getStartTime
 * @method self withStartTime
 * @method Integer getEndTime
 * @method self withEndTime
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getProject
 * @method self withProject
 * @method string getLogStore
 * @method self withLogStore
 * @method string getQuery
 * @method self withQuery
 */
final class GetEdgeInstanceLogs extends RpcRequest
{
}

/**
 * @method string getRuleName
 * @method self withRuleName
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 */
final class QueryAutomationRule extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryEdgeInstanceMessageRoute extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getStreamGuId
 * @method self withStreamGuId
 */
final class UnbindStreamFromEdgeInstance extends RpcRequest
{
}

/**
 * @method string getRuleIds
 * @method self withRuleIds
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class BatchGetEdgeInstanceAutomationRuleRelRuleStatus extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getDeviceType
 * @method self withDeviceType
 */
final class UnbindDeviceFromEdgeInstance extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getRuleId
 * @method self withRuleId
 */
final class UnbindAutomationRuleFromEdgeInstance extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class GetEdgeInstanceByGateway extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryEdgeInstanceAutomationRule extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Long getRouteId
 * @method self withRouteId
 */
final class GetEdgeInstanceMessageRoute extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class GetEdgeInstance extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getGwProductKey
 * @method self withGwProductKey
 * @method string getGwDeviceName
 * @method self withGwDeviceName
 */
final class CheckAndRemoveTopo extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getTopicFilter
 * @method self withTopicFilter
 * @method string getSourceType
 * @method self withSourceType
 * @method string getSourceData
 * @method self withSourceData
 * @method string getTargetType
 * @method self withTargetType
 * @method string getTargetData
 * @method self withTargetData
 * @method Integer getTargetIotHubQos
 * @method self withTargetIotHubQos
 */
final class CreateEdgeInstanceMessageRoute extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getDevices
 * @method self withDevices
 */
final class BatchGetEdgeInstanceDeviceStatus extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class GetEdgeInstanceSls extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class DeleteEdgeInstance extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getTags
 * @method self withTags
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class CreateEdgeInstance extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class GetCloudMonitorNode extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getFunctions
 * @method self withFunctions
 */
final class BatchGetEdgeInstanceFunctionStatus extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class QueryEdgeInstanceGateway extends RpcRequest
{
}

/**
 * @method string getRuleId
 * @method self withRuleId
 * @method Integer getStartTime
 * @method self withStartTime
 * @method Integer getEndTime
 * @method self withEndTime
 * @method string getStatus
 * @method self withStatus
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 */
final class QuerySummaryAutomationRuleLog extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryEdgeInstanceDevice extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryEdgeInstanceProduct extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class BindGatewayToEdgeInstance extends RpcRequest
{
}

/**
 * @method string getRuleId
 * @method self withRuleId
 * @method Integer getStartTime
 * @method self withStartTime
 * @method Integer getEndTime
 * @method self withEndTime
 * @method string getTraceId
 * @method self withTraceId
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 */
final class QueryDetailAutomationRuleLog extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getRoleArn
 * @method self withRoleArn
 * @method string getServiceName
 * @method self withServiceName
 * @method string getFunctionName
 * @method self withFunctionName
 * @method string getRunMode
 * @method self withRunMode
 * @method string getFcRegionId
 * @method self withFcRegionId
 * @method Integer getMemorySize
 * @method self withMemorySize
 * @method Integer getTimeout
 * @method self withTimeout
 * @method string getTriggerContent
 * @method self withTriggerContent
 */
final class BindFunctionToEdgeInstance extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class StartDeviceDebug extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getProject
 * @method self withProject
 * @method string getLogStore
 * @method self withLogStore
 * @method Integer getStatus
 * @method self withStatus
 * @method Integer getTtl
 * @method self withTtl
 * @method string getLogLevel
 * @method self withLogLevel
 */
final class CreateEdgeInstanceSls extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getStreamGuIds
 * @method self withStreamGuIds
 */
final class BatchGetEdgeInstanceStreamStatus extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method string getName
 * @method self withName
 * @method Integer getType
 * @method self withType
 */
final class QueryEdgeInstance extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getRuleId
 * @method self withRuleId
 */
final class BindAutomationRuleToEdgeInstance extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getStreamGuId
 * @method self withStreamGuId
 */
final class BindStreamToEdgeInstance extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryEdgeInstanceStream extends RpcRequest
{
}

/**
 * @method string getRuleIds
 * @method self withRuleIds
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class BatchGetEdgeInstanceAutomationRuleDeviceStatus extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method Integer getSwitchStatus
 * @method self withSwitchStatus
 */
final class UpdateCloudMonitorSwitch extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getRuleIds
 * @method self withRuleIds
 */
final class BatchGetEdgeInstanceAutomationRuleStatus extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Long getRouteId
 * @method self withRouteId
 */
final class DeleteEdgeInstanceMessageRoute extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method string getName
 * @method self withName
 * @method Integer getType
 * @method self withType
 */
final class QueryEdgeInstanceWithGateway extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class CreateEdgeInstanceDeployment extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getRoleArn
 * @method self withRoleArn
 * @method string getRoleName
 * @method self withRoleName
 */
final class BindRoleToEdgeInstance extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getFunctionId
 * @method self withFunctionId
 * @method string getRunMode
 * @method self withRunMode
 * @method Integer getMemorySize
 * @method self withMemorySize
 * @method Integer getTimeout
 * @method self withTimeout
 * @method string getTriggerContent
 * @method self withTriggerContent
 */
final class UpdateEdgeInstanceFunction extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getType
 * @method self withType
 * @method string getDriverName
 * @method self withDriverName
 */
final class QueryDriver extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getDriverId
 * @method self withDriverId
 */
final class SetEdgeInstanceDeviceDriver extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryDeviceVersionCountByPk extends RpcRequest
{
}

/**
 * @method string getNodeId
 * @method self withNodeId
 * @method string getTags
 * @method self withTags
 */
final class UpdateEdgeNode extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getServiceName
 * @method self withServiceName
 */
final class RebootApp extends RpcRequest
{
}

/**
 * @method string getDeviceType
 * @method self withDeviceType
 */
final class QueryAppUnifyProperty extends RpcRequest
{
}

/**
 * @method string getDeviceType
 * @method self withDeviceType
 */
final class QueryAppUnifyEvent extends RpcRequest
{
}

/**
 * @method string getHostingType
 * @method self withHostingType
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getClusterId
 * @method self withClusterId
 * @method string getPodName
 * @method self withPodName
 * @method string getContainerName
 * @method self withContainerName
 * @method string getNamespace
 * @method self withNamespace
 * @method string getServiceName
 * @method self withServiceName
 */
final class GetAppPodSession extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 */
final class QueryFirmwareList extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class GetNetStatusReport extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getGroupId
 * @method self withGroupId
 */
final class QuerySuperDeviceGroup extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method RepeatList getFirmware
 * @method self withFirmware
 */
final class BatchUpdateFirmware extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 */
final class BatchDeleteBlankProductKeyFirmware extends RpcRequest
{
}

/**
 * @method string getCaptureId
 * @method self withCaptureId
 * @method Integer getPictureType
 * @method self withPictureType
 * @method string getIotId
 * @method self withIotId
 */
final class QueryDevicePictureFile extends RpcRequest
{
}

/**
 * @method Long getBeginTime
 * @method self withBeginTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPictureType
 * @method self withPictureType
 * @method Integer getPictureSource
 * @method self withPictureSource
 * @method string getIotId
 * @method self withIotId
 */
final class QueryPictureFiles extends RpcRequest
{
}

/**
 * @method Integer getDay
 * @method self withDay
 * @method string getIotId
 * @method self withIotId
 */
final class SetDeviceRecordLifeCycle extends RpcRequest
{
}

/**
 * @method RepeatList getDeviceList
 * @method self withDeviceList
 */
final class QueryDeviceRecordLifeCycle extends RpcRequest
{
}

/**
 * @method Integer getEventType
 * @method self withEventType
 * @method Long getBeginTime
 * @method self withBeginTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getIotId
 * @method self withIotId
 */
final class QueryDeviceEvent extends RpcRequest
{
}

/**
 * @method Integer getStreamType
 * @method self withStreamType
 * @method Integer getBeginTime
 * @method self withBeginTime
 * @method Integer getEndTime
 * @method self withEndTime
 * @method Integer getRecordType
 * @method self withRecordType
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getIotId
 * @method self withIotId
 */
final class QueryRecord extends RpcRequest
{
}

/**
 * @method string getMonth
 * @method self withMonth
 * @method string getIotId
 * @method self withIotId
 */
final class QueryMonthRecord extends RpcRequest
{
}

/**
 * @method string getFileName
 * @method self withFileName
 * @method string getIotId
 * @method self withIotId
 */
final class QueryRecordUrl extends RpcRequest
{
}

/**
 * @method string getFileName
 * @method self withFileName
 * @method Boolean getShouldEncrypt
 * @method self withShouldEncrypt
 * @method Integer getEncryptType
 * @method self withEncryptType
 * @method string getIotId
 * @method self withIotId
 */
final class QueryDeviceFileVod extends RpcRequest
{
}

/**
 * @method Integer getDay
 * @method self withDay
 * @method string getIotId
 * @method self withIotId
 */
final class SetDevicePictureLifeCycle extends RpcRequest
{
}

/**
 * @method string getPlanId
 * @method self withPlanId
 * @method string getName
 * @method self withName
 * @method string getTemplateId
 * @method self withTemplateId
 */
final class UpdateRecordPlan extends RpcRequest
{
}

/**
 * @method string getTemplateId
 * @method self withTemplateId
 * @method string getName
 * @method self withName
 * @method Integer getAllDay
 * @method self withAllDay
 * @method RepeatList getTimeSections
 * @method self withTimeSections
 */
final class UpdateTimeTemplate extends RpcRequest
{
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryRecordPlans extends RpcRequest
{
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryTimeTemplate extends RpcRequest
{
}

/**
 * @method string getPlanId
 * @method self withPlanId
 */
final class DeleteRecordPlan extends RpcRequest
{
}

/**
 * @method string getPlanId
 * @method self withPlanId
 */
final class QueryRecordPlanDetail extends RpcRequest
{
}

/**
 * @method string getPlanId
 * @method self withPlanId
 * @method Integer getStreamType
 * @method self withStreamType
 * @method string getIotId
 * @method self withIotId
 */
final class AddRecordPlanDevice extends RpcRequest
{
}

/**
 * @method string getPlanId
 * @method self withPlanId
 * @method Integer getStreamType
 * @method self withStreamType
 * @method string getIotId
 * @method self withIotId
 */
final class UpdateRecordPlanDevice extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getEventTypes
 * @method self withEventTypes
 * @method Integer getPreRecordDuration
 * @method self withPreRecordDuration
 * @method Integer getRecordDuration
 * @method self withRecordDuration
 * @method string getTemplateId
 * @method self withTemplateId
 */
final class SetEventRecordPlan extends RpcRequest
{
}

/**
 * @method string getPlanId
 * @method self withPlanId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryRecordPlanDevices extends RpcRequest
{
}

/**
 * @method string getIotId
 * @method self withIotId
 */
final class QueryDevicePictureLifeCycle extends RpcRequest
{
}

/**
 * @method Integer getStreamType
 * @method self withStreamType
 * @method string getIotId
 * @method self withIotId
 */
final class DeleteRecordPlanDevice extends RpcRequest
{
}

/**
 * @method string getTemplateId
 * @method self withTemplateId
 */
final class QueryTimeTemplateDetail extends RpcRequest
{
}

/**
 * @method Integer getStreamType
 * @method self withStreamType
 * @method Boolean getShouldEncrypt
 * @method self withShouldEncrypt
 * @method Integer getEncryptType
 * @method self withEncryptType
 * @method string getIotId
 * @method self withIotId
 */
final class QueryLiveStreaming extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getTemplateId
 * @method self withTemplateId
 */
final class SetRecordPlan extends RpcRequest
{
}

/**
 * @method string getIotId
 * @method self withIotId
 */
final class TriggerCapturePicture extends RpcRequest
{
}

/**
 * @method string getPlanId
 * @method self withPlanId
 * @method string getName
 * @method self withName
 * @method string getEventTypes
 * @method self withEventTypes
 * @method Integer getPreRecordDuration
 * @method self withPreRecordDuration
 * @method Integer getRecordDuration
 * @method self withRecordDuration
 * @method string getTemplateId
 * @method self withTemplateId
 */
final class UpdateEventRecordPlan extends RpcRequest
{
}

/**
 * @method string getPlanId
 * @method self withPlanId
 * @method Integer getStreamType
 * @method self withStreamType
 * @method string getIotId
 * @method self withIotId
 */
final class AddEventRecordPlanDevice extends RpcRequest
{
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryEventRecordPlans extends RpcRequest
{
}

/**
 * @method string getPlanId
 * @method self withPlanId
 * @method Integer getStreamType
 * @method self withStreamType
 * @method string getIotId
 * @method self withIotId
 */
final class UpdateEventRecordPlanDevice extends RpcRequest
{
}

/**
 * @method string getPlanId
 * @method self withPlanId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryEventRecordPlanDevices extends RpcRequest
{
}

/**
 * @method string getTemplateId
 * @method self withTemplateId
 */
final class DeleteTimeTemplate extends RpcRequest
{
}

/**
 * @method RepeatList getProductKeyList
 * @method self withProductKeyList
 * @method string getDeviceName
 * @method self withDeviceName
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryDeviceList extends RpcRequest
{
}

/**
 * @method Integer getStreamType
 * @method self withStreamType
 * @method Integer getPreRecordDuration
 * @method self withPreRecordDuration
 * @method Integer getRecordDuration
 * @method self withRecordDuration
 * @method string getIotId
 * @method self withIotId
 */
final class TriggerRecord extends RpcRequest
{
}

final class GetDeviceProductList extends RpcRequest
{
}

/**
 * @method Integer getStreamType
 * @method self withStreamType
 * @method string getIotId
 * @method self withIotId
 */
final class QueryEventRecordPlanByDevice extends RpcRequest
{
}

/**
 * @method Integer getStreamType
 * @method self withStreamType
 * @method string getIotId
 * @method self withIotId
 */
final class QueryRecordPlanByDevice extends RpcRequest
{
}

/**
 * @method string getEventId
 * @method self withEventId
 * @method string getIotId
 * @method self withIotId
 */
final class QueryDeviceEventRecord extends RpcRequest
{
}

/**
 * @method string getPlanId
 * @method self withPlanId
 */
final class DeleteEventRecordPlan extends RpcRequest
{
}

/**
 * @method string getPlanId
 * @method self withPlanId
 */
final class QueryEventRecordPlanDetail extends RpcRequest
{
}

/**
 * @method string getEventId
 * @method self withEventId
 * @method string getIotId
 * @method self withIotId
 */
final class QueryDeviceEventPicture extends RpcRequest
{
}

/**
 * @method Integer getStreamType
 * @method self withStreamType
 * @method string getIotId
 * @method self withIotId
 */
final class DeleteEventRecordPlanDevice extends RpcRequest
{
}

/**
 * @method Integer getStreamType
 * @method self withStreamType
 * @method string getIotId
 * @method self withIotId
 */
final class StopLiveStreaming extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method Integer getAllDay
 * @method self withAllDay
 * @method RepeatList getTimeSections
 * @method self withTimeSections
 */
final class SetTimeTemplate extends RpcRequest
{
}

/**
 * @method Integer getStatus
 * @method self withStatus
 * @method string getIotId
 * @method self withIotId
 */
final class ModifyDeviceStatus extends RpcRequest
{
}

/**
 * @method RepeatList getIotIdList
 * @method self withIotIdList
 */
final class ActiveDevice extends RpcRequest
{
}

/**
 * @method Integer getLifeCycle
 * @method self withLifeCycle
 * @method string getIotId
 * @method self withIotId
 */
final class SetDeviceStorageLifeCycle extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method RepeatList getTag
 * @method self withTag
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryDeviceByTags extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getItems
 * @method self withItems
 */
final class SetDevicesProperty extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getArgs
 * @method self withArgs
 */
final class InvokeThingsService extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 */
final class UnregisterAppService extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getDomain
 * @method self withDomain
 * @method string getProtocol
 * @method self withProtocol
 * @method string getMethod
 * @method self withMethod
 * @method string getCreateInstanceUri
 * @method self withCreateInstanceUri
 * @method string getDeleteInstanceUri
 * @method self withDeleteInstanceUri
 * @method string getGetSsoUrlUri
 * @method self withGetSsoUrlUri
 * @method string getBindUserDeviceUri
 * @method self withBindUserDeviceUri
 * @method string getUnbindUserDeviceUri
 * @method self withUnbindUserDeviceUri
 */
final class RegisterAppService extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 */
final class ListAppServiceGroup extends RpcRequest
{
}

/**
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getKeyword
 * @method self withKeyword
 */
final class ListAppKey extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 */
final class GetRegisterAppService extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getAliyunPk
 * @method self withAliyunPk
 * @method string getTenantId
 * @method self withTenantId
 * @method string getTenantSubUserId
 * @method self withTenantSubUserId
 */
final class GetAppSsoUrl extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 */
final class GetAppSecret extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getServiceName
 * @method self withServiceName
 */
final class GetAppPodInfo extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 */
final class GetAppInstanceInfo extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 */
final class GetAppBaseInfo extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 */
final class DeleteAppKey extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getAliyunPk
 * @method self withAliyunPk
 */
final class DeleteAppInstance extends RpcRequest
{
}

/**
 * @method string getAppName
 * @method self withAppName
 * @method Integer getRegisterAppType
 * @method self withRegisterAppType
 */
final class CreateAppKey extends RpcRequest
{
}

/**
 * @method string getAppKey
 * @method self withAppKey
 * @method string getAliyunPk
 * @method self withAliyunPk
 */
final class CreateAppInstance extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method RepeatList getServiceIdList
 * @method self withServiceIdList
 */
final class AuthorizeAppkeyInvoke extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getServiceCode
 * @method self withServiceCode
 * @method Integer getAccessMethod
 * @method self withAccessMethod
 * @method RepeatList getServiceCodes
 * @method self withServiceCodes
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QueryUnimportedProducts extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductName
 * @method self withProductName
 * @method Integer getNodeType
 * @method self withNodeType
 * @method Integer getDataFormat
 * @method self withDataFormat
 * @method string getDescription
 * @method self withDescription
 * @method string getAliyunCommodityCode
 * @method self withAliyunCommodityCode
 * @method Boolean getId2
 * @method self withId2
 * @method Long getCategoryId
 * @method self withCategoryId
 * @method string getProtocolType
 * @method self withProtocolType
 * @method string getServiceCode
 * @method self withServiceCode
 * @method string getGroupId
 * @method self withGroupId
 * @method string getGroupType
 * @method self withGroupType
 * @method string getNetType
 * @method self withNetType
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class CreateProductInGroup extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getCategoryType
 * @method self withCategoryType
 * @method string getName
 * @method self withName
 */
final class ListPresentCategoryStdAbilityByName extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Long getEventId
 * @method self withEventId
 * @method Integer getEventType
 * @method self withEventType
 * @method string getEventName
 * @method self withEventName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getDescription
 * @method self withDescription
 * @method string getOutputData
 * @method self withOutputData
 * @method string getConfigCode
 * @method self withConfigCode
 * @method string getExtendConfig
 * @method self withExtendConfig
 */
final class UpdateProductStdEvent extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class ListProductStdAbility extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getCategoryType
 * @method self withCategoryType
 * @method string getName
 * @method self withName
 */
final class ListOtherCategoryStdAbilityByName extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getServiceId
 * @method self withServiceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getServiceName
 * @method self withServiceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getDescription
 * @method self withDescription
 * @method string getInputParams
 * @method self withInputParams
 * @method string getOutputParams
 * @method self withOutputParams
 * @method Integer getCallType
 * @method self withCallType
 * @method string getConfigCode
 * @method self withConfigCode
 * @method string getExtendConfig
 * @method self withExtendConfig
 */
final class UpdateProductStdService extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getCategoryType
 * @method self withCategoryType
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class ListCategoryStdAbility extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 */
final class SetLinkPlatformServiceOpen extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class ListAllCategory extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QueryProductAllInfo extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class ListProductCustomAbility extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Long getPropertyId
 * @method self withPropertyId
 * @method Integer getDataType
 * @method self withDataType
 * @method Integer getRwFlag
 * @method self withRwFlag
 * @method string getName
 * @method self withName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getDataSpecs
 * @method self withDataSpecs
 * @method string getDataSpecsList
 * @method self withDataSpecsList
 * @method string getDescription
 * @method self withDescription
 * @method string getDefinition
 * @method self withDefinition
 * @method string getConfigCode
 * @method self withConfigCode
 * @method string getExtendConfig
 * @method self withExtendConfig
 */
final class UpdateProductStdProperty extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method RepeatList getPropertyId
 * @method self withPropertyId
 * @method RepeatList getServiceId
 * @method self withServiceId
 * @method RepeatList getEventId
 * @method self withEventId
 */
final class BatchAddStdAbility extends RpcRequest
{
}

final class GetPortalJsUrlsConfigForBIM extends RpcRequest
{
}

/**
 * @method string getSceneId
 * @method self withSceneId
 */
final class ListAuthorizedPhoneNum extends RpcRequest
{
}

/**
 * @method string getSceneId
 * @method self withSceneId
 * @method string getPhone
 * @method self withPhone
 */
final class DeleteAuthorizedPhoneNum extends RpcRequest
{
}

/**
 * @method string getSceneId
 * @method self withSceneId
 * @method string getPhone
 * @method self withPhone
 * @method string getSysCode
 * @method self withSysCode
 */
final class RegisterPhoneNumToOa extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getGroupId
 * @method self withGroupId
 * @method string getTagString
 * @method self withTagString
 */
final class SetDeviceGroupTags extends RpcRequest
{
}

/**
 * @method string getGeoProjectId
 * @method self withGeoProjectId
 * @method string getGeoProjectName
 * @method self withGeoProjectName
 * @method string getGroupId
 * @method self withGroupId
 * @method string getGroupName
 * @method self withGroupName
 * @method string getMapConfig
 * @method self withMapConfig
 * @method string getGroupMethod
 * @method self withGroupMethod
 */
final class UpdateGeoProject extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNo
 * @method self withPageNo
 */
final class queryAppBindDeviceList extends RpcRequest
{
}

/**
 * @method string getAppConfigId
 * @method self withAppConfigId
 */
final class QueryAppVirtualDeviceConfig extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 */
final class DelAppVirtualDeviceConfig extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method string getAppConfigId
 * @method self withAppConfigId
 * @method string getFrequenceUnit
 * @method self withFrequenceUnit
 * @method Integer getFrequence
 * @method self withFrequence
 * @method Integer getDeviceNumber
 * @method self withDeviceNumber
 * @method string getTargetType
 * @method self withTargetType
 * @method string getTarget
 * @method self withTarget
 * @method string getTargetName
 * @method self withTargetName
 * @method string getPropertyPostRuleList
 * @method self withPropertyPostRuleList
 * @method string getEventPostRuleList
 * @method self withEventPostRuleList
 * @method RepeatList getDeviceTagList
 * @method self withDeviceTagList
 * @method string getName
 * @method self withName
 * @method Boolean getTaged
 * @method self withTaged
 */
final class SaveAppVirtualDeviceConfig extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getUniMsgId
 * @method self withUniMsgId
 */
final class QueryMessageInfo extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getSiteType
 * @method self withSiteType
 * @method string getRuleDataFormat
 * @method self withRuleDataFormat
 */
final class ListSupportedCloudProducts extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 */
final class QueryStandardUnit extends RpcRequest
{
}

/**
 * @method string getDriverIds
 * @method self withDriverIds
 * @method Long getGroupId
 * @method self withGroupId
 */
final class BatchGetDriverStatus extends RpcRequest
{
}

/**
 * @method string getDriverId
 * @method self withDriverId
 */
final class DeleteDriver extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getStreamGuId
 * @method self withStreamGuId
 */
final class BindStreamToGroup extends RpcRequest
{
}

/**
 * @method string getDriverId
 * @method self withDriverId
 */
final class GetDriver extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getStreamGuIds
 * @method self withStreamGuIds
 */
final class BatchGetGroupStreamStatus extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getStreamGuId
 * @method self withStreamGuId
 */
final class UnbindStreamFromGroup extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListGroupStream extends RpcRequest
{
}

/**
 * @method string getDriverIds
 * @method self withDriverIds
 */
final class BatchGetDriver extends RpcRequest
{
}

/**
 * @method string getDriverName
 * @method self withDriverName
 * @method string getDescription
 * @method self withDescription
 * @method string getUrl
 * @method self withUrl
 * @method string getRuntime
 * @method self withRuntime
 */
final class CreateDriver extends RpcRequest
{
}

/**
 * @method string getDriverName
 * @method self withDriverName
 * @method string getDescription
 * @method self withDescription
 * @method string getUrl
 * @method self withUrl
 * @method string getRuntime
 * @method self withRuntime
 * @method string getDriverId
 * @method self withDriverId
 */
final class UpdateDriver extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getType
 * @method self withType
 * @method string getDriverName
 * @method self withDriverName
 */
final class ListDriver extends RpcRequest
{
}

/**
 * @method string getDriverName
 * @method self withDriverName
 */
final class GetOfficialDriver extends RpcRequest
{
}

/**
 * @method string getAppConfigId
 * @method self withAppConfigId
 * @method string getPublishStatus
 * @method self withPublishStatus
 * @method string getVersionName
 * @method self withVersionName
 * @method string getVersionDescription
 * @method self withVersionDescription
 * @method string getServiceName
 * @method self withServiceName
 * @method string getPort
 * @method self withPort
 * @method string getTag
 * @method self withTag
 * @method string getPath
 * @method self withPath
 */
final class UpdateAppConfigPublishStatus extends RpcRequest
{
}

/**
 * @method string getClusterName
 * @method self withClusterName
 * @method string getTags
 * @method self withTags
 * @method string getStorageHost
 * @method self withStorageHost
 * @method string getStoragePath
 * @method self withStoragePath
 * @method string getServiceCidr
 * @method self withServiceCidr
 * @method string getEnvironmentVars
 * @method self withEnvironmentVars
 */
final class CreateEdgeCluster extends RpcRequest
{
}

/**
 * @method string getNodeId
 * @method self withNodeId
 */
final class DeleteEdgeNode extends RpcRequest
{
}

/**
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getKeywords
 * @method self withKeywords
 */
final class QueryEdgeClusterList extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getNodeName
 * @method self withNodeName
 * @method string getContext
 * @method self withContext
 * @method string getTags
 * @method self withTags
 */
final class CreateEdgeNode extends RpcRequest
{
}

/**
 * @method string getNodeId
 * @method self withNodeId
 */
final class GetEdgeNodeBootstrapScript extends RpcRequest
{
}

/**
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getClusterId
 * @method self withClusterId
 * @method string getKeywords
 * @method self withKeywords
 */
final class QueryEdgeNodeList extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 * @method string getClusterName
 * @method self withClusterName
 * @method string getTags
 * @method self withTags
 * @method string getServiceCidr
 * @method self withServiceCidr
 * @method string getEnvironmentVars
 * @method self withEnvironmentVars
 */
final class UpdateEdgeCluster extends RpcRequest
{
}

/**
 * @method string getClusterId
 * @method self withClusterId
 */
final class DeleteEdgeCluster extends RpcRequest
{
}

/**
 * @method string getNodeId
 * @method self withNodeId
 */
final class GetEdgeNode extends RpcRequest
{
}

/**
 * @method string getMcAddress
 * @method self withMcAddress
 * @method string getMulticastMessage
 * @method self withMulticastMessage
 */
final class MulticastMessagePop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getTargetAliyunPk
 * @method self withTargetAliyunPk
 * @method Boolean getTransferTag
 * @method self withTransferTag
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 */
final class SubmitTransferApply extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getTemplate
 * @method self withTemplate
 * @method string getTemplateName
 * @method self withTemplateName
 * @method string getTemplateIdentifier
 * @method self withTemplateIdentifier
 * @method string getCategoryKey
 * @method self withCategoryKey
 * @method string getCategoryName
 * @method self withCategoryName
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class ReleaseProduct extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getApplyId
 * @method self withApplyId
 */
final class RejectTransfer extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductName
 * @method self withProductName
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getDevicePropJson
 * @method self withDevicePropJson
 */
final class QuickStart extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getApplyId
 * @method self withApplyId
 * @method string getdeviceName
 * @method self withdeviceName
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryTransferDeviceList extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryTransferApplyByPage extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getcurrentPage
 * @method self withcurrentPage
 * @method Integer getpageSize
 * @method self withpageSize
 */
final class QueryReceivedTransferApplyList extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getAuthType
 * @method self withAuthType
 */
final class QueryReceivedAuthProductList extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getOsType
 * @method self withOsType
 * @method Integer getProtocolType
 * @method self withProtocolType
 * @method Integer getLanguageType
 * @method self withLanguageType
 */
final class QueryQuickStartSdk extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getType
 * @method self withType
 * @method string getDeviceName
 * @method self withDeviceName
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryDeviceListByAuthProduct extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getTargetAliyunPk
 * @method self withTargetAliyunPk
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getAuthType
 * @method self withAuthType
 */
final class QueryAuthorizeProductPage extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getTargetAliyunPk
 * @method self withTargetAliyunPk
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryAuthorizeDevicePage extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QueryAllDeviceListByAuthProduct extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getAliyunPk
 * @method self withAliyunPk
 * @method string getTargetAliyunPk
 * @method self withTargetAliyunPk
 */
final class QueryAliyunUserInfo extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getJunior
 * @method self withJunior
 * @method string getProductName
 * @method self withProductName
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class ListAvailableProducts extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getApplyId
 * @method self withApplyId
 */
final class CancelTransferApply extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class CancelReleaseProduct extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getTargetAliyunPk
 * @method self withTargetAliyunPk
 */
final class CancelAuthorizedProduct extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method RepeatList getCancelDevice
 * @method self withCancelDevice
 */
final class CancelAuthorizedDevices extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class AuthorizeProduct extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getTargetAliyunPk
 * @method self withTargetAliyunPk
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 */
final class AuthorizeDevices extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getApplyId
 * @method self withApplyId
 */
final class AcceptTransfer extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getRoleArn
 * @method self withRoleArn
 * @method string getRoleName
 * @method self withRoleName
 */
final class BindRoleToGroup extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 */
final class UnbindRoleFromGroup extends RpcRequest
{
}

/**
 * @method string getAutomationRuleIds
 * @method self withAutomationRuleIds
 * @method Integer getGroupId
 * @method self withGroupId
 */
final class BatchGetGroupAutomationRuleRelRuleStatus extends RpcRequest
{
}

/**
 * @method Json getIdList
 * @method self withIdList
 * @method Json getNameList
 * @method self withNameList
 * @method string getSearch
 * @method self withSearch
 * @method string getType
 * @method self withType
 * @method Json getPage
 * @method self withPage
 * @method Json getOrder
 * @method self withOrder
 * @method string getEnv
 * @method self withEnv
 * @method string getTaskStatus
 * @method self withTaskStatus
 */
final class GetTaskList extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getId
 * @method self withId
 * @method string getName
 * @method self withName
 * @method string getType
 * @method self withType
 * @method string getEndPoint
 * @method self withEndPoint
 * @method string getAccessId
 * @method self withAccessId
 * @method string getAccessKey
 * @method self withAccessKey
 * @method string getHost
 * @method self withHost
 * @method string getUserName
 * @method self withUserName
 * @method string getPassword
 * @method self withPassword
 * @method string getPort
 * @method self withPort
 * @method string getDbName
 * @method self withDbName
 * @method string getGmtCreate
 * @method self withGmtCreate
 * @method string getGmtModified
 * @method self withGmtModified
 * @method string getVpcId
 * @method self withVpcId
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getSourceUid
 * @method self withSourceUid
 */
final class UpdateDataSource extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 */
final class GetDataSource extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 */
final class PublishTask extends RpcRequest
{
}

/**
 * @method Long getSourceId
 * @method self withSourceId
 * @method string getName
 * @method self withName
 * @method string getDesc
 * @method self withDesc
 */
final class CloneTask extends RpcRequest
{
}

/**
 * @method Json getIdList
 * @method self withIdList
 * @method Json getNameList
 * @method self withNameList
 * @method string getSearch
 * @method self withSearch
 * @method string getType
 * @method self withType
 * @method Json getPage
 * @method self withPage
 * @method Json getOrder
 * @method self withOrder
 */
final class GetDataSourceList extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getType
 * @method self withType
 * @method string getEndPoint
 * @method self withEndPoint
 * @method string getAccessId
 * @method self withAccessId
 * @method string getAccessKey
 * @method self withAccessKey
 * @method string getHost
 * @method self withHost
 * @method string getUserName
 * @method self withUserName
 * @method string getPassword
 * @method self withPassword
 * @method string getPort
 * @method self withPort
 * @method string getDbName
 * @method self withDbName
 */
final class CheckDataSourceValid extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getDesc
 * @method self withDesc
 * @method string getType
 * @method self withType
 * @method string getStatus
 * @method self withStatus
 * @method string getSql
 * @method self withSql
 * @method string getComponents
 * @method self withComponents
 * @method string getParams
 * @method self withParams
 * @method string getEnv
 * @method self withEnv
 * @method string getGmtCreate
 * @method self withGmtCreate
 * @method string getGmtModified
 * @method self withGmtModified
 */
final class CreateTask extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 */
final class DeleteDataSource extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method string getSql
 * @method self withSql
 * @method string getComponents
 * @method self withComponents
 * @method string getParams
 * @method self withParams
 */
final class UpdateTaskDetail extends RpcRequest
{
}

final class ValidateLaUser extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method string getName
 * @method self withName
 * @method string getDesc
 * @method self withDesc
 */
final class UpdateTaskMeta extends RpcRequest
{
}

/**
 * @method string getSql
 * @method self withSql
 * @method Long getTaskId
 * @method self withTaskId
 */
final class CheckTaskSql extends RpcRequest
{
}

/**
 * @method string getOutput
 * @method self withOutput
 * @method Long getSourceId
 * @method self withSourceId
 * @method Long getTaskId
 * @method self withTaskId
 */
final class CheckDataSourceOutput extends RpcRequest
{
}

final class GetOnsInfoList extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getEmail
 * @method self withEmail
 * @method string getPhone
 * @method self withPhone
 * @method string getExt
 * @method self withExt
 */
final class CreateLaUser extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method string getName
 * @method self withName
 * @method string getDesc
 * @method self withDesc
 * @method string getType
 * @method self withType
 * @method string getStatus
 * @method self withStatus
 * @method string getSql
 * @method self withSql
 * @method string getComponents
 * @method self withComponents
 * @method string getParams
 * @method self withParams
 * @method string getEnv
 * @method self withEnv
 * @method string getGmtCreate
 * @method self withGmtCreate
 * @method string getGmtModified
 * @method self withGmtModified
 */
final class UpdateTask extends RpcRequest
{
}

final class GetComponentList extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 */
final class WithdrawTask extends RpcRequest
{
}

final class GetProductList extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 */
final class GetTask extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 */
final class GetProductMeta extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 */
final class GetTaskStatus extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getId
 * @method self withId
 * @method string getName
 * @method self withName
 * @method string getType
 * @method self withType
 * @method string getEndPoint
 * @method self withEndPoint
 * @method string getAccessId
 * @method self withAccessId
 * @method string getAccessKey
 * @method self withAccessKey
 * @method string getHost
 * @method self withHost
 * @method string getUserName
 * @method self withUserName
 * @method string getPassword
 * @method self withPassword
 * @method string getPort
 * @method self withPort
 * @method string getDbName
 * @method self withDbName
 * @method string getGmtCreate
 * @method self withGmtCreate
 * @method string getGmtModified
 * @method self withGmtModified
 * @method string getVpcId
 * @method self withVpcId
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class CreateDataSource extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 */
final class DeleteTask extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method RepeatList getProductKeyList
 * @method self withProductKeyList
 * @method RepeatList getCategoryKeyList
 * @method self withCategoryKeyList
 * @method RepeatList getTagList
 * @method self withTagList
 * @method string getAppKey
 * @method self withAppKey
 */
final class QueryAppDeviceList extends RpcRequest
{
}

final class GetAppImageRepoUser extends RpcRequest
{
}

/**
 * @method string getDeploymentRecordUuid
 * @method self withDeploymentRecordUuid
 * @method Boolean getNeedDetail
 * @method self withNeedDetail
 */
final class GetAppDeploymentDetail extends RpcRequest
{
}

/**
 * @method string getAliyunPK
 * @method self withAliyunPK
 */
final class GetAppSignContent extends RpcRequest
{
}

/**
 * @method string getType
 * @method self withType
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getDeploymentName
 * @method self withDeploymentName
 * @method string getStatus
 * @method self withStatus
 */
final class ListAppDeploymentRecord extends RpcRequest
{
}

/**
 * @method string getRepoName
 * @method self withRepoName
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListAppRepoTags extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getName
 * @method self withName
 * @method string getMetric
 * @method self withMetric
 * @method string getGroupName
 * @method self withGroupName
 * @method string getPageNo
 * @method self withPageNo
 * @method string getPageSize
 * @method self withPageSize
 */
final class QueryAppAlarmList extends RpcRequest
{
}

/**
 * @method string getRepoName
 * @method self withRepoName
 * @method string getTag
 * @method self withTag
 */
final class DeleteAppRepoTag extends RpcRequest
{
}

/**
 * @method string getNodeId
 * @method self withNodeId
 */
final class GetAppNodePropertyList extends RpcRequest
{
}

/**
 * @method string getDeviceAuthorizationUuid
 * @method self withDeviceAuthorizationUuid
 */
final class CancelAppDeviceAuthorization extends RpcRequest
{
}

/**
 * @method string getType
 * @method self withType
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getDeploymentName
 * @method self withDeploymentName
 * @method string getStatus
 * @method self withStatus
 * @method string getDeployed
 * @method self withDeployed
 * @method Integer getLpRelatedNotIn
 * @method self withLpRelatedNotIn
 * @method RepeatList getMultiStatus
 * @method self withMultiStatus
 */
final class ListApp extends RpcRequest
{
}

/**
 * @method string getAppConfigId
 * @method self withAppConfigId
 * @method string getNodeId
 * @method self withNodeId
 * @method RepeatList getPropertyList
 * @method self withPropertyList
 */
final class SaveAppNodeProperty extends RpcRequest
{
}

/**
 * @method string getUuid
 * @method self withUuid
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getName
 * @method self withName
 * @method string getMetric
 * @method self withMetric
 * @method string getProject
 * @method self withProject
 * @method string getGroupName
 * @method self withGroupName
 * @method string getStatisticalType
 * @method self withStatisticalType
 * @method string getComparisonCondition
 * @method self withComparisonCondition
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getComparisonValue
 * @method self withComparisonValue
 * @method string getComparisonModel
 * @method self withComparisonModel
 * @method RepeatList getContactGroups
 * @method self withContactGroups
 * @method Integer getEvaluationCount
 * @method self withEvaluationCount
 */
final class UpdateAppAlarm extends RpcRequest
{
}

/**
 * @method Integer getFormType
 * @method self withFormType
 * @method string getFieldKey
 * @method self withFieldKey
 * @method string getFieldValue
 * @method self withFieldValue
 */
final class SignApp extends RpcRequest
{
}

/**
 * @method string getRepoName
 * @method self withRepoName
 * @method string getSummary
 * @method self withSummary
 * @method string getDetail
 * @method self withDetail
 */
final class CreateAppImageRepo extends RpcRequest
{
}

/**
 * @method string getUuid
 * @method self withUuid
 * @method string getAppUuid
 * @method self withAppUuid
 */
final class DeleteAppAlarm extends RpcRequest
{
}

/**
 * @method string getRepoName
 * @method self withRepoName
 */
final class DeleteAppImageRepo extends RpcRequest
{
}

/**
 * @method RepeatList getData
 * @method self withData
 */
final class CreateAppDeviceAuthorization extends RpcRequest
{
}

final class GetAccountBalance extends RpcRequest
{
}

/**
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getAppConfigId
 * @method self withAppConfigId
 * @method string getName
 * @method self withName
 * @method Boolean getCloned
 * @method self withCloned
 * @method Integer getLpRelated
 * @method self withLpRelated
 * @method Boolean getNeedPublishing
 * @method self withNeedPublishing
 * @method Boolean getAllVersionsRequired
 * @method self withAllVersionsRequired
 */
final class GetAppConfigList extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getName
 * @method self withName
 * @method string getMetric
 * @method self withMetric
 * @method string getProject
 * @method self withProject
 * @method string getGroupName
 * @method self withGroupName
 * @method string getStatisticalType
 * @method self withStatisticalType
 * @method string getComparisonCondition
 * @method self withComparisonCondition
 * @method Integer getPeriod
 * @method self withPeriod
 * @method string getComparisonValue
 * @method self withComparisonValue
 * @method string getComparisonModel
 * @method self withComparisonModel
 * @method RepeatList getContactGroups
 * @method self withContactGroups
 * @method Integer getEvaluationCount
 * @method self withEvaluationCount
 */
final class CreateAppAlarm extends RpcRequest
{
}

/**
 * @method string getRepoName
 * @method self withRepoName
 */
final class GetAppImageRepo extends RpcRequest
{
}

/**
 * @method string getAppConfigId
 * @method self withAppConfigId
 */
final class DeleteAppConfig extends RpcRequest
{
}

/**
 * @method string getAppConfigId
 * @method self withAppConfigId
 * @method string getPosition
 * @method self withPosition
 * @method string getName
 * @method self withName
 * @method Integer getStatus
 * @method self withStatus
 * @method string getDescription
 * @method self withDescription
 * @method RepeatList getNodeList
 * @method self withNodeList
 * @method RepeatList getNodeRelation
 * @method self withNodeRelation
 * @method RepeatList getPropertyList
 * @method self withPropertyList
 */
final class SaveAppConfig extends RpcRequest
{
}

/**
 * @method string getApplicationAuthorizationUuid
 * @method self withApplicationAuthorizationUuid
 */
final class CancelAppAuthorization extends RpcRequest
{
}

/**
 * @method string getUuid
 * @method self withUuid
 */
final class GetAppConfigDetail extends RpcRequest
{
}

/**
 * @method string getDeploymentRecordUuid
 * @method self withDeploymentRecordUuid
 */
final class DeleteAppDeployment extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method string getPeriod
 * @method self withPeriod
 * @method RepeatList getMetrics
 * @method self withMetrics
 * @method string getProject
 * @method self withProject
 * @method string getGroupName
 * @method self withGroupName
 */
final class QueryAppMonitorMetric extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getServiceName
 * @method self withServiceName
 * @method string getNodeId
 * @method self withNodeId
 */
final class GetAppServiceInfo extends RpcRequest
{
}

/**
 * @method RepeatList getData
 * @method self withData
 */
final class CreateAppAuthorization extends RpcRequest
{
}

/**
 * @method string getPassword
 * @method self withPassword
 */
final class UpdateAppImageRepoPassword extends RpcRequest
{
}

/**
 * @method RepeatList getRoleNameList
 * @method self withRoleNameList
 */
final class GetHaveRoleStatus extends RpcRequest
{
}

/**
 * @method string getKeyword
 * @method self withKeyword
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListAppImageRepos extends RpcRequest
{
}

/**
 * @method string getPassword
 * @method self withPassword
 */
final class InitializeAppImageRepoPassword extends RpcRequest
{
}

/**
 * @method RepeatList getServiceCodeList
 * @method self withServiceCodeList
 */
final class GetUserBusinessEnabledStatus extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 */
final class DeleteApp extends RpcRequest
{
}

/**
 * @method string getAppConfigId
 * @method self withAppConfigId
 */
final class GetAppConfigurableNode extends RpcRequest
{
}

/**
 * @method string getConfigureUuid
 * @method self withConfigureUuid
 * @method string getConfigureVersionUuid
 * @method self withConfigureVersionUuid
 * @method string getName
 * @method self withName
 * @method string getHostingType
 * @method self withHostingType
 * @method string getDeployRegionId
 * @method self withDeployRegionId
 */
final class CreateAppDeployment extends RpcRequest
{
}

/**
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getClusterId
 * @method self withClusterId
 * @method string getNameSpace
 * @method self withNameSpace
 * @method string getName
 * @method self withName
 * @method string getCpuCapacityLimit
 * @method self withCpuCapacityLimit
 * @method string getMemCapacityLimit
 * @method self withMemCapacityLimit
 * @method string getCpuCapacityRequest
 * @method self withCpuCapacityRequest
 * @method string getMemCapacityRequest
 * @method self withMemCapacityRequest
 * @method Integer getContainerCount
 * @method self withContainerCount
 */
final class ExpandAppDeploymentResource extends RpcRequest
{
}

/**
 * @method string getAppConfigId
 * @method self withAppConfigId
 * @method string getNodeId
 * @method self withNodeId
 * @method RepeatList getPropertyList
 * @method self withPropertyList
 */
final class GetAppVerifyNodePropertyResultAppConfig extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNo
 * @method self withPageNo
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getToUserLoginId
 * @method self withToUserLoginId
 */
final class QueryAppDeviceAuthorization extends RpcRequest
{
}

/**
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getAppConfigId
 * @method self withAppConfigId
 * @method string getConfigKey
 * @method self withConfigKey
 */
final class GetAppProperty extends RpcRequest
{
}

/**
 * @method string getAppConfigId
 * @method self withAppConfigId
 */
final class GetAppNodes extends RpcRequest
{
}

final class GetAppServiceRole extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNo
 * @method self withPageNo
 * @method string getDeploymentUuid
 * @method self withDeploymentUuid
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class QueryAppOwnerDeviceList extends RpcRequest
{
}

/**
 * @method string getDeploymentUuid
 * @method self withDeploymentUuid
 * @method string getKeyword
 * @method self withKeyword
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListAppDeploymentService extends RpcRequest
{
}

/**
 * @method string getConfigureUuid
 * @method self withConfigureUuid
 * @method string getConfigureVersionUuid
 * @method self withConfigureVersionUuid
 * @method string getName
 * @method self withName
 * @method string getDeployRegionId
 * @method self withDeployRegionId
 * @method string getHostingType
 * @method self withHostingType
 * @method string getClusterId
 * @method self withClusterId
 */
final class CreateAppEdgeDeployment extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNo
 * @method self withPageNo
 * @method string getDeploymentName
 * @method self withDeploymentName
 * @method string getAppUuid
 * @method self withAppUuid
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class QueryAppAuthorization extends RpcRequest
{
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStatus
 * @method self withStatus
 */
final class QueryDeviceLocationByProductPage extends RpcRequest
{
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStatus
 * @method self withStatus
 * @method string getGeoProjectId
 * @method self withGeoProjectId
 * @method Json getProductKeyList
 * @method self withProductKeyList
 */
final class QueryDeviceLocationByGroupPage extends RpcRequest
{
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStatus
 * @method self withStatus
 * @method string getGeoProjectId
 * @method self withGeoProjectId
 * @method string getAttributeCode
 * @method self withAttributeCode
 */
final class QueryDevicePropertyByProductPage extends RpcRequest
{
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getGroupId
 * @method self withGroupId
 * @method string getStatus
 * @method self withStatus
 * @method string getGeoProjectId
 * @method self withGeoProjectId
 * @method string getAttributeCode
 * @method self withAttributeCode
 * @method Json getProductKeyList
 * @method self withProductKeyList
 */
final class QueryDevicePropertyByGroupPage extends RpcRequest
{
}

/**
 * @method Json getItems
 * @method self withItems
 * @method string getGeoProjectId
 * @method self withGeoProjectId
 * @method string getIotId
 * @method self withIotId
 */
final class SetGeoDeviceProperty extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getGeoProjectId
 * @method self withGeoProjectId
 * @method string getIotId
 * @method self withIotId
 */
final class QueryGeoDeviceProperty extends RpcRequest
{
}

/**
 * @method string getGroupId
 * @method self withGroupId
 * @method string getGeoProjectId
 * @method self withGeoProjectId
 */
final class QueryProductListByGroup extends RpcRequest
{
}

/**
 * @method string getGeoProjectId
 * @method self withGeoProjectId
 */
final class PublishGeoProject extends RpcRequest
{
}

/**
 * @method string getMapConfig
 * @method self withMapConfig
 * @method string getGeoProjectId
 * @method self withGeoProjectId
 */
final class SaveMapConfig extends RpcRequest
{
}

/**
 * @method string getNewGeoProjectName
 * @method self withNewGeoProjectName
 * @method string getGeoProjectId
 * @method self withGeoProjectId
 */
final class ChangeGeoProjectName extends RpcRequest
{
}

/**
 * @method string getGeoProjectId
 * @method self withGeoProjectId
 */
final class QueryGeoProject extends RpcRequest
{
}

/**
 * @method string getNewGeoProjectName
 * @method self withNewGeoProjectName
 * @method string getGeoProjectId
 * @method self withGeoProjectId
 */
final class DuplicateGeoProject extends RpcRequest
{
}

/**
 * @method string getGeoProjectId
 * @method self withGeoProjectId
 */
final class DeleteGeoProject extends RpcRequest
{
}

/**
 * @method string getGeoProjectName
 * @method self withGeoProjectName
 * @method string getGroupMethod
 * @method self withGroupMethod
 * @method string getGroupId
 * @method self withGroupId
 * @method string getGroupName
 * @method self withGroupName
 * @method string getMapConfig
 * @method self withMapConfig
 */
final class CreateGeoProject extends RpcRequest
{
}

/**
 * @method string getSceneId
 * @method self withSceneId
 */
final class DeleteBIMScene extends RpcRequest
{
}

/**
 * @method string getRequestVersion
 * @method self withRequestVersion
 */
final class GetPortalDescImage extends RpcRequest
{
}

/**
 * @method Json getBindSceneDTO
 * @method self withBindSceneDTO
 */
final class SaveScene extends RpcRequest
{
}

/**
 * @method string getSceneId
 * @method self withSceneId
 */
final class PublishScene extends RpcRequest
{
}

/**
 * @method Json getSceneDTO
 * @method self withSceneDTO
 */
final class InitScene extends RpcRequest
{
}

/**
 * @method string getRequestVersion
 * @method self withRequestVersion
 */
final class GetPortalClasicScenes extends RpcRequest
{
}

/**
 * @method string getSceneId
 * @method self withSceneId
 */
final class DeleteScene extends RpcRequest
{
}

/**
 * @method string getSceneId
 * @method self withSceneId
 */
final class GetBindSceneInfo extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 */
final class GetProductPropertiesForBim extends RpcRequest
{
}

/**
 * @method string getSceneId
 * @method self withSceneId
 * @method string getSceneName
 * @method self withSceneName
 */
final class CopyBIMScene extends RpcRequest
{
}

/**
 * @method string getSceneId
 * @method self withSceneId
 */
final class GenerateBIMOssUploadUri extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getGroupId
 * @method self withGroupId
 * @method string getGroupDesc
 * @method self withGroupDesc
 */
final class UpdateDeviceGroup extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getSuperGroupId
 * @method self withSuperGroupId
 * @method string getGroupName
 * @method self withGroupName
 */
final class QueryDeviceGroupTree extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getGroupId
 * @method self withGroupId
 */
final class QueryDeviceGroupTagList extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getSuperGroupId
 * @method self withSuperGroupId
 * @method string getGroupName
 * @method self withGroupName
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryDeviceGroupList extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getGroupId
 * @method self withGroupId
 */
final class QueryDeviceGroupInfo extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getGroupName
 * @method self withGroupName
 */
final class QueryDeviceGroupByName extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class QueryDeviceGroupByDevice extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getGroupId
 * @method self withGroupId
 * @method string getTagString
 * @method self withTagString
 */
final class ForceSetDeviceGroupTag extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getGroupId
 * @method self withGroupId
 */
final class DeleteDeviceGroup extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getSuperGroupId
 * @method self withSuperGroupId
 * @method string getGroupName
 * @method self withGroupName
 * @method string getGroupDesc
 * @method self withGroupDesc
 */
final class CreateDeviceGroup extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getGroupId
 * @method self withGroupId
 * @method RepeatList getDevice
 * @method self withDevice
 */
final class BatchDeleteDeviceGroupRelations extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getGroupId
 * @method self withGroupId
 * @method RepeatList getDevice
 * @method self withDevice
 */
final class BatchAddDeviceGroupRelations extends RpcRequest
{
}

/**
 * @method Json getIotId
 * @method self withIotId
 * @method string getSceneId
 * @method self withSceneId
 */
final class GetMultiDeviceStatusForBim extends RpcRequest
{
}

/**
 * @method string getSceneId
 * @method self withSceneId
 * @method string getPackageName
 * @method self withPackageName
 */
final class UnzipAndPushScene extends RpcRequest
{
}

final class GetUserScenes extends RpcRequest
{
}

/**
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getStatus
 * @method self withStatus
 * @method string getTag
 * @method self withTag
 * @method string getGroupId
 * @method self withGroupId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getAliyunCommodityCode
 * @method self withAliyunCommodityCode
 */
final class QueryDevicePageForBim extends RpcRequest
{
}

final class QueryGeoProjectList extends RpcRequest
{
}

/**
 * @method string getSceneId
 * @method self withSceneId
 */
final class CheckIsUnzipSuccess extends RpcRequest
{
}

/**
 * @method string getIotId
 * @method self withIotId
 * @method string getSceneId
 * @method self withSceneId
 */
final class GetDeviceStatusForBim extends RpcRequest
{
}

/**
 * @method string getIotId
 * @method self withIotId
 * @method Json getDeviceStatus
 * @method self withDeviceStatus
 * @method string getSceneId
 * @method self withSceneId
 */
final class SetDeviceStatusForBim extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getTimeout
 * @method self withTimeout
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getTopic
 * @method self withTopic
 * @method string getRequestBase64Byte
 * @method self withRequestBase64Byte
 */
final class RRpc extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Long getApplyId
 * @method self withApplyId
 */
final class QueryPageByApplyId extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 */
final class QueryDevice extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getProps
 * @method self withProps
 */
final class SaveDeviceProp extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getTopic
 * @method self withTopic
 */
final class QueryTopicRouteTable extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getTopic
 * @method self withTopic
 */
final class QueryTopicReverseRouteTable extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getTopicFullName
 * @method self withTopicFullName
 * @method string getMessageContent
 * @method self withMessageContent
 */
final class PubBroadcast extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getSrcTopic
 * @method self withSrcTopic
 * @method RepeatList getDstTopic
 * @method self withDstTopic
 */
final class DeleteTopicRouteTable extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getPropKey
 * @method self withPropKey
 */
final class DeleteDeviceProp extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getSrcTopic
 * @method self withSrcTopic
 * @method RepeatList getDstTopic
 * @method self withDstTopic
 */
final class CreateTopicRouteTable extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 */
final class BatchGetDeviceState extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getSecureUpgradeFlag
 * @method self withSecureUpgradeFlag
 */
final class UpdateSecureUpgradeFlag extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getCode
 * @method self withCode
 * @method string getServerName
 * @method self withServerName
 * @method string getContent
 * @method self withContent
 */
final class UpdateGatewayServerConfig extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getGwProductKey
 * @method self withGwProductKey
 * @method string getGwDeviceName
 * @method self withGwDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getCode
 * @method self withCode
 * @method string getServerId
 * @method self withServerId
 * @method string getConfigJson
 * @method self withConfigJson
 */
final class UpdateChildDeviceConfig extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getFirmwareName
 * @method self withFirmwareName
 * @method Long getTaskId
 * @method self withTaskId
 */
final class RetryDiff extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QueryVirtualDevice extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class QuerySecureUpgradePublicKey extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryModelConfig extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getCode
 * @method self withCode
 */
final class QueryGatewayServerConfig extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getFirmwareName
 * @method self withFirmwareName
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryDiffTask extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getGwProductKey
 * @method self withGwProductKey
 * @method string getGwDeviceName
 * @method self withGwDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class QueryChildDeviceConfig extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class PushDeviceConfig extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getPropertyJson
 * @method self withPropertyJson
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getDelay
 * @method self withDelay
 * @method Integer getInterval
 * @method self withInterval
 * @method Integer getCount
 * @method self withCount
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class PostDevicePropertiesRegularly extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getPropertyJson
 * @method self withPropertyJson
 */
final class PostDeviceProperties extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getOutputJson
 * @method self withOutputJson
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Integer getDelay
 * @method self withDelay
 * @method Integer getInterval
 * @method self withInterval
 * @method Integer getCount
 * @method self withCount
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class PostDeviceEventsRegularly extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getOutputJson
 * @method self withOutputJson
 */
final class PostDeviceEvents extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getPage
 * @method self withPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProtocol4ChildDevice
 * @method self withProtocol4ChildDevice
 * @method string getServerName
 * @method self withServerName
 */
final class ListGatewayServerConfig extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getTslStr
 * @method self withTslStr
 */
final class ImportTsl extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getUploadType
 * @method self withUploadType
 */
final class GenerateOpcUaUploadUrl extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class DoDeviceOnline extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class DoDeviceOffline extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getCode
 * @method self withCode
 */
final class DeleteGatewayServerConfig extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProtocol4ChildDevice
 * @method self withProtocol4ChildDevice
 * @method string getServerName
 * @method self withServerName
 * @method string getContent
 * @method self withContent
 */
final class CreateGatewayServerConfig extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getGwProductKey
 * @method self withGwProductKey
 * @method string getGwDeviceName
 * @method self withGwDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getServerId
 * @method self withServerId
 * @method string getConfigJson
 * @method self withConfigJson
 */
final class CreateChildDevice extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getDestFirmwareName
 * @method self withDestFirmwareName
 * @method RepeatList getSrcFirmwareName
 * @method self withSrcFirmwareName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDiffMethod
 * @method self withDiffMethod
 * @method Integer getSplictSize
 * @method self withSplictSize
 */
final class CreateBatchDiff extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getSrcProductKey
 * @method self withSrcProductKey
 * @method string getTargetProductKey
 * @method self withTargetProductKey
 */
final class CopyProductAbility extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getFirmwareName
 * @method self withFirmwareName
 * @method Long getTaskId
 * @method self withTaskId
 */
final class CancelDiff extends RpcRequest
{
}

/**
 * @method string getDriverTemplateName
 * @method self withDriverTemplateName
 * @method string getDescription
 * @method self withDescription
 * @method string getContent
 * @method self withContent
 * @method string getRuntime
 * @method self withRuntime
 * @method string getDriverTemplateId
 * @method self withDriverTemplateId
 */
final class UpdateDriverTemplate extends RpcRequest
{
}

/**
 * @method string getDriverTemplateId
 * @method self withDriverTemplateId
 */
final class DeleteDriverTemplate extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class BindGatewayToGroup extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getDriverId
 * @method self withDriverId
 */
final class UnbindDriverFromGroup extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getDriverId
 * @method self withDriverId
 */
final class GetGroupDriver extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getDriverId
 * @method self withDriverId
 */
final class UpdateDeviceConfig extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getType
 * @method self withType
 * @method string getName
 * @method self withName
 */
final class ListDriverTemplate extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getDriverTemplateId
 * @method self withDriverTemplateId
 * @method string getDriverId
 * @method self withDriverId
 * @method Long getMemory
 * @method self withMemory
 */
final class BindDriverToGroup extends RpcRequest
{
}

/**
 * @method string getDriverTemplateId
 * @method self withDriverTemplateId
 */
final class GetDriverTemplate extends RpcRequest
{
}

/**
 * @method string getDriverTemplateName
 * @method self withDriverTemplateName
 * @method string getDescription
 * @method self withDescription
 * @method string getContent
 * @method self withContent
 * @method string getRuntime
 * @method self withRuntime
 */
final class CreateDriverTemplate extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListGroupDriver extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getDriverId
 * @method self withDriverId
 * @method Long getMemory
 * @method self withMemory
 */
final class UpdateGroupDriverConfig extends RpcRequest
{
}

/**
 * @method string getDriverTemplateIds
 * @method self withDriverTemplateIds
 */
final class BatchGetDriverTemplateInfo extends RpcRequest
{
}

/**
 * @method string getDriverTemplateIds
 * @method self withDriverTemplateIds
 * @method Long getGroupId
 * @method self withGroupId
 */
final class BatchGetDriverTemplateStatus extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getCallbackType
 * @method self withCallbackType
 */
final class UpdateServerCallback extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryReducedTsl extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryDeviceBatchList extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getApplyId
 * @method self withApplyId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getActive
 * @method self withActive
 */
final class QueryDeviceBatchInfo extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getApplyId
 * @method self withApplyId
 */
final class QueryBatchApplyDeviceList extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class ListServerCallbacks extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getAutomationRuleId
 * @method self withAutomationRuleId
 */
final class UnbindAutomationRuleFromGroup extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getAutomationRuleIds
 * @method self withAutomationRuleIds
 */
final class BatchGetGroupAutomationRuleStatus extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 */
final class GetGroupGateway extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getFunctionName
 * @method self withFunctionName
 */
final class ListGroupFunction extends RpcRequest
{
}

/**
 * @method string getAutomationRuleIds
 * @method self withAutomationRuleIds
 * @method Integer getGroupId
 * @method self withGroupId
 */
final class BatchGetGroupAutomationRuleDeviceStatus extends RpcRequest
{
}

/**
 * @method string getRuleName
 * @method self withRuleName
 * @method string getRuleContent
 * @method self withRuleContent
 * @method string getRuleDescription
 * @method self withRuleDescription
 */
final class CreateAutomationRule extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class ListGroupDevice extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getDeviceType
 * @method self withDeviceType
 */
final class BindDeviceToGroup extends RpcRequest
{
}

/**
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method string getName
 * @method self withName
 * @method Integer getType
 * @method self withType
 */
final class ListGroup extends RpcRequest
{
}

/**
 * @method string getRuleId
 * @method self withRuleId
 */
final class EnableAutomationRule extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getDevices
 * @method self withDevices
 */
final class BatchGetGroupDeviceStatus extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getEdgeFunctionId
 * @method self withEdgeFunctionId
 */
final class UnbindFunctionFromGroup extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 */
final class ResetGroup extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method Long getRouteId
 * @method self withRouteId
 */
final class GetGroupMessageRoute extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getFunctions
 * @method self withFunctions
 */
final class BatchGetGroupFunctionStatus extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method Long getRouteId
 * @method self withRouteId
 */
final class DeleteGroupMessageRoute extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getDeviceType
 * @method self withDeviceType
 */
final class UnbindDeviceFromGroup extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getProductKey
 * @method self withProductKey
 */
final class ListGroupProduct extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 */
final class GetGroup extends RpcRequest
{
}

/**
 * @method string getRuleId
 * @method self withRuleId
 */
final class DisableAutomationRule extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListGroupAutomationRule extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getAutomationRuleId
 * @method self withAutomationRuleId
 */
final class BindAutomationRuleToGroup extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getName
 * @method self withName
 * @method string getTags
 * @method self withTags
 */
final class UpdateGroup extends RpcRequest
{
}

/**
 * @method string getAutomationRuleId
 * @method self withAutomationRuleId
 * @method Integer getStartTime
 * @method self withStartTime
 * @method Integer getEndTime
 * @method self withEndTime
 * @method string getStatus
 * @method self withStatus
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 */
final class ListSummaryAutomationRuleLog extends RpcRequest
{
}

/**
 * @method string getRuleId
 * @method self withRuleId
 */
final class GetAutomationRule extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getRoleArn
 * @method self withRoleArn
 * @method string getServiceName
 * @method self withServiceName
 * @method string getFunctionName
 * @method self withFunctionName
 * @method string getRunMode
 * @method self withRunMode
 * @method string getFcRegionId
 * @method self withFcRegionId
 * @method Integer getMemorySize
 * @method self withMemorySize
 * @method Integer getTimeout
 * @method self withTimeout
 * @method string getTriggerContent
 * @method self withTriggerContent
 */
final class BindFunctionToGroup extends RpcRequest
{
}

/**
 * @method string getRuleName
 * @method self withRuleName
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 */
final class ListAutomationRule extends RpcRequest
{
}

/**
 * @method string getRuleId
 * @method self withRuleId
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class TriggerAutomationRule extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getEdgeFunctionId
 * @method self withEdgeFunctionId
 * @method string getRunMode
 * @method self withRunMode
 * @method Integer getMemorySize
 * @method self withMemorySize
 * @method Integer getTimeout
 * @method self withTimeout
 * @method string getTriggerContent
 * @method self withTriggerContent
 */
final class UpdateGroupFunctionConfig extends RpcRequest
{
}

/**
 * @method string getRuleId
 * @method self withRuleId
 * @method string getRuleName
 * @method self withRuleName
 * @method string getRuleContent
 * @method self withRuleContent
 * @method string getRuleDescription
 * @method self withRuleDescription
 */
final class UpdateAutomationRule extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 */
final class CreateDeployment extends RpcRequest
{
}

/**
 * @method string getAutomationRuleId
 * @method self withAutomationRuleId
 * @method Integer getStartTime
 * @method self withStartTime
 * @method Integer getEndTime
 * @method self withEndTime
 * @method string getTraceId
 * @method self withTraceId
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 */
final class ListDetailAutomationRuleLog extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getTags
 * @method self withTags
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class CreateGroup extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListGroupMessageRoute extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 */
final class DeleteGroup extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListDeployDetail extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method string getTopicFilter
 * @method self withTopicFilter
 * @method string getSourceType
 * @method self withSourceType
 * @method string getSourceData
 * @method self withSourceData
 * @method string getTargetType
 * @method self withTargetType
 * @method string getTargetData
 * @method self withTargetData
 * @method Integer getTargetIotHubQos
 * @method self withTargetIotHubQos
 */
final class CreateGroupMessageRoute extends RpcRequest
{
}

/**
 * @method string getRuleId
 * @method self withRuleId
 */
final class DeleteAutomationRule extends RpcRequest
{
}

/**
 * @method Long getGroupId
 * @method self withGroupId
 * @method Long getRouteId
 * @method self withRouteId
 * @method string getTopicFilter
 * @method self withTopicFilter
 * @method string getSourceType
 * @method self withSourceType
 * @method string getSourceData
 * @method self withSourceData
 * @method string getTargetType
 * @method self withTargetType
 * @method string getTargetData
 * @method self withTargetData
 * @method Integer getTargetIotHubQos
 * @method self withTargetIotHubQos
 */
final class UpdateGroupMessageRoute extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getType
 * @method self withType
 */
final class QueryRulengSysTopics extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 */
final class QueryProductByUserId extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getFirmwareName
 * @method self withFirmwareName
 * @method string getProductKey
 * @method self withProductKey
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 * @method Boolean getDiff
 * @method self withDiff
 * @method RepeatList getSrcFirmwareName
 * @method self withSrcFirmwareName
 */
final class VerifyFirmware extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getFirmwareName
 * @method self withFirmwareName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class UpgradeSingleDevice extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getActionId
 * @method self withActionId
 * @method string getType
 * @method self withType
 * @method string getConfiguration
 * @method self withConfiguration
 */
final class UpdateRuleAction extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getRuleId
 * @method self withRuleId
 * @method string getSelect
 * @method self withSelect
 * @method string getShortTopic
 * @method self withShortTopic
 * @method string getWhere
 * @method self withWhere
 * @method string getProductKey
 * @method self withProductKey
 * @method string getName
 * @method self withName
 * @method string getRuleDesc
 * @method self withRuleDesc
 * @method Integer getTopicType
 * @method self withTopicType
 */
final class UpdateRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getDesc
 * @method self withDesc
 * @method string getOperation
 * @method self withOperation
 * @method string getTopicShortName
 * @method self withTopicShortName
 * @method string getTopicId
 * @method self withTopicId
 */
final class UpdateProductTopic extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getShadowMessage
 * @method self withShadowMessage
 */
final class UpdateDeviceShadow extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getRuleId
 * @method self withRuleId
 */
final class StopRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getRuleId
 * @method self withRuleId
 */
final class StartRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getServeId
 * @method self withServeId
 * @method string getStatus
 * @method self withStatus
 */
final class SaveUserServeStatus extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getMnsConfiguration
 * @method self withMnsConfiguration
 * @method Integer getCallbackType
 * @method self withCallbackType
 */
final class SaveServerCallback extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getFirmwareName
 * @method self withFirmwareName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class ReUpgradeDevices extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getFirmwareName
 * @method self withFirmwareName
 */
final class ResetDeviceUpgrade extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryVersionsByPk extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getRegionName
 * @method self withRegionName
 * @method string getRoleName
 * @method self withRoleName
 * @method string getRoleArn
 * @method self withRoleArn
 * @method string getInstanceName
 * @method self withInstanceName
 */
final class QueryTableStoreTablesForRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getRegionName
 * @method self withRegionName
 * @method string getRoleName
 * @method self withRoleName
 * @method string getRoleArn
 * @method self withRoleArn
 * @method string getInstanceName
 * @method self withInstanceName
 * @method string getTableName
 * @method self withTableName
 */
final class QueryTableStorePrimaryKeysForRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getRegionName
 * @method self withRegionName
 * @method string getRoleName
 * @method self withRoleName
 * @method string getRoleArn
 * @method self withRoleArn
 */
final class QueryTableStoreInstancesForRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getFirmwareName
 * @method self withFirmwareName
 */
final class QueryStrategyByFirName extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryServerCallback extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method RepeatList getExclusionServe
 * @method self withExclusionServe
 */
final class QueryServeList extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getServeId
 * @method self withServeId
 */
final class QueryServeById extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductCode
 * @method self withProductCode
 */
final class QueryRuleForwardCloudRegion extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getRoleName
 * @method self withRoleName
 * @method string getRoleArn
 * @method self withRoleArn
 */
final class QueryRdsRegionsForRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getRoleName
 * @method self withRoleName
 * @method string getRoleArn
 * @method self withRoleArn
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class QueryRdsInstancePageForRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getRoleName
 * @method self withRoleName
 * @method string getRoleArn
 * @method self withRoleArn
 * @method string getDbInstanceId
 * @method self withDbInstanceId
 */
final class QueryRdsDatabasesForRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getRoleName
 * @method self withRoleName
 * @method string getRoleArn
 * @method self withRoleArn
 * @method string getDbInstanceId
 * @method self withDbInstanceId
 */
final class QueryRdsAccountsForRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryProductWithScript extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryProductTopic extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getStatus
 * @method self withStatus
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 */
final class QueryOtaJobByDevices extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getRegionName
 * @method self withRegionName
 * @method string getRoleName
 * @method self withRoleName
 * @method string getRoleArn
 * @method self withRoleArn
 */
final class QueryMqTopicsForRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getRoleName
 * @method self withRoleName
 * @method string getRoleArn
 * @method self withRoleArn
 */
final class QueryMqRegionsForRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getRegionName
 * @method self withRegionName
 * @method string getRoleName
 * @method self withRoleName
 * @method string getRoleArn
 * @method self withRoleArn
 */
final class QueryMnsTopicsForRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getFrom
 * @method self withFrom
 * @method Long getTo
 * @method self withTo
 * @method string getKeyWords
 * @method self withKeyWords
 * @method string getBizcode
 * @method self withBizcode
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getMessageId
 * @method self withMessageId
 * @method string getStatus
 * @method self withStatus
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QueryLogPage extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getRoleName
 * @method self withRoleName
 * @method string getRoleArn
 * @method self withRoleArn
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class QueryHitsSecurityIpForRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getRoleName
 * @method self withRoleName
 * @method string getRoleArn
 * @method self withRoleArn
 */
final class QueryHitsRegionsForRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getRoleName
 * @method self withRoleName
 * @method string getRoleArn
 * @method self withRoleArn
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getPageNumber
 * @method self withPageNumber
 */
final class QueryHitsInstancePageForRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getRoleName
 * @method self withRoleName
 * @method string getRoleArn
 * @method self withRoleArn
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class QueryHitsInstanceForRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getFirmwareName
 * @method self withFirmwareName
 */
final class QueryFirmwareVerifyInfo extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getDeleteStatus
 * @method self withDeleteStatus
 * @method string getProductKey
 * @method self withProductKey
 * @method string getFirmVersion
 * @method self withFirmVersion
 */
final class QueryFirmwareByUid extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getFirmwareName
 * @method self withFirmwareName
 */
final class QueryFirmwareByName extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getRegionName
 * @method self withRegionName
 * @method string getRoleName
 * @method self withRoleName
 * @method string getRoleArn
 * @method self withRoleArn
 */
final class QueryFcServicesForRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getRegionName
 * @method self withRegionName
 * @method string getRoleName
 * @method self withRoleName
 * @method string getRoleArn
 * @method self withRoleArn
 * @method string getServiceName
 * @method self withServiceName
 */
final class QueryFcFunctionsForRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getFirmwareName
 * @method self withFirmwareName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getType
 * @method self withType
 */
final class QueryDeviceUpgradeInfo extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QueryDeviceTopic extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryDeviceProp extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getIndistinctDevName
 * @method self withIndistinctDevName
 * @method Integer getPageNumber
 * @method self withPageNumber
 * @method Integer getPageSize
 * @method self withPageSize
 * @method RepeatList getFirmwareVersion
 * @method self withFirmwareVersion
 */
final class QueryDeviceByPkAndVersion extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QueryDebugOnlineLog extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getRegionName
 * @method self withRegionName
 * @method string getRoleName
 * @method self withRoleName
 * @method string getRoleArn
 * @method self withRoleArn
 * @method string getProjectName
 * @method self withProjectName
 */
final class QueryDataHubTopicsForRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getRegionName
 * @method self withRegionName
 * @method string getRoleName
 * @method self withRoleName
 * @method string getRoleArn
 * @method self withRoleArn
 * @method string getProjectName
 * @method self withProjectName
 * @method string getTopicName
 * @method self withTopicName
 */
final class QueryDataHubSchemasForRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getRegionName
 * @method self withRegionName
 * @method string getRoleName
 * @method self withRoleName
 * @method string getRoleArn
 * @method self withRoleArn
 */
final class QueryDataHubProjectsForRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getQos
 * @method self withQos
 * @method string getTopicFullName
 * @method self withTopicFullName
 * @method string getMessageContent
 * @method self withMessageContent
 */
final class Pub extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getRuleId
 * @method self withRuleId
 */
final class ListRuleActions extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class ListRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getPage
 * @method self withPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getAliyunCommodityCode
 * @method self withAliyunCommodityCode
 * @method string getName
 * @method self withName
 * @method Integer getNodeType
 * @method self withNodeType
 * @method Integer getStatus
 * @method self withStatus
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class ListProduct extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getActionId
 * @method self withActionId
 */
final class GetRuleAction extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getRuleId
 * @method self withRuleId
 */
final class GetRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getShadowMessage
 * @method self withShadowMessage
 */
final class GetDeviceShadow extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 */
final class GenerateOssUploadUri extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getFirmwareName
 * @method self withFirmwareName
 */
final class FinishVerifyTask extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getFirmwareName
 * @method self withFirmwareName
 */
final class DeviceUpgradeCount extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 */
final class DescribeRegions extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getActionId
 * @method self withActionId
 */
final class DeleteRuleAction extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getRuleId
 * @method self withRuleId
 */
final class DeleteRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getTopicId
 * @method self withTopicId
 */
final class DeleteProductTopic extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getFirmwareName
 * @method self withFirmwareName
 */
final class DeleteFirmware extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getRuleId
 * @method self withRuleId
 * @method string getSql
 * @method self withSql
 * @method string getJsonInfo
 * @method self withJsonInfo
 */
final class DebugRuleSql extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getRuleId
 * @method self withRuleId
 * @method string getType
 * @method self withType
 * @method string getConfiguration
 * @method self withConfiguration
 * @method Boolean getErrorActionFlag
 * @method self withErrorActionFlag
 */
final class CreateRuleAction extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getSelect
 * @method self withSelect
 * @method string getShortTopic
 * @method self withShortTopic
 * @method string getWhere
 * @method self withWhere
 * @method string getProductKey
 * @method self withProductKey
 * @method string getName
 * @method self withName
 * @method string getRuleDesc
 * @method self withRuleDesc
 * @method string getDataType
 * @method self withDataType
 * @method Integer getTopicType
 * @method self withTopicType
 */
final class CreateRule extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getTopicShortName
 * @method self withTopicShortName
 * @method string getOperation
 * @method self withOperation
 * @method string getDesc
 * @method self withDesc
 */
final class CreateProductTopic extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getFirmwareName
 * @method self withFirmwareName
 * @method string getDestVersion
 * @method self withDestVersion
 * @method string getFirmwareUrl
 * @method self withFirmwareUrl
 * @method string getFirmwareSign
 * @method self withFirmwareSign
 * @method string getSignMethod
 * @method self withSignMethod
 * @method Integer getFirmwareSize
 * @method self withFirmwareSize
 * @method string getProductKey
 * @method self withProductKey
 * @method string getFirmwareDesc
 * @method self withFirmwareDesc
 */
final class CreateFirmware extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductCode
 * @method self withProductCode
 */
final class CheckCloudProductOpenStatus extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getFirmwareName
 * @method self withFirmwareName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getUpgradeType
 * @method self withUpgradeType
 * @method string getStrategyType
 * @method self withStrategyType
 * @method string getDestVersion
 * @method self withDestVersion
 * @method string getLocations
 * @method self withLocations
 * @method RepeatList getSrcVersion
 * @method self withSrcVersion
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 * @method Boolean getDiff
 * @method self withDiff
 * @method RepeatList getSrcFirmwareName
 * @method self withSrcFirmwareName
 * @method Long getFireTime
 * @method self withFireTime
 * @method Long getRetryInterval
 * @method self withRetryInterval
 * @method Integer getRetryCount
 * @method self withRetryCount
 */
final class BatchDeviceUpgrade extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getTagName
 * @method self withTagName
 * @method string getTagKey
 * @method self withTagKey
 * @method string getTagValue
 * @method self withTagValue
 */
final class AddProductTag extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getTagString
 * @method self withTagString
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class BatchForceUpdateProductTag extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method RepeatList getTagKeys
 * @method self withTagKeys
 */
final class BatchDeleteProductTag extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getTagKey
 * @method self withTagKey
 */
final class DeleteProductTag extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getTagString
 * @method self withTagString
 */
final class BatchUpdateProductTag extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class ListCategory extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getProps
 * @method self withProps
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class ForceSetDeviceProp extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class ListProductTag extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryAlinkTopicList extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Integer getAbilityType
 * @method self withAbilityType
 * @method string getName
 * @method self withName
 */
final class ListStdAbility extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QueryDynamicRegisterSwitch extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class ResetProductSecret extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getAbilityType
 * @method self withAbilityType
 * @method string getDeviceType
 * @method self withDeviceType
 * @method string getIdentifier
 * @method self withIdentifier
 */
final class QueryStdAbilityInfo extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getTagName
 * @method self withTagName
 * @method string getTagKey
 * @method self withTagKey
 * @method string getTagValue
 * @method self withTagValue
 */
final class UpdateProductTag extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getStatus
 * @method self withStatus
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class SetDynamicRegisterSwitch extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getIotId
 * @method self withIotId
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getScope
 * @method self withScope
 * @method string getConfigName
 * @method self withConfigName
 * @method string getConfigContent
 * @method self withConfigContent
 * @method string getSignMethod
 * @method self withSignMethod
 * @method string getConfigFormat
 * @method self withConfigFormat
 */
final class AddThingConfig extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getCount
 * @method self withCount
 */
final class BatchRegisterDevicePop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 */
final class BatchRegisterDeviceWithNames extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Long getApplyId
 * @method self withApplyId
 */
final class BatchRegisterDeviceWithApplyIdPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 */
final class BatchRegisterDeviceWithNamesPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getScope
 * @method self withScope
 * @method string getIotId
 * @method self withIotId
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class PushThingConfig extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getConfigId
 * @method self withConfigId
 * @method Boolean getContainedOssUrl
 * @method self withContainedOssUrl
 */
final class QueryConfigByConfigId extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Long getApplyId
 * @method self withApplyId
 */
final class QueryBatchRegisterDeviceStatus extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getAsc
 * @method self withAsc
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryDevicePropertyDataPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class QueryDevicePropertyStatusPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getIotId
 * @method self withIotId
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getScope
 * @method self withScope
 * @method Boolean getContainedOssUrl
 * @method self withContainedOssUrl
 * @method Integer getStatus
 * @method self withStatus
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryThingConfig extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getScope
 * @method self withScope
 * @method string getType
 * @method self withType
 */
final class QueryThingFunctionSwitch extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getItems
 * @method self withItems
 */
final class SetDevicePropertyPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIdentifier
 * @method self withIdentifier
 * @method Integer getStatus
 * @method self withStatus
 * @method string getScope
 * @method self withScope
 * @method string getType
 * @method self withType
 */
final class SetThingFunctionSwitchStatus extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getTagString
 * @method self withTagString
 */
final class UpdateProductTagForProtal extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIotId
 * @method self withIotId
 */
final class GetGatewayBySubDevice extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIotId
 * @method self withIotId
 * @method string getParams
 * @method self withParams
 * @method string getAuthType
 * @method self withAuthType
 */
final class VerifyThingAuthentication extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIdentifier
 * @method self withIdentifier
 * @method Integer getStatus
 * @method self withStatus
 * @method string getScope
 * @method self withScope
 * @method string getType
 * @method self withType
 */
final class SetThingFunctionSwitchStatusPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIotId
 * @method self withIotId
 */
final class ResetThing extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class RemoveThingTopo extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getScope
 * @method self withScope
 * @method string getType
 * @method self withType
 */
final class QueryThingFunctionSwitchPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getIotId
 * @method self withIotId
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getScope
 * @method self withScope
 * @method Boolean getContainedOssUrl
 * @method self withContainedOssUrl
 * @method Integer getStatus
 * @method self withStatus
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryThingConfigPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getConfigId
 * @method self withConfigId
 * @method Boolean getContainedOssUrl
 * @method self withContainedOssUrl
 */
final class QueryConfigByConfigIdPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getScope
 * @method self withScope
 * @method string getIotId
 * @method self withIotId
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class PushThingConfigPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getDeviceListStr
 * @method self withDeviceListStr
 * @method string getGwIotId
 * @method self withGwIotId
 * @method string getGwProductKey
 * @method self withGwProductKey
 * @method string getGwDeviceName
 * @method self withGwDeviceName
 */
final class NotifyAddThingTopo extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIotId
 * @method self withIotId
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class GetThingTopo extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getIotId
 * @method self withIotId
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getScope
 * @method self withScope
 * @method string getConfigName
 * @method self withConfigName
 * @method string getConfigContent
 * @method self withConfigContent
 * @method string getSignMethod
 * @method self withSignMethod
 * @method string getConfigFormat
 * @method self withConfigFormat
 */
final class AddThingConfigPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getServiceId
 * @method self withServiceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getServiceName
 * @method self withServiceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getDescription
 * @method self withDescription
 * @method string getInputParams
 * @method self withInputParams
 * @method string getOutputParams
 * @method self withOutputParams
 * @method Integer getCallType
 * @method self withCallType
 */
final class UpdateServicePop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getScriptName
 * @method self withScriptName
 * @method string getScriptContent
 * @method self withScriptContent
 * @method string getScriptType
 * @method self withScriptType
 */
final class UpdateScriptPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getScriptContent
 * @method self withScriptContent
 * @method string getScriptType
 * @method self withScriptType
 * @method string getScriptCode
 * @method self withScriptCode
 * @method string getOssUrl
 * @method self withOssUrl
 */
final class UpdateScriptDraftPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Long getPropertyId
 * @method self withPropertyId
 * @method Integer getDataType
 * @method self withDataType
 * @method Integer getRwFlag
 * @method self withRwFlag
 * @method string getName
 * @method self withName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getDataSpecs
 * @method self withDataSpecs
 * @method string getDataSpecsList
 * @method self withDataSpecsList
 * @method string getDescription
 * @method self withDescription
 * @method string getDefinition
 * @method self withDefinition
 */
final class UpdatePropertyPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getProductName
 * @method self withProductName
 * @method string getDescription
 * @method self withDescription
 */
final class UpdateProductPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Long getEventId
 * @method self withEventId
 * @method Integer getEventType
 * @method self withEventType
 * @method string getEventName
 * @method self withEventName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getDescription
 * @method self withDescription
 * @method string getOutputData
 * @method self withOutputData
 */
final class UpdateEventPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getPropInfo
 * @method self withPropInfo
 */
final class SetDevicePropPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getInput
 * @method self withInput
 * @method string getScriptContent
 * @method self withScriptContent
 * @method Integer getType
 * @method self withType
 * @method string getScriptType
 * @method self withScriptType
 */
final class RunScriptPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class RegisterDevicePop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getSubDeviceName
 * @method self withSubDeviceName
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QuerySubDeviceListPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getIdentifier
 * @method self withIdentifier
 */
final class QueryProductServicePop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getIdentifier
 * @method self withIdentifier
 */
final class QueryProductPropertyPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryProductPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getPage
 * @method self withPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getAliyunCommodityCode
 * @method self withAliyunCommodityCode
 * @method string getName
 * @method self withName
 */
final class QueryProductListPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getIdentifier
 * @method self withIdentifier
 */
final class QueryProductEventPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryProductAbilityListPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryDeviceStatisticsPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getAsc
 * @method self withAsc
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryDeviceServiceDataPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class QueryDevicePropertyStatus extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getAsc
 * @method self withAsc
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryDevicePropertyData extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryDevicePagePop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getEventType
 * @method self withEventType
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getAsc
 * @method self withAsc
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryDeviceEventDataPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class QueryDeviceDetailPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class QueryDeviceAttrStatusPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getAttributeCode
 * @method self withAttributeCode
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getAsc
 * @method self withAsc
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryDeviceAttrDataPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Long getApplyId
 * @method self withApplyId
 */
final class QueryBatchCreateDeviceStatusPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getApplyId
 * @method self withApplyId
 */
final class QueryBatchCreateDeviceDetailPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Long getApplyId
 * @method self withApplyId
 */
final class QueryBatchCheckDeviceNamesStatus extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getName
 * @method self withName
 */
final class QueryAllProductListPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getArgs
 * @method self withArgs
 */
final class InvokeThingServicePop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getScriptId
 * @method self withScriptId
 */
final class GetScriptPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class GetScriptGenerateStatusPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class GetScriptGeneratePop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getScriptCode
 * @method self withScriptCode
 */
final class GetScriptDraftPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class GetDslPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class GetDeviceUserInfoPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class GetDeviceStatusPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getPropName
 * @method self withPropName
 */
final class GetDevicePropPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getScriptType
 * @method self withScriptType
 */
final class GenerateScriptPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class EnableThingPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class DisableThingPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getScriptCode
 * @method self withScriptCode
 */
final class DeleteScriptDraftPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class DeleteProductPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class DeleteDevicePop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getAbilityType
 * @method self withAbilityType
 * @method Long getAbilityId
 * @method self withAbilityId
 */
final class DeleteAbilityPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getFunctionType
 * @method self withFunctionType
 * @method string getFunctionCode
 * @method self withFunctionCode
 * @method string getArgs
 * @method self withArgs
 * @method string getEnvironment
 * @method self withEnvironment
 */
final class DebugAbilityPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getScriptName
 * @method self withScriptName
 * @method string getScriptContent
 * @method self withScriptContent
 * @method string getScriptType
 * @method self withScriptType
 */
final class CreateScriptPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getScriptContent
 * @method self withScriptContent
 * @method string getScriptType
 * @method self withScriptType
 * @method string getOssUrl
 * @method self withOssUrl
 */
final class CreateScriptDraftPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductName
 * @method self withProductName
 * @method Integer getNodeType
 * @method self withNodeType
 * @method Integer getDataFormat
 * @method self withDataFormat
 * @method string getDescription
 * @method self withDescription
 * @method string getAliyunCommodityCode
 * @method self withAliyunCommodityCode
 * @method Boolean getId2
 * @method self withId2
 * @method Integer getPayType
 * @method self withPayType
 * @method Long getCategoryId
 * @method self withCategoryId
 */
final class CreateProductPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getCallType
 * @method self withCallType
 * @method string getServiceName
 * @method self withServiceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getDescription
 * @method self withDescription
 * @method string getInputParams
 * @method self withInputParams
 * @method string getOutputParams
 * @method self withOutputParams
 */
final class CreateCustomServicePop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getDataType
 * @method self withDataType
 * @method Integer getRwFlag
 * @method self withRwFlag
 * @method string getName
 * @method self withName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getDescription
 * @method self withDescription
 * @method string getDataSpecs
 * @method self withDataSpecs
 * @method string getDataSpecsList
 * @method self withDataSpecsList
 */
final class CreateCustomPropertyPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getEventType
 * @method self withEventType
 * @method string getEventName
 * @method self withEventName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getDescription
 * @method self withDescription
 * @method string getOutputData
 * @method self withOutputData
 */
final class CreateCustomEventPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getAlinkJson
 * @method self withAlinkJson
 * @method Integer getType
 * @method self withType
 */
final class CheckAlinkProtocolPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Long getApplyId
 * @method self withApplyId
 */
final class BatchRegisterDeviceWithApplyId extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getCount
 * @method self withCount
 */
final class BatchRegisterDevice extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method RepeatList getProductKey
 * @method self withProductKey
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 */
final class BatchDeleteDevicePop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getApplyId
 * @method self withApplyId
 */
final class BatchCreateDeviceWithApplyIdPop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 */
final class BatchCheckDeviceNames extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getCount
 * @method self withCount
 */
final class ApplyBatchCreateDevicePop extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryAllProductList extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getItems
 * @method self withItems
 */
final class OpenSetDeviceProperty extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class OpenRegisterDevice extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getPage
 * @method self withPage
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class OpenQueryProductList extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class OpenQueryProduct extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class OpenQueryDeviceStatistics extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getAsc
 * @method self withAsc
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class OpenQueryDeviceServiceData extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class OpenQueryDevicePropertyStatus extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getAsc
 * @method self withAsc
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class OpenQueryDevicePropertyData extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getEventType
 * @method self withEventType
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getAsc
 * @method self withAsc
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class OpenQueryDeviceEventData extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class OpenQueryDeviceDetail extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Long getApplyId
 * @method self withApplyId
 */
final class OpenQueryBatchRegisterDeviceStatus extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getThingMethod
 * @method self withThingMethod
 * @method string getArgs
 * @method self withArgs
 */
final class OpenInvokeThingService extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class OpenGetDeviceStatus extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class OpenEnableThing extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class OpenDisableThing extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class OpenDeleteDevice extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 */
final class OpenBatchRegisterDeviceWithNames extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Long getapplyId
 * @method self withapplyId
 */
final class OpenBatchRegisterDeviceWithApplyId extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getCount
 * @method self withCount
 */
final class OpenBatchRegisterDevice extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getServiceId
 * @method self withServiceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getServiceName
 * @method self withServiceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getDescription
 * @method self withDescription
 * @method string getInputParams
 * @method self withInputParams
 * @method string getOutputParams
 * @method self withOutputParams
 * @method Integer getCallType
 * @method self withCallType
 * @method string getExtendConfig
 * @method self withExtendConfig
 * @method string getConfigCode
 * @method self withConfigCode
 */
final class UpdateService extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getScriptContent
 * @method self withScriptContent
 * @method string getScriptType
 * @method self withScriptType
 * @method string getScriptCode
 * @method self withScriptCode
 * @method string getOssUrl
 * @method self withOssUrl
 */
final class UpdateScriptDraft extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getScriptName
 * @method self withScriptName
 * @method string getScriptContent
 * @method self withScriptContent
 * @method string getScriptType
 * @method self withScriptType
 * @method string getBizTenantId
 * @method self withBizTenantId
 * @method string getScriptCode
 * @method self withScriptCode
 */
final class UpdateScript extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Long getPropertyId
 * @method self withPropertyId
 * @method Integer getDataType
 * @method self withDataType
 * @method Integer getRwFlag
 * @method self withRwFlag
 * @method string getName
 * @method self withName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getDataSpecs
 * @method self withDataSpecs
 * @method string getDataSpecsList
 * @method self withDataSpecsList
 * @method string getDescription
 * @method self withDescription
 * @method string getDefinition
 * @method self withDefinition
 * @method string getExtendConfig
 * @method self withExtendConfig
 * @method string getConfigCode
 * @method self withConfigCode
 */
final class UpdateProperty extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getProductName
 * @method self withProductName
 * @method string getDescription
 * @method self withDescription
 */
final class UpdateProduct extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Long getEventId
 * @method self withEventId
 * @method Integer getEventType
 * @method self withEventType
 * @method string getEventName
 * @method self withEventName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getDescription
 * @method self withDescription
 * @method string getOutputData
 * @method self withOutputData
 * @method string getExtendConfig
 * @method self withExtendConfig
 * @method string getConfigCode
 * @method self withConfigCode
 */
final class UpdateEvent extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getItems
 * @method self withItems
 */
final class SetDeviceProperty extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getInput
 * @method self withInput
 * @method string getScriptContent
 * @method self withScriptContent
 * @method Integer getType
 * @method self withType
 * @method string getScriptType
 * @method self withScriptType
 */
final class RunScript extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class RegisterDevice extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getSubDeviceName
 * @method self withSubDeviceName
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QuerySubDeviceList extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getIdentifier
 * @method self withIdentifier
 */
final class QueryProductService extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getIdentifier
 * @method self withIdentifier
 */
final class QueryProductProperty extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getAliyunCommodityCode
 * @method self withAliyunCommodityCode
 */
final class QueryProductList extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QueryProductEvent extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QueryProductAbilityList extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryProduct extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class QueryDeviceStatistics extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getAsc
 * @method self withAsc
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryDeviceServiceData extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getStatus
 * @method self withStatus
 * @method RepeatList getTag
 * @method self withTag
 * @method string getGroupId
 * @method self withGroupId
 * @method string getAliyunCommodityCode
 * @method self withAliyunCommodityCode
 * @method Integer getCurrentPage
 * @method self withCurrentPage
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class QueryDevicePage extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getEventType
 * @method self withEventType
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getAsc
 * @method self withAsc
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryDeviceEventData extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class QueryDeviceDetail extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class QueryDeviceAttrStatus extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getAttributeCode
 * @method self withAttributeCode
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method Integer getAsc
 * @method self withAsc
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryDeviceAttrData extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Long getApplyId
 * @method self withApplyId
 */
final class QueryBatchCreateDeviceStatus extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getApplyId
 * @method self withApplyId
 */
final class QueryBatchCreateDeviceDetail extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getArgs
 * @method self withArgs
 */
final class InvokeThingService extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class GetScriptGenerateStatus extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class GetScriptGenerate extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getScriptCode
 * @method self withScriptCode
 */
final class GetScriptDraft extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method Long getScriptId
 * @method self withScriptId
 */
final class GetScript extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class GetDsl extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class GetDeviceUserInfo extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class GetDeviceStatus extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getProductKey
 * @method self withProductKey
 * @method string getPropName
 * @method self withPropName
 */
final class GetDeviceProp extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getScriptType
 * @method self withScriptType
 */
final class GenerateScript extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class EnableThing extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class DisableThing extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getScriptCode
 * @method self withScriptCode
 */
final class DeleteScriptDraft extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 */
final class DeleteProduct extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getIotId
 * @method self withIotId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 */
final class DeleteDevice extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getAbilityType
 * @method self withAbilityType
 * @method Long getAbilityId
 * @method self withAbilityId
 * @method string getIdentifier
 * @method self withIdentifier
 */
final class DeleteAbility extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceName
 * @method self withDeviceName
 * @method string getFunctionType
 * @method self withFunctionType
 * @method string getFunctionCode
 * @method self withFunctionCode
 * @method string getArgs
 * @method self withArgs
 * @method string getEnvironment
 * @method self withEnvironment
 * @method string getBizTenantId
 * @method self withBizTenantId
 */
final class DebugAbility extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getScriptContent
 * @method self withScriptContent
 * @method string getScriptType
 * @method self withScriptType
 * @method string getOssUrl
 * @method self withOssUrl
 */
final class CreateScriptDraft extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getScriptName
 * @method self withScriptName
 * @method string getScriptContent
 * @method self withScriptContent
 * @method string getScriptType
 * @method self withScriptType
 */
final class CreateScript extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductName
 * @method self withProductName
 * @method Integer getNodeType
 * @method self withNodeType
 * @method Integer getDataFormat
 * @method self withDataFormat
 * @method string getDescription
 * @method self withDescription
 * @method string getAliyunCommodityCode
 * @method self withAliyunCommodityCode
 * @method Boolean getId2
 * @method self withId2
 * @method Long getCategoryId
 * @method self withCategoryId
 * @method string getProtocolType
 * @method self withProtocolType
 * @method string getNetType
 * @method self withNetType
 */
final class CreateProduct extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getCallType
 * @method self withCallType
 * @method string getServiceName
 * @method self withServiceName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getDescription
 * @method self withDescription
 * @method string getInputParams
 * @method self withInputParams
 * @method string getOutputParams
 * @method self withOutputParams
 * @method string getExtendConfig
 * @method self withExtendConfig
 */
final class CreateCustomService extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getDataType
 * @method self withDataType
 * @method Integer getRwFlag
 * @method self withRwFlag
 * @method string getName
 * @method self withName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getDescription
 * @method self withDescription
 * @method string getDataSpecs
 * @method self withDataSpecs
 * @method string getDataSpecsList
 * @method self withDataSpecsList
 * @method string getExtendConfig
 * @method self withExtendConfig
 */
final class CreateCustomProperty extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getEventType
 * @method self withEventType
 * @method string getEventName
 * @method self withEventName
 * @method string getIdentifier
 * @method self withIdentifier
 * @method string getDescription
 * @method self withDescription
 * @method string getOutputData
 * @method self withOutputData
 * @method string getExtendConfig
 * @method self withExtendConfig
 */
final class CreateCustomEvent extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getAlinkJson
 * @method self withAlinkJson
 * @method Integer getType
 * @method self withType
 */
final class CheckAlinkProtocol extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method RepeatList getProductKey
 * @method self withProductKey
 * @method RepeatList getDeviceName
 * @method self withDeviceName
 */
final class BatchDeleteDevice extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getApplyId
 * @method self withApplyId
 */
final class BatchCreateDeviceWithApplyId extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method string getDeviceNames
 * @method self withDeviceNames
 */
final class ApplyBatchCreateDeviceWithName extends RpcRequest
{
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId
 * @method string getProductKey
 * @method self withProductKey
 * @method Integer getCount
 * @method self withCount
 */
final class ApplyBatchCreateDevice extends RpcRequest
{
}
