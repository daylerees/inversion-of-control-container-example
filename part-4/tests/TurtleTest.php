<?php

use Mockery as M;

use Example\Container;

class TurtleTest extends PHPUnit_Framework_TestCase
{
    public function testThatWeCanSnoopOnTheElephants()
    {
        $c = Container::get();
        $t = $c->make('Example\Turtle');
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
