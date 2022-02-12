<?php

namespace Canines;
//wolf is in Canines folder
class Wolf extends Canine //define class name
{
    /**
     * @var string
     */
    protected $name = 'a wolf'; //define name

    /**
     * @var string
     */
    private $sound = ' howl. '; //define sound


    /**
     * A short message about wolf cries howl.
     * @return string
    */
    public function speak(): string
    {
        return $this->name . " cries " . $this->sound;
    }
}