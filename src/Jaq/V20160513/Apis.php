<?php

namespace AlibabaCloud\Jaq\V20160513;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method RefundBill refundBill($options = [])
 * @method PayBill payBill($options = [])
 * @method CheckBill checkBill($options = [])
 */
class V20160513
{
    use ApiResolverTrait;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 */
class RefundBill extends Roa
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 */
class PayBill extends Roa
{
    use R;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 */
class CheckBill extends Roa
{
    use R;
}
