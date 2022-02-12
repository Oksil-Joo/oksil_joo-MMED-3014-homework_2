<?php
namespace Birds;
//Cardinal is in Birds folder
use Traits\Pets;
//import class name
class Cardinal extends Bird //define class name
{
    use Pets; // A short message about This animal is so cute that it is raised as a pet.
    /**
     * @var string
     */
    protected $name = 'A cardinal'; //define name

    /**
     * @var string
     */
    private $sound = ' a brilliant song. '; //define sound


    /**
     * A short message about bird sing a brilliant song.
     * @return string
    */
    public function speak(): string
    {
        return $this->name . " sing " . $this->sound;
    }
}