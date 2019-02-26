<?php

namespace AlibabaCloud\SasApi\V20170626;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RoaRequest as Roa;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method GetIpHumanClientProbability getIpHumanClientProbability($options = [])
 */
class V20170626
{
    use ApiResolverTrait;
}

/**
 * @method string getIp
 * @method self withIp(string $ip)
 * @method Integer getSensType
 * @method self withSensType(Integer $sensType)
 * @method Integer getBusinessType
 * @method self withBusinessType(Integer $businessType)
 * @method string getRequestUrl
 * @method self withRequestUrl(string $requestUrl)
 * @method string getUserAgent
 * @method self withUserAgent(string $userAgent)
 * @method string getDeviceIdMd5
 * @method self withDeviceIdMd5(string $deviceIdMd5)
 * @method string getOs
 * @method self withOs(string $os)
 * @method Integer getDeviceType
 * @method self withDeviceType(Integer $deviceType)
 * @method Integer getConnectionType
 * @method self withConnectionType(Integer $connectionType)
 * @method Integer getCarrier
 * @method self withCarrier(Integer $carrier)
 */
class GetIpHumanClientProbability extends Roa
{
    use R;
}
