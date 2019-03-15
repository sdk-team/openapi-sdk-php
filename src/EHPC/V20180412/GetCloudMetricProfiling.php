<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getProfilingId()
 * @method $this withProfilingId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetCloudMetricProfiling extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';
}
