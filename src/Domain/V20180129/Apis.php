<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SaveSingleTaskForSynchronizingDSRecord saveSingleTaskForSynchronizingDSRecord($options = [])
 * @method SaveSingleTaskForDeletingDSRecord saveSingleTaskForDeletingDSRecord($options = [])
 * @method SaveSingleTaskForModifyingDSRecord saveSingleTaskForModifyingDSRecord($options = [])
 * @method SaveSingleTaskForAddingDSRecord saveSingleTaskForAddingDSRecord($options = [])
 * @method QueryDSRecord queryDSRecord($options = [])
 * @method ScrollDomainList scrollDomainList($options = [])
 * @method FuzzyMatchDomainSensitiveWord fuzzyMatchDomainSensitiveWord($options = [])
 * @method BatchFuzzyMatchDomainSensitiveWord batchFuzzyMatchDomainSensitiveWord($options = [])
 * @method CheckDomainSunriseClaim checkDomainSunriseClaim($options = [])
 * @method LookupTmchNotice lookupTmchNotice($options = [])
 * @method QueryDomainAdminDivision queryDomainAdminDivision($options = [])
 * @method CancelQualificationVerification cancelQualificationVerification($options = [])
 * @method GetQualificationUploadPolicy getQualificationUploadPolicy($options = [])
 * @method QueryQualificationDetail queryQualificationDetail($options = [])
 * @method QueryFailingReasonListForQualification queryFailingReasonListForQualification($options = [])
 * @method ResetQualificationVerification resetQualificationVerification($options = [])
 * @method QueryLocalEnsAssociation queryLocalEnsAssociation($options = [])
 * @method QueryEnsAssociation queryEnsAssociation($options = [])
 * @method SaveSingleTaskForDisassociatingEns saveSingleTaskForDisassociatingEns($options = [])
 * @method SaveSingleTaskForAssociatingEns saveSingleTaskForAssociatingEns($options = [])
 * @method ListServerLock listServerLock($options = [])
 * @method QueryServerLock queryServerLock($options = [])
 * @method CheckMaxYearOfServerLock checkMaxYearOfServerLock($options = [])
 * @method CheckProcessingServerLockApply checkProcessingServerLockApply($options = [])
 * @method CancelDomainVerification cancelDomainVerification($options = [])
 * @method QueryEmailVerification queryEmailVerification($options = [])
 * @method SaveSingleTaskForDeletingDnsHost saveSingleTaskForDeletingDnsHost($options = [])
 * @method QueryDomainRealNameVerificationInfo queryDomainRealNameVerificationInfo($options = [])
 * @method QueryAdvancedDomainList queryAdvancedDomainList($options = [])
 * @method QueryDomainSuffix queryDomainSuffix($options = [])
 * @method SaveDomainGroup saveDomainGroup($options = [])
 * @method DeleteDomainGroup deleteDomainGroup($options = [])
 * @method UpdateDomainToDomainGroup updateDomainToDomainGroup($options = [])
 * @method SaveBatchDomainRemark saveBatchDomainRemark($options = [])
 * @method SaveBatchTaskForCreatingOrderTransfer saveBatchTaskForCreatingOrderTransfer($options = [])
 * @method SaveSingleTaskForCreatingOrderTransfer saveSingleTaskForCreatingOrderTransfer($options = [])
 * @method TransferInCheckMailToken transferInCheckMailToken($options = [])
 * @method TransferInResendMailToken transferInResendMailToken($options = [])
 * @method TransferInReenterTransferAuthorizationCode transferInReenterTransferAuthorizationCode($options = [])
 * @method SaveSingleTaskForCancelingTransferIn saveSingleTaskForCancelingTransferIn($options = [])
 * @method QueryTransferInByInstanceId queryTransferInByInstanceId($options = [])
 * @method QueryTransferInList queryTransferInList($options = [])
 * @method CheckTransferInFeasibility checkTransferInFeasibility($options = [])
 * @method TransferInRefetchWhoisEmail transferInRefetchWhoisEmail($options = [])
 * @method ConfirmTransferInEmail confirmTransferInEmail($options = [])
 * @method QueryRegistrantProfileRealNameVerificationInfo queryRegistrantProfileRealNameVerificationInfo($options = [])
 * @method QueryTransferOutInfo queryTransferOutInfo($options = [])
 * @method SaveSingleTaskForQueryingTransferAuthorizationCode saveSingleTaskForQueryingTransferAuthorizationCode($options = [])
 * @method SaveSingleTaskForCancelingTransferOut saveSingleTaskForCancelingTransferOut($options = [])
 * @method SaveSingleTaskForApprovingTransferOut saveSingleTaskForApprovingTransferOut($options = [])
 * @method QueryDomainGroupList queryDomainGroupList($options = [])
 * @method PollTaskResult pollTaskResult($options = [])
 * @method AcknowledgeTaskResult acknowledgeTaskResult($options = [])
 * @method SaveSingleTaskForCreatingOrderRedeem saveSingleTaskForCreatingOrderRedeem($options = [])
 * @method SaveBatchTaskForCreatingOrderRedeem saveBatchTaskForCreatingOrderRedeem($options = [])
 * @method SaveSingleTaskForCreatingDnsHost saveSingleTaskForCreatingDnsHost($options = [])
 * @method SaveSingleTaskForDomainNameProxyService saveSingleTaskForDomainNameProxyService($options = [])
 * @method SaveSingleTaskForModifyingDnsHost saveSingleTaskForModifyingDnsHost($options = [])
 * @method SaveSingleTaskForSynchronizingDnsHost saveSingleTaskForSynchronizingDnsHost($options = [])
 * @method SaveSingleTaskForTransferProhibitionLock saveSingleTaskForTransferProhibitionLock($options = [])
 * @method SaveSingleTaskForUpdateProhibitionLock saveSingleTaskForUpdateProhibitionLock($options = [])
 * @method SaveSingleTaskForUpdatingContactInfo saveSingleTaskForUpdatingContactInfo($options = [])
 * @method QueryDnsHost queryDnsHost($options = [])
 * @method VerifyContactField verifyContactField($options = [])
 * @method SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential saveTaskForSubmittingDomainRealNameVerificationByIdentityCredential($options = [])
 * @method RegistrantProfileRealNameVerification registrantProfileRealNameVerification($options = [])
 * @method QueryFailReasonForDomainRealNameVerification queryFailReasonForDomainRealNameVerification($options = [])
 * @method QueryFailReasonForRegistrantProfileRealNameVerification queryFailReasonForRegistrantProfileRealNameVerification($options = [])
 * @method SaveTaskForSubmittingDomainDelete saveTaskForSubmittingDomainDelete($options = [])
 * @method SaveTaskForUpdatingRegistrantInfoByIdentityCredential saveTaskForUpdatingRegistrantInfoByIdentityCredential($options = [])
 * @method EmailVerified emailVerified($options = [])
 * @method SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID saveTaskForUpdatingRegistrantInfoByRegistrantProfileID($options = [])
 * @method SaveBatchTaskForUpdatingContactInfoByRegistrantProfileId saveBatchTaskForUpdatingContactInfoByRegistrantProfileId($options = [])
 * @method SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID saveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID($options = [])
 * @method SaveBatchTaskForUpdatingContactInfoByNewContact saveBatchTaskForUpdatingContactInfoByNewContact($options = [])
 * @method QueryTaskDetailList queryTaskDetailList($options = [])
 * @method VerifyEmail verifyEmail($options = [])
 * @method QueryTaskInfoHistory queryTaskInfoHistory($options = [])
 * @method ListEmailVerification listEmailVerification($options = [])
 * @method QueryTaskDetailHistory queryTaskDetailHistory($options = [])
 * @method QueryTaskList queryTaskList($options = [])
 * @method QueryDomainByInstanceId queryDomainByInstanceId($options = [])
 * @method QueryDomainList queryDomainList($options = [])
 * @method QueryChangeLogList queryChangeLogList($options = [])
 * @method SubmitEmailVerification submitEmailVerification($options = [])
 * @method DeleteEmailVerification deleteEmailVerification($options = [])
 * @method ResendEmailVerification resendEmailVerification($options = [])
 * @method SaveBatchTaskForCreatingOrderRenew saveBatchTaskForCreatingOrderRenew($options = [])
 * @method SaveSingleTaskForCreatingOrderRenew saveSingleTaskForCreatingOrderRenew($options = [])
 * @method SaveBatchTaskForModifyingDomainDns saveBatchTaskForModifyingDomainDns($options = [])
 * @method SaveBatchTaskForDomainNameProxyService saveBatchTaskForDomainNameProxyService($options = [])
 * @method SaveBatchTaskForTransferProhibitionLock saveBatchTaskForTransferProhibitionLock($options = [])
 * @method SaveBatchTaskForUpdateProhibitionLock saveBatchTaskForUpdateProhibitionLock($options = [])
 * @method QueryContactInfo queryContactInfo($options = [])
 * @method DeleteRegistrantProfile deleteRegistrantProfile($options = [])
 * @method QueryRegistrantProfiles queryRegistrantProfiles($options = [])
 * @method SaveBatchTaskForCreatingOrderActivate saveBatchTaskForCreatingOrderActivate($options = [])
 * @method SaveSingleTaskForCreatingOrderActivate saveSingleTaskForCreatingOrderActivate($options = [])
 * @method SaveRegistrantProfile saveRegistrantProfile($options = [])
 * @method CheckDomain checkDomain($options = [])
 */
