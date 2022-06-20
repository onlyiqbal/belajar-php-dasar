<?php

$word = [
    "first word" => "Iqbal"
];

$second = [
    "first word" => "Budi",
    "last word" => "Maualana"
];

$fullword = $second + $word;
var_dump($fullword);


$foo = [
    "first word" => "Budi",
    "last word" => "Maualana"
];


$bar = [
    "last word" => "Maualana",
    "first word" => "Budi"
];

var_dump($foo == $bar);
var_dump($foo === $bar);
