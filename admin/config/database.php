<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "php-dasar";

$db = mysqli_connect($host, $user, $pass, $db_name);

// if (!$db) {
//     die("Gagal terhubung ke database: " . mysqli_connect_error());
// } else {
//     echo "Terhubung ke database";
// }