<?php

namespace AlibabaCloud\ImageSearch\V20180120;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SearchItem searchItem($options = [])
 * @method DeleteItem deleteItem($options = [])
 * @method AddItem addItem($options = [])
 */
class V20180120
{
    use ApiResolverTrait;
}

/**
 * @method string getinstanceName
 * @method self withinstanceName(string $instanceName)
 */
class SearchItem extends Roa
{
    use R;
}

/**
 * @method string getinstanceName
 * @method self withinstanceName(string $instanceName)
 */
class DeleteItem extends Roa
{
    use R;
}

/**
 * @method string getinstanceName
 * @method self withinstanceName(string $instanceName)
 */
class AddItem extends Roa
{
    use R;
}
