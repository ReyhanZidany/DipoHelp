<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DipoHelp - Pusat Bantuan Universitas Diponegoro</title>
    <link rel="icon" href="assets/img/dipohelp_bg.png" type="image/x-icon">
    <!-- External Stylesheets -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    
    <!-- Custom Styles -->
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
      
        #overlay {
            display: none;
        }
        #overlay.block {
            display: block; /* Tampilkan overlay ketika diperlukan */
        }
    </style>
</head>
<body class="bg-white text-gray-800 scroll-smooth">
    <!-- Header -->
    <header class="flex justify-between items-center p-4">
        <!-- Logo Section -->
        <div class="flex items-center ml-4">
            <a href="/">
                <img 
                    src="assets/img/dipohelp_logo.png" 
                    alt="DipoHelp logo" 
                    width="90" 
                    height="90" 
                    class="h-15"
                >
            </a>
        </div>
        
        <!-- Navigation Links -->
        <nav class="flex space-x-8 items-center">
            <a class="font-bold text-gray-600 hover:text-gray-800" href="#layanan">Layanan</a>
            <a class="font-bold text-gray-600 hover:text-gray-800" href="#tentang">Tentang</a>
            <a class="font-bold text-gray-600 hover:text-gray-800" href="#artikel">Artikel</a>
            @if (Auth::check())
            <button class="font-bold bg-blue-500 text-white px-6 py-2 rounded-lg flex items-center justify-center" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ url('/loginuser') }}" class="font-bold bg-blue-500 text-white px-6 py-2 rounded-lg flex items-center justify-center">Login</a>
        @endif
        </nav>
    </header>

    <!-- Main Content -->
    <main class="text-center">
        <!-- Hero Section -->
        <section class="hero">
            <h1 class="text-5xl font-bold mt-6">Apa yang bisa kami bantu, Dips?</h1>
            
            <!-- Search Bar -->
            <div class="mt-8 flex justify-center">
              <input
                  id="searchInput"
                  type="text"
                  placeholder="Cari..."
                  class="border rounded-l-full px-4 py-2 w-64 bg-gray-100 focus:outline-none"
                  onkeydown="checkEnter(event)"
              >
              <button 
                  id="searchButton"
                  class="bg-blue-500 text-white px-6 py-2 rounded-r-full hover:bg-blue-600"
                  onclick="searchAndScroll()">
                  Cari
              </button>
            </div>
          
            
            <!-- Main Illustration -->
            <div class="mt-0">
                <img
                    src="assets/img/main_content.png"
                    alt="Illustration of various services"
                    width="1600"
                    height="200"
                    class="mx-auto"
                >
            </div>
        </section>

        <!-- Services Section -->
        <section id="layanan" class="mt-12 text-center">
            <h2 class="text-5xl font-bold inline-block">Jelajahi layanan kami</h2>
            
            <!-- Decorative Line -->
            <div class="mt-6">
                <img 
                    src="assets/img/line.png" 
                    alt="Line" 
                    class="mx-auto"
                    style="width: 10%;"
                >
            </div>
            
            <!-- Services Grid Section -->
            <div class="container mx-auto px-10"> 
              <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                  
                <!-- Form Pengaduan Card -->
                <a href="{{ url('/form')  }}" class="searchable-item" onclick="checkLogin(event)">
                  <div class="bg-white shadow-xl rounded-lg p-6">
                      <img src="assets/img/pengaduan.png" alt="Form Pengaduan" width="200" height="200" class="mx-auto">
                      <h3 class="mt-4 text-xl font-semibold text-center">Form Pengaduan</h3>
                  </div>
              </a>
              
              <!-- Overlay -->
              <div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-50 z-40"></div>

              <!-- Notifikasi -->
              <div id="notification" class="hidden fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg p-6 max-w-md mx-auto z-50">
                  <div class="absolute top-0 right-0 transform translate-y-[-50%] translate-x-[50%] bg-blue-500 rounded-full p-2 cursor-pointer" onclick="hideNotification()">
                      <i class="fas fa-times text-white"></i>
                  </div>
                  <h2 class="text-xl font-semibold text-center mb-4">Login dulu Dips!</h2>
                  <p class="text-center text-gray-600 mb-6">
                      Untuk mengakses layanan formulir pengaduan, silakan login terlebih dahulu agar kami dapat memproses laporan dengan cepat dan aman.
                  </p>
                  <div class="flex justify-center space-x-4">
                      <a href="{{ url('/loginuser') }}" class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg">Login</a>
                      <button class="bg-blue-100 text-blue-600 font-semibold py-2 px-4 rounded-lg" onclick="hideNotification()">Kembali</button>
                  </div>
              </div>

                <!-- Lacak Tiket Card -->
                <a href="{{ url('/track') }}" class="searchable-item">
                  <div class="bg-white shadow-xl rounded-lg p-6">
                    <img src="assets/img/lacaktiket.png" alt="Lacak Tiket" width="200" height="200" class="mx-auto">
                    <h3 class="mt-4 text-xl font-semibold text-center">Lacak Tiket</h3>
                  </div>
                </a>

                <!-- Riwayat Card -->
                <div class="searchable-item">
                  <div class="bg-white shadow-xl rounded-lg p-6">
                    <img src="assets/img/akademik.png" alt="Akademik" width="200" height="200" class="mx-auto">
                    <h3 class="mt-4 text-xl font-semibold text-center">Riwayat</h3>
                  </div>
                </div>

                <!-- Administrasi Card -->
                <div class="searchable-item">
                  <div class="bg-white shadow-xl rounded-lg p-6">
                    <img src="assets/img/adminstrasi.png" alt="Administrasi" width="200" height="200" class="mx-auto">
                    <h3 class="mt-4 text-xl font-semibold text-center">Administrasi</h3>
                  </div>
                </div>

                <!-- IT Support Card -->
                <div class="searchable-item">
                  <div class="bg-white shadow-xl rounded-lg p-6">
                    <img src="assets/img/itsupport.png" alt="IT Support" width="200" height="200" class="mx-auto">
                    <h3 class="mt-4 text-xl font-semibold text-center">IT Support</h3>
                  </div>
                </div>

                <!-- Kemahasiswaan Card -->
                <div class="searchable-item">
                  <div class="bg-white shadow-xl rounded-lg p-6">
                    <img src="assets/img/kemahasiswaan.png" alt="Kemahasiswaan" width="200" height="200" class="mx-auto">
                    <h3 class="mt-4 text-xl font-semibold text-center">Kemahasiswaan</h3>
                  </div>
                </div>
              </div>
            </div>     
        </section>

        <!-- About Section -->
        <section id="tentang" class="mt-20 text-center">
            <h2 class="text-5xl font-bold text-center">Kenali kami lebih dekat</h2>
            
            <!-- Decorative Line -->
            <div class="mt-6">
                <img 
                    src="assets/img/line.png" 
                    alt="Line" 
                    class="mx-auto"
                    style="width: 10%;"
                >
            </div>
            
            <!-- About Content -->
            <div class="flex items-center justify-between mt-6 px-40">
              <!-- Text content -->
              <div class="max-w-3xl">
                <h1 class="text-2xl text-justify max-w-full font-bold">Selamat datang di DipoHelp,<br> Pusat Bantuan Resmi Universitas Diponegoro (UNDIP)!</h1>
                <p class="text-xl text-justify max-w-full mt-4">
                  DipoHelp dirancang untuk memberikan solusi cepat dan tepat bagi seluruh sivitas akademika UNDIP,
                  mulai dari mahasiswa, dosen, hingga tenaga kependidikan. Kami hadir sebagai layanan digital yang
                  mempermudah akses informasi dan membantu menjawab berbagai pertanyaan serta menyelesaikan
                  permasalahan yang sering dihadapi di lingkungan kampus.
                </p>
              </div>
            
              <!-- Image/Logo on the right -->
              <div class="flex-shrink-0"> <!-- You can try ml-1 or remove this class to get even closer -->
                <img src="assets/img/dipohelp_logo.png" alt="DipoHelp" width="300" height="300" class="object-contain">
              </div>
            </div>
            
            <a 
                href="https://www.undip.ac.id/" 
                target="_blank" 
                rel="noopener noreferrer"
            >
                <button class="bg-blue-500 text-xl text-white px-6 py-3 rounded-xl mt-4">
                    Kunjungi UNDIP
                </button>
            </a>
        </section>

        <!-- Articles Section -->
      <section id="artikel" class="mt-20">
        <h2 class="text-5xl font-bold text-center">Artikel Pilihan</h2>
        <div class="mt-6">
          <img src="assets/img/line.png" alt="Line" style="width: 10%; margin-left: auto; margin-right: auto;">
        </div>
        <div class="mt-6 overflow-x-auto no-scrollbar"  id="scroll-container">
          <div id="artikel-container" class="flex gap-6"></div>
        </div>
        
      </section>
      
      <script>
        // Data artikel yang akan ditampilkan
        const artikelData = [
          {
            tanggal: "Jan 2",
            judul: "Pengambilan Kartu Tanda Mahasiswa (KTM) Baru",
            deskripsi:
              "Mahasiswa baru tahun akademik 2024/2025 dapat mengambil Kartu Tanda Mahasiswa (KTM) di Biro Administrasi Kampus mulai 5 Januari hingga.",
          },
          {
            tanggal: "Feb 15",
            judul: "Pendaftaran Beasiswa Semester Genap 2024",
            deskripsi:
              "Segera daftar beasiswa untuk semester genap tahun akademik 2024 sebelum tanggal 20 Februari.",
          },
          {
            tanggal: "Mar 1",
            judul: "Informasi Wisuda Periode Maret",
            deskripsi:
              "Wisuda untuk periode Maret 2024 akan dilaksanakan di Auditorium pada tanggal 15 Maret.",
          },
          {
            tanggal: "Mar 1",
            judul: "Informasi Wisuda Periode Maret",
            deskripsi:
              "Wisuda untuk periode Maret 2024 akan dilaksanakan di Auditorium pada tanggal 15 Maret.",
          },
          {
            tanggal: "Mar 1",
            judul: "Informasi Wisuda Periode Maret",
            deskripsi:
              "Wisuda untuk periode Maret 2024 akan dilaksanakan di Auditorium pada tanggal 15 Maret.",
          },
          {
            tanggal: "Mar 1",
            judul: "Informasi Wisuda Periode Maret",
            deskripsi:
              "Wisuda untuk periode Maret 2024 akan dilaksanakan di Auditorium pada tanggal 15 Maret.",
          },
          {
            tanggal: "Mar 1",
            judul: "Informasi Wisuda Periode Maret",
            deskripsi:
              "Wisuda untuk periode Maret 2024 akan dilaksanakan di Auditorium pada tanggal 15 Maret.",
          },
        
        ];
      
        // Elemen kontainer untuk artikel
        const artikelContainer = document.getElementById("artikel-container");
      
        // Fungsi untuk membuat elemen artikel
        const createArtikelCard = (data) => {
          return `
            <div class="bg-white shadow rounded p-8 min-w-[400px]">
              <div class="flex items-center">
                <i class="fas fa-calendar-alt text-gray-500"></i>
                <span class="ml-2 text-gray-500">${data.tanggal}</span>
              </div>
              <h3 class="mt-4 text-xl font-semibold">${data.judul}</h3>
              <p class="mt-2 text-xl text-gray-600">${data.deskripsi}</p>
            </div>
          `;
        };
      
        // Generate artikel secara otomatis
        artikelData.forEach((artikel) => {
          artikelContainer.innerHTML += createArtikelCard(artikel);
        });
      </script>      

      <!-- FAQ Section -->
      <title>FAQ Dropdown</title>
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <script>
        // Fungsi untuk mengubah status dropdown
        function toggleFaq(faq) {
          const content = faq.querySelector('.faq-content');
          const icon = faq.querySelector('i');
          content.classList.toggle('hidden');
          icon.classList.toggle('rotate-180');
        }
      </script>
    </head>
    <body class="p-6">
      <section class="mt-16">
        <h2 class="text-3xl font-bold">Pertanyaan yang sering diajukan</h2>
        <div class="mt-6">
          <img src="assets/img/line.png" alt="Line" style="width: 10%; margin-left: auto; margin-right: auto;">
        </div>

        <div class="faq-item bg-white shadow-lg rounded-lg p-6 transition-all duration-300 ease-in-out mb-4 mx-12" onclick="toggleFaq(this)">
          <div class="flex justify-between items-center">
            <h3 class="font-semibold">Bagaimana cara mengakses dan menggunakan akun SSO kampus?</h3>
            <i class="fas fa-chevron-down text-gray-500 transition-transform"></i>
          </div>
          <div class="faq-content mt-4 text-gray-600 hidden max-h-0 overflow-hidden text-left transition-all duration-500 ease-in-out">
            <p>
              Setelah menerima data akun dari universitas, Anda dapat login menggunakan NIM dan password yang diberikan. Jika mengalami kendala, coba reset password atau hubungi IT Support.
            </p>
            <a 
              href="https://ft.undip.ac.id/wp-content/uploads/Manual-SSO-Single-Sign-On-Undip-2021_.pdf" 
              target="_blank" 
              rel="noopener noreferrer"
            >
              <button class="bg-blue-500 text-white px-4 py-2 rounded-xl mt-4">
                Learn more
              </button>
            </a>
          </div>
        </div>
        
        <div class="faq-item bg-white shadow-lg rounded-lg p-6 transition-all duration-300 ease-in-out mb-4 mx-12" onclick="toggleFaq(this)">
          <div class="flex justify-between items-center">
            <h3 class="font-semibold">Bagaimana cara mengakses dan menggunakan akun SSO kampus?</h3>
            <i class="fas fa-chevron-down text-gray-500 transition-transform"></i>
          </div>
          <div class="faq-content mt-4 text-gray-600 hidden max-h-0 overflow-hidden text-left transition-all duration-500 ease-in-out">
            <p>
              Setelah menerima data akun dari universitas, Anda dapat login menggunakan NIM dan password yang diberikan. Jika mengalami kendala, coba reset password atau hubungi IT Support.
            </p>
            <a 
              href="https://ft.undip.ac.id/wp-content/uploads/Manual-SSO-Single-Sign-On-Undip-2021_.pdf" 
              target="_blank" 
              rel="noopener noreferrer"
            >
              <button class="bg-blue-500 text-white px-4 py-2 rounded-xl mt-4">
                Learn more
              </button>
            </a>
          </div>
        </div>
        
        <div class="faq-item bg-white shadow-lg rounded-lg p-6 transition-all duration-300 ease-in-out mb-4 mx-12" onclick="toggleFaq(this)">
          <div class="flex justify-between items-center">
            <h3 class="font-semibold">Bagaimana cara mengakses dan menggunakan akun SSO kampus?</h3>
            <i class="fas fa-chevron-down text-gray-500 transition-transform"></i>
          </div>
          <div class="faq-content mt-4 text-gray-600 hidden max-h-0 overflow-hidden text-left transition-all duration-500 ease-in-out">
            <p>
              Setelah menerima data akun dari universitas, Anda dapat login menggunakan NIM dan password yang diberikan. Jika mengalami kendala, coba reset password atau hubungi IT Support.
            </p>
            <a 
              href="https://ft.undip.ac.id/wp-content/uploads/Manual-SSO-Single-Sign-On-Undip-2021_.pdf" 
              target="_blank" 
              rel="noopener noreferrer"
            >
              <button class="bg-blue-500 text-white px-4 py-2 rounded-xl mt-4">
                Learn more
              </button>
            </a>
          </div>
        </div>  
      </section>
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
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
          anchor.addEventListener('click', function (e) {
              e.preventDefault();
              
              const target = document.querySelector(this.getAttribute('href'));
              const offset = 80; // Sesuaikan nilai offset sesuai kebutuhan

              window.scrollTo({
                  top: target.offsetTop - offset, // Menambahkan offset untuk menggulung lebih rendah
                  behavior: 'smooth'
              });
          });
      });
    </script>

    <script>document.getElementById('scroll-container').addEventListener('wheel', function(e) {
      // Hanya melakukan scroll horizontal jika wheel scroll dilakukan secara horizontal
      if (e.deltaY !== 0) {
        e.preventDefault();
        this.scrollLeft += e.deltaY; // scroll horizontal
      }
    });
    </script>

    <script>
      // Fungsi untuk mengubah status dropdown dengan efek smooth
      function toggleFaq(faq) {
        const content = faq.querySelector('.faq-content');
        const icon = faq.querySelector('i');
        content.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');

        // Menambahkan efek smooth pada dropdown
        if (!content.classList.contains('hidden')) {
          content.style.maxHeight = content.scrollHeight + "px"; // untuk efek smooth
        } else {
          content.style.maxHeight = 0; // Menyembunyikan konten secara halus
        }
      }
    </script>

    <script>
    function checkEnter(event) {
        if (event.key === 'Enter') {
          searchAndScroll();  // Panggil fungsi pencarian ketika Enter ditekan
        }
      }

    function searchAndScroll() {
        // Get the search input and cards
        const searchInput = document.getElementById('searchInput').value.toLowerCase();
        const items = document.querySelectorAll('.searchable-item');
        let found = false;

        // Loop through all items to find a match
        items.forEach(item => {
            const text = item.textContent.toLowerCase();
            if (text.includes(searchInput)) {
                // If it matches, highlight it and scroll to it if it's the first match
                item.style.display = "block"; // Ensure the item is visible
                if (!found) {
                    item.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    found = true;
                }
            } else {
                // Items that don't match remain visible
                item.style.display = "block";
            }
        });
    }
    </script>

    <script>
      function checkLogin(event) {
          event.preventDefault(); // Mencegah link default
          @if (!Auth::check())
              // Tampilkan overlay dan notifikasi
              const overlay = document.getElementById('overlay');
              const notification = document.getElementById('notification');
              overlay.classList.remove('hidden');
              notification.classList.remove('hidden');
              overlay.classList.add('block');
              notification.classList.add('block');
          @else
              // Jika sudah login, arahkan ke form
              window.location.href = "{{ url('/form') }}";
          @endif
      }

      function hideNotification() {
          const overlay = document.getElementById('overlay');
          const notification = document.getElementById('notification');
          overlay.classList.remove('block');
          overlay.classList.add('hidden');
          notification.classList.remove('block');
          notification.classList.add('hidden');
      }
    </script>

<style>
  /* Tambahkan gaya untuk overlay */
  #overlay {
      display: none; /* Sembunyikan overlay secara default */
  }
  #overlay.block {
      display: block; /* Tampilkan overlay ketika diperlukan */
  }
</style>

 </body>
</html>