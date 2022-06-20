<?php

function fizz($inputArgument)
{
    return "Hello $inputArgument" . PHP_EOL;
}
function bazz($input)
{
    echo "$input Bar" . PHP_EOL;
}

$variablefunton = "fizz";
$result = $variablefunton("budi");
echo $result;

$VariabelYangAkanDipanggil = "bazz";
$VariabelYangAkanDipanggil("Hello");


//Penggunaan Fitur Variabel Function 

function salam(string $input, $filter)
{
    $pagi = $filter($input);
    echo "Hallo $pagi" . PHP_EOL;
}

function sample($input): string
{
    return "$input selamat pagi";
}

salam("uppercase", "strtoupper");
salam("LOWERCASE", "strtolower");
salam("iqbal", "sample");
