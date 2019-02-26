<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getState
 * @method self withState
 * @method string getOrderBy
 * @method self withOrderBy
 * @method string getOrder
 * @method self withOrder
 * @method Integer getSize
 * @method self withSize
 * @method Integer getPage
 * @method self withPage
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class FetchPhotos extends RpcRequest
{
}

/**
 * @method Long getMomentId
 * @method self withMomentId
 * @method string getOrderBy
 * @method self withOrderBy
 * @method string getOrder
 * @method self withOrder
 * @method Integer getSize
 * @method self withSize
 * @method Integer getPage
 * @method self withPage
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class FetchMomentPhotos extends RpcRequest
{
}

/**
 * @method string getStoreName
 * @method self withStoreName
 * @method Integer getPage
 * @method self withPage
 * @method Integer getSize
 * @method self withSize
 */
final class FetchLibraries extends RpcRequest
{
}

/**
 * @method Long getAlbumId
 * @method self withAlbumId
 * @method Long getTagId
 * @method self withTagId
 * @method Integer getSize
 * @method self withSize
 * @method Integer getPage
 * @method self withPage
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class FetchAlbumTagPhotos extends RpcRequest
{
}

/**
 * @method RepeatList getName
 * @method self withName
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class GetAlbumsByNames extends RpcRequest
{
}

/**
 * @method string getpk
 * @method self withpk
 * @method string getbid
 * @method self withbid
 * @method Long gethid
 * @method self withhid
 * @method string getcountry
 * @method self withcountry
 * @method string gettaskIdentifier
 * @method self withtaskIdentifier
 * @method string gettaskExtraData
 * @method self withtaskExtraData
 * @method string getgmtWakeup
 * @method self withgmtWakeup
 */
final class PhysicalDeleteResource extends RpcRequest
{
}

/**
 * @method string getpk
 * @method self withpk
 * @method string getbid
 * @method self withbid
 * @method Long gethid
 * @method self withhid
 * @method string getcountry
 * @method self withcountry
 * @method string gettaskIdentifier
 * @method self withtaskIdentifier
 * @method string gettaskExtraData
 * @method self withtaskExtraData
 * @method string getgmtWakeup
 * @method self withgmtWakeup
 */
final class LogicalDeleteResource extends RpcRequest
{
}

/**
 * @method Long getEventId
 * @method self withEventId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class GetEvent extends RpcRequest
{
}

/**
 * @method string getEndPoint
 * @method self withEndPoint
 * @method string getBucket
 * @method self withBucket
 * @method string getAccessId
 * @method self withAccessId
 * @method string getAccessKey
 * @method self withAccessKey
 * @method string getStsToken
 * @method self withStsToken
 * @method string getObjectKey
 * @method self withObjectKey
 */
final class GetOSSPostObjectPolicy extends RpcRequest
{
}

/**
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 * @method string getEventId
 * @method self withEventId
 * @method string getIdentity
 * @method self withIdentity
 * @method string getTitle
 * @method self withTitle
 * @method Long getStartAt
 * @method self withStartAt
 * @method Long getEndAt
 * @method self withEndAt
 * @method string getWeixinTitle
 * @method self withWeixinTitle
 * @method string getSplashPhotoId
 * @method self withSplashPhotoId
 * @method string getBannerPhotoId
 * @method self withBannerPhotoId
 * @method string getWatermarkPhotoId
 * @method self withWatermarkPhotoId
 * @method string getRemark
 * @method self withRemark
 */
final class EditEvent extends RpcRequest
{
}

/**
 * @method string getDirection
 * @method self withDirection
 * @method Integer getSize
 * @method self withSize
 * @method string getCursor
 * @method self withCursor
 * @method string getState
 * @method self withState
 * @method string getStoreName
 * @method self withStoreName
 */
final class ListEvents extends RpcRequest
{
}

/**
 * @method Long getEventId
 * @method self withEventId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class DeleteEvent extends RpcRequest
{
}

/**
 * @method string getpk
 * @method self withpk
 * @method string getbid
 * @method self withbid
 * @method Long gethid
 * @method self withhid
 * @method string getcountry
 * @method self withcountry
 * @method string gettaskIdentifier
 * @method self withtaskIdentifier
 * @method string gettaskExtraData
 * @method self withtaskExtraData
 * @method string getgmtWakeup
 * @method self withgmtWakeup
 */
final class CheckResource extends RpcRequest
{
}

/**
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 * @method string getTitle
 * @method self withTitle
 * @method Long getStartAt
 * @method self withStartAt
 * @method Long getEndAt
 * @method self withEndAt
 * @method string getIdentity
 * @method self withIdentity
 * @method string getWeixinTitle
 * @method self withWeixinTitle
 * @method string getSplashPhotoId
 * @method self withSplashPhotoId
 * @method string getBannerPhotoId
 * @method self withBannerPhotoId
 * @method string getWatermarkPhotoId
 * @method self withWatermarkPhotoId
 * @method string getRemark
 * @method self withRemark
 */
