<?php
namespace Birds;

use Animal;

class Bird extends Animal
{
    /**
     * @var string
     */
    protected $name = 'bird';

     /**
     * A short message about tne animal eats food.
     * @return string
     */
    public function eat(): string
    {
        //one way to use get utensils
        $parentResult = parent::eat();
        $food = $this->getFoods();

        return $parentResult . $food . ".";

    }

    /**
     * Return A short message about tne animal eats seed.
     * @return string
     */
    public function getFoods(): string 
    {
        return ' seed ';
    }
}