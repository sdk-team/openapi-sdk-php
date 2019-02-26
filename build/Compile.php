<?php

namespace AlibabaCloud\Build;

use AlibabaCloud\Build\Objects\Products;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Request\RoaRequest;
use Composer\Script\Event;
use Exception;
use Nette\PhpGenerator\PhpNamespace;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Class Compile
 *
 * @package AlibabaCloud\Build
 */
class Compile extends RoaRequest
{

    /**
     * @param Event $event
     */
    public static function compile(Event $event)
    {
        $arguments = $event->getArguments();

        try {
            new Products(...$arguments);
        } catch (Exception $exception) {
            dump($exception);
        }

        self::serviceResolverFile();
    }

    private static function serviceResolverFile()
    {
        $productDir = dirname(__DIR__) . '/src';

        $namespace = new PhpNamespace("AlibabaCloud");
        $namespace->addUse(AlibabaCloud::class);
        $trait = $namespace->addTrait('ServiceResolverTrait');
        $trait->addComment("@mixin AlibabaCloud");
        $trait->addComment("@codeCoverageIgnore");
        foreach (glob($productDir . '/*') as $productDirectory) {
            if (is_dir($productDirectory)) {
                $v      = basename($productDirectory);
                $method = lcfirst($v);
                $trait->addComment("@method static $v\\$v $method()");
            }
        }

        Common::mkdir($productDir);
        file_put_contents(
            "$productDir/ServiceResolverTrait.php",
            "<?php\n\n" . $namespace
        );
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
