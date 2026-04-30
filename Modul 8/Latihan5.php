<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$warna = "hijau"; // Mendefinisikan variabel warna 

switch ($warna) { // Mengevaluasi isi variabel $warna 
    case "merah":
        echo "warna adalah merah"; // Tampil jika variabel bernilai "merah" 
        break; // Menghentikan eksekusi switch 
        
    case "kuning":
        echo "warna adalah kuning"; // Tampil jika variabel bernilai "kuning" 
        break; // Menambahkan 'break' yang hilang agar kode berjalan benar 
        
    case "hijau":
        echo "Warna adalah hijau"; // Tampil jika variabel bernilai "hijau"
        break; // Menghentikan eksekusi switch 
        
    default:
        echo "warna tidak dikenal!"; // Tampil jika tidak ada case yang cocok 
}

echo "<br>";
?>
</body>
</html>