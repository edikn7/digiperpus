<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama       = $config->real_escape_string($_POST['nama']);
    $username   = $config->real_escape_string($_POST['username']);
    $email      = $config->real_escape_string($_POST['email']);
    $no_telepon = $config->real_escape_string($_POST['no_telepon']);
    $alamat     = $config->real_escape_string($_POST['alamat']);
    $password   = $config->real_escape_string($_POST['password']);
    $konfirmasi = $config->real_escape_string($_POST['konfirmasi']);

    if ($password !== $konfirmasi) {
        $error = "Password dan konfirmasi tidak cocok.";
    } else {
        $cek = $config->query("SELECT * FROM user WHERE username = '$username'");
        if ($cek && $cek->num_rows > 0) {
            $error = "Username sudah digunakan.";
        } else {
            $sql = "INSERT INTO user (nama, username, email, no_telepon, alamat, password, level, tgl_bergabung)
                    VALUES ('$nama', '$username', '$email', '$no_telepon', '$alamat', '$password', 'Anggota', NOW())";

            if ($config->query($sql)) {
                $success = "Pendaftaran berhasil! Silakan login.";
            } else {
                $error = "Terjadi kesalahan: " . $config->error;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - Digiperpus</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'blue-primary': '#1e40af',
                        'blue-secondary': '#3b82f6',
                        'teal-primary': '#0d9488',
                        'teal-secondary': '#14b8a6',
                        'cyan-accent': '#06b6d4',
                        'emerald-accent': '#10b981'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gradient-to-t from-cyan-100 to-teal-50 min-h-screen flex items-center justify-center p-4">

<div class="w-full max-w-2xl">

    <!-- Logo -->
    <div class="text-center mb-8">
        <img src="assets/img/logo_digiperpus1.png" class="h-20 mx-auto rounded-3xl object-cover">
        <p class="text-gray-600 mt-2">Buat akun perpustakaan digital Anda</p>
    </div>

    <!-- Card -->
    <div class="bg-white p-10 rounded-2xl shadow-2xl">

        <!-- Notifikasi -->
        <?php if (!empty($error)) { ?>
            <p class="mb-4 p-3 bg-red-100 text-red-700 rounded"><?= $error ?></p>
        <?php } ?>

        <?php if (!empty($success)) { ?>
            <p class="mb-4 p-3 bg-green-100 text-green-700 rounded"><?= $success ?></p>
        <?php } ?>

        <form method="post" action="" class="space-y-8">

    <!-- Grid 2 Kolom -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Nama Lengkap -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Nama Lengkap
            </label>
            <input 
                type="text" 
                name="nama"
                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg 
                focus:border-teal-primary focus:outline-none transition"
                placeholder="Masukkan Nama Lengkap"
                required>
        </div>

        <!-- Username -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Username
            </label>
            <input 
                type="text" 
                name="username"
                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg 
                focus:border-teal-primary focus:outline-none transition"
                placeholder="Masukkan Username"
                required>
        </div>

        <!-- Email -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Email
            </label>
            <input 
                type="email" 
                name="email"
                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg 
                focus:border-teal-primary focus:outline-none transition"
                placeholder="Masukkan Email"
                required>
        </div>

        <!-- No Telepon -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                No. Telepon
            </label>
            <input 
                type="text" 
                name="no_telepon"
                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg 
                focus:border-teal-primary focus:outline-none transition"
                placeholder="Masukkan Nomor Telepon"
                required>
        </div>

    </div>

    <!-- Alamat (Full Width) -->
    <div>
        <label class="block text-sm font-semibold text-gray-700 mb-2">
            Alamat
        </label>
        <input 
            type="text" 
            name="alamat"
            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg 
            focus:border-teal-primary focus:outline-none transition"
            placeholder="Masukkan Alamat"
            required>
    </div>

    <!-- Grid 2 Kolom Password & Konfirmasi -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Password
            </label>
            <input 
                type="password" 
                name="password"
                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg 
                focus:border-teal-primary focus:outline-none transition"
                placeholder="Masukkan Password"
                required>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Konfirmasi Password
            </label>
            <input 
                type="password" 
                name="konfirmasi"
                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg 
                focus:border-teal-primary focus:outline-none transition"
                placeholder="Konfirmasi Password"
                required>
        </div>

    </div>

    <!-- Tombol Daftar -->
    <button
        class="w-full bg-gradient-to-r from-blue-secondary to-teal-500 text-white py-3 px-6 rounded-lg 
        font-semibold hover:from-teal-500 hover:to-blue-secondary transition-all transform hover:scale-105 shadow-lg">
        Daftar
    </button>

        </form>

    </div>

    <!-- Link Login -->
    <div class="text-center mt-6">
        <p class="text-gray-600">Sudah punya akun?
            <a href="login.php" class="text-teal-primary hover:text-teal-secondary font-semibold transition">
                Masuk di sini
            </a>
        </p>
    </div>

    <!-- Back to Home -->
    <div class="text-center mt-4">
        <a href="public/index.php" class="inline-flex items-center text-gray-500 hover:text-teal-primary transition">
            <span class="mr-2">←</span>
            Kembali ke beranda
        </a>
    </div>

</div>

</body>
</html>