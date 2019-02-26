<?php

namespace AlibabaCloud\ImageSearch\V20180111;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ListIncrement listIncrement($options = [])
 * @method CountInstance countInstance($options = [])
 * @method ListInstance listInstance($options = [])
 * @method InitInstance initInstance($options = [])
 * @method IncreaseInstance increaseInstance($options = [])
 * @method DescribeInstance describeInstance($options = [])
 * @method ClearInstance clearInstance($options = [])
 * @method InstanceDetail instanceDetail($options = [])
 * @method InstanceRemove instanceRemove($options = [])
 * @method InstanceInit instanceInit($options = [])
 * @method InstanceIncrement instanceIncrement($options = [])
 * @method InstanceClear instanceClear($options = [])
 * @method InstanceQuery instanceQuery($options = [])
 * @method DescribeRegions describeRegions($options = [])
 */
class V20180111
{
    use ApiResolverTrait;
}

/**
 * @method int getInstanceId
 * @method self withInstanceId(int $instanceId)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 * @method Integer getTaskType
 * @method self withTaskType(Integer $taskType)
 */
class ListIncrement extends Rpc
{
    use R;
}

/**
 * @method int getInstanceId
 * @method self withInstanceId(int $instanceId)
 */
class CountInstance extends Rpc
{
    use R;
}

/**
 * @method Integer getServiceType
 * @method self withServiceType(Integer $serviceType)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class ListInstance extends Rpc
{
    use R;
}

/**
 * @method int getInstanceId
 * @method self withInstanceId(int $instanceId)
 */
class InitInstance extends Rpc
{
    use R;
}

/**
 * @method int getInstanceId
 * @method self withInstanceId(int $instanceId)
 * @method string getArn
 * @method self withArn(string $arn)
 * @method string getBucketName
 * @method self withBucketName(string $bucketName)
 * @method string getPath
 * @method self withPath(string $path)
 * @method Integer getTaskType
 * @method self withTaskType(Integer $taskType)
 */
class IncreaseInstance extends Rpc
{
    use R;
}

/**
 * @method int getInstanceId
 * @method self withInstanceId(int $instanceId)
 */
class DescribeInstance extends Rpc
{
    use R;
}

/**
 * @method int getInstanceId
 * @method self withInstanceId(int $instanceId)
 */
class ClearInstance extends Rpc
{
    use R;
}

/**
 * @method int getInstanceId
 * @method self withInstanceId(int $instanceId)
 */
class InstanceDetail extends Rpc
{
    use R;
}

/**
 * @method int getInstanceId
 * @method self withInstanceId(int $instanceId)
 */
class InstanceRemove extends Rpc
{
    use R;
}

/**
 * @method int getInstanceId
 * @method self withInstanceId(int $instanceId)
 */
class InstanceInit extends Rpc
{
    use R;
}

/**
 * @method int getInstanceId
 * @method self withInstanceId(int $instanceId)
 * @method string getArn
 * @method self withArn(string $arn)
 * @method string getBucketName
 * @method self withBucketName(string $bucketName)
 * @method string getPath
 * @method self withPath(string $path)
 */
class InstanceIncrement extends Rpc
{
    use R;
}

/**
 * @method int getInstanceId
 * @method self withInstanceId(int $instanceId)
 */
class InstanceClear extends Rpc
{
    use R;
}

/**
 * @method Integer getServiceType
 * @method self withServiceType(Integer $serviceType)
 * @method string getName
 * @method self withName(string $name)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method Integer getPageNumber
 * @method self withPageNumber(Integer $pageNumber)
 */
class InstanceQuery extends Rpc
{
    use R;
}

class DescribeRegions extends Rpc
{
    use R;
}
