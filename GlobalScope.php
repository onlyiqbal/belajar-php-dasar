<?php

//Global Scope Variable
$number = 1;  //Global scope
function shownumber()
{
    global $number;
    echo "Hello " . $number . PHP_EOL;
}

shownumber();
