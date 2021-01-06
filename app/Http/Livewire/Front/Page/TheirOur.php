<?php

namespace App\Http\Livewire\Front\Page;

use App\Models\Config;
use Livewire\Component;

class TheirOur extends Component
{
    public $info;

    public function mount(Config $config)
    {
        $this->info = $config;
    }

    public function render()
    {
        return view('livewire.front.page.their-our')->extends('front.layouts.index');
    }
}
