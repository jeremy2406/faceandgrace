  <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 bg-gray-900/95 backdrop-blur-sm border-b border-gray-800 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo y nombre -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10   flex items-center justify-center">
                        <img src="./assets/Logo.jpg" alt="Logo Face & Grace"class="w-10 h-10 rounded-full object-cover">
                    </div>
                    <span class="text-2xl font-semibold text-white">Face & Grace</span>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="./index.php" class="text-gray-300 hover:text-white transition-colors duration-200">Inicio</a>
                    <a href="./escanear.php" class="text-gray-300 hover:text-white transition-colors duration-200">Escanear</a>
                    <a href="./lista.php" class="text-gray-300 hover:text-white transition-colors duration-200">Lista</a>
                    <a href="./generador_qr.php" class="text-gray-300 hover:text-white transition-colors duration-200">Genear</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <div class="flex flex-col space-y-2">
                    <a href="./index.php" class="text-gray-300 hover:text-white transition-colors duration-200 py-2">Inicio</a>
                    <a href="./escanear.php" class="text-gray-300 hover:text-white transition-colors duration-200 py-2">Escanear</a>
                    <a href="./lista.php" class="text-gray-300 hover:text-white transition-colors duration-200 py-2">Lista</a>
                    <a href="./generador_qr.php" class="text-gray-300 hover:text-white transition-colors duration-200 py-2">Generar</a>
                </div>
            </div>
        </div>
    </nav>