<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

$query = mysqli_query(
    $koneksi,
    "INSERT INTO mahasiswa (nama, nim, alamat)
     VALUES ('$nama', '$nim', '$alamat')"
);

if ($query) {

    header("Location: index.php");
    exit;

} else {

    echo "Data gagal ditambahkan: " . mysqli_error($koneksi);

}

?>