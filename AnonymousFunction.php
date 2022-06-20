<?php

$greet = function (string $waktu) {
    echo "Selamat $waktu" . PHP_EOL;
};

$greet("pagi");
$greet("malam");

// Anonymouse Function sebagai Argument saat pemanggilan function dan Value dari sebuah variable
function address(string $city, $filter)
{
    $finaladdress = $filter($city);
    echo "The address in $finaladdress" . PHP_EOL;
}

address("bekasi", function (string $apaaja): string { //Memanggil funtion dengan Argument ke-dua ny sebuah Anonymouse Funtion
    return strtoupper($apaaja);
});

$filterFuntion = function (string $bebas): string {
    return strtoupper($bebas);
};

address("cilacap", $filterFuntion); //Memanggil funtion dengan Parameter ke-dua ny sebuah Variable Funtion


//Mengakses Variable di luar Anonymouse Function (Closure) || Global Variable
$firstnumber = 1;
$lastnumber = 2;

$finalnumber = function () use ($firstnumber, $lastnumber) {
    echo $firstnumber . " and " . $lastnumber . PHP_EOL;
};

$finalnumber();

$firstnumber = 3;
$lastnumber = 4;

$finalnumber(); //Tidak akan berubah 
