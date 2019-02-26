<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getTgtType
 * @method self withTgtType
 * @method string getTgtUri
 * @method self withTgtUri
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint
 * @method string getSrcType
 * @method self withSrcType
 * @method Integer getZoomFactor
 * @method self withZoomFactor
 * @method Integer getZoomLevel
 * @method self withZoomLevel
 * @method Long getUnitHeight
 * @method self withUnitHeight
 * @method Long getUnitWidth
 * @method self withUnitWidth
 * @method Integer getBaseRow
 * @method self withBaseRow
 * @method Integer getBaseCol
 * @method self withBaseCol
 * @method Boolean getThumbnails
 * @method self withThumbnails
 * @method string getModelId
 * @method self withModelId
 */
final class CreateCADConversionTask extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getImageUri
 * @method self withImageUri
 * @method string getFaceId
 * @method self withFaceId
 * @method Integer getLimit
 * @method self withLimit
 */
final class FindSimilarFaces extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getImageSizeRange
 * @method self withImageSizeRange
 * @method string getImageTimeRange
 * @method self withImageTimeRange
 * @method string getCreateTimeRange
 * @method self withCreateTimeRange
 * @method string getUpdateTimeRange
 * @method self withUpdateTimeRange
 * @method string getSourceType
 * @method self withSourceType
 * @method string getSourceUriPrefix
 * @method self withSourceUriPrefix
 * @method string getRemarksAPrefix
 * @method self withRemarksAPrefix
 * @method string getRemarksBPrefix
 * @method self withRemarksBPrefix
 * @method string getTagNames
 * @method self withTagNames
 * @method string getOCRContentsMatch
 * @method self withOCRContentsMatch
 * @method string getAgeRange
 * @method self withAgeRange
 * @method string getGender
 * @method self withGender
 * @method string getEmotion
 * @method self withEmotion
 * @method string getOrderBy
 * @method self withOrderBy
 * @method string getOrder
 * @method self withOrder
 * @method string getMarker
 * @method self withMarker
 * @method string getLocationBoundary
 * @method self withLocationBoundary
 * @method string getRemarksCPrefix
 * @method self withRemarksCPrefix
 * @method string getRemarksDPrefix
 * @method self withRemarksDPrefix
 * @method string getExternalId
 * @method self withExternalId
 */
final class FindImages extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getTagNames
 * @method self withTagNames
 * @method string getMarker
 * @method self withMarker
 */
final class FindImagesByTagNames extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getSetName
 * @method self withSetName
 */
final class CreateSet extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 */
final class GetSet extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getImageUri
 * @method self withImageUri
 * @method string getRemarksA
 * @method self withRemarksA
 * @method string getRemarksB
 * @method self withRemarksB
 * @method string getSourceType
 * @method self withSourceType
 * @method string getSourceUri
 * @method self withSourceUri
 * @method string getSourcePosition
 * @method self withSourcePosition
 * @method string getRemarksC
 * @method self withRemarksC
 * @method string getRemarksD
 * @method self withRemarksD
 * @method string getExternalId
 * @method self withExternalId
 */
final class IndexImage extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getSetName
 * @method self withSetName
 */
final class UpdateSet extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMarker
 * @method self withMarker
 */
final class ListSets extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getImageUri
 * @method self withImageUri
 */
final class GetImage extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 */
final class DeleteSet extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getVideoUri
 * @method self withVideoUri
 * @method string getMarker
 * @method self withMarker
 */
final class ListVideoFrames extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getVideoUri
 * @method self withVideoUri
 * @method string getMarker
 * @method self withMarker
 */
final class ListVideoAudios extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getImageUri
 * @method self withImageUri
 */
final class DetectImageTags extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getImageUri
 * @method self withImageUri
 */
final class DetectImageFaces extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getImageUri
 * @method self withImageUri
 */
