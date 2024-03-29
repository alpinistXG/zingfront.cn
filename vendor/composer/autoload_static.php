<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5daf6fdf470391aaf07c169b7caf7a6e
{
    public static $files = array (
        '04c6c5c2f7095ccf6c481d3e53e1776f' => __DIR__ . '/..' . '/mustangostang/spyc/Spyc.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'pconfig\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'pconfig\\' => 
        array (
            0 => __DIR__ . '/..' . '/oopsguy/pconfig/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5daf6fdf470391aaf07c169b7caf7a6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5daf6fdf470391aaf07c169b7caf7a6e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
