<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah buku</title>
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

    <!-- Bagian Sidebar -->
    <?php include_once __DIR__ .'/../views/partials/navbar_admin.php'; ?>
    
    <main class="ml-64 p-6 pt-28">
        <!-- Form tambah buku -->
    <h1 class="mb-6 text-3xl font-bold text-blue-secondary text-center tracking-tight">Tambah Buku Baru</h1>
     <div class="flex justify-center items-center min-h-screen bg-blue-50 p-8">
        <form action="../aksi/aksi_tambah_buku.php" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-2xl shadow-2xl m-0.5p-8 flex flex-col w-full max-w-3xl">
            <div class="flex flex-row gap-8">
               <!-- Cover Buku -->
                <div class="flex flex-col items-center justify-center">
                   
                    <div id="cover-preview" class="w-48 h-64 border-2 border-grey rounded-lg flex items-center justify-center bg-grey overflow-hidden">
                        <span class="text-grey">Preview cover</span>
                    </div>
                    <script>
                        document.getElementById('cover').addEventListener('change', function(e) {
                            const preview = document.getElementById('cover-preview');
                            const file = e.target.files[0];
                            if (file) {
                                const reader = new FileReader();
                                reader.onload = function(ev) {
                                    preview.innerHTML = `<img src="${ev.target.result}" alt="Cover Preview" class="object-cover w-full h-full rounded-lg" />`;
                                };
                                reader.readAsDataURL(file);
                            } else {
                                preview.innerHTML = `<span class="text-grey">Preview cover</span>`;
                            }
                        });
                    </script>
                     <label for="cover" class="block mb-2 font-semibold text-blue-primary">Cover Buku</label>
                    <input type="file" name="cover" id="cover" accept="image/*" class="mb-4 block w-48 border-2 border-teal-primary rounded-lg p-2 bg-grey focus:outline-none focus:border-blue-secondary">
                </div>
                <!-- Form Kanan -->
                <div class="flex flex-col justify-between flex-1">
                    <div class="mb-4">
                        <label for="judul_buku" class="block font-semibold text-blue-primary mb-1">Judul Buku</label>
                        <input type="text" name="judul_buku" id="judul_buku" class="w-full pl-12 pr-4 py-3 border-2 border-gray-300 rounded-lg focus:border-teal-primary focus:outline-none transition-colors" required>
                    </div>
                    <div class="mb-4">
                        <label for="pengarang" class="block font-semibold text-blue-primary mb-1">Pengarang</label>
                        <input type="text" name="pengarang" id="pengarang" class="w-full pl-12 pr-4 py-3 border-2 border-gray-300 rounded-lg focus:border-teal-primary focus:outline-none transition-colors" required>
                    </div>
                    <div class="mb-4">
                        <label for="penerbit" class="block font-semibold text-blue-primary mb-1">Penerbit</label>
                        <input type="text" name="penerbit" id="penerbit" class="w-full pl-12 pr-4 py-3 border-2 border-gray-300 rounded-lg focus:border-teal-primary focus:outline-none transition-colors" required>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-8 mt-8">
                <div>
                    <label for="jumlah_buku" class="block font-semibold text-blue-primary mb-1">Jumlah Buku</label>
                    <input type="number" name="jumlah_buku" id="jumlah_buku" class="w-full pl-12 pr-4 border-2 border-gray-300 rounded-lg p-2 focus:border-teal-primary  focus:outline-none transition-colors" required>
                </div>
                <div>
                    <label for="isbn" class="block font-semibold text-blue-primary mb-1">ISBN</label>
                    <input type="text" name="isbn" id="isbn" class="w-full pl-12 pr-4 border-2 border-gray-300 rounded-lg p-2 focus:border-teal-primary  focus:outline-none transition-colors" required>
                </div>
                <div>
                    <label for="kategori" class="block font-semibold text-blue-primary mb-1">Kategori</label>
                     <select name="kategori" id="kategori" class="w-full pl-12 pr-4 border-2 border-gray-300 rounded-lg p-2 focus:border-teal-primary  focus:outline-none transition-colors" required>
                            <option value="">Pilih Kategori</option>
                            <option value="Fiksi">Fiksi</option>
                            <option value="Non-Fiksi">Non-Fiksi</option>
                            <option value="Referensi">Referensi</option>
                            <option value="Komik">Komik</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                </div>
            </div>
            <div class="mt-8 flex items-center">
                <button type="button" onclick="window.history.back()" class="px-6 py-3 rounded-lg bg-white border-2 border-gray-300 text-gray-700 hover:bg-gray-100 transition-all font-semibold">
                    Kembali
                </button>
                <div class="ml-auto">
                    <button type="submit" class="bg-gradient-to-r from-blue-secondary to-teal-500 text-white px-6 py-3 rounded-lg transition-all duration-300 transform shadow-lg hover:shadow-xl font-semibold">
                        Simpan Buku
                    </button>
                </div>
            </div>
        </form>
        </div>
    </main>
    
    
</body>
</html>