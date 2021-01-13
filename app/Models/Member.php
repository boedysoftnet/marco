<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $casts = ['keluargas' => 'array'];
    protected $guarded = [];

    public function getBerkasAttribute()
    {
        return asset('storage/' . $this->attributes['berkas']);
    }

    public function getPathAttribute()
    {
        if ($this->attributes['path']) {
            return asset('storage/' . $this->attributes['path']);
        } else {
            return "https://www.flaticon.com/svg/vstatic/svg/860/860784.svg?token=exp=1610509698~hmac=205f5c7306759e982a85dc629b1f5f52";
        }
    }
}
