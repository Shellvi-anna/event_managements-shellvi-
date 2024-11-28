<?php

session_start(); // Mulai sesi
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    // Ambil data dari form
    $event_id = $_POST['event_id'];
    $nama_event = $_POST['nama_event'];
    $tanggal = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];

    // Buat query untuk memperbarui data siswa
    $sql = "UPDATE events SET
                nama_event='$nama_event',
                tanggal='$tanggal',
                lokasi='$lokasi'
            WHERE event_id=$event_id";

$query = mysqli_query($db, $sql);
// Simpan pesan notifikasi dalam sesi berdasarkan hasil query
if ($query) {
    $_SESSION['notifikasi'] = "Data event berhasil diperbarui!";
} else {
    $_SESSION['notifikasi'] = "Data event gagal diperbarui!";
}
// Alihkan ke halaman index.php
header('Location: index.php');
} else {
// Jika akses langsung tanpa form, tampilkan pesan error
die("Akses ditolak...");
}
?>