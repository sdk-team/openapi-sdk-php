<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method InnerAuthorizeImagesToBids innerAuthorizeImagesToBids($options = [])
 * @method InnerCopyImageAtSameRegion innerCopyImageAtSameRegion($options = [])
 * @method InnerDescribeEniBdf innerDescribeEniBdf($options = [])
 * @method UntagResourcesSystemTags untagResourcesSystemTags($options = [])
 * @method TagResourcesSystemTags tagResourcesSystemTags($options = [])
 * @method ListTagResources listTagResources($options = [])
 * @method InnerQueryInstanceCreatedByProduct innerQueryInstanceCreatedByProduct($options = [])
 * @method InnerSendMessage innerSendMessage($options = [])
 * @method InnerReleaseDedicatedHost innerReleaseDedicatedHost($options = [])
 * @method RemoveSystemTags removeSystemTags($options = [])
 * @method InnerDescribeTags innerDescribeTags($options = [])
 * @method DescribeResourcesBySystemTag describeResourcesBySystemTag($options = [])
 * @method AddSystemTag addSystemTag($options = [])
 * @method QueryEcsElasticUpgradeInfo queryEcsElasticUpgradeInfo($options = [])
 * @method InnerQueryRetainVcpu innerQueryRetainVcpu($options = [])
 * @method InnerCheckEniEipOperate innerCheckEniEipOperate($options = [])
 * @method InnerCheckEniBindEip innerCheckEniBindEip($options = [])
 * @method DescribeGroupHighRiskStat describeGroupHighRiskStat($options = [])
 * @method DescribeGroupHighRiskAcl describeGroupHighRiskAcl($options = [])
 * @method InnerQueryLazyLoadProgress innerQueryLazyLoadProgress($options = [])
 * @method GdprPhysicalDeleteResource gdprPhysicalDeleteResource($options = [])
 * @method GdprLogicalDeleteResource gdprLogicalDeleteResource($options = [])
 * @method GdprCheckResource gdprCheckResource($options = [])
 * @method InnerInstallCloudAssistant innerInstallCloudAssistant($options = [])
 * @method DescribeEvents describeEvents($options = [])
 * @method DescribeEventDetail describeEventDetail($options = [])
 * @method DescribeRenewalPrice describeRenewalPrice($options = [])
 * @method DescribePrice describePrice($options = [])
 * @method InnerEcsQueryByHpcClusterId innerEcsQueryByHpcClusterId($options = [])
 * @method InnerDescribeNcExpression innerDescribeNcExpression($options = [])
 * @method InnerDeleteNcExpression innerDeleteNcExpression($options = [])
 * @method InnerCreateNcExpression innerCreateNcExpression($options = [])
 * @method InnerDescribeEni innerDescribeEni($options = [])
 * @method InnerRefundVcpuQuery innerRefundVcpuQuery($options = [])
 * @method InnerRefundVcpuCallBack innerRefundVcpuCallBack($options = [])
 * @method ModifySystemEventAttribute modifySystemEventAttribute($options = [])
 * @method CreateSystemEvent createSystemEvent($options = [])
 * @method CancelSystemEvent cancelSystemEvent($options = [])
 * @method DescribeResourceModificationCapacity describeResourceModificationCapacity($options = [])
 * @method InnerQueryEcsCountByCondition innerQueryEcsCountByCondition($options = [])
 * @method InnerModifyEntityConstraints innerModifyEntityConstraints($options = [])
 * @method DescribeResourceCreationCapacity describeResourceCreationCapacity($options = [])
 * @method ResourceOwnershipTransfer resourceOwnershipTransfer($options = [])
 * @method InnerQueryExplanation innerQueryExplanation($options = [])
 * @method InnerQueryConstraints innerQueryConstraints($options = [])
 * @method DescribeResourcesModification describeResourcesModification($options = [])
 * @method DescribeBandwidthLimitation describeBandwidthLimitation($options = [])
 * @method DescribeAvailableResource describeAvailableResource($options = [])
 * @method InnerDetailInstanceFamilyDefine innerDetailInstanceFamilyDefine($options = [])
 * @method InnerRegionSupportInstancetypes innerRegionSupportInstancetypes($options = [])
 * @method CheckIsDefaultVpcUser checkIsDefaultVpcUser($options = [])
 * @method InnerEcsDescribeVPortInfo innerEcsDescribeVPortInfo($options = [])
 * @method QueryEcsInstanceOrderInfo queryEcsInstanceOrderInfo($options = [])
 * @method InnerQueryCopyImageSupportRegions innerQueryCopyImageSupportRegions($options = [])
 * @method SignAgreement signAgreement($options = [])
 * @method CancelAgreement cancelAgreement($options = [])
 * @method InnerEcsDescribeIpsInGroup innerEcsDescribeIpsInGroup($options = [])
 * @method InnerDescribeInstanceTypes innerDescribeInstanceTypes($options = [])
 * @method InnerModifySnapshotBusinessStatus innerModifySnapshotBusinessStatus($options = [])
 * @method InnerDescribeSnapshotBusinessStatus innerDescribeSnapshotBusinessStatus($options = [])
 * @method InnerEcsResourceGroupQueryByResources innerEcsResourceGroupQueryByResources($options = [])
 * @method ListImageBinding listImageBinding($options = [])
 * @method InnerEcsRegionQueryByBid innerEcsRegionQueryByBid($options = [])
 * @method QueryResourceModify queryResourceModify($options = [])
 * @method ReInitDisks reInitDisks($options = [])
 * @method InnerEcsIsClassicLinkVpcUser innerEcsIsClassicLinkVpcUser($options = [])
 * @method InnerEcsTransitionQuery innerEcsTransitionQuery($options = [])
 * @method InnerEcsTransitionModify innerEcsTransitionModify($options = [])
 * @method InnerEcsExpireRegionQuery innerEcsExpireRegionQuery($options = [])
 * @method GetCommodityProxy getCommodityProxy($options = [])
 * @method InnerEcsQueryIpThreshold innerEcsQueryIpThreshold($options = [])
 * @method InnerAntInstanceConvertToPrepaid innerAntInstanceConvertToPrepaid($options = [])
 * @method InnerRemedyRenewInstance innerRemedyRenewInstance($options = [])
 * @method CopyImageAtTarget copyImageAtTarget($options = [])
 * @method InnerConstraintDataPush innerConstraintDataPush($options = [])
 * @method InnerReleasePublicIpAddress innerReleasePublicIpAddress($options = [])
 * @method InnerMarketplaceImageExpire innerMarketplaceImageExpire($options = [])
 * @method InnerModifyInstanceChargeType innerModifyInstanceChargeType($options = [])
 * @method CheckImageSupportCloudinit checkImageSupportCloudinit($options = [])
 * @method CheckImageSupportCloudinitGatedLaunch checkImageSupportCloudinitGatedLaunch($options = [])
 * @method InnerOpenSnapshotService innerOpenSnapshotService($options = [])
 * @method InnerCheckOpenSnapshotService innerCheckOpenSnapshotService($options = [])
 * @method UploadSystemImageAtOrigin uploadSystemImageAtOrigin($options = [])
 * @method QueryResourceTransit queryResourceTransit($options = [])
 * @method QueryImageCopyProgress queryImageCopyProgress($options = [])
 * @method DescribeCopyProgressAtOrigin describeCopyProgressAtOrigin($options = [])
 * @method CopySystemImageAtTarget copySystemImageAtTarget($options = [])
 * @method CopySystemImage copySystemImage($options = [])
 * @method InnerQueryImageBindByInstance innerQueryImageBindByInstance($options = [])
 * @method InnerRenewInstance innerRenewInstance($options = [])
 * @method ReopenInstanceGatedLaunch reopenInstanceGatedLaunch($options = [])
 * @method QueryUserInfoGatedLaunch queryUserInfoGatedLaunch($options = [])
 * @method QueryUsableSnapshotsGatedLaunch queryUsableSnapshotsGatedLaunch($options = [])
 * @method QueryNeedKeepUsingGatedLaunch queryNeedKeepUsingGatedLaunch($options = [])
 * @method QueryMarketImagesGatedLaunch queryMarketImagesGatedLaunch($options = [])
 * @method QueryMarketImageCategoryGatedLaunch queryMarketImageCategoryGatedLaunch($options = [])
 * @method QueryInstanceInfoGatedLaunch queryInstanceInfoGatedLaunch($options = [])
 * @method QueryImageIdByRegionGatedLaunch queryImageIdByRegionGatedLaunch($options = [])
 * @method QueryImageByImageIdGatedLaunch queryImageByImageIdGatedLaunch($options = [])
 * @method QueryAvailableRegionGatedLaunch queryAvailableRegionGatedLaunch($options = [])
 * @method NotifyRefundGatedLaunch notifyRefundGatedLaunch($options = [])
 * @method ListEcsInstanceOrderInfoGatedLaunch listEcsInstanceOrderInfoGatedLaunch($options = [])
 * @method ListBandwidthHistoryGatedLaunch listBandwidthHistoryGatedLaunch($options = [])
 * @method ListAllIzMapGatedLaunch listAllIzMapGatedLaunch($options = [])
 * @method KeepUsingGatedLaunch keepUsingGatedLaunch($options = [])
 * @method InnerVncQueryPasswdGatedLaunch innerVncQueryPasswdGatedLaunch($options = [])
 * @method InnerStockListUsedVmsGatedLaunch innerStockListUsedVmsGatedLaunch($options = [])
 * @method InnerSnapshotSecurityUnmountGatedLaunch innerSnapshotSecurityUnmountGatedLaunch($options = [])
 * @method InnerSnapshotSecurityMountGatedLaunch innerSnapshotSecurityMountGatedLaunch($options = [])
 * @method InnerSnapshotQueryUserSnapshotsGatedLaunch innerSnapshotQueryUserSnapshotsGatedLaunch($options = [])
 * @method InnerSnapshotIsUserAutoSnapshotPauseGatedLaunch innerSnapshotIsUserAutoSnapshotPauseGatedLaunch($options = [])
 * @method InnerSnapshotDescribeMountedSnapshotsGatedLaunch innerSnapshotDescribeMountedSnapshotsGatedLaunch($options = [])
 * @method InnerProduceGatedLaunch innerProduceGatedLaunch($options = [])
 * @method InnerNetworkModifyValidationGatedLaunch innerNetworkModifyValidationGatedLaunch($options = [])
 * @method InnerMonitorDataDescribeInstanceGatedLaunch innerMonitorDataDescribeInstanceGatedLaunch($options = [])
 * @method InnerMonitorDataDescribeDiskGatedLaunch innerMonitorDataDescribeDiskGatedLaunch($options = [])
 * @method InnerMonitorGatedLaunch innerMonitorGatedLaunch($options = [])
 * @method InnerMaliceEcsUnlockGatedLaunch innerMaliceEcsUnlockGatedLaunch($options = [])
 * @method InnerMaliceEcsLockGatedLaunch innerMaliceEcsLockGatedLaunch($options = [])
 * @method InnerIzQueryForVmSaleGatedLaunch innerIzQueryForVmSaleGatedLaunch($options = [])
 * @method InnerIpLoadGatedLaunch innerIpLoadGatedLaunch($options = [])
 * @method InnerInstanceSetEndTimeGatedLaunch innerInstanceSetEndTimeGatedLaunch($options = [])
 * @method InnerInstanceQueryEcsByImgPcGatedLaunch innerInstanceQueryEcsByImgPcGatedLaunch($options = [])
 * @method InnerInstanceQueryByParamBackyardGatedLaunch innerInstanceQueryByParamBackyardGatedLaunch($options = [])
 * @method InnerInstanceQueryByParamGatedLaunch innerInstanceQueryByParamGatedLaunch($options = [])
 * @method InnerInstanceGetInstanceTypeModelByTypeGatedLaunch innerInstanceGetInstanceTypeModelByTypeGatedLaunch($options = [])
 * @method InnerInstanceEnableSLBFlowGatedLaunch innerInstanceEnableSLBFlowGatedLaunch($options = [])
 * @method InnerInstanceDisableSLBFlowGatedLaunch innerInstanceDisableSLBFlowGatedLaunch($options = [])
 * @method InnerInstanceDetailGatedLaunch innerInstanceDetailGatedLaunch($options = [])
 * @method InnerImageQueryUserImagesGatedLaunch innerImageQueryUserImagesGatedLaunch($options = [])
 * @method InnerImageQueryProductQuotaGatedLaunch innerImageQueryProductQuotaGatedLaunch($options = [])
 * @method InnerImageQueryNeedKeepUsingGatedLaunch innerImageQueryNeedKeepUsingGatedLaunch($options = [])
 * @method InnerImageQueryImgsByParamGatedLaunch innerImageQueryImgsByParamGatedLaunch($options = [])
 * @method InnerImageQueryAvailableImgsGatedLaunch innerImageQueryAvailableImgsGatedLaunch($options = [])
 * @method InnerImageModifyProductCapacityGatedLaunch innerImageModifyProductCapacityGatedLaunch($options = [])
 * @method InnerImageModifyGatedLaunch innerImageModifyGatedLaunch($options = [])
 * @method InnerImageKeepUsingGatedLaunch innerImageKeepUsingGatedLaunch($options = [])
 * @method InnerImageDetailGatedLaunch innerImageDetailGatedLaunch($options = [])
 * @method InnerImageConvert2ProductGatedLaunch innerImageConvert2ProductGatedLaunch($options = [])
 * @method InnerGroupRevokeGatedLaunch innerGroupRevokeGatedLaunch($options = [])
 * @method InnerGroupRemoveGatedLaunch innerGroupRemoveGatedLaunch($options = [])
 * @method InnerGroupQueryVmGatedLaunch innerGroupQueryVmGatedLaunch($options = [])
 * @method InnerGroupQueryGatedLaunch innerGroupQueryGatedLaunch($options = [])
 * @method InnerGroupLeaveGatedLaunch innerGroupLeaveGatedLaunch($options = [])
 * @method InnerGroupJoinGatedLaunch innerGroupJoinGatedLaunch($options = [])
 * @method InnerGroupFindDefaultSystemGroupGatedLaunch innerGroupFindDefaultSystemGroupGatedLaunch($options = [])
 * @method InnerGroupDetailGatedLaunch innerGroupDetailGatedLaunch($options = [])
 * @method InnerGroupCreateGatedLaunch innerGroupCreateGatedLaunch($options = [])
 * @method InnerGroupAuthorizeGatedLaunch innerGroupAuthorizeGatedLaunch($options = [])
 * @method InnerGetZoneVendibleDataAndStatusByIdGatedLaunch innerGetZoneVendibleDataAndStatusByIdGatedLaunch($options = [])
 * @method InnerEcsSnapshotQueryAllSnapshotsByEcsIdGatedLaunch innerEcsSnapshotQueryAllSnapshotsByEcsIdGatedLaunch($options = [])
 * @method InnerEcsRiskControlQueryGatedLaunch innerEcsRiskControlQueryGatedLaunch($options = [])
 * @method InnerEcsRiskControlPunishRemoveGatedLaunch innerEcsRiskControlPunishRemoveGatedLaunch($options = [])
 * @method InnerEcsRiskControlPunishGatedLaunch innerEcsRiskControlPunishGatedLaunch($options = [])
 * @method InnerEcsReleaseByDriverGatedLaunch innerEcsReleaseByDriverGatedLaunch($options = [])
 * @method InnerEcsRegionQueryAllGatedLaunch innerEcsRegionQueryAllGatedLaunch($options = [])
 * @method InnerEcsRegionQueryActiveGatedLaunch innerEcsRegionQueryActiveGatedLaunch($options = [])
 * @method InnerEcsQuerySecurityGatedLaunch innerEcsQuerySecurityGatedLaunch($options = [])
 * @method InnerEcsQueryNcInfoByInstanceIdGatedLaunch innerEcsQueryNcInfoByInstanceIdGatedLaunch($options = [])
 * @method InnerEcsQueryBySerialNumberGatedLaunch innerEcsQueryBySerialNumberGatedLaunch($options = [])
 * @method InnerEcsQueryByParamGatedLaunch innerEcsQueryByParamGatedLaunch($options = [])
 * @method InnerEcsQueryByIpGatedLaunch innerEcsQueryByIpGatedLaunch($options = [])
 * @method InnerEcsQueryByIntranetIpGatedLaunch innerEcsQueryByIntranetIpGatedLaunch($options = [])
 * @method InnerEcsQueryByInternetIpGatedLaunch innerEcsQueryByInternetIpGatedLaunch($options = [])
 * @method InnerEcsQueryByInstanceIdGatedLaunch innerEcsQueryByInstanceIdGatedLaunch($options = [])
 * @method InnerEcsIsChannelMerchantGatedLaunch innerEcsIsChannelMerchantGatedLaunch($options = [])
 * @method InnerGetInstanceTypeModelByTypeGatedLaunch innerGetInstanceTypeModelByTypeGatedLaunch($options = [])
 * @method InnerEcsInstanceQueryRegionsGatedLaunch innerEcsInstanceQueryRegionsGatedLaunch($options = [])
 * @method InnerEcsInstanceQueryRegionNoFilterGatedLaunch innerEcsInstanceQueryRegionNoFilterGatedLaunch($options = [])
 * @method InnerEcsInstanceQueryByParamGatedLaunch innerEcsInstanceQueryByParamGatedLaunch($options = [])
 * @method InnerEcsInstanceDetailForConsoleGatedLaunch innerEcsInstanceDetailForConsoleGatedLaunch($options = [])
 * @method InnerEcsInstanceDetailGatedLaunch innerEcsInstanceDetailGatedLaunch($options = [])
 * @method InnerEcsGetBflagByBidAndUidGatedLaunch innerEcsGetBflagByBidAndUidGatedLaunch($options = [])
 * @method InnerEcsFindByIdGatedLaunch innerEcsFindByIdGatedLaunch($options = [])
 * @method InnerEcsCountInRegionGatedLaunch innerEcsCountInRegionGatedLaunch($options = [])
 * @method InnerDiskResizeByParamGatedLaunch innerDiskResizeByParamGatedLaunch($options = [])
 * @method InnerDiskResetGatedLaunch innerDiskResetGatedLaunch($options = [])
 * @method InnerDiskQueryUserDiskSummaryGatedLaunch innerDiskQueryUserDiskSummaryGatedLaunch($options = [])
 * @method InnerDiskQueryByParamForConsoleGatedLaunch innerDiskQueryByParamForConsoleGatedLaunch($options = [])
 * @method InnerDiskQueryByParamGatedLaunch innerDiskQueryByParamGatedLaunch($options = [])
 * @method InnerDiskFindDiskByDiskIdGatedLaunch innerDiskFindDiskByDiskIdGatedLaunch($options = [])
 * @method InnerCheckProduceGatedLaunch innerCheckProduceGatedLaunch($options = [])
 * @method GetCommodityGatedLaunch getCommodityGatedLaunch($options = [])
 * @method GetActiveRegionsGatedLaunch getActiveRegionsGatedLaunch($options = [])
 * @method FiveDaysRefundGatedLaunch fiveDaysRefundGatedLaunch($options = [])
 * @method DescribeEipPriceGatedLaunch describeEipPriceGatedLaunch($options = [])
 * @method CheckOrderNotPaidGatedLaunch checkOrderNotPaidGatedLaunch($options = [])
 * @method InnerProduce innerProduce($options = [])
 * @method InnerCheckProduce innerCheckProduce($options = [])
 * @method QueryInstanceInfo queryInstanceInfo($options = [])
 * @method InnerNetworkModifyValidation innerNetworkModifyValidation($options = [])
 * @method InnerInstanceSetEndTime innerInstanceSetEndTime($options = [])
 * @method InnerDiskResizeByParam innerDiskResizeByParam($options = [])
 * @method InnerInstanceGetInstanceTypeModelByType innerInstanceGetInstanceTypeModelByType($options = [])
 * @method InnerImageQueryProductQuota innerImageQueryProductQuota($options = [])
 * @method InnerImageQueryImgsByParam innerImageQueryImgsByParam($options = [])
 * @method InnerImageModifyProductCapacity innerImageModifyProductCapacity($options = [])
 * @method InnerVncQueryPasswd innerVncQueryPasswd($options = [])
 * @method InnerSnapshotIsUserAutoSnapshotPause innerSnapshotIsUserAutoSnapshotPause($options = [])
 * @method InnerImageQueryNeedKeepUsing innerImageQueryNeedKeepUsing($options = [])
 * @method InnerImageKeepUsing innerImageKeepUsing($options = [])
 * @method InnerEcsReleaseByDriver innerEcsReleaseByDriver($options = [])
 * @method InnerEcsInstanceDetailForConsole innerEcsInstanceDetailForConsole($options = [])
 * @method InnerDiskReset innerDiskReset($options = [])
 * @method InnerDiskQueryUserDiskSummary innerDiskQueryUserDiskSummary($options = [])
 * @method InnerDiskQueryByParamForConsole innerDiskQueryByParamForConsole($options = [])
 * @method InnerDiskFindDiskByDiskId innerDiskFindDiskByDiskId($options = [])
 * @method FiveDaysRefund fiveDaysRefund($options = [])
 * @method InnerGetZoneVendibleDataAndStatusById innerGetZoneVendibleDataAndStatusById($options = [])
 * @method InnerStockListUsedVms innerStockListUsedVms($options = [])
 * @method InnerIzQueryForVmSale innerIzQueryForVmSale($options = [])
 * @method InnerIpLoad innerIpLoad($options = [])
 * @method InnerInstanceQueryEcsByImgPc innerInstanceQueryEcsByImgPc($options = [])
 * @method InnerInstanceQueryByParamBackyard innerInstanceQueryByParamBackyard($options = [])
 * @method InnerImageQueryAvailableImgs innerImageQueryAvailableImgs($options = [])
 * @method InnerImageModify innerImageModify($options = [])
 * @method InnerImageConvert2Product innerImageConvert2Product($options = [])
 * @method InnerGroupFindDefaultSystemGroup innerGroupFindDefaultSystemGroup($options = [])
 * @method InnerEcsSnapshotQueryAllSnapshotsByEcsId innerEcsSnapshotQueryAllSnapshotsByEcsId($options = [])
 * @method InnerEcsQuerySecurity innerEcsQuerySecurity($options = [])
 * @method InnerGetInstanceTypeModelByType innerGetInstanceTypeModelByType($options = [])
 * @method InnerEcsInstanceQueryRegions innerEcsInstanceQueryRegions($options = [])
 * @method InnerEcsInstanceQueryRegionNoFilter innerEcsInstanceQueryRegionNoFilter($options = [])
 * @method InnerEcsGetBflagByBidAndUid innerEcsGetBflagByBidAndUid($options = [])
 * @method InnerSnapshotSecurityUnmount innerSnapshotSecurityUnmount($options = [])
 * @method InnerSnapshotSecurityMount innerSnapshotSecurityMount($options = [])
 * @method InnerSnapshotQueryUserSnapshots innerSnapshotQueryUserSnapshots($options = [])
 * @method InnerSnapshotDescribeMountedSnapshots innerSnapshotDescribeMountedSnapshots($options = [])
 * @method InnerMonitorDataDescribeInstance innerMonitorDataDescribeInstance($options = [])
 * @method InnerMonitorDataDescribeDisk innerMonitorDataDescribeDisk($options = [])
 * @method InnerMonitor innerMonitor($options = [])
 * @method InnerMaliceEcsUnlock innerMaliceEcsUnlock($options = [])
 * @method InnerMaliceEcsLock innerMaliceEcsLock($options = [])
 * @method InnerInstanceQueryByParam innerInstanceQueryByParam($options = [])
 * @method InnerInstanceEnableSLBFlow innerInstanceEnableSLBFlow($options = [])
 * @method InnerInstanceDisableSLBFlow innerInstanceDisableSLBFlow($options = [])
 * @method InnerInstanceDetail innerInstanceDetail($options = [])
 * @method InnerImageQueryUserImages innerImageQueryUserImages($options = [])
 * @method InnerImageDetail innerImageDetail($options = [])
 * @method InnerGroupRevoke innerGroupRevoke($options = [])
 * @method InnerGroupRemove innerGroupRemove($options = [])
 * @method InnerGroupQueryVm innerGroupQueryVm($options = [])
 * @method InnerGroupQuery innerGroupQuery($options = [])
 * @method InnerGroupLeave innerGroupLeave($options = [])
 * @method InnerGroupJoin innerGroupJoin($options = [])
 * @method InnerGroupDetail innerGroupDetail($options = [])
 * @method InnerGroupCreate innerGroupCreate($options = [])
 * @method InnerGroupAuthorize innerGroupAuthorize($options = [])
 * @method InnerEcsRiskControlQuery innerEcsRiskControlQuery($options = [])
 * @method InnerEcsRiskControlPunishRemove innerEcsRiskControlPunishRemove($options = [])
 * @method InnerEcsRiskControlPunish innerEcsRiskControlPunish($options = [])
 * @method InnerEcsRegionQueryAll innerEcsRegionQueryAll($options = [])
 * @method InnerEcsRegionQueryActive innerEcsRegionQueryActive($options = [])
 * @method InnerEcsQueryNcInfoByInstanceId innerEcsQueryNcInfoByInstanceId($options = [])
 * @method InnerEcsQueryBySerialNumber innerEcsQueryBySerialNumber($options = [])
 * @method InnerEcsQueryByParam innerEcsQueryByParam($options = [])
 * @method InnerEcsQueryByIp innerEcsQueryByIp($options = [])
 * @method InnerEcsQueryByIntranetIp innerEcsQueryByIntranetIp($options = [])
 * @method InnerEcsQueryByInternetIp innerEcsQueryByInternetIp($options = [])
 * @method InnerEcsQueryByInstanceId innerEcsQueryByInstanceId($options = [])
 * @method InnerEcsIsChannelMerchant innerEcsIsChannelMerchant($options = [])
 * @method InnerEcsInstanceQueryByParam innerEcsInstanceQueryByParam($options = [])
 * @method InnerEcsInstanceDetail innerEcsInstanceDetail($options = [])
 * @method InnerEcsFindById innerEcsFindById($options = [])
 * @method InnerEcsCountInRegion innerEcsCountInRegion($options = [])
 * @method InnerDiskQueryByParam innerDiskQueryByParam($options = [])
 * @method ReopenInstance reopenInstance($options = [])
 * @method QueryUserInfo queryUserInfo($options = [])
 * @method QueryUsableSnapshots queryUsableSnapshots($options = [])
 * @method QueryNeedKeepUsing queryNeedKeepUsing($options = [])
 * @method QueryMarketImages queryMarketImages($options = [])
 * @method QueryMarketImageCategory queryMarketImageCategory($options = [])
 * @method QueryImageIdByRegion queryImageIdByRegion($options = [])
 * @method QueryImageByImageId queryImageByImageId($options = [])
 * @method QueryAvailableRegion queryAvailableRegion($options = [])
 * @method NotifyRefund notifyRefund($options = [])
 * @method ListEcsInstanceOrderInfo listEcsInstanceOrderInfo($options = [])
 * @method ListBandwidthHistory listBandwidthHistory($options = [])
 * @method ListAllIzMap listAllIzMap($options = [])
 * @method KeepUsing keepUsing($options = [])
 * @method GetCommodity getCommodity($options = [])
 * @method GetActiveRegions getActiveRegions($options = [])
 * @method DescribeEipPrice describeEipPrice($options = [])
 * @method CheckOrderNotPaid checkOrderNotPaid($options = [])
 */
