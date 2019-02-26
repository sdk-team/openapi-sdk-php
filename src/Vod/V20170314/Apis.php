<?php

namespace AlibabaCloud\Vod\V20170314;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DescribeVodDomainISPData describeVodDomainISPData($options = [])
 * @method DescribeVodDomainRegionData describeVodDomainRegionData($options = [])
 * @method DescribeVodDomainTopReferVisit describeVodDomainTopReferVisit($options = [])
 * @method DescribeVodDomainTopUrlVisit describeVodDomainTopUrlVisit($options = [])
 * @method DescribeVodTopDomainsByFlow describeVodTopDomainsByFlow($options = [])
 * @method DescribeVodDomainPvData describeVodDomainPvData($options = [])
 * @method DescribeVodDomainUvData describeVodDomainUvData($options = [])
 * @method GetOSSFlowStatis getOSSFlowStatis($options = [])
 * @method ListAIStatisType listAIStatisType($options = [])
 * @method GetAIStatis getAIStatis($options = [])
 * @method SetDefaultAITemplate setDefaultAITemplate($options = [])
 * @method GetDefaultAITemplate getDefaultAITemplate($options = [])
 * @method ListAITemplate listAITemplate($options = [])
 * @method GetAITemplate getAITemplate($options = [])
 * @method UpdateAITemplate updateAITemplate($options = [])
 * @method DeleteAITemplate deleteAITemplate($options = [])
 * @method AddAITemplate addAITemplate($options = [])
 * @method GetMediaAuditResultTimeline getMediaAuditResultTimeline($options = [])
 * @method GetMediaAuditResultDetail getMediaAuditResultDetail($options = [])
 * @method GetMediaAuditResult getMediaAuditResult($options = [])
 * @method SubmitAIMediaAuditJob submitAIMediaAuditJob($options = [])
 * @method GetAIMediaAuditJob getAIMediaAuditJob($options = [])
 * @method DisplayAIAuditSwitch displayAIAuditSwitch($options = [])
 * @method DescribePlayVideoStatis describePlayVideoStatis($options = [])
 * @method DescribeVodUserBillPrediction describeVodUserBillPrediction($options = [])
 * @method TransferMediaData transferMediaData($options = [])
 * @method CreateUploadAttachedMedia createUploadAttachedMedia($options = [])
 * @method ReportUploadProgress reportUploadProgress($options = [])
 * @method GetUploadProgress getUploadProgress($options = [])
 * @method UpdateVodTemplate updateVodTemplate($options = [])
 * @method SetDefaultVodTemplate setDefaultVodTemplate($options = [])
 * @method ListVodTemplate listVodTemplate($options = [])
 * @method GetVodTemplate getVodTemplate($options = [])
 * @method DeleteVodTemplate deleteVodTemplate($options = [])
 * @method AddVodTemplate addVodTemplate($options = [])
 * @method DescribeVodUserUsageDetailDataExportTask describeVodUserUsageDetailDataExportTask($options = [])
 * @method CreateVodUserUsageDetailDataExportTask createVodUserUsageDetailDataExportTask($options = [])
 * @method GetMediaDNAResult getMediaDNAResult($options = [])
 * @method DeleteMezzanines deleteMezzanines($options = [])
 * @method UpdateImageInfos updateImageInfos($options = [])
 * @method DescribeVodDomainUsageData describeVodDomainUsageData($options = [])
 * @method DescribeVodDomainTrafficData describeVodDomainTrafficData($options = [])
 * @method DescribeVodDomainsUsageByDay describeVodDomainsUsageByDay($options = [])
 * @method DescribeVodDomainSrcTrafficData describeVodDomainSrcTrafficData($options = [])
 * @method DescribeVodDomainSrcBpsData describeVodDomainSrcBpsData($options = [])
 * @method DescribeVodDomainRealTimeTrafficData describeVodDomainRealTimeTrafficData($options = [])
 * @method DescribeVodDomainRealTimeSrcTrafficData describeVodDomainRealTimeSrcTrafficData($options = [])
 * @method DescribeVodDomainRealTimeSrcBpsData describeVodDomainRealTimeSrcBpsData($options = [])
 * @method DescribeVodDomainRealTimeReqHitRateData describeVodDomainRealTimeReqHitRateData($options = [])
 * @method DescribeVodDomainRealTimeQpsData describeVodDomainRealTimeQpsData($options = [])
 * @method DescribeVodDomainRealTimeHttpCodeData describeVodDomainRealTimeHttpCodeData($options = [])
 * @method DescribeVodDomainRealTimeByteHitRateData describeVodDomainRealTimeByteHitRateData($options = [])
 * @method DescribeVodDomainRealTimeBpsData describeVodDomainRealTimeBpsData($options = [])
 * @method DescribeVodDomainQpsData describeVodDomainQpsData($options = [])
 * @method DescribeVodDomainHttpCodeData describeVodDomainHttpCodeData($options = [])
 * @method DescribeVodDomainHitRateData describeVodDomainHitRateData($options = [])
 * @method DescribeVodDomainBpsData describeVodDomainBpsData($options = [])
 * @method GetVideoDNAResult getVideoDNAResult($options = [])
 * @method GetTranscodeInfo getTranscodeInfo($options = [])
 * @method DescribeVodCertificateDetail describeVodCertificateDetail($options = [])
 * @method DeleteImage deleteImage($options = [])
 * @method GetAuditResultDetail getAuditResultDetail($options = [])
 * @method GetMediaStream getMediaStream($options = [])
 * @method SubmitDNAInitializationJob submitDNAInitializationJob($options = [])
 * @method PayOrderCallback payOrderCallback($options = [])
 * @method Modify modify($options = [])
 * @method CompleteOrderParam completeOrderParam($options = [])
 * @method UpdateTemplateGroupDaemon updateTemplateGroupDaemon($options = [])
 * @method CreateKMSServiceKey createKMSServiceKey($options = [])
 * @method ControlVodService controlVodService($options = [])
 * @method InitVodService initVodService($options = [])
 * @method DescribePlayUserTotal describePlayUserTotal($options = [])
 * @method DescribePlayUserAvg describePlayUserAvg($options = [])
 * @method DescribePlayTopVideos describePlayTopVideos($options = [])
 * @method SetAuditSecurityIp setAuditSecurityIp($options = [])
 * @method ListAuditSecurityIp listAuditSecurityIp($options = [])
 * @method GetVideoInfos getVideoInfos($options = [])
 * @method AssumeOssRole assumeOssRole($options = [])
 * @method UpdateVodDomain updateVodDomain($options = [])
 * @method StopVodDomain stopVodDomain($options = [])
 * @method StartVodDomain startVodDomain($options = [])
 * @method SetVodDomainCertificate setVodDomainCertificate($options = [])
 * @method RefreshVodObjectCaches refreshVodObjectCaches($options = [])
 * @method PreloadVodObjectCaches preloadVodObjectCaches($options = [])
 * @method DescribeVodUserResourcePackage describeVodUserResourcePackage($options = [])
 * @method DescribeVodUserQuota describeVodUserQuota($options = [])
 * @method DescribeVodUserDomains describeVodUserDomains($options = [])
 * @method DescribeVodService describeVodService($options = [])
 * @method DescribeVodRefreshTasks describeVodRefreshTasks($options = [])
 * @method DescribeVodRefreshQuota describeVodRefreshQuota($options = [])
 * @method DescribeVodDomainDetail describeVodDomainDetail($options = [])
 * @method DescribeVodDomainConfigs describeVodDomainConfigs($options = [])
 * @method DescribeVodCertificateList describeVodCertificateList($options = [])
 * @method DescribeUserVodStatus describeUserVodStatus($options = [])
 * @method DeleteVodSpecificConfig deleteVodSpecificConfig($options = [])
 * @method DeleteVodDomain deleteVodDomain($options = [])
 * @method BatchStopVodDomain batchStopVodDomain($options = [])
 * @method BatchStartVodDomain batchStartVodDomain($options = [])
 * @method BatchSetVodDomainConfigs batchSetVodDomainConfigs($options = [])
 * @method AddVodDomain addVodDomain($options = [])
 * @method DescribeVodDomainLog describeVodDomainLog($options = [])
 * @method DescribeVodDomainCname describeVodDomainCname($options = [])
 * @method DescribeVodDomainCertificateInfo describeVodDomainCertificateInfo($options = [])
 * @method UploadMediaByURL uploadMediaByURL($options = [])
 * @method GetAIService getAIService($options = [])
 * @method SetAIService setAIService($options = [])
 * @method SetL2OssKeyConfig setL2OssKeyConfig($options = [])
 * @method SetDefaultUploadStorage setDefaultUploadStorage($options = [])
 * @method GetUserInfoInner getUserInfoInner($options = [])
 * @method GetDomainListInner getDomainListInner($options = [])
 * @method GetDomainAuthInner getDomainAuthInner($options = [])
 * @method SearchMedia searchMedia($options = [])
 * @method UpdateVideoInfos updateVideoInfos($options = [])
 * @method GenerateDownloadSecretKey generateDownloadSecretKey($options = [])
 * @method AssumeSlsRole assumeSlsRole($options = [])
 * @method GetPersonalStorageList getPersonalStorageList($options = [])
 * @method GetStorageRegionList getStorageRegionList($options = [])
 * @method SetStorageACL setStorageACL($options = [])
 * @method GetMessageCallbackEventList getMessageCallbackEventList($options = [])
 * @method GetStorageInfo getStorageInfo($options = [])
 * @method DeleteStorage deleteStorage($options = [])
 * @method AddStorage addStorage($options = [])
 * @method GetStorageList getStorageList($options = [])
 * @method GetThirdPartPlayPolicy getThirdPartPlayPolicy($options = [])
 * @method AddThirdPartPlayPolicy addThirdPartPlayPolicy($options = [])
 * @method AuthorizeAppLicense authorizeAppLicense($options = [])
 * @method GetAppLicense getAppLicense($options = [])
 * @method UpdateAppLicense updateAppLicense($options = [])
 * @method AddAppLicense addAppLicense($options = [])
 * @method GetAppLicenseList getAppLicenseList($options = [])
 * @method SPIPhysicalDeleteResourceAction sPIPhysicalDeleteResourceAction($options = [])
 * @method SPICheckResourceAction sPICheckResourceAction($options = [])
 * @method SPILogicalDeleteResourceAction sPILogicalDeleteResourceAction($options = [])
 * @method SubmitPreprocessJobs submitPreprocessJobs($options = [])
 * @method QueryOrderParam queryOrderParam($options = [])
 * @method AssumeExperienceRole assumeExperienceRole($options = [])
 * @method ListSnapshots listSnapshots($options = [])
 * @method SetDefaultPlayDomain setDefaultPlayDomain($options = [])
 * @method ListCertificate listCertificate($options = [])
 * @method EditVideoIndexFile editVideoIndexFile($options = [])
 * @method SetCDNDomainServerCertificate setCDNDomainServerCertificate($options = [])
 * @method SetCDNForceRedirectConfig setCDNForceRedirectConfig($options = [])
 * @method SubmitTranscodeJobs submitTranscodeJobs($options = [])
 * @method GetAuditResult getAuditResult($options = [])
 * @method CreateAudit createAudit($options = [])
 * @method GetAuditHistory getAuditHistory($options = [])
 * @method FinishLiveStreamRecord finishLiveStreamRecord($options = [])
 * @method ListLiveRecordVideo listLiveRecordVideo($options = [])
 * @method AddLiveStreamVideo addLiveStreamVideo($options = [])
 * @method SetTemplateGroupProperty setTemplateGroupProperty($options = [])
 * @method QueryUploadInfo queryUploadInfo($options = [])
 * @method DescribeVideoStatisByDay describeVideoStatisByDay($options = [])
 * @method FaceRegistration faceRegistration($options = [])
 * @method DescribeCDNRefreshTasks describeCDNRefreshTasks($options = [])
 * @method ReleaseFile releaseFile($options = [])
 * @method ListAIJob listAIJob($options = [])
 * @method SubmitAIJob submitAIJob($options = [])
 * @method GetImageInfo getImageInfo($options = [])
 * @method UpdateWatermarkInfo updateWatermarkInfo($options = [])
 * @method UpdateWatermarkGroup updateWatermarkGroup($options = [])
 * @method ListWatermarkInfo listWatermarkInfo($options = [])
 * @method ListCompanionresourceInfo listCompanionresourceInfo($options = [])
 * @method GetWatermarkInfo getWatermarkInfo($options = [])
 * @method GetWatermarkGroup getWatermarkGroup($options = [])
 * @method GetCompanionresourceInfo getCompanionresourceInfo($options = [])
 * @method DeleteWatermarkRelation deleteWatermarkRelation($options = [])
 * @method DeleteWatermarkInfo deleteWatermarkInfo($options = [])
 * @method DeleteWatermarkGroup deleteWatermarkGroup($options = [])
 * @method DeleteCompanionresourceInfo deleteCompanionresourceInfo($options = [])
 * @method CreateUploadMediaFile createUploadMediaFile($options = [])
 * @method AddWatermarkRelation addWatermarkRelation($options = [])
 * @method AddWatermarkInfo addWatermarkInfo($options = [])
 * @method AddWatermarkGroup addWatermarkGroup($options = [])
 * @method AddCompanionresourceInfo addCompanionresourceInfo($options = [])
 * @method SubmitAIVideoTagJob submitAIVideoTagJob($options = [])
 * @method SubmitAIVideoFaceRecogJob submitAIVideoFaceRecogJob($options = [])
 * @method ListAIVideoTagJob listAIVideoTagJob($options = [])
 * @method ListAIVideoFaceRecogJob listAIVideoFaceRecogJob($options = [])
 * @method OpenVodService openVodService($options = [])
 * @method SubmitAIVideoCategoryJob submitAIVideoCategoryJob($options = [])
 * @method ListAIVideoCategoryJob listAIVideoCategoryJob($options = [])
 * @method DescribeCdnRefreshQuota describeCdnRefreshQuota($options = [])
 * @method CreateOrder createOrder($options = [])
 * @method APIProxy aPIProxy($options = [])
 * @method GetBatchPlayInfo getBatchPlayInfo($options = [])
 * @method DescribeUserUvByDayTest describeUserUvByDayTest($options = [])
 * @method SubmitAIVideoTerrorismRecogJob submitAIVideoTerrorismRecogJob($options = [])
 * @method SubmitAIVideoCensorJob submitAIVideoCensorJob($options = [])
 * @method ListAIVideoTerrorismRecogJob listAIVideoTerrorismRecogJob($options = [])
 * @method ListAIVideoCensorJob listAIVideoCensorJob($options = [])
 * @method GetBucketListInner getBucketListInner($options = [])
 * @method DeleteStream deleteStream($options = [])
 * @method AddProductAccount addProductAccount($options = [])
 * @method SubmitSnapshotJob submitSnapshotJob($options = [])
 * @method DescribeDomainFlowData describeDomainFlowData($options = [])
 * @method DescribeDomainBpsData describeDomainBpsData($options = [])
 * @method DescribeCdnDomainLogs describeCdnDomainLogs($options = [])
 * @method SubmitAIVideoSummaryJob submitAIVideoSummaryJob($options = [])
 * @method ListAIVideoSummaryJob listAIVideoSummaryJob($options = [])
 * @method DescribeUserVvTopByDay describeUserVvTopByDay($options = [])
 * @method DescribeUserVvByVideoid describeUserVvByVideoid($options = [])
 * @method DescribeUserVvByDay describeUserVvByDay($options = [])
 * @method DescribeUserUvByDay describeUserUvByDay($options = [])
 * @method DescribeUserTimeRangeByDay describeUserTimeRangeByDay($options = [])
 * @method DescribeUserAvgTimeByDay describeUserAvgTimeByDay($options = [])
 * @method DescribeUserAvgCountByDay describeUserAvgCountByDay($options = [])
 * @method SetDefaultTemplateGroup setDefaultTemplateGroup($options = [])
 * @method SubmitAIASRJob submitAIASRJob($options = [])
 * @method ListAIASRJob listAIASRJob($options = [])
 * @method GetMezzanineInfo getMezzanineInfo($options = [])
 * @method UpdateTemplateGroup updateTemplateGroup($options = [])
 * @method UpdateCustomTemplateAndGroup updateCustomTemplateAndGroup($options = [])
 * @method UpdateCustomTemplate updateCustomTemplate($options = [])
 * @method ListTemplateGroup listTemplateGroup($options = [])
 * @method ListCustomTemplate listCustomTemplate($options = [])
 * @method InitSystemTemplateGroup initSystemTemplateGroup($options = [])
 * @method InitCustomerWorkFlow initCustomerWorkFlow($options = [])
 * @method InitCustomerWithSystemTemplateAndGroup initCustomerWithSystemTemplateAndGroup($options = [])
 * @method GetTemplateGroup getTemplateGroup($options = [])
 * @method GetCustomTemplate getCustomTemplate($options = [])
 * @method DeleteTemplateGroup deleteTemplateGroup($options = [])
 * @method DeleteInitCustomTemplateInfo deleteInitCustomTemplateInfo($options = [])
 * @method DeleteCustomTemplateAndGroup deleteCustomTemplateAndGroup($options = [])
 * @method DeleteCustomTemplate deleteCustomTemplate($options = [])
 * @method AddTemplateGroup addTemplateGroup($options = [])
 * @method AddCustomTemplateAndGroup addCustomTemplateAndGroup($options = [])
 * @method AddCustomTemplate addCustomTemplate($options = [])
 * @method SubmitAIVideoPornRecogJob submitAIVideoPornRecogJob($options = [])
 * @method ListAIVideoPornRecogJob listAIVideoPornRecogJob($options = [])
 * @method SubmitAIVideoCoverJob submitAIVideoCoverJob($options = [])
 * @method ListAIVideoCoverJob listAIVideoCoverJob($options = [])
 * @method DeleteAudioTemplate deleteAudioTemplate($options = [])
 * @method DeleteAudioConfig deleteAudioConfig($options = [])
 * @method AddOriginTemplate addOriginTemplate($options = [])
 * @method AddAuthCheckWhiteList addAuthCheckWhiteList($options = [])
 * @method UpdateMaterialStatus updateMaterialStatus($options = [])
 * @method UpdateMaterial updateMaterial($options = [])
 * @method UpdateEditingProjectStatus updateEditingProjectStatus($options = [])
 * @method UpdateEditingProject updateEditingProject($options = [])
 * @method SyncMaterial syncMaterial($options = [])
 * @method SetEditingProjectMaterials setEditingProjectMaterials($options = [])
 * @method SearchMaterial searchMaterial($options = [])
 * @method SearchEditingProject searchEditingProject($options = [])
 * @method RefreshUploadMaterialToken refreshUploadMaterialToken($options = [])
 * @method ProduceEditingProjectVideo produceEditingProjectVideo($options = [])
 * @method GetMaterialList getMaterialList($options = [])
 * @method GetMaterial getMaterial($options = [])
 * @method GetEditingProjectMaterials getEditingProjectMaterials($options = [])
 * @method GetEditingProjectList getEditingProjectList($options = [])
 * @method GetEditingProject getEditingProject($options = [])
 * @method DeleteMaterial deleteMaterial($options = [])
 * @method DeleteEditingProject deleteEditingProject($options = [])
 * @method CreateUploadMaterial createUploadMaterial($options = [])
 * @method AddEditingProject addEditingProject($options = [])
 * @method GetCategories getCategories($options = [])
 * @method UpdateCategory updateCategory($options = [])
 * @method InitEditing initEditing($options = [])
 * @method SetDomainAuth setDomainAuth($options = [])
 * @method GetDomainAuth getDomainAuth($options = [])
 * @method GetAudioTemplate getAudioTemplate($options = [])
 * @method ListAudioTemplate listAudioTemplate($options = [])
 * @method ListAudioConfig listAudioConfig($options = [])
 * @method RefreshMaterialWorkFlow refreshMaterialWorkFlow($options = [])
 * @method UpdateAudioConfig updateAudioConfig($options = [])
 * @method UpdateAudioTemplate updateAudioTemplate($options = [])
 * @method AddAudioConfig addAudioConfig($options = [])
 * @method AddAudioTemplate addAudioTemplate($options = [])
 * @method UpdateSpecifyCustomerTemplateConfig updateSpecifyCustomerTemplateConfig($options = [])
 * @method GetPlayInfo getPlayInfo($options = [])
 * @method GetVideoConfig getVideoConfig($options = [])
 * @method SetCustomerConfig setCustomerConfig($options = [])
 * @method GetCustomerConfig getCustomerConfig($options = [])
 * @method CreateUploadImage createUploadImage($options = [])
 * @method UpdateSnapshot updateSnapshot($options = [])
 * @method RefreshWorkFlow refreshWorkFlow($options = [])
 * @method AddPipeline addPipeline($options = [])
 * @method GetCheckChannel getCheckChannel($options = [])
 * @method SetCheckChannel setCheckChannel($options = [])
 * @method GetPlayStatis getPlayStatis($options = [])
 * @method GetMTSStatis getMTSStatis($options = [])
 * @method ListDomainReferer listDomainReferer($options = [])
 * @method SetDomainSecurity setDomainSecurity($options = [])
 * @method SetCDNReferer setCDNReferer($options = [])
 * @method GetDomainSecurity getDomainSecurity($options = [])
 * @method DeleteDomainReferer deleteDomainReferer($options = [])
 * @method AddDomainReferer addDomainReferer($options = [])
 * @method SetMessageCallback setMessageCallback($options = [])
 * @method GetMessageCallback getMessageCallback($options = [])
 * @method GetVideoPlayInfoForCloud getVideoPlayInfoForCloud($options = [])
 * @method GetVideoPlayAuth getVideoPlayAuth($options = [])
 * @method GetMidYKVid getMidYKVid($options = [])
 * @method DeleteMidYKVid deleteMidYKVid($options = [])
 * @method AddMidYKVid addMidYKVid($options = [])
 * @method UpdateVideoStatus updateVideoStatus($options = [])
 * @method UpdateVideoInfo updateVideoInfo($options = [])
 * @method SearchVideo searchVideo($options = [])
 * @method RefreshUploadVideo refreshUploadVideo($options = [])
 * @method GetVideoList getVideoList($options = [])
 * @method GetVideoInfo getVideoInfo($options = [])
 * @method GetCategoryTree getCategoryTree($options = [])
 * @method GetCategoryList getCategoryList($options = [])
 * @method DeleteVideoTag deleteVideoTag($options = [])
 * @method DeleteVideo deleteVideo($options = [])
 * @method CreateUploadVideo createUploadVideo($options = [])
 * @method CheckVideo checkVideo($options = [])
 * @method AddVideoTag addVideoTag($options = [])
 * @method AddApiAuth addApiAuth($options = [])
 * @method AddDomain addDomain($options = [])
 * @method GetPlayChannelKey getPlayChannelKey($options = [])
 * @method DeleteDomain deleteDomain($options = [])
 * @method GetDomain getDomain($options = [])
 * @method GetDomainList getDomainList($options = [])
 * @method GetUploadSTSToken getUploadSTSToken($options = [])
 * @method GetServiceStatus getServiceStatus($options = [])
 * @method OpenService openService($options = [])
 * @method NotifyProduce notifyProduce($options = [])
 * @method NotifyInitResource notifyInitResource($options = [])
 * @method GetPlayChannelList getPlayChannelList($options = [])
 * @method UpdateApiAuth updateApiAuth($options = [])
 * @method StopDomain stopDomain($options = [])
 * @method StartDomain startDomain($options = [])
 * @method UserExist userExist($options = [])
 * @method AddMediaInfo addMediaInfo($options = [])
 * @method AddCategory addCategory($options = [])
 * @method DeleteCategory deleteCategory($options = [])
 * @method UpdateMediaInfoStatus updateMediaInfoStatus($options = [])
 * @method CategoryTree categoryTree($options = [])
 * @method AddMediaTag addMediaTag($options = [])
 * @method GetCDNStatisSum getCDNStatisSum($options = [])
 * @method GetCDNStatis getCDNStatis($options = [])
 * @method DeleteMediaTag deleteMediaTag($options = [])
 * @method DeleteMediaInfo deleteMediaInfo($options = [])
 * @method GetOSSStatis getOSSStatis($options = [])
 * @method GetVideoPlayInfo getVideoPlayInfo($options = [])
 * @method GetMediaInfoList getMediaInfoList($options = [])
 * @method GetMediaInfo getMediaInfo($options = [])
 * @method SearchMediaInfo searchMediaInfo($options = [])
 * @method RefreshUploadToken refreshUploadToken($options = [])
 * @method ListAllCategory listAllCategory($options = [])
 * @method GetTotalStatis getTotalStatis($options = [])
 * @method UpdateMediaInfo updateMediaInfo($options = [])
 * @method UpdateMediaCategory updateMediaCategory($options = [])
 * @method UpdateCategoryName updateCategoryName($options = [])
 * @method AddWatermark addWatermark($options = [])
 * @method AddTranscodeTemplate addTranscodeTemplate($options = [])
 * @method AddSnapshot addSnapshot($options = [])
 * @method GetCustomerTranscodeConf getCustomerTranscodeConf($options = [])
 * @method DeleteWatermark deleteWatermark($options = [])
 * @method GetWatermark getWatermark($options = [])
 * @method GetWatermarks getWatermarks($options = [])
 * @method SwitchWatermark switchWatermark($options = [])
 * @method GetWatermarkSwitch getWatermarkSwitch($options = [])
 * @method SetDefaultWatermark setDefaultWatermark($options = [])
 * @method UpdateTranscodeTemplate updateTranscodeTemplate($options = [])
 * @method UpdateTranscodeConf updateTranscodeConf($options = [])
 * @method UpdateWatermark updateWatermark($options = [])
 */
