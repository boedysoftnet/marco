<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriService extends Model
{
    use HasFactory;

    protected $casts = [
        'kategoris' => 'array',
        'deskripsis' => 'array',
    ];
    protected $guarded = [];

    public function getIconAttribute()
    {
        return asset('storage/' . $this->attributes['icon']);
    }

    public function getPathAttribute()
    {
        return asset('storage/' . $this->attributes['path']);
    }

    public function service()
    {
        return $this->hasMany(Sosmed::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function request()
    {
        return $this->hasMany(Request::class);
    }
}
