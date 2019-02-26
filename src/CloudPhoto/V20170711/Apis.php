<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method FetchPhotos fetchPhotos($options = [])
 * @method FetchMomentPhotos fetchMomentPhotos($options = [])
 * @method FetchLibraries fetchLibraries($options = [])
 * @method FetchAlbumTagPhotos fetchAlbumTagPhotos($options = [])
 * @method GetAlbumsByNames getAlbumsByNames($options = [])
 * @method PhysicalDeleteResource physicalDeleteResource($options = [])
 * @method LogicalDeleteResource logicalDeleteResource($options = [])
 * @method GetEvent getEvent($options = [])
 * @method GetOSSPostObjectPolicy getOSSPostObjectPolicy($options = [])
 * @method EditEvent editEvent($options = [])
 * @method ListEvents listEvents($options = [])
 * @method DeleteEvent deleteEvent($options = [])
 * @method CheckResource checkResource($options = [])
 * @method CreateEvent createEvent($options = [])
 * @method RegisterPhoto registerPhoto($options = [])
 * @method GetSimilarPhotos getSimilarPhotos($options = [])
 * @method IndexLibrary indexLibrary($options = [])
 * @method TagPhoto tagPhoto($options = [])
 * @method RegisterTag registerTag($options = [])
 * @method ListRegisteredTags listRegisteredTags($options = [])
 * @method GetLibrary getLibrary($options = [])
 * @method EditPhotoStore editPhotoStore($options = [])
 * @method ToggleFeatures toggleFeatures($options = [])
 * @method ListTimeLines listTimeLines($options = [])
 * @method ListPhotoFaces listPhotoFaces($options = [])
 * @method ListTimeLinePhotos listTimeLinePhotos($options = [])
 * @method LikePhoto likePhoto($options = [])
 * @method GetPublicAccessUrls getPublicAccessUrls($options = [])
 * @method GetPrivateAccessUrls getPrivateAccessUrls($options = [])
 * @method GetPhotosByMd5s getPhotosByMd5s($options = [])
 * @method GetFramedPhotoUrls getFramedPhotoUrls($options = [])
 * @method EditPhotos editPhotos($options = [])
 * @method ActivatePhotos activatePhotos($options = [])
 * @method GetThumbnails getThumbnails($options = [])
 * @method GetDownloadUrls getDownloadUrls($options = [])
 * @method GetPhotos getPhotos($options = [])
 * @method SetFaceCover setFaceCover($options = [])
 * @method SetQuota setQuota($options = [])
 * @method SetMe setMe($options = [])
 * @method SetAlbumCover setAlbumCover($options = [])
 * @method SearchPhotos searchPhotos($options = [])
 * @method RenameFace renameFace($options = [])
 * @method RenameAlbum renameAlbum($options = [])
 * @method RemoveFacePhotos removeFacePhotos($options = [])
 * @method RemoveAlbumPhotos removeAlbumPhotos($options = [])
 * @method ReactivatePhotos reactivatePhotos($options = [])
 * @method MoveFacePhotos moveFacePhotos($options = [])
 * @method MoveAlbumPhotos moveAlbumPhotos($options = [])
 * @method MergeFaces mergeFaces($options = [])
 * @method ListTags listTags($options = [])
 * @method ListTagPhotos listTagPhotos($options = [])
 * @method ListPreChecks listPreChecks($options = [])
 * @method ListPhotoTags listPhotoTags($options = [])
 * @method ListPhotoStores listPhotoStores($options = [])
 * @method ListPhotos listPhotos($options = [])
 * @method ListMoments listMoments($options = [])
 * @method ListMomentPhotos listMomentPhotos($options = [])
 * @method ListFaces listFaces($options = [])
 * @method ListFacePhotos listFacePhotos($options = [])
 * @method ListBuckets listBuckets($options = [])
 * @method ListAlbums listAlbums($options = [])
 * @method ListAlbumPhotos listAlbumPhotos($options = [])
 * @method InactivatePhotos inactivatePhotos($options = [])
 * @method GetVideoCover getVideoCover($options = [])
 * @method GetThumbnail getThumbnail($options = [])
 * @method GetQuota getQuota($options = [])
 * @method GetPhotoStore getPhotoStore($options = [])
 * @method GetDownloadUrl getDownloadUrl($options = [])
 * @method DeletePhotoStore deletePhotoStore($options = [])
 * @method DeletePhotos deletePhotos($options = [])
 * @method DeleteFaces deleteFaces($options = [])
 * @method DeleteAlbums deleteAlbums($options = [])
 * @method CreateTransaction createTransaction($options = [])
 * @method CreatePhotoStore createPhotoStore($options = [])
 * @method CreatePhoto createPhoto($options = [])
 * @method CreateAlbum createAlbum($options = [])
 * @method Check check($options = [])
 * @method AddAlbumPhotos addAlbumPhotos($options = [])
 */
