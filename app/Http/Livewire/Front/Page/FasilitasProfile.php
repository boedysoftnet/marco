<?php

namespace App\Http\Livewire\Front\Page;

use App\Models\Fasilitas;
use Livewire\Component;

class FasilitasProfile extends Component
{
    public $fasilitas;

    public function mount(Fasilitas $fasilitas)
    {
        $this->fasilitas = $fasilitas;
    }

    public function render()
    {
        return view('livewire.front.page.fasilitas-profile')->extends('front.layouts.index');
    }
}
