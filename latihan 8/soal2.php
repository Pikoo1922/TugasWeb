<?php
$jumlahUang = 1387500;
$pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

echo "Uang yang diambil: Rp. " . number_format($jumlahUang) . "<br><br>";

foreach ($pecahan as $p) {
    $jumlahLembar = floor($jumlahUang / $p);
    $jumlahUang = $jumlahUang % $p;
    echo "Pecahan Rp. " . number_format($p) . " : $jumlahLembar lembar <br>";
}
?>