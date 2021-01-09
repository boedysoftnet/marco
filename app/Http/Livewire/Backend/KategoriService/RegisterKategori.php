<?php

namespace App\Http\Livewire\Backend\KategoriService;

use App\Helper\BoedySoft;
use App\Models\KategoriService;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterKategori extends Component
{
    use WithFileUploads;

    public $data = [];

    public function mount(KategoriService $kategoriService)
    {
        if (count($kategoriService->toArray())) {
            $this->data = $kategoriService->toArray();
        }
        unset($this->data['path']);
        unset($this->data['icon']);
    }

    public function simpan()
    {
        if (array_key_exists('path',$this->data)) $this->data['path'] = \Storage::disk('public')->put('kategori-service', $this->data['path']);
        if (array_key_exists('icon',$this->data)) $this->data['icon'] = \Storage::disk('public')->put('kategori-icon', $this->data['icon']);
        if (array_key_exists('id', $this->data)) {
            KategoriService::find($this->data['id'])->update($this->data);
            session()->flash('success', trans('edit data success'));
            return $this->redirect(route('backend.kategori-service.daftar-kategori-service'));
        } else {
            $this->data['slug'] = \Str::slug(BoedySoft::trans($this->data['kategoris']));
            User::find(session('user_id'))->kategoriService()->create($this->data);
            session()->flash('success', trans('add data success'));
            return $this->redirect(route('backend.kategori-service.daftar-kategori-service'));
        }
    }

    public function render()
    {
        return view('livewire.backend.kategori-service.register-kategori')->extends('backend.layouts.index');
    }
}
