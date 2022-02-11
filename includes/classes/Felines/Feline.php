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
}
