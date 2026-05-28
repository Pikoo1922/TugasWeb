<?php include 'koneksi.php';
mysqli_query($link, "DELETE FROM t_matakuliah WHERE kodeMK='$_GET[kodeMK]'");
header("location:viewmatakuliah.php"); ?>