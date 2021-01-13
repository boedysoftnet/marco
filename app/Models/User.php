<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    protected $guarded=[];

    public function config()
    {
        return $this->hasMany(Config::class);
    }
    public function story()
    {
        return $this->hasMany(Story::class);
    }
    public function dokter()
    {
        return $this->hasMany(Dokter::class);
    }
    public function service()
    {
        return $this->hasMany(Service::class);
    }
    public function kategoriService()
    {
        return $this->hasMany(KategoriService::class);
    }
    public function fasilitas()
    {
        return $this->hasMany(Fasilitas::class);
    }
    public function kategoriBerita()
    {
        return $this->hasMany(KategoriBerita::class);
    }
    public function berita()
    {
        return $this->hasMany(Berita::class);
    }
    public function benner()
    {
        return $this->hasMany(Benner::class);
    }
    public function getPathAttribute()
    {
        if ($this->attributes['path']){
            return asset('storage/'.$this->attributes['path']);
        }else{
            return "https://www.flaticon.com/svg/static/icons/svg/3135/3135715.svg";
        }
    }
}
