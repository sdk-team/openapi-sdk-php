<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Rpc;

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getClearIndexData()
 * @method $this withClearIndexData($value)
 */
class DeleteFaceJob extends Rpc
{
    public $product = 'imm';

    public $version = '2017-09-06';

    public $method = 'POST';

    public $serviceCode = 'imm';
}
