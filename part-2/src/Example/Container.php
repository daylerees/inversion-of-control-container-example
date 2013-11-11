<?php

namespace Example;

use Illuminate\Container\Container as IlluminateContainer;

/**
 * We need to be able to access our container from
 * across the system. Normally the framework would
 * provide a means for making this possible, however,
 * we will implement a singleton pattern to achieve
 * the same result.
 *
 * We create a class with a private constructor and
 * a private static value. The first call to the
 * public static get() method will create the
 * container and return it. All subsequent calls
 * will return the same container.
 *
 * The container can be used to store and retrieve
 * instances of classes and objects. Go ahead and
 * take a look at the tests to see how it works.
 */
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
