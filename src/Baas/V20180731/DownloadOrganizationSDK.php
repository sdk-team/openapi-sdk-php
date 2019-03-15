<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class DownloadOrganizationSDK extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'PUT';
}
