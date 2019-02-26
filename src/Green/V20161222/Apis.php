<?php

namespace AlibabaCloud\Green\V20161222;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method TextKeywordFilter textKeywordFilter($options = [])
 * @method SampleFeedback sampleFeedback($options = [])
 * @method ImageResults imageResults($options = [])
 * @method ImageResult imageResult($options = [])
 * @method ImageDetection imageDetection($options = [])
 */
class V20161222
{
    use ApiResolverTrait;
}

class TextKeywordFilter extends Roa
{
    use R;
}

class SampleFeedback extends Roa
{
    use R;
}

class ImageResults extends Roa
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

class ImageDetection extends Roa
{
    use R;
}
