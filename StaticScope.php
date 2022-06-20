<?php

function increment()
{
    static $number = 1;
    echo $number . PHP_EOL;
    $number++;
}

increment();
increment();
increment();
