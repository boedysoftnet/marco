<?php

namespace App\Http\Livewire\Backend\Dokter;

use App\Models\Dokter;
use Livewire\Component;

class DaftarDokter extends Component
{
    /**
     * @var mixed
     */
    private $prepage=20;
    public $search;

    public function render()
    {
        $dokters=Dokter::paginate($this->prepage);
        if($this->search) $dokters=Dokter::whereNamaDokter($this->search)->paginate($this->prepage);
        return view('livewire.backend.dokter.daftar-dokter',compact('dokters'))->extends('backend.layouts.index');
    }
    public function destroy(Dokter $dokter){
        $dokter->delete();
        session()->flash('success','sukses menghapus data..!');
    }
}
