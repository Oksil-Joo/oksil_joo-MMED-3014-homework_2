<?php
namespace Felines;
//Feline is in Canines folder
use Animal;
//import class name
class Feline extends Animal //define class name
{
    /**
     * @var string
     */
    protected $name = 'A feline'; //define name
 
    /**
     * @var string
     */
    private $food = ' a cow'; //define food


    /**
     * A short message about feline eats a cow.
     * @return string
    */
    public function eat(): string
    {
        //import return of eat methodName in Animal.php
        $parentResult = parent::eat(); 
        return $parentResult . $this->food . ".";
    }

     /**
     * A short message about feline can run well.
     * @return string
    */
    public function move(): string
    {
        //import return of move methodName in Animal.php
        $parentResult = parent::move();
        $run = $this->getRuns(); //to get $run

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
