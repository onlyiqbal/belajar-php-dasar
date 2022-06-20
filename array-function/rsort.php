<?php

$array = [12, 4, 5, 6, 72, 123];
rsort($array);
foreach ($array as $key => $value) {
    echo "array[$key] = $value" . PHP_EOL;
}
