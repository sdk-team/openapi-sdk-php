<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFlowOutSpec()
 * @method $this withFlowOutSpec($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class CreateCdiBaseBag extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';
}
