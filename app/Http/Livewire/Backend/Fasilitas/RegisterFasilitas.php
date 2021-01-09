<?php

namespace App\Http\Livewire\Backend\Fasilitas;

use App\Models\Fasilitas;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterFasilitas extends Component
{
    use WithFileUploads;
    public $data = [];

    public function mount(Fasilitas $fasilitas)
    {
        if (count($fasilitas->toArray())) {
            $this->data = $fasilitas->toArray();
        }
        unset($this->data['path']);
        $this->data['gallerys']=[];
    }

    public function simpan()
    {
        if (array_key_exists('path',$this->data)) $this->data['path'] = Storage::disk('public')->put('fasilitas', $this->data['path']);
        $this->setGallerys();
        if (array_key_exists('id', $this->data)) {
            Fasilitas::find($this->data['id'])->update($this->data);
            session()->flash('success', trans('success add data..!'));
            return $this->redirect(route('backend.fasilitas.daftar-fasilitas'));
        } else {
            User::find(session('user_id'))->fasilitas()->create($this->data);
            session()->flash('success', trans('success add data..!'));
            return $this->redirect(route('backend.fasilitas.daftar-fasilitas'));
        }
    }

    public function setGallerys()
    {
        if (count($this->data['gallerys'])) {
            foreach ($this->data['gallerys'] as $index => $gallery) {
                $path[] = Storage::disk('public')->put('gallerys', $gallery);
            }
            $this->data['gallerys'] = $path;
        }
    }


    public function render()
    {
        return view('livewire.backend.fasilitas.register-fasilitas')->extends('backend.layouts.index');
    }
}
