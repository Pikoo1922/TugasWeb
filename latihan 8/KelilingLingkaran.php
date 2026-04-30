<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "<h2>menghitung keliling lingkaran dengan jari-jari 15 cm</h2>";

    define("PI", 3.14);
    $jari_jari = 15;
    $keliling = 2 * PI * $jari_jari;

    echo "Jari-jari: $jari_jari cm <br>";
    echo "Keliling Lingkaran: $keliling cm";
?>
</body>
</html>