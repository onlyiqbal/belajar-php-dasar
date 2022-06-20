<?php

$firstnumber = 5;
$lastnumber = 2;

// Jika menggunkan anonymous function
$anonym = function () use ($firstnumber, $lastnumber) {
    echo $firstnumber . " and " . $lastnumber . PHP_EOL;
};

//ARROW FUNCTION
$arrow = fn () => $firstnumber . " and " . $lastnumber . PHP_EOL;

echo $anonym();
echo $arrow();
