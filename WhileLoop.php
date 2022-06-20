<?php

$init = 1;
while ($init <= 10) {
    echo "While Loop ke - $init" . PHP_EOL;
    $init++;
}

$init = 1;
while ($init <= 10) :
    echo "While Loop ke - $init" . PHP_EOL;
    $init++;
endwhile;

// Contoh lain

$salah = true;
$angka = 10;

while ($salah) {
    if ($angka == 8 || 9 || 10) {
        $salah = false;
        echo "Jawaban Anda Benar" . PHP_EOL;
    } else {
        echo "Jawaban Anda Salah,Coba Lagi" . PHP_EOL;
    }
}
