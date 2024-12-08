<?php 

// array_find()
$array = [
    'a' => 'dog',
    'b' => 'cat',
    'c' => 'cow',
    'd' => 'duck',
    'e' => 'goose',
    'f' => 'elephant',
    'name' => 'name'
];
// Find the first animal with a name longer than 5 characters.
$result = array_find($array, function($value){
    return  strlen($value) > 5;
});
var_dump($result); // 'elephant'

// Find the first animal whose name begins with f.
var_dump(array_find($array, function (string $value){
    return str_starts_with($value, 'c');
})); // 'cat'

var_dump(array_find($array, function (string $value, $key){
    return $key === $value;
})); // 'name'


// array_find_key()
$result = array_find_key($array, function($value){
    return  strlen($value) > 5;
});
var_dump($result); // 'f'

var_dump(array_find_key($array, function (string $value){
    return str_starts_with($value, 'c');
})); // 'c'


// array_all() — Checks if all array elements satisfy a callback function

var_dump(array_all($array, function (string $value) {
    return strlen($value) < 12;
})); // true
var_dump(array_all($array, function (string $value) {
    return strlen($value) < 6;
})); // false


// array_any() — Checks if at least one array element satisfies a callback function
var_dump(array_any($array, function (string $value) {
    return strlen($value) < 5;
})); // true



// mb_trim() remove beginning and ending white space
echo strlen(mb_trim("   Ashik   ")); // 5

// mb_ltrim() remove beginning  white space
echo strlen(mb_ltrim("   Ashik")); // 5

// mb_ltrim() remove ending  white space
echo strlen(mb_rtrim("Ashik   ")); //5 

// mb_ucfirst() — Make a string's first character uppercase
echo mb_ucfirst('hello world!'); // Hello world!

// mb_ucfirst() — Make a string's first character lowercase
echo mb_lcfirst('Hello world!'); // hello world!