<?php

namespace AlibabaCloud\Green\V20160224;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ImageFeedback imageFeedback($options = [])
 * @method ImageDetection imageDetection($options = [])
 * @method TextWordCorrect textWordCorrect($options = [])
 * @method TextKeywordFilter textKeywordFilter($options = [])
 * @method SiteSuspectUrls siteSuspectUrls($options = [])
 * @method ImageResults imageResults($options = [])
 * @method ImageResult imageResult($options = [])
 */
class V20160224
{
    use ApiResolverTrait;
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

class TextWordCorrect extends Roa
{
    use R;
}

class TextKeywordFilter extends Roa
{
    use R;
}

/**
 * @method int getstartTime
 * @method self withstartTime(int $startTime)
 */
class SiteSuspectUrls extends Roa
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
