<?php

//Default Arguments
function gender($name, $age = 20)
{
    echo "Hello $name how old are you ? $age" . PHP_EOL;
}

gender("Budi", 25);

//Type Declaration
function hitung(int $number, int $number2)
{
    $result = $number * $number2;
    echo "Result = $result" . PHP_EOL;
}

hitung("10", "5");
hitung(true, false);
hitung(7, 3);


function address(string $country, string $city)
{
    echo "Where you from and your city ? $country and $city" . PHP_EOL;
}

address("Indonesia", "Bekasi");
address(12, 34);
address(false, true);
address(2.5, 7.8);


function clue(bool $benar, bool $salah)
{
    echo "the clue given $benar or $salah" . PHP_EOL;
}

clue(false, true);
clue(3, 5);
clue("benar", "salah");


//Variable-lenght Argument list
function coba(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Jumlah : " . implode("+", $values) . " = $total" . PHP_EOL;
}

$value = [1000, 2000, 3000];
coba(1000, 2000, 3000);
coba(...$value); //Jika sudah ada array yang terbuat
