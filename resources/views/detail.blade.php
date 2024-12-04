<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Details Page
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100">
  <div class="flex">
   <!-- Sidebar -->
   <div class="w-64 bg-white h-screen shadow-md">
    <div class="p-6">
     <div class="flex items-center">
      <img alt="Profile picture of admin" class="rounded-full w-12 h-12" height="50" src="https://storage.googleapis.com/a1aa/image/qREMOwxMgDbuONhBRJYV80edLKjf7ovWCef3Tu0u5Ib1XJeeE.jpg" width="50"/>
      <div class="ml-4">
       <h2 class="text-lg font-semibold">
        Admin
       </h2>
       <p class="text-gray-500">
        admin@email.com
       </p>
      </div>
     </div>
     <div class="mt-6">
      <ul>
       <li class="mb-4">
        <a class="flex items-center text-gray-700 hover:text-blue-500" href="#">
         <i class="fas fa-tachometer-alt mr-3">
         </i>
         Dashboard
        </a>
       </li>
       <li class="mb-4">
        <a class="flex items-center text-gray-700 hover:text-blue-500" href="#">
         <i class="fas fa-file-alt mr-3">
         </i>
         Reports
        </a>
       </li>
       <li class="mb-4">
        <a class="flex items-center text-gray-700 hover:text-blue-500" href="#">
         <i class="fas fa-user mr-3">
         </i>
         Account
        </a>
       </li>
       <li>
        <a class="flex items-center text-gray-700 hover:text-blue-500" href="#">
         <i class="fas fa-sign-out-alt mr-3">
         </i>
         Logout
        </a>
       </li>
      </ul>
     </div>
    </div>
    <div class="absolute bottom-0 left-0 p-6">
     <img alt="Dipo Help logo" height="50" src="https://storage.googleapis.com/a1aa/image/U9xYVee9krkX6EaaENmkYvldx6yrlm8HyNX6caxFXQMfrEvnA.jpg" width="100"/>
    </div>
   </div>
   <!-- Main Content -->
   <div class="flex-1 p-6">
    <h1 class="text-2xl font-bold mb-6">
     Details
    </h1>
    <div class="bg-white p-6 rounded-lg shadow-md mb-6">
     <div class="flex">
      <div class="w-1/3 flex flex-col items-center">
       <img alt="Profile picture of Alexa Rawles" class="rounded-full w-24 h-24 mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/riYYBcemyeo39kj1HaQFVcg3cAJx5ELuxeb4s8QS5tV8rEvnA.jpg" width="100"/>
       <h2 class="text-xl font-semibold">
        Alexa Rawles
       </h2>
       <p class="text-gray-500">
        21120122120091
       </p>
       <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">
        20241122-001
       </button>
      </div>
      <div class="w-2/3 pl-6">
       <div class="grid grid-cols-2 gap-4">
        <div>
         <label class="block text-gray-700">
          Email
         </label>
         <input class="w-full bg-gray-100 p-2 rounded" readonly="" type="text" value="alexarawles@students.undip.ac.id"/>
        </div>
        <div>
         <label class="block text-gray-700">
          Deskripsi Masalah
         </label>
         <textarea class="w-full bg-gray-100 p-2 rounded h-32" readonly="">Saya ingin melaporkan bahwa hingga saat ini, pencairan dana beasiswa prestasi untuk semester ini belum diterima oleh mahasiswa penerima beasiswa. Berdasarkan informasi yang diberikan, seharusnya dana tersebut sudah dicairkan pada bulan lalu. Hal ini menimbulkan kesulitan bagi beberapa mahasiswa yang sangat bergantung pada beasiswa untuk memenuhi kebutuhan akademik maupun sehari-hari. Mohon agar pihak universitas dapat mempercepat proses pencairan dan memberikan penjelasan mengenai keterlambatan ini. Terima kasih.</textarea>
        </div>
        <div>
         <label class="block text-gray-700">
          Nomor Telepon
         </label>
         <input class="w-full bg-gray-100 p-2 rounded" readonly="" type="text" value="(62) 8590001234"/>
        </div>
        <div>
         <label class="block text-gray-700">
          Lampiran Dokumen
         </label>
         <input class="w-full bg-gray-100 p-2 rounded" readonly="" type="text" value="-"/>
        </div>
        <div>
         <label class="block text-gray-700">
          Fakultas
         </label>
         <input class="w-full bg-gray-100 p-2 rounded" readonly="" type="text" value="FISIP"/>
        </div>
        <div>
         <label class="block text-gray-700">
          Kategori
         </label>
         <input class="w-full bg-gray-100 p-2 rounded" readonly="" type="text" value="Keuangan"/>
        </div>
        <div>
         <label class="block text-gray-700">
          Waktu &amp; Tanggal Laporan
         </label>
         <input class="w-full bg-gray-100 p-2 rounded" readonly="" type="text" value="09.12 / 22 November 2024"/>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md">
     <div class="grid grid-cols-2 gap-4">
      <div>
       <label class="block text-gray-700">
        Status
       </label>
       <select class="w-full bg-gray-100 p-2 rounded">
        <option>
         Dalam Proses
        </option>
        <option>
         Selesai
        </option>
       </select>
      </div>
      <div>
       <label class="block text-gray-700">
        Estimasi
       </label>
       <input class="w-full bg-gray-100 p-2 rounded" readonly="" type="text" value="5-8 Hari"/>
      </div>
      <div>
       <label class="block text-gray-700">
        Penanggungjawab
       </label>
       <input class="w-full bg-gray-100 p-2 rounded" readonly="" type="text" value="Kepala Subbag Keuangan"/>
      </div>
      <div>
       <label class="block text-gray-700">
        Tindak Lanjut
       </label>
       <input class="w-full bg-gray-100 p-2 rounded" readonly="" type="text" value="Keluhan sedang ditangani subbagian keuangan bersama manajer bagian kemahasiswaan"/>
      </div>
      <div>
       <label class="block text-gray-700">
        Catatan Tambahan
       </label>
       <input class="w-full bg-gray-100 p-2 rounded" readonly="" type="text" value="Akan ada artikel keterlambatan pencairan dana beasiswa prestasi"/>
      </div>
     </div>
     <div class="mt-6 text-right">
      <button class="bg-blue-500 text-white px-4 py-2 rounded">
       SAVE
      </button>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>




