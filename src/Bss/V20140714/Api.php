<?php

namespace AlibabaCloud\Bss\V20140714;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DescribeCashDetail describeCashDetail(array $options = [])
 * @method SubscriptionCreateOrderApi subscriptionCreateOrderApi(array $options = [])
 * @method VnoBatchRefundOrder vnoBatchRefundOrder(array $options = [])
 * @method DescribeCouponDetail describeCouponDetail(array $options = [])
 * @method SetResourceBusinessStatus setResourceBusinessStatus(array $options = [])
 * @method CreateOrder createOrder(array $options = [])
 * @method VnoPayCallBackNotify vnoPayCallBackNotify(array $options = [])
 * @method DescribeCouponList describeCouponList(array $options = [])
 * @method QueryForCssOrder queryForCssOrder(array $options = [])
 * @method OpenCallback openCallback(array $options = [])
 */
class BssApiResolver
{
    use ApiResolverTrait;
}

class V20140714Rpc extends Rpc
{
    /** @var string */
    public $product = 'Bss';

    /** @var string */
    public $version = '2014-07-14';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'bss';
}

class DescribeCashDetail extends V20140714Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getProductCode()
 * @method string getOwnerId()
 */
class SubscriptionCreateOrderApi extends V20140714Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['query']['productCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwnerId($value)
    {
        $this->data['OwnerId'] = $value;
        $this->options['query']['ownerId'] = $value;

        return $this;
    }
}

/**
 * @method string getParamStr()
 */
class VnoBatchRefundOrder extends V20140714Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamStr($value)
    {
        $this->data['ParamStr'] = $value;
        $this->options['query']['paramStr'] = $value;

        return $this;
    }
}

/**
 * @method string getCouponNumber()
 * @method $this withCouponNumber($value)
 */
class DescribeCouponDetail extends V20140714Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getBusinessStatus()
 * @method $this withBusinessStatus($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class SetResourceBusinessStatus extends V20140714Rpc
{
}

/**
 * @method string getParamStr()
 */
class CreateOrder extends V20140714Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamStr($value)
    {
        $this->data['ParamStr'] = $value;
        $this->options['query']['paramStr'] = $value;

        return $this;
    }
}

/**
 * @method string getParamStr()
 */
class VnoPayCallBackNotify extends V20140714Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamStr($value)
    {
        $this->data['ParamStr'] = $value;
        $this->options['query']['paramStr'] = $value;

        return $this;
    }
}

/**
 * @method string getStartDeliveryTime()
 * @method $this withStartDeliveryTime($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndDeliveryTime()
 * @method $this withEndDeliveryTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeCouponList extends V20140714Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getParamStr()
 */
class QueryForCssOrder extends V20140714Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamStr($value)
    {
        $this->data['ParamStr'] = $value;
        $this->options['query']['paramStr'] = $value;

        return $this;
    }
}

/**
 * @method string getParamStr()
 */
class OpenCallback extends V20140714Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamStr($value)
    {
        $this->data['ParamStr'] = $value;
        $this->options['query']['paramStr'] = $value;

        return $this;
    }
}