final class DeleteImage extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getImageUriA
 * @method self withImageUriA
 * @method string getImageUriB
 * @method self withImageUriB
 * @method string getFaceIdA
 * @method self withFaceIdA
 * @method string getFaceIdB
 * @method self withFaceIdB
 */
final class CompareImageFaces extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getVideoUri
 * @method self withVideoUri
 * @method Boolean getResources
 * @method self withResources
 */
final class DeleteVideo extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getCreateTimeStart
 * @method self withCreateTimeStart
 * @method string getMarker
 * @method self withMarker
 */
final class ListImages extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getImageUri
 * @method self withImageUri
 * @method string getRemarksA
 * @method self withRemarksA
 * @method string getRemarksB
 * @method self withRemarksB
 * @method string getSourceType
 * @method self withSourceType
 * @method string getSourceUri
 * @method self withSourceUri
 * @method string getSourcePosition
 * @method self withSourcePosition
 * @method string getRemarksC
 * @method self withRemarksC
 * @method string getRemarksD
 * @method self withRemarksD
 * @method string getExternalId
 * @method self withExternalId
 */
final class UpdateImage extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getCreateTimeStart
 * @method self withCreateTimeStart
 * @method string getMarker
 * @method self withMarker
 */
final class ListVideos extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getImageUri
 * @method self withImageUri
 */
final class DetectImageTexts extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getImageUri
 * @method self withImageUri
 * @method string getLibrary
 * @method self withLibrary
 */
final class DetectImageCelebrity extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getVideoUri
 * @method self withVideoUri
 * @method string getRemarksA
 * @method self withRemarksA
 * @method string getRemarksB
 * @method self withRemarksB
 * @method string getGrabType
 * @method self withGrabType
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Boolean getSaveType
 * @method self withSaveType
 * @method string getInterval
 * @method self withInterval
 * @method string getTgtUri
 * @method self withTgtUri
 * @method string getRemarksC
 * @method self withRemarksC
 * @method string getRemarksD
 * @method self withRemarksD
 * @method string getExternalId
 * @method self withExternalId
 */
final class IndexVideo extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getVideoUri
 * @method self withVideoUri
 */
final class GetVideo extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 */
final class ListSetTags extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getVideoUri
 * @method self withVideoUri
 * @method string getGrabType
 * @method self withGrabType
 * @method string getStartTime
 * @method self withStartTime
 * @method string getEndTime
 * @method self withEndTime
 * @method Boolean getSaveType
 * @method self withSaveType
 * @method string getInterval
 * @method self withInterval
 * @method string getTgtUri
 * @method self withTgtUri
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint
 */
final class CreateVideoAnalyseTask extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getTaskType
 * @method self withTaskType
 * @method string getTaskId
 * @method self withTaskId
 */
final class GetVideoTask extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getTaskType
 * @method self withTaskType
 * @method string getTaskId
 * @method self withTaskId
 */
final class DeleteVideoTask extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 * @method string getTaskType
 * @method self withTaskType
 */
final class ListVideoTasks extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getSrcUris
 * @method self withSrcUris
 * @method string getForce
 * @method self withForce
 * @method string getChain
 * @method self withChain
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint
 */
final class CreateIndexFaceJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getJobType
 * @method self withJobType
 * @method string getJobId
 * @method self withJobId
 */
final class GetImageJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getJobType
 * @method self withJobType
 * @method string getJobId
 * @method self withJobId
 */
final class DeleteImageJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 * @method string getJobType
 * @method self withJobType
 */
final class ListImageJobs extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 */
final class ListImageFaces extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getOperation
 * @method self withOperation
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint
 */
final class CreateGroupFacesJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getCheckEmpty
 * @method self withCheckEmpty
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint
 */
final class CreateDeleteFaceSetJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getUniqueId
 * @method self withUniqueId
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getName
 * @method self withName
 * @method string getContentType
 * @method self withContentType
 * @method string getCustomKey1
 * @method self withCustomKey1
 * @method string getCustomKey2
 * @method self withCustomKey2
 * @method string getCustomKey3
 * @method self withCustomKey3
 * @method string getCustomKey4
 * @method self withCustomKey4
 * @method string getCustomKey5
 * @method self withCustomKey5
 * @method string getCustomKey6
 * @method self withCustomKey6
 * @method string getSet
 * @method self withSet
 */
final class CreateDocIndexTask extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getTaskId
 * @method self withTaskId
 */
final class GetDocIndexTask extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getUniqueId
 * @method self withUniqueId
 * @method string getName
 * @method self withName
 * @method string getCustomKey1
 * @method self withCustomKey1
 * @method string getCustomKey2
 * @method self withCustomKey2
 * @method string getCustomKey3
 * @method self withCustomKey3
 * @method string getCustomKey4
 * @method self withCustomKey4
 * @method string getCustomKey5
 * @method self withCustomKey5
 * @method string getCustomKey6
 * @method self withCustomKey6
 * @method string getSet
 * @method self withSet
 */
final class UpdateDocIndexMeta extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getUniqueId
 * @method self withUniqueId
 * @method string getSet
 * @method self withSet
 */
final class GetDocIndex extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getUniqueId
 * @method self withUniqueId
 * @method string getSet
 * @method self withSet
 */
final class DeleteDocIndex extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getContent
 * @method self withContent
 * @method string getName
 * @method self withName
 * @method string getContentType
 * @method self withContentType
 * @method Integer getModifiedTimeStart
 * @method self withModifiedTimeStart
 * @method Integer getModifiedTimeEnd
 * @method self withModifiedTimeEnd
 * @method Integer getSizeLimitStart
 * @method self withSizeLimitStart
 * @method Integer getSizeLimitEnd
 * @method self withSizeLimitEnd
 * @method Integer getPageNumLimitStart
 * @method self withPageNumLimitStart
 * @method Integer getPageNumLimitEnd
 * @method self withPageNumLimitEnd
 * @method string getCustomKey1
 * @method self withCustomKey1
 * @method string getCustomKey2
 * @method self withCustomKey2
 * @method string getCustomKey3
 * @method self withCustomKey3
 * @method string getCustomKey4
 * @method self withCustomKey4
 * @method string getCustomKey5
 * @method self withCustomKey5
 * @method string getCustomKey6
 * @method self withCustomKey6
 * @method Integer getOffset
 * @method self withOffset
 * @method Integer getLimit
 * @method self withLimit
 * @method string getSet
 * @method self withSet
 */
final class SearchDocIndex extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUris
 * @method self withSrcUris
 */
final class DetectLogo extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUris
 * @method self withSrcUris
 */
final class DetectClothes extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method Integer getNewCU
 * @method self withNewCU
 * @method string getNewServiceRole
 * @method self withNewServiceRole
 */
final class UpdateProject extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUris
 * @method self withSrcUris
 */
final class DetectQRCodes extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUriA
 * @method self withSrcUriA
 * @method string getSrcUriB
 * @method self withSrcUriB
 */
final class CompareFace extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getGroupName
 * @method self withGroupName
 * @method string getUser
 * @method self withUser
 * @method Boolean getIsQualityLimit
 * @method self withIsQualityLimit
 * @method Boolean getChooseBiggestFace
 * @method self withChooseBiggestFace
 * @method string getRegisterCheckLevel
 * @method self withRegisterCheckLevel
 */
final class RegistFace extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getGroupName
 * @method self withGroupName
 * @method Integer getResultNum
 * @method self withResultNum
 * @method Boolean getIsThreshold
 * @method self withIsThreshold
 * @method string getSearchThresholdLevel
 * @method self withSearchThresholdLevel
 */
final class SearchFace extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUriA
 * @method self withSrcUriA
 * @method string getSrcUriB
 * @method self withSrcUriB
 */
