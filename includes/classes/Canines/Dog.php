<?php

namespace Canines;
//dog is in Canines folder
use Traits\Pets;
//import class name
class Dog extends Canine //define class name
{
    use Pets;  // A short message about This animal is so cute that it is raised as a pet.
    /**
     * @var string
     */
    protected $name = 'A dog'; //define name

    /**
     * @var string
     */
    private $food = ' dog food. '; //define food

    /**
     * @var string
     */
    private $sound = ' arf. '; //define sound



    /**
     * A short message about dog eats dog food.
     * @return string
    */
    public function eat(): string 
    {
        return $this->name . " eats " . $this->food;
    }

        /**
     * A short message about dog barks arf.
     * @return string
    */
    public function speak(): string
    {
        return $this->name . " barks " . $this->sound;
    }
}