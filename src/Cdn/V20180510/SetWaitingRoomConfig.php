<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * @method string getWaitUrl()
 * @method $this withWaitUrl($value)
 * @method string getWaitUri()
 * @method $this withWaitUri($value)
 * @method string getMaxTimeWait()
 * @method $this withMaxTimeWait($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getAllowPct()
 * @method $this withAllowPct($value)
 * @method string getGapTime()
 * @method $this withGapTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetWaitingRoomConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    public $method = 'POST';
}
