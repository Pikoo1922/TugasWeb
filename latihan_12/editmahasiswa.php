
<?php 
include 'koneksi.php';
$db = new Database();
$con = $db->con;

$npm = $_GET['npm'];
$stmt = $con->prepare("SELECT * FROM t_mahasiswa WHERE npm=?");
$stmt->bind_param("s", $npm);
$stmt->execute();
$d = $stmt->get_result()->fetch_assoc();
?>
<form action="proses_editmahasiswa.php" method="post">
<input type="hidden" name="npm" value="<?=$d['npm']?>">
Nama: <input type="text" name="namaMhs" value="<?=$d['namaMhs']?>"><br>
Prodi: <input type="text" name="prodi" value="<?=$d['prodi']?>"><br>
<input type="submit" name="edit" value="Update">
</form>