<?php

$nilai = 70;
$kelulusan = $nilai >= 80 ? "lulus" : "tidak lulus";
echo $kelulusan . PHP_EOL;

// NULL COALISCING OPERATOR
$nama = [
    'depan' => 'ismail'
];

$depan = $nama['depan'] ?? 'kosong';
$belakang = $nama['belakang'] ?? 'kosong';
echo $depan . PHP_EOL;
echo $belakang . PHP_EOL;