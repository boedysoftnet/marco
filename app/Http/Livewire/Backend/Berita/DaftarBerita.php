<?php

namespace App\Http\Livewire\Backend\Berita;

use App\Models\Berita;
use Livewire\Component;

class DaftarBerita extends Component
{
    /**
     * @var mixed
     */
    private $prepage = 20;
    public $search;

    public function render()
    {
        $beritas = Berita::paginate($this->prepage);
        if ($this->search) $beritas = Berita::where('juduls', 'like', "%{$this->search}%")->paginate($this->prepage);
        return view('livewire.backend.berita.daftar-berita', compact('beritas'))->extends('backend.layouts.index');
    }

    public function destroy(Berita $berita)
    {
        $berita->delete();
        session()->flash('success', 'success remove data..!');
    }
}
