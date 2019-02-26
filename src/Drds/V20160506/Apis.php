<?php

namespace AlibabaCloud\Drds\V20160506;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ValidateOrder validateOrder($options = [])
 * @method OrderSucceededCallback orderSucceededCallback($options = [])
 * @method CompleteOrderInfo completeOrderInfo($options = [])
 * @method CompleteCommodityInfo completeCommodityInfo($options = [])
 */
class V20160506
{
    use ApiResolverTrait;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 */
class ValidateOrder extends Roa
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 */
class OrderSucceededCallback extends Roa
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 */
class CompleteOrderInfo extends Roa
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 */
class CompleteCommodityInfo extends Roa
{
    use R;
}
