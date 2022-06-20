<?php

//Contoh Jika tanpa coalescing operator || if statement
$data = [
    "action" => "create"
];

if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "Nothing";
}

echo $action . PHP_EOL;

//Lain
$_POST["kado"] = "terkeclist";

if (isset($_POST["kado"])) {
    $diperiksa = "checked";
} else {
    $diperiksa = "nothing";
}

echo $diperiksa . PHP_EOL;

//Jika menggunakan logika ternary operator
$_POST["data"] = "ada";
$cek_data = isset($_POST["data"]) ? "data ada" : "nothing" . PHP_EOL;
echo $cek_data . PHP_EOL;

//Jika dikonversi ke logika if

if (isset($_POST["cek"])) {
    $cek_data = "cek ada";
} else {
    $cek_data = "nothing";
}

echo $cek_data . PHP_EOL;

//NULL COALESCING OPERATOR
$data = [
    "action" => "create"
];

$action = $data["action"] ?? "nothing";

echo $action . PHP_EOL;

$_POST["kadoo"] = "terceklist";
$cek_kadoo = $_POST["kadoo"] ?? "not ceklist";
echo $cek_kadoo . PHP_EOL;
