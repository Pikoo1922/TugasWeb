<?php include 'koneksi.php';
$d = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM t_matakuliah WHERE kodeMK='$_GET[kodeMK]'"));
?>
<form action="proses_editmatakuliah.php" method="post">
<input type="hidden" name="kodeMK" value="<?=$d['kodeMK']?>">
Nama MK: <input type="text" name="namaMK" value="<?=$d['namaMK']?>"><br>
SKS: <input type="number" name="sks" value="<?=$d['sks']?>"><br>
<input type="submit" name="edit" value="Update">
</form>