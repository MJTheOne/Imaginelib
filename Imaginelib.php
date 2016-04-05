<?php
/**
 * Imagine Image Library for CodeIgniter
 *
 * @author     Marius Posthumus <https://github.com/MJTheOne>
 * @license    MIT License
 * @copyright  2016 Marius Posthumus
 * @link       https://github.com/MJTheOne/Imaginelib
 */

class Imaginelib
{
    public function __construct()
    {
        if (PHP_VERSION_ID < 50300) {
            spl_autoload_register( array( __CLASS__, 'autoload' ) );
        } else {
            spl_autoload_register( array( __CLASS__, 'autoload'), TRUE, FALSE );
        }
    }

    public function autoload( $class )
    {
        $path = $class;
        $path = str_replace('\\', DIRECTORY_SEPARATOR, $path) . '.php';
        if (strpos($class, 'Imagine') !== 0) {
            return;
        }

        include_once $path;
    }
}
