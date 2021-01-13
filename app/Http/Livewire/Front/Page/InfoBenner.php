<?php

namespace App\Http\Livewire\Front\Page;

use App\Models\Benner;
use Livewire\Component;

class InfoBenner extends Component
{
    public $benner;

    public function mount(Benner $benner)
    {
        $this->benner = $benner;
    }

    public function render()
    {
        return view('livewire.front.page.info-benner')->extends('front.layouts.index');
    }
}
