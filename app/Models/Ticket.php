<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'no_induk',
        'no_telepon',
        'description',
        'attachment',
        'category',
        'user_id',
    ];

    protected $dates = ['created_at', 'deleted_at'];

    /**
     * Relasi ke User (yang membuat tiket)
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relasi ke Report
     */
    public function report(): HasMany
    {
        return $this->hasMany(Report::class, 'ticket_id');
    }

    /**
     * Event untuk menangani pembuatan nomor tiket otomatis
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($ticket) {
            $date = now()->format('Ymd');
            $lastTicket = self::whereDate('created_at', now()->toDateString())
                                ->latest('id')
                                ->first();

            $sequence = $lastTicket ? intval(substr($lastTicket->ticket_number, -3)) + 1 : 1;

            $ticket->ticket_number = $date . '-' . str_pad($sequence, 3, '0', STR_PAD_LEFT);
        });
    }
}
