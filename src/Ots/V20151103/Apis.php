<?php

namespace AlibabaCloud\Ots\V20151103;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ListInstance listInstance($options = [])
 * @method InsertInstance insertInstance($options = [])
 * @method GetInstance getInstance($options = [])
 * @method DeleteInstance deleteInstance($options = [])
 */
class V20151103
{
    use ApiResolverTrait;
}

class ListInstance extends Roa
{
    use R;
}

/**
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getClusterType
 * @method self withClusterType(string $clusterType)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class InsertInstance extends Roa
{
    use R;
}

/**
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 */
class GetInstance extends Roa
{
    use R;
}

/**
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 */
class DeleteInstance extends Roa
{
    use R;
}
