<?php

namespace AlibabaCloud\Green\V20151209;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method TextKeywordFilter textKeywordFilter($options = [])
 * @method ImageResult imageResult($options = [])
 * @method ImageFeedback imageFeedback($options = [])
 * @method ImageDetection imageDetection($options = [])
 */
class V20151209
{
    use ApiResolverTrait;
}

class TextKeywordFilter extends Roa
{
    use R;
}

/**
 * @method string gettaskid
 * @method self withtaskid(string $taskid)
 */
class ImageResult extends Roa
{
    use R;
}

/**
 * @method string gettaskid
 * @method self withtaskid(string $taskid)
 */
class ImageFeedback extends Roa
{
    use R;
}

class ImageDetection extends Roa
{
    use R;
}
