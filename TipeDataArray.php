<?php

$numbers = array(5, 6, 7, 8, 9, 10);
var_dump($numbers);

$users = ["Iqbal", "Maulana", "Menggala"];
var_dump($users);

var_dump($users[2]);  //Mengakses data array

$users[] = "Joko";    //Menambah data array
var_dump($users);

unset($users[1]);   //Menghapus data array
var_dump($users);

var_dump(count($users));    //Menghitung jumlah data array


// Array Map atau Associative Array
$iqbal = array(
    "id" => "Iqbal",
    "username" => "Iqbal Maulana Menggala",
    "age" => 19

);

var_dump($iqbal); //Menampilkan data array
var_dump($iqbal["username"]);  //Mengakses data array

$iqbal["address"] = "Bekasi"; //Menambah data array
var_dump($iqbal);

unset($iqbal["id"]); //Menghapus data array
var_dump($iqbal);

var_dump(count($iqbal)); // Menghitung jumlah data array


$iqbal = [
    "id" => "Iqbal",
    "username" => "Iqbal Maulana Menggala",
    "age" => 19

];

var_dump($iqbal);
var_dump(($iqbal["username"]));

$iqbal["address"] = "Bekasi";
var_dump($iqbal);

unset($iqbal["id"]);
var_dump($iqbal);

var_dump(count($iqbal));


// Nested Array atau Array Bersarang
$iqbal = [
    "id" => "Iqbal",
    "username" => "Iqbal Maulana Menggala",
    "age" => 19,
    "address" => [
        "kelurahan" => "Jatimurni",
        "city" => "bekasi",
        "country" => "indonesia"
    ]
];

var_dump($iqbal["address"]["country"]); //Cara mengakses nested array
