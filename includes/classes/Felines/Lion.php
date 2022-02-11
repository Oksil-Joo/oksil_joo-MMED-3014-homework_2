<?php

namespace Felines;

class Lion extends Feline
{
    /**
     * @var string
     */
    protected $name = 'lion';

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