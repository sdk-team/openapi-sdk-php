<?php

namespace AlibabaCloud\BatchCompute\V20150630;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ModifyJob modifyJob($options = [])
 * @method ReleaseJob releaseJob($options = [])
 * @method PutJob putJob($options = [])
 * @method PostJob postJob($options = [])
 * @method ListSnapshots listSnapshots($options = [])
 * @method ListJobs listJobs($options = [])
 * @method ListImages listImages($options = [])
 * @method GetTasks getTasks($options = [])
 * @method GetJobDescription getJobDescription($options = [])
 * @method GetJob getJob($options = [])
 * @method DeleteJob deleteJob($options = [])
 */
class V20150630
{
    use ApiResolverTrait;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 */
class ModifyJob extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 */
class ReleaseJob extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 */
class PutJob extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 */
class PostJob extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 */
class ListSnapshots extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 */
class ListJobs extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 */
class ListImages extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 */
class GetTasks extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 */
class GetJobDescription extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 */
class GetJob extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 */
class DeleteJob extends Roa
{
    use R;
}
