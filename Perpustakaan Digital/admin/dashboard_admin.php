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
<body class="bg-blue-50">

    <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:../admin/login.php?pesan=gagal");
	}
 
	?>
    <!-- Bagian Sidebar -->
    <?php include_once __DIR__ .'/../views/partials/navbar_admin.php'; ?>
    
        <main class="ml-64 p-6 pt-32 bg-blue-50 min-h-screen">
           

            <!-- Konten Dashboard -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">

            <!-- Card Total Buku -->
            <div class="relative bg-white rounded-lg shadow p-6 overflow-hidden group hover:shadow-lg transition-shadow duration-200">
                <span class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-blue-secondary to-teal-500 rounded-r-md transform-gpu group-hover:scale-y-105 transition-transform duration-300"></span>
                <h2 class="text-xl font-semibold mb-4 text-blue-primary pl-4">Total Buku</h2>
                <p class="text-3xl font-bold text-teal-primary pl-4">
                    <?php
                    include '../config.php';
                    $result = mysqli_query($config, "SELECT COUNT(*) AS total_buku FROM buku");
                    $data = mysqli_fetch_assoc($result);
                    echo $data['total_buku'];
                    ?>
                </p>
            </div>

            <!-- Card Total Anggota -->
            <div class="relative bg-white rounded-lg shadow p-6 overflow-hidden group hover:shadow-lg transition-shadow duration-200">
                <span class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-blue-secondary to-teal-500 rounded-r-md transform-gpu group-hover:scale-y-105 transition-transform duration-300"></span>
                <h2 class="text-xl font-semibold mb-4 text-blue-primary pl-4">Total Anggota</h2>
                <p class="text-3xl font-bold text-teal-primary pl-4">
                    <?php
                    include '../config.php';
                    $result = mysqli_query($config, "SELECT COUNT(*) AS total_anggota FROM user");
                    $data = mysqli_fetch_assoc($result);
                    echo $data['total_anggota'];
                    ?>
                </p>
            </div>

            <!-- Card Total Peminjaman -->
            <div class="relative bg-white rounded-lg shadow p-6 overflow-hidden group hover:shadow-lg transition-shadow duration-200">
                <span class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-blue-secondary to-teal-500 rounded-r-md transform-gpu group-hover:scale-y-105 transition-transform duration-300"></span>
                <h2 class="text-xl font-semibold mb-4 text-blue-primary pl-4">Total Peminjaman</h2>
                <p class="text-3xl font-bold text-teal-primary pl-4">
                    <?php
                    include '../config.php';
                    $result = mysqli_query($config, "SELECT COUNT(*) AS total_peminjaman FROM peminjaman");
                    $data = mysqli_fetch_assoc($result);
                    echo $data['total_peminjaman'];
                    ?>
                </p>
            </div>

            </div>

            <!--- Bagian Statistik Peminjaman Buku -->
            <div class="bg-white p-6 rounded-lg shadow-2xl">
                <h2 class="text-2xl font-semibold mb-4 text-blue-primary">Statistik Peminjaman Buku</h2>
                <canvas id="peminjamanChart" class="w-full h-64"></canvas>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    const ctx = document.getElementById('peminjamanChart').getContext('2d');
                    const peminjamanChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                            datasets: [{
                                label: 'Jumlah Peminjaman',
                                data: [
                                    <?php
                                    include '../config.php';
                                    for ($month = 1; $month <= 12; $month++) {
                                        $result = mysqli_query($config, "SELECT COUNT(*) AS total FROM peminjaman WHERE MONTH(tanggal_pinjam) = $month");
                                        $data = mysqli_fetch_assoc($result);
                                        echo $data['total'] . ', ';
                                    }
                                    ?>
                                ],
                                backgroundColor: 'rgba(59, 130, 246, 0.7)',
                                borderColor: 'rgba(59, 130, 246, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        stepSize: 1
                                    }
                                }
                            }
                        }
                    });
                </script>
            </div>

           
    
        </main> 
       
</body>
</html>