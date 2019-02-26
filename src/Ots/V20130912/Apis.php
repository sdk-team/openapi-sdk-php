<?php

namespace AlibabaCloud\Ots\V20130912;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method GetInstance getInstance($options = [])
 * @method DeleteUser deleteUser($options = [])
 * @method DeleteInstance deleteInstance($options = [])
 * @method UpdateUser updateUser($options = [])
 * @method UpdateInstance updateInstance($options = [])
 * @method ListInstance listInstance($options = [])
 * @method InsertUser insertUser($options = [])
 * @method InsertInstance insertInstance($options = [])
 * @method GetUser getUser($options = [])
 */
class V20130912
{
    use ApiResolverTrait;
}

/**
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 */
class GetInstance extends Roa
{
    use R;
}

class DeleteUser extends Roa
{
    use R;
}

/**
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 */
class DeleteInstance extends Roa
{
    use R;
}

/**
 * @method Integer getInstanceQuota
 * @method self withInstanceQuota(Integer $instanceQuota)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class UpdateUser extends Roa
{
    use R;
}

/**
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method Integer getWriteCapacity
 * @method self withWriteCapacity(Integer $writeCapacity)
 * @method Integer getReadCapacity
 * @method self withReadCapacity(Integer $readCapacity)
 * @method Integer getEntityQuota
 * @method self withEntityQuota(Integer $entityQuota)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class UpdateInstance extends Roa
{
    use R;
}

class ListInstance extends Roa
{
    use R;
}

/**
 * @method Integer getInstanceQuota
 * @method self withInstanceQuota(Integer $instanceQuota)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class InsertUser extends Roa
{
    use R;
}

/**
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getClusterName
 * @method self withClusterName(string $clusterName)
 * @method Integer getWriteCapacity
 * @method self withWriteCapacity(Integer $writeCapacity)
 * @method Integer getReadCapacity
 * @method self withReadCapacity(Integer $readCapacity)
 * @method Integer getEntityQuota
 * @method self withEntityQuota(Integer $entityQuota)
 * @method string getDescription
 * @method self withDescription(string $description)
 */
class InsertInstance extends Roa
{
    use R;
}

class GetUser extends Roa
{
    use R;
}
