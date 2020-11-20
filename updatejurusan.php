<?php
include 'koneksi.php';
$kode = $_POST['kode'];
$nama = $_POST['nama_jurusan'];
$query = mysqli_query($sql_connect, "UPDATE jurusan SET nama_jurusan='$nama' where kode_jurusan='$kode'");
header('location:indexjurusan.php?pesan=update');

?>