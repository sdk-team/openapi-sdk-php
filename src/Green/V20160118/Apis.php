<?php

namespace AlibabaCloud\Green\V20160118;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method TextWordCorrect textWordCorrect($options = [])
 * @method TextKeywordFilter textKeywordFilter($options = [])
 * @method SiteSuspectUrls siteSuspectUrls($options = [])
 * @method ImageResult imageResult($options = [])
 * @method ImageFeedback imageFeedback($options = [])
 * @method ImageDetection imageDetection($options = [])
 */
class V20160118
{
    use ApiResolverTrait;
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
