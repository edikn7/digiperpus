<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pribadi | Digiperpus</title>
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

  <!-- Form lengkapi data anggota -->
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-blue-secondary text-center">Lengkapi Data Pribadi</h2>
            <form action="../aksi/aksi_lengkapi_data_anggota.php" method="POST" class="space-y-4">

                <div>
                    <label for="nama" class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" required
                           class="w-full px-4 py-2 border border-grey rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-secondary">
                </div>

                <div>
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" required
                           class="w-full px-4 py-2 border border-grey rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-secondary">
                </div>

                <div>
                    <label for="no_hp" class="block text-gray-700 font-semibold mb-2">No. Telepon</label>
                    <input type="text" id="no_hp" name="no_hp" required
                           class="w-full px-4 py-2 border border-grey rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-secondary">
                </div>

                <div>
                    <label for="alamat" class="block text-gray-700 font-semibold mb-2">Alamat</label>
                    <textarea id="alamat" name="alamat" rows="3" required
                              class="w-full px-4 py-2 border border-grey rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-secondary"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit"
                            class="bg-blue-secondary text-white px-6 py-2 rounded-lg hover:bg-blue-primary transition">
                        Simpan Data
                    </button>
                </div>

            </form>


</body>
</html>