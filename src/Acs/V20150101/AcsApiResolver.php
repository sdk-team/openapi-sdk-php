<?php

namespace AlibabaCloud\Acs\V20150101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ModifyApiNameInDaily modifyApiNameInDaily(array $options = [])
 * @method ModifyApiName modifyApiName(array $options = [])
 * @method DeleteApiOnline deleteApiOnline(array $options = [])
 * @method DeleteApiInDaily deleteApiInDaily(array $options = [])
 * @method StopPurchasedApi stopPurchasedApi(array $options = [])
 * @method ResumePurchasedApi resumePurchasedApi(array $options = [])
 * @method PurchaseApi purchaseApi(array $options = [])
 * @method PutFlowControl putFlowControl(array $options = [])
 */
class AcsApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'Acs';

    /** @var string */
    public $version = '2015-01-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'dsafsd';
}

/**
 * @method string getModifyName()
 * @method string getName()
 * @method string getProductName()
 * @method string getChangeId()
 * @method string getVersionName()
 */
class ModifyApiNameInDaily extends Roa
{
    /** @var string */
    public $pathPattern = '/modifyApiNameInDaily';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModifyName($value)
    {
        $this->data['ModifyName'] = $value;
        $this->options['query']['ModifyName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductName($value)
    {
        $this->data['ProductName'] = $value;
        $this->options['query']['ProductName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChangeId($value)
    {
        $this->data['ChangeId'] = $value;
        $this->options['query']['ChangeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVersionName($value)
    {
        $this->data['VersionName'] = $value;
        $this->options['query']['VersionName'] = $value;

        return $this;
    }
}

/**
 * @method string getModifyName()
 * @method string getName()
 * @method string getProductName()
 * @method string getChangeId()
 * @method string getVersionName()
 */
class ModifyApiName extends Roa
{
    /** @var string */
    public $pathPattern = '/modifyApiName';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModifyName($value)
    {
        $this->data['ModifyName'] = $value;
        $this->options['query']['ModifyName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductName($value)
    {
        $this->data['ProductName'] = $value;
        $this->options['query']['ProductName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChangeId($value)
    {
        $this->data['ChangeId'] = $value;
        $this->options['query']['ChangeId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVersionName($value)
    {
        $this->data['VersionName'] = $value;
        $this->options['query']['VersionName'] = $value;

        return $this;
    }
}

/**
 * @method string getEnvironment()
 * @method string getName()
 * @method string getProductName()
 * @method string getVersionName()
 */
class DeleteApiOnline extends Roa
{
    /** @var string */
    public $pathPattern = '/deleteApiOnline';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvironment($value)
    {
        $this->data['Environment'] = $value;
        $this->options['query']['Environment'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductName($value)
    {
        $this->data['ProductName'] = $value;
        $this->options['query']['ProductName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVersionName($value)
    {
        $this->data['VersionName'] = $value;
        $this->options['query']['VersionName'] = $value;

        return $this;
    }
}

/**
 * @method string getEnvironment()
 * @method string getName()
 * @method string getProductName()
 * @method string getVersionName()
 */
class DeleteApiInDaily extends Roa
{
    /** @var string */
    public $pathPattern = '/deleteApiInDaily';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvironment($value)
    {
        $this->data['Environment'] = $value;
        $this->options['query']['Environment'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductName($value)
    {
        $this->data['ProductName'] = $value;
        $this->options['query']['ProductName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVersionName($value)
    {
        $this->data['VersionName'] = $value;
        $this->options['query']['VersionName'] = $value;

        return $this;
    }
}

/**
 * @method string getPurchaseProduct()
 * @method string getChannel()
 * @method string getPurchaseVersion()
 * @method string getPurchaseApiName()
 */
class StopPurchasedApi extends Roa
{
    /** @var string */
    public $pathPattern = '/Api/StopPurchasedApi';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPurchaseProduct($value)
    {
        $this->data['PurchaseProduct'] = $value;
        $this->options['query']['PurchaseProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['Channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPurchaseVersion($value)
    {
        $this->data['PurchaseVersion'] = $value;
        $this->options['query']['PurchaseVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPurchaseApiName($value)
    {
        $this->data['PurchaseApiName'] = $value;
        $this->options['query']['PurchaseApiName'] = $value;

        return $this;
    }
}

/**
 * @method string getPurchaseProduct()
 * @method string getChannel()
 * @method string getPurchaseVersion()
 * @method string getPurchaseApiName()
 */
class ResumePurchasedApi extends Roa
{
    /** @var string */
    public $pathPattern = '/Api/ResumePurchasedApi';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPurchaseProduct($value)
    {
        $this->data['PurchaseProduct'] = $value;
        $this->options['query']['PurchaseProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['Channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPurchaseVersion($value)
    {
        $this->data['PurchaseVersion'] = $value;
        $this->options['query']['PurchaseVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPurchaseApiName($value)
    {
        $this->data['PurchaseApiName'] = $value;
        $this->options['query']['PurchaseApiName'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceDate()
 * @method string getQuota()
 * @method string getOrgCode()
 * @method string getPurchaseProduct()
 * @method string getChannel()
 * @method string getPurchaseVersion()
 * @method string getPurchaseApiName()
 * @method string getBillingType()
 */
class PurchaseApi extends Roa
{
    /** @var string */
    public $pathPattern = '/Api/PurchaseApi';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceDate($value)
    {
        $this->data['ServiceDate'] = $value;
        $this->options['query']['ServiceDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuota($value)
    {
        $this->data['Quota'] = $value;
        $this->options['query']['Quota'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrgCode($value)
    {
        $this->data['OrgCode'] = $value;
        $this->options['query']['OrgCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPurchaseProduct($value)
    {
        $this->data['PurchaseProduct'] = $value;
        $this->options['query']['PurchaseProduct'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['query']['Channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPurchaseVersion($value)
    {
        $this->data['PurchaseVersion'] = $value;
        $this->options['query']['PurchaseVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPurchaseApiName($value)
    {
        $this->data['PurchaseApiName'] = $value;
        $this->options['query']['PurchaseApiName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBillingType($value)
    {
        $this->data['BillingType'] = $value;
        $this->options['query']['BillingType'] = $value;

        return $this;
    }
}

/**
 * @method string getBodyContent()
 * @method string getApiName()
 * @method $this withApiName($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 * @method string getAccept()
 */
class PutFlowControl extends Roa
{
    /** @var string */
    public $pathPattern = '/FlowControl/[ProductName]/[VersionName]/[ApiName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBodyContent($value)
    {
        $this->data['BodyContent'] = $value;
        $this->options['form_params']['BodyContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccept($value)
    {
        $this->data['Accept'] = $value;
        $this->options['headers']['Accept'] = $value;

        return $this;
    }
}
