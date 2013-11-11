<?php

namespace Example;

/**
 * Great A'Tuin. The turtle supporting the
 * elephants that support the Discworld.
 */
class Turtle
{
    /**
     * Our four elephants.
     *
     * @var Example\Elephants
     */
    private $elephants;

    /**
     * Set our elephants.
     *
     * @param Elephants $elephants
     */
    public function __construct(Elephants $elephants)
    {
        $this->elephants = $elephants;
    }

    /**
     * Listen to what the elephants are saying.
     *
     * @return string
     */
    public function listenToElephants()
    {
        return $this->elephants->saySomething();
    }
}
