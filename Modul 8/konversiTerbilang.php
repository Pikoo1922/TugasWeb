<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Tentukan angka yang ingin dikonversi (1-9)
    $angka = 7; 
    
    echo " $angka dikonversikan menjadi: ";
    
    switch ($angka) {
        case 1:
            echo "satu";  
            break;
        case 2:
            echo "dua";  
            break;
        case 3:
            echo "tiga";  
            break;
        case 4:
            echo "empat";  
            break;
        case 5:
            echo "lima";  
            break;
        case 6:
            echo "enam";  
            break;
        case 7:
            echo "tujuh";  
            break;
        case 8:
            echo "delapan";  
            break;
        case 9:
            echo "sembilan";  
            break;
        case 0:
            echo "nol";  
            break;
        default:
            echo "Angka tidak dikenal (hanya 1-9)";
            break;
    }
    ?>
</body>
</html>