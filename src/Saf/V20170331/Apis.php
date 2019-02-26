<?php

namespace AlibabaCloud\Saf\V20170331;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ExecuteRequest executeRequest($options = [])
 */
class V20170331
{
    use ApiResolverTrait;
}

/**
 * @method string getService
 * @method self withService(string $service)
 * @method string getServiceParameters
 * @method self withServiceParameters(string $serviceParameters)
 */
class ExecuteRequest extends Rpc
{
    use R;
}
