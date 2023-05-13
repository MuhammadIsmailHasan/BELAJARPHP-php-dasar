<?php
// ANONYMOUS FUNCTION ADALAH CLOSURE (sebutan lain)
// ANONYMOUS FUNCTION DI TARUH DI VARIABLE
$sayHello = function () {
    echo "hello" . PHP_EOL;
}; // jgn lupa titik koma
$sayHello();

$sayHelloArg = function (string $name) {
    echo "hello $name" . PHP_EOL;
};
$sayHelloArg("ismail");

// ANONYMOUS FUNCTION DITULIS LANGSUNG DALAM ARGUMENT
function iniVariableFunction(string $name, $iniFunction) { // iniFunction adl teori variable function
    $result = $iniFunction($name); // CONTOH JALANNYA ANONYMOUS FUNCTION DI TARUH DI VARIABLE
    echo "hallo DARI VAR FUNCTION $result" . PHP_EOL;
}; 
iniVariableFunction("hasan", function (string $name) : string {
    return "muh $name";
}); // INI MANGGIL FUNCTION, anonymous function di taruh di argumentnnya 

// atau
$toUpperNames = function (string $name) : string {
    $final = strtoupper($name);
    return $final;
};
iniVariableFunction("lukman", $toUpperNames);


// MENGAKSES VARIABLES DILUAR ANONYMOUS FUNCTION
$first = "ismail";
$penggunaanUse = function () use ($first) {
    echo "guna use, $first" . PHP_EOL;
};
$penggunaanUse();

$first = "hasan";
$penggunaanUse(); // yg muncul ismail karena telah di simpan pada memori dengan USE


