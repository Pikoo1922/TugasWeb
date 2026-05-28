<?php include 'koneksi.php';
if(isset($_POST['input'])){
    mysqli_query($link, "INSERT INTO t_matakuliah VALUES ('$_POST[kodeMK]', '$_POST[namaMK]', '$_POST[sks]', '$_POST[jam]')");
    header("location:viewmatakuliah.php");
} ?>