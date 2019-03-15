<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Rpc;

/**
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getSynchronizationObjects()
 * @method $this withSynchronizationObjects($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifySynchronizationObject extends Rpc
{
    public $product = 'Dts';

    public $version = '2016-08-01';

    public $method = 'POST';
}
