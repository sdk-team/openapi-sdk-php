<?php

namespace AlibabaCloud\Crm\V20150408;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ModifyPhoneForBidUser modifyPhoneForBidUser($options = [])
 * @method DeleteLabelForBid deleteLabelForBid($options = [])
 * @method CheckLabelForBid checkLabelForBid($options = [])
 * @method AddLabelForBid addLabelForBid($options = [])
 * @method GetAliyunPkByAliyunId getAliyunPkByAliyunId($options = [])
 * @method BatchGetAliyunIdByAliyunPk batchGetAliyunIdByAliyunPk($options = [])
 * @method RemoveIdentityCertifiedForBidUser removeIdentityCertifiedForBidUser($options = [])
 * @method QueryBidUserCertifiedInfo queryBidUserCertifiedInfo($options = [])
 * @method AddIdentityCertifiedForBidUser addIdentityCertifiedForBidUser($options = [])
 * @method RemoveIdentityCertifiedLabel removeIdentityCertifiedLabel($options = [])
 * @method QueryBidUserInfo queryBidUserInfo($options = [])
 * @method AddOrUpdateBidUserInfo addOrUpdateBidUserInfo($options = [])
 * @method AddIdentityCertifiedLabel addIdentityCertifiedLabel($options = [])
 * @method DeleteLabel deleteLabel($options = [])
 * @method CheckLabel checkLabel($options = [])
 * @method AddLabel addLabel($options = [])
 * @method QueryCustomerLabel queryCustomerLabel($options = [])
 * @method FindServiceManager findServiceManager($options = [])
 */
class V20150408
{
    use ApiResolverTrait;
}

/**
 * @method string getPK
 * @method self withPK(string $pK)
 * @method string getBidType
 * @method self withBidType(string $bidType)
 * @method string getphone
 * @method self withphone(string $phone)
 */
class ModifyPhoneForBidUser extends Roa
{
    use R;
}

/**
 * @method string getPK
 * @method self withPK(string $pK)
 * @method string getLabel
 * @method self withLabel(string $label)
 * @method string getLabelSeries
 * @method self withLabelSeries(string $labelSeries)
 */
class DeleteLabelForBid extends Roa
{
    use R;
}

/**
 * @method string getPK
 * @method self withPK(string $pK)
 * @method string getLabel
 * @method self withLabel(string $label)
 * @method string getLabelSeries
 * @method self withLabelSeries(string $labelSeries)
 */
class CheckLabelForBid extends Roa
{
    use R;
}

/**
 * @method string getPK
 * @method self withPK(string $pK)
 * @method string getLabel
 * @method self withLabel(string $label)
 * @method string getLabelSeries
 * @method self withLabelSeries(string $labelSeries)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class AddLabelForBid extends Roa
{
    use R;
}

/**
 * @method string getAliyunId
 * @method self withAliyunId(string $aliyunId)
 */
class GetAliyunPkByAliyunId extends Roa
{
    use R;
}

/**
 * @method array getPkList
 * @method self withPkList(array $pkList)
 */
class BatchGetAliyunIdByAliyunPk extends Roa
{
    use R;
}

/**
 * @method string getPK
 * @method self withPK(string $pK)
 * @method string getBidType
 * @method self withBidType(string $bidType)
 */
class RemoveIdentityCertifiedForBidUser extends Roa
{
    use R;
}

/**
 * @method string getPK
 * @method self withPK(string $pK)
 * @method string getBidType
 * @method self withBidType(string $bidType)
 */
class QueryBidUserCertifiedInfo extends Roa
{
    use R;
}

/**
 * @method string getPK
 * @method self withPK(string $pK)
 * @method string getBidType
 * @method self withBidType(string $bidType)
 * @method string getPhone
 * @method self withPhone(string $phone)
 * @method string getName
 * @method self withName(string $name)
 * @method string getLicenseType
 * @method self withLicenseType(string $licenseType)
 * @method string getLicenseNumber
 * @method self withLicenseNumber(string $licenseNumber)
 * @method bool getIsEnterprise
 * @method self withIsEnterprise(bool $isEnterprise)
 */
class AddIdentityCertifiedForBidUser extends Roa
{
    use R;
}

/**
 * @method string getPK
 * @method self withPK(string $pK)
 */
class RemoveIdentityCertifiedLabel extends Roa
{
    use R;
}

/**
 * @method string getPK
 * @method self withPK(string $pK)
 */
class QueryBidUserInfo extends Roa
{
    use R;
}

/**
 * @method string getPK
 * @method self withPK(string $pK)
 * @method string getemail
 * @method self withemail(string $email)
 * @method string getphone
 * @method self withphone(string $phone)
 * @method string gettrueName
 * @method self withtrueName(string $trueName)
 * @method string getcertType
 * @method self withcertType(string $certType)
 * @method string getcertNumber
 * @method self withcertNumber(string $certNumber)
 */
class AddOrUpdateBidUserInfo extends Roa
{
    use R;
}

/**
 * @method string getPK
 * @method self withPK(string $pK)
 */
class AddIdentityCertifiedLabel extends Roa
{
    use R;
}

/**
 * @method string getPK
 * @method self withPK(string $pK)
 * @method string getLabelName
 * @method self withLabelName(string $labelName)
 * @method string getLabelSeries
 * @method self withLabelSeries(string $labelSeries)
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getOrganization
 * @method self withOrganization(string $organization)
 */
class DeleteLabel extends Roa
{
    use R;
}

/**
 * @method string getPK
 * @method self withPK(string $pK)
 * @method string getLabelName
 * @method self withLabelName(string $labelName)
 * @method string getLabelSeries
 * @method self withLabelSeries(string $labelSeries)
 */
class CheckLabel extends Roa
{
    use R;
}

/**
 * @method string getPK
 * @method self withPK(string $pK)
 * @method string getLabelName
 * @method self withLabelName(string $labelName)
 * @method string getLabelSeries
 * @method self withLabelSeries(string $labelSeries)
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getOrganization
 * @method self withOrganization(string $organization)
 * @method string getEndTime
 * @method self withEndTime(string $endTime)
 */
class AddLabel extends Roa
{
    use R;
}

/**
 * @method string getLabelSeries
 * @method self withLabelSeries(string $labelSeries)
 */
class QueryCustomerLabel extends Roa
{
    use R;
}

/**
 * @method int getUserId
 * @method self withUserId(int $userId)
 */
class FindServiceManager extends Roa
{
    use R;
}
