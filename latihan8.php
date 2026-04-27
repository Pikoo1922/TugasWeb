<?php
$array = array(
    "1A" => array("udin", "ismail", "adi"),
    "1B" => array("lukman", "fajri", "mahmud")
);

// Menampilkan data array
print_r($array);
echo "<br><br>";

// Menampilkan kelas 1A
print_r($array['1A']);
echo "<br>";

// Menampilkan Udin
echo $array['1A'][0] . "<br>";

// Tampilkan fajri
echo $array['1B'][1] . "<br>";

// Tampilkan adi
echo $array['1A'][2] . "<br>";
?>