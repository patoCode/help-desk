<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Technician extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'user_id' => 'integer',
        ];
    }

    public function technicianQueues(): HasMany
    {
        return $this->hasMany(TechnicianQueue::class);
    }

    public function ticketEvents(): HasMany
    {
        return $this->hasMany(TicketEvents::class);
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
