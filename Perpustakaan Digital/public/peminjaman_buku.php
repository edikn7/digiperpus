<?php
session_start();
include '../config.php';

// Pastikan user login sebagai anggota
if (!isset($_SESSION['level']) || $_SESSION['level'] !== 'Anggota') {
    header("Location: ../login.php");
    exit;
}

// Pastikan id_buku disediakan
if (!isset($_GET['id_buku'])) {
    echo "Error: ID buku tidak ditemukan!";
    exit;
}

$id_buku = $_GET['id_buku'];

// Ambil data buku
$queryBuku = mysqli_query($config, "SELECT * FROM buku WHERE id_buku = '$id_buku'");
$buku = mysqli_fetch_assoc($queryBuku);

// Jika buku tidak ada
if (!$buku) {
    echo "Error: Buku tidak ditemukan!";
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Peminjaman Buku | Digiperpus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style> body { font-family: 'Poppins', sans-serif; } </style>
</head>
<body class="bg-blue-50 min-h-screen">

<?php include_once __DIR__ . '/../views/partials/navbar_anggota.php'; ?>

<main class="p-6 pt-24">
    <div class="max-w-3xl mx-auto p-6 bg-white shadow-lg rounded-xl mt-6">

        <h2 class="text-2xl font-semibold text-blue-primary mb-4">
            Form Peminjaman Buku
        </h2>

        <form action="aksi_pinjam_buku.php" method="POST" class="space-y-4">

            <!-- Judul buku -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Judul Buku</label>
                <input 
                    type="text"
                    value="<?= $buku['judul'] ?>"
                    readonly
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100"
                >
            </div>

            <!-- Hidden -->
            <input type="hidden" name="id_buku" value="<?= $id_buku ?>">

            <div class="flex justify-between items-center">
                <a href="dashboard.php" 
                    class="px-5 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400">
                    Kembali
                </a>

                <button 
                    type="submit" 
                    class="px-6 py-2 bg-blue-secondary text-white rounded-lg shadow hover:scale-105">
                    Konfirmasi Pinjam
                </button>
            </div>

        </form>

    </div>
</main>

</body>
</html>
