
<?php
include 'koneksi.php';
if (isset($_GET['idDosen'])){
    $db = new Database();
    $con = $db->con;
    
    $id = $_GET['idDosen'];
    $stmt = $con->prepare("DELETE FROM t_dosen WHERE idDosen = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    
    header("location:viewdosen.php");
}
?>