<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Input Data</title>
</head>
<body>
    <div class="container">
        <form action="proses_inputdosen.php" method="post">
            <fieldset>
                <legend>Input Data Dosen</legend>
                <p><label>Nama Dosen: </label><input type="text" name="namaDosen"></p>
                <p><label>No HP: </label><input type="text" name="noHP" placeholder="Contoh: 081222333444"></p>
            </fieldset>
            <p><input type="submit" name="input" value="Simpan"></p>
        </form>
    </div>
</body>
</html>