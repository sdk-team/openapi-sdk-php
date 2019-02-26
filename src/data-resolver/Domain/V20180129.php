<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

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
 * @method Long getEndExpirationDate
 * @method self withEndExpirationDate
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method Long getStartExpirationDate
 * @method self withStartExpirationDate
 * @method string getProductDomainType
 * @method self withProductDomainType
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Long getDomainGroupId
 * @method self withDomainGroupId
 * @method Integer getDomainStatus
 * @method self withDomainStatus
 * @method Integer getEndLength
 * @method self withEndLength
 * @method string getExcluded
 * @method self withExcluded
 * @method Boolean getExcludedPrefix
 * @method self withExcludedPrefix
 * @method Boolean getExcludedSuffix
 * @method self withExcludedSuffix
 * @method Integer getForm
 * @method self withForm
 * @method string getKeyWord
 * @method self withKeyWord
 * @method Boolean getKeyWordPrefix
 * @method self withKeyWordPrefix
 * @method Boolean getKeyWordSuffix
 * @method self withKeyWordSuffix
 * @method Integer getStartLength
 * @method self withStartLength
 * @method Integer getTradeType
 * @method self withTradeType
 * @method string getSuffixs
 * @method self withSuffixs
 * @method Long getStartRegistrationDate
 * @method self withStartRegistrationDate
 * @method Long getEndRegistrationDate
 * @method self withEndRegistrationDate
 * @method string getScrollId
 * @method self withScrollId
 */
final class ScrollDomainList extends RpcRequest
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
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class QueryDomainAdminDivision extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getQualificationType
 * @method self withQualificationType
 */
final class CancelQualificationVerification extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class GetQualificationUploadPolicy extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getQualificationType
 * @method self withQualificationType
 */
final class QueryQualificationDetail extends RpcRequest
{
}

/**
 * @method string getQualificationType
 * @method self withQualificationType
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getInstanceId
 * @method self withInstanceId
 * @method Integer getLimit
 * @method self withLimit
 */
final class QueryFailingReasonListForQualification extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 */
final class ResetQualificationVerification extends RpcRequest
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
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
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
final class SaveSingleTaskForDisassociatingEns extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method string getAddress
 * @method self withAddress
 */
final class SaveSingleTaskForAssociatingEns extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method Long getEndStartDate
 * @method self withEndStartDate
 * @method Long getBeginStartDate
 * @method self withBeginStartDate
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getLang
 * @method self withLang
 * @method string getLockProductId
 * @method self withLockProductId
 * @method Integer getServerLockStatus
 * @method self withServerLockStatus
 * @method Long getStartExpireDate
 * @method self withStartExpireDate
 * @method Long getEndExpireDate
 * @method self withEndExpireDate
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class ListServerLock extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class QueryServerLock extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getCheckAction
 * @method self withCheckAction
 */
final class CheckMaxYearOfServerLock extends RpcRequest
{
}

/**
 * @method Integer getFeePeriod
 * @method self withFeePeriod
 * @method string getDomainName
 * @method self withDomainName
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class CheckProcessingServerLockApply extends RpcRequest
{
}

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
 * @method string getLang
 * @method self withLang
 * @method string getEmail
 * @method self withEmail
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class QueryEmailVerification extends RpcRequest
{
}

/**
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getLang
 * @method self withLang
 * @method string getDnsName
 * @method self withDnsName
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
 * @method Boolean getFetchImage
 * @method self withFetchImage
 */
final class QueryDomainRealNameVerificationInfo extends RpcRequest
{
}

