<?php

namespace AlibabaCloud\Aas\V20150701;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method GetBasicInfoForAccount getBasicInfoForAccount(array $options = [])
 * @method ListAccessKeysForAccount listAccessKeysForAccount(array $options = [])
 * @method GetSessionInfoByMiniTicket getSessionInfoByMiniTicket(array $options = [])
 * @method DeleteAccessKeyForAccount deleteAccessKeyForAccount(array $options = [])
 * @method GetAliyunAccountWithBindTaobaoHid getAliyunAccountWithBindTaobaoHid(array $options = [])
 * @method UpdateAccessKeyStatusForAccount updateAccessKeyStatusForAccount(array $options = [])
 * @method GetBasicAccountInfoByPk getBasicAccountInfoByPk(array $options = [])
 * @method GetBasicAccountInfoByHavanaId getBasicAccountInfoByHavanaId(array $options = [])
 * @method GetSessionInfoByMiniTicketWithRouteSHRO getSessionInfoByMiniTicketWithRouteSHRO(array $options = [])
 * @method IsBindMfaByPk isBindMfaByPk(array $options = [])
 * @method GenerateAccountLoginToken generateAccountLoginToken(array $options = [])
 * @method GetShortTermAccessKeyForAccount getShortTermAccessKeyForAccount(array $options = [])
 * @method CreateAccessKeyForAccount createAccessKeyForAccount(array $options = [])
 * @method GetAliyunAccountWithBindHid getAliyunAccountWithBindHid(array $options = [])
 * @method GetSessionInfoByTicketWithRouteSHRO getSessionInfoByTicketWithRouteSHRO(array $options = [])
 * @method GetAccountKinshipInfoByPK getAccountKinshipInfoByPK(array $options = [])
 * @method ListAliyunAccount listAliyunAccount(array $options = [])
 * @method GetSessionInfoByTicketWithRoute getSessionInfoByTicketWithRoute(array $options = [])
 * @method GetSessionInfoByTicketWithRouteSGPRO getSessionInfoByTicketWithRouteSGPRO(array $options = [])
 * @method GetSessionInfoByMiniTicketWithRouteSGPRO getSessionInfoByMiniTicketWithRouteSGPRO(array $options = [])
 * @method VerifyAccountLoginToken verifyAccountLoginToken(array $options = [])
 * @method GetSessionInfoByTicket getSessionInfoByTicket(array $options = [])
 * @method GetLoginConfigInfoByPK getLoginConfigInfoByPK(array $options = [])
 * @method CreateAliyunAccountWithBindHid createAliyunAccountWithBindHid(array $options = [])
 * @method CreateAliyunAccount createAliyunAccount(array $options = [])
 * @method CreateIntlAliyunAccount createIntlAliyunAccount(array $options = [])
 * @method UpdatePasswordForAccount updatePasswordForAccount(array $options = [])
 * @method UpdateStatusForAccount updateStatusForAccount(array $options = [])
 * @method CreateShortTermAccessKeyForAccount createShortTermAccessKeyForAccount(array $options = [])
 * @method GetSessionInfoByMiniTicketWithRoute getSessionInfoByMiniTicketWithRoute(array $options = [])
 */
class AasApiResolver
{
    use ApiResolverTrait;
}

class V20150701Rpc extends Rpc
{
    /** @var string */
    public $product = 'Aas';

