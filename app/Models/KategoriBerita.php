<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    use HasFactory;
    protected $casts=[
        'kategoris'=>'array'
    ];
    protected $guarded=[];
    public function getPathAttribute(){
        if ($this->attributes['path']) {
            return asset('storage/'.$this->attributes['path']);
        }else{
            return "https://www.flaticon.com/svg/static/icons/svg/3342/3342207.svg";
        }
    }
}
