<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getUserName
 * @method self withUserName
 * @method string getUserAccessKeyId
 * @method self withUserAccessKeyId
 */
final class GetAccessKeyLastUsed extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 * @method string getPublicKeySpec
 * @method self withPublicKeySpec
 */
final class UploadPublicKey extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 * @method string getUserPublicKeyId
 * @method self withUserPublicKeyId
 * @method string getStatus
 * @method self withStatus
 */
final class UpdatePublicKey extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 */
final class ListPublicKeys extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 * @method string getUserPublicKeyId
 * @method self withUserPublicKeyId
 */
final class DeletePublicKey extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 * @method string getUserPublicKeyId
 * @method self withUserPublicKeyId
 */
final class GetPublicKey extends RpcRequest
{
}

/**
 * @method string getOldPassword
 * @method self withOldPassword
 * @method string getNewPassword
 * @method self withNewPassword
 */
final class ChangePassword extends RpcRequest
{
}

/**
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxItems
 * @method self withMaxItems
 * @method string getService
 * @method self withService
 */
final class ListRolesForService extends RpcRequest
{
}

/**
 * @method string getRoleName
 * @method self withRoleName
 * @method string getNewAssumeRolePolicyDocument
 * @method self withNewAssumeRolePolicyDocument
 */
final class UpdateRole extends RpcRequest
{
}

/**
 * @method Boolean getEnableSaveMFATicket
 * @method self withEnableSaveMFATicket
 * @method Boolean getAllowUserToChangePassword
 * @method self withAllowUserToChangePassword
 * @method Boolean getAllowUserToManageAccessKeys
 * @method self withAllowUserToManageAccessKeys
 * @method Boolean getAllowUserToManagePublicKeys
 * @method self withAllowUserToManagePublicKeys
 * @method Boolean getAllowUserToManageMFADevices
 * @method self withAllowUserToManageMFADevices
 * @method Integer getLoginSessionDuration
 * @method self withLoginSessionDuration
 * @method string getLoginNetworkMasks
 * @method self withLoginNetworkMasks
 */
final class SetSecurityPreference extends RpcRequest
{
}

/**
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxItems
 * @method self withMaxItems
 */
final class ListRoles extends RpcRequest
{
}

/**
 * @method string getRoleName
 * @method self withRoleName
 */
final class ListPoliciesForRole extends RpcRequest
{
}

final class GetSecurityPreference extends RpcRequest
{
}

/**
 * @method string getRoleName
 * @method self withRoleName
 */
final class GetRole extends RpcRequest
{
}

final class GetAccountSummary extends RpcRequest
{
}

/**
 * @method string getPolicyType
 * @method self withPolicyType
 * @method string getPolicyName
 * @method self withPolicyName
 * @method string getRoleName
 * @method self withRoleName
 */
final class DetachPolicyFromRole extends RpcRequest
{
}

/**
 * @method string getRoleName
 * @method self withRoleName
 */
final class DeleteRole extends RpcRequest
{
}

/**
 * @method string getRoleName
 * @method self withRoleName
 * @method string getDescription
 * @method self withDescription
 * @method string getAssumeRolePolicyDocument
 * @method self withAssumeRolePolicyDocument
 */
final class CreateRole extends RpcRequest
{
}

/**
 * @method string getPolicyType
 * @method self withPolicyType
 * @method string getPolicyName
 * @method self withPolicyName
 * @method string getRoleName
 * @method self withRoleName
 */
final class AttachPolicyToRole extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 */
final class UnbindMFADevice extends RpcRequest
{
}

final class ListVirtualMFADevices extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 */
final class GetUserMFAInfo extends RpcRequest
{
}

/**
 * @method string getSerialNumber
 * @method self withSerialNumber
 */
final class DeleteVirtualMFADevice extends RpcRequest
{
}

/**
 * @method string getVirtualMFADeviceName
 * @method self withVirtualMFADeviceName
 */
final class CreateVirtualMFADevice extends RpcRequest
{
}

