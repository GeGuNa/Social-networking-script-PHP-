<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b06442cf7191946fafc733161482787
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b06442cf7191946fafc733161482787::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b06442cf7191946fafc733161482787::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5b06442cf7191946fafc733161482787::$classMap;

        }, null, ClassLoader::class);
    }
}
