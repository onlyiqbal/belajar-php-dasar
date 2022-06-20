<?php

function greet(string $name, callable $filter)
{
    $finalGreet = call_user_func($filter, $name);
    echo "Good morning $finalGreet" . PHP_EOL;
}

function samplefunction(string $input)
{
    return "it's $input";
}


greet("iqbal", "strtoupper");
greet("IQBAL", "strtolower");
greet("budi", "samplefunction");
greet("iqbal", function (string $name): string {
    return strtoupper($name);
});
greet("IQBAL", fn ($name) => strtolower($name));
