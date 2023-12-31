<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita7c66d8037e8382eab51188819951a86
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita7c66d8037e8382eab51188819951a86::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita7c66d8037e8382eab51188819951a86::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita7c66d8037e8382eab51188819951a86::$classMap;

        }, null, ClassLoader::class);
    }
}
