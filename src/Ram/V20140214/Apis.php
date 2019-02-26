<?php

namespace AlibabaCloud\Ram\V20140214;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method RemoveUser removeUser($options = [])
 * @method PutUserPolicy putUserPolicy($options = [])
 * @method ListUsers listUsers($options = [])
 * @method ListUserPolicies listUserPolicies($options = [])
 * @method GetUserPolicy getUserPolicy($options = [])
 * @method GetUser getUser($options = [])
 * @method DeleteUserPolicy deleteUserPolicy($options = [])
 * @method AddUser addUser($options = [])
 */
class V20140214
{
    use ApiResolverTrait;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 */
class RemoveUser extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 * @method string getPolicyDocument
 * @method self withPolicyDocument(string $policyDocument)
 */
class PutUserPolicy extends Roa
{
    use R;
}

class ListUsers extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 */
class ListUserPolicies extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 */
class GetUserPolicy extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 */
class GetUser extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 */
class DeleteUserPolicy extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getComments
 * @method self withComments(string $comments)
 */
class AddUser extends Roa
{
    use R;
}
