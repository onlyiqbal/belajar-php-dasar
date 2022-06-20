<?php

$name = "iqbal-maualan-menggala";
print_r(str_split($name)) . PHP_EOL;
print_r(str_split($name, 4)) . PHP_EOL; //Memmotong string menjadi array

$string = 'The lazy fox jumped over the fence';
var_dump(str_starts_with($string, "the"));
