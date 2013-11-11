<?php

namespace Example;

use Illuminate\Container\Container as IlluminateContainer;

class Container
{
    /**
     * The Illuminate container instance.
     *
     * @var Illuminate\Container\Container
     */
    private static $container;

    /**
     * Private constructor to enforce a singleton pattern.
     *
     * @return void
     */
    private function _construct() {}

    /**
     * Retrieve a single container instance.
     *
     * @return Illuminate\Container\Container
     */
    public static function get()
    {
        if (is_null(self::$container)) {
            self::$container = new IlluminateContainer;
        }
        return self::$container;
    }
}
