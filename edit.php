<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<?php
include 'koneksi.php';
    $nim = $_GET['nim'];

    $query = mysqli_query($sql_connect, "SELECT * from mahasiswa where nim='$nim'");
    $data = mysqli_fetch_array($query);
?>
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
    <?php
    include 'koneksi.php';
    $datas_jurusan = mysqli_query($sql_connect, 'SELECT * from jurusan');

    ?>

    <div class="row"><div class="col-12"><h5>Edit Data Mahasiswa</h5></div></div>
    <div class="row">
        <div class="col-12">
            <form method="post" action="proses_edit.php">
                    <input hidden type="text" class="form-control" value="<?php echo $data['NIM']?>" name="nim">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" value="<?php echo $data['nama']?>" name="nama" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" value="<?php echo $data['alamat']?>" name="alamat" required>
                </div>
                <div class="form-group">
                    <label>Nomor HP</label>
                    <input type="text" class="form-control" value="<?php echo $data['nomor_hp']?>" name="nomor_hp" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" value="<?php echo $data['tanggal_lahir']?>" name="tanggal_lahir" required>
                </div>
                <div class="form-group">
                    <label>Pilih Jurusan</label>
                    <select class="form-control" name="kode_jurusan">
                        <?php while($datas_array = mysqli_fetch_array($datas_jurusan)) {?>
                            <option value="<?php echo $datas_array['kode_jurusan']?>"><?php echo $datas_array['nama_jurusan']?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-info">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>