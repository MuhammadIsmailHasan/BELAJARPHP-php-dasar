<?php

globalFunction();
globalFunction("ini diisi");

function globalFunction ($arg = "ini default") {
    echo "global function dengan default, yakni $arg" . PHP_EOL;
}

if (false) {
    function NonGlobalFunction ($arg = "ini default") {
        echo "non global function dengan default, yakni $arg" . PHP_EOL;
    }
}
NonGlobalFunction();

