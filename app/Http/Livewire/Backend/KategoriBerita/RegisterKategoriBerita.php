<?php

namespace App\Http\Livewire\Backend\KategoriBerita;

use App\Models\KategoriBerita;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterKategoriBerita extends Component
{
    use WithFileUploads;

    public $data = [];

    public function mount(KategoriBerita $kategoriBerita)
    {
        if (count($kategoriBerita->toArray())) {
            $this->data = $kategoriBerita->toArray();
        }
        unset($this->data['path']);
    }

    public function simpan()
    {
        if (array_key_exists('path', $this->data)) $this->data['path'] = Storage::disk('public')->put('kategori-berita', $this->data['path']);
        if (array_key_exists('id', $this->data)) {
            KategoriBerita::find($this->data['id'])->update($this->data);
            session()->flash('success', trans('success add data..!'));
            return $this->redirect(route('backend.kategori-berita.daftar-kategori-berita'));
        } else {
            User::find(session('user_id'))->kategoriBerita()->create($this->data);
            session()->flash('success', trans('success add data..!'));
            return $this->redirect(route('backend.kategori-berita.daftar-kategori-berita'));
        }
    }

    public function render()
    {
        return view('livewire.backend.kategori-berita.register-kategori-berita')->extends('backend.layouts.index');
    }
}
