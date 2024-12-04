<?php 
declare(strict_types=1);

$n = 123;
// echo gettype($n);

function sum(int $a, int $b): int{
    echo gettype($a) . "\n";
    echo gettype($b) . "\n";

    return $a + $b;
}

var_dump(sum(2, 4));

try{
    $sum = sum(2, 2);
    echo $sum;
} catch(TypeError $e){
    echo $e->getMessage();
}