class V20170711
{
    use ApiResolverTrait;
}

/**
 * @method string getState
 * @method self withState(string $state)
 * @method string getOrderBy
 * @method self withOrderBy(string $orderBy)
 * @method string getOrder
 * @method self withOrder(string $order)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class FetchPhotos extends Rpc
{
    use R;
}

/**
 * @method int getMomentId
 * @method self withMomentId(int $momentId)
 * @method string getOrderBy
 * @method self withOrderBy(string $orderBy)
 * @method string getOrder
 * @method self withOrder(string $order)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class FetchMomentPhotos extends Rpc
{
    use R;
}

/**
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 */
class FetchLibraries extends Rpc
{
    use R;
}

/**
 * @method int getAlbumId
 * @method self withAlbumId(int $albumId)
 * @method int getTagId
 * @method self withTagId(int $tagId)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class FetchAlbumTagPhotos extends Rpc
{
    use R;
}

/**
 * @method array getName
 * @method self withName(array $name)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class GetAlbumsByNames extends Rpc
{
    use R;
}

/**
 * @method string getpk
 * @method self withpk(string $pk)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int gethid
 * @method self withhid(int $hid)
 * @method string getcountry
 * @method self withcountry(string $country)
 * @method string gettaskIdentifier
 * @method self withtaskIdentifier(string $taskIdentifier)
 * @method string gettaskExtraData
 * @method self withtaskExtraData(string $taskExtraData)
 * @method string getgmtWakeup
 * @method self withgmtWakeup(string $gmtWakeup)
 */
class PhysicalDeleteResource extends Rpc
{
    use R;
}

/**
 * @method string getpk
 * @method self withpk(string $pk)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int gethid
 * @method self withhid(int $hid)
 * @method string getcountry
 * @method self withcountry(string $country)
 * @method string gettaskIdentifier
 * @method self withtaskIdentifier(string $taskIdentifier)
 * @method string gettaskExtraData
 * @method self withtaskExtraData(string $taskExtraData)
 * @method string getgmtWakeup
 * @method self withgmtWakeup(string $gmtWakeup)
 */
class LogicalDeleteResource extends Rpc
{
    use R;
}

/**
 * @method int getEventId
 * @method self withEventId(int $eventId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class GetEvent extends Rpc
{
    use R;
}

/**
 * @method string getEndPoint
 * @method self withEndPoint(string $endPoint)
 * @method string getBucket
 * @method self withBucket(string $bucket)
 * @method string getAccessId
 * @method self withAccessId(string $accessId)
 * @method string getAccessKey
 * @method self withAccessKey(string $accessKey)
 * @method string getStsToken
 * @method self withStsToken(string $stsToken)
 * @method string getObjectKey
 * @method self withObjectKey(string $objectKey)
 */
class GetOSSPostObjectPolicy extends Rpc
{
    use R;
}

/**
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 * @method string getEventId
 * @method self withEventId(string $eventId)
 * @method string getIdentity
 * @method self withIdentity(string $identity)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method int getStartAt
 * @method self withStartAt(int $startAt)
 * @method int getEndAt
 * @method self withEndAt(int $endAt)
 * @method string getWeixinTitle
 * @method self withWeixinTitle(string $weixinTitle)
 * @method string getSplashPhotoId
 * @method self withSplashPhotoId(string $splashPhotoId)
 * @method string getBannerPhotoId
 * @method self withBannerPhotoId(string $bannerPhotoId)
 * @method string getWatermarkPhotoId
 * @method self withWatermarkPhotoId(string $watermarkPhotoId)
 * @method string getRemark
 * @method self withRemark(string $remark)
 */
