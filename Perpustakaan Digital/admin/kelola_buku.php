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
<body>
    <!-- Bagian Sidebar -->
    <?php include_once __DIR__ .'/../views/partials/navbar_admin.php'; ?>
    
        <main class="ml-64 p-6 pt-28">
        <!-- Bagian Data Buku -->
        <div class="flex-grow p-6">
            <h1 class="mb-6 text-3xl font-bold text-blue-secondary tracking-tight">Manajemen Buku</h1>
            <div id="buku" class="mb-6">
                <a href="../admin/tambah_buku.php" class="inline-block mb-4 bg-blue-secondary text-white px-4 py-2 rounded hover:from-teal-500 hover:to-blue-secondary transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    + Tambah Buku
                </a>
                 <!-- Cetak Laporan Dokumen -->
                <div class="inline-block ml-6">
                    <a href="../admin/cetak_laporan_buku.php" target="_blank" class="inline-block mb-4 bg-teal-500 text-white px-4 py-2 rounded hover:from-teal-500 hover:to-blue-secondary transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Cetak Laporan Buku
                    </a>
                </div> 
            <div class="bg-white p-4 rounded-lg shadow-2xl">
                
               
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gradient-to-bl from-teal-500 to-blue-secondary text-white">
                            <th class="px-4 py-2 border">ID</th>
                            <th class="px-4 py-2 border">Cover</th>
                            <th class="px-4 py-2 border">Judul</th>
                            <th class="px-4 py-2 border">Pengarang</th>
                            <th class="px-4 py-2 border">Penerbit</th>
                            <th class="px-4 py-2 border">ISBN</th>
                            <th class="px-4 py-2 border">Jumlah Buku</th>
                            <th class="px-4 py-2 border">Kategori</th>
                            <th class="px-4 py-2 border">Aksi</th>
                        </tr>
                    </thead>
                    <?php 
                    include '../config.php';
		            $no = 1;
		            $data = mysqli_query($config,"select * from buku");
		            while($d = mysqli_fetch_array($data)){
			        ?>
                    <tbody class="text-center   divide-y divide-grey">
			        <tr>
				        <td><?php echo $no++; ?></td>
                        <td><?php echo "<img src='../assets/img/".$d['cover']."' class='w-16 h-20 object-cover rounded' alt='Cover Buku'>"; ?></td>
				        <td><?php echo $d['judul']; ?></td>
                        <td><?php echo $d['pengarang']; ?></td>
				        <td><?php echo $d['penerbit']; ?></td>
                        <td><?php echo $d['isbn']; ?></td>
                        <td><?php echo $d['jumlah_buku']; ?></td>
                        <td><?php echo $d['kategori']; ?></td>
				        <td>
                            <a href="../admin/edit_buku.php?id=<?php echo $d['id_buku']; ?>" class="text-blue-600 hover:underline mr-2">Edit</a>
                            <a href="../admin/hapus_buku.php?id=<?php echo $d['id_buku']; ?>" class="text-red-600 hover:underline" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</a>
                        </td>
			        </tr>
                    </tbody>
			        <?php }?>
                </table>
            </div>
             
        </div>
    </div>

    
    
    </main> 
       
</body>
</html>