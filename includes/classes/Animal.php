<?php

use Birds\Bird;
use Canines\Canine;
use Felines\Feline;

class Animals
{
    /**
     * @var Bird
     */
    protected $bird;

    /**
     * @var Canine
     */
    protected $canine;

    /**
     * @var Feline
     */
    protected $feline;

    public function __construct(Bird $bird, Canine $canine, Feline $feline) 
    {
        $this->bird = $bird;
        $this->canine = $canine;
        $this->feline = $feline;
    }
}
