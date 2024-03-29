<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4ced3efd049ae0136f0c43eb4a639023
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'J' => 
        array (
            'Jhonata\\Composer\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Jhonata\\Composer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4ced3efd049ae0136f0c43eb4a639023::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4ced3efd049ae0136f0c43eb4a639023::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4ced3efd049ae0136f0c43eb4a639023::$classMap;

        }, null, ClassLoader::class);
    }
}