/**
 * @method string getSerialNumber
 * @method self withSerialNumber
 * @method string getUserName
 * @method self withUserName
 * @method string getAuthenticationCode1
 * @method self withAuthenticationCode1
 * @method string getAuthenticationCode2
 * @method self withAuthenticationCode2
 */
final class BindMFADevice extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 * @method string getPassword
 * @method self withPassword
 * @method Boolean getPasswordResetRequired
 * @method self withPasswordResetRequired
 * @method Boolean getMFABindRequired
 * @method self withMFABindRequired
 */
final class UpdateLoginProfile extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 */
final class GetLoginProfile extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 */
final class DeleteLoginProfile extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 * @method string getPassword
 * @method self withPassword
 * @method Boolean getPasswordResetRequired
 * @method self withPasswordResetRequired
 * @method Boolean getMFABindRequired
 * @method self withMFABindRequired
 */
final class CreateLoginProfile extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 * @method string getNewUserName
 * @method self withNewUserName
 * @method string getNewDisplayName
 * @method self withNewDisplayName
 * @method string getNewMobilePhone
 * @method self withNewMobilePhone
 * @method string getNewEmail
 * @method self withNewEmail
 * @method string getNewComments
 * @method self withNewComments
 */
final class UpdateUser extends RpcRequest
{
}

/**
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxItems
 * @method self withMaxItems
 */
final class ListUsers extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 */
final class GetUser extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 */
final class DeleteUser extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 * @method string getDisplayName
 * @method self withDisplayName
 * @method string getMobilePhone
 * @method self withMobilePhone
 * @method string getEmail
 * @method self withEmail
 * @method string getComments
 * @method self withComments
 */
final class CreateUser extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 * @method string getUserAccessKeyId
 * @method self withUserAccessKeyId
 * @method string getStatus
 * @method self withStatus
 */
final class UpdateAccessKey extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 */
final class ListAccessKeys extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 * @method string getUserAccessKeyId
 * @method self withUserAccessKeyId
 */
final class DeleteAccessKey extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 */
final class CreateAccessKey extends RpcRequest
{
}

/**
 * @method string getAccountId
 * @method self withAccountId
 */
final class GetServiceStatus extends RpcRequest
{
}

/**
 * @method string getAccountId
 * @method self withAccountId
 */
final class DeactivateService extends RpcRequest
{
}

/**
 * @method string getAccountId
 * @method self withAccountId
 */
final class ActivateService extends RpcRequest
{
}

/**
 * @method Integer getMinimumPasswordLength
 * @method self withMinimumPasswordLength
 * @method Boolean getRequireLowercaseCharacters
 * @method self withRequireLowercaseCharacters
 * @method Boolean getRequireUppercaseCharacters
 * @method self withRequireUppercaseCharacters
 * @method Boolean getRequireNumbers
 * @method self withRequireNumbers
 * @method Boolean getRequireSymbols
 * @method self withRequireSymbols
 * @method Boolean getHardExpiry
 * @method self withHardExpiry
 * @method Integer getMaxPasswordAge
 * @method self withMaxPasswordAge
 * @method Integer getPasswordReusePrevention
 * @method self withPasswordReusePrevention
 * @method Integer getMaxLoginAttemps
 * @method self withMaxLoginAttemps
 */
final class SetPasswordPolicy extends RpcRequest
{
}

/**
 * @method string getAccountAlias
 * @method self withAccountAlias
 */
final class SetAccountAlias extends RpcRequest
{
}

final class GetPasswordPolicy extends RpcRequest
{
}

final class GetAccountAlias extends RpcRequest
{
}

final class ClearAccountAlias extends RpcRequest
{
}

/**
 * @method string getPolicyName
 * @method self withPolicyName
 * @method string getVersionId
 * @method self withVersionId
 */
final class SetDefaultPolicyVersion extends RpcRequest
{
}

/**
 * @method string getPolicyType
 * @method self withPolicyType
 * @method string getPolicyName
 * @method self withPolicyName
 */
final class ListPolicyVersions extends RpcRequest
{
}

/**
 * @method string getPolicyType
 * @method self withPolicyType
 * @method string getPolicyName
 * @method self withPolicyName
 * @method string getVersionId
 * @method self withVersionId
 */
