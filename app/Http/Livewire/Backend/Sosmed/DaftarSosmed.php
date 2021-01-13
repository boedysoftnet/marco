<?php

namespace App\Http\Livewire\Backend\Sosmed;

use App\Models\Sosmed;
use Livewire\Component;

class DaftarSosmed extends Component
{
    /**
     * @var mixed
     */
    private $prepage = 20;
    public $search;

    public function render()
    {
        $sosmed = Sosmed::paginate($this->prepage);
        if ($this->search) $sosmed = Sosmed::where('sosmed', 'like', "%{$this->search}%")->paginate($this->prepage);
        return view('livewire.backend.sosmed.daftar-sosmed', compact('sosmed'))->extends('backend.layouts.index');
    }

    public function destroy(Sosmed $sosmed)
    {
        $sosmed->delete();
        session()->flash('success',trans('data success delete'));
    }
}
