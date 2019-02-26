<?php

namespace AlibabaCloud\CloudPhoto\V20170511;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SearchPhotos searchPhotos($options = [])
 * @method ListPreChecks listPreChecks($options = [])
 * @method ListBuckets listBuckets($options = [])
 * @method GetPhotoStore getPhotoStore($options = [])
 * @method SetQuota setQuota($options = [])
 * @method SetMe setMe($options = [])
 * @method SetAlbumCover setAlbumCover($options = [])
 * @method RestorePhotos restorePhotos($options = [])
 * @method RenameFace renameFace($options = [])
 * @method RenameAlbum renameAlbum($options = [])
 * @method RemoveFacePhotos removeFacePhotos($options = [])
 * @method RemoveAlbumPhotos removeAlbumPhotos($options = [])
 * @method MoveFacePhotos moveFacePhotos($options = [])
 * @method MoveAlbumPhotos moveAlbumPhotos($options = [])
 * @method mergeFace mergeFace($options = [])
 * @method ListTags listTags($options = [])
 * @method ListTagPhotos listTagPhotos($options = [])
 * @method ListPhotoTags listPhotoTags($options = [])
 * @method ListPhotostores listPhotostores($options = [])
 * @method ListMoments listMoments($options = [])
 * @method ListMomentPhotos listMomentPhotos($options = [])
 * @method ListFaces listFaces($options = [])
 * @method ListFacePhotos listFacePhotos($options = [])
 * @method ListAlbums listAlbums($options = [])
 * @method ListAlbumPhotos listAlbumPhotos($options = [])
 * @method GetVideoCover getVideoCover($options = [])
 * @method GetQuota getQuota($options = [])
 * @method DiePhotos diePhotos($options = [])
 * @method DeletePhotostore deletePhotostore($options = [])
 * @method DeletePhotos deletePhotos($options = [])
 * @method DeleteFaces deleteFaces($options = [])
 * @method DeleteAlbums deleteAlbums($options = [])
 * @method CreatePhotostore createPhotostore($options = [])
 * @method CreateAlbum createAlbum($options = [])
 * @method AddAlbumPhotos addAlbumPhotos($options = [])
 * @method GetDownload getDownload($options = [])
 * @method ListPhotos listPhotos($options = [])
 * @method GetThumbnail getThumbnail($options = [])
 * @method CreateTransaction createTransaction($options = [])
 * @method CreatePhoto createPhoto($options = [])
 * @method Check check($options = [])
 */
