<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit196560209f39504707825f1f9d16790a
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LifterLMS\\CLI\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LifterLMS\\CLI\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit196560209f39504707825f1f9d16790a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit196560209f39504707825f1f9d16790a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit196560209f39504707825f1f9d16790a::$classMap;

        }, null, ClassLoader::class);
    }
}
