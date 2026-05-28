
<?php
/*
 * Nama: Ficko Daniar Fachryza Putra
 * NIM: 253307043
 */
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Informasi Akademik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">
    <div class="bg-white p-10 rounded-xl shadow-lg w-full max-w-2xl border-t-4 border-emerald-500 text-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Sistem Informasi Akademik</h1>
        <p class="text-gray-500 mb-8">Pilih menu pengolahan data di bawah ini:</p>
        
        <div class="grid grid-cols-3 gap-4">
            <a href="viewdosen.php" class="p-6 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition border border-emerald-200">
                <h2 class="font-bold text-emerald-700">Data Dosen</h2>
            </a>
            <a href="viewmahasiswa.php" class="p-6 bg-blue-50 rounded-lg hover:bg-blue-100 transition border border-blue-200">
                <h2 class="font-bold text-blue-700">Data Mahasiswa</h2>
            </a>
            <a href="viewmatakuliah.php" class="p-6 bg-purple-50 rounded-lg hover:bg-purple-100 transition border border-purple-200">
                <h2 class="font-bold text-purple-700">Data Mata Kuliah</h2>
            </a>
        </div>
    </div>
</body>
</html>