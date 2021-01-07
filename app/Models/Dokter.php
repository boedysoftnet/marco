<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $casts=[
        'profiles'=>'array',
        'spesialis'=>'array',
        'jadwals'=>'array',
    ];

    protected $guarded=[];

    public function getPathAttribute(){
        if ($this->attributes['path']) {
            return asset('storage/'.$this->attributes['path']);
        }else{
            return 'https://www.flaticon.com/svg/static/icons/svg/607/607414.svg';
        }
    }
}
