<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit19f66705aa45c9a061ef7550763154e9
{
    public static $files = array (
        '9db40b6ab5393a6e86e41b56f8af779c' => __DIR__ . '/..' . '/codeinwp/themeisle-sdk/load.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit19f66705aa45c9a061ef7550763154e9::$classMap;

        }, null, ClassLoader::class);
    }
}
