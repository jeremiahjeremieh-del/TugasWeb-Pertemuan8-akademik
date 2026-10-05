<?php

include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = '$id'");

if (!$query) {
    die("Error: " . mysqli_error($koneksi));
}

$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data tidak ditemukan.");
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
</head>

<body>

<h2>EDIT DATA MAHASISWA</h2>

<form method="POST" action="update.php">

    <input type="hidden" name="id" value="<?= $data['id']; ?>">

    <p>
        Nama
        <br>
        <input type="text" name="nama"
               value="<?= htmlspecialchars($data['nama']); ?>">
    </p>

    <p>
        NIM
        <br>
        <input type="text" name="nim"
               value="<?= htmlspecialchars($data['nim']); ?>">
    </p>

    <p>
        Alamat
        <br>
        <input type="text" name="alamat"
               value="<?= htmlspecialchars($data['alamat']); ?>">
    </p>

    <button type="submit">SIMPAN PERUBAHAN</button>

</form>

<br>

<a href="index.php">KEMBALI</a>

</body>
</html>