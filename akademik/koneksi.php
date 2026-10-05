<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "akademik"
);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>