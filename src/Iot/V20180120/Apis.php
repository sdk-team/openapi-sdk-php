<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method RelateProduct relateProduct($options = [])
 * @method GetArrears getArrears($options = [])
 * @method GetLVCategoryList getLVCategoryList($options = [])
 * @method CheckLVCloudProductOpened checkLVCloudProductOpened($options = [])
 * @method GetProductListByRelation getProductListByRelation($options = [])
 * @method QueryApiServices queryApiServices($options = [])
 * @method GrantApiServices grantApiServices($options = [])
 * @method CreateLdpApp createLdpApp($options = [])
 * @method UpdateLdpApp updateLdpApp($options = [])
 * @method DeleteLdpApp deleteLdpApp($options = [])
 * @method QueryLdpAppsList queryLdpAppsList($options = [])
 * @method ApplyDataAsset applyDataAsset($options = [])
 * @method UpdateDataAsset updateDataAsset($options = [])
 * @method GetDataAssetList getDataAssetList($options = [])
 * @method DeleteDataAsset deleteDataAsset($options = [])
 * @method CreateJobFolder createJobFolder($options = [])
 * @method RenameJobFolder renameJobFolder($options = [])
 * @method TryToDeleteJobFolderIfNecessarily tryToDeleteJobFolderIfNecessarily($options = [])
 * @method GetQueryJobFolderTree getQueryJobFolderTree($options = [])
 * @method DeleteJobFolder deleteJobFolder($options = [])
 * @method GetUserSourceTableList getUserSourceTableList($options = [])
 * @method GetProductAbilityTableList getProductAbilityTableList($options = [])
 * @method GetSourceOverviewData getSourceOverviewData($options = [])
 * @method CreateQueryJobBySQL createQueryJobBySQL($options = [])
 * @method GetProductAbilityOverviewData getProductAbilityOverviewData($options = [])
 * @method ValidateSqlStatement validateSqlStatement($options = [])
 * @method SyncExecQueryJob syncExecQueryJob($options = [])
 * @method CancelQueryJob cancelQueryJob($options = [])
 * @method GetQueryJobExecLog getQueryJobExecLog($options = [])
 * @method DeleteQueryJob deleteQueryJob($options = [])
 * @method RenameQueryJob renameQueryJob($options = [])
 * @method AsyncExecuteQueryJobForDownload asyncExecuteQueryJobForDownload($options = [])
 * @method UpdateQueryJob updateQueryJob($options = [])
 * @method RefreshProductAbilityTableList refreshProductAbilityTableList($options = [])
 * @method GetAvailableProductList getAvailableProductList($options = [])
 * @method GetQueryJob getQueryJob($options = [])
 * @method GetAppPermissionList getAppPermissionList($options = [])
 * @method GetPodContainerLog getPodContainerLog($options = [])
 * @method GetAppOperatingInfo getAppOperatingInfo($options = [])
 * @method UpdateSaaSAppPublishStatus updateSaaSAppPublishStatus($options = [])
 * @method GetAppUploadPath getAppUploadPath($options = [])
 * @method GetNamespacedPodEvent getNamespacedPodEvent($options = [])
 * @method QueryAuthorizedAppList queryAuthorizedAppList($options = [])
 * @method QueryDebugOnlineLogContent queryDebugOnlineLogContent($options = [])
 * @method QuerySolutionInstance querySolutionInstance($options = [])
 * @method ModifySolutionInstance modifySolutionInstance($options = [])
 * @method GetSolutionInstance getSolutionInstance($options = [])
 * @method CreateProject createProject($options = [])
 * @method QueryProjectsList queryProjectsList($options = [])
 * @method QueryMobileAppsList queryMobileAppsList($options = [])
 * @method QueryWebAppsList queryWebAppsList($options = [])
 * @method QueryServicesList queryServicesList($options = [])
 * @method DeployCustomConfigToEdgeInstance deployCustomConfigToEdgeInstance($options = [])
 * @method UnbindGatewayFromEdgeInstance unbindGatewayFromEdgeInstance($options = [])
 * @method EnableEdgeInstanceAutomationRule enableEdgeInstanceAutomationRule($options = [])
 * @method QueryEdgeInstanceHistoricDeployment queryEdgeInstanceHistoricDeployment($options = [])
 * @method QueryEdgeInstanceByFunction queryEdgeInstanceByFunction($options = [])
 * @method QueryEdgeInstanceDeployment queryEdgeInstanceDeployment($options = [])
 * @method DisableEdgeInstanceAutomationRule disableEdgeInstanceAutomationRule($options = [])
 * @method BatchGetEdgeInstanceAutomationRule batchGetEdgeInstanceAutomationRule($options = [])
 * @method GetEdgeInstanceByName getEdgeInstanceByName($options = [])
 * @method CreateFlowRule createFlowRule($options = [])
 * @method UpdateFlowRule updateFlowRule($options = [])
 * @method CreateEdgeClusterInstance createEdgeClusterInstance($options = [])
 * @method QueryMeasureList queryMeasureList($options = [])
 * @method QueryMeasureSummary queryMeasureSummary($options = [])
 * @method QueryMeasureTop queryMeasureTop($options = [])
 * @method GetRemoteDebugServiceMeta getRemoteDebugServiceMeta($options = [])
 * @method ImportDemoScene importDemoScene($options = [])
 * @method GetDeviceEventsForBim getDeviceEventsForBim($options = [])
 * @method QueryGeoMultiDeviceEventsByPage queryGeoMultiDeviceEventsByPage($options = [])
 * @method GetGatewayBySubDeviceBiz getGatewayBySubDeviceBiz($options = [])
 * @method RemoveThingTopoBiz removeThingTopoBiz($options = [])
 * @method GetDeviceStatusBiz getDeviceStatusBiz($options = [])
 * @method CreateProductBiz createProductBiz($options = [])
 * @method UpdateProductBiz updateProductBiz($options = [])
 * @method EnableThingBiz enableThingBiz($options = [])
 * @method DisableThingBiz disableThingBiz($options = [])
 * @method QueryDeviceDetailBiz queryDeviceDetailBiz($options = [])
 * @method QueryDeviceEventDataBiz queryDeviceEventDataBiz($options = [])
 * @method QueryDeviceServiceDataBiz queryDeviceServiceDataBiz($options = [])
 * @method QueryDevicePropBiz queryDevicePropBiz($options = [])
 * @method DeleteProductBiz deleteProductBiz($options = [])
 * @method QueryDevicePropertyStatusBiz queryDevicePropertyStatusBiz($options = [])
 * @method QueryDevicePropertyDataBiz queryDevicePropertyDataBiz($options = [])
 * @method QueryProductTopicBiz queryProductTopicBiz($options = [])
 * @method CreateProductTopicBiz createProductTopicBiz($options = [])
 * @method UpdateProductTopicBiz updateProductTopicBiz($options = [])
 * @method DeleteProductTopicBiz deleteProductTopicBiz($options = [])
 * @method QueryProductBiz queryProductBiz($options = [])
 * @method ListTables listTables($options = [])
 * @method ListColumns listColumns($options = [])
 * @method SaveSqlTaskView saveSqlTaskView($options = [])
 * @method UpdateSqlTaskView updateSqlTaskView($options = [])
 * @method ListSqlTaskView listSqlTaskView($options = [])
 * @method DeleteSqlTaskView deleteSqlTaskView($options = [])
 * @method PreviewTaskSql previewTaskSql($options = [])
 * @method CreateProductTags createProductTags($options = [])
 * @method UpdateProductTags updateProductTags($options = [])
 * @method DeleteProductTags deleteProductTags($options = [])
 * @method ListProductTags listProductTags($options = [])
 * @method ListProductByTags listProductByTags($options = [])
 * @method QueryDeviceGroupByTags queryDeviceGroupByTags($options = [])
 * @method ImportTslFromOss importTslFromOss($options = [])
 * @method GenerateOssUriForTsl generateOssUriForTsl($options = [])
 * @method LpPortalAccessService lpPortalAccessService($options = [])
 * @method UpgradeApp upgradeApp($options = [])
 * @method SaveImageUpgradeConfigVersion saveImageUpgradeConfigVersion($options = [])
 * @method QueryAppResourceConfig queryAppResourceConfig($options = [])
 * @method PublishImageUpgradeConfigVersion publishImageUpgradeConfigVersion($options = [])
 * @method ListConfigVersion listConfigVersion($options = [])
 * @method ListConfigNodeImage listConfigNodeImage($options = [])
 * @method IsOperable isOperable($options = [])
 * @method GetServiceNameAndPort getServiceNameAndPort($options = [])
 * @method GetOperationIngress getOperationIngress($options = [])
 * @method GetDomainNameConfig getDomainNameConfig($options = [])
 * @method ExpandAppResource expandAppResource($options = [])
 * @method EnableOperationIngress enableOperationIngress($options = [])
 * @method DisableOperationIngress disableOperationIngress($options = [])
 * @method BindAppDomain bindAppDomain($options = [])
 * @method QueryEdgeInstanceDeviceByName queryEdgeInstanceDeviceByName($options = [])
 * @method GetRemoteDebugToken getRemoteDebugToken($options = [])
 * @method QueryDeviceUpgradeCount queryDeviceUpgradeCount($options = [])
 * @method QueryGeoDevicePropertyByPage queryGeoDevicePropertyByPage($options = [])
 * @method LocateDeviceByFingerprint locateDeviceByFingerprint($options = [])
 * @method SaveShareInfo saveShareInfo($options = [])
 * @method GetShareInfo getShareInfo($options = [])
 * @method QueryLinkFaceLicense queryLinkFaceLicense($options = [])
 * @method QueryLinkFaceActiveCodeInfo queryLinkFaceActiveCodeInfo($options = [])
 * @method QueryLinkFaceProductInfo queryLinkFaceProductInfo($options = [])
 * @method QueryLinkFaceConsumerByCodes queryLinkFaceConsumerByCodes($options = [])
 * @method BuyLinkFaceLicenseToBusiness buyLinkFaceLicenseToBusiness($options = [])
 * @method OpenLinkFaceService openLinkFaceService($options = [])
 * @method BatchAddThingTopo batchAddThingTopo($options = [])
 * @method QueryDeviceListByDeviceGroup queryDeviceListByDeviceGroup($options = [])
 * @method QueryDevicePropertiesData queryDevicePropertiesData($options = [])
 * @method UpdateEdgeInstanceSls updateEdgeInstanceSls($options = [])
 * @method UpdateEdgeInstanceMessageRoute updateEdgeInstanceMessageRoute($options = [])
 * @method UnbindRoleFromEdgeInstance unbindRoleFromEdgeInstance($options = [])
 * @method BindDeviceToEdgeInstance bindDeviceToEdgeInstance($options = [])
 * @method UpdateEdgeInstance updateEdgeInstance($options = [])
 * @method QueryEdgeInstanceDeployDetail queryEdgeInstanceDeployDetail($options = [])
 * @method UnbindFunctionFromEdgeInstance unbindFunctionFromEdgeInstance($options = [])
 * @method QueryDeviceDebugStatus queryDeviceDebugStatus($options = [])
 * @method ResetEdgeInstanceDeployments resetEdgeInstanceDeployments($options = [])
 * @method QueryEdgeInstanceFunction queryEdgeInstanceFunction($options = [])
 * @method GetEdgeInstanceLogs getEdgeInstanceLogs($options = [])
 * @method QueryAutomationRule queryAutomationRule($options = [])
 * @method QueryEdgeInstanceMessageRoute queryEdgeInstanceMessageRoute($options = [])
 * @method UnbindStreamFromEdgeInstance unbindStreamFromEdgeInstance($options = [])
 * @method BatchGetEdgeInstanceAutomationRuleRelRuleStatus batchGetEdgeInstanceAutomationRuleRelRuleStatus($options = [])
 * @method UnbindDeviceFromEdgeInstance unbindDeviceFromEdgeInstance($options = [])
 * @method UnbindAutomationRuleFromEdgeInstance unbindAutomationRuleFromEdgeInstance($options = [])
 * @method GetEdgeInstanceByGateway getEdgeInstanceByGateway($options = [])
 * @method QueryEdgeInstanceAutomationRule queryEdgeInstanceAutomationRule($options = [])
 * @method GetEdgeInstanceMessageRoute getEdgeInstanceMessageRoute($options = [])
 * @method GetEdgeInstance getEdgeInstance($options = [])
 * @method CheckAndRemoveTopo checkAndRemoveTopo($options = [])
 * @method CreateEdgeInstanceMessageRoute createEdgeInstanceMessageRoute($options = [])
 * @method BatchGetEdgeInstanceDeviceStatus batchGetEdgeInstanceDeviceStatus($options = [])
 * @method GetEdgeInstanceSls getEdgeInstanceSls($options = [])
 * @method DeleteEdgeInstance deleteEdgeInstance($options = [])
 * @method CreateEdgeInstance createEdgeInstance($options = [])
 * @method GetCloudMonitorNode getCloudMonitorNode($options = [])
 * @method BatchGetEdgeInstanceFunctionStatus batchGetEdgeInstanceFunctionStatus($options = [])
 * @method QueryEdgeInstanceGateway queryEdgeInstanceGateway($options = [])
 * @method QuerySummaryAutomationRuleLog querySummaryAutomationRuleLog($options = [])
 * @method QueryEdgeInstanceDevice queryEdgeInstanceDevice($options = [])
 * @method QueryEdgeInstanceProduct queryEdgeInstanceProduct($options = [])
 * @method BindGatewayToEdgeInstance bindGatewayToEdgeInstance($options = [])
 * @method QueryDetailAutomationRuleLog queryDetailAutomationRuleLog($options = [])
 * @method BindFunctionToEdgeInstance bindFunctionToEdgeInstance($options = [])
 * @method StartDeviceDebug startDeviceDebug($options = [])
 * @method CreateEdgeInstanceSls createEdgeInstanceSls($options = [])
 * @method BatchGetEdgeInstanceStreamStatus batchGetEdgeInstanceStreamStatus($options = [])
 * @method QueryEdgeInstance queryEdgeInstance($options = [])
 * @method BindAutomationRuleToEdgeInstance bindAutomationRuleToEdgeInstance($options = [])
 * @method BindStreamToEdgeInstance bindStreamToEdgeInstance($options = [])
 * @method QueryEdgeInstanceStream queryEdgeInstanceStream($options = [])
 * @method BatchGetEdgeInstanceAutomationRuleDeviceStatus batchGetEdgeInstanceAutomationRuleDeviceStatus($options = [])
 * @method UpdateCloudMonitorSwitch updateCloudMonitorSwitch($options = [])
 * @method BatchGetEdgeInstanceAutomationRuleStatus batchGetEdgeInstanceAutomationRuleStatus($options = [])
 * @method DeleteEdgeInstanceMessageRoute deleteEdgeInstanceMessageRoute($options = [])
 * @method QueryEdgeInstanceWithGateway queryEdgeInstanceWithGateway($options = [])
 * @method CreateEdgeInstanceDeployment createEdgeInstanceDeployment($options = [])
 * @method BindRoleToEdgeInstance bindRoleToEdgeInstance($options = [])
 * @method UpdateEdgeInstanceFunction updateEdgeInstanceFunction($options = [])
 * @method QueryDriver queryDriver($options = [])
 * @method SetEdgeInstanceDeviceDriver setEdgeInstanceDeviceDriver($options = [])
 * @method QueryDeviceVersionCountByPk queryDeviceVersionCountByPk($options = [])
 * @method UpdateEdgeNode updateEdgeNode($options = [])
 * @method RebootApp rebootApp($options = [])
 * @method QueryAppUnifyProperty queryAppUnifyProperty($options = [])
 * @method QueryAppUnifyEvent queryAppUnifyEvent($options = [])
 * @method GetAppPodSession getAppPodSession($options = [])
 * @method QueryFirmwareList queryFirmwareList($options = [])
 * @method GetNetStatusReport getNetStatusReport($options = [])
 * @method QuerySuperDeviceGroup querySuperDeviceGroup($options = [])
 * @method BatchUpdateFirmware batchUpdateFirmware($options = [])
 * @method BatchDeleteBlankProductKeyFirmware batchDeleteBlankProductKeyFirmware($options = [])
 * @method QueryDevicePictureFile queryDevicePictureFile($options = [])
 * @method QueryPictureFiles queryPictureFiles($options = [])
 * @method SetDeviceRecordLifeCycle setDeviceRecordLifeCycle($options = [])
 * @method QueryDeviceRecordLifeCycle queryDeviceRecordLifeCycle($options = [])
 * @method QueryDeviceEvent queryDeviceEvent($options = [])
 * @method QueryRecord queryRecord($options = [])
 * @method QueryMonthRecord queryMonthRecord($options = [])
 * @method QueryRecordUrl queryRecordUrl($options = [])
 * @method QueryDeviceFileVod queryDeviceFileVod($options = [])
 * @method SetDevicePictureLifeCycle setDevicePictureLifeCycle($options = [])
 * @method UpdateRecordPlan updateRecordPlan($options = [])
 * @method UpdateTimeTemplate updateTimeTemplate($options = [])
 * @method QueryRecordPlans queryRecordPlans($options = [])
 * @method QueryTimeTemplate queryTimeTemplate($options = [])
 * @method DeleteRecordPlan deleteRecordPlan($options = [])
 * @method QueryRecordPlanDetail queryRecordPlanDetail($options = [])
 * @method AddRecordPlanDevice addRecordPlanDevice($options = [])
 * @method UpdateRecordPlanDevice updateRecordPlanDevice($options = [])
 * @method SetEventRecordPlan setEventRecordPlan($options = [])
 * @method QueryRecordPlanDevices queryRecordPlanDevices($options = [])
 * @method QueryDevicePictureLifeCycle queryDevicePictureLifeCycle($options = [])
 * @method DeleteRecordPlanDevice deleteRecordPlanDevice($options = [])
 * @method QueryTimeTemplateDetail queryTimeTemplateDetail($options = [])
 * @method QueryLiveStreaming queryLiveStreaming($options = [])
 * @method SetRecordPlan setRecordPlan($options = [])
 * @method TriggerCapturePicture triggerCapturePicture($options = [])
 * @method UpdateEventRecordPlan updateEventRecordPlan($options = [])
 * @method AddEventRecordPlanDevice addEventRecordPlanDevice($options = [])
 * @method QueryEventRecordPlans queryEventRecordPlans($options = [])
 * @method UpdateEventRecordPlanDevice updateEventRecordPlanDevice($options = [])
 * @method QueryEventRecordPlanDevices queryEventRecordPlanDevices($options = [])
 * @method DeleteTimeTemplate deleteTimeTemplate($options = [])
 * @method QueryDeviceList queryDeviceList($options = [])
 * @method TriggerRecord triggerRecord($options = [])
 * @method GetDeviceProductList getDeviceProductList($options = [])
 * @method QueryEventRecordPlanByDevice queryEventRecordPlanByDevice($options = [])
 * @method QueryRecordPlanByDevice queryRecordPlanByDevice($options = [])
 * @method QueryDeviceEventRecord queryDeviceEventRecord($options = [])
 * @method DeleteEventRecordPlan deleteEventRecordPlan($options = [])
 * @method QueryEventRecordPlanDetail queryEventRecordPlanDetail($options = [])
 * @method QueryDeviceEventPicture queryDeviceEventPicture($options = [])
 * @method DeleteEventRecordPlanDevice deleteEventRecordPlanDevice($options = [])
 * @method StopLiveStreaming stopLiveStreaming($options = [])
 * @method SetTimeTemplate setTimeTemplate($options = [])
 * @method ModifyDeviceStatus modifyDeviceStatus($options = [])
 * @method ActiveDevice activeDevice($options = [])
 * @method SetDeviceStorageLifeCycle setDeviceStorageLifeCycle($options = [])
 * @method QueryDeviceByTags queryDeviceByTags($options = [])
 * @method SetDevicesProperty setDevicesProperty($options = [])
 * @method InvokeThingsService invokeThingsService($options = [])
 * @method UnregisterAppService unregisterAppService($options = [])
 * @method RegisterAppService registerAppService($options = [])
 * @method ListAppServiceGroup listAppServiceGroup($options = [])
 * @method ListAppKey listAppKey($options = [])
 * @method GetRegisterAppService getRegisterAppService($options = [])
 * @method GetAppSsoUrl getAppSsoUrl($options = [])
 * @method GetAppSecret getAppSecret($options = [])
 * @method GetAppPodInfo getAppPodInfo($options = [])
 * @method GetAppInstanceInfo getAppInstanceInfo($options = [])
 * @method GetAppBaseInfo getAppBaseInfo($options = [])
 * @method DeleteAppKey deleteAppKey($options = [])
 * @method DeleteAppInstance deleteAppInstance($options = [])
 * @method CreateAppKey createAppKey($options = [])
 * @method CreateAppInstance createAppInstance($options = [])
 * @method AuthorizeAppkeyInvoke authorizeAppkeyInvoke($options = [])
 * @method QueryUnimportedProducts queryUnimportedProducts($options = [])
 * @method CreateProductInGroup createProductInGroup($options = [])
 * @method ListPresentCategoryStdAbilityByName listPresentCategoryStdAbilityByName($options = [])
 * @method UpdateProductStdEvent updateProductStdEvent($options = [])
 * @method ListProductStdAbility listProductStdAbility($options = [])
 * @method ListOtherCategoryStdAbilityByName listOtherCategoryStdAbilityByName($options = [])
 * @method UpdateProductStdService updateProductStdService($options = [])
 * @method ListCategoryStdAbility listCategoryStdAbility($options = [])
 * @method SetLinkPlatformServiceOpen setLinkPlatformServiceOpen($options = [])
 * @method ListAllCategory listAllCategory($options = [])
 * @method QueryProductAllInfo queryProductAllInfo($options = [])
 * @method ListProductCustomAbility listProductCustomAbility($options = [])
 * @method UpdateProductStdProperty updateProductStdProperty($options = [])
 * @method BatchAddStdAbility batchAddStdAbility($options = [])
 * @method GetPortalJsUrlsConfigForBIM getPortalJsUrlsConfigForBIM($options = [])
 * @method ListAuthorizedPhoneNum listAuthorizedPhoneNum($options = [])
 * @method DeleteAuthorizedPhoneNum deleteAuthorizedPhoneNum($options = [])
 * @method RegisterPhoneNumToOa registerPhoneNumToOa($options = [])
 * @method SetDeviceGroupTags setDeviceGroupTags($options = [])
 * @method UpdateGeoProject updateGeoProject($options = [])
 * @method queryAppBindDeviceList queryAppBindDeviceList($options = [])
 * @method QueryAppVirtualDeviceConfig queryAppVirtualDeviceConfig($options = [])
 * @method DelAppVirtualDeviceConfig delAppVirtualDeviceConfig($options = [])
 * @method SaveAppVirtualDeviceConfig saveAppVirtualDeviceConfig($options = [])
 * @method QueryMessageInfo queryMessageInfo($options = [])
 * @method ListSupportedCloudProducts listSupportedCloudProducts($options = [])
 * @method QueryStandardUnit queryStandardUnit($options = [])
 * @method BatchGetDriverStatus batchGetDriverStatus($options = [])
 * @method DeleteDriver deleteDriver($options = [])
 * @method BindStreamToGroup bindStreamToGroup($options = [])
 * @method GetDriver getDriver($options = [])
 * @method BatchGetGroupStreamStatus batchGetGroupStreamStatus($options = [])
 * @method UnbindStreamFromGroup unbindStreamFromGroup($options = [])
 * @method ListGroupStream listGroupStream($options = [])
 * @method BatchGetDriver batchGetDriver($options = [])
 * @method CreateDriver createDriver($options = [])
 * @method UpdateDriver updateDriver($options = [])
 * @method ListDriver listDriver($options = [])
 * @method GetOfficialDriver getOfficialDriver($options = [])
 * @method UpdateAppConfigPublishStatus updateAppConfigPublishStatus($options = [])
 * @method CreateEdgeCluster createEdgeCluster($options = [])
 * @method DeleteEdgeNode deleteEdgeNode($options = [])
 * @method QueryEdgeClusterList queryEdgeClusterList($options = [])
 * @method CreateEdgeNode createEdgeNode($options = [])
 * @method GetEdgeNodeBootstrapScript getEdgeNodeBootstrapScript($options = [])
 * @method QueryEdgeNodeList queryEdgeNodeList($options = [])
 * @method UpdateEdgeCluster updateEdgeCluster($options = [])
 * @method DeleteEdgeCluster deleteEdgeCluster($options = [])
 * @method GetEdgeNode getEdgeNode($options = [])
 * @method MulticastMessagePop multicastMessagePop($options = [])
 * @method SubmitTransferApply submitTransferApply($options = [])
 * @method ReleaseProduct releaseProduct($options = [])
 * @method RejectTransfer rejectTransfer($options = [])
 * @method QuickStart quickStart($options = [])
 * @method QueryTransferDeviceList queryTransferDeviceList($options = [])
 * @method QueryTransferApplyByPage queryTransferApplyByPage($options = [])
 * @method QueryReceivedTransferApplyList queryReceivedTransferApplyList($options = [])
 * @method QueryReceivedAuthProductList queryReceivedAuthProductList($options = [])
 * @method QueryQuickStartSdk queryQuickStartSdk($options = [])
 * @method QueryDeviceListByAuthProduct queryDeviceListByAuthProduct($options = [])
 * @method QueryAuthorizeProductPage queryAuthorizeProductPage($options = [])
 * @method QueryAuthorizeDevicePage queryAuthorizeDevicePage($options = [])
 * @method QueryAllDeviceListByAuthProduct queryAllDeviceListByAuthProduct($options = [])
 * @method QueryAliyunUserInfo queryAliyunUserInfo($options = [])
 * @method ListAvailableProducts listAvailableProducts($options = [])
 * @method CancelTransferApply cancelTransferApply($options = [])
 * @method CancelReleaseProduct cancelReleaseProduct($options = [])
 * @method CancelAuthorizedProduct cancelAuthorizedProduct($options = [])
 * @method CancelAuthorizedDevices cancelAuthorizedDevices($options = [])
 * @method AuthorizeProduct authorizeProduct($options = [])
 * @method AuthorizeDevices authorizeDevices($options = [])
 * @method AcceptTransfer acceptTransfer($options = [])
 * @method BindRoleToGroup bindRoleToGroup($options = [])
 * @method UnbindRoleFromGroup unbindRoleFromGroup($options = [])
 * @method BatchGetGroupAutomationRuleRelRuleStatus batchGetGroupAutomationRuleRelRuleStatus($options = [])
 * @method GetTaskList getTaskList($options = [])
 * @method UpdateDataSource updateDataSource($options = [])
 * @method GetDataSource getDataSource($options = [])
 * @method PublishTask publishTask($options = [])
 * @method CloneTask cloneTask($options = [])
 * @method GetDataSourceList getDataSourceList($options = [])
 * @method CheckDataSourceValid checkDataSourceValid($options = [])
 * @method CreateTask createTask($options = [])
 * @method DeleteDataSource deleteDataSource($options = [])
 * @method UpdateTaskDetail updateTaskDetail($options = [])
 * @method ValidateLaUser validateLaUser($options = [])
 * @method UpdateTaskMeta updateTaskMeta($options = [])
 * @method CheckTaskSql checkTaskSql($options = [])
 * @method CheckDataSourceOutput checkDataSourceOutput($options = [])
 * @method GetOnsInfoList getOnsInfoList($options = [])
 * @method CreateLaUser createLaUser($options = [])
 * @method UpdateTask updateTask($options = [])
 * @method GetComponentList getComponentList($options = [])
 * @method WithdrawTask withdrawTask($options = [])
 * @method GetProductList getProductList($options = [])
 * @method GetTask getTask($options = [])
 * @method GetProductMeta getProductMeta($options = [])
 * @method GetTaskStatus getTaskStatus($options = [])
 * @method CreateDataSource createDataSource($options = [])
 * @method DeleteTask deleteTask($options = [])
 * @method QueryAppDeviceList queryAppDeviceList($options = [])
 * @method GetAppImageRepoUser getAppImageRepoUser($options = [])
 * @method GetAppDeploymentDetail getAppDeploymentDetail($options = [])
 * @method GetAppSignContent getAppSignContent($options = [])
 * @method ListAppDeploymentRecord listAppDeploymentRecord($options = [])
 * @method ListAppRepoTags listAppRepoTags($options = [])
 * @method QueryAppAlarmList queryAppAlarmList($options = [])
 * @method DeleteAppRepoTag deleteAppRepoTag($options = [])
 * @method GetAppNodePropertyList getAppNodePropertyList($options = [])
 * @method CancelAppDeviceAuthorization cancelAppDeviceAuthorization($options = [])
 * @method ListApp listApp($options = [])
 * @method SaveAppNodeProperty saveAppNodeProperty($options = [])
 * @method UpdateAppAlarm updateAppAlarm($options = [])
 * @method SignApp signApp($options = [])
 * @method CreateAppImageRepo createAppImageRepo($options = [])
 * @method DeleteAppAlarm deleteAppAlarm($options = [])
 * @method DeleteAppImageRepo deleteAppImageRepo($options = [])
 * @method CreateAppDeviceAuthorization createAppDeviceAuthorization($options = [])
 * @method GetAccountBalance getAccountBalance($options = [])
 * @method GetAppConfigList getAppConfigList($options = [])
 * @method CreateAppAlarm createAppAlarm($options = [])
 * @method GetAppImageRepo getAppImageRepo($options = [])
 * @method DeleteAppConfig deleteAppConfig($options = [])
 * @method SaveAppConfig saveAppConfig($options = [])
 * @method CancelAppAuthorization cancelAppAuthorization($options = [])
 * @method GetAppConfigDetail getAppConfigDetail($options = [])
 * @method DeleteAppDeployment deleteAppDeployment($options = [])
 * @method QueryAppMonitorMetric queryAppMonitorMetric($options = [])
 * @method GetAppServiceInfo getAppServiceInfo($options = [])
 * @method CreateAppAuthorization createAppAuthorization($options = [])
 * @method UpdateAppImageRepoPassword updateAppImageRepoPassword($options = [])
 * @method GetHaveRoleStatus getHaveRoleStatus($options = [])
 * @method ListAppImageRepos listAppImageRepos($options = [])
 * @method InitializeAppImageRepoPassword initializeAppImageRepoPassword($options = [])
 * @method GetUserBusinessEnabledStatus getUserBusinessEnabledStatus($options = [])
 * @method DeleteApp deleteApp($options = [])
 * @method GetAppConfigurableNode getAppConfigurableNode($options = [])
 * @method CreateAppDeployment createAppDeployment($options = [])
 * @method ExpandAppDeploymentResource expandAppDeploymentResource($options = [])
 * @method GetAppVerifyNodePropertyResultAppConfig getAppVerifyNodePropertyResultAppConfig($options = [])
 * @method QueryAppDeviceAuthorization queryAppDeviceAuthorization($options = [])
 * @method GetAppProperty getAppProperty($options = [])
 * @method GetAppNodes getAppNodes($options = [])
 * @method GetAppServiceRole getAppServiceRole($options = [])
 * @method QueryAppOwnerDeviceList queryAppOwnerDeviceList($options = [])
 * @method ListAppDeploymentService listAppDeploymentService($options = [])
 * @method CreateAppEdgeDeployment createAppEdgeDeployment($options = [])
 * @method QueryAppAuthorization queryAppAuthorization($options = [])
 * @method QueryDeviceLocationByProductPage queryDeviceLocationByProductPage($options = [])
 * @method QueryDeviceLocationByGroupPage queryDeviceLocationByGroupPage($options = [])
 * @method QueryDevicePropertyByProductPage queryDevicePropertyByProductPage($options = [])
 * @method QueryDevicePropertyByGroupPage queryDevicePropertyByGroupPage($options = [])
 * @method SetGeoDeviceProperty setGeoDeviceProperty($options = [])
 * @method QueryGeoDeviceProperty queryGeoDeviceProperty($options = [])
 * @method QueryProductListByGroup queryProductListByGroup($options = [])
 * @method PublishGeoProject publishGeoProject($options = [])
 * @method SaveMapConfig saveMapConfig($options = [])
 * @method ChangeGeoProjectName changeGeoProjectName($options = [])
 * @method QueryGeoProject queryGeoProject($options = [])
 * @method DuplicateGeoProject duplicateGeoProject($options = [])
 * @method DeleteGeoProject deleteGeoProject($options = [])
 * @method CreateGeoProject createGeoProject($options = [])
 * @method DeleteBIMScene deleteBIMScene($options = [])
 * @method GetPortalDescImage getPortalDescImage($options = [])
 * @method SaveScene saveScene($options = [])
 * @method PublishScene publishScene($options = [])
 * @method InitScene initScene($options = [])
 * @method GetPortalClasicScenes getPortalClasicScenes($options = [])
 * @method DeleteScene deleteScene($options = [])
 * @method GetBindSceneInfo getBindSceneInfo($options = [])
 * @method GetProductPropertiesForBim getProductPropertiesForBim($options = [])
 * @method CopyBIMScene copyBIMScene($options = [])
 * @method GenerateBIMOssUploadUri generateBIMOssUploadUri($options = [])
 * @method UpdateDeviceGroup updateDeviceGroup($options = [])
 * @method QueryDeviceGroupTree queryDeviceGroupTree($options = [])
 * @method QueryDeviceGroupTagList queryDeviceGroupTagList($options = [])
 * @method QueryDeviceGroupList queryDeviceGroupList($options = [])
 * @method QueryDeviceGroupInfo queryDeviceGroupInfo($options = [])
 * @method QueryDeviceGroupByName queryDeviceGroupByName($options = [])
 * @method QueryDeviceGroupByDevice queryDeviceGroupByDevice($options = [])
 * @method ForceSetDeviceGroupTag forceSetDeviceGroupTag($options = [])
 * @method DeleteDeviceGroup deleteDeviceGroup($options = [])
 * @method CreateDeviceGroup createDeviceGroup($options = [])
 * @method BatchDeleteDeviceGroupRelations batchDeleteDeviceGroupRelations($options = [])
 * @method BatchAddDeviceGroupRelations batchAddDeviceGroupRelations($options = [])
 * @method GetMultiDeviceStatusForBim getMultiDeviceStatusForBim($options = [])
 * @method UnzipAndPushScene unzipAndPushScene($options = [])
 * @method GetUserScenes getUserScenes($options = [])
 * @method QueryDevicePageForBim queryDevicePageForBim($options = [])
 * @method QueryGeoProjectList queryGeoProjectList($options = [])
 * @method CheckIsUnzipSuccess checkIsUnzipSuccess($options = [])
 * @method GetDeviceStatusForBim getDeviceStatusForBim($options = [])
 * @method SetDeviceStatusForBim setDeviceStatusForBim($options = [])
 * @method RRpc rRpc($options = [])
 * @method QueryPageByApplyId queryPageByApplyId($options = [])
 * @method QueryDevice queryDevice($options = [])
 * @method SaveDeviceProp saveDeviceProp($options = [])
 * @method QueryTopicRouteTable queryTopicRouteTable($options = [])
 * @method QueryTopicReverseRouteTable queryTopicReverseRouteTable($options = [])
 * @method PubBroadcast pubBroadcast($options = [])
 * @method DeleteTopicRouteTable deleteTopicRouteTable($options = [])
 * @method DeleteDeviceProp deleteDeviceProp($options = [])
 * @method CreateTopicRouteTable createTopicRouteTable($options = [])
 * @method BatchGetDeviceState batchGetDeviceState($options = [])
 * @method UpdateSecureUpgradeFlag updateSecureUpgradeFlag($options = [])
 * @method UpdateGatewayServerConfig updateGatewayServerConfig($options = [])
 * @method UpdateChildDeviceConfig updateChildDeviceConfig($options = [])
 * @method RetryDiff retryDiff($options = [])
 * @method QueryVirtualDevice queryVirtualDevice($options = [])
 * @method QuerySecureUpgradePublicKey querySecureUpgradePublicKey($options = [])
 * @method QueryModelConfig queryModelConfig($options = [])
 * @method QueryGatewayServerConfig queryGatewayServerConfig($options = [])
 * @method QueryDiffTask queryDiffTask($options = [])
 * @method QueryChildDeviceConfig queryChildDeviceConfig($options = [])
 * @method PushDeviceConfig pushDeviceConfig($options = [])
 * @method PostDevicePropertiesRegularly postDevicePropertiesRegularly($options = [])
 * @method PostDeviceProperties postDeviceProperties($options = [])
 * @method PostDeviceEventsRegularly postDeviceEventsRegularly($options = [])
 * @method PostDeviceEvents postDeviceEvents($options = [])
 * @method ListGatewayServerConfig listGatewayServerConfig($options = [])
 * @method ImportTsl importTsl($options = [])
 * @method GenerateOpcUaUploadUrl generateOpcUaUploadUrl($options = [])
 * @method DoDeviceOnline doDeviceOnline($options = [])
 * @method DoDeviceOffline doDeviceOffline($options = [])
 * @method DeleteGatewayServerConfig deleteGatewayServerConfig($options = [])
 * @method CreateGatewayServerConfig createGatewayServerConfig($options = [])
 * @method CreateChildDevice createChildDevice($options = [])
 * @method CreateBatchDiff createBatchDiff($options = [])
 * @method CopyProductAbility copyProductAbility($options = [])
 * @method CancelDiff cancelDiff($options = [])
 * @method UpdateDriverTemplate updateDriverTemplate($options = [])
 * @method DeleteDriverTemplate deleteDriverTemplate($options = [])
 * @method BindGatewayToGroup bindGatewayToGroup($options = [])
 * @method UnbindDriverFromGroup unbindDriverFromGroup($options = [])
 * @method GetGroupDriver getGroupDriver($options = [])
 * @method UpdateDeviceConfig updateDeviceConfig($options = [])
 * @method ListDriverTemplate listDriverTemplate($options = [])
 * @method BindDriverToGroup bindDriverToGroup($options = [])
 * @method GetDriverTemplate getDriverTemplate($options = [])
 * @method CreateDriverTemplate createDriverTemplate($options = [])
 * @method ListGroupDriver listGroupDriver($options = [])
 * @method UpdateGroupDriverConfig updateGroupDriverConfig($options = [])
 * @method BatchGetDriverTemplateInfo batchGetDriverTemplateInfo($options = [])
 * @method BatchGetDriverTemplateStatus batchGetDriverTemplateStatus($options = [])
 * @method UpdateServerCallback updateServerCallback($options = [])
 * @method QueryReducedTsl queryReducedTsl($options = [])
 * @method QueryDeviceBatchList queryDeviceBatchList($options = [])
 * @method QueryDeviceBatchInfo queryDeviceBatchInfo($options = [])
 * @method QueryBatchApplyDeviceList queryBatchApplyDeviceList($options = [])
 * @method ListServerCallbacks listServerCallbacks($options = [])
 * @method UnbindAutomationRuleFromGroup unbindAutomationRuleFromGroup($options = [])
 * @method BatchGetGroupAutomationRuleStatus batchGetGroupAutomationRuleStatus($options = [])
 * @method GetGroupGateway getGroupGateway($options = [])
 * @method ListGroupFunction listGroupFunction($options = [])
 * @method BatchGetGroupAutomationRuleDeviceStatus batchGetGroupAutomationRuleDeviceStatus($options = [])
 * @method CreateAutomationRule createAutomationRule($options = [])
 * @method ListGroupDevice listGroupDevice($options = [])
 * @method BindDeviceToGroup bindDeviceToGroup($options = [])
 * @method ListGroup listGroup($options = [])
 * @method EnableAutomationRule enableAutomationRule($options = [])
 * @method BatchGetGroupDeviceStatus batchGetGroupDeviceStatus($options = [])
 * @method UnbindFunctionFromGroup unbindFunctionFromGroup($options = [])
 * @method ResetGroup resetGroup($options = [])
 * @method GetGroupMessageRoute getGroupMessageRoute($options = [])
 * @method BatchGetGroupFunctionStatus batchGetGroupFunctionStatus($options = [])
 * @method DeleteGroupMessageRoute deleteGroupMessageRoute($options = [])
 * @method UnbindDeviceFromGroup unbindDeviceFromGroup($options = [])
 * @method ListGroupProduct listGroupProduct($options = [])
 * @method GetGroup getGroup($options = [])
 * @method DisableAutomationRule disableAutomationRule($options = [])
 * @method ListGroupAutomationRule listGroupAutomationRule($options = [])
 * @method BindAutomationRuleToGroup bindAutomationRuleToGroup($options = [])
 * @method UpdateGroup updateGroup($options = [])
 * @method ListSummaryAutomationRuleLog listSummaryAutomationRuleLog($options = [])
 * @method GetAutomationRule getAutomationRule($options = [])
 * @method BindFunctionToGroup bindFunctionToGroup($options = [])
 * @method ListAutomationRule listAutomationRule($options = [])
 * @method TriggerAutomationRule triggerAutomationRule($options = [])
 * @method UpdateGroupFunctionConfig updateGroupFunctionConfig($options = [])
 * @method UpdateAutomationRule updateAutomationRule($options = [])
 * @method CreateDeployment createDeployment($options = [])
 * @method ListDetailAutomationRuleLog listDetailAutomationRuleLog($options = [])
 * @method CreateGroup createGroup($options = [])
 * @method ListGroupMessageRoute listGroupMessageRoute($options = [])
 * @method DeleteGroup deleteGroup($options = [])
 * @method ListDeployDetail listDeployDetail($options = [])
 * @method CreateGroupMessageRoute createGroupMessageRoute($options = [])
 * @method DeleteAutomationRule deleteAutomationRule($options = [])
 * @method UpdateGroupMessageRoute updateGroupMessageRoute($options = [])
 * @method QueryRulengSysTopics queryRulengSysTopics($options = [])
 * @method QueryProductByUserId queryProductByUserId($options = [])
 * @method VerifyFirmware verifyFirmware($options = [])
 * @method UpgradeSingleDevice upgradeSingleDevice($options = [])
 * @method UpdateRuleAction updateRuleAction($options = [])
 * @method UpdateRule updateRule($options = [])
 * @method UpdateProductTopic updateProductTopic($options = [])
 * @method UpdateDeviceShadow updateDeviceShadow($options = [])
 * @method StopRule stopRule($options = [])
 * @method StartRule startRule($options = [])
 * @method SaveUserServeStatus saveUserServeStatus($options = [])
 * @method SaveServerCallback saveServerCallback($options = [])
 * @method ReUpgradeDevices reUpgradeDevices($options = [])
 * @method ResetDeviceUpgrade resetDeviceUpgrade($options = [])
 * @method QueryVersionsByPk queryVersionsByPk($options = [])
 * @method QueryTableStoreTablesForRule queryTableStoreTablesForRule($options = [])
 * @method QueryTableStorePrimaryKeysForRule queryTableStorePrimaryKeysForRule($options = [])
 * @method QueryTableStoreInstancesForRule queryTableStoreInstancesForRule($options = [])
 * @method QueryStrategyByFirName queryStrategyByFirName($options = [])
 * @method QueryServerCallback queryServerCallback($options = [])
 * @method QueryServeList queryServeList($options = [])
 * @method QueryServeById queryServeById($options = [])
 * @method QueryRuleForwardCloudRegion queryRuleForwardCloudRegion($options = [])
 * @method QueryRdsRegionsForRule queryRdsRegionsForRule($options = [])
 * @method QueryRdsInstancePageForRule queryRdsInstancePageForRule($options = [])
 * @method QueryRdsDatabasesForRule queryRdsDatabasesForRule($options = [])
 * @method QueryRdsAccountsForRule queryRdsAccountsForRule($options = [])
 * @method QueryProductWithScript queryProductWithScript($options = [])
 * @method QueryProductTopic queryProductTopic($options = [])
 * @method QueryOtaJobByDevices queryOtaJobByDevices($options = [])
 * @method QueryMqTopicsForRule queryMqTopicsForRule($options = [])
 * @method QueryMqRegionsForRule queryMqRegionsForRule($options = [])
 * @method QueryMnsTopicsForRule queryMnsTopicsForRule($options = [])
 * @method QueryLogPage queryLogPage($options = [])
 * @method QueryHitsSecurityIpForRule queryHitsSecurityIpForRule($options = [])
 * @method QueryHitsRegionsForRule queryHitsRegionsForRule($options = [])
 * @method QueryHitsInstancePageForRule queryHitsInstancePageForRule($options = [])
 * @method QueryHitsInstanceForRule queryHitsInstanceForRule($options = [])
 * @method QueryFirmwareVerifyInfo queryFirmwareVerifyInfo($options = [])
 * @method QueryFirmwareByUid queryFirmwareByUid($options = [])
 * @method QueryFirmwareByName queryFirmwareByName($options = [])
 * @method QueryFcServicesForRule queryFcServicesForRule($options = [])
 * @method QueryFcFunctionsForRule queryFcFunctionsForRule($options = [])
 * @method QueryDeviceUpgradeInfo queryDeviceUpgradeInfo($options = [])
 * @method QueryDeviceTopic queryDeviceTopic($options = [])
 * @method QueryDeviceProp queryDeviceProp($options = [])
 * @method QueryDeviceByPkAndVersion queryDeviceByPkAndVersion($options = [])
 * @method QueryDebugOnlineLog queryDebugOnlineLog($options = [])
 * @method QueryDataHubTopicsForRule queryDataHubTopicsForRule($options = [])
 * @method QueryDataHubSchemasForRule queryDataHubSchemasForRule($options = [])
 * @method QueryDataHubProjectsForRule queryDataHubProjectsForRule($options = [])
 * @method Pub pub($options = [])
 * @method ListRuleActions listRuleActions($options = [])
 * @method ListRule listRule($options = [])
 * @method ListProduct listProduct($options = [])
 * @method GetRuleAction getRuleAction($options = [])
 * @method GetRule getRule($options = [])
 * @method GetDeviceShadow getDeviceShadow($options = [])
 * @method GenerateOssUploadUri generateOssUploadUri($options = [])
 * @method FinishVerifyTask finishVerifyTask($options = [])
 * @method DeviceUpgradeCount deviceUpgradeCount($options = [])
 * @method DescribeRegions describeRegions($options = [])
 * @method DeleteRuleAction deleteRuleAction($options = [])
 * @method DeleteRule deleteRule($options = [])
 * @method DeleteProductTopic deleteProductTopic($options = [])
 * @method DeleteFirmware deleteFirmware($options = [])
 * @method DebugRuleSql debugRuleSql($options = [])
 * @method CreateRuleAction createRuleAction($options = [])
 * @method CreateRule createRule($options = [])
 * @method CreateProductTopic createProductTopic($options = [])
 * @method CreateFirmware createFirmware($options = [])
 * @method CheckCloudProductOpenStatus checkCloudProductOpenStatus($options = [])
 * @method BatchDeviceUpgrade batchDeviceUpgrade($options = [])
 * @method AddProductTag addProductTag($options = [])
 * @method BatchForceUpdateProductTag batchForceUpdateProductTag($options = [])
 * @method BatchDeleteProductTag batchDeleteProductTag($options = [])
 * @method DeleteProductTag deleteProductTag($options = [])
 * @method BatchUpdateProductTag batchUpdateProductTag($options = [])
 * @method ListCategory listCategory($options = [])
 * @method ForceSetDeviceProp forceSetDeviceProp($options = [])
 * @method ListProductTag listProductTag($options = [])
 * @method QueryAlinkTopicList queryAlinkTopicList($options = [])
 * @method ListStdAbility listStdAbility($options = [])
 * @method QueryDynamicRegisterSwitch queryDynamicRegisterSwitch($options = [])
 * @method ResetProductSecret resetProductSecret($options = [])
 * @method QueryStdAbilityInfo queryStdAbilityInfo($options = [])
 * @method UpdateProductTag updateProductTag($options = [])
 * @method SetDynamicRegisterSwitch setDynamicRegisterSwitch($options = [])
 * @method AddThingConfig addThingConfig($options = [])
 * @method BatchRegisterDevicePop batchRegisterDevicePop($options = [])
 * @method BatchRegisterDeviceWithNames batchRegisterDeviceWithNames($options = [])
 * @method BatchRegisterDeviceWithApplyIdPop batchRegisterDeviceWithApplyIdPop($options = [])
 * @method BatchRegisterDeviceWithNamesPop batchRegisterDeviceWithNamesPop($options = [])
 * @method PushThingConfig pushThingConfig($options = [])
 * @method QueryConfigByConfigId queryConfigByConfigId($options = [])
 * @method QueryBatchRegisterDeviceStatus queryBatchRegisterDeviceStatus($options = [])
 * @method QueryDevicePropertyDataPop queryDevicePropertyDataPop($options = [])
 * @method QueryDevicePropertyStatusPop queryDevicePropertyStatusPop($options = [])
 * @method QueryThingConfig queryThingConfig($options = [])
 * @method QueryThingFunctionSwitch queryThingFunctionSwitch($options = [])
 * @method SetDevicePropertyPop setDevicePropertyPop($options = [])
 * @method SetThingFunctionSwitchStatus setThingFunctionSwitchStatus($options = [])
 * @method UpdateProductTagForProtal updateProductTagForProtal($options = [])
 * @method GetGatewayBySubDevice getGatewayBySubDevice($options = [])
 * @method VerifyThingAuthentication verifyThingAuthentication($options = [])
 * @method SetThingFunctionSwitchStatusPop setThingFunctionSwitchStatusPop($options = [])
 * @method ResetThing resetThing($options = [])
 * @method RemoveThingTopo removeThingTopo($options = [])
 * @method QueryThingFunctionSwitchPop queryThingFunctionSwitchPop($options = [])
 * @method QueryThingConfigPop queryThingConfigPop($options = [])
 * @method QueryConfigByConfigIdPop queryConfigByConfigIdPop($options = [])
 * @method PushThingConfigPop pushThingConfigPop($options = [])
 * @method NotifyAddThingTopo notifyAddThingTopo($options = [])
 * @method GetThingTopo getThingTopo($options = [])
 * @method AddThingConfigPop addThingConfigPop($options = [])
 * @method UpdateServicePop updateServicePop($options = [])
 * @method UpdateScriptPop updateScriptPop($options = [])
 * @method UpdateScriptDraftPop updateScriptDraftPop($options = [])
 * @method UpdatePropertyPop updatePropertyPop($options = [])
 * @method UpdateProductPop updateProductPop($options = [])
 * @method UpdateEventPop updateEventPop($options = [])
 * @method SetDevicePropPop setDevicePropPop($options = [])
 * @method RunScriptPop runScriptPop($options = [])
 * @method RegisterDevicePop registerDevicePop($options = [])
 * @method QuerySubDeviceListPop querySubDeviceListPop($options = [])
 * @method QueryProductServicePop queryProductServicePop($options = [])
 * @method QueryProductPropertyPop queryProductPropertyPop($options = [])
 * @method QueryProductPop queryProductPop($options = [])
 * @method QueryProductListPop queryProductListPop($options = [])
 * @method QueryProductEventPop queryProductEventPop($options = [])
 * @method QueryProductAbilityListPop queryProductAbilityListPop($options = [])
 * @method QueryDeviceStatisticsPop queryDeviceStatisticsPop($options = [])
 * @method QueryDeviceServiceDataPop queryDeviceServiceDataPop($options = [])
 * @method QueryDevicePropertyStatus queryDevicePropertyStatus($options = [])
 * @method QueryDevicePropertyData queryDevicePropertyData($options = [])
 * @method QueryDevicePagePop queryDevicePagePop($options = [])
 * @method QueryDeviceEventDataPop queryDeviceEventDataPop($options = [])
 * @method QueryDeviceDetailPop queryDeviceDetailPop($options = [])
 * @method QueryDeviceAttrStatusPop queryDeviceAttrStatusPop($options = [])
 * @method QueryDeviceAttrDataPop queryDeviceAttrDataPop($options = [])
 * @method QueryBatchCreateDeviceStatusPop queryBatchCreateDeviceStatusPop($options = [])
 * @method QueryBatchCreateDeviceDetailPop queryBatchCreateDeviceDetailPop($options = [])
 * @method QueryBatchCheckDeviceNamesStatus queryBatchCheckDeviceNamesStatus($options = [])
 * @method QueryAllProductListPop queryAllProductListPop($options = [])
 * @method InvokeThingServicePop invokeThingServicePop($options = [])
 * @method GetScriptPop getScriptPop($options = [])
 * @method GetScriptGenerateStatusPop getScriptGenerateStatusPop($options = [])
 * @method GetScriptGeneratePop getScriptGeneratePop($options = [])
 * @method GetScriptDraftPop getScriptDraftPop($options = [])
 * @method GetDslPop getDslPop($options = [])
 * @method GetDeviceUserInfoPop getDeviceUserInfoPop($options = [])
 * @method GetDeviceStatusPop getDeviceStatusPop($options = [])
 * @method GetDevicePropPop getDevicePropPop($options = [])
 * @method GenerateScriptPop generateScriptPop($options = [])
 * @method EnableThingPop enableThingPop($options = [])
 * @method DisableThingPop disableThingPop($options = [])
 * @method DeleteScriptDraftPop deleteScriptDraftPop($options = [])
 * @method DeleteProductPop deleteProductPop($options = [])
 * @method DeleteDevicePop deleteDevicePop($options = [])
 * @method DeleteAbilityPop deleteAbilityPop($options = [])
 * @method DebugAbilityPop debugAbilityPop($options = [])
 * @method CreateScriptPop createScriptPop($options = [])
 * @method CreateScriptDraftPop createScriptDraftPop($options = [])
 * @method CreateProductPop createProductPop($options = [])
 * @method CreateCustomServicePop createCustomServicePop($options = [])
 * @method CreateCustomPropertyPop createCustomPropertyPop($options = [])
 * @method CreateCustomEventPop createCustomEventPop($options = [])
 * @method CheckAlinkProtocolPop checkAlinkProtocolPop($options = [])
 * @method BatchRegisterDeviceWithApplyId batchRegisterDeviceWithApplyId($options = [])
 * @method BatchRegisterDevice batchRegisterDevice($options = [])
 * @method BatchDeleteDevicePop batchDeleteDevicePop($options = [])
 * @method BatchCreateDeviceWithApplyIdPop batchCreateDeviceWithApplyIdPop($options = [])
 * @method BatchCheckDeviceNames batchCheckDeviceNames($options = [])
 * @method ApplyBatchCreateDevicePop applyBatchCreateDevicePop($options = [])
 * @method QueryAllProductList queryAllProductList($options = [])
 * @method OpenSetDeviceProperty openSetDeviceProperty($options = [])
 * @method OpenRegisterDevice openRegisterDevice($options = [])
 * @method OpenQueryProductList openQueryProductList($options = [])
 * @method OpenQueryProduct openQueryProduct($options = [])
 * @method OpenQueryDeviceStatistics openQueryDeviceStatistics($options = [])
 * @method OpenQueryDeviceServiceData openQueryDeviceServiceData($options = [])
 * @method OpenQueryDevicePropertyStatus openQueryDevicePropertyStatus($options = [])
 * @method OpenQueryDevicePropertyData openQueryDevicePropertyData($options = [])
 * @method OpenQueryDeviceEventData openQueryDeviceEventData($options = [])
 * @method OpenQueryDeviceDetail openQueryDeviceDetail($options = [])
 * @method OpenQueryBatchRegisterDeviceStatus openQueryBatchRegisterDeviceStatus($options = [])
 * @method OpenInvokeThingService openInvokeThingService($options = [])
 * @method OpenGetDeviceStatus openGetDeviceStatus($options = [])
 * @method OpenEnableThing openEnableThing($options = [])
 * @method OpenDisableThing openDisableThing($options = [])
 * @method OpenDeleteDevice openDeleteDevice($options = [])
 * @method OpenBatchRegisterDeviceWithNames openBatchRegisterDeviceWithNames($options = [])
 * @method OpenBatchRegisterDeviceWithApplyId openBatchRegisterDeviceWithApplyId($options = [])
 * @method OpenBatchRegisterDevice openBatchRegisterDevice($options = [])
 * @method UpdateService updateService($options = [])
 * @method UpdateScriptDraft updateScriptDraft($options = [])
 * @method UpdateScript updateScript($options = [])
 * @method UpdateProperty updateProperty($options = [])
 * @method UpdateProduct updateProduct($options = [])
 * @method UpdateEvent updateEvent($options = [])
 * @method SetDeviceProperty setDeviceProperty($options = [])
 * @method RunScript runScript($options = [])
 * @method RegisterDevice registerDevice($options = [])
 * @method QuerySubDeviceList querySubDeviceList($options = [])
 * @method QueryProductService queryProductService($options = [])
 * @method QueryProductProperty queryProductProperty($options = [])
 * @method QueryProductList queryProductList($options = [])
 * @method QueryProductEvent queryProductEvent($options = [])
 * @method QueryProductAbilityList queryProductAbilityList($options = [])
 * @method QueryProduct queryProduct($options = [])
 * @method QueryDeviceStatistics queryDeviceStatistics($options = [])
 * @method QueryDeviceServiceData queryDeviceServiceData($options = [])
 * @method QueryDevicePage queryDevicePage($options = [])
 * @method QueryDeviceEventData queryDeviceEventData($options = [])
 * @method QueryDeviceDetail queryDeviceDetail($options = [])
 * @method QueryDeviceAttrStatus queryDeviceAttrStatus($options = [])
 * @method QueryDeviceAttrData queryDeviceAttrData($options = [])
 * @method QueryBatchCreateDeviceStatus queryBatchCreateDeviceStatus($options = [])
 * @method QueryBatchCreateDeviceDetail queryBatchCreateDeviceDetail($options = [])
 * @method InvokeThingService invokeThingService($options = [])
 * @method GetScriptGenerateStatus getScriptGenerateStatus($options = [])
 * @method GetScriptGenerate getScriptGenerate($options = [])
 * @method GetScriptDraft getScriptDraft($options = [])
 * @method GetScript getScript($options = [])
 * @method GetDsl getDsl($options = [])
 * @method GetDeviceUserInfo getDeviceUserInfo($options = [])
 * @method GetDeviceStatus getDeviceStatus($options = [])
 * @method GetDeviceProp getDeviceProp($options = [])
 * @method GenerateScript generateScript($options = [])
 * @method EnableThing enableThing($options = [])
 * @method DisableThing disableThing($options = [])
 * @method DeleteScriptDraft deleteScriptDraft($options = [])
 * @method DeleteProduct deleteProduct($options = [])
 * @method DeleteDevice deleteDevice($options = [])
 * @method DeleteAbility deleteAbility($options = [])
 * @method DebugAbility debugAbility($options = [])
 * @method CreateScriptDraft createScriptDraft($options = [])
 * @method CreateScript createScript($options = [])
 * @method CreateProduct createProduct($options = [])
 * @method CreateCustomService createCustomService($options = [])
 * @method CreateCustomProperty createCustomProperty($options = [])
 * @method CreateCustomEvent createCustomEvent($options = [])
 * @method CheckAlinkProtocol checkAlinkProtocol($options = [])
 * @method BatchDeleteDevice batchDeleteDevice($options = [])
 * @method BatchCreateDeviceWithApplyId batchCreateDeviceWithApplyId($options = [])
 * @method ApplyBatchCreateDeviceWithName applyBatchCreateDeviceWithName($options = [])
 * @method ApplyBatchCreateDevice applyBatchCreateDevice($options = [])
 */
