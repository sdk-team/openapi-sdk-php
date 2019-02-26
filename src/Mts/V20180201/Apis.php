<?php

namespace AlibabaCloud\Mts\V20180201;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method QueryAnalysisJobList queryAnalysisJobList($options = [])
 * @method AddWaterMarkTemplate addWaterMarkTemplate($options = [])
 * @method DeleteMediaTag deleteMediaTag($options = [])
 * @method AddMedia addMedia($options = [])
 * @method CategoryTree categoryTree($options = [])
 * @method ListAllCategory listAllCategory($options = [])
 * @method UpdateMediaWorkflowTriggerMode updateMediaWorkflowTriggerMode($options = [])
 * @method SubmitSnapshotJob submitSnapshotJob($options = [])
 * @method DeleteMedia deleteMedia($options = [])
 * @method BindInputBucket bindInputBucket($options = [])
 * @method BindOutputBucket bindOutputBucket($options = [])
 * @method AddTemplate addTemplate($options = [])
 * @method SubmitMediaInfoJob submitMediaInfoJob($options = [])
 * @method UpdateTemplate updateTemplate($options = [])
 * @method UpdateCategoryName updateCategoryName($options = [])
 * @method QueryWaterMarkTemplateList queryWaterMarkTemplateList($options = [])
 * @method QuerySystemTemplateList querySystemTemplateList($options = [])
 * @method DeletePipeline deletePipeline($options = [])
 * @method ListAllMediaBucket listAllMediaBucket($options = [])
 * @method SearchMedia searchMedia($options = [])
 * @method SearchTemplate searchTemplate($options = [])
 * @method ListSystemTemplate listSystemTemplate($options = [])
 * @method AddPipeline addPipeline($options = [])
 * @method QueryMediaList queryMediaList($options = [])
 * @method UnbindInputBucket unbindInputBucket($options = [])
 * @method UpdatePipeline updatePipeline($options = [])
 * @method QueryServiceUsage queryServiceUsage($options = [])
 * @method UpdateMediaWorkflow updateMediaWorkflow($options = [])
 * @method DeleteTemplate deleteTemplate($options = [])
 * @method UpdateMedia updateMedia($options = [])
 * @method SearchPipeline searchPipeline($options = [])
 * @method DeactivateMediaWorkflow deactivateMediaWorkflow($options = [])
 * @method AddMediaWorkflow addMediaWorkflow($options = [])
 * @method AddMediaTag addMediaTag($options = [])
 * @method SearchWaterMarkTemplate searchWaterMarkTemplate($options = [])
 * @method QuerySnapshotJobList querySnapshotJobList($options = [])
 * @method SubmitAnalysisJob submitAnalysisJob($options = [])
 * @method QueryMetaInfoJobList queryMetaInfoJobList($options = [])
 * @method DeleteCategory deleteCategory($options = [])
 * @method ListMedia listMedia($options = [])
 * @method ActivateMediaWorkflow activateMediaWorkflow($options = [])
 * @method SubmitEditingJobs submitEditingJobs($options = [])
 * @method DeleteWaterMarkTemplate deleteWaterMarkTemplate($options = [])
 * @method QueryMediaListByURL queryMediaListByURL($options = [])
 * @method SearchMediaWorkflow searchMediaWorkflow($options = [])
 * @method QueryMediaWorkflowExecutionList queryMediaWorkflowExecutionList($options = [])
 * @method QueryTemplateList queryTemplateList($options = [])
 * @method UnbindOutputBucket unbindOutputBucket($options = [])
 * @method SubmitMetaInfoJob submitMetaInfoJob($options = [])
 * @method QueryMediaWorkflowList queryMediaWorkflowList($options = [])
 * @method PlayerAuth playerAuth($options = [])
 * @method QueryEditingJobList queryEditingJobList($options = [])
 * @method StartMediaWorkflowExecution startMediaWorkflowExecution($options = [])
 * @method ListJob listJob($options = [])
 * @method UpdateMediaCover updateMediaCover($options = [])
 * @method QueryMediaWorkflowListByName queryMediaWorkflowListByName($options = [])
 * @method DeleteMediaWorkflow deleteMediaWorkflow($options = [])
 * @method QueryPipelineList queryPipelineList($options = [])
 * @method CancelJob cancelJob($options = [])
 * @method ListMediaWorkflowExecutions listMediaWorkflowExecutions($options = [])
 * @method QueryMediaInfoJobList queryMediaInfoJobList($options = [])
 * @method UpdateMediaPublishState updateMediaPublishState($options = [])
 * @method AddCategory addCategory($options = [])
 * @method UpdateWaterMarkTemplate updateWaterMarkTemplate($options = [])
 * @method SubmitJobs submitJobs($options = [])
 * @method QueryJobList queryJobList($options = [])
 */
class V20180201
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
 * @method int getCateId
 * @method self withCateId(int $cateId)
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
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
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
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
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
 * @method string getMediaIds
 * @method self withMediaIds(string $mediaIds)
 * @method bool getIncludePlayList
 * @method self withIncludePlayList(bool $includePlayList)
 * @method bool getIncludeSnapshotList
 * @method self withIncludeSnapshotList(bool $includeSnapshotList)
 * @method bool getIncludeMediaInfo
 * @method self withIncludeMediaInfo(bool $includeMediaInfo)
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
 * @method string getFileURLs
 * @method self withFileURLs(string $fileURLs)
 * @method bool getIncludePlayList
 * @method self withIncludePlayList(bool $includePlayList)
 * @method bool getIncludeSnapshotList
 * @method self withIncludeSnapshotList(bool $includeSnapshotList)
 * @method bool getIncludeMediaInfo
 * @method self withIncludeMediaInfo(bool $includeMediaInfo)
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
 * @method string getInput
 * @method self withInput(string $input)
 * @method string getUserData
 * @method self withUserData(string $userData)
 * @method string getPipelineId
 * @method self withPipelineId(string $pipelineId)
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
 * @method string getJobIds
 * @method self withJobIds(string $jobIds)
 * @method string getOwnerAccount
 * @method self withOwnerAccount(string $ownerAccount)
 */
class QueryJobList extends Roa
{
    use R;
}
