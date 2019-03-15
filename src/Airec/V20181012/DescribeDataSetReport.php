<?php

namespace AlibabaCloud\Airec\V20181012;

use AlibabaCloud\Roa;

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeDataSetReport extends Roa
{
    public $product = 'Airec';

    public $version = '2018-10-12';

    public $pathPattern = '/openapi/instances/[InstanceId]/dataSets/[VersionId]/report';

    public $serviceCode = 'airec';
}
