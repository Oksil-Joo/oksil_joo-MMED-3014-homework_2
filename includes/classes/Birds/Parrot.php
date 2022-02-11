<?php

namespace Birds;

class Parrot extends Bird
{
    /**
     * @var string
     */
    protected $name = 'parrot';

            /**
     * @var string
     */
    private $sound = ' human words or sounds. ';


    /**
     * A short message about eating this dessert.
     * @return string
    */
    public function speak(): string
    {
        return $this->name . " speaks " . $this->sound;
    }
}