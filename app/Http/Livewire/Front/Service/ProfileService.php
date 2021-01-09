<?php

namespace App\Http\Livewire\Front\Service;

use App\Models\KategoriService;
use Livewire\Component;

class ProfileService extends Component
{
    public $kategoriService;

    public function mount(KategoriService $kategoriService)
    {
        $this->kategoriService = $kategoriService;
    }

    public function render()
    {
        return view('livewire.front.service.profile-service')->extends('front.layouts.index');
    }
}
