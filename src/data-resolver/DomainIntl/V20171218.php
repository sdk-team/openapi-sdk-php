<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getActionType
 * @method self withActionType
 */
final class CancelDomainVerification extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getDomainName
 * @method self withDomainName
 * @method Boolean getFetchImage
 * @method self withFetchImage
 */
final class QueryDomainRealNameVerificationInfo extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getDomainName
 * @method self withDomainName
 * @method string getRealNameVerificationAction
 * @method self withRealNameVerificationAction
 */
final class QueryFailReasonForDomainRealNameVerification extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method Long getRegistrantProfileID
 * @method self withRegistrantProfileID
 */
final class QueryFailReasonForRegistrantProfileRealNameVerification extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method Long getRegistrantProfileId
 * @method self withRegistrantProfileId
 * @method Boolean getFetchImage
 * @method self withFetchImage
 */
final class QueryRegistrantProfileRealNameVerificationInfo extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method Long getRegistrantProfileID
 * @method self withRegistrantProfileID
 * @method string getIdentityCredential
 * @method self withIdentityCredential
 * @method string getIdentityCredentialNo
 * @method self withIdentityCredentialNo
 * @method string getIdentityCredentialType
 * @method self withIdentityCredentialType
 */
final class RegistrantProfileRealNameVerification extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getIdentityCredential
 * @method self withIdentityCredential
 * @method string getIdentityCredentialNo
 * @method self withIdentityCredentialNo
 * @method string getIdentityCredentialType
 * @method self withIdentityCredentialType
 * @method RepeatList getDomainName
 * @method self withDomainName
 */
final class SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getDomainName
 * @method self withDomainName
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Long getRegistrantProfileId
 * @method self withRegistrantProfileId
 */
final class SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID extends RpcRequest
{
}

/**
 * @method string getPostalCode
 * @method self withPostalCode
 * @method string getAddress
 * @method self withAddress
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getCity
 * @method self withCity
 * @method string getRegistrantOrganization
 * @method self withRegistrantOrganization
 * @method string getRegistrantName
 * @method self withRegistrantName
 * @method string getProvince
 * @method self withProvince
 * @method string getEmail
 * @method self withEmail
 * @method string getCountry
 * @method self withCountry
 * @method string getTelArea
 * @method self withTelArea
 * @method string getTelephone
 * @method self withTelephone
 * @method string getTelExt
 * @method self withTelExt
 * @method string getRegistrantType
 * @method self withRegistrantType
 * @method RepeatList getDomainName
 * @method self withDomainName
 * @method string getIdentityCredentialType
 * @method self withIdentityCredentialType
 * @method string getIdentityCredentialNo
 * @method self withIdentityCredentialNo
 * @method string getIdentityCredential
 * @method self withIdentityCredential
 * @method Boolean getTransferOutProhibited
 * @method self withTransferOutProhibited
 */
final class SaveTaskForUpdatingRegistrantInfoByIdentityCredential extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method Long getRegistrantProfileId
 * @method self withRegistrantProfileId
 * @method RepeatList getDomainName
 * @method self withDomainName
 * @method Boolean getTransferOutProhibited
 * @method self withTransferOutProhibited
 */
final class SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class SaveSingleTaskForSynchronizingDSRecord extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method Integer getKeyTag
 * @method self withKeyTag
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Integer getAlgorithm
 * @method self withAlgorithm
 * @method Integer getDigestType
 * @method self withDigestType
 * @method string getDigest
 * @method self withDigest
 */
final class SaveSingleTaskForModifyingDSRecord extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method Integer getKeyTag
 * @method self withKeyTag
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class SaveSingleTaskForDeletingDSRecord extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method Integer getKeyTag
 * @method self withKeyTag
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Integer getAlgorithm
 * @method self withAlgorithm
 * @method Integer getDigestType
 * @method self withDigestType
 * @method string getDigest
 * @method self withDigest
 */
final class SaveSingleTaskForAddingDSRecord extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class QueryDSRecord extends RpcRequest
{
}