final class FaceCompare extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getGroupName
 * @method self withGroupName
 * @method string getUser
 * @method self withUser
 * @method Boolean getIsQualityLimit
 * @method self withIsQualityLimit
 * @method Boolean getChooseBiggestFace
 * @method self withChooseBiggestFace
 * @method string getRegisterCheckLevel
 * @method self withRegisterCheckLevel
 */
final class FaceRegist extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getGroupName
 * @method self withGroupName
 * @method Integer getResultNum
 * @method self withResultNum
 * @method Boolean getIsThreshold
 * @method self withIsThreshold
 * @method string getSearchThresholdLevel
 * @method self withSearchThresholdLevel
 */
final class FaceSearch extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMarker
 * @method self withMarker
 * @method string getGroupName
 * @method self withGroupName
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 */
final class ListFaceSearchGroupUsers extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 */
final class ListFaceSearchGroups extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMarker
 * @method self withMarker
 * @method string getGroupName
 * @method self withGroupName
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 * @method string getUser
 * @method self withUser
 */
final class ListFaceSearchGroupImages extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getGroupName
 * @method self withGroupName
 * @method string getImageId
 * @method self withImageId
 * @method string getUser
 * @method self withUser
 * @method string getSrcUri
 * @method self withSrcUri
 */
final class DeleteFaceSearchImageById extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getGroupName
 * @method self withGroupName
 * @method string getUser
 * @method self withUser
 */
final class DeleteFaceSearchUser extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getGroupName
 * @method self withGroupName
 */
final class DeleteFaceSearchGroup extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getGroupName
 * @method self withGroupName
 */
final class GetFaceSearchGroup extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getGroupName
 * @method self withGroupName
 * @method string getUser
 * @method self withUser
 */
final class GetFaceSearchUser extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getImageId
 * @method self withImageId
 * @method string getGroupName
 * @method self withGroupName
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getUser
 * @method self withUser
 */
final class GetFaceSearchImage extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getFaceId
 * @method self withFaceId
 */
final class GetFaceDetail extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUris
 * @method self withSrcUris
 */
final class CreateVideoAIJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getJobs
 * @method self withJobs
 */
final class GetVideoAIJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getTgtUri
 * @method self withTgtUri
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint
 * @method Float getStartTime
 * @method self withStartTime
 * @method Float getInterval
 * @method self withInterval
 * @method string getStyle
 * @method self withStyle
 * @method Integer getTgtWidth
 * @method self withTgtWidth
 * @method Integer getTgtHeight
 * @method self withTgtHeight
 * @method string getExternalID
 * @method self withExternalID
 * @method Boolean getKeepFrame
 * @method self withKeepFrame
 * @method Boolean getCutBlack
 * @method self withCutBlack
 * @method string getPJobId
 * @method self withPJobId
 * @method Long getSrcOwnerId
 * @method self withSrcOwnerId
 */
final class CreateVideoAnalyseJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getJobId
 * @method self withJobId
 */
final class GetVideoAnalyseJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getJobId
 * @method self withJobId
 */
final class DeleteVideoAnalyseJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 */
final class ListVideoAnalyseJobs extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getFaceIds
 * @method self withFaceIds
 */
final class DeleteFaceById extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getFaceIds
 * @method self withFaceIds
 * @method string getNewGroupId
 * @method self withNewGroupId
 */
final class UpdateFaceGroupById extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint
 * @method string getPJobId
 * @method self withPJobId
 * @method Integer getSrcOwnerId
 * @method self withSrcOwnerId
 */
final class CreateBatchIndexFrameTagTask extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getJobId
 * @method self withJobId
 */
