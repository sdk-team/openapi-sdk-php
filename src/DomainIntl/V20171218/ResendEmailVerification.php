<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Rpc;

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class ResendEmailVerification extends Rpc
{
    public $product = 'Domain-intl';

    public $version = '2017-12-18';

    public $method = 'POST';

    public $serviceCode = 'domain';
}
