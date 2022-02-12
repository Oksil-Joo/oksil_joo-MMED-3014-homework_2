<?php

namespace Felines;
//HouseCat is in Canines folder
use Traits\Pets;
//import class name
class HouseCat extends Feline //define class name
{
    use Pets; // A short message about This animal is so cute that it is raised as a pet.
    /**
     * @var string
     */
    protected $name = 'A house cat'; //define name

    /**
     * @var string
     */
    private $food = ' cat food. '; //define food

     /**
     * @var string
     */
    private $sound = ' meow. '; //define sound


    /**
     * A short message about houseCat eats cat food.
     * @return string
    */
    public function eat(): string
    {
        return $this->name . " eats " . $this->food;
    }

    /**
     * A short message about houseCat speaks meow.
     * @return string
    */
    public function speak(): string
    {
        return $this->name . " speaks " . $this->sound;
    }
}