final class GetBatchIndexFrameTagTask extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getTgtUri
 * @method self withTgtUri
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint
 * @method Float getStartTime
 * @method self withStartTime
 * @method Float getInterval
 * @method self withInterval
 * @method string getStyle
 * @method self withStyle
 * @method Integer getTgtWidth
 * @method self withTgtWidth
 * @method Integer getTgtHeight
 * @method self withTgtHeight
 * @method string getExternalID
 * @method self withExternalID
 * @method Boolean getKeepFrame
 * @method self withKeepFrame
 * @method Boolean getCutBlack
 * @method self withCutBlack
 * @method string getPJobId
 * @method self withPJobId
 * @method Long getSrcOwnerId
 * @method self withSrcOwnerId
 * @method Integer getTagNum
 * @method self withTagNum
 * @method string getTagStyle
 * @method self withTagStyle
 */
final class CreateVideoTagJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getJobId
 * @method self withJobId
 */
final class GetVideoTagJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 */
final class ListVideoTagJobs extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getTgtUri
 * @method self withTgtUri
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint
 * @method Float getStartTime
 * @method self withStartTime
 * @method Float getInterval
 * @method self withInterval
 * @method string getStyle
 * @method self withStyle
 * @method Integer getTgtWidth
 * @method self withTgtWidth
 * @method Integer getTgtHeight
 * @method self withTgtHeight
 * @method string getExternalID
 * @method self withExternalID
 * @method Boolean getKeepFrame
 * @method self withKeepFrame
 * @method Boolean getCutBlack
 * @method self withCutBlack
 * @method string getPJobId
 * @method self withPJobId
 * @method Long getSrcOwnerId
 * @method self withSrcOwnerId
 */
final class CreateFrameGrabJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getJobId
 * @method self withJobId
 */
final class DeleteFrameGrabJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getJobId
 * @method self withJobId
 */
final class GetFrameGrabJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 * @method string getPJobId
 * @method self withPJobId
 */
final class ListFrameGrabJobs extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getSrcUris
 * @method self withSrcUris
 * @method Integer getSrcOwnerId
 * @method self withSrcOwnerId
 */
final class IndexFrameTag extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method Integer getSrcOwnerId
 * @method self withSrcOwnerId
 */
final class CreateFrameTagSet extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint
 * @method string getStyle
 * @method self withStyle
 * @method Integer getTagNum
 * @method self withTagNum
 * @method Long getSrcOwnerId
 * @method self withSrcOwnerId
 * @method string getPJobId
 * @method self withPJobId
 */
final class CreateFrameTagAnalyseTask extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getJobId
 * @method self withJobId
 */
final class GetFrameTagAnalyseTask extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getSrcUri
 * @method self withSrcUri
 */
final class DeleteTagByUrl extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getTagName
 * @method self withTagName
 */
final class DeleteTagByName extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getSrcUri
 * @method self withSrcUri
 */
final class DeleteFaceByUrl extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getMarker
 * @method self withMarker
 */
final class ListTagNames extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 */
final class ListOfficeConversionTask extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getTagName
 * @method self withTagName
 * @method string getMarker
 * @method self withMarker
 * @method string getMaxKeys
 * @method self withMaxKeys
 */
final class ListTagPhotos extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getGroupId
 * @method self withGroupId
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 */
final class ListFaceGroupPhotos extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getTaskId
 * @method self withTaskId
 */
final class GetOfficeConversionTask extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getTaskId
 * @method self withTaskId
 */
final class DeleteOfficeConversionTask extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getTgtType
 * @method self withTgtType
 * @method string getTgtUri
 * @method self withTgtUri
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint
 * @method string getSrcType
 * @method self withSrcType
 * @method Long getStartPage
 * @method self withStartPage
 * @method Long getEndPage
 * @method self withEndPage
 * @method Long getMaxSheetRow
 * @method self withMaxSheetRow
 * @method Long getMaxSheetCol
 * @method self withMaxSheetCol
 * @method Long getMaxSheetCount
 * @method self withMaxSheetCount
 * @method Boolean getSheetOnePage
 * @method self withSheetOnePage
 * @method string getModelId
 * @method self withModelId
 * @method string getPassword
 * @method self withPassword
 * @method string getTgtFilePrefix
 * @method self withTgtFilePrefix
 * @method string getTgtFileSuffix
 * @method self withTgtFileSuffix
 * @method string getTgtFilePages
 * @method self withTgtFilePages
 * @method Boolean getFitToPagesTall
 * @method self withFitToPagesTall
 * @method Boolean getFitToPagesWide
 * @method self withFitToPagesWide
 * @method string getIdempotentToken
 * @method self withIdempotentToken
 * @method Boolean getPdfVector
 * @method self withPdfVector
 * @method Boolean getHidecomments
 * @method self withHidecomments
 */
