<?php
session_start();
include '../config.php';

// Ambil semua user dengan level Anggota
$query = mysqli_query($config, "SELECT * FROM user WHERE level='Anggota' ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Anggota | Digiperpus</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'blue-primary': '#1e40af',
                        'blue-secondary': '#3b82f6',
                        'teal-primary': '#0d9488',
                        'teal-secondary': '#14b8a6',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-100">

<!-- Sidebar -->
<?php include_once __DIR__ . '/../views/partials/navbar_admin.php'; ?>

<main class="ml-64 mt-28 p-8">

    <h1 class="text-3xl font-bold text-blue-secondary mb-6 tracking-tight">
        Manajemen Anggota
    </h1>

    <!-- Tombol Aksi -->
    <div class="flex items-center gap-4 mb-6">

        <a href="../admin/tambah_anggota.php" 
           class="bg-blue-secondary text-white px-5 py-2 rounded-lg shadow hover:scale-105 transition">
            + Tambah Anggota
        </a>

        <a href="../admin/cetak_laporan_anggota.php" target="_blank"
           class="bg-teal-primary text-white px-5 py-2 rounded-lg shadow hover:scale-105 transition">
            Cetak Laporan Anggota
        </a>

    </div>

    <!-- Card Tabel -->
    <div class="bg-white p-6 rounded-xl shadow-xl">

        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300 rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gradient-to-r from-teal-primary to-blue-secondary text-white text-sm">
                        <th class="px-4 py-3 border">No</th>
                        <th class="px-4 py-3 border">Nama Lengkap</th>
                        <th class="px-4 py-3 border">Username</th>
                        <th class="px-4 py-3 border">Email</th>
                        <th class="px-4 py-3 border">No. Telepon</th>
                        <th class="px-4 py-3 border">Alamat</th>
                        <th class="px-4 py-3 border">Tanggal Bergabung</th>
                        <th class="px-4 py-3 border">Status</th>
                    </tr>
                </thead>

                <tbody class="text-sm">
                    <?php 
                    $no = 1;

                    while ($d = mysqli_fetch_assoc($query)) {

                        // Cek kelengkapan data
                        $lengkap = (
                            !empty($d['email']) &&
                            !empty($d['no_telepon']) &&
                            !empty($d['alamat'])
                        );
                    ?>

                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-4 py-3 border text-center"><?= $no++; ?></td>
                        <td class="px-4 py-3 border"><?= $d['nama']; ?></td>
                        <td class="px-4 py-3 border"><?= $d['username']; ?></td>

                        <td class="px-4 py-3 border">
                            <?= $d['email'] ?: '<span class="text-gray-400 italic">Belum diisi</span>'; ?>
                        </td>

                        <td class="px-4 py-3 border">
                            <?= $d['no_telepon'] ?: '<span class="text-gray-400 italic">Belum diisi</span>'; ?>
                        </td>

                        <td class="px-4 py-3 border">
                            <?= $d['alamat'] ?: '<span class="text-gray-400 italic">Belum diisi</span>'; ?>
                        </td>

                        <td class="px-4 py-3 border">
                            <?= $d['tgl_bergabung'] ?: '<span class="text-gray-400 italic">-</span>'; ?>
                        </td>

                        <td class="px-4 py-3 border text-center">
                            <?php if ($lengkap) { ?>
                                <span class="text-green-600 font-semibold">Lengkap</span>
                            <?php } else { ?>
                                <span class="text-red-600 font-semibold">Belum Lengkap</span>
                            <?php } ?>
                        </td>
                    </tr>

                    <?php } ?>
                </tbody>

            </table>
        </div>

    </div>

</main>

</body>
</html>
