<?php 

use Arifhossen\TakaFormat\TakaFormat;

require 'vendor/autoload.php';

class taka{
    use TakaFormat;
    function takaFormat($n){
        return $this->takaSeperatedByComma($n);
    }
}

$taka = new taka();
echo $taka->takaFormat(1000000); // ৳10,00,000 
echo $taka->takaFormat(999999);  // ৳9,99,999
