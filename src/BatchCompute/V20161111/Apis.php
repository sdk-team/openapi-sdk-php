<?php

namespace AlibabaCloud\BatchCompute\V20161111;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method OrderRefundCallback orderRefundCallback($options = [])
 */
class V20161111
{
    use ApiResolverTrait;
}

/**
 * @method string getdata
 * @method self withdata(string $data)
 */
class OrderRefundCallback extends Rpc
{
    use R;
}
