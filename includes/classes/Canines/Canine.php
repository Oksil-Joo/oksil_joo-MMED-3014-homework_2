<?php
namespace Canines;
//Canine is in Canines folder
use Animal;
//import class name
class Canine extends Animal //define class name
{
    /**
     * @var string
     */
    protected $name = 'A canine'; //define name

    /**
     * @var string
     */
    private $food = ' a cow'; //define food


    /**
     * A short message about canine eats a cow.
     * @return string
    */
    public function eat(): string
    {
        $parentResult = parent::eat(); //import return of eat methodName in Animal.php
        return $parentResult . $this->food . ".";
    }

    /**
     * A short message about canine can run well.
     * @return string
    */
    public function move(): string
    {
        ////import return of move methodName in Animal.php
        $parentResult = parent::move();
        $run = $this->getRuns();

        return $parentResult . $run;

    }

    /**
     * to get $run
     * @return string
     */
    public function getRuns(): string 
    {
        return ' run well.';
    }
}