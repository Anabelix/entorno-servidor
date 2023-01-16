<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef9f821d908e34949f26ad7b9d9b74e4
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef9f821d908e34949f26ad7b9d9b74e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef9f821d908e34949f26ad7b9d9b74e4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitef9f821d908e34949f26ad7b9d9b74e4::$classMap;

        }, null, ClassLoader::class);
    }
}