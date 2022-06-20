<?php

function decrement()
{
    static $number = 10;
    echo $number . PHP_EOL;
    $number--;
}

decrement();
decrement();
decrement();
