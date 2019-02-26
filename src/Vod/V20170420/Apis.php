<?php

namespace AlibabaCloud\Vod\V20170420;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method GetDomainList getDomainList($options = [])
 * @method GetVideoInfo getVideoInfo($options = [])
 * @method UpdateVideoInfo updateVideoInfo($options = [])
 * @method UpdateCategoryName updateCategoryName($options = [])
 * @method GetVideoPlayAuth getVideoPlayAuth($options = [])
 * @method GetVideoList getVideoList($options = [])
 * @method GetImageUploadAuth getImageUploadAuth($options = [])
 * @method GetCategoryTree getCategoryTree($options = [])
 * @method GetCategoryList getCategoryList($options = [])
 * @method DeleteVideo deleteVideo($options = [])
 * @method DeleteCategory deleteCategory($options = [])
 * @method CreateUploadVideo createUploadVideo($options = [])
 * @method AddCategory addCategory($options = [])
 */
class V20170420
{
    use ApiResolverTrait;
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
class GetDomainList extends Roa
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
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 */
class GetVideoInfo extends Roa
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
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getTags
 * @method self withTags(string $tags)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getCoverURL
 * @method self withCoverURL(string $coverURL)
 * @method Integer getCateId
 * @method self withCateId(Integer $cateId)
 */
class UpdateVideoInfo extends Roa
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
 * @method string getCateName
 * @method self withCateName(string $cateName)
 * @method string getCateId
 * @method self withCateId(string $cateId)
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
 * @method string getVideoId
 * @method self withVideoId(string $videoId)
 */
class GetVideoPlayAuth extends Roa
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
 * @method Integer getCateId
 * @method self withCateId(Integer $cateId)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method Integer getPageNo
 * @method self withPageNo(Integer $pageNo)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getSortBy
 * @method self withSortBy(string $sortBy)
 */
class GetVideoList extends Roa
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
 * @method Integer getFileType
 * @method self withFileType(Integer $fileType)
 */
class GetImageUploadAuth extends Roa
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
class GetCategoryTree extends Roa
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
class GetCategoryList extends Roa
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
class DeleteVideo extends Roa
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
 * @method string getCateId
 * @method self withCateId(string $cateId)
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
 * @method string getCoverURL
 * @method self withCoverURL(string $coverURL)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method int getFileSize
 * @method self withFileSize(int $fileSize)
 * @method string getIP
 * @method self withIP(string $iP)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method Integer getCateId
 * @method self withCateId(Integer $cateId)
 * @method string getTags
 * @method self withTags(string $tags)
 */
class CreateUploadVideo extends Roa
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
 * @method string getCateName
 * @method self withCateName(string $cateName)
 * @method string getParentId
 * @method self withParentId(string $parentId)
 */
class AddCategory extends Roa
{
    use R;
}
