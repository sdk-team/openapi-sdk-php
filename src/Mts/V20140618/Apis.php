<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SubmitMCJob submitMCJob($options = [])
 * @method QueryMCJobList queryMCJobList($options = [])
 * @method UpdateMCTemplate updateMCTemplate($options = [])
 * @method QueryMCTemplateList queryMCTemplateList($options = [])
 * @method DeleteMCTemplate deleteMCTemplate($options = [])
 * @method AddMCTemplate addMCTemplate($options = [])
 * @method CreateMcuTemplate createMcuTemplate($options = [])
 * @method DeleteMcuJob deleteMcuJob($options = [])
 * @method SubmitMcuJob submitMcuJob($options = [])
 * @method UpdateMcuTemplate updateMcuTemplate($options = [])
 * @method QueryMcuTemplate queryMcuTemplate($options = [])
 * @method QueryMcuJob queryMcuJob($options = [])
 * @method DeleteMcuTemplate deleteMcuTemplate($options = [])
 * @method QueryMediaFpDeleteJobList queryMediaFpDeleteJobList($options = [])
 * @method SubmitMediaFpDeleteJob submitMediaFpDeleteJob($options = [])
 * @method QueryImageSearchJobList queryImageSearchJobList($options = [])
 * @method SubmitImageSearchJob submitImageSearchJob($options = [])
 * @method QueryFpImportResult queryFpImportResult($options = [])
 * @method QueryVideoPoseJobList queryVideoPoseJobList($options = [])
 * @method SubmitVideoPoseJob submitVideoPoseJob($options = [])
 * @method QueryMediaCensorJobDetail queryMediaCensorJobDetail($options = [])
 * @method SubmitMediaCensorJob submitMediaCensorJob($options = [])
 * @method SetCdnDomainConfigsInner setCdnDomainConfigsInner($options = [])
 * @method QueryComplexJobList queryComplexJobList($options = [])
 * @method SubmitComplexJob submitComplexJob($options = [])
 * @method QuerySubtitleJobList querySubtitleJobList($options = [])
 * @method SubmitSubtitleJob submitSubtitleJob($options = [])
 * @method PhysicalDeleteResource physicalDeleteResource($options = [])
 * @method LogicalDeleteResource logicalDeleteResource($options = [])
 * @method CheckResource checkResource($options = [])
 * @method SubmitImageQualityJob submitImageQualityJob($options = [])
 * @method SubmitVideoGifJob submitVideoGifJob($options = [])
 * @method QueryVideoGifJobList queryVideoGifJobList($options = [])
 * @method UpdateMediaWorkflowTriggerMode updateMediaWorkflowTriggerMode($options = [])
 * @method CreateSession createSession($options = [])
 * @method GetLicense getLicense($options = [])
 * @method GetPackage getPackage($options = [])
 * @method QueryFpShotJobList queryFpShotJobList($options = [])
 * @method ReportFpShotJobResult reportFpShotJobResult($options = [])
 * @method SubmitFpShotJob submitFpShotJob($options = [])
 * @method RegisterMediaDetailPerson registerMediaDetailPerson($options = [])
 * @method ReportVideoSplitJobResult reportVideoSplitJobResult($options = [])
 * @method SubmitVideoSplitJob submitVideoSplitJob($options = [])
 * @method QueryVideoSplitJobList queryVideoSplitJobList($options = [])
 * @method RegisterMediaDetailScenario registerMediaDetailScenario($options = [])
 * @method QueryMediaDetailJobList queryMediaDetailJobList($options = [])
 * @method SubmitMediaDetailJob submitMediaDetailJob($options = [])
 * @method ReportMediaDetailJobResult reportMediaDetailJobResult($options = [])
 * @method SubmitFacerecogJob submitFacerecogJob($options = [])
 * @method SubmitAnnotationJob submitAnnotationJob($options = [])
 * @method ReportFacerecogJobResult reportFacerecogJobResult($options = [])
 * @method ReportAnnotationJobResult reportAnnotationJobResult($options = [])
 * @method QueryFacerecogJobList queryFacerecogJobList($options = [])
 * @method QueryAnnotationJobList queryAnnotationJobList($options = [])
 * @method UpdateTerrorismPipeline updateTerrorismPipeline($options = [])
 * @method UpdateCensorPipeline updateCensorPipeline($options = [])
 * @method SubmitTerrorismJob submitTerrorismJob($options = [])
 * @method SubmitCensorJob submitCensorJob($options = [])
 * @method ReportTerrorismJobResult reportTerrorismJobResult($options = [])
 * @method ReportCensorJobResult reportCensorJobResult($options = [])
 * @method QueryTerrorismPipelineList queryTerrorismPipelineList($options = [])
 * @method QueryCensorPipelineList queryCensorPipelineList($options = [])
 * @method QueryTerrorismJobList queryTerrorismJobList($options = [])
 * @method QueryCensorJobList queryCensorJobList($options = [])
 * @method ListTerrorismPipeline listTerrorismPipeline($options = [])
 * @method ListCensorPipeline listCensorPipeline($options = [])
 * @method AddTerrorismPipeline addTerrorismPipeline($options = [])
 * @method AddCensorPipeline addCensorPipeline($options = [])
 * @method ReportTagJobResult reportTagJobResult($options = [])
 * @method QueryTagJobList queryTagJobList($options = [])
 * @method SubmitTagJob submitTagJob($options = [])
 * @method UpdateVideoSummaryPipeline updateVideoSummaryPipeline($options = [])
 * @method SubmitVideoSummaryJob submitVideoSummaryJob($options = [])
 * @method QueryVideoSummaryPipelineList queryVideoSummaryPipelineList($options = [])
 * @method QueryVideoSummaryJobList queryVideoSummaryJobList($options = [])
 * @method ListVideoSummaryPipeline listVideoSummaryPipeline($options = [])
 * @method AddVideoSummaryPipeline addVideoSummaryPipeline($options = [])
 * @method QueryEditingJobList queryEditingJobList($options = [])
 * @method SubmitEditingJobs submitEditingJobs($options = [])
 * @method UpdateCoverPipeline updateCoverPipeline($options = [])
 * @method SubmitCoverJob submitCoverJob($options = [])
 * @method ReportCoverJobResult reportCoverJobResult($options = [])
 * @method QueryCoverPipelineList queryCoverPipelineList($options = [])
 * @method QueryCoverJobList queryCoverJobList($options = [])
 * @method ListCoverPipeline listCoverPipeline($options = [])
 * @method AddCoverPipeline addCoverPipeline($options = [])
 * @method UpdateAsrPipeline updateAsrPipeline($options = [])
 * @method SubmitAsrJob submitAsrJob($options = [])
 * @method QueryAsrPipelineList queryAsrPipelineList($options = [])
 * @method QueryAsrJobList queryAsrJobList($options = [])
 * @method ListAsrPipeline listAsrPipeline($options = [])
 * @method AddAsrPipeline addAsrPipeline($options = [])
 * @method UpdatePornPipeline updatePornPipeline($options = [])
 * @method SubmitPornJob submitPornJob($options = [])
 * @method ReportPornJobResult reportPornJobResult($options = [])
 * @method QueryPornPipelineList queryPornPipelineList($options = [])
 * @method QueryPornJobList queryPornJobList($options = [])
 * @method ListPornPipeline listPornPipeline($options = [])
 * @method AddPornPipeline addPornPipeline($options = [])
 * @method UnbindOutputBucket unbindOutputBucket($options = [])
 * @method UnbindInputBucket unbindInputBucket($options = [])
 * @method ListMedia listMedia($options = [])
 * @method RefreshCdnDomainConfigsCache refreshCdnDomainConfigsCache($options = [])
 * @method SetAuthConfig setAuthConfig($options = [])
 * @method QueryAuthConfig queryAuthConfig($options = [])
 * @method PlayInfo playInfo($options = [])
 * @method DecryptKey decryptKey($options = [])
 * @method QueryServiceUsage queryServiceUsage($options = [])
 * @method UpdateMediaStorage updateMediaStorage($options = [])
 * @method SubmitMediaWorkflow submitMediaWorkflow($options = [])
 * @method StopMediaWorkflow stopMediaWorkflow($options = [])
 * @method StartWorkflowExecution startWorkflowExecution($options = [])
 * @method SearchMediaWorkflowExecution searchMediaWorkflowExecution($options = [])
 * @method RegisterWorkflowType registerWorkflowType($options = [])
 * @method DeleteMediaList deleteMediaList($options = [])
 * @method CreateMediaStorage createMediaStorage($options = [])
 * @method AddMediaBucket addMediaBucket($options = [])
 * @method UpdateMediaPublishState updateMediaPublishState($options = [])
 * @method UpdateMediaCover updateMediaCover($options = [])
 * @method UpdateMediaCategory updateMediaCategory($options = [])
 * @method UpdateMedia updateMedia($options = [])
 * @method UpdateInputBucketSyncState updateInputBucketSyncState($options = [])
 * @method UpdateCategoryName updateCategoryName($options = [])
 * @method QueryMediaListByURL queryMediaListByURL($options = [])
 * @method ListAllMediaBucket listAllMediaBucket($options = [])
 * @method ListAllCategory listAllCategory($options = [])
 * @method DeleteMediaTag deleteMediaTag($options = [])
 * @method DeleteCategory deleteCategory($options = [])
 * @method CategoryTree categoryTree($options = [])
 * @method BindOutputBucket bindOutputBucket($options = [])
 * @method BindInputBucket bindInputBucket($options = [])
 * @method AddMediaTag addMediaTag($options = [])
 * @method AddMedia addMedia($options = [])
 * @method AddCategory addCategory($options = [])
 * @method ListJob listJob($options = [])
 * @method UpdateMediaWorkflow updateMediaWorkflow($options = [])
 * @method SearchMediaWorkflow searchMediaWorkflow($options = [])
 * @method SearchMedia searchMedia($options = [])
 * @method QuerySystemTemplateList querySystemTemplateList($options = [])
 * @method QueryMediaWorkflowListByName queryMediaWorkflowListByName($options = [])
 * @method QueryMediaWorkflowList queryMediaWorkflowList($options = [])
 * @method QueryMediaWorkflowExecutionList queryMediaWorkflowExecutionList($options = [])
 * @method QueryMediaList queryMediaList($options = [])
 * @method ListSystemTemplate listSystemTemplate($options = [])
 * @method ListMediaWorkflowExecutions listMediaWorkflowExecutions($options = [])
 * @method DeleteMediaWorkflow deleteMediaWorkflow($options = [])
 * @method DeleteMedia deleteMedia($options = [])
 * @method DeactivateMediaWorkflow deactivateMediaWorkflow($options = [])
 * @method AddMediaWorkflow addMediaWorkflow($options = [])
 * @method ActivateMediaWorkflow activateMediaWorkflow($options = [])
 * @method SubmitMetaInfoJob submitMetaInfoJob($options = [])
 * @method QueryMetaInfoJobList queryMetaInfoJobList($options = [])
 * @method QueryJobListByFile queryJobListByFile($options = [])
 * @method AddTemplate addTemplate($options = [])
 * @method AddPipeline addPipeline($options = [])
 * @method QueryAnalysisJobList queryAnalysisJobList($options = [])
 * @method PlayerAuth playerAuth($options = [])
 * @method DeleteWaterMarkTemplate deleteWaterMarkTemplate($options = [])
 * @method DeleteTemplate deleteTemplate($options = [])
 * @method DeletePipeline deletePipeline($options = [])
 * @method CancelJob cancelJob($options = [])
 * @method AddWaterMarkTemplate addWaterMarkTemplate($options = [])
 * @method QueryJobList queryJobList($options = [])
 * @method QueryTemplateList queryTemplateList($options = [])
 * @method QuerySnapshotJobList querySnapshotJobList($options = [])
 * @method QueryPipelineList queryPipelineList($options = [])
 * @method QueryMediaInfoJobList queryMediaInfoJobList($options = [])
 * @method QueryJobListByPid queryJobListByPid($options = [])
 * @method SearchPipeline searchPipeline($options = [])
 * @method SearchJob searchJob($options = [])
 * @method QueryWaterMarkTemplateList queryWaterMarkTemplateList($options = [])
 * @method SubmitAnalysisJob submitAnalysisJob($options = [])
 * @method SearchWaterMarkTemplate searchWaterMarkTemplate($options = [])
 * @method SearchTemplate searchTemplate($options = [])
 * @method UpdateWaterMarkTemplate updateWaterMarkTemplate($options = [])
 * @method UpdateTemplate updateTemplate($options = [])
 * @method UpdatePipeline updatePipeline($options = [])
 * @method SubmitSnapshotJob submitSnapshotJob($options = [])
 * @method SubmitMediaInfoJob submitMediaInfoJob($options = [])
 * @method SubmitJobs submitJobs($options = [])
 * @method RegisterMediaWorkflowType registerMediaWorkflowType($options = [])
 * @method StartMediaWorkflowExecution startMediaWorkflowExecution($options = [])
 */
