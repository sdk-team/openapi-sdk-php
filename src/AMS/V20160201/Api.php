<?php

namespace AlibabaCloud\AMS\V20160201;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method CreateCloudApp createCloudApp(array $options = [])
 * @method ListProducts listProducts(array $options = [])
 * @method ModifyApp modifyApp(array $options = [])
 * @method CreateProduct createProduct(array $options = [])
 * @method QueryProductInfo queryProductInfo(array $options = [])
 * @method DescribeCloudApp describeCloudApp(array $options = [])
 * @method DeleteApp deleteApp(array $options = [])
 * @method CreateApp createApp(array $options = [])
 * @method QueryAppInfo queryAppInfo(array $options = [])
 * @method ListApps listApps(array $options = [])
 * @method ModifyProduct modifyProduct(array $options = [])
 * @method DeleteProduct deleteProduct(array $options = [])
 * @method ModifyCloudApp modifyCloudApp(array $options = [])
 * @method ResetCloudAppSecret resetCloudAppSecret(array $options = [])
 * @method UploadAppCert uploadAppCert(array $options = [])
 * @method DeleteCloudApp deleteCloudApp(array $options = [])
 * @method DescribeAppSecurity describeAppSecurity(array $options = [])
 */
class AMSApiResolver
{
    use ApiResolverTrait;
}

class V20160201Rpc extends Rpc
{
    /** @var string */
    public $product = 'AMS';

    /** @var string */
    public $version = '2016-02-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateCloudApp extends V20160201Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getBizToken()
 * @method $this withBizToken($value)
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getCount()
 * @method $this withCount($value)
 */
class ListProducts extends V20160201Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getBizToken()
 * @method $this withBizToken($value)
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPackageName()
 * @method $this withPackageName($value)
 * @method string getBundleId()
 * @method $this withBundleId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class ModifyApp extends V20160201Rpc
{
}

/**
 * @method string getBizToken()
 * @method $this withBizToken($value)
 * @method string getIndustryId()
 * @method $this withIndustryId($value)
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class CreateProduct extends V20160201Rpc
{
}

/**
 * @method string getBizToken()
 * @method $this withBizToken($value)
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getProductId()
 * @method $this withProductId($value)
 */
class QueryProductInfo extends V20160201Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCloudApp extends V20160201Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getBizToken()
 * @method $this withBizToken($value)
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class DeleteApp extends V20160201Rpc
{
}

/**
 * @method string getBizToken()
 * @method $this withBizToken($value)
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getPackageName()
 * @method $this withPackageName($value)
 * @method string getBundleId()
 * @method $this withBundleId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateApp extends V20160201Rpc
{
}

/**
 * @method string getBizToken()
 * @method $this withBizToken($value)
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class QueryAppInfo extends V20160201Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getBizToken()
 * @method $this withBizToken($value)
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getCount()
 * @method $this withCount($value)
 */
class ListApps extends V20160201Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getBizToken()
 * @method $this withBizToken($value)
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getProductId()
 * @method $this withProductId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class ModifyProduct extends V20160201Rpc
{
}

/**
 * @method string getBizToken()
 * @method $this withBizToken($value)
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getProductId()
 * @method $this withProductId($value)
 */
class DeleteProduct extends V20160201Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyCloudApp extends V20160201Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ResetCloudAppSecret extends V20160201Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getBizToken()
 * @method $this withBizToken($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getBizName()
 * @method $this withBizName($value)
 * @method string getEncodedCert()
 * @method $this withEncodedCert($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getCertMode()
 * @method $this withCertMode($value)
 */
class UploadAppCert extends V20160201Rpc
{
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCloudApp extends V20160201Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAppSecurity extends V20160201Rpc
{

    /** @var string */
    public $scheme = 'http';
}
