<?php

$datas = [1, 2, 3, 4, 5, 6];
$mapFunction = array_map(fn ($data) => $data * 2, $datas); // arrow function sbg callback/closure
var_dump($mapFunction);

rsort($datas);
var_dump($datas);

$person = array(
    'first_name' => 'ismail',
    'last_name' => 'hasan'
);
var_dump(array_keys($person));
var_dump(array_values($person));
