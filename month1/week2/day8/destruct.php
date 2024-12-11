<?php 

// destruct method should not return a value
class Destruct{
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function __destruct(){
        echo "My name is {$this->name} and age is {$this->age}.";
    }
}

new Destruct('Ashikur Rahman', 21);