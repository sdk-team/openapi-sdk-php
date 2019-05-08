<?php

namespace AlibabaCloud\Acs\V20150201;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method ApiFlowControl apiFlowControl(array $options = [])
 */
class AcsApiResolver
{
    use ApiResolverTrait;
}

class V20150201Rpc extends Rpc
{
    /** @var string */
    public $product = 'Acs';

    /** @var string */
    public $version = '2015-02-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDataSize()
 * @method $this withDataSize($value)
 */
class ApiFlowControl extends V20150201Rpc
{
}
