<?php

use Mockery as M;

use Example\Discworld;

class DiscworldTest extends PHPUnit_Framework_TestCase
{
    /**
     * Welcome to the inversion of control container
     * example project.
     *
     * If you haven't already experienced the
     * dependency-injection-example package then you
     * should start there as we will be building upon
     * what we learned in that project.
     *
     * Go ahead and familiarize
     * yourself with the codebase. Our codebase is
     * set around Terry Pratchett's Discworld universe.
     *
     * We have the Discworld, which has a dependency on
     * ATuin, the giant turtle. ATuin requires all four
     * elephants as dependencies to support the disc.
     *
     * Examine the classes, and the tests to see how
     * everything works. In the next part we will
     * implement an IoC container.
     */
    public function testTheUniverseCanBeCreatedAndElephantsAreVocal()
    {
        $t = M::mock('Example\Turtle');
        $t->shouldReceive('listenToElephants')->once()->andReturn('Foo');
        $d = new Discworld($t);
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