class EditEvent extends Rpc
{
    use R;
}

/**
 * @method string getDirection
 * @method self withDirection(string $direction)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method string getCursor
 * @method self withCursor(string $cursor)
 * @method string getState
 * @method self withState(string $state)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class ListEvents extends Rpc
{
    use R;
}

/**
 * @method int getEventId
 * @method self withEventId(int $eventId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class DeleteEvent extends Rpc
{
    use R;
}

/**
 * @method string getpk
 * @method self withpk(string $pk)
 * @method string getbid
 * @method self withbid(string $bid)
 * @method int gethid
 * @method self withhid(int $hid)
 * @method string getcountry
 * @method self withcountry(string $country)
 * @method string gettaskIdentifier
 * @method self withtaskIdentifier(string $taskIdentifier)
 * @method string gettaskExtraData
 * @method self withtaskExtraData(string $taskExtraData)
 * @method string getgmtWakeup
 * @method self withgmtWakeup(string $gmtWakeup)
 */
class CheckResource extends Rpc
{
    use R;
}

/**
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method int getStartAt
 * @method self withStartAt(int $startAt)
 * @method int getEndAt
 * @method self withEndAt(int $endAt)
 * @method string getIdentity
 * @method self withIdentity(string $identity)
 * @method string getWeixinTitle
 * @method self withWeixinTitle(string $weixinTitle)
 * @method string getSplashPhotoId
 * @method self withSplashPhotoId(string $splashPhotoId)
 * @method string getBannerPhotoId
 * @method self withBannerPhotoId(string $bannerPhotoId)
 * @method string getWatermarkPhotoId
 * @method self withWatermarkPhotoId(string $watermarkPhotoId)
 * @method string getRemark
 * @method self withRemark(string $remark)
 */
class CreateEvent extends Rpc
{
    use R;
}

/**
 * @method int getTakenAt
 * @method self withTakenAt(int $takenAt)
 * @method string getLocation
 * @method self withLocation(string $location)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 * @method float getLatitude
 * @method self withLatitude(float $latitude)
 * @method float getLongitude
 * @method self withLongitude(float $longitude)
 * @method Integer getWidth
 * @method self withWidth(Integer $width)
 * @method Integer getHeight
 * @method self withHeight(Integer $height)
 * @method string getIsVideo
 * @method self withIsVideo(string $isVideo)
 * @method string getMd5
 * @method self withMd5(string $md5)
 * @method int getSize
 * @method self withSize(int $size)
 * @method string getPhotoTitle
 * @method self withPhotoTitle(string $photoTitle)
 * @method string getRemark
 * @method self withRemark(string $remark)
 */
class RegisterPhoto extends Rpc
{
    use R;
}

/**
 * @method int getPhotoId
 * @method self withPhotoId(int $photoId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class GetSimilarPhotos extends Rpc
{
    use R;
}

/**
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class IndexLibrary extends Rpc
{
    use R;
}

/**
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 * @method array getTagKey
 * @method self withTagKey(array $tagKey)
 * @method array getConfidence
 * @method self withConfidence(array $confidence)
 * @method int getPhotoId
 * @method self withPhotoId(int $photoId)
 */
class TagPhoto extends Rpc
{
    use R;
}

/**
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getTagKey
 * @method self withTagKey(string $tagKey)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getText
 * @method self withText(string $text)
 */
class RegisterTag extends Rpc
{
    use R;
}

/**
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method array getLang
 * @method self withLang(array $lang)
 */
class ListRegisteredTags extends Rpc
{
    use R;
}

/**
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class GetLibrary extends Rpc
{
    use R;
}

/**
 * @method string getAutoCleanEnabled
 * @method self withAutoCleanEnabled(string $autoCleanEnabled)
 * @method Integer getAutoCleanDays
 * @method self withAutoCleanDays(Integer $autoCleanDays)
 * @method int getDefaultQuota
 * @method self withDefaultQuota(int $defaultQuota)
 * @method int getDefaultTrashQuota
 * @method self withDefaultTrashQuota(int $defaultTrashQuota)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class EditPhotoStore extends Rpc
{
    use R;
}

/**
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method array getEnabledFeatures
 * @method self withEnabledFeatures(array $enabledFeatures)
 * @method array getDisabledFeatures
 * @method self withDisabledFeatures(array $disabledFeatures)
 */
