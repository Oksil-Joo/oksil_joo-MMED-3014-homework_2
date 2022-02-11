<?php
//import files
use Birds\Bird;
use Birds\Cardinal;
use Birds\Parrot;
use Canines\Canine;
use Canines\Dog;
use Canines\Wolf;
use Felines\Feline;
use Felines\HouseCat;
use Felines\Jaguar;
use Felines\Lion;
use All;

//multiple autoload functions
spl_autoload_register(function ($class) {
    $replaced = str_replace("\\", "/", $class);
    require_once '../includes/classes/' . $replaced . '.php';
});

//Method functions
$animal = new Animal();
var_dump($animal);
var_dump($animal->drink());
var_dump($animal->eat());

//Bird
$bird = new Bird();
$cardinal = new Cardinal();
$parrot = new Parrot();
var_dump($bird);
var_dump($bird->drink());
var_dump($bird->eat());
var_dump($bird->speak());
var_dump($bird->fly());

var_dump($cardinal);
var_dump($cardinal->drink());
var_dump($cardinal->eat());
var_dump($cardinal->speak());
var_dump($cardinal->fly());

var_dump($parrot);
var_dump($parrot->drink());
var_dump($parrot->eat());
var_dump($parrot->speak());
var_dump($parrot->fly());

//Canine
$canine = new Canine();
$dog = new Dog();
$wolf = new Wolf();

var_dump($canine);
var_dump($canine->drink());
var_dump($canine->eat());
var_dump($canine->speak());
var_dump($canine->run());

var_dump($dog);
var_dump($dog->drink());
var_dump($dog->eat());
var_dump($dog->speak());
var_dump($dog->run());

var_dump($wolf);
var_dump($wolf->drink());
var_dump($wolf->eat());
var_dump($wolf->speak());
var_dump($wolf->run());

//Feline
$feline = new Feline();
$houseCat = new HouseCat();
$jaguar = new Jaguar();
$lion = new Lion();

var_dump($feline);
var_dump($feline->drink());
var_dump($feline->eat());
var_dump($feline->speak());
var_dump($feline->run());

var_dump($houseCat);
var_dump($houseCat->drink());
var_dump($houseCat->eat());
var_dump($houseCat->speak());
var_dump($houseCat->run());

var_dump($jaguar);
var_dump($jaguar->drink());
var_dump($jaguar->eat());
var_dump($jaguar->speak());
var_dump($jaguar->run());

var_dump($lion);
var_dump($lion->drink());
var_dump($lion->eat());
var_dump($lion->speak());
var_dump($lion->run());


$amimal = new Animal($bird, $canine, $feline);
var_dump($animal);

die;