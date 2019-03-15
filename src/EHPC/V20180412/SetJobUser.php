<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getRunasUserPassword()
 * @method $this withRunasUserPassword($value)
 * @method string getRunasUser()
 * @method $this withRunasUser($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class SetJobUser extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';
}
