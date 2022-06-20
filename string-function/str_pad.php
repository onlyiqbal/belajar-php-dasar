<?php

$input = "budi";
var_dump(str_pad($input, 5));
var_dump(str_pad($input, 7, "#", STR_PAD_RIGHT));
var_dump(str_pad($input, 7, "#", STR_PAD_LEFT));
var_dump(str_pad($input, 8, "#", STR_PAD_BOTH));
