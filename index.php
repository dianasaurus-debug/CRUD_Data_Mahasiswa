<html>
<head>
    <title>Halaman Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php"><h5>Mahasiswa</h5></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="indexjurusan.php"><h5>Jurusan</h5></a>
        </li>
    </ul>
</nav>
<div class="container">
    <div class="row mt-3">
        <h3>Data Mahasiswa</h3>
    </div>
    <div class="row">
        <a class="btn btn-success mt-3 mb-1" href="input.php">+ Tambah data</a>
    <table class="table table-dark">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Nomor HP</th>
            <th>Action</th>
        </tr>
        <?php
            include "koneksi.php";
            $datas_query = mysqli_query($sql_connect, 'SELECT * from mahasiswa');
            while($data = mysqli_fetch_array($datas_query)){
                $kode = $data['kode_jurusan'];
                $data_jurusan = mysqli_query($sql_connect, "SELECT * from jurusan where kode_jurusan='$kode'");
                $data_jurusan = mysqli_fetch_array($data_jurusan);
        ?>
        <tr>
            <td><?php echo $data['NIM']?></td>
            <td><?php echo $data['nama']?></td>
            <td><?php echo $data['tanggal_lahir']?></td>
            <td><?php echo $data['alamat']?></td>
            <td><?php echo $data_jurusan['nama_jurusan']?></td>
            <td><?php echo $data['nomor_hp']?></td>
            <td><a class="btn btn-info mr-2" href="edit.php?nim=<?php echo $data['NIM']?>">Edit</a><a class="btn btn-danger" href="hapus.php?nim=<?php echo $data['NIM']?>">Hapus</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
    </div>
</div>

</body>
</html>