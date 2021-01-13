<?php

namespace App\Http\Livewire\Front\Page;

use App\Models\KategoriService;
use App\Models\Sosmed;
use Livewire\Component;

class ServiceInfo extends Component
{
    public $service;
    public $kategoriService;

    public function mount($kategoriSlug, $serviceSlug)
    {
        $this->kategoriService = KategoriService::whereSlug($kategoriSlug)->first();
        $this->service = Sosmed::whereSlug($serviceSlug)->first();
    }

    public function render()
    {
        return view('livewire.front.page.service-info')->extends('front.layouts.index');
    }
}
