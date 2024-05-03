<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit4a599d4605ff301b825b93a92ea73dc4
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

        spl_autoload_register(array('ComposerAutoloaderInit4a599d4605ff301b825b93a92ea73dc4', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit4a599d4605ff301b825b93a92ea73dc4', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit4a599d4605ff301b825b93a92ea73dc4::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}