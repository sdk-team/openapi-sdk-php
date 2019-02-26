<?php

namespace AlibabaCloud\CloudPhoto\V20170511;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Integer getPage
 * @method self withPage
 * @method Integer getSize
 * @method self withSize
 * @method string getKeyword
 * @method self withKeyword
 * @method string getStoreName
 * @method self withStoreName
 */
final class SearchPhotos extends RpcRequest
{
}

final class ListPreChecks extends RpcRequest
{
}

final class ListBuckets extends RpcRequest
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
 * @method Long getTotal
 * @method self withTotal
 * @method string getStoreName
 * @method self withStoreName
 */
final class SetQuota extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method string getStoreName
 * @method self withStoreName
 */
final class SetMe extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method Long getPhotoId
 * @method self withPhotoId
 * @method string getStoreName
 * @method self withStoreName
 */
final class SetAlbumCover extends RpcRequest
{
}

/**
 * @method RepeatList getIds
 * @method self withIds
 * @method string getStoreName
 * @method self withStoreName
 */
final class RestorePhotos extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method string getName
 * @method self withName
 * @method string getStoreName
 * @method self withStoreName
 */
final class RenameFace extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method string getName
 * @method self withName
 * @method string getStoreName
 * @method self withStoreName
 */
final class RenameAlbum extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method RepeatList getPhotoIds
 * @method self withPhotoIds
 * @method string getStoreName
 * @method self withStoreName
 */
final class RemoveFacePhotos extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method RepeatList getPhotoIds
 * @method self withPhotoIds
 * @method string getStoreName
 * @method self withStoreName
 */
final class RemoveAlbumPhotos extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method RepeatList getPhotoIds
 * @method self withPhotoIds
 * @method Long getTargetId
 * @method self withTargetId
 * @method string getStoreName
 * @method self withStoreName
 */
final class MoveFacePhotos extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method RepeatList getPhotoIds
 * @method self withPhotoIds
 * @method Long getTargetId
 * @method self withTargetId
 * @method string getStoreName
 * @method self withStoreName
 */
final class MoveAlbumPhotos extends RpcRequest
{
}

/**
 * @method RepeatList getFaceIds
 * @method self withFaceIds
 * @method Long getTargetId
 * @method self withTargetId
 * @method string getStoreName
 * @method self withStoreName
 */
final class mergeFace extends RpcRequest
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
 */
final class ListTags extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method Integer getPage
 * @method self withPage
 * @method Integer getSize
 * @method self withSize
 * @method Long getLastUpdateAt
 * @method self withLastUpdateAt
 * @method string getState
 * @method self withState
 * @method string getStoreName
 * @method self withStoreName
 */
final class ListTagPhotos extends RpcRequest
{
}

/**
 * @method Integer getPage
 * @method self withPage
 * @method Integer getSize
 * @method self withSize
 * @method Long getLastUpdateAt
 * @method self withLastUpdateAt
 * @method Long getId
 * @method self withId
 * @method string getStoreName
 * @method self withStoreName
 */
final class ListPhotoTags extends RpcRequest
{
}

final class ListPhotostores extends RpcRequest
{
}

/**
 * @method Integer getPage
 * @method self withPage
 * @method Integer getSize
 * @method self withSize
 * @method Long getLastUpdateAt
 * @method self withLastUpdateAt
 * @method string getState
 * @method self withState
 * @method string getStoreName
 * @method self withStoreName
 */
final class ListMoments extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method Integer getPage
 * @method self withPage
 * @method Integer getSize
 * @method self withSize
 * @method Long getLastUpdateAt
 * @method self withLastUpdateAt
 * @method string getState
 * @method self withState
 * @method string getStoreName
 * @method self withStoreName
 */
final class ListMomentPhotos extends RpcRequest
{
}

/**
 * @method Integer getPage
 * @method self withPage
 * @method Integer getSize
 * @method self withSize
 * @method Long getLastUpdateAt
 * @method self withLastUpdateAt
 * @method string getState
 * @method self withState
 * @method string getStoreName
 * @method self withStoreName
 */
final class ListFaces extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method Integer getPage
 * @method self withPage
 * @method Integer getSize
 * @method self withSize
 * @method Long getLastUpdateAt
 * @method self withLastUpdateAt
 * @method string getState
 * @method self withState
 * @method string getStoreName
 * @method self withStoreName
 */
