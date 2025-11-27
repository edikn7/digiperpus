<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Anggota - DigiPerpus</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
<body class="bg-gray-50">
    
    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-primary to-teal-primary rounded-lg flex items-center justify-center mr-3">
                            <span class="text-white font-bold text-xl">D</span>
                        </div>
                        <span class="text-xl font-bold bg-gradient-to-r from-blue-primary to-teal-primary bg-clip-text text-transparent">DigiPerpus</span>
                    </div>
                </div>
                
                <!-- Search Bar -->
                <div class="flex-1 max-w-lg mx-8">
                    <div class="relative">
                        <input 
                            type="text" 
                            id="searchBooks"
                            placeholder="Cari buku favorit Anda..." 
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-primary focus:border-transparent"
                        >
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- User Menu -->
                <div class="flex items-center space-x-4">
                    <!-- Notifications -->
                    <button class="p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-lg transition-colors relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5z"></path>
                        </svg>
                        <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span>
                    </button>
                    
                    <!-- Profile Dropdown -->
                    <div class="relative">
                        <button id="profile-dropdown" class="flex items-center space-x-3 p-2 rounded-lg hover:bg-gray-100 transition-colors">
                            <div class="w-8 h-8 bg-gradient-to-r from-blue-primary to-teal-primary rounded-full flex items-center justify-center">
                                <span class="text-white text-sm font-semibold">A</span>
                            </div>
                            <div class="hidden md:block text-left">
                                <p class="text-sm font-medium text-gray-700">Andi Pratama</p>
                                <p class="text-xs text-gray-500">Anggota Aktif</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <div id="profile-menu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 z-50">
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil Saya</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Riwayat Peminjaman</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pengaturan</a>
                                <hr class="my-1">
                                <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Welcome Section -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Selamat Datang, Andi! 👋</h1>
            <p class="text-gray-600">Jelajahi koleksi buku digital kami dan temukan pengetahuan baru</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-primary to-blue-secondary rounded-lg flex items-center justify-center">
                        <span class="text-white text-xl">📖</span>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Buku Dipinjam</p>
                        <p class="text-2xl font-bold text-gray-900" data-count="3">0</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-r from-teal-primary to-teal-secondary rounded-lg flex items-center justify-center">
                        <span class="text-white text-xl">📚</span>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Total Dibaca</p>
                        <p class="text-2xl font-bold text-gray-900" data-count="47">0</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-r from-pink-500 to-rose-500 rounded-lg flex items-center justify-center">
                        <span class="text-white text-xl">❤️</span>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Buku Favorit</p>
                        <p class="text-2xl font-bold text-gray-900" data-count="12">0</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-lg flex items-center justify-center">
                        <span class="text-white text-xl">⭐</span>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Poin Membaca</p>
                        <p class="text-2xl font-bold text-gray-900" data-count="850">0</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Book Catalog -->
            <div class="lg:col-span-2">
                <!-- Filter Tabs -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 mb-6">
                    <div class="p-6 border-b border-gray-200">
                        <h2 class="text-lg font-semibold text-gray-900 mb-4">Katalog Buku</h2>
                        <div class="flex flex-wrap gap-2">
                            <button class="filter-btn active px-4 py-2 rounded-lg text-sm font-medium transition-colors" data-category="all">
                                Semua
                            </button>
                            <button class="filter-btn px-4 py-2 rounded-lg text-sm font-medium transition-colors" data-category="teknologi">
                                Teknologi
                            </button>
                            <button class="filter-btn px-4 py-2 rounded-lg text-sm font-medium transition-colors" data-category="sains">
                                Sains
                            </button>
                            <button class="filter-btn px-4 py-2 rounded-lg text-sm font-medium transition-colors" data-category="sejarah">
                                Sejarah
                            </button>
                            <button class="filter-btn px-4 py-2 rounded-lg text-sm font-medium transition-colors" data-category="psikologi">
                                Psikologi
                            </button>
                            <button class="filter-btn px-4 py-2 rounded-lg text-sm font-medium transition-colors" data-category="sastra">
                                Sastra
                            </button>
                        </div>
                    </div>
                    
                    <!-- Book Grid -->
                    <div class="p-6">
                        <div id="bookGrid" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Book Card 1 -->
                            <div class="book-card bg-gray-50 rounded-lg p-4 hover:shadow-md transition-all" data-category="teknologi">
                                <div class="flex space-x-4">
                                    <div class="book-cover w-16 h-20 bg-gradient-to-br from-blue-500 to-purple-600 rounded-md flex items-center justify-center shadow-sm flex-shrink-0">
                                        <span class="text-white text-lg font-bold">💻</span>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-semibold text-gray-900 mb-1">JavaScript Modern</h3>
                                        <p class="text-sm text-gray-600 mb-2">John Smith • Teknologi</p>
                                        <div class="flex items-center mb-2">
                                            <div class="flex text-yellow-400 text-sm">
                                                ⭐⭐⭐⭐⭐
                                            </div>
                                            <span class="text-xs text-gray-500 ml-2">(4.8)</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Tersedia</span>
                                            <button class="borrow-btn text-teal-primary hover:text-teal-secondary text-sm font-medium" data-book="JavaScript Modern">
                                                Pinjam
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Book Card 2 -->
                            <div class="book-card bg-gray-50 rounded-lg p-4 hover:shadow-md transition-all" data-category="sains">
                                <div class="flex space-x-4">
                                    <div class="book-cover w-16 h-20 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-md flex items-center justify-center shadow-sm flex-shrink-0">
                                        <span class="text-white text-lg font-bold">🧬</span>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-semibold text-gray-900 mb-1">Biologi Sel</h3>
                                        <p class="text-sm text-gray-600 mb-2">Dr. Sarah Wilson • Sains</p>
                                        <div class="flex items-center mb-2">
                                            <div class="flex text-yellow-400 text-sm">
                                                ⭐⭐⭐⭐⭐
                                            </div>
                                            <span class="text-xs text-gray-500 ml-2">(4.6)</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Tersedia</span>
                                            <button class="borrow-btn text-teal-primary hover:text-teal-secondary text-sm font-medium" data-book="Biologi Sel">
                                                Pinjam
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Book Card 3 -->
                            <div class="book-card bg-gray-50 rounded-lg p-4 hover:shadow-md transition-all" data-category="sejarah">
                                <div class="flex space-x-4">
                                    <div class="book-cover w-16 h-20 bg-gradient-to-br from-orange-500 to-red-600 rounded-md flex items-center justify-center shadow-sm flex-shrink-0">
                                        <span class="text-white text-lg font-bold">🏛️</span>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-semibold text-gray-900 mb-1">Sejarah Dunia</h3>
                                        <p class="text-sm text-gray-600 mb-2">Prof. Ahmad Rahman • Sejarah</p>
                                        <div class="flex items-center mb-2">
                                            <div class="flex text-yellow-400 text-sm">
                                                ⭐⭐⭐⭐⭐
                                            </div>
                                            <span class="text-xs text-gray-500 ml-2">(4.9)</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full">Dipinjam (2)</span>
                                            <button class="borrow-btn text-gray-400 text-sm font-medium cursor-not-allowed" disabled>
                                                Antri
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Book Card 4 -->
                            <div class="book-card bg-gray-50 rounded-lg p-4 hover:shadow-md transition-all" data-category="psikologi">
                                <div class="flex space-x-4">
                                    <div class="book-cover w-16 h-20 bg-gradient-to-br from-pink-500 to-rose-600 rounded-md flex items-center justify-center shadow-sm flex-shrink-0">
                                        <span class="text-white text-lg font-bold">🧠</span>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-semibold text-gray-900 mb-1">Psikologi Kognitif</h3>
                                        <p class="text-sm text-gray-600 mb-2">Dr. Maya Sari • Psikologi</p>
                                        <div class="flex items-center mb-2">
                                            <div class="flex text-yellow-400 text-sm">
                                                ⭐⭐⭐⭐⭐
                                            </div>
                                            <span class="text-xs text-gray-500 ml-2">(4.7)</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Tersedia</span>
                                            <button class="borrow-btn text-teal-primary hover:text-teal-secondary text-sm font-medium" data-book="Psikologi Kognitif">
                                                Pinjam
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Book Card 5 -->
                            <div class="book-card bg-gray-50 rounded-lg p-4 hover:shadow-md transition-all" data-category="sastra">
                                <div class="flex space-x-4">
                                    <div class="book-cover w-16 h-20 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-md flex items-center justify-center shadow-sm flex-shrink-0">
                                        <span class="text-white text-lg font-bold">📝</span>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-semibold text-gray-900 mb-1">Sastra Indonesia</h3>
                                        <p class="text-sm text-gray-600 mb-2">Pramoedya Ananta • Sastra</p>
                                        <div class="flex items-center mb-2">
                                            <div class="flex text-yellow-400 text-sm">
                                                ⭐⭐⭐⭐⭐
                                            </div>
                                            <span class="text-xs text-gray-500 ml-2">(4.9)</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Tersedia</span>
                                            <button class="borrow-btn text-teal-primary hover:text-teal-secondary text-sm font-medium" data-book="Sastra Indonesia">
                                                Pinjam
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Book Card 6 -->
                            <div class="book-card bg-gray-50 rounded-lg p-4 hover:shadow-md transition-all" data-category="teknologi">
                                <div class="flex space-x-4">
                                    <div class="book-cover w-16 h-20 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-md flex items-center justify-center shadow-sm flex-shrink-0">
                                        <span class="text-white text-lg font-bold">🤖</span>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-semibold text-gray-900 mb-1">Machine Learning</h3>
                                        <p class="text-sm text-gray-600 mb-2">Andrew Ng • Teknologi</p>
                                        <div class="flex items-center mb-2">
                                            <div class="flex text-yellow-400 text-sm">
                                                ⭐⭐⭐⭐⭐
                                            </div>
                                            <span class="text-xs text-gray-500 ml-2">(4.8)</span>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Tersedia</span>
                                            <button class="borrow-btn text-teal-primary hover:text-teal-secondary text-sm font-medium" data-book="Machine Learning">
                                                Pinjam
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                
                <!-- Currently Borrowed -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                    <div class="p-6 border-b border-gray-200">
                        <h2 class="text-lg font-semibold text-gray-900">Buku Dipinjam</h2>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="border border-gray-200 rounded-lg p-4">
                            <div class="flex items-center space-x-3 mb-3">
                                <div class="w-10 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded flex items-center justify-center">
                                    <span class="text-white text-xs font-bold">⚗️</span>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-medium text-gray-900 text-sm">Kimia Organik</h4>
                                    <p class="text-xs text-gray-600">Prof. Budi Santoso</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-orange-600 font-medium">Kembali: 3 hari lagi</span>
                                <button class="text-teal-primary hover:text-teal-secondary font-medium">Perpanjang</button>
                            </div>
                        </div>

                        <div class="border border-gray-200 rounded-lg p-4">
                            <div class="flex items-center space-x-3 mb-3">
                                <div class="w-10 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded flex items-center justify-center">
                                    <span class="text-white text-xs font-bold">🌱</span>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-medium text-gray-900 text-sm">Ekologi Lingkungan</h4>
                                    <p class="text-xs text-gray-600">Dr. Lisa Wong</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-green-600 font-medium">Kembali: 7 hari lagi</span>
                                <button class="text-teal-primary hover:text-teal-secondary font-medium">Perpanjang</button>
                            </div>
                        </div>

                        <div class="border border-gray-200 rounded-lg p-4">
                            <div class="flex items-center space-x-3 mb-3">
                                <div class="w-10 h-12 bg-gradient-to-br from-red-500 to-pink-600 rounded flex items-center justify-center">
                                    <span class="text-white text-xs font-bold">❤️</span>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-medium text-gray-900 text-sm">Filosofi Cinta</h4>
                                    <p class="text-xs text-gray-600">Rumi Jalal</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between text-xs">
                                <span class="text-red-600 font-medium">Terlambat: 2 hari</span>
                                <button class="text-red-500 hover:text-red-600 font-medium">Kembalikan</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reading Progress -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                    <div class="p-6 border-b border-gray-200">
                        <h2 class="text-lg font-semibold text-gray-900">Target Membaca</h2>
                    </div>
                    <div class="p-6">
                        <div class="text-center mb-4">
                            <div class="text-3xl font-bold text-teal-primary">8/10</div>
                            <p class="text-sm text-gray-600">Buku bulan ini</p>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2 mb-4">
                            <div class="bg-gradient-to-r from-teal-primary to-emerald-accent h-2 rounded-full" style="width: 80%"></div>
                        </div>
                        <p class="text-xs text-gray-600 text-center">2 buku lagi untuk mencapai target!</p>
                    </div>
                </div>

                <!-- Recommendations -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                    <div class="p-6 border-b border-gray-200">
                        <h2 class="text-lg font-semibold text-gray-900">Rekomendasi</h2>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex items-center space-x-3 p-2 rounded-lg hover:bg-gray-50 transition-colors">
                            <div class="w-8 h-10 bg-gradient-to-br from-violet-500 to-purple-600 rounded flex items-center justify-center">
                                <span class="text-white text-xs">🎨</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-medium text-gray-900 text-sm">Seni Digital</h4>
                                <p class="text-xs text-gray-600">Berdasarkan minat Anda</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3 p-2 rounded-lg hover:bg-gray-50 transition-colors">
                            <div class="w-8 h-10 bg-gradient-to-br from-amber-500 to-orange-600 rounded flex items-center justify-center">
                                <span class="text-white text-xs">📊</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-medium text-gray-900 text-sm">Data Science</h4>
                                <p class="text-xs text-gray-600">Trending minggu ini</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3 p-2 rounded-lg hover:bg-gray-50 transition-colors">
                            <div class="w-8 h-10 bg-gradient-to-br from-teal-500 to-cyan-600 rounded flex items-center justify-center">
                                <span class="text-white text-xs">🌍</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-medium text-gray-900 text-sm">Geografi Modern</h4>
                                <p class="text-xs text-gray-600">Buku terpopuler</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <style>
        .filter-btn {
            background-color: #f3f4f6;
            color: #6b7280;
        }
        
        .filter-btn.active {
            background-color: #0d9488;
            color: white;
        }
        
        .filter-btn:hover:not(.active) {
            background-color: #e5e7eb;
            color: #374151;
        }
        
        .book-cover {
            transition: transform 0.2s ease;
        }
        
        .book-cover:hover {
            transform: scale(1.05);
        }
        
        .book-card {
            transition: all 0.2s ease;
        }
        
        .book-card:hover {
            transform: translateY(-2px);
        }
    </style>

    <script>
        // Profile Dropdown
        const profileDropdown = document.getElementById('profile-dropdown');
        const profileMenu = document.getElementById('profile-menu');

        profileDropdown.addEventListener('click', () => {
            profileMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', (e) => {
            if (!profileDropdown.contains(e.target)) {
                profileMenu.classList.add('hidden');
            }
        });

        // Counter Animation
        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 50;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current);
            }, 30);
        }

        // Initialize counters
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('[data-count]');
            counters.forEach(counter => {
                const target = parseInt(counter.dataset.count);
                animateCounter(counter, target);
            });
        });

        // Filter functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        const bookCards = document.querySelectorAll('.book-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active button
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                const category = btn.dataset.category;
                
                // Filter books
                bookCards.forEach(card => {
                    if (category === 'all' || card.dataset.category === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Search functionality
        const searchInput = document.getElementById('searchBooks');
        searchInput.addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase();
            
            bookCards.forEach(card => {
                const title = card.querySelector('h3').textContent.toLowerCase();
                const author = card.querySelector('p').textContent.toLowerCase();
                
                if (title.includes(query) || author.includes(query)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });

        // Borrow book functionality
        const borrowBtns = document.querySelectorAll('.borrow-btn');
        borrowBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                if (!btn.disabled) {
                    const bookTitle = btn.dataset.book;
                    if (confirm(`Apakah Anda yakin ingin meminjam buku "${bookTitle}"?`)) {
                        showMessage(`Buku "${bookTitle}" berhasil dipinjam! Silakan ambil di perpustakaan.`, 'success');
                        
                        // Update button state
                        btn.textContent = 'Dipinjam';
                        btn.classList.remove('text-teal-primary', 'hover:text-teal-secondary');
                        btn.classList.add('text-gray-400', 'cursor-not-allowed');
                        btn.disabled = true;
                        
                        // Update status badge
                        const statusBadge = btn.closest('.book-card').querySelector('.bg-green-100');
                        if (statusBadge) {
                            statusBadge.className = 'text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full';
                            statusBadge.textContent = 'Dipinjam';
                        }
                    }
                }
            });
        });

        // Extend loan functionality
        const extendBtns = document.querySelectorAll('button:contains("Perpanjang")');
        document.querySelectorAll('button').forEach(btn => {
            if (btn.textContent.includes('Perpanjang')) {
                btn.addEventListener('click', () => {
                    if (confirm('Apakah Anda yakin ingin memperpanjang peminjaman buku ini?')) {
                        showMessage('Peminjaman berhasil diperpanjang selama 7 hari!', 'success');
                    }
                });
            }
        });

        // Show message function
        function showMessage(message, type) {
            const existingMessage = document.querySelector('.message');
            if (existingMessage) {
                existingMessage.remove();
            }
            
            const messageDiv = document.createElement('div');
            let bgColor = 'bg-blue-500';
            if (type === 'success') bgColor = 'bg-emerald-500';
            if (type === 'error') bgColor = 'bg-red-500';
            
            messageDiv.className = `message fixed top-4 right-4 px-6 py-3 rounded-lg shadow-lg z-50 transform translate-x-full transition-all duration-300 ${bgColor} text-white max-w-sm`;
            messageDiv.textContent = message;
            
            document.body.appendChild(messageDiv);
            
            setTimeout(() => {
                messageDiv.style.transform = 'translateX(0)';
            }, 100);
            
            setTimeout(() => {
                messageDiv.style.transform = 'translateX(100%)';
                setTimeout(() => {
                    messageDiv.remove();
                }, 300);
            }, 4000);
        }

        // Welcome message
        setTimeout(() => {
            showMessage('Selamat datang di DigiPerpus! Jelajahi koleksi buku kami.', 'success');
        }, 1000);
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9799ce5dd5d1a11e',t:'MTc1Njk1MDMxMi4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
