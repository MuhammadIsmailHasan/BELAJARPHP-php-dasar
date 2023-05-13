<?php

$names = ['muh', 'ismail', 'hasan'];
var_dump($names[0]);
unset($names[1]);
var_dump($names);
$names[] = 'kom';
var_dump($names);
var_dump(count($names));

$namesWithIndex = [
    'id' => 1,
    'nama' => 'ismail',
    'alamat' => array(
        'kota' => 'bojonegoro',
        'negara' => 'indonesia'
    )
    ];
var_dump($namesWithIndex);
var_dump($namesWithIndex['alamat']['kota']);