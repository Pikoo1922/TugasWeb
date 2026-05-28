
<?php 
include 'koneksi.php';
if (isset($_GET['npm'])) {
    $db = new Database();
    $con = $db->con;
    
    $npm = $_GET['npm'];
    $stmt = $con->prepare("DELETE FROM t_mahasiswa WHERE npm=?");
    $stmt->bind_param("s", $npm);
    $stmt->execute();
}
header("location:viewmahasiswa.php"); 
?>