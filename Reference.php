<?php

$number = 1;

$othernumber = &$number;

$othernumber = 2;

echo $number . PHP_EOL;

// Pass by Reference atau Mengirim data ke function dengan reference
function decrement(int &$value)
{
    $value--; // => Sama saja dengan $value = $value - 1;
}

$counter = 10; // Seakan akan variable $counter di ubah by Reference
decrement($counter); // => Sama saja dengan decrement(10);
echo $counter . PHP_EOL;

//Return Reference
function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200; // => Value $a seakan akan menjadi &getValue() yang value ny 200

$b = &getValue(); // => Variable $b menjadi bernilai 200 yang berasal dari perbuhan di variable $a
echo $b . PHP_EOL;