class V20140618
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
 * @method string getVideo
 * @method self withVideo(string $video)
 * @method string getImages
 * @method self withImages(string $images)
 * @method string getTexts
 * @method self withTexts(string $texts)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getCensorConfig
 * @method self withCensorConfig(string $censorConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitMCJob extends Roa
{
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
 * @method string getNextPageToken
 * @method self withNextPageToken(string $nextPageToken)
 * @method int getMaximumPageSize
 * @method self withMaximumPageSize(int $maximumPageSize)
 * @method string getState
 * @method self withState(string $state)
 * @method string getStartOfJobCreatedTimeRange
 * @method self withStartOfJobCreatedTimeRange(string $startOfJobCreatedTimeRange)
 * @method string getEndOfJobCreatedTimeRange
 * @method self withEndOfJobCreatedTimeRange(string $endOfJobCreatedTimeRange)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryMCJobList extends Roa
{
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
 * @method string getName
 * @method self withName(string $name)
 * @method string getPorn
 * @method self withPorn(string $porn)
 * @method string getTerrorism
 * @method self withTerrorism(string $terrorism)
 * @method string getPolitics
 * @method self withPolitics(string $politics)
 * @method string getAd
 * @method self withAd(string $ad)
 * @method string getQrcode
 * @method self withQrcode(string $qrcode)
 * @method string getLive
 * @method self withLive(string $live)
 * @method string getLogo
 * @method self withLogo(string $logo)
 * @method string getAbuse
 * @method self withAbuse(string $abuse)
 * @method string getContraband
 * @method self withContraband(string $contraband)
 * @method string getspam
 * @method self withspam(string $spam)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UpdateMCTemplate extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryMCTemplateList extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteMCTemplate extends Roa
{
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
 * @method string getPorn
 * @method self withPorn(string $porn)
 * @method string getTerrorism
 * @method self withTerrorism(string $terrorism)
 * @method string getPolitics
 * @method self withPolitics(string $politics)
 * @method string getAd
 * @method self withAd(string $ad)
 * @method string getQrcode
 * @method self withQrcode(string $qrcode)
 * @method string getLive
 * @method self withLive(string $live)
 * @method string getLogo
 * @method self withLogo(string $logo)
 * @method string getAbuse
 * @method self withAbuse(string $abuse)
 * @method string getContraband
 * @method self withContraband(string $contraband)
 * @method string getspam
 * @method self withspam(string $spam)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AddMCTemplate extends Roa
{
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
 * @method string getTemplate
 * @method self withTemplate(string $template)
 */
class CreateMcuTemplate extends Roa
{
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
 * @method string getJobIds
 * @method self withJobIds(string $jobIds)
 */
class DeleteMcuJob extends Roa
{
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
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 * @method string getTemplate
 * @method self withTemplate(string $template)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class SubmitMcuJob extends Roa
{
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
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 * @method string getTemplate
 * @method self withTemplate(string $template)
 */
class UpdateMcuTemplate extends Roa
{
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
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 */
class QueryMcuTemplate extends Roa
{
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
 * @method string getJobIds
 * @method self withJobIds(string $jobIds)
 */
class QueryMcuJob extends Roa
{
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
 * @method string getTemplateId
 * @method self withTemplateId(string $templateId)
 */
class DeleteMcuTemplate extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryMediaFpDeleteJobList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getPrimaryKey
 * @method self withPrimaryKey(string $primaryKey)
 * @method string getFpDBId
 * @method self withFpDBId(string $fpDBId)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitMediaFpDeleteJob extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryImageSearchJobList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInputVideo
 * @method self withInputVideo(string $inputVideo)
 * @method string getInputImage
 * @method self withInputImage(string $inputImage)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getFpDBId
 * @method self withFpDBId(string $fpDBId)
 * @method string getConfig
 * @method self withConfig(string $config)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitImageSearchJob extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageIndex
 * @method self withPageIndex(int $pageIndex)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryFpImportResult extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryVideoPoseJobList extends Roa
{
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
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getOutputConfig
 * @method self withOutputConfig(string $outputConfig)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class SubmitVideoPoseJob extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 * @method string getNextPageToken
 * @method self withNextPageToken(string $nextPageToken)
 * @method int getMaximumPageSize
 * @method self withMaximumPageSize(int $maximumPageSize)
 */
class QueryMediaCensorJobDetail extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getCoverImages
 * @method self withCoverImages(string $coverImages)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getBarrages
 * @method self withBarrages(string $barrages)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getVideoCensorConfig
 * @method self withVideoCensorConfig(string $videoCensorConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitMediaCensorJob extends Roa
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
 * @method string getOSSDomain
 * @method self withOSSDomain(string $oSSDomain)
 * @method string getCDNDomain
 * @method self withCDNDomain(string $cDNDomain)
 * @method string getDomainStatus
 * @method self withDomainStatus(string $domainStatus)
 * @method string getAuthType
 * @method self withAuthType(string $authType)
 * @method string getKey1
 * @method self withKey1(string $key1)
 * @method string getKey2
 * @method self withKey2(string $key2)
 * @method string getRedirectType
 * @method self withRedirectType(string $redirectType)
 */
class SetCdnDomainConfigsInner extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryComplexJobList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInputs
 * @method self withInputs(string $inputs)
 * @method string getComplexConfigs
 * @method self withComplexConfigs(string $complexConfigs)
 * @method string getTranscodeOutput
 * @method self withTranscodeOutput(string $transcodeOutput)
 * @method string getOutputBucket
 * @method self withOutputBucket(string $outputBucket)
 * @method string getOutputLocation
 * @method self withOutputLocation(string $outputLocation)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitComplexJob extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QuerySubtitleJobList extends Roa
{
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
 * @method string getInputConfig
 * @method self withInputConfig(string $inputConfig)
 * @method string getOutputConfig
 * @method self withOutputConfig(string $outputConfig)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getUserData
 * @method self withUserData(string $userData)
 */
class SubmitSubtitleJob extends Roa
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
class PhysicalDeleteResource extends Roa
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
class LogicalDeleteResource extends Roa
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
class CheckResource extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitImageQualityJob extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getVideoGifConfig
 * @method self withVideoGifConfig(string $videoGifConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitVideoGifJob extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryVideoGifJobList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaWorkflowId
 * @method self withMediaWorkflowId(string $mediaWorkflowId)
 * @method string getTriggerMode
 * @method self withTriggerMode(string $triggerMode)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UpdateMediaWorkflowTriggerMode extends Roa
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
 * @method string getEndUserId
 * @method self withEndUserId(string $endUserId)
 * @method Integer getSessionTime
 * @method self withSessionTime(Integer $sessionTime)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 */
class CreateSession extends Roa
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
 * @method string getLicenseUrl
 * @method self withLicenseUrl(string $licenseUrl)
 * @method string getData
 * @method self withData(string $data)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getHeader
 * @method self withHeader(string $header)
 * @method string getType
 * @method self withType(string $type)
 */
class GetLicense extends Roa
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
 * @method string getData
 * @method self withData(string $data)
 */
class GetPackage extends Roa
{
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
 * @method string getNextPageToken
 * @method self withNextPageToken(string $nextPageToken)
 * @method int getMaximumPageSize
 * @method self withMaximumPageSize(int $maximumPageSize)
 * @method string getState
 * @method self withState(string $state)
 * @method string getStartOfJobCreatedTimeRange
 * @method self withStartOfJobCreatedTimeRange(string $startOfJobCreatedTimeRange)
 * @method string getEndOfJobCreatedTimeRange
 * @method self withEndOfJobCreatedTimeRange(string $endOfJobCreatedTimeRange)
 * @method string getPrimaryKeyList
 * @method self withPrimaryKeyList(string $primaryKeyList)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryFpShotJobList extends Roa
{
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
 * @method string getResult
 * @method self withResult(string $result)
 * @method string getDetails
 * @method self withDetails(string $details)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ReportFpShotJobResult extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getFpShotConfig
 * @method self withFpShotConfig(string $fpShotConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitFpShotJob extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getCategory
 * @method self withCategory(string $category)
 * @method string getPersonName
 * @method self withPersonName(string $personName)
 * @method string getImages
 * @method self withImages(string $images)
 * @method string getPersonLib
 * @method self withPersonLib(string $personLib)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class RegisterMediaDetailPerson extends Roa
{
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
 * @method string getResult
 * @method self withResult(string $result)
 * @method string getDetails
 * @method self withDetails(string $details)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ReportVideoSplitJobResult extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getVideoSplitConfig
 * @method self withVideoSplitConfig(string $videoSplitConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitVideoSplitJob extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryVideoSplitJobList extends Roa
{
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
 * @method string getScenario
 * @method self withScenario(string $scenario)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class RegisterMediaDetailScenario extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryMediaDetailJobList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getMediaDetailConfig
 * @method self withMediaDetailConfig(string $mediaDetailConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitMediaDetailJob extends Roa
{
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
 * @method string getTag
 * @method self withTag(string $tag)
 * @method string getResults
 * @method self withResults(string $results)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ReportMediaDetailJobResult extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getFacerecogConfig
 * @method self withFacerecogConfig(string $facerecogConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitFacerecogJob extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getAnnotationConfig
 * @method self withAnnotationConfig(string $annotationConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitAnnotationJob extends Roa
{
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
 * @method string getFacerecog
 * @method self withFacerecog(string $facerecog)
 * @method string getDetails
 * @method self withDetails(string $details)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ReportFacerecogJobResult extends Roa
{
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
 * @method string getAnnotation
 * @method self withAnnotation(string $annotation)
 * @method string getDetails
 * @method self withDetails(string $details)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ReportAnnotationJobResult extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getFacerecogJobIds
 * @method self withFacerecogJobIds(string $facerecogJobIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryFacerecogJobList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getAnnotationJobIds
 * @method self withAnnotationJobIds(string $annotationJobIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryAnnotationJobList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getState
 * @method self withState(string $state)
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 * @method string getNotifyConfig
 * @method self withNotifyConfig(string $notifyConfig)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UpdateTerrorismPipeline extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getState
 * @method self withState(string $state)
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 * @method string getNotifyConfig
 * @method self withNotifyConfig(string $notifyConfig)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UpdateCensorPipeline extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getTerrorismConfig
 * @method self withTerrorismConfig(string $terrorismConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitTerrorismJob extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getCoverImages
 * @method self withCoverImages(string $coverImages)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getBarrages
 * @method self withBarrages(string $barrages)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getCensorConfig
 * @method self withCensorConfig(string $censorConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitCensorJob extends Roa
{
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
 * @method string getLabel
 * @method self withLabel(string $label)
 * @method string getDetail
 * @method self withDetail(string $detail)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ReportTerrorismJobResult extends Roa
{
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
 * @method string getLabel
 * @method self withLabel(string $label)
 * @method string getDetail
 * @method self withDetail(string $detail)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ReportCensorJobResult extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getPipelineIds
 * @method self withPipelineIds(string $pipelineIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryTerrorismPipelineList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getPipelineIds
 * @method self withPipelineIds(string $pipelineIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryCensorPipelineList extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryTerrorismJobList extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryCensorJobList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getState
 * @method self withState(string $state)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ListTerrorismPipeline extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getState
 * @method self withState(string $state)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ListCensorPipeline extends Roa
{
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
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 * @method string getNotifyConfig
 * @method self withNotifyConfig(string $notifyConfig)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AddTerrorismPipeline extends Roa
{
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
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 * @method string getNotifyConfig
 * @method self withNotifyConfig(string $notifyConfig)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AddCensorPipeline extends Roa
{
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
 * @method string getTag
 * @method self withTag(string $tag)
 * @method string getResult
 * @method self withResult(string $result)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ReportTagJobResult extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getTagJobIds
 * @method self withTagJobIds(string $tagJobIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryTagJobList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getTagConfig
 * @method self withTagConfig(string $tagConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitTagJob extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getState
 * @method self withState(string $state)
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 * @method string getNotifyConfig
 * @method self withNotifyConfig(string $notifyConfig)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UpdateVideoSummaryPipeline extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getVideoSummaryConfig
 * @method self withVideoSummaryConfig(string $videoSummaryConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitVideoSummaryJob extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getPipelineIds
 * @method self withPipelineIds(string $pipelineIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryVideoSummaryPipelineList extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryVideoSummaryJobList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getState
 * @method self withState(string $state)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ListVideoSummaryPipeline extends Roa
{
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
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 * @method string getNotifyConfig
 * @method self withNotifyConfig(string $notifyConfig)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AddVideoSummaryPipeline extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryEditingJobList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getEditingInputs
 * @method self withEditingInputs(string $editingInputs)
 * @method string getEditingJobOutputs
 * @method self withEditingJobOutputs(string $editingJobOutputs)
 * @method string getOutputBucket
 * @method self withOutputBucket(string $outputBucket)
 * @method string getOutputLocation
 * @method self withOutputLocation(string $outputLocation)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitEditingJobs extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getState
 * @method self withState(string $state)
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 * @method string getNotifyConfig
 * @method self withNotifyConfig(string $notifyConfig)
 * @method string getRole
 * @method self withRole(string $role)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UpdateCoverPipeline extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getCoverConfig
 * @method self withCoverConfig(string $coverConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitCoverJob extends Roa
{
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
 * @method string getResult
 * @method self withResult(string $result)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ReportCoverJobResult extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getPipelineIds
 * @method self withPipelineIds(string $pipelineIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryCoverPipelineList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getCoverJobIds
 * @method self withCoverJobIds(string $coverJobIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryCoverJobList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getState
 * @method self withState(string $state)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ListCoverPipeline extends Roa
{
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
 * @method string getPriority
 * @method self withPriority(string $priority)
 * @method string getNotifyConfig
 * @method self withNotifyConfig(string $notifyConfig)
 * @method string getRole
 * @method self withRole(string $role)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AddCoverPipeline extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getState
 * @method self withState(string $state)
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 * @method string getNotifyConfig
 * @method self withNotifyConfig(string $notifyConfig)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UpdateAsrPipeline extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getAsrConfig
 * @method self withAsrConfig(string $asrConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitAsrJob extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getPipelineIds
 * @method self withPipelineIds(string $pipelineIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryAsrPipelineList extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryAsrJobList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getState
 * @method self withState(string $state)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ListAsrPipeline extends Roa
{
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
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 * @method string getNotifyConfig
 * @method self withNotifyConfig(string $notifyConfig)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AddAsrPipeline extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getState
 * @method self withState(string $state)
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 * @method string getNotifyConfig
 * @method self withNotifyConfig(string $notifyConfig)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UpdatePornPipeline extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getPornConfig
 * @method self withPornConfig(string $pornConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitPornJob extends Roa
{
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
 * @method string getLabel
 * @method self withLabel(string $label)
 * @method string getDetail
 * @method self withDetail(string $detail)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ReportPornJobResult extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getPipelineIds
 * @method self withPipelineIds(string $pipelineIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryPornPipelineList extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryPornJobList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getState
 * @method self withState(string $state)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ListPornPipeline extends Roa
{
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
 * @method Integer getPriority
 * @method self withPriority(Integer $priority)
 * @method string getNotifyConfig
 * @method self withNotifyConfig(string $notifyConfig)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AddPornPipeline extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getBucket
 * @method self withBucket(string $bucket)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UnbindOutputBucket extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getBucket
 * @method self withBucket(string $bucket)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UnbindInputBucket extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getNextPageToken
 * @method self withNextPageToken(string $nextPageToken)
 * @method int getMaximumPageSize
 * @method self withMaximumPageSize(int $maximumPageSize)
 * @method string getFrom
 * @method self withFrom(string $from)
 * @method string getTo
 * @method self withTo(string $to)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ListMedia extends Roa
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
 * @method string getDomains
 * @method self withDomains(string $domains)
 */
class RefreshCdnDomainConfigsCache extends Roa
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
 * @method string getKey1
 * @method self withKey1(string $key1)
 * @method string getKey2
 * @method self withKey2(string $key2)
 */
class SetAuthConfig extends Roa
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
class QueryAuthConfig extends Roa
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
 * @method string getFormats
 * @method self withFormats(string $formats)
 * @method string getAuthInfo
 * @method self withAuthInfo(string $authInfo)
 * @method int getAuthTimeout
 * @method self withAuthTimeout(int $authTimeout)
 * @method string getRand
 * @method self withRand(string $rand)
 * @method string getPlayDomain
 * @method self withPlayDomain(string $playDomain)
 * @method string getHlsUriToken
 * @method self withHlsUriToken(string $hlsUriToken)
 * @method string getTerminal
 * @method self withTerminal(string $terminal)
 */
class PlayInfo extends Roa
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
 * @method string getCiphertextBlob
 * @method self withCiphertextBlob(string $ciphertextBlob)
 * @method string getRand
 * @method self withRand(string $rand)
 */
class DecryptKey extends Roa
{
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
 * @method string getCodec
 * @method self withCodec(string $codec)
 * @method string getDefinition
 * @method self withDefinition(string $definition)
 * @method string getQueryRegion
 * @method self withQueryRegion(string $queryRegion)
 * @method string getStartOfDayRange
 * @method self withStartOfDayRange(string $startOfDayRange)
 * @method string getEndOfDayRange
 * @method self withEndOfDayRange(string $endOfDayRange)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryServiceUsage extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getBucket
 * @method self withBucket(string $bucket)
 * @method bool getSync
 * @method self withSync(bool $sync)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UpdateMediaStorage extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaWorkflowId
 * @method self withMediaWorkflowId(string $mediaWorkflowId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitMediaWorkflow extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaWorkflowId
 * @method self withMediaWorkflowId(string $mediaWorkflowId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class StopMediaWorkflow extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getWorkflowType
 * @method self withWorkflowType(string $workflowType)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class StartWorkflowExecution extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaWorkflowName
 * @method self withMediaWorkflowName(string $mediaWorkflowName)
 * @method string getFileURLs
 * @method self withFileURLs(string $fileURLs)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getStateList
 * @method self withStateList(string $stateList)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SearchMediaWorkflowExecution extends Roa
{
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
 * @method string getDefinition
 * @method self withDefinition(string $definition)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class RegisterWorkflowType extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaIds
 * @method self withMediaIds(string $mediaIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteMediaList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getBucket
 * @method self withBucket(string $bucket)
 * @method string getType
 * @method self withType(string $type)
 * @method bool getSync
 * @method self withSync(bool $sync)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CreateMediaStorage extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getBucket
 * @method self withBucket(string $bucket)
 * @method string getType
 * @method self withType(string $type)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AddMediaBucket extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method bool getPublish
 * @method self withPublish(bool $publish)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UpdateMediaPublishState extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getCoverURL
 * @method self withCoverURL(string $coverURL)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UpdateMediaCover extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method int getCateId
 * @method self withCateId(int $cateId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UpdateMediaCategory extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getCoverURL
 * @method self withCoverURL(string $coverURL)
 * @method int getCateId
 * @method self withCateId(int $cateId)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UpdateMedia extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getBucket
 * @method self withBucket(string $bucket)
 * @method bool getSync
 * @method self withSync(bool $sync)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UpdateInputBucketSyncState extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getCateId
 * @method self withCateId(string $cateId)
 * @method string getCateName
 * @method self withCateName(string $cateName)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
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
 * @method string getFileURLs
 * @method self withFileURLs(string $fileURLs)
 * @method bool getIncludePlayList
 * @method self withIncludePlayList(bool $includePlayList)
 * @method bool getIncludeSnapshotList
 * @method self withIncludeSnapshotList(bool $includeSnapshotList)
 * @method bool getIncludeMediaInfo
 * @method self withIncludeMediaInfo(bool $includeMediaInfo)
 * @method bool getIncludeSummaryList
 * @method self withIncludeSummaryList(bool $includeSummaryList)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryMediaListByURL extends Roa
{
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
 * @method string getNextPageToken
 * @method self withNextPageToken(string $nextPageToken)
 * @method Integer getMaximumPageSize
 * @method self withMaximumPageSize(Integer $maximumPageSize)
 */
class ListAllMediaBucket extends Roa
{
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
class ListAllCategory extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getTag
 * @method self withTag(string $tag)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
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
 * @method int getCateId
 * @method self withCateId(int $cateId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CategoryTree extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getBucket
 * @method self withBucket(string $bucket)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class BindOutputBucket extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getBucket
 * @method self withBucket(string $bucket)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class BindInputBucket extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getTag
 * @method self withTag(string $tag)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AddMediaTag extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getFileURL
 * @method self withFileURL(string $fileURL)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getCoverURL
 * @method self withCoverURL(string $coverURL)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getMediaWorkflowId
 * @method self withMediaWorkflowId(string $mediaWorkflowId)
 * @method string getMediaWorkflowUserData
 * @method self withMediaWorkflowUserData(string $mediaWorkflowUserData)
 * @method bool getInputUnbind
 * @method self withInputUnbind(bool $inputUnbind)
 * @method int getCateId
 * @method self withCateId(int $cateId)
 * @method string getOverrideParams
 * @method self withOverrideParams(string $overrideParams)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AddMedia extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getCateName
 * @method self withCateName(string $cateName)
 * @method int getParentId
 * @method self withParentId(int $parentId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
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
 * @method string getNextPageToken
 * @method self withNextPageToken(string $nextPageToken)
 * @method int getMaximumPageSize
 * @method self withMaximumPageSize(int $maximumPageSize)
 * @method string getState
 * @method self withState(string $state)
 * @method string getStartOfJobCreatedTimeRange
 * @method self withStartOfJobCreatedTimeRange(string $startOfJobCreatedTimeRange)
 * @method string getEndOfJobCreatedTimeRange
 * @method self withEndOfJobCreatedTimeRange(string $endOfJobCreatedTimeRange)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ListJob extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaWorkflowId
 * @method self withMediaWorkflowId(string $mediaWorkflowId)
 * @method string getTopology
 * @method self withTopology(string $topology)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UpdateMediaWorkflow extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getStateList
 * @method self withStateList(string $stateList)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SearchMediaWorkflow extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getFrom
 * @method self withFrom(string $from)
 * @method string getTo
 * @method self withTo(string $to)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getTag
 * @method self withTag(string $tag)
 * @method string getCateId
 * @method self withCateId(string $cateId)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
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
 * @method string getTemplateIds
 * @method self withTemplateIds(string $templateIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QuerySystemTemplateList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getNames
 * @method self withNames(string $names)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryMediaWorkflowListByName extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaWorkflowIds
 * @method self withMediaWorkflowIds(string $mediaWorkflowIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryMediaWorkflowList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getRunIds
 * @method self withRunIds(string $runIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryMediaWorkflowExecutionList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaIds
 * @method self withMediaIds(string $mediaIds)
 * @method bool getIncludePlayList
 * @method self withIncludePlayList(bool $includePlayList)
 * @method bool getIncludeSnapshotList
 * @method self withIncludeSnapshotList(bool $includeSnapshotList)
 * @method bool getIncludeMediaInfo
 * @method self withIncludeMediaInfo(bool $includeMediaInfo)
 * @method bool getIncludeSummaryList
 * @method self withIncludeSummaryList(bool $includeSummaryList)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryMediaList extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ListSystemTemplate extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaWorkflowId
 * @method self withMediaWorkflowId(string $mediaWorkflowId)
 * @method string getMediaWorkflowName
 * @method self withMediaWorkflowName(string $mediaWorkflowName)
 * @method string getInputFileURL
 * @method self withInputFileURL(string $inputFileURL)
 * @method string getNextPageToken
 * @method self withNextPageToken(string $nextPageToken)
 * @method int getMaximumPageSize
 * @method self withMaximumPageSize(int $maximumPageSize)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ListMediaWorkflowExecutions extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaWorkflowId
 * @method self withMediaWorkflowId(string $mediaWorkflowId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteMediaWorkflow extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaIds
 * @method self withMediaIds(string $mediaIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteMedia extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaWorkflowId
 * @method self withMediaWorkflowId(string $mediaWorkflowId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeactivateMediaWorkflow extends Roa
{
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
 * @method string getTopology
 * @method self withTopology(string $topology)
 * @method string getTriggerMode
 * @method self withTriggerMode(string $triggerMode)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AddMediaWorkflow extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaWorkflowId
 * @method self withMediaWorkflowId(string $mediaWorkflowId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class ActivateMediaWorkflow extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method bool getAsync
 * @method self withAsync(bool $async)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitMetaInfoJob extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMetaInfoJobIds
 * @method self withMetaInfoJobIds(string $metaInfoJobIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryMetaInfoJobList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getBucket
 * @method self withBucket(string $bucket)
 * @method string getLocation
 * @method self withLocation(string $location)
 * @method string getObject
 * @method self withObject(string $object)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryJobListByFile extends Roa
{
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
 * @method string getContainer
 * @method self withContainer(string $container)
 * @method string getVideo
 * @method self withVideo(string $video)
 * @method string getAudio
 * @method self withAudio(string $audio)
 * @method string getTransConfig
 * @method self withTransConfig(string $transConfig)
 * @method string getMuxConfig
 * @method self withMuxConfig(string $muxConfig)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AddTemplate extends Roa
{
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
 * @method string getSpeed
 * @method self withSpeed(string $speed)
 * @method int getSpeedLevel
 * @method self withSpeedLevel(int $speedLevel)
 * @method string getNotifyConfig
 * @method self withNotifyConfig(string $notifyConfig)
 * @method string getRole
 * @method self withRole(string $role)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
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
 * @method string getAnalysisJobIds
 * @method self withAnalysisJobIds(string $analysisJobIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryAnalysisJobList extends Roa
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
class PlayerAuth extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getWaterMarkTemplateId
 * @method self withWaterMarkTemplateId(string $waterMarkTemplateId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteWaterMarkTemplate extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeleteTemplate extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class DeletePipeline extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class CancelJob extends Roa
{
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
 * @method string getConfig
 * @method self withConfig(string $config)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class AddWaterMarkTemplate extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryJobList extends Roa
{
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryTemplateList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getSnapshotJobIds
 * @method self withSnapshotJobIds(string $snapshotJobIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QuerySnapshotJobList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getPipelineIds
 * @method self withPipelineIds(string $pipelineIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryPipelineList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getMediaInfoJobIds
 * @method self withMediaInfoJobIds(string $mediaInfoJobIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryMediaInfoJobList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryJobListByPid extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getState
 * @method self withState(string $state)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SearchPipeline extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getState
 * @method self withState(string $state)
 * @method string getStartOfJobCreatedTimeRange
 * @method self withStartOfJobCreatedTimeRange(string $startOfJobCreatedTimeRange)
 * @method string getEndOfJobCreatedTimeRange
 * @method self withEndOfJobCreatedTimeRange(string $endOfJobCreatedTimeRange)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SearchJob extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getWaterMarkTemplateIds
 * @method self withWaterMarkTemplateIds(string $waterMarkTemplateIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryWaterMarkTemplateList extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getAnalysisConfig
 * @method self withAnalysisConfig(string $analysisConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getPriority
 * @method self withPriority(string $priority)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitAnalysisJob extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getState
 * @method self withState(string $state)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SearchWaterMarkTemplate extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method int getPageNumber
 * @method self withPageNumber(int $pageNumber)
 * @method string getState
 * @method self withState(string $state)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SearchTemplate extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getWaterMarkTemplateId
 * @method self withWaterMarkTemplateId(string $waterMarkTemplateId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getConfig
 * @method self withConfig(string $config)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UpdateWaterMarkTemplate extends Roa
{
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
 * @method string getName
 * @method self withName(string $name)
 * @method string getContainer
 * @method self withContainer(string $container)
 * @method string getVideo
 * @method self withVideo(string $video)
 * @method string getAudio
 * @method self withAudio(string $audio)
 * @method string getMuxConfig
 * @method self withMuxConfig(string $muxConfig)
 * @method string getTransConfig
 * @method self withTransConfig(string $transConfig)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UpdateTemplate extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getState
 * @method self withState(string $state)
 * @method string getNotifyConfig
 * @method self withNotifyConfig(string $notifyConfig)
 * @method string getRole
 * @method self withRole(string $role)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class UpdatePipeline extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getSnapshotConfig
 * @method self withSnapshotConfig(string $snapshotConfig)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitSnapshotJob extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method bool getAsync
 * @method self withAsync(bool $async)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitMediaInfoJob extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getOutputs
 * @method self withOutputs(string $outputs)
 * @method string getOutputBucket
 * @method self withOutputBucket(string $outputBucket)
 * @method string getOutputLocation
 * @method self withOutputLocation(string $outputLocation)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class SubmitJobs extends Roa
{
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
 * @method string getDefinition
 * @method self withDefinition(string $definition)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class RegisterMediaWorkflowType extends Roa
{
    use R;
}

/**
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount(string $resourceOwnerAccount)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getName
 * @method self withName(string $name)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class StartMediaWorkflowExecution extends Roa
{
    use R;
}
