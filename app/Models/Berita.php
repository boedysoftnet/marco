<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Berita extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $casts = [
        'juduls' => 'array',
        'deskripsis' => 'array',
        'gallerys' => 'array',
    ];
    protected $guarded = [];
    public function kategoriBerita(){
        return $this->belongsTo(KategoriBerita::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getPathAttribute(){
        return asset('storage/'.$this->attributes['path']);
    }
}
