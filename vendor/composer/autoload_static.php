<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit99860b2ae7e4b7c6386893f905c93f7a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit99860b2ae7e4b7c6386893f905c93f7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit99860b2ae7e4b7c6386893f905c93f7a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}