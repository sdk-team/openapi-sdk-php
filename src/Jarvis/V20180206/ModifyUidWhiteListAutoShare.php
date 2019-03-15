<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getAutoConfig()
 * @method $this withAutoConfig($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getWhiteListType()
 * @method $this withWhiteListType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSrcUid()
 * @method $this withSrcUid($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class ModifyUidWhiteListAutoShare extends Rpc
{
    public $product = 'jarvis';

    public $version = '2018-02-06';

    public $method = 'POST';
}
