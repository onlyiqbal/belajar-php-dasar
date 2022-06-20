<?php

$text   = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";

echo var_dump(trim("    username    password     "));
echo var_dump(trim($text));
echo var_dump(trim($text, " \t."));
var_dump($binary);  // Karakter di awal string akan menjadi spasi
$clean = trim($binary, "\x09..\x0A");
var_dump($clean);
