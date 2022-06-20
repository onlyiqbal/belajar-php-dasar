<?php

$stackName = ["Andi", "Budi", "Candra", "Doni", "Eki"];
$mode = current($stackName);
echo ($mode) . PHP_EOL;

$mode = next($stackName);
echo ($mode) . PHP_EOL;

$mode = end($stackName);
echo ($mode) . PHP_EOL;

$mode = prev($stackName);
echo ($mode) . PHP_EOL;

$mode = reset($stackName);
echo ($mode) . PHP_EOL;
