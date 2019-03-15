<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getCacheType()
 * @method $this withCacheType($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getConfigID()
 * @method $this withConfigID($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCacheExpiredConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}
