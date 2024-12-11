<?php

interface Animal
{
    public function makeSound();
}

class Cat implements Animal
{
    public function makeSound()
    {
        echo "Mew Mew";
    }
}

class Dog implements Animal
{
    public function makeSound()
    {
        echo "Ghew Ghew";
    }
}

echo (new Cat())->makeSound();
echo (new Dog())->makeSound();




interface Library
{
    public function book($name, $author);
    public function staff($name, $salary);
}

class ScienceLibrary implements Library
{
    public function book($name, $author){
        echo "This book name is {$name} and author {$author}.";
    }
    public function staff($name, $salary){
        echo "Staff name is {$name} and his salary {$salary}.";
    }
}
class MathLibrary implements Library
{
    public function book($name, $author){
        echo "This book name is {$name} and author {$author}.";
    }
    public function staff($name, $salary){
        echo "Staff name is {$name} and his salary {$salary}.";
    }
}

$science = new ScienceLibrary();
$science->book("abc", 'xyz');
$science->staff('Abbas Ali', 20000);

$math = new MathLibrary();
$math->book("Math", 'xyz');
$math->staff('Abdul Karim', 20000);