/**
 * @method string getKeyword
 * @method self withKeyword
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class BatchFuzzyMatchDomainSensitiveWord extends RpcRequest
{
}

/**
 * @method string getKeyword
 * @method self withKeyword
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class FuzzyMatchDomainSensitiveWord extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class CheckDomainSunriseClaim extends RpcRequest
{
}

/**
 * @method string getClaimKey
 * @method self withClaimKey
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class LookupTmchNotice extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class SaveSingleTaskForDisassociatingEns extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getAddress
 * @method self withAddress
 */
final class SaveSingleTaskForAssociatingEns extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 */
final class QueryEnsAssociation extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 */
final class QueryLocalEnsAssociation extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getLang
 * @method self withLang
 * @method string getDnsName
 * @method self withDnsName
 * @method RepeatList getIp
 * @method self withIp
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class SaveSingleTaskForDeletingDnsHost extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getDomainName
 * @method self withDomainName
 * @method string getAuthorizationCode
 * @method self withAuthorizationCode
 * @method Long getRegistrantProfileId
 * @method self withRegistrantProfileId
 * @method Boolean getPermitPremiumTransfer
 * @method self withPermitPremiumTransfer
 * @method string getCouponNo
 * @method self withCouponNo
 * @method Boolean getUseCoupon
 * @method self withUseCoupon
 * @method string getPromotionNo
 * @method self withPromotionNo
 * @method Boolean getUsePromotion
 * @method self withUsePromotion
 */
final class SaveSingleTaskForCreatingOrderTransfer extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method RepeatList getOrderTransferParam
 * @method self withOrderTransferParam
 * @method string getCouponNo
 * @method self withCouponNo
 * @method Boolean getUseCoupon
 * @method self withUseCoupon
 * @method string getPromotionNo
 * @method self withPromotionNo
 * @method Boolean getUsePromotion
 * @method self withUsePromotion
 */
final class SaveBatchTaskForCreatingOrderTransfer extends RpcRequest
{
}

/**
 * @method string getToken
 * @method self withToken
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class TransferInCheckMailToken extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class TransferInResendMailToken extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getTransferAuthorizationCode
 * @method self withTransferAuthorizationCode
 */
final class TransferInReenterTransferAuthorizationCode extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class SaveSingleTaskForCancelingTransferIn extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class QueryTransferInByInstanceId extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method Long getSubmissionStartDate
 * @method self withSubmissionStartDate
 * @method Long getSubmissionEndDate
 * @method self withSubmissionEndDate
 * @method string getDomainName
 * @method self withDomainName
 * @method string getSimpleTransferInStatus
 * @method self withSimpleTransferInStatus
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryTransferInList extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method string getTransferAuthorizationCode
 * @method self withTransferAuthorizationCode
 */
final class CheckTransferInFeasibility extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class TransferInRefetchWhoisEmail extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getEmail
 * @method self withEmail
 * @method RepeatList getDomainName
 * @method self withDomainName
 */
final class ConfirmTransferInEmail extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class QueryTransferOutInfo extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class SaveSingleTaskForApprovingTransferOut extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class SaveSingleTaskForCancelingTransferOut extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class SaveSingleTaskForQueryingTransferAuthorizationCode extends RpcRequest
{
}

/**
 * @method string getRegistrantName
 * @method self withRegistrantName
 * @method string getAddress
 * @method self withAddress
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getCity
 * @method self withCity
 * @method string getRegistrantOrganization
 * @method self withRegistrantOrganization
 * @method string getEmail
 * @method self withEmail
 * @method string getProvince
 * @method self withProvince
 * @method string getCountry
 * @method self withCountry
 * @method string getPostalCode
 * @method self withPostalCode
 * @method string getTelArea
 * @method self withTelArea
 * @method string getTelephone
 * @method self withTelephone
 * @method string getTelExt
 * @method self withTelExt
 * @method string getContactType
 * @method self withContactType
 * @method Boolean getTransferOutProhibited
 * @method self withTransferOutProhibited
 * @method RepeatList getDomainName
 * @method self withDomainName
 */
final class SaveBatchTaskForUpdatingContactInfoByNewContact extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class SaveTaskForSubmittingDomainDelete extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method RepeatList getTaskDetailNo
 * @method self withTaskDetailNo
 */
