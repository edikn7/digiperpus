<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman | Digiperpus</title>
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
    <!-- Bagian Peminjaman Buku -->
    <?php include_once __DIR__ .'/../views/partials/navbar_admin.php'; ?>
    <main class="ml-64 p-6 pt-24">
    <h1 class="text-3xl font-bold text-blue-secondary mb-6 tracking-tight">
        Manajemen Peminjaman Buku
    </h1>
    <!-- Card Tabel -->
    <div class="bg-white p-6 rounded-xl shadow-xl">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-blue-secondary text-white">
                    <th class="px-4 py-2 border">No</th>
                    <th class="px-4 py-2 border">Nama Anggota</th>
                    <th class="px-4 py-2 border">Judul Buku</th>
                    <th class="px-4 py-2 border">Tanggal Peminjaman</th>
                    <th class="px-4 py-2 border">Tanggal Pengembalian</th>
                    <th class="px-4 py-2 border">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../config.php';
                $no = 1;
                $data = mysqli_query($config, 
"SELECT p.*, u.nama AS nama, b.judul AS judul_buku
 FROM peminjaman p
 JOIN user u ON p.id_user = u.id
 JOIN buku b ON p.id_buku = b.id_buku");


                while ($peminjaman = mysqli_fetch_array($data)) {
                ?>
                <tr class="text-center">
                    <td class="px-4 py-2 border"><?php echo $no++; ?></td>
                    <td class="px-4 py-2 border"><?php echo $peminjaman['nama']; ?></td>
                    <td class="px-4 py-2 border"><?php echo $peminjaman['judul_buku']; ?></td>
                    <td class="px-4 py-2 border"><?php echo $peminjaman['tgl_peminjaman']; ?></td>
                    <td class="px-4 py-2 border"><?php echo $peminjaman['tgl_jatuh_tempo']; ?></td>
                    <td class="px-4 py-2 border"><?php echo $peminjaman['status']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

        
    </main>
   
</body>
<!--- Bagian Footer -->
        <footer class="ml-64 mt-6 mb-6 p-4 text-center text-sm text-gray-500">
            &copy; 2024 DigiPerpus. All rights reserved.
        </footer>
</html>