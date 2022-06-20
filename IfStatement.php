<?php

$benar = 22;
$salah = 3;

if ($benar >= 21 && $salah <= 21) {
    echo "Anda Lulus Ujian Teori SIM" . PHP_EOL;
}else {
    echo "Maaf,Anda Tidak Lulus Ujian Teori SIM" . PHP_EOL;
}

$nilaiTugas = 55;
$alfa =15;

if ($nilaiTugas >= 95 && $alfa >= 0 ) {
    echo "Predikat Nilai Anda A" . PHP_EOL;
}else if ($nilaiTugas >= 90 && $alfa >= 2 ) {
    echo "Predikat Nilai Anda B" . PHP_EOL;
}else if ($nilaiTugas >= 80 && $alfa >= 4) {
    echo "Predikat Nilai Anda C" . PHP_EOL;
}else if ($nilaiTugas >= 70 && $alfa >= 7) {
    echo "Predikat Nilai Anda D" . PHP_EOL;
}else if ($nilaiTugas >= 60 && $alfa >= 9) {
    echo "Predikat Nilai Anda E" . PHP_EOL;
}else {
    echo "Predikat Nilai Anda F" . PHP_EOL;
}

$nilaiTugas = 55;
$alfa =15;

if ($nilaiTugas >= 95 && $alfa >= 0 ) :
    echo "Predikat Nilai Anda A" . PHP_EOL;
elseif ($nilaiTugas >= 90 && $alfa >= 2 ) :
    echo "Predikat Nilai Anda B" . PHP_EOL;
elseif ($nilaiTugas >= 80 && $alfa >= 4) :
    echo "Predikat Nilai Anda C" . PHP_EOL;
elseif ($nilaiTugas >= 70 && $alfa >= 7) :
    echo "Predikat Nilai Anda D" . PHP_EOL;
elseif ($nilaiTugas >= 60 && $alfa >= 9) :
    echo "Predikat Nilai Anda E" . PHP_EOL;
else :
    echo "Predikat Nilai Anda F" . PHP_EOL;
endif;