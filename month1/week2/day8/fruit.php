<?php 
class Fruit{
    // Properties
    public $name;
    public $color;

    // Methods 
    public function set_name($name){
        $this->name = $name;
    }
    public function get_name(){
        return $this->name;
    }

    public function set_color($color){
        $this->color = $color;
    }
    public function get_color(){
        return $this->color;
    }
}

$apple = new Fruit();
$apple->set_name("Apple");
$apple->set_color("Red");

echo "Fruits name: " . $apple->get_name();
echo PHP_EOL;
echo "Color: " . $apple->get_color();

var_dump($apple instanceof Fruit); // check if an object belongs to a specific class