<?php

$nama = "ismail"; // ini global scope
/* secara otomatis dimasukkan ke array
    $GLOBALS['nama'];
    yg merupakan bawaan php
*/

function person() {
    // return "nama : $nama" . PHP_EOL; // hasilnya akan undefined karna mengakses variable scope
    global $nama; // agar global scope bisa diakses di dalam function atau bisa juga dg $GLOBALS
    echo "nama : $nama" . PHP_EOL;
    echo "nama dengan globals : {$GLOBALS['nama']}" . PHP_EOL;
}
person();

// STATIS SCORE
function counter () {
    $value = 2; // sekali pakai dalam sekali pemanggilan function
    echo "value before : $value" . PHP_EOL;

    $value++;
}
counter();
counter();
counter(); // maka hasilnya 2

function counterStatic () {
    static $value = 2; // recycle data sesuai dengan pemanggilan function
    echo "value befire wih static : $value" . PHP_EOL;

    $value++;
}
counterStatic();
counterStatic();
counterStatic(); // maka hasilnya 4