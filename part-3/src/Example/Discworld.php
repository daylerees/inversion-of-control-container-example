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
     *
     * @param Turtle $turtle
     */
    public function __construct(Turtle $turtle)
    {
        $this->turtle = $turtle;
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
