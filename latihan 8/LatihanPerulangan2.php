<?php
$angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

foreach ($angka as $val) {
    if ($val % 2 == 0) {
        echo "Nomor: $val Genap <br>";
    } else {
        echo "Nomor: $val Ganjil <br>";
    }
}
?>