<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TicketController extends Controller
{
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

        // Handle File Upload
        $attachmentPath = null;
        if ($request->hasFile('attachment')) {
            $attachmentPath = $request->file('attachment')->store('attachments', 'public');
        }

        // Simpan Data ke Database
        $ticket = Ticket::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'no_induk' => $validated['no_induk'],
            'no_telepon' => $validated['no_telepon'],
            'description' => $validated['description'],
            'attachment' => $attachmentPath,
            'category' => $validated['category'],
            'user_id' => Auth::id(), // Pastikan pengguna sudah login
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pengaduan berhasil dikirim!');
    }
}
