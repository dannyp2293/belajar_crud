<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ini adalah fontawesome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <title>Belajar _cCrud</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">
                CRUD - BS5
            </a>
    </nav>
    <div class="container">
        <form method="POST" action="proses.php" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="nisn"
                    class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-10">
                    <input type="text" name="nisn" class="form-control"
                        id="nisn" placeholder="Ex : 11222">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nisn"
                    class="col-sm-2 col-form-label">Nama Siswa</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_siswa" class="form-control"
                        id="nisn" placeholder="Ex : Alex">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jkel" 
                    class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select id="jkel" name="jenis_kelamin" class="form-select">
                        <option selected>Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="foto"
                    class="col-sm-2 col-form-label">Foto Siwa</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" name="foto" id="foto">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat"
                    class="col-sm-2 col-form-label">Alamat Lengkap</label>
                <div class="col-sm-10">
                    <textarea class="form-control"
                        id="alamat" name="alamat"
                        rows="3"></textarea>
                </div>
            </div>
            <div class="mb-3 row mt-4">
                <div class="col">
                    <?php
                    if (isset($_GET['ubah'])) {

                    ?>
                        <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan Perubahan</button>
                    <?php
                    } else {
                    ?>
                        <button type="submit" 
                        name="aksi"
                        value="add" class="btn btn-primary">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i> Tambahkan</button>
                    <?php
                    }
                    ?>

                    <a href="index.php">
                        <button type="button" class="btn btn-danger">
                            <i class="fa fa-reply" aria-hidden="true"></i> Batal</button></a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>