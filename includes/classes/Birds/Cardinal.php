<?php
namespace Birds;

use Traits\Pets;

class Cardinal extends Bird
{
    use Pets;
    /**
     * @var string
     */
    protected $name = 'cardinal';

    /**
     * @var string
     */
    private $sound = ' a brilliant song ';


    /**
     * A short message about eating this dessert.
     * @return string
    */
    public function speak(): string
    {
        return $this->name . " sing " . $this->sound;
    }
}