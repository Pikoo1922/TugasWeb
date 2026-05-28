<?php 
include 'koneksi.php';
$id = $_GET['idDosen'];
$query = "SELECT * FROM t_dosen WHERE idDosen='$id'";
$result = mysqli_query($link, $query);
$data = mysqli_fetch_assoc($result);
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