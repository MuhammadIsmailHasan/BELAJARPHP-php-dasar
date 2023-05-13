<?php

$mtk = 86;
$nama = "ismail";

if ($mtk >= 90 ) {
    echo "selamat, $nama sangat baik" . PHP_EOL;
} else if ($mtk >= 80) {
    echo "selamat, $nama baik" . PHP_EOL;;
} else {
    echo "$nama tidak lulus" . PHP_EOL;
}

// atau menggunakan titik dua
if ($mtk >= 90 ) :
    echo "selamat, $nama sangat baik" . PHP_EOL;
elseif ($mtk >= 80) :
    echo "selamat, $nama baik" . PHP_EOL;;
else :
    echo "$nama tidak lulus" . PHP_EOL;
endif;