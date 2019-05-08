<?php

namespace AlibabaCloud\Oms;

use AlibabaCloud\VersionResolverTrait;

/**
 * Resolve version based on the method name.
 *
 * @method V20150212\OmsApiResolver v20150212()
 * @method V20151225\OmsApiResolver v20151225()
 * @method V20160615\OmsApiResolver v20160615()
 * @method V20170821\OmsApiResolver v20170821()
 */
class Oms
{
    use VersionResolverTrait;
}
