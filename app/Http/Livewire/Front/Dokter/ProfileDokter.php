<?php

namespace App\Http\Livewire\Front\Dokter;

use App\Models\Dokter;
use Livewire\Component;

class ProfileDokter extends Component
{
    public $dokter;

    public function mount(Dokter $dokter)
    {
        $this->dokter = $dokter;
    }

    public function render()
    {
        return view('livewire.front.dokter.profile-dokter')->extends('front.layouts.index');
    }
}
