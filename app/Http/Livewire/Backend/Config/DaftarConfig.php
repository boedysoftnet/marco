<?php

namespace App\Http\Livewire\Backend\Config;

use App\Models\Config;
use Livewire\Component;

class DaftarConfig extends Component
{
    /**
     * @var mixed
     */
    private $prepage=20;

    public function render()
    {
        $configs=Config::paginate($this->prepage);
        return view('livewire.backend.config.daftar-config',compact('configs'))->extends('backend.layouts.index');
    }
}
