<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digiperpus | Sistem Perpustakaan Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
<body class="bg-white overflow-x-hidden">
    <!-- Navigation -->
    <nav class="bg-white backdrop-blur-md shadow-xl border-b border-white/20 fixed w-full top-0 z-50 transition-all duration-500" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center group">
                    <img src="../assets/img/logo_digiperpus1.png" href="index.php" alt="Logo DigiPerpus" class="h-20 w-50 rounded-3xl object-cover">
                </div>
                <div class="hidden md:flex flex-2 justify-center">
                    <div class="flex items-center space-x-1">
                        <a href="#beranda" class="text-gray-800 font-semibold nav-link relative px-4 py-2 text-sm transition-all duration-300 group">
                            <span class="relative z-10">Beranda</span>
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-blue-500 group-hover:w-12 transition-all duration-300"></div>
                        </a>
                        <a href="#tentang" class="text-gray-800 font-semibold nav-link relative px-4 py-2 text-sm transition-all duration-300 group">
                            <span class="relative z-10">Tentang</span>
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-blue-500 group-hover:w-12 transition-all duration-300"></div>
                        </a>
                        <a href="#fitur" class="text-gray-800 font-semibold nav-link relative px-4 py-2 text-sm transition-all duration-300 group">
                            <span class="relative z-10">Fitur</span>
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-blue-500 group-hover:w-12 transition-all duration-300"></div>
                        </a>
                        <a href="#testimoni" class="text-gray-800 font-semibold nav-link relative px-4 py-2 text-sm transition-all duration-300 group">
                            <span class="relative z-10">Testimoni</span>
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-blue-500 group-hover:w-12 transition-all duration-300"></div>
                        </a>
                        <a href="#kontak" class="text-gray-800 font-semibold nav-link relative px-4 py-2 text-sm transition-all duration-300 group">
                            <span class="relative z-10">Kontak</span>
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-blue-500 group-hover:w-12 transition-all duration-300"></div>
                        </a>

                        
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-3">
                    <a href="../login.php" class="text-gray-800 font-semibold nav-link relative px-4 py-2 text-sm transition-all duration-300 group">
                            <span class="relative z-10">Login→</span>
                    </a>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-700 hover:text-blue-primary transition-colors p-2 rounded-lg hover:bg-blue-50">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

    </nav>

    <!-- Hero Section -->
    <section id="beranda" class="pt-20 min-h-screen bg-gradient-to-br from-slate-50 via-cyan-50 to-teal-50 flex items-center relative overflow-hidden">
        <!--Background Peprustakaan-->
        <img src="../assets/img/Bg-Utama.jpg" alt="Background Perpustakaan" class="absolute inset-0 w-full h-full object-cover filter brightness-50">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white tracking-tight leading-tight opacity-0 slide-up">
                    Perpustakaan Digital <br>
                    <span class="bg-gradient-to-r from-cyan-400 to-emerald-100 bg-clip-text text-transparent">
                        <span id="typing-text"></span><span class="typing-cursor">|</span>
                    </span>
                </h1><br>
                <p class="text-xl md:text-xl text-white mb-8 max-w-3xl mx-auto opacity-0 slide-up" style="animation-delay: 0.5s;">
                    Revolusi cara mengelola perpustakaan dengan sistem digital modern. Kelola koleksi buku, peminjaman, dan anggota dengan mudah dan efisien.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center opacity-0 slide-up" style="animation-delay: 1s;">
                    <button class="cta-button border-2 border-white text-white  font-bold py-4 px-8 rounded-lg text-lg transition-all transform hover:scale-105">
                        <a href="../login.php">Mulai Sekarang</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="tentang" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-secondary mb-4 fade-in">Tentang Digiperpus</h2>
                <p class="text-xl text-gray-600 fade-in">Solusi perpustakaan digital terdepan untuk institusi modern</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="fade-in">
                    <h3 class="text-2xl font-bold text-blue-secondary mb-6">Mengapa Memilih Digiperpus?</h3>
                    <p class="text-gray-600">Digiperpus adalah perpustakaan berbasis digital yang menghadirkan ribuan koleksi buku dalam satu platform yang mudah diakses, kapan saja dan di mana saja. Dengan semangat untuk memajukan literasi dan mendemokratisasi akses terhadap informasi, Digiperpus hadir sebagai solusi modern bagi para pelajar, mahasiswa, peneliti, guru, dan masyarakat umum yang haus akan ilmu.</p>
                </div>
                <div class="fade-in">
                    <div class="bg-gradient-to-t from-teal-50 to-cyan-100 p-8 rounded-2xl shadow-xl">
                        <div class="text-center">
                            <img src="../assets/img/visi.png" alt="Misi dan Visi" class="mx-auto mb-6 w-32 h-32 object-contain">
                            <h4 class="text-xl font-bold text-blue-secondary mb-4">Visi Kami</h4>
                            <p class="text-gray-600">Menciptakan ekosistem perpustakaan digital yang memudahkan akses informasi dan meningkatkan minat baca masyarakat Indonesia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="fitur" class="py-20 bg-gradient-to-t from-teal-50 to-cyan-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-secondary mb-4 fade-in">Fitur Unggulan</h2>
                <p class="text-xl text-gray-600 fade-in">Solusi lengkap untuk kebutuhan perpustakaan modern</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="service-card bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all transform hover:scale-105">
                    <img src="../assets/img/catalog.png" alt="Katalog Digital" class="mx-auto mb-4 w-20 h-20 object-contain">
                    <h3 class="text-xl font-bold text-cyan-accent mb-4 text-center">Katalog Digital</h3>
                    <p class="text-gray-600 text-center mb-6">Sistem katalog buku digital dengan pencarian canggih berdasarkan judul, pengarang, kategori, dan ISBN</p>
                    <div class="text-center">
                        <button class="text-cyan-accent font-semibold hover:text-teal-secondary transition-colors">Pelajari Lebih →</button>
                    </div>
                </div>
                <div class="service-card bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all transform hover:scale-105">
                    <img src="../assets/img/peminjaman.png" alt="Sistem Peminjaman" class="mx-auto mb-4 w-20 h-20 object-contain">
                    <h3 class="text-xl font-bold text-cyan-accent mb-4 text-center">Sistem Peminjaman</h3>
                    <p class="text-gray-600 text-center mb-6">Kelola peminjaman dan pengembalian buku dengan notifikasi otomatis dan tracking real-time</p>
                    <div class="text-center">
                        <button class="text-cyan-accent font-semibold hover:text-teal-secondary transition-colors">Pelajari Lebih →</button>
                    </div>
                </div>
                <div class="service-card bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all transform hover:scale-105">
                    <img src="../assets/img/anggota.png" alt="Manajemen Anggota" class="mx-auto mb-4 w-20 h-20 object-contain">
                    <h3 class="text-xl font-bold text-cyan-accent mb-4 text-center">Manajemen Anggota</h3>
                    <p class="text-gray-600 text-center mb-6">Database anggota lengkap dengan riwayat peminjaman dan sistem keanggotaan bertingkat</p>
                    <div class="text-center">
                        <button class="text-cyan-accent font-semibold hover:text-teal-secondary transition-colors">Pelajari Lebih →</button>
                    </div>
                </div>
                <div class="service-card bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all transform hover:scale-105">
                    <img src="../assets/img/laporan.png" alt="Laporan & Analitik" class="mx-auto mb-4 w-20 h-20 object-contain">
                    <h3 class="text-xl font-bold text-cyan-accent mb-4 text-center">Laporan & Analitik</h3>
                    <p class="text-gray-600 text-center mb-6">Dashboard komprehensif dengan laporan statistik peminjaman, buku populer, dan tren pembaca</p>
                    <div class="text-center">
                        <button class="text-teal-primary font-semibold hover:text-teal-secondary transition-colors">Pelajari Lebih →</button>
                    </div>
                </div>
                <div class="service-card bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all transform hover:scale-105">
                    <img src="../assets/img/notifikasi.png" alt="Notifikasi Otomatis" class="mx-auto mb-4 w-20 h-20 object-contain">
                    <h3 class="text-xl font-bold text-cyan-accent mb-4 text-center">Notifikasi Otomatis</h3>
                    <p class="text-gray-600 text-center mb-6">Sistem reminder otomatis untuk batas waktu pengembalian dan reservasi buku</p>
                    <div class="text-center">
                        <button class="text-teal-primary font-semibold hover:text-teal-secondary transition-colors">Pelajari Lebih →</button>
                    </div>
                </div>
                <div class="service-card bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all transform hover:scale-105">
                    <img src="../assets/img/mobile.png" alt="Mobile Friendly" class="mx-auto mb-4 w-20 h-20 object-contain">
                    <h3 class="text-xl font-bold text-cyan-accent mb-4 text-center">Mobile Friendly</h3>
                    <p class="text-gray-600 text-center mb-6">Akses perpustakaan dari mana saja dengan interface yang responsif di semua perangkat</p>
                    <div class="text-center">
                        <button class="text-teal-primary font-semibold hover:text-teal-secondary transition-colors">Pelajari Lebih →</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Stats Section -->
    <section class="py-20 bg-gradient-to-r from-blue-secondary to-teal-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="stat-item">
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2" data-count="<?php  ?>7907">0+</div>
                    <div class="text-cyan-100">Perpustakaan</div>
                </div>
                <div class="stat-item">
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2" data-count="2365">0+</div>
                    <div class="text-cyan-100">Buku Terkelola</div>
                </div>
                <div class="stat-item">
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2" data-count="5000">0+</div>
                    <div class="text-cyan-100">Pengguna Aktif</div>
                </div>
                <div class="stat-item">
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2" data-count="99">0%</div>
                    <div class="text-cyan-100">Kepuasan Pengguna</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimoni" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-secondary mb-4 fade-in">Testimoni Pengguna</h2>
                <p class="text-xl text-gray-600 fade-in">Apa kata para pustakawan dan institusi yang menggunakan Digiperpus</p>
            </div>
            
            <div class="relative max-w-4xl mx-auto">
                <div class="testimonial-container overflow-hidden">
                    <div class="testimonial-slider flex transition-transform duration-500 ease-in-out" id="testimonialSlider">
                        <div class="testimonial-slide w-full flex-shrink-0">
                            <div class="bg-gradient-to-t from-teal-50 to-cyan-100 p-8 rounded-2xl text-center">
                                
                                <p class="text-gray-600 text-lg mb-6 italic">"Digiperpus telah merevolusi cara kami mengelola perpustakaan sekolah. Siswa jadi lebih mudah mencari dan meminjam buku, sementara kami bisa memantau semua aktivitas dengan mudah."</p>
                                <h4 class="font-bold text-cyan-accent">Sari Dewi, S.Pd</h4>
                                <p class="text-gray-500">Kepala Perpustakaan SMA Negeri 1 Jakarta</p>
                            </div>
                        </div>
                        <div class="testimonial-slide w-full flex-shrink-0">
                            <div class="bg-gradient-to-t from-teal-50 to-cyan-100 p-8 rounded-2xl text-center">
                               
                                <p class="text-gray-600 text-lg mb-6 italic">"Sistem yang sangat user-friendly! Mahasiswa bisa dengan mudah mencari referensi dan melihat ketersediaan buku secara real-time. Laporan statistiknya juga sangat membantu untuk evaluasi koleksi."</p>
                                <h4 class="font-bold text-cyan-accent">Dr. Ahmad Rahman, M.Lib</h4>
                                <p class="text-gray-500">Kepala Perpustakaan Universitas Indonesia</p>
                            </div>
                        </div>
                        <div class="testimonial-slide w-full flex-shrink-0">
                            <div class="bg-gradient-to-t from-teal-50 to-cyan-100 p-8 rounded-2xl text-center">
                                
                                <p class="text-gray-600 text-lg mb-6 italic">"Implementasi Digiperpus di perpustakaan daerah kami sangat sukses. Masyarakat lebih tertarik berkunjung karena kemudahan akses informasi dan sistem peminjaman yang modern."</p>
                                <h4 class="font-bold text-cyan-accent">Rina Kartika, S.IP</h4>
                                <p class="text-gray-500">Kepala Perpustakaan Daerah Bandung</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Navigation Dots -->
                <div class="flex justify-center mt-8 space-x-2">
                    <button class="testimonial-dot w-3 h-3 rounded-full bg-teal-primary transition-all" data-slide="0"></button>
                    <button class="testimonial-dot w-3 h-3 rounded-full bg-gray-300 hover:bg-teal-primary transition-all" data-slide="1"></button>
                    <button class="testimonial-dot w-3 h-3 rounded-full bg-gray-300 hover:bg-teal-primary transition-all" data-slide="2"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Populer Books Section -->
    <section class="py-20 bg-gradient-to-t from-teal-50 to-cyan-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-secondary mb-4 fade-in">Buku Populer</h2>
                <p class="text-xl text-gray-600 fade-in">Jelajahi koleksi buku terpopuler di Digiperpus</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <div class="book-card bg-white p-4 rounded-lg shadow-lg hover:shadow-2xl transition-all transform hover:scale-105">
                    <img src="../assets/img/Seni-Merayu-Tuhan.jpg" alt="Buku 1" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-bold text-blue-secondary mb-2">Judul Buku 1</h3>
                    <p class="text-gray-600 mb-4">Pengarang 1</p>
                    <button class="w-full bg-gradient-to-r from-blue-secondary to-teal-500 text-white py-2 rounded-lg font-semibold hover:from-teal-primary hover:to-cyan-accent transition-all transform hover:scale-105">
                        Pinjam Sekarang
                    </button>
                </div>
                <div class="book-card bg-white p-4 rounded-lg shadow-lg hover:shadow-2xl transition-all transform hover:scale-105">
                    <img src="assets/img/book2.jpg" alt="Buku 2" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-bold text-blue-secondary mb-2">Judul Buku 2</h3>
                    <p class="text-gray-600 mb-4">Pengarang 2</p>
                    <button class="w-full bg-gradient-to-r from-blue-secondary to-teal-500 text-white py-2 rounded-lg font-semibold hover:from-teal-500 hover:to-blue-secondary transition-all transform hover:scale-105">
                        Pinjam Sekarang
                    </button>
                </div>
                <div class="book-card bg-white p-4 rounded-lg shadow-lg hover:shadow-2xl transition-all transform hover:scale-105">
                    <img src="assets/img/book3.jpg" alt="Buku 3" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-bold text-blue-secondary mb-2">Judul Buku 3</h3>
                    <p class="text-gray-600 mb-4">Pengarang 3</p>
                    <button class="w-full bg-gradient-to-r from-blue-secondary to-teal-500 text-white py-2 rounded-lg font-semibold hover:from-teal-500 hover:to-blue-secondary transition-all transform hover:scale-105">
                        Pinjam Sekarang
                    </button>
                </div>
                <div class="book-card bg-white p-4 rounded-lg shadow-lg hover:shadow-2xl transition-all transform hover:scale-105">
                    <img src="assets/img/book4.jpg" alt="Buku 4" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-bold text-blue-secondary mb-2">Judul Buku 4</h3>
                    <p class="text-gray-600 mb-4">Pengarang 4</p>
                    <button class="w-full bg-gradient-to-r from-blue-secondary to-teal-500 text-white py-2 rounded-lg font-semibold hover:from-teal-500 hover:to-blue-secondary transition-all transform hover:scale-105">
                        Pinjam Sekarang
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="kontak" class="py-20 bg-gradient-to-br from-slate-50 to-cyan-50 ">
        <div class="max-w-7xl mx-auto object-center px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-blue-secondary mb-4 fade-in">Hubungi Kami</h2>
                <p class="text-xl text-gray-600 fade-in">Tim ahli kami siap membantu transformasi perpustakaan Anda</p>
            </div>
            
            <div class="flex justify-center">
                <div class="fade-in w-full max-w-xl">
                    <div class="bg-white p-8 rounded-2xl shadow-lg">
                        <h3 class="text-2xl font-bold text-blue-secondary mb-6 text-center">Kirim Pesan</h3>
                        <form class="space-y-6" id="contactForm">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                                <input type="text" class="w-full p-3 border-2 border-gray-200 rounded-lg focus:border-teal-primary focus:outline-none transition-colors" placeholder="Masukkan nama Anda">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input type="email" class="w-full p-3 border-2 border-gray-200 rounded-lg focus:border-teal-primary focus:outline-none transition-colors" placeholder="nama@email.com">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Instansi</label>
                                <select class="w-full p-3 border-2 border-gray-200 rounded-lg focus:border-teal-primary focus:outline-none transition-colors">
                                    <option>Pilih Instansi</option>
                                    <option>Sekolah</option>
                                    <option>Universitas</option>
                                    <option>Umum</option>
                                    <option></option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                                <textarea rows="4" class="w-full p-3 border-2 border-gray-200 rounded-lg focus:border-teal-primary focus:outline-none transition-colors" placeholder="Ceritakan kebutuhan perpustakaan Anda..."></textarea>
                            </div>
                            <button type="submit" class="w-full bg-gradient-to-r from-blue-secondary to-teal-500 text-white py-3 rounded-lg font-semibold hover:from-teal-500 hover:to-blue-secondary transition-all transform hover:scale-105">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-blue-secondary to-cyan-500 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-4">
                        <div class="flex items-center group">
                    <img src="../assets/img/logo_digiperpus1.png" href="index.php" alt="Logo DigiPerpus" class="h-20 w-50 rounded-3xl object-cover">
                </div>
                    </div>
                    <p class="text-white mb-6 max-w-md">
                        Solusi perpustakaan digital terdepan yang membantu modernisasi dan digitalisasi perpustakaan di seluruh Indonesia.
                    </p>
                    
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4">Fitur Utama</h4>
                    <ul class="space-y-2 text-white">
                        <li><a href="#" class="hover:text-cyan-200 transition-colors">Katalog Digital</a></li>
                        <li><a href="#" class="hover:text-cyan-200 transition-colors">Sistem Peminjaman</a></li>
                        <li><a href="#" class="hover:text-cyan-200 transition-colors">Manajemen Anggota</a></li>
                        <li><a href="#" class="hover:text-cyan-200 transition-colors">Laporan & Analitik</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4">kontak</h4>
                    <div class="flex space-x-4">
                        <div class="social-icon w-10 h-10 bg-gradient-to-r from-teal-50 to-cyan-100 rounded-full flex items-center justify-center ">
                            <img src="../assets/img/kontak.png" alt="kontak" class="w-6 h-6">
                        </div>
                        <div class="social-icon w-10 h-10 bg-gradient-to-r from-teal-50 to-cyan-100 rounded-full flex items-center justify-center ">
                            <img src="../assets/img/" alt="email" class="w-6 h-6">
                        </div>
                        <div class="social-icon w-10 h-10 bg-gradient-to-r from-teal-50 to-cyan-100 rounded-full flex items-center justify-center ">
                            <img src="../assets/img/" alt="alamat" class="w-6 h-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-white mt-12 pt-8 text-center">
                <p class="text-white">&copy; 2025 Digiperpus. Semua hak cipta dilindungi.</p>
            </div>
        </div>
    </footer>
    </html>

    <style>
        /* Custom Animations */
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        @keyframes blink {
            0%, 50% { opacity: 1; }
            51%, 100% { opacity: 0; }
        }

        .slide-up {
            animation: slideUp 0.8s ease-out forwards;
        }

        .fade-in {
            opacity: 0;
            animation: fadeIn 0.8s ease-out forwards;
        }

        .typing-cursor {
            animation: blink 1s infinite;
        }

        .service-card {
            transition: all 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .feature-item {
            opacity: 0;
            transform: translateX(-20px);
            animation: slideUp 0.6s ease-out forwards;
        }

        .feature-item:nth-child(1) { animation-delay: 0.2s; }
        .feature-item:nth-child(2) { animation-delay: 0.4s; }
        .feature-item:nth-child(3) { animation-delay: 0.6s; }

        .contact-item {
            opacity: 0;
            transform: translateX(-20px);
            animation: slideUp 0.6s ease-out forwards;
        }

        .contact-item:nth-child(1) { animation-delay: 0.2s; }
        .contact-item:nth-child(2) { animation-delay: 0.4s; }
        .contact-item:nth-child(3) { animation-delay: 0.6s; }
        .contact-item:nth-child(4) { animation-delay: 0.8s; }

        .stat-item {
            opacity: 0;
            transform: translateY(20px);
            animation: slideUp 0.8s ease-out forwards;
        }

        .stat-item:nth-child(1) { animation-delay: 0.2s; }
        .stat-item:nth-child(2) { animation-delay: 0.4s; }
        .stat-item:nth-child(3) { animation-delay: 0.6s; }
        .stat-item:nth-child(4) { animation-delay: 0.8s; }

        .cta-button {
            position: relative;
            overflow: hidden;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .cta-button:hover::before {
            left: 100%;
        }

        .social-icon {
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            box-shadow: 0 0 20px rgba(6, 182, 212, 0.5);
        }
    </style>

    <script>
        // Typing Effect
        const typingTexts = ['Terdepan', 'Modern', 'Terintegrasi', 'Terpercaya'];
        let textIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        const typingElement = document.getElementById('typing-text');

        function typeEffect() {
            const currentText = typingTexts[textIndex];
            
            if (isDeleting) {
                typingElement.textContent = currentText.substring(0, charIndex - 1);
                charIndex--;
            } else {
                typingElement.textContent = currentText.substring(0, charIndex + 1);
                charIndex++;
            }

            let typeSpeed = isDeleting ? 100 : 150;

            if (!isDeleting && charIndex === currentText.length) {
                typeSpeed = 2000;
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                textIndex = (textIndex + 1) % typingTexts.length;
                typeSpeed = 500;
            }

            setTimeout(typeEffect, typeSpeed);
        }

        // Counter Animation
        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                if (target >= 1000) {
                    element.textContent = Math.floor(current).toLocaleString() + '+';
                } else {
                    element.textContent = Math.floor(current) + (target === 99 ? '%' : '+');
                }
            }, 20);
        }

        // Testimonial Slider
        let currentSlide = 0;
        const totalSlides = 3;
        const slider = document.getElementById('testimonialSlider');
        const dots = document.querySelectorAll('.testimonial-dot');

        function updateSlider() {
            slider.style.transform = `translateX(-${currentSlide * 100}%)`;
            dots.forEach((dot, index) => {
                if (index === currentSlide) {
                    dot.classList.remove('bg-gray-300');
                    dot.classList.add('bg-teal-primary');
                } else {
                    dot.classList.remove('bg-teal-primary');
                    dot.classList.add('bg-gray-300');
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        }

        // Auto-slide testimonials
        setInterval(nextSlide, 5000);

        // Dot navigation
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentSlide = index;
                updateSlider();
            });
        });

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
                // Close mobile menu if open
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Navbar Scroll Effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('bg-white/95', 'backdrop-blur-sm');
            } else {
                navbar.classList.remove('bg-white/95', 'backdrop-blur-sm');
            }
        });

        // Intersection Observer for Animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    
                    // Animate counters when stats section is visible
                    if (entry.target.classList.contains('stat-item')) {
                        const counter = entry.target.querySelector('[data-count]');
                        if (counter && !counter.classList.contains('animated')) {
                            counter.classList.add('animated');
                            const target = parseInt(counter.dataset.count);
                            animateCounter(counter, target);
                        }
                    }
                }
            });
        }, observerOptions);

        // Contact Form
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simple form validation and success message
            const inputs = this.querySelectorAll('input, textarea, select');
            let isValid = true;
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.style.borderColor = '#ef4444';
                } else {
                    input.style.borderColor = '#0d9488';
                }
            });
            
            if (isValid) {
                alert('Terima kasih! Pesan Anda telah terkirim. Tim kami akan segera menghubungi Anda untuk konsultasi lebih lanjut.');
                this.reset();
                inputs.forEach(input => {
                    input.style.borderColor = '#d1d5db';
                });
            } else {
                alert('Mohon lengkapi semua field yang diperlukan.');
            }
        });

        // Initialize when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Start typing effect
            setTimeout(typeEffect, 1000);
            
            // Observe elements for animations
            document.querySelectorAll('.fade-in, .slide-up, .stat-item, .service-card, .feature-item, .contact-item').forEach(el => {
                observer.observe(el);
            });
            
            // Add hover effects to CTA buttons
            document.querySelectorAll('.cta-button').forEach(button => {
                button.addEventListener('mouseenter', function() {
                    this.style.boxShadow = '0 20px 40px rgba(6, 182, 212, 0.3)';
                });
                
                button.addEventListener('mouseleave', function() {
                    this.style.boxShadow = '';
                });
            });
        });
    </script>
<script>