final class CreateOfficeConversionTask extends RpcRequest
{
}

final class DescribeRegions extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getTgtType
 * @method self withTgtType
 * @method string getTgtUri
 * @method self withTgtUri
 * @method string getSrcType
 * @method self withSrcType
 * @method Long getStartPage
 * @method self withStartPage
 * @method Long getEndPage
 * @method self withEndPage
 * @method Long getMaxSheetRow
 * @method self withMaxSheetRow
 * @method Long getMaxSheetCol
 * @method self withMaxSheetCol
 * @method Long getMaxSheetCount
 * @method self withMaxSheetCount
 * @method Boolean getSheetOnePage
 * @method self withSheetOnePage
 * @method string getModelId
 * @method self withModelId
 * @method string getPassword
 * @method self withPassword
 * @method string getTgtFilePrefix
 * @method self withTgtFilePrefix
 * @method string getTgtFileSuffix
 * @method self withTgtFileSuffix
 * @method string getTgtFilePages
 * @method self withTgtFilePages
 * @method Boolean getFitToPagesTall
 * @method self withFitToPagesTall
 * @method Boolean getFitToPagesWide
 * @method self withFitToPagesWide
 * @method Boolean getPdfVector
 * @method self withPdfVector
 * @method Boolean getHidecomments
 * @method self withHidecomments
 */
final class ConvertOfficeFormat extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getTaskId
 * @method self withTaskId
 */
final class GetConvertOfficeFormatTask extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getTaskId
 * @method self withTaskId
 */
final class DeleteConvertOfficeFormatTask extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 */
final class ListConvertOfficeFormatTasks extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getTgtUri
 * @method self withTgtUri
 * @method string getStyle
 * @method self withStyle
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint
 * @method string getExternalID
 * @method self withExternalID
 */
final class PhotoProcess extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getTaskId
 * @method self withTaskId
 */
final class DeletePhotoProcessTask extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getTaskId
 * @method self withTaskId
 */
final class GetPhotoProcessTask extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 */
final class ListPhotoProcessTasks extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 */
final class DeleteProject extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 */
final class GetTagSet extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 */
final class GetFaceSet extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getTagName
 * @method self withTagName
 */
final class RemoveTagByName extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 */
final class ListTagName extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getSrcUri
 * @method self withSrcUri
 */
final class RemoveTagByUrl extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getCheckEmpty
 * @method self withCheckEmpty
 * @method string getLazyMode
 * @method self withLazyMode
 */
final class DeleteTagSet extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 */
final class ListTagSets extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 */
final class CreateTagSet extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getSrcUris
 * @method self withSrcUris
 * @method string getForce
 * @method self withForce
 * @method string getModelId
 * @method self withModelId
 */
final class IndexTag extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getTagName
 * @method self withTagName
 * @method string getMarker
 * @method self withMarker
 * @method string getMaxKeys
 * @method self withMaxKeys
 */
final class GetTagPhotos extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 */
final class CreateFaceSet extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getCheckEmpty
 * @method self withCheckEmpty
 * @method string getLazyMode
 * @method self withLazyMode
 */
final class DeleteFaceSet extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMarker
 * @method self withMarker
 */
