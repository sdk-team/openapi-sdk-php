<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getCsbId()
 * @method $this withCsbId($value)
 * @method string getAlias()
 * @method $this withAlias($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOnlyPending()
 * @method $this withOnlyPending($value)
 */
class FindApprovalOrderList extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

    public $scheme = 'https';
}
