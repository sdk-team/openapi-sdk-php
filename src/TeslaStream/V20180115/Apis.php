<?php

namespace AlibabaCloud\TeslaStream\V20180115;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method GetJobTopology getJobTopology($options = [])
 * @method BatchGetPluginConfigInfo batchGetPluginConfigInfo($options = [])
 * @method BatchGetJobMetricInfo batchGetJobMetricInfo($options = [])
 */
class V20180115
{
    use ApiResolverTrait;
}

/**
 * @method string getJobName
 * @method self withJobName(string $jobName)
 */
class GetJobTopology extends Rpc
{
    use R;
}

/**
 * @method string getPluginInfos
 * @method self withPluginInfos(string $pluginInfos)
 */
class BatchGetPluginConfigInfo extends Rpc
{
    use R;
}

/**
 * @method string getJobInfos
 * @method self withJobInfos(string $jobInfos)
 */
class BatchGetJobMetricInfo extends Rpc
{
    use R;
}
