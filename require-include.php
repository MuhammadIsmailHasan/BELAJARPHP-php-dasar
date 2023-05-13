<?php

include "lib/myfunctionsss.php"; // prpgram masih berjalan
var_dump(fullName("ismail", "hasan"));


require "lib/myfunction.php"; // program tidak berjalan
var_dump(fullName("ismail2", "hasan2"));

// INCLUDE_ONCE => manggil file 1 kali sehingga tidak ada error "redeclare function"
// REQUIRE_ONCE => manggil file 1 kali sehingga tidak ada error "redeclare function"