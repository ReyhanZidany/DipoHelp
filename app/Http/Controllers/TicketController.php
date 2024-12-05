<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function create()
    {
        return view('form'); // Ganti dengan nama view yang sesuai
    }

    public function store(Request $request)
    {
        // Validasi Input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'no_induk' => 'required|string|max:50',
            'no_telepon' => 'required|string|max:15',
            'description' => 'required|string',
            'attachment' => 'nullable|file|max:5120', // Max 5MB
            'category' => 'required|in:Akademik,Keuangan,IT Support,Fasilitas,Kemahasiswaan,Lainnya',
        ]);

        // Simpan Data ke Database
        $ticket = Ticket::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'no_induk' => $validated['no_induk'],
            'no_telepon' => $validated['no_telepon'],
            'description' => $validated['description'],
            'attachment' => $request->hasFile('attachment') ? $request->file('attachment')->store('attachments', 'public') : null,
            'category' => $validated['category'],
            'user_id' => Auth::id(),
            'status' => 'Unsolve',
        ]);

        return redirect()->route('tickets.create')->with('success', 'Laporan Anda Berhasil Dikirim');
    }

    public function index()
    {
        $tickets = Ticket::all(); // Ambil semua data pengaduan
        return view('homeadmin', compact('tickets'));
    }

    public function homeadmin()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Anda harus login untuk mengakses halaman ini.');
        }

        $totalReports = Ticket::count();
        $totalSolvedReports = Ticket::where('status', 'Solved')->count();
        $totalUnsolvedReports = Ticket::where('status', 'Unsolve')->count(); // Total laporan masuk

        return view('homeadmin', compact('user', 'totalReports', 'totalSolvedReports', 'totalUnsolvedReports'));
    }

    public function report()
    {
        // Ambil semua laporan
        $reports = Ticket::paginate(10); // Mengambil laporan dengan pagination

        return view('report', compact('reports'));
    }

    public function show($id)
    {
    $ticket = Ticket::findOrFail($id);
    $user = Auth::user(); // Ambil pengguna yang sedang login
    return view('detail', compact('ticket', 'user')); // Kirim variabel ke tampilan
    }

    public function update(Request $request, $id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->status = 'solved'; // Atau status lain sesuai kebutuhan
        $ticket->save();

        return redirect()->route('report')->with('success', 'Tiket berhasil diperbarui menjadi solved.');
    }
    public function track(Request $request)
    {
    $request->validate([
        'ticket_number' => 'required|string',
    ]);

    // Mencari tiket berdasarkan nomor tiket
    $ticket = Ticket::where('ticket_number', $request->ticket_number)->first();

    if (!$ticket) {
        return response()->json(['message' => 'Tiket tidak ditemukan.'], 404);
    }

    return response()->json($ticket);
    }
} 