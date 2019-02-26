<?php

namespace AlibabaCloud\Sts\V20171001;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method GenerateSubUserMiniLoginToken generateSubUserMiniLoginToken($options = [])
 */
class V20171001
{
    use ApiResolverTrait;
}

/**
 * @method string getTargetSubUserAccountId
 * @method self withTargetSubUserAccountId(string $targetSubUserAccountId)
 */
class GenerateSubUserMiniLoginToken extends Roa
{
    use R;
}
