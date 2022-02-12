<?php

namespace Felines;
//Lion is in Canines folder
class Lion extends Feline //define class name
{
    /**
     * @var string
     */
    protected $name = 'A lion'; //define name

    /**
     * @var string
     */
    private $sound = ' roar. ';  //define sound

    /**
     * A short message about lion speaks roar.
     * @return string
    */
    public function speak(): string
    {
        return $this->name . " speaks " . $this->sound;
    }
}