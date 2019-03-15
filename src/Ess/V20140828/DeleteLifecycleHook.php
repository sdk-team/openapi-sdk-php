<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * @method string getLifecycleHookName()
 * @method $this withLifecycleHookName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getLifecycleHookId()
 * @method $this withLifecycleHookId($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLifecycleHook extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';
}
