<?php
// Menentukan nama host, biasanya "localhost"
$server = "localhost";

// Nama pengguna MySQL (default: root)
$user = "root";

// Kata sandi untuk pengguna MySQL (default: kosong untuk root)
$password = "";

// Nama basis data yang akan dihubungkan
$nama_database = "event_managements";

//Mencoba untuk membuat koneksi ke basis data
$db = mysqli_connect($server, $user, $password, $nama_database);

// Memeriksa apakah koneksi berhasil
if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>