<?php

use App\Http\Controllers\LangController;
use App\Http\Livewire\Backend\Benner\DaftarBenner;
use App\Http\Livewire\Backend\Benner\RegisterBenner;
use App\Http\Livewire\Backend\Berita\DaftarBerita;
use App\Http\Livewire\Backend\Berita\RegisterBerita;
use App\Http\Livewire\Backend\Config\DaftarConfig;
use App\Http\Livewire\Backend\Config\RegisterConfig;
use App\Http\Livewire\Backend\Dokter\DaftarDokter;
use App\Http\Livewire\Backend\Dokter\RegisterDokter;
use App\Http\Livewire\Backend\Fasilitas\DaftarFasilitas;
use App\Http\Livewire\Backend\Fasilitas\RegisterFasilitas;
use App\Http\Livewire\Backend\KategoriBerita\DaftarKategoriBerita;
use App\Http\Livewire\Backend\KategoriBerita\RegisterKategoriBerita;
use App\Http\Livewire\Backend\KategoriService\DaftarKategori;
use App\Http\Livewire\Backend\KategoriService\RegisterKategori;
use App\Http\Livewire\Backend\Lang\DaftarLang;
use App\Http\Livewire\Backend\Lang\RegisterLang;
use App\Http\Livewire\Backend\Service\DaftarService;
use App\Http\Livewire\Backend\Service\RegisterService;
use App\Http\Livewire\Backend\Sosmed\DaftarSosmed;
use App\Http\Livewire\Backend\Sosmed\RegisterSosmed;
use App\Http\Livewire\Backend\Story\DaftarStory;
use App\Http\Livewire\Backend\Story\RegisterStory;
use App\Http\Livewire\Backend\User\UpdateUser;
use App\Http\Livewire\Front\Dokter\ProfileDokter;
use App\Http\Livewire\Front\Member\EditMember;
use App\Http\Livewire\Front\Member\LoginMember;
use App\Http\Livewire\Front\Member\ProfileMember;
use App\Http\Livewire\Front\Page\FasilitasProfile;
use App\Http\Livewire\Front\Page\InfoBenner;
use App\Http\Livewire\Front\Page\ProfileBerita;
use App\Http\Livewire\Front\Page\ServiceInfo;
use App\Http\Livewire\Front\Page\TheirOur;
use App\Http\Livewire\Front\Penilaian\InfoPenilaian;
use App\Http\Livewire\Front\Service\ProfileService;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'backend.'], function () {
    Route::view('', 'backend.layouts.index')->name('dashboard');
    Route::group(['prefix' => 'config', 'as' => 'config.'], function () {
        Route::get('daftar-config', DaftarConfig::class)->name('daftar-config');
        Route::get('register-config/{config}', RegisterConfig::class)->name('register-config');
    });
    Route::group(['prefix' => 'lang', 'as' => 'lang.'], function () {
        Route::get('daftar-lang', DaftarLang::class)->name('daftar-lang');
        Route::get('register-lang', RegisterLang::class)->name('register-lang');
        Route::get('edit-lang/{lang}', RegisterLang::class)->name('edit-lang');
    });
    Route::group(['prefix' => 'story', 'as' => 'story.'], function () {
        Route::get('daftar-story', DaftarStory::class)->name('daftar-story');
        Route::get('register-story', RegisterStory::class)->name('register-story');
        Route::get('edit/{story}', RegisterStory::class)->name('edit-story');
    });
    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::get('daftar-user', DaftarStory::class)->name('daftar-user');
        Route::get('register-user', RegisterStory::class)->name('register-user');
        Route::get('edit/{user}', RegisterStory::class)->name('edit-user');
        Route::get('update', UpdateUser::class)->name('update-user');
    });
    Route::group(['prefix' => 'fasilitas', 'as' => 'fasilitas.'], function () {
        Route::get('daftar-fasilitas', DaftarFasilitas::class)->name('daftar-fasilitas');
        Route::get('register-fasilitas', RegisterFasilitas::class)->name('register-fasilitas');
        Route::get('edit/{fasilitas}', RegisterFasilitas::class)->name('edit-fasilitas');
    });
    Route::group(['prefix' => 'dokter', 'as' => 'dokter.'], function () {
        Route::get('daftar-dokter', DaftarDokter::class)->name('daftar-dokter');
        Route::get('register-dokter', RegisterDokter::class)->name('register-dokter');
        Route::get('edit/{dokter}', RegisterDokter::class)->name('edit-dokter');
    });
    Route::group(['prefix' => 'service', 'as' => 'service.'], function () {
        Route::get('daftar-service', DaftarService::class)->name('daftar-service');
        Route::get('register-service', RegisterService::class)->name('register-service');
        Route::get('edit/{service:slug}', RegisterService::class)->name('edit-service');
    });
    Route::group(['prefix' => 'kategori-service', 'as' => 'kategori-service.'], function () {
        Route::get('daftar-kategori-service', DaftarKategori::class)->name('daftar-kategori-service');
        Route::get('register-kategori-service', RegisterKategori::class)->name('register-kategori-service');
        Route::get('edit/{kategoriService:slug}', RegisterKategori::class)->name('edit-kategori-service');
    });
    Route::group(['prefix' => 'kategori-berita', 'as' => 'kategori-berita.'], function () {
        Route::get('daftar-kategori-berita', DaftarKategoriBerita::class)->name('daftar-kategori-berita');
        Route::get('register-kategori-berita', RegisterKategoriBerita::class)->name('register-kategori-berita');
        Route::get('edit/{kategoriBerita}', RegisterKategoriBerita::class)->name('edit-kategori-berita');
    });
    Route::group(['prefix' => 'berita', 'as' => 'berita.'], function () {
        Route::get('daftar-berita', DaftarBerita::class)->name('daftar-berita');
        Route::get('register-berita', RegisterBerita::class)->name('register-berita');
        Route::get('edit/{berita}', RegisterBerita::class)->name('edit-berita');
    });
    Route::group(['prefix' => 'benner', 'as' => 'benner.'], function () {
        Route::get('daftar-benner', DaftarBenner::class)->name('daftar-benner');
        Route::get('register-benner', RegisterBenner::class)->name('register-benner');
        Route::get('edit/{benner}', RegisterBenner::class)->name('edit-benner');
    });
    Route::group(['prefix' => 'sosmed', 'as' => 'sosmed.'], function () {
        Route::get('daftar-sosmed', DaftarSosmed::class)->name('daftar-sosmed');
        Route::get('register-sosmed', RegisterSosmed::class)->name('register-sosmed');
        Route::get('edit/{sosmed}', RegisterSosmed::class)->name('edit-sosmed');
    });
});
Route::group(['prefix' => '', 'as' => 'front.'], function () {
    Route::view('', 'front.home.dashboard')->name('home');
    Route::get('lang-set/{lang:slug}', [LangController::class, 'setLeng'])->name('set-lang');
    Route::get('{config:slug}', TheirOur::class)->name('page-config');
    Route::group(['prefix' => 'dokter', 'as' => 'dokter.'], function () {
        Route::get('profile-dokter/{dokter}', ProfileDokter::class)->name('profile-dokter');
    });
    Route::group(['prefix' => 'fasilitas', 'as' => 'fasilitas.'], function () {
        Route::get('profile-fasilitas/{fasilitas:slug}', FasilitasProfile::class)->name('profile-fasilitas');
    });
    Route::group(['prefix' => 'berita', 'as' => 'berita.'], function () {
        Route::get('profile-berita/{berita:slug}', ProfileBerita::class)->name('profile-berita');
    });
    Route::group(['prefix' => 'service', 'as' => 'service.'], function () {
        Route::get('profile-test/{kategoriId}/{serviceId}', ServiceInfo::class)->name('test-service');
        Route::get('profile-info/{kategoriSlug}/{serviceSlug}', ServiceInfo::class)->name('info-service');
        Route::get('profile-service/{kategoriService:slug}', ProfileService::class)->name('profile-service');
    });
    Route::group(['prefix' => 'penilaian', 'as' => 'penilaian.'], function () {
        Route::get('info-penilaian', InfoPenilaian::class)->name('info-penilaian');
    });
    Route::group(['prefix' => 'benner', 'as' => 'benner.'], function () {
        Route::get('info-benner/{benner:slug}', InfoBenner::class)->name('info-benner');
    });
    Route::group(['prefix' => 'member', 'as' => 'member.'], function () {
        Route::get('profile-member', ProfileMember::class)->name('profile-member');
        Route::get('logout', function (){
            session()->remove('member_id');
            return redirect(\route('front.home'));
        })->name('logout-member');
        Route::get('edit-member', EditMember::class)->name('edit-member');
        Route::get('login-member', LoginMember::class)->name('login-member');
    });
});

