<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit847f6a29a856de8c297cd347b3aaf1d2
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
        'A' => 
        array (
            'Aura\\SqlQuery\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
        'Aura\\SqlQuery\\' => 
        array (
            0 => __DIR__ . '/..' . '/aura/sqlquery/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit847f6a29a856de8c297cd347b3aaf1d2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit847f6a29a856de8c297cd347b3aaf1d2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit847f6a29a856de8c297cd347b3aaf1d2::$classMap;

        }, null, ClassLoader::class);
    }
}
