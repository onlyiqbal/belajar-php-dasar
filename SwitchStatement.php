<?php

$day = 10;

switch ($day) {
    case 1:
        echo "Hari Senin" . PHP_EOL;
        break;
    case 2:
        echo "Hari Selasa" . PHP_EOL;
        break;
    case 3:
        echo "Hari Rabu" . PHP_EOL;
        break;
    case 4:
        echo "Hari Kamis" . PHP_EOL;
        break;
    case 5:
        echo "Hari Jum'at" . PHP_EOL;
        break;
    case 6:
        echo "Hari Sabtu" . PHP_EOL;
        break;
    case 7:
        echo "Hari Ahad" . PHP_EOL;
        break;
    default:
        echo "Urutan hari yang Anda masukan salah" . PHP_EOL;
        break;
}