<?php

namespace AlibabaCloud;

class Products
{

    /**
     * @var array
     */
    private static $products = [];

    /**
     * Products constructor.
     */
    public function __construct()
    {
        $data = CompileArray::getResponse();
        foreach ($data['Products']['Product'] as $product) {
            $productName = $product['@attributes']['name'];
            if (self::isSupported($productName)) {
                self::$products[$productName] = $productName;
            }
        }

        foreach (self::$products as $product) {
            CompileArray::dump($product);
            new Product($product);
        }
    }

    /**
     * @param $name
     *
     * @return bool
     */
    public static function isSupported($name)
    {
        return file_exists(dirname(__DIR__) . '/src/' . Product::getProductName($name));
    }

    /**
     * @param Product $product
     */
    public static function remove(Product $product)
    {
        unset(self::$products[$product->name]);
    }

    /**
     * @return int|void
     */
    public static function count()
    {
        return count(self::$products);
    }

    /**
     * @return array
     */
    public static function all()
    {
        return self::$products;
    }
}
