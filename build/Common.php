<?php

namespace AlibabaCloud\Build;

/**
 * Class Common
 *
 * @package AlibabaCloud\Build
 */
class Common
{
    /**
     * @param $dir
     */
    public static function mkdir($dir)
    {
        if (!file_exists($dir) && !mkdir($dir, 0777, true) && !is_dir($dir)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $dir));
        }
    }
}
