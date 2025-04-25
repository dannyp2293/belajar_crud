<?php 
include 'koneksi.php';

function tambah_data($data, $files){

    // echo "Tambah da"; --debugging---
    // die();
    $nisn = $_POST['nisn'];
    $nama_siswa = $_POST['nama_siswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $foto = $_FILES['foto']['name'];
    $alamat = $_POST['alamat'];

    $dir = "img/";
    $tmpFile = $_FILES['foto']['tmp_name'];

    move_uploaded_file($tmpFile, $dir . $foto);

    // die();

    $query = "INSERT INTO tb_siswa value(null, '$nisn', '$nama_siswa', '$jenis_kelamin', '$foto', '$alamat')";
    $sql = mysqli_query($conn, $query);
}

?>