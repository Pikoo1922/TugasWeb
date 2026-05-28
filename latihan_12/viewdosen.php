
<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Tabel Dosen</title>
</head>
<body>
    <div class="container">
        <h1>Tabel Dosen</h1>
        <center><a href="inputdosen.php">Input Data</a></center>
        <table border="1">
            <tr><th>ID</th><th>Nama Dosen</th><th>No HP</th><th>Pilihan</th></tr>
            <?php
            $query = "SELECT * FROM t_dosen ORDER BY idDosen ASC";
            $result = $link->query($query);
            while ($data = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$data['idDosen']."</td>";
                echo "<td>".$data['namaDosen']."</td>";
                echo "<td>".$data['noHP']."</td>";
                echo "<td>
                        <a href='editdosen.php?idDosen=".$data['idDosen']."'>Edit</a> | 
                        <a href='hapusdosen.php?idDosen=".$data['idDosen']."' onclick=\"return confirm('Yakin hapus?')\">Hapus</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>