class V20180129
{
    use ApiResolverTrait;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class SaveSingleTaskForSynchronizingDSRecord extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getKeyTag
 * @method self withKeyTag(Integer $keyTag)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class SaveSingleTaskForDeletingDSRecord extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getKeyTag
 * @method self withKeyTag(Integer $keyTag)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method Integer getAlgorithm
 * @method self withAlgorithm(Integer $algorithm)
 * @method Integer getDigestType
 * @method self withDigestType(Integer $digestType)
 * @method string getDigest
 * @method self withDigest(string $digest)
 */
class SaveSingleTaskForModifyingDSRecord extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method Integer getKeyTag
 * @method self withKeyTag(Integer $keyTag)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method Integer getAlgorithm
 * @method self withAlgorithm(Integer $algorithm)
 * @method Integer getDigestType
 * @method self withDigestType(Integer $digestType)
 * @method string getDigest
 * @method self withDigest(string $digest)
 */
class SaveSingleTaskForAddingDSRecord extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class QueryDSRecord extends Rpc
{
    use R;
}

/**
 * @method int getEndExpirationDate
 * @method self withEndExpirationDate(int $endExpirationDate)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getStartExpirationDate
 * @method self withStartExpirationDate(int $startExpirationDate)
 * @method string getProductDomainType
 * @method self withProductDomainType(string $productDomainType)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getDomainGroupId
 * @method self withDomainGroupId(int $domainGroupId)
 * @method Integer getDomainStatus
 * @method self withDomainStatus(Integer $domainStatus)
 * @method Integer getEndLength
 * @method self withEndLength(Integer $endLength)
 * @method string getExcluded
 * @method self withExcluded(string $excluded)
 * @method bool getExcludedPrefix
 * @method self withExcludedPrefix(bool $excludedPrefix)
 * @method bool getExcludedSuffix
 * @method self withExcludedSuffix(bool $excludedSuffix)
 * @method Integer getForm
 * @method self withForm(Integer $form)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method bool getKeyWordPrefix
 * @method self withKeyWordPrefix(bool $keyWordPrefix)
 * @method bool getKeyWordSuffix
 * @method self withKeyWordSuffix(bool $keyWordSuffix)
 * @method Integer getStartLength
 * @method self withStartLength(Integer $startLength)
 * @method Integer getTradeType
 * @method self withTradeType(Integer $tradeType)
 * @method string getSuffixs
 * @method self withSuffixs(string $suffixs)
 * @method int getStartRegistrationDate
 * @method self withStartRegistrationDate(int $startRegistrationDate)
 * @method int getEndRegistrationDate
 * @method self withEndRegistrationDate(int $endRegistrationDate)
 * @method string getScrollId
 * @method self withScrollId(string $scrollId)
 */
class ScrollDomainList extends Rpc
{
    use R;
}

/**
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class FuzzyMatchDomainSensitiveWord extends Rpc
{
    use R;
}

/**
 * @method string getKeyword
 * @method self withKeyword(string $keyword)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class BatchFuzzyMatchDomainSensitiveWord extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class CheckDomainSunriseClaim extends Rpc
{
    use R;
}

/**
 * @method string getClaimKey
 * @method self withClaimKey(string $claimKey)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class LookupTmchNotice extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class QueryDomainAdminDivision extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getQualificationType
 * @method self withQualificationType(string $qualificationType)
 */
class CancelQualificationVerification extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class GetQualificationUploadPolicy extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getQualificationType
 * @method self withQualificationType(string $qualificationType)
 */
class QueryQualificationDetail extends Rpc
{
    use R;
}

/**
 * @method string getQualificationType
 * @method self withQualificationType(string $qualificationType)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getLimit
 * @method self withLimit(Integer $limit)
 */
class QueryFailingReasonListForQualification extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class ResetQualificationVerification extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class QueryLocalEnsAssociation extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class QueryEnsAssociation extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class SaveSingleTaskForDisassociatingEns extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getAddress
 * @method self withAddress(string $address)
 */
class SaveSingleTaskForAssociatingEns extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getEndStartDate
 * @method self withEndStartDate(int $endStartDate)
 * @method int getBeginStartDate
 * @method self withBeginStartDate(int $beginStartDate)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getLockProductId
 * @method self withLockProductId(string $lockProductId)
 * @method Integer getServerLockStatus
 * @method self withServerLockStatus(Integer $serverLockStatus)
 * @method int getStartExpireDate
 * @method self withStartExpireDate(int $startExpireDate)
 * @method int getEndExpireDate
 * @method self withEndExpireDate(int $endExpireDate)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class ListServerLock extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class QueryServerLock extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getCheckAction
 * @method self withCheckAction(string $checkAction)
 */
class CheckMaxYearOfServerLock extends Rpc
{
    use R;
}

/**
 * @method Integer getFeePeriod
 * @method self withFeePeriod(Integer $feePeriod)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class CheckProcessingServerLockApply extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getActionType
 * @method self withActionType(string $actionType)
 */
class CancelDomainVerification extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class QueryEmailVerification extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDnsName
 * @method self withDnsName(string $dnsName)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class SaveSingleTaskForDeletingDnsHost extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method bool getFetchImage
 * @method self withFetchImage(bool $fetchImage)
 */
class QueryDomainRealNameVerificationInfo extends Rpc
{
    use R;
}

/**
 * @method int getEndExpirationDate
 * @method self withEndExpirationDate(int $endExpirationDate)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getStartExpirationDate
 * @method self withStartExpirationDate(int $startExpirationDate)
 * @method string getProductDomainType
 * @method self withProductDomainType(string $productDomainType)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getDomainGroupId
 * @method self withDomainGroupId(int $domainGroupId)
 * @method bool getDomainNameSort
 * @method self withDomainNameSort(bool $domainNameSort)
 * @method Integer getDomainStatus
 * @method self withDomainStatus(Integer $domainStatus)
 * @method Integer getEndLength
 * @method self withEndLength(Integer $endLength)
 * @method string getExcluded
 * @method self withExcluded(string $excluded)
 * @method bool getExcludedPrefix
 * @method self withExcludedPrefix(bool $excludedPrefix)
 * @method bool getExcludedSuffix
 * @method self withExcludedSuffix(bool $excludedSuffix)
 * @method bool getExpirationDateSort
 * @method self withExpirationDateSort(bool $expirationDateSort)
 * @method Integer getForm
 * @method self withForm(Integer $form)
 * @method string getKeyWord
 * @method self withKeyWord(string $keyWord)
 * @method bool getKeyWordPrefix
 * @method self withKeyWordPrefix(bool $keyWordPrefix)
 * @method bool getKeyWordSuffix
 * @method self withKeyWordSuffix(bool $keyWordSuffix)
 * @method bool getProductDomainTypeSort
 * @method self withProductDomainTypeSort(bool $productDomainTypeSort)
 * @method bool getRegistrationDateSort
 * @method self withRegistrationDateSort(bool $registrationDateSort)
 * @method Integer getStartLength
 * @method self withStartLength(Integer $startLength)
 * @method Integer getTradeType
 * @method self withTradeType(Integer $tradeType)
 * @method string getSuffixs
 * @method self withSuffixs(string $suffixs)
 * @method int getStartRegistrationDate
 * @method self withStartRegistrationDate(int $startRegistrationDate)
 * @method int getEndRegistrationDate
 * @method self withEndRegistrationDate(int $endRegistrationDate)
 */
class QueryAdvancedDomainList extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class QueryDomainSuffix extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainGroupName
 * @method self withDomainGroupName(string $domainGroupName)
 * @method int getDomainGroupId
 * @method self withDomainGroupId(int $domainGroupId)
 */
class SaveDomainGroup extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getDomainGroupId
 * @method self withDomainGroupId(int $domainGroupId)
 */
class DeleteDomainGroup extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getFileToUpload
 * @method self withFileToUpload(string $fileToUpload)
 * @method array getDomainName
 * @method self withDomainName(array $domainName)
 * @method int getDomainGroupId
 * @method self withDomainGroupId(int $domainGroupId)
 * @method bool getReplace
 * @method self withReplace(bool $replace)
 * @method Integer getDataSource
 * @method self withDataSource(Integer $dataSource)
 */
class UpdateDomainToDomainGroup extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getRemark
 * @method self withRemark(string $remark)
 * @method string getInstanceIds
 * @method self withInstanceIds(string $instanceIds)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class SaveBatchDomainRemark extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method array getOrderTransferParam
 * @method self withOrderTransferParam(array $orderTransferParam)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 * @method bool getUseCoupon
 * @method self withUseCoupon(bool $useCoupon)
 * @method string getPromotionNo
 * @method self withPromotionNo(string $promotionNo)
 * @method bool getUsePromotion
 * @method self withUsePromotion(bool $usePromotion)
 */
class SaveBatchTaskForCreatingOrderTransfer extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getAuthorizationCode
 * @method self withAuthorizationCode(string $authorizationCode)
 * @method int getRegistrantProfileId
 * @method self withRegistrantProfileId(int $registrantProfileId)
 * @method bool getPermitPremiumTransfer
 * @method self withPermitPremiumTransfer(bool $permitPremiumTransfer)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 * @method bool getUseCoupon
 * @method self withUseCoupon(bool $useCoupon)
 * @method string getPromotionNo
 * @method self withPromotionNo(string $promotionNo)
 * @method bool getUsePromotion
 * @method self withUsePromotion(bool $usePromotion)
 */
class SaveSingleTaskForCreatingOrderTransfer extends Rpc
{
    use R;
}

/**
 * @method string getToken
 * @method self withToken(string $token)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class TransferInCheckMailToken extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class TransferInResendMailToken extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getTransferAuthorizationCode
 * @method self withTransferAuthorizationCode(string $transferAuthorizationCode)
 */
class TransferInReenterTransferAuthorizationCode extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class SaveSingleTaskForCancelingTransferIn extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class QueryTransferInByInstanceId extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getSubmissionStartDate
 * @method self withSubmissionStartDate(int $submissionStartDate)
 * @method int getSubmissionEndDate
 * @method self withSubmissionEndDate(int $submissionEndDate)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getSimpleTransferInStatus
 * @method self withSimpleTransferInStatus(string $simpleTransferInStatus)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryTransferInList extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getTransferAuthorizationCode
 * @method self withTransferAuthorizationCode(string $transferAuthorizationCode)
 */
class CheckTransferInFeasibility extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class TransferInRefetchWhoisEmail extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method array getDomainName
 * @method self withDomainName(array $domainName)
 */
class ConfirmTransferInEmail extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getRegistrantProfileId
 * @method self withRegistrantProfileId(int $registrantProfileId)
 * @method bool getFetchImage
 * @method self withFetchImage(bool $fetchImage)
 */
class QueryRegistrantProfileRealNameVerificationInfo extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class QueryTransferOutInfo extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class SaveSingleTaskForQueryingTransferAuthorizationCode extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class SaveSingleTaskForCancelingTransferOut extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class SaveSingleTaskForApprovingTransferOut extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getDomainGroupName
 * @method self withDomainGroupName(string $domainGroupName)
 * @method bool getShowDeletingGroup
 * @method self withShowDeletingGroup(bool $showDeletingGroup)
 */
class QueryDomainGroupList extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getTaskNo
 * @method self withTaskNo(string $taskNo)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method Integer getTaskResultStatus
 * @method self withTaskResultStatus(Integer $taskResultStatus)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class PollTaskResult extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method array getTaskDetailNo
 * @method self withTaskDetailNo(array $taskDetailNo)
 */
class AcknowledgeTaskResult extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method int getCurrentExpirationDate
 * @method self withCurrentExpirationDate(int $currentExpirationDate)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 * @method bool getUseCoupon
 * @method self withUseCoupon(bool $useCoupon)
 * @method string getPromotionNo
 * @method self withPromotionNo(string $promotionNo)
 * @method bool getUsePromotion
 * @method self withUsePromotion(bool $usePromotion)
 */
class SaveSingleTaskForCreatingOrderRedeem extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method array getOrderRedeemParam
 * @method self withOrderRedeemParam(array $orderRedeemParam)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 * @method bool getUseCoupon
 * @method self withUseCoupon(bool $useCoupon)
 * @method string getPromotionNo
 * @method self withPromotionNo(string $promotionNo)
 * @method bool getUsePromotion
 * @method self withUsePromotion(bool $usePromotion)
 */
class SaveBatchTaskForCreatingOrderRedeem extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDnsName
 * @method self withDnsName(string $dnsName)
 * @method array getIp
 * @method self withIp(array $ip)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class SaveSingleTaskForCreatingDnsHost extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method bool getStatus
 * @method self withStatus(bool $status)
 */
class SaveSingleTaskForDomainNameProxyService extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDnsName
 * @method self withDnsName(string $dnsName)
 * @method array getIp
 * @method self withIp(array $ip)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class SaveSingleTaskForModifyingDnsHost extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class SaveSingleTaskForSynchronizingDnsHost extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method bool getStatus
 * @method self withStatus(bool $status)
 */
class SaveSingleTaskForTransferProhibitionLock extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method bool getStatus
 * @method self withStatus(bool $status)
 */
class SaveSingleTaskForUpdateProhibitionLock extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getRegistrantProfileId
 * @method self withRegistrantProfileId(int $registrantProfileId)
 * @method string getContactType
 * @method self withContactType(string $contactType)
 * @method bool getAddTransferLock
 * @method self withAddTransferLock(bool $addTransferLock)
 */
class SaveSingleTaskForUpdatingContactInfo extends Rpc
{
    use R;
}

/**
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class QueryDnsHost extends Rpc
{
    use R;
}

/**
 * @method string getProvince
 * @method self withProvince(string $province)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getCity
 * @method self withCity(string $city)
 * @method string getRegistrantOrganization
 * @method self withRegistrantOrganization(string $registrantOrganization)
 * @method string getCountry
 * @method self withCountry(string $country)
 * @method string getRegistrantName
 * @method self withRegistrantName(string $registrantName)
 * @method string getAddress
 * @method self withAddress(string $address)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getPostalCode
 * @method self withPostalCode(string $postalCode)
 * @method string getTelArea
 * @method self withTelArea(string $telArea)
 * @method string getTelephone
 * @method self withTelephone(string $telephone)
 * @method string getTelExt
 * @method self withTelExt(string $telExt)
 * @method string getZhRegistrantOrganization
 * @method self withZhRegistrantOrganization(string $zhRegistrantOrganization)
 * @method string getZhRegistrantName
 * @method self withZhRegistrantName(string $zhRegistrantName)
 * @method string getZhProvince
 * @method self withZhProvince(string $zhProvince)
 * @method string getZhAddress
 * @method self withZhAddress(string $zhAddress)
 * @method string getZhCity
 * @method self withZhCity(string $zhCity)
 * @method string getRegistrantType
 * @method self withRegistrantType(string $registrantType)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 */
class VerifyContactField extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getIdentityCredential
 * @method self withIdentityCredential(string $identityCredential)
 * @method string getIdentityCredentialNo
 * @method self withIdentityCredentialNo(string $identityCredentialNo)
 * @method string getIdentityCredentialType
 * @method self withIdentityCredentialType(string $identityCredentialType)
 * @method array getDomainName
 * @method self withDomainName(array $domainName)
 */
class SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getRegistrantProfileID
 * @method self withRegistrantProfileID(int $registrantProfileID)
 * @method string getIdentityCredential
 * @method self withIdentityCredential(string $identityCredential)
 * @method string getIdentityCredentialNo
 * @method self withIdentityCredentialNo(string $identityCredentialNo)
 * @method string getIdentityCredentialType
 * @method self withIdentityCredentialType(string $identityCredentialType)
 */
class RegistrantProfileRealNameVerification extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getRealNameVerificationAction
 * @method self withRealNameVerificationAction(string $realNameVerificationAction)
 */
class QueryFailReasonForDomainRealNameVerification extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getRegistrantProfileID
 * @method self withRegistrantProfileID(int $registrantProfileID)
 */
class QueryFailReasonForRegistrantProfileRealNameVerification extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class SaveTaskForSubmittingDomainDelete extends Rpc
{
    use R;
}

/**
 * @method string getPostalCode
 * @method self withPostalCode(string $postalCode)
 * @method string getAddress
 * @method self withAddress(string $address)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getCity
 * @method self withCity(string $city)
 * @method string getRegistrantOrganization
 * @method self withRegistrantOrganization(string $registrantOrganization)
 * @method string getRegistrantName
 * @method self withRegistrantName(string $registrantName)
 * @method string getProvince
 * @method self withProvince(string $province)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getCountry
 * @method self withCountry(string $country)
 * @method string getTelArea
 * @method self withTelArea(string $telArea)
 * @method string getTelephone
 * @method self withTelephone(string $telephone)
 * @method string getTelExt
 * @method self withTelExt(string $telExt)
 * @method string getZhCity
 * @method self withZhCity(string $zhCity)
 * @method string getZhRegistrantOrganization
 * @method self withZhRegistrantOrganization(string $zhRegistrantOrganization)
 * @method string getZhRegistrantName
 * @method self withZhRegistrantName(string $zhRegistrantName)
 * @method string getZhProvince
 * @method self withZhProvince(string $zhProvince)
 * @method string getZhAddress
 * @method self withZhAddress(string $zhAddress)
 * @method string getRegistrantType
 * @method self withRegistrantType(string $registrantType)
 * @method array getDomainName
 * @method self withDomainName(array $domainName)
 * @method string getIdentityCredentialType
 * @method self withIdentityCredentialType(string $identityCredentialType)
 * @method string getIdentityCredentialNo
 * @method self withIdentityCredentialNo(string $identityCredentialNo)
 * @method string getIdentityCredential
 * @method self withIdentityCredential(string $identityCredential)
 * @method bool getTransferOutProhibited
 * @method self withTransferOutProhibited(bool $transferOutProhibited)
 */
class SaveTaskForUpdatingRegistrantInfoByIdentityCredential extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getEmail
 * @method self withEmail(string $email)
 */
class EmailVerified extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getRegistrantProfileId
 * @method self withRegistrantProfileId(int $registrantProfileId)
 * @method array getDomainName
 * @method self withDomainName(array $domainName)
 * @method bool getTransferOutProhibited
 * @method self withTransferOutProhibited(bool $transferOutProhibited)
 */
class SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getRegistrantProfileId
 * @method self withRegistrantProfileId(int $registrantProfileId)
 * @method string getContactType
 * @method self withContactType(string $contactType)
 * @method bool getTransferOutProhibited
 * @method self withTransferOutProhibited(bool $transferOutProhibited)
 * @method array getDomainName
 * @method self withDomainName(array $domainName)
 */
class SaveBatchTaskForUpdatingContactInfoByRegistrantProfileId extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method int getRegistrantProfileId
 * @method self withRegistrantProfileId(int $registrantProfileId)
 */
class SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID extends Rpc
{
    use R;
}

/**
 * @method string getAddress
 * @method self withAddress(string $address)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getCity
 * @method self withCity(string $city)
 * @method string getRegistrantOrganization
 * @method self withRegistrantOrganization(string $registrantOrganization)
 * @method string getRegistrantName
 * @method self withRegistrantName(string $registrantName)
 * @method string getProvince
 * @method self withProvince(string $province)
 * @method string getCountry
 * @method self withCountry(string $country)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getPostalCode
 * @method self withPostalCode(string $postalCode)
 * @method string getTelArea
 * @method self withTelArea(string $telArea)
 * @method string getTelephone
 * @method self withTelephone(string $telephone)
 * @method string getTelExt
 * @method self withTelExt(string $telExt)
 * @method string getZhCity
 * @method self withZhCity(string $zhCity)
 * @method string getZhRegistrantOrganization
 * @method self withZhRegistrantOrganization(string $zhRegistrantOrganization)
 * @method string getZhRegistrantName
 * @method self withZhRegistrantName(string $zhRegistrantName)
 * @method string getZhProvince
 * @method self withZhProvince(string $zhProvince)
 * @method string getZhAddress
 * @method self withZhAddress(string $zhAddress)
 * @method string getContactType
 * @method self withContactType(string $contactType)
 * @method string getRegistrantType
 * @method self withRegistrantType(string $registrantType)
 * @method bool getTransferOutProhibited
 * @method self withTransferOutProhibited(bool $transferOutProhibited)
 * @method array getDomainName
 * @method self withDomainName(array $domainName)
 */
class SaveBatchTaskForUpdatingContactInfoByNewContact extends Rpc
{
    use R;
}

/**
 * @method Integer getTaskStatus
 * @method self withTaskStatus(Integer $taskStatus)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getTaskNo
 * @method self withTaskNo(string $taskNo)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryTaskDetailList extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getToken
 * @method self withToken(string $token)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class VerifyEmail extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getBeginCreateTime
 * @method self withBeginCreateTime(int $beginCreateTime)
 * @method int getEndCreateTime
 * @method self withEndCreateTime(int $endCreateTime)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getCreateTimeCursor
 * @method self withCreateTimeCursor(int $createTimeCursor)
 * @method string getTaskNoCursor
 * @method self withTaskNoCursor(string $taskNoCursor)
 */
class QueryTaskInfoHistory extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getBeginCreateTime
 * @method self withBeginCreateTime(int $beginCreateTime)
 * @method int getEndCreateTime
 * @method self withEndCreateTime(int $endCreateTime)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method Integer getVerificationStatus
 * @method self withVerificationStatus(Integer $verificationStatus)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class ListEmailVerification extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getTaskNo
 * @method self withTaskNo(string $taskNo)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getDomainNameCursor
 * @method self withDomainNameCursor(string $domainNameCursor)
 * @method Integer getTaskStatus
 * @method self withTaskStatus(Integer $taskStatus)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getTaskDetailNoCursor
 * @method self withTaskDetailNoCursor(string $taskDetailNoCursor)
 */
class QueryTaskDetailHistory extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getBeginCreateTime
 * @method self withBeginCreateTime(int $beginCreateTime)
 * @method int getEndCreateTime
 * @method self withEndCreateTime(int $endCreateTime)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 */
class QueryTaskList extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getInstanceId
 * @method self withInstanceId(string $instanceId)
 */
class QueryDomainByInstanceId extends Rpc
{
    use R;
}

/**
 * @method int getEndExpirationDate
 * @method self withEndExpirationDate(int $endExpirationDate)
 * @method int getStartExpirationDate
 * @method self withStartExpirationDate(int $startExpirationDate)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getQueryType
 * @method self withQueryType(string $queryType)
 * @method int getStartRegistrationDate
 * @method self withStartRegistrationDate(int $startRegistrationDate)
 * @method int getEndRegistrationDate
 * @method self withEndRegistrationDate(int $endRegistrationDate)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getOrderByType
 * @method self withOrderByType(string $orderByType)
 * @method string getOrderKeyType
 * @method self withOrderKeyType(string $orderKeyType)
 * @method string getProductDomainType
 * @method self withProductDomainType(string $productDomainType)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getDomainGroupId
 * @method self withDomainGroupId(string $domainGroupId)
 */
class QueryDomainList extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method int getStartDate
 * @method self withStartDate(int $startDate)
 * @method int getEndDate
 * @method self withEndDate(int $endDate)
 */
class QueryChangeLogList extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method bool getSendIfExist
 * @method self withSendIfExist(bool $sendIfExist)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class SubmitEmailVerification extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class DeleteEmailVerification extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 */
class ResendEmailVerification extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method array getOrderRenewParam
 * @method self withOrderRenewParam(array $orderRenewParam)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 * @method bool getUseCoupon
 * @method self withUseCoupon(bool $useCoupon)
 * @method string getPromotionNo
 * @method self withPromotionNo(string $promotionNo)
 * @method bool getUsePromotion
 * @method self withUsePromotion(bool $usePromotion)
 */
class SaveBatchTaskForCreatingOrderRenew extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method Integer getSubscriptionDuration
 * @method self withSubscriptionDuration(Integer $subscriptionDuration)
 * @method int getCurrentExpirationDate
 * @method self withCurrentExpirationDate(int $currentExpirationDate)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 * @method bool getUseCoupon
 * @method self withUseCoupon(bool $useCoupon)
 * @method string getPromotionNo
 * @method self withPromotionNo(string $promotionNo)
 * @method bool getUsePromotion
 * @method self withUsePromotion(bool $usePromotion)
 */
class SaveSingleTaskForCreatingOrderRenew extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method array getDomainName
 * @method self withDomainName(array $domainName)
 * @method bool getAliyunDns
 * @method self withAliyunDns(bool $aliyunDns)
 * @method array getDomainNameServer
 * @method self withDomainNameServer(array $domainNameServer)
 */
class SaveBatchTaskForModifyingDomainDns extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method array getDomainName
 * @method self withDomainName(array $domainName)
 * @method bool getStatus
 * @method self withStatus(bool $status)
 */
class SaveBatchTaskForDomainNameProxyService extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method array getDomainName
 * @method self withDomainName(array $domainName)
 * @method bool getStatus
 * @method self withStatus(bool $status)
 */
class SaveBatchTaskForTransferProhibitionLock extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method array getDomainName
 * @method self withDomainName(array $domainName)
 * @method bool getStatus
 * @method self withStatus(bool $status)
 */
class SaveBatchTaskForUpdateProhibitionLock extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getContactType
 * @method self withContactType(string $contactType)
 */
class QueryContactInfo extends Rpc
{
    use R;
}

/**
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getRegistrantProfileId
 * @method self withRegistrantProfileId(int $registrantProfileId)
 */
class DeleteRegistrantProfile extends Rpc
{
    use R;
}

/**
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getRegistrantOrganization
 * @method self withRegistrantOrganization(string $registrantOrganization)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method int getRegistrantProfileId
 * @method self withRegistrantProfileId(int $registrantProfileId)
 * @method bool getDefaultRegistrantProfile
 * @method self withDefaultRegistrantProfile(bool $defaultRegistrantProfile)
 * @method Integer getPageNum
 * @method self withPageNum(Integer $pageNum)
 * @method Integer getPageSize
 * @method self withPageSize(Integer $pageSize)
 * @method string getZhRegistrantOrganization
 * @method self withZhRegistrantOrganization(string $zhRegistrantOrganization)
 * @method string getRegistrantType
 * @method self withRegistrantType(string $registrantType)
 * @method string getRealNameStatus
 * @method self withRealNameStatus(string $realNameStatus)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getRegistrantProfileType
 * @method self withRegistrantProfileType(string $registrantProfileType)
 */
class QueryRegistrantProfiles extends Rpc
{
    use R;
}

/**
 * @method array getOrderActivateParam
 * @method self withOrderActivateParam(array $orderActivateParam)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 * @method bool getUseCoupon
 * @method self withUseCoupon(bool $useCoupon)
 * @method string getPromotionNo
 * @method self withPromotionNo(string $promotionNo)
 * @method bool getUsePromotion
 * @method self withUsePromotion(bool $usePromotion)
 */
class SaveBatchTaskForCreatingOrderActivate extends Rpc
{
    use R;
}

/**
 * @method string getZhRegistrantName
 * @method self withZhRegistrantName(string $zhRegistrantName)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method Integer getSubscriptionDuration
 * @method self withSubscriptionDuration(Integer $subscriptionDuration)
 * @method int getRegistrantProfileId
 * @method self withRegistrantProfileId(int $registrantProfileId)
 * @method bool getEnableDomainProxy
 * @method self withEnableDomainProxy(bool $enableDomainProxy)
 * @method bool getPermitPremiumActivation
 * @method self withPermitPremiumActivation(bool $permitPremiumActivation)
 * @method bool getAliyunDns
 * @method self withAliyunDns(bool $aliyunDns)
 * @method string getDns1
 * @method self withDns1(string $dns1)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getZhCity
 * @method self withZhCity(string $zhCity)
 * @method string getZhRegistrantOrganization
 * @method self withZhRegistrantOrganization(string $zhRegistrantOrganization)
 * @method string getCountry
 * @method self withCountry(string $country)
 * @method string getDns2
 * @method self withDns2(string $dns2)
 * @method string getZhProvince
 * @method self withZhProvince(string $zhProvince)
 * @method string getZhAddress
 * @method self withZhAddress(string $zhAddress)
 * @method string getCity
 * @method self withCity(string $city)
 * @method string getRegistrantOrganization
 * @method self withRegistrantOrganization(string $registrantOrganization)
 * @method string getRegistrantName
 * @method self withRegistrantName(string $registrantName)
 * @method string getProvince
 * @method self withProvince(string $province)
 * @method string getAddress
 * @method self withAddress(string $address)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getPostalCode
 * @method self withPostalCode(string $postalCode)
 * @method string getTelArea
 * @method self withTelArea(string $telArea)
 * @method string getTelephone
 * @method self withTelephone(string $telephone)
 * @method string getTelExt
 * @method self withTelExt(string $telExt)
 * @method string getRegistrantType
 * @method self withRegistrantType(string $registrantType)
 * @method bool getTrademarkDomainActivation
 * @method self withTrademarkDomainActivation(bool $trademarkDomainActivation)
 * @method string getCouponNo
 * @method self withCouponNo(string $couponNo)
 * @method bool getUseCoupon
 * @method self withUseCoupon(bool $useCoupon)
 * @method string getPromotionNo
 * @method self withPromotionNo(string $promotionNo)
 * @method bool getUsePromotion
 * @method self withUsePromotion(bool $usePromotion)
 */
class SaveSingleTaskForCreatingOrderActivate extends Rpc
{
    use R;
}

/**
 * @method bool getDefaultRegistrantProfile
 * @method self withDefaultRegistrantProfile(bool $defaultRegistrantProfile)
 * @method string getCountry
 * @method self withCountry(string $country)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method int getRegistrantProfileId
 * @method self withRegistrantProfileId(int $registrantProfileId)
 * @method string getCity
 * @method self withCity(string $city)
 * @method string getRegistrantOrganization
 * @method self withRegistrantOrganization(string $registrantOrganization)
 * @method string getRegistrantName
 * @method self withRegistrantName(string $registrantName)
 * @method string getProvince
 * @method self withProvince(string $province)
 * @method string getAddress
 * @method self withAddress(string $address)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getPostalCode
 * @method self withPostalCode(string $postalCode)
 * @method string getTelArea
 * @method self withTelArea(string $telArea)
 * @method string getTelephone
 * @method self withTelephone(string $telephone)
 * @method string getTelExt
 * @method self withTelExt(string $telExt)
 * @method string getZhRegistrantOrganization
 * @method self withZhRegistrantOrganization(string $zhRegistrantOrganization)
 * @method string getZhRegistrantName
 * @method self withZhRegistrantName(string $zhRegistrantName)
 * @method string getZhProvince
 * @method self withZhProvince(string $zhProvince)
 * @method string getZhAddress
 * @method self withZhAddress(string $zhAddress)
 * @method string getZhCity
 * @method self withZhCity(string $zhCity)
 * @method string getRegistrantType
 * @method self withRegistrantType(string $registrantType)
 * @method string getRegistrantProfileType
 * @method self withRegistrantProfileType(string $registrantProfileType)
 */
class SaveRegistrantProfile extends Rpc
{
    use R;
}

/**
 * @method string getDomainName
 * @method self withDomainName(string $domainName)
 * @method string getFeeCommand
 * @method self withFeeCommand(string $feeCommand)
 * @method string getFeeCurrency
 * @method self withFeeCurrency(string $feeCurrency)
 * @method Integer getFeePeriod
 * @method self withFeePeriod(Integer $feePeriod)
 * @method string getLang
 * @method self withLang(string $lang)
 */
class CheckDomain extends Rpc
{
    use R;
}
