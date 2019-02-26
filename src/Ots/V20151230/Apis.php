<?php

namespace AlibabaCloud\Ots\V20151230;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ListTags listTags($options = [])
 * @method ListInstance listInstance($options = [])
 * @method InsertTags insertTags($options = [])
 * @method InsertInstance insertInstance($options = [])
 * @method GetInstance getInstance($options = [])
 * @method DeleteTags deleteTags($options = [])
 * @method DeleteInstance deleteInstance($options = [])
 */
class V20151230
{
    use ApiResolverTrait;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method int getPageNum
 * @method self withPageNum(int $pageNum)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method array getTagInfo
 * @method self withTagInfo(array $tagInfo)
 */
class ListTags extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method int getPageNum
 * @method self withPageNum(int $pageNum)
 * @method int getPageSize
 * @method self withPageSize(int $pageSize)
 * @method array getTagInfo
 * @method self withTagInfo(array $tagInfo)
 */
class ListInstance extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method array getTagInfo
 * @method self withTagInfo(array $tagInfo)
 */
class InsertTags extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getClusterType
 * @method self withClusterType(string $clusterType)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method array getTagInfo
 * @method self withTagInfo(array $tagInfo)
 */
class InsertInstance extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 */
class GetInstance extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method array getTagInfo
 * @method self withTagInfo(array $tagInfo)
 */
class DeleteTags extends Roa
{
    use R;
}

/**
 * @method int getResourceOwnerId
 * @method self withResourceOwnerId(int $resourceOwnerId)
 * @method string getaccesskeyid
 * @method self withaccesskeyid(string $accesskeyid)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 */
class DeleteInstance extends Roa
{
    use R;
}
