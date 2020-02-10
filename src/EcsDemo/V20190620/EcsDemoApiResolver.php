<?php

namespace AlibabaCloud\EcsDemo\V20190620;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AttachDisk attachDisk(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateTestEcs createTestEcs(array $options = [])
 * @method DisableDisk disableDisk(array $options = [])
 * @method Fs fs(array $options = [])
 * @method GetInstance01 getInstance01(array $options = [])
 * @method HiFucker4 hiFucker4(array $options = [])
 * @method ListDisks00 listDisks00(array $options = [])
 * @method ModifyInstance modifyInstance(array $options = [])
 */
class EcsDemoApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'EcsDemo';

    /** @var string */
    public $version = '2019-06-20';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getAid()
 * @method $this withAid($value)
 */
class AttachDisk extends Rpc
{
}

/**
 * @method string getDeploymentSetId()
 * @method string getAutoRenewPeriod()
 * @method string getImageId()
 * @method string getClientToken()
 * @method string getSecurityGroupId()
 * @method string getInternetMaxBandwidthOut()
 * @method string getHostName()
 * @method string getPassword()
 * @method string getInstanceName()
 * @method string getPasswordInherit()
 * @method string getAutoRenew()
 * @method string getInternetChargeType()
 * @method string getInstanceType()
 * @method string getZoneId()
 * @method string getInternetMaxBandwidthIn()
 */
class CreateInstance extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeploymentSetId($value)
    {
        $this->data['DeploymentSetId'] = $value;
        $this->options['form_params']['DeploymentSetId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoRenewPeriod($value)
    {
        $this->data['AutoRenewPeriod'] = $value;
        $this->options['form_params']['AutoRenewPeriod'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageId($value)
    {
        $this->data['ImageId'] = $value;
        $this->options['form_params']['ImageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityGroupId($value)
    {
        $this->data['SecurityGroupId'] = $value;
        $this->options['form_params']['SecurityGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternetMaxBandwidthOut($value)
    {
        $this->data['InternetMaxBandwidthOut'] = $value;
        $this->options['form_params']['InternetMaxBandwidthOut'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHostName($value)
    {
        $this->data['HostName'] = $value;
        $this->options['form_params']['HostName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceName($value)
    {
        $this->data['InstanceName'] = $value;
        $this->options['form_params']['InstanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPasswordInherit($value)
    {
        $this->data['PasswordInherit'] = $value;
        $this->options['form_params']['PasswordInherit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoRenew($value)
    {
        $this->data['AutoRenew'] = $value;
        $this->options['form_params']['AutoRenew'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternetChargeType($value)
    {
        $this->data['InternetChargeType'] = $value;
        $this->options['form_params']['InternetChargeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceType($value)
    {
        $this->data['InstanceType'] = $value;
        $this->options['form_params']['InstanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['form_params']['ZoneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternetMaxBandwidthIn($value)
    {
        $this->data['InternetMaxBandwidthIn'] = $value;
        $this->options['form_params']['InternetMaxBandwidthIn'] = $value;

        return $this;
    }
}

/**
 * @method string getDailyTime()
 * @method $this withDailyTime($value)
 * @method string getNamespaceName()
 * @method $this withNamespaceName($value)
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getExtraParams()
 * @method string getChangeFreeStatus()
 * @method $this withChangeFreeStatus($value)
 * @method string getServerClientIp()
 * @method $this withServerClientIp($value)
 * @method string getOnlineTime()
 * @method $this withOnlineTime($value)
 * @method string getCloseTime()
 * @method $this withCloseTime($value)
 * @method string getGmtModified()
 * @method $this withGmtModified($value)
 * @method string getRelationPeople()
 * @method $this withRelationPeople($value)
 * @method string getNamespaceId()
 * @method $this withNamespaceId($value)
 * @method string getClientIp()
 * @method $this withClientIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectStatusStr()
 * @method $this withProjectStatusStr($value)
 * @method string getCreatePeopleName()
 * @method $this withCreatePeopleName($value)
 * @method string getMarketStr()
 * @method $this withMarketStr($value)
 * @method string getCreatePeopleBucId()
 * @method $this withCreatePeopleBucId($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getPlanEndTime()
 * @method $this withPlanEndTime($value)
 * @method string getCreatePeopleId()
 * @method $this withCreatePeopleId($value)
 * @method string getProjectDesc()
 * @method $this withProjectDesc($value)
 * @method string getChangeFreeOrderId()
 * @method $this withChangeFreeOrderId($value)
 * @method string getGmtCreate()
 * @method $this withGmtCreate($value)
 * @method string getMarket()
 * @method $this withMarket($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getPreTime()
 * @method $this withPreTime($value)
 * @method string getIdentityDTO()
 * @method string getPlanStartTime()
 * @method $this withPlanStartTime($value)
 * @method string getProjectStatus()
 * @method $this withProjectStatus($value)
 * @method string getProperties()
 * @method $this withProperties($value)
 */
class CreateTestEcs extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentityDTO($value)
    {
        $this->data['IdentityDTO'] = $value;
        $this->options['form_params']['IdentityDTO'] = $value;

        return $this;
    }
}

/**
 * @method string getTypeCode()
 * @method $this withTypeCode($value)
 */
class DisableDisk extends Rpc
{
}

/**
 * @method string getImageId()
 * @method string getClientToken()
 * @method string getInternetChargeType()
 */
class Fs extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageId($value)
    {
        $this->data['ImageId'] = $value;
        $this->options['form_params']['ImageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternetChargeType($value)
    {
        $this->data['InternetChargeType'] = $value;
        $this->options['form_params']['InternetChargeType'] = $value;

        return $this;
    }
}

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getExtraParams()
 * @method string getServerClientIp()
 * @method $this withServerClientIp($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getClientIp()
 * @method $this withClientIp($value)
 * @method string getIdentityDTO()
 * @method string getId()
 * @method $this withId($value)
 */
class GetInstance01 extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentityDTO($value)
    {
        $this->data['IdentityDTO'] = $value;
        $this->options['form_params']['IdentityDTO'] = $value;

        return $this;
    }
}

/**
 * @method array getResourceTypeCodes()
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getFromCache()
 * @method $this withFromCache($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getFilters()
 * @method string getEnv()
 * @method $this withEnv($value)
 * @method string getSiteType()
 * @method $this withSiteType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class HiFucker4 extends Rpc
{

    /** @var string */
    public $method = 'GET';

    /**
     * @param array $resourceTypeCodes
     *
     * @return $this
     */
	public function withResourceTypeCodes(array $resourceTypeCodes)
	{
	    $this->data['ResourceTypeCodes'] = $resourceTypeCodes;
		foreach ($resourceTypeCodes as $i => $iValue) {
			$this->options['query']['ResourceTypeCodes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $filters
     *
     * @return $this
     */
	public function withFilters(array $filters)
	{
	    $this->data['Filters'] = $filters;
		foreach ($filters as $i => $iValue) {
			$this->options['query']['Filters.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getExtraParams()
 * @method string getServerClientIp()
 * @method $this withServerClientIp($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getClientIp()
 * @method $this withClientIp($value)
 * @method string getIdentityDTO()
 * @method string getId()
 * @method $this withId($value)
 */
class ListDisks00 extends Rpc
{

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraParams($value)
    {
        $this->data['ExtraParams'] = $value;
        $this->options['form_params']['ExtraParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentityDTO($value)
    {
        $this->data['IdentityDTO'] = $value;
        $this->options['form_params']['IdentityDTO'] = $value;

        return $this;
    }
}

class ModifyInstance extends Rpc
{
}
