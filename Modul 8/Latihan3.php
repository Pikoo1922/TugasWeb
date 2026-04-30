<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 5;
    $y = 10; 

    echo "Penambahan " . ($x + $y) . "<br>";
    echo "Pengurangan " . ($x - $y) . "<br>";
    echo "Perkalian " . ($x * $y) . "<br>"; 
    echo "Pembagian " . ($x / $y) . "<br>";
    echo "Modulus " . ($x % $y) . "<br>"; 
    echo "Exponensial " . ($x ** $y) . "<br><br>"; 

    echo "Isi ++x = " . ++$x . "<br>"; 
    echo "Isi x++ = " . $x++ . "<br>"; 
    echo "Isi x akhir = " . $x . "<br><br>";

    $user = "Andi darmawan";
    $status = (empty($user)) ? "Kosong" : "Ada isi"; 
    echo "Status User: " . $status . "<br>";

    echo "Warna: " . ($color = $color ?? "red"); 


    /**
    *PERBEDAAN POST-INCREMENT ($x++) DAN PRE-INCREMENT (++$x)
    */

    echo "<h2>Apa perbedaan $x++ dan ++$x ??</h2>";
    echo "<hr>";

   // Variabel awal untuk simulasi
$a = 5;
$b = 5;

echo "<h2>Tabel Perbandingan Increment</h2>";
echo "<table border='1' cellpadding='10' style='border-collapse: collapse; font-family: sans-serif;'>
        <tr style='background-color: #f2f2f2;'>
            <th>Jenis</th>
            <th>Nama</th>
            <th>Cara Kerja</th>
            <th>Contoh Output</th>
        </tr>
        <tr>
            <td><strong>\$x++</strong></td>
            <td>Post-increment</td>
            <td>Tampilkan nilai aslinya dulu, baru kemudian ditambah 1.</td>
            <td>" . $a++ . " (Akan jadi 6 di baris berikutnya)</td>
        </tr>
        <tr>
            <td><strong>++\$x</strong></td>
            <td>Pre-increment</td>
            <td>Tambah 1 dulu ke nilainya, baru kemudian ditampilkan.</td>
            <td>" . ++$b . " (Langsung tampil 6)</td>
        </tr>
      </table>";
?>
</body>
</html>