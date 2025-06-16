<!DOCTYPE html>
<html lang="en" x-data="{ dark: false, isSideMenuOpen: false, isPagesMenuOpen: false, toggleSideMenu() { this.isSideMenuOpen = !this.isSideMenuOpen }, closeSideMenu() { this.isSideMenuOpen = false }, togglePagesMenu() { this.isPagesMenuOpen = !this.isPagesMenuOpen } }" :class="{ 'theme-dark': dark }">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sólo Navegación</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
     <!--link rel="stylesheet" href="./assets/css/tailwind.output.css" /-->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
    <!-- Botón hamburguesa SIEMPRE visible -->
<header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
  <div class="flex items-center justify-between h-full px-6 text-purple-600 dark:text-purple-300">
    
    <!-- Botón hamburguesa a la izquierda -->
    <button @click="toggleSideMenu" class="p-1 rounded-md focus:outline-none focus:shadow-outline-purple" aria-label="Menu">
      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M3 5h14a1 1 0 110 2H3a1 1 0 010-2zm0 5h14a1 1 0 110 2H3a1 1 0 010-2zm0 5h14a1 1 0 110 2H3a1 1 0 010-2z" clip-rule="evenodd" />
      </svg>
    </button>

    <!-- Título centrado -->
    <span class="text-2xl font-bold text-center flex-1">Centros de acopio</span>

    <!-- Espacio fantasma para equilibrar -->
    <div class="w-6 h-6"></div>

  </div>
</header>

    <!-- Sidebar (navegación) visible solo si está abierta -->
    <aside x-show="isSideMenuOpen" class="fixed inset-y-0 left-0 z-20 w-64 bg-white dark:bg-gray-800 shadow-lg transition-transform transform" x-transition:enter="transition ease-in-out duration-200" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-200" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" @click.away="closeSideMenu">
      <div class="py-4 text-gray-500 dark:text-gray-400 h-full">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">Barra de navegacion</a>
        <ul class="mt-6">
          <li class="px-6 py-3"><a href="index.html" class="block font-semibold hover:text-purple-600">Inicio</a></li>
          <li class="px-6 py-3"><a href="forms.html" class="block font-semibold hover:text-purple-600">Galeria</a></li>
          <li class="px-6 py-3"><a href="charts.html" class="block font-semibold hover:text-purple-600">Estadisticas</a></li>
          
   
         
          
        </ul>
        <div class="px-6 mt-6">
  <a href="donar.html" class="block w-full px-4 py-2 text-sm font-medium text-white bg-purple-600 rounded-lg hover:bg-purple-700 text-center">
    Donar
  </a>
</div>
      </div>
    </aside>
<!-- Menú superior de secciones tipo pestañas -->
<nav class="bg-gray-200 dark:bg-gray-700 px-6 py-3 shadow-md w-full flex flex-wrap justify-center gap-4 text-sm font-semibold">
  <a href="admin.html" class="px-4 py-2 bg-white dark:bg-gray-800 rounded hover:text-purple-600">Inicio</a>
   <a href="gestion.html" class="px-4 py-2 bg-white dark:bg-gray-800 rounded hover:text-purple-600">Dispositivos</a>


  <a href="armado.html" class="px-4 py-2 bg-white dark:bg-gray-800 rounded hover:text-purple-600">Armado</a>
  <a href="estadisticas.html" class="px-4 py-2 bg-white dark:bg-gray-800 rounded hover:text-purple-600">Estadísticas</a>
  <a href="usuarios.html" class="px-4 py-2 bg-white dark:bg-gray-800 rounded hover:text-purple-600">Usuarios</a>
  <a href="venta.html" class="px-4 py-2 bg-white dark:bg-gray-800 rounded hover:text-purple-600">Ventas</a>
  
  <a href="inventario.html" class="px-4 py-2 bg-white dark:bg-gray-800 rounded hover:text-purple-600">Inventario</a>
  <a href="categoria.html" class="px-4 py-2 bg-white dark:bg-gray-800 rounded hover:text-purple-600">Categoría</a>
</nav>


<!-- ⬇ AQUI VA EL NUEVO CÓDIGO ⬇ -->
<main class="p-6">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
  <input type="text" placeholder="Nombre" class="border p-2 rounded-md text-gray-900 dark:text-white font-semibold bg-white dark:bg-gray-700 placeholder-gray-500 dark:placeholder-gray-400" />
  <input type="text" placeholder="Ubicación" class="border p-2 rounded-md text-gray-900 dark:text-white font-semibold bg-white dark:bg-gray-700 placeholder-gray-500 dark:placeholder-gray-400" />
  <input type="text" placeholder="Teléfono" class="border p-2 rounded-md text-gray-900 dark:text-white font-semibold bg-white dark:bg-gray-700 placeholder-gray-500 dark:placeholder-gray-400" />
</div>
    <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">GUARDAR Centro de acopio</button>

    <!-- Tabla -->
    <div class="mt-6">
      <table class="w-full border border-gray-300">
        <thead class="bg-gray-100 dark:bg-gray-700">
          <tr>
            <th class="border px-4 py-2">#</th>
            <th class="border px-4 py-2">Nombre</th>
            <th class="border px-4 py-2">Ubicación</th>
            <th class="border px-4 py-2">Teléfono</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border px-4 py-2 text-center">1</td>
            <td class="border px-4 py-2"></td>
            <td class="border px-4 py-2"></td>
            <td class="border px-4 py-2"></td>
          </tr>
          <tr class="bg-gray-50 dark:bg-gray-900">
            <td class="border px-4 py-2 text-center">2</td>
            <td class="border px-4 py-2"></td>
            <td class="border px-4 py-2"></td>
            <td class="border px-4 py-2"></td>
          </tr>
        </tbody>
      </table>
      
    </div>
  </div>
</main>
<!-- ⬆ HASTA AQUÍ -->


  </body>
</html>
