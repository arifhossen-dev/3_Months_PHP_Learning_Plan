<?php

/* 
    *** public - the property or method can be accessed from everywhere. This is default

    *** protected - the property or method can be accessed within the class and by classes derived from that class

    *** private - the property or method can ONLY be accessed within the class
*/

class Access
{
    public $name;
    protected $age;
    private $height;
}

$person = new Access();
$person->name = "Ashik"; // OK
$person->age = 21; // Error
$person->height = 5.8; // Error


class Fruitss {
    public $name;
    public $color;
    public $weight;
  
    function set_name($n) {  // a public function (default)
      $this->name = $n;
    }
    protected function set_color($n) { // a protected function
      $this->color = $n;
    }
    private function set_weight($n) { // a private function
      $this->weight = $n;
    }
  }
  
  $mango = new Fruitss();
  $mango->set_name('Mango'); // OK
  $mango->set_color('Yellow'); // ERROR
  $mango->set_weight('300'); // ERROR