class ToggleFeatures extends Rpc
{
    use R;
}

/**
 * @method string getDirection
 * @method self withDirection(string $direction)
 * @method Integer getPhotoSize
 * @method self withPhotoSize(Integer $photoSize)
 * @method int getCursor
 * @method self withCursor(int $cursor)
 * @method Integer getTimeLineCount
 * @method self withTimeLineCount(Integer $timeLineCount)
 * @method string getTimeLineUnit
 * @method self withTimeLineUnit(string $timeLineUnit)
 * @method string getFilterBy
 * @method self withFilterBy(string $filterBy)
 * @method string getOrder
 * @method self withOrder(string $order)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class ListTimeLines extends Rpc
{
    use R;
}

/**
 * @method int getPhotoId
 * @method self withPhotoId(int $photoId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class ListPhotoFaces extends Rpc
{
    use R;
}

/**
 * @method string getDirection
 * @method self withDirection(string $direction)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method int getStartTime
 * @method self withStartTime(int $startTime)
 * @method int getEndTime
 * @method self withEndTime(int $endTime)
 * @method string getFilterBy
 * @method self withFilterBy(string $filterBy)
 * @method string getOrder
 * @method self withOrder(string $order)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class ListTimeLinePhotos extends Rpc
{
    use R;
}

/**
 * @method int getPhotoId
 * @method self withPhotoId(int $photoId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class LikePhoto extends Rpc
{
    use R;
}

/**
 * @method array getPhotoId
 * @method self withPhotoId(array $photoId)
 * @method string getZoomType
 * @method self withZoomType(string $zoomType)
 * @method string getDomainType
 * @method self withDomainType(string $domainType)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class GetPublicAccessUrls extends Rpc
{
    use R;
}

/**
 * @method array getPhotoId
 * @method self withPhotoId(array $photoId)
 * @method string getZoomType
 * @method self withZoomType(string $zoomType)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class GetPrivateAccessUrls extends Rpc
{
    use R;
}

/**
 * @method array getMd5
 * @method self withMd5(array $md5)
 * @method string getState
 * @method self withState(string $state)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class GetPhotosByMd5s extends Rpc
{
    use R;
}

/**
 * @method array getPhotoId
 * @method self withPhotoId(array $photoId)
 * @method string getFrameId
 * @method self withFrameId(string $frameId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class GetFramedPhotoUrls extends Rpc
{
    use R;
}

/**
 * @method array getPhotoId
 * @method self withPhotoId(array $photoId)
 * @method int getShareExpireTime
 * @method self withShareExpireTime(int $shareExpireTime)
 * @method int getTakenAt
 * @method self withTakenAt(int $takenAt)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class EditPhotos extends Rpc
{
    use R;
}

/**
 * @method array getPhotoId
 * @method self withPhotoId(array $photoId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class ActivatePhotos extends Rpc
{
    use R;
}

/**
 * @method array getPhotoId
 * @method self withPhotoId(array $photoId)
 * @method string getZoomType
 * @method self withZoomType(string $zoomType)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class GetThumbnails extends Rpc
{
    use R;
}

/**
 * @method array getPhotoId
 * @method self withPhotoId(array $photoId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class GetDownloadUrls extends Rpc
{
    use R;
}

/**
 * @method array getPhotoId
 * @method self withPhotoId(array $photoId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class GetPhotos extends Rpc
{
    use R;
}

/**
 * @method int getFaceId
 * @method self withFaceId(int $faceId)
 * @method int getPhotoId
 * @method self withPhotoId(int $photoId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class SetFaceCover extends Rpc
{
    use R;
}

/**
 * @method int getTotalQuota
 * @method self withTotalQuota(int $totalQuota)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class SetQuota extends Rpc
{
    use R;
}

/**
 * @method int getFaceId
 * @method self withFaceId(int $faceId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class SetMe extends Rpc
{
    use R;
}

/**
 * @method int getAlbumId
 * @method self withAlbumId(int $albumId)
 * @method int getPhotoId
 * @method self withPhotoId(int $photoId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class SetAlbumCover extends Rpc
{
    use R;
}

/**
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class SearchPhotos extends Rpc
{
    use R;
}

/**
 * @method int getFaceId
 * @method self withFaceId(int $faceId)
 * @method string getFaceName
 * @method self withFaceName(string $faceName)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class RenameFace extends Rpc
{
    use R;
}

/**
 * @method int getAlbumId
 * @method self withAlbumId(int $albumId)
 * @method string getAlbumName
 * @method self withAlbumName(string $albumName)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class RenameAlbum extends Rpc
{
    use R;
}

/**
 * @method int getFaceId
 * @method self withFaceId(int $faceId)
 * @method array getPhotoId
 * @method self withPhotoId(array $photoId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class RemoveFacePhotos extends Rpc
{
    use R;
}

/**
 * @method int getAlbumId
 * @method self withAlbumId(int $albumId)
 * @method array getPhotoId
 * @method self withPhotoId(array $photoId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class RemoveAlbumPhotos extends Rpc
{
    use R;
}

/**
 * @method array getPhotoId
 * @method self withPhotoId(array $photoId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class ReactivatePhotos extends Rpc
{
    use R;
}

/**
 * @method int getSourceFaceId
 * @method self withSourceFaceId(int $sourceFaceId)
 * @method array getPhotoId
 * @method self withPhotoId(array $photoId)
 * @method int getTargetFaceId
 * @method self withTargetFaceId(int $targetFaceId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class MoveFacePhotos extends Rpc
{
    use R;
}

/**
 * @method int getSourceAlbumId
 * @method self withSourceAlbumId(int $sourceAlbumId)
 * @method array getPhotoId
 * @method self withPhotoId(array $photoId)
 * @method int getTargetAlbumId
 * @method self withTargetAlbumId(int $targetAlbumId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class MoveAlbumPhotos extends Rpc
{
    use R;
}

/**
 * @method array getFaceId
 * @method self withFaceId(array $faceId)
 * @method int getTargetFaceId
 * @method self withTargetFaceId(int $targetFaceId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class MergeFaces extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class ListTags extends Rpc
{
    use R;
}

/**
 * @method int getTagId
 * @method self withTagId(int $tagId)
 * @method string getDirection
 * @method self withDirection(string $direction)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method string getCursor
 * @method self withCursor(string $cursor)
 * @method string getState
 * @method self withState(string $state)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class ListTagPhotos extends Rpc
{
    use R;
}

class ListPreChecks extends Rpc
{
    use R;
}

/**
 * @method int getPhotoId
 * @method self withPhotoId(int $photoId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class ListPhotoTags extends Rpc
{
    use R;
}

class ListPhotoStores extends Rpc
{
    use R;
}

/**
 * @method string getDirection
 * @method self withDirection(string $direction)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method string getCursor
 * @method self withCursor(string $cursor)
 * @method string getState
 * @method self withState(string $state)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class ListPhotos extends Rpc
{
    use R;
}

/**
 * @method string getDirection
 * @method self withDirection(string $direction)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method string getCursor
 * @method self withCursor(string $cursor)
 * @method string getState
 * @method self withState(string $state)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class ListMoments extends Rpc
{
    use R;
}

/**
 * @method int getMomentId
 * @method self withMomentId(int $momentId)
 * @method string getDirection
 * @method self withDirection(string $direction)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method string getCursor
 * @method self withCursor(string $cursor)
 * @method string getState
 * @method self withState(string $state)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class ListMomentPhotos extends Rpc
{
    use R;
}

/**
 * @method string getDirection
 * @method self withDirection(string $direction)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method string getCursor
 * @method self withCursor(string $cursor)
 * @method string getState
 * @method self withState(string $state)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 * @method string getHasFaceName
 * @method self withHasFaceName(string $hasFaceName)
 */
