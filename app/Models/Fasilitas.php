<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    protected $casts=[
      'fasilitas'=>'array',
      'gallerys'=>'array',
      'deskripsis'=>'array',
    ];
    protected $guarded=[];
    public function getPathAttribute(){
        return asset('storage/'.$this->attributes['path']);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
