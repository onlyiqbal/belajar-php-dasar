<?php

//DOT Operator
$fullname = "Iqbal Maulana Menggala";

echo "Full Name : " . $fullname . PHP_EOL;
echo "Value : " . 200 . PHP_EOL;


//Konversi String ke Number dan sebaliknya
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"200";
var_dump($valueInt);

$valueFloat = (float)"2.5";
var_dump($valueFloat);


//Mengakses karakter string
$name = "iqbal";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;

echo "Hello $name, selamat belajar PHP" . PHP_EOL;
echo "Hallo {$name}i, belajar PHP" . PHP_EOL;

//Curly Brace 

$word = "write";
echo "{$word}ln";
