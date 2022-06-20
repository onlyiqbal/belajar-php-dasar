<?php

$init = 1;
while ( true ) { 
    echo "While Loop ke - $init" . PHP_EOL;
    $init++;

    if ($init > 100) {
        break;
    }
}