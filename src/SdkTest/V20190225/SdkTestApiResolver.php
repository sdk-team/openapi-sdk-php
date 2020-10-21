<?php

namespace AlibabaCloud\SdkTest\V20190225;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DescribeRegions describeRegions(array $options = [])
 */
class SdkTestApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'sdk-test';

    /** @var string */
    public $version = '2019-02-25';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeRegions extends Rpc
{

    /** @var string */
    public $endpointType = 'innerAPI';
}
