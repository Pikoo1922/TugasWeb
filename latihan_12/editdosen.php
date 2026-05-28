
<?php 
include 'koneksi.php';
$db = new Database();
$con = $db->con;

$id = $_GET['idDosen'];
$stmt = $con->prepare("SELECT * FROM t_dosen WHERE idDosen=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Edit Data</title>
</head>
<body>
    <div class="container">
        <form action="proses_editdosen.php" method="post">
            <input type="hidden" name="idDosen" value="<?php echo $data['idDosen']; ?>">
            <fieldset>
                <legend>Edit Data Dosen</legend>
                <p><label>Nama Dosen: </label><input type="text" name="namaDosen" value="<?php echo $data['namaDosen']; ?>"></p>
                <p><label>No HP: </label><input type="text" name="noHP" value="<?php echo $data['noHP']; ?>"></p>
            </fieldset>
            <p><input type="submit" name="edit" value="Update Data"></p>
        </form>
    </div>
</body>
</html>