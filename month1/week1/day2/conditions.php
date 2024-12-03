<?php 

$n = 22;
// if/else
if($n < 10){
    echo "{$n} less than 10";
}elseif($n < 20){
    echo "{$n} less than 20";
}else{
    echo "{$n} grater than 20";
}

// ternary
echo ($n % 2 == 0) ? "Even" : "Odd";

// switch case
$color = "red";
switch ($color){
    case "red":
        echo "This is red.";
        break;
    case "blue":
        echo "This is blue.";
        break;
    case "green":
        echo "This is green.";
        break;
    default:
        echo "color not found.";
}