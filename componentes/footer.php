
  

  

    <!-- Footer -->
    <footer id="contacto" class="bg-gray-950 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Logo y empresa -->
                <div class="text-center md:text-left">
                    <div class="flex items-center justify-center md:justify-start mb-4">
                        <div class="w-10 h-10 bg-green-800 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-6 h-6 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.87-3.13-7-7-7zm0 2c2.76 0 5 2.24 5 5s-2.24 5-5 5-5-2.24-5-5 2.24-5 5-5z"/>
                            </svg>
                        </div>
                        <span class="text-2xl font-semibold">Face & Grace</span>
                    </div>
                    <p class="text-gray-400 mb-2">SKINCARE</p>
                    <p class="text-gray-500 text-sm">Transforma tu rostro, resalta tu esencia</p>
                </div>

                <!-- Contacto -->
                <div class="text-center">
                    <h4 class="text-lg font-semibold mb-4">Contacto</h4>
                    <div class="space-y-2">
                        <p class="text-gray-400 flex items-center justify-center">
                            <svg class="w-4 h-4 mr-2 text-green-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                            </svg>
                            849-234-3465
                        </p>
                    </div>
                </div>

                <!-- Dirección -->
                <div class="text-center md:text-right">
                    <h4 class="text-lg font-semibold mb-4">Ubicación</h4>
                    <p class="text-gray-400 flex items-center justify-center md:justify-end">
                        <svg class="w-4 h-4 mr-2 text-green-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                        Santiago, Carretera La Ceibita de Pekin
                    </p>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-gray-500">&copy; 2025 Face & Grace. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for anchor links
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
                if (!mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }
            });
        });

        // Add scroll effect to navbar
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.classList.add('bg-gray-900');
            } else {
                nav.classList.remove('bg-gray-900');
            }
        });
    </script>
</body>
</html>