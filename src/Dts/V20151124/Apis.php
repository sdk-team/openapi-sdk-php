<?php

namespace AlibabaCloud\Dts\V20151124;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SuspendSynchronousJob suspendSynchronousJob($options = [])
 * @method StartSynchronousJob startSynchronousJob($options = [])
 * @method DescribeSynchronousJobList describeSynchronousJobList($options = [])
 * @method DescribeSynchronousJobDetails describeSynchronousJobDetails($options = [])
 * @method DescribeSynchronousJobConfiguration describeSynchronousJobConfiguration($options = [])
 * @method DeleteSynchronousJob deleteSynchronousJob($options = [])
 * @method CreateSynchronousJob createSynchronousJob($options = [])
 */
class V20151124
{
    use ApiResolverTrait;
}

/**
 * @method string getSynchronousJobId
 * @method self withSynchronousJobId(string $synchronousJobId)
 */
class SuspendSynchronousJob extends Roa
{
    use R;
}

/**
 * @method string getSynchronousJobId
 * @method self withSynchronousJobId(string $synchronousJobId)
 */
class StartSynchronousJob extends Roa
{
    use R;
}

/**
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getSynchronousJobName
 * @method self withSynchronousJobName(string $synchronousJobName)
 */
class DescribeSynchronousJobList extends Roa
{
    use R;
}

/**
 * @method string getSynchronousJobId
 * @method self withSynchronousJobId(string $synchronousJobId)
 */
class DescribeSynchronousJobDetails extends Roa
{
    use R;
}

/**
 * @method string getSynchronousJobId
 * @method self withSynchronousJobId(string $synchronousJobId)
 */
class DescribeSynchronousJobConfiguration extends Roa
{
    use R;
}

/**
 * @method string getSynchronousJobId
 * @method self withSynchronousJobId(string $synchronousJobId)
 */
class DeleteSynchronousJob extends Roa
{
    use R;
}

/**
 * @method string getSynchronousJobName
 * @method self withSynchronousJobName(string $synchronousJobName)
 * @method string getSourceInstanceId
 * @method self withSourceInstanceId(string $sourceInstanceId)
 * @method string getDestinationInstanceId
 * @method self withDestinationInstanceId(string $destinationInstanceId)
 * @method string getSynchronousObjectList
 * @method self withSynchronousObjectList(string $synchronousObjectList)
 * @method bool getStructureIntialization
 * @method self withStructureIntialization(bool $structureIntialization)
 * @method bool getFullDataIntialization
 * @method self withFullDataIntialization(bool $fullDataIntialization)
 * @method string getSynchronousSpeedLimit
 * @method self withSynchronousSpeedLimit(string $synchronousSpeedLimit)
 */
class CreateSynchronousJob extends Roa
{
    use R;
}
