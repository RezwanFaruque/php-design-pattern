<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc5f7b4ce6182b635909035ac94ab4a37
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc5f7b4ce6182b635909035ac94ab4a37::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc5f7b4ce6182b635909035ac94ab4a37::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc5f7b4ce6182b635909035ac94ab4a37::$classMap;

        }, null, ClassLoader::class);
    }
}
