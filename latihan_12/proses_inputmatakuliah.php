
<?php include 'koneksi.php';
if(isset($_POST['input'])){
    $link->query("INSERT INTO t_matakuliah VALUES ('$_POST[kodeMK]', '$_POST[namaMK]', '$_POST[sks]', '$_POST[jam]')");
    header("location:viewmatakuliah.php");
} ?>