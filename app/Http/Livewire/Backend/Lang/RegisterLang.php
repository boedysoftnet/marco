<?php

namespace App\Http\Livewire\Backend\Lang;

use App\Models\Lang;
use Livewire\Component;

class RegisterLang extends Component
{
    public $data = [];
    protected $rules = [
        'data.slug' => 'required',
        'data.lang' => 'required',
    ];

    public function mount(Lang $lang)
    {
        $this->data = $lang->toArray();
    }

    public function simpan()
    {
        $this->validate();
        if (array_key_exists('id',$this->data)) {
            Lang::find($this->data['id'])->update($this->data);
            session()->flash('success', 'sukses mengubah data..!');
            return $this->redirect(route('backend.lang.daftar-lang'));
        }else{
            Lang::create($this->data);
            session()->flash('success', 'sukses menambahkan data..!');
            return $this->redirect(route('backend.lang.daftar-lang'));
        }
    }

    public function render()
    {
        return view('livewire.backend.lang.register-lang')->extends('backend.layouts.index');
    }
}
