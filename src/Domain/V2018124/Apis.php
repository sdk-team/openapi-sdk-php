<?php

namespace AlibabaCloud\Domain\V2018124;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SaveBatchTaskForUpdatingRegistrantExceptOrgByNewContact saveBatchTaskForUpdatingRegistrantExceptOrgByNewContact($options = [])
 * @method TransferInRefetchWhoisEmail transferInRefetchWhoisEmail($options = [])
 */
class V2018124
{
    use ApiResolverTrait;
}

/**
 * @method string getAddress
 * @method self withAddress(string $address)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getUserClientIp
 * @method self withUserClientIp(string $userClientIp)
 * @method string getLang
 * @method self withLang(string $lang)
 * @method string getCity
 * @method self withCity(string $city)
 * @method string getProvince
 * @method self withProvince(string $province)
 * @method string getCountry
 * @method self withCountry(string $country)
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
class SaveBatchTaskForUpdatingRegistrantExceptOrgByNewContact extends Rpc
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
