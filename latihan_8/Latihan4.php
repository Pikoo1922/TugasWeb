<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* Operator logika yang bisa digunakan:
     * ==   Sama Dengan                 $x == $y
     * ===  Identical                   $x === $y
     * !=   Tidak sama dengan           $x != $y
     * <>   Tidak sama dengan           $x <> $y
     * !==  Not identical               $x !== $y
     * >    Lebih Besar dari            $x > $y
     * <    Kurang Dari                 $x < $y
     * >=   Lebih besar atau Sama dengan $x >= $y
     * <=   Kurang dari atau sama dengan $x <= $y
     * <=>  Spaceship                   $x <=> $y
     */

    $t = date("H"); // mendapatkan jam dengan format 00-23

    // Struktur If Tunggal
    echo "If";
    if ($t < 16) {
        echo "Selamat siang!";
    }

    // Tambahkan kode di bawah ini: If Else
    echo "<br> If dan Else <br>";
    if ($t < 20) {
        echo "Selamat siang!";
    } else {
        echo "Selamat malam!";
    }

    // Tambahkan kode di bawah ini: Nested If (Elseif)
    echo "<br> Nested If <br>"; 
    if ($t < 10) { // Contoh ambang waktu pagi
        echo "Selamat Pagi!";
    } elseif ($t < 16) {
        echo "Selamat sore!";
    } else {
        echo "Selamat Malam!";
    }
    ?>
</body>
</html>