<?php

namespace App\Http\Livewire\Backend\KategoriBerita;

use App\Models\KategoriBerita;
use Livewire\Component;

class DaftarKategoriBerita extends Component
{
    /**
     * @var mixed
     */
    private $prepage = 20;
    public $search;

    public function render()
    {
        $kategoris = KategoriBerita::paginate($this->prepage);
        if ($this->search) $kategoris = KategoriBerita::where('kategoris', 'like', "%{$this->search}%")->paginate($this->prepage);
        return view('livewire.backend.kategori-berita.daftar-kategori-berita', compact('kategoris'))->extends('backend.layouts.index');
    }

    public function destroy(KategoriBerita $kategoriBerita)
    {
        $kategoriBerita->delete();
        session()->flash('success', 'success remove data..!');
    }
}
