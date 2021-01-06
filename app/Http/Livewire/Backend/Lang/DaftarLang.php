<?php

namespace App\Http\Livewire\Backend\Lang;

use App\Models\Lang;
use Livewire\Component;

class DaftarLang extends Component
{
    /**
     * @var mixed
     */
    public $prepage = 20;
    public $search;

    public function destroy(Lang $lang)
    {
        $lang->delete();
        session()->flash('success', 'sukses menghapus data..!');
    }

    public function render()
    {
        $langs = Lang::paginate($this->prepage);
        if ($this->search) $langs = Lang::whereLang($this->search)->orWhere('slug', $this->search)->paginate($this->prepage);
        return view('livewire.backend.lang.daftar-lang', compact('langs'))->extends('backend.layouts.index');
    }
}
