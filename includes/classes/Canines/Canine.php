<?php
namespace Canines;

use Animal;

class Canine extends Animal
{
    /**
     * @var string
     */
    protected $name = 'canine';

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