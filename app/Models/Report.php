<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = true;

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'ticket_id',
        'status',
        'penanggung_jawab',
        'estimasi',
        'tindak_lanjut',
        'catatan_tambahan',
    ];

    // Kolom tanggal yang akan di-cast ke datetime
    protected $dates = ['deleted_at'];

    /**
     * Relasi ke Ticket
     */
    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class, 'ticket_id');
    }
}
