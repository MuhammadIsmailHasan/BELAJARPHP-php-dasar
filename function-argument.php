<?php

// ERROR | default function tidak guna jika diletakan di argumen awal
function defaultArgument ($first = "muhammd", $last) {
    echo "$first : $last" . PHP_EOL;
}
// defaultArgument("hasan");


// TYPE DECLARATION (tipe data pada parameter)
function sumAll (int $first, int $last) {
    $total = $first + $last;
    return $total;
}
echo "total = " . sumAll(10, 10) . PHP_EOL;


// RETURN TYPE DECLARATION (memberikan tipe data return pada function)
function sumAllInteger (int $first, int $last) : int {
    $total = $first + $last;
    return $total;
}
var_dump(sumAllInteger(100, 40));
var_dump(sumAllInteger(100, "20"));
var_dump(sumAllInteger(100.5, 5.5));
// var_dump(sumAllInteger([100, 40])); // ERROR | karna tidak bisa mengubah array ke integer


// VARIABLE LENGHT ARGUMENTS LIST
function sumWithArray(...$values) : string {
    $total = 0;
    foreach ($values as $key => $value) {
        $total += $value;
    }
    return "total dengan variable lenght args list dari " . implode(",", $values) . " : $total" . PHP_EOL; 
}
$result = sumWithArray(1,2,3,4,6);
var_dump($result);
echo $result;
$data = [5,5,5,5];
echo sumWithArray(...$data); // data array dirubah ke argument list lalu dikirim ke function
// echo sumWithArray($data); ERROR | data arrray tidak bisa digunakan di parameter argument list
