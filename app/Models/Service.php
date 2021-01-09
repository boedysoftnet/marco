<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $casts = [
        'gallerys' => 'array',
        'deskripsis' => 'array',
        'juduls' => 'array',
        'kategoris' => 'array',
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
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function kategoriService(){
        return $this->belongsTo(KategoriService::class);
    }
}
