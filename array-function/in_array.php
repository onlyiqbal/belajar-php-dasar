<?php

$progrmaingLanguage = ["PHP", "Java", "Javascript", "Phyton", "Golang"];
if (in_array("PHP", $progrmaingLanguage)) {
    echo "Ada PHP" . PHP_EOL;
}

if (in_array("Java", $progrmaingLanguage)) {
    echo "Ada java" . PHP_EOL; // ini tidak akan dieksekusi karena bersifat case-sensitve
}

//Contoh lain jika mengguanakan strick mode
$n = ["1.10", 12, 1.13];
if (in_array('12', $n, true)) {
    echo "Found 12" . PHP_EOL; // Jika tidak menggunakan strick mode maka blok  statement akan dieksekusi kare PHP otomatis mengkoversi nilai string "12" menjadi integer 12.
}

if (in_array(1.13, $n, true)) {
    echo "Found 1.13" . PHP_EOL;
}
