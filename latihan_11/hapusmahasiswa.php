<?php include 'koneksi.php';
mysqli_query($link, "DELETE FROM t_mahasiswa WHERE npm='$_GET[npm]'");
header("location:viewmahasiswa.php"); ?>