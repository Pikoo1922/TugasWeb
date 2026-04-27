<?php
$dataSiswa = array(
    1 => array("poin" => 75, "nama" => "Adi"),
    2 => array("poin" => 80, "nama" => "Joni"),
    3 => array("poin" => 65, "nama" => "Jihan"),
    4 => array("poin" => 70, "nama" => "Aya"),
    5 => array("poin" => 85, "nama" => "Ita"),
    6 => array("poin" => 90, "nama" => "Budi"),
    7 => array("poin" => 95, "nama" => "Tini"),
    8 => array("poin" => 65, "nama" => "Sari")
);

// a) Poin siswa nomor urut 5
echo "Poin siswa nomor urut 5 (".$dataSiswa[5]['nama']."): " . $dataSiswa[5]['poin'] . "<br>";

// b) Nama siswa dengan poin 90
echo "Siswa dengan poin 90: ";
foreach ($dataSiswa as $siswa) {
    if ($siswa['poin'] == 90) {
        echo $siswa['nama'] . " ";
    }
}
echo "<br>";

// c) Nama siswa dengan poin 100
echo "Siswa dengan poin 100: ";
$found = false;
foreach ($dataSiswa as $siswa) {
    if ($siswa['poin'] == 100) {
        echo $siswa['nama'];
        $found = true;
    }
}
if (!$found) {
    echo "tidak ada";
}
?>