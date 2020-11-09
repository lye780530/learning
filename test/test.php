<?php
/**
 * ${PARAM_DOC}
 * @return ${TYPE_HINT}
 * ${THROWS_DOC}
 * @url
 * @http
 * Todo:
 * User: 黑子
 * Date: 2020-11-02 09:43
 */

class test
{
    public static $prefixLengthsPsr4 = array (
        't' =>
            array (
                'think\\composer\\' => 15,
                'think\\' => 6,
                'traits\\' => 7,
            ),
        'a' =>
            array (
                'app\\' => 4,
            ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\composer\\' =>
            array (
                0 => __DIR__ . '/..' . '/topthink/think-installer/src',
            ),
        'app\\' =>
            array (
                0 => __DIR__ . '/../..' . '/application',
            ),
        'think\\' =>
            array (
                0 => __DIR__
            ),
        'traits\\' =>
            array (
                0 => __DIR__ . '/traits'
            ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => '/Users/time/www/tp5/extend'
    );

    public static $classMap = array (
        0 => '/Users/time/www/tp5/runtime/classmap.php' // 对应这个php文件
    );
}