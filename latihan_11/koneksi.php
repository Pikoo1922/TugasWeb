<?php
$host = "localhost";
$user = "root";
$paswd = "";
$name = "akademik"; 

$link = mysqli_connect($host, $user, $paswd, $name);
if (!$link) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>