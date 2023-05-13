<?php

$data = [1,2,3,4,5];
var_dump(join($data, ",")); // mirip dengan implode

$nama = "muh ismail has";
var_dump(explode(" ", $nama));

var_dump(substr($nama, 4, 9));

$namaTrim = "    muh ismail    ";
var_dump(trim($namaTrim));
