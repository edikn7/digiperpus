<!-- Bagian Navbar Anggota -->
<nav class=" bg-white/80 backdrop-blur-md shadow-xl border-b border-white/20 fixed w-full top-0 z-50 transition-all duration-500" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center group">
                    <img src="../assets/img/logo_digiperpus1.png" href="index.php" alt="Logo DigiPerpus" class="h-20 w-50 rounded-3xl object-cover">
                </div>
                <div class="hidden md:flex flex-2 justify-center">
                    <div class="flex items-center space-x-1">
                        <a href="dashboard_anggota.php" class="nav-link relative text-blue-primary hover:text-teal-primary px-4 py-2 text-sm font-medium transition-all duration-300 rounded-lg hover:bg-gradient-to-r hover:from-blue-50 hover:to-teal-50 group">
                            <span class="relative z-10">Beranda</span>
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-primary/5 to-teal-primary/5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </a>
                        <a href="peminjaman_buku.php" class="nav-link relative text-gray-700 hover:text-teal-primary px-4 py-2 text-sm font-medium transition-all duration-300 rounded-lg hover:bg-gradient-to-r hover:from-blue-50 hover:to-teal-50 group">
                            <span class="relative z-10">Peminjaman</span>
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-primary/5 to-teal-primary/5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </a>
                        <a href="katalog_digital.php" class="nav-link relative text-gray-700 hover:text-teal-primary px-4 py-2 text-sm font-medium transition-all duration-300 rounded-lg hover:bg-gradient-to-r hover:from-blue-50 hover:to-teal-50 group">
                            <span class="relative z-10">Katalog Digital</span>
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-primary/5 to-teal-primary/5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </a>
                    </div>
                </div>
                <!-- Menu profil pengguna -->
                <div class="relative">
                        <button id="profileToggle" class="flex items-center gap-2 bg-white rounded-lg px-2 py-1 hover:shadow">
                            <img src="../assets/img/profil.png" alt="Avatar" class="h-8 w-8 rounded-full object-cover">
                            <span class="hidden md:inline text-sm"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
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
    </div>

</nav>

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