<?php
require_once ('kelas/manusia.php');

$ficko = new manusia();
$ficko->setNama("Ficko Daniar Fachryza Putra");
$ficko->setUmur(20);
$ficko->setNik("91238");

echo "<br>Identitas Anda:<br>";
echo "Nama: " . $ficko->getNama() . "<br>";
echo "Umur: " . $ficko->getUmur() . " tahun<br>";
echo "NIK: " . $ficko->getNIK() . "<br>";
?>