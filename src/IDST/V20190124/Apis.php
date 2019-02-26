<?php

namespace AlibabaCloud\IDST\V20190124;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method VideoAnthology videoAnthology($options = [])
 */
class V20190124
{
    use ApiResolverTrait;
}

/**
 * @method string getEvent
 * @method self withEvent(string $event)
 * @method string getUid
 * @method self withUid(string $uid)
 * @method string getUuid
 * @method self withUuid(string $uuid)
 * @method string getSplitId
 * @method self withSplitId(string $splitId)
 * @method string getOssEndpoint
 * @method self withOssEndpoint(string $ossEndpoint)
 * @method string getOssBucketName
 * @method self withOssBucketName(string $ossBucketName)
 * @method string getOssPath
 * @method self withOssPath(string $ossPath)
 */
class VideoAnthology extends Roa
{
    use R;
}
