<?php

namespace AlibabaCloud\Rds\V20120615;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DescribeDBInstanceClassList describeDBInstanceClassList(array $options = [])
 */
class RdsApiResolver
{
    use ApiResolverTrait;
}

class V20120615Rpc extends Rpc
{
    /** @var string */
    public $product = 'Rds';

    /** @var string */
    public $version = '2012-06-15';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDBInstanceClassList extends V20120615Rpc
{
}