class V20170314
{
    use ApiResolverTrait;
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
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeVodDomainPvData extends Roa
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
class DescribeVodDomainUvData extends Roa
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
 */
class ListAIStatisType extends Roa
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
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class GetAIMediaAuditJob extends Roa
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
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 * @method string getVideoInfo
 * @method self withVideoInfo(string $videoInfo)
 * @method string getMezzanineInfo
 * @method self withMezzanineInfo(string $mezzanineInfo)
 * @method string getStreamInfos
 * @method self withStreamInfos(string $streamInfos)
 */
class TransferMediaData extends Roa
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
 * @method string getTags
 * @method self withTags(string $tags)
 * @method int getCateId
 * @method self withCateId(int $cateId)
 * @method string getStorageLocation
 * @method self withStorageLocation(string $storageLocation)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getFileSize
 * @method self withFileSize(string $fileSize)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class CreateUploadAttachedMedia extends Roa
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
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
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
class DescribeVodDomainRealTimeReqHitRateData extends Roa
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
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 */
class GetTranscodeInfo extends Roa
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
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 * @method string getPlayURL
 * @method self withPlayURL(string $playURL)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 */
class GetMediaStream extends Roa
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
 * @method int getRecentNumber
 * @method self withRecentNumber(int $recentNumber)
 */
class SubmitDNAInitializationJob extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getproduct
 * @method self withproduct(string $product)
 * @method string getversion
 * @method self withversion(string $version)
 * @method string getaction
 * @method self withaction(string $action)
 * @method string getregionId
 * @method self withregionId(string $regionId)
 * @method string getdomain
 * @method self withdomain(string $domain)
 * @method string getdata
 * @method self withdata(string $data)
 */
class PayOrderCallback extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getproduct
 * @method self withproduct(string $product)
 * @method string getversion
 * @method self withversion(string $version)
 * @method string getaction
 * @method self withaction(string $action)
 * @method string getregionId
 * @method self withregionId(string $regionId)
 * @method string getdomain
 * @method self withdomain(string $domain)
 * @method string getdata
 * @method self withdata(string $data)
 */
class Modify extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getproduct
 * @method self withproduct(string $product)
 * @method string getversion
 * @method self withversion(string $version)
 * @method string getaction
 * @method self withaction(string $action)
 * @method string getregionId
 * @method self withregionId(string $regionId)
 * @method string getdomain
 * @method self withdomain(string $domain)
 * @method string getdata
 * @method self withdata(string $data)
 */
class CompleteOrderParam extends Roa
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
 * @method string getTemplateGroupId
 * @method self withTemplateGroupId(string $templateGroupId)
 * @method int getUserId
 * @method self withUserId(int $userId)
 * @method string getIsLocked
 * @method self withIsLocked(string $isLocked)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class UpdateTemplateGroupDaemon extends Roa
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
 * @method string getKmsRegionId
 * @method self withKmsRegionId(string $kmsRegionId)
 */
class CreateKMSServiceKey extends Roa
{
    use R;
}

/**
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getCommand
 * @method self withCommand(string $command)
 */
class ControlVodService extends Roa
{
    use R;
}

/**
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getPayType
 * @method self withPayType(string $payType)
 * @method string getBillType
 * @method self withBillType(string $billType)
 * @method string getChargeDuration
 * @method self withChargeDuration(string $chargeDuration)
 * @method string getOrderType
 * @method self withOrderType(string $orderType)
 */
class InitVodService extends Roa
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
 * @method string getSecurityGroupName
 * @method self withSecurityGroupName(string $securityGroupName)
 */
class ListAuditSecurityIp extends Roa
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
class DescribeVodUserQuota extends Roa
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class DescribeVodDomainDetail extends Roa
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
 */
class DescribeUserVodStatus extends Roa
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
 */
class UploadMediaByURL extends Roa
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
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getPrivateOssAuth
 * @method self withPrivateOssAuth(string $privateOssAuth)
 */
class SetL2OssKeyConfig extends Roa
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
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getUserId
 * @method self withUserId(int $userId)
 */
class GetUserInfoInner extends Roa
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
 * @method string getDomainType
 * @method self withDomainType(string $domainType)
 * @method int getUserId
 * @method self withUserId(int $userId)
 */
class GetDomainListInner extends Roa
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getUserId
 * @method self withUserId(int $userId)
 */
class GetDomainAuthInner extends Roa
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
 * @method string getResultTypes
 * @method self withResultTypes(string $resultTypes)
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
 * @method string getStorageType
 * @method self withStorageType(string $storageType)
 * @method string getStorageRegion
 * @method self withStorageRegion(string $storageRegion)
 * @method string getStorageLocation
 * @method self withStorageLocation(string $storageLocation)
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
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 * @method string getContentId
 * @method self withContentId(string $contentId)
 * @method string getSource
 * @method self withSource(string $source)
 * @method int getAuthTimestamp
 * @method self withAuthTimestamp(int $authTimestamp)
 * @method string getAuthInfo
 * @method self withAuthInfo(string $authInfo)
 */
class GetThirdPartPlayPolicy extends Roa
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
 * @method string getPolicyInfoList
 * @method self withPolicyInfoList(string $policyInfoList)
 * @method string getSource
 * @method self withSource(string $source)
 * @method int getAuthTimestamp
 * @method self withAuthTimestamp(int $authTimestamp)
 * @method string getAuthInfo
 * @method self withAuthInfo(string $authInfo)
 */
class AddThirdPartPlayPolicy extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method int getSdkCode
 * @method self withSdkCode(int $sdkCode)
 * @method int getLicenseVersion
 * @method self withLicenseVersion(int $licenseVersion)
 * @method int getPlatform
 * @method self withPlatform(int $platform)
 * @method string getBundleId
 * @method self withBundleId(string $bundleId)
 * @method string getPackageName
 * @method self withPackageName(string $packageName)
 * @method string getLicenseSignature
 * @method self withLicenseSignature(string $licenseSignature)
 * @method string getNonce
 * @method self withNonce(string $nonce)
 * @method int getTime
 * @method self withTime(int $time)
 * @method string getSign
 * @method self withSign(string $sign)
 * @method string getSdkVersion
 * @method self withSdkVersion(string $sdkVersion)
 * @method int getSdkVersionCode
 * @method self withSdkVersionCode(int $sdkVersionCode)
 */
class AuthorizeAppLicense extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method int getLicenseId
 * @method self withLicenseId(int $licenseId)
 */
class GetAppLicense extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method int getLicenseId
 * @method self withLicenseId(int $licenseId)
 * @method string getContractNo
 * @method self withContractNo(string $contractNo)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getBundleId
 * @method self withBundleId(string $bundleId)
 * @method string getPackageName
 * @method self withPackageName(string $packageName)
 * @method string getLicenseSignature
 * @method self withLicenseSignature(string $licenseSignature)
 * @method string getType
 * @method self withType(string $type)
 * @method string getFeature
 * @method self withFeature(string $feature)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getExpiredOn
 * @method self withExpiredOn(string $expiredOn)
 * @method string getSdkIds
 * @method self withSdkIds(string $sdkIds)
 * @method int getCustomerId
 * @method self withCustomerId(int $customerId)
 * @method int getAccountId
 * @method self withAccountId(int $accountId)
 */
class UpdateAppLicense extends Roa
{
    use R;
}

/**
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getContractNo
 * @method self withContractNo(string $contractNo)
 * @method string getBundleId
 * @method self withBundleId(string $bundleId)
 * @method string getPackageName
 * @method self withPackageName(string $packageName)
 * @method string getLicenseSignature
 * @method self withLicenseSignature(string $licenseSignature)
 * @method string getType
 * @method self withType(string $type)
 * @method string getFeature
 * @method self withFeature(string $feature)
 * @method string getExpiredOn
 * @method self withExpiredOn(string $expiredOn)
 * @method string getSdkIds
 * @method self withSdkIds(string $sdkIds)
 * @method int getCustomerId
 * @method self withCustomerId(int $customerId)
 * @method int getAccountId
 * @method self withAccountId(int $accountId)
 * @method int getLicenseId
 * @method self withLicenseId(int $licenseId)
 * @method string getCreateTime
 * @method self withCreateTime(string $createTime)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class AddAppLicense extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method int getCustomerId
 * @method self withCustomerId(int $customerId)
 * @method int getAccountId
 * @method self withAccountId(int $accountId)
 * @method string getContractNo
 * @method self withContractNo(string $contractNo)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getBundleId
 * @method self withBundleId(string $bundleId)
 * @method string getPackageName
 * @method self withPackageName(string $packageName)
 * @method string getType
 * @method self withType(string $type)
 * @method string getSdkIds
 * @method self withSdkIds(string $sdkIds)
 * @method string getFeature
 * @method self withFeature(string $feature)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method int getPageNo
 * @method self withPageNo(int $pageNo)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method string getStartCreationTime
 * @method self withStartCreationTime(string $startCreationTime)
 * @method string getEndCreationTime
 * @method self withEndCreationTime(string $endCreationTime)
 * @method string getStartExpiredTime
 * @method self withStartExpiredTime(string $startExpiredTime)
 * @method string getEndExpiredTime
 * @method self withEndExpiredTime(string $endExpiredTime)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 */
class GetAppLicenseList extends Roa
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
class SPIPhysicalDeleteResourceAction extends Roa
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
class SPICheckResourceAction extends Roa
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
class SPILogicalDeleteResourceAction extends Roa
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
 * @method string getdata
 * @method self withdata(string $data)
 */
class QueryOrderParam extends Roa
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class ListCertificate extends Roa
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
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getAPIProxyName
 * @method self withAPIProxyName(string $aPIProxyName)
 * @method string getAPIProxyParam
 * @method self withAPIProxyParam(string $aPIProxyParam)
 */
class SetCDNDomainServerCertificate extends Roa
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
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getAPIProxyName
 * @method self withAPIProxyName(string $aPIProxyName)
 * @method string getAPIProxyParam
 * @method self withAPIProxyParam(string $aPIProxyParam)
 */
class SetCDNForceRedirectConfig extends Roa
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
 */
class SubmitTranscodeJobs extends Roa
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
 */
class GetAuditResult extends Roa
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

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getCustomerId
 * @method self withCustomerId(int $customerId)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getAutoCompose
 * @method self withAutoCompose(string $autoCompose)
 * @method string getTranscodeGroupId
 * @method self withTranscodeGroupId(string $transcodeGroupId)
 */
class FinishLiveStreamRecord extends Roa
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
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getCustomerId
 * @method self withCustomerId(int $customerId)
 * @method string getStreamName
 * @method self withStreamName(string $streamName)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAppName
 * @method self withAppName(string $appName)
 * @method string getTranscodeGroupId
 * @method self withTranscodeGroupId(string $transcodeGroupId)
 * @method string getResourceInfo
 * @method self withResourceInfo(string $resourceInfo)
 * @method string getFileUrl
 * @method self withFileUrl(string $fileUrl)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class AddLiveStreamVideo extends Roa
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
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getPropertyName
 * @method self withPropertyName(string $propertyName)
 * @method string getPropertyValue
 * @method self withPropertyValue(string $propertyValue)
 */
class SetTemplateGroupProperty extends Roa
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
 * @method int getCustomerId
 * @method self withCustomerId(int $customerId)
 * @method string getTranscodeGroupId
 * @method self withTranscodeGroupId(string $transcodeGroupId)
 * @method string getStorageLocation
 * @method self withStorageLocation(string $storageLocation)
 */
class QueryUploadInfo extends Roa
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
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getAPIProxyName
 * @method self withAPIProxyName(string $aPIProxyName)
 * @method string getAPIProxyParam
 * @method self withAPIProxyParam(string $aPIProxyParam)
 */
class DescribeCDNRefreshTasks extends Roa
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
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method string getFileUrl
 * @method self withFileUrl(string $fileUrl)
 * @method string getSnapshot
 * @method self withSnapshot(string $snapshot)
 */
class ReleaseFile extends Roa
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
 * @method string getMediaType
 * @method self withMediaType(string $mediaType)
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
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 */
class GetImageInfo extends Roa
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
 * @method string getWatermarkType
 * @method self withWatermarkType(string $watermarkType)
 * @method string getWatermarkConfig
 * @method self withWatermarkConfig(string $watermarkConfig)
 * @method string getWatermarkId
 * @method self withWatermarkId(string $watermarkId)
 * @method string getMediaFileId
 * @method self withMediaFileId(string $mediaFileId)
 * @method string getWatermarkName
 * @method self withWatermarkName(string $watermarkName)
 */
class UpdateWatermarkInfo extends Roa
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
 * @method string getWatermarkGroupId
 * @method self withWatermarkGroupId(string $watermarkGroupId)
 * @method string getWatermarkGroupName
 * @method self withWatermarkGroupName(string $watermarkGroupName)
 * @method bool getIsDefault
 * @method self withIsDefault(bool $isDefault)
 */
class UpdateWatermarkGroup extends Roa
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
 * @method string getWatermarkType
 * @method self withWatermarkType(string $watermarkType)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getPageNo
 * @method self withPageNo(string $pageNo)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 */
class ListWatermarkInfo extends Roa
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
 * @method string getCompanionResourceType
 * @method self withCompanionResourceType(string $companionResourceType)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method string getPageNo
 * @method self withPageNo(string $pageNo)
 * @method string getPageSize
 * @method self withPageSize(string $pageSize)
 */
class ListCompanionresourceInfo extends Roa
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
class GetWatermarkInfo extends Roa
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
 * @method int getPageNo
 * @method self withPageNo(int $pageNo)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 */
class GetWatermarkGroup extends Roa
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
 * @method string getCompanionResourceId
 * @method self withCompanionResourceId(string $companionResourceId)
 */
class GetCompanionresourceInfo extends Roa
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
 * @method string getWatermarkGroupId
 * @method self withWatermarkGroupId(string $watermarkGroupId)
 * @method string getWatermarkIds
 * @method self withWatermarkIds(string $watermarkIds)
 */
class DeleteWatermarkRelation extends Roa
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
 * @method string getWatermarkIds
 * @method self withWatermarkIds(string $watermarkIds)
 * @method string getDelEmptyGroup
 * @method self withDelEmptyGroup(string $delEmptyGroup)
 */
class DeleteWatermarkInfo extends Roa
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
 * @method string getWatermarkGroupId
 * @method self withWatermarkGroupId(string $watermarkGroupId)
 */
class DeleteWatermarkGroup extends Roa
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
 * @method string getCompanionResourceIds
 * @method self withCompanionResourceIds(string $companionResourceIds)
 */
class DeleteCompanionresourceInfo extends Roa
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
 * @method string getBusinessType
 * @method self withBusinessType(string $businessType)
 * @method string getFileExtension
 * @method self withFileExtension(string $fileExtension)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class CreateUploadMediaFile extends Roa
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
 * @method string getWatermarkGroupId
 * @method self withWatermarkGroupId(string $watermarkGroupId)
 * @method string getWatermarkIds
 * @method self withWatermarkIds(string $watermarkIds)
 */
class AddWatermarkRelation extends Roa
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
 * @method string getWatermarkType
 * @method self withWatermarkType(string $watermarkType)
 * @method string getWatermarkConfig
 * @method self withWatermarkConfig(string $watermarkConfig)
 * @method string getWatermarkName
 * @method self withWatermarkName(string $watermarkName)
 * @method string getMediaFileId
 * @method self withMediaFileId(string $mediaFileId)
 */
class AddWatermarkInfo extends Roa
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
 * @method string getWatermarkGroupName
 * @method self withWatermarkGroupName(string $watermarkGroupName)
 */
class AddWatermarkGroup extends Roa
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
 * @method string getMediaFileId
 * @method self withMediaFileId(string $mediaFileId)
 * @method string getCompanionResourceType
 * @method self withCompanionResourceType(string $companionResourceType)
 * @method string getCompanionResourceConfig
 * @method self withCompanionResourceConfig(string $companionResourceConfig)
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 * @method string getResourceTags
 * @method self withResourceTags(string $resourceTags)
 */
class AddCompanionresourceInfo extends Roa
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
class DescribeCdnRefreshQuota extends Roa
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
 * @method string getProductCode
 * @method self withProductCode(string $productCode)
 * @method string getAPIProxyName
 * @method self withAPIProxyName(string $aPIProxyName)
 * @method string getAPIProxyParam
 * @method self withAPIProxyParam(string $aPIProxyParam)
 */
class APIProxy extends Roa
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
 * @method string getVideoIds
 * @method self withVideoIds(string $videoIds)
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
 */
class GetBatchPlayInfo extends Roa
{
    use R;
}

/**
 * @method string getVersion
 * @method self withVersion(string $version)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getVideoType
 * @method self withVideoType(string $videoType)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class DescribeUserUvByDayTest extends Roa
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
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getUserId
 * @method self withUserId(int $userId)
 */
class GetBucketListInner extends Roa
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
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getNewAccountAkId
 * @method self withNewAccountAkId(string $newAccountAkId)
 * @method string getNewAccountAkSecret
 * @method self withNewAccountAkSecret(string $newAccountAkSecret)
 * @method int getNewAccountUserId
 * @method self withNewAccountUserId(int $newAccountUserId)
 * @method string getNewAccountLoginName
 * @method self withNewAccountLoginName(string $newAccountLoginName)
 * @method string getNewAccountRegionId
 * @method self withNewAccountRegionId(string $newAccountRegionId)
 * @method Integer getMaxBucketLimit
 * @method self withMaxBucketLimit(Integer $maxBucketLimit)
 */
class AddProductAccount extends Roa
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
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class SetDefaultTemplateGroup extends Roa
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
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 * @method int getAuthTimeout
 * @method self withAuthTimeout(int $authTimeout)
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
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getToNeedTranscode
 * @method self withToNeedTranscode(string $toNeedTranscode)
 */
class UpdateTemplateGroup extends Roa
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
 * @method string getConfigs
 * @method self withConfigs(string $configs)
 */
class UpdateCustomTemplateAndGroup extends Roa
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
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getVideo
 * @method self withVideo(string $video)
 * @method string getAudio
 * @method self withAudio(string $audio)
 * @method string getTransConfig
 * @method self withTransConfig(string $transConfig)
 * @method string getMuxConfig
 * @method self withMuxConfig(string $muxConfig)
 * @method string getContainer
 * @method self withContainer(string $container)
 * @method string getDefinition
 * @method self withDefinition(string $definition)
 * @method string getUseWaterMark
 * @method self withUseWaterMark(string $useWaterMark)
 * @method string getEncrypt
 * @method self withEncrypt(string $encrypt)
 * @method string getCondition
 * @method self withCondition(string $condition)
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 * @method string getNarrowBand
 * @method self withNarrowBand(string $narrowBand)
 */
class UpdateCustomTemplate extends Roa
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
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class ListCustomTemplate extends Roa
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
 * @method int getUserId
 * @method self withUserId(int $userId)
 */
class InitSystemTemplateGroup extends Roa
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
 * @method int getUserId
 * @method self withUserId(int $userId)
 * @method bool getFlushConfig
 * @method self withFlushConfig(bool $flushConfig)
 */
class InitCustomerWorkFlow extends Roa
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
 * @method int getUserId
 * @method self withUserId(int $userId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getWorkFlowId
 * @method self withWorkFlowId(string $workFlowId)
 */
class InitCustomerWithSystemTemplateAndGroup extends Roa
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
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class GetTemplateGroup extends Roa
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
class GetCustomTemplate extends Roa
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
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 */
class DeleteTemplateGroup extends Roa
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
 * @method string getUserId
 * @method self withUserId(string $userId)
 */
class DeleteInitCustomTemplateInfo extends Roa
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
 * @method string getUserId
 * @method self withUserId(string $userId)
 */
class DeleteCustomTemplateAndGroup extends Roa
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
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getTemplateIds
 * @method self withTemplateIds(string $templateIds)
 */
class DeleteCustomTemplate extends Roa
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
 * @method string getToNeedTranscode
 * @method self withToNeedTranscode(string $toNeedTranscode)
 */
class AddTemplateGroup extends Roa
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
 * @method string getConfigs
 * @method self withConfigs(string $configs)
 */
class AddCustomTemplateAndGroup extends Roa
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
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getVideo
 * @method self withVideo(string $video)
 * @method string getAudio
 * @method self withAudio(string $audio)
 * @method string getTransConfig
 * @method self withTransConfig(string $transConfig)
 * @method string getMuxConfig
 * @method self withMuxConfig(string $muxConfig)
 * @method string getContainer
 * @method self withContainer(string $container)
 * @method string getDefinition
 * @method self withDefinition(string $definition)
 * @method string getUseWaterMark
 * @method self withUseWaterMark(string $useWaterMark)
 * @method string getEncrypt
 * @method self withEncrypt(string $encrypt)
 * @method string getCondition
 * @method self withCondition(string $condition)
 * @method string getNarrowBand
 * @method self withNarrowBand(string $narrowBand)
 */
class AddCustomTemplate extends Roa
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
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 */
class DeleteAudioTemplate extends Roa
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
class DeleteAudioConfig extends Roa
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
class AddOriginTemplate extends Roa
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
 * @method string getUserList
 * @method self withUserList(string $userList)
 */
class AddAuthCheckWhiteList extends Roa
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
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class UpdateMaterialStatus extends Roa
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
 * @method string getCoverUrl
 * @method self withCoverUrl(string $coverUrl)
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
 * @method string getProjectIds
 * @method self withProjectIds(string $projectIds)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class UpdateEditingProjectStatus extends Roa
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
 * @method string getCoverUrl
 * @method self withCoverUrl(string $coverUrl)
 * @method float getDuration
 * @method self withDuration(float $duration)
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
 */
class ProduceEditingProjectVideo extends Roa
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
 */
class GetMaterialList extends Roa
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
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 */
class GetEditingProjectList extends Roa
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
 * @method bool getForce
 * @method self withForce(bool $force)
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
 * @method string getCreateTime
 * @method self withCreateTime(string $createTime)
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
 * @method string getCoverUrl
 * @method self withCoverUrl(string $coverUrl)
 * @method float getDuration
 * @method self withDuration(float $duration)
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
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getUserList
 * @method self withUserList(string $userList)
 */
class InitEditing extends Roa
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getKey1
 * @method self withKey1(string $key1)
 * @method string getKey2
 * @method self withKey2(string $key2)
 * @method string getTimeout
 * @method self withTimeout(string $timeout)
 */
class SetDomainAuth extends Roa
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class GetDomainAuth extends Roa
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
class GetAudioTemplate extends Roa
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
class ListAudioTemplate extends Roa
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
class ListAudioConfig extends Roa
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
 * @method string getCustomerId
 * @method self withCustomerId(string $customerId)
 */
class RefreshMaterialWorkFlow extends Roa
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
 * @method string getTemplateIds
 * @method self withTemplateIds(string $templateIds)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class UpdateAudioConfig extends Roa
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
 * @method string getCodec
 * @method self withCodec(string $codec)
 * @method string getBitrate
 * @method self withBitrate(string $bitrate)
 * @method string getChannel
 * @method self withChannel(string $channel)
 * @method string getRemove
 * @method self withRemove(string $remove)
 * @method string getName
 * @method self withName(string $name)
 * @method string getMuxer
 * @method self withMuxer(string $muxer)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getType
 * @method self withType(string $type)
 * @method string getIsDefault
 * @method self withIsDefault(string $isDefault)
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 */
class UpdateAudioTemplate extends Roa
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
 * @method string getTemplateIds
 * @method self withTemplateIds(string $templateIds)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class AddAudioConfig extends Roa
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
 * @method string getCodec
 * @method self withCodec(string $codec)
 * @method string getBitrate
 * @method self withBitrate(string $bitrate)
 * @method string getChannel
 * @method self withChannel(string $channel)
 * @method string getRemove
 * @method self withRemove(string $remove)
 * @method string getName
 * @method self withName(string $name)
 * @method string getMuxer
 * @method self withMuxer(string $muxer)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getType
 * @method self withType(string $type)
 * @method string getIsDefault
 * @method self withIsDefault(string $isDefault)
 */
class AddAudioTemplate extends Roa
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
 * @method string getTranscodeIds
 * @method self withTranscodeIds(string $transcodeIds)
 * @method string getEncryptTemplateIds
 * @method self withEncryptTemplateIds(string $encryptTemplateIds)
 * @method string getCustomerId
 * @method self withCustomerId(string $customerId)
 */
class UpdateSpecifyCustomerTemplateConfig extends Roa
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
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getTime
 * @method self withTime(string $time)
 * @method string getHeight
 * @method self withHeight(string $height)
 * @method string getWidth
 * @method self withWidth(string $width)
 * @method string getNumber
 * @method self withNumber(string $number)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getSnapshotId
 * @method self withSnapshotId(string $snapshotId)
 */
class UpdateSnapshot extends Roa
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
 * @method string getCustomerId
 * @method self withCustomerId(string $customerId)
 */
class RefreshWorkFlow extends Roa
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
 * @method string getCustomerId
 * @method self withCustomerId(string $customerId)
 */
class AddPipeline extends Roa
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
class GetCheckChannel extends Roa
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
 * @method string getLegalSwitch
 * @method self withLegalSwitch(string $legalSwitch)
 */
class SetCheckChannel extends Roa
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
 * @method string getType
 * @method self withType(string $type)
 * @method string getLevel
 * @method self withLevel(string $level)
 */
class GetPlayStatis extends Roa
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getRefererType
 * @method self withRefererType(string $refererType)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class ListDomainReferer extends Roa
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getRefererSwitch
 * @method self withRefererSwitch(string $refererSwitch)
 * @method string getAuthSwitch
 * @method self withAuthSwitch(string $authSwitch)
 */
class SetDomainSecurity extends Roa
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getReferType
 * @method self withReferType(string $referType)
 * @method string getReferList
 * @method self withReferList(string $referList)
 * @method string getAllowEmpty
 * @method self withAllowEmpty(string $allowEmpty)
 */
class SetCDNReferer extends Roa
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class GetDomainSecurity extends Roa
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getRefererIdList
 * @method self withRefererIdList(string $refererIdList)
 */
class DeleteDomainReferer extends Roa
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
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getRefererType
 * @method self withRefererType(string $refererType)
 * @method string getRefererList
 * @method self withRefererList(string $refererList)
 */
class AddDomainReferer extends Roa
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
class GetVideoPlayInfoForCloud extends Roa
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
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getYkVid
 * @method self withYkVid(string $ykVid)
 */
class GetMidYKVid extends Roa
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
 * @method string getYkVid
 * @method self withYkVid(string $ykVid)
 */
class DeleteMidYKVid extends Roa
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
 * @method string getYKCloudVid
 * @method self withYKCloudVid(string $yKCloudVid)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getYKVideoId
 * @method self withYKVideoId(string $yKVideoId)
 */
class AddMidYKVid extends Roa
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
 * @method string getstatus
 * @method self withstatus(string $status)
 */
class UpdateVideoStatus extends Roa
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
 * @method int getFileSize
 * @method self withFileSize(int $fileSize)
 * @method string getDuration
 * @method self withDuration(string $duration)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getMediaType
 * @method self withMediaType(string $mediaType)
 * @method string getSource
 * @method self withSource(string $source)
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
 * @method Integer getCateId
 * @method self withCateId(Integer $cateId)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getMediaType
 * @method self withMediaType(string $mediaType)
 * @method string getResultTypes
 * @method self withResultTypes(string $resultTypes)
 * @method string getPlayRand
 * @method self withPlayRand(string $playRand)
 * @method string getSource
 * @method self withSource(string $source)
 * @method string getApiVersion
 * @method self withApiVersion(string $apiVersion)
 * @method string getScrollToken
 * @method self withScrollToken(string $scrollToken)
 * @method string getPreprocessStatus
 * @method self withPreprocessStatus(string $preprocessStatus)
 * @method string getStorageLocation
 * @method self withStorageLocation(string $storageLocation)
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 */
class SearchVideo extends Roa
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
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 */
class GetVideoInfo extends Roa
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
class GetCategoryTree extends Roa
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
class GetCategoryList extends Roa
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
 * @method string getTag
 * @method self withTag(string $tag)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 */
class DeleteVideoTag extends Roa
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
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
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
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getTemplateGroupId
 * @method self withTemplateGroupId(string $templateGroupId)
 * @method string getWorkflowId
 * @method self withWorkflowId(string $workflowId)
 * @method string getStorageLocation
 * @method self withStorageLocation(string $storageLocation)
 */
class CreateUploadVideo extends Roa
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
 * @method string getCheckStatus
 * @method self withCheckStatus(string $checkStatus)
 * @method string getCheckReason
 * @method self withCheckReason(string $checkReason)
 */
class CheckVideo extends Roa
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
 * @method string getTag
 * @method self withTag(string $tag)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 */
class AddVideoTag extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method Integer getState
 * @method self withState(Integer $state)
 * @method string getPlayKey
 * @method self withPlayKey(string $playKey)
 * @method string getExpireTime
 * @method self withExpireTime(string $expireTime)
 * @method string getSignVersion
 * @method self withSignVersion(string $signVersion)
 * @method string getChannel
 * @method self withChannel(string $channel)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getClientVersion
 * @method self withClientVersion(string $clientVersion)
 * @method string getSource
 * @method self withSource(string $source)
 */
class AddApiAuth extends Roa
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
 * @method string getDomainType
 * @method self withDomainType(string $domainType)
 * @method bool getEnableDomain
 * @method self withEnableDomain(bool $enableDomain)
 * @method string getSourceType
 * @method self withSourceType(string $sourceType)
 * @method Integer getSourcePort
 * @method self withSourcePort(Integer $sourcePort)
 * @method string getSources
 * @method self withSources(string $sources)
 * @method string getPlayRegion
 * @method self withPlayRegion(string $playRegion)
 * @method string getPriorities
 * @method self withPriorities(string $priorities)
 */
class AddDomain extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getSignVersion
 * @method self withSignVersion(string $signVersion)
 * @method string getChannel
 * @method self withChannel(string $channel)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 */
class GetPlayChannelKey extends Roa
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
 */
class DeleteDomain extends Roa
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
 */
class GetDomain extends Roa
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
class GetDomainList extends Roa
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
 * @method Integer getFileType
 * @method self withFileType(Integer $fileType)
 * @method string getImageExt
 * @method self withImageExt(string $imageExt)
 */
class GetUploadSTSToken extends Roa
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
class GetServiceStatus extends Roa
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
class OpenService extends Roa
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
 * @method string getdata
 * @method self withdata(string $data)
 */
class NotifyProduce extends Roa
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
class NotifyInitResource extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method Integer getState
 * @method self withState(Integer $state)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 */
class GetPlayChannelList extends Roa
{
    use R;
}

/**
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method Integer getState
 * @method self withState(Integer $state)
 * @method string getExpireTime
 * @method self withExpireTime(string $expireTime)
 * @method string getSignVersion
 * @method self withSignVersion(string $signVersion)
 * @method string getChannel
 * @method self withChannel(string $channel)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getClientVersion
 * @method self withClientVersion(string $clientVersion)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 */
class UpdateApiAuth extends Roa
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
 */
class StopDomain extends Roa
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
 */
class StartDomain extends Roa
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
class UserExist extends Roa
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
 * @method string getFileUrl
 * @method self withFileUrl(string $fileUrl)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method Integer getPrivilege
 * @method self withPrivilege(Integer $privilege)
 * @method string getIP
 * @method self withIP(string $iP)
 * @method int getFileSize
 * @method self withFileSize(int $fileSize)
 * @method int getDuration
 * @method self withDuration(int $duration)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method string getFileMd5
 * @method self withFileMd5(string $fileMd5)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getCoverURL
 * @method self withCoverURL(string $coverURL)
 * @method Integer getCateId
 * @method self withCateId(Integer $cateId)
 * @method string getMediaWorkflowId
 * @method self withMediaWorkflowId(string $mediaWorkflowId)
 * @method string getMediaWorkflowUserData
 * @method self withMediaWorkflowUserData(string $mediaWorkflowUserData)
 * @method string getMediaWorkflowRunId
 * @method self withMediaWorkflowRunId(string $mediaWorkflowRunId)
 */
class AddMediaInfo extends Roa
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
 * @method string getOwnerId
 * @method self withOwnerId(string $ownerId)
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method int getCateId
 * @method self withCateId(int $cateId)
 */
class DeleteCategory extends Roa
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
 * @method string getstatus
 * @method self withstatus(string $status)
 */
class UpdateMediaInfoStatus extends Roa
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
class CategoryTree extends Roa
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
 * @method string getTag
 * @method self withTag(string $tag)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 */
class AddMediaTag extends Roa
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
 * @method string getLevelRule
 * @method self withLevelRule(string $levelRule)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
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
 * @method string getTag
 * @method self withTag(string $tag)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 */
class DeleteMediaTag extends Roa
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
class DeleteMediaInfo extends Roa
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
class GetOSSStatis extends Roa
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
 * @method Integer getCateId
 * @method self withCateId(Integer $cateId)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 */
class GetMediaInfoList extends Roa
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
class GetMediaInfo extends Roa
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
 * @method Integer getCateId
 * @method self withCateId(Integer $cateId)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class SearchMediaInfo extends Roa
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
class RefreshUploadToken extends Roa
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
class ListAllCategory extends Roa
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
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getFileUrl
 * @method self withFileUrl(string $fileUrl)
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method Integer getPrivilege
 * @method self withPrivilege(Integer $privilege)
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getCoverURL
 * @method self withCoverURL(string $coverURL)
 * @method Integer getCateId
 * @method self withCateId(Integer $cateId)
 * @method int getDuration
 * @method self withDuration(int $duration)
 * @method string getMediaWorkflowId
 * @method self withMediaWorkflowId(string $mediaWorkflowId)
 * @method string getMediaWorkflowUserData
 * @method self withMediaWorkflowUserData(string $mediaWorkflowUserData)
 * @method string getMediaWorkflowRunId
 * @method self withMediaWorkflowRunId(string $mediaWorkflowRunId)
 */
class UpdateMediaInfo extends Roa
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
 * @method string getCateId
 * @method self withCateId(string $cateId)
 */
class UpdateMediaCategory extends Roa
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
 * @method string getCateName
 * @method self withCateName(string $cateName)
 * @method string getCateId
 * @method self withCateId(string $cateId)
 */
class UpdateCategoryName extends Roa
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
 * @method string getHorizontalOffet
 * @method self withHorizontalOffet(string $horizontalOffet)
 * @method string getHorizontalOffset
 * @method self withHorizontalOffset(string $horizontalOffset)
 * @method string getVerticalOffset
 * @method self withVerticalOffset(string $verticalOffset)
 * @method string getPosition
 * @method self withPosition(string $position)
 * @method string getType
 * @method self withType(string $type)
 * @method string getBucket
 * @method self withBucket(string $bucket)
 * @method string getObject
 * @method self withObject(string $object)
 * @method string getName
 * @method self withName(string $name)
 * @method string getWidth
 * @method self withWidth(string $width)
 * @method string getHeight
 * @method self withHeight(string $height)
 * @method string getActive
 * @method self withActive(string $active)
 * @method string getScreenMode
 * @method self withScreenMode(string $screenMode)
 * @method Integer getVideoWidth
 * @method self withVideoWidth(Integer $videoWidth)
 * @method Integer getVideoHeight
 * @method self withVideoHeight(Integer $videoHeight)
 * @method string getWatermarkConfig
 * @method self withWatermarkConfig(string $watermarkConfig)
 * @method string getFileUrl
 * @method self withFileUrl(string $fileUrl)
 * @method Integer getScreenWidth
 * @method self withScreenWidth(Integer $screenWidth)
 * @method Integer getScreenHeight
 * @method self withScreenHeight(Integer $screenHeight)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 */
class AddWatermark extends Roa
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
 * @method string getMuxer
 * @method self withMuxer(string $muxer)
 * @method string getResolution
 * @method self withResolution(string $resolution)
 * @method string getDetail
 * @method self withDetail(string $detail)
 * @method string getName
 * @method self withName(string $name)
 * @method string getVideoBitrate
 * @method self withVideoBitrate(string $videoBitrate)
 * @method string getVideoCodec
 * @method self withVideoCodec(string $videoCodec)
 * @method string getAudioBitrate
 * @method self withAudioBitrate(string $audioBitrate)
 * @method string getAudioCodec
 * @method self withAudioCodec(string $audioCodec)
 */
class AddTranscodeTemplate extends Roa
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
 * @method string getTime
 * @method self withTime(string $time)
 * @method string getHeight
 * @method self withHeight(string $height)
 * @method string getWidth
 * @method self withWidth(string $width)
 * @method string getNumber
 * @method self withNumber(string $number)
 */
class AddSnapshot extends Roa
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
class GetCustomerTranscodeConf extends Roa
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
 */
class GetWatermarks extends Roa
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
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class SwitchWatermark extends Roa
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
class GetWatermarkSwitch extends Roa
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
 * @method string getMuxer
 * @method self withMuxer(string $muxer)
 * @method string getResolution
 * @method self withResolution(string $resolution)
 * @method string getDetail
 * @method self withDetail(string $detail)
 * @method string getName
 * @method self withName(string $name)
 * @method string getVideoBitrate
 * @method self withVideoBitrate(string $videoBitrate)
 * @method string getVideoCodec
 * @method self withVideoCodec(string $videoCodec)
 * @method string getAudioBitrate
 * @method self withAudioBitrate(string $audioBitrate)
 * @method string getAudioCodec
 * @method self withAudioCodec(string $audioCodec)
 */
class UpdateTranscodeTemplate extends Roa
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
 * @method string getids
 * @method self withids(string $ids)
 * @method string getEncryptTemplayeIds
 * @method self withEncryptTemplayeIds(string $encryptTemplayeIds)
 */
class UpdateTranscodeConf extends Roa
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
 * @method string getHorizontalOffet
 * @method self withHorizontalOffet(string $horizontalOffet)
 * @method string getHorizontalOffset
 * @method self withHorizontalOffset(string $horizontalOffset)
 * @method string getVerticalOffset
 * @method self withVerticalOffset(string $verticalOffset)
 * @method string getPosition
 * @method self withPosition(string $position)
 * @method string getType
 * @method self withType(string $type)
 * @method string getBucket
 * @method self withBucket(string $bucket)
 * @method string getObject
 * @method self withObject(string $object)
 * @method string getName
 * @method self withName(string $name)
 * @method string getWidth
 * @method self withWidth(string $width)
 * @method string getHeight
 * @method self withHeight(string $height)
 * @method string getWatermarkId
 * @method self withWatermarkId(string $watermarkId)
 * @method string getScreenMode
 * @method self withScreenMode(string $screenMode)
 * @method Integer getVideoWidth
 * @method self withVideoWidth(Integer $videoWidth)
 * @method Integer getVideoHeight
 * @method self withVideoHeight(Integer $videoHeight)
 * @method string getWatermarkConfig
 * @method self withWatermarkConfig(string $watermarkConfig)
 * @method string getFileUrl
 * @method self withFileUrl(string $fileUrl)
 * @method Integer getScreenWidth
 * @method self withScreenWidth(Integer $screenWidth)
 * @method Integer getScreenHeight
 * @method self withScreenHeight(Integer $screenHeight)
 * @method int getResourceRealOwnerId
 * @method self withResourceRealOwnerId(int $resourceRealOwnerId)
 */
class UpdateWatermark extends Roa
{
    use R;
}
