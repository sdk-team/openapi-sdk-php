<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ListTags extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';
}
