<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Mahasiswa</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container form-container">

    <div class="form-header">

        <h1>Tambah Data Mahasiswa</h1>

        <p>Masukkan data mahasiswa baru</p>

    </div>

    <form action="tambah_aksi.php" method="POST">

        <div class="form-group">

            <label for="nama">
                Nama
            </label>

            <input
                type="text"
                id="nama"
                name="nama"
                placeholder="Masukkan nama"
                required
            >

        </div>

        <div class="form-group">

            <label for="nim">
                NIM
            </label>

            <input
                type="text"
                id="nim"
                name="nim"
                placeholder="Masukkan NIM"
                required
            >

        </div>

        <div class="form-group">

            <label for="alamat">
                Alamat
            </label>

            <textarea
                id="alamat"
                name="alamat"
                placeholder="Masukkan alamat"
                rows="4"
                required
            ></textarea>

        </div>

        <div class="form-actions">

            <a href="index.php" class="btn btn-kembali">
                Kembali
            </a>

            <button type="submit" class="btn btn-simpan">
                Simpan
            </button>

        </div>

    </form>

</div>

</body>
</html>