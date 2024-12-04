<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Lacak Status Pengaduan</title>
    <link rel="icon" href="assets/img/dipohelp_bg.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-white text-gray-800 scroll-smooth">
    <!-- Header -->
    <header class="flex justify-between items-center p-4">
        <!-- Logo Section -->
        <div class="flex items-center ml-4">
            <a href="/">
                <img src="assets/img/dipohelp_logo.png" alt="DipoHelp logo" width="90" height="90" class="h-15">
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

    <main class="text-center mt-16">
        <h1 class="text-3xl font-bold">Lacak Status Pengaduan di Sini</h1>
        <p class="text-xl text-gray-600 mt-4 max-w-4xl mx-auto">
            Selamat datang di halaman Lacak Tiket Pengaduan! Masukkan nomor tiket pengaduan pada kolom yang tersedia untuk mendapatkan informasi terkini mengenai perkembangan pengaduan dips.
        </p>
        <div class="mt-4">
            <div class="inline-block w-24 h-1 bg-blue-600"></div>
        </div>
        <div class="inline-block w-full max-w-xl p-6 bg-white rounded-lg shadow-md mt-6">
            <input
                id="ticketNumber"
                class="w-full p-4 border rounded-lg mb-4 text-center"
                placeholder="Masukkan nomor tiket disini"
                type="text"
            />
            <button
                id="trackButton"
                class="w-full bg-blue-500 text-white py-3 rounded-lg"
            >
                Lacak Tiket
            </button>
        </div>
        
        <div
            id="trackingProcess"
            class="bg-white shadow-md border rounded-lg p-6 mt-10 hidden"
        >
    <h2 class="text-center text-xl font-semibold mb-4">Tracking Process</h2>
      <div class="text-center mb-6">
        <input
            id="displayTicketNumber"
            type="text"
            value=""
            class="text-center p-2 border border-gray-300 rounded-lg"
            readonly
        />
    </div>
    <div class="flex items-center justify-between">
        <div class="text-center">
            <div class="flex items-center justify-center mb-2">
                <i class="fas fa-edit text-blue-500 text-2xl"></i>
            </div>
            <p class="text-blue-500">Pengaduan</p>
        </div>
        <div class="flex-1 h-1 bg-blue-500"></div>
        <div class="text-center">
            <div class="flex items-center justify-center mb-2">
                <i class="fas fa-bell text-green-500 text-2xl"></i>
            </div>
            <p class="text-green-500">Pengecekan</p>
        </div>
        <div class="flex-1 h-1 bg-gray-300"></div>
        <div class="text-center">
            <div class="flex items-center justify-center mb-2">
                <i class="fas fa-hourglass-half text-gray-300 text-2xl"></i>
            </div>
            <p class="text-gray-300">Sedang Diproses</p>
        </div>
        <div class="flex-1 h-1 bg-gray-300"></div>
        <div class="text-center">
            <div class="flex items-center justify-center mb-2">
                <i class="fas fa-check text-gray-300 text-2xl"></i>
            </div>
            <p class="text-gray-300">Selesai</p>
        </div>
    </div>
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
        document.getElementById("trackButton").addEventListener("click", function () {
            // Ambil nomor tiket dari input
            const ticketNumber = document.getElementById("ticketNumber").value;
    
            // Validasi input
            if (!ticketNumber.trim()) {
                alert("Masukkan nomor tiket terlebih dahulu!");
                return;
            }
    
            // Tampilkan proses tracking
            const trackingProcess = document.getElementById("trackingProcess");
            trackingProcess.classList.remove("hidden");
    
            // Tampilkan nomor tiket pada bagian tracking
            document.getElementById("displayTicketNumber").value = ticketNumber;
        });
    </script>
    
</body>
</html>