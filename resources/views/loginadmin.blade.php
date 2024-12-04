<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="icon" href="assets/img/dipohelp_bg.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-blue-100 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg p-8 md:p-16 flex flex-col md:flex-row items-center justify-center md:space-x-16">
        <!-- Left Section: Image -->
        <div class="mb-8 md:mb-0 flex justify-center">
            <img src="assets/img/loginlogo.png" alt="Illustration of a person with a laptop and a shield with a lock in front of a computer screen" class="w-64 h-64" />
        </div>

        <!-- Right Section: Login Form -->
        <div class="w-full max-w-md">
            <h1 class="text-3xl font-bold mb-4">Welcome Dips!</h1>
            <div class="flex space-x-4 mb-4">
                <!-- Pengguna Button -->
                <a href="loginuser" class="flex items-center justify-center w-1/2 py-2 border border-blue-500 text-blue-500 rounded-lg hover:bg-blue-300">
                    <i class="fas fa-user-tie mr-2"></i> Pengguna
                </a>

                <!-- Admin Button with redirection -->
                <a href="loginadmin" class="flex items-center justify-center w-1/2 py-2 border border-blue-500 text-blue-500 rounded-lg bg-blue-100 hover:bg-blue-300">
                    <i class="fas fa-user-shield mr-2"></i> Admin
                </a>
            </div>

            <p class="text-gray-600 mb-4">
                Gunakan Email dan Password yang sudah didaftarkan untuk mengakses layanan
            </p>

            <!-- Email Input -->
            <div class="mb-4">
                <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Email" type="email"/>
            </div>

            <!-- Password Input -->
            <div class="mb-4 relative">
                <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Password" type="password"/>
                <i class="fas fa-eye absolute right-3 top-3 text-gray-500"></i>
            </div>

            <!-- Login Button -->
            <button class="w-full py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                LOGIN
            </button>

            <!-- Back to Home Link -->
            <p class="text-center text-gray-600 mt-4">
                <a class="underline" href="/">Kembali ke halaman utama</a>
            </p>
        </div>
    </div>
</body>
</html>
