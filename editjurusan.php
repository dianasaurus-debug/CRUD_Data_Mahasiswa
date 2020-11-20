<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<?php
include 'koneksi.php';
$kode = $_GET['kode'];

$query = mysqli_query($sql_connect, "SELECT * from jurusan where kode_jurusan='$kode'");
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
    <div class="row"><div class="col-12 mt-3 mb-2"><h4>Edit Data Jurusan</h4></div></div>
    <div class="row">
        <div class="col-12">
            <form method="post" action="updatejurusan.php">
                <input hidden type="text" class="form-control" value="<?php echo $data['kode_jurusan']?>" name="kode" required>
                <div class="form-group">
                    <label>Nama Jurusan</label>
                    <input type="text" class="form-control" value="<?php echo $data['nama_jurusan']?>" name="nama_jurusan" required>
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