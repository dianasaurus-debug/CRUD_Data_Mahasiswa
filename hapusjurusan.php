<?php
include 'koneksi.php';
$kode = $_GET['kode'];

$query = mysqli_query($sql_connect, "DELETE FROM jurusan where kode_jurusan='$kode'");
header('location:indexjurusan.php?pesan=deleted');

?>