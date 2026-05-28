
<?php 
include 'koneksi.php';
$db = new Database();
$con = $db->con;

$kodeMK = $_GET['kodeMK'];
$stmt = $con->prepare("SELECT * FROM t_matakuliah WHERE kodeMK=?");
$stmt->bind_param("s", $kodeMK);
$stmt->execute();
$d = $stmt->get_result()->fetch_assoc();
?>
<form action="proses_editmatakuliah.php" method="post">
<input type="hidden" name="kodeMK" value="<?=$d['kodeMK']?>">
Nama MK: <input type="text" name="namaMK" value="<?=$d['namaMK']?>"><br>
SKS: <input type="number" name="sks" value="<?=$d['sks']?>"><br>
<input type="submit" name="edit" value="Update">
</form>