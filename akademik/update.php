<?php

include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Akses tidak valid.");
}

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

$query = mysqli_query(
    $koneksi,
    "UPDATE mahasiswa
     SET nama = '$nama',
         nim = '$nim',
         alamat = '$alamat'
     WHERE id = '$id'"
);

if (!$query) {
    die("UPDATE GAGAL: " . mysqli_error($koneksi));
}

echo "Data berhasil diupdate.";

echo "<br><br>";

echo '<a href="index.php">Kembali ke Data Mahasiswa</a>';

?>