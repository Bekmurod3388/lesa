<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes; // 👈 add SoftDeletes

    protected $fillable = [
        'name',
        'description',
        'cost',
        'unit',
        'service_owner_id',
        'status',
        'count',
    ];

    // Owner relationship
    public function owner()
    {
        return $this->belongsTo(User::class, 'service_owner_id');
    }

    // Clients using this service
    public function clients()
    {
        return $this->belongsToMany(Client::class, 'client_service')
                    ->withPivot('count', 'discount', 'is_active', 'user_id')
                    ->withTimestamps();
    }

    // Check if service is active
    public function isActive()
    {
        return $this->status === 'active';
    }
}
