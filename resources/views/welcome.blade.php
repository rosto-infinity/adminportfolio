<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Responsive Portfolio Website</title>
        <!-- Fonts -->
       <link rel="stylesheet" href="{{ asset('template/assets/fonts/unicons/css/line.css') }}">
      
        <!-- CSS -->
         <!-- SWIPER CSS -->
        <link rel="stylesheet" href="{{ asset('template/assets/css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template/assets/css/styles.css') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>

 <body>
    <main class="container mx-auto px-4 py-6">
  <h1 class="text-3xl font-semibold mb-6 text-blue-600">Fiche de présence – BTS 2 GL / Dév. App DQP</h1>

  <!-- Barre de filtres -->
  <form class="flex flex-col sm:flex-row gap-4 mb-4">
    <input type="text" placeholder="🔍 Rechercher par nom..." class="flex-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
    <select class="w-48 px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
      <option value="">Tous statuts</option>
      <option value="present">Présents</option>
      <option value="absent">Absents</option>
      <option value="retard">En retard</option>
    </select>
  </form>

  <!-- Tableau -->
  <div class="overflow-x-auto shadow rounded-lg">
    <table class="min-w-full table-auto bg-white">
      <thead class="bg-gray-100 text-gray-700 text-sm uppercase">
        <tr>
          <th class="px-4 py-3 text-center cursor-pointer">Date ▲▼</th>
          <th class="px-4 py-3 cursor-pointer">Nom & Prénom ▲▼</th>
          <th class="px-4 py-3 cursor-pointer">E‑mail ▲▼</th>
          <th class="px-4 py-3 text-center cursor-pointer">Arrivée ▲▼</th>
          <th class="px-4 py-3 text-center cursor-pointer">Départ ▲▼</th>
          <th class="px-4 py-3 text-center cursor-pointer">Min. retard ▲▼</th>
          <th class="px-4 py-3 text-center cursor-pointer">Absence ▲▼</th>
          <th class="px-4 py-3 text-center cursor-pointer">Retard ▲▼</th>
        </tr>
      </thead>
      <tbody class="text-sm">
        <!-- Données mockées réalistes -->
        <tr class="border-b hover:bg-gray-50">
          <td class="px-4 py-3 text-center">2025‑06‑10</td>
          <td class="px-4 py-3">Lucie Legrand</td>
          <td class="px-4 py-3">lucie@example.com</td>
          <td class="px-4 py-3 text-center">08:05</td>
          <td class="px-4 py-3 text-center">16:30</td>
          <td class="px-4 py-3 text-center">5</td>
          <td class="px-4 py-3 text-center">
            <span class="inline-flex items-center px-2 py-1 text-xs font-medium text-green-700 bg-green-100 rounded-full">Non</span>
          </td>
          <td class="px-4 py-3 text-center">
            <span class="inline-flex items-center px-2 py-1 text-xs font-medium text-orange-700 bg-orange-100 rounded-full">Oui</span>
          </td>
        </tr>
        <tr class="border-b hover:bg-gray-50">
          <td class="px-4 py-3 text-center">2025‑06‑10</td>
          <td class="px-4 py-3">Jean Dupont</td>
          <td class="px-4 py-3">jean@example.com</td>
          <td class="px-4 py-3 text-center">08:00</td>
          <td class="px-4 py-3 text-center">16:00</td>
          <td class="px-4 py-3 text-center">0</td>
          <td class="px-4 py-3 text-center">
            <span class="inline-flex items-center px-2 py-1 text-xs font-medium text-green-700 bg-green-100 rounded-full">Non</span>
          </td>
          <td class="px-4 py-3 text-center">
            <span class="inline-flex items-center px-2 py-1 text-xs font-medium text-green-700 bg-green-100 rounded-full">Non</span>
          </td>
        </tr>
        <tr class="hover:bg-gray-50">
          <td class="px-4 py-3 text-center">2025‑06‑10</td>
          <td class="px-4 py-3">Marie Curie</td>
          <td class="px-4 py-3">marie@example.com</td>
          <td class="px-4 py-3 text-center">–</td>
          <td class="px-4 py-3 text-center">–</td>
          <td class="px-4 py-3 text-center">–</td>
          <td class="px-4 py-3 text-center">
            <span class="inline-flex items-center px-2 py-1 text-xs font-medium text-red-700 bg-red-100 rounded-full">Oui</span>
          </td>
          <td class="px-4 py-3 text-center">
            <span class="inline-flex items-center px-2 py-1 text-xs font-medium text-green-700 bg-green-100 rounded-full">Non</span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Pagination -->
  <nav class="mt-4 flex justify-end">
    <ul class="inline-flex items-center space-x-1">
      <li><button class="page-btn px-3 py-1 text-sm text-gray-600 rounded hover:bg-gray-100">← Préc</button></li>
      <li><button class="page-btn px-3 py-1 text-sm text-white bg-blue-600 rounded">1</button></li>
      <li><button class="page-btn px-3 py-1 text-sm text-gray-600 rounded hover:bg-gray-100">2</button></li>
      <li><button class="page-btn px-3 py-1 text-sm text-gray-600 rounded hover:bg-gray-100">3</button></li>
      <li><button class="page-btn px-3 py-1 text-sm text-gray-600 rounded hover:bg-gray-100">Suiv →</button></li>
    </ul>
  </nav>
</main>
 </body>



</html>