/**
 * @method Long getEndExpirationDate
 * @method self withEndExpirationDate
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method Long getStartExpirationDate
 * @method self withStartExpirationDate
 * @method string getProductDomainType
 * @method self withProductDomainType
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 * @method Long getDomainGroupId
 * @method self withDomainGroupId
 * @method Boolean getDomainNameSort
 * @method self withDomainNameSort
 * @method Integer getDomainStatus
 * @method self withDomainStatus
 * @method Integer getEndLength
 * @method self withEndLength
 * @method string getExcluded
 * @method self withExcluded
 * @method Boolean getExcludedPrefix
 * @method self withExcludedPrefix
 * @method Boolean getExcludedSuffix
 * @method self withExcludedSuffix
 * @method Boolean getExpirationDateSort
 * @method self withExpirationDateSort
 * @method Integer getForm
 * @method self withForm
 * @method string getKeyWord
 * @method self withKeyWord
 * @method Boolean getKeyWordPrefix
 * @method self withKeyWordPrefix
 * @method Boolean getKeyWordSuffix
 * @method self withKeyWordSuffix
 * @method Boolean getProductDomainTypeSort
 * @method self withProductDomainTypeSort
 * @method Boolean getRegistrationDateSort
 * @method self withRegistrationDateSort
 * @method Integer getStartLength
 * @method self withStartLength
 * @method Integer getTradeType
 * @method self withTradeType
 * @method string getSuffixs
 * @method self withSuffixs
 * @method Long getStartRegistrationDate
 * @method self withStartRegistrationDate
 * @method Long getEndRegistrationDate
 * @method self withEndRegistrationDate
 */
final class QueryAdvancedDomainList extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class QueryDomainSuffix extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainGroupName
 * @method self withDomainGroupName
 * @method Long getDomainGroupId
 * @method self withDomainGroupId
 */
final class SaveDomainGroup extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method Long getDomainGroupId
 * @method self withDomainGroupId
 */
