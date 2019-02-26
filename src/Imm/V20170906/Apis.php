<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method CreateCADConversionTask createCADConversionTask($options = [])
 * @method FindSimilarFaces findSimilarFaces($options = [])
 * @method FindImages findImages($options = [])
 * @method FindImagesByTagNames findImagesByTagNames($options = [])
 * @method CreateSet createSet($options = [])
 * @method GetSet getSet($options = [])
 * @method IndexImage indexImage($options = [])
 * @method UpdateSet updateSet($options = [])
 * @method ListSets listSets($options = [])
 * @method GetImage getImage($options = [])
 * @method DeleteSet deleteSet($options = [])
 * @method ListVideoFrames listVideoFrames($options = [])
 * @method ListVideoAudios listVideoAudios($options = [])
 * @method DetectImageTags detectImageTags($options = [])
 * @method DetectImageFaces detectImageFaces($options = [])
 * @method DeleteImage deleteImage($options = [])
 * @method CompareImageFaces compareImageFaces($options = [])
 * @method DeleteVideo deleteVideo($options = [])
 * @method ListImages listImages($options = [])
 * @method UpdateImage updateImage($options = [])
 * @method ListVideos listVideos($options = [])
 * @method DetectImageTexts detectImageTexts($options = [])
 * @method DetectImageCelebrity detectImageCelebrity($options = [])
 * @method IndexVideo indexVideo($options = [])
 * @method GetVideo getVideo($options = [])
 * @method ListSetTags listSetTags($options = [])
 * @method CreateVideoAnalyseTask createVideoAnalyseTask($options = [])
 * @method GetVideoTask getVideoTask($options = [])
 * @method DeleteVideoTask deleteVideoTask($options = [])
 * @method ListVideoTasks listVideoTasks($options = [])
 * @method CreateIndexFaceJob createIndexFaceJob($options = [])
 * @method GetImageJob getImageJob($options = [])
 * @method DeleteImageJob deleteImageJob($options = [])
 * @method ListImageJobs listImageJobs($options = [])
 * @method ListImageFaces listImageFaces($options = [])
 * @method CreateGroupFacesJob createGroupFacesJob($options = [])
 * @method CreateDeleteFaceSetJob createDeleteFaceSetJob($options = [])
 * @method CreateDocIndexTask createDocIndexTask($options = [])
 * @method GetDocIndexTask getDocIndexTask($options = [])
 * @method UpdateDocIndexMeta updateDocIndexMeta($options = [])
 * @method GetDocIndex getDocIndex($options = [])
 * @method DeleteDocIndex deleteDocIndex($options = [])
 * @method SearchDocIndex searchDocIndex($options = [])
 * @method DetectLogo detectLogo($options = [])
 * @method DetectClothes detectClothes($options = [])
 * @method UpdateProject updateProject($options = [])
 * @method DetectQRCodes detectQRCodes($options = [])
 * @method CompareFace compareFace($options = [])
 * @method RegistFace registFace($options = [])
 * @method SearchFace searchFace($options = [])
 * @method FaceCompare faceCompare($options = [])
 * @method FaceRegist faceRegist($options = [])
 * @method FaceSearch faceSearch($options = [])
 * @method ListFaceSearchGroupUsers listFaceSearchGroupUsers($options = [])
 * @method ListFaceSearchGroups listFaceSearchGroups($options = [])
 * @method ListFaceSearchGroupImages listFaceSearchGroupImages($options = [])
 * @method DeleteFaceSearchImageById deleteFaceSearchImageById($options = [])
 * @method DeleteFaceSearchUser deleteFaceSearchUser($options = [])
 * @method DeleteFaceSearchGroup deleteFaceSearchGroup($options = [])
 * @method GetFaceSearchGroup getFaceSearchGroup($options = [])
 * @method GetFaceSearchUser getFaceSearchUser($options = [])
 * @method GetFaceSearchImage getFaceSearchImage($options = [])
 * @method GetFaceDetail getFaceDetail($options = [])
 * @method CreateVideoAIJob createVideoAIJob($options = [])
 * @method GetVideoAIJob getVideoAIJob($options = [])
 * @method CreateVideoAnalyseJob createVideoAnalyseJob($options = [])
 * @method GetVideoAnalyseJob getVideoAnalyseJob($options = [])
 * @method DeleteVideoAnalyseJob deleteVideoAnalyseJob($options = [])
 * @method ListVideoAnalyseJobs listVideoAnalyseJobs($options = [])
 * @method DeleteFaceById deleteFaceById($options = [])
 * @method UpdateFaceGroupById updateFaceGroupById($options = [])
 * @method CreateBatchIndexFrameTagTask createBatchIndexFrameTagTask($options = [])
 * @method GetBatchIndexFrameTagTask getBatchIndexFrameTagTask($options = [])
 * @method CreateVideoTagJob createVideoTagJob($options = [])
 * @method GetVideoTagJob getVideoTagJob($options = [])
 * @method ListVideoTagJobs listVideoTagJobs($options = [])
 * @method CreateFrameGrabJob createFrameGrabJob($options = [])
 * @method DeleteFrameGrabJob deleteFrameGrabJob($options = [])
 * @method GetFrameGrabJob getFrameGrabJob($options = [])
 * @method ListFrameGrabJobs listFrameGrabJobs($options = [])
 * @method IndexFrameTag indexFrameTag($options = [])
 * @method CreateFrameTagSet createFrameTagSet($options = [])
 * @method CreateFrameTagAnalyseTask createFrameTagAnalyseTask($options = [])
 * @method GetFrameTagAnalyseTask getFrameTagAnalyseTask($options = [])
 * @method DeleteTagByUrl deleteTagByUrl($options = [])
 * @method DeleteTagByName deleteTagByName($options = [])
 * @method DeleteFaceByUrl deleteFaceByUrl($options = [])
 * @method ListTagNames listTagNames($options = [])
 * @method ListOfficeConversionTask listOfficeConversionTask($options = [])
 * @method ListTagPhotos listTagPhotos($options = [])
 * @method ListFaceGroupPhotos listFaceGroupPhotos($options = [])
 * @method GetOfficeConversionTask getOfficeConversionTask($options = [])
 * @method DeleteOfficeConversionTask deleteOfficeConversionTask($options = [])
 * @method CreateOfficeConversionTask createOfficeConversionTask($options = [])
 * @method DescribeRegions describeRegions($options = [])
 * @method ConvertOfficeFormat convertOfficeFormat($options = [])
 * @method GetConvertOfficeFormatTask getConvertOfficeFormatTask($options = [])
 * @method DeleteConvertOfficeFormatTask deleteConvertOfficeFormatTask($options = [])
 * @method ListConvertOfficeFormatTasks listConvertOfficeFormatTasks($options = [])
 * @method PhotoProcess photoProcess($options = [])
 * @method DeletePhotoProcessTask deletePhotoProcessTask($options = [])
 * @method GetPhotoProcessTask getPhotoProcessTask($options = [])
 * @method ListPhotoProcessTasks listPhotoProcessTasks($options = [])
 * @method DeleteProject deleteProject($options = [])
 * @method GetTagSet getTagSet($options = [])
 * @method GetFaceSet getFaceSet($options = [])
 * @method RemoveTagByName removeTagByName($options = [])
 * @method ListTagName listTagName($options = [])
 * @method RemoveTagByUrl removeTagByUrl($options = [])
 * @method DeleteTagSet deleteTagSet($options = [])
 * @method ListTagSets listTagSets($options = [])
 * @method CreateTagSet createTagSet($options = [])
 * @method IndexTag indexTag($options = [])
 * @method GetTagPhotos getTagPhotos($options = [])
 * @method CreateFaceSet createFaceSet($options = [])
 * @method DeleteFaceSet deleteFaceSet($options = [])
 * @method ListFaceSets listFaceSets($options = [])
 * @method IndexFace indexFace($options = [])
 * @method GroupFaces groupFaces($options = [])
 * @method GetFaceSetDetail getFaceSetDetail($options = [])
 * @method GetFaceGroupPhotos getFaceGroupPhotos($options = [])
 * @method ListFaceGroups listFaceGroups($options = [])
 * @method RemoveFaceByUrl removeFaceByUrl($options = [])
 * @method GetFaceJob getFaceJob($options = [])
 * @method ListFaceJobs listFaceJobs($options = [])
 * @method DeleteFaceJob deleteFaceJob($options = [])
 * @method CreateFaceJob createFaceJob($options = [])
 * @method DetectFace detectFace($options = [])
 * @method CreateTagJob createTagJob($options = [])
 * @method DeleteTagJob deleteTagJob($options = [])
 * @method ListTagJobs listTagJobs($options = [])
 * @method GetTagJob getTagJob($options = [])
 * @method DetectTag detectTag($options = [])
 * @method PutProject putProject($options = [])
 * @method DelProject delProject($options = [])
 * @method GetProject getProject($options = [])
 * @method ListProjects listProjects($options = [])
 * @method CreateFormatConvertJob createFormatConvertJob($options = [])
 * @method DeleteFormatConvertJob deleteFormatConvertJob($options = [])
 * @method GetFormatConvertJob getFormatConvertJob($options = [])
 * @method ListFormatConvertJobs listFormatConvertJobs($options = [])
 * @method CreatePhotoJob createPhotoJob($options = [])
 * @method DeletePhotoJob deletePhotoJob($options = [])
 * @method DeletePornBatchDetectJob deletePornBatchDetectJob($options = [])
 * @method CreatePornBatchDetectJob createPornBatchDetectJob($options = [])
 * @method GetPornBatchDetectJob getPornBatchDetectJob($options = [])
 * @method ListPornBatchDetectJobs listPornBatchDetectJobs($options = [])
 * @method GetPhotoJob getPhotoJob($options = [])
 * @method ListPhotoJobs listPhotoJobs($options = [])
 * @method Detect detect($options = [])
 */
