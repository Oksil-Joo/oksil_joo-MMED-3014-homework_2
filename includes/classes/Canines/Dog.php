<?php

namespace Canines;

class Dog extends Canine
{
    /**
     * @var string
     */
    protected $name = 'dog';

    /**
     * @var string
     */
    private $food = ' dog food ';

        /**
     * @var string
     */
    private $sound = ' arf ';



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
        return $this->name . " bikes " . $this->sound;
    }
}