final class ListFacePhotos extends RpcRequest
{
}

/**
 * @method Integer getPage
 * @method self withPage
 * @method Integer getSize
 * @method self withSize
 * @method Long getLastUpdateAt
 * @method self withLastUpdateAt
 * @method string getState
 * @method self withState
 * @method string getStoreName
 * @method self withStoreName
 */
final class ListAlbums extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method Integer getPage
 * @method self withPage
 * @method Integer getSize
 * @method self withSize
 * @method Long getLastUpdateAt
 * @method self withLastUpdateAt
 * @method string getState
 * @method self withState
 * @method string getStoreName
 * @method self withStoreName
 */
final class ListAlbumPhotos extends RpcRequest
{
}

/**
 * @method string getFileId
 * @method self withFileId
 * @method string getZoomType
 * @method self withZoomType
 * @method string getStoreName
 * @method self withStoreName
 */
final class GetVideoCover extends RpcRequest
{
}

/**
 * @method string getStoreName
 * @method self withStoreName
 */
final class GetQuota extends RpcRequest
{
}

/**
 * @method RepeatList getIds
 * @method self withIds
 * @method string getStoreName
 * @method self withStoreName
 */
final class DiePhotos extends RpcRequest
{
}

/**
 * @method string getStoreName
 * @method self withStoreName
 */
final class DeletePhotostore extends RpcRequest
{
}

/**
 * @method RepeatList getIds
 * @method self withIds
 * @method string getStoreName
 * @method self withStoreName
 */
final class DeletePhotos extends RpcRequest
{
}

/**
 * @method RepeatList getIds
 * @method self withIds
 * @method string getStoreName
 * @method self withStoreName
 */
final class DeleteFaces extends RpcRequest
{
}

/**
 * @method RepeatList getIds
 * @method self withIds
 * @method string getStoreName
 * @method self withStoreName
 */
final class DeleteAlbums extends RpcRequest
{
}

/**
 * @method string getStoreName
 * @method self withStoreName
 * @method string getBucketName
 * @method self withBucketName
 * @method string getRemark
 * @method self withRemark
 */
final class CreatePhotostore extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getStoreName
 * @method self withStoreName
 */
final class CreateAlbum extends RpcRequest
{
}

/**
 * @method Long getId
 * @method self withId
 * @method RepeatList getPhotoIds
 * @method self withPhotoIds
 * @method string getStoreName
 * @method self withStoreName
 */
final class AddAlbumPhotos extends RpcRequest
{
}

/**
 * @method string getFileId
 * @method self withFileId
 * @method string getStoreName
 * @method self withStoreName
 */
final class GetDownload extends RpcRequest
{
}

/**
 * @method Integer getPage
 * @method self withPage
 * @method Integer getSize
 * @method self withSize
 * @method Long getLastUpdateAt
 * @method self withLastUpdateAt
 * @method string getState
 * @method self withState
 * @method string getStoreName
 * @method self withStoreName
 */
final class ListPhotos extends RpcRequest
{
}

/**
 * @method string getFileId
 * @method self withFileId
 * @method string getZoomType
 * @method self withZoomType
 * @method string getStoreName
 * @method self withStoreName
 */
final class GetThumbnail extends RpcRequest
{
}

/**
 * @method Long getSize
 * @method self withSize
 * @method string getExt
 * @method self withExt
 * @method Boolean getForce
 * @method self withForce
 * @method string getMd5
 * @method self withMd5
 * @method string getStoreName
 * @method self withStoreName
 */
final class CreateTransaction extends RpcRequest
{
}

/**
 * @method string getFileId
 * @method self withFileId
 * @method string getSid
 * @method self withSid
 * @method string getUploadType
 * @method self withUploadType
 * @method string getTitle
 * @method self withTitle
 * @method string getStoreName
 * @method self withStoreName
 */
final class CreatePhoto extends RpcRequest
{
}

/**
 * @method Integer getPage
 * @method self withPage
 * @method Integer getSize
 * @method self withSize
 * @method Long getLastUpdateAt
 * @method self withLastUpdateAt
 * @method string getState
 * @method self withState
 */
final class Check extends RpcRequest
{
}
