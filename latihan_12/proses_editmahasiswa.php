
<?php include 'koneksi.php';
if(isset($_POST['edit'])){
    $link->query("UPDATE t_mahasiswa SET namaMhs='$_POST[namaMhs]', prodi='$_POST[prodi]' WHERE npm='$_POST[npm]'");
    header("location:viewmahasiswa.php");
} ?>