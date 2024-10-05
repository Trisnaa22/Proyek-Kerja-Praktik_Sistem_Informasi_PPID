<?php
// Menghubungkan ke database
include "../koneksi.php"; // Pastikan jalur file benar, naik satu folder ke atas
include "header.php"; // Menambahkan header

// Mendapatkan data dari database
$query = "SELECT * FROM kontaks";
$result = mysqli_query($koneksi, $query);

// Mengecek apakah query berhasil
if (!$result) {
    die("Query Error: " . mysqli_error($koneksi));
}

// Menampilkan data dalam tabel
echo "<table border='1' align='center'>";
echo "<tr bgcolor='grey'>";
echo "<th>No</th>";
echo "<th>Nama</th>";
echo "<th>Email</th>";
echo "<th>Judul Pesan</th>";
echo "<th>Isi Pesan</th>";
echo "</tr>";

$no = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $no++ . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['judul_pesan'] . "</td>";
    echo "<td>" . $row['isi_pesan'] . "</td>";
    echo "</tr>";
}

echo "</table>";

// Menutup koneksi ke database
mysqli_close($koneksi);

include "footer.php"; // Menambahkan footer
