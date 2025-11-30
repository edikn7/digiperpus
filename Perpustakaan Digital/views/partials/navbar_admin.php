<!-- Bagian Sidebar Dashboard Admin -->
<aside class="bg-white shadow-2xl border-b border-white/20 flex flex-col w-64 h-screen fixed top-0 left-0 z-40">
    <div class="flex items-center justify-between px-6 py-4 border-b border-blue-200">
        <div class="flex items-center group">
            <img src="../assets/img/logo_digiperpus1.png" href="index.php" alt="Logo DigiPerpus" class="m-auto h-15 w-40 rounded-3xl object-cover">
        </div>
    </div>

    <nav class="flex-grow overflow-y-auto mt-4">
        <ul class="space-y-2 px-4">
            <li>
                <a href="dashboard_admin.php" class="mb-8 flex items-center px-4 py-2 text-gray-700 <?php echo basename($_SERVER['PHP_SELF']) == 'dashboard_admin.php' ,'kelola_buku.php' ? ' font-semibold' : ''; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-justify h-5 w-5 mr-3 text-blue-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="kelola_buku.php" class="mb-8 flex items-center px-4 py-2 text-gray-700 <?php echo basename($_SERVER['PHP_SELF']) == 'kelola_buku.php' ? ' font-semibold' : ''; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 19 7.5 19s3.332-.477 4.5-1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 19 16.5 19c-1.746 0-3.332-.477-4.5-1.253" />
                    </svg>
                    Kelola Buku
                </a>
            </li>
            <li>
                <a href="kelola_anggota.php" class="mb-8 flex items-center px-4 py-2 text-gray-700 <?php echo basename($_SERVER['PHP_SELF']) == 'kelola_anggota.php' ? ' font-semibold' : ''; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Kelola Anggota
                </a>
            </li>
            <li>
                <a href="kelola_peminjaman.php" class="mb-8 flex items-center px-4 py-2 text-gray-700 <?php echo basename($_SERVER['PHP_SELF']) == 'kelola_peminjaman.php' ? ' font-semibold' : ''; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Kelola Peminjaman
                </a>
            </li>
            <li>
                <a href="laporan.php" class="mb-8 flex items-center px-4 py-2 text-gray-700 <?php echo basename($_SERVER['PHP_SELF']) == 'laporan.php' ? ' font-semibold' : ''; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Laporan
                </a>
            </li>
        </ul>
            
    </nav>

    
</aside>

 <header class="flex justify-between items-center fixed inset-x-0 top-0 mb-6 bg-blue-50 p-6 pt-4 shadow-md ">
                <div class="flex ml-64 flex-col">
                    <h1 class="text-2xl font-semibold text-blue-secondary">Dashboard</h1>
                    <p class="text-sm text-gray-600">Selamat datang, 
                    <?php 
                        if (isset($_SESSION['level']) && $_SESSION['level'] === 'Admin') {
                            echo htmlspecialchars($_SESSION['username']);
                        } else {
                            echo "Admin";
                    }
                    ?></p>
                </div>

                <div class="flex items-center gap-5">
                    <form action="" method="get" class="hidden md:flex items-center bg-white rounded-lg shadow px-2 py-1">
                        <input name="q" type="text" placeholder="Cari..." class="px-2 py-1 outline-none text-sm" />
                        <button type="submit" class="text-blue-secondary px-2">Cari</button>
                    </form>

                    <button aria-label="Notifications" class="p-2 rounded-lg hover:bg-white" title="Notifikasi">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>

                    <div class="relative">
                        <button id="profileToggle" class="flex items-center gap-2 bg-white rounded-lg px-2 py-1 hover:shadow">
                            <img src="../assets/img/profil.png" alt="Avatar" class="h-8 w-8 rounded-full object-cover">
                            <span class="hidden md:inline text-sm">
    <?php 
    if (isset($_SESSION['level']) && $_SESSION['level'] === 'Admin') {
        echo htmlspecialchars($_SESSION['username']);
    } else {
        echo "Admin";
    }
    ?>
</span>

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="profileMenu" class="hidden absolute right-0 mt-2 w-44 bg-white rounded shadow py-1 z-20">
                            <a href="profil.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Profil</a>
                            <a href="seting.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Pengaturan</a>
                            <div class="border-t my-1"></div>
                            <a href="../logout.php" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Logout</a>
                        </div>
                </div>
                </div>
            </header>
<script>
    document.getElementById('profileToggle').addEventListener('click', function() {
        const profileMenu = document.getElementById('profileMenu');
        profileMenu.classList.toggle('hidden');
    });

    document.addEventListener('click', function(event) {
        const profileToggle = document.getElementById('profileToggle');
        const profileMenu = document.getElementById('profileMenu');
        
        if (!profileToggle.contains(event.target) && !profileMenu.contains(event.target)) {
            profileMenu.classList.add('hidden');
        }
    });
</script>


