<?php

// Faktorial menggunakan For Looping
function faktorialloop(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}

var_dump(faktorialloop(5));

// Fakotial menggunakan Recursive Function 
function faktorialrecursive(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * faktorialrecursive($value - 1); // Seakan akan adalah $value * faktorialrecursive(4) - faktorialrecursive(1) 
    }
}

var_dump(faktorialrecursive(5));

// Problem jika recursive terlalu dalam 
function loop(int $value)
{
    if ($value == 0) {
        echo "End Loop" . PHP_EOL;
    } else {
        echo "Loop-$value" . PHP_EOL;
        loop($value - 1);
    }
}

// loop(10000);
