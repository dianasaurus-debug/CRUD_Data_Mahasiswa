<?php
include 'koneksi.php';
$nim = $_GET['nim'];

$query = mysqli_query($sql_connect, "DELETE FROM mahasiswa where NIM='$nim'");
header('location:index.php?pesan=deleted');

?>