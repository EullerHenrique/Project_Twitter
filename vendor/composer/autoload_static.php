<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit95869223686fa6406fd5b0eb832d201b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit95869223686fa6406fd5b0eb832d201b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit95869223686fa6406fd5b0eb832d201b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
