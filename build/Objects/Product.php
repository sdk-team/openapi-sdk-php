<?php

namespace AlibabaCloud\Build\Objects;

use AlibabaCloud\Build\Common;
use AlibabaCloud\Build\Compile;
use AlibabaCloud\Build\Meta;
use AlibabaCloud\VersionResolverTrait;
use Nette\PhpGenerator\PhpNamespace;
use RuntimeException;

class Product
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $type;

    /**
     * Product constructor.
     *
     * @param        $name
     * @param string $version
     */
    public function __construct($name, $version = 'all')
    {
        $this->name = $name;

        Compile::dump("生成： {$name}");
        $data = Meta::getProduct($name)->all();

        if (!isset($data['@attributes'])) {
            throw  new RuntimeException("没有找到产品 $name");
        }

        $this->type   = $data['@attributes']['type'];
        $this->domain = $data['@attributes']['domain'];

        if ($version === 'all' && isset($data['Versions'])) {
            $this->resolveVersions($data['Versions']['Version']);
        } else {
            $this->resolveVersions([
                                       [
                                           'name' => $version,
                                       ],
                                   ]);
        }

        $this->versionResolverFile();

        Products::remove($this);
    }

    private function versionResolverFile()
    {
        $productName = $this->getClassName();
        $productDir  = dirname(dirname(__DIR__)) . "/src/$productName";
        $namespace   = new PhpNamespace("AlibabaCloud\\{$productName}");
        $namespace->addUse(VersionResolverTrait::class, 'R');
        $class = $namespace->addClass($productName);
        $class->addTrait(VersionResolverTrait::class);

        foreach (glob($productDir . '/*') as $productDirectory) {
            if (is_dir($productDirectory)) {
                $v      = basename($productDirectory);
                $method = lcfirst($v);
                $namespace->addUse("AlibabaCloud\\$productName\\$v\\$v");
                $class->addComment("@method $v $method()");
            }
        }

        Common::mkdir($productDir);
        file_put_contents(
            "$productDir/$productName.php",
            "<?php\n\n" . $namespace
        );
    }

    /**
     * @param $versions
     */
    public function resolveVersions($versions)
    {
        foreach ($versions as $version) {
            if (isset($version['name'])) {
                $versionName = $version['name'];
            } else {
                $versionName = $version['@attributes']['name'];
            }

            new Version($this, $versionName);
        }
    }

    /**
     * @return string
     */
    public function getClassName()
    {
        return self::getProductName($this->name);
    }

    /**
     * @param $name
     *
     * @return string
     */
    public static function getProductName($name)
    {
        $array  = explode('-', $name);
        $string = '';
        foreach ($array as $i) {
            $i[0]   = strtoupper($i[0]);
            $string .= $i;
        }

        $array  = explode('_', $string);
        $string = '';
        foreach ($array as $i) {
            $i[0]   = strtoupper($i[0]);
            $string .= $i;
        }

        return $string;
    }

    /**
     * @return bool
     */
    public function isGenerated()
    {
        return file_exists(__DIR__ . '/' . $this->name);
    }
}
