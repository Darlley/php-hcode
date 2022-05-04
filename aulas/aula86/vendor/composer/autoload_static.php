<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd80e01421678fe2c4fbc55c01a5126e0
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hcode\\Composer\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hcode\\Composer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd80e01421678fe2c4fbc55c01a5126e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd80e01421678fe2c4fbc55c01a5126e0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd80e01421678fe2c4fbc55c01a5126e0::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitd80e01421678fe2c4fbc55c01a5126e0::$classMap;

        }, null, ClassLoader::class);
    }
}
