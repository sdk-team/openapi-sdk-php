<?php

namespace AlibabaCloud\Green\V20160308;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method TextWordCorrect textWordCorrect($options = [])
 * @method TextKeywordFilter textKeywordFilter($options = [])
 * @method ImageResults imageResults($options = [])
 * @method ImageResult imageResult($options = [])
 * @method ImageFeedback imageFeedback($options = [])
 * @method ImageDetection imageDetection($options = [])
 */
class V20160308
{
    use ApiResolverTrait;
}

/**
 * @method string getText
 * @method self withText(string $text)
 */
class TextWordCorrect extends Rpc
{
    use R;
}

/**
 * @method string getText
 * @method self withText(string $text)
 */
class TextKeywordFilter extends Rpc
{
    use R;
}

/**
 * @method array getTaskId
 * @method self withTaskId(array $taskId)
 */
class ImageResults extends Rpc
{
    use R;
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
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 */
class ImageFeedback extends Rpc
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
