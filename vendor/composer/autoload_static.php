<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c9be92308d165a73638d30288d70a90
{
    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'viniciusdnb\\public\\' => 19,
            'viniciusdnb\\portifolio\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'viniciusdnb\\public\\' => 
        array (
            0 => __DIR__ . '/../..' . '/public',
        ),
        'viniciusdnb\\portifolio\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7c9be92308d165a73638d30288d70a90::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7c9be92308d165a73638d30288d70a90::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7c9be92308d165a73638d30288d70a90::$classMap;

        }, null, ClassLoader::class);
    }
}
