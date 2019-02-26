<?php

namespace AlibabaCloud\Jaq\V20160801;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method SpamRegisterPrevention spamRegisterPrevention($options = [])
 * @method OtherPrevention otherPrevention($options = [])
 * @method LoginPrevention loginPrevention($options = [])
 * @method CheckAccountAndPasswordRisk checkAccountAndPasswordRisk($options = [])
 * @method CampaignPrevention campaignPrevention($options = [])
 * @method BbsPrevention bbsPrevention($options = [])
 * @method AfsCheck afsCheck($options = [])
 */
class V20160801
{
    use ApiResolverTrait;
}

/**
 * @method string getCallerName
 * @method self withCallerName(string $callerName)
 * @method string getIp
 * @method self withIp(string $ip)
 * @method string getProtocolVersion
 * @method self withProtocolVersion(string $protocolVersion)
 * @method Integer getSource
 * @method self withSource(Integer $source)
 * @method string getPhoneNumber
 * @method self withPhoneNumber(string $phoneNumber)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method Integer getIdType
 * @method self withIdType(Integer $idType)
 * @method string getRegisterUrl
 * @method self withRegisterUrl(string $registerUrl)
 * @method string getAgent
 * @method self withAgent(string $agent)
 * @method string getCookie
 * @method self withCookie(string $cookie)
 * @method string getSessionId
 * @method self withSessionId(string $sessionId)
 * @method string getMacAddress
 * @method self withMacAddress(string $macAddress)
 * @method string getReferer
 * @method self withReferer(string $referer)
 * @method string getNickName
 * @method self withNickName(string $nickName)
 * @method string getCompanyName
 * @method self withCompanyName(string $companyName)
 * @method string getAddress
 * @method self withAddress(string $address)
 * @method string getIDNumber
 * @method self withIDNumber(string $iDNumber)
 * @method string getBankCardNumber
 * @method self withBankCardNumber(string $bankCardNumber)
 * @method string getJsToken
 * @method self withJsToken(string $jsToken)
 * @method string getSDKToken
 * @method self withSDKToken(string $sDKToken)
 * @method string getExtendData
 * @method self withExtendData(string $extendData)
 */
class SpamRegisterPrevention extends Roa
{
    use R;
}

/**
 * @method string getCallerName
 * @method self withCallerName(string $callerName)
 * @method string getIp
 * @method self withIp(string $ip)
 * @method string getProtocolVersion
 * @method self withProtocolVersion(string $protocolVersion)
 * @method Integer getSource
 * @method self withSource(Integer $source)
 * @method string getPhoneNumber
 * @method self withPhoneNumber(string $phoneNumber)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method Integer getIdType
 * @method self withIdType(Integer $idType)
 * @method string getCurrentUrl
 * @method self withCurrentUrl(string $currentUrl)
 * @method string getAgent
 * @method self withAgent(string $agent)
 * @method string getCookie
 * @method self withCookie(string $cookie)
 * @method string getSessionId
 * @method self withSessionId(string $sessionId)
 * @method string getMacAddress
 * @method self withMacAddress(string $macAddress)
 * @method string getReferer
 * @method self withReferer(string $referer)
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getCompanyName
 * @method self withCompanyName(string $companyName)
 * @method string getAddress
 * @method self withAddress(string $address)
 * @method string getIDNumber
 * @method self withIDNumber(string $iDNumber)
 * @method string getBankCardNumber
 * @method self withBankCardNumber(string $bankCardNumber)
 * @method string getRegisterIp
 * @method self withRegisterIp(string $registerIp)
 * @method int getRegisterDate
 * @method self withRegisterDate(int $registerDate)
 * @method string getLoginIp
 * @method self withLoginIp(string $loginIp)
 * @method int getLoginDate
 * @method self withLoginDate(int $loginDate)
 * @method string getExtendData
 * @method self withExtendData(string $extendData)
 * @method string getPasswordHash
 * @method self withPasswordHash(string $passwordHash)
 * @method string getJsToken
 * @method self withJsToken(string $jsToken)
 * @method string getSDKToken
 * @method self withSDKToken(string $sDKToken)
 */
class OtherPrevention extends Roa
{
    use R;
}

/**
 * @method string getCallerName
 * @method self withCallerName(string $callerName)
 * @method string getIp
 * @method self withIp(string $ip)
 * @method string getProtocolVersion
 * @method self withProtocolVersion(string $protocolVersion)
 * @method Integer getSource
 * @method self withSource(Integer $source)
 * @method string getPhoneNumber
 * @method self withPhoneNumber(string $phoneNumber)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method Integer getIdType
 * @method self withIdType(Integer $idType)
 * @method string getCurrentUrl
 * @method self withCurrentUrl(string $currentUrl)
 * @method string getAgent
 * @method self withAgent(string $agent)
 * @method string getCookie
 * @method self withCookie(string $cookie)
 * @method string getSessionId
 * @method self withSessionId(string $sessionId)
 * @method string getMacAddress
 * @method self withMacAddress(string $macAddress)
 * @method string getReferer
 * @method self withReferer(string $referer)
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getCompanyName
 * @method self withCompanyName(string $companyName)
 * @method string getAddress
 * @method self withAddress(string $address)
 * @method string getIDNumber
 * @method self withIDNumber(string $iDNumber)
 * @method string getBankCardNumber
 * @method self withBankCardNumber(string $bankCardNumber)
 * @method string getRegisterIp
 * @method self withRegisterIp(string $registerIp)
 * @method int getRegisterDate
 * @method self withRegisterDate(int $registerDate)
 * @method Integer getAccountExist
 * @method self withAccountExist(Integer $accountExist)
 * @method string getExtendData
 * @method self withExtendData(string $extendData)
 * @method string getJsToken
 * @method self withJsToken(string $jsToken)
 * @method string getSDKToken
 * @method self withSDKToken(string $sDKToken)
 * @method string getPasswordHash
 * @method self withPasswordHash(string $passwordHash)
 * @method Integer getLoginType
 * @method self withLoginType(Integer $loginType)
 * @method Integer getPasswordCorrect
 * @method self withPasswordCorrect(Integer $passwordCorrect)
 */
