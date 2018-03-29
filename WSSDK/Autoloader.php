<?php

class WSSDK_Autoloader
{
    public static function autoloader($class)
    {
        require_once('WSSDK.php');
    }

    public static function register()
    {
        spl_autoload_register(array('WSSDK_Autoloader', 'autoloader'));
    }
}