<?php

namespace AlibabaCloud\Rds;

use AlibabaCloud\VersionResolverTrait;

/**
 * Resolve version based on the method name.
 *
 * @method V20120615\RdsApiResolver v20120615()
 * @method V20130528\RdsApiResolver v20130528()
 * @method V20140815\RdsApiResolver v20140815()
 */
class Rds
{
    use VersionResolverTrait;
}