final class DeleteDomainGroup extends RpcRequest
{
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getFileToUpload
 * @method self withFileToUpload
 * @method RepeatList getDomainName
 * @method self withDomainName
 * @method Long getDomainGroupId
 * @method self withDomainGroupId
 * @method Boolean getReplace
 * @method self withReplace
 * @method Integer getDataSource
 * @method self withDataSource
 */
final class UpdateDomainToDomainGroup extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getRemark
 * @method self withRemark
 * @method string getInstanceIds
 * @method self withInstanceIds
 * @method string getUserClientIp
 * @method self withUserClientIp
 */
final class SaveBatchDomainRemark extends RpcRequest
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
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
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
final class SaveSingleTaskForQueryingTransferAuthorizationCode extends RpcRequest
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
final class SaveSingleTaskForApprovingTransferOut extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getDomainGroupName
 * @method self withDomainGroupName
 * @method Boolean getShowDeletingGroup
 * @method self withShowDeletingGroup
 */
final class QueryDomainGroupList extends RpcRequest
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
final class SaveSingleTaskForSynchronizingDnsHost extends RpcRequest
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
 * @method string getProvince
 * @method self withProvince
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
 * @method string getRegistrantName
 * @method self withRegistrantName
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
 * @method string getZhRegistrantOrganization
 * @method self withZhRegistrantOrganization
 * @method string getZhRegistrantName
 * @method self withZhRegistrantName
 * @method string getZhProvince
 * @method self withZhProvince
 * @method string getZhAddress
 * @method self withZhAddress
 * @method string getZhCity
 * @method self withZhCity
 * @method string getRegistrantType
 * @method self withRegistrantType
 * @method string getDomainName
 * @method self withDomainName
 */
final class VerifyContactField extends RpcRequest
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
 * @method string getZhCity
 * @method self withZhCity
 * @method string getZhRegistrantOrganization
 * @method self withZhRegistrantOrganization
 * @method string getZhRegistrantName
 * @method self withZhRegistrantName
 * @method string getZhProvince
 * @method self withZhProvince
 * @method string getZhAddress
 * @method self withZhAddress
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
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method Long getRegistrantProfileId
 * @method self withRegistrantProfileId
 * @method string getContactType
 * @method self withContactType
 * @method Boolean getTransferOutProhibited
 * @method self withTransferOutProhibited
 * @method RepeatList getDomainName
 * @method self withDomainName
 */
final class SaveBatchTaskForUpdatingContactInfoByRegistrantProfileId extends RpcRequest
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
 * @method string getCountry
 * @method self withCountry
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
 * @method string getZhCity
 * @method self withZhCity
 * @method string getZhRegistrantOrganization
 * @method self withZhRegistrantOrganization
 * @method string getZhRegistrantName
 * @method self withZhRegistrantName
 * @method string getZhProvince
 * @method self withZhProvince
 * @method string getZhAddress
 * @method self withZhAddress
 * @method string getContactType
 * @method self withContactType
 * @method string getRegistrantType
 * @method self withRegistrantType
 * @method Boolean getTransferOutProhibited
 * @method self withTransferOutProhibited
 * @method RepeatList getDomainName
 * @method self withDomainName
 */
final class SaveBatchTaskForUpdatingContactInfoByNewContact extends RpcRequest
{
}

/**
 * @method Integer getTaskStatus
 * @method self withTaskStatus
 * @method string getLang
 * @method self withLang
 * @method string getTaskNo
 * @method self withTaskNo
 * @method string getDomainName
 * @method self withDomainName
 * @method string getInstanceId
 * @method self withInstanceId
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 */
final class QueryTaskDetailList extends RpcRequest
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
 * @method string getUserClientIp
 * @method self withUserClientIp
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
 * @method Long getEndExpirationDate
 * @method self withEndExpirationDate
 * @method Long getStartExpirationDate
 * @method self withStartExpirationDate
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method string getQueryType
 * @method self withQueryType
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
 * @method string getDomainGroupId
 * @method self withDomainGroupId
 */
final class QueryDomainList extends RpcRequest
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
final class DeleteEmailVerification extends RpcRequest
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
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method RepeatList getDomainName
 * @method self withDomainName
 * @method Boolean getStatus
 * @method self withStatus
 */
final class SaveBatchTaskForDomainNameProxyService extends RpcRequest
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
 * @method Long getRegistrantProfileId
 * @method self withRegistrantProfileId
 */
final class DeleteRegistrantProfile extends RpcRequest
{
}

/**
 * @method string getLang
 * @method self withLang
 * @method string getRegistrantOrganization
 * @method self withRegistrantOrganization
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method Long getRegistrantProfileId
 * @method self withRegistrantProfileId
 * @method Boolean getDefaultRegistrantProfile
 * @method self withDefaultRegistrantProfile
 * @method Integer getPageNum
 * @method self withPageNum
 * @method Integer getPageSize
 * @method self withPageSize
 * @method string getZhRegistrantOrganization
 * @method self withZhRegistrantOrganization
 * @method string getRegistrantType
 * @method self withRegistrantType
 * @method string getRealNameStatus
 * @method self withRealNameStatus
 * @method string getEmail
 * @method self withEmail
 * @method string getRegistrantProfileType
 * @method self withRegistrantProfileType
 */
final class QueryRegistrantProfiles extends RpcRequest
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
 * @method string getZhRegistrantName
 * @method self withZhRegistrantName
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
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getZhCity
 * @method self withZhCity
 * @method string getZhRegistrantOrganization
 * @method self withZhRegistrantOrganization
 * @method string getCountry
 * @method self withCountry
 * @method string getDns2
 * @method self withDns2
 * @method string getZhProvince
 * @method self withZhProvince
 * @method string getZhAddress
 * @method self withZhAddress
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
 */
final class SaveSingleTaskForCreatingOrderActivate extends RpcRequest
{
}

/**
 * @method Boolean getDefaultRegistrantProfile
 * @method self withDefaultRegistrantProfile
 * @method string getCountry
 * @method self withCountry
 * @method string getUserClientIp
 * @method self withUserClientIp
 * @method string getLang
 * @method self withLang
 * @method Long getRegistrantProfileId
 * @method self withRegistrantProfileId
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
 * @method string getZhRegistrantOrganization
 * @method self withZhRegistrantOrganization
 * @method string getZhRegistrantName
 * @method self withZhRegistrantName
 * @method string getZhProvince
 * @method self withZhProvince
 * @method string getZhAddress
 * @method self withZhAddress
 * @method string getZhCity
 * @method self withZhCity
 * @method string getRegistrantType
 * @method self withRegistrantType
 * @method string getRegistrantProfileType
 * @method self withRegistrantProfileType
 */
final class SaveRegistrantProfile extends RpcRequest
{
}

/**
 * @method string getDomainName
 * @method self withDomainName
 * @method string getFeeCommand
 * @method self withFeeCommand
 * @method string getFeeCurrency
 * @method self withFeeCurrency
 * @method Integer getFeePeriod
 * @method self withFeePeriod
 * @method string getLang
 * @method self withLang
 */
final class CheckDomain extends RpcRequest
{
}
