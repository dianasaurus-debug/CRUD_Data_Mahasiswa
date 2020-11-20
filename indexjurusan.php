<html>
<head>
    <title>Halaman Jurusan</title>
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
        <h5>Input Jurusan</h5>
    </div>
    <div class="row">
        <div class="col-12">
            <form method="post" action="proses-input-jurusan.php">
                <div class="form-group">
                    <label>Kode Jurusan</label>
                    <input type="text" class="form-control" name="kode_jurusan" required>
                </div>
                <div class="form-group">
                    <label>Nama Jurusan</label>
                    <input type="text" class="form-control" name="nama_jurusan" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-info">
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <table class="table table-dark">
            <tr>
                <th>Kode Jurusan</th>
                <th>Nama Jurusan</th>
                <th>Action</th>
            </tr>
            <?php
            include "koneksi.php";
            $datas_query = mysqli_query($sql_connect, 'SELECT * from jurusan');
            while($data = mysqli_fetch_array($datas_query)){
                ?>
                <tr>
                    <td><?php echo $data['kode_jurusan']?></td>
                    <td><?php echo $data['nama_jurusan']?></td>
                    <td><a class="btn btn-info mr-2" href="editjurusan.php?kode=<?php echo $data['kode_jurusan']?>">Edit</a><a class="btn btn-danger" href="hapusjurusan.php?kode=<?php echo $data['kode_jurusan']?>">Hapus</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>

</body>
</html>