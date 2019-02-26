<?php

namespace AlibabaCloud\Build\Objects;

use AlibabaCloud\Build\Meta;

class Products
{

    /**
     * @var array
     */
    private static $queues = [];

    /**
     * @var array
     */
    public static $products = [];

    /**
     * Products constructor.
     *
     * @param null   $productName
     * @param string $versionName
     */
    public function __construct($productName = null, $versionName = 'all')
    {
        self::resolveQueue($productName, $versionName);

        foreach (self::$queues as $product => $version) {
            self::$products[$product] = new Product($product, $version);
        }
    }

    /**
     * @param null   $productName
     * @param string $versionName
     */
    private static function resolveQueue($productName = null, $versionName = 'all')
    {
        if ($productName === null) {
            self::getProductsList();
        } else {
            self::$queues[$productName] = $versionName;
        }
    }

    private static function getProductsList()
    {
        $data = Meta::getProducts()->toArray();
        foreach ($data['Products']['Product'] as $product) {
            $productName = $product['@attributes']['name'];
            if (self::isSupported($productName)) {
                self::$queues[$productName] = 'all';
            }
        }
    }

    /**
     * @param $name
     *
     * @return bool
     */
    public static function isSupported($name)
    {
        return file_exists(dirname(__DIR__) . '/../src/' . Product::getProductName($name));
    }

    /**
     * @param Product $product
     */
    public static function remove(Product $product)
    {
        unset(self::$queues[$product->name]);
    }

    /**
     * @return int|void
     */
    public static function count()
    {
        return count(self::$queues);
    }

    /**
     * @return array
     */
    public static function all()
    {
        return self::$queues;
    }
}
