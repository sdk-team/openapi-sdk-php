<?php

namespace AlibabaCloud\Sts\V20150401;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method GenerateSessionAccessKey generateSessionAccessKey($options = [])
 * @method GetCallerIdentity getCallerIdentity($options = [])
 * @method AssumeRoleWithServiceIdentity assumeRoleWithServiceIdentity($options = [])
 * @method AssumeRole assumeRole($options = [])
 * @method GetFederationToken getFederationToken($options = [])
 */
class V20150401
{
    use ApiResolverTrait;
}

/**
 * @method int getDurationSeconds
 * @method self withDurationSeconds(int $durationSeconds)
 */
class GenerateSessionAccessKey extends Rpc
{
    use R;
}

class GetCallerIdentity extends Rpc
{
    use R;
}

/**
 * @method int getDurationSeconds
 * @method self withDurationSeconds(int $durationSeconds)
 * @method string getPolicy
 * @method self withPolicy(string $policy)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 * @method string getRoleSessionName
 * @method self withRoleSessionName(string $roleSessionName)
 * @method string getAssumeRoleFor
 * @method self withAssumeRoleFor(string $assumeRoleFor)
 */
class AssumeRoleWithServiceIdentity extends Rpc
{
    use R;
}

/**
 * @method int getDurationSeconds
 * @method self withDurationSeconds(int $durationSeconds)
 * @method string getPolicy
 * @method self withPolicy(string $policy)
 * @method string getRoleArn
 * @method self withRoleArn(string $roleArn)
 * @method string getRoleSessionName
 * @method self withRoleSessionName(string $roleSessionName)
 */
class AssumeRole extends Rpc
{
    use R;
}

/**
 * @method string getName
 * @method self withName(string $name)
 * @method string getPolicy
 * @method self withPolicy(string $policy)
 * @method int getDurationSeconds
 * @method self withDurationSeconds(int $durationSeconds)
 */
class GetFederationToken extends Rpc
{
    use R;
}
