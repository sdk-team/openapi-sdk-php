<?php

namespace AlibabaCloud\Build;

use Adbar\Dot;
use AlibabaCloud\Client\AlibabaCloud;
use Symfony\Component\Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Class Compile
 *
 * @package AlibabaCloud\Build
 */
class Meta extends Dot
{
    /**
     * @var bool
     */
    private static $init = false;

    /**
     * @var string
     */
    private $xml;

    /**
     * MetaRequest constructor.
     *
     * @param $xml
     */
    public function __construct($xml)
    {
        $this->xml = $xml;
        if (!$xml) {
            $array = [];
        } else {
            $array = xmlstr_to_array($xml);
        }
        parent::__construct($array);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->all();
    }

    /**
     * @return string
     */
    public function toXml()
    {
        return $this->xml;
    }

    /**
     * @return $this
     */
    public static function getProducts()
    {
        return self::getResponse('/');
    }

    /**
     * @param $productName
     * @param $versionName
     * @param $name
     *
     * @return Meta
     */
    public static function getApi($productName, $versionName, $name)
    {
        return self::getResponse("/Api/{$productName}/{$versionName}/{$name}");
    }

    /**
     * @param $product
     * @param $name
     *
     * @return $this
     */
    public static function getVersion($product, $name)
    {
        return self::getResponse("/Version/$product/$name");
    }

    /**
     * @param $name
     *
     * @return $this
     */
    public static function getProduct($name)
    {
        return self::getResponse("/Product/{$name}");
    }

    /**
     * @param $pathPattern
     *
     * @return $this
     */
    public static function getResponse($pathPattern)
    {
        self::init();
        $dir = __DIR__ . "/Xml$pathPattern";

        if ($pathPattern === '/') {
            $fileName = $dir . 'products.xml';
        } else {
            $fileName = $dir . '.xml';
        }

        if (file_exists($fileName)) {
            if ($pathPattern === '/') {
                dump('读取产品列表缓存XML');
            } else {
                Compile::dump("读取缓存XML：$pathPattern");
            }

            return new static(file_get_contents($fileName));
        }

        try {
            $result = AlibabaCloud::roaRequest()
                                  ->host('acs.aliyun-inc.com')
                                  ->version('2015-01-01')
                                  ->format('XML')
                                  ->client('acs')
                                  ->debug(true)
                                  ->pathPattern($pathPattern)
                                  ->request();

            $xml     = (string)$result->getResponse()->getBody();
            $dirName = dirname($fileName);
            Common::mkdir($dirName);
            file_put_contents($fileName, $xml);
        } catch (\Exception $exception) {
            Compile::dump('读取接口失败');
            $xml = '';
        }

        return new static($xml);
    }

    /**
     * Init Credential
     */
    private static function init()
    {
        if (self::$init === false) {
            $env = dirname(__DIR__) . '/.env';
            if (is_readable($env)) {
                (new Dotenv())->load($env);
            }

            AlibabaCloud::accessKeyClient(
                \AlibabaCloud\Client\env('POP_ACCESS_KEY_ID'),
                \AlibabaCloud\Client\env('POP_ACCESS_KEY_SECRET')
            )->regionId('cn-hangzhou')->name('acs');
        }
        self::$init = true;
    }
}
