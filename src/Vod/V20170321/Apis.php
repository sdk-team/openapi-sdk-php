<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method GetPersonalStorageList getPersonalStorageList($options = [])
 * @method AddStorage addStorage($options = [])
 * @method DeleteStorage deleteStorage($options = [])
 * @method SetDefaultPlayDomain setDefaultPlayDomain($options = [])
 * @method SetStorageACL setStorageACL($options = [])
 * @method GetStorageInfo getStorageInfo($options = [])
 * @method SetDefaultUploadStorage setDefaultUploadStorage($options = [])
 * @method ListTranscodeTask listTranscodeTask($options = [])
 * @method GetTranscodeTask getTranscodeTask($options = [])
 * @method GetStorageRegionList getStorageRegionList($options = [])
 * @method GetMessageCallbackEventList getMessageCallbackEventList($options = [])
 * @method GetStorageList getStorageList($options = [])
 * @method GetTotalStatis getTotalStatis($options = [])
 * @method GetAIService getAIService($options = [])
 * @method SetAIService setAIService($options = [])
 * @method GetOSSFlowStatis getOSSFlowStatis($options = [])
 * @method GetMTSStatis getMTSStatis($options = [])
 * @method GetAIStatis getAIStatis($options = [])
 * @method ListAIStatisType listAIStatisType($options = [])
 * @method GenerateDownloadSecretKey generateDownloadSecretKey($options = [])
 * @method GetCustomerConfig getCustomerConfig($options = [])
 * @method SetCustomerConfig setCustomerConfig($options = [])
 * @method DescribeVodTopDomainsByFlow describeVodTopDomainsByFlow($options = [])
 * @method DescribeVodDomainTopUrlVisit describeVodDomainTopUrlVisit($options = [])
 * @method DescribeVodDomainTopReferVisit describeVodDomainTopReferVisit($options = [])
 * @method DescribeVodDomainISPData describeVodDomainISPData($options = [])
 * @method DescribeVodDomainRegionData describeVodDomainRegionData($options = [])
 * @method GetUploadProgress getUploadProgress($options = [])
 * @method AssumeSlsRole assumeSlsRole($options = [])
 * @method AssumeOssRole assumeOssRole($options = [])
 * @method AssumeExperienceRole assumeExperienceRole($options = [])
 * @method GetURLUploadInfos getURLUploadInfos($options = [])
 * @method ReportUploadProgress reportUploadProgress($options = [])
 * @method UpdateTranscodeTemplateGroup updateTranscodeTemplateGroup($options = [])
 * @method AddTranscodeTemplateGroup addTranscodeTemplateGroup($options = [])
 * @method DeleteTranscodeTemplateGroup deleteTranscodeTemplateGroup($options = [])
 * @method DeleteTranscodeTemplates deleteTranscodeTemplates($options = [])
 * @method GetTranscodeTemplateGroup getTranscodeTemplateGroup($options = [])
 * @method SetDefaultTranscodeTemplateGroup setDefaultTranscodeTemplateGroup($options = [])
 * @method ListTranscodeTemplateGroup listTranscodeTemplateGroup($options = [])
 * @method GetAIMediaAuditJob getAIMediaAuditJob($options = [])
 * @method SubmitAIMediaAuditJob submitAIMediaAuditJob($options = [])
 * @method GetMediaAuditResult getMediaAuditResult($options = [])
 * @method GetMediaAuditResultDetail getMediaAuditResultDetail($options = [])
 * @method GetMediaAuditResultTimeline getMediaAuditResultTimeline($options = [])
 * @method AddAITemplate addAITemplate($options = [])
 * @method DeleteAITemplate deleteAITemplate($options = [])
 * @method UpdateAITemplate updateAITemplate($options = [])
 * @method GetAITemplate getAITemplate($options = [])
 * @method ListAITemplate listAITemplate($options = [])
 * @method GetDefaultAITemplate getDefaultAITemplate($options = [])
 * @method SetDefaultAITemplate setDefaultAITemplate($options = [])
 * @method DisplayAIAuditSwitch displayAIAuditSwitch($options = [])
 * @method DescribeVodDomainLog describeVodDomainLog($options = [])
 * @method DescribeVodDomainCname describeVodDomainCname($options = [])
 * @method DescribeVodDomainCertificateInfo describeVodDomainCertificateInfo($options = [])
 * @method DescribeVodDomainRealTimeBpsData describeVodDomainRealTimeBpsData($options = [])
 * @method DescribeVodUserUsageDetailDataExportTask describeVodUserUsageDetailDataExportTask($options = [])
 * @method CreateVodUserUsageDetailDataExportTask createVodUserUsageDetailDataExportTask($options = [])
 * @method DescribeVodDomainRealTimeQpsData describeVodDomainRealTimeQpsData($options = [])
 * @method DescribeVodDomainTrafficData describeVodDomainTrafficData($options = [])
 * @method DescribeVodDomainBpsData describeVodDomainBpsData($options = [])
 * @method DescribeVodDomainRealTimeSrcTrafficData describeVodDomainRealTimeSrcTrafficData($options = [])
 * @method DescribeVodDomainQpsData describeVodDomainQpsData($options = [])
 * @method DescribeVodDomainUsageData describeVodDomainUsageData($options = [])
 * @method DescribeVodDomainHitRateData describeVodDomainHitRateData($options = [])
 * @method DescribeVodDomainRealTimeTrafficData describeVodDomainRealTimeTrafficData($options = [])
 * @method DescribeVodDomainHttpCodeData describeVodDomainHttpCodeData($options = [])
 * @method DescribeVodDomainSrcTrafficData describeVodDomainSrcTrafficData($options = [])
 * @method DescribeVodDomainSrcBpsData describeVodDomainSrcBpsData($options = [])
 * @method DescribeVodDomainRealTimeSrcBpsData describeVodDomainRealTimeSrcBpsData($options = [])
 * @method DescribeVodDomainsUsageByDay describeVodDomainsUsageByDay($options = [])
 * @method DescribeVodDomainRealTimeByteHitRateData describeVodDomainRealTimeByteHitRateData($options = [])
 * @method DescribeVodDomainRealTimeReqHitRateData describeVodDomainRealTimeReqHitRateData($options = [])
 * @method DescribeVodDomainRealTimeHttpCodeData describeVodDomainRealTimeHttpCodeData($options = [])
 * @method DescribeVodUserBillPrediction describeVodUserBillPrediction($options = [])
 * @method DescribeUserVvTopByDay describeUserVvTopByDay($options = [])
 * @method DescribeUserVodStatus describeUserVodStatus($options = [])
 * @method DescribeUserAvgTimeByDay describeUserAvgTimeByDay($options = [])
 * @method DescribeVodCertificateDetail describeVodCertificateDetail($options = [])
 * @method DescribeVodCertificateList describeVodCertificateList($options = [])
 * @method BatchStopVodDomain batchStopVodDomain($options = [])
 * @method StopVodDomain stopVodDomain($options = [])
 * @method DeleteVodDomain deleteVodDomain($options = [])
 * @method SetVodDomainCertificate setVodDomainCertificate($options = [])
 * @method DeleteVodSpecificConfig deleteVodSpecificConfig($options = [])
 * @method BatchSetVodDomainConfigs batchSetVodDomainConfigs($options = [])
 * @method DescribeVodUserQuota describeVodUserQuota($options = [])
 * @method DescribeUserUvByDay describeUserUvByDay($options = [])
 * @method AddVodDomain addVodDomain($options = [])
 * @method DescribeVodService describeVodService($options = [])
 * @method DescribeVodUserResourcePackage describeVodUserResourcePackage($options = [])
 * @method DescribeVodRefreshQuota describeVodRefreshQuota($options = [])
 * @method DescribeVodRefreshTasks describeVodRefreshTasks($options = [])
 * @method DescribeVodDomainConfigs describeVodDomainConfigs($options = [])
 * @method DescribeUserAvgCountByDay describeUserAvgCountByDay($options = [])
 * @method DescribeVodUserDomains describeVodUserDomains($options = [])
 * @method DescribeUserVvByDay describeUserVvByDay($options = [])
 * @method StartVodDomain startVodDomain($options = [])
 * @method DescribeUserVvByVideoid describeUserVvByVideoid($options = [])
 * @method UpdateVodDomain updateVodDomain($options = [])
 * @method RefreshVodObjectCaches refreshVodObjectCaches($options = [])
 * @method DescribeUserTimeRangeByDay describeUserTimeRangeByDay($options = [])
 * @method PreloadVodObjectCaches preloadVodObjectCaches($options = [])
 * @method BatchStartVodDomain batchStartVodDomain($options = [])
 * @method DescribeVodDomainDetail describeVodDomainDetail($options = [])
 * @method AddMediaSequences addMediaSequences($options = [])
 * @method DeleteWorkflow deleteWorkflow($options = [])
 * @method GetWorkflow getWorkflow($options = [])
 * @method ListWorkflow listWorkflow($options = [])
 * @method DeleteVodTemplate deleteVodTemplate($options = [])
 * @method GetVodTemplate getVodTemplate($options = [])
 * @method ListVodTemplate listVodTemplate($options = [])
 * @method SetDefaultVodTemplate setDefaultVodTemplate($options = [])
 * @method UpdateWorkflow updateWorkflow($options = [])
 * @method UpdateVodTemplate updateVodTemplate($options = [])
 * @method AddWorkflow addWorkflow($options = [])
 * @method AddVodTemplate addVodTemplate($options = [])
 * @method CreateUploadAttachedMedia createUploadAttachedMedia($options = [])
 * @method RegisterMedia registerMedia($options = [])
 * @method DeleteWatermark deleteWatermark($options = [])
 * @method CreateMedia createMedia($options = [])
 * @method GetWatermark getWatermark($options = [])
 * @method SetDefaultWatermark setDefaultWatermark($options = [])
 * @method ListWatermark listWatermark($options = [])
 * @method UpdateWatermark updateWatermark($options = [])
 * @method AddWatermark addWatermark($options = [])
 * @method GetMediaDNAResult getMediaDNAResult($options = [])
 * @method DeleteMezzanines deleteMezzanines($options = [])
 * @method UpdateImageInfos updateImageInfos($options = [])
 * @method GetAuditResultDetail getAuditResultDetail($options = [])
 * @method GetVideoDNAResult getVideoDNAResult($options = [])
 * @method SubmitDNAInitializationJob submitDNAInitializationJob($options = [])
 * @method DeleteImage deleteImage($options = [])
 * @method ListAuditSecurityIp listAuditSecurityIp($options = [])
 * @method SetAuditSecurityIp setAuditSecurityIp($options = [])
 * @method ListTemplateGroup listTemplateGroup($options = [])
 * @method UploadMediaByURL uploadMediaByURL($options = [])
 * @method UpdateVideoInfos updateVideoInfos($options = [])
 * @method SearchMedia searchMedia($options = [])
 * @method GetVideoInfos getVideoInfos($options = [])
 * @method SubmitPreprocessJobs submitPreprocessJobs($options = [])
 * @method DescribeRefreshQuota describeRefreshQuota($options = [])
 * @method PushObjectCache pushObjectCache($options = [])
 * @method RefreshObjectCaches refreshObjectCaches($options = [])
 * @method DescribeRefreshTasks describeRefreshTasks($options = [])
 * @method DescribePlayVideoStatis describePlayVideoStatis($options = [])
 * @method DescribePlayUserTotal describePlayUserTotal($options = [])
 * @method DescribePlayUserAvg describePlayUserAvg($options = [])
 * @method DescribePlayTopVideos describePlayTopVideos($options = [])
 * @method ListSnapshots listSnapshots($options = [])
 * @method EditVideoIndexFile editVideoIndexFile($options = [])
 * @method SubmitTranscodeJobs submitTranscodeJobs($options = [])
 * @method ListLiveRecordVideo listLiveRecordVideo($options = [])
 * @method CreateAudit createAudit($options = [])
 * @method GetAuditResult getAuditResult($options = [])
 * @method GetAuditHistory getAuditHistory($options = [])
 * @method DescribeVideoStatisByDay describeVideoStatisByDay($options = [])
 * @method FaceRegistration faceRegistration($options = [])
 * @method ListAIJob listAIJob($options = [])
 * @method SubmitAIJob submitAIJob($options = [])
 * @method GetImageInfo getImageInfo($options = [])
 * @method SubmitAIVideoTagJob submitAIVideoTagJob($options = [])
 * @method SubmitAIVideoFaceRecogJob submitAIVideoFaceRecogJob($options = [])
 * @method ListAIVideoTagJob listAIVideoTagJob($options = [])
 * @method ListAIVideoFaceRecogJob listAIVideoFaceRecogJob($options = [])
 * @method OpenVodService openVodService($options = [])
 * @method SubmitAIVideoCategoryJob submitAIVideoCategoryJob($options = [])
 * @method ListAIVideoCategoryJob listAIVideoCategoryJob($options = [])
 * @method CreateOrder createOrder($options = [])
 * @method SubmitAIVideoTerrorismRecogJob submitAIVideoTerrorismRecogJob($options = [])
 * @method SubmitAIVideoCensorJob submitAIVideoCensorJob($options = [])
 * @method ListAIVideoTerrorismRecogJob listAIVideoTerrorismRecogJob($options = [])
 * @method ListAIVideoCensorJob listAIVideoCensorJob($options = [])
 * @method DeleteStream deleteStream($options = [])
 * @method SubmitSnapshotJob submitSnapshotJob($options = [])
 * @method UpdateMaterial updateMaterial($options = [])
 * @method UpdateEditingProject updateEditingProject($options = [])
 * @method SyncMaterial syncMaterial($options = [])
 * @method SetEditingProjectMaterials setEditingProjectMaterials($options = [])
 * @method SearchMaterial searchMaterial($options = [])
 * @method SearchEditingProject searchEditingProject($options = [])
 * @method RefreshUploadMaterialToken refreshUploadMaterialToken($options = [])
 * @method ProduceEditingProjectVideo produceEditingProjectVideo($options = [])
 * @method GetMaterial getMaterial($options = [])
 * @method GetEditingProjectMaterials getEditingProjectMaterials($options = [])
 * @method GetEditingProject getEditingProject($options = [])
 * @method DeleteMaterial deleteMaterial($options = [])
 * @method DeleteEditingProject deleteEditingProject($options = [])
 * @method CreateUploadMaterial createUploadMaterial($options = [])
 * @method AddEditingProject addEditingProject($options = [])
 * @method DescribeDomainFlowData describeDomainFlowData($options = [])
 * @method DescribeDomainBpsData describeDomainBpsData($options = [])
 * @method DescribeCdnDomainLogs describeCdnDomainLogs($options = [])
 * @method SubmitAIVideoSummaryJob submitAIVideoSummaryJob($options = [])
 * @method ListAIVideoSummaryJob listAIVideoSummaryJob($options = [])
 * @method SubmitAIASRJob submitAIASRJob($options = [])
 * @method ListAIASRJob listAIASRJob($options = [])
 * @method GetMezzanineInfo getMezzanineInfo($options = [])
 * @method SubmitAIVideoPornRecogJob submitAIVideoPornRecogJob($options = [])
 * @method ListAIVideoPornRecogJob listAIVideoPornRecogJob($options = [])
 * @method SubmitAIVideoCoverJob submitAIVideoCoverJob($options = [])
 * @method ListAIVideoCoverJob listAIVideoCoverJob($options = [])
 * @method UpdateCategory updateCategory($options = [])
 * @method GetCategories getCategories($options = [])
 * @method DeleteCategory deleteCategory($options = [])
 * @method AddCategory addCategory($options = [])
 * @method GetPlayInfo getPlayInfo($options = [])
 * @method GetVideoConfig getVideoConfig($options = [])
 * @method CreateUploadImage createUploadImage($options = [])
 * @method GetCDNStatisSum getCDNStatisSum($options = [])
 * @method GetOSSStatis getOSSStatis($options = [])
 * @method GetCDNStatis getCDNStatis($options = [])
 * @method SetMessageCallback setMessageCallback($options = [])
 * @method GetMessageCallback getMessageCallback($options = [])
 * @method UpdateVideoInfo updateVideoInfo($options = [])
 * @method GetVideoPlayAuth getVideoPlayAuth($options = [])
 * @method GetVideoList getVideoList($options = [])
 * @method GetVideoInfo getVideoInfo($options = [])
 * @method DeleteVideo deleteVideo($options = [])
 * @method GetVideoPlayInfo getVideoPlayInfo($options = [])
 * @method RefreshUploadVideo refreshUploadVideo($options = [])
 * @method CreateUploadVideo createUploadVideo($options = [])
 */