class ListFaces extends Rpc
{
    use R;
}

/**
 * @method int getFaceId
 * @method self withFaceId(int $faceId)
 * @method string getDirection
 * @method self withDirection(string $direction)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method string getCursor
 * @method self withCursor(string $cursor)
 * @method string getState
 * @method self withState(string $state)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class ListFacePhotos extends Rpc
{
    use R;
}

class ListBuckets extends Rpc
{
    use R;
}

/**
 * @method string getDirection
 * @method self withDirection(string $direction)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method string getCursor
 * @method self withCursor(string $cursor)
 * @method string getState
 * @method self withState(string $state)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class ListAlbums extends Rpc
{
    use R;
}

/**
 * @method int getAlbumId
 * @method self withAlbumId(int $albumId)
 * @method string getDirection
 * @method self withDirection(string $direction)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method string getCursor
 * @method self withCursor(string $cursor)
 * @method string getState
 * @method self withState(string $state)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class ListAlbumPhotos extends Rpc
{
    use R;
}

/**
 * @method array getPhotoId
 * @method self withPhotoId(array $photoId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 * @method int getInactiveTime
 * @method self withInactiveTime(int $inactiveTime)
 */
class InactivatePhotos extends Rpc
{
    use R;
}

/**
 * @method int getPhotoId
 * @method self withPhotoId(int $photoId)
 * @method string getZoomType
 * @method self withZoomType(string $zoomType)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class GetVideoCover extends Rpc
{
    use R;
}

/**
 * @method int getPhotoId
 * @method self withPhotoId(int $photoId)
 * @method string getZoomType
 * @method self withZoomType(string $zoomType)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class GetThumbnail extends Rpc
{
    use R;
}

/**
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class GetQuota extends Rpc
{
    use R;
}

/**
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class GetPhotoStore extends Rpc
{
    use R;
}

/**
 * @method int getPhotoId
 * @method self withPhotoId(int $photoId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class GetDownloadUrl extends Rpc
{
    use R;
}

/**
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class DeletePhotoStore extends Rpc
{
    use R;
}

/**
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 * @method array getPhotoId
 * @method self withPhotoId(array $photoId)
 */
