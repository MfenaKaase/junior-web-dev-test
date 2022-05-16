<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c06c28974317f67663ec479ccffdc1b
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c06c28974317f67663ec479ccffdc1b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c06c28974317f67663ec479ccffdc1b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2c06c28974317f67663ec479ccffdc1b::$classMap;

        }, null, ClassLoader::class);
    }
}