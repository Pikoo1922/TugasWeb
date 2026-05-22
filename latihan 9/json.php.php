<?php
// Modul 9 - Soal 9: Array dengan index nama dan umur, konversi ke JSON

$data = array(
    array("nama" => "Ficko", "umur" => 20),
    array("nama" => "Rhenanda", "umur" => 21),
    array("nama" => "Bagus", "umur" => 19),
    array("nama" => "Dani", "umur" => 22),
    array("nama" => "Husein", "umur" => 20),
    array("nama" => "Fikka", "umur" => 23),
    array("nama" => "Gapin", "umur" => 21),
    array("nama" => "Beni", "umur" => 24),
    array("nama" => "Habibi", "umur" => 19),
    array("nama" => "Raya", "umur" => 22),
    array("nama" => "Robin", "umur" => 20),
    array("nama" => "Nadin", "umur" => 21),
    array("nama" => "Deta", "umur" => 23),
    array("nama" => "Rama", "umur" => 18),
    array("nama" => "Sani", "umur" => 25)
);

// Konversi ke JSON
$json = json_encode($data, JSON_PRETTY_PRINT);

echo "<h2>Data Array (Nama dan Umur)</h2>";
echo "<h3>Data dalam format Array:</h3>";
echo "<pre>";
print_r($data);
echo "</pre>";

echo "<h3>Data dalam format JSON:</h3>";
echo "<pre>";
echo $json;
echo "</pre>";
?>