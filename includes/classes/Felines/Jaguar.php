<?php

namespace Felines;

class Jaguar extends Feline
{
    /**
     * @var string
     */
    protected $name = 'jaguar';

    /**
     * @var string
     */
    private $sound = ' roar. ';

    /**
     * A short message about eating this dessert.
     * @return string
    */
    public function speak(): string
    {
        return $this->name . " sounds " . $this->sound;
    }
}