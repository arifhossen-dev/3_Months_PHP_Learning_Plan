<?php 

// class Fruit{
//     public $name;
//     public $color;

//     public function __construct($name, $color){
//         $this->name = $name;
//         $this->color = $color;
//     }

//     protected function intro(){
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
// }

// class Strawberry extends Fruit{
//     public function message(){
//         echo "{$this->name} is a very testy.";
//         echo $this->intro();
//     }

// }

// $strawberry = new Strawberry('Strawberry', 'Red');
// // $strawberry->intro(); // this is error because intro() method are protected 
// $strawberry->message();



// PHP - Overriding Inherited Methods

class Fruit{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class Strawberry extends Fruit{
    public $name;
    public $color;
    public $weight;

    public function __construct($name, $color, $weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color} and weight is {$this->weight} gram.";
    }

}

$strawberry = new Strawberry('Strawberry', 'Red', 30);
// $strawberry->intro(); // this is error because intro() method are protected 
$strawberry->intro();



// Final

class Vehicle{
    final public function intro(){
        // code 
    }
}
 
class Car extends Vehicle{
    // This is error because of the intro() method is Final.
    public function intro(){
        // code 
    }
}

// if class is final
final class Inherit{
    // no one extends this class
}