<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8abe95b6dbf7e494bc8cc7866b45b1ca
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Predis\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8abe95b6dbf7e494bc8cc7866b45b1ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8abe95b6dbf7e494bc8cc7866b45b1ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8abe95b6dbf7e494bc8cc7866b45b1ca::$classMap;

        }, null, ClassLoader::class);
    }
}
