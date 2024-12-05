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
            $table->id(); 
            $table->string('ticket_number')->unique()->index(); 
            $table->string('name'); 
            $table->string('email'); 
            $table->string('no_induk'); 
            $table->string('no_telepon', 15); 
            $table->text('description'); 
            $table->string('attachment')->nullable(); 
            $table->enum('category', ['Akademik', 'Keuangan', 'IT Support', 'Fasilitas', 'Kemahasiswaan', 'Lainnya']); // Kategori pengaduan
            $table->unsignedBigInteger('user_id'); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->timestamps(); 
            $table->softDeletes(); 
            $table->enum('status', ['Solved', 'Unsolve'])->default('Unsolve');
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
