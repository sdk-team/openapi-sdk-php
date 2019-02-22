<?php

namespace AlibabaCloud;

use Nette\PhpGenerator\PhpNamespace;
use AlibabaCloud\Client\Request\RpcRequest;

class Version
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $isolationType;

    /**
     * @var string
     */
    public $apiStyle;

    /**
     * @var array
     */
    public $apis = [];

    /**
     * @var array
     */
    public $originalData = [];

    /**
     * Product constructor.
     *
     * @param Product $product
     * @param string  $versionName
     */
    public function __construct(Product $product, $versionName)
    {
        $this->product = $product;
        $this->name    = $versionName;
        if ($product->type === 'Outer') {
            $this->originalData = CompileArray::getResponse("/Version/{$product->name}/$this->name");

            // Complete attributes
            if (isset($this->originalData['@attributes']['isolationType'])) {
                $this->isolationType = $this->originalData['@attributes']['isolationType'];
            }
            if (isset($this->originalData['@attributes']['apiStyle'])) {
                $this->apiStyle = $this->originalData['@attributes']['apiStyle'];
            }

            if (isset($this->originalData['Apis'])) {
                $this->resolveApis(
                    $this->originalData['Apis']['Api'],
                    $product,
                    $versionName
                );
            }

            // Write data file
            $this->writeDataFile($product, $versionName);

            // Write resolver file
            $this->writeResolverFile($product, $versionName);
        }
    }

    /**
     * @param Product $product
     * @param         $versionName
     */
    private function writeDataFile(Product $product, $versionName)
    {
        $result = [
            'product' => $product,
            'version' => $this->originalData['@attributes'],
            'api'     => $this->apis,
        ];

        $dir = __DIR__ . '/data/' . $product->name;
        if (!file_exists($dir) && !mkdir($dir, 0777, true) && !is_dir($dir)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $dir));
        }
        file_put_contents(
            "$dir/$versionName.php",
            CompileArray::getTranspiledPhp(json_decode(json_encode($result), true))
        );
    }

    /**
     * @param Product $product
     * @param         $versionName
     */
    private function writeResolverFile(Product $product, $versionName)
    {
        $dir = __DIR__ . '/data-resolver/' . $product->getClassName();
        if (!file_exists($dir) && !mkdir($dir, 0777, true) && !is_dir($dir)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $dir));
        }
        $versionName = str_replace('-', '', $versionName);
        $productName = $product->getClassName();
        $namespace   = new PhpNamespace("AlibabaCloud\\{$productName}\\V$versionName");
        $namespace->addUse(RpcRequest::class);
        /**
         * @var Api $api
         */
        foreach ($this->apis as $apiName => $api) {
            $class = $namespace->addClass($apiName);
            $class->setFinal();
            $class->setExtends(RpcRequest::class);
            if (isset($api->parameters['Parameter'])) {
                foreach ($api->parameters['Parameter'] as $parameterName => $parameter) {
                    if (!isset($parameter['type'])) {


                        dump($parameter);
                        continue;
                    }

                    $type = $this->getType($parameter);
                    $class->addComment("@method $type get$parameterName");
                    $class->addComment("@method self with$parameterName");
                    //$class->addComment("@method set$parameterName");
                }
            }
        }

        file_put_contents(
            "$dir/V{$versionName}.php",
            "<?php\n\n" . $namespace
        );
    }

    /**
     * @param array $parameter
     *
     * @return string
     */
    private function getType(array $parameter)
    {
        switch ($parameter['type']) {
            case 'String':
                return 'string';
            case 'List':
                return 'array';
            default:
                return $parameter['type'];
        }
    }

    /**
     * @param         $apis
     * @param Product $product
     * @param         $versionName
     */
    private function resolveApis($apis, Product $product, $versionName)
    {
        foreach ($apis as $api) {
            if (isset($api['name'])) {
                $apiName = $api['name'];
            } elseif (isset($api['@attributes']['name'])) {
                $apiName = $api['@attributes']['name'];
            } else {
                self::dump($api);
                exit;
            }
            $this->apis[$apiName] = new Api($product->name, $versionName, $apiName);
        }
    }
}
