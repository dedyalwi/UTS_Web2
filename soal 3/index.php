<?php
require 'functions.php';
$buku_telp = query("SELECT * FROM data_bukutelp ORDER BY id ASC");

//tombol cari ditekan?
if (isset($_POST["cari"])){
    $buku_telp = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Daftar Nomer Telepon Mahasiswa</h1>
    <a href="tambah.php">Tambah Data Nomer Telepon</a>
    <br></br>
    <form action="" method="POST">
        <input type="text" name="keyword" size="30"  autofocus 
            placeholder="Masukkan kata kunci pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>
    <table border="2" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>No.Telp</th>
            <th>Email</th>
        </tr>
        <?php $i=1; ?>
        <?php foreach ($buku_telp as $row) :?>
            
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?id=<?= $row['id']; ?>"><input type='button' class='btn-update'></a> 
                <a href="hapus.php?id=<?= $row['id']; ?>"><input type='button' class='btn-delete'></a>
            </td>
            <td>
                <img src="img/<?= $row['gambar'] ?>" width="50">
            </td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['notelp'] ?></td>
            <td><?= $row['email'] ?></td>
        </tr>
        <?php $i++; ?>
<?php endforeach; ?>
    </table>

</body>