<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4840c6ba82bb0cd22b86445cca2c003
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Cameo\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Cameo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4840c6ba82bb0cd22b86445cca2c003::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4840c6ba82bb0cd22b86445cca2c003::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
