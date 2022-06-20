<?php

$numberShuffle = [1, 2, 3, 4, 5];
shuffle($numberShuffle);
foreach ($numberShuffle as $value) {
    echo $value . PHP_EOL;
}
