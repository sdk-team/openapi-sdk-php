<?php

namespace AlibabaCloud\Vod\V20170713;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method CreateUploadMediaFile createUploadMediaFile($options = [])
 * @method AddCompanionresourceInfo addCompanionresourceInfo($options = [])
 * @method DescribeUserTopVideoByDay describeUserTopVideoByDay($options = [])
 * @method UpdateMaterial updateMaterial($options = [])
 * @method SyncMaterial syncMaterial($options = [])
 * @method SearchMaterial searchMaterial($options = [])
 * @method RefreshUploadMaterialToken refreshUploadMaterialToken($options = [])
 * @method GetMaterial getMaterial($options = [])
 * @method DeleteMaterial deleteMaterial($options = [])
 * @method CreateUploadMaterial createUploadMaterial($options = [])
 */
class V20170713
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
 * @method string getVersion
 * @method self withVersion(string $version)
 * @method int getOwnerId
 * @method self withOwnerId(int $ownerId)
 * @method string getSecurityToken
 * @method self withSecurityToken(string $securityToken)
 * @method string getVideoType
 * @method self withVideoType(string $videoType)
 * @method string getBizDate
 * @method self withBizDate(string $bizDate)
 */
class DescribeUserTopVideoByDay extends Roa
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
 * @method string getCoverURL
 * @method self withCoverURL(string $coverURL)
 * @method Integer getCateId
 * @method self withCateId(Integer $cateId)
 */
class UpdateMaterial extends Roa
{
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
 * @method string getMaterialIds
 * @method self withMaterialIds(string $materialIds)
 */
class DeleteMaterial extends Roa
{
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
 * @method Integer getCateId
 * @method self withCateId(Integer $cateId)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class CreateUploadMaterial extends Roa
{
    use R;
}
