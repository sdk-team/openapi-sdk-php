<?php

namespace AlibabaCloud\Ecs;

use AlibabaCloud\VersionResolverTrait;

/**
 * Resolve version based on the method name.
 *
 * @method V20140526\EcsApiResolver v20140526()
 * @method V20160314\EcsApiResolver v20160314()
 */
class Ecs
{
    use VersionResolverTrait;
}
