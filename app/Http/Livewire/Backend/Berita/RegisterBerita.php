<?php

namespace App\Http\Livewire\Backend\Berita;

use App\Helper\BoedySoft;
use App\Models\Berita;
use App\Models\KategoriBerita;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterBerita extends Component
{
    use WithFileUploads;

    public $data = [];

    public function mount(Berita $berita)
    {
        if (count($berita->toArray())) {
            $this->data = $berita->toArray();
        }
        $this->data['kategori_berita_id']=1;
        $this->data['gallerys']=[];
        unset($this->data['path']);
    }

    public function setGallerys()
    {
        if (count($this->data['gallerys'])) {
            foreach ($this->data['gallerys'] as $index => $gallery) {
                $path[] = Storage::disk('public')->put('gallery-berita', $gallery);
            }
            $this->data['gallerys'] = $path;
        }
    }


    public function simpan()
    {
        if (array_key_exists('path', $this->data)) $this->data['path'] = Storage::disk('public')->put('berita', $this->data['path']);
        $this->setGallerys();
        if (array_key_exists('id', $this->data)) {
            Berita::find($this->data['id'])->update($this->data);
            session()->flash('success', trans('success add data..!'));
            return $this->redirect(route('backend.berita.daftar-berita'));
        } else {
            $this->data['slug']=Str::slug(BoedySoft::trans($this->data['juduls']));
            User::find(session('user_id'))->berita()->create($this->data);
            session()->flash('success', trans('success add data..!'));
            return $this->redirect(route('backend.berita.daftar-berita'));
        }
    }

    public function render()
    {
        return view('livewire.backend.berita.register-berita')->extends('backend.layouts.index');
    }
}
