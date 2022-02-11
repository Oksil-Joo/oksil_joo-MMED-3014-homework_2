<?php

class Food
{
    /**
     * @var string
     */
    protected $name = 'food';

    /**
     * Animals ate the food.
     * @return string
     */
    public function eat(): string 
    {
        return "animals ate the " . $this->name . "!";
    }
}