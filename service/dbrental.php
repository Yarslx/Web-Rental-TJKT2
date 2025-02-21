<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "daftar_rental";

$db = mysqli_connect($hostname, $username, $password, $database_name); 

if ($db->connect_error) {
    echo "koneksi database rusak";
    die("error!");
}

?>