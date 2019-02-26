<?php

namespace AlibabaCloud\Vod\V20170426;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method UploadVideo uploadVideo($options = [])
 */
class V20170426
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
 * @method string getCoverURL
 * @method self withCoverURL(string $coverURL)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getFileName
 * @method self withFileName(string $fileName)
 * @method string getTitle
 * @method self withTitle(string $title)
 * @method string getIP
 * @method self withIP(string $iP)
 * @method string getCallback
 * @method self withCallback(string $callback)
 */
class UploadVideo extends Roa
{
    use R;
}
