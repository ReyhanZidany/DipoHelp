<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Detail Tiket - {{ $ticket->ticket_number }}</title>
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
                <a class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-200 rounded-lg" href="{{ url('loginadmin') }}">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Logout
                </a>
            </div>
            <div class="p-9 mt-auto">
                <img alt="Dipo Help logo" height="50" src="assets/img/dipohelp_logo.png" width="100"/>
            </div>
        </div>
        <!-- Main Content -->
        <div class="flex-1 p-6">
            <h1 class="text-2xl font-bold mb-6">Detail Tiket - {{ $ticket->ticket_number }}</h1>
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-bold mb-4">Informasi Tiket</h2>
                <div class="space-y-4">
                    <div class="border border-gray-300 p-4 rounded-lg">
                        <strong>Nama Lengkap:</strong> {{ $ticket->name }}
                    </div>
                    <div class="border border-gray-300 p-4 rounded-lg">
                        <strong>Email:</strong> {{ $ticket->email }}
                    </div>
                    <div class="border border-gray-300 p-4 rounded-lg">
                        <strong>No Induk:</strong> {{ $ticket->no_induk }}
                    </div>
                    <div class="border border-gray-300 p-4 rounded-lg">
                        <strong>No Telepon:</strong> {{ $ticket->no_telepon }}
                    </div>
                    <div class="border border-gray-300 p-4 rounded-lg">
                        <strong>Kategori:</strong> {{ $ticket->category }}
                    </div>
                    <div class="border border-gray-300 p-4 rounded-lg">
                        <strong>Deskripsi:</strong> {{ $ticket->description }}
                    </div>
                    @if($ticket->attachment)
                        <div class="border border-gray-300 p-4 rounded-lg">
                            <strong>Attachment:</strong> <a href="{{ asset('storage/' . $ticket->attachment) }}" target="_blank" class="text-blue-500 hover:underline">Lihat File</a>
                        </div>
                    @endif
                    <div class="border border-gray-300 p-4 rounded-lg">
                        <strong>Status:</strong> 
                        <span class="{{ $ticket->status == 'Solved' ? 'text-green-800 bg-green-100' : 'text-blue-800 bg-blue-100' }} px-2 py-1 rounded-full">
                            {{ $ticket->status }}
                        </span>
                    </div>
                </div>
                <form action="{{ route('tickets.update', $ticket->id) }}" method="POST" class="mt-6">
                    @csrf
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition duration-200">Tandai sebagai Selesai</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>