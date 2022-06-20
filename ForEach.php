<?php

$values = [60, 65, 70, 75, 80, 85, 90, 95, 100];

foreach ($values as $index => $value) {
    echo "Index ke - $index value is : $value" . PHP_EOL;
}

$address = [
    "city" => "Bekasi",
    "province" => "Jawa Barat",
    "coutry" => "Indonesia"
];

foreach ($address as $key) {
    echo "Value address : $key" . PHP_EOL;
}
