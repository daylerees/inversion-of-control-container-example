<?php

use Mockery as M;

use Example\Container;

class DiscworldTest extends PHPUnit_Framework_TestCase
{
    /**
     * We have removed our container bindings.
     *
     * We've also switched back to type hinting our applications
     * dependencies. Since we are using an intelligent container
     * we can use the name of our first class as the key of an
     * object to retrieve from the container. The container will
     * know that there is no object stored with that name, but will
     * instead look for a known class (with a loaded definition).
     *
     * Next it will try to instantiate that class. If the class requires
     * additional type hinted dependencies then it will also instantiate
     * those classes, and their dependencies, and their dependencies,
     * recursively until all dependencies are met.
     *
     * If you resolve the lowest point of the dependency chain from
     * the container, then you no longer have to worry about binding
     * dependencies. Just type hint them!
     *
     * If your class requires additional parameters to be instantiated
     * then the container is unable to do so and the resolving process
     * will fail. To circumvent this problem you should bind these
     * complicated dependencies within the container.
     *
     * So now we aren't using any mocks within our tests. What if we
     * need to? How do we mock things that are resolved from the
     * container using type hinted injection? Find out in the
     * next part!
     */
    public function testTheUniverseCanBeCreatedAndElephantsAreVocal()
    {
        $c = Container::get();
        $d = $c->make('Example\Discworld');
        $r = $d->bigBang();
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
