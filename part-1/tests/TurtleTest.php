<?php

use Mockery as M;

use Example\Turtle;

class TurtleTest extends PHPUnit_Framework_TestCase
{
    public function testThatWeCanSnoopOnTheElephants()
    {
        $e = M::mock('Example\Elephants');
        $e->shouldReceive('saySomething')->once()->andReturn('Foo');
        $t = new Turtle($e);
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