final class CreateEvent extends RpcRequest
{
}

/**
 * @method Long getTakenAt
 * @method self withTakenAt
 * @method string getLocation
 * @method self withLocation
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 * @method Float getLatitude
 * @method self withLatitude
 * @method Float getLongitude
 * @method self withLongitude
 * @method Integer getWidth
 * @method self withWidth
 * @method Integer getHeight
 * @method self withHeight
 * @method string getIsVideo
 * @method self withIsVideo
 * @method string getMd5
 * @method self withMd5
 * @method Long getSize
 * @method self withSize
 * @method string getPhotoTitle
 * @method self withPhotoTitle
 * @method string getRemark
 * @method self withRemark
 */
final class RegisterPhoto extends RpcRequest
{
}

/**
 * @method Long getPhotoId
 * @method self withPhotoId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class GetSimilarPhotos extends RpcRequest
{
}

/**
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class IndexLibrary extends RpcRequest
{
}

/**
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 * @method RepeatList getTagKey
 * @method self withTagKey
 * @method RepeatList getConfidence
 * @method self withConfidence
 * @method Long getPhotoId
 * @method self withPhotoId
 */
final class TagPhoto extends RpcRequest
{
}

/**
 * @method string getStoreName
 * @method self withStoreName
 * @method string getTagKey
 * @method self withTagKey
 * @method string getLang
 * @method self withLang
 * @method string getText
 * @method self withText
 */
final class RegisterTag extends RpcRequest
{
}

/**
 * @method string getStoreName
 * @method self withStoreName
 * @method RepeatList getLang
 * @method self withLang
 */
final class ListRegisteredTags extends RpcRequest
{
}

/**
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class GetLibrary extends RpcRequest
{
}

/**
 * @method string getAutoCleanEnabled
 * @method self withAutoCleanEnabled
 * @method Integer getAutoCleanDays
 * @method self withAutoCleanDays
 * @method Long getDefaultQuota
 * @method self withDefaultQuota
 * @method Long getDefaultTrashQuota
 * @method self withDefaultTrashQuota
 * @method string getRemark
 * @method self withRemark
 * @method string getStoreName
 * @method self withStoreName
 */
final class EditPhotoStore extends RpcRequest
{
}

/**
 * @method string getStoreName
 * @method self withStoreName
 * @method RepeatList getEnabledFeatures
 * @method self withEnabledFeatures
 * @method RepeatList getDisabledFeatures
 * @method self withDisabledFeatures
 */
final class ToggleFeatures extends RpcRequest
{
}

