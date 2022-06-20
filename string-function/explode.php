<?php

$string = "iqbal maualana menggala";
$result = explode(" ", $string); //Memecah string menajadi array
for ($i = 0; $i < count($result); $i++) {
    echo $result[$i] . PHP_EOL;
}
