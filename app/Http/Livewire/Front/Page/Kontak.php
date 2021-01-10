<?php

namespace App\Http\Livewire\Front\Page;

use Livewire\Component;

class Kontak extends Component
{
    public $data=[];
    public function send(){
        dd($this->data);
    }
    public function render()
    {
        return view('livewire.front.page.kontak');
    }
}
