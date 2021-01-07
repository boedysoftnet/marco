<?php

namespace App\Http\Livewire\Backend\Dokter;

use App\Models\Dokter;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use PHPUnit\Framework\Constraint\Operator;

class RegisterDokter extends Component
{
    use WithFileUploads;

    public $data = [];

    public function mount(Dokter $dokter)
    {
        if (count($dokter->toArray())) {
            $this->data = $dokter->toArray();
            unset($this->data['path']);
        } else {
            unset($this->data['path']);
            $this->data['rating'] = 5;
        }
    }

    public function simpan()
    {
        if (isset($this->data['path'])) $this->data['path'] = \Storage::disk('public')->put('dokter', $this->data['path']);
        if (array_key_exists('id', $this->data)) {
            Dokter::find($this->data['id'])->update($this->data);
            return $this->redirect(route('backend.dokter.daftar-dokter'));
        } else {
            User::find(session('user_id'))->dokter()->create($this->data);
            session()->flash('success', 'sukses menambahkan data dokter..!');
            return $this->redirect(route('backend.dokter.daftar-dokter'));
        }
    }

    public function render()
    {
        return view('livewire.backend.dokter.register-dokter')->extends('backend.layouts.index');
    }
}
