<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * @method string getReferList()
 * @method $this withReferList($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getReferType()
 * @method $this withReferType($value)
 * @method string getDisableAst()
 * @method $this withDisableAst($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAllowEmpty()
 * @method $this withAllowEmpty($value)
 */
class SetRefererConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    public $method = 'POST';
}
