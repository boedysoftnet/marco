<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Config extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $casts=[
        'juduls'=>'array',
        'deskripsis'=>'array',
    ];
    protected $guarded = [];

    public function scopeSlug($query, $slug)
    {
        return $query->whereSlug($slug)->first();
    }
}
