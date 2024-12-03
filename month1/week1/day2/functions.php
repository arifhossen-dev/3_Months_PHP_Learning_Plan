<?php 

function sayHi($great, $name){
    echo $great . ", " . $name;
}
sayHi("Good Morning", "Ashikur Rahman");
sayHi("Good evening", "Ashikur Rahman");

function sum($a, $b){
    return $a + $b;
}
echo sum(10, 20);