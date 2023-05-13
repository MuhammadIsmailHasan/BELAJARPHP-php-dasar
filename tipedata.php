<?php

echo 'boolean true : ';
var_dump(true);
echo 'boolean false : ';
var_dump(false);
echo "\n--------------\n";

echo 'integer dec : ';
var_dump(1234);
echo 'integer octal : ';
var_dump(01234);
echo 'integer hexa : ';
var_dump(0x1A);
echo 'integer binary : ';
var_dump(0b111111);
echo 'underscore : ';
var_dump(1_234);
echo "\n--------------\n";

echo 'float : ';
var_dump(1.234);
echo 'float e : ';
var_dump(1.5e3);
echo 'float e minus : ';
var_dump(1.5e-3);

echo "\n--------------\n";
echo "\n double \n";
echo '\n single \n';
echo "\n";
echo <<<MAIL
ini adalah herdoc\n
sama seperti double\n
MAIL;
echo <<<'MAIL'
ini adalah nowdoc\n
sama seperti single
MAIL;
