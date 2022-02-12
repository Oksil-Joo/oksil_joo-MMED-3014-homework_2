<?php
namespace Birds;
//Brid is in Birds folder
use Animal;
//import class name
class Bird extends Animal //define class name
{
    /**
     * @var string
     */
    protected $name = 'A bird'; //define name

     /**
     * A short message about tne animal eats food.
     * @return string
     */
    public function eat(): string
    {
        
        $parentResult = parent::eat();  //import return of eat methodName in Animal.php
        $food = $this->getFoods();  //to use get $food

        return $parentResult . $food . "."; // bird eats seeds.

    }

    /**
     * define getFoods function
     * @return string
     */
    public function getFoods(): string 
    {
        return ' seeds '; // to get $food
    }

    public function move(): string
    {
        //import return of move methodName in Animal.php
        $parentResult = parent::move();
        $fly = $this->getFlys();

        return $parentResult . $fly;
        //result: bird can fly well.

    }

    /**
     * Return A short message about tne bird eats seed.
     * @return string
     */
    public function getFlys(): string 
    {
        return ' fly well.'; // to get $fly
    }
}