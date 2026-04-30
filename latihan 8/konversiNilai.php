<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* Aturan Konversi Nilai:
    C  = 0 -> 59 
    BC = 60 -> 69 
    B  = 70 -> 79 
    AB = 80 -> 89 
    A  = 90 -> 100
    */
    
    $nilai_angka = 91; // Anda dapat mengubah angka ini untuk mencoba konversi lain
    $nilai_huruf = "";

    if ($nilai_angka >= 90 && $nilai_angka <= 100) {
        $nilai_huruf = "A"; 
    } elseif ($nilai_angka >= 80 && $nilai_angka <= 89) {
        $nilai_huruf = "AB"; 
    } elseif ($nilai_angka >= 70 && $nilai_angka <= 79) {
        $nilai_huruf = "B"; 
    } elseif ($nilai_angka >= 60 && $nilai_angka <= 69) {
        $nilai_huruf = "BC";
    } elseif ($nilai_angka >= 0 && $nilai_angka <= 59) {
        $nilai_huruf = "C"; 
    } else {
        $nilai_huruf = "Nilai tidak valid";
    }

    echo "Nilai Angka: " . $nilai_angka . "<br>";
    echo "Nilai Huruf: " . $nilai_huruf;
    ?>
</body>
</html>