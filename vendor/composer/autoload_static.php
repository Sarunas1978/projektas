<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9890acbd0f86605e9fb0ad5dfbae8fee
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9890acbd0f86605e9fb0ad5dfbae8fee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9890acbd0f86605e9fb0ad5dfbae8fee::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9890acbd0f86605e9fb0ad5dfbae8fee::$classMap;

        }, null, ClassLoader::class);
    }
}