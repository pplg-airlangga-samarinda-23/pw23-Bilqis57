<?php

$hostname = "localhost"; // 127. 0.0.1
$username = "root";
$password = "";
$database = "toko_skincare";

$koneksi = new mysqli($hostname, $username, $password, $database);

$sql = "SELECT * FROM list";
$row = $koneksi->execute_query($sql)->fetch_assoc();
var_dump($row);
?>
