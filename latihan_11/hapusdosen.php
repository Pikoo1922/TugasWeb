<?php
include 'koneksi.php';
if (isset($_GET['idDosen'])){
    $id = $_GET['idDosen'];
    mysqli_query($link, "DELETE FROM t_dosen WHERE idDosen = '$id'");
    header("location:viewdosen.php");
}
?>