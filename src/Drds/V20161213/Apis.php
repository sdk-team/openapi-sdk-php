<?php

namespace AlibabaCloud\Drds\V20161213;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method OrderRefund orderRefund($options = [])
 */
class V20161213
{
    use ApiResolverTrait;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 */
class OrderRefund extends Roa
{
    use R;
}
