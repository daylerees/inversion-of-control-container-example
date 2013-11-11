<?php

use Mockery as M;

use Example\Container;
use Illuminate\Container\Container as IlluminateContainer;

class ContainerTest extends PHPUnit_Framework_TestCase
{
    public function testThatAContainerInstanceCanBeRetrieved()
    {
        $container = Container::get();
        $this->assertTrue($container instanceof IlluminateContainer);
    }

    public function testThatTheContainerInstanceIsAlwaysTheSame()
    {
        $container1 = Container::get();
        $container2 = Container::get();
        $container3 = Container::get();
        $this->assertTrue($container1 === $container2);
        $this->assertTrue($container2 === $container3);
    }

    public function testThatAnObjectCanBeStoredAndRetrievedFromTheContainer()
    {
        $testClass = new TestClass;
        $container = Container::get();
        $container->instance('foo', $testClass);
        $this->assertEquals($testClass, $container->make('foo'));
    }

    /**
     * Clean up after yourself!
     */
    public function tearDown()
    {
        M::close();
    }
}

class TestClass {}