final class ListFaceSets extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getSrcUris
 * @method self withSrcUris
 * @method string getForce
 * @method self withForce
 * @method string getChain
 * @method self withChain
 */
final class IndexFace extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getOperation
 * @method self withOperation
 */
final class GroupFaces extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getReturnAttribute
 * @method self withReturnAttribute
 * @method string getMarker
 * @method self withMarker
 */
final class GetFaceSetDetail extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getGroupId
 * @method self withGroupId
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 */
final class GetFaceGroupPhotos extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method Integer getMarker
 * @method self withMarker
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 */
final class ListFaceGroups extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSetId
 * @method self withSetId
 * @method string getSrcUri
 * @method self withSrcUri
 */
final class RemoveFaceByUrl extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getJobId
 * @method self withJobId
 */
final class GetFaceJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMarker
 * @method self withMarker
 * @method string getCondition
 * @method self withCondition
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 */
final class ListFaceJobs extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getJobId
 * @method self withJobId
 * @method string getClearIndexData
 * @method self withClearIndexData
 */
final class DeleteFaceJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUri
 * @method self withSrcUri
 */
final class CreateFaceJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUris
 * @method self withSrcUris
 */
final class DetectFace extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint
 * @method string getExternalID
 * @method self withExternalID
 */
final class CreateTagJob extends RpcRequest
{
}

/**
 * @method string getJobId
 * @method self withJobId
 * @method string getProject
 * @method self withProject
 * @method string getClearIndexData
 * @method self withClearIndexData
 */
final class DeleteTagJob extends RpcRequest
{
}

/**
 * @method string getMarker
 * @method self withMarker
 * @method string getCondition
 * @method self withCondition
 * @method string getProject
 * @method self withProject
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 */
final class ListTagJobs extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getJobId
 * @method self withJobId
 */
final class GetTagJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUris
 * @method self withSrcUris
 * @method string getModelId
 * @method self withModelId
 */
final class DetectTag extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getServiceRole
 * @method self withServiceRole
 * @method Integer getCU
 * @method self withCU
 * @method string getType
 * @method self withType
 * @method string getBillingType
 * @method self withBillingType
 */
final class PutProject extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 */
final class DelProject extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 */
final class GetProject extends RpcRequest
{
}

/**
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 */
final class ListProjects extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getStyle
 * @method self withStyle
 * @method string getTgtUri
 * @method self withTgtUri
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint
 * @method string getExternalID
 * @method self withExternalID
 */
final class CreateFormatConvertJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getJobId
 * @method self withJobId
 */
final class DeleteFormatConvertJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getJobId
 * @method self withJobId
 */
final class GetFormatConvertJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 */
final class ListFormatConvertJobs extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getTgtUri
 * @method self withTgtUri
 * @method string getStyle
 * @method self withStyle
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint
 * @method string getExternalID
 * @method self withExternalID
 */
final class CreatePhotoJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getJobId
 * @method self withJobId
 */
final class DeletePhotoJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getJobId
 * @method self withJobId
 */
final class DeletePornBatchDetectJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getSrcUri
 * @method self withSrcUri
 * @method string getTgtUri
 * @method self withTgtUri
 * @method string getNotifyTopicName
 * @method self withNotifyTopicName
 * @method string getNotifyEndpoint
 * @method self withNotifyEndpoint
 * @method string getExternalID
 * @method self withExternalID
 */
final class CreatePornBatchDetectJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getJobId
 * @method self withJobId
 */
final class GetPornBatchDetectJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 */
final class ListPornBatchDetectJobs extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getJobId
 * @method self withJobId
 */
final class GetPhotoJob extends RpcRequest
{
}

/**
 * @method string getProject
 * @method self withProject
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxKeys
 * @method self withMaxKeys
 */
final class ListPhotoJobs extends RpcRequest
{
}

/**
 * @method string getUrl
 * @method self withUrl
 */
final class Detect extends RpcRequest
{
}
