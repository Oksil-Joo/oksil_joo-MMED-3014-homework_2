<?php
namespace Felines;

use Animal;

class Feline extends Animal
{
    /**
     * @var string
     */
    protected $name = 'feline';

    /**
     * @var string
     */
    private $food = ' a cow';


    /**
     * A short message about eating this dessert.
     * @return string
    */
    public function eat(): string
    {
        $parentResult = parent::eat();
        return $parentResult . $this->food . ".";
    }

    public function move(): string
    {
        //one way to use get utensils
        $parentResult = parent::move();
        $run = $this->getRuns();

        return $parentResult . $run;

    }

    /**
     * Return A short message about tne animal eats seed.
     * @return string
     */
    public function getRuns(): string 
    {
        return ' run well.';
    }
}
