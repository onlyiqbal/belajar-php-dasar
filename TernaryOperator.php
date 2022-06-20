<?php

//Jika tanpa operator ternary || menggunakan if statement
$gender = "PRIA";
$hi = null;

if ($gender == "PRIA") {
    $hi = "Hai Bro !";
} else {
    $hi = "Hai Nona !";
}

echo $hi . PHP_EOL;


$result = null;

if (4 > 5) {
    $result = "benar";
} else {
    $result = "salah";
}

echo $result . PHP_EOL;

//Jika menggunakan Ternary Operator
$hi = $gender == "WANITA" ? "Hai Bro !" : "Hai Nona !";
echo $hi . PHP_EOL;


$result = (7 > 5) ? "BENAR" : "SALAH";
echo $result . PHP_EOL;

$user = "admin";
$greet = ($user == "admin") ? "Hai Admin !" : "Maaf,bukan admin";
echo $greet . PHP_EOL;

//Contoh lain