/**
 * @method string getDirection
 * @method self withDirection
 * @method Integer getPhotoSize
 * @method self withPhotoSize
 * @method Long getCursor
 * @method self withCursor
 * @method Integer getTimeLineCount
 * @method self withTimeLineCount
 * @method string getTimeLineUnit
 * @method self withTimeLineUnit
 * @method string getFilterBy
 * @method self withFilterBy
 * @method string getOrder
 * @method self withOrder
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class ListTimeLines extends RpcRequest
{
}

/**
 * @method Long getPhotoId
 * @method self withPhotoId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class ListPhotoFaces extends RpcRequest
{
}

/**
 * @method string getDirection
 * @method self withDirection
 * @method Integer getPage
 * @method self withPage
 * @method Integer getSize
 * @method self withSize
 * @method Long getStartTime
 * @method self withStartTime
 * @method Long getEndTime
 * @method self withEndTime
 * @method string getFilterBy
 * @method self withFilterBy
 * @method string getOrder
 * @method self withOrder
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class ListTimeLinePhotos extends RpcRequest
{
}

/**
 * @method Long getPhotoId
 * @method self withPhotoId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class LikePhoto extends RpcRequest
{
}

/**
 * @method RepeatList getPhotoId
 * @method self withPhotoId
 * @method string getZoomType
 * @method self withZoomType
 * @method string getDomainType
 * @method self withDomainType
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class GetPublicAccessUrls extends RpcRequest
{
}

/**
 * @method RepeatList getPhotoId
 * @method self withPhotoId
 * @method string getZoomType
 * @method self withZoomType
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class GetPrivateAccessUrls extends RpcRequest
{
}

/**
 * @method RepeatList getMd5
 * @method self withMd5
 * @method string getState
 * @method self withState
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class GetPhotosByMd5s extends RpcRequest
{
}

/**
 * @method RepeatList getPhotoId
 * @method self withPhotoId
 * @method string getFrameId
 * @method self withFrameId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class GetFramedPhotoUrls extends RpcRequest
{
}

/**
 * @method RepeatList getPhotoId
 * @method self withPhotoId
 * @method Long getShareExpireTime
 * @method self withShareExpireTime
 * @method Long getTakenAt
 * @method self withTakenAt
 * @method string getTitle
 * @method self withTitle
 * @method string getRemark
 * @method self withRemark
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class EditPhotos extends RpcRequest
{
}

/**
 * @method RepeatList getPhotoId
 * @method self withPhotoId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class ActivatePhotos extends RpcRequest
{
}

/**
 * @method RepeatList getPhotoId
 * @method self withPhotoId
 * @method string getZoomType
 * @method self withZoomType
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class GetThumbnails extends RpcRequest
{
}

/**
 * @method RepeatList getPhotoId
 * @method self withPhotoId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class GetDownloadUrls extends RpcRequest
{
}

/**
 * @method RepeatList getPhotoId
 * @method self withPhotoId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class GetPhotos extends RpcRequest
{
}

/**
 * @method Long getFaceId
 * @method self withFaceId
 * @method Long getPhotoId
 * @method self withPhotoId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class SetFaceCover extends RpcRequest
{
}

/**
 * @method Long getTotalQuota
 * @method self withTotalQuota
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class SetQuota extends RpcRequest
{
}

/**
 * @method Long getFaceId
 * @method self withFaceId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class SetMe extends RpcRequest
{
}

/**
 * @method Long getAlbumId
 * @method self withAlbumId
 * @method Long getPhotoId
 * @method self withPhotoId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class SetAlbumCover extends RpcRequest
{
}

/**
 * @method Integer getPage
 * @method self withPage
 * @method Integer getSize
 * @method self withSize
 * @method string getKeyword
 * @method self withKeyword
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class SearchPhotos extends RpcRequest
{
}

/**
 * @method Long getFaceId
 * @method self withFaceId
 * @method string getFaceName
 * @method self withFaceName
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class RenameFace extends RpcRequest
{
}

/**
 * @method Long getAlbumId
 * @method self withAlbumId
 * @method string getAlbumName
 * @method self withAlbumName
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class RenameAlbum extends RpcRequest
{
}

/**
 * @method Long getFaceId
 * @method self withFaceId
 * @method RepeatList getPhotoId
 * @method self withPhotoId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class RemoveFacePhotos extends RpcRequest
{
}

/**
 * @method Long getAlbumId
 * @method self withAlbumId
 * @method RepeatList getPhotoId
 * @method self withPhotoId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class RemoveAlbumPhotos extends RpcRequest
{
}

/**
 * @method RepeatList getPhotoId
 * @method self withPhotoId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class ReactivatePhotos extends RpcRequest
{
}

/**
 * @method Long getSourceFaceId
 * @method self withSourceFaceId
 * @method RepeatList getPhotoId
 * @method self withPhotoId
 * @method Long getTargetFaceId
 * @method self withTargetFaceId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class MoveFacePhotos extends RpcRequest
{
}

/**
 * @method Long getSourceAlbumId
 * @method self withSourceAlbumId
 * @method RepeatList getPhotoId
 * @method self withPhotoId
 * @method Long getTargetAlbumId
 * @method self withTargetAlbumId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class MoveAlbumPhotos extends RpcRequest
{
}

/**
 * @method RepeatList getFaceId
 * @method self withFaceId
 * @method Long getTargetFaceId
 * @method self withTargetFaceId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class MergeFaces extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class ListTags extends RpcRequest
{
}

/**
 * @method Long getTagId
 * @method self withTagId
 * @method string getDirection
 * @method self withDirection
 * @method Integer getSize
 * @method self withSize
 * @method string getCursor
 * @method self withCursor
 * @method string getState
 * @method self withState
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class ListTagPhotos extends RpcRequest
{
}

final class ListPreChecks extends RpcRequest
{
}

/**
 * @method Long getPhotoId
 * @method self withPhotoId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 * @method string getLang
 * @method self withLang
 */
final class ListPhotoTags extends RpcRequest
{
}

final class ListPhotoStores extends RpcRequest
{
}

/**
 * @method string getDirection
 * @method self withDirection
 * @method Integer getSize
 * @method self withSize
 * @method string getCursor
 * @method self withCursor
 * @method string getState
 * @method self withState
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class ListPhotos extends RpcRequest
{
}

/**
 * @method string getDirection
 * @method self withDirection
 * @method Integer getSize
 * @method self withSize
 * @method string getCursor
 * @method self withCursor
 * @method string getState
 * @method self withState
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class ListMoments extends RpcRequest
{
}

/**
 * @method Long getMomentId
 * @method self withMomentId
 * @method string getDirection
 * @method self withDirection
 * @method Integer getSize
 * @method self withSize
 * @method string getCursor
 * @method self withCursor
 * @method string getState
 * @method self withState
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class ListMomentPhotos extends RpcRequest
{
}

/**
 * @method string getDirection
 * @method self withDirection
 * @method Integer getSize
 * @method self withSize
 * @method string getCursor
 * @method self withCursor
 * @method string getState
 * @method self withState
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 * @method string getHasFaceName
 * @method self withHasFaceName
 */
