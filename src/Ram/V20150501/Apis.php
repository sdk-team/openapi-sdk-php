<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method GetAccessKeyLastUsed getAccessKeyLastUsed($options = [])
 * @method UploadPublicKey uploadPublicKey($options = [])
 * @method UpdatePublicKey updatePublicKey($options = [])
 * @method ListPublicKeys listPublicKeys($options = [])
 * @method DeletePublicKey deletePublicKey($options = [])
 * @method GetPublicKey getPublicKey($options = [])
 * @method ChangePassword changePassword($options = [])
 * @method ListRolesForService listRolesForService($options = [])
 * @method UpdateRole updateRole($options = [])
 * @method SetSecurityPreference setSecurityPreference($options = [])
 * @method ListRoles listRoles($options = [])
 * @method ListPoliciesForRole listPoliciesForRole($options = [])
 * @method GetSecurityPreference getSecurityPreference($options = [])
 * @method GetRole getRole($options = [])
 * @method GetAccountSummary getAccountSummary($options = [])
 * @method DetachPolicyFromRole detachPolicyFromRole($options = [])
 * @method DeleteRole deleteRole($options = [])
 * @method CreateRole createRole($options = [])
 * @method AttachPolicyToRole attachPolicyToRole($options = [])
 * @method UnbindMFADevice unbindMFADevice($options = [])
 * @method ListVirtualMFADevices listVirtualMFADevices($options = [])
 * @method GetUserMFAInfo getUserMFAInfo($options = [])
 * @method DeleteVirtualMFADevice deleteVirtualMFADevice($options = [])
 * @method CreateVirtualMFADevice createVirtualMFADevice($options = [])
 * @method BindMFADevice bindMFADevice($options = [])
 * @method UpdateLoginProfile updateLoginProfile($options = [])
 * @method GetLoginProfile getLoginProfile($options = [])
 * @method DeleteLoginProfile deleteLoginProfile($options = [])
 * @method CreateLoginProfile createLoginProfile($options = [])
 * @method UpdateUser updateUser($options = [])
 * @method ListUsers listUsers($options = [])
 * @method GetUser getUser($options = [])
 * @method DeleteUser deleteUser($options = [])
 * @method CreateUser createUser($options = [])
 * @method UpdateAccessKey updateAccessKey($options = [])
 * @method ListAccessKeys listAccessKeys($options = [])
 * @method DeleteAccessKey deleteAccessKey($options = [])
 * @method CreateAccessKey createAccessKey($options = [])
 * @method GetServiceStatus getServiceStatus($options = [])
 * @method DeactivateService deactivateService($options = [])
 * @method ActivateService activateService($options = [])
 * @method SetPasswordPolicy setPasswordPolicy($options = [])
 * @method SetAccountAlias setAccountAlias($options = [])
 * @method GetPasswordPolicy getPasswordPolicy($options = [])
 * @method GetAccountAlias getAccountAlias($options = [])
 * @method ClearAccountAlias clearAccountAlias($options = [])
 * @method SetDefaultPolicyVersion setDefaultPolicyVersion($options = [])
 * @method ListPolicyVersions listPolicyVersions($options = [])
 * @method GetPolicyVersion getPolicyVersion($options = [])
 * @method DeletePolicyVersion deletePolicyVersion($options = [])
 * @method CreatePolicyVersion createPolicyVersion($options = [])
 * @method ListPoliciesForUser listPoliciesForUser($options = [])
 * @method ListPoliciesForGroup listPoliciesForGroup($options = [])
 * @method ListEntitiesForPolicy listEntitiesForPolicy($options = [])
 * @method DetachPolicyFromUser detachPolicyFromUser($options = [])
 * @method DetachPolicyFromGroup detachPolicyFromGroup($options = [])
 * @method AttachPolicyToUser attachPolicyToUser($options = [])
 * @method AttachPolicyToGroup attachPolicyToGroup($options = [])
 * @method ListPolicies listPolicies($options = [])
 * @method GetPolicy getPolicy($options = [])
 * @method DeletePolicy deletePolicy($options = [])
 * @method CreatePolicy createPolicy($options = [])
 * @method RemoveUserFromGroup removeUserFromGroup($options = [])
 * @method ListUsersForGroup listUsersForGroup($options = [])
 * @method ListGroupsForUser listGroupsForUser($options = [])
 * @method AddUserToGroup addUserToGroup($options = [])
 * @method UpdateGroup updateGroup($options = [])
 * @method ListGroups listGroups($options = [])
 * @method GetGroup getGroup($options = [])
 * @method DeleteGroup deleteGroup($options = [])
 * @method CreateGroup createGroup($options = [])
 */
