<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06fb985f630d7c0cfdb0e1d4635bfa3c
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'cmViamao\\' => 9,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'cmViamao\\' => 
        array (
            0 => __DIR__ . '/../..' . '/control',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit06fb985f630d7c0cfdb0e1d4635bfa3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06fb985f630d7c0cfdb0e1d4635bfa3c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit06fb985f630d7c0cfdb0e1d4635bfa3c::$classMap;

        }, null, ClassLoader::class);
    }
}
