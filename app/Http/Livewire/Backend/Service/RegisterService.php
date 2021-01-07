<?php

namespace App\Http\Livewire\Backend\Service;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class RegisterService extends Component
{
    public $data=[];
    public function simpan(){
        if($this->data['path']) $this->data['path']=Storage::disk('public')->put()
        if (array_key_exists('id',$this->data)) {

        }else{
            User::find(session('user_id'))->service($this->data);
            session()->flash('success',trans('add data success..!'));
            return $this->redirect(route('backend.service.daftar-service'));
        }
    }
    public function render()
    {
        return view('livewire.backend.service.register-service')->extends('backend.layouts.index');
    }
}
