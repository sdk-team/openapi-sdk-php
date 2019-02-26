<?php

namespace AlibabaCloud\ImageSearch\V20180115;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SearchItem searchItem($options = [])
 * @method DeleteItem deleteItem($options = [])
 * @method AddItem addItem($options = [])
 * @method ItemSearch itemSearch($options = [])
 * @method ItemDelete itemDelete($options = [])
 * @method ItemAdd itemAdd($options = [])
 * @method UploadPic uploadPic($options = [])
 */
class V20180115
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

/**
 * @method string getinstanceName
 * @method self withinstanceName(string $instanceName)
 */
class ItemSearch extends Roa
{
    use R;
}

/**
 * @method string getinstanceName
 * @method self withinstanceName(string $instanceName)
 */
class ItemDelete extends Roa
{
    use R;
}

/**
 * @method string getinstanceName
 * @method self withinstanceName(string $instanceName)
 */
class ItemAdd extends Roa
{
    use R;
}

/**
 * @method string getname
 * @method self withname(string $name)
 */
class UploadPic extends Roa
{
    use R;
}
