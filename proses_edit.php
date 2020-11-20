<?php
    include 'koneksi.php';
    $nim = $_POST['nim'];
    $nomor_hp = $_POST['nomor_hp'];
    $jurusan = $_POST['kode_jurusan'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    $query = mysqli_query($sql_connect, "UPDATE mahasiswa SET nama='$nama', alamat = '$alamat', nomor_hp='$nomor_hp', kode_jurusan='$jurusan', tanggal_lahir='$tanggal_lahir' where NIM='$nim'");
    header('location:index.php?pesan=update');

?>