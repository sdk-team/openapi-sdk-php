<?php

namespace AlibabaCloud\Vod\V20170510;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method GetVAEResult getVAEResult($options = [])
 * @method GetReviews getReviews($options = [])
 * @method AddReview addReview($options = [])
 */
class V20170510
{
    use ApiResolverTrait;
}

/**
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 */
class GetVAEResult extends Roa
{
    use R;
}

/**
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 */
class GetReviews extends Roa
{
    use R;
}

/**
 * @method string getMediaId
 * @method self withMediaId(string $mediaId)
 * @method string getStatus
 * @method self withStatus(string $status)
 * @method string getSubUserId
 * @method self withSubUserId(string $subUserId)
 * @method string getStage
 * @method self withStage(string $stage)
 * @method string getReason
 * @method self withReason(string $reason)
 * @method string getComment
 * @method self withComment(string $comment)
 * @method float getPosition
 * @method self withPosition(float $position)
 */
class AddReview extends Roa
{
    use R;
}
