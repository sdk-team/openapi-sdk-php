<?php

namespace AlibabaCloud\Hsm\V20180111;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getHsmStatus()
 * @method $this withHsmStatus($value)
 */
class DescribeInstances extends Rpc
{
    public $product = 'hsm';

    public $version = '2018-01-11';

    public $method = 'POST';

    public $serviceCode = 'hsm';
}
