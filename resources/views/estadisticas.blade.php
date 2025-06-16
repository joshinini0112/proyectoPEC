<!DOCTYPE html>
<html lang="en" x-data="{ dark: false }" :class="{ 'theme-dark': dark }">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Estadísticas</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  </head>
  <body class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200">

    <!-- Header -->
    <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
      <div class="flex items-center justify-center h-full px-6 text-purple-600 dark:text-purple-300">
        <span class="text-2xl font-bold text-center">Estadísticas</span>
      </div>
    </header>
    
    <!-- Barra de navegación horizontal con botones grandes -->
    <nav class="w-full bg-white dark:bg-gray-800 shadow-md mt-4">
      <div class="max-w-screen-xl mx-auto px-6 py-4 flex justify-center">
        <ul class="flex flex-wrap justify-center gap-6">
          <li>
            <a href="index.html" class="inline-block px-6 py-3 text-lg font-semibold bg-gray-100 dark:bg-gray-700 rounded-lg hover:bg-purple-100 dark:hover:bg-purple-600 transition">
              Inicio
            </a>
          </li>
          <li>
            <a href="forms.html" class="inline-block px-6 py-3 text-lg font-semibold bg-gray-100 dark:bg-gray-700 rounded-lg hover:bg-purple-100 dark:hover:bg-purple-600 transition">
              Galería
            </a>
          </li>
          <li>
            <a href="charts.html" class="inline-block px-6 py-3 text-lg font-semibold bg-gray-100 dark:bg-gray-700 rounded-lg hover:bg-purple-100 dark:hover:bg-purple-600 transition">
              Estadísticas
            </a>
          </li>
          <li>
            <a href="donar.html" class="inline-block px-6 py-3 text-lg font-semibold text-white bg-purple-600 rounded-lg hover:bg-purple-700 transition">
              Donar
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Main content -->
    <main class="p-6 mt-6 max-w-4xl mx-auto">
      <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg h-[400px] relative">
        <h2 class="text-xl font-bold text-center mb-4 text-gray-800 dark:text-gray-200 z-10 relative">
          Gráfica de Barras
        </h2>
        <div class="relative h-[320px]">
          <canvas id="barChart"></canvas>
        </div>
      </div>
    </main>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      const ctx = document.getElementById('barChart').getContext('2d');

      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Basura Tecnologica', 'Centros de Acopio', 'Basura', 'Impacto ambiental'],
          datasets: [{
            label: '',
            data: [350, 190, 300, 400],
            backgroundColor: [
              'rgba(59, 130, 246, 0.6)',
              'rgba(16, 185, 129, 0.6)',
              'rgba(234, 179, 8, 0.6)',
              'rgba(239, 68, 68, 0.6)'
            ],
            borderColor: [
              'rgba(59, 130, 246, 1)',
              'rgba(16, 185, 129, 1)',
              'rgba(234, 179, 8, 1)',
              'rgba(239, 68, 68, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false
            }
          },
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    </script>

  </body>
</html>