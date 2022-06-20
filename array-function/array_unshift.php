<?php

$queue = [1, 2, 3, 4, 5];
$result = array_unshift($queue, 6, 7, 8);
echo $result . " ";
print_r($queue);
