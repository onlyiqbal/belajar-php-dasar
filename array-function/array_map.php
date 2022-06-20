<?php

$array_number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$mapFunction = fn (int $value) => $value * 2;
$resultMap = (array_map($mapFunction, $array_number));  // Seakan akan ini menjadi $mapFunciton($number) yang akan memanggil variable function yang ada diatasnya
print_r($resultMap);


//Cara lain array map
function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 4, 5];
$b = array_map("cube", $a); // Seakan akan ini menjadi cube($a) yang akan memanggil function yang ada diatasnya
print_r($b);
