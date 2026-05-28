<?php include 'koneksi.php';
if(isset($_POST['edit'])){
    mysqli_query($link, "UPDATE t_matakuliah SET namaMK='$_POST[namaMK]', sks='$_POST[sks]' WHERE kodeMK='$_POST[kodeMK]'");
    header("location:viewmatakuliah.php");
} ?>