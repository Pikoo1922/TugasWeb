<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $txt = "Selamat datang";
    $txt2 = "Politeknik Negeri Madiun"; 
    $x = 5; 
    $y = 10.5; 

    echo "<p>isi Variable txt adalah: $txt</p>";
    echo "<p>isi Variable x adalah: $x</p>";
    echo "<p>isi Variable y adalah: $y</p>";
    
    echo "Belajar PHP di " . $txt2 . "<br>";
    echo $x + $y; 

    define("nama_konstanta", "GIAN YUDHA PRATAMA");
    echo "<br>" . nama_konstanta; 
?>
</body>
</html>