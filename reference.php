<?php

$nama = "ismail";
$tempNama1 = $nama; // $nama akan dicopy ke $tempName1, ketika nama diubah maka tempNama tidak berubah 
$nama = "hasan";
echo "$nama" . PHP_EOL;
echo "$tempNama1" . PHP_EOL;

$nama2 = "nabila";
$tempNama2 = &$nama2; // $nama2 akan di refence ke $tempName2, ketika nama diubah maka tempNama2 berubah 
$nama2 = "marshall";
echo "$nama2" . PHP_EOL;
echo "$tempNama2" . PHP_EOL;


// PADA FUNCTION ARGUMENT
function counter ($value) {
    $value++;
}
$value = 5;
counter($value);
counter($value);
counter($value);
echo "$value" . PHP_EOL;

function counterRef (&$value) { // maka ketika ditambah, akan merubah nilai value terys menerus
    $value++;
}
$valueRef = 10;
counterRef($valueRef);
counterRef($valueRef);
counterRef($valueRef);
echo "$valueRef" . PHP_EOL;

// PADA FUNCTION
function &getValue (){
    static $value = 100;
    return $value;
}

$a = &getValue();
echo "$a" . PHP_EOL;
$a = 200;

$b = &getValue();
echo "$a" . PHP_EOL;
echo "$b" . PHP_EOL;