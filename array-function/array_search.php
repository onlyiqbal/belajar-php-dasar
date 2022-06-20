<?php

$array = [1 => "red", 2 => "green", 3 => "blue", 4 => "yellow"];
if (array_search("red", $array)) {
    echo "blue in index = " . array_search("blue", $array) . PHP_EOL;
}

$nilai = ["andi" => 75, "andi" => 80, "candra" => 95];
$key = array_search(95, $nilai);
var_dump($key);
if ($key !== false) {
    echo "Siswa yang mendaptkan nilai 95 adalah $key";
} else {
    echo "Tidak ada siswa yang medapatkan nilai 95";
}
