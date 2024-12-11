<?php 

abstract class Car
{
    public function __construct(protected string $name){

    }
    abstract protected function introduction();
}

class Toyota extends Car
{
    public function introduction(){
        echo "This is {$this->name}. ";
    }
}

class Volvo extends Car
{
    public function introduction(){
        echo "This is {$this->name}.";
    }
}


$toyota = new Toyota("Toyota");
$toyota->introduction();

$volvo = new Volvo("Volvo");
$volvo->introduction();