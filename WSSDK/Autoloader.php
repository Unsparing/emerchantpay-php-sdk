<?php

class WSSDK_Autoloader
{
    public static function autoloader($class)
    {
        if (strpos($class, 'WSSDK') === 0) {
            $className = str_replace('_', '/', $class);
            $className = substr($className, 12);

            if (is_file($classFile = dirname(__FILE__) . '/'. $className.'.php')) {
                require_once($classFile);
            }
        }
    }

    public static function register()
    {
        spl_autoload_register(array('WSSDK_Autoloader', 'autoloader'));
    }
}