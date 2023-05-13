<?php

for ($init = 10; $init >= 4; $init--){
    echo "ini adalah for dg $init" . PHP_EOL;
}
// blok 1 = init
// blok 2 = kondisi
// blok 3 = post kondisi

$initWhile = 1; // ini init
while ($initWhile <= 7) : // ini kondisi
    echo "ini adl while dg $initWhile" . PHP_EOL;
    $initWhile++;
endwhile;

$initDoWhile = 6;
do {
    echo "ini adl do while dg $initDoWhile" . PHP_EOL;
    echo "minimal dilakukan sekali" . PHP_EOL;
    $initDoWhile++;
} while ($initDoWhile < 5);

// BREAK
$initBreak = 1;
while (true) {
    echo "ini break dg while dg $initBreak" . PHP_EOL;
    $initBreak++;

    if ($initBreak >= 25) :
        break;
    endif;
}

// CONTINUE
for ($initContinue = 20; $initContinue >= 1; $initContinue--) :
    if ($initContinue % 2 == 0 ) {
        continue;
    }
    echo "continue dg $initContinue" . PHP_EOL;
endfor;

// GOTO
$initBreak = 1;
while (true) {
    echo "ini GOTO dg while dg $initBreak" . PHP_EOL;
    $initBreak++;

    if ($initBreak >= 25) :
        goto akhir;
    endif;
}

akhir :
echo "ini akhir dg GOTO";
