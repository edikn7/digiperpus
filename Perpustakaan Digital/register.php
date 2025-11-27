<?php
    include 'config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama       = $config->real_escape_string($_POST['nama']);
        $username   = $config->real_escape_string($_POST['username']);
        $password   = $config->real_escape_string($_POST['password']);
        $konfirmasi = $config->real_escape_string($_POST['konfirmasi']);
    
        if ($password !== $konfirmasi) {
            $error = "Password dan konfirmasi tidak cocok.";
        } else {
            $cek = $config->query("SELECT * FROM user WHERE username = '$username'");
            if ($cek && $cek->num_rows > 0) {
                $error = "username sudah digunakan.";
            } else {
                $sql = "INSERT INTO user (nama, username, password) 
                        VALUES ('$nama', '$username', '$password')";
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - DIgiperpus</title>
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
<body class="bg-gradient-to-br from-slate-50 via-cyan-50 to-teal-50 min-h-screen flex items-center justify-center p-4">
<div class="w-full max-w-md">
        <!-- Bagian Logo -->
        <div class="text-center mb-8">
            <div class="flex items-center justify-center">
                <img src="assets/img/logo_digiperpus1.png" alt="DigiPerpus Logo" class="h-16 w-auto transform group-hover:rotate-12 transition-transform duration-300">
            </div>
            <p class="text-gray-600">Buat akun perpustakaan digital Anda</p>
        </div>

         <!-- Form Registrasi -->
         <div class="bg-white p-8 rounded-2xl shadow-xl">
            <form  method="post" action="" class="space-y-6">
                <div class="form-group">
                    <label class="block text-sm font-medium text-gray-600 mb-2">
                        Nama Lengkap
                    </label>
                        <input 
                            type="text" 
                            name="nama"
                            class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-lg focus:border-teal-primary focus:outline-none transition-colors"
                            placeholder="Masukkan Nama Lengkap"
                            required="required"
                        >
                </div>

                <div class="form-group">
                    <label class="block text-sm font-medium text-gray-600 mb-2">
                        Username
                    </label>
                        <input 
                            type="text" 
                            name="username"
                            class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-lg focus:border-teal-primary focus:outline-none transition-colors"
                            placeholder="Masukkan Username"
                            required="required"
                        >
                </div>

                <div class="form-group">
                    <label for="password" class="block text-sm font-medium text-gray-600 mb-2">
                        Password
                    </label>
                        <input 
                            type="password"
                            id="password"  
                            name="password"
                            class="w-full pl-12 pr-12 py-3 border-2 border-gray-200 rounded-lg focus:border-teal-primary focus:outline-none transition-colors"
                            placeholder="Masukkan password"
                            required="required"
                        >
                </div>

                <div class="form-group">
                    <label for="password" class="block text-sm font-medium text-gray-600 mb-2">
                        Konfirmasi Password
                    </label>
                        <input 
                            type="password"
                            id="password"  
                            name="konfirmasi"
                            class="w-full pl-12 pr-12 py-3 border-2 border-gray-200 rounded-lg focus:border-teal-primary focus:outline-none transition-colors"
                            placeholder="Konfirmasi Password"
                            required="required"
                        >
                </div>

            

                <!-- Tombol Daftar -->
                <input
                    value="Daftar"
                    type="submit"
                    class="w-full bg-gradient-to-r from-blue-primary to-teal-primary text-white py-3 px-6 rounded-lg font-semibold hover:from-teal-primary hover:to-cyan-accent transition-colors shadow-lg"
                >
    


            </form>
        </div>
</body>
</html>