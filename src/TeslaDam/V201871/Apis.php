<?php

namespace AlibabaCloud\TeslaDam\V201871;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method CreateOrder createOrder($options = [])
 */
class V201871
{
    use ApiResolverTrait;
}

/**
 * @method string getHost
 * @method self withHost(string $host)
 * @method string getReason
 * @method self withReason(string $reason)
 * @method string getRemark
 * @method self withRemark(string $remark)
 */
class CreateOrder extends Rpc
{
    use R;
}
