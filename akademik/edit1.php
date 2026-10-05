<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

$query = mysqli_query(
    $koneksi,
    "UPDATE mahasiswa
     SET nama='$nama',
         nim='$nim',
         alamat='$alamat'
     WHERE id='$id'"
);

if (!$query) {
    die("Gagal update: " . mysqli_error($koneksi));
}

header("Location: index.php");
exit;

?>