final class GetPolicyVersion extends RpcRequest
{
}

/**
 * @method string getPolicyName
 * @method self withPolicyName
 * @method string getVersionId
 * @method self withVersionId
 */
final class DeletePolicyVersion extends RpcRequest
{
}

/**
 * @method string getPolicyName
 * @method self withPolicyName
 * @method string getPolicyDocument
 * @method self withPolicyDocument
 * @method Boolean getSetAsDefault
 * @method self withSetAsDefault
 */
final class CreatePolicyVersion extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 */
final class ListPoliciesForUser extends RpcRequest
{
}

/**
 * @method string getGroupName
 * @method self withGroupName
 */
final class ListPoliciesForGroup extends RpcRequest
{
}

/**
 * @method string getPolicyType
 * @method self withPolicyType
 * @method string getPolicyName
 * @method self withPolicyName
 */
final class ListEntitiesForPolicy extends RpcRequest
{
}

/**
 * @method string getPolicyType
 * @method self withPolicyType
 * @method string getPolicyName
 * @method self withPolicyName
 * @method string getUserName
 * @method self withUserName
 */
final class DetachPolicyFromUser extends RpcRequest
{
}

/**
 * @method string getPolicyType
 * @method self withPolicyType
 * @method string getPolicyName
 * @method self withPolicyName
 * @method string getGroupName
 * @method self withGroupName
 */
final class DetachPolicyFromGroup extends RpcRequest
{
}

/**
 * @method string getPolicyType
 * @method self withPolicyType
 * @method string getPolicyName
 * @method self withPolicyName
 * @method string getUserName
 * @method self withUserName
 */
final class AttachPolicyToUser extends RpcRequest
{
}

/**
 * @method string getPolicyType
 * @method self withPolicyType
 * @method string getPolicyName
 * @method self withPolicyName
 * @method string getGroupName
 * @method self withGroupName
 */
final class AttachPolicyToGroup extends RpcRequest
{
}

/**
 * @method string getPolicyType
 * @method self withPolicyType
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxItems
 * @method self withMaxItems
 */
final class ListPolicies extends RpcRequest
{
}

/**
 * @method string getPolicyType
 * @method self withPolicyType
 * @method string getPolicyName
 * @method self withPolicyName
 */
final class GetPolicy extends RpcRequest
{
}

/**
 * @method string getPolicyName
 * @method self withPolicyName
 */
final class DeletePolicy extends RpcRequest
{
}

/**
 * @method string getPolicyName
 * @method self withPolicyName
 * @method string getDescription
 * @method self withDescription
 * @method string getPolicyDocument
 * @method self withPolicyDocument
 */
final class CreatePolicy extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 * @method string getGroupName
 * @method self withGroupName
 */
final class RemoveUserFromGroup extends RpcRequest
{
}

/**
 * @method string getGroupName
 * @method self withGroupName
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxItems
 * @method self withMaxItems
 */
final class ListUsersForGroup extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 */
final class ListGroupsForUser extends RpcRequest
{
}

/**
 * @method string getUserName
 * @method self withUserName
 * @method string getGroupName
 * @method self withGroupName
 */
final class AddUserToGroup extends RpcRequest
{
}

/**
 * @method string getGroupName
 * @method self withGroupName
 * @method string getNewGroupName
 * @method self withNewGroupName
 * @method string getNewComments
 * @method self withNewComments
 */
final class UpdateGroup extends RpcRequest
{
}

/**
 * @method string getMarker
 * @method self withMarker
 * @method Integer getMaxItems
 * @method self withMaxItems
 */
final class ListGroups extends RpcRequest
{
}

/**
 * @method string getGroupName
 * @method self withGroupName
 */
final class GetGroup extends RpcRequest
{
}

/**
 * @method string getGroupName
 * @method self withGroupName
 */
final class DeleteGroup extends RpcRequest
{
}

/**
 * @method string getGroupName
 * @method self withGroupName
 * @method string getComments
 * @method self withComments
 */
final class CreateGroup extends RpcRequest
{
}
