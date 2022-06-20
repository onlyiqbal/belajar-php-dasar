<?php

//function return value 1
function takesum(int $input, int $input2)
{
    $result = $input + $input2;
    return $result;
}
echo takesum(7, 3) . PHP_EOL;


//function return value 2
function getipk(float $ipk)
{
    if ($ipk > 3.80) {
        return "SUMMA CUM LAUDE";
    } else if ($ipk >= 3.60 && $ipk <= 3.79) {
        return "MAGNA CUM LAUDE";
    } else if ($ipk >= 3.40 && $ipk <= 3.59) {
        return "CUM LAUDE";
    } else if ($ipk >= 3.20 && $ipk <= 3.39) {
        return "HIGH MERIT";
    } else {
        return "MERIT";
    }
}

$result = getipk(2.80);
echo $result . PHP_EOL;


//Return type declaration
function sum(int $input, int $input2): int
{
    $result = $input + $input2;
    return $result;
}
$hasil = sum(1, 2);
var_dump($hasil);
