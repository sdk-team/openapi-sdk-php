<?php

namespace AlibabaCloud\BatchCompute\V20130111;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ModifyJob modifyJob($options = [])
 * @method StopJob stopJob($options = [])
 * @method StartJob startJob($options = [])
 * @method ReleaseJob releaseJob($options = [])
 * @method PutJob putJob($options = [])
 * @method PostJob postJob($options = [])
 * @method ListSnapshots listSnapshots($options = [])
 * @method ListJobs listJobs($options = [])
 * @method ListImages listImages($options = [])
 * @method GetTasks getTasks($options = [])
 * @method GetSnapshot getSnapshot($options = [])
 * @method GetJobDescription getJobDescription($options = [])
 * @method GetJob getJob($options = [])
 * @method GetImage getImage($options = [])
 * @method DeleteSnapshot deleteSnapshot($options = [])
 * @method DeleteJob deleteJob($options = [])
 * @method DeleteImage deleteImage($options = [])
 */
class V20130111
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
 */
class StopJob extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 */
class StartJob extends Roa
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
class GetSnapshot extends Roa
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
class GetImage extends Roa
{
    use R;
}

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 */
class DeleteSnapshot extends Roa
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

/**
 * @method string getResourceName
 * @method self withResourceName(string $resourceName)
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 */
class DeleteImage extends Roa
{
    use R;
}
