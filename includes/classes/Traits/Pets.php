<?php

namespace Traits;
//Feline is in Traits folder
trait Pets  //define class name
{
    /**
     * A short message about This animal is so cute that it is raised as a pet.
     * @return string
     */
    public function cute(): string //define methodName
    {
        return ' This animal is so cute that it is raised as a pet.';
    }
}