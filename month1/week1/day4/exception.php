<?php declare(strict_types=1);

function voter(int $age): bool
{
    if ($age < 18) {
        throw new Exception("You are not voter");
    }
    return true;
}

try {
    voter(11);
    echo "You are a voter";
} catch (Exception $e) {
    echo $e->getMessage();
}



function printName(string $name): string{    
    return $name;
}

try{
//    echo printName(22);
} catch(TypeError $e){
    echo $e->getMessage();
}

function evenNum(int $n): string{
    if($n % 2 !== 0){
        throw new Exception("{$n} is not even number");
    }
    return "{$n} is even number.";
}
 
try{
    echo evenNum(21);     
}catch(Exception $e){
    echo $e->getMessage();
}
