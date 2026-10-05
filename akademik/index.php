<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

if (!$data) {
    die("Query gagal: " . mysqli_error($koneksi));
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Mahasiswa</title>
</head>

<body>

<h1>CRUD DATA MAHASISWA</h1>

<a href="tambah.php">+ TAMBAH MAHASISWA</a>

<br><br>

<table border="1" cellpadding="10">

    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>NIM</th>
        <th>ALAMAT</th>
        <th>OPSI</th>
    </tr>

    <?php
    $no = 1;

    while ($d = mysqli_fetch_assoc($data)) {
    ?>

    <tr>

        <td><?= $no++; ?></td>

        <td><?= htmlspecialchars($d['nama']); ?></td>

        <td><?= htmlspecialchars($d['nim']); ?></td>

        <td><?= htmlspecialchars($d['alamat']); ?></td>

        <td>
            <a href="edit.php?id=<?= $d['id']; ?>">
                EDIT
            </a>

            |

            <a
                href="hapus.php?id=<?= $d['id']; ?>"
                onclick="return confirm('Yakin hapus data ini?')"
            >
                HAPUS
            </a>
        </td>

    </tr>

    <?php } ?>

</table>

</body>
</html>