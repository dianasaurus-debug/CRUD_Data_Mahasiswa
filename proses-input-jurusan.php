<?php
include 'koneksi.php';
$kode = $_POST['kode_jurusan'];
$nama = $_POST['nama_jurusan'];

$query = mysqli_query($sql_connect, "INSERT INTO jurusan VALUES('$kode', '$nama')");
header('location:indexjurusan.php');
?>