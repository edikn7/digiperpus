<?php 
session_start();
include '../config.php';

// ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// cek user
$login = mysqli_query($config, 
    "SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1"
);
$cek = mysqli_num_rows($login);

if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // simpan data ke session
    $_SESSION['user_id'] = $data['id'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['nama']     = $data['nama'];
    $_SESSION['level']    = $data['level'];

    // ADMIN
    if ($data['level'] == "Admin") {
        header("Location: ../admin/dashboard_admin.php");
        exit;
    }

    // PUSTAKAWAN
    else if ($data['level'] == "Pustakawan") {
        header("Location: ../dashboard_pustakawan.php");
        exit;
    }

    // ANGGOTA (langsung masuk dashboard)
    else if ($data['level'] == "Anggota") {
        header("Location: ../public/dashboard_anggota.php");
        exit;
    }

    else {
        header("Location: ../login.php?pesan=gagal");
        exit;
    }

} else {
    header("Location: ../login.php?pesan=gagal");
    exit;
}
?>