class DeletePhotos extends Rpc
{
    use R;
}

/**
 * @method array getFaceId
 * @method self withFaceId(array $faceId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class DeleteFaces extends Rpc
{
    use R;
}

/**
 * @method array getAlbumId
 * @method self withAlbumId(array $albumId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class DeleteAlbums extends Rpc
{
    use R;
}

/**
 * @method int getSize
 * @method self withSize(int $size)
 * @method string getExt
 * @method self withExt(string $ext)
 * @method string getForce
 * @method self withForce(string $force)
 * @method string getMd5
 * @method self withMd5(string $md5)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class CreateTransaction extends Rpc
{
    use R;
}

/**
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method int getDefaultQuota
 * @method self withDefaultQuota(int $defaultQuota)
 * @method string getBucketName
 * @method self withBucketName(string $bucketName)
 * @method string getRemark
 * @method self withRemark(string $remark)
 */
class CreatePhotoStore extends Rpc
{
    use R;
}

/**
 * @method string getFileId
 * @method self withFileId(string $fileId)
 * @method string getSessionId
 * @method self withSessionId(string $sessionId)
 * @method string getUploadType
 * @method self withUploadType(string $uploadType)
 * @method string getPhotoTitle
 * @method self withPhotoTitle(string $photoTitle)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 * @method string getStaging
 * @method self withStaging(string $staging)
 * @method int getShareExpireTime
 * @method self withShareExpireTime(int $shareExpireTime)
 * @method int getTakenAt
 * @method self withTakenAt(int $takenAt)
 */
class CreatePhoto extends Rpc
{
    use R;
}

/**
 * @method string getAlbumName
 * @method self withAlbumName(string $albumName)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class CreateAlbum extends Rpc
{
    use R;
}

/**
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method int getLastUpdateAt
 * @method self withLastUpdateAt(int $lastUpdateAt)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getState
 * @method self withState(string $state)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class Check extends Rpc
{
    use R;
}

/**
 * @method int getAlbumId
 * @method self withAlbumId(int $albumId)
 * @method array getPhotoId
 * @method self withPhotoId(array $photoId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getLibraryId
 * @method self withLibraryId(string $libraryId)
 */
class AddAlbumPhotos extends Rpc
{
    use R;
}
