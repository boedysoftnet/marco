<?php

use App\Http\Controllers\LangController;
use App\Http\Livewire\Backend\Config\DaftarConfig;
use App\Http\Livewire\Backend\Config\RegisterConfig;
use App\Http\Livewire\Backend\Lang\DaftarLang;
use App\Http\Livewire\Backend\Lang\RegisterLang;
use App\Http\Livewire\Front\Page\TheirOur;
use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'admin','as'=>'backend.'],function (){
    Route::view('','backend.layouts.index');
    Route::group(['prefix'=>'config','as'=>'config.'],function (){
        Route::get('daftar-config',DaftarConfig::class)->name('daftar-config');
        Route::get('register-config/{config}',RegisterConfig::class)->name('register-config');
    });
    Route::group(['prefix'=>'lang','as'=>'lang.'],function (){
        Route::get('daftar-lang',DaftarLang::class)->name('daftar-lang');
        Route::get('register-lang',RegisterLang::class)->name('register-lang');
        Route::get('edit-lang/{lang}',RegisterLang::class)->name('edit-lang');
    });
});
Route::group(['prefix'=>'','as'=>'front.'],function (){
    Route::view('','front.home.dashboard')->name('home');
    Route::get('lang-set/{lang:slug}',[LangController::class,'setLeng'])->name('set-lang');
    Route::get('{config:slug}',TheirOur::class)->name('page-config');
});


