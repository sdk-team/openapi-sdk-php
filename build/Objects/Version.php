<?php

namespace AlibabaCloud\Build\Objects;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Build\Common;
use AlibabaCloud\Build\Compile;
use AlibabaCloud\Build\Meta;
use AlibabaCloud\Client\Request\RoaRequest;
use AlibabaCloud\Client\Request\RpcRequest;
use AlibabaCloud\RequestResolverTrait;
use Nette\PhpGenerator\PhpNamespace;

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
            $this->originalData = Meta::getVersion($product->name, $this->name)->toArray();

            // Complete attributes
            if (isset($this->originalData['@attributes']['isolationType'])) {
                $this->isolationType = $this->originalData['@attributes']['isolationType'];
            }
            if (isset($this->originalData['@attributes']['apiStyle'])) {
                $this->apiStyle = $this->originalData['@attributes']['apiStyle'];
            }

            if (isset($this->originalData['Apis'])) {
                $this->resolveApis(
                    $this->originalData['Apis']['Api']
                );
            }

            // Write data file
            $this->writeDataFile();

            // Write Apis file
            $this->writeApisFile();
        }
    }

    private function writeDataFile()
    {
        $result = [
            'product' => $this->product,
            'version' => $this->originalData['@attributes'],
            'api'     => $this->apis,
        ];

        $versionName = 'V' . str_replace('-', '', $this->name);
        $dir         = __DIR__ . '/../../src/' . $this->product->getClassName() . "/$versionName";
        Common::mkdir($dir);
        $file = "$dir/Data.php";
        file_put_contents(
            $file,
            Compile::getTranspiledPhp(json_decode(json_encode($result), true))
        );
    }

    private function writeApisFile()
    {
        $versionName = 'V' . str_replace('-', '', $this->name);
        $dir         = __DIR__ . '/../../src/' . $this->product->getClassName() . "/{$versionName}";
        Common::mkdir($dir);
        $productName = $this->product->getClassName();
        $namespace   = new PhpNamespace("AlibabaCloud\\{$productName}\\$versionName");
        $namespace->addUse(RequestResolverTrait::class, 'R');

        /**
         * Generate Api Resolver
         *
         * @var Api $api
         */
        $namespace->addUse(ApiResolverTrait::class);
        $resolver = $namespace->addClass($versionName);
        $resolver->addTrait(ApiResolverTrait::class);
        foreach ($this->apis as $apiName => $api) {
            $method = lcfirst($apiName);
            $resolver->addComment("@method $apiName $method(\$options = [])");
        }

        /**
         * Generate Api Classes
         *
         * @var Api $api
         */
        foreach ($this->apis as $apiName => $api) {
            $class = $namespace->addClass($apiName);
            $class->addTrait(RequestResolverTrait::class);
            if ($this->apiStyle === 'RPC') {
                $namespace->addUse(RpcRequest::class, 'Rpc');
                $class->addExtend(RpcRequest::class);
            } else {
                $namespace->addUse(RoaRequest::class, 'Roa');
                $class->addExtend(RoaRequest::class);
            }
            if (isset($api->parameters['Parameter'])) {
                foreach ($api->parameters['Parameter'] as $parameterName => $parameter) {
                    $type = $this->getType($parameter);
                    $class->addComment("@method $type get$parameterName");
                    $pName = lcfirst($parameterName);
                    $class->addComment("@method self with$parameterName($type $$pName)");
                    //$class->addComment("@method set$parameterName");
                }
            }
        }

        file_put_contents(
            "$dir/Apis.php",
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
            case 'Long':
                return 'int';
            case 'RepeatList':
                return 'array';
            case 'Boolean':
                return 'bool';
            case 'Float':
                return 'float';
            default:
                return $parameter['type'];
        }
    }

    /**
     * @param         $apis
     */
    private function resolveApis($apis)
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
            $apiName              = self::formatApiName($apiName);
            $this->apis[$apiName] = new Api($this->product->name, $this->name, $apiName);
        }
    }

    /**
     * @param $name
     *
     * @return mixed
     */
    public static function formatApiName($name)
    {
        $name = str_replace(['-', '.', '_'], '', $name);

        return $name;
    }
}
