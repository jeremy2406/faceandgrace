<?php include 'Componentes/Header.php'; ?>
<?php include 'Componentes/Nav.php'; ?>

<!-- Hero Section -->
<section id="inicio"
  class="pt-20 min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-900 via-gray-800 to-green-900">
  <div class="text-center max-w-4xl mx-auto px-4">
    <div class="w-32 h-32  rounded-full flex items-center justify-center mx-auto mb-8 shadow-2xl">
      <img src="./assets/Logo.jpg" alt="Logo Face & Grace"class="w-32 h-32 rounded-full object-cover">
    </div>
    <h1
      class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-white to-green-300 bg-clip-text text-transparent">
      Face & Grace
    </h1>
    <p class="text-xl md:text-2xl text-gray-300 mb-4 font-light">SKINCARE</p>
    <p class="text-lg text-gray-400 mb-8 max-w-2xl mx-auto">
      Transforma tu rostro, resalta tu esencia
    </p>
    <p class="text-md text-gray-500">Santiago, Carretera La Ceibita de Pekin</p>
  </div>
</section>

<!-- Galería de Productos -->
<section id="galeria" class="py-20 bg-gray-800">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-4xl font-bold mb-4">Nuestros Productos</h2>
      <p class="text-gray-400 text-lg max-w-2xl mx-auto">
        Descubre nuestra línea completa de productos para el cuidado facial, diseñados para transformar y resaltar la
        belleza natural de tu piel.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Producto 1 -->
      <div
        class="bg-gray-900 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
        <div class="h-64 bg-gradient-to-br from-green-600 to-green-800 flex items-center justify-center">
         <img src="./assets/Limpiador.jpeg" alt="Limpiador Facial" class="w-20 h-20 text-white">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Limpiador Facial</h3>
          <p class="text-gray-400 mb-4">Limpieza profunda y suave para todo tipo de piel</p>
          <div class="flex justify-between items-center">
            <span class="text-2xl font-bold text-green-400">$45</span>
            <button class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded-lg transition-colors">
              Ver más
            </button>
          </div>
        </div>
      </div>

      <!-- Producto 2 -->
      <div
        class="bg-gray-900 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
        <div class="h-64 bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center">
          <img src="./assets/Serum.jpg" alt="Serum Hidratante" class="w-20 h-20 text-white">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Serum Hidratante</h3>
          <p class="text-gray-400 mb-4">Hidratación intensa con ácido hialurónico</p>
          <div class="flex justify-between items-center">
            <span class="text-2xl font-bold text-green-400">$65</span>
            <button class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded-lg transition-colors">
              Ver más
            </button>
          </div>
        </div>
      </div>

      <!-- Producto 3 -->
      <div
        class="bg-gray-900 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
        <div class="h-64 bg-gradient-to-br from-purple-600 to-purple-800 flex items-center justify-center">
          <img src="./assets/Antiedad.jpeg" alt="Crema Antiedad" class="w-20 h-20 text-white">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Crema Antiedad</h3>
          <p class="text-gray-400 mb-4">Reduce líneas de expresión y arrugas</p>
          <div class="flex justify-between items-center">
            <span class="text-2xl font-bold text-green-400">$85</span>
            <button class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded-lg transition-colors">
              Ver más
            </button>
          </div>
        </div>
      </div>

      <!-- Producto 4 -->
      <div
        class="bg-gray-900 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
        <div class="h-64 bg-gradient-to-br from-pink-600 to-pink-800 flex items-center justify-center">
          <img src="./assets/Mascarilla.jpeg" alt="Mascarilla Purificante" class="w-20 h-20 text-white">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Mascarilla Purificante</h3>
          <p class="text-gray-400 mb-4">Limpieza profunda y purificación de poros</p>
          <div class="flex justify-between items-center">
            <span class="text-2xl font-bold text-green-400">$35</span>
            <button class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded-lg transition-colors">
              Ver más
            </button>
          </div>
        </div>
      </div>

      <!-- Producto 5 -->
      <div
        class="bg-gray-900 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
        <div class="h-64 bg-gradient-to-br from-yellow-600 to-yellow-800 flex items-center justify-center">
         <img src="./assets/Nivea.jpeg" alt="Protector Solar" class="w-20 h-20 text-white">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Protector Solar</h3>
          <p class="text-gray-400 mb-4">Protección UV con factor 50+</p>
          <div class="flex justify-between items-center">
            <span class="text-2xl font-bold text-green-400">$55</span>
            <button class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded-lg transition-colors">
              Ver más
            </button>
          </div>
        </div>
      </div>

      <!-- Producto 6 -->
      <div
        class="bg-gray-900 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
        <div class="h-64 bg-gradient-to-br from-indigo-600 to-indigo-800 flex items-center justify-center">
         <img src="./assets/Tonico.jpeg" alt="Tónico Facial" class="w-20 h-20 text-white">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Tónico Facial</h3>
          <p class="text-gray-400 mb-4">Equilibra y prepara la piel</p>
          <div class="flex justify-between items-center">
            <span class="text-2xl font-bold text-green-400">$40</span>
            <button class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded-lg transition-colors">
              Ver más
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Nossa Empresa -->
<section id="empresa" class="py-20 bg-gray-900">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-4xl font-bold mb-4">Nuestra Empresa</h2>
      <p class="text-gray-400 text-lg max-w-2xl mx-auto">
        Conoce más sobre Face & Grace y nuestro compromiso con tu belleza natural
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
      <!-- Misión -->
      <div class="bg-gray-800 rounded-xl p-8 hover:bg-gray-750 transition-colors duration-300">
        <div class="flex items-center mb-6">
          <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mr-4">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
            </svg>
          </div>
          <h3 class="text-2xl font-semibold">Misión</h3>
        </div>
        <p class="text-gray-300 leading-relaxed">
          En Face & Grace nos enfocamos en brindar bienestar y confianza a través de productos naturales para el cuidado
          de la piel. Nuestro objetivo es ofrecer soluciones efectivas y saludables que respeten tanto el cuerpo como el
          medio ambiente. Creemos que la belleza comienza con el autocuidado, por eso desarrollamos productos seguros,
          honestos y pensados para realzar la belleza natural de cada persona, promoviendo al mismo tiempo una conexión
          consciente con lo natural.

        </p>
      </div>

      <!-- Visión -->
      <div class="bg-gray-800 rounded-xl p-8 hover:bg-gray-750 transition-colors duration-300">
        <div class="flex items-center mb-6">
          <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" />
            </svg>
          </div>
          <h3 class="text-2xl font-semibold">Visión</h3>
        </div>
        <p class="text-gray-300 leading-relaxed">
          Aspiramos a posicionarnos como una empresa líder en el mercado del cuidado de la piel natural, reconocida por
          su compromiso con la calidad, la innovación y el respeto por el medio ambiente. En Face & Grace soñamos con
          transformar las rutinas de cuidado personal en experiencias saludables, responsables y sostenibles,
          construyendo una comunidad que valore la belleza real y el bienestar integral.

        </p>
      </div>

      <!-- Valores -->
      <div class="bg-gray-800 rounded-xl p-8 hover:bg-gray-750 transition-colors duration-300">
        <div class="flex items-center mb-6">
          <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center mr-4">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
            </svg>
          </div>
          <h3 class="text-2xl font-semibold">Valores</h3>
        </div>
        <p class="text-gray-300 leading-relaxed">
          Naturalidad: Priorizamos el uso de ingredientes naturales y seguros para la piel. <br>
          Responsabilidad ambiental: Nos comprometemos con prácticas sostenibles y respetuosas con el entorno.<br>
          Calidad: Garantizamos productos efectivos y elaborados con altos estándares.<br>
          Confianza: Fomentamos relaciones transparentes y honestas con nuestros clientes.<br>
          Innovación: Buscamos constantemente mejorar y desarrollar nuevas soluciones para el cuidado de la piel.<br>
          Bienestar: Promovemos el autocuidado como parte esencial de una vida saludable.

        </p>
      </div>

      <!-- Sobre Nosotros -->
      <div class="bg-gray-800 rounded-xl p-8 hover:bg-gray-750 transition-colors duration-300">
        <div class="flex items-center mb-6">
          <div class="w-12 h-12 bg-pink-600 rounded-lg flex items-center justify-center mr-4">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A1.95 1.95 0 0 0 18.1 7H5.9c-.8 0-1.54.5-1.86 1.27L1.5 16H4v6h16z" />
            </svg>
          </div>
          <h3 class="text-2xl font-semibold">Sobre Nosotros</h3>
        </div>
        <p class="text-gray-300 leading-relaxed">
          Face & Grace Skincare es una empresa dedicada al cuidado de la piel a través de productos naturales,
          formulados con ingredientes de alta calidad que respetan la salud, la belleza y el equilibrio del rostro.
          Creemos en una cosmética consciente, elegante y efectiva, que transforma no solo la piel, sino también la
          relación de cada persona con su propia esencia.
          Nuestra pasión es ofrecer bienestar, confianza y resultados reales a través de una línea de productos que
          fusiona la naturaleza con el cuidado profesional. En Face & Grace, trabajamos cada día para resaltar lo mejor
          de ti: tu belleza auténtica.
        </p>
      </div>
    </div>
  </div>
</section>

<?php include 'Componentes/Footer.php'; ?>