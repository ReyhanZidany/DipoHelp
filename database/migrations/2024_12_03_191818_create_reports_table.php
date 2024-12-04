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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ticket_id');
            $table->enum('status', ['Open', 'Checking', 'In Progress', 'Resolved', 'Rejected'])->default('Open');
            $table->string('penanggung_jawab');
            $table->string('estimasi');
            $table->text('tindak_lanjut');
            $table->text('catatan_tambahan')->nullable();
            $table->timestamps();
        
            $table->foreign('ticket_id')->references('id')->on('tickets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
