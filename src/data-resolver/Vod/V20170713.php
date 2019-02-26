<?php

namespace AlibabaCloud\Vod\V20170713;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getBusinessType
 * @method self withBusinessType
 * @method string getFileExtension
 * @method self withFileExtension
 * @method string getMediaId
 * @method self withMediaId
 * @method string getUserData
 * @method self withUserData
 */
final class CreateUploadMediaFile extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getMediaFileId
 * @method self withMediaFileId
 * @method string getCompanionResourceType
 * @method self withCompanionResourceType
 * @method string getCompanionResourceConfig
 * @method self withCompanionResourceConfig
 * @method string getResourceName
 * @method self withResourceName
 * @method string getResourceTags
 * @method self withResourceTags
 */
final class AddCompanionresourceInfo extends RpcRequest
{
}

/**
 * @method string getVersion
 * @method self withVersion
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getSecurityToken
 * @method self withSecurityToken
 * @method string getVideoType
 * @method self withVideoType
 * @method string getBizDate
 * @method self withBizDate
 */
final class DescribeUserTopVideoByDay extends RpcRequest
{
}

/**
 * @method string getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getMaterialId
 * @method self withMaterialId
 * @method string getTitle
 * @method self withTitle
 * @method string getDescription
 * @method self withDescription
 * @method string getTags
 * @method self withTags
 * @method string getCoverURL
 * @method self withCoverURL
 * @method Integer getCateId
 * @method self withCateId
 */
final class UpdateMaterial extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getVideoIds
 * @method self withVideoIds
 */
final class SyncMaterial extends RpcRequest
{
}

/**
 * @method string getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method Integer getCateId
 * @method self withCateId
 * @method string getEndTime
 * @method self withEndTime
 * @method string getStartTime
 * @method self withStartTime
 * @method string getStatus
 * @method self withStatus
 * @method Integer getPageNo
 * @method self withPageNo
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getSortBy
 * @method self withSortBy
 * @method string getType
 * @method self withType
 * @method string getSource
 * @method self withSource
 * @method string getTitle
 * @method self withTitle
 */
final class SearchMaterial extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getMaterialId
 * @method self withMaterialId
 */
final class RefreshUploadMaterialToken extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getMaterialId
 * @method self withMaterialId
 */
final class GetMaterial extends RpcRequest
{
}

/**
 * @method string getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method string getOwnerAccount
 * @method self withOwnerAccount
 * @method string getMaterialIds
 * @method self withMaterialIds
 */
final class DeleteMaterial extends RpcRequest
{
}

/**
 * @method Long getOwnerId
 * @method self withOwnerId
 * @method string getResourceOwnerAccount
 * @method self withResourceOwnerAccount
 * @method Long getResourceOwnerId
 * @method self withResourceOwnerId
 * @method string getCoverURL
 * @method self withCoverURL
 * @method string getDescription
 * @method self withDescription
 * @method string getFileName
 * @method self withFileName
 * @method Long getFileSize
 * @method self withFileSize
 * @method string getTitle
 * @method self withTitle
 * @method Integer getCateId
 * @method self withCateId
 * @method string getTags
 * @method self withTags
 */
final class CreateUploadMaterial extends RpcRequest
{
}