    /** @var string */
    public $version = '2015-07-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getAliyunId()
 * @method $this withAliyunId($value)
 */
class GetBasicInfoForAccount extends V20150701Rpc
{
}

/**
 * @method string getAKType()
 * @method $this withAKType($value)
 * @method string getAKStatus()
 * @method $this withAKStatus($value)
 * @method string getPK()
 * @method $this withPK($value)
 */
class ListAccessKeysForAccount extends V20150701Rpc
{
}

/**
 * @method string getTicket()
 * @method $this withTicket($value)
 */
class GetSessionInfoByMiniTicket extends V20150701Rpc
{
}

/**
 * @method string getAKId()
 * @method $this withAKId($value)
 * @method string getPK()
 * @method $this withPK($value)
 */
class DeleteAccessKeyForAccount extends V20150701Rpc
{
}

/**
 * @method string getHavanaId()
 * @method $this withHavanaId($value)
 */
class GetAliyunAccountWithBindTaobaoHid extends V20150701Rpc
{
}

/**
 * @method string getAKStatus()
 * @method $this withAKStatus($value)
 * @method string getAKId()
 * @method $this withAKId($value)
 * @method string getPK()
 * @method $this withPK($value)
 */
class UpdateAccessKeyStatusForAccount extends V20150701Rpc
{
}

/**
 * @method string getPK()
 * @method $this withPK($value)
 */
class GetBasicAccountInfoByPk extends V20150701Rpc
{
}

/**
 * @method string getHavanaId()
 * @method $this withHavanaId($value)
 */
class GetBasicAccountInfoByHavanaId extends V20150701Rpc
{
}

/**
 * @method string getTicket()
 * @method $this withTicket($value)
 */
class GetSessionInfoByMiniTicketWithRouteSHRO extends V20150701Rpc
{
}

/**
 * @method string getPK()
 * @method $this withPK($value)
 */
class IsBindMfaByPk extends V20150701Rpc
{
}

/**
 * @method string getTargetPk()
 * @method $this withTargetPk($value)
 */
class GenerateAccountLoginToken extends V20150701Rpc
{
}

/**
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getIsMfaPresent()
 * @method $this withIsMfaPresent($value)
 * @method string getPK()
 * @method $this withPK($value)
 */
class GetShortTermAccessKeyForAccount extends V20150701Rpc
{
}

/**
 * @method string getAKSecret()
 * @method $this withAKSecret($value)
 * @method string getPK()
 * @method $this withPK($value)
 */
class CreateAccessKeyForAccount extends V20150701Rpc
{
}

/**
 * @method string getInnerAccountHid()
 * @method $this withInnerAccountHid($value)
 */
class GetAliyunAccountWithBindHid extends V20150701Rpc
{
}

/**
 * @method string getTicket()
 * @method $this withTicket($value)
 */
class GetSessionInfoByTicketWithRouteSHRO extends V20150701Rpc
{
}

/**
 * @method string getPK()
 * @method $this withPK($value)
 */
class GetAccountKinshipInfoByPK extends V20150701Rpc
{
}

/**
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 */
class ListAliyunAccount extends V20150701Rpc
{
}

/**
 * @method string getTicket()
 * @method $this withTicket($value)
 */
class GetSessionInfoByTicketWithRoute extends V20150701Rpc
{
}

/**
 * @method string getTicket()
 * @method $this withTicket($value)
 */
class GetSessionInfoByTicketWithRouteSGPRO extends V20150701Rpc
{
}

/**
 * @method string getTicket()
 * @method $this withTicket($value)
 */
class GetSessionInfoByMiniTicketWithRouteSGPRO extends V20150701Rpc
{
}

/**
 * @method string getLoginToken()
 * @method $this withLoginToken($value)
 */
class VerifyAccountLoginToken extends V20150701Rpc
{
}

/**
 * @method string getTicket()
 * @method $this withTicket($value)
 */
class GetSessionInfoByTicket extends V20150701Rpc
{
}

/**
 * @method string getPK()
 * @method $this withPK($value)
 */
class GetLoginConfigInfoByPK extends V20150701Rpc
{
}

/**
 * @method string getInnerAccountHid()
 * @method $this withInnerAccountHid($value)
 */
class CreateAliyunAccountWithBindHid extends V20150701Rpc
{
}

/**
 * @method string getAliyunId()
 * @method $this withAliyunId($value)
 */
class CreateAliyunAccount extends V20150701Rpc
{
}

/**
 * @method string getNationalityCode()
 * @method $this withNationalityCode($value)
 */
class CreateIntlAliyunAccount extends V20150701Rpc
{
}

/**
 * @method string getPK()
 * @method $this withPK($value)
 * @method string getNewPassword()
 * @method $this withNewPassword($value)
 */
class UpdatePasswordForAccount extends V20150701Rpc
{
}

/**
 * @method string getAccountStatus()
 * @method $this withAccountStatus($value)
 * @method string getPK()
 * @method $this withPK($value)
 */
class UpdateStatusForAccount extends V20150701Rpc
{
}

/**
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getIsMfaPresent()
 * @method $this withIsMfaPresent($value)
 * @method string getPK()
 * @method $this withPK($value)
 */
class CreateShortTermAccessKeyForAccount extends V20150701Rpc
{
}

/**
 * @method string getTicket()
 * @method $this withTicket($value)
 */
class GetSessionInfoByMiniTicketWithRoute extends V20150701Rpc
{
}
