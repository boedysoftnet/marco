<?php

namespace App\Http\Livewire\Front\Penilaian;

use App\Models\Penilaian;
use Livewire\Component;

class InfoPenilaian extends Component
{
    public $data = [];
    private $prepage = 20;

    public $rules = [
        'data.nama' => 'required',
        'data.email' => 'required|email',
        'data.kota' => 'required',
        'data.comment' => 'required',
    ];

    public function mount(){
        $this->data['rating']=5;
    }
    public function addComment()
    {
        $this->validate();
        $find = Penilaian::whereEmail($this->data['email']);
        if ($find->count()>0) {
            session()->flash('error', trans('sorry you have given your experience'));
        }else{
            Penilaian::create($this->data);
            session()->flash('success', trans('comment success'));
        }
    }

    public function render()
    {
        $penilaians = Penilaian::orderBy('id','desc')->paginate($this->prepage);
        return view('livewire.front.penilaian.info-penilaian', compact('penilaians'))->extends('front.layouts.index');
    }
}