class V20160314
{
    use ApiResolverTrait;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getImageId
 * @method self withImageId(array $imageId)
 * @method array getBid
 * @method self withBid(array $bid)
 * @method string getMode
 * @method self withMode(string $mode)
 * @method bool getDryRun
 * @method self withDryRun(bool $dryRun)
 */
class InnerAuthorizeImagesToBids extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getToImageName
 * @method self withToImageName(string $toImageName)
 * @method string getToImageDesc
 * @method self withToImageDesc(string $toImageDesc)
 */
class InnerCopyImageAtSameRegion extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method array getNetworkInterfaceId
 * @method self withNetworkInterfaceId(array $networkInterfaceId)
 */
class InnerDescribeEniBdf extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getResourceId
 * @method self withResourceId(array $resourceId)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method array getTagKey
 * @method self withTagKey(array $tagKey)
 * @method bool getAll
 * @method self withAll(bool $all)
 * @method int getTagOwnerUid
 * @method self withTagOwnerUid(int $tagOwnerUid)
 * @method string getTagOwnerBid
 * @method self withTagOwnerBid(string $tagOwnerBid)
 */
class UntagResourcesSystemTags extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method array getResourceId
 * @method self withResourceId(array $resourceId)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method int getTagOwnerUid
 * @method self withTagOwnerUid(int $tagOwnerUid)
 * @method string getTagOwnerBid
 * @method self withTagOwnerBid(string $tagOwnerBid)
 * @method string getScope
 * @method self withScope(string $scope)
 */
class TagResourcesSystemTags extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getResourceId
 * @method self withResourceId(array $resourceId)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method string getNextToken
 * @method self withNextToken(string $nextToken)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method int getTagOwnerUid
 * @method self withTagOwnerUid(int $tagOwnerUid)
 * @method string getTagOwnerBid
 * @method self withTagOwnerBid(string $tagOwnerBid)
 * @method string getScope
 * @method self withScope(string $scope)
 */
class ListTagResources extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method array getAliUids
 * @method self withAliUids(array $aliUids)
 * @method array getInstanceTypes
 * @method self withInstanceTypes(array $instanceTypes)
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method array getPrivateIpAddresses
 * @method self withPrivateIpAddresses(array $privateIpAddresses)
 * @method array getPublicIpAddresses
 * @method self withPublicIpAddresses(array $publicIpAddresses)
 */
class InnerQueryInstanceCreatedByProduct extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method int getShardingKey
 * @method self withShardingKey(int $shardingKey)
 * @method string getMessage
 * @method self withMessage(string $message)
 */
class InnerSendMessage extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDedicatedHostId
 * @method self withDedicatedHostId(string $dedicatedHostId)
 */
class InnerReleaseDedicatedHost extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method array getResourceId
 * @method self withResourceId(array $resourceId)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method int getOwnerUid
 * @method self withOwnerUid(int $ownerUid)
 * @method string getOwnerBid
 * @method self withOwnerBid(string $ownerBid)
 */
class RemoveSystemTags extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method array getResourceId
 * @method self withResourceId(array $resourceId)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method int getOwnerUid
 * @method self withOwnerUid(int $ownerUid)
 * @method string getOwnerBid
 * @method self withOwnerBid(string $ownerBid)
 * @method int getCreateBy
 * @method self withCreateBy(int $createBy)
 * @method string getCategory
 * @method self withCategory(string $category)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class InnerDescribeTags extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method int getOwnerUid
 * @method self withOwnerUid(int $ownerUid)
 * @method string getOwnerBid
 * @method self withOwnerBid(string $ownerBid)
 * @method string getRelatedKey
 * @method self withRelatedKey(string $relatedKey)
 * @method string getTagValue
 * @method self withTagValue(string $tagValue)
 */
class DescribeResourcesBySystemTag extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method array getResourceId
 * @method self withResourceId(array $resourceId)
 * @method int getOwnerUid
 * @method self withOwnerUid(int $ownerUid)
 * @method string getOwnerBid
 * @method self withOwnerBid(string $ownerBid)
 * @method string getScope
 * @method self withScope(string $scope)
 * @method string getRelatedKey
 * @method self withRelatedKey(string $relatedKey)
 * @method string getTagValue
 * @method self withTagValue(string $tagValue)
 */
class AddSystemTag extends Rpc
{
    use R;
}

/**
 * @method string getcallerBid
 * @method self withcallerBid(string $callerBid)
 * @method int getcallerUid
 * @method self withcallerUid(int $callerUid)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class QueryEcsElasticUpgradeInfo extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSpotStrategy
 * @method self withSpotStrategy(string $spotStrategy)
 */
class InnerQueryRetainVcpu extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getAliUid
 * @method self withAliUid(string $aliUid)
 * @method string getEniNo
 * @method self withEniNo(string $eniNo)
 * @method string getOperateType
 * @method self withOperateType(string $operateType)
 * @method string getEipAddressKeeped
 * @method self withEipAddressKeeped(string $eipAddressKeeped)
 * @method string getEipAddressCount
 * @method self withEipAddressCount(string $eipAddressCount)
 */
class InnerCheckEniEipOperate extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getAliUid
 * @method self withAliUid(string $aliUid)
 * @method string getEniNo
 * @method self withEniNo(string $eniNo)
 * @method string getOperateType
 * @method self withOperateType(string $operateType)
 * @method string getEipAddressKeeped
 * @method self withEipAddressKeeped(string $eipAddressKeeped)
 * @method string getEipAddressCount
 * @method self withEipAddressCount(string $eipAddressCount)
 */
class InnerCheckEniBindEip extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getBizRegionId
 * @method self withBizRegionId(string $bizRegionId)
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeGroupHighRiskStat extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getBizRegionId
 * @method self withBizRegionId(string $bizRegionId)
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method int getAlarmLevel
 * @method self withAlarmLevel(int $alarmLevel)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeGroupHighRiskAcl extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getDiskId
 * @method self withDiskId(array $diskId)
 */
class InnerQueryLazyLoadProgress extends Rpc
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
class GdprPhysicalDeleteResource extends Rpc
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
class GdprLogicalDeleteResource extends Rpc
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
 * @method int getLevel
 * @method self withLevel(int $level)
 * @method string getUrl
 * @method self withUrl(string $url)
 * @method string getPrompt
 * @method self withPrompt(string $prompt)
 */
class GdprCheckResource extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getInstanceOwnerId
 * @method self withInstanceOwnerId(int $instanceOwnerId)
 * @method array getInstanceId
 * @method self withInstanceId(array $instanceId)
 */
class InnerInstallCloudAssistant extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getAliUid
 * @method self withAliUid(string $aliUid)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method string getEventId
 * @method self withEventId(string $eventId)
 * @method string getEventType
 * @method self withEventType(string $eventType)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getPlanTime
 * @method self withPlanTime(string $planTime)
 * @method string getExpireTime
 * @method self withExpireTime(string $expireTime)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class DescribeEvents extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getAliUid
 * @method self withAliUid(string $aliUid)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method string getEventId
 * @method self withEventId(string $eventId)
 */
class DescribeEventDetail extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getPriceUnit
 * @method self withPriceUnit(string $priceUnit)
 */
class DescribeRenewalPrice extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getDedicatedHostType
 * @method self withDedicatedHostType(string $dedicatedHostType)
 * @method string getIoOptimized
 * @method self withIoOptimized(string $ioOptimized)
 * @method string getInstanceNetworkType
 * @method self withInstanceNetworkType(string $instanceNetworkType)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut(Integer $internetMaxBandwidthOut)
 * @method string getSystemDiskCategory
 * @method self withSystemDiskCategory(string $systemDiskCategory)
 * @method Integer getSystemDiskSize
 * @method self withSystemDiskSize(Integer $systemDiskSize)
 * @method Integer getDataDisk1Size
 * @method self withDataDisk1Size(Integer $dataDisk1Size)
 * @method string getDataDisk1Category
 * @method self withDataDisk1Category(string $dataDisk1Category)
 * @method Integer getDataDisk2Size
 * @method self withDataDisk2Size(Integer $dataDisk2Size)
 * @method string getDataDisk2Category
 * @method self withDataDisk2Category(string $dataDisk2Category)
 * @method Integer getDataDisk3Size
 * @method self withDataDisk3Size(Integer $dataDisk3Size)
 * @method string getDataDisk3Category
 * @method self withDataDisk3Category(string $dataDisk3Category)
 * @method Integer getDataDisk4Size
 * @method self withDataDisk4Size(Integer $dataDisk4Size)
 * @method string getDataDisk4Category
 * @method self withDataDisk4Category(string $dataDisk4Category)
 * @method Integer getPeriod
 * @method self withPeriod(Integer $period)
 * @method string getPriceUnit
 * @method self withPriceUnit(string $priceUnit)
 * @method Integer getAmount
 * @method self withAmount(Integer $amount)
 * @method string getOfferingType
 * @method self withOfferingType(string $offeringType)
 * @method Integer getInstanceAmount
 * @method self withInstanceAmount(Integer $instanceAmount)
 * @method string getScope
 * @method self withScope(string $scope)
 */
class DescribePrice extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getHpcClusterId
 * @method self withHpcClusterId(string $hpcClusterId)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 */
class InnerEcsQueryByHpcClusterId extends Rpc
{
    use R;
}

/**
 * @method string getGrayBid
 * @method self withGrayBid(string $grayBid)
 * @method int getGrayAliUid
 * @method self withGrayAliUid(int $grayAliUid)
 * @method string getExpression
 * @method self withExpression(string $expression)
 * @method array getVSwitchId
 * @method self withVSwitchId(array $vSwitchId)
 * @method array getEcsInstanceId
 * @method self withEcsInstanceId(array $ecsInstanceId)
 */
class InnerDescribeNcExpression extends Rpc
{
    use R;
}

/**
 * @method string getGrayBid
 * @method self withGrayBid(string $grayBid)
 * @method int getGrayAliUid
 * @method self withGrayAliUid(int $grayAliUid)
 * @method array getVSwitchId
 * @method self withVSwitchId(array $vSwitchId)
 * @method array getEcsInstanceId
 * @method self withEcsInstanceId(array $ecsInstanceId)
 */
class InnerDeleteNcExpression extends Rpc
{
    use R;
}

/**
 * @method string getGrayBid
 * @method self withGrayBid(string $grayBid)
 * @method int getGrayAliUid
 * @method self withGrayAliUid(int $grayAliUid)
 * @method string getExpression
 * @method self withExpression(string $expression)
 * @method array getVSwitchId
 * @method self withVSwitchId(array $vSwitchId)
 * @method array getEcsInstanceId
 * @method self withEcsInstanceId(array $ecsInstanceId)
 */
class InnerCreateNcExpression extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getPrimaryIpAddress
 * @method self withPrimaryIpAddress(string $primaryIpAddress)
 * @method string getSecurityGroupId
 * @method self withSecurityGroupId(string $securityGroupId)
 * @method string getNetworkInterfaceName
 * @method self withNetworkInterfaceName(string $networkInterfaceName)
 * @method string getType
 * @method self withType(string $type)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method array getNetworkInterfaceId
 * @method self withNetworkInterfaceId(array $networkInterfaceId)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class InnerDescribeEni extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getAliUid
 * @method self withAliUid(string $aliUid)
 * @method string getTimestamp
 * @method self withTimestamp(string $timestamp)
 * @method bool getIsLock
 * @method self withIsLock(bool $isLock)
 */
class InnerRefundVcpuQuery extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getAliUid
 * @method self withAliUid(string $aliUid)
 * @method bool getIsSuccess
 * @method self withIsSuccess(bool $isSuccess)
 * @method array getInstanceIds
 * @method self withInstanceIds(array $instanceIds)
 * @method string getType
 * @method self withType(string $type)
 * @method int getVcpuTotal
 * @method self withVcpuTotal(int $vcpuTotal)
 */
class InnerRefundVcpuCallBack extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getAliUid
 * @method self withAliUid(string $aliUid)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method string getEventId
 * @method self withEventId(string $eventId)
 * @method string getNewPlanTime
 * @method self withNewPlanTime(string $newPlanTime)
 * @method string getNewExpireTime
 * @method self withNewExpireTime(string $newExpireTime)
 */
class ModifySystemEventAttribute extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getAliUid
 * @method self withAliUid(string $aliUid)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method string getEventType
 * @method self withEventType(string $eventType)
 * @method string getEffectTime
 * @method self withEffectTime(string $effectTime)
 * @method string getLimitTime
 * @method self withLimitTime(string $limitTime)
 */
class CreateSystemEvent extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getAliUid
 * @method self withAliUid(string $aliUid)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method string getEventId
 * @method self withEventId(string $eventId)
 */
class CancelSystemEvent extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getTargetInstanceType
 * @method self withTargetInstanceType(string $targetInstanceType)
 * @method array getInstanceId
 * @method self withInstanceId(array $instanceId)
 * @method string getTargetSystemDiskCategory
 * @method self withTargetSystemDiskCategory(string $targetSystemDiskCategory)
 * @method bool getMigrateAcrossZone
 * @method self withMigrateAcrossZone(bool $migrateAcrossZone)
 */
class DescribeResourceModificationCapacity extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getBizRegionId
 * @method self withBizRegionId(string $bizRegionId)
 * @method array getVSwitchId
 * @method self withVSwitchId(array $vSwitchId)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getTagKey
 * @method self withTagKey(string $tagKey)
 * @method array getTagValue
 * @method self withTagValue(array $tagValue)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getMetric
 * @method self withMetric(string $metric)
 */
class InnerQueryEcsCountByCondition extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getEntityType
 * @method self withEntityType(string $entityType)
 * @method string getEntityKey
 * @method self withEntityKey(string $entityKey)
 * @method string getEntityProperties
 * @method self withEntityProperties(string $entityProperties)
 * @method bool getReplaceAll
 * @method self withReplaceAll(bool $replaceAll)
 */
class InnerModifyEntityConstraints extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method int getAmount
 * @method self withAmount(int $amount)
 * @method string getSpotStrategy
 * @method self withSpotStrategy(string $spotStrategy)
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method bool getIoOptimized
 * @method self withIoOptimized(bool $ioOptimized)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getSystemDiskCategory
 * @method self withSystemDiskCategory(string $systemDiskCategory)
 * @method array getDataDiskCategory
 * @method self withDataDiskCategory(array $dataDiskCategory)
 * @method string getNetworkCategory
 * @method self withNetworkCategory(string $networkCategory)
 */
class DescribeResourceCreationCapacity extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getappKey
 * @method self withappKey(string $appKey)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method string getNewOwnerId
 * @method self withNewOwnerId(string $newOwnerId)
 * @method string getToSecurityGroupId
 * @method self withToSecurityGroupId(string $toSecurityGroupId)
 * @method array getInstanceIds
 * @method self withInstanceIds(array $instanceIds)
 * @method string getToVSwitchId
 * @method self withToVSwitchId(string $toVSwitchId)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method bool getDryRun
 * @method self withDryRun(bool $dryRun)
 * @method bool getKeepPublicIp
 * @method self withKeepPublicIp(bool $keepPublicIp)
 * @method int getToVSwitchAliUid
 * @method self withToVSwitchAliUid(int $toVSwitchAliUid)
 * @method array getPrivateIps
 * @method self withPrivateIps(array $privateIps)
 */
class ResourceOwnershipTransfer extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getActionType
 * @method self withActionType(string $actionType)
 * @method string getEntityType
 * @method self withEntityType(string $entityType)
 * @method array getFilter
 * @method self withFilter(array $filter)
 */
class InnerQueryExplanation extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getActionType
 * @method self withActionType(string $actionType)
 * @method string getEntityType
 * @method self withEntityType(string $entityType)
 * @method string getEntityKey
 * @method self withEntityKey(string $entityKey)
 */
class InnerQueryConstraints extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method bool getMigrateAcrossZone
 * @method self withMigrateAcrossZone(bool $migrateAcrossZone)
 * @method string getDestinationResource
 * @method self withDestinationResource(string $destinationResource)
 * @method string getOperationType
 * @method self withOperationType(string $operationType)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getSystemDiskCategory
 * @method self withSystemDiskCategory(string $systemDiskCategory)
 * @method string getDataDiskCategory
 * @method self withDataDiskCategory(string $dataDiskCategory)
 * @method string getNetworkCategory
 * @method self withNetworkCategory(string $networkCategory)
 * @method Integer getCores
 * @method self withCores(Integer $cores)
 * @method float getMemory
 * @method self withMemory(float $memory)
 */
class DescribeResourcesModification extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method string getOperationType
 * @method self withOperationType(string $operationType)
 */
class DescribeBandwidthLimitation extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceChargeType
 * @method self withInstanceChargeType(string $instanceChargeType)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getDestinationResource
 * @method self withDestinationResource(string $destinationResource)
 * @method string getZoneId
 * @method self withZoneId(string $zoneId)
 * @method string getDedicatedHostId
 * @method self withDedicatedHostId(string $dedicatedHostId)
 * @method string getIoOptimized
 * @method self withIoOptimized(string $ioOptimized)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method string getSystemDiskCategory
 * @method self withSystemDiskCategory(string $systemDiskCategory)
 * @method string getDataDiskCategory
 * @method self withDataDiskCategory(string $dataDiskCategory)
 * @method string getNetworkCategory
 * @method self withNetworkCategory(string $networkCategory)
 * @method string getFrom
 * @method self withFrom(string $from)
 * @method Integer getCores
 * @method self withCores(Integer $cores)
 * @method float getMemory
 * @method self withMemory(float $memory)
 * @method string getScope
 * @method self withScope(string $scope)
 */
class DescribeAvailableResource extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getInstanceTypeFamily
 * @method self withInstanceTypeFamily(array $instanceTypeFamily)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class InnerDetailInstanceFamilyDefine extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class InnerRegionSupportInstancetypes extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getappKey
 * @method self withappKey(string $appKey)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 */
class CheckIsDefaultVpcUser extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getserialNumber
 * @method self withserialNumber(string $serialNumber)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getEniName
 * @method self withEniName(string $eniName)
 */
class InnerEcsDescribeVPortInfo extends Rpc
{
    use R;
}

/**
 * @method string getcallerBid
 * @method self withcallerBid(string $callerBid)
 * @method int getcallerUid
 * @method self withcallerUid(int $callerUid)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class QueryEcsInstanceOrderInfo extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getRegionNo
 * @method self withRegionNo(string $regionNo)
 */
class InnerQueryCopyImageSupportRegions extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getArgeementType
 * @method self withArgeementType(string $argeementType)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 */
class SignAgreement extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getArgeementType
 * @method self withArgeementType(string $argeementType)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 */
class CancelAgreement extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getAliUid
 * @method self withAliUid(string $aliUid)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getIpType
 * @method self withIpType(string $ipType)
 * @method string getPageNo
 * @method self withPageNo(string $pageNo)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 */
class InnerEcsDescribeIpsInGroup extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getInstanceTypeFamily
 * @method self withInstanceTypeFamily(string $instanceTypeFamily)
 * @method bool getNeedFactor
 * @method self withNeedFactor(bool $needFactor)
 */
class InnerDescribeInstanceTypes extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getModifyType
 * @method self withModifyType(string $modifyType)
 */
class InnerModifySnapshotBusinessStatus extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class InnerDescribeSnapshotBusinessStatus extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getResourceIds
 * @method self withResourceIds(string $resourceIds)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getRegionNo
 * @method self withRegionNo(string $regionNo)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getBid
 * @method self withBid(string $bid)
 */
class InnerEcsResourceGroupQueryByResources extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getInstanceId
 * @method self withInstanceId(array $instanceId)
 * @method string getRegionNo
 * @method self withRegionNo(string $regionNo)
 */
class ListImageBinding extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getBid
 * @method self withBid(string $bid)
 */
class InnerEcsRegionQueryByBid extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getMigrate
 * @method self withMigrate(string $migrate)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryResourceModify extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getDiskIds
 * @method self withDiskIds(string $diskIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method string getKeyPairName
 * @method self withKeyPairName(string $keyPairName)
 * @method bool getAutoStartInstance
 * @method self withAutoStartInstance(bool $autoStartInstance)
 * @method string getSecurityEnhancementStrategy
 * @method self withSecurityEnhancementStrategy(string $securityEnhancementStrategy)
 */
class ReInitDisks extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getserialNumber
 * @method self withserialNumber(string $serialNumber)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 */
class InnerEcsIsClassicLinkVpcUser extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getRequestId
 * @method self withRequestId(string $requestId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getTransitionTime
 * @method self withTransitionTime(string $transitionTime)
 * @method bool getIsQueryUnAppointed
 * @method self withIsQueryUnAppointed(bool $isQueryUnAppointed)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getNetworkTransType
 * @method self withNetworkTransType(string $networkTransType)
 * @method bool getIsExpireTransition
 * @method self withIsExpireTransition(bool $isExpireTransition)
 */
class InnerEcsTransitionQuery extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getRequestId
 * @method self withRequestId(string $requestId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getBid
 * @method self withBid(string $bid)
 * @method array getInstanceId
 * @method self withInstanceId(array $instanceId)
 * @method string getTransitionTime
 * @method self withTransitionTime(string $transitionTime)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getNetworkTransType
 * @method self withNetworkTransType(string $networkTransType)
 * @method bool getIsExpireTransition
 * @method self withIsExpireTransition(bool $isExpireTransition)
 */
class InnerEcsTransitionModify extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getRequestId
 * @method self withRequestId(string $requestId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method bool getasync
 * @method self withasync(bool $async)
 */
class InnerEcsExpireRegionQuery extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class GetCommodityProxy extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getInternetIp
 * @method self withInternetIp(string $internetIp)
 */
class InnerEcsQueryIpThreshold extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getbuyerId
 * @method self withbuyerId(int $buyerId)
 * @method string getinstanceIds
 * @method self withinstanceIds(string $instanceIds)
 * @method string getregionNo
 * @method self withregionNo(string $regionNo)
 * @method Integer getduration
 * @method self withduration(Integer $duration)
 * @method string getpricingCycle
 * @method self withpricingCycle(string $pricingCycle)
 * @method bool getautoPay
 * @method self withautoPay(bool $autoPay)
 * @method bool getdryRun
 * @method self withdryRun(bool $dryRun)
 * @method bool getconvertDataDisk
 * @method self withconvertDataDisk(bool $convertDataDisk)
 */
class InnerAntInstanceConvertToPrepaid extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 * @method string getCommodity
 * @method self withCommodity(string $commodity)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getFromApp
 * @method self withFromApp(string $fromApp)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class InnerRemedyRenewInstance extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getFromRegionId
 * @method self withFromRegionId(string $fromRegionId)
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getDestinationRegionId
 * @method self withDestinationRegionId(string $destinationRegionId)
 * @method string getDestinationImageName
 * @method self withDestinationImageName(string $destinationImageName)
 * @method string getDestinationDescription
 * @method self withDestinationDescription(string $destinationDescription)
 * @method string getFromRegionName
 * @method self withFromRegionName(string $fromRegionName)
 * @method int getDestinationRegionPriId
 * @method self withDestinationRegionPriId(int $destinationRegionPriId)
 * @method string getFromSnapshotListBase64
 * @method self withFromSnapshotListBase64(string $fromSnapshotListBase64)
 * @method string getFromImageBase64
 * @method self withFromImageBase64(string $fromImageBase64)
 * @method string getImageSnapshotMappingsBase64
 * @method self withImageSnapshotMappingsBase64(string $imageSnapshotMappingsBase64)
 * @method string getResourceMetaMappingsBase64
 * @method self withResourceMetaMappingsBase64(string $resourceMetaMappingsBase64)
 */
class CopyImageAtTarget extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getfilePath
 * @method self withfilePath(string $filePath)
 * @method string getcontent
 * @method self withcontent(string $content)
 */
class InnerConstraintDataPush extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getPublicIpAddress
 * @method self withPublicIpAddress(string $publicIpAddress)
 * @method bool getDryRun
 * @method self withDryRun(bool $dryRun)
 */
class InnerReleasePublicIpAddress extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getImageInstanceId
 * @method self withImageInstanceId(string $imageInstanceId)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 */
class InnerMarketplaceImageExpire extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getbuyerId
 * @method self withbuyerId(int $buyerId)
 * @method string getinstanceIds
 * @method self withinstanceIds(string $instanceIds)
 * @method string getregionNo
 * @method self withregionNo(string $regionNo)
 * @method bool getdryRun
 * @method self withdryRun(bool $dryRun)
 */
class InnerModifyInstanceChargeType extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getVSwitchId
 * @method self withVSwitchId(string $vSwitchId)
 * @method string getNetworkType
 * @method self withNetworkType(string $networkType)
 * @method string getIoOptimized
 * @method self withIoOptimized(string $ioOptimized)
 */
class CheckImageSupportCloudinit extends Rpc
{
    use R;
}

class CheckImageSupportCloudinitGatedLaunch extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getOrderIds
 * @method self withOrderIds(array $orderIds)
 */
class InnerOpenSnapshotService extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getOrderIds
 * @method self withOrderIds(array $orderIds)
 */
class InnerCheckOpenSnapshotService extends Rpc
{
    use R;
}

/**
 * @method string getImageUrl
 * @method self withImageUrl(string $imageUrl)
 * @method string getImageName
 * @method self withImageName(string $imageName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getMetaData
 * @method self withMetaData(string $metaData)
 * @method string getFromRegionNo
 * @method self withFromRegionNo(string $fromRegionNo)
 * @method string getMD5
 * @method self withMD5(string $mD5)
 * @method int getOsTypeId
 * @method self withOsTypeId(int $osTypeId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UploadSystemImageAtOrigin extends Rpc
{
    use R;
}

/**
 * @method int getDbId
 * @method self withDbId(int $dbId)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getResourceTransitId
 * @method self withResourceTransitId(string $resourceTransitId)
 * @method array getResourceTypeList
 * @method self withResourceTypeList(array $resourceTypeList)
 * @method string getFromRegionNo
 * @method self withFromRegionNo(string $fromRegionNo)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method array getResourceStatusList
 * @method self withResourceStatusList(array $resourceStatusList)
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryResourceTransit extends Rpc
{
    use R;
}

/**
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getImageNo
 * @method self withImageNo(string $imageNo)
 * @method string getImageRegionNo
 * @method self withImageRegionNo(string $imageRegionNo)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryImageCopyProgress extends Rpc
{
    use R;
}

/**
 * @method string getFromRegionNo
 * @method self withFromRegionNo(string $fromRegionNo)
 * @method string getResourceId
 * @method self withResourceId(string $resourceId)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getTag1Key
 * @method self withTag1Key(string $tag1Key)
 * @method string getTag2Key
 * @method self withTag2Key(string $tag2Key)
 * @method string getTag3Key
 * @method self withTag3Key(string $tag3Key)
 * @method string getTag4Key
 * @method self withTag4Key(string $tag4Key)
 * @method string getTag5Key
 * @method self withTag5Key(string $tag5Key)
 * @method string getTag1Value
 * @method self withTag1Value(string $tag1Value)
 * @method string getTag2Value
 * @method self withTag2Value(string $tag2Value)
 * @method string getTag3Value
 * @method self withTag3Value(string $tag3Value)
 * @method string getTag4Value
 * @method self withTag4Value(string $tag4Value)
 * @method string getTag5Value
 * @method self withTag5Value(string $tag5Value)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeCopyProgressAtOrigin extends Rpc
{
    use R;
}

/**
 * @method string getResourceTransitInBase64
 * @method self withResourceTransitInBase64(string $resourceTransitInBase64)
 * @method string getImageCenterResourceId
 * @method self withImageCenterResourceId(string $imageCenterResourceId)
 * @method string getToRegionNo
 * @method self withToRegionNo(string $toRegionNo)
 * @method string getToImageName
 * @method self withToImageName(string $toImageName)
 * @method string getToImageDesc
 * @method self withToImageDesc(string $toImageDesc)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CopySystemImageAtTarget extends Rpc
{
    use R;
}

/**
 * @method int getTransitId
 * @method self withTransitId(int $transitId)
 * @method array getToRegionNoList
 * @method self withToRegionNoList(array $toRegionNoList)
 * @method string getToImageName
 * @method self withToImageName(string $toImageName)
 * @method string getToImageDesc
 * @method self withToImageDesc(string $toImageDesc)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method array getTag
 * @method self withTag(array $tag)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CopySystemImage extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getAliUid
 * @method self withAliUid(int $aliUid)
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method array getBindStatus
 * @method self withBindStatus(array $bindStatus)
 */
class InnerQueryImageBindByInstance extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 * @method string getCommodity
 * @method self withCommodity(string $commodity)
 * @method string getClientToken
 * @method self withClientToken(string $clientToken)
 * @method string getBusinessInfo
 * @method self withBusinessInfo(string $businessInfo)
 * @method string getFromApp
 * @method self withFromApp(string $fromApp)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class InnerRenewInstance extends Rpc
{
    use R;
}

class ReopenInstanceGatedLaunch extends Rpc
{
    use R;
}

class QueryUserInfoGatedLaunch extends Rpc
{
    use R;
}

class QueryUsableSnapshotsGatedLaunch extends Rpc
{
    use R;
}

class QueryNeedKeepUsingGatedLaunch extends Rpc
{
    use R;
}

class QueryMarketImagesGatedLaunch extends Rpc
{
    use R;
}

class QueryMarketImageCategoryGatedLaunch extends Rpc
{
    use R;
}

class QueryInstanceInfoGatedLaunch extends Rpc
{
    use R;
}

class QueryImageIdByRegionGatedLaunch extends Rpc
{
    use R;
}

class QueryImageByImageIdGatedLaunch extends Rpc
{
    use R;
}

class QueryAvailableRegionGatedLaunch extends Rpc
{
    use R;
}

class NotifyRefundGatedLaunch extends Rpc
{
    use R;
}

class ListEcsInstanceOrderInfoGatedLaunch extends Rpc
{
    use R;
}

class ListBandwidthHistoryGatedLaunch extends Rpc
{
    use R;
}

class ListAllIzMapGatedLaunch extends Rpc
{
    use R;
}

class KeepUsingGatedLaunch extends Rpc
{
    use R;
}

class InnerVncQueryPasswdGatedLaunch extends Rpc
{
    use R;
}

class InnerStockListUsedVmsGatedLaunch extends Rpc
{
    use R;
}

class InnerSnapshotSecurityUnmountGatedLaunch extends Rpc
{
    use R;
}

class InnerSnapshotSecurityMountGatedLaunch extends Rpc
{
    use R;
}

class InnerSnapshotQueryUserSnapshotsGatedLaunch extends Rpc
{
    use R;
}

class InnerSnapshotIsUserAutoSnapshotPauseGatedLaunch extends Rpc
{
    use R;
}

class InnerSnapshotDescribeMountedSnapshotsGatedLaunch extends Rpc
{
    use R;
}

class InnerProduceGatedLaunch extends Rpc
{
    use R;
}

class InnerNetworkModifyValidationGatedLaunch extends Rpc
{
    use R;
}

class InnerMonitorDataDescribeInstanceGatedLaunch extends Rpc
{
    use R;
}

class InnerMonitorDataDescribeDiskGatedLaunch extends Rpc
{
    use R;
}

class InnerMonitorGatedLaunch extends Rpc
{
    use R;
}

class InnerMaliceEcsUnlockGatedLaunch extends Rpc
{
    use R;
}

class InnerMaliceEcsLockGatedLaunch extends Rpc
{
    use R;
}

class InnerIzQueryForVmSaleGatedLaunch extends Rpc
{
    use R;
}

class InnerIpLoadGatedLaunch extends Rpc
{
    use R;
}

class InnerInstanceSetEndTimeGatedLaunch extends Rpc
{
    use R;
}

class InnerInstanceQueryEcsByImgPcGatedLaunch extends Rpc
{
    use R;
}

class InnerInstanceQueryByParamBackyardGatedLaunch extends Rpc
{
    use R;
}

class InnerInstanceQueryByParamGatedLaunch extends Rpc
{
    use R;
}

class InnerInstanceGetInstanceTypeModelByTypeGatedLaunch extends Rpc
{
    use R;
}

class InnerInstanceEnableSLBFlowGatedLaunch extends Rpc
{
    use R;
}

class InnerInstanceDisableSLBFlowGatedLaunch extends Rpc
{
    use R;
}

class InnerInstanceDetailGatedLaunch extends Rpc
{
    use R;
}

class InnerImageQueryUserImagesGatedLaunch extends Rpc
{
    use R;
}

class InnerImageQueryProductQuotaGatedLaunch extends Rpc
{
    use R;
}

class InnerImageQueryNeedKeepUsingGatedLaunch extends Rpc
{
    use R;
}

class InnerImageQueryImgsByParamGatedLaunch extends Rpc
{
    use R;
}

class InnerImageQueryAvailableImgsGatedLaunch extends Rpc
{
    use R;
}

class InnerImageModifyProductCapacityGatedLaunch extends Rpc
{
    use R;
}

class InnerImageModifyGatedLaunch extends Rpc
{
    use R;
}

class InnerImageKeepUsingGatedLaunch extends Rpc
{
    use R;
}

class InnerImageDetailGatedLaunch extends Rpc
{
    use R;
}

class InnerImageConvert2ProductGatedLaunch extends Rpc
{
    use R;
}

class InnerGroupRevokeGatedLaunch extends Rpc
{
    use R;
}

class InnerGroupRemoveGatedLaunch extends Rpc
{
    use R;
}

class InnerGroupQueryVmGatedLaunch extends Rpc
{
    use R;
}

class InnerGroupQueryGatedLaunch extends Rpc
{
    use R;
}

class InnerGroupLeaveGatedLaunch extends Rpc
{
    use R;
}

class InnerGroupJoinGatedLaunch extends Rpc
{
    use R;
}

class InnerGroupFindDefaultSystemGroupGatedLaunch extends Rpc
{
    use R;
}

class InnerGroupDetailGatedLaunch extends Rpc
{
    use R;
}

class InnerGroupCreateGatedLaunch extends Rpc
{
    use R;
}

class InnerGroupAuthorizeGatedLaunch extends Rpc
{
    use R;
}

class InnerGetZoneVendibleDataAndStatusByIdGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsSnapshotQueryAllSnapshotsByEcsIdGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsRiskControlQueryGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsRiskControlPunishRemoveGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsRiskControlPunishGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsReleaseByDriverGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsRegionQueryAllGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsRegionQueryActiveGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsQuerySecurityGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsQueryNcInfoByInstanceIdGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsQueryBySerialNumberGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsQueryByParamGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsQueryByIpGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsQueryByIntranetIpGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsQueryByInternetIpGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsQueryByInstanceIdGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsIsChannelMerchantGatedLaunch extends Rpc
{
    use R;
}

class InnerGetInstanceTypeModelByTypeGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsInstanceQueryRegionsGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsInstanceQueryRegionNoFilterGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsInstanceQueryByParamGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsInstanceDetailForConsoleGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsInstanceDetailGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsGetBflagByBidAndUidGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsFindByIdGatedLaunch extends Rpc
{
    use R;
}

class InnerEcsCountInRegionGatedLaunch extends Rpc
{
    use R;
}

class InnerDiskResizeByParamGatedLaunch extends Rpc
{
    use R;
}

class InnerDiskResetGatedLaunch extends Rpc
{
    use R;
}

class InnerDiskQueryUserDiskSummaryGatedLaunch extends Rpc
{
    use R;
}

class InnerDiskQueryByParamForConsoleGatedLaunch extends Rpc
{
    use R;
}

class InnerDiskQueryByParamGatedLaunch extends Rpc
{
    use R;
}

class InnerDiskFindDiskByDiskIdGatedLaunch extends Rpc
{
    use R;
}

class InnerCheckProduceGatedLaunch extends Rpc
{
    use R;
}

class GetCommodityGatedLaunch extends Rpc
{
    use R;
}

class GetActiveRegionsGatedLaunch extends Rpc
{
    use R;
}

class FiveDaysRefundGatedLaunch extends Rpc
{
    use R;
}

class DescribeEipPriceGatedLaunch extends Rpc
{
    use R;
}

class CheckOrderNotPaidGatedLaunch extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getappKey
 * @method self withappKey(string $appKey)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getOrderId
 * @method self withOrderId(string $orderId)
 * @method string getOrderUid
 * @method self withOrderUid(string $orderUid)
 * @method string getorderIdCallbackToken
 * @method self withorderIdCallbackToken(string $orderIdCallbackToken)
 */
class InnerProduce extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getappKey
 * @method self withappKey(string $appKey)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getOrderId
 * @method self withOrderId(string $orderId)
 * @method string getOrderUid
 * @method self withOrderUid(string $orderUid)
 * @method string getorderIdCallbackToken
 * @method self withorderIdCallbackToken(string $orderIdCallbackToken)
 */
class InnerCheckProduce extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getappKey
 * @method self withappKey(string $appKey)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getdata
 * @method self withdata(string $data)
 * @method string getinstanceId
 * @method self withinstanceId(string $instanceId)
 */
class QueryInstanceInfo extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getappKey
 * @method self withappKey(string $appKey)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getinstanceId
 * @method self withinstanceId(string $instanceId)
 * @method bool getnetworkValidation
 * @method self withnetworkValidation(bool $networkValidation)
 */
class InnerNetworkModifyValidation extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getappKey
 * @method self withappKey(string $appKey)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getcaller
 * @method self withcaller(string $caller)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method string getresourceType
 * @method self withresourceType(string $resourceType)
 * @method string getinstanceName
 * @method self withinstanceName(string $instanceName)
 * @method int getendTime
 * @method self withendTime(int $endTime)
 */
class InnerInstanceSetEndTime extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getappKey
 * @method self withappKey(string $appKey)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getinstanceId
 * @method self withinstanceId(string $instanceId)
 * @method Integer getnewSize
 * @method self withnewSize(Integer $newSize)
 */
class InnerDiskResizeByParam extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getinstanceType
 * @method self withinstanceType(string $instanceType)
 * @method bool getincludeOffline
 * @method self withincludeOffline(bool $includeOffline)
 */
class InnerInstanceGetInstanceTypeModelByType extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getimageProductCodes
 * @method self withimageProductCodes(string $imageProductCodes)
 */
class InnerImageQueryProductQuota extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method int getosTypeId
 * @method self withosTypeId(int $osTypeId)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 * @method string getimageCategory
 * @method self withimageCategory(string $imageCategory)
 * @method Integer getpage
 * @method self withpage(Integer $page)
 * @method string getstatus
 * @method self withstatus(string $status)
 * @method string getvisibility
 * @method self withvisibility(string $visibility)
 * @method string getrequestId
 * @method self withrequestId(string $requestId)
 * @method string getimageId
 * @method self withimageId(string $imageId)
 */
class InnerImageQueryImgsByParam extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getproductCode
 * @method self withproductCode(string $productCode)
 * @method int getvalue
 * @method self withvalue(int $value)
 */
class InnerImageModifyProductCapacity extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getinstanceId
 * @method self withinstanceId(string $instanceId)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getuserData
 * @method self withuserData(string $userData)
 */
class InnerVncQueryPasswd extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 */
class InnerSnapshotIsUserAutoSnapshotPause extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method bool getasync
 * @method self withasync(bool $async)
 */
class InnerImageQueryNeedKeepUsing extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getremark
 * @method self withremark(string $remark)
 * @method string getplatform
 * @method self withplatform(string $platform)
 */
class InnerImageKeepUsing extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getresourceType
 * @method self withresourceType(string $resourceType)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class InnerEcsReleaseByDriver extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class InnerEcsInstanceDetailForConsole extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method bool getuseImagePasswd
 * @method self withuseImagePasswd(bool $useImagePasswd)
 * @method string getecsInstanceId
 * @method self withecsInstanceId(string $ecsInstanceId)
 * @method string getdiskType
 * @method self withdiskType(string $diskType)
 * @method bool getkeepDiskSize
 * @method self withkeepDiskSize(bool $keepDiskSize)
 * @method string getpasswd
 * @method self withpasswd(string $passwd)
 * @method string getinstanceIds
 * @method self withinstanceIds(string $instanceIds)
 */
class InnerDiskReset extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method bool getasync
 * @method self withasync(bool $async)
 */
class InnerDiskQueryUserDiskSummary extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method Integer getpageNo
 * @method self withpageNo(Integer $pageNo)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 * @method string getstatus
 * @method self withstatus(string $status)
 * @method string getdiskName
 * @method self withdiskName(string $diskName)
 * @method string getexcludeStatus
 * @method self withexcludeStatus(string $excludeStatus)
 * @method string gettags
 * @method self withtags(string $tags)
 * @method string getcreateTimeTo
 * @method self withcreateTimeTo(string $createTimeTo)
 * @method string getprePayEcsInstanceIds
 * @method self withprePayEcsInstanceIds(string $prePayEcsInstanceIds)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getsnapshotNo
 * @method self withsnapshotNo(string $snapshotNo)
 * @method string getdiskCategory
 * @method self withdiskCategory(string $diskCategory)
 * @method string getinstanceIds
 * @method self withinstanceIds(string $instanceIds)
 * @method bool getenableAutomatedSnapshotPolicy
 * @method self withenableAutomatedSnapshotPolicy(bool $enableAutomatedSnapshotPolicy)
 * @method bool getactive
 * @method self withactive(bool $active)
 * @method bool getenableAutoSnapshot
 * @method self withenableAutoSnapshot(bool $enableAutoSnapshot)
 * @method string getautoSnapshotPolicyId
 * @method self withautoSnapshotPolicyId(string $autoSnapshotPolicyId)
 * @method bool getportable
 * @method self withportable(bool $portable)
 * @method string getcreateTimeFrom
 * @method self withcreateTimeFrom(string $createTimeFrom)
 * @method string getizNo
 * @method self withizNo(string $izNo)
 * @method string getecsInstanceId
 * @method self withecsInstanceId(string $ecsInstanceId)
 * @method string getdiskType
 * @method self withdiskType(string $diskType)
 * @method string getfuzzyDiskName
 * @method self withfuzzyDiskName(string $fuzzyDiskName)
 * @method bool getdeleteWithInstance
 * @method self withdeleteWithInstance(bool $deleteWithInstance)
 * @method string getpostPayEcsInstanceIds
 * @method self withpostPayEcsInstanceIds(string $postPayEcsInstanceIds)
 * @method bool getdeleteAutoSnapshot
 * @method self withdeleteAutoSnapshot(bool $deleteAutoSnapshot)
 * @method string getimageNo
 * @method self withimageNo(string $imageNo)
 */
class InnerDiskQueryByParamForConsole extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getDiskId
 * @method self withDiskId(string $diskId)
 */
class InnerDiskFindDiskByDiskId extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class FiveDaysRefund extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getappKey
 * @method self withappKey(string $appKey)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method int getzoneId
 * @method self withzoneId(int $zoneId)
 * @method string getregionNo
 * @method self withregionNo(string $regionNo)
 */
class InnerGetZoneVendibleDataAndStatusById extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method int getzoneId
 * @method self withzoneId(int $zoneId)
 * @method string getregionNo
 * @method self withregionNo(string $regionNo)
 */
class InnerStockListUsedVms extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getregionNos
 * @method self withregionNos(string $regionNos)
 */
class InnerIzQueryForVmSale extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method Integer getcount
 * @method self withcount(Integer $count)
 * @method string getipCategory
 * @method self withipCategory(string $ipCategory)
 * @method string getnextToken
 * @method self withnextToken(string $nextToken)
 */
class InnerIpLoad extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method Integer getpageNo
 * @method self withpageNo(Integer $pageNo)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getimgPc
 * @method self withimgPc(string $imgPc)
 */
class InnerInstanceQueryEcsByImgPc extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getappKey
 * @method self withappKey(string $appKey)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getvpcInstanceId
 * @method self withvpcInstanceId(string $vpcInstanceId)
 * @method Integer getpageNo
 * @method self withpageNo(Integer $pageNo)
 * @method string getorder
 * @method self withorder(string $order)
 * @method int getimageId
 * @method self withimageId(int $imageId)
 * @method int getregionIndexId
 * @method self withregionIndexId(int $regionIndexId)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method string getinternetIp
 * @method self withinternetIp(string $internetIp)
 * @method Integer getmem
 * @method self withmem(Integer $mem)
 * @method Integer getendOfInternetTx
 * @method self withendOfInternetTx(Integer $endOfInternetTx)
 * @method Integer getcores
 * @method self withcores(Integer $cores)
 * @method string getizNo
 * @method self withizNo(string $izNo)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 * @method string getimgPc
 * @method self withimgPc(string $imgPc)
 * @method string getexclusionEcsIds
 * @method self withexclusionEcsIds(string $exclusionEcsIds)
 * @method string getzoneNo
 * @method self withzoneNo(string $zoneNo)
 * @method string getimageType
 * @method self withimageType(string $imageType)
 * @method string getecsIds
 * @method self withecsIds(string $ecsIds)
 * @method string getinstanceIds
 * @method self withinstanceIds(string $instanceIds)
 * @method int getizId
 * @method self withizId(int $izId)
 * @method string getintranetIp
 * @method self withintranetIp(string $intranetIp)
 * @method string getsystemDeviceCategory
 * @method self withsystemDeviceCategory(string $systemDeviceCategory)
 * @method Integer getstartOfInternetTx
 * @method self withstartOfInternetTx(Integer $startOfInternetTx)
 * @method bool getioOptimized
 * @method self withioOptimized(bool $ioOptimized)
 * @method string getbizStatus
 * @method self withbizStatus(string $bizStatus)
 * @method bool getnotSyncHouyi
 * @method self withnotSyncHouyi(bool $notSyncHouyi)
 * @method string getvswInstanceId
 * @method self withvswInstanceId(string $vswInstanceId)
 * @method string getstatus
 * @method self withstatus(string $status)
 * @method bool getorderType
 * @method self withorderType(bool $orderType)
 * @method string getinstanceTypeId
 * @method self withinstanceTypeId(string $instanceTypeId)
 * @method string getecsNetworkType
 * @method self withecsNetworkType(string $ecsNetworkType)
 * @method int getzoneId
 * @method self withzoneId(int $zoneId)
 * @method string getregionNo
 * @method self withregionNo(string $regionNo)
 * @method Integer getagentId
 * @method self withagentId(Integer $agentId)
 * @method string gethostname
 * @method self withhostname(string $hostname)
 */
class InnerInstanceQueryByParamBackyard extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method Integer getpageNo
 * @method self withpageNo(Integer $pageNo)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method string getosType
 * @method self withosType(string $osType)
 * @method string getcreateStartTime
 * @method self withcreateStartTime(string $createStartTime)
 * @method string gettags
 * @method self withtags(string $tags)
 * @method string getregionNos
 * @method self withregionNos(string $regionNos)
 * @method string getstatus
 * @method self withstatus(string $status)
 * @method string getimageName
 * @method self withimageName(string $imageName)
 * @method bool getioOptimized
 * @method self withioOptimized(bool $ioOptimized)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getimageIds
 * @method self withimageIds(string $imageIds)
 * @method string getinstanceType
 * @method self withinstanceType(string $instanceType)
 * @method string getquoteType
 * @method self withquoteType(string $quoteType)
 * @method string getsnapshotId
 * @method self withsnapshotId(string $snapshotId)
 * @method string getfuzzyImageName
 * @method self withfuzzyImageName(string $fuzzyImageName)
 * @method string getimageOwnerAlias
 * @method self withimageOwnerAlias(string $imageOwnerAlias)
 * @method bool getisAll
 * @method self withisAll(bool $isAll)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getcreateEndTime
 * @method self withcreateEndTime(string $createEndTime)
 * @method string getuserCountryType
 * @method self withuserCountryType(string $userCountryType)
 * @method Integer getosBit
 * @method self withosBit(Integer $osBit)
 */
class InnerImageQueryAvailableImgs extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method string getremark
 * @method self withremark(string $remark)
 * @method string getimageName
 * @method self withimageName(string $imageName)
 * @method Integer getimageSize
 * @method self withimageSize(Integer $imageSize)
 * @method int getosTypeId
 * @method self withosTypeId(int $osTypeId)
 * @method string getisPublic
 * @method self withisPublic(string $isPublic)
 * @method string getImageVersion
 * @method self withImageVersion(string $imageVersion)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getimageId
 * @method self withimageId(string $imageId)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getimageCategory
 * @method self withimageCategory(string $imageCategory)
 * @method int getvirtBaseImageId
 * @method self withvirtBaseImageId(int $virtBaseImageId)
 */
class InnerImageModify extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getimageId
 * @method self withimageId(string $imageId)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getproductCode
 * @method self withproductCode(string $productCode)
 */
class InnerImageConvert2Product extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getvpcInstanceId
 * @method self withvpcInstanceId(string $vpcInstanceId)
 */
class InnerGroupFindDefaultSystemGroup extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method int getecsId
 * @method self withecsId(int $ecsId)
 */
class InnerEcsSnapshotQueryAllSnapshotsByEcsId extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getecsGroupNic
 * @method self withecsGroupNic(string $ecsGroupNic)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 */
class InnerEcsQuerySecurity extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getinstanceType
 * @method self withinstanceType(string $instanceType)
 */
class InnerGetInstanceTypeModelByType extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method bool getasync
 * @method self withasync(bool $async)
 */
class InnerEcsInstanceQueryRegions extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method bool getasync
 * @method self withasync(bool $async)
 */
class InnerEcsInstanceQueryRegionNoFilter extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 */
class InnerEcsGetBflagByBidAndUid extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getecsOwnerAliUid
 * @method self withecsOwnerAliUid(int $ecsOwnerAliUid)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method int getsnapshotIndexId
 * @method self withsnapshotIndexId(int $snapshotIndexId)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method int getsnapshotOwnerAliUid
 * @method self withsnapshotOwnerAliUid(int $snapshotOwnerAliUid)
 * @method string getbid
 * @method self withbid(string $bid)
 */
class InnerSnapshotSecurityUnmount extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method int getsnapshotIndexId
 * @method self withsnapshotIndexId(int $snapshotIndexId)
 * @method int getsnapshotOwnerAliUid
 * @method self withsnapshotOwnerAliUid(int $snapshotOwnerAliUid)
 * @method int getecsOwnerAliUid
 * @method self withecsOwnerAliUid(int $ecsOwnerAliUid)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getbid
 * @method self withbid(string $bid)
 */
class InnerSnapshotSecurityMount extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method Integer getpageNo
 * @method self withpageNo(Integer $pageNo)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 * @method string getgmtCreatedEnd
 * @method self withgmtCreatedEnd(string $gmtCreatedEnd)
 * @method Integer getsnapshotSizeLowLimit
 * @method self withsnapshotSizeLowLimit(Integer $snapshotSizeLowLimit)
 * @method string getgmtCreatedBegin
 * @method self withgmtCreatedBegin(string $gmtCreatedBegin)
 * @method string getdiskType
 * @method self withdiskType(string $diskType)
 * @method bool getcreateFinished
 * @method self withcreateFinished(bool $createFinished)
 * @method Integer getsnapshotSizeLimit
 * @method self withsnapshotSizeLimit(Integer $snapshotSizeLimit)
 * @method string getecsSnapshotTypes
 * @method self withecsSnapshotTypes(string $ecsSnapshotTypes)
 * @method string getfuzzySnapshotName
 * @method self withfuzzySnapshotName(string $fuzzySnapshotName)
 * @method string getecsSnapshotStatus
 * @method self withecsSnapshotStatus(string $ecsSnapshotStatus)
 * @method string getdeviceType
 * @method self withdeviceType(string $deviceType)
 * @method string getdiskId
 * @method self withdiskId(string $diskId)
 * @method int getregionIndexId
 * @method self withregionIndexId(int $regionIndexId)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method string getaliUids
 * @method self withaliUids(string $aliUids)
 * @method string getids
 * @method self withids(string $ids)
 * @method string getexcludeSnapshotIds
 * @method self withexcludeSnapshotIds(string $excludeSnapshotIds)
 * @method string getregionNo
 * @method self withregionNo(string $regionNo)
 * @method string getsnapshotNos
 * @method self withsnapshotNos(string $snapshotNos)
 * @method bool getisSyncHouyi
 * @method self withisSyncHouyi(bool $isSyncHouyi)
 * @method string getecsIds
 * @method self withecsIds(string $ecsIds)
 * @method string getdeviceNo
 * @method self withdeviceNo(string $deviceNo)
 * @method string getquoteType
 * @method self withquoteType(string $quoteType)
 * @method string getsnapshotIds
 * @method self withsnapshotIds(string $snapshotIds)
 * @method string getsnapshotNickName
 * @method self withsnapshotNickName(string $snapshotNickName)
 */
class InnerSnapshotQueryUserSnapshots extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method Integer getpageNo
 * @method self withpageNo(Integer $pageNo)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 * @method int getecsOwnerAliUid
 * @method self withecsOwnerAliUid(int $ecsOwnerAliUid)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getsnapshotIndexId
 * @method self withsnapshotIndexId(int $snapshotIndexId)
 * @method int getsnapshotOwnerAliUid
 * @method self withsnapshotOwnerAliUid(int $snapshotOwnerAliUid)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getbid
 * @method self withbid(string $bid)
 */
class InnerSnapshotDescribeMountedSnapshots extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method Integer getperiod
 * @method self withperiod(Integer $period)
 * @method string getmetrics
 * @method self withmetrics(string $metrics)
 */
class InnerMonitorDataDescribeInstance extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method string getDiskId
 * @method self withDiskId(string $diskId)
 * @method string getstartTime
 * @method self withstartTime(string $startTime)
 * @method string getendTime
 * @method self withendTime(string $endTime)
 * @method Integer getperiod
 * @method self withperiod(Integer $period)
 * @method string getmetrics
 * @method self withmetrics(string $metrics)
 */
class InnerMonitorDataDescribeDisk extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class InnerMonitor extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getreason
 * @method self withreason(string $reason)
 * @method string getlockType
 * @method self withlockType(string $lockType)
 * @method int getid
 * @method self withid(int $id)
 * @method string getinternetIp
 * @method self withinternetIp(string $internetIp)
 * @method string getproof
 * @method self withproof(string $proof)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class InnerMaliceEcsUnlock extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getreason
 * @method self withreason(string $reason)
 * @method string getlockType
 * @method self withlockType(string $lockType)
 * @method int getid
 * @method self withid(int $id)
 * @method string getinternetIp
 * @method self withinternetIp(string $internetIp)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getproof
 * @method self withproof(string $proof)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class InnerMaliceEcsLock extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method Integer getpageNo
 * @method self withpageNo(Integer $pageNo)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 * @method Integer getagentId
 * @method self withagentId(Integer $agentId)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getregionNo
 * @method self withregionNo(string $regionNo)
 * @method int getizId
 * @method self withizId(int $izId)
 * @method string getizNo
 * @method self withizNo(string $izNo)
 * @method string getzoneNo
 * @method self withzoneNo(string $zoneNo)
 * @method string getinstanceIds
 * @method self withinstanceIds(string $instanceIds)
 * @method string gethostname
 * @method self withhostname(string $hostname)
 * @method string getstatus
 * @method self withstatus(string $status)
 * @method string getbizStatus
 * @method self withbizStatus(string $bizStatus)
 * @method string getinternetIp
 * @method self withinternetIp(string $internetIp)
 * @method string getintranetIp
 * @method self withintranetIp(string $intranetIp)
 * @method string getsystemDeviceCategory
 * @method self withsystemDeviceCategory(string $systemDeviceCategory)
 * @method int getimageIndexId
 * @method self withimageIndexId(int $imageIndexId)
 * @method string getimageType
 * @method self withimageType(string $imageType)
 * @method bool getnotSyncHouyi
 * @method self withnotSyncHouyi(bool $notSyncHouyi)
 * @method string getvpcInstanceId
 * @method self withvpcInstanceId(string $vpcInstanceId)
 * @method string getvSwitchInstanceId
 * @method self withvSwitchInstanceId(string $vSwitchInstanceId)
 * @method string getnetworkType
 * @method self withnetworkType(string $networkType)
 * @method Integer getcores
 * @method self withcores(Integer $cores)
 * @method Integer getmem
 * @method self withmem(Integer $mem)
 * @method Integer getstartOfInternetTx
 * @method self withstartOfInternetTx(Integer $startOfInternetTx)
 * @method Integer getendOfInternetTx
 * @method self withendOfInternetTx(Integer $endOfInternetTx)
 * @method string getorder
 * @method self withorder(string $order)
 * @method bool getorderType
 * @method self withorderType(bool $orderType)
 */
class InnerInstanceQueryByParam extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method bool getasync
 * @method self withasync(bool $async)
 */
class InnerInstanceEnableSLBFlow extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method bool getasync
 * @method self withasync(bool $async)
 */
class InnerInstanceDisableSLBFlow extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getbid
 * @method self withbid(string $bid)
 */
class InnerInstanceDetail extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method Integer getpageNo
 * @method self withpageNo(Integer $pageNo)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 * @method string getisPublic
 * @method self withisPublic(string $isPublic)
 * @method int getosTypeId
 * @method self withosTypeId(int $osTypeId)
 * @method string getsnapshotNo
 * @method self withsnapshotNo(string $snapshotNo)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getstatus
 * @method self withstatus(string $status)
 * @method string getimageName
 * @method self withimageName(string $imageName)
 * @method int getregionIndexId
 * @method self withregionIndexId(int $regionIndexId)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method string getImageId
 * @method self withImageId(string $imageId)
 */
class InnerImageQueryUserImages extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method bool getincludeDeleted
 * @method self withincludeDeleted(bool $includeDeleted)
 * @method string getimageId
 * @method self withimageId(string $imageId)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getbid
 * @method self withbid(string $bid)
 */
class InnerImageDetail extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getgroupNo
 * @method self withgroupNo(string $groupNo)
 * @method Integer getlevel
 * @method self withlevel(Integer $level)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getpolicy
 * @method self withpolicy(string $policy)
 * @method int getsourceGroupOwnerAliUid
 * @method self withsourceGroupOwnerAliUid(int $sourceGroupOwnerAliUid)
 * @method string getdestCidrIp
 * @method self withdestCidrIp(string $destCidrIp)
 * @method string getnic
 * @method self withnic(string $nic)
 * @method string getvpcInstanceId
 * @method self withvpcInstanceId(string $vpcInstanceId)
 * @method string getsourceGroupNo
 * @method self withsourceGroupNo(string $sourceGroupNo)
 * @method string getportRange
 * @method self withportRange(string $portRange)
 * @method string getipProtocol
 * @method self withipProtocol(string $ipProtocol)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method string getsourceCidrIp
 * @method self withsourceCidrIp(string $sourceCidrIp)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 */
class InnerGroupRevoke extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getvpcInstanceId
 * @method self withvpcInstanceId(string $vpcInstanceId)
 * @method string getgroupNo
 * @method self withgroupNo(string $groupNo)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 */
class InnerGroupRemove extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method Integer getpageNo
 * @method self withpageNo(Integer $pageNo)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getgroupNo
 * @method self withgroupNo(string $groupNo)
 */
class InnerGroupQueryVm extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getgroupNo
 * @method self withgroupNo(string $groupNo)
 * @method Integer getpageNo
 * @method self withpageNo(Integer $pageNo)
 * @method string getvpcInstanceId
 * @method self withvpcInstanceId(string $vpcInstanceId)
 * @method bool getisQueryEcsCount
 * @method self withisQueryEcsCount(bool $isQueryEcsCount)
 * @method string getgroupNos
 * @method self withgroupNos(string $groupNos)
 * @method bool getisOnlyQueryVpcGroup
 * @method self withisOnlyQueryVpcGroup(bool $isOnlyQueryVpcGroup)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getnetworkType
 * @method self withnetworkType(string $networkType)
 * @method string getgroupName
 * @method self withgroupName(string $groupName)
 * @method bool getfuzzyQuery
 * @method self withfuzzyQuery(bool $fuzzyQuery)
 * @method string gettags
 * @method self withtags(string $tags)
 * @method string getregionNo
 * @method self withregionNo(string $regionNo)
 * @method string getecsInstanceId
 * @method self withecsInstanceId(string $ecsInstanceId)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 */
class InnerGroupQuery extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getvpcInstanceId
 * @method self withvpcInstanceId(string $vpcInstanceId)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method string getgroupNo
 * @method self withgroupNo(string $groupNo)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getecsInstanceId
 * @method self withecsInstanceId(string $ecsInstanceId)
 */
class InnerGroupLeave extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getvpcInstanceId
 * @method self withvpcInstanceId(string $vpcInstanceId)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method string getecsInstanceId
 * @method self withecsInstanceId(string $ecsInstanceId)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getgroupNo
 * @method self withgroupNo(string $groupNo)
 */
class InnerGroupJoin extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getvpcInstanceId
 * @method self withvpcInstanceId(string $vpcInstanceId)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getnic
 * @method self withnic(string $nic)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method string getdirection
 * @method self withdirection(string $direction)
 * @method string getgroupNo
 * @method self withgroupNo(string $groupNo)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 */
class InnerGroupDetail extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getvpcInstanceId
 * @method self withvpcInstanceId(string $vpcInstanceId)
 * @method string gettags
 * @method self withtags(string $tags)
 * @method string getgroupName
 * @method self withgroupName(string $groupName)
 * @method string getgroupDesc
 * @method self withgroupDesc(string $groupDesc)
 */
class InnerGroupCreate extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getsourceGroupOwnerAliUid
 * @method self withsourceGroupOwnerAliUid(int $sourceGroupOwnerAliUid)
 * @method string getdestCidrIp
 * @method self withdestCidrIp(string $destCidrIp)
 * @method int getsourceGroupId
 * @method self withsourceGroupId(int $sourceGroupId)
 * @method string getpolicy
 * @method self withpolicy(string $policy)
 * @method string getvpcInstanceId
 * @method self withvpcInstanceId(string $vpcInstanceId)
 * @method Integer getlevel
 * @method self withlevel(Integer $level)
 * @method string getgroupNo
 * @method self withgroupNo(string $groupNo)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getsourceCidrIp
 * @method self withsourceCidrIp(string $sourceCidrIp)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getipProtocol
 * @method self withipProtocol(string $ipProtocol)
 * @method string getsourceGroupNo
 * @method self withsourceGroupNo(string $sourceGroupNo)
 * @method string getportRange
 * @method self withportRange(string $portRange)
 * @method string getnic
 * @method self withnic(string $nic)
 */
class InnerGroupAuthorize extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method string getbussinessCode
 * @method self withbussinessCode(string $bussinessCode)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getdomain
 * @method self withdomain(string $domain)
 * @method string getriskyUrl
 * @method self withriskyUrl(string $riskyUrl)
 * @method string getextras
 * @method self withextras(string $extras)
 * @method string getip
 * @method self withip(string $ip)
 */
class InnerEcsRiskControlQuery extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method string getreason
 * @method self withreason(string $reason)
 * @method string getcoordinate
 * @method self withcoordinate(string $coordinate)
 * @method string getpunishResult
 * @method self withpunishResult(string $punishResult)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getbussinessCode
 * @method self withbussinessCode(string $bussinessCode)
 * @method string getactionCode
 * @method self withactionCode(string $actionCode)
 * @method string getsignatureCode
 * @method self withsignatureCode(string $signatureCode)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class InnerEcsRiskControlPunishRemove extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getcoordinate
 * @method self withcoordinate(string $coordinate)
 * @method string getreason
 * @method self withreason(string $reason)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getbussinessCode
 * @method self withbussinessCode(string $bussinessCode)
 * @method string getactionCode
 * @method self withactionCode(string $actionCode)
 * @method string getsignatureCode
 * @method self withsignatureCode(string $signatureCode)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class InnerEcsRiskControlPunish extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 */
class InnerEcsRegionQueryAll extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getbid
 * @method self withbid(string $bid)
 */
class InnerEcsRegionQueryActive extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class InnerEcsQueryNcInfoByInstanceId extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getserialNumber
 * @method self withserialNumber(string $serialNumber)
 */
class InnerEcsQueryBySerialNumber extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method Integer getpageNo
 * @method self withpageNo(Integer $pageNo)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 * @method Integer getagentId
 * @method self withagentId(Integer $agentId)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method int getregionIndexId
 * @method self withregionIndexId(int $regionIndexId)
 * @method string getregionNo
 * @method self withregionNo(string $regionNo)
 * @method int getizId
 * @method self withizId(int $izId)
 * @method string getizNo
 * @method self withizNo(string $izNo)
 * @method int getzoneId
 * @method self withzoneId(int $zoneId)
 * @method string getzoneNo
 * @method self withzoneNo(string $zoneNo)
 * @method string getecsIds
 * @method self withecsIds(string $ecsIds)
 * @method string getinstanceIds
 * @method self withinstanceIds(string $instanceIds)
 * @method string gethostname
 * @method self withhostname(string $hostname)
 * @method string getstatus
 * @method self withstatus(string $status)
 * @method string getexclusionEcsIds
 * @method self withexclusionEcsIds(string $exclusionEcsIds)
 * @method string getbizStatus
 * @method self withbizStatus(string $bizStatus)
 * @method string getinternetIp
 * @method self withinternetIp(string $internetIp)
 * @method string getintranetIp
 * @method self withintranetIp(string $intranetIp)
 * @method string getsystemDeviceCategory
 * @method self withsystemDeviceCategory(string $systemDeviceCategory)
 * @method int getimageId
 * @method self withimageId(int $imageId)
 * @method string getimageType
 * @method self withimageType(string $imageType)
 * @method bool getnotSyncHouyi
 * @method self withnotSyncHouyi(bool $notSyncHouyi)
 * @method string getorder
 * @method self withorder(string $order)
 * @method bool getorderType
 * @method self withorderType(bool $orderType)
 * @method string getimgPc
 * @method self withimgPc(string $imgPc)
 * @method string getecsNetworkType
 * @method self withecsNetworkType(string $ecsNetworkType)
 * @method string getvpcInstanceId
 * @method self withvpcInstanceId(string $vpcInstanceId)
 * @method string getvswInstanceId
 * @method self withvswInstanceId(string $vswInstanceId)
 * @method Integer getcores
 * @method self withcores(Integer $cores)
 * @method Integer getmem
 * @method self withmem(Integer $mem)
 * @method Integer getstartOfInternetTx
 * @method self withstartOfInternetTx(Integer $startOfInternetTx)
 * @method Integer getendOfInternetTx
 * @method self withendOfInternetTx(Integer $endOfInternetTx)
 * @method bool getioOptimized
 * @method self withioOptimized(bool $ioOptimized)
 * @method string getinstanceTypeId
 * @method self withinstanceTypeId(string $instanceTypeId)
 */
class InnerEcsQueryByParam extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getip
 * @method self withip(string $ip)
 * @method string getauthedEcsIds
 * @method self withauthedEcsIds(string $authedEcsIds)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method string getregionNo
 * @method self withregionNo(string $regionNo)
 */
class InnerEcsQueryByIp extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getintranetIp
 * @method self withintranetIp(string $intranetIp)
 */
class InnerEcsQueryByIntranetIp extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getinternetIp
 * @method self withinternetIp(string $internetIp)
 */
class InnerEcsQueryByInternetIp extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class InnerEcsQueryByInstanceId extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getip
 * @method self withip(string $ip)
 */
class InnerEcsIsChannelMerchant extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getprivateIps
 * @method self withprivateIps(string $privateIps)
 * @method string gettags
 * @method self withtags(string $tags)
 * @method string getfuzzyInstanceName
 * @method self withfuzzyInstanceName(string $fuzzyInstanceName)
 * @method string getvswInstanceId
 * @method self withvswInstanceId(string $vswInstanceId)
 * @method string getstatus
 * @method self withstatus(string $status)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 * @method string getecsNetworkType
 * @method self withecsNetworkType(string $ecsNetworkType)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getinstanceTypeFamily
 * @method self withinstanceTypeFamily(string $instanceTypeFamily)
 * @method bool getisNeedDetail
 * @method self withisNeedDetail(bool $isNeedDetail)
 * @method string getinstanceIds
 * @method self withinstanceIds(string $instanceIds)
 * @method string getinstanceType
 * @method self withinstanceType(string $instanceType)
 * @method Integer getpageNo
 * @method self withpageNo(Integer $pageNo)
 * @method string getbizStatus
 * @method self withbizStatus(string $bizStatus)
 * @method bool getioOptimized
 * @method self withioOptimized(bool $ioOptimized)
 * @method bool getdeviceAvailable
 * @method self withdeviceAvailable(bool $deviceAvailable)
 * @method string getinnerIps
 * @method self withinnerIps(string $innerIps)
 * @method string getizNo
 * @method self withizNo(string $izNo)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method int getimageId
 * @method self withimageId(int $imageId)
 * @method string getgroupNo
 * @method self withgroupNo(string $groupNo)
 * @method string getvpcInstanceId
 * @method self withvpcInstanceId(string $vpcInstanceId)
 * @method string getpublicIps
 * @method self withpublicIps(string $publicIps)
 * @method string getbid
 * @method self withbid(string $bid)
 */
class InnerEcsInstanceQueryByParam extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class InnerEcsInstanceDetail extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method string getserialNumber
 * @method self withserialNumber(string $serialNumber)
 * @method string getinstanceId
 * @method self withinstanceId(string $instanceId)
 * @method string getip
 * @method self withip(string $ip)
 * @method string getintranetIp
 * @method self withintranetIp(string $intranetIp)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method string getinternetIp
 * @method self withinternetIp(string $internetIp)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getauthedEcsIds
 * @method self withauthedEcsIds(string $authedEcsIds)
 * @method int getid
 * @method self withid(int $id)
 */
class InnerEcsFindById extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method string getbid
 * @method self withbid(string $bid)
 */
class InnerEcsCountInRegion extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string gettoken
 * @method self withtoken(string $token)
 * @method string getproxyId
 * @method self withproxyId(string $proxyId)
 * @method string getchannel
 * @method self withchannel(string $channel)
 * @method string getoperator
 * @method self withoperator(string $operator)
 * @method Integer getpageNo
 * @method self withpageNo(Integer $pageNo)
 * @method Integer getpageSize
 * @method self withpageSize(Integer $pageSize)
 * @method string getstatus
 * @method self withstatus(string $status)
 * @method string getdiskName
 * @method self withdiskName(string $diskName)
 * @method string getexcludeStatus
 * @method self withexcludeStatus(string $excludeStatus)
 * @method string gettags
 * @method self withtags(string $tags)
 * @method string getcreateTimeTo
 * @method self withcreateTimeTo(string $createTimeTo)
 * @method string getprePayEcsInstanceIds
 * @method self withprePayEcsInstanceIds(string $prePayEcsInstanceIds)
 * @method bool getasync
 * @method self withasync(bool $async)
 * @method string getsnapshotNo
 * @method self withsnapshotNo(string $snapshotNo)
 * @method string getdiskCategory
 * @method self withdiskCategory(string $diskCategory)
 * @method string getinstanceIds
 * @method self withinstanceIds(string $instanceIds)
 * @method bool getenableAutomatedSnapshotPolicy
 * @method self withenableAutomatedSnapshotPolicy(bool $enableAutomatedSnapshotPolicy)
 * @method bool getactive
 * @method self withactive(bool $active)
 * @method bool getenableAutoSnapshot
 * @method self withenableAutoSnapshot(bool $enableAutoSnapshot)
 * @method string getautoSnapshotPolicyId
 * @method self withautoSnapshotPolicyId(string $autoSnapshotPolicyId)
 * @method bool getportable
 * @method self withportable(bool $portable)
 * @method string getcreateTimeFrom
 * @method self withcreateTimeFrom(string $createTimeFrom)
 * @method string getizNo
 * @method self withizNo(string $izNo)
 * @method string getecsInstanceId
 * @method self withecsInstanceId(string $ecsInstanceId)
 * @method string getdiskType
 * @method self withdiskType(string $diskType)
 * @method string getfuzzyDiskName
 * @method self withfuzzyDiskName(string $fuzzyDiskName)
 * @method int getaliUid
 * @method self withaliUid(int $aliUid)
 * @method bool getdeleteWithInstance
 * @method self withdeleteWithInstance(bool $deleteWithInstance)
 * @method string getpostPayEcsInstanceIds
 * @method self withpostPayEcsInstanceIds(string $postPayEcsInstanceIds)
 * @method bool getdeleteAutoSnapshot
 * @method self withdeleteAutoSnapshot(bool $deleteAutoSnapshot)
 * @method string getimageNo
 * @method self withimageNo(string $imageNo)
 * @method string getbid
 * @method self withbid(string $bid)
 */
class InnerDiskQueryByParam extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getExpectedReleaseTime
 * @method self withExpectedReleaseTime(string $expectedReleaseTime)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ReopenInstance extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryUserInfo extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getOffset
 * @method self withOffset(Integer $offset)
 * @method string getCreationStartTime
 * @method self withCreationStartTime(string $creationStartTime)
 * @method string getCreationEndTime
 * @method self withCreationEndTime(string $creationEndTime)
 * @method string getSnapshotNickName
 * @method self withSnapshotNickName(string $snapshotNickName)
 * @method string getSnapshotId
 * @method self withSnapshotId(string $snapshotId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryUsableSnapshots extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryNeedKeepUsing extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMarketImageCategory
 * @method self withMarketImageCategory(string $marketImageCategory)
 * @method string getInstanceType
 * @method self withInstanceType(string $instanceType)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method bool getSupportIoOptimized
 * @method self withSupportIoOptimized(bool $supportIoOptimized)
 * @method bool getExtra
 * @method self withExtra(bool $extra)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryMarketImages extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryMarketImageCategory extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getProductVersion
 * @method self withProductVersion(string $productVersion)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryImageIdByRegion extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getImageId
 * @method self withImageId(array $imageId)
 * @method string getChargeType
 * @method self withChargeType(string $chargeType)
 */
class QueryImageByImageId extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getSpotStrategy
 * @method self withSpotStrategy(string $spotStrategy)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryAvailableRegion extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getOrderId
 * @method self withOrderId(int $orderId)
 * @method string getRefundType
 * @method self withRefundType(string $refundType)
 * @method string getRefundExtendParams
 * @method self withRefundExtendParams(string $refundExtendParams)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getOrderIds
 * @method self withOrderIds(array $orderIds)
 * @method string getResourceType
 * @method self withResourceType(string $resourceType)
 */
class NotifyRefund extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getInstanceId
 * @method self withInstanceId(array $instanceId)
 */
class ListEcsInstanceOrderInfo extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ListBandwidthHistory extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ListAllIzMap extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getPlatform
 * @method self withPlatform(string $platform)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class KeepUsing extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class GetCommodity extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getCommodityCode
 * @method self withCommodityCode(string $commodityCode)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class GetActiveRegions extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method Integer getInternetMaxBandwidthOut
 * @method self withInternetMaxBandwidthOut(Integer $internetMaxBandwidthOut)
 * @method string getInternetChargeType
 * @method self withInternetChargeType(string $internetChargeType)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getAmount
 * @method self withAmount(Integer $amount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeEipPrice extends Rpc
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method array getInstanceId
 * @method self withInstanceId(array $instanceId)
 */
class CheckOrderNotPaid extends Rpc
{
    use R;
}
