<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TechnicianQueue extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'technician_id',
        'queue_id',
        'position',
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
            'technician_id' => 'integer',
            'queue_id' => 'integer',
        ];
    }

    public function technician(): BelongsTo
    {
        return $this->belongsTo(Technician::class);
    }

    public function queue(): BelongsTo
    {
        return $this->belongsTo(Queue::class);
    }
}
