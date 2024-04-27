<?php

//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "buku_telp");

function query ($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $koneksi;
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $notelp = htmlspecialchars($data["notelp"]);
    $email = htmlspecialchars($data["email"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO data_bukutelp
        VALUES
        (NULL,'$nama','$nim','$notelp','$email','$gambar')
        ";
    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}

function hapus($id){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM data_bukutelp WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function ubah($data){
    global $koneksi;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $notelp = htmlspecialchars($data["notelp"]);
    $email = htmlspecialchars($data["email"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE data_bukutelp SET
                nama ='$nama',
                nim = '$nim',
                notelp = '$notelp',
                email = '$email',
                gambar = '$gambar' 
            WHERE id = $id

        ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function cari($keyword){
    $query = "SELECT * FROM data_bukutelp
                WHERE
                nama LIKE  '%$keyword%' OR
                nim  LIKE  '%$keyword%' OR
                notelp LIKE  '%$keyword%' OR
                email LIKE  '%$keyword%'

            ";
    return query($query);         

    }