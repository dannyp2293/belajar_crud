<?php
include 'koneksi.php';

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add") {
        // var_dump($_POST);
        // die();
        $nisn = $_POST['nisn'];
        $nama_siswa = $_POST['nama_siswa'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $foto = "img5.jpg";
        $alamat = $_POST['alamat'];

        $query = "INSERT INTO tb_siswa value(null, '$nisn', '$nama_siswa', '$jenis_kelamin', '$foto', '$alamat')";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("location: index.php");
            echo "data berhasil ditambahkan <a href='index.php'>[Home]</a>";
        } else {
            echo $query;
        }

        //  echo $nisn." | ".$nama_siswa." | ".$jenis_kelamin." | ".$foto." | ".$alamat;

        echo "<br>Tambah Data <a href='index.php'>[Home]</a>";
    } else if ($_POST['aksi'] == "edit") {
        echo "Edit Data <a href='index.php'>[Home]</a>";
    }
}
if (isset($_GET['hapus'])) {
    $id_siswa = $_GET['hapus'];
    $query = "DELETE FROM tb_siswa WHERE id_siswa = '$id_siswa';";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header("location: index.php");
        echo "data berhasil ditambahkan <a href='index.php'>[Home]</a>";
    } else {
        echo $query;
    }
    // echo "Hapus Data <a href='index.php'>[Home]</a>";
}
