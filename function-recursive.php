<?php

// PAKAI PERULANGAN
function factorialPerulangan (int $number) {
    $total = 1;
    for ($i=1; $i <= $number ; $i++) { 
        $total *= $i;
    }

    echo "factorial dengan perulangan : $total" . PHP_EOL;
}
$data = [5, 5, 5, 5];
factorialPerulangan(5);

// PAKAI RECURSIVE FUNCTION
function factorialRecursive(int $number) : int {
    if ($number == 1) {
        return 1;
    } else {
        return $number * factorialRecursive($number-1);
    }
} 
var_dump(factorialRecursive(5));