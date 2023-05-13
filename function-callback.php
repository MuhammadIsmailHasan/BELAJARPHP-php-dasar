<?php

function fullName (string $name, callable $thisFunction) {
    $full = call_user_func($thisFunction, $name);
    echo "full name : $full " . PHP_EOL;
}

function midName(string $name) : string {
    return "Ismail $name";
}

fullName("muhammad", "midName");
fullName("ismail", "strtoupper");
fullName("hasan", function (string $name) : string {
    return strtolower($name);
});
fullName("nabila", fn (string $name) => substr($name, 2, 5));