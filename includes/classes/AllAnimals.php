<?php

use Birds\Bird;
use Canines\Canine;
use Felines\Feline;
//Animals are in each folder
class AllAnimals //define class name
{
    /**
     * @var Bird
     */
    protected $bird; //define name

    /**
     * @var Canine
     */
    protected $canine; //define name

    /**
     * @var Feline
     */
    protected $feline; //define name

    /**
     * @param Bird
     * @param Canine
     * @param Feline
     */
    public function __construct(Bird $bird, Canine $canine, Feline $feline) 
    {
        $this->bird = $bird;
        $this->canine = $canine;
        $this->feline = $feline;
    }
    //import three different types of animals.
}
