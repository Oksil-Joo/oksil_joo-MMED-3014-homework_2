<?php

class Animal //define class name
{
    /**
     * @var string
     */
    protected $name = 'animal'; //define name

    /**
     * Animal drinks water.
     * @return string
     */
    public function drink(): string  //drink Method name
    {
        return $this->name . " drinks water. ";
    }

    /**
     * Animal eats
     * @return string
     */
    public function eat(): string //eat Method name
    {
        return $this->name . " eats";
    }
    /**
     * Animal speaks
     * @return string
     */
    public function speak(): string //speak Method name
    {
        return $this->name . " speaks";
    }
    /**
     * Animal can
     * @return string
     */
    public function move(): string //move Method name
    {
        return $this->name . " can";
    }
}