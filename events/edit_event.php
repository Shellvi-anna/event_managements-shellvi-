<?php
// Termasuk file konfigurasi
include("../koneksi.php");

// Mengambil ID siswa dari parameter URL
$event_id = $_GET['id'];

// Mengambil data siswa dari database berdasarkan ID
$query = $db->query("SELECT * FROM events WHERE event_id = '$event_id'");
$events = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit event</title>
</head>
<body>
    <h3>Edit Data Event</h3>
    <form action="proses_edit.php" method="POST">
        <!-- Menyimpan ID untuk proses selanjutnya -->
        <input type="hidden" name="event_id" value="<?php echo $events['event_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama Event</td>
                <td>
                    <input type="text" name="nama_event"
                     value="<?php echo $events['nama_event']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td>
                    <input type="text" name="lokasi"
                     value="<?php echo $events['lokasi']; ?>" required>
                </td>
            </tr>
               <tr>
                 <td>Tanggal</td>
                 <td>
                <input type="date" name="tanggal" 
                value="<?php echo $events['tanggal']; ?>" style="width: 100%">
            </td>
            </tr>
    </table>
    <button type="submit" name="simpan">Simpan</button>
   </form>
</body>
</html>