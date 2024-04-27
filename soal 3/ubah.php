<?php
// koneksi dbms
require "functions.php";

//ambil data di url
$id = $_GET["id"];

//query data buku berdasarkan id

//query data buku berdasarkan id
$buku_telp = query("SELECT * FROM data_bukutelp WHERE id = $id")[0];


//cek apakah tombol submit sudah ditekan apa belum?
if ( isset($_POST["submit"])){
    //cek apakah data berhasil diubah atau tidak?
    if(ubah($_POST) > 0){
        echo "
        <script>
        alert('Data berhasil diubah');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal diubah');
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
    <title>Halaman Ubah Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ubah Data Nomer Telepon</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $buku_telp["id"]; ?>">
        <table>
    
            <tr>
                <td for="nama"align="left">Nama :</td>
                <td><input type="text" name="nama" id="nama" required value="<?= $buku_telp["nama"]; ?>"></td>
            </tr>
            <tr>
                <td for="nim"align="left">NIM :</td>
                <td><input type="text" name="nim" id="nim" required value="<?= $buku_telp["nim"]; ?>"></td>
            </tr>
            <tr>
                <td for="notelp"align="left">No.Telp :</td>
                <td><input type="text" name="notelp" id="notelp" required value="<?= $buku_telp["notelp"]; ?>"></td>
            </tr>
            <tr>
                <td for="email"align="left">Email :</td>
                <td><input type="text" name="email" id="email" required value="<?= $buku_telp["email"]; ?>"></td>
            </tr>
            <tr>
                <td for="gambar"align="left">Gambar :</td>
                <td><input type="text" name="gambar" id="gambar" required value="<?= $buku_telp["gambar"]; ?>"></td>
            </tr>
        </table>
            <br></br>
            
                <button type="submit" name="submit">Ubah Data</button>

   
        
    </form>
</body>