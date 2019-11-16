<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit24aae8c53e02d630a5e57f3b6648ed5e
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit24aae8c53e02d630a5e57f3b6648ed5e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit24aae8c53e02d630a5e57f3b6648ed5e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
