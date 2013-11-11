<?php

use Mockery as M;

use Example\Container;
use Example\Discworld;

class DiscworldTest extends PHPUnit_Framework_TestCase
{
    /**
     * We have implemented an instance of an IoC container
     * within a singleton class.
     *
     * Our classes have been adjusted to retrieve dependencies
     * from the container rather than having them injected
     * through the constructor.
     *
     * We use a bindings.php file with our project and our
     * test environment to bind all instances of dependencies
     * within the container before our tests execute.
     *
     * Within our test we can replace the binding in the
     * container with our mocks to modify the dependencies
     * used by our classes.
     *
     * This is particularly useful in a framework where each
     * and every component is bound within the container. You
     * could replace the binding for the database component to
     * add an entirely new database layer to the system.
     *
     * Maybe you miss constructor injection? Switch to part 3
     * to learn how intelligent containers will allow use to
     * leverage this technique.
     */
    public function testTheUniverseCanBeCreatedAndElephantsAreVocal()
    {
        $t = M::mock('Example\Turtle');
        $t->shouldReceive('listenToElephants')->once()->andReturn('Foo');
        // This time we replace our container binding for
        // the turtle with our mock. When the Discworld
        // attempts to resolve it, it will receive our mock
        // instead.
        $c = Container::get();
        $c->instance('turtle', $t);
        $d = new Discworld();
        $r = $d->bigBang();
        $this->assertEquals('Foo', $r);
    }

    /**
     * Clean up after yourself!
     */
    public function tearDown()
    {
        M::close();
    }
}
