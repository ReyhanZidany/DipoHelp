<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('ticket_number')->unique()->index(); // Nomor tiket unik
            $table->string('name'); // Nama pengguna
            $table->string('email'); // Email pengguna
            $table->string('no_induk'); // Nomor induk pengguna
            $table->string('no_telepon', 15); // Nomor telepon pengguna
            $table->text('description'); // Deskripsi pengaduan
            $table->string('attachment')->nullable(); // Lampiran opsional
            $table->enum('category', ['Akademik', 'Keuangan', 'IT Support', 'Fasilitas', 'Kemahasiswaan', 'Lainnya']); // Kategori pengaduan
            $table->unsignedBigInteger('user_id'); // Relasi ke tabel users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Relasi dengan foreign key
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
            $table->softDeletes(); // Menambahkan kolom deleted_at untuk soft delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets'); // Menghapus tabel
    }
};
