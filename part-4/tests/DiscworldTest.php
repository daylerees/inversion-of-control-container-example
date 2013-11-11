<?php

use Mockery as M;

use Example\Container;

class DiscworldTest extends PHPUnit_Framework_TestCase
{
    /**
     * By adding a binding for Example\Turtle we have
     * replaced it with our mock.
     *
     * Problems happened though. Explain global bindings
     * issue. Apologize. Cut to black.
     */
    public function testTheUniverseCanBeCreatedAndElephantsAreVocal()
    {
        $t = M::mock('Example\Turtle');
        $t->shouldReceive('listenToElephants')->andReturn('Foo');
        $c = Container::get();
        $c->instance('Example\Turtle', $t);
        $d = $c->make('Example\Discworld');
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