class V20170511
{
    use ApiResolverTrait;
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
 */
class SearchPhotos extends Rpc
{
    use R;
}

class ListPreChecks extends Rpc
{
    use R;
}

class ListBuckets extends Rpc
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
 * @method int getTotal
 * @method self withTotal(int $total)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class SetQuota extends Rpc
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class SetMe extends Rpc
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method int getPhotoId
 * @method self withPhotoId(int $photoId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class SetAlbumCover extends Rpc
{
    use R;
}

/**
 * @method array getIds
 * @method self withIds(array $ids)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class RestorePhotos extends Rpc
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method string getName
 * @method self withName(string $name)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class RenameFace extends Rpc
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method string getName
 * @method self withName(string $name)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class RenameAlbum extends Rpc
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method array getPhotoIds
 * @method self withPhotoIds(array $photoIds)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class RemoveFacePhotos extends Rpc
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method array getPhotoIds
 * @method self withPhotoIds(array $photoIds)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class RemoveAlbumPhotos extends Rpc
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method array getPhotoIds
 * @method self withPhotoIds(array $photoIds)
 * @method int getTargetId
 * @method self withTargetId(int $targetId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class MoveFacePhotos extends Rpc
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method array getPhotoIds
 * @method self withPhotoIds(array $photoIds)
 * @method int getTargetId
 * @method self withTargetId(int $targetId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class MoveAlbumPhotos extends Rpc
{
    use R;
}

/**
 * @method array getFaceIds
 * @method self withFaceIds(array $faceIds)
 * @method int getTargetId
 * @method self withTargetId(int $targetId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class mergeFace extends Rpc
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
 */
class ListTags extends Rpc
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method int getLastUpdateAt
 * @method self withLastUpdateAt(int $lastUpdateAt)
 * @method string getState
 * @method self withState(string $state)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class ListTagPhotos extends Rpc
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
 * @method int getId
 * @method self withId(int $id)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class ListPhotoTags extends Rpc
{
    use R;
}

class ListPhotostores extends Rpc
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
 * @method string getState
 * @method self withState(string $state)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class ListMoments extends Rpc
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method int getLastUpdateAt
 * @method self withLastUpdateAt(int $lastUpdateAt)
 * @method string getState
 * @method self withState(string $state)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class ListMomentPhotos extends Rpc
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
 * @method string getState
 * @method self withState(string $state)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class ListFaces extends Rpc
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method int getLastUpdateAt
 * @method self withLastUpdateAt(int $lastUpdateAt)
 * @method string getState
 * @method self withState(string $state)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class ListFacePhotos extends Rpc
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
 * @method string getState
 * @method self withState(string $state)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class ListAlbums extends Rpc
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method Integer getPage
 * @method self withPage(Integer $page)
 * @method Integer getSize
 * @method self withSize(Integer $size)
 * @method int getLastUpdateAt
 * @method self withLastUpdateAt(int $lastUpdateAt)
 * @method string getState
 * @method self withState(string $state)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class ListAlbumPhotos extends Rpc
{
    use R;
}

/**
 * @method string getFileId
 * @method self withFileId(string $fileId)
 * @method string getZoomType
 * @method self withZoomType(string $zoomType)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class GetVideoCover extends Rpc
{
    use R;
}

/**
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class GetQuota extends Rpc
{
    use R;
}

/**
 * @method array getIds
 * @method self withIds(array $ids)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class DiePhotos extends Rpc
{
    use R;
}

/**
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class DeletePhotostore extends Rpc
{
    use R;
}

/**
 * @method array getIds
 * @method self withIds(array $ids)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class DeletePhotos extends Rpc
{
    use R;
}

/**
 * @method array getIds
 * @method self withIds(array $ids)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class DeleteFaces extends Rpc
{
    use R;
}

/**
 * @method array getIds
 * @method self withIds(array $ids)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class DeleteAlbums extends Rpc
{
    use R;
}

/**
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 * @method string getBucketName
 * @method self withBucketName(string $bucketName)
 * @method string getRemark
 * @method self withRemark(string $remark)
 */
class CreatePhotostore extends Rpc
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class CreateAlbum extends Rpc
{
    use R;
}

/**
 * @method int getId
 * @method self withId(int $id)
 * @method array getPhotoIds
 * @method self withPhotoIds(array $photoIds)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class AddAlbumPhotos extends Rpc
{
    use R;
}

/**
 * @method string getFileId
 * @method self withFileId(string $fileId)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class GetDownload extends Rpc
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
 * @method string getState
 * @method self withState(string $state)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class ListPhotos extends Rpc
{
    use R;
}

/**
 * @method string getFileId
 * @method self withFileId(string $fileId)
 * @method string getZoomType
 * @method self withZoomType(string $zoomType)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class GetThumbnail extends Rpc
{
    use R;
}

/**
 * @method int getSize
 * @method self withSize(int $size)
 * @method string getExt
 * @method self withExt(string $ext)
 * @method bool getForce
 * @method self withForce(bool $force)
 * @method string getMd5
 * @method self withMd5(string $md5)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class CreateTransaction extends Rpc
{
    use R;
}

/**
 * @method string getFileId
 * @method self withFileId(string $fileId)
 * @method string getSid
 * @method self withSid(string $sid)
 * @method string getUploadType
 * @method self withUploadType(string $uploadType)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getStoreName
 * @method self withStoreName(string $storeName)
 */
class CreatePhoto extends Rpc
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
 * @method string getState
 * @method self withState(string $state)
 */
class Check extends Rpc
{
    use R;
}
