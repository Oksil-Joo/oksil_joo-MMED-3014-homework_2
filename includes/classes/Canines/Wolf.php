<?php

namespace Canines;

class Wolf extends Canine
{
    /**
     * @var string
     */
    protected $name = 'wolf';

    /**
     * @var string
     */
    private $sound = ' howl ';


    /**
     * A short message about eating this dessert.
     * @return string
    */
    public function speak(): string
    {
        return $this->name . " cries " . $this->sound;
    }
}