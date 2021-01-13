<?php

namespace App\Http\Livewire\Backend\Sosmed;

use App\Helper\BoedySoft;
use App\Models\Sosmed;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterSosmed extends Component
{
    use WithFileUploads;
    public $data = [];

    public function mount(Sosmed $sosmed){
        if (count($sosmed->toArray())) {
            $this->data=$sosmed->toArray();
        }
    }
    public function simpan()
    {
        if (array_key_exists('id', $this->data)) {
            Sosmed::find($this->data['id'])->update($this->data);
            session()->flash('success', trans('edit data success..!'));
            return $this->redirect(route('backend.sosmed.daftar-sosmed'));
        } else {
            $this->data['slug']=\Str::slug(BoedySoft::trans($this->data['juduls']));
            User::find(session('user_id'))->service()->create($this->data);
            session()->flash('success', trans('add data success..!'));
            return $this->redirect(route('backend.sosmed.daftar-sosmed'));
        }
    }


    public function render()
    {
        return view('livewire.backend.sosmed.register-sosmed')->extends('backend.layouts.index');
    }
}
