<?php

abstract class ParentClass
{
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass
{
    // we use extra argument in child class but must be added default value
    public function prefixName($name, $greet="Good Morning"){
        if($name === 'John Doe'){
            $prefix = 'Mr. ';
        } elseif($name === 'Jane Doe'){
            $prefix = 'Mrs. ';
        } else{
            $prefix = ' ';
        }
        return "$greet $prefix  $name";
    }
}

$name = new ChildClass();
echo $name->prefixName('John Doe', 'Good Evening');
echo PHP_EOL;
echo $name->prefixName('Jane Doe');
echo PHP_EOL;
echo $name->prefixName('Ashikur Rahman');