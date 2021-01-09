<?php

namespace App\Http\Livewire\Backend\Fasilitas;

use App\Models\Fasilitas;
use Livewire\Component;

class DaftarFasilitas extends Component
{
    /**
     * @var mixed
     */
    private $prepage = 20;
    public $search;

    public function render()
    {
        $fasilitas = Fasilitas::paginate($this->prepage);
        if ($this->search) $fasilitas = Fasilitas::where('fasilitas','like',"%{$this->search}%")->paginate($this->prepage);
        return view('livewire.backend.fasilitas.daftar-fasilitas', compact('fasilitas'))->extends('backend.layouts.index');
    }

    public function destroy(Fasilitas $fasilitas)
    {
        $fasilitas->delete();
        session()->flash('success', trans('success remove data..!'));
    }
}
