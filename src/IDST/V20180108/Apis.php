<?php

namespace AlibabaCloud\IDST\V20180108;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method DescribeRegions describeRegions($options = [])
 * @method InstanceUpdate instanceUpdate($options = [])
 * @method InstanceTrail instanceTrail($options = [])
 * @method InstanceRemove instanceRemove($options = [])
 * @method InstanceMeasure instanceMeasure($options = [])
 * @method InstanceDeleteItem instanceDeleteItem($options = [])
 * @method InstanceClear instanceClear($options = [])
 * @method InstanceAddItem instanceAddItem($options = [])
 * @method InstanceQuery instanceQuery($options = [])
 * @method InstanceDetail instanceDetail($options = [])
 */
class V20180108
{
    use ApiResolverTrait;
}

class DescribeRegions extends Roa
{
    use R;
}

class InstanceUpdate extends Roa
{
    use R;
}

class InstanceTrail extends Roa
{
    use R;
}

class InstanceRemove extends Roa
{
    use R;
}

class InstanceMeasure extends Roa
{
    use R;
}

class InstanceDeleteItem extends Roa
{
    use R;
}

class InstanceClear extends Roa
{
    use R;
}

class InstanceAddItem extends Roa
{
    use R;
}

class InstanceQuery extends Roa
{
    use R;
}

class InstanceDetail extends Roa
{
    use R;
}
