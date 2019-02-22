<?php

namespace AlibabaCloud\Acs;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Request\RoaRequest;
use Composer\Script\Event;
use Symfony\Component\Dotenv\Dotenv;

require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * Class Products
 *
 * @package AlibabaCloud\Acs
 */
class Products extends RoaRequest
{
    /**
     * @var bool
     */
    private static $init = false;

    /**
     * @var array
     */
    private static $products = [];

    private static function init()
    {
        if (self::$init === false) {
            $env = dirname(__DIR__) . '/../.env';
            if (is_readable($env)) {
                (new Dotenv())->load($env);
            }

            AlibabaCloud::accessKeyClient(
                \AlibabaCloud\Client\env('POP_ACCESS_KEY_ID'),
                \AlibabaCloud\Client\env('POP_ACCESS_KEY_SECRET')
            )
                        ->regionId('cn-hangzhou')
                        ->name('acs');
        }
        self::$init = true;
    }

    /**
     * @param Event $event
     */
    public static function update(Event $event)
    {
        self::init();

        $arguments = $event->getArguments();

        // Generate Product
        if (isset($arguments[0])) {
            self::getProduct($arguments[0]);

            return;
        }

        try {
            // Generate All
            foreach (self::getProducts() as $product) {
                sleep(3);
                self::getProduct($product['name']);
            }
        } catch (\Exception $exception) {
            dump($exception);
        }
    }

    /**
     * @param array $product
     * @param       $version
     *
     * @return bool
     */
    public static function getVersion(array $product, $version)
    {
        self::init();
        if ($product['type'] !== 'Outer') {
            return false;
        }

        $json_array = self::getResponse("/Version/{$product['name']}/$version");

        $apiList = [];
        if (isset($json_array['Apis'])) {
            $apis = $json_array['Apis']['Api'];
            foreach ($apis as $api) {

                if (isset($api['name'])) {
                    $apiName = $api['name'];
                } elseif (isset($api['@attributes']['name'])) {
                    $apiName = $api['@attributes']['name'];
                } else {
                    dump($api);
                    exit;
                }

                $apiXml = self::getApi($product['name'], $version, $apiName);

                unset($apiXml['ResultMapping'], $apiXml['@root'], $apiXml['ErrorMapping']);

                if (isset($apiXml['IspProtocol']['@attributes'])) {
                    $apiXml['IspProtocol'] = $apiXml['IspProtocol']['@attributes'];
                } elseif (isset($apiXml['IspProtocol']['interface'])) {

                } else {
                    dump('没有找到 IspProtocol', $apiXml);
                    exit;
                }

                if (isset($apiXml['IsvProtocol']['@attributes'])) {
                    $apiXml['IsvProtocol'] = $apiXml['IsvProtocol']['@attributes'];
                } elseif (isset($apiXml['IsvProtocol']['protocol'])) {

                } else {
                    dump('没有找到 IsvProtocol', $apiXml);
                    exit;
                }

                if (isset($apiXml['FlowControl']['@attributes'])) {
                    $apiXml['FlowControl'] = $apiXml['FlowControl']['@attributes'];
                } elseif (isset($apiXml['FlowControl']['userDefault'])) {

                } else {
                    dump('没有找到 FlowControl', $apiXml);
                }

                if (isset($apiXml['Parameters']['Parameter'])) {
                    foreach ($apiXml['Parameters']['Parameter'] as $parameter) {

                        if (isset($parameter['@attributes'])) {
                            // 可能会有多个参数
                            $p = $parameter['@attributes'];
                        } elseif (isset($parameter['tagName'])) {
                            // 只有一个参数的时候循环key就是@attributes
                            $p = $parameter;
                        } else {
                            dump($apiXml);
                            exit;
                        }
                        $tagName = $p['tagName'];
                        unset($p['tagName']);
                        $apiXml['Parameters'][$tagName] = $p;
                    }
                    unset($apiXml['Parameters']['Parameter']);
                }

                $apiXml['Attributes'] = $apiXml['@attributes'];

                unset(
                    $apiXml['attributes']['product'],
                    $apiXml['attributes']['name'],
                    $apiXml['@attributes']
                );

                $apiList[$apiName] = $apiXml;
            }
        }

        $result = [
            'product' => $product,
            'version' => $json_array['@attributes'],
            'api'     => $apiList,
        ];

        $dir = __DIR__ . "/{$product['name']}/$version";
        if (!file_exists($dir) && !mkdir($dir, 0777, true) && !is_dir($dir)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $dir));
        }

        file_put_contents($dir . '/api.php', '<?php return ' . var_export($result, true) . ';');
    }

    /**
     * @param $productName
     * @param $versionName
     * @param $apiName
     *
     * @return array
     */
    public static function getApi($productName, $versionName, $apiName)
    {
        self::init();

        return self::getResponse("/Api/{$productName}/{$versionName}/{$apiName}");
    }

    /**
     * @return array
     */
    public static function getProducts()
    {
        self::init();
        self::$products = [];
        $json_array     = self::getResponse();
        $p              = [];
        foreach ($json_array['Products']['Product'] as $product) {
            $p[]                                             = $product['@attributes'];
            self::$products[$product['@attributes']['name']] = $product['@attributes']['name'];
        }

        return $p;
    }

    /**
     * @param $product
     *
     */
    public static function getProduct($product)
    {
        self::init();
        $json_array = self::getResponse("/Product/$product");
        unset(self::$products[$product]);
        dump("生成： $product 剩余：" . count(self::$products));
        if (isset($json_array['Versions'])) {
            foreach ($json_array['Versions']['Version'] as $version) {
                if (isset($version['name'])) {
                    $v = $version['name'];
                } else {
                    $v = $version['@attributes']['name'];
                }

                self::getVersion($json_array['@attributes'], $v);
            }
        }
    }

    /**
     * @param string $pathPattern
     *
     * @return mixed
     */
    public static function getResponse($pathPattern = '/')
    {
        $model = new static();
        $model->host('acs.aliyun-inc.com');
        $model->version('2015-01-01');
        $model->format('XML');
        $model->client('acs');
        $model->pathPattern($pathPattern);
        $model->options([
                            'query' => [
                                'Format' => 'JSON',
                            ],
                        ]);

        $result = $model->request();
        $xml    = (string)$result->getResponse()->getBody();

        return xmlstr_to_array($xml);
    }
}
