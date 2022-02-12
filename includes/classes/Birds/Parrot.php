<?php

namespace Birds;
//Parrot is in Birds folder
use Traits\Pets;
//import class name
class Parrot extends Bird //define class name
{
    use Pets; // A short message about This animal is so cute that it is raised as a pet.
    /**
     * @var string
     */
    protected $name = 'A parrot'; //define name

            /**
     * @var string
     */
    private $sound = ' human words or sounds. '; //define sound


    /**
     * A short message about parrot speaks human words or sounds.
     * @return string
    */
    public function speak(): string
    {
        return $this->name . " speaks " . $this->sound;
    }


    /**
     * Return A short message about parrot eats fruits.
     * @return string
     */
    public function getFoods(): string 
    {
        return ' fruits. '; //to get $food
    }
}