<?php

echo "mengecek apakah isi variable null :\n";
$contohNull = null;
$contohNotNull = "ismail";
var_dump(is_null($contohNull));
var_dump(is_null($contohNotNull));

echo "\n";
echo "menghapus variable beserta isinya :";
$contohUnset = "hasan";
unset($contohUnset);
var_dump($contohUnset);

echo "mengecek apakah terdapat variable && isinya null: \n";
var_dump(isset($contohNull));
var_dump(isset($contohNotNull));
var_dump(isset($contohUnset));


