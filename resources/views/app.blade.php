<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DipoHelp</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>
<body class="bg-white text-gray-800">
    <header class="flex justify-between items-center p-6">
        <div class="flex items-center">
            <img src="https://storage.googleapis.com/a1aa/image/2Aa2UyRUeN1RGa2spCXQSekxbA0QIwNcvBDuePWchbAesscPB.jpg" alt="DipoHelp logo" class="h-10" />
            <span class="ml-2 text-2xl font-bold">DipoHelp</span>
        </div>
        <nav class="space-x-6">
            <a href="#" class="text-gray-600 hover:text-gray-800">Layanan</a>
            <a href="#" class="text-gray-600 hover:text-gray-800">Tentang</a>
            <a href="#" class="text-gray-600 hover:text-gray-800">Artikel</a>
            <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded">Login</a>
        </nav>
    </header>
    <main class="text-center">
        @yield('content')
    </main>
    <footer class="bg-blue-500 text-white mt-16 p-6">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <img src="https://storage.googleapis.com/a1aa/image/2Aa2UyRUeN1RGa2spCXQSekxbA0QIwNcvBDuePWchbAesscPB.jpg" alt="DipoHelp logo" class="h-10" />
                <span class="ml-2 text-2xl font-bold">DipoHelp</span>
            </div>
        </div>
    </footer>
</body>
</html>
