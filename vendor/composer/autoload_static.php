<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0cbdc4fc2fc4d6d57cc3c94f5123009a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0cbdc4fc2fc4d6d57cc3c94f5123009a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0cbdc4fc2fc4d6d57cc3c94f5123009a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}