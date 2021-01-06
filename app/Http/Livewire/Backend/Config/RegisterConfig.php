<?php

namespace App\Http\Livewire\Backend\Config;

use App\Models\Config;
use App\Models\User;
use Livewire\Component;

class RegisterConfig extends Component
{
    public $data = [];

    public function mount(Config $config)
    {
        $this->data = $config->toArray();
    }

    public function simpan()
    {
        Config::find($this->data['id'])->update($this->data);
        session()->flash('success', 'data berhasil diperbaharui..!');
        return $this->redirect(route('backend.config.daftar-config'));
    }

    public function render()
    {
        return view('livewire.backend.config.register-config')->extends('backend.layouts.index');
    }
}
