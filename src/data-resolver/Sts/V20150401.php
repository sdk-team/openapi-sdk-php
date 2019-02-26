<?php

namespace AlibabaCloud\Sts\V20150401;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method Long getDurationSeconds
 * @method self withDurationSeconds
 */
final class GenerateSessionAccessKey extends RpcRequest
{
}

final class GetCallerIdentity extends RpcRequest
{
}

/**
 * @method Long getDurationSeconds
 * @method self withDurationSeconds
 * @method string getPolicy
 * @method self withPolicy
 * @method string getRoleArn
 * @method self withRoleArn
 * @method string getRoleSessionName
 * @method self withRoleSessionName
 * @method string getAssumeRoleFor
 * @method self withAssumeRoleFor
 */
final class AssumeRoleWithServiceIdentity extends RpcRequest
{
}

/**
 * @method Long getDurationSeconds
 * @method self withDurationSeconds
 * @method string getPolicy
 * @method self withPolicy
 * @method string getRoleArn
 * @method self withRoleArn
 * @method string getRoleSessionName
 * @method self withRoleSessionName
 */
final class AssumeRole extends RpcRequest
{
}

/**
 * @method string getName
 * @method self withName
 * @method string getPolicy
 * @method self withPolicy
 * @method Long getDurationSeconds
 * @method self withDurationSeconds
 */
final class GetFederationToken extends RpcRequest
{
}
