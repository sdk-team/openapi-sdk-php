<?php

namespace AlibabaCloud\Ons\V20170918;

use AlibabaCloud\Rpc;

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getNeedJstack()
 * @method $this withNeedJstack($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 * @method string getDetail()
 * @method $this withDetail($value)
 */
class OnsConsumerStatus extends Rpc
{
    public $product = 'Ons';

    public $version = '2017-09-18';

    public $method = 'POST';
}
