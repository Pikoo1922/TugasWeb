
<?php
include 'koneksi.php';
if (isset($_POST['input'])) {
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];
    $query = "INSERT INTO t_dosen VALUES (NULL, '$namaDosen', '$noHP')";
    $result = $link->query($query);
    header("location:viewdosen.php");
}
?>