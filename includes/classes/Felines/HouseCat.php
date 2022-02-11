<?php

namespace Felines;

class HouseCat extends Feline
{
    /**
     * @var string
     */
    protected $name = 'houseCat';

    /**
     * @var string
     */
    private $food = ' cat food. ';

     /**
     * @var string
     */
    private $sound = ' meow. ';


    /**
     * A short message about eating this dessert.
     * @return string
    */
    public function eat(): string
    {
        return $this->name . " eats " . $this->food;
    }

    /**
     * A short message about eating this dessert.
     * @return string
    */
    public function speak(): string
    {
        return $this->name . " sounds " . $this->sound;
    }
}