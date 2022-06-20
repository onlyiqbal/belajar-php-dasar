<?php

goto label;
echo "Goto first" . PHP_EOL;

label:
echo "Goto second" . PHP_EOL;

// goto pada Looping
$init = 1;
while (true) {
    echo "Looping ke - $init" . PHP_EOL;
    $init++;
    
    if ($init > 100){
        goto label2;
    }
}

label2:
echo "End Looping" . PHP_EOL;