<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Reports
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100 font-sans antialiased">
  <div class="min-h-screen flex">
   <!-- Sidebar -->
<div class="w-64 bg-white shadow-md flex flex-col">
    <div class="p-4 flex flex-col items-center">
      <img alt="Profile picture of the admin" class="rounded-full mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/SH7cIhxR0u5yBlayVRDTFByr68hZaUlIoiGYtwUctvKoY49E.jpg" width="100"/>
      <div class="text-center">
        <h2 class="text-lg font-semibold">
          Admin
        </h2>
        <p class="text-gray-500">
          admin@email.com
        </p>
      </div>
      <div class="relative mt-4">
        
      </div>
    </div>
  
    <nav class="mt-8">
      <a class="flex items-center px-4 py-2 text-gray-500 hover:bg-gray-200 rounded-lg" href="{{ route('homeadmin') }}">
        <i class="fas fa-tachometer-alt mr-3"></i>
        Dashboard
      </a>
      <a class="flex items-center px-4 py-2 mt-2 text-blue-600 bg-blue-100 hover:bg-gray-200 rounded-lg" href="{{ route('report') }}">
        <i class="fas fa-chart-line mr-3"></i>
        Reports
      </a>
    </nav>
  
    <div class="mt-auto p-4">
        <a class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-200 rounded-lg" href="{{'loginadmin'}}">
         <i class="fas fa-sign-out-alt mr-3">
         </i>
         Logout
        </a>
       </div>
  
    <!-- Logo di bawah -->
    <div class="p-9 mt-auto">
      <img alt="Dipo Help logo" height="50" src="assets/img/dipohelp_logo.png" width="100"/>
    </div>
  </div>
  
   <!-- Main Content -->
   <div class="flex-1 p-6">
    <h1 class="text-2xl font-bold mb-6">
     Reports
    </h1>
    <div class="flex space-x-4 mb-6">
     <div>
      <label class="block text-sm font-medium text-gray-700" for="timeframe">
       Timeframe
      </label>
      <select class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md" id="timeframe">
       <option>
        All-time
       </option>
      </select>
     </div>
     <div>
      <label class="block text-sm font-medium text-gray-700" for="people">
       People
      </label>
      <select class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md" id="people">
       <option>
        All
       </option>
      </select>
     </div>
     <div>
      <label class="block text-sm font-medium text-gray-700" for="categories">
       Categories
      </label>
      <select class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md" id="categories">
       <option>
        All
       </option>
      </select>
     </div>
     <div>
      <label class="block text-sm font-medium text-gray-700" for="faculty">
       Faculty
      </label>
      <select class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md" id="faculty">
       <option>
        All
       </option>
      </select>
     </div>
    </div>
    <div class="bg-white p-6 rounded-lg shadow">
     <h2 class="text-xl font-bold mb-4">
      Laporan Masuk
     </h2>
     <div class="flex justify-between items-center mb-4">
      <input class="border border-gray-300 rounded-md p-2 w-1/3" placeholder="Search" type="text"/>
      <div>
       <label class="block text-sm font-medium text-gray-700" for="sort">
        Sort by:
       </label>
       <select class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md" id="sort">
        <option>
         Newest
        </option>
       </select>
      </div>
     </div>
     <table class="min-w-full divide-y divide-gray-200">
      <thead class="bg-gray-50">
       <tr>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         Nama Lengkap
        </th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         NIM/NIP
        </th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         No Telepon
        </th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         Kategori
        </th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         Fakultas
        </th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         Status
        </th>
       </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
       <tr>
        <td class="px-6 py-4 whitespace-nowrap">
         Jane Cooper
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         21120122120011
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         (+62)85911100534
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         Keuangan
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         Teknik
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         <span class="text-green-800 bg-green-100 px-2 py-1 rounded-full">
          Selesai
         </span>
        </td>
       </tr>
       <tr>
        <td class="px-6 py-4 whitespace-nowrap">
         Floyd Miles
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         21130121130046
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         (+62)85911100534
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         Fasilitas
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         Kedokteran
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         <span class="text-red-800 bg-red-100 px-2 py-1 rounded-full">
          Baru
         </span>
        </td>
       </tr>
       <tr>
        <td class="px-6 py-4 whitespace-nowrap">
         Ronald Richards
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         21120122120011
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         (+62)85911100534
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         IT Support
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         Psikologi
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         <span class="text-red-800 bg-red-100 px-2 py-1 rounded-full">
          Baru
         </span>
        </td>
       </tr>
       <tr>
        <td class="px-6 py-4 whitespace-nowrap">
         Marvin McKinney
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         21120122120011
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         (+62)85911100534
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         IT Support
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         Teknik
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         <span class="text-green-800 bg-green-100 px-2 py-1 rounded-full">
          Selesai
         </span>
        </td>
       </tr>
       <tr>
        <td class="px-6 py-4 whitespace-nowrap">
         Jerome Bell
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         21120122120011
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         (+62)85911100534
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         Kemahasiswaan
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         FEB
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         <span class="text-blue-800 bg-blue-100 px-2 py-1 rounded-full">
          Proses
         </span>
        </td>
       </tr>
       <tr>
        <td class="px-6 py-4 whitespace-nowrap">
         Kathryn Murphy
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         21120122120011
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         (+62)85911100534
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         Akademik
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         FISIP
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         <span class="text-green-800 bg-green-100 px-2 py-1 rounded-full">
          Selesai
         </span>
        </td>
       </tr>
       <tr>
        <td class="px-6 py-4 whitespace-nowrap">
         Jacob Jones
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         21120122120011
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         (+62)85911100534
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         IT Support
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         FPIK
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         <span class="text-blue-800 bg-blue-100 px-2 py-1 rounded-full">
          Proses
         </span>
        </td>
       </tr>
       <tr>
        <td class="px-6 py-4 whitespace-nowrap">
         Kristin Watson
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         21120122120011
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         (+62)85911100534
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         Keuangan
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         Hukum
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
         <span class="text-red-800 bg-red-100 px-2 py-1 rounded-full">
          Baru
         </span>
        </td>
       </tr>
      </tbody>
     </table>
     <div class="mt-4 flex justify-between items-center">
      <p class="text-sm text-gray-600">
       Showing data 1 to 8 of 256K entries
      </p>
      <div class="flex space-x-1">
       <button class="px-3 py-1 border border-gray-300 rounded-md">
        1
       </button>
       <button class="px-3 py-1 border border-gray-300 rounded-md">
        2
       </button>
       <button class="px-3 py-1 border border-gray-300 rounded-md">
        3
       </button>
       <button class="px-3 py-1 border border-gray-300 rounded-md">
        4
       </button>
       <span class="px-3 py-1">
        ...
       </span>
       <button class="px-3 py-1 border border-gray-300 rounded-md">
        30
       </button>
      </div>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>