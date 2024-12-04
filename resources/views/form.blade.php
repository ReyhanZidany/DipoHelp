<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Form Pengaduan</title>
  <link rel="icon" href="assets/img/dipohelp_bg.png" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-white text-gray-800 scroll-smooth">
    <!-- Header -->
    <header class="flex justify-between items-center p-4">
      <!-- Logo Section -->
      <div class="flex items-center">
        <a href="/">
          <img
            alt="DipoHelp logo"
            class="h-15"
            height="90"
            src="assets/img/dipohelp_logo.png"
            width="90"
          />
        </a>
      </div>
      <!-- Navigation Links -->
      <nav class="flex space-x-8 items-center">
        <a class="font-bold text-gray-600 hover:text-gray-800" href="/#layanan"> Layanan </a>
        <a class="font-bold text-gray-600 hover:text-gray-800" href="/#tentang"> Tentang </a>
        <a class="font-bold text-gray-600 hover:text-gray-800" href="/#artikel"> Artikel </a>
        <a class="font-bold bg-blue-500 text-white px-6 py-2 rounded-lg flex items-center justify-center" href="{{ url('/loginuser') }}">Logout</a>
      </nav>
    </header>

    <!-- Form Pengaduan Section -->
    <main class="container mx-auto mt-10 px-6 max-w-screen-lg">
      <div class="text-center">
        <h1 class="text-3xl font-bold text-gray-800">
          Sampaikan keluhanmu Dips!
        </h1>
        <p class="text-xl text-gray-600 mt-4">
          Selamat datang di halaman Form Pengaduan! Di sini, dips dapat menyampaikan keluhan, masukan, atau permasalahan yang memerlukan perhatian kampus.
        </p>
        <div class="mt-4">
          <div class="inline-block w-24 h-1 bg-blue-600"></div>
        </div>
      </div>
      <div class="bg-white shadow-xl border rounded-3xl p-6 mt-10">
        <form>
          <div class="mb-4">
            <label class="block text-gray-700">Nama Lengkap</label>
            <input class="w-full mt-2 p-3 border rounded" placeholder="nama lengkap" type="text" required/>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700">Email Kampus</label>
            <input class="w-full mt-2 p-3 border rounded" placeholder="email kampus" type="email" required />
        </div>    
        <div class="mb-4">
            <label class="block text-gray-700">NIP / NIM</label>
            <input class="w-full mt-2 p-3 border rounded" placeholder="nip / nim" type="text" id="nim" pattern="\d+" title="Hanya angka yang diperbolehkan" required />
        </div>
          <div class="mb-4">
            <label class="block text-gray-700">Nomor Telepon</label>
            <input id="phone" class="w-full mt-2 p-3 border rounded" placeholder="+62 nomor telepon" type="text" />
        </div>
          <div class="mb-4">
            <label class="block text-gray-700">Kategori</label>
            <select class="w-full mt-2 p-3 border rounded">
                <option>Pilih kategori</option>
                <option>Akademik</option>
                <option>Keuangan</option>
                <option>IT Support</option>
                <option>Fasilitas</option>
                <option>Kemahasiswaan</option>
                <option>Lainnya</option>
            </select>
        </div>
          <div class="mb-4">
            <label class="block text-gray-700">Deskripsi Masalah</label>
            <textarea class="w-full mt-2 p-3 border rounded" placeholder="deskripsi masalah"></textarea>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700">Lampiran Dokumen (Opsional)</label>
            <div class="border-dashed border-2 border-gray-300 rounded p-6 text-center">
              <p class="text-gray-500">
                Drop here to attach or
                <a class="text-blue-600" href="#">upload</a>
              </p>
              <p class="text-gray-500 text-sm">Max size: 5GB</p>
            </div>
          </div>
          <div class="text-center">
            <button class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700" type="submit">
              Kirim Aduan
            </button>
          </div>
        </form>
      </div>
      <div class="text-center mt-6">
        <a class="text-blue-600 hover:underline" href="{{ url('/track') }}">Sudah mengirim pengaduan? Klik di sini untuk melacak tiket</a>
      </div>
    </main>

    <!-- Footer -->
    <footer class="bg-blue-500 text-white mt-16 p-6">
      <div class="flex justify-between items-center border-b-2 pb-6">
          <!-- Logo and Text Section -->
          <div class="flex items-center">
              <img
                  src="assets/img/dipohelp_bg.png"
                  alt="DipoHelp logo"
                  width="90"
                  height="90"
                  class="h-17 mr-10"
              >
              <p class="text-white text-md">
                  Website ini dikelola oleh Unit Layanan Terpadu Universitas Diponegoro. <br>
                  Gedung Widya Puraya Lantai 1. <br>Jl. Prof. Soedarto, SH., Tembalang, Semarang 50275
              </p>
          </div>

          <!-- Social Media Links -->
          <div class="space-x-4">
              <a href="https://www.facebook.com/undip.official/?locale=id_ID" target="_blank" class="text-white">
                  <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://x.com/undip" target="_blank" class="text-white">
                  <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.instagram.com/undip.official/" target="_blank" class="text-white">
                  <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.linkedin.com/company/undip/" target="_blank" class="text-white">
                  <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="https://www.youtube.com/c/UndipTV" target="_blank" class="text-white">
                  <i class="fab fa-youtube"></i>
              </a>
          </div>
      </div>
      
      <p class="mt-4 text-center">
          <span>© 2024 Universitas Diponegoro. All Right Reserved</span>
      </p>
</footer>

  <script>
    // Ambil elemen input
    const phoneInput = document.getElementById('phone');
    
    // Set default value untuk +62
    phoneInput.value = '+62 ';
    
    // Tambahkan event listener untuk memastikan hanya angka yang bisa dimasukkan
    phoneInput.addEventListener('input', function(event) {
        let value = phoneInput.value;
        
        // Hapus semua karakter non-angka kecuali + dan 62
        phoneInput.value = value.replace(/[^0-9+]/g, '');
        
        // Pastikan input diawali dengan +62
        if (!phoneInput.value.startsWith('+62')) {
            phoneInput.value = '+62 ' + phoneInput.value.replace(/^\+62/, ''); // Menjaga awalan +62
        }
    });
</script>
  </body>
</html>
