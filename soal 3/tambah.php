<?php
// koneksi dbms
require "functions.php";

//cek apakah tombol submit sudah ditekan apa belum?
if ( isset($_POST["submit"])){
    //cek apakah data berhasil ditambahkan atau tidak?
    if(tambah($_POST) > 0){
        echo "
        <script>
        alert('Data berhasil disimpan');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal disimpan');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tambah Data Nomer Telepon</h1>
    <form action="" method="POST">
      <table>
            <tr>
                <td for="nama" align="left">Nama :</td>
                <td><input type="text" name="nama" id="nama" required></td>
            </tr>
            <tr>
                <td for="nim" align="left">NIM :</td>
                <td><input type="text" name="nim" id="nim" required></td>
            </tr>
            <tr>
                <td for="notelp" align="left">No. Telp :</td>
                <td><input type="text" name="notelp" id="notelp" required></td>
            </tr>
            <tr>
                <td for="email" align="left">Email :</td>
                <td><input type="text" name="email" id="email" required></td>
            </tr>
            <tr>
                <td for="gambar" align="left">Gambar :</td>
                <td><input type="text" name="gambar" id="gambar" required></td>
            </tr>
        </table>
        <br><br>
        
        <button type="submit" name="submit">Simpan</button>
        
    </form>
</body>