class V20150501
{
    use ApiResolverTrait;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getUserAccessKeyId
 * @method self withUserAccessKeyId(string $userAccessKeyId)
 */
class GetAccessKeyLastUsed extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getPublicKeySpec
 * @method self withPublicKeySpec(string $publicKeySpec)
 */
class UploadPublicKey extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getUserPublicKeyId
 * @method self withUserPublicKeyId(string $userPublicKeyId)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class UpdatePublicKey extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 */
class ListPublicKeys extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getUserPublicKeyId
 * @method self withUserPublicKeyId(string $userPublicKeyId)
 */
class DeletePublicKey extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getUserPublicKeyId
 * @method self withUserPublicKeyId(string $userPublicKeyId)
 */
class GetPublicKey extends Roa
{
    use R;
}

/**
 * @method string getOldPassword
 * @method self withOldPassword(string $oldPassword)
 * @method string getNewPassword
 * @method self withNewPassword(string $newPassword)
 */
class ChangePassword extends Roa
{
    use R;
}

/**
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxItems
 * @method self withMaxItems(Integer $maxItems)
 * @method string getService
 * @method self withService(string $service)
 */
class ListRolesForService extends Roa
{
    use R;
}

/**
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getNewAssumeRolePolicyDocument
 * @method self withNewAssumeRolePolicyDocument(string $newAssumeRolePolicyDocument)
 */
class UpdateRole extends Roa
{
    use R;
}

/**
 * @method bool getEnableSaveMFATicket
 * @method self withEnableSaveMFATicket(bool $enableSaveMFATicket)
 * @method bool getAllowUserToChangePassword
 * @method self withAllowUserToChangePassword(bool $allowUserToChangePassword)
 * @method bool getAllowUserToManageAccessKeys
 * @method self withAllowUserToManageAccessKeys(bool $allowUserToManageAccessKeys)
 * @method bool getAllowUserToManagePublicKeys
 * @method self withAllowUserToManagePublicKeys(bool $allowUserToManagePublicKeys)
 * @method bool getAllowUserToManageMFADevices
 * @method self withAllowUserToManageMFADevices(bool $allowUserToManageMFADevices)
 * @method Integer getLoginSessionDuration
 * @method self withLoginSessionDuration(Integer $loginSessionDuration)
 * @method string getLoginNetworkMasks
 * @method self withLoginNetworkMasks(string $loginNetworkMasks)
 */
class SetSecurityPreference extends Roa
{
    use R;
}

/**
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxItems
 * @method self withMaxItems(Integer $maxItems)
 */
class ListRoles extends Roa
{
    use R;
}

/**
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 */
class ListPoliciesForRole extends Roa
{
    use R;
}

class GetSecurityPreference extends Roa
{
    use R;
}

/**
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 */
class GetRole extends Roa
{
    use R;
}

class GetAccountSummary extends Roa
{
    use R;
}

/**
 * @method string getPolicyType
 * @method self withPolicyType(string $policyType)
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 */
class DetachPolicyFromRole extends Roa
{
    use R;
}

/**
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 */
class DeleteRole extends Roa
{
    use R;
}

/**
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getAssumeRolePolicyDocument
 * @method self withAssumeRolePolicyDocument(string $assumeRolePolicyDocument)
 */
class CreateRole extends Roa
{
    use R;
}

/**
 * @method string getPolicyType
 * @method self withPolicyType(string $policyType)
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 * @method string getRoleName
 * @method self withRoleName(string $roleName)
 */
class AttachPolicyToRole extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 */
class UnbindMFADevice extends Roa
{
    use R;
}

class ListVirtualMFADevices extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 */
class GetUserMFAInfo extends Roa
{
    use R;
}

/**
 * @method string getSerialNumber
 * @method self withSerialNumber(string $serialNumber)
 */
class DeleteVirtualMFADevice extends Roa
{
    use R;
}

/**
 * @method string getVirtualMFADeviceName
 * @method self withVirtualMFADeviceName(string $virtualMFADeviceName)
 */
class CreateVirtualMFADevice extends Roa
{
    use R;
}

/**
 * @method string getSerialNumber
 * @method self withSerialNumber(string $serialNumber)
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getAuthenticationCode1
 * @method self withAuthenticationCode1(string $authenticationCode1)
 * @method string getAuthenticationCode2
 * @method self withAuthenticationCode2(string $authenticationCode2)
 */
class BindMFADevice extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method bool getPasswordResetRequired
 * @method self withPasswordResetRequired(bool $passwordResetRequired)
 * @method bool getMFABindRequired
 * @method self withMFABindRequired(bool $mFABindRequired)
 */
class UpdateLoginProfile extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 */
class GetLoginProfile extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 */
class DeleteLoginProfile extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getPassword
 * @method self withPassword(string $password)
 * @method bool getPasswordResetRequired
 * @method self withPasswordResetRequired(bool $passwordResetRequired)
 * @method bool getMFABindRequired
 * @method self withMFABindRequired(bool $mFABindRequired)
 */
class CreateLoginProfile extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getNewUserName
 * @method self withNewUserName(string $newUserName)
 * @method string getNewDisplayName
 * @method self withNewDisplayName(string $newDisplayName)
 * @method string getNewMobilePhone
 * @method self withNewMobilePhone(string $newMobilePhone)
 * @method string getNewEmail
 * @method self withNewEmail(string $newEmail)
 * @method string getNewComments
 * @method self withNewComments(string $newComments)
 */
class UpdateUser extends Roa
{
    use R;
}

/**
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxItems
 * @method self withMaxItems(Integer $maxItems)
 */
class ListUsers extends Roa
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
 */
class DeleteUser extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getDisplayName
 * @method self withDisplayName(string $displayName)
 * @method string getMobilePhone
 * @method self withMobilePhone(string $mobilePhone)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getComments
 * @method self withComments(string $comments)
 */
class CreateUser extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getUserAccessKeyId
 * @method self withUserAccessKeyId(string $userAccessKeyId)
 * @method string getStatus
 * @method self withStatus(string $status)
 */
class UpdateAccessKey extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 */
class ListAccessKeys extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getUserAccessKeyId
 * @method self withUserAccessKeyId(string $userAccessKeyId)
 */
class DeleteAccessKey extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 */
class CreateAccessKey extends Roa
{
    use R;
}

/**
 * @method string getAccountId
 * @method self withAccountId(string $accountId)
 */
class GetServiceStatus extends Roa
{
    use R;
}

/**
 * @method string getAccountId
 * @method self withAccountId(string $accountId)
 */
class DeactivateService extends Roa
{
    use R;
}

/**
 * @method string getAccountId
 * @method self withAccountId(string $accountId)
 */
class ActivateService extends Roa
{
    use R;
}

/**
 * @method Integer getMinimumPasswordLength
 * @method self withMinimumPasswordLength(Integer $minimumPasswordLength)
 * @method bool getRequireLowercaseCharacters
 * @method self withRequireLowercaseCharacters(bool $requireLowercaseCharacters)
 * @method bool getRequireUppercaseCharacters
 * @method self withRequireUppercaseCharacters(bool $requireUppercaseCharacters)
 * @method bool getRequireNumbers
 * @method self withRequireNumbers(bool $requireNumbers)
 * @method bool getRequireSymbols
 * @method self withRequireSymbols(bool $requireSymbols)
 * @method bool getHardExpiry
 * @method self withHardExpiry(bool $hardExpiry)
 * @method Integer getMaxPasswordAge
 * @method self withMaxPasswordAge(Integer $maxPasswordAge)
 * @method Integer getPasswordReusePrevention
 * @method self withPasswordReusePrevention(Integer $passwordReusePrevention)
 * @method Integer getMaxLoginAttemps
 * @method self withMaxLoginAttemps(Integer $maxLoginAttemps)
 */
class SetPasswordPolicy extends Roa
{
    use R;
}

/**
 * @method string getAccountAlias
 * @method self withAccountAlias(string $accountAlias)
 */
class SetAccountAlias extends Roa
{
    use R;
}

class GetPasswordPolicy extends Roa
{
    use R;
}

class GetAccountAlias extends Roa
{
    use R;
}

class ClearAccountAlias extends Roa
{
    use R;
}

/**
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 * @method string getVersionId
 * @method self withVersionId(string $versionId)
 */
class SetDefaultPolicyVersion extends Roa
{
    use R;
}

/**
 * @method string getPolicyType
 * @method self withPolicyType(string $policyType)
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 */
class ListPolicyVersions extends Roa
{
    use R;
}

/**
 * @method string getPolicyType
 * @method self withPolicyType(string $policyType)
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 * @method string getVersionId
 * @method self withVersionId(string $versionId)
 */
class GetPolicyVersion extends Roa
{
    use R;
}

/**
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 * @method string getVersionId
 * @method self withVersionId(string $versionId)
 */
class DeletePolicyVersion extends Roa
{
    use R;
}

/**
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 * @method string getPolicyDocument
 * @method self withPolicyDocument(string $policyDocument)
 * @method bool getSetAsDefault
 * @method self withSetAsDefault(bool $setAsDefault)
 */
class CreatePolicyVersion extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 */
class ListPoliciesForUser extends Roa
{
    use R;
}

/**
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class ListPoliciesForGroup extends Roa
{
    use R;
}

/**
 * @method string getPolicyType
 * @method self withPolicyType(string $policyType)
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 */
class ListEntitiesForPolicy extends Roa
{
    use R;
}

/**
 * @method string getPolicyType
 * @method self withPolicyType(string $policyType)
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 * @method string getUserName
 * @method self withUserName(string $userName)
 */
class DetachPolicyFromUser extends Roa
{
    use R;
}

/**
 * @method string getPolicyType
 * @method self withPolicyType(string $policyType)
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class DetachPolicyFromGroup extends Roa
{
    use R;
}

/**
 * @method string getPolicyType
 * @method self withPolicyType(string $policyType)
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 * @method string getUserName
 * @method self withUserName(string $userName)
 */
class AttachPolicyToUser extends Roa
{
    use R;
}

/**
 * @method string getPolicyType
 * @method self withPolicyType(string $policyType)
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class AttachPolicyToGroup extends Roa
{
    use R;
}

/**
 * @method string getPolicyType
 * @method self withPolicyType(string $policyType)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxItems
 * @method self withMaxItems(Integer $maxItems)
 */
class ListPolicies extends Roa
{
    use R;
}

/**
 * @method string getPolicyType
 * @method self withPolicyType(string $policyType)
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 */
class GetPolicy extends Roa
{
    use R;
}

/**
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 */
class DeletePolicy extends Roa
{
    use R;
}

/**
 * @method string getPolicyName
 * @method self withPolicyName(string $policyName)
 * @method string getDescription
 * @method self withDescription(string $description)
 * @method string getPolicyDocument
 * @method self withPolicyDocument(string $policyDocument)
 */
class CreatePolicy extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class RemoveUserFromGroup extends Roa
{
    use R;
}

/**
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxItems
 * @method self withMaxItems(Integer $maxItems)
 */
class ListUsersForGroup extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 */
class ListGroupsForUser extends Roa
{
    use R;
}

/**
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class AddUserToGroup extends Roa
{
    use R;
}

/**
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getNewGroupName
 * @method self withNewGroupName(string $newGroupName)
 * @method string getNewComments
 * @method self withNewComments(string $newComments)
 */
class UpdateGroup extends Roa
{
    use R;
}

/**
 * @method string getMarker
 * @method self withMarker(string $marker)
 * @method Integer getMaxItems
 * @method self withMaxItems(Integer $maxItems)
 */
class ListGroups extends Roa
{
    use R;
}

/**
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class GetGroup extends Roa
{
    use R;
}

/**
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 */
class DeleteGroup extends Roa
{
    use R;
}

/**
 * @method string getGroupName
 * @method self withGroupName(string $groupName)
 * @method string getComments
 * @method self withComments(string $comments)
 */
class CreateGroup extends Roa
{
    use R;
}
