<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3799a97e43458edf14fd303ec3e916ef
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit3799a97e43458edf14fd303ec3e916ef::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit3799a97e43458edf14fd303ec3e916ef::$classMap;

        }, null, ClassLoader::class);
    }
}
