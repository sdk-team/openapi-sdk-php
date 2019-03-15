<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getTime()
 * @method $this withTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeHlsLiveStreamRealTimeBpsData extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $serviceCode = 'live';
}
