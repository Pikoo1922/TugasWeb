<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f7f6; margin: 20px; }
        h1 { text-align: center; color: #333; }
        .container { width: 80%; margin: auto; background: #fff; padding: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.1); border-radius: 8px; }
        .wrapper-action { display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #4CAF50; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        .btn { padding: 8px 12px; text-decoration: none; border-radius: 4px; color: white; font-weight: bold; }
        .btn-add { background-color: #2b78e4; }
        .btn-edit { background-color: #ffa500; color: black; size: 0.9em; }
        .btn-delete { background-color: #f44336; size: 0.9em; }
        .search-box input[type="text"] { padding: 8px; width: 250px; border: 1px solid #ccc; border-radius: 4px; }
        .search-box input[type="submit"] { padding: 8px 12px; background: #333; color: #fff; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>

<div class="container">
    <h1>Tabel Dosen</h1>
    
    <div class="wrapper-action">
        <a href="input.php" class="btn btn-add">Input Data Baru</a>
        
        <div class="search-box">
            <form action="viewdosen.php" method="get">
                <input type="text" name="cari" placeholder="Cari nama dosen..." value="<?php echo isset($_GET['cari']) ? $_GET['cari'] : ''; ?>">
                <input type="submit" value="Cari">
            </form>
        </div>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama Dosen</th>
            <th>No HP</th>
            <th>Pilihan</th>
        </tr>
        <?php
        // Logika Pencarian
        if (isset($_GET['cari']) && $_GET['cari'] != '') {
            $cari = mysqli_real_escape_string($link, $_GET['cari']);
            $query = "SELECT * FROM t_dosen WHERE namaDosen LIKE '%$cari%' ORDER BY idDosen ASC";
        } else {
            $query = "SELECT * FROM t_dosen ORDER BY idDosen ASC";
        }

        $result = mysqli_query($link, $query);
        if (!$result) {
            die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
        }

        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $data['idDosen'] . "</td>";
            echo "<td>" . $data['namaDosen'] . "</td>";
            echo "<td>" . $data['noHP'] . "</td>";
            echo "<td>
                    <a href='editdosen.php?idDosen=" . $data['idDosen'] . "' class='btn btn-edit'>Edit</a> 
                    <a href='hapusdosen.php?idDosen=" . $data['idDosen'] . "' class='btn btn-delete' onclick='return confirm(\"Anda yakin akan menghapus data?\")'>Hapus</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>