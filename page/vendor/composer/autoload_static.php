<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit81ae8fad95114313073f847176e0452a
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shawosy\\Page\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shawosy\\Page\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit81ae8fad95114313073f847176e0452a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit81ae8fad95114313073f847176e0452a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit81ae8fad95114313073f847176e0452a::$classMap;

        }, null, ClassLoader::class);
    }
}
