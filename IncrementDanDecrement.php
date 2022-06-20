<?php

$x = 10;
$y = 10;

$a = $x++;
echo $x . PHP_EOL; // $a = $x;
// ------------------ $x = $x + 1;

// var_dump($a);
// var_dump($c);

$b = ++$y; //$y = $y + 1;
//---------- $b = $y;

var_dump($a);
var_dump($b);
