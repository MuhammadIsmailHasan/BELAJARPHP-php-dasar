<?php

// MENGAKSES VARIABLES DILUAR ANONYMOUS FUNCTION
$first = "ismail";
$penggunaanUse = function () use ($first) {
    echo "guna use, $first" . PHP_EOL;
};
$penggunaanUse();

$arrowFunction = fn () => "hallo $first" . PHP_EOL; // ERROR jika di echo di dalam arrow function
echo $arrowFunction();