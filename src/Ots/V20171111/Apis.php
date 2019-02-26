<?php

namespace AlibabaCloud\Ots\V20171111;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method CreateTrigger createTrigger($options = [])
 * @method DeleteTrigger deleteTrigger($options = [])
 * @method ListTrigger listTrigger($options = [])
 * @method GetTrigger getTrigger($options = [])
 */
class V20171111
{
    use ApiResolverTrait;
}

/**
 * @method string getApiVersion
 * @method self withApiVersion(string $apiVersion)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getTableName
 * @method self withTableName(string $tableName)
 */
class CreateTrigger extends Roa
{
    use R;
}

/**
 * @method string getApiVersion
 * @method self withApiVersion(string $apiVersion)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getTableName
 * @method self withTableName(string $tableName)
 * @method string getTriggerName
 * @method self withTriggerName(string $triggerName)
 */
class DeleteTrigger extends Roa
{
    use R;
}

/**
 * @method string getApiVersion
 * @method self withApiVersion(string $apiVersion)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getTableName
 * @method self withTableName(string $tableName)
 */
class ListTrigger extends Roa
{
    use R;
}

/**
 * @method string getApiVersion
 * @method self withApiVersion(string $apiVersion)
 * @method string getInstanceName
 * @method self withInstanceName(string $instanceName)
 * @method string getTableName
 * @method self withTableName(string $tableName)
 * @method string getTriggerName
 * @method self withTriggerName(string $triggerName)
 */
class GetTrigger extends Roa
{
    use R;
}
