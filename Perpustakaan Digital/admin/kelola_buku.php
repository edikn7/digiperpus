<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | Digiperpus</title>
    <script src ="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body, html {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'grey': '#c0c0c0ff',
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
<body class="bg-blue-50 min-h-screen">
    <!-- Bagian Kelola Buku -->
    <?php include_once __DIR__ .'/../views/partials/navbar_admin.php'; ?>
        
    <main class="ml-64 mt-28 p-8">

    <h1 class="text-3xl font-bold text-blue-secondary mb-6 tracking-tight">
        Manajemen Buku
    </h1>

    <!-- Tombol Aksi -->
    <div class="flex items-center gap-4 mb-6">

        <a href="../admin/tambah_buku.php" 
           class="bg-blue-secondary text-white px-5 py-2 rounded-lg shadow hover:scale-105 transform transition">
            + Tambah Buku
        </a>

        <a href="../admin/cetak_laporan_buku.php" target="_blank"
           class="bg-teal-500 text-white px-5 py-2 rounded-lg shadow hover:scale-105 transform transition">
            Cetak Laporan Buku
        </a>

    </div>

    <!-- Card Tabel -->
    <div class="bg-white p-6 rounded-xl shadow-xl">

        <!-- Search Input -->
        <div class="mb-4">
            <input type="text" id="searchInput" placeholder="Cari berdasarkan judul, pengarang, atau kategori..." 
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-secondary">
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300 rounded-lg overflow-hidden">
            
                <thead>
                    <tr class="bg-teal-500 text-white text-sm">
                        <th class="px-4 py-3 border">No</th>
                        <th class="px-4 py-3 border">Cover</th>
                        <th class="px-4 py-3 border">Judul</th>
                        <th class="px-4 py-3 border">Pengarang</th>
                        <th class="px-4 py-3 border">Penerbit</th>
                        <th class="px-4 py-3 border">ISBN</th>
                        <th class="px-4 py-3 border">Jumlah Buku</th>
                        <th class="px-4 py-3 border">Kategori</th>
                        <th class="px-4 py-3 border">Aksi</th>
                    </tr>
                </thead>

                <tbody class="text-sm">

                    <?php 
                        include '../config.php';
                        $no = 1;
                        $data = mysqli_query($config, "SELECT * FROM buku");
                        while ($d = mysqli_fetch_assoc($data)) {
                    ?>

                    <tr class="hover:bg-gray-50 transition text-center">
                        <td class="px-4 py-3 border"><?= $no++; ?></td>

                        <td class="px-4 py-3 border">
                            <img src="../assets/img/<?= $d['cover']; ?>" 
                                 class="w-16 h-20 object-cover rounded shadow" alt="Cover Buku">
                        </td>

                        <td class="px-4 py-3 border"><?= $d['judul']; ?></td>
                        <td class="px-4 py-3 border"><?= $d['pengarang']; ?></td>
                        <td class="px-4 py-3 border"><?= $d['penerbit']; ?></td>
                        <td class="px-4 py-3 border"><?= $d['isbn']; ?></td>
                        <td class="px-4 py-3 border"><?= $d['jumlah_buku']; ?></td>
                        <td class="px-4 py-3 border"><?= $d['kategori']; ?></td>

                        <td class="px-4 py-3 border text-center">
                            <a href="../admin/edit_buku.php?id=<?= $d['id_buku']; ?>" 
                               class="text-blue-600 hover:underline mr-3">
                                Edit
                            </a>
                            <a href="../admin/hapus_buku.php?id=<?= $d['id_buku']; ?>" 
                               onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')" 
                               class="text-red-600 hover:underline">
                                Hapus
                            </a>
                        </td>
                    </tr>

                    <?php } ?>

                </tbody>

            </table>
        </div>
    </div>

</main>


       
</body>
<!--- Bagian Footer -->
        <footer class="ml-64 mt-6 mb-6 p-4 text-center text-sm text-gray-500">
            &copy; 2024 DigiPerpus. All rights reserved.
        </footer>
</html>