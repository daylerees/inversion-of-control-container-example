<?php

use Mockery as M;

use Example\Elephants;

class ElephantsTest extends PHPUnit_Framework_TestCase
{
    public function testTheElephantsAreSayingSomething()
    {
        $e = new Elephants;
        $r = $e->saySomething();
        $this->assertEquals('This disc sure is heavy.', $r);
    }

    /**
     * Clean up after yourself!
     */
    public function tearDown()
    {
        M::close();
    }
}