final class ListFaces extends RpcRequest
{
}

/**
 * @method Long getFaceId
 * @method self withFaceId
 * @method string getDirection
 * @method self withDirection
 * @method Integer getSize
 * @method self withSize
 * @method string getCursor
 * @method self withCursor
 * @method string getState
 * @method self withState
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class ListFacePhotos extends RpcRequest
{
}

final class ListBuckets extends RpcRequest
{
}

/**
 * @method string getDirection
 * @method self withDirection
 * @method Integer getSize
 * @method self withSize
 * @method string getCursor
 * @method self withCursor
 * @method string getState
 * @method self withState
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class ListAlbums extends RpcRequest
{
}

/**
 * @method Long getAlbumId
 * @method self withAlbumId
 * @method string getDirection
 * @method self withDirection
 * @method Integer getSize
 * @method self withSize
 * @method string getCursor
 * @method self withCursor
 * @method string getState
 * @method self withState
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class ListAlbumPhotos extends RpcRequest
{
}

/**
 * @method RepeatList getPhotoId
 * @method self withPhotoId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 * @method Long getInactiveTime
 * @method self withInactiveTime
 */
final class InactivatePhotos extends RpcRequest
{
}

/**
 * @method Long getPhotoId
 * @method self withPhotoId
 * @method string getZoomType
 * @method self withZoomType
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class GetVideoCover extends RpcRequest
{
}

/**
 * @method Long getPhotoId
 * @method self withPhotoId
 * @method string getZoomType
 * @method self withZoomType
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class GetThumbnail extends RpcRequest
{
}

/**
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class GetQuota extends RpcRequest
{
}

/**
 * @method string getStoreName
 * @method self withStoreName
 */
final class GetPhotoStore extends RpcRequest
{
}

/**
 * @method Long getPhotoId
 * @method self withPhotoId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class GetDownloadUrl extends RpcRequest
{
}

/**
 * @method string getStoreName
 * @method self withStoreName
 */
final class DeletePhotoStore extends RpcRequest
{
}

/**
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 * @method RepeatList getPhotoId
 * @method self withPhotoId
 */
final class DeletePhotos extends RpcRequest
{
}

/**
 * @method RepeatList getFaceId
 * @method self withFaceId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class DeleteFaces extends RpcRequest
{
}

/**
 * @method RepeatList getAlbumId
 * @method self withAlbumId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class DeleteAlbums extends RpcRequest
{
}

/**
 * @method Long getSize
 * @method self withSize
 * @method string getExt
 * @method self withExt
 * @method string getForce
 * @method self withForce
 * @method string getMd5
 * @method self withMd5
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class CreateTransaction extends RpcRequest
{
}

/**
 * @method string getStoreName
 * @method self withStoreName
 * @method Long getDefaultQuota
 * @method self withDefaultQuota
 * @method string getBucketName
 * @method self withBucketName
 * @method string getRemark
 * @method self withRemark
 */
final class CreatePhotoStore extends RpcRequest
{
}

/**
 * @method string getFileId
 * @method self withFileId
 * @method string getSessionId
 * @method self withSessionId
 * @method string getUploadType
 * @method self withUploadType
 * @method string getPhotoTitle
 * @method self withPhotoTitle
 * @method string getStoreName
 * @method self withStoreName
 * @method string getRemark
 * @method self withRemark
 * @method string getLibraryId
 * @method self withLibraryId
 * @method string getStaging
 * @method self withStaging
 * @method Long getShareExpireTime
 * @method self withShareExpireTime
 * @method Long getTakenAt
 * @method self withTakenAt
 */
final class CreatePhoto extends RpcRequest
{
}

/**
 * @method string getAlbumName
 * @method self withAlbumName
 * @method string getStoreName
 * @method self withStoreName
 * @method string getRemark
 * @method self withRemark
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class CreateAlbum extends RpcRequest
{
}

/**
 * @method Integer getPage
 * @method self withPage
 * @method Integer getSize
 * @method self withSize
 * @method Long getLastUpdateAt
 * @method self withLastUpdateAt
 * @method string getStoreName
 * @method self withStoreName
 * @method string getState
 * @method self withState
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class Check extends RpcRequest
{
}

/**
 * @method Long getAlbumId
 * @method self withAlbumId
 * @method RepeatList getPhotoId
 * @method self withPhotoId
 * @method string getStoreName
 * @method self withStoreName
 * @method string getLibraryId
 * @method self withLibraryId
 */
final class AddAlbumPhotos extends RpcRequest
{
}
