<?php

namespace Felines;
//Jaguar is in Canines folder
class Jaguar extends Feline //define class name
{
    /**
     * @var string
     */
    protected $name = 'A jaguar'; //define name

    /**
     * @var string
     */
    private $sound = ' roar. '; //define sound

    /**
     * A short message about jaguar speaks roar..
     * @return string
    */
    public function speak(): string
    {
        return $this->name . " speaks " . $this->sound;
    }
}