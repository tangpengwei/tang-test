<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit86d3108edb88eca814781b0fe0b152c8
{
    public static $prefixLengthsPsr4 = array (
        'h' => 
        array (
            'hello\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'hello\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit86d3108edb88eca814781b0fe0b152c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit86d3108edb88eca814781b0fe0b152c8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit86d3108edb88eca814781b0fe0b152c8::$classMap;

        }, null, ClassLoader::class);
    }
}
