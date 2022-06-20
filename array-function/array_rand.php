<?php

$array = ["mahasiswa1" => 1, "mahasiswa2" => 2, "mahsiswa3" => 3, "mahsiswa4" => 4];
$result = (array_rand($array));
echo $array[$result] . PHP_EOL;