class V20180120
{
    use ApiResolverTrait;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class RelateProduct extends Roa
{
    use R;
}

class GetArrears extends Roa
{
    use R;
}

class GetLVCategoryList extends Roa
{
    use R;
}

class CheckLVCloudProductOpened extends Roa
{
    use R;
}

/**
 * @method string getCategoryKey
 * @method self withCategoryKey(string $categoryKey)
 * @method string getProductName
 * @method self withProductName(string $productName)
 * @method Integer getRelated
 * @method self withRelated(Integer $related)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class GetProductListByRelation extends Roa
{
    use R;
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getAppId
 * @method self withAppId(string $appId)
 */
class QueryApiServices extends Roa
{
    use R;
}

/**
 * @method Json getServiceIds
 * @method self withServiceIds(Json $serviceIds)
 * @method string getAppId
 * @method self withAppId(string $appId)
 */
class GrantApiServices extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class CreateLdpApp extends Roa
{
    use R;
}

/**
 * @method string getAppId
 * @method self withAppId(string $appId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class UpdateLdpApp extends Roa
{
    use R;
}

/**
 * @method string getAppId
 * @method self withAppId(string $appId)
 */
class DeleteLdpApp extends Roa
{
    use R;
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryLdpAppsList extends Roa
{
    use R;
}

/**
 * @method string getDisplayName
 * @method self withDisplayName(string $displayName)
 * @method string getDataAssetUid
 * @method self withDataAssetUid(string $dataAssetUid)
 * @method string getDataAssetName
 * @method self withDataAssetName(string $dataAssetName)
 * @method string getDataAssetType
 * @method self withDataAssetType(string $dataAssetType)
 * @method int getStartHoldingTime
 * @method self withStartHoldingTime(int $startHoldingTime)
 * @method Integer getHoldingCycleValue
 * @method self withHoldingCycleValue(Integer $holdingCycleValue)
 * @method string getHoldingCycleUnits
 * @method self withHoldingCycleUnits(string $holdingCycleUnits)
 */
class ApplyDataAsset extends Roa
{
    use R;
}

/**
 * @method string getDataAssetId
 * @method self withDataAssetId(string $dataAssetId)
 * @method Integer getHoldingCycleValue
 * @method self withHoldingCycleValue(Integer $holdingCycleValue)
 * @method string getHoldingCycleUnits
 * @method self withHoldingCycleUnits(string $holdingCycleUnits)
 */
class UpdateDataAsset extends Roa
{
    use R;
}

/**
 * @method string getDataAssetUid
 * @method self withDataAssetUid(string $dataAssetUid)
 * @method string getDataAssetName
 * @method self withDataAssetName(string $dataAssetName)
 * @method string getDataAssetType
 * @method self withDataAssetType(string $dataAssetType)
 * @method Json getPage
 * @method self withPage(Json $page)
 * @method Json getOrder
 * @method self withOrder(Json $order)
 */
class GetDataAssetList extends Roa
{
    use R;
}

/**
 * @method string getDataAssetUid
 * @method self withDataAssetUid(string $dataAssetUid)
 */
class DeleteDataAsset extends Roa
{
    use R;
}

/**
 * @method string getFolderName
 * @method self withFolderName(string $folderName)
 * @method string getParentFolderId
 * @method self withParentFolderId(string $parentFolderId)
 */
class CreateJobFolder extends Roa
{
    use R;
}

/**
 * @method string getFolderId
 * @method self withFolderId(string $folderId)
 * @method string getNewFolderName
 * @method self withNewFolderName(string $newFolderName)
 */
class RenameJobFolder extends Roa
{
    use R;
}

/**
 * @method string getFolderId
 * @method self withFolderId(string $folderId)
 */
class TryToDeleteJobFolderIfNecessarily extends Roa
{
    use R;
}

class GetQueryJobFolderTree extends Roa
{
    use R;
}

/**
 * @method string getFolderId
 * @method self withFolderId(string $folderId)
 */
class DeleteJobFolder extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 */
class GetUserSourceTableList extends Roa
{
    use R;
}

/**
 * @method string getAbilityType
 * @method self withAbilityType(string $abilityType)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class GetProductAbilityTableList extends Roa
{
    use R;
}

/**
 * @method string getSourceUid
 * @method self withSourceUid(string $sourceUid)
 * @method string getTableName
 * @method self withTableName(string $tableName)
 */
class GetSourceOverviewData extends Roa
{
    use R;
}

/**
 * @method string getJobName
 * @method self withJobName(string $jobName)
 * @method string getSqlStatement
 * @method self withSqlStatement(string $sqlStatement)
 * @method string getFolderId
 * @method self withFolderId(string $folderId)
 * @method string getServiceRank
 * @method self withServiceRank(string $serviceRank)
 */
class CreateQueryJobBySQL extends Roa
{
    use R;
}

/**
 * @method string getTableName
 * @method self withTableName(string $tableName)
 */
class GetProductAbilityOverviewData extends Roa
{
    use R;
}

/**
 * @method string getSqlStatement
 * @method self withSqlStatement(string $sqlStatement)
 * @method string getServiceRank
 * @method self withServiceRank(string $serviceRank)
 */
class ValidateSqlStatement extends Roa
{
    use R;
}

/**
 * @method Json getPage
 * @method self withPage(Json $page)
 * @method bool getAsyncExecution
 * @method self withAsyncExecution(bool $asyncExecution)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class SyncExecQueryJob extends Roa
{
    use R;
}

/**
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class CancelQueryJob extends Roa
{
    use R;
}

/**
 * @method string getRequestIdX
 * @method self withRequestIdX(string $requestIdX)
 */
class GetQueryJobExecLog extends Roa
{
    use R;
}

/**
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class DeleteQueryJob extends Roa
{
    use R;
}

/**
 * @method string getJobId
 * @method self withJobId(string $jobId)
 * @method string getNewJobName
 * @method self withNewJobName(string $newJobName)
 */
class RenameQueryJob extends Roa
{
    use R;
}

/**
 * @method string getAsyncRequestId
 * @method self withAsyncRequestId(string $asyncRequestId)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class AsyncExecuteQueryJobForDownload extends Roa
{
    use R;
}

/**
 * @method string getSqlStatement
 * @method self withSqlStatement(string $sqlStatement)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class UpdateQueryJob extends Roa
{
    use R;
}

/**
 * @method string getAbilityType
 * @method self withAbilityType(string $abilityType)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class RefreshProductAbilityTableList extends Roa
{
    use R;
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getJunior
 * @method self withJunior(Integer $junior)
 * @method string getProductName
 * @method self withProductName(string $productName)
 */
class GetAvailableProductList extends Roa
{
    use R;
}

/**
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class GetQueryJob extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 */
class GetAppPermissionList extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getPodName
 * @method self withPodName(string $podName)
 * @method string getContainer
 * @method self withContainer(string $container)
 * @method Integer getTailLines
 * @method self withTailLines(Integer $tailLines)
 */
class GetPodContainerLog extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 */
class GetAppOperatingInfo extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getPublishStatus
 * @method self withPublishStatus(string $publishStatus)
 */
class UpdateSaaSAppPublishStatus extends Roa
{
    use R;
}

/**
 * @method string getMetaCode
 * @method self withMetaCode(string $metaCode)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class GetAppUploadPath extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getPodName
 * @method self withPodName(string $podName)
 */
class GetNamespacedPodEvent extends Roa
{
    use R;
}

/**
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryAuthorizedAppList extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QueryDebugOnlineLogContent extends Roa
{
    use R;
}

class QuerySolutionInstance extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotInstanceName
 * @method self withIotInstanceName(string $iotInstanceName)
 */
class ModifySolutionInstance extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 */
class GetSolutionInstance extends Roa
{
    use R;
}

/**
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class CreateProject extends Roa
{
    use R;
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryProjectsList extends Roa
{
    use R;
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getProjectId
 * @method self withProjectId(string $projectId)
 * @method Json getSort
 * @method self withSort(Json $sort)
 */
class QueryMobileAppsList extends Roa
{
    use R;
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getProjectId
 * @method self withProjectId(string $projectId)
 * @method Json getSort
 * @method self withSort(Json $sort)
 */
class QueryWebAppsList extends Roa
{
    use R;
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getProjectId
 * @method self withProjectId(string $projectId)
 * @method Json getSort
 * @method self withSort(Json $sort)
 */
class QueryServicesList extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getConfigName
 * @method self withConfigName(string $configName)
 * @method string getPayload
 * @method self withPayload(string $payload)
 */
class DeployCustomConfigToEdgeInstance extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class UnbindGatewayFromEdgeInstance extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 */
class EnableEdgeInstanceAutomationRule extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryEdgeInstanceHistoricDeployment extends Roa
{
    use R;
}

/**
 * @method string getFunctionId
 * @method self withFunctionId(string $functionId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 */
class QueryEdgeInstanceByFunction extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getDeployId
 * @method self withDeployId(string $deployId)
 */
class QueryEdgeInstanceDeployment extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 */
class DisableEdgeInstanceAutomationRule extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getRuleIds
 * @method self withRuleIds(string $ruleIds)
 */
class BatchGetEdgeInstanceAutomationRule extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 */
class GetEdgeInstanceByName extends Roa
{
    use R;
}

/**
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 * @method string getRuleContent
 * @method self withRuleContent(string $ruleContent)
 * @method string getRuleDescription
 * @method self withRuleDescription(string $ruleDescription)
 * @method string getRuleType
 * @method self withRuleType(string $ruleType)
 */
class CreateFlowRule extends Roa
{
    use R;
}

/**
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 * @method string getRuleContent
 * @method self withRuleContent(string $ruleContent)
 * @method string getRuleDescription
 * @method self withRuleDescription(string $ruleDescription)
 */
class UpdateFlowRule extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getSource
 * @method self withSource(string $source)
 */
class CreateEdgeClusterInstance extends Roa
{
    use R;
}

/**
 * @method int getStartDay
 * @method self withStartDay(int $startDay)
 * @method Integer getSustainDays
 * @method self withSustainDays(Integer $sustainDays)
 */
class QueryMeasureList extends Roa
{
    use R;
}

/**
 * @method int getStartDay
 * @method self withStartDay(int $startDay)
 * @method Integer getSustainDays
 * @method self withSustainDays(Integer $sustainDays)
 */
class QueryMeasureSummary extends Roa
{
    use R;
}

/**
 * @method int getStartDay
 * @method self withStartDay(int $startDay)
 * @method Integer getSustainDays
 * @method self withSustainDays(Integer $sustainDays)
 * @method Integer getTopCount
 * @method self withTopCount(Integer $topCount)
 */
class QueryMeasureTop extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class GetRemoteDebugServiceMeta extends Roa
{
    use R;
}

/**
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 */
class ImportDemoScene extends Roa
{
    use R;
}

/**
 * @method int getTimeFrame
 * @method self withTimeFrame(int $timeFrame)
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 * @method string getIotInfos
 * @method self withIotInfos(string $iotInfos)
 */
class GetDeviceEventsForBim extends Roa
{
    use R;
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method int getTimeFrame
 * @method self withTimeFrame(int $timeFrame)
 */
class QueryGeoMultiDeviceEventsByPage extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class GetGatewayBySubDeviceBiz extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class RemoveThingTopoBiz extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class GetDeviceStatusBiz extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductName
 * @method self withProductName(string $productName)
 * @method Integer getNodeType
 * @method self withNodeType(Integer $nodeType)
 * @method Integer getDataFormat
 * @method self withDataFormat(Integer $dataFormat)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getAliyunCommodityCode
 * @method self withAliyunCommodityCode(string $aliyunCommodityCode)
 * @method bool getId2
 * @method self withId2(bool $id2)
 * @method int getCategoryId
 * @method self withCategoryId(int $categoryId)
 * @method string getProtocolType
 * @method self withProtocolType(string $protocolType)
 * @method string getNetType
 * @method self withNetType(string $netType)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class CreateProductBiz extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getProductName
 * @method self withProductName(string $productName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class UpdateProductBiz extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class EnableThingBiz extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class DisableThingBiz extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QueryDeviceDetailBiz extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getEventType
 * @method self withEventType(string $eventType)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getAsc
 * @method self withAsc(Integer $asc)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QueryDeviceEventDataBiz extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getAsc
 * @method self withAsc(Integer $asc)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QueryDeviceServiceDataBiz extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QueryDevicePropBiz extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class DeleteProductBiz extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QueryDevicePropertyStatusBiz extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getAsc
 * @method self withAsc(Integer $asc)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QueryDevicePropertyDataBiz extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QueryProductTopicBiz extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getTopicShortName
 * @method self withTopicShortName(string $topicShortName)
 * @method string getOperation
 * @method self withOperation(string $operation)
 * @method string getDesc
 * @method self withDesc(string $desc)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class CreateProductTopicBiz extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getDesc
 * @method self withDesc(string $desc)
 * @method string getOperation
 * @method self withOperation(string $operation)
 * @method string getTopicShortName
 * @method self withTopicShortName(string $topicShortName)
 * @method string getTopicId
 * @method self withTopicId(string $topicId)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class UpdateProductTopicBiz extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getTopicId
 * @method self withTopicId(string $topicId)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class DeleteProductTopicBiz extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QueryProductBiz extends Roa
{
    use R;
}

/**
 * @method int getDataSourceId
 * @method self withDataSourceId(int $dataSourceId)
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 * @method Json getPage
 * @method self withPage(Json $page)
 * @method Json getTableName
 * @method self withTableName(Json $tableName)
 */
class ListTables extends Roa
{
    use R;
}

/**
 * @method int getDataSourceId
 * @method self withDataSourceId(int $dataSourceId)
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 * @method string getTableName
 * @method self withTableName(string $tableName)
 * @method string getColumnType
 * @method self withColumnType(string $columnType)
 * @method bool getIsPrimary
 * @method self withIsPrimary(bool $isPrimary)
 */
class ListColumns extends Roa
{
    use R;
}

/**
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 * @method string getViewName
 * @method self withViewName(string $viewName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceList
 * @method self withDeviceList(string $deviceList)
 */
class SaveSqlTaskView extends Roa
{
    use R;
}

/**
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 * @method string getViewName
 * @method self withViewName(string $viewName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceList
 * @method self withDeviceList(string $deviceList)
 * @method int getId
 * @method self withId(int $id)
 */
class UpdateSqlTaskView extends Roa
{
    use R;
}

/**
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 * @method Json getPage
 * @method self withPage(Json $page)
 * @method int getId
 * @method self withId(int $id)
 */
class ListSqlTaskView extends Roa
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 */
class DeleteSqlTaskView extends Roa
{
    use R;
}

/**
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 * @method string getComponents
 * @method self withComponents(string $components)
 * @method string getParams
 * @method self withParams(string $params)
 */
class PreviewTaskSql extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method array getProductTag
 * @method self withProductTag(array $productTag)
 */
class CreateProductTags extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method array getProductTag
 * @method self withProductTag(array $productTag)
 */
class UpdateProductTags extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method array getProductTagKey
 * @method self withProductTagKey(array $productTagKey)
 */
class DeleteProductTags extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class ListProductTags extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method array getProductTag
 * @method self withProductTag(array $productTag)
 */
class ListProductByTags extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryDeviceGroupByTags extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getTslUrl
 * @method self withTslUrl(string $tslUrl)
 */
class ImportTslFromOss extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 */
class GenerateOssUriForTsl extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getMethod
 * @method self withMethod(string $method)
 * @method string getPlatform
 * @method self withPlatform(string $platform)
 * @method string getProjectId
 * @method self withProjectId(string $projectId)
 * @method Json getParams
 * @method self withParams(Json $params)
 */
class LpPortalAccessService extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getAppConfigVersionUuid
 * @method self withAppConfigVersionUuid(string $appConfigVersionUuid)
 */
class UpgradeApp extends Roa
{
    use R;
}

/**
 * @method string getConfigUuid
 * @method self withConfigUuid(string $configUuid)
 * @method string getVersionName
 * @method self withVersionName(string $versionName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method array getNodeImageList
 * @method self withNodeImageList(array $nodeImageList)
 */
class SaveImageUpgradeConfigVersion extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 */
class QueryAppResourceConfig extends Roa
{
    use R;
}

/**
 * @method string getConfigureUuid
 * @method self withConfigureUuid(string $configureUuid)
 */
class PublishImageUpgradeConfigVersion extends Roa
{
    use R;
}

/**
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getConfigUuid
 * @method self withConfigUuid(string $configUuid)
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 */
class ListConfigVersion extends Roa
{
    use R;
}

/**
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getConfigUuid
 * @method self withConfigUuid(string $configUuid)
 * @method string getConfigVersionUuid
 * @method self withConfigVersionUuid(string $configVersionUuid)
 */
class ListConfigNodeImage extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getName
 * @method self withName(string $name)
 */
class IsOperable extends Roa
{
    use R;
}

/**
 * @method string getAppConfigId
 * @method self withAppConfigId(string $appConfigId)
 */
class GetServiceNameAndPort extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getName
 * @method self withName(string $name)
 */
class GetOperationIngress extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 */
class GetDomainNameConfig extends Roa
{
    use R;
}

/**
 * @method string getType
 * @method self withType(string $type)
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 * @method string getCpuCapacityLimit
 * @method self withCpuCapacityLimit(string $cpuCapacityLimit)
 * @method string getMemCapacityLimit
 * @method self withMemCapacityLimit(string $memCapacityLimit)
 * @method string getCpuCapacityRequest
 * @method self withCpuCapacityRequest(string $cpuCapacityRequest)
 * @method string getMemCapacityRequest
 * @method self withMemCapacityRequest(string $memCapacityRequest)
 * @method Integer getReplicaCount
 * @method self withReplicaCount(Integer $replicaCount)
 */
class ExpandAppResource extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getName
 * @method self withName(string $name)
 * @method int getExpireInterval
 * @method self withExpireInterval(int $expireInterval)
 */
class EnableOperationIngress extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getName
 * @method self withName(string $name)
 */
class DisableOperationIngress extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getDomain
 * @method self withDomain(string $domain)
 * @method string getCertBody
 * @method self withCertBody(string $certBody)
 * @method string getCertKey
 * @method self withCertKey(string $certKey)
 * @method string getCertName
 * @method self withCertName(string $certName)
 */
class BindAppDomain extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QueryEdgeInstanceDeviceByName extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class GetRemoteDebugToken extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 */
class QueryDeviceUpgradeCount extends Roa
{
    use R;
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getDeviceGroupId
 * @method self withDeviceGroupId(string $deviceGroupId)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getGeoProjectId
 * @method self withGeoProjectId(string $geoProjectId)
 * @method Json getProductAttributesMap
 * @method self withProductAttributesMap(Json $productAttributesMap)
 */
class QueryGeoDevicePropertyByPage extends Roa
{
    use R;
}

/**
 * @method string getLocatingInfo
 * @method self withLocatingInfo(string $locatingInfo)
 */
class LocateDeviceByFingerprint extends Roa
{
    use R;
}

/**
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 * @method string getPhones
 * @method self withPhones(string $phones)
 * @method int getExpiredTime
 * @method self withExpiredTime(int $expiredTime)
 * @method string getSysCode
 * @method self withSysCode(string $sysCode)
 */
class SaveShareInfo extends Roa
{
    use R;
}

/**
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 */
class GetShareInfo extends Roa
{
    use R;
}

/**
 * @method Integer getLicenseType
 * @method self withLicenseType(Integer $licenseType)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryLinkFaceLicense extends Roa
{
    use R;
}

/**
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryLinkFaceActiveCodeInfo extends Roa
{
    use R;
}

/**
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getCategoryName
 * @method self withCategoryName(string $categoryName)
 */
class QueryLinkFaceProductInfo extends Roa
{
    use R;
}

/**
 * @method array getProductKeys
 * @method self withProductKeys(array $productKeys)
 */
class QueryLinkFaceConsumerByCodes extends Roa
{
    use R;
}

/**
 * @method int getNum
 * @method self withNum(int $num)
 */
class BuyLinkFaceLicenseToBusiness extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class OpenLinkFaceService extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getGwProductKey
 * @method self withGwProductKey(string $gwProductKey)
 * @method string getGwDeviceName
 * @method self withGwDeviceName(string $gwDeviceName)
 * @method Json getExt
 * @method self withExt(Json $ext)
 * @method array getTopoAddItem
 * @method self withTopoAddItem(array $topoAddItem)
 */
class BatchAddThingTopo extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class QueryDeviceListByDeviceGroup extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method array getIdentifier
 * @method self withIdentifier(array $identifier)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getAsc
 * @method self withAsc(Integer $asc)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryDevicePropertiesData extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method Integer getTtl
 * @method self withTtl(Integer $ttl)
 * @method string getLogLevel
 * @method self withLogLevel(string $logLevel)
 */
class UpdateEdgeInstanceSls extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getRouteId
 * @method self withRouteId(int $routeId)
 * @method string getTopicFilter
 * @method self withTopicFilter(string $topicFilter)
 * @method string getSourceType
 * @method self withSourceType(string $sourceType)
 * @method string getSourceData
 * @method self withSourceData(string $sourceData)
 * @method string getTargetType
 * @method self withTargetType(string $targetType)
 * @method string getTargetData
 * @method self withTargetData(string $targetData)
 * @method Integer getTargetIotHubQos
 * @method self withTargetIotHubQos(Integer $targetIotHubQos)
 */
class UpdateEdgeInstanceMessageRoute extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class UnbindRoleFromEdgeInstance extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class BindDeviceToEdgeInstance extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class UpdateEdgeInstance extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryEdgeInstanceDeployDetail extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getFunctionId
 * @method self withFunctionId(string $functionId)
 */
class UnbindFunctionFromEdgeInstance extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QueryDeviceDebugStatus extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class ResetEdgeInstanceDeployments extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getFunctionName
 * @method self withFunctionName(string $functionName)
 */
class QueryEdgeInstanceFunction extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getStartTime
 * @method self withStartTime(Integer $startTime)
 * @method Integer getEndTime
 * @method self withEndTime(Integer $endTime)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getLogStore
 * @method self withLogStore(string $logStore)
 * @method string getQuery
 * @method self withQuery(string $query)
 */
class GetEdgeInstanceLogs extends Roa
{
    use R;
}

/**
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 */
class QueryAutomationRule extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryEdgeInstanceMessageRoute extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getStreamGuId
 * @method self withStreamGuId(string $streamGuId)
 */
class UnbindStreamFromEdgeInstance extends Roa
{
    use R;
}

/**
 * @method string getRuleIds
 * @method self withRuleIds(string $ruleIds)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class BatchGetEdgeInstanceAutomationRuleRelRuleStatus extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getDeviceType
 * @method self withDeviceType(string $deviceType)
 */
class UnbindDeviceFromEdgeInstance extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 */
class UnbindAutomationRuleFromEdgeInstance extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class GetEdgeInstanceByGateway extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryEdgeInstanceAutomationRule extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getRouteId
 * @method self withRouteId(int $routeId)
 */
class GetEdgeInstanceMessageRoute extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class GetEdgeInstance extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getGwProductKey
 * @method self withGwProductKey(string $gwProductKey)
 * @method string getGwDeviceName
 * @method self withGwDeviceName(string $gwDeviceName)
 */
class CheckAndRemoveTopo extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getTopicFilter
 * @method self withTopicFilter(string $topicFilter)
 * @method string getSourceType
 * @method self withSourceType(string $sourceType)
 * @method string getSourceData
 * @method self withSourceData(string $sourceData)
 * @method string getTargetType
 * @method self withTargetType(string $targetType)
 * @method string getTargetData
 * @method self withTargetData(string $targetData)
 * @method Integer getTargetIotHubQos
 * @method self withTargetIotHubQos(Integer $targetIotHubQos)
 */
class CreateEdgeInstanceMessageRoute extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getDevices
 * @method self withDevices(string $devices)
 */
class BatchGetEdgeInstanceDeviceStatus extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class GetEdgeInstanceSls extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class DeleteEdgeInstance extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class CreateEdgeInstance extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class GetCloudMonitorNode extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getFunctions
 * @method self withFunctions(string $functions)
 */
class BatchGetEdgeInstanceFunctionStatus extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class QueryEdgeInstanceGateway extends Roa
{
    use R;
}

/**
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 * @method Integer getStartTime
 * @method self withStartTime(Integer $startTime)
 * @method Integer getEndTime
 * @method self withEndTime(Integer $endTime)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 */
class QuerySummaryAutomationRuleLog extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryEdgeInstanceDevice extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryEdgeInstanceProduct extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class BindGatewayToEdgeInstance extends Roa
{
    use R;
}

/**
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 * @method Integer getStartTime
 * @method self withStartTime(Integer $startTime)
 * @method Integer getEndTime
 * @method self withEndTime(Integer $endTime)
 * @method string getTraceId
 * @method self withTraceId(string $traceId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 */
class QueryDetailAutomationRuleLog extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 * @method string getFunctionName
 * @method self withFunctionName(string $functionName)
 * @method string getRunMode
 * @method self withRunMode(string $runMode)
 * @method string getFcRegionId
 * @method self withFcRegionId(string $fcRegionId)
 * @method Integer getMemorySize
 * @method self withMemorySize(Integer $memorySize)
 * @method Integer getTimeout
 * @method self withTimeout(Integer $timeout)
 * @method string getTriggerContent
 * @method self withTriggerContent(string $triggerContent)
 */
class BindFunctionToEdgeInstance extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class StartDeviceDebug extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getLogStore
 * @method self withLogStore(string $logStore)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method Integer getTtl
 * @method self withTtl(Integer $ttl)
 * @method string getLogLevel
 * @method self withLogLevel(string $logLevel)
 */
class CreateEdgeInstanceSls extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getStreamGuIds
 * @method self withStreamGuIds(string $streamGuIds)
 */
class BatchGetEdgeInstanceStreamStatus extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getType
 * @method self withType(Integer $type)
 */
class QueryEdgeInstance extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 */
class BindAutomationRuleToEdgeInstance extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getStreamGuId
 * @method self withStreamGuId(string $streamGuId)
 */
class BindStreamToEdgeInstance extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryEdgeInstanceStream extends Roa
{
    use R;
}

/**
 * @method string getRuleIds
 * @method self withRuleIds(string $ruleIds)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class BatchGetEdgeInstanceAutomationRuleDeviceStatus extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method Integer getSwitchStatus
 * @method self withSwitchStatus(Integer $switchStatus)
 */
class UpdateCloudMonitorSwitch extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getRuleIds
 * @method self withRuleIds(string $ruleIds)
 */
class BatchGetEdgeInstanceAutomationRuleStatus extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getRouteId
 * @method self withRouteId(int $routeId)
 */
class DeleteEdgeInstanceMessageRoute extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getType
 * @method self withType(Integer $type)
 */
class QueryEdgeInstanceWithGateway extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class CreateEdgeInstanceDeployment extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 */
class BindRoleToEdgeInstance extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getFunctionId
 * @method self withFunctionId(string $functionId)
 * @method string getRunMode
 * @method self withRunMode(string $runMode)
 * @method Integer getMemorySize
 * @method self withMemorySize(Integer $memorySize)
 * @method Integer getTimeout
 * @method self withTimeout(Integer $timeout)
 * @method string getTriggerContent
 * @method self withTriggerContent(string $triggerContent)
 */
class UpdateEdgeInstanceFunction extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getType
 * @method self withType(Integer $type)
 * @method string getDriverName
 * @method self withDriverName(string $driverName)
 */
class QueryDriver extends Roa
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getDriverId
 * @method self withDriverId(string $driverId)
 */
class SetEdgeInstanceDeviceDriver extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryDeviceVersionCountByPk extends Roa
{
    use R;
}

/**
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class UpdateEdgeNode extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 */
class RebootApp extends Roa
{
    use R;
}

/**
 * @method string getDeviceType
 * @method self withDeviceType(string $deviceType)
 */
class QueryAppUnifyProperty extends Roa
{
    use R;
}

/**
 * @method string getDeviceType
 * @method self withDeviceType(string $deviceType)
 */
class QueryAppUnifyEvent extends Roa
{
    use R;
}

/**
 * @method string getHostingType
 * @method self withHostingType(string $hostingType)
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getPodName
 * @method self withPodName(string $podName)
 * @method string getContainerName
 * @method self withContainerName(string $containerName)
 * @method string getNamespace
 * @method self withNamespace(string $namespace)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 */
class GetAppPodSession extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 */
class QueryFirmwareList extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class GetNetStatusReport extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class QuerySuperDeviceGroup extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method array getFirmware
 * @method self withFirmware(array $firmware)
 */
class BatchUpdateFirmware extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 */
class BatchDeleteBlankProductKeyFirmware extends Roa
{
    use R;
}

/**
 * @method string getCaptureId
 * @method self withCaptureId(string $captureId)
 * @method Integer getPictureType
 * @method self withPictureType(Integer $pictureType)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class QueryDevicePictureFile extends Roa
{
    use R;
}

/**
 * @method int getBeginTime
 * @method self withBeginTime(int $beginTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPictureType
 * @method self withPictureType(Integer $pictureType)
 * @method Integer getPictureSource
 * @method self withPictureSource(Integer $pictureSource)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class QueryPictureFiles extends Roa
{
    use R;
}

/**
 * @method Integer getDay
 * @method self withDay(Integer $day)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class SetDeviceRecordLifeCycle extends Roa
{
    use R;
}

/**
 * @method array getDeviceList
 * @method self withDeviceList(array $deviceList)
 */
class QueryDeviceRecordLifeCycle extends Roa
{
    use R;
}

/**
 * @method Integer getEventType
 * @method self withEventType(Integer $eventType)
 * @method int getBeginTime
 * @method self withBeginTime(int $beginTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class QueryDeviceEvent extends Roa
{
    use R;
}

/**
 * @method Integer getStreamType
 * @method self withStreamType(Integer $streamType)
 * @method Integer getBeginTime
 * @method self withBeginTime(Integer $beginTime)
 * @method Integer getEndTime
 * @method self withEndTime(Integer $endTime)
 * @method Integer getRecordType
 * @method self withRecordType(Integer $recordType)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class QueryRecord extends Roa
{
    use R;
}

/**
 * @method string getMonth
 * @method self withMonth(string $month)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class QueryMonthRecord extends Roa
{
    use R;
}

/**
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class QueryRecordUrl extends Roa
{
    use R;
}

/**
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method bool getShouldEncrypt
 * @method self withShouldEncrypt(bool $shouldEncrypt)
 * @method Integer getEncryptType
 * @method self withEncryptType(Integer $encryptType)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class QueryDeviceFileVod extends Roa
{
    use R;
}

/**
 * @method Integer getDay
 * @method self withDay(Integer $day)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class SetDevicePictureLifeCycle extends Roa
{
    use R;
}

/**
 * @method string getPlanId
 * @method self withPlanId(string $planId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 */
class UpdateRecordPlan extends Roa
{
    use R;
}

/**
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getAllDay
 * @method self withAllDay(Integer $allDay)
 * @method array getTimeSections
 * @method self withTimeSections(array $timeSections)
 */
class UpdateTimeTemplate extends Roa
{
    use R;
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryRecordPlans extends Roa
{
    use R;
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryTimeTemplate extends Roa
{
    use R;
}

/**
 * @method string getPlanId
 * @method self withPlanId(string $planId)
 */
class DeleteRecordPlan extends Roa
{
    use R;
}

/**
 * @method string getPlanId
 * @method self withPlanId(string $planId)
 */
class QueryRecordPlanDetail extends Roa
{
    use R;
}

/**
 * @method string getPlanId
 * @method self withPlanId(string $planId)
 * @method Integer getStreamType
 * @method self withStreamType(Integer $streamType)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class AddRecordPlanDevice extends Roa
{
    use R;
}

/**
 * @method string getPlanId
 * @method self withPlanId(string $planId)
 * @method Integer getStreamType
 * @method self withStreamType(Integer $streamType)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class UpdateRecordPlanDevice extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getEventTypes
 * @method self withEventTypes(string $eventTypes)
 * @method Integer getPreRecordDuration
 * @method self withPreRecordDuration(Integer $preRecordDuration)
 * @method Integer getRecordDuration
 * @method self withRecordDuration(Integer $recordDuration)
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 */
class SetEventRecordPlan extends Roa
{
    use R;
}

/**
 * @method string getPlanId
 * @method self withPlanId(string $planId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryRecordPlanDevices extends Roa
{
    use R;
}

/**
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class QueryDevicePictureLifeCycle extends Roa
{
    use R;
}

/**
 * @method Integer getStreamType
 * @method self withStreamType(Integer $streamType)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class DeleteRecordPlanDevice extends Roa
{
    use R;
}

/**
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 */
class QueryTimeTemplateDetail extends Roa
{
    use R;
}

/**
 * @method Integer getStreamType
 * @method self withStreamType(Integer $streamType)
 * @method bool getShouldEncrypt
 * @method self withShouldEncrypt(bool $shouldEncrypt)
 * @method Integer getEncryptType
 * @method self withEncryptType(Integer $encryptType)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class QueryLiveStreaming extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 */
class SetRecordPlan extends Roa
{
    use R;
}

/**
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class TriggerCapturePicture extends Roa
{
    use R;
}

/**
 * @method string getPlanId
 * @method self withPlanId(string $planId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getEventTypes
 * @method self withEventTypes(string $eventTypes)
 * @method Integer getPreRecordDuration
 * @method self withPreRecordDuration(Integer $preRecordDuration)
 * @method Integer getRecordDuration
 * @method self withRecordDuration(Integer $recordDuration)
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 */
class UpdateEventRecordPlan extends Roa
{
    use R;
}

/**
 * @method string getPlanId
 * @method self withPlanId(string $planId)
 * @method Integer getStreamType
 * @method self withStreamType(Integer $streamType)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class AddEventRecordPlanDevice extends Roa
{
    use R;
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryEventRecordPlans extends Roa
{
    use R;
}

/**
 * @method string getPlanId
 * @method self withPlanId(string $planId)
 * @method Integer getStreamType
 * @method self withStreamType(Integer $streamType)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class UpdateEventRecordPlanDevice extends Roa
{
    use R;
}

/**
 * @method string getPlanId
 * @method self withPlanId(string $planId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryEventRecordPlanDevices extends Roa
{
    use R;
}

/**
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 */
class DeleteTimeTemplate extends Roa
{
    use R;
}

/**
 * @method array getProductKeyList
 * @method self withProductKeyList(array $productKeyList)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryDeviceList extends Roa
{
    use R;
}

/**
 * @method Integer getStreamType
 * @method self withStreamType(Integer $streamType)
 * @method Integer getPreRecordDuration
 * @method self withPreRecordDuration(Integer $preRecordDuration)
 * @method Integer getRecordDuration
 * @method self withRecordDuration(Integer $recordDuration)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class TriggerRecord extends Roa
{
    use R;
}

class GetDeviceProductList extends Roa
{
    use R;
}

/**
 * @method Integer getStreamType
 * @method self withStreamType(Integer $streamType)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class QueryEventRecordPlanByDevice extends Roa
{
    use R;
}

/**
 * @method Integer getStreamType
 * @method self withStreamType(Integer $streamType)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class QueryRecordPlanByDevice extends Roa
{
    use R;
}

/**
 * @method string getEventId
 * @method self withEventId(string $eventId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class QueryDeviceEventRecord extends Roa
{
    use R;
}

/**
 * @method string getPlanId
 * @method self withPlanId(string $planId)
 */
class DeleteEventRecordPlan extends Roa
{
    use R;
}

/**
 * @method string getPlanId
 * @method self withPlanId(string $planId)
 */
class QueryEventRecordPlanDetail extends Roa
{
    use R;
}

/**
 * @method string getEventId
 * @method self withEventId(string $eventId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class QueryDeviceEventPicture extends Roa
{
    use R;
}

/**
 * @method Integer getStreamType
 * @method self withStreamType(Integer $streamType)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class DeleteEventRecordPlanDevice extends Roa
{
    use R;
}

/**
 * @method Integer getStreamType
 * @method self withStreamType(Integer $streamType)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class StopLiveStreaming extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getAllDay
 * @method self withAllDay(Integer $allDay)
 * @method array getTimeSections
 * @method self withTimeSections(array $timeSections)
 */
class SetTimeTemplate extends Roa
{
    use R;
}

/**
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class ModifyDeviceStatus extends Roa
{
    use R;
}

/**
 * @method array getIotIdList
 * @method self withIotIdList(array $iotIdList)
 */
class ActiveDevice extends Roa
{
    use R;
}

/**
 * @method Integer getLifeCycle
 * @method self withLifeCycle(Integer $lifeCycle)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class SetDeviceStorageLifeCycle extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryDeviceByTags extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getItems
 * @method self withItems(string $items)
 */
class SetDevicesProperty extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getArgs
 * @method self withArgs(string $args)
 */
class InvokeThingsService extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 */
class UnregisterAppService extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getDomain
 * @method self withDomain(string $domain)
 * @method string getProtocol
 * @method self withProtocol(string $protocol)
 * @method string getMethod
 * @method self withMethod(string $method)
 * @method string getCreateInstanceUri
 * @method self withCreateInstanceUri(string $createInstanceUri)
 * @method string getDeleteInstanceUri
 * @method self withDeleteInstanceUri(string $deleteInstanceUri)
 * @method string getGetSsoUrlUri
 * @method self withGetSsoUrlUri(string $getSsoUrlUri)
 * @method string getBindUserDeviceUri
 * @method self withBindUserDeviceUri(string $bindUserDeviceUri)
 * @method string getUnbindUserDeviceUri
 * @method self withUnbindUserDeviceUri(string $unbindUserDeviceUri)
 */
class RegisterAppService extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 */
class ListAppServiceGroup extends Roa
{
    use R;
}

/**
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 */
class ListAppKey extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 */
class GetRegisterAppService extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getAliyunPk
 * @method self withAliyunPk(string $aliyunPk)
 * @method string getTenantId
 * @method self withTenantId(string $tenantId)
 * @method string getTenantSubUserId
 * @method self withTenantSubUserId(string $tenantSubUserId)
 */
class GetAppSsoUrl extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 */
class GetAppSecret extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 */
class GetAppPodInfo extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 */
class GetAppInstanceInfo extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 */
class GetAppBaseInfo extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 */
class DeleteAppKey extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getAliyunPk
 * @method self withAliyunPk(string $aliyunPk)
 */
class DeleteAppInstance extends Roa
{
    use R;
}

/**
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method Integer getRegisterAppType
 * @method self withRegisterAppType(Integer $registerAppType)
 */
class CreateAppKey extends Roa
{
    use R;
}

/**
 * @method string getAppKey
 * @method self withAppKey(string $appKey)
 * @method string getAliyunPk
 * @method self withAliyunPk(string $aliyunPk)
 */
class CreateAppInstance extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method array getServiceIdList
 * @method self withServiceIdList(array $serviceIdList)
 */
class AuthorizeAppkeyInvoke extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getServiceCode
 * @method self withServiceCode(string $serviceCode)
 * @method Integer getAccessMethod
 * @method self withAccessMethod(Integer $accessMethod)
 * @method array getServiceCodes
 * @method self withServiceCodes(array $serviceCodes)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QueryUnimportedProducts extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductName
 * @method self withProductName(string $productName)
 * @method Integer getNodeType
 * @method self withNodeType(Integer $nodeType)
 * @method Integer getDataFormat
 * @method self withDataFormat(Integer $dataFormat)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getAliyunCommodityCode
 * @method self withAliyunCommodityCode(string $aliyunCommodityCode)
 * @method bool getId2
 * @method self withId2(bool $id2)
 * @method int getCategoryId
 * @method self withCategoryId(int $categoryId)
 * @method string getProtocolType
 * @method self withProtocolType(string $protocolType)
 * @method string getServiceCode
 * @method self withServiceCode(string $serviceCode)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getGroupType
 * @method self withGroupType(string $groupType)
 * @method string getNetType
 * @method self withNetType(string $netType)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class CreateProductInGroup extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getCategoryType
 * @method self withCategoryType(string $categoryType)
 * @method string getName
 * @method self withName(string $name)
 */
class ListPresentCategoryStdAbilityByName extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method int getEventId
 * @method self withEventId(int $eventId)
 * @method Integer getEventType
 * @method self withEventType(Integer $eventType)
 * @method string getEventName
 * @method self withEventName(string $eventName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getOutputData
 * @method self withOutputData(string $outputData)
 * @method string getConfigCode
 * @method self withConfigCode(string $configCode)
 * @method string getExtendConfig
 * @method self withExtendConfig(string $extendConfig)
 */
class UpdateProductStdEvent extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class ListProductStdAbility extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getCategoryType
 * @method self withCategoryType(string $categoryType)
 * @method string getName
 * @method self withName(string $name)
 */
class ListOtherCategoryStdAbilityByName extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getServiceId
 * @method self withServiceId(int $serviceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getInputParams
 * @method self withInputParams(string $inputParams)
 * @method string getOutputParams
 * @method self withOutputParams(string $outputParams)
 * @method Integer getCallType
 * @method self withCallType(Integer $callType)
 * @method string getConfigCode
 * @method self withConfigCode(string $configCode)
 * @method string getExtendConfig
 * @method self withExtendConfig(string $extendConfig)
 */
class UpdateProductStdService extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getCategoryType
 * @method self withCategoryType(string $categoryType)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class ListCategoryStdAbility extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 */
class SetLinkPlatformServiceOpen extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class ListAllCategory extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QueryProductAllInfo extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class ListProductCustomAbility extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method int getPropertyId
 * @method self withPropertyId(int $propertyId)
 * @method Integer getDataType
 * @method self withDataType(Integer $dataType)
 * @method Integer getRwFlag
 * @method self withRwFlag(Integer $rwFlag)
 * @method string getName
 * @method self withName(string $name)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getDataSpecs
 * @method self withDataSpecs(string $dataSpecs)
 * @method string getDataSpecsList
 * @method self withDataSpecsList(string $dataSpecsList)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getDefinition
 * @method self withDefinition(string $definition)
 * @method string getConfigCode
 * @method self withConfigCode(string $configCode)
 * @method string getExtendConfig
 * @method self withExtendConfig(string $extendConfig)
 */
class UpdateProductStdProperty extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method array getPropertyId
 * @method self withPropertyId(array $propertyId)
 * @method array getServiceId
 * @method self withServiceId(array $serviceId)
 * @method array getEventId
 * @method self withEventId(array $eventId)
 */
class BatchAddStdAbility extends Roa
{
    use R;
}

class GetPortalJsUrlsConfigForBIM extends Roa
{
    use R;
}

/**
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 */
class ListAuthorizedPhoneNum extends Roa
{
    use R;
}

/**
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 * @method string getPhone
 * @method self withPhone(string $phone)
 */
class DeleteAuthorizedPhoneNum extends Roa
{
    use R;
}

/**
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 * @method string getPhone
 * @method self withPhone(string $phone)
 * @method string getSysCode
 * @method self withSysCode(string $sysCode)
 */
class RegisterPhoneNumToOa extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getTagString
 * @method self withTagString(string $tagString)
 */
class SetDeviceGroupTags extends Roa
{
    use R;
}

/**
 * @method string getGeoProjectId
 * @method self withGeoProjectId(string $geoProjectId)
 * @method string getGeoProjectName
 * @method self withGeoProjectName(string $geoProjectName)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getMapConfig
 * @method self withMapConfig(string $mapConfig)
 * @method string getGroupMethod
 * @method self withGroupMethod(string $groupMethod)
 */
class UpdateGeoProject extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 */
class queryAppBindDeviceList extends Roa
{
    use R;
}

/**
 * @method string getAppConfigId
 * @method self withAppConfigId(string $appConfigId)
 */
class QueryAppVirtualDeviceConfig extends Roa
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 */
class DelAppVirtualDeviceConfig extends Roa
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method string getAppConfigId
 * @method self withAppConfigId(string $appConfigId)
 * @method string getFrequenceUnit
 * @method self withFrequenceUnit(string $frequenceUnit)
 * @method Integer getFrequence
 * @method self withFrequence(Integer $frequence)
 * @method Integer getDeviceNumber
 * @method self withDeviceNumber(Integer $deviceNumber)
 * @method string getTargetType
 * @method self withTargetType(string $targetType)
 * @method string getTarget
 * @method self withTarget(string $target)
 * @method string getTargetName
 * @method self withTargetName(string $targetName)
 * @method string getPropertyPostRuleList
 * @method self withPropertyPostRuleList(string $propertyPostRuleList)
 * @method string getEventPostRuleList
 * @method self withEventPostRuleList(string $eventPostRuleList)
 * @method array getDeviceTagList
 * @method self withDeviceTagList(array $deviceTagList)
 * @method string getName
 * @method self withName(string $name)
 * @method bool getTaged
 * @method self withTaged(bool $taged)
 */
class SaveAppVirtualDeviceConfig extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getUniMsgId
 * @method self withUniMsgId(string $uniMsgId)
 */
class QueryMessageInfo extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getSiteType
 * @method self withSiteType(string $siteType)
 * @method string getRuleDataFormat
 * @method self withRuleDataFormat(string $ruleDataFormat)
 */
class ListSupportedCloudProducts extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 */
class QueryStandardUnit extends Roa
{
    use R;
}

/**
 * @method string getDriverIds
 * @method self withDriverIds(string $driverIds)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 */
class BatchGetDriverStatus extends Roa
{
    use R;
}

/**
 * @method string getDriverId
 * @method self withDriverId(string $driverId)
 */
class DeleteDriver extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getStreamGuId
 * @method self withStreamGuId(string $streamGuId)
 */
class BindStreamToGroup extends Roa
{
    use R;
}

/**
 * @method string getDriverId
 * @method self withDriverId(string $driverId)
 */
class GetDriver extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getStreamGuIds
 * @method self withStreamGuIds(string $streamGuIds)
 */
class BatchGetGroupStreamStatus extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getStreamGuId
 * @method self withStreamGuId(string $streamGuId)
 */
class UnbindStreamFromGroup extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListGroupStream extends Roa
{
    use R;
}

/**
 * @method string getDriverIds
 * @method self withDriverIds(string $driverIds)
 */
class BatchGetDriver extends Roa
{
    use R;
}

/**
 * @method string getDriverName
 * @method self withDriverName(string $driverName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getUrl
 * @method self withUrl(string $url)
 * @method string getRuntime
 * @method self withRuntime(string $runtime)
 */
class CreateDriver extends Roa
{
    use R;
}

/**
 * @method string getDriverName
 * @method self withDriverName(string $driverName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getUrl
 * @method self withUrl(string $url)
 * @method string getRuntime
 * @method self withRuntime(string $runtime)
 * @method string getDriverId
 * @method self withDriverId(string $driverId)
 */
class UpdateDriver extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getType
 * @method self withType(Integer $type)
 * @method string getDriverName
 * @method self withDriverName(string $driverName)
 */
class ListDriver extends Roa
{
    use R;
}

/**
 * @method string getDriverName
 * @method self withDriverName(string $driverName)
 */
class GetOfficialDriver extends Roa
{
    use R;
}

/**
 * @method string getAppConfigId
 * @method self withAppConfigId(string $appConfigId)
 * @method string getPublishStatus
 * @method self withPublishStatus(string $publishStatus)
 * @method string getVersionName
 * @method self withVersionName(string $versionName)
 * @method string getVersionDescription
 * @method self withVersionDescription(string $versionDescription)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 * @method string getPort
 * @method self withPort(string $port)
 * @method string getTag
 * @method self withTag(string $tag)
 * @method string getPath
 * @method self withPath(string $path)
 */
class UpdateAppConfigPublishStatus extends Roa
{
    use R;
}

/**
 * @method string getClusterName
 * @method self withClusterName(string $clusterName)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getStorageHost
 * @method self withStorageHost(string $storageHost)
 * @method string getStoragePath
 * @method self withStoragePath(string $storagePath)
 * @method string getServiceCidr
 * @method self withServiceCidr(string $serviceCidr)
 * @method string getEnvironmentVars
 * @method self withEnvironmentVars(string $environmentVars)
 */
class CreateEdgeCluster extends Roa
{
    use R;
}

/**
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class DeleteEdgeNode extends Roa
{
    use R;
}

/**
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getKeywords
 * @method self withKeywords(string $keywords)
 */
class QueryEdgeClusterList extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getNodeName
 * @method self withNodeName(string $nodeName)
 * @method string getContext
 * @method self withContext(string $context)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class CreateEdgeNode extends Roa
{
    use R;
}

/**
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class GetEdgeNodeBootstrapScript extends Roa
{
    use R;
}

/**
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getKeywords
 * @method self withKeywords(string $keywords)
 */
class QueryEdgeNodeList extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getClusterName
 * @method self withClusterName(string $clusterName)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getServiceCidr
 * @method self withServiceCidr(string $serviceCidr)
 * @method string getEnvironmentVars
 * @method self withEnvironmentVars(string $environmentVars)
 */
class UpdateEdgeCluster extends Roa
{
    use R;
}

/**
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class DeleteEdgeCluster extends Roa
{
    use R;
}

/**
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class GetEdgeNode extends Roa
{
    use R;
}

/**
 * @method string getMcAddress
 * @method self withMcAddress(string $mcAddress)
 * @method string getMulticastMessage
 * @method self withMulticastMessage(string $multicastMessage)
 */
class MulticastMessagePop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getTargetAliyunPk
 * @method self withTargetAliyunPk(string $targetAliyunPk)
 * @method bool getTransferTag
 * @method self withTransferTag(bool $transferTag)
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 */
class SubmitTransferApply extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getTemplate
 * @method self withTemplate(Integer $template)
 * @method string getTemplateName
 * @method self withTemplateName(string $templateName)
 * @method string getTemplateIdentifier
 * @method self withTemplateIdentifier(string $templateIdentifier)
 * @method string getCategoryKey
 * @method self withCategoryKey(string $categoryKey)
 * @method string getCategoryName
 * @method self withCategoryName(string $categoryName)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class ReleaseProduct extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getApplyId
 * @method self withApplyId(int $applyId)
 */
class RejectTransfer extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductName
 * @method self withProductName(string $productName)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getDevicePropJson
 * @method self withDevicePropJson(string $devicePropJson)
 */
class QuickStart extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getApplyId
 * @method self withApplyId(int $applyId)
 * @method string getdeviceName
 * @method self withdeviceName(string $deviceName)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryTransferDeviceList extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryTransferApplyByPage extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getcurrentPage
 * @method self withcurrentPage(Integer $currentPage)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 */
class QueryReceivedTransferApplyList extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getAuthType
 * @method self withAuthType(Integer $authType)
 */
class QueryReceivedAuthProductList extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getOsType
 * @method self withOsType(Integer $osType)
 * @method Integer getProtocolType
 * @method self withProtocolType(Integer $protocolType)
 * @method Integer getLanguageType
 * @method self withLanguageType(Integer $languageType)
 */
class QueryQuickStartSdk extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getType
 * @method self withType(Integer $type)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryDeviceListByAuthProduct extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getTargetAliyunPk
 * @method self withTargetAliyunPk(string $targetAliyunPk)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getAuthType
 * @method self withAuthType(Integer $authType)
 */
class QueryAuthorizeProductPage extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getTargetAliyunPk
 * @method self withTargetAliyunPk(string $targetAliyunPk)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryAuthorizeDevicePage extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QueryAllDeviceListByAuthProduct extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getAliyunPk
 * @method self withAliyunPk(string $aliyunPk)
 * @method string getTargetAliyunPk
 * @method self withTargetAliyunPk(string $targetAliyunPk)
 */
class QueryAliyunUserInfo extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getJunior
 * @method self withJunior(Integer $junior)
 * @method string getProductName
 * @method self withProductName(string $productName)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class ListAvailableProducts extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getApplyId
 * @method self withApplyId(int $applyId)
 */
class CancelTransferApply extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class CancelReleaseProduct extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getTargetAliyunPk
 * @method self withTargetAliyunPk(string $targetAliyunPk)
 */
class CancelAuthorizedProduct extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method array getCancelDevice
 * @method self withCancelDevice(array $cancelDevice)
 */
class CancelAuthorizedDevices extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class AuthorizeProduct extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getTargetAliyunPk
 * @method self withTargetAliyunPk(string $targetAliyunPk)
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 */
class AuthorizeDevices extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getApplyId
 * @method self withApplyId(int $applyId)
 */
class AcceptTransfer extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 */
class BindRoleToGroup extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 */
class UnbindRoleFromGroup extends Roa
{
    use R;
}

/**
 * @method string getAutomationRuleIds
 * @method self withAutomationRuleIds(string $automationRuleIds)
 * @method Integer getGroupId
 * @method self withGroupId(Integer $groupId)
 */
class BatchGetGroupAutomationRuleRelRuleStatus extends Roa
{
    use R;
}

/**
 * @method Json getIdList
 * @method self withIdList(Json $idList)
 * @method Json getNameList
 * @method self withNameList(Json $nameList)
 * @method string getSearch
 * @method self withSearch(string $search)
 * @method string getType
 * @method self withType(string $type)
 * @method Json getPage
 * @method self withPage(Json $page)
 * @method Json getOrder
 * @method self withOrder(Json $order)
 * @method string getEnv
 * @method self withEnv(string $env)
 * @method string getTaskStatus
 * @method self withTaskStatus(string $taskStatus)
 */
class GetTaskList extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getId
 * @method self withId(int $id)
 * @method string getName
 * @method self withName(string $name)
 * @method string getType
 * @method self withType(string $type)
 * @method string getEndPoint
 * @method self withEndPoint(string $endPoint)
 * @method string getAccessId
 * @method self withAccessId(string $accessId)
 * @method string getAccessKey
 * @method self withAccessKey(string $accessKey)
 * @method string getHost
 * @method self withHost(string $host)
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method string getPort
 * @method self withPort(string $port)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getGmtCreate
 * @method self withGmtCreate(string $gmtCreate)
 * @method string getGmtModified
 * @method self withGmtModified(string $gmtModified)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSourceUid
 * @method self withSourceUid(string $sourceUid)
 */
class UpdateDataSource extends Roa
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 */
class GetDataSource extends Roa
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 */
class PublishTask extends Roa
{
    use R;
}

/**
 * @method int getSourceId
 * @method self withSourceId(int $sourceId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDesc
 * @method self withDesc(string $desc)
 */
class CloneTask extends Roa
{
    use R;
}

/**
 * @method Json getIdList
 * @method self withIdList(Json $idList)
 * @method Json getNameList
 * @method self withNameList(Json $nameList)
 * @method string getSearch
 * @method self withSearch(string $search)
 * @method string getType
 * @method self withType(string $type)
 * @method Json getPage
 * @method self withPage(Json $page)
 * @method Json getOrder
 * @method self withOrder(Json $order)
 */
class GetDataSourceList extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getType
 * @method self withType(string $type)
 * @method string getEndPoint
 * @method self withEndPoint(string $endPoint)
 * @method string getAccessId
 * @method self withAccessId(string $accessId)
 * @method string getAccessKey
 * @method self withAccessKey(string $accessKey)
 * @method string getHost
 * @method self withHost(string $host)
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method string getPort
 * @method self withPort(string $port)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 */
class CheckDataSourceValid extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getDesc
 * @method self withDesc(string $desc)
 * @method string getType
 * @method self withType(string $type)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getSql
 * @method self withSql(string $sql)
 * @method string getComponents
 * @method self withComponents(string $components)
 * @method string getParams
 * @method self withParams(string $params)
 * @method string getEnv
 * @method self withEnv(string $env)
 * @method string getGmtCreate
 * @method self withGmtCreate(string $gmtCreate)
 * @method string getGmtModified
 * @method self withGmtModified(string $gmtModified)
 */
class CreateTask extends Roa
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 */
class DeleteDataSource extends Roa
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method string getSql
 * @method self withSql(string $sql)
 * @method string getComponents
 * @method self withComponents(string $components)
 * @method string getParams
 * @method self withParams(string $params)
 */
class UpdateTaskDetail extends Roa
{
    use R;
}

class ValidateLaUser extends Roa
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDesc
 * @method self withDesc(string $desc)
 */
class UpdateTaskMeta extends Roa
{
    use R;
}

/**
 * @method string getSql
 * @method self withSql(string $sql)
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 */
class CheckTaskSql extends Roa
{
    use R;
}

/**
 * @method string getOutput
 * @method self withOutput(string $output)
 * @method int getSourceId
 * @method self withSourceId(int $sourceId)
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 */
class CheckDataSourceOutput extends Roa
{
    use R;
}

class GetOnsInfoList extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getPhone
 * @method self withPhone(string $phone)
 * @method string getExt
 * @method self withExt(string $ext)
 */
class CreateLaUser extends Roa
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDesc
 * @method self withDesc(string $desc)
 * @method string getType
 * @method self withType(string $type)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getSql
 * @method self withSql(string $sql)
 * @method string getComponents
 * @method self withComponents(string $components)
 * @method string getParams
 * @method self withParams(string $params)
 * @method string getEnv
 * @method self withEnv(string $env)
 * @method string getGmtCreate
 * @method self withGmtCreate(string $gmtCreate)
 * @method string getGmtModified
 * @method self withGmtModified(string $gmtModified)
 */
class UpdateTask extends Roa
{
    use R;
}

class GetComponentList extends Roa
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 */
class WithdrawTask extends Roa
{
    use R;
}

class GetProductList extends Roa
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 */
class GetTask extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class GetProductMeta extends Roa
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 */
class GetTaskStatus extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getId
 * @method self withId(int $id)
 * @method string getName
 * @method self withName(string $name)
 * @method string getType
 * @method self withType(string $type)
 * @method string getEndPoint
 * @method self withEndPoint(string $endPoint)
 * @method string getAccessId
 * @method self withAccessId(string $accessId)
 * @method string getAccessKey
 * @method self withAccessKey(string $accessKey)
 * @method string getHost
 * @method self withHost(string $host)
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method string getPort
 * @method self withPort(string $port)
 * @method string getDbName
 * @method self withDbName(string $dbName)
 * @method string getGmtCreate
 * @method self withGmtCreate(string $gmtCreate)
 * @method string getGmtModified
 * @method self withGmtModified(string $gmtModified)
 * @method string getVpcId
 * @method self withVpcId(string $vpcId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class CreateDataSource extends Roa
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 */
class DeleteTask extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method array getProductKeyList
 * @method self withProductKeyList(array $productKeyList)
 * @method array getCategoryKeyList
 * @method self withCategoryKeyList(array $categoryKeyList)
 * @method array getTagList
 * @method self withTagList(array $tagList)
 * @method string getAppKey
 * @method self withAppKey(string $appKey)
 */
class QueryAppDeviceList extends Roa
{
    use R;
}

class GetAppImageRepoUser extends Roa
{
    use R;
}

/**
 * @method string getDeploymentRecordUuid
 * @method self withDeploymentRecordUuid(string $deploymentRecordUuid)
 * @method bool getNeedDetail
 * @method self withNeedDetail(bool $needDetail)
 */
class GetAppDeploymentDetail extends Roa
{
    use R;
}

/**
 * @method string getAliyunPK
 * @method self withAliyunPK(string $aliyunPK)
 */
class GetAppSignContent extends Roa
{
    use R;
}

/**
 * @method string getType
 * @method self withType(string $type)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getDeploymentName
 * @method self withDeploymentName(string $deploymentName)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class ListAppDeploymentRecord extends Roa
{
    use R;
}

/**
 * @method string getRepoName
 * @method self withRepoName(string $repoName)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListAppRepoTags extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getName
 * @method self withName(string $name)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getPageNo
 * @method self withPageNo(string $pageNo)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 */
class QueryAppAlarmList extends Roa
{
    use R;
}

/**
 * @method string getRepoName
 * @method self withRepoName(string $repoName)
 * @method string getTag
 * @method self withTag(string $tag)
 */
class DeleteAppRepoTag extends Roa
{
    use R;
}

/**
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class GetAppNodePropertyList extends Roa
{
    use R;
}

/**
 * @method string getDeviceAuthorizationUuid
 * @method self withDeviceAuthorizationUuid(string $deviceAuthorizationUuid)
 */
class CancelAppDeviceAuthorization extends Roa
{
    use R;
}

/**
 * @method string getType
 * @method self withType(string $type)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getDeploymentName
 * @method self withDeploymentName(string $deploymentName)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getDeployed
 * @method self withDeployed(string $deployed)
 * @method Integer getLpRelatedNotIn
 * @method self withLpRelatedNotIn(Integer $lpRelatedNotIn)
 * @method array getMultiStatus
 * @method self withMultiStatus(array $multiStatus)
 */
class ListApp extends Roa
{
    use R;
}

/**
 * @method string getAppConfigId
 * @method self withAppConfigId(string $appConfigId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method array getPropertyList
 * @method self withPropertyList(array $propertyList)
 */
class SaveAppNodeProperty extends Roa
{
    use R;
}

/**
 * @method string getUuid
 * @method self withUuid(string $uuid)
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getName
 * @method self withName(string $name)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getStatisticalType
 * @method self withStatisticalType(string $statisticalType)
 * @method string getComparisonCondition
 * @method self withComparisonCondition(string $comparisonCondition)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getComparisonValue
 * @method self withComparisonValue(string $comparisonValue)
 * @method string getComparisonModel
 * @method self withComparisonModel(string $comparisonModel)
 * @method array getContactGroups
 * @method self withContactGroups(array $contactGroups)
 * @method Integer getEvaluationCount
 * @method self withEvaluationCount(Integer $evaluationCount)
 */
class UpdateAppAlarm extends Roa
{
    use R;
}

/**
 * @method Integer getFormType
 * @method self withFormType(Integer $formType)
 * @method string getFieldKey
 * @method self withFieldKey(string $fieldKey)
 * @method string getFieldValue
 * @method self withFieldValue(string $fieldValue)
 */
class SignApp extends Roa
{
    use R;
}

/**
 * @method string getRepoName
 * @method self withRepoName(string $repoName)
 * @method string getSummary
 * @method self withSummary(string $summary)
 * @method string getDetail
 * @method self withDetail(string $detail)
 */
class CreateAppImageRepo extends Roa
{
    use R;
}

/**
 * @method string getUuid
 * @method self withUuid(string $uuid)
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 */
class DeleteAppAlarm extends Roa
{
    use R;
}

/**
 * @method string getRepoName
 * @method self withRepoName(string $repoName)
 */
class DeleteAppImageRepo extends Roa
{
    use R;
}

/**
 * @method array getData
 * @method self withData(array $data)
 */
class CreateAppDeviceAuthorization extends Roa
{
    use R;
}

class GetAccountBalance extends Roa
{
    use R;
}

/**
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getAppConfigId
 * @method self withAppConfigId(string $appConfigId)
 * @method string getName
 * @method self withName(string $name)
 * @method bool getCloned
 * @method self withCloned(bool $cloned)
 * @method Integer getLpRelated
 * @method self withLpRelated(Integer $lpRelated)
 * @method bool getNeedPublishing
 * @method self withNeedPublishing(bool $needPublishing)
 * @method bool getAllVersionsRequired
 * @method self withAllVersionsRequired(bool $allVersionsRequired)
 */
class GetAppConfigList extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getName
 * @method self withName(string $name)
 * @method string getMetric
 * @method self withMetric(string $metric)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getStatisticalType
 * @method self withStatisticalType(string $statisticalType)
 * @method string getComparisonCondition
 * @method self withComparisonCondition(string $comparisonCondition)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getComparisonValue
 * @method self withComparisonValue(string $comparisonValue)
 * @method string getComparisonModel
 * @method self withComparisonModel(string $comparisonModel)
 * @method array getContactGroups
 * @method self withContactGroups(array $contactGroups)
 * @method Integer getEvaluationCount
 * @method self withEvaluationCount(Integer $evaluationCount)
 */
class CreateAppAlarm extends Roa
{
    use R;
}

/**
 * @method string getRepoName
 * @method self withRepoName(string $repoName)
 */
class GetAppImageRepo extends Roa
{
    use R;
}

/**
 * @method string getAppConfigId
 * @method self withAppConfigId(string $appConfigId)
 */
class DeleteAppConfig extends Roa
{
    use R;
}

/**
 * @method string getAppConfigId
 * @method self withAppConfigId(string $appConfigId)
 * @method string getPosition
 * @method self withPosition(string $position)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method array getNodeList
 * @method self withNodeList(array $nodeList)
 * @method array getNodeRelation
 * @method self withNodeRelation(array $nodeRelation)
 * @method array getPropertyList
 * @method self withPropertyList(array $propertyList)
 */
class SaveAppConfig extends Roa
{
    use R;
}

/**
 * @method string getApplicationAuthorizationUuid
 * @method self withApplicationAuthorizationUuid(string $applicationAuthorizationUuid)
 */
class CancelAppAuthorization extends Roa
{
    use R;
}

/**
 * @method string getUuid
 * @method self withUuid(string $uuid)
 */
class GetAppConfigDetail extends Roa
{
    use R;
}

/**
 * @method string getDeploymentRecordUuid
 * @method self withDeploymentRecordUuid(string $deploymentRecordUuid)
 */
class DeleteAppDeployment extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getPeriod
 * @method self withPeriod(string $period)
 * @method array getMetrics
 * @method self withMetrics(array $metrics)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class QueryAppMonitorMetric extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 */
class GetAppServiceInfo extends Roa
{
    use R;
}

/**
 * @method array getData
 * @method self withData(array $data)
 */
class CreateAppAuthorization extends Roa
{
    use R;
}

/**
 * @method string getPassword
 * @method self withPassword(string $password)
 */
class UpdateAppImageRepoPassword extends Roa
{
    use R;
}

/**
 * @method array getRoleNameList
 * @method self withRoleNameList(array $roleNameList)
 */
class GetHaveRoleStatus extends Roa
{
    use R;
}

/**
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListAppImageRepos extends Roa
{
    use R;
}

/**
 * @method string getPassword
 * @method self withPassword(string $password)
 */
class InitializeAppImageRepoPassword extends Roa
{
    use R;
}

/**
 * @method array getServiceCodeList
 * @method self withServiceCodeList(array $serviceCodeList)
 */
class GetUserBusinessEnabledStatus extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 */
class DeleteApp extends Roa
{
    use R;
}

/**
 * @method string getAppConfigId
 * @method self withAppConfigId(string $appConfigId)
 */
class GetAppConfigurableNode extends Roa
{
    use R;
}

/**
 * @method string getConfigureUuid
 * @method self withConfigureUuid(string $configureUuid)
 * @method string getConfigureVersionUuid
 * @method self withConfigureVersionUuid(string $configureVersionUuid)
 * @method string getName
 * @method self withName(string $name)
 * @method string getHostingType
 * @method self withHostingType(string $hostingType)
 * @method string getDeployRegionId
 * @method self withDeployRegionId(string $deployRegionId)
 */
class CreateAppDeployment extends Roa
{
    use R;
}

/**
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 * @method string getNameSpace
 * @method self withNameSpace(string $nameSpace)
 * @method string getName
 * @method self withName(string $name)
 * @method string getCpuCapacityLimit
 * @method self withCpuCapacityLimit(string $cpuCapacityLimit)
 * @method string getMemCapacityLimit
 * @method self withMemCapacityLimit(string $memCapacityLimit)
 * @method string getCpuCapacityRequest
 * @method self withCpuCapacityRequest(string $cpuCapacityRequest)
 * @method string getMemCapacityRequest
 * @method self withMemCapacityRequest(string $memCapacityRequest)
 * @method Integer getContainerCount
 * @method self withContainerCount(Integer $containerCount)
 */
class ExpandAppDeploymentResource extends Roa
{
    use R;
}

/**
 * @method string getAppConfigId
 * @method self withAppConfigId(string $appConfigId)
 * @method string getNodeId
 * @method self withNodeId(string $nodeId)
 * @method array getPropertyList
 * @method self withPropertyList(array $propertyList)
 */
class GetAppVerifyNodePropertyResultAppConfig extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getToUserLoginId
 * @method self withToUserLoginId(string $toUserLoginId)
 */
class QueryAppDeviceAuthorization extends Roa
{
    use R;
}

/**
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getAppConfigId
 * @method self withAppConfigId(string $appConfigId)
 * @method string getConfigKey
 * @method self withConfigKey(string $configKey)
 */
class GetAppProperty extends Roa
{
    use R;
}

/**
 * @method string getAppConfigId
 * @method self withAppConfigId(string $appConfigId)
 */
class GetAppNodes extends Roa
{
    use R;
}

class GetAppServiceRole extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method string getDeploymentUuid
 * @method self withDeploymentUuid(string $deploymentUuid)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QueryAppOwnerDeviceList extends Roa
{
    use R;
}

/**
 * @method string getDeploymentUuid
 * @method self withDeploymentUuid(string $deploymentUuid)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListAppDeploymentService extends Roa
{
    use R;
}

/**
 * @method string getConfigureUuid
 * @method self withConfigureUuid(string $configureUuid)
 * @method string getConfigureVersionUuid
 * @method self withConfigureVersionUuid(string $configureVersionUuid)
 * @method string getName
 * @method self withName(string $name)
 * @method string getDeployRegionId
 * @method self withDeployRegionId(string $deployRegionId)
 * @method string getHostingType
 * @method self withHostingType(string $hostingType)
 * @method string getClusterId
 * @method self withClusterId(string $clusterId)
 */
class CreateAppEdgeDeployment extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method string getDeploymentName
 * @method self withDeploymentName(string $deploymentName)
 * @method string getAppUuid
 * @method self withAppUuid(string $appUuid)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QueryAppAuthorization extends Roa
{
    use R;
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class QueryDeviceLocationByProductPage extends Roa
{
    use R;
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getGeoProjectId
 * @method self withGeoProjectId(string $geoProjectId)
 * @method Json getProductKeyList
 * @method self withProductKeyList(Json $productKeyList)
 */
class QueryDeviceLocationByGroupPage extends Roa
{
    use R;
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getGeoProjectId
 * @method self withGeoProjectId(string $geoProjectId)
 * @method string getAttributeCode
 * @method self withAttributeCode(string $attributeCode)
 */
class QueryDevicePropertyByProductPage extends Roa
{
    use R;
}

/**
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getGeoProjectId
 * @method self withGeoProjectId(string $geoProjectId)
 * @method string getAttributeCode
 * @method self withAttributeCode(string $attributeCode)
 * @method Json getProductKeyList
 * @method self withProductKeyList(Json $productKeyList)
 */
class QueryDevicePropertyByGroupPage extends Roa
{
    use R;
}

/**
 * @method Json getItems
 * @method self withItems(Json $items)
 * @method string getGeoProjectId
 * @method self withGeoProjectId(string $geoProjectId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class SetGeoDeviceProperty extends Roa
{
    use R;
}

/**
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getGeoProjectId
 * @method self withGeoProjectId(string $geoProjectId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class QueryGeoDeviceProperty extends Roa
{
    use R;
}

/**
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getGeoProjectId
 * @method self withGeoProjectId(string $geoProjectId)
 */
class QueryProductListByGroup extends Roa
{
    use R;
}

/**
 * @method string getGeoProjectId
 * @method self withGeoProjectId(string $geoProjectId)
 */
class PublishGeoProject extends Roa
{
    use R;
}

/**
 * @method string getMapConfig
 * @method self withMapConfig(string $mapConfig)
 * @method string getGeoProjectId
 * @method self withGeoProjectId(string $geoProjectId)
 */
class SaveMapConfig extends Roa
{
    use R;
}

/**
 * @method string getNewGeoProjectName
 * @method self withNewGeoProjectName(string $newGeoProjectName)
 * @method string getGeoProjectId
 * @method self withGeoProjectId(string $geoProjectId)
 */
class ChangeGeoProjectName extends Roa
{
    use R;
}

/**
 * @method string getGeoProjectId
 * @method self withGeoProjectId(string $geoProjectId)
 */
class QueryGeoProject extends Roa
{
    use R;
}

/**
 * @method string getNewGeoProjectName
 * @method self withNewGeoProjectName(string $newGeoProjectName)
 * @method string getGeoProjectId
 * @method self withGeoProjectId(string $geoProjectId)
 */
class DuplicateGeoProject extends Roa
{
    use R;
}

/**
 * @method string getGeoProjectId
 * @method self withGeoProjectId(string $geoProjectId)
 */
class DeleteGeoProject extends Roa
{
    use R;
}

/**
 * @method string getGeoProjectName
 * @method self withGeoProjectName(string $geoProjectName)
 * @method string getGroupMethod
 * @method self withGroupMethod(string $groupMethod)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getMapConfig
 * @method self withMapConfig(string $mapConfig)
 */
class CreateGeoProject extends Roa
{
    use R;
}

/**
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 */
class DeleteBIMScene extends Roa
{
    use R;
}

/**
 * @method string getRequestVersion
 * @method self withRequestVersion(string $requestVersion)
 */
class GetPortalDescImage extends Roa
{
    use R;
}

/**
 * @method Json getBindSceneDTO
 * @method self withBindSceneDTO(Json $bindSceneDTO)
 */
class SaveScene extends Roa
{
    use R;
}

/**
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 */
class PublishScene extends Roa
{
    use R;
}

/**
 * @method Json getSceneDTO
 * @method self withSceneDTO(Json $sceneDTO)
 */
class InitScene extends Roa
{
    use R;
}

/**
 * @method string getRequestVersion
 * @method self withRequestVersion(string $requestVersion)
 */
class GetPortalClasicScenes extends Roa
{
    use R;
}

/**
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 */
class DeleteScene extends Roa
{
    use R;
}

/**
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 */
class GetBindSceneInfo extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class GetProductPropertiesForBim extends Roa
{
    use R;
}

/**
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 * @method string getSceneName
 * @method self withSceneName(string $sceneName)
 */
class CopyBIMScene extends Roa
{
    use R;
}

/**
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 */
class GenerateBIMOssUploadUri extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getGroupDesc
 * @method self withGroupDesc(string $groupDesc)
 */
class UpdateDeviceGroup extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getSuperGroupId
 * @method self withSuperGroupId(string $superGroupId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class QueryDeviceGroupTree extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class QueryDeviceGroupTagList extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getSuperGroupId
 * @method self withSuperGroupId(string $superGroupId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryDeviceGroupList extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class QueryDeviceGroupInfo extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class QueryDeviceGroupByName extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QueryDeviceGroupByDevice extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getTagString
 * @method self withTagString(string $tagString)
 */
class ForceSetDeviceGroupTag extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class DeleteDeviceGroup extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getSuperGroupId
 * @method self withSuperGroupId(string $superGroupId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getGroupDesc
 * @method self withGroupDesc(string $groupDesc)
 */
class CreateDeviceGroup extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method array getDevice
 * @method self withDevice(array $device)
 */
class BatchDeleteDeviceGroupRelations extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method array getDevice
 * @method self withDevice(array $device)
 */
class BatchAddDeviceGroupRelations extends Roa
{
    use R;
}

/**
 * @method Json getIotId
 * @method self withIotId(Json $iotId)
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 */
class GetMultiDeviceStatusForBim extends Roa
{
    use R;
}

/**
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 * @method string getPackageName
 * @method self withPackageName(string $packageName)
 */
class UnzipAndPushScene extends Roa
{
    use R;
}

class GetUserScenes extends Roa
{
    use R;
}

/**
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getTag
 * @method self withTag(string $tag)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getAliyunCommodityCode
 * @method self withAliyunCommodityCode(string $aliyunCommodityCode)
 */
class QueryDevicePageForBim extends Roa
{
    use R;
}

class QueryGeoProjectList extends Roa
{
    use R;
}

/**
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 */
class CheckIsUnzipSuccess extends Roa
{
    use R;
}

/**
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 */
class GetDeviceStatusForBim extends Roa
{
    use R;
}

/**
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method Json getDeviceStatus
 * @method self withDeviceStatus(Json $deviceStatus)
 * @method string getSceneId
 * @method self withSceneId(string $sceneId)
 */
class SetDeviceStatusForBim extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getTimeout
 * @method self withTimeout(Integer $timeout)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getTopic
 * @method self withTopic(string $topic)
 * @method string getRequestBase64Byte
 * @method self withRequestBase64Byte(string $requestBase64Byte)
 */
class RRpc extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getApplyId
 * @method self withApplyId(int $applyId)
 */
class QueryPageByApplyId extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 */
class QueryDevice extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getProps
 * @method self withProps(string $props)
 */
class SaveDeviceProp extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 */
class QueryTopicRouteTable extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getTopic
 * @method self withTopic(string $topic)
 */
class QueryTopicReverseRouteTable extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getTopicFullName
 * @method self withTopicFullName(string $topicFullName)
 * @method string getMessageContent
 * @method self withMessageContent(string $messageContent)
 */
class PubBroadcast extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getSrcTopic
 * @method self withSrcTopic(string $srcTopic)
 * @method array getDstTopic
 * @method self withDstTopic(array $dstTopic)
 */
class DeleteTopicRouteTable extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getPropKey
 * @method self withPropKey(string $propKey)
 */
class DeleteDeviceProp extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getSrcTopic
 * @method self withSrcTopic(string $srcTopic)
 * @method array getDstTopic
 * @method self withDstTopic(array $dstTopic)
 */
class CreateTopicRouteTable extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 */
class BatchGetDeviceState extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getSecureUpgradeFlag
 * @method self withSecureUpgradeFlag(Integer $secureUpgradeFlag)
 */
class UpdateSecureUpgradeFlag extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getCode
 * @method self withCode(string $code)
 * @method string getServerName
 * @method self withServerName(string $serverName)
 * @method string getContent
 * @method self withContent(string $content)
 */
class UpdateGatewayServerConfig extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getGwProductKey
 * @method self withGwProductKey(string $gwProductKey)
 * @method string getGwDeviceName
 * @method self withGwDeviceName(string $gwDeviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getCode
 * @method self withCode(string $code)
 * @method string getServerId
 * @method self withServerId(string $serverId)
 * @method string getConfigJson
 * @method self withConfigJson(string $configJson)
 */
class UpdateChildDeviceConfig extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 */
class RetryDiff extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QueryVirtualDevice extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QuerySecureUpgradePublicKey extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryModelConfig extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getCode
 * @method self withCode(string $code)
 */
class QueryGatewayServerConfig extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryDiffTask extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getGwProductKey
 * @method self withGwProductKey(string $gwProductKey)
 * @method string getGwDeviceName
 * @method self withGwDeviceName(string $gwDeviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QueryChildDeviceConfig extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class PushDeviceConfig extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getPropertyJson
 * @method self withPropertyJson(string $propertyJson)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getDelay
 * @method self withDelay(Integer $delay)
 * @method Integer getInterval
 * @method self withInterval(Integer $interval)
 * @method Integer getCount
 * @method self withCount(Integer $count)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class PostDevicePropertiesRegularly extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getPropertyJson
 * @method self withPropertyJson(string $propertyJson)
 */
class PostDeviceProperties extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getOutputJson
 * @method self withOutputJson(string $outputJson)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getDelay
 * @method self withDelay(Integer $delay)
 * @method Integer getInterval
 * @method self withInterval(Integer $interval)
 * @method Integer getCount
 * @method self withCount(Integer $count)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class PostDeviceEventsRegularly extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getOutputJson
 * @method self withOutputJson(string $outputJson)
 */
class PostDeviceEvents extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProtocol4ChildDevice
 * @method self withProtocol4ChildDevice(string $protocol4ChildDevice)
 * @method string getServerName
 * @method self withServerName(string $serverName)
 */
class ListGatewayServerConfig extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getTslStr
 * @method self withTslStr(string $tslStr)
 */
class ImportTsl extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getUploadType
 * @method self withUploadType(string $uploadType)
 */
class GenerateOpcUaUploadUrl extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class DoDeviceOnline extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class DoDeviceOffline extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getCode
 * @method self withCode(string $code)
 */
class DeleteGatewayServerConfig extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProtocol4ChildDevice
 * @method self withProtocol4ChildDevice(string $protocol4ChildDevice)
 * @method string getServerName
 * @method self withServerName(string $serverName)
 * @method string getContent
 * @method self withContent(string $content)
 */
class CreateGatewayServerConfig extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getGwProductKey
 * @method self withGwProductKey(string $gwProductKey)
 * @method string getGwDeviceName
 * @method self withGwDeviceName(string $gwDeviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getServerId
 * @method self withServerId(string $serverId)
 * @method string getConfigJson
 * @method self withConfigJson(string $configJson)
 */
class CreateChildDevice extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getDestFirmwareName
 * @method self withDestFirmwareName(string $destFirmwareName)
 * @method array getSrcFirmwareName
 * @method self withSrcFirmwareName(array $srcFirmwareName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDiffMethod
 * @method self withDiffMethod(string $diffMethod)
 * @method Integer getSplictSize
 * @method self withSplictSize(Integer $splictSize)
 */
class CreateBatchDiff extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getSrcProductKey
 * @method self withSrcProductKey(string $srcProductKey)
 * @method string getTargetProductKey
 * @method self withTargetProductKey(string $targetProductKey)
 */
class CopyProductAbility extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 * @method int getTaskId
 * @method self withTaskId(int $taskId)
 */
class CancelDiff extends Roa
{
    use R;
}

/**
 * @method string getDriverTemplateName
 * @method self withDriverTemplateName(string $driverTemplateName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getContent
 * @method self withContent(string $content)
 * @method string getRuntime
 * @method self withRuntime(string $runtime)
 * @method string getDriverTemplateId
 * @method self withDriverTemplateId(string $driverTemplateId)
 */
class UpdateDriverTemplate extends Roa
{
    use R;
}

/**
 * @method string getDriverTemplateId
 * @method self withDriverTemplateId(string $driverTemplateId)
 */
class DeleteDriverTemplate extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class BindGatewayToGroup extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getDriverId
 * @method self withDriverId(string $driverId)
 */
class UnbindDriverFromGroup extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getDriverId
 * @method self withDriverId(string $driverId)
 */
class GetGroupDriver extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getDriverId
 * @method self withDriverId(string $driverId)
 */
class UpdateDeviceConfig extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getType
 * @method self withType(Integer $type)
 * @method string getName
 * @method self withName(string $name)
 */
class ListDriverTemplate extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getDriverTemplateId
 * @method self withDriverTemplateId(string $driverTemplateId)
 * @method string getDriverId
 * @method self withDriverId(string $driverId)
 * @method int getMemory
 * @method self withMemory(int $memory)
 */
class BindDriverToGroup extends Roa
{
    use R;
}

/**
 * @method string getDriverTemplateId
 * @method self withDriverTemplateId(string $driverTemplateId)
 */
class GetDriverTemplate extends Roa
{
    use R;
}

/**
 * @method string getDriverTemplateName
 * @method self withDriverTemplateName(string $driverTemplateName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getContent
 * @method self withContent(string $content)
 * @method string getRuntime
 * @method self withRuntime(string $runtime)
 */
class CreateDriverTemplate extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListGroupDriver extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getDriverId
 * @method self withDriverId(string $driverId)
 * @method int getMemory
 * @method self withMemory(int $memory)
 */
class UpdateGroupDriverConfig extends Roa
{
    use R;
}

/**
 * @method string getDriverTemplateIds
 * @method self withDriverTemplateIds(string $driverTemplateIds)
 */
class BatchGetDriverTemplateInfo extends Roa
{
    use R;
}

/**
 * @method string getDriverTemplateIds
 * @method self withDriverTemplateIds(string $driverTemplateIds)
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 */
class BatchGetDriverTemplateStatus extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getCallbackType
 * @method self withCallbackType(Integer $callbackType)
 */
class UpdateServerCallback extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryReducedTsl extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryDeviceBatchList extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getApplyId
 * @method self withApplyId(int $applyId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getActive
 * @method self withActive(Integer $active)
 */
class QueryDeviceBatchInfo extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getApplyId
 * @method self withApplyId(int $applyId)
 */
class QueryBatchApplyDeviceList extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class ListServerCallbacks extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getAutomationRuleId
 * @method self withAutomationRuleId(string $automationRuleId)
 */
class UnbindAutomationRuleFromGroup extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getAutomationRuleIds
 * @method self withAutomationRuleIds(string $automationRuleIds)
 */
class BatchGetGroupAutomationRuleStatus extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 */
class GetGroupGateway extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getFunctionName
 * @method self withFunctionName(string $functionName)
 */
class ListGroupFunction extends Roa
{
    use R;
}

/**
 * @method string getAutomationRuleIds
 * @method self withAutomationRuleIds(string $automationRuleIds)
 * @method Integer getGroupId
 * @method self withGroupId(Integer $groupId)
 */
class BatchGetGroupAutomationRuleDeviceStatus extends Roa
{
    use R;
}

/**
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 * @method string getRuleContent
 * @method self withRuleContent(string $ruleContent)
 * @method string getRuleDescription
 * @method self withRuleDescription(string $ruleDescription)
 */
class CreateAutomationRule extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class ListGroupDevice extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getDeviceType
 * @method self withDeviceType(string $deviceType)
 */
class BindDeviceToGroup extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getType
 * @method self withType(Integer $type)
 */
class ListGroup extends Roa
{
    use R;
}

/**
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 */
class EnableAutomationRule extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getDevices
 * @method self withDevices(string $devices)
 */
class BatchGetGroupDeviceStatus extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getEdgeFunctionId
 * @method self withEdgeFunctionId(string $edgeFunctionId)
 */
class UnbindFunctionFromGroup extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 */
class ResetGroup extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method int getRouteId
 * @method self withRouteId(int $routeId)
 */
class GetGroupMessageRoute extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getFunctions
 * @method self withFunctions(string $functions)
 */
class BatchGetGroupFunctionStatus extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method int getRouteId
 * @method self withRouteId(int $routeId)
 */
class DeleteGroupMessageRoute extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getDeviceType
 * @method self withDeviceType(string $deviceType)
 */
class UnbindDeviceFromGroup extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class ListGroupProduct extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 */
class GetGroup extends Roa
{
    use R;
}

/**
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 */
class DisableAutomationRule extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListGroupAutomationRule extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getAutomationRuleId
 * @method self withAutomationRuleId(string $automationRuleId)
 */
class BindAutomationRuleToGroup extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class UpdateGroup extends Roa
{
    use R;
}

/**
 * @method string getAutomationRuleId
 * @method self withAutomationRuleId(string $automationRuleId)
 * @method Integer getStartTime
 * @method self withStartTime(Integer $startTime)
 * @method Integer getEndTime
 * @method self withEndTime(Integer $endTime)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 */
class ListSummaryAutomationRuleLog extends Roa
{
    use R;
}

/**
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 */
class GetAutomationRule extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 * @method string getFunctionName
 * @method self withFunctionName(string $functionName)
 * @method string getRunMode
 * @method self withRunMode(string $runMode)
 * @method string getFcRegionId
 * @method self withFcRegionId(string $fcRegionId)
 * @method Integer getMemorySize
 * @method self withMemorySize(Integer $memorySize)
 * @method Integer getTimeout
 * @method self withTimeout(Integer $timeout)
 * @method string getTriggerContent
 * @method self withTriggerContent(string $triggerContent)
 */
class BindFunctionToGroup extends Roa
{
    use R;
}

/**
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 */
class ListAutomationRule extends Roa
{
    use R;
}

/**
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class TriggerAutomationRule extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getEdgeFunctionId
 * @method self withEdgeFunctionId(string $edgeFunctionId)
 * @method string getRunMode
 * @method self withRunMode(string $runMode)
 * @method Integer getMemorySize
 * @method self withMemorySize(Integer $memorySize)
 * @method Integer getTimeout
 * @method self withTimeout(Integer $timeout)
 * @method string getTriggerContent
 * @method self withTriggerContent(string $triggerContent)
 */
class UpdateGroupFunctionConfig extends Roa
{
    use R;
}

/**
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 * @method string getRuleName
 * @method self withRuleName(string $ruleName)
 * @method string getRuleContent
 * @method self withRuleContent(string $ruleContent)
 * @method string getRuleDescription
 * @method self withRuleDescription(string $ruleDescription)
 */
class UpdateAutomationRule extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 */
class CreateDeployment extends Roa
{
    use R;
}

/**
 * @method string getAutomationRuleId
 * @method self withAutomationRuleId(string $automationRuleId)
 * @method Integer getStartTime
 * @method self withStartTime(Integer $startTime)
 * @method Integer getEndTime
 * @method self withEndTime(Integer $endTime)
 * @method string getTraceId
 * @method self withTraceId(string $traceId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 */
class ListDetailAutomationRuleLog extends Roa
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class CreateGroup extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListGroupMessageRoute extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 */
class DeleteGroup extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListDeployDetail extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method string getTopicFilter
 * @method self withTopicFilter(string $topicFilter)
 * @method string getSourceType
 * @method self withSourceType(string $sourceType)
 * @method string getSourceData
 * @method self withSourceData(string $sourceData)
 * @method string getTargetType
 * @method self withTargetType(string $targetType)
 * @method string getTargetData
 * @method self withTargetData(string $targetData)
 * @method Integer getTargetIotHubQos
 * @method self withTargetIotHubQos(Integer $targetIotHubQos)
 */
class CreateGroupMessageRoute extends Roa
{
    use R;
}

/**
 * @method string getRuleId
 * @method self withRuleId(string $ruleId)
 */
class DeleteAutomationRule extends Roa
{
    use R;
}

/**
 * @method int getGroupId
 * @method self withGroupId(int $groupId)
 * @method int getRouteId
 * @method self withRouteId(int $routeId)
 * @method string getTopicFilter
 * @method self withTopicFilter(string $topicFilter)
 * @method string getSourceType
 * @method self withSourceType(string $sourceType)
 * @method string getSourceData
 * @method self withSourceData(string $sourceData)
 * @method string getTargetType
 * @method self withTargetType(string $targetType)
 * @method string getTargetData
 * @method self withTargetData(string $targetData)
 * @method Integer getTargetIotHubQos
 * @method self withTargetIotHubQos(Integer $targetIotHubQos)
 */
class UpdateGroupMessageRoute extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getType
 * @method self withType(string $type)
 */
class QueryRulengSysTopics extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 */
class QueryProductByUserId extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 * @method bool getDiff
 * @method self withDiff(bool $diff)
 * @method array getSrcFirmwareName
 * @method self withSrcFirmwareName(array $srcFirmwareName)
 */
class VerifyFirmware extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class UpgradeSingleDevice extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getActionId
 * @method self withActionId(int $actionId)
 * @method string getType
 * @method self withType(string $type)
 * @method string getConfiguration
 * @method self withConfiguration(string $configuration)
 */
class UpdateRuleAction extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 * @method string getSelect
 * @method self withSelect(string $select)
 * @method string getShortTopic
 * @method self withShortTopic(string $shortTopic)
 * @method string getWhere
 * @method self withWhere(string $where)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getName
 * @method self withName(string $name)
 * @method string getRuleDesc
 * @method self withRuleDesc(string $ruleDesc)
 * @method Integer getTopicType
 * @method self withTopicType(Integer $topicType)
 */
class UpdateRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getDesc
 * @method self withDesc(string $desc)
 * @method string getOperation
 * @method self withOperation(string $operation)
 * @method string getTopicShortName
 * @method self withTopicShortName(string $topicShortName)
 * @method string getTopicId
 * @method self withTopicId(string $topicId)
 */
class UpdateProductTopic extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getShadowMessage
 * @method self withShadowMessage(string $shadowMessage)
 */
class UpdateDeviceShadow extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 */
class StopRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 */
class StartRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getServeId
 * @method self withServeId(int $serveId)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class SaveUserServeStatus extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getMnsConfiguration
 * @method self withMnsConfiguration(string $mnsConfiguration)
 * @method Integer getCallbackType
 * @method self withCallbackType(Integer $callbackType)
 */
class SaveServerCallback extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class ReUpgradeDevices extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 */
class ResetDeviceUpgrade extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryVersionsByPk extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getRegionName
 * @method self withRegionName(string $regionName)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 */
class QueryTableStoreTablesForRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getRegionName
 * @method self withRegionName(string $regionName)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getTableName
 * @method self withTableName(string $tableName)
 */
class QueryTableStorePrimaryKeysForRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getRegionName
 * @method self withRegionName(string $regionName)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 */
class QueryTableStoreInstancesForRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 */
class QueryStrategyByFirName extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryServerCallback extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method array getExclusionServe
 * @method self withExclusionServe(array $exclusionServe)
 */
class QueryServeList extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getServeId
 * @method self withServeId(int $serveId)
 */
class QueryServeById extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 */
class QueryRuleForwardCloudRegion extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 */
class QueryRdsRegionsForRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class QueryRdsInstancePageForRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 * @method string getDbInstanceId
 * @method self withDbInstanceId(string $dbInstanceId)
 */
class QueryRdsDatabasesForRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 * @method string getDbInstanceId
 * @method self withDbInstanceId(string $dbInstanceId)
 */
class QueryRdsAccountsForRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryProductWithScript extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryProductTopic extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 */
class QueryOtaJobByDevices extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getRegionName
 * @method self withRegionName(string $regionName)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 */
class QueryMqTopicsForRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 */
class QueryMqRegionsForRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getRegionName
 * @method self withRegionName(string $regionName)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 */
class QueryMnsTopicsForRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getFrom
 * @method self withFrom(int $from)
 * @method int getTo
 * @method self withTo(int $to)
 * @method string getKeyWords
 * @method self withKeyWords(string $keyWords)
 * @method string getBizcode
 * @method self withBizcode(string $bizcode)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getMessageId
 * @method self withMessageId(string $messageId)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QueryLogPage extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class QueryHitsSecurityIpForRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 */
class QueryHitsRegionsForRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class QueryHitsInstancePageForRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class QueryHitsInstanceForRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 */
class QueryFirmwareVerifyInfo extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getDeleteStatus
 * @method self withDeleteStatus(Integer $deleteStatus)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getFirmVersion
 * @method self withFirmVersion(string $firmVersion)
 */
class QueryFirmwareByUid extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 */
class QueryFirmwareByName extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getRegionName
 * @method self withRegionName(string $regionName)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 */
class QueryFcServicesForRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getRegionName
 * @method self withRegionName(string $regionName)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 */
class QueryFcFunctionsForRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getType
 * @method self withType(Integer $type)
 */
class QueryDeviceUpgradeInfo extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QueryDeviceTopic extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryDeviceProp extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getIndistinctDevName
 * @method self withIndistinctDevName(string $indistinctDevName)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method array getFirmwareVersion
 * @method self withFirmwareVersion(array $firmwareVersion)
 */
class QueryDeviceByPkAndVersion extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QueryDebugOnlineLog extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getRegionName
 * @method self withRegionName(string $regionName)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 */
class QueryDataHubTopicsForRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getRegionName
 * @method self withRegionName(string $regionName)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 * @method string getProjectName
 * @method self withProjectName(string $projectName)
 * @method string getTopicName
 * @method self withTopicName(string $topicName)
 */
class QueryDataHubSchemasForRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getRegionName
 * @method self withRegionName(string $regionName)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 */
class QueryDataHubProjectsForRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getQos
 * @method self withQos(Integer $qos)
 * @method string getTopicFullName
 * @method self withTopicFullName(string $topicFullName)
 * @method string getMessageContent
 * @method self withMessageContent(string $messageContent)
 */
class Pub extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 */
class ListRuleActions extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getAliyunCommodityCode
 * @method self withAliyunCommodityCode(string $aliyunCommodityCode)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getNodeType
 * @method self withNodeType(Integer $nodeType)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class ListProduct extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getActionId
 * @method self withActionId(int $actionId)
 */
class GetRuleAction extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 */
class GetRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getShadowMessage
 * @method self withShadowMessage(string $shadowMessage)
 */
class GetDeviceShadow extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 */
class GenerateOssUploadUri extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 */
class FinishVerifyTask extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 */
class DeviceUpgradeCount extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 */
class DescribeRegions extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getActionId
 * @method self withActionId(int $actionId)
 */
class DeleteRuleAction extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 */
class DeleteRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getTopicId
 * @method self withTopicId(string $topicId)
 */
class DeleteProductTopic extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 */
class DeleteFirmware extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 * @method string getSql
 * @method self withSql(string $sql)
 * @method string getJsonInfo
 * @method self withJsonInfo(string $jsonInfo)
 */
class DebugRuleSql extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getRuleId
 * @method self withRuleId(int $ruleId)
 * @method string getType
 * @method self withType(string $type)
 * @method string getConfiguration
 * @method self withConfiguration(string $configuration)
 * @method bool getErrorActionFlag
 * @method self withErrorActionFlag(bool $errorActionFlag)
 */
class CreateRuleAction extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getSelect
 * @method self withSelect(string $select)
 * @method string getShortTopic
 * @method self withShortTopic(string $shortTopic)
 * @method string getWhere
 * @method self withWhere(string $where)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getName
 * @method self withName(string $name)
 * @method string getRuleDesc
 * @method self withRuleDesc(string $ruleDesc)
 * @method string getDataType
 * @method self withDataType(string $dataType)
 * @method Integer getTopicType
 * @method self withTopicType(Integer $topicType)
 */
class CreateRule extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getTopicShortName
 * @method self withTopicShortName(string $topicShortName)
 * @method string getOperation
 * @method self withOperation(string $operation)
 * @method string getDesc
 * @method self withDesc(string $desc)
 */
class CreateProductTopic extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 * @method string getDestVersion
 * @method self withDestVersion(string $destVersion)
 * @method string getFirmwareUrl
 * @method self withFirmwareUrl(string $firmwareUrl)
 * @method string getFirmwareSign
 * @method self withFirmwareSign(string $firmwareSign)
 * @method string getSignMethod
 * @method self withSignMethod(string $signMethod)
 * @method Integer getFirmwareSize
 * @method self withFirmwareSize(Integer $firmwareSize)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getFirmwareDesc
 * @method self withFirmwareDesc(string $firmwareDesc)
 */
class CreateFirmware extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 */
class CheckCloudProductOpenStatus extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getFirmwareName
 * @method self withFirmwareName(string $firmwareName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getUpgradeType
 * @method self withUpgradeType(string $upgradeType)
 * @method string getStrategyType
 * @method self withStrategyType(string $strategyType)
 * @method string getDestVersion
 * @method self withDestVersion(string $destVersion)
 * @method string getLocations
 * @method self withLocations(string $locations)
 * @method array getSrcVersion
 * @method self withSrcVersion(array $srcVersion)
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 * @method bool getDiff
 * @method self withDiff(bool $diff)
 * @method array getSrcFirmwareName
 * @method self withSrcFirmwareName(array $srcFirmwareName)
 * @method int getFireTime
 * @method self withFireTime(int $fireTime)
 * @method int getRetryInterval
 * @method self withRetryInterval(int $retryInterval)
 * @method Integer getRetryCount
 * @method self withRetryCount(Integer $retryCount)
 */
class BatchDeviceUpgrade extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getTagName
 * @method self withTagName(string $tagName)
 * @method string getTagKey
 * @method self withTagKey(string $tagKey)
 * @method string getTagValue
 * @method self withTagValue(string $tagValue)
 */
class AddProductTag extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getTagString
 * @method self withTagString(string $tagString)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class BatchForceUpdateProductTag extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method array getTagKeys
 * @method self withTagKeys(array $tagKeys)
 */
class BatchDeleteProductTag extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getTagKey
 * @method self withTagKey(string $tagKey)
 */
class DeleteProductTag extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getTagString
 * @method self withTagString(string $tagString)
 */
class BatchUpdateProductTag extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class ListCategory extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getProps
 * @method self withProps(string $props)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class ForceSetDeviceProp extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class ListProductTag extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryAlinkTopicList extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getAbilityType
 * @method self withAbilityType(Integer $abilityType)
 * @method string getName
 * @method self withName(string $name)
 */
class ListStdAbility extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QueryDynamicRegisterSwitch extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class ResetProductSecret extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getAbilityType
 * @method self withAbilityType(Integer $abilityType)
 * @method string getDeviceType
 * @method self withDeviceType(string $deviceType)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 */
class QueryStdAbilityInfo extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getTagName
 * @method self withTagName(string $tagName)
 * @method string getTagKey
 * @method self withTagKey(string $tagKey)
 * @method string getTagValue
 * @method self withTagValue(string $tagValue)
 */
class UpdateProductTag extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class SetDynamicRegisterSwitch extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method string getConfigName
 * @method self withConfigName(string $configName)
 * @method string getConfigContent
 * @method self withConfigContent(string $configContent)
 * @method string getSignMethod
 * @method self withSignMethod(string $signMethod)
 * @method string getConfigFormat
 * @method self withConfigFormat(string $configFormat)
 */
class AddThingConfig extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getCount
 * @method self withCount(Integer $count)
 */
class BatchRegisterDevicePop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 */
class BatchRegisterDeviceWithNames extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method int getApplyId
 * @method self withApplyId(int $applyId)
 */
class BatchRegisterDeviceWithApplyIdPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 */
class BatchRegisterDeviceWithNamesPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class PushThingConfig extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getConfigId
 * @method self withConfigId(string $configId)
 * @method bool getContainedOssUrl
 * @method self withContainedOssUrl(bool $containedOssUrl)
 */
class QueryConfigByConfigId extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method int getApplyId
 * @method self withApplyId(int $applyId)
 */
class QueryBatchRegisterDeviceStatus extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getAsc
 * @method self withAsc(Integer $asc)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryDevicePropertyDataPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QueryDevicePropertyStatusPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method bool getContainedOssUrl
 * @method self withContainedOssUrl(bool $containedOssUrl)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryThingConfig extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method string getType
 * @method self withType(string $type)
 */
class QueryThingFunctionSwitch extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getItems
 * @method self withItems(string $items)
 */
class SetDevicePropertyPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method string getType
 * @method self withType(string $type)
 */
class SetThingFunctionSwitchStatus extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getTagString
 * @method self withTagString(string $tagString)
 */
class UpdateProductTagForProtal extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class GetGatewayBySubDevice extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getParams
 * @method self withParams(string $params)
 * @method string getAuthType
 * @method self withAuthType(string $authType)
 */
class VerifyThingAuthentication extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method string getType
 * @method self withType(string $type)
 */
class SetThingFunctionSwitchStatusPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 */
class ResetThing extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class RemoveThingTopo extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method string getType
 * @method self withType(string $type)
 */
class QueryThingFunctionSwitchPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method bool getContainedOssUrl
 * @method self withContainedOssUrl(bool $containedOssUrl)
 * @method Integer getStatus
 * @method self withStatus(Integer $status)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryThingConfigPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getConfigId
 * @method self withConfigId(string $configId)
 * @method bool getContainedOssUrl
 * @method self withContainedOssUrl(bool $containedOssUrl)
 */
class QueryConfigByConfigIdPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class PushThingConfigPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getDeviceListStr
 * @method self withDeviceListStr(string $deviceListStr)
 * @method string getGwIotId
 * @method self withGwIotId(string $gwIotId)
 * @method string getGwProductKey
 * @method self withGwProductKey(string $gwProductKey)
 * @method string getGwDeviceName
 * @method self withGwDeviceName(string $gwDeviceName)
 */
class NotifyAddThingTopo extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class GetThingTopo extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method string getConfigName
 * @method self withConfigName(string $configName)
 * @method string getConfigContent
 * @method self withConfigContent(string $configContent)
 * @method string getSignMethod
 * @method self withSignMethod(string $signMethod)
 * @method string getConfigFormat
 * @method self withConfigFormat(string $configFormat)
 */
class AddThingConfigPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getServiceId
 * @method self withServiceId(int $serviceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getInputParams
 * @method self withInputParams(string $inputParams)
 * @method string getOutputParams
 * @method self withOutputParams(string $outputParams)
 * @method Integer getCallType
 * @method self withCallType(Integer $callType)
 */
class UpdateServicePop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getScriptName
 * @method self withScriptName(string $scriptName)
 * @method string getScriptContent
 * @method self withScriptContent(string $scriptContent)
 * @method string getScriptType
 * @method self withScriptType(string $scriptType)
 */
class UpdateScriptPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getScriptContent
 * @method self withScriptContent(string $scriptContent)
 * @method string getScriptType
 * @method self withScriptType(string $scriptType)
 * @method string getScriptCode
 * @method self withScriptCode(string $scriptCode)
 * @method string getOssUrl
 * @method self withOssUrl(string $ossUrl)
 */
class UpdateScriptDraftPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method int getPropertyId
 * @method self withPropertyId(int $propertyId)
 * @method Integer getDataType
 * @method self withDataType(Integer $dataType)
 * @method Integer getRwFlag
 * @method self withRwFlag(Integer $rwFlag)
 * @method string getName
 * @method self withName(string $name)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getDataSpecs
 * @method self withDataSpecs(string $dataSpecs)
 * @method string getDataSpecsList
 * @method self withDataSpecsList(string $dataSpecsList)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getDefinition
 * @method self withDefinition(string $definition)
 */
class UpdatePropertyPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getProductName
 * @method self withProductName(string $productName)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class UpdateProductPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method int getEventId
 * @method self withEventId(int $eventId)
 * @method Integer getEventType
 * @method self withEventType(Integer $eventType)
 * @method string getEventName
 * @method self withEventName(string $eventName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getOutputData
 * @method self withOutputData(string $outputData)
 */
class UpdateEventPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getPropInfo
 * @method self withPropInfo(string $propInfo)
 */
class SetDevicePropPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getScriptContent
 * @method self withScriptContent(string $scriptContent)
 * @method Integer getType
 * @method self withType(Integer $type)
 * @method string getScriptType
 * @method self withScriptType(string $scriptType)
 */
class RunScriptPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class RegisterDevicePop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getSubDeviceName
 * @method self withSubDeviceName(string $subDeviceName)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QuerySubDeviceListPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 */
class QueryProductServicePop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 */
class QueryProductPropertyPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryProductPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getAliyunCommodityCode
 * @method self withAliyunCommodityCode(string $aliyunCommodityCode)
 * @method string getName
 * @method self withName(string $name)
 */
class QueryProductListPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 */
class QueryProductEventPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryProductAbilityListPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryDeviceStatisticsPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getAsc
 * @method self withAsc(Integer $asc)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryDeviceServiceDataPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QueryDevicePropertyStatus extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getAsc
 * @method self withAsc(Integer $asc)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryDevicePropertyData extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryDevicePagePop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getEventType
 * @method self withEventType(string $eventType)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getAsc
 * @method self withAsc(Integer $asc)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryDeviceEventDataPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QueryDeviceDetailPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QueryDeviceAttrStatusPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getAttributeCode
 * @method self withAttributeCode(string $attributeCode)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getAsc
 * @method self withAsc(Integer $asc)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryDeviceAttrDataPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method int getApplyId
 * @method self withApplyId(int $applyId)
 */
class QueryBatchCreateDeviceStatusPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getApplyId
 * @method self withApplyId(string $applyId)
 */
class QueryBatchCreateDeviceDetailPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method int getApplyId
 * @method self withApplyId(int $applyId)
 */
class QueryBatchCheckDeviceNamesStatus extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getName
 * @method self withName(string $name)
 */
class QueryAllProductListPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getArgs
 * @method self withArgs(string $args)
 */
class InvokeThingServicePop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getScriptId
 * @method self withScriptId(int $scriptId)
 */
class GetScriptPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class GetScriptGenerateStatusPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class GetScriptGeneratePop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getScriptCode
 * @method self withScriptCode(string $scriptCode)
 */
class GetScriptDraftPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class GetDslPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class GetDeviceUserInfoPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class GetDeviceStatusPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getPropName
 * @method self withPropName(string $propName)
 */
class GetDevicePropPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getScriptType
 * @method self withScriptType(string $scriptType)
 */
class GenerateScriptPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class EnableThingPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class DisableThingPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getScriptCode
 * @method self withScriptCode(string $scriptCode)
 */
class DeleteScriptDraftPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class DeleteProductPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class DeleteDevicePop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getAbilityType
 * @method self withAbilityType(Integer $abilityType)
 * @method int getAbilityId
 * @method self withAbilityId(int $abilityId)
 */
class DeleteAbilityPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getFunctionType
 * @method self withFunctionType(string $functionType)
 * @method string getFunctionCode
 * @method self withFunctionCode(string $functionCode)
 * @method string getArgs
 * @method self withArgs(string $args)
 * @method string getEnvironment
 * @method self withEnvironment(string $environment)
 */
class DebugAbilityPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getScriptName
 * @method self withScriptName(string $scriptName)
 * @method string getScriptContent
 * @method self withScriptContent(string $scriptContent)
 * @method string getScriptType
 * @method self withScriptType(string $scriptType)
 */
class CreateScriptPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getScriptContent
 * @method self withScriptContent(string $scriptContent)
 * @method string getScriptType
 * @method self withScriptType(string $scriptType)
 * @method string getOssUrl
 * @method self withOssUrl(string $ossUrl)
 */
class CreateScriptDraftPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductName
 * @method self withProductName(string $productName)
 * @method Integer getNodeType
 * @method self withNodeType(Integer $nodeType)
 * @method Integer getDataFormat
 * @method self withDataFormat(Integer $dataFormat)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getAliyunCommodityCode
 * @method self withAliyunCommodityCode(string $aliyunCommodityCode)
 * @method bool getId2
 * @method self withId2(bool $id2)
 * @method Integer getPayType
 * @method self withPayType(Integer $payType)
 * @method int getCategoryId
 * @method self withCategoryId(int $categoryId)
 */
class CreateProductPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getCallType
 * @method self withCallType(Integer $callType)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getInputParams
 * @method self withInputParams(string $inputParams)
 * @method string getOutputParams
 * @method self withOutputParams(string $outputParams)
 */
class CreateCustomServicePop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getDataType
 * @method self withDataType(Integer $dataType)
 * @method Integer getRwFlag
 * @method self withRwFlag(Integer $rwFlag)
 * @method string getName
 * @method self withName(string $name)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getDataSpecs
 * @method self withDataSpecs(string $dataSpecs)
 * @method string getDataSpecsList
 * @method self withDataSpecsList(string $dataSpecsList)
 */
class CreateCustomPropertyPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getEventType
 * @method self withEventType(Integer $eventType)
 * @method string getEventName
 * @method self withEventName(string $eventName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getOutputData
 * @method self withOutputData(string $outputData)
 */
class CreateCustomEventPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getAlinkJson
 * @method self withAlinkJson(string $alinkJson)
 * @method Integer getType
 * @method self withType(Integer $type)
 */
class CheckAlinkProtocolPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method int getApplyId
 * @method self withApplyId(int $applyId)
 */
class BatchRegisterDeviceWithApplyId extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getCount
 * @method self withCount(Integer $count)
 */
class BatchRegisterDevice extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method array getProductKey
 * @method self withProductKey(array $productKey)
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 */
class BatchDeleteDevicePop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getApplyId
 * @method self withApplyId(string $applyId)
 */
class BatchCreateDeviceWithApplyIdPop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 */
class BatchCheckDeviceNames extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getCount
 * @method self withCount(Integer $count)
 */
class ApplyBatchCreateDevicePop extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryAllProductList extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getItems
 * @method self withItems(string $items)
 */
class OpenSetDeviceProperty extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class OpenRegisterDevice extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class OpenQueryProductList extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class OpenQueryProduct extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class OpenQueryDeviceStatistics extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getAsc
 * @method self withAsc(Integer $asc)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class OpenQueryDeviceServiceData extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class OpenQueryDevicePropertyStatus extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getAsc
 * @method self withAsc(Integer $asc)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class OpenQueryDevicePropertyData extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getEventType
 * @method self withEventType(string $eventType)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getAsc
 * @method self withAsc(Integer $asc)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class OpenQueryDeviceEventData extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class OpenQueryDeviceDetail extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method int getApplyId
 * @method self withApplyId(int $applyId)
 */
class OpenQueryBatchRegisterDeviceStatus extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getThingMethod
 * @method self withThingMethod(string $thingMethod)
 * @method string getArgs
 * @method self withArgs(string $args)
 */
class OpenInvokeThingService extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class OpenGetDeviceStatus extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class OpenEnableThing extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class OpenDisableThing extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class OpenDeleteDevice extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 */
class OpenBatchRegisterDeviceWithNames extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method int getapplyId
 * @method self withapplyId(int $applyId)
 */
class OpenBatchRegisterDeviceWithApplyId extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getCount
 * @method self withCount(Integer $count)
 */
class OpenBatchRegisterDevice extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getServiceId
 * @method self withServiceId(int $serviceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getInputParams
 * @method self withInputParams(string $inputParams)
 * @method string getOutputParams
 * @method self withOutputParams(string $outputParams)
 * @method Integer getCallType
 * @method self withCallType(Integer $callType)
 * @method string getExtendConfig
 * @method self withExtendConfig(string $extendConfig)
 * @method string getConfigCode
 * @method self withConfigCode(string $configCode)
 */
class UpdateService extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getScriptContent
 * @method self withScriptContent(string $scriptContent)
 * @method string getScriptType
 * @method self withScriptType(string $scriptType)
 * @method string getScriptCode
 * @method self withScriptCode(string $scriptCode)
 * @method string getOssUrl
 * @method self withOssUrl(string $ossUrl)
 */
class UpdateScriptDraft extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getScriptName
 * @method self withScriptName(string $scriptName)
 * @method string getScriptContent
 * @method self withScriptContent(string $scriptContent)
 * @method string getScriptType
 * @method self withScriptType(string $scriptType)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 * @method string getScriptCode
 * @method self withScriptCode(string $scriptCode)
 */
class UpdateScript extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method int getPropertyId
 * @method self withPropertyId(int $propertyId)
 * @method Integer getDataType
 * @method self withDataType(Integer $dataType)
 * @method Integer getRwFlag
 * @method self withRwFlag(Integer $rwFlag)
 * @method string getName
 * @method self withName(string $name)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getDataSpecs
 * @method self withDataSpecs(string $dataSpecs)
 * @method string getDataSpecsList
 * @method self withDataSpecsList(string $dataSpecsList)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getDefinition
 * @method self withDefinition(string $definition)
 * @method string getExtendConfig
 * @method self withExtendConfig(string $extendConfig)
 * @method string getConfigCode
 * @method self withConfigCode(string $configCode)
 */
class UpdateProperty extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getProductName
 * @method self withProductName(string $productName)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class UpdateProduct extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method int getEventId
 * @method self withEventId(int $eventId)
 * @method Integer getEventType
 * @method self withEventType(Integer $eventType)
 * @method string getEventName
 * @method self withEventName(string $eventName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getOutputData
 * @method self withOutputData(string $outputData)
 * @method string getExtendConfig
 * @method self withExtendConfig(string $extendConfig)
 * @method string getConfigCode
 * @method self withConfigCode(string $configCode)
 */
class UpdateEvent extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getItems
 * @method self withItems(string $items)
 */
class SetDeviceProperty extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getScriptContent
 * @method self withScriptContent(string $scriptContent)
 * @method Integer getType
 * @method self withType(Integer $type)
 * @method string getScriptType
 * @method self withScriptType(string $scriptType)
 */
class RunScript extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class RegisterDevice extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getSubDeviceName
 * @method self withSubDeviceName(string $subDeviceName)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QuerySubDeviceList extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 */
class QueryProductService extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 */
class QueryProductProperty extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getAliyunCommodityCode
 * @method self withAliyunCommodityCode(string $aliyunCommodityCode)
 */
class QueryProductList extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QueryProductEvent extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QueryProductAbilityList extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryProduct extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class QueryDeviceStatistics extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getAsc
 * @method self withAsc(Integer $asc)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryDeviceServiceData extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getAliyunCommodityCode
 * @method self withAliyunCommodityCode(string $aliyunCommodityCode)
 * @method Integer getCurrentPage
 * @method self withCurrentPage(Integer $currentPage)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class QueryDevicePage extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getEventType
 * @method self withEventType(string $eventType)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getAsc
 * @method self withAsc(Integer $asc)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryDeviceEventData extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QueryDeviceDetail extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class QueryDeviceAttrStatus extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getAttributeCode
 * @method self withAttributeCode(string $attributeCode)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method Integer getAsc
 * @method self withAsc(Integer $asc)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryDeviceAttrData extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method int getApplyId
 * @method self withApplyId(int $applyId)
 */
class QueryBatchCreateDeviceStatus extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getApplyId
 * @method self withApplyId(string $applyId)
 */
class QueryBatchCreateDeviceDetail extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getArgs
 * @method self withArgs(string $args)
 */
class InvokeThingService extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class GetScriptGenerateStatus extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class GetScriptGenerate extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getScriptCode
 * @method self withScriptCode(string $scriptCode)
 */
class GetScriptDraft extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method int getScriptId
 * @method self withScriptId(int $scriptId)
 */
class GetScript extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class GetDsl extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class GetDeviceUserInfo extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class GetDeviceStatus extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getPropName
 * @method self withPropName(string $propName)
 */
class GetDeviceProp extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getScriptType
 * @method self withScriptType(string $scriptType)
 */
class GenerateScript extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class EnableThing extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class DisableThing extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getScriptCode
 * @method self withScriptCode(string $scriptCode)
 */
class DeleteScriptDraft extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 */
class DeleteProduct extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getIotId
 * @method self withIotId(string $iotId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 */
class DeleteDevice extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getAbilityType
 * @method self withAbilityType(Integer $abilityType)
 * @method int getAbilityId
 * @method self withAbilityId(int $abilityId)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 */
class DeleteAbility extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceName
 * @method self withDeviceName(string $deviceName)
 * @method string getFunctionType
 * @method self withFunctionType(string $functionType)
 * @method string getFunctionCode
 * @method self withFunctionCode(string $functionCode)
 * @method string getArgs
 * @method self withArgs(string $args)
 * @method string getEnvironment
 * @method self withEnvironment(string $environment)
 * @method string getBizTenantId
 * @method self withBizTenantId(string $bizTenantId)
 */
class DebugAbility extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getScriptContent
 * @method self withScriptContent(string $scriptContent)
 * @method string getScriptType
 * @method self withScriptType(string $scriptType)
 * @method string getOssUrl
 * @method self withOssUrl(string $ossUrl)
 */
class CreateScriptDraft extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getScriptName
 * @method self withScriptName(string $scriptName)
 * @method string getScriptContent
 * @method self withScriptContent(string $scriptContent)
 * @method string getScriptType
 * @method self withScriptType(string $scriptType)
 */
class CreateScript extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductName
 * @method self withProductName(string $productName)
 * @method Integer getNodeType
 * @method self withNodeType(Integer $nodeType)
 * @method Integer getDataFormat
 * @method self withDataFormat(Integer $dataFormat)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getAliyunCommodityCode
 * @method self withAliyunCommodityCode(string $aliyunCommodityCode)
 * @method bool getId2
 * @method self withId2(bool $id2)
 * @method int getCategoryId
 * @method self withCategoryId(int $categoryId)
 * @method string getProtocolType
 * @method self withProtocolType(string $protocolType)
 * @method string getNetType
 * @method self withNetType(string $netType)
 */
class CreateProduct extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getCallType
 * @method self withCallType(Integer $callType)
 * @method string getServiceName
 * @method self withServiceName(string $serviceName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getInputParams
 * @method self withInputParams(string $inputParams)
 * @method string getOutputParams
 * @method self withOutputParams(string $outputParams)
 * @method string getExtendConfig
 * @method self withExtendConfig(string $extendConfig)
 */
class CreateCustomService extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getDataType
 * @method self withDataType(Integer $dataType)
 * @method Integer getRwFlag
 * @method self withRwFlag(Integer $rwFlag)
 * @method string getName
 * @method self withName(string $name)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getDataSpecs
 * @method self withDataSpecs(string $dataSpecs)
 * @method string getDataSpecsList
 * @method self withDataSpecsList(string $dataSpecsList)
 * @method string getExtendConfig
 * @method self withExtendConfig(string $extendConfig)
 */
class CreateCustomProperty extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getEventType
 * @method self withEventType(Integer $eventType)
 * @method string getEventName
 * @method self withEventName(string $eventName)
 * @method string getIdentifier
 * @method self withIdentifier(string $identifier)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getOutputData
 * @method self withOutputData(string $outputData)
 * @method string getExtendConfig
 * @method self withExtendConfig(string $extendConfig)
 */
class CreateCustomEvent extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getAlinkJson
 * @method self withAlinkJson(string $alinkJson)
 * @method Integer getType
 * @method self withType(Integer $type)
 */
class CheckAlinkProtocol extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method array getProductKey
 * @method self withProductKey(array $productKey)
 * @method array getDeviceName
 * @method self withDeviceName(array $deviceName)
 */
class BatchDeleteDevice extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getApplyId
 * @method self withApplyId(string $applyId)
 */
class BatchCreateDeviceWithApplyId extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method string getDeviceNames
 * @method self withDeviceNames(string $deviceNames)
 */
class ApplyBatchCreateDeviceWithName extends Roa
{
    use R;
}

/**
 * @method string getIotInstanceId
 * @method self withIotInstanceId(string $iotInstanceId)
 * @method string getProductKey
 * @method self withProductKey(string $productKey)
 * @method Integer getCount
 * @method self withCount(Integer $count)
 */
class ApplyBatchCreateDevice extends Roa
{
    use R;
}
