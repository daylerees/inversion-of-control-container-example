<?php

namespace Example;

/**
 * The Discworld!
 * Thank you Terry Pratchett.
 */
class Discworld
{
    /**
     * Great A'Tuin
     *
     * @var Example\Turtle
     */
    private $turtle;

    /**
     * Set the turtle.
     */
    public function __construct()
    {
        $container = Container::get();
        $this->turtle = $container->make('turtle');
    }

    /**
     * Create the universe, and find out what the
     * elephants are grumbling about.
     *
     * @return string
     */
    public function bigBang()
    {
        return $this->turtle->listenToElephants();
    }
}
