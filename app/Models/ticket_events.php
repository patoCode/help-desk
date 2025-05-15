<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TicketEvents extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ticket_id',
        'event',
        'in_status',
        'category_id',
        'queue_id',
        'technician_id',
        'user_id',
        'in_cronograma',
        'is_promediable',
        'fecha_reg',
        'user_reg',
        'status',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'ticket_id' => 'integer',
            'category_id' => 'integer',
            'queue_id' => 'integer',
            'technician_id' => 'integer',
            'user_id' => 'integer',
            'in_cronograma' => 'boolean',
            'is_promediable' => 'boolean',
            'fecha_reg' => 'timestamp',
        ];
    }

    public function ticketFiles(): HasMany
    {
        return $this->hasMany(TicketFile::class);
    }

    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function queue(): BelongsTo
    {
        return $this->belongsTo(Queue::class);
    }

    public function technician(): BelongsTo
    {
        return $this->belongsTo(Technician::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
