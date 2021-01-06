<?php

namespace App\Http\Controllers;

use App\Models\Lang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function setLeng(Lang $lang){
        Session::put('lang',$lang->slug);
        return redirect()->back();
    }
}
