<?php

namespace Birds;

use Traits\Pets;

class Parrot extends Bird
{
    use Pets;
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


    /**
     * Return A short message about tne animal eats seed.
     * @return string
     */
    public function getFoods(): string 
    {
        return ' fruits. ';
    }
}