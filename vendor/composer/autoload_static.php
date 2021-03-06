<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit699a4c1b762d9d71b81044e7eca9a51f
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mat\\Greetr\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mat\\Greetr\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit699a4c1b762d9d71b81044e7eca9a51f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit699a4c1b762d9d71b81044e7eca9a51f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit699a4c1b762d9d71b81044e7eca9a51f::$classMap;

        }, null, ClassLoader::class);
    }
}
