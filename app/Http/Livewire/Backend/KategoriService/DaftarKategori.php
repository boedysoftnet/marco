<?php

namespace App\Http\Livewire\Backend\KategoriService;

use App\Models\KategoriService;
use Livewire\Component;

class DaftarKategori extends Component
{
    /**
     * @var mixed
     */
    private $prepage = 20;
    public $search;

    public function render()
    {
        $kategoris = KategoriService::get();
        if ($this->search) $kategoris = KategoriService::where('kategoris', 'like', "%{$this->search}%")->paginate($this->prepage);
        return view('livewire.backend.kategori-service.daftar-kategori',compact('kategoris'))->extends('backend.layouts.index');
    }
    public function destroy(KategoriService $kategoriService){
        $kategoriService->delete();
        session()->flash('success','remove data success..!');
    }
}
