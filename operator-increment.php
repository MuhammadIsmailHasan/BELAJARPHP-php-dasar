<?php

$angka = 10;
$angkaPindah = $angka;
$angka++;
$angka++;

$angkaPreIncre = ++$angka;
// angka = angka + 1
// angkaPreInce = angka

$angkaPostIncre = $angka++;
// angkaPostIncre = angka
// angkaPostIncre = angka + 1

var_dump($angka);
var_dump($angkaPindah);
var_dump($angkaPreIncre);
var_dump($angkaPostIncre);