<?php

namespace App\Http\Livewire\Front\Page;

use App\Models\Berita;
use Livewire\Component;

class ProfileBerita extends Component
{
    public $berita;

    public function mount(Berita $berita)
    {
        $this->berita = $berita;
    }

    public function render()
    {
        return view('livewire.front.page.profile-berita')->extends('front.layouts.index');
    }
}
