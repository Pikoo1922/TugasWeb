<?php include 'koneksi.php';
$d = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM t_mahasiswa WHERE npm='$_GET[npm]'"));
?>
<form action="proses_editmahasiswa.php" method="post">
<input type="hidden" name="npm" value="<?=$d['npm']?>">
Nama: <input type="text" name="namaMhs" value="<?=$d['namaMhs']?>"><br>
Prodi: <input type="text" name="prodi" value="<?=$d['prodi']?>"><br>
<input type="submit" name="edit" value="Update">
</form>