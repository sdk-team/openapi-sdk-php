<?php

namespace AlibabaCloud;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Request\RoaRequest;
use Composer\Script\Event;
use League\CLImate\TerminalObject\Basic\Dump;
use Symfony\Component\Dotenv\Dotenv;
use Sabre\Xml\Element\KeyValue;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Class Products
 *
 * @package AlibabaCloud\Acs
 */
class CompileArray extends RoaRequest
{
    /**
     * @var bool
     */
    private static $init = false;

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

    /**
     * @param Event $event
     */
    public static function compile(Event $event)
    {
        $arguments = $event->getArguments();

        // Generate Product
        if (isset($arguments[0])) {
            new Product($arguments[0]);

            return;
        }

        try {
            new Products();
        } catch (\Exception $exception) {
            dump($exception);
        }
    }

    /**
     * @param array $data
     *
     * @return string
     */
    public static function getTranspiledPhp(array $data)
    {
        // Use var_export as a starting point.
        $code = var_export($data, true);

        // Convert "array()" to "[]".
        $code = str_replace(['array (', ')'], ['[', ']'], $code);

        // Removing trailing whitespace.
        $code = preg_replace('/\s+$/m', '', $code);

        // Move arrays to the same line.
        $code = preg_replace('/=>\s*\n\s*\[/', '=> [', $code);

        // Get rid of numbered array indexes.
        $code = preg_replace('/(\s*)(\d+ => )/', '$1', $code);

        // Make empty arrays span only a single line.
        $code = preg_replace('/=>\s*\[\n\s*\]/', '=> []', $code);

        // Minify the PHP file
        $code = preg_replace('/\s+/', ' ', str_replace("\n", '', $code));

        return <<<EOPHP
<?php
return $code;

EOPHP;
    }

    /**
     * @param string $pathPattern
     *
     * @return array
     */
    public static function getResponse($pathPattern = '/')
    {
        self::init();
        $dir = __DIR__ . "/../build/Xml$pathPattern";
        if ($pathPattern === '/') {
            $fileName = $dir . 'products.xml';
        } else {
            $fileName = $dir . '.xml';
        }

        if (file_exists($fileName)) {
            if ($pathPattern === '/') {
                dump('读取产品列表缓存XML');
            } else {
                self::dump("读取缓存XML：$pathPattern");
            }

            $xml = file_get_contents($fileName);

            return xmlstr_to_array($xml);
        }

        try {
            $model = new static();
            $model->host('acs.aliyun-inc.com');
            $model->version('2015-01-01');
            $model->format('XML');
            $model->client('acs');
            $model->debug(true);
            $model->pathPattern($pathPattern);
            $result = $model->request();
        } catch (\Exception $exception) {
            self::dump('读取接口失败');

            return [];
        }

        $xml     = (string)$result->getResponse()->getBody();
        $dirName = dirname($fileName);
        if (!file_exists($dirName) && !mkdir($dirName, 0777, true) && !is_dir($dirName)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $dirName));
        }
        file_put_contents($fileName, $xml);

        return xmlstr_to_array($xml);
    }

    /**
     * @param $string
     */
    public static function dump($string)
    {
        $prefix = '剩余生成产品数：' . Products::count();
        if (is_string($string)) {
            dump($prefix . '  ' . $string);
        } else {
            dump($prefix, $string);
        }
    }
}
