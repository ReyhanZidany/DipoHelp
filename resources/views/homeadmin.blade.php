<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Dashboard</title>
    <link rel="icon" href="assets/img/dipohelp_bg.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-md">
            <div class="p-4 flex flex-col items-center">
                <img alt="Profile picture of the admin" class="rounded-full mb-4" height="100" src="assets/img/dipohelp_bg.png" width="100"/>
                <div class="text-center">
                    <h2 class="text-lg font-semibold">{{ $user->name }}</h2>
                    <p class="text-gray-500">{{ $user->email }}</p>
                </div>
            </div>
            <nav class="mt-8">
                <a class="flex items-center px-4 py-2 text-blue-600 bg-blue-100 rounded-lg" href="{{ url('/homeadmin') }}">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a class="flex items-center px-4 py-2 mt-2 text-gray-500 hover:bg-gray-200 rounded-lg" href="{{ route('report') }}">
                    <i class="fas fa-chart-line mr-3"></i>
                    Reports
                </a>
            </nav>
            <div class="mt-auto p-4">
                <a class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-200 rounded-lg" href="{{ url('loginadmin') }}">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Logout
                </a>
            </div>
        </div>
        <!-- Main Content -->
        <div class="flex-1 p-6">
            <h1 class="text-2xl font-bold mb-6">Dashboard</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <i class="fas fa-file-alt text-blue-500 text-3xl mr-4"></i>
                        <div>
                            <h3 class="text-lg font-semibold">Laporan Masuk</h3>
                            <p class="text-2xl font-bold">{{ $totalReports }}</p> <!-- Total laporan masuk -->
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-green-500 text-3xl mr-4"></i>
                        <div>
                            <h3 class="text-lg font-semibold">Laporan Selesai</h3>
                            <p class="text-2xl font-bold">{{ $totalSolvedReports }}</p> <!-- Total laporan selesai -->
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <i class="fas fa-times-circle text-red-500 text-3xl mr-4"></i>
                        <div>
                            <h3 class="text-lg font-semibold">Laporan Belum Selesai</h3>
                            <p class="text-2xl font-bold">{{ $totalUnsolvedReports }}</p> <!-- Total laporan belum selesai -->
                        </div>
                    </ ```html
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>