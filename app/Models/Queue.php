<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Queue extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'last_assign',
        'technician_counter',
        'is_cronogramable',
        'is_promediable',
        'priority',
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
            'is_cronogramable' => 'boolean',
            'is_promediable' => 'boolean',
        ];
    }

    public function technicianQueues(): HasMany
    {
        return $this->hasMany(TechnicianQueue::class);
    }

    public function categoryQueues(): HasMany
    {
        return $this->hasMany(CategoryQueue::class);
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function ticketEvents(): HasMany
    {
        return $this->hasMany(TicketEvents::class);
    }
}
