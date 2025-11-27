<?php
// konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "digiperpus";

// membuat koneksi
$config = mysqli_connect($host, $user, $pass, $db);

// cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
}

?>