class LoginPrevention extends Roa
{
    use R;
}

/**
 * @method string getCallerName
 * @method self withCallerName(string $callerName)
 * @method string getAccountName
 * @method self withAccountName(string $accountName)
 * @method string getPasswordHash
 * @method self withPasswordHash(string $passwordHash)
 */
class CheckAccountAndPasswordRisk extends Roa
{
    use R;
}

/**
 * @method string getCallerName
 * @method self withCallerName(string $callerName)
 * @method string getIp
 * @method self withIp(string $ip)
 * @method string getProtocolVersion
 * @method self withProtocolVersion(string $protocolVersion)
 * @method Integer getSource
 * @method self withSource(Integer $source)
 * @method string getActivityDescription
 * @method self withActivityDescription(string $activityDescription)
 * @method string getActivityId
 * @method self withActivityId(string $activityId)
 * @method string getPrize
 * @method self withPrize(string $prize)
 * @method Integer getPrizeType
 * @method self withPrizeType(Integer $prizeType)
 * @method string getPhoneNumber
 * @method self withPhoneNumber(string $phoneNumber)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method Integer getIdType
 * @method self withIdType(Integer $idType)
 * @method string getCurrentUrl
 * @method self withCurrentUrl(string $currentUrl)
 * @method string getAgent
 * @method self withAgent(string $agent)
 * @method string getCookie
 * @method self withCookie(string $cookie)
 * @method string getSessionId
 * @method self withSessionId(string $sessionId)
 * @method string getMacAddress
 * @method self withMacAddress(string $macAddress)
 * @method string getReferer
 * @method self withReferer(string $referer)
 * @method string getUserName
 * @method self withUserName(string $userName)
 * @method string getCompanyName
 * @method self withCompanyName(string $companyName)
 * @method string getAddress
 * @method self withAddress(string $address)
 * @method string getIDNumber
 * @method self withIDNumber(string $iDNumber)
 * @method string getBankCardNumber
 * @method self withBankCardNumber(string $bankCardNumber)
 * @method string getRegisterIp
 * @method self withRegisterIp(string $registerIp)
 * @method int getRegisterDate
 * @method self withRegisterDate(int $registerDate)
 * @method string getExtendData
 * @method self withExtendData(string $extendData)
 * @method string getJsToken
 * @method self withJsToken(string $jsToken)
 * @method string getSDKToken
 * @method self withSDKToken(string $sDKToken)
 */
class CampaignPrevention extends Roa
{
    use R;
}

/**
 * @method string getCallerName
 * @method self withCallerName(string $callerName)
 * @method string getIp
 * @method self withIp(string $ip)
 * @method string getProtocolVersion
 * @method self withProtocolVersion(string $protocolVersion)
 * @method Integer getSource
 * @method self withSource(Integer $source)
 * @method string getPhoneNumber
 * @method self withPhoneNumber(string $phoneNumber)
 * @method string getEmail
 * @method self withEmail(string $email)
 * @method string getUserId
 * @method self withUserId(string $userId)
 * @method Integer getIdType
 * @method self withIdType(Integer $idType)
 * @method string getCurrentUrl
 * @method self withCurrentUrl(string $currentUrl)
 * @method string getAgent
 * @method self withAgent(string $agent)
 * @method string getCookie
 * @method self withCookie(string $cookie)
 * @method string getSessionId
 * @method self withSessionId(string $sessionId)
 * @method string getMacAddress
 * @method self withMacAddress(string $macAddress)
 * @method string getReferer
 * @method self withReferer(string $referer)
 * @method string getNickName
 * @method self withNickName(string $nickName)
 * @method string getCompanyName
 * @method self withCompanyName(string $companyName)
 * @method string getAddress
 * @method self withAddress(string $address)
 * @method string getJsToken
 * @method self withJsToken(string $jsToken)
 * @method string getSDKToken
 * @method self withSDKToken(string $sDKToken)
 * @method string getExtendData
 * @method self withExtendData(string $extendData)
 */
class BbsPrevention extends Roa
{
    use R;
}

/**
 * @method string getCallerName
 * @method self withCallerName(string $callerName)
 * @method string getSession
 * @method self withSession(string $session)
 * @method string getToken
 * @method self withToken(string $token)
 * @method string getSig
 * @method self withSig(string $sig)
 * @method Integer getPlatform
 * @method self withPlatform(Integer $platform)
 * @method string getScene
 * @method self withScene(string $scene)
 */
class AfsCheck extends Roa
{
    use R;
}
