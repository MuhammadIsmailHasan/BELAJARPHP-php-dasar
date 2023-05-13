<?php

$nama = "muhammad";
echo 'halo ' . $nama . PHP_EOL; 
echo 'halo ' . 100 . PHP_EOL;
// disararnkn tidak menggunakan tanda +

echo "halo $nama, ini parsing variabel" . PHP_EOL;
// parsing variabel hanya bisa digunakan dg double quot
echo "halo ${nama}s, ini curly brace" . PHP_EOL;

$toString = (string)100;
var_dump($toString);

$toInt = (int)"50";
var_dump($toInt);

$toIntWrong = (int)"oke";
var_dump($toIntWrong);

$toFloat = (float)"1.50";
var_dump($toFloat);

$toFloatWrong = (float)"1,50";
var_dump($toFloatWrong);

echo $nama[0] . PHP_EOL;
echo $nama[6] . PHP_EOL;
echo $nama[15] . PHP_EOL;
