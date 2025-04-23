<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_siswa';
$conn = mysqli_connect($host, $user, $pass, $db);
if($conn){
    // echo "koneksi Berhasil";
}


//fungsi ini agar tidak menampilkan notif koneksi berhasil
mysqli_select_db($conn, $db);
?>
