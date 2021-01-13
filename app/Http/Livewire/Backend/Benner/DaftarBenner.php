<?php

namespace App\Http\Livewire\Backend\Benner;

use App\Models\Benner;
use Livewire\Component;

class DaftarBenner extends Component
{
    /**
     * @var mixed
     */
    private $prepage = 20;
    public $search;

    public function render()
    {
        $benners = Benner::paginate($this->prepage);
        if ($this->search) $benners = Benner::where('juduls', 'like', "%{$this->search}%")->paginate($this->prepage);
        return view('livewire.backend.benner.daftar-benner',compact('benners'))->extends('backend.layouts.index');
    }

    public function destroy(Benner $benner)
    {
        $benner->delete();
        session()->flash('success', 'success remove data..!');
    }
}
