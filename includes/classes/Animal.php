<?php

class Animal
{
    /**
     * @var string
     */
    protected $name = 'animal';

    /**
     * Animals ate the food.
     * @return string
     */
    public function drink(): string 
    {
        return $this->name . " drinks water. ";
    }

    /**
     * Animals ate the food.
     * @return string
     */
    public function eat(): string
    {
        return $this->name . " eats";
    }

    public function speak(): string
    {
        return $this->name . " speaks";
    }

    public function move(): string
    {
        return $this->name . " can";
    }

}