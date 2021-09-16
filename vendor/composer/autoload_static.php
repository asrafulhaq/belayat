<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit07f2cf61f9cd8d9db38e156999e9de2a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Asrafulhaq\\Belayat\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Asrafulhaq\\Belayat\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit07f2cf61f9cd8d9db38e156999e9de2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit07f2cf61f9cd8d9db38e156999e9de2a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit07f2cf61f9cd8d9db38e156999e9de2a::$classMap;

        }, null, ClassLoader::class);
    }
}