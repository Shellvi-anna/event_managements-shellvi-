<?php
session_start();

// Menghubungkan dengan file konfigurasi database
include("../koneksi.php");

// Mengecek apakah tombol 'simpan' telah ditekan
if(isset($_POST['simpan'])) {
    /* Mengambil nilai dari form input
    dan menyimpannya ke dalam variabel */
    $event_id = $_POST['id'];
    $nama_event = $_POST['nama_event'];
    $lokasi = $_POST['lokasi'];
    $tanggal = $_POST['tanggal'];

    /* Menyusun query SQL untuk menambahkan data
    ke tabel 'tb_siswa' */
    $sql = "INSERT INTO events 
            (event_id, nama_event, lokasi, tanggal)
            VALUES ('$event_id', '$nama_event', '$lokasi', '$tanggal')";

    // Menjalankan query dan menyimpan hasilnya dalam variabel $query
    $query = mysqli_query($db, $sql);

    // Simpan pesan di sesi
    if($query) {
        $_SESSION['notifikasi'] = "Data siswa berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data siswa gagal ditambahkan!";
    }

    // Alihkan ke halaman index.php
    header('Location: index.php');
} else {
    // Jika akses langsung tanpa form, tampilkan pesan error
    die("Akses ditolak...");
}
?>