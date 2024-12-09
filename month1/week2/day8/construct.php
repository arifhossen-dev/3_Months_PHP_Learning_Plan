<?php 

class Fruits{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    public function get_name(){
        return $this->name;
    }
    public function get_color(){
        return $this->color;
    }
}

$apple = new Fruits('Apple', 'Red');
$banana = new Fruits('Banana', 'Yellow');

echo "The fruit is {$apple->get_name()} and color is {$apple->get_color()}.";
echo "The fruit is {$banana->get_name()} and color is {$banana->get_color()}.";

