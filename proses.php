<?php
include 'koneksi.php';

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add") {

        // var_dump($_POST);
        // var_dump($_FILES);
        // echo $_FILES['foto']['type'];
        // die();


        $nisn = $_POST['nisn'];
        $nama_siswa = $_POST['nama_siswa'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $foto = $_FILES['foto']['name'];
        //  $foto = "img5.jpg";
        $alamat = $_POST['alamat'];

        $dir = "img/";
        $tmpFile = $_FILES['foto']['tmp_name'];

        move_uploaded_file($tmpFile, $dir . $foto);

        // die();

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

    $queryShow = "SELECT * FROM tb_siswa WHERE id_siswa  = '$id_siswa';";
    $sqlShow = mysqli_query($conn, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    // var_dump($result);

    unlink("img/".$result['foto_siswa']);
    // die();

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
