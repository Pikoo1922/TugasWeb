<?php
include 'koneksi.php';
if (isset($_POST['edit'])) {
    $id = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];
    $query = "UPDATE t_dosen SET namaDosen='$namaDosen', noHP='$noHP' WHERE idDosen='$id'";
    mysqli_query($link, $query);
    header("location:viewdosen.php");
}
?>