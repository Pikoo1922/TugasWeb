CREATE DATABASE IF NOT EXISTS ardian;
USE ardian;

-- Tabel Dosen
CREATE TABLE t_dosen (
    idDosen INT AUTO_INCREMENT PRIMARY KEY,
    namaDosen VARCHAR(50) NOT NULL,
    noHP VARCHAR(25) NOT NULL
);

-- Tabel Mahasiswa
CREATE TABLE t_mahasiswa (
    npm INT PRIMARY KEY,
    namaMhs VARCHAR(50) NOT NULL,
    prodi VARCHAR(25) NOT NULL,
    alamat VARCHAR(70) NOT NULL,
    noHP VARCHAR(25) NOT NULL
);

-- Tabel Mata Kuliah
CREATE TABLE t_matakuliah (
    kodeMK INT PRIMARY KEY,
    namaMK VARCHAR(70) NOT NULL,
    sks INT NOT NULL,
    jam INT NOT NULL
);