<?php

namespace AlibabaCloud\Green\V20160601;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ImageResult imageResult($options = [])
 * @method ImageDetection imageDetection($options = [])
 */
class V20160601
{
    use ApiResolverTrait;
}

/**
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class ImageResult extends Rpc
{
    use R;
}

/**
 * @method array getImageUrl
 * @method self withImageUrl(array $imageUrl)
 * @method array getScene
 * @method self withScene(array $scene)
 * @method bool getAsync
 * @method self withAsync(bool $async)
 */
class ImageDetection extends Rpc
{
    use R;
}
