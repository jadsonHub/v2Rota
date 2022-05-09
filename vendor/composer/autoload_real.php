<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit3274a374f1b34e2d724d0842ea8a51b5
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit3274a374f1b34e2d724d0842ea8a51b5', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit3274a374f1b34e2d724d0842ea8a51b5', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit3274a374f1b34e2d724d0842ea8a51b5::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