final class AcknowledgeTaskResult extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getTaskNo
 * @method self withTaskNo
 * @method string getDomainName
 * @method self withDomainName
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getTaskResultStatus
 * @method self withTaskResultStatus
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class PollTaskResult extends RpcRequest
{
}

/**
 * @method string getRegistrantName
 * @method self withRegistrantName
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getCity
 * @method self withCity
 * @method string getRegistrantOrganization
 * @method self withRegistrantOrganization
 * @method string getCountry
 * @method self withCountry
 * @method string getProvince
 * @method self withProvince
 * @method string getAddress
 * @method self withAddress
 * @method string getEmail
 * @method self withEmail
 * @method string getPostalCode
 * @method self withPostalCode
 * @method string getTelArea
 * @method self withTelArea
 * @method string getTelephone
 * @method self withTelephone
 * @method string getTelExt
 * @method self withTelExt
 * @method string getDomainName
 * @method self withDomainName
 * @method string getRegistrantType
 * @method self withRegistrantType
 */
final class VerifyContactField extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method Long getBeginCreateTime
 * @method self withBeginCreateTime
 * @method Long getEndCreateTime
 * @method self withEndCreateTime
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Long getCreateTimeCursor
 * @method self withCreateTimeCursor
 * @method string getTaskNoCursor
 * @method self withTaskNoCursor
 */
final class QueryTaskInfoHistory extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getTaskNo
 * @method self withTaskNo
 * @method string getDomainName
 * @method self withDomainName
 * @method string getDomainNameCursor
 * @method self withDomainNameCursor
 * @method Integer getTaskStatus
 * @method self withTaskStatus
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getTaskDetailNoCursor
 * @method self withTaskDetailNoCursor
 */
final class QueryTaskDetailHistory extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method RepeatList getOrderRenewParam
 * @method self withOrderRenewParam
 * @method string getCouponNo
 * @method self withCouponNo
 * @method Boolean getUseCoupon
 * @method self withUseCoupon
 * @method string getPromotionNo
 * @method self withPromotionNo
 * @method Boolean getUsePromotion
 * @method self withUsePromotion
 */
final class SaveBatchTaskForCreatingOrderRenew extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getDomainName
 * @method self withDomainName
 * @method Integer getSubscriptionDuration
 * @method self withSubscriptionDuration
 * @method Long getCurrentExpirationDate
 * @method self withCurrentExpirationDate
 * @method string getCouponNo
 * @method self withCouponNo
 * @method Boolean getUseCoupon
 * @method self withUseCoupon
 * @method string getPromotionNo
 * @method self withPromotionNo
 * @method Boolean getUsePromotion
 * @method self withUsePromotion
 */
final class SaveSingleTaskForCreatingOrderRenew extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getInstanceId
 * @method self withInstanceId
 */
final class QueryDomainByInstanceId extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getDomainName
 * @method self withDomainName
 * @method string getContactType
 * @method self withContactType
 */
final class QueryContactInfo extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getRegistrantOrganization
 * @method self withRegistrantOrganization
 * @method Long getRegistrantProfileId
 * @method self withRegistrantProfileId
 * @method Boolean getDefaultRegistrantProfile
 * @method self withDefaultRegistrantProfile
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getEmail
 * @method self withEmail
 * @method string getRegistrantProfileType
 * @method self withRegistrantProfileType
 * @method string getRegistrantType
 * @method self withRegistrantType
 * @method string getRealNameStatus
 * @method self withRealNameStatus
 */
final class QueryRegistrantProfiles extends RpcRequest
{
}

/**
 * @method string getCountry
 * @method self withCountry
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method Long getRegistrantProfileId
 * @method self withRegistrantProfileId
 * @method Boolean getDefaultRegistrantProfile
 * @method self withDefaultRegistrantProfile
 * @method string getCity
 * @method self withCity
 * @method string getRegistrantOrganization
 * @method self withRegistrantOrganization
 * @method string getRegistrantName
 * @method self withRegistrantName
 * @method string getProvince
 * @method self withProvince
 * @method string getAddress
 * @method self withAddress
 * @method string getEmail
 * @method self withEmail
 * @method string getPostalCode
 * @method self withPostalCode
 * @method string getTelArea
 * @method self withTelArea
 * @method string getTelephone
 * @method self withTelephone
 * @method string getTelExt
 * @method self withTelExt
 * @method string getRegistrantType
 * @method self withRegistrantType
 * @method string getRegistrantProfileType
 * @method self withRegistrantProfileType
 */
