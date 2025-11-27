<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Anggota - Digiperpus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body, html {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
        }
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
                        'cyan-accent': '#06b6d4',
                        'emerald-accent': '#10b981'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-blue-50 min-h-screen">
    <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

    
 
	?>

    <!-- Navbar -->
    <?php include_once __DIR__ .'/../views/partials/navbar_anggota.php'; ?>


    
    <main class="p-8 pt-32 bg-blue-50 min-h-screen">
        <div class="mb-6">
            <div class="bg-blue-secondary p-8 rounded-lg shadow-xl relative overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <path d="M20,20 L30,10 L40,20 L40,80 L20,80 Z" fill="currentColor"/>
                        <path d="M50,20 L60,10 L70,20 L70,80 L50,80 Z" fill="currentColor"/>
                        <path d="M80,20 L90,10 L100,20 L100,80 L80,80 Z" fill="currentColor"/>
                    </svg>
                </div>
                <div class="relative z-10">
                    <h1 class="text-3xl text-white font-bold mb-4">Hai <?php echo $_SESSION['nama']; ?> !</h1>
                    <h2 class="text-2xl font-bold text-white mb-2">Selamat datang di DigiPerpus</h2>
                    <p class="text-blue-100">Jelajahi koleksi buku digital kami dan nikmati pengalaman membaca yang menyenangkan.</p>
                </div>
            </div>
        </div>

            <!-- Rekomendasi Buku Hari ini -->
            <div class="mb-6">
                <h2 class="text-lg font-bold text-blue-secondary mb-4">Rekomendasi Buku Hari ini</h2>
                <div class="grid grid-cols-5 gap-6">
                <?php
                include '../config.php';
                $query = mysqli_query($config, "SELECT * FROM buku ORDER BY RAND() LIMIT 8");
                while($buku = mysqli_fetch_array($query)){
                ?>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
                    <div class="h-40 w-full bg-blue-100 flex items-center justify-center overflow-hidden">
                        <img src="../assets/img/<?= $buku['cover']; ?>" alt="<?= $buku['judul']; ?>" class="max-h-full max-w-full object-contain">
                    </div>
                    <div class="p-4 flex flex-col flex-grow">
                    <p class="text-gray-600 mb-1">Pengarang: <?= $buku['pengarang']; ?></p>
                    <p class="text-gray-600 mb-1">Penerbit: <?= $buku['penerbit']; ?></p>
                    <p class="text-gray-600 mb-4">Kategori: <?= $buku['kategori']; ?></p>
                    <div class="flex flex-col gap-2">
                        <button class="w-full bg-teal-primary text-white px-3 py-2 text-sm rounded-lg hover:bg-teal-secondary transition">
                        <a href="pinjam_buku.php?id=<?= $buku['id_buku']; ?>">Pinjam Buku</a>
                        </button>
                        <button class="w-full bg-blue-secondary text-white px-3 py-2 text-sm rounded-lg hover:bg-blue-primary transition">
                        <a href="baca_buku.php?id=<?= $buku['id_buku']; ?>">Baca E-Book</a>
                        </button>
                    </div>
                    </div>
                </div>
                <?php } ?>
                </div>
            </div>

    </main>

    
      
</body>
</html>