<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * @method string getIpControlId()
 * @method $this withIpControlId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteIpControl extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';
}
