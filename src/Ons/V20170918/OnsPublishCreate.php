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
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getProducerId()
 * @method $this withProducerId($value)
 */
class OnsPublishCreate extends Rpc
{
    public $product = 'Ons';

    public $version = '2017-09-18';

    public $method = 'POST';
}
