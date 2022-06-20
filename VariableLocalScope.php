<?php

function createnumber()
{
    $number = 12;  //Local scope
}

createnumber();
echo $number;
