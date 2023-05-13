<?php
echo "variable variables\n";
$nama = "ismail";
$$nama = "hasan";

echo 'nama : ';
echo $nama;
echo "\n";
echo 'ismail : ';
echo $$ismail;
