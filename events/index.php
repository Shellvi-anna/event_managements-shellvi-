<?php
// menghubungkan file config dengan index
include("../koneksi.php");
session_start(); // Mulai sesi
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Event Managements</title>
    <style>
        /* membuat styling pada table */
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
</style>
</head>
<body>
    <h2>Data Events</h2>
    <!--Tampilkan Notifikasi Jika Ada-->
    <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>
        <!-- Hapus notifikasi setelah ditampilkan -->
        <?php unset($_SESSION['notifikasi']); ?>
    <?php endif; ?>
    <table>
        <thead>
            <tr align="center">
                <th>#</th>
                <th>Nama Event</th>
                <th>Tanggal</th>
                <th>Lokasi</th>
                <th><a href="tambah_event.php">Tambah Data</a></th>
            </tr>
    </thead>
    <tbody>
        <?php
        $no = 1; // membuat penomoran data dari 1
        // memmbuat variabel untuk menjalankan query SQL
        $query =$db->query("SELECT * FROM events");
        /* perulangan while akan terus berjalan (menampilkan data)
        selama kondisi $query bernilai true (adanya data pada
        table tb_siswa) */
        while ($events = $query->fetch_assoc()){
        /* fungsi fetch_assoc digunakan untuk mengambil
        data perulangan dalam bentuk array */
        ?> <!-- kode PHP ditutup untuk menyisipkan kode HTML
        yang akan di looping menggukan while loop -->
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $events['nama_event'] ?></td>
            <td><?php echo date ("d-m-y",
            strtotime($events['tanggal'])); ?>
            <td><?php echo $events['lokasi'] ?></td>
            </td>
            <td align="center">
                <!-- URL ke halaman edit data dengan menggunakan
                 parameter id pada kolom table -->
                 <a href="edit_event.php?id=<?php echo $events ['event_id'] ?>">Edit</a>
                <a onclick="return confirm('anda yakin ingin menghapus menghapus data?')"
            href="hapus_event.php?id=<?php echo $events['event_id'] ?>">Hapus</a>
    </td>
    </tr>
    <?php
    } /* Mengakhiri proses perulangan while yang dimulai pada baris 48 */
    ?>
    </tbody>
    </table>
        <!-- Menghitung jumlah baris yang ada pada table (calon_siswa) -->
            <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>                 