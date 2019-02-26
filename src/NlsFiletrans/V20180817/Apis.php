<?php

namespace AlibabaCloud\NlsFiletrans\V20180817;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method GetTaskResult getTaskResult($options = [])
 * @method SubmitTask submitTask($options = [])
 */
class V20180817
{
    use ApiResolverTrait;
}

/**
 * @method string getTaskId
 * @method self withTaskId(string $taskId)
 * @method bool getDebug
 * @method self withDebug(bool $debug)
 */
class GetTaskResult extends Rpc
{
    use R;
}

/**
 * @method string getTask
 * @method self withTask(string $task)
 * @method bool getDebug
 * @method self withDebug(bool $debug)
 */
class SubmitTask extends Rpc
{
    use R;
}
