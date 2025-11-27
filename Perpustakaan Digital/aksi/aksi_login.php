<?php 
session_start();

// koneksi database
include '../config.php';

// ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// cek data user
$login = mysqli_query($config, 
    "SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // simpan id user ke session (PENTING!)
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

    // ANGGOTA
    else if ($data['level'] == "Anggota") {

        // CEK apakah anggota sudah punya data di tabel anggota
        $uid = $data['id'];

        $cekAnggota = mysqli_query($config,
            "SELECT * FROM anggota WHERE user_id='$uid'");
        $ada = mysqli_num_rows($cekAnggota);

        if ($ada == 0) {
            // belum punya data → wajib lengkapi data
            header("Location: ../public/lengkapi_data_anggota.php");
        } else {
            // sudah punya data → langsung dashboard
            header("Location: ../public/dashboard_anggota.php");
        }
        exit;
    }

    // selain itu gagal
    else {
        header("Location: ../login.php?pesan=gagal");
        exit;
    }

} else {
    header("Location: ../login.php?pesan=gagal");
}
?>
