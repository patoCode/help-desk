<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ConfigurationsHistory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'config_old',
        'json_old',
        'json_new',
        'user_reg',
        'fecha_reg',
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
            'config_old' => 'integer',
            'fecha_reg' => 'timestamp',
        ];
    }

    public function configOld(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Configurations::class);
    }
}