class V20170906
{
    use ApiResolverTrait;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getTgtType
 * @method self withTgtType(string $tgtType)
 * @method string getTgtUri
 * @method self withTgtUri(string $tgtUri)
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName(string $notifyTopicName)
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint(string $notifyEndpoint)
 * @method string getSrcType
 * @method self withSrcType(string $srcType)
 * @method Integer getZoomFactor
 * @method self withZoomFactor(Integer $zoomFactor)
 * @method Integer getZoomLevel
 * @method self withZoomLevel(Integer $zoomLevel)
 * @method int getUnitHeight
 * @method self withUnitHeight(int $unitHeight)
 * @method int getUnitWidth
 * @method self withUnitWidth(int $unitWidth)
 * @method Integer getBaseRow
 * @method self withBaseRow(Integer $baseRow)
 * @method Integer getBaseCol
 * @method self withBaseCol(Integer $baseCol)
 * @method bool getThumbnails
 * @method self withThumbnails(bool $thumbnails)
 * @method string getModelId
 * @method self withModelId(string $modelId)
 */
class CreateCADConversionTask extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getImageUri
 * @method self withImageUri(string $imageUri)
 * @method string getFaceId
 * @method self withFaceId(string $faceId)
 * @method Integer getLimit
 * @method self withLimit(Integer $limit)
 */
class FindSimilarFaces extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getImageSizeRange
 * @method self withImageSizeRange(string $imageSizeRange)
 * @method string getImageTimeRange
 * @method self withImageTimeRange(string $imageTimeRange)
 * @method string getCreateTimeRange
 * @method self withCreateTimeRange(string $createTimeRange)
 * @method string getUpdateTimeRange
 * @method self withUpdateTimeRange(string $updateTimeRange)
 * @method string getSourceType
 * @method self withSourceType(string $sourceType)
 * @method string getSourceUriPrefix
 * @method self withSourceUriPrefix(string $sourceUriPrefix)
 * @method string getRemarksAPrefix
 * @method self withRemarksAPrefix(string $remarksAPrefix)
 * @method string getRemarksBPrefix
 * @method self withRemarksBPrefix(string $remarksBPrefix)
 * @method string getTagNames
 * @method self withTagNames(string $tagNames)
 * @method string getOCRContentsMatch
 * @method self withOCRContentsMatch(string $oCRContentsMatch)
 * @method string getAgeRange
 * @method self withAgeRange(string $ageRange)
 * @method string getGender
 * @method self withGender(string $gender)
 * @method string getEmotion
 * @method self withEmotion(string $emotion)
 * @method string getOrderBy
 * @method self withOrderBy(string $orderBy)
 * @method string getOrder
 * @method self withOrder(string $order)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method string getLocationBoundary
 * @method self withLocationBoundary(string $locationBoundary)
 * @method string getRemarksCPrefix
 * @method self withRemarksCPrefix(string $remarksCPrefix)
 * @method string getRemarksDPrefix
 * @method self withRemarksDPrefix(string $remarksDPrefix)
 * @method string getExternalId
 * @method self withExternalId(string $externalId)
 */
class FindImages extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getTagNames
 * @method self withTagNames(string $tagNames)
 * @method string getMarker
 * @method self withMarker(string $marker)
 */
class FindImagesByTagNames extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getSetName
 * @method self withSetName(string $setName)
 */
class CreateSet extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 */
class GetSet extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getImageUri
 * @method self withImageUri(string $imageUri)
 * @method string getRemarksA
 * @method self withRemarksA(string $remarksA)
 * @method string getRemarksB
 * @method self withRemarksB(string $remarksB)
 * @method string getSourceType
 * @method self withSourceType(string $sourceType)
 * @method string getSourceUri
 * @method self withSourceUri(string $sourceUri)
 * @method string getSourcePosition
 * @method self withSourcePosition(string $sourcePosition)
 * @method string getRemarksC
 * @method self withRemarksC(string $remarksC)
 * @method string getRemarksD
 * @method self withRemarksD(string $remarksD)
 * @method string getExternalId
 * @method self withExternalId(string $externalId)
 */
class IndexImage extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getSetName
 * @method self withSetName(string $setName)
 */
class UpdateSet extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMarker
 * @method self withMarker(string $marker)
 */
class ListSets extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getImageUri
 * @method self withImageUri(string $imageUri)
 */
class GetImage extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 */
class DeleteSet extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getVideoUri
 * @method self withVideoUri(string $videoUri)
 * @method string getMarker
 * @method self withMarker(string $marker)
 */
class ListVideoFrames extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getVideoUri
 * @method self withVideoUri(string $videoUri)
 * @method string getMarker
 * @method self withMarker(string $marker)
 */
class ListVideoAudios extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getImageUri
 * @method self withImageUri(string $imageUri)
 */
class DetectImageTags extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getImageUri
 * @method self withImageUri(string $imageUri)
 */
class DetectImageFaces extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getImageUri
 * @method self withImageUri(string $imageUri)
 */
class DeleteImage extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getImageUriA
 * @method self withImageUriA(string $imageUriA)
 * @method string getImageUriB
 * @method self withImageUriB(string $imageUriB)
 * @method string getFaceIdA
 * @method self withFaceIdA(string $faceIdA)
 * @method string getFaceIdB
 * @method self withFaceIdB(string $faceIdB)
 */
class CompareImageFaces extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getVideoUri
 * @method self withVideoUri(string $videoUri)
 * @method bool getResources
 * @method self withResources(bool $resources)
 */
class DeleteVideo extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getCreateTimeStart
 * @method self withCreateTimeStart(string $createTimeStart)
 * @method string getMarker
 * @method self withMarker(string $marker)
 */
class ListImages extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getImageUri
 * @method self withImageUri(string $imageUri)
 * @method string getRemarksA
 * @method self withRemarksA(string $remarksA)
 * @method string getRemarksB
 * @method self withRemarksB(string $remarksB)
 * @method string getSourceType
 * @method self withSourceType(string $sourceType)
 * @method string getSourceUri
 * @method self withSourceUri(string $sourceUri)
 * @method string getSourcePosition
 * @method self withSourcePosition(string $sourcePosition)
 * @method string getRemarksC
 * @method self withRemarksC(string $remarksC)
 * @method string getRemarksD
 * @method self withRemarksD(string $remarksD)
 * @method string getExternalId
 * @method self withExternalId(string $externalId)
 */
class UpdateImage extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getCreateTimeStart
 * @method self withCreateTimeStart(string $createTimeStart)
 * @method string getMarker
 * @method self withMarker(string $marker)
 */
class ListVideos extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getImageUri
 * @method self withImageUri(string $imageUri)
 */
class DetectImageTexts extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getImageUri
 * @method self withImageUri(string $imageUri)
 * @method string getLibrary
 * @method self withLibrary(string $library)
 */
class DetectImageCelebrity extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getVideoUri
 * @method self withVideoUri(string $videoUri)
 * @method string getRemarksA
 * @method self withRemarksA(string $remarksA)
 * @method string getRemarksB
 * @method self withRemarksB(string $remarksB)
 * @method string getGrabType
 * @method self withGrabType(string $grabType)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method bool getSaveType
 * @method self withSaveType(bool $saveType)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getTgtUri
 * @method self withTgtUri(string $tgtUri)
 * @method string getRemarksC
 * @method self withRemarksC(string $remarksC)
 * @method string getRemarksD
 * @method self withRemarksD(string $remarksD)
 * @method string getExternalId
 * @method self withExternalId(string $externalId)
 */
class IndexVideo extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getVideoUri
 * @method self withVideoUri(string $videoUri)
 */
class GetVideo extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 */
class ListSetTags extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getVideoUri
 * @method self withVideoUri(string $videoUri)
 * @method string getGrabType
 * @method self withGrabType(string $grabType)
 * @method string getStartTime
 * @method self withStartTime(string $startTime)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 * @method bool getSaveType
 * @method self withSaveType(bool $saveType)
 * @method string getInterval
 * @method self withInterval(string $interval)
 * @method string getTgtUri
 * @method self withTgtUri(string $tgtUri)
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName(string $notifyTopicName)
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint(string $notifyEndpoint)
 */
class CreateVideoAnalyseTask extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getTaskType
 * @method self withTaskType(string $taskType)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class GetVideoTask extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getTaskType
 * @method self withTaskType(string $taskType)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class DeleteVideoTask extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 * @method string getTaskType
 * @method self withTaskType(string $taskType)
 */
class ListVideoTasks extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getSrcUris
 * @method self withSrcUris(string $srcUris)
 * @method string getForce
 * @method self withForce(string $force)
 * @method string getChain
 * @method self withChain(string $chain)
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName(string $notifyTopicName)
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint(string $notifyEndpoint)
 */
class CreateIndexFaceJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getJobType
 * @method self withJobType(string $jobType)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class GetImageJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getJobType
 * @method self withJobType(string $jobType)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class DeleteImageJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 * @method string getJobType
 * @method self withJobType(string $jobType)
 */
class ListImageJobs extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 */
class ListImageFaces extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getOperation
 * @method self withOperation(string $operation)
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName(string $notifyTopicName)
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint(string $notifyEndpoint)
 */
class CreateGroupFacesJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getCheckEmpty
 * @method self withCheckEmpty(string $checkEmpty)
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName(string $notifyTopicName)
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint(string $notifyEndpoint)
 */
class CreateDeleteFaceSetJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getUniqueId
 * @method self withUniqueId(string $uniqueId)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getName
 * @method self withName(string $name)
 * @method string getContentType
 * @method self withContentType(string $contentType)
 * @method string getCustomKey1
 * @method self withCustomKey1(string $customKey1)
 * @method string getCustomKey2
 * @method self withCustomKey2(string $customKey2)
 * @method string getCustomKey3
 * @method self withCustomKey3(string $customKey3)
 * @method string getCustomKey4
 * @method self withCustomKey4(string $customKey4)
 * @method string getCustomKey5
 * @method self withCustomKey5(string $customKey5)
 * @method string getCustomKey6
 * @method self withCustomKey6(string $customKey6)
 * @method string getSet
 * @method self withSet(string $set)
 */
class CreateDocIndexTask extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class GetDocIndexTask extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getUniqueId
 * @method self withUniqueId(string $uniqueId)
 * @method string getName
 * @method self withName(string $name)
 * @method string getCustomKey1
 * @method self withCustomKey1(string $customKey1)
 * @method string getCustomKey2
 * @method self withCustomKey2(string $customKey2)
 * @method string getCustomKey3
 * @method self withCustomKey3(string $customKey3)
 * @method string getCustomKey4
 * @method self withCustomKey4(string $customKey4)
 * @method string getCustomKey5
 * @method self withCustomKey5(string $customKey5)
 * @method string getCustomKey6
 * @method self withCustomKey6(string $customKey6)
 * @method string getSet
 * @method self withSet(string $set)
 */
class UpdateDocIndexMeta extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getUniqueId
 * @method self withUniqueId(string $uniqueId)
 * @method string getSet
 * @method self withSet(string $set)
 */
class GetDocIndex extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getUniqueId
 * @method self withUniqueId(string $uniqueId)
 * @method string getSet
 * @method self withSet(string $set)
 */
class DeleteDocIndex extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getContent
 * @method self withContent(string $content)
 * @method string getName
 * @method self withName(string $name)
 * @method string getContentType
 * @method self withContentType(string $contentType)
 * @method Integer getModifiedTimeStart
 * @method self withModifiedTimeStart(Integer $modifiedTimeStart)
 * @method Integer getModifiedTimeEnd
 * @method self withModifiedTimeEnd(Integer $modifiedTimeEnd)
 * @method Integer getSizeLimitStart
 * @method self withSizeLimitStart(Integer $sizeLimitStart)
 * @method Integer getSizeLimitEnd
 * @method self withSizeLimitEnd(Integer $sizeLimitEnd)
 * @method Integer getPageNumLimitStart
 * @method self withPageNumLimitStart(Integer $pageNumLimitStart)
 * @method Integer getPageNumLimitEnd
 * @method self withPageNumLimitEnd(Integer $pageNumLimitEnd)
 * @method string getCustomKey1
 * @method self withCustomKey1(string $customKey1)
 * @method string getCustomKey2
 * @method self withCustomKey2(string $customKey2)
 * @method string getCustomKey3
 * @method self withCustomKey3(string $customKey3)
 * @method string getCustomKey4
 * @method self withCustomKey4(string $customKey4)
 * @method string getCustomKey5
 * @method self withCustomKey5(string $customKey5)
 * @method string getCustomKey6
 * @method self withCustomKey6(string $customKey6)
 * @method Integer getOffset
 * @method self withOffset(Integer $offset)
 * @method Integer getLimit
 * @method self withLimit(Integer $limit)
 * @method string getSet
 * @method self withSet(string $set)
 */
class SearchDocIndex extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUris
 * @method self withSrcUris(string $srcUris)
 */
class DetectLogo extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUris
 * @method self withSrcUris(string $srcUris)
 */
class DetectClothes extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method Integer getNewCU
 * @method self withNewCU(Integer $newCU)
 * @method string getNewServiceRole
 * @method self withNewServiceRole(string $newServiceRole)
 */
class UpdateProject extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUris
 * @method self withSrcUris(string $srcUris)
 */
class DetectQRCodes extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUriA
 * @method self withSrcUriA(string $srcUriA)
 * @method string getSrcUriB
 * @method self withSrcUriB(string $srcUriB)
 */
class CompareFace extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getUser
 * @method self withUser(string $user)
 * @method bool getIsQualityLimit
 * @method self withIsQualityLimit(bool $isQualityLimit)
 * @method bool getChooseBiggestFace
 * @method self withChooseBiggestFace(bool $chooseBiggestFace)
 * @method string getRegisterCheckLevel
 * @method self withRegisterCheckLevel(string $registerCheckLevel)
 */
class RegistFace extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method Integer getResultNum
 * @method self withResultNum(Integer $resultNum)
 * @method bool getIsThreshold
 * @method self withIsThreshold(bool $isThreshold)
 * @method string getSearchThresholdLevel
 * @method self withSearchThresholdLevel(string $searchThresholdLevel)
 */
class SearchFace extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUriA
 * @method self withSrcUriA(string $srcUriA)
 * @method string getSrcUriB
 * @method self withSrcUriB(string $srcUriB)
 */
class FaceCompare extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getUser
 * @method self withUser(string $user)
 * @method bool getIsQualityLimit
 * @method self withIsQualityLimit(bool $isQualityLimit)
 * @method bool getChooseBiggestFace
 * @method self withChooseBiggestFace(bool $chooseBiggestFace)
 * @method string getRegisterCheckLevel
 * @method self withRegisterCheckLevel(string $registerCheckLevel)
 */
class FaceRegist extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method Integer getResultNum
 * @method self withResultNum(Integer $resultNum)
 * @method bool getIsThreshold
 * @method self withIsThreshold(bool $isThreshold)
 * @method string getSearchThresholdLevel
 * @method self withSearchThresholdLevel(string $searchThresholdLevel)
 */
class FaceSearch extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 */
class ListFaceSearchGroupUsers extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 */
class ListFaceSearchGroups extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 * @method string getUser
 * @method self withUser(string $user)
 */
class ListFaceSearchGroupImages extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getUser
 * @method self withUser(string $user)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 */
class DeleteFaceSearchImageById extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getUser
 * @method self withUser(string $user)
 */
class DeleteFaceSearchUser extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class DeleteFaceSearchGroup extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class GetFaceSearchGroup extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getUser
 * @method self withUser(string $user)
 */
class GetFaceSearchUser extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getImageId
 * @method self withImageId(string $imageId)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getUser
 * @method self withUser(string $user)
 */
class GetFaceSearchImage extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getFaceId
 * @method self withFaceId(string $faceId)
 */
class GetFaceDetail extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUris
 * @method self withSrcUris(string $srcUris)
 */
class CreateVideoAIJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getJobs
 * @method self withJobs(string $jobs)
 */
class GetVideoAIJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getTgtUri
 * @method self withTgtUri(string $tgtUri)
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName(string $notifyTopicName)
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint(string $notifyEndpoint)
 * @method float getStartTime
 * @method self withStartTime(float $startTime)
 * @method float getInterval
 * @method self withInterval(float $interval)
 * @method string getStyle
 * @method self withStyle(string $style)
 * @method Integer getTgtWidth
 * @method self withTgtWidth(Integer $tgtWidth)
 * @method Integer getTgtHeight
 * @method self withTgtHeight(Integer $tgtHeight)
 * @method string getExternalID
 * @method self withExternalID(string $externalID)
 * @method bool getKeepFrame
 * @method self withKeepFrame(bool $keepFrame)
 * @method bool getCutBlack
 * @method self withCutBlack(bool $cutBlack)
 * @method string getPJobId
 * @method self withPJobId(string $pJobId)
 * @method int getSrcOwnerId
 * @method self withSrcOwnerId(int $srcOwnerId)
 */
class CreateVideoAnalyseJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class GetVideoAnalyseJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class DeleteVideoAnalyseJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 */
class ListVideoAnalyseJobs extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getFaceIds
 * @method self withFaceIds(string $faceIds)
 */
class DeleteFaceById extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getFaceIds
 * @method self withFaceIds(string $faceIds)
 * @method string getNewGroupId
 * @method self withNewGroupId(string $newGroupId)
 */
class UpdateFaceGroupById extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName(string $notifyTopicName)
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint(string $notifyEndpoint)
 * @method string getPJobId
 * @method self withPJobId(string $pJobId)
 * @method Integer getSrcOwnerId
 * @method self withSrcOwnerId(Integer $srcOwnerId)
 */
class CreateBatchIndexFrameTagTask extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class GetBatchIndexFrameTagTask extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getTgtUri
 * @method self withTgtUri(string $tgtUri)
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName(string $notifyTopicName)
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint(string $notifyEndpoint)
 * @method float getStartTime
 * @method self withStartTime(float $startTime)
 * @method float getInterval
 * @method self withInterval(float $interval)
 * @method string getStyle
 * @method self withStyle(string $style)
 * @method Integer getTgtWidth
 * @method self withTgtWidth(Integer $tgtWidth)
 * @method Integer getTgtHeight
 * @method self withTgtHeight(Integer $tgtHeight)
 * @method string getExternalID
 * @method self withExternalID(string $externalID)
 * @method bool getKeepFrame
 * @method self withKeepFrame(bool $keepFrame)
 * @method bool getCutBlack
 * @method self withCutBlack(bool $cutBlack)
 * @method string getPJobId
 * @method self withPJobId(string $pJobId)
 * @method int getSrcOwnerId
 * @method self withSrcOwnerId(int $srcOwnerId)
 * @method Integer getTagNum
 * @method self withTagNum(Integer $tagNum)
 * @method string getTagStyle
 * @method self withTagStyle(string $tagStyle)
 */
class CreateVideoTagJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class GetVideoTagJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 */
class ListVideoTagJobs extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getTgtUri
 * @method self withTgtUri(string $tgtUri)
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName(string $notifyTopicName)
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint(string $notifyEndpoint)
 * @method float getStartTime
 * @method self withStartTime(float $startTime)
 * @method float getInterval
 * @method self withInterval(float $interval)
 * @method string getStyle
 * @method self withStyle(string $style)
 * @method Integer getTgtWidth
 * @method self withTgtWidth(Integer $tgtWidth)
 * @method Integer getTgtHeight
 * @method self withTgtHeight(Integer $tgtHeight)
 * @method string getExternalID
 * @method self withExternalID(string $externalID)
 * @method bool getKeepFrame
 * @method self withKeepFrame(bool $keepFrame)
 * @method bool getCutBlack
 * @method self withCutBlack(bool $cutBlack)
 * @method string getPJobId
 * @method self withPJobId(string $pJobId)
 * @method int getSrcOwnerId
 * @method self withSrcOwnerId(int $srcOwnerId)
 */
class CreateFrameGrabJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class DeleteFrameGrabJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class GetFrameGrabJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 * @method string getPJobId
 * @method self withPJobId(string $pJobId)
 */
class ListFrameGrabJobs extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getSrcUris
 * @method self withSrcUris(string $srcUris)
 * @method Integer getSrcOwnerId
 * @method self withSrcOwnerId(Integer $srcOwnerId)
 */
class IndexFrameTag extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method Integer getSrcOwnerId
 * @method self withSrcOwnerId(Integer $srcOwnerId)
 */
class CreateFrameTagSet extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName(string $notifyTopicName)
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint(string $notifyEndpoint)
 * @method string getStyle
 * @method self withStyle(string $style)
 * @method Integer getTagNum
 * @method self withTagNum(Integer $tagNum)
 * @method int getSrcOwnerId
 * @method self withSrcOwnerId(int $srcOwnerId)
 * @method string getPJobId
 * @method self withPJobId(string $pJobId)
 */
class CreateFrameTagAnalyseTask extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class GetFrameTagAnalyseTask extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 */
class DeleteTagByUrl extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getTagName
 * @method self withTagName(string $tagName)
 */
class DeleteTagByName extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 */
class DeleteFaceByUrl extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getMarker
 * @method self withMarker(string $marker)
 */
class ListTagNames extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 */
class ListOfficeConversionTask extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getTagName
 * @method self withTagName(string $tagName)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method string getMaxKeys
 * @method self withMaxKeys(string $maxKeys)
 */
class ListTagPhotos extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 */
class ListFaceGroupPhotos extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class GetOfficeConversionTask extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class DeleteOfficeConversionTask extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getTgtType
 * @method self withTgtType(string $tgtType)
 * @method string getTgtUri
 * @method self withTgtUri(string $tgtUri)
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName(string $notifyTopicName)
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint(string $notifyEndpoint)
 * @method string getSrcType
 * @method self withSrcType(string $srcType)
 * @method int getStartPage
 * @method self withStartPage(int $startPage)
 * @method int getEndPage
 * @method self withEndPage(int $endPage)
 * @method int getMaxSheetRow
 * @method self withMaxSheetRow(int $maxSheetRow)
 * @method int getMaxSheetCol
 * @method self withMaxSheetCol(int $maxSheetCol)
 * @method int getMaxSheetCount
 * @method self withMaxSheetCount(int $maxSheetCount)
 * @method bool getSheetOnePage
 * @method self withSheetOnePage(bool $sheetOnePage)
 * @method string getModelId
 * @method self withModelId(string $modelId)
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method string getTgtFilePrefix
 * @method self withTgtFilePrefix(string $tgtFilePrefix)
 * @method string getTgtFileSuffix
 * @method self withTgtFileSuffix(string $tgtFileSuffix)
 * @method string getTgtFilePages
 * @method self withTgtFilePages(string $tgtFilePages)
 * @method bool getFitToPagesTall
 * @method self withFitToPagesTall(bool $fitToPagesTall)
 * @method bool getFitToPagesWide
 * @method self withFitToPagesWide(bool $fitToPagesWide)
 * @method string getIdempotentToken
 * @method self withIdempotentToken(string $idempotentToken)
 * @method bool getPdfVector
 * @method self withPdfVector(bool $pdfVector)
 * @method bool getHidecomments
 * @method self withHidecomments(bool $hidecomments)
 */
class CreateOfficeConversionTask extends Rpc
{
    use R;
}

class DescribeRegions extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getTgtType
 * @method self withTgtType(string $tgtType)
 * @method string getTgtUri
 * @method self withTgtUri(string $tgtUri)
 * @method string getSrcType
 * @method self withSrcType(string $srcType)
 * @method int getStartPage
 * @method self withStartPage(int $startPage)
 * @method int getEndPage
 * @method self withEndPage(int $endPage)
 * @method int getMaxSheetRow
 * @method self withMaxSheetRow(int $maxSheetRow)
 * @method int getMaxSheetCol
 * @method self withMaxSheetCol(int $maxSheetCol)
 * @method int getMaxSheetCount
 * @method self withMaxSheetCount(int $maxSheetCount)
 * @method bool getSheetOnePage
 * @method self withSheetOnePage(bool $sheetOnePage)
 * @method string getModelId
 * @method self withModelId(string $modelId)
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method string getTgtFilePrefix
 * @method self withTgtFilePrefix(string $tgtFilePrefix)
 * @method string getTgtFileSuffix
 * @method self withTgtFileSuffix(string $tgtFileSuffix)
 * @method string getTgtFilePages
 * @method self withTgtFilePages(string $tgtFilePages)
 * @method bool getFitToPagesTall
 * @method self withFitToPagesTall(bool $fitToPagesTall)
 * @method bool getFitToPagesWide
 * @method self withFitToPagesWide(bool $fitToPagesWide)
 * @method bool getPdfVector
 * @method self withPdfVector(bool $pdfVector)
 * @method bool getHidecomments
 * @method self withHidecomments(bool $hidecomments)
 */
class ConvertOfficeFormat extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class GetConvertOfficeFormatTask extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class DeleteConvertOfficeFormatTask extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 */
class ListConvertOfficeFormatTasks extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getTgtUri
 * @method self withTgtUri(string $tgtUri)
 * @method string getStyle
 * @method self withStyle(string $style)
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName(string $notifyTopicName)
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint(string $notifyEndpoint)
 * @method string getExternalID
 * @method self withExternalID(string $externalID)
 */
class PhotoProcess extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class DeletePhotoProcessTask extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class GetPhotoProcessTask extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 */
class ListPhotoProcessTasks extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 */
class DeleteProject extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 */
class GetTagSet extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 */
class GetFaceSet extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getTagName
 * @method self withTagName(string $tagName)
 */
class RemoveTagByName extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 */
class ListTagName extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 */
class RemoveTagByUrl extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getCheckEmpty
 * @method self withCheckEmpty(string $checkEmpty)
 * @method string getLazyMode
 * @method self withLazyMode(string $lazyMode)
 */
class DeleteTagSet extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 */
class ListTagSets extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 */
class CreateTagSet extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getSrcUris
 * @method self withSrcUris(string $srcUris)
 * @method string getForce
 * @method self withForce(string $force)
 * @method string getModelId
 * @method self withModelId(string $modelId)
 */
class IndexTag extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getTagName
 * @method self withTagName(string $tagName)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method string getMaxKeys
 * @method self withMaxKeys(string $maxKeys)
 */
class GetTagPhotos extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 */
class CreateFaceSet extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getCheckEmpty
 * @method self withCheckEmpty(string $checkEmpty)
 * @method string getLazyMode
 * @method self withLazyMode(string $lazyMode)
 */
class DeleteFaceSet extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMarker
 * @method self withMarker(string $marker)
 */
class ListFaceSets extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getSrcUris
 * @method self withSrcUris(string $srcUris)
 * @method string getForce
 * @method self withForce(string $force)
 * @method string getChain
 * @method self withChain(string $chain)
 */
class IndexFace extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getOperation
 * @method self withOperation(string $operation)
 */
class GroupFaces extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getReturnAttribute
 * @method self withReturnAttribute(string $returnAttribute)
 * @method string getMarker
 * @method self withMarker(string $marker)
 */
class GetFaceSetDetail extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getGroupId
 * @method self withGroupId(string $groupId)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 */
class GetFaceGroupPhotos extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method Integer getMarker
 * @method self withMarker(Integer $marker)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 */
class ListFaceGroups extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSetId
 * @method self withSetId(string $setId)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 */
class RemoveFaceByUrl extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class GetFaceJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method string getCondition
 * @method self withCondition(string $condition)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 */
class ListFaceJobs extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 * @method string getClearIndexData
 * @method self withClearIndexData(string $clearIndexData)
 */
class DeleteFaceJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 */
class CreateFaceJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUris
 * @method self withSrcUris(string $srcUris)
 */
class DetectFace extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName(string $notifyTopicName)
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint(string $notifyEndpoint)
 * @method string getExternalID
 * @method self withExternalID(string $externalID)
 */
class CreateTagJob extends Rpc
{
    use R;
}

/**
 * @method string getJobId
 * @method self withJobId(string $jobId)
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getClearIndexData
 * @method self withClearIndexData(string $clearIndexData)
 */
class DeleteTagJob extends Rpc
{
    use R;
}

/**
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method string getCondition
 * @method self withCondition(string $condition)
 * @method string getProject
 * @method self withProject(string $project)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 */
class ListTagJobs extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class GetTagJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUris
 * @method self withSrcUris(string $srcUris)
 * @method string getModelId
 * @method self withModelId(string $modelId)
 */
class DetectTag extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getServiceRole
 * @method self withServiceRole(string $serviceRole)
 * @method Integer getCU
 * @method self withCU(Integer $cU)
 * @method string getType
 * @method self withType(string $type)
 * @method string getBillingType
 * @method self withBillingType(string $billingType)
 */
class PutProject extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 */
class DelProject extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 */
class GetProject extends Rpc
{
    use R;
}

/**
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 */
class ListProjects extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getStyle
 * @method self withStyle(string $style)
 * @method string getTgtUri
 * @method self withTgtUri(string $tgtUri)
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName(string $notifyTopicName)
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint(string $notifyEndpoint)
 * @method string getExternalID
 * @method self withExternalID(string $externalID)
 */
class CreateFormatConvertJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class DeleteFormatConvertJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class GetFormatConvertJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 */
class ListFormatConvertJobs extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getTgtUri
 * @method self withTgtUri(string $tgtUri)
 * @method string getStyle
 * @method self withStyle(string $style)
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName(string $notifyTopicName)
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint(string $notifyEndpoint)
 * @method string getExternalID
 * @method self withExternalID(string $externalID)
 */
class CreatePhotoJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class DeletePhotoJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class DeletePornBatchDetectJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getSrcUri
 * @method self withSrcUri(string $srcUri)
 * @method string getTgtUri
 * @method self withTgtUri(string $tgtUri)
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName(string $notifyTopicName)
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint(string $notifyEndpoint)
 * @method string getExternalID
 * @method self withExternalID(string $externalID)
 */
class CreatePornBatchDetectJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class GetPornBatchDetectJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 */
class ListPornBatchDetectJobs extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getJobId
 * @method self withJobId(string $jobId)
 */
class GetPhotoJob extends Rpc
{
    use R;
}

/**
 * @method string getProject
 * @method self withProject(string $project)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxKeys
 * @method self withMaxKeys(Integer $maxKeys)
 */
class ListPhotoJobs extends Rpc
{
    use R;
}

/**
 * @method string getUrl
 * @method self withUrl(string $url)
 */
class Detect extends Rpc
{
    use R;
}
