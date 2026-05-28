
<?php include 'koneksi.php';
if(isset($_POST['input'])){
    $link->query("INSERT INTO t_mahasiswa VALUES ('$_POST[npm]', '$_POST[namaMhs]', '$_POST[prodi]', '$_POST[alamat]', '$_POST[noHP]')");
    header("location:viewmahasiswa.php");
} ?>