final class SaveRegistrantProfile extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method Long getRegistrantProfileId
 * @method self withRegistrantProfileId
 */
final class DeleteRegistrantProfile extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method Long getBeginCreateTime
 * @method self withBeginCreateTime
 * @method Long getEndCreateTime
 * @method self withEndCreateTime
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryTaskList extends RpcRequest
{
}

/**
 * @method Integer getTaskStatus
 * @method self withTaskStatus
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getTaskNo
 * @method self withTaskNo
 * @method string getDomainName
 * @method self withDomainName
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryTaskDetailList extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method RepeatList getDomainName
 * @method self withDomainName
 * @method Boolean getAliyunDns
 * @method self withAliyunDns
 * @method RepeatList getDomainNameServer
 * @method self withDomainNameServer
 */
final class SaveBatchTaskForModifyingDomainDns extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method Long getBeginCreateTime
 * @method self withBeginCreateTime
 * @method Long getEndCreateTime
 * @method self withEndCreateTime
 * @method string getEmail
 * @method self withEmail
 * @method Integer getVerificationStatus
 * @method self withVerificationStatus
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class ListEmailVerification extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getEmail
 * @method self withEmail
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class DeleteEmailVerification extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getEmail
 * @method self withEmail
 * @method Boolean getSendIfExist
 * @method self withSendIfExist
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class SubmitEmailVerification extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getEmail
 * @method self withEmail
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class ResendEmailVerification extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getToken
 * @method self withToken
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class VerifyEmail extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getEmail
 * @method self withEmail
 */
final class EmailVerified extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getLang
 * @method self withLang
 * @method string getDnsName
 * @method self withDnsName
 * @method RepeatList getIp
 * @method self withIp
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class SaveSingleTaskForCreatingDnsHost extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getLang
 * @method self withLang
 * @method string getDnsName
 * @method self withDnsName
 * @method RepeatList getIp
 * @method self withIp
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class SaveSingleTaskForModifyingDnsHost extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class QueryDnsHost extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class SaveSingleTaskForSynchronizingDnsHost extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method RepeatList getOrderRedeemParam
 * @method self withOrderRedeemParam
 * @method string getCouponNo
 * @method self withCouponNo
 * @method Boolean getUseCoupon
 * @method self withUseCoupon
 * @method string getPromotionNo
 * @method self withPromotionNo
 * @method Boolean getUsePromotion
 * @method self withUsePromotion
 */
final class SaveBatchTaskForCreatingOrderRedeem extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getDomainName
 * @method self withDomainName
 * @method Long getCurrentExpirationDate
 * @method self withCurrentExpirationDate
 * @method string getCouponNo
 * @method self withCouponNo
 * @method Boolean getUseCoupon
 * @method self withUseCoupon
 * @method string getPromotionNo
 * @method self withPromotionNo
 * @method Boolean getUsePromotion
 * @method self withUsePromotion
 */
final class SaveSingleTaskForCreatingOrderRedeem extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method RepeatList getDomainName
 * @method self withDomainName
 * @method Boolean getstatus
 * @method self withstatus
 */
final class SaveBatchTaskForDomainNameProxyService extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getFeeCommand
 * @method self withFeeCommand
 * @method string getFeeCurrency
 * @method self withFeeCurrency
 * @method Integer getFeePeriod
 * @method self withFeePeriod
 */
final class CheckDomain extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method RepeatList getDomainName
 * @method self withDomainName
 * @method Boolean getStatus
 * @method self withStatus
 */
final class SaveBatchTaskForTransferProhibitionLock extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getDomainName
 * @method self withDomainName
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Long getStartDate
 * @method self withStartDate
 * @method Long getEndDate
 * @method self withEndDate
 */
final class QueryChangeLogList extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method RepeatList getDomainName
 * @method self withDomainName
 * @method Boolean getStatus
 * @method self withStatus
 */
final class SaveBatchTaskForUpdateProhibitionLock extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getDomainName
 * @method self withDomainName
 * @method Boolean getStatus
 * @method self withStatus
 */
final class SaveSingleTaskForDomainNameProxyService extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getDomainName
 * @method self withDomainName
 * @method Boolean getStatus
 * @method self withStatus
 */
final class SaveSingleTaskForTransferProhibitionLock extends RpcRequest
{
}

/**
 * @method Long getStartExpirationDate
 * @method self withStartExpirationDate
 * @method string getQueryType
 * @method self withQueryType
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method Long getEndExpirationDate
 * @method self withEndExpirationDate
 * @method Long getStartRegistrationDate
 * @method self withStartRegistrationDate
 * @method Long getEndRegistrationDate
 * @method self withEndRegistrationDate
 * @method string getDomainName
 * @method self withDomainName
 * @method string getOrderByType
 * @method self withOrderByType
 * @method string getOrderKeyType
 * @method self withOrderKeyType
 * @method string getProductDomainType
 * @method self withProductDomainType
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryDomainList extends RpcRequest
{
}

/**
 * @method RepeatList getOrderActivateParam
 * @method self withOrderActivateParam
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getCouponNo
 * @method self withCouponNo
 * @method Boolean getUseCoupon
 * @method self withUseCoupon
 * @method string getPromotionNo
 * @method self withPromotionNo
 * @method Boolean getUsePromotion
 * @method self withUsePromotion
 */
final class SaveBatchTaskForCreatingOrderActivate extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getDomainName
 * @method self withDomainName
 * @method Boolean getStatus
 * @method self withStatus
 */
final class SaveSingleTaskForUpdateProhibitionLock extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getDomainName
 * @method self withDomainName
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Long getRegistrantProfileId
 * @method self withRegistrantProfileId
 * @method string getContactType
 * @method self withContactType
 * @method Boolean getAddTransferLock
 * @method self withAddTransferLock
 */
final class SaveSingleTaskForUpdatingContactInfo extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method Long getRegistrantProfileId
 * @method self withRegistrantProfileId
 * @method string getContactType
 * @method self withContactType
 * @method Boolean getAddTransferLock
 * @method self withAddTransferLock
 * @method RepeatList getDomainName
 * @method self withDomainName
 */
final class SaveBatchTaskForUpdatingContactInfo extends RpcRequest
{
}

/**
 * @method string getCountry
 * @method self withCountry
 * @method string getDns2
 * @method self withDns2
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getDomainName
 * @method self withDomainName
 * @method Integer getSubscriptionDuration
 * @method self withSubscriptionDuration
 * @method Long getRegistrantProfileId
 * @method self withRegistrantProfileId
 * @method Boolean getEnableDomainProxy
 * @method self withEnableDomainProxy
 * @method Boolean getPermitPremiumActivation
 * @method self withPermitPremiumActivation
 * @method Boolean getAliyunDns
 * @method self withAliyunDns
 * @method string getDns1
 * @method self withDns1
 * @method string getCity
 * @method self withCity
 * @method string getRegistrantOrganization
 * @method self withRegistrantOrganization
 * @method string getRegistrantName
 * @method self withRegistrantName
 * @method string getProvince
 * @method self withProvince
 * @method string getAddress
 * @method self withAddress
 * @method string getEmail
 * @method self withEmail
 * @method string getPostalCode
 * @method self withPostalCode
 * @method string getTelArea
 * @method self withTelArea
 * @method string getTelephone
 * @method self withTelephone
 * @method string getTelExt
 * @method self withTelExt
 * @method Boolean getTrademarkDomainActivation
 * @method self withTrademarkDomainActivation
 * @method string getCouponNo
 * @method self withCouponNo
 * @method Boolean getUseCoupon
 * @method self withUseCoupon
 * @method string getPromotionNo
 * @method self withPromotionNo
 * @method Boolean getUsePromotion
 * @method self withUsePromotion
 * @method string getRegistrantType
 * @method self withRegistrantType
 */
final class SaveSingleTaskForCreatingOrderActivate extends RpcRequest
{
}
