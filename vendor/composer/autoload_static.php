<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit55228df597d9d39e105f9be8c5b716d1
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PantheonSystems\\UpstreamManagement\\Tests\\' => 41,
            'PantheonSystems\\UpstreamManagement\\' => 35,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PantheonSystems\\UpstreamManagement\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/pantheon-systems/upstream-management/tests',
        ),
        'PantheonSystems\\UpstreamManagement\\' => 
        array (
            0 => __DIR__ . '/..' . '/pantheon-systems/upstream-management/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit55228df597d9d39e105f9be8c5b716d1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit55228df597d9d39e105f9be8c5b716d1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit55228df597d9d39e105f9be8c5b716d1::$classMap;

        }, null, ClassLoader::class);
    }
}
