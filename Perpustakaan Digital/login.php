<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | DigiPerpus</title>
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
<body class="bg-gradient-to-t from-cyan-100 to-teal-50 min-h-screen flex items-center justify-center p-4">

        <?php 
	         if(isset($_GET['pesan'])){
	    	    if($_GET['pesan']=="gagal"){
	    	
	    	    }
	        }
	     ?>
    
    <!-- Login Container -->
    <div class="w-full max-w-md">
        <!-- Logo Section -->
        <div class="text-center mb-8">
            <div class="flex items-center justify-center mb-4 group">
                <img src="assets/img/logo_digiperpus1.png" href="index.php" alt="Logo DigiPerpus" class="h-20 w-50 rounded-3xl object-cover">
            </div>
            <p class="text-gray-600">Masuk ke akun perpustakaan digital Anda</p>
        </div>

        <!-- Login Form -->
        <div class="bg-white p-8 rounded-2xl shadow-2xl">
            <form  method="post" action="aksi/aksi_login.php" id="loginForm" class="space-y-6">
                <!-- Email Field -->
                <div class="form-group">
                    <label for="email" class="block text-sm font-medium text-gray-600 mb-2">
                        Username
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="text-gray-400 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9.001 9.001 0 0112 15c2.21 0 4.21.805 5.879 2.146M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <input 
                            type="text" 
                            name="username"
                            class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-lg focus:border-teal-primary focus:outline-none transition-colors"
                            placeholder="Masukkan username"
                            required="required"
                        >
                    </div>
                </div>

                <!-- Password Field -->
                <div class="form-group">
                    <label for="password" class="block text-sm font-medium text-gray-600 mb-2">
                        Password
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="text-gray-400 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 17a2 2 0 100-4 2 2 0 000 4zm6-7V9a6 6 0 10-12 0v1a2 2 0 00-2 2v7a2 2 0 002 2h12a2 2 0 002-2v-7a2 2 0 00-2-2zm-8-1a4 4 0 118 0v1H8V9z"></path>
                            </svg>
                        </div>
                        <input 
                            type="password"
                            id="password"  
                            name="password"
                            class="w-full pl-12 pr-12 py-3 border-2 border-gray-200 rounded-lg focus:border-teal-primary focus:outline-none transition-colors"
                            placeholder="Masukkan password"
                            required="required"
                        >
                        <button 
                            type="button" 
                            id="togglePassword"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-teal-primary transition-colors"
                        >
                            <svg id="eyeIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input 
                            type="checkbox" 
                            id="remember"
                            class="w-4 h-4 text-teal-primary bg-gray-100 border-gray-300 rounded focus:ring-teal-500 focus:ring-2 transition-all"
                        >
                        <span class="font-medium ml-2 text-sm text-gray-600">Ingat saya</span>
                    </label>
                    <a href="#" class="text-sm text-teal-primary hover:text-teal-secondary transition-colors font-medium">
                        Lupa password?
                    </a>
                </div>

                <!-- Login Button -->
                <input
                    value="Masuk"
                    type="submit"
                    class="w-full bg-gradient-to-r from-blue-secondary to-teal-500 text-white py-3 px-6 rounded-lg font-semibold hover:from-teal-500 hover:to-blue-secondary transition-all transform hover:scale-105 shadow-lg"
                >
    


            </form>
        </div>

        <!-- Register Link -->
        <div class="text-center mt-6">
            <p class="text-gray-600">
                Belum punya akun? 
                <a href="register.php" class="text-teal-primary hover:text-teal-secondary font-semibold transition-colors">
                    Daftar sekarang
                </a>
            </p>
        </div>

        <!-- Back to Home -->
        <div class="text-center mt-4">
            <a href="index.php" class="inline-flex items-center text-gray-500 hover:text-teal-primary transition-colors">
                <span class="mr-2">←</span>
                Kembali ke beranda
            </a>
        </div>
    </div>



    <style>
        /* Custom focus styles */
        input:focus {
            box-shadow: 0 0 0 3px rgba(13, 148, 136, 0.1);
        }

        /* Loading state for button */
        .loading {
            position: relative;
            color: transparent;
        }

        .loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            border: 2px solid #ffffff;
            border-radius: 50%;
            border-top-color: transparent;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>

    <script>
        // Toggle Password 
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            if (type === 'password') {
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                `;
            } else {
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"></path>
                `;
            }
        });
     </script>
        

</html>
