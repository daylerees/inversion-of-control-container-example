<?php

use Mockery as M;

use Example\Turtle;
use Example\Container;

class TurtleTest extends PHPUnit_Framework_TestCase
{
    public function testThatWeCanSnoopOnTheElephants()
    {
        $e = M::mock('Example\Elephants');
        $e->shouldReceive('saySomething')->once()->andReturn('Foo');
        // This time we replace our container binding for
        // the elephants with our mock. When the Turtle
        // attempts to resolve it, it will receive our mock
        // instead.
        $c = Container::get();
        $c->instance('elephants', $e);
        $t = new Turtle();
        $r = $t->listenToElephants();
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
