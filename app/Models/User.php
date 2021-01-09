<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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
}