class V20170321
{
    use ApiResolverTrait;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 * @method string getStorageRegion
 * @method self withStorageRegion(string $storageRegion)
 * @method string getPrefix
 * @method self withPrefix(string $prefix)
 * @method string getMaxKeys
 * @method self withMaxKeys(string $maxKeys)
 */
class GetPersonalStorageList extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getStorageType
 * @method self withStorageType(string $storageType)
 * @method string getStorageRegion
 * @method self withStorageRegion(string $storageRegion)
 * @method string getStorageLocation
 * @method self withStorageLocation(string $storageLocation)
 * @method string getStorageACL
 * @method self withStorageACL(string $storageACL)
 */
class AddStorage extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 * @method string getStorageLocation
 * @method self withStorageLocation(string $storageLocation)
 */
class DeleteStorage extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class SetDefaultPlayDomain extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 * @method string getStorageLocation
 * @method self withStorageLocation(string $storageLocation)
 * @method string getStorageACL
 * @method self withStorageACL(string $storageACL)
 */
class SetStorageACL extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 * @method string getStorageLocation
 * @method self withStorageLocation(string $storageLocation)
 */
class GetStorageInfo extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 * @method string getStorageLocation
 * @method self withStorageLocation(string $storageLocation)
 */
class SetDefaultUploadStorage extends Roa
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
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 */
class ListTranscodeTask extends Roa
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
 * @method string getTranscodeTaskId
 * @method self withTranscodeTaskId(string $transcodeTaskId)
 */
class GetTranscodeTask extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 */
class GetStorageRegionList extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 */
class GetMessageCallbackEventList extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getStorageRegion
 * @method self withStorageRegion(string $storageRegion)
 * @method string getStorageType
 * @method self withStorageType(string $storageType)
 * @method string getStorageStatus
 * @method self withStorageStatus(string $storageStatus)
 * @method string getDivision
 * @method self withDivision(string $division)
 */
class GetStorageList extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class GetTotalStatis extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getTypes
 * @method self withTypes(string $types)
 */
class GetAIService extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getOperation
 * @method self withOperation(string $operation)
 * @method string getTypes
 * @method self withTypes(string $types)
 */
class SetAIService extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method string getStartTimeUTC
 * @method self withStartTimeUTC(string $startTimeUTC)
 * @method string getEndTimeUTC
 * @method self withEndTimeUTC(string $endTimeUTC)
 * @method string getLevel
 * @method self withLevel(string $level)
 * @method string getDivision
 * @method self withDivision(string $division)
 */
class GetOSSFlowStatis extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method string getStartTimeUTC
 * @method self withStartTimeUTC(string $startTimeUTC)
 * @method string getEndTimeUTC
 * @method self withEndTimeUTC(string $endTimeUTC)
 * @method string getLevel
 * @method self withLevel(string $level)
 * @method string getDivision
 * @method self withDivision(string $division)
 */
class GetMTSStatis extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method string getStartTimeUTC
 * @method self withStartTimeUTC(string $startTimeUTC)
 * @method string getEndTimeUTC
 * @method self withEndTimeUTC(string $endTimeUTC)
 * @method string getLevel
 * @method self withLevel(string $level)
 * @method string getType
 * @method self withType(string $type)
 * @method string getDivision
 * @method self withDivision(string $division)
 */
class GetAIStatis extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ListAIStatisType extends Roa
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
 * @method string getAppIdentification
 * @method self withAppIdentification(string $appIdentification)
 * @method string getAppDecryptKey
 * @method self withAppDecryptKey(string $appDecryptKey)
 */
class GenerateDownloadSecretKey extends Roa
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
 */
class GetCustomerConfig extends Roa
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
 * @method string getDownloadSwitch
 * @method self withDownloadSwitch(string $downloadSwitch)
 * @method string getMetricConfig
 * @method self withMetricConfig(string $metricConfig)
 * @method string getAIConfig
 * @method self withAIConfig(string $aIConfig)
 */
class SetCustomerConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getProduct
 * @method self withProduct(string $product)
 * @method int getLimit
 * @method self withLimit(int $limit)
 */
class DescribeVodTopDomainsByFlow extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 * @method string getPercent
 * @method self withPercent(string $percent)
 */
class DescribeVodDomainTopUrlVisit extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 * @method string getPercent
 * @method self withPercent(string $percent)
 */
class DescribeVodDomainTopReferVisit extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeVodDomainISPData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeVodDomainRegionData extends Roa
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
 * @method string getSource
 * @method self withSource(string $source)
 * @method string getClientId
 * @method self withClientId(string $clientId)
 * @method string getBusinessType
 * @method self withBusinessType(string $businessType)
 * @method string getTerminalType
 * @method self withTerminalType(string $terminalType)
 * @method string getDeviceModel
 * @method self withDeviceModel(string $deviceModel)
 * @method string getAppVersion
 * @method self withAppVersion(string $appVersion)
 * @method int getAuthTimestamp
 * @method self withAuthTimestamp(int $authTimestamp)
 * @method string getAuthInfo
 * @method self withAuthInfo(string $authInfo)
 * @method string getUploadInfoList
 * @method self withUploadInfoList(string $uploadInfoList)
 * @method int getUserId
 * @method self withUserId(int $userId)
 * @method string getUploadAddress
 * @method self withUploadAddress(string $uploadAddress)
 */
class GetUploadProgress extends Roa
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
 * @method string getClientId
 * @method self withClientId(string $clientId)
 * @method string getBusinessType
 * @method self withBusinessType(string $businessType)
 * @method string getTerminalType
 * @method self withTerminalType(string $terminalType)
 * @method string getDeviceModel
 * @method self withDeviceModel(string $deviceModel)
 * @method string getAppVersion
 * @method self withAppVersion(string $appVersion)
 * @method int getAuthTimestamp
 * @method self withAuthTimestamp(int $authTimestamp)
 * @method string getAuthInfo
 * @method self withAuthInfo(string $authInfo)
 */
class AssumeSlsRole extends Roa
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
 * @method string getSource
 * @method self withSource(string $source)
 * @method string getClientId
 * @method self withClientId(string $clientId)
 * @method string getBusinessType
 * @method self withBusinessType(string $businessType)
 * @method string getTerminalType
 * @method self withTerminalType(string $terminalType)
 * @method string getDeviceModel
 * @method self withDeviceModel(string $deviceModel)
 * @method string getAppVersion
 * @method self withAppVersion(string $appVersion)
 * @method int getAuthTimestamp
 * @method self withAuthTimestamp(int $authTimestamp)
 * @method string getAuthInfo
 * @method self withAuthInfo(string $authInfo)
 * @method string getPrefix
 * @method self withPrefix(string $prefix)
 */
class AssumeOssRole extends Roa
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
 * @method string getData
 * @method self withData(string $data)
 * @method string getCookie
 * @method self withCookie(string $cookie)
 */
class AssumeExperienceRole extends Roa
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
 * @method string getJobIds
 * @method self withJobIds(string $jobIds)
 * @method string getUploadURLs
 * @method self withUploadURLs(string $uploadURLs)
 */
class GetURLUploadInfos extends Roa
{
    use R;
}

/**
 * @method string getSource
 * @method self withSource(string $source)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getClientId
 * @method self withClientId(string $clientId)
 * @method string getBusinessType
 * @method self withBusinessType(string $businessType)
 * @method string getTerminalType
 * @method self withTerminalType(string $terminalType)
 * @method string getDeviceModel
 * @method self withDeviceModel(string $deviceModel)
 * @method string getAppVersion
 * @method self withAppVersion(string $appVersion)
 * @method int getAuthTimestamp
 * @method self withAuthTimestamp(int $authTimestamp)
 * @method string getAuthInfo
 * @method self withAuthInfo(string $authInfo)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method int getFileSize
 * @method self withFileSize(int $fileSize)
 * @method string getFileCreateTime
 * @method self withFileCreateTime(string $fileCreateTime)
 * @method string getFileHash
 * @method self withFileHash(string $fileHash)
 * @method float getUploadRatio
 * @method self withUploadRatio(float $uploadRatio)
 * @method string getUploadId
 * @method self withUploadId(string $uploadId)
 * @method Integer getDonePartsCount
 * @method self withDonePartsCount(Integer $donePartsCount)
 * @method Integer getTotalPart
 * @method self withTotalPart(Integer $totalPart)
 * @method int getPartSize
 * @method self withPartSize(int $partSize)
 * @method string getUploadPoint
 * @method self withUploadPoint(string $uploadPoint)
 * @method int getUserId
 * @method self withUserId(int $userId)
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 * @method string getUploadAddress
 * @method self withUploadAddress(string $uploadAddress)
 */
class ReportUploadProgress extends Roa
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
 * @method string getName
 * @method self withName(string $name)
 * @method string getTranscodeTemplateList
 * @method self withTranscodeTemplateList(string $transcodeTemplateList)
 * @method string getLocked
 * @method self withLocked(string $locked)
 * @method string getTranscodeTemplateGroupId
 * @method self withTranscodeTemplateGroupId(string $transcodeTemplateGroupId)
 */
class UpdateTranscodeTemplateGroup extends Roa
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
 * @method string getName
 * @method self withName(string $name)
 * @method string getTranscodeTemplateList
 * @method self withTranscodeTemplateList(string $transcodeTemplateList)
 * @method string getTranscodeTemplateGroupId
 * @method self withTranscodeTemplateGroupId(string $transcodeTemplateGroupId)
 */
class AddTranscodeTemplateGroup extends Roa
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
 * @method string getTranscodeTemplateGroupId
 * @method self withTranscodeTemplateGroupId(string $transcodeTemplateGroupId)
 * @method string getTranscodeTemplateIdList
 * @method self withTranscodeTemplateIdList(string $transcodeTemplateIdList)
 * @method string getForceDelGroup
 * @method self withForceDelGroup(string $forceDelGroup)
 */
class DeleteTranscodeTemplateGroup extends Roa
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
 * @method string getTranscodeTemplateGroupId
 * @method self withTranscodeTemplateGroupId(string $transcodeTemplateGroupId)
 * @method string getTranscodeTemplateIdList
 * @method self withTranscodeTemplateIdList(string $transcodeTemplateIdList)
 */
class DeleteTranscodeTemplates extends Roa
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
 * @method string getTranscodeTemplateGroupId
 * @method self withTranscodeTemplateGroupId(string $transcodeTemplateGroupId)
 */
class GetTranscodeTemplateGroup extends Roa
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
 * @method string getTranscodeTemplateGroupId
 * @method self withTranscodeTemplateGroupId(string $transcodeTemplateGroupId)
 */
class SetDefaultTranscodeTemplateGroup extends Roa
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
 */
class ListTranscodeTemplateGroup extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class GetAIMediaAuditJob extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 */
class SubmitAIMediaAuditJob extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 */
class GetMediaAuditResult extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 */
class GetMediaAuditResultDetail extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 */
class GetMediaAuditResultTimeline extends Roa
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
 * @method string getTemplateName
 * @method self withTemplateName(string $templateName)
 * @method string getTemplateType
 * @method self withTemplateType(string $templateType)
 * @method string getTemplateConfig
 * @method self withTemplateConfig(string $templateConfig)
 */
class AddAITemplate extends Roa
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
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 */
class DeleteAITemplate extends Roa
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
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 * @method string getTemplateName
 * @method self withTemplateName(string $templateName)
 * @method string getTemplateConfig
 * @method self withTemplateConfig(string $templateConfig)
 */
class UpdateAITemplate extends Roa
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
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 */
class GetAITemplate extends Roa
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
 * @method string getTemplateType
 * @method self withTemplateType(string $templateType)
 */
class ListAITemplate extends Roa
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
 * @method string getTemplateType
 * @method self withTemplateType(string $templateType)
 */
class GetDefaultAITemplate extends Roa
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
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 */
class SetDefaultAITemplate extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 */
class DisplayAIAuditSwitch extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeVodDomainLog extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeVodDomainCname extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeVodDomainCertificateInfo extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeVodDomainRealTimeBpsData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getPageNumber
 * @method self withPageNumber(string $pageNumber)
 */
class DescribeVodUserUsageDetailDataExportTask extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getGroup
 * @method self withGroup(string $group)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 * @method string getDimension
 * @method self withDimension(string $dimension)
 * @method string getTaskName
 * @method self withTaskName(string $taskName)
 */
class CreateVodUserUsageDetailDataExportTask extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeVodDomainRealTimeQpsData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeVodDomainTrafficData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeVodDomainBpsData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeVodDomainRealTimeSrcTrafficData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeVodDomainQpsData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getType
 * @method self withType(string $type)
 * @method string getArea
 * @method self withArea(string $area)
 * @method string getField
 * @method self withField(string $field)
 */
class DescribeVodDomainUsageData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeVodDomainHitRateData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeVodDomainRealTimeTrafficData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 */
class DescribeVodDomainHttpCodeData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 */
class DescribeVodDomainSrcTrafficData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getInterval
 * @method self withInterval(string $interval)
 */
class DescribeVodDomainSrcBpsData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeVodDomainRealTimeSrcBpsData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeVodDomainsUsageByDay extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeVodDomainRealTimeByteHitRateData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeVodDomainRealTimeReqHitRateData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 */
class DescribeVodDomainRealTimeHttpCodeData extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getDimension
 * @method self withDimension(string $dimension)
 * @method string getArea
 * @method self withArea(string $area)
 */
class DescribeVodUserBillPrediction extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getVideoType
 * @method self withVideoType(string $videoType)
 * @method string getBizdate
 * @method self withBizdate(string $bizdate)
 */
class DescribeUserVvTopByDay extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeUserVodStatus extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getVideoType
 * @method self withVideoType(string $videoType)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeUserAvgTimeByDay extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getCertName
 * @method self withCertName(string $certName)
 */
class DescribeVodCertificateDetail extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeVodCertificateList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 */
class BatchStopVodDomain extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class StopVodDomain extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class DeleteVodDomain extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getCertName
 * @method self withCertName(string $certName)
 * @method string getSSLProtocol
 * @method self withSSLProtocol(string $sSLProtocol)
 * @method string getSSLPub
 * @method self withSSLPub(string $sSLPub)
 * @method string getSSLPri
 * @method self withSSLPri(string $sSLPri)
 * @method string getRegion
 * @method self withRegion(string $region)
 */
class SetVodDomainCertificate extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getConfigId
 * @method self withConfigId(string $configId)
 */
class DeleteVodSpecificConfig extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 * @method string getFunctions
 * @method self withFunctions(string $functions)
 */
class BatchSetVodDomainConfigs extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeVodUserQuota extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getVideoType
 * @method self withVideoType(string $videoType)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeUserUvByDay extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getSources
 * @method self withSources(string $sources)
 * @method string getCheckUrl
 * @method self withCheckUrl(string $checkUrl)
 * @method string getScope
 * @method self withScope(string $scope)
 */
class AddVodDomain extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeVodService extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeVodUserResourcePackage extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 */
class DescribeVodRefreshQuota extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getObjectPath
 * @method self withObjectPath(string $objectPath)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getObjectType
 * @method self withObjectType(string $objectType)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 */
class DescribeVodRefreshTasks extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getFunctionNames
 * @method self withFunctionNames(string $functionNames)
 */
class DescribeVodDomainConfigs extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getVideoType
 * @method self withVideoType(string $videoType)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeUserAvgCountByDay extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getDomainStatus
 * @method self withDomainStatus(string $domainStatus)
 * @method string getDomainSearchType
 * @method self withDomainSearchType(string $domainSearchType)
 * @method string getCdnType
 * @method self withCdnType(string $cdnType)
 * @method bool getCheckDomainShow
 * @method self withCheckDomainShow(bool $checkDomainShow)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getFuncId
 * @method self withFuncId(string $funcId)
 * @method string getFuncFilter
 * @method self withFuncFilter(string $funcFilter)
 */
class DescribeVodUserDomains extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getVideoType
 * @method self withVideoType(string $videoType)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeUserVvByDay extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class StartVodDomain extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getVideoid
 * @method self withVideoid(string $videoid)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeUserVvByVideoid extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getSources
 * @method self withSources(string $sources)
 * @method string getResourceGroupId
 * @method self withResourceGroupId(string $resourceGroupId)
 * @method string getTopLevelDomain
 * @method self withTopLevelDomain(string $topLevelDomain)
 */
class UpdateVodDomain extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getObjectPath
 * @method self withObjectPath(string $objectPath)
 * @method string getObjectType
 * @method self withObjectType(string $objectType)
 */
class RefreshVodObjectCaches extends Roa
{
    use R;
}

/**
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getVideoType
 * @method self withVideoType(string $videoType)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeUserTimeRangeByDay extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getObjectPath
 * @method self withObjectPath(string $objectPath)
 */
class PreloadVodObjectCaches extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainNames
 * @method self withDomainNames(string $domainNames)
 */
class BatchStartVodDomain extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeVodDomainDetail extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getMediaURL
 * @method self withMediaURL(string $mediaURL)
 * @method string getMediaType
 * @method self withMediaType(string $mediaType)
 * @method string getMediaSequences
 * @method self withMediaSequences(string $mediaSequences)
 */
class AddMediaSequences extends Roa
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
 * @method string getWorkflowId
 * @method self withWorkflowId(string $workflowId)
 */
class DeleteWorkflow extends Roa
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
 * @method string getWorkflowId
 * @method self withWorkflowId(string $workflowId)
 */
class GetWorkflow extends Roa
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
 */
class ListWorkflow extends Roa
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
 * @method string getVodTemplateId
 * @method self withVodTemplateId(string $vodTemplateId)
 */
class DeleteVodTemplate extends Roa
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
 * @method string getVodTemplateId
 * @method self withVodTemplateId(string $vodTemplateId)
 */
class GetVodTemplate extends Roa
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
 * @method string getTemplateType
 * @method self withTemplateType(string $templateType)
 */
class ListVodTemplate extends Roa
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
 * @method string getVodTemplateId
 * @method self withVodTemplateId(string $vodTemplateId)
 */
class SetDefaultVodTemplate extends Roa
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
 * @method string getWorkflowId
 * @method self withWorkflowId(string $workflowId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getActionList
 * @method self withActionList(string $actionList)
 */
class UpdateWorkflow extends Roa
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
 * @method string getVodTemplateId
 * @method self withVodTemplateId(string $vodTemplateId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getTemplateConfig
 * @method self withTemplateConfig(string $templateConfig)
 */
class UpdateVodTemplate extends Roa
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
 * @method string getName
 * @method self withName(string $name)
 * @method string getActionList
 * @method self withActionList(string $actionList)
 */
class AddWorkflow extends Roa
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
 * @method string getName
 * @method self withName(string $name)
 * @method string getTemplateType
 * @method self withTemplateType(string $templateType)
 * @method string getSubTemplateType
 * @method self withSubTemplateType(string $subTemplateType)
 * @method string getTemplateConfig
 * @method self withTemplateConfig(string $templateConfig)
 */
class AddVodTemplate extends Roa
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
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getBusinessType
 * @method self withBusinessType(string $businessType)
 * @method string getMediaExt
 * @method self withMediaExt(string $mediaExt)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method string getFileSize
 * @method self withFileSize(string $fileSize)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method int getCateId
 * @method self withCateId(int $cateId)
 * @method string getStorageLocation
 * @method self withStorageLocation(string $storageLocation)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class CreateUploadAttachedMedia extends Roa
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
 * @method string getRegisterMetadatas
 * @method self withRegisterMetadatas(string $registerMetadatas)
 * @method string getTemplateGroupId
 * @method self withTemplateGroupId(string $templateGroupId)
 * @method string getWorkFlowId
 * @method self withWorkFlowId(string $workFlowId)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class RegisterMedia extends Roa
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
 * @method string getWatermarkId
 * @method self withWatermarkId(string $watermarkId)
 */
class DeleteWatermark extends Roa
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
 * @method string getMediaMetaDatas
 * @method self withMediaMetaDatas(string $mediaMetaDatas)
 * @method string getTemplateGroupId
 * @method self withTemplateGroupId(string $templateGroupId)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class CreateMedia extends Roa
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
 * @method string getWatermarkId
 * @method self withWatermarkId(string $watermarkId)
 */
class GetWatermark extends Roa
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
 * @method string getWatermarkId
 * @method self withWatermarkId(string $watermarkId)
 */
class SetDefaultWatermark extends Roa
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
 */
class ListWatermark extends Roa
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
 * @method string getName
 * @method self withName(string $name)
 * @method string getWatermarkId
 * @method self withWatermarkId(string $watermarkId)
 * @method string getWatermarkConfig
 * @method self withWatermarkConfig(string $watermarkConfig)
 */
class UpdateWatermark extends Roa
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
 * @method string getType
 * @method self withType(string $type)
 * @method string getName
 * @method self withName(string $name)
 * @method string getWatermarkConfig
 * @method self withWatermarkConfig(string $watermarkConfig)
 * @method string getFileUrl
 * @method self withFileUrl(string $fileUrl)
 */
class AddWatermark extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 */
class GetMediaDNAResult extends Roa
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
 * @method string getVideoIds
 * @method self withVideoIds(string $videoIds)
 * @method bool getForce
 * @method self withForce(bool $force)
 */
class DeleteMezzanines extends Roa
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
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 * @method string getUpdateContent
 * @method self withUpdateContent(string $updateContent)
 */
class UpdateImageInfos extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 */
class GetAuditResultDetail extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 */
class GetVideoDNAResult extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getType
 * @method self withType(string $type)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getRecentNumber
 * @method self withRecentNumber(Integer $recentNumber)
 */
class SubmitDNAInitializationJob extends Roa
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
 * @method string getDeleteImageType
 * @method self withDeleteImageType(string $deleteImageType)
 * @method string getImageURLs
 * @method self withImageURLs(string $imageURLs)
 * @method string getImageIds
 * @method self withImageIds(string $imageIds)
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 * @method string getImageType
 * @method self withImageType(string $imageType)
 */
class DeleteImage extends Roa
{
    use R;
}

/**
 * @method string getSecurityGroupName
 * @method self withSecurityGroupName(string $securityGroupName)
 */
class ListAuditSecurityIp extends Roa
{
    use R;
}

/**
 * @method string getSecurityGroupName
 * @method self withSecurityGroupName(string $securityGroupName)
 * @method string getIps
 * @method self withIps(string $ips)
 * @method string getOperateMode
 * @method self withOperateMode(string $operateMode)
 */
class SetAuditSecurityIp extends Roa
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
 * @method bool getIsContainsTemplates
 * @method self withIsContainsTemplates(bool $isContainsTemplates)
 */
class ListTemplateGroup extends Roa
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
 * @method string getUploadURLs
 * @method self withUploadURLs(string $uploadURLs)
 * @method string getTemplateGroupId
 * @method self withTemplateGroupId(string $templateGroupId)
 * @method string getStorageLocation
 * @method self withStorageLocation(string $storageLocation)
 * @method string getUploadMetadatas
 * @method self withUploadMetadatas(string $uploadMetadatas)
 * @method string getPriority
 * @method self withPriority(string $priority)
 * @method string getMessageCallback
 * @method self withMessageCallback(string $messageCallback)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class UploadMediaByURL extends Roa
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
 * @method string getUpdateContent
 * @method self withUpdateContent(string $updateContent)
 */
class UpdateVideoInfos extends Roa
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
 * @method string getSearchType
 * @method self withSearchType(string $searchType)
 * @method string getFields
 * @method self withFields(string $fields)
 * @method string getMatch
 * @method self withMatch(string $match)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getScrollToken
 * @method self withScrollToken(string $scrollToken)
 * @method string getSessionId
 * @method self withSessionId(string $sessionId)
 */
class SearchMedia extends Roa
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
 * @method string getVideoIds
 * @method self withVideoIds(string $videoIds)
 */
class GetVideoInfos extends Roa
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
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 * @method string getPreprocessType
 * @method self withPreprocessType(string $preprocessType)
 */
class SubmitPreprocessJobs extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DescribeRefreshQuota extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getObjectPath
 * @method self withObjectPath(string $objectPath)
 */
class PushObjectCache extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getObjectPath
 * @method self withObjectPath(string $objectPath)
 * @method string getObjectType
 * @method self withObjectType(string $objectType)
 */
class RefreshObjectCaches extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method string getObjectPath
 * @method self withObjectPath(string $objectPath)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getObjectType
 * @method self withObjectType(string $objectType)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class DescribeRefreshTasks extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 */
class DescribePlayVideoStatis extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribePlayUserTotal extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribePlayUserAvg extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getBizDate
 * @method self withBizDate(string $bizDate)
 * @method int getPageNo
 * @method self withPageNo(int $pageNo)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class DescribePlayTopVideos extends Roa
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
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 * @method string getSnapshotType
 * @method self withSnapshotType(string $snapshotType)
 * @method string getAuthTimeout
 * @method self withAuthTimeout(string $authTimeout)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 * @method string getPageNo
 * @method self withPageNo(string $pageNo)
 */
class ListSnapshots extends Roa
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
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 * @method string getEditType
 * @method self withEditType(string $editType)
 * @method string getEditConfig
 * @method self withEditConfig(string $editConfig)
 */
class EditVideoIndexFile extends Roa
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
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 * @method string getTemplateGroupId
 * @method self withTemplateGroupId(string $templateGroupId)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getEncryptConfig
 * @method self withEncryptConfig(string $encryptConfig)
 * @method string getOverrideParams
 * @method self withOverrideParams(string $overrideParams)
 * @method string getPriority
 * @method self withPriority(string $priority)
 */
class SubmitTranscodeJobs extends Roa
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
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getQueryType
 * @method self withQueryType(string $queryType)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class ListLiveRecordVideo extends Roa
{
    use R;
}

/**
 * @method string getAuditContent
 * @method self withAuditContent(string $auditContent)
 */
class CreateAudit extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getMediaType
 * @method self withMediaType(string $mediaType)
 */
class GetAuditResult extends Roa
{
    use R;
}

/**
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 * @method int getPageNo
 * @method self withPageNo(int $pageNo)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 */
class GetAuditHistory extends Roa
{
    use R;
}

class DescribeVideoStatisByDay extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getPersonName
 * @method self withPersonName(string $personName)
 * @method string getPersonId
 * @method self withPersonId(string $personId)
 * @method string getPersonLibrary
 * @method self withPersonLibrary(string $personLibrary)
 * @method string getCategory
 * @method self withCategory(string $category)
 * @method string getImageIds
 * @method self withImageIds(string $imageIds)
 */
class FaceRegistration extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getJobIds
 * @method self withJobIds(string $jobIds)
 */
class ListAIJob extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getTypes
 * @method self withTypes(string $types)
 * @method string getConfig
 * @method self withConfig(string $config)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class SubmitAIJob extends Roa
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
 * @method int getAuthTimeout
 * @method self withAuthTimeout(int $authTimeout)
 */
class GetImageInfo extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getAIVideoTagConfig
 * @method self withAIVideoTagConfig(string $aIVideoTagConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class SubmitAIVideoTagJob extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getAIVideoFaceRecogConfig
 * @method self withAIVideoFaceRecogConfig(string $aIVideoFaceRecogConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class SubmitAIVideoFaceRecogJob extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getAIVideoTagJobIds
 * @method self withAIVideoTagJobIds(string $aIVideoTagJobIds)
 */
class ListAIVideoTagJob extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getAIVideoFaceRecogJobIds
 * @method self withAIVideoFaceRecogJobIds(string $aIVideoFaceRecogJobIds)
 */
class ListAIVideoFaceRecogJob extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class OpenVodService extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getAIVideoCategoryConfig
 * @method self withAIVideoCategoryConfig(string $aIVideoCategoryConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class SubmitAIVideoCategoryJob extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getAIVideoCategoryJobIds
 * @method self withAIVideoCategoryJobIds(string $aIVideoCategoryJobIds)
 */
class ListAIVideoCategoryJob extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateOrder extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getAIVideoTerrorismRecogConfig
 * @method self withAIVideoTerrorismRecogConfig(string $aIVideoTerrorismRecogConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class SubmitAIVideoTerrorismRecogJob extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getAIVideoCensorConfig
 * @method self withAIVideoCensorConfig(string $aIVideoCensorConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class SubmitAIVideoCensorJob extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getAIVideoTerrorismRecogJobIds
 * @method self withAIVideoTerrorismRecogJobIds(string $aIVideoTerrorismRecogJobIds)
 */
class ListAIVideoTerrorismRecogJob extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getAIVideoCensorJobIds
 * @method self withAIVideoCensorJobIds(string $aIVideoCensorJobIds)
 */
class ListAIVideoCensorJob extends Roa
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
 * @method string getJobIds
 * @method self withJobIds(string $jobIds)
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 */
class DeleteStream extends Roa
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
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 * @method int getSpecifiedOffsetTime
 * @method self withSpecifiedOffsetTime(int $specifiedOffsetTime)
 * @method string getWidth
 * @method self withWidth(string $width)
 * @method string getHeight
 * @method self withHeight(string $height)
 * @method int getCount
 * @method self withCount(int $count)
 * @method int getInterval
 * @method self withInterval(int $interval)
 * @method string getSpriteSnapshotConfig
 * @method self withSpriteSnapshotConfig(string $spriteSnapshotConfig)
 * @method string getSnapshotTemplateId
 * @method self withSnapshotTemplateId(string $snapshotTemplateId)
 */
class SubmitSnapshotJob extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getMaterialId
 * @method self withMaterialId(string $materialId)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getCoverURL
 * @method self withCoverURL(string $coverURL)
 * @method Integer getCateId
 * @method self withCateId(Integer $cateId)
 */
class UpdateMaterial extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getProjectId
 * @method self withProjectId(string $projectId)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getTimeline
 * @method self withTimeline(string $timeline)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getCoverURL
 * @method self withCoverURL(string $coverURL)
 */
class UpdateEditingProject extends Roa
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
 * @method string getVideoIds
 * @method self withVideoIds(string $videoIds)
 */
class SyncMaterial extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getProjectId
 * @method self withProjectId(string $projectId)
 * @method string getMaterialIds
 * @method self withMaterialIds(string $materialIds)
 */
class SetEditingProjectMaterials extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method Integer getCateId
 * @method self withCateId(Integer $cateId)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 * @method string getType
 * @method self withType(string $type)
 * @method string getSource
 * @method self withSource(string $source)
 * @method string getTitle
 * @method self withTitle(string $title)
 */
class SearchMaterial extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 * @method string getTitle
 * @method self withTitle(string $title)
 */
class SearchEditingProject extends Roa
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
 * @method string getMaterialId
 * @method self withMaterialId(string $materialId)
 */
class RefreshUploadMaterialToken extends Roa
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
 * @method string getProjectId
 * @method self withProjectId(string $projectId)
 * @method string getTimeline
 * @method self withTimeline(string $timeline)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getCoverURL
 * @method self withCoverURL(string $coverURL)
 * @method string getMediaMetadata
 * @method self withMediaMetadata(string $mediaMetadata)
 * @method string getProduceConfig
 * @method self withProduceConfig(string $produceConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class ProduceEditingProjectVideo extends Roa
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
 * @method string getMaterialId
 * @method self withMaterialId(string $materialId)
 */
class GetMaterial extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getProjectId
 * @method self withProjectId(string $projectId)
 * @method string getType
 * @method self withType(string $type)
 */
class GetEditingProjectMaterials extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getProjectId
 * @method self withProjectId(string $projectId)
 */
class GetEditingProject extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getMaterialIds
 * @method self withMaterialIds(string $materialIds)
 */
class DeleteMaterial extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getProjectIds
 * @method self withProjectIds(string $projectIds)
 */
class DeleteEditingProject extends Roa
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
 * @method string getCoverURL
 * @method self withCoverURL(string $coverURL)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method int getFileSize
 * @method self withFileSize(int $fileSize)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method Integer getCateId
 * @method self withCateId(Integer $cateId)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class CreateUploadMaterial extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getTimeline
 * @method self withTimeline(string $timeline)
 * @method string getCoverURL
 * @method self withCoverURL(string $coverURL)
 */
class AddEditingProject extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getTimeMerge
 * @method self withTimeMerge(string $timeMerge)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 */
class DescribeDomainFlowData extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getTimeMerge
 * @method self withTimeMerge(string $timeMerge)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getLocationNameEn
 * @method self withLocationNameEn(string $locationNameEn)
 * @method string getIspNameEn
 * @method self withIspNameEn(string $ispNameEn)
 */
class DescribeDomainBpsData extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLogDay
 * @method self withLogDay(string $logDay)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNo
 * @method self withPageNo(int $pageNo)
 */
class DescribeCdnDomainLogs extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getAIVideoSummaryConfig
 * @method self withAIVideoSummaryConfig(string $aIVideoSummaryConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class SubmitAIVideoSummaryJob extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getAIVideoSummaryJobIds
 * @method self withAIVideoSummaryJobIds(string $aIVideoSummaryJobIds)
 */
class ListAIVideoSummaryJob extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getAIASRConfig
 * @method self withAIASRConfig(string $aIASRConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class SubmitAIASRJob extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getAIASRJobIds
 * @method self withAIASRJobIds(string $aIASRJobIds)
 */
class ListAIASRJob extends Roa
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
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 * @method int getAuthTimeout
 * @method self withAuthTimeout(int $authTimeout)
 * @method bool getPreviewSegment
 * @method self withPreviewSegment(bool $previewSegment)
 * @method string getOutputType
 * @method self withOutputType(string $outputType)
 * @method string getAdditionType
 * @method self withAdditionType(string $additionType)
 */
class GetMezzanineInfo extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getAIVideoPornRecogConfig
 * @method self withAIVideoPornRecogConfig(string $aIVideoPornRecogConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class SubmitAIVideoPornRecogJob extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getAIVideoPornRecogJobIds
 * @method self withAIVideoPornRecogJobIds(string $aIVideoPornRecogJobIds)
 */
class ListAIVideoPornRecogJob extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getAIVideoCoverConfig
 * @method self withAIVideoCoverConfig(string $aIVideoCoverConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class SubmitAIVideoCoverJob extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getAIVideoCoverJobIds
 * @method self withAIVideoCoverJobIds(string $aIVideoCoverJobIds)
 */
class ListAIVideoCoverJob extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getCateName
 * @method self withCateName(string $cateName)
 * @method int getCateId
 * @method self withCateId(int $cateId)
 */
class UpdateCategory extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getCateId
 * @method self withCateId(int $cateId)
 * @method int getPageNo
 * @method self withPageNo(int $pageNo)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 */
class GetCategories extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getCateId
 * @method self withCateId(int $cateId)
 */
class DeleteCategory extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getCateName
 * @method self withCateName(string $cateName)
 * @method int getParentId
 * @method self withParentId(int $parentId)
 */
class AddCategory extends Roa
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
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 * @method string getFormats
 * @method self withFormats(string $formats)
 * @method int getAuthTimeout
 * @method self withAuthTimeout(int $authTimeout)
 * @method string getRand
 * @method self withRand(string $rand)
 * @method string getAuthInfo
 * @method self withAuthInfo(string $authInfo)
 * @method string getChannel
 * @method self withChannel(string $channel)
 * @method string getPlayerVersion
 * @method self withPlayerVersion(string $playerVersion)
 * @method string getOutputType
 * @method self withOutputType(string $outputType)
 * @method string getStreamType
 * @method self withStreamType(string $streamType)
 * @method string getReAuthInfo
 * @method self withReAuthInfo(string $reAuthInfo)
 * @method string getDefinition
 * @method self withDefinition(string $definition)
 * @method string getResultType
 * @method self withResultType(string $resultType)
 * @method string getPlayConfig
 * @method self withPlayConfig(string $playConfig)
 */
class GetPlayInfo extends Roa
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
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 * @method string getAuthInfo
 * @method self withAuthInfo(string $authInfo)
 */
class GetVideoConfig extends Roa
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
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getImageType
 * @method self withImageType(string $imageType)
 * @method string getImageExt
 * @method self withImageExt(string $imageExt)
 * @method string getOriginalFileName
 * @method self withOriginalFileName(string $originalFileName)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getStorageLocation
 * @method self withStorageLocation(string $storageLocation)
 * @method int getCateId
 * @method self withCateId(int $cateId)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class CreateUploadImage extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getStartStatisTime
 * @method self withStartStatisTime(string $startStatisTime)
 * @method string getEndStatisTime
 * @method self withEndStatisTime(string $endStatisTime)
 * @method string getLevel
 * @method self withLevel(string $level)
 */
class GetCDNStatisSum extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getStartStatisTime
 * @method self withStartStatisTime(string $startStatisTime)
 * @method string getEndStatisTime
 * @method self withEndStatisTime(string $endStatisTime)
 * @method string getLevel
 * @method self withLevel(string $level)
 */
class GetOSSStatis extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method string getLevel
 * @method self withLevel(string $level)
 */
class GetCDNStatis extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getCallbackSwitch
 * @method self withCallbackSwitch(string $callbackSwitch)
 * @method string getCallbackType
 * @method self withCallbackType(string $callbackType)
 * @method string getCallbackURL
 * @method self withCallbackURL(string $callbackURL)
 * @method string getEventTypeList
 * @method self withEventTypeList(string $eventTypeList)
 * @method string getAuthSwitch
 * @method self withAuthSwitch(string $authSwitch)
 * @method string getAuthKey
 * @method self withAuthKey(string $authKey)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 * @method string getMnsEndpoint
 * @method self withMnsEndpoint(string $mnsEndpoint)
 * @method string getMnsQueueName
 * @method self withMnsQueueName(string $mnsQueueName)
 */
class SetMessageCallback extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 */
class GetMessageCallback extends Roa
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
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getCoverURL
 * @method self withCoverURL(string $coverURL)
 * @method int getCateId
 * @method self withCateId(int $cateId)
 * @method string getDownloadSwitch
 * @method self withDownloadSwitch(string $downloadSwitch)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getCustomMediaInfo
 * @method self withCustomMediaInfo(string $customMediaInfo)
 */
class UpdateVideoInfo extends Roa
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
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 * @method int getAuthInfoTimeout
 * @method self withAuthInfoTimeout(int $authInfoTimeout)
 * @method string getReAuthInfo
 * @method self withReAuthInfo(string $reAuthInfo)
 * @method string getPlayConfig
 * @method self withPlayConfig(string $playConfig)
 */
class GetVideoPlayAuth extends Roa
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
 * @method int getCateId
 * @method self withCateId(int $cateId)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getStorageLocation
 * @method self withStorageLocation(string $storageLocation)
 */
class GetVideoList extends Roa
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
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 * @method string getResultTypes
 * @method self withResultTypes(string $resultTypes)
 */
class GetVideoInfo extends Roa
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
 * @method string getVideoIds
 * @method self withVideoIds(string $videoIds)
 */
class DeleteVideo extends Roa
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
 * @method string getChannel
 * @method self withChannel(string $channel)
 * @method int getClientTS
 * @method self withClientTS(int $clientTS)
 * @method string getClientVersion
 * @method self withClientVersion(string $clientVersion)
 * @method string getPlaySign
 * @method self withPlaySign(string $playSign)
 * @method string getSignVersion
 * @method self withSignVersion(string $signVersion)
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 */
class GetVideoPlayInfo extends Roa
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
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 */
class RefreshUploadVideo extends Roa
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
 * @method string getCoverURL
 * @method self withCoverURL(string $coverURL)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method int getFileSize
 * @method self withFileSize(int $fileSize)
 * @method string getIP
 * @method self withIP(string $iP)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method int getCateId
 * @method self withCateId(int $cateId)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getTranscodeMode
 * @method self withTranscodeMode(string $transcodeMode)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getTemplateGroupId
 * @method self withTemplateGroupId(string $templateGroupId)
 * @method string getWorkflowId
 * @method self withWorkflowId(string $workflowId)
 * @method string getStorageLocation
 * @method self withStorageLocation(string $storageLocation)
 * @method string getCustomMediaInfo
 * @method self withCustomMediaInfo(string $customMediaInfo)
 */
class CreateUploadVideo extends Roa
{
    use R;
}
