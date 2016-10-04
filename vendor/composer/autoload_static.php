<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc84189ab2848a27679e8646858e29037
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EventsManagerOsm\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EventsManagerOsm\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc84189ab2848a27679e8646858e29037::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc84189ab2848a27679e8646858e29037::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
