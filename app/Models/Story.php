<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $casts = [
        'juduls' => 'array',
        'deskripsis' => 'array',
    ];
    protected $guarded = [];

    public function getPathAttribute()
    {
        return asset("storage/" . $this->attributes['path']);
    }
}
