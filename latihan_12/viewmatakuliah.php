
<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"><title>Data Matkul</title></head>
<body>
    <div class="container">
        <h1>Tabel Matakuliah</h1>
        <center><a href="inputmatakuliah.php">Input Data</a></center>
        <table border="1">
            <tr><th>Kode MK</th><th>Nama MK</th><th>SKS</th><th>Jam</th><th>Pilihan</th></tr>
            <?php
            $query = "SELECT * FROM t_matakuliah";
            $result = $link->query($query);
            while ($data = $result->fetch_assoc()) {
                echo "<tr><td>$data[kodeMK]</td><td>$data[namaMK]</td><td>$data[sks]</td><td>$data[jam]</td>
                <td><a href='editmatakuliah.php?kodeMK=$data[kodeMK]'>Edit</a> | <a href='hapusmatakuliah.php?kodeMK=$data[kodeMK]' onclick=\"return confirm('Yakin hapus?')\">Hapus</a></td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>