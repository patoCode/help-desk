<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'code',
        'icon',
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
        ];
    }

    public function userCategories(): HasMany
    {
        return $this->hasMany(UserCategory::class);
    }

    public function categoryQueues(): HasMany
    {
        return $this->hasMany(CategoryQueue::class);
    }

    public function categoryTenants(): HasMany
    {
        return $this->hasMany(CategoryTenant::class);
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function ticketEvents(): HasMany
    {
        return $this->hasMany(TicketEvents::class);
    }
    public function tenants()
    {
        return $this->belongsToMany(Tenant::class, 'category_tenants')
            ->withPivot('is_public', 'status');
    }
}
