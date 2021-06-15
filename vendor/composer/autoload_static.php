<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitab5aa99e983331e4fb191664237a6ba3
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fragen\\Git_Updater\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fragen\\Git_Updater\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Git_Updater',
        ),
    );

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
        'Fragen\\Singleton' => __DIR__ . '/..' . '/afragen/singleton/Singleton.php',
        'PAnD' => __DIR__ . '/..' . '/collizo4sky/persist-admin-notices-dismissal/persist-admin-notices-dismissal.php',
        'WPDI_Plugin_Installer_Skin' => __DIR__ . '/..' . '/afragen/wp-dependency-installer/wp-dependency-installer.php',
        'WP_Dependency_Installer' => __DIR__ . '/..' . '/afragen/wp-dependency-installer/wp-dependency-installer.php',
        'WordPressdotorg\\Plugin_Directory\\Readme\\Parser' => __DIR__ . '/..' . '/afragen/wordpress-plugin-readme-parser/class-parser.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitab5aa99e983331e4fb191664237a6ba3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitab5aa99e983331e4fb191664237a6ba3::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitab5aa99e983331e4fb191664237a6ba3::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitab5aa99e983331e4fb191664237a6ba3::$classMap;

        }, null, ClassLoader::class);
    }
}
