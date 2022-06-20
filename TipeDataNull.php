<?php

$username = "Iqbal";
$username = null;

$address = null;

echo "Username : ";
echo $username;
echo "\n";

echo "Address : ";
echo $address;
echo "\n";

$username = "Iqbal";

echo "Is Username Null ? :";
echo var_dump(is_null($username));
echo "\n";

$example = "Menggala";
unset($example);

$example = "Iqbal";
$example = null;

var_dump(isset($example));
