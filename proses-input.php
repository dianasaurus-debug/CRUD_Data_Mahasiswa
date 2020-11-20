<?php
    include 'koneksi.php';
    $nim = $_POST['nim'];
    $nomor_hp = $_POST['nomor_hp'];
    $jurusan = $_POST['kode_jurusan'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];


    $query = mysqli_query($sql_connect, "INSERT INTO mahasiswa VALUES('$nim','$nama', '$tanggal_lahir', '$alamat', '$jurusan', '$nomor_hp')");
    header('location:index.php?pesan=input');
?>