<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'detail',
        'type',
        'category_id',
        'queue_id',
        'from_user',
        'technician_id',
        'in_cronograma',
        'is_promediable',
        'fecha_reg',
        'now_is',
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
            'category_id' => 'integer',
            'queue_id' => 'integer',
            'from_user' => 'integer',
            'technician_id' => 'integer',
            'in_cronograma' => 'boolean',
            'is_promediable' => 'boolean',
            'fecha_reg' => 'timestamp',
        ];
    }

    public function ticketEvents(): HasMany
    {
        return $this->hasMany(TicketEvents::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function queue(): BelongsTo
    {
        return $this->belongsTo(Queue::class);
    }

    public function fromUser(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function technician(): BelongsTo
    {
        return $this->belongsTo(Technician::class);
    }
}
