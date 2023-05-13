<?php

function foo(){
    echo "hallo foo" . PHP_EOL;
}
$functionYangDipanggil = "foo";
$functionYangDipanggil();

// berguna dalam mengirim function pada parameter function lain
function hallo(string $name, $iniFunction) {
    $finalName = $iniFunction($name);
    echo "hallo, dari function hallo $finalName" . PHP_EOL;
}
function sampleName(string $name) : string {
    return "Muhammad ${name}s";
}
hallo("ismaail", "sampleName");
hallo("ismaail", "strtoupper");
hallo("ismaail", "strtolower");
