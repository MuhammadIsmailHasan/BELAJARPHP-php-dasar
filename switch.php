<?php

$nilai = "b";

switch (strtoupper($nilai)) :
    case 'A':
        echo "lulus, sangat baik" . PHP_EOL;
        break;
    
    case 'B' :
    case 'C' :
        echo "lulus" . PHP_EOL;
        break;
    default:
        echo "tidak lulus" . PHP_EOL;
        break;
endswitch;