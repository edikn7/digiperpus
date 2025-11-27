<?php
session_start();
include '../config.php';

// Aksi untuk melengkapi data anggota
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Ambil data dari form
    $user_id = $_SESSION['user_id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $tgl_bergabung = date('Y-m-d');

    // Insert data ke tabel anggota
    $query = "INSERT INTO anggota (user_id, email, no_hp, alamat, tgl_bergabung) VALUES ('$user_id', '$email', '$no_hp', '$alamat', '$tgl_bergabung')";
    if (mysqli_query($config, $query)) {

        // Update nama di tabel user
        mysqli_query($config, "UPDATE user SET nama='$nama' WHERE id='$user_id'");

        // Redirect ke dashboard anggota setelah berhasil melengkapi data
        header("Location: ../public/dashboard_anggota.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($config);
    }
    mysqli_close($config);
}
?>