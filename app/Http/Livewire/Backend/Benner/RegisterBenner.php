<?php

namespace App\Http\Livewire\Backend\Benner;

use App\Helper\BoedySoft;
use App\Models\Benner;
use App\Models\Berita;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterBenner extends Component
{
    use WithFileUploads;

    public $data = [];

    public function mount(Benner $benner)
    {
        if (count($benner->toArray())) {
            $this->data = $benner->toArray();
        }
        $this->data['user_id']=session('user_id');
        $this->data['gallerys']=[];
        unset($this->data['path']);
    }

    public function setGallerys()
    {
        if (count($this->data['gallerys'])) {
            foreach ($this->data['gallerys'] as $index => $gallery) {
                $path[] = Storage::disk('public')->put('gallery-benner', $gallery);
            }
            $this->data['gallerys'] = $path;
        }
    }


    public function simpan()
    {
        if (array_key_exists('path', $this->data)) $this->data['path'] = Storage::disk('public')->put('benner', $this->data['path']);
        $this->setGallerys();
        if (array_key_exists('id', $this->data)) {
            Benner::find($this->data['id'])->update($this->data);
            session()->flash('success', trans('success add data..!'));
            return $this->redirect(route('backend.benner.daftar-benner'));
        } else {
            $this->data['slug']=Str::slug(BoedySoft::trans($this->data['juduls']));
            User::find(session('user_id'))->benner()->create($this->data);
            session()->flash('success', trans('success add data..!'));
            return $this->redirect(route('backend.benner.daftar-benner'));
        }
    }

    public function render()
    {
        return view('livewire.backend.benner.register-benner')->extends('backend.layouts.index');
    }
}
