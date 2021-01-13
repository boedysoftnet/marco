<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Benner extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $casts=[
      'gallerys'=>'array',
      'juduls'=>'array',
      'deskripsis'=>'array',
    ];
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getPathAttribute(){
        return asset('storage/'.$this->attributes['path']);
    }
}
