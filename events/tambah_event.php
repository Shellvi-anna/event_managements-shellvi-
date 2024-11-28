<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa | SMK Negeri 4 Tanjungpinang</title>
</head>
<body>
    <h3>Tambah Data Event</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama Event</td>
                <td><input type="text" name="nama_event" required></td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td><input type="text" name="lokasi" required></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>
                <td><input type="date" name="tanggal" style="width: 100%">
            </td>
</tr>
</table>
<button type="submit" name="simpan" class="btn btn-primary">
       Simpan</button>
</form>
</body>
</html>