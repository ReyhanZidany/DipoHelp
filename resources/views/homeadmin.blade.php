<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Dashboard
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100 font-sans antialiased">
  <div class="flex h-screen">
   <!-- Sidebar -->
   <div class="w-64 bg-white shadow-md">
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
     <a class="flex items-center px-4 py-2 text-blue-500 bg-blue-100 rounded-lg" href="#">
      <i class="fas fa-tachometer-alt mr-3">
      </i>
      Dashboard
     </a>
     <a class="flex items-center px-4 py-2 mt-2 text-gray-600 hover:bg-gray-200 rounded-lg" href="{{ route('report') }}">
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
    <div class="flex flex-col items-center p-9">
        <img alt="Dipo Help logo" height="50" src="assets/img/dipohelp_logo.png" width="100" />
    </div>
    
   </div>
   <!-- Main Content -->
<div class="flex-1 p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">
            Dashboard
        </h1>
        <button class="text-gray-600 hover:text-gray-800">
            <i class="fas fa-download"></i> Download
        </button>
    </div>

    <!-- Stats and Summary Cards (Already exists) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center">
                <i class="fas fa-file-alt text-blue-500 text-3xl mr-4"></i>
                <div>
                    <h3 class="text-lg font-semibold">Laporan Masuk</h3>
                    <p class="text-2xl font-bold">3,410</p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center">
                <i class="fas fa-hourglass-half text-blue-500 text-3xl mr-4"></i>
                <div>
                    <h3 class="text-lg font-semibold">Laporan Diproses</h3>
                    <p class="text-2xl font-bold">3,298</p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center">
                <i class="fas fa-check-circle text-blue-500 text-3xl mr-4"></i>
                <div>
                    <h3 class="text-lg font-semibold">Laporan Selesai</h3>
                    <p class="text-2xl font-bold">3,208</p>
                </div>
            </div>
        </div>
    </div>

    <!-- The Table with Reports -->
    <div class="bg-white p-6 rounded-lg shadow-md mb-6">
        <h3 class="text-xl font-semibold mb-4">Daftar Pengaduan</h3>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="p-2">Nama Lengkap</th>
                    <th class="p-2">Kategori</th>
                    <th class="p-2">Deskripsi</th>
                    <th class="p-2">Tanggal</th>
                    <th class="p-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengaduans as $pengaduan)
                    <tr>
                        <td class="p-2">{{ $pengaduan->nama_lengkap }}</td>
                        <td class="p-2">{{ $pengaduan->kategori }}</td>
                        <td class="p-2">{{ Str::limit($pengaduan->deskripsi_masalah, 50) }}</td>
                        <td class="p-2">{{ $pengaduan->created_at->format('d/m/Y') }}</td>
                        <td class="p-2">
                            <a href="{{ route('report.show', $pengaduan->id) }}" class="text-blue-500">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
     <div class="bg-white p-6 rounded-lg shadow-md col-span-2">
      <h3 class="text-lg font-semibold mb-4">
       Statistika Laporan
      </h3>
      
     </div>
     <div class="bg-white p-6 rounded-lg shadow-md">
      <h3 class="text-lg font-semibold mb-4">
       Rekap Laporan
      </h3>
      <div class="mb-4">
       <div class="flex justify-between mb-1">
        <span>
         Akademik
        </span>
        <span>
         174
        </span>
       </div>
       <div class="w-full bg-gray-200 rounded-full h-2.5">
        <div class="bg-blue-500 h-2.5 rounded-full" style="width: 50%">
        </div>
       </div>
      </div>
      <div class="mb-4">
       <div class="flex justify-between mb-1">
        <span>
         Keuangan
        </span>
        <span>
         231
        </span>
       </div>
       <div class="w-full bg-gray-200 rounded-full h-2.5">
        <div class="bg-blue-500 h-2.5 rounded-full" style="width: 70%">
        </div>
       </div>
      </div>
      <div class="mb-4">
       <div class="flex justify-between mb-1">
        <span>
         IT Support
        </span>
        <span>
         196
        </span>
       </div>
       <div class="w-full bg-gray-200 rounded-full h-2.5">
        <div class="bg-blue-500 h-2.5 rounded-full" style="width: 60%">
        </div>
       </div>
      </div>
      <div class="mb-4">
       <div class="flex justify-between mb-1">
        <span>
         Fasilitas
        </span>
        <span>
         155
        </span>
       </div>
       <div class="w-full bg-gray-200 rounded-full h-2.5">
        <div class="bg-blue-500 h-2.5 rounded-full" style="width: 50%">
        </div>
       </div>
      </div>
      <div class="mb-4">
       <div class="flex justify-between mb-1">
        <span>
         Kemahasiswaan
        </span>
        <span>
         210
        </span>
       </div>
       <div class="w-full bg-gray-200 rounded-full h-2.5">
        <div class="bg-blue-500 h-2.5 rounded-full" style="width: 65%">
        </div>
       </div>
      </div>
      <div class="mb-4">
       <div class="flex justify-between mb-1">
        <span>
         Lainnya
        </span>
        <span>
         129
        </span>
       </div>
       <div class="w-full bg-gray-200 rounded-full h-2.5">
        <div class="bg-blue-500 h-2.5 rounded-full" style="width: 40%">
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>




