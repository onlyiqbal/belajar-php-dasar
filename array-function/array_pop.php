<?php

$stack = [5, 4, 3, 2, 1];
$result =  array_pop($stack);
echo $result . PHP_EOL;
print_r($stack);


$queue = [1, 2, 3, 4, 5];
while ($result = array_pop($queue)) {
    echo $result . PHP_EOL;
}
