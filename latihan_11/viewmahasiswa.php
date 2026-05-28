<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"><title>Data Mahasiswa</title></head>
<body>
    <div class="container">
        <h1>Tabel Mahasiswa</h1>
        <center><a href="inputmahasiswa.php">Input Data</a></center>
        <table border="1">
            <tr><th>NPM</th><th>Nama</th><th>Prodi</th><th>Alamat</th><th>No HP</th><th>Pilihan</th></tr>
            <?php
            $query = "SELECT * FROM t_mahasiswa";
            $result = mysqli_query($link, $query);
            while ($data = mysqli_fetch_assoc($result)) {
                echo "<tr><td>$data[npm]</td><td>$data[namaMhs]</td><td>$data[prodi]</td><td>$data[alamat]</td><td>$data[noHP]</td>
                <td><a href='editmahasiswa.php?npm=$data[npm]'>Edit</a> | <a href='hapusmahasiswa.php?npm=$data[npm]' onclick=\"return confirm('Yakin hapus?')\">Hapus</a></td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>