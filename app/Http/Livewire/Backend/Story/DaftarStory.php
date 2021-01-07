<?php

namespace App\Http\Livewire\Backend\Story;

use App\Models\Story;
use Livewire\Component;

class DaftarStory extends Component
{
    /**
     * @var mixed
     */
    private $prepage = 20;

    public function render()
    {
        $storys = Story::paginate($this->prepage);
        return view('livewire.backend.story.daftar-story',compact('storys'))->extends('backend.layouts.index');
    }
    public function destroy(Story $story){
        $story->delete();
        session()->flash('success','sukses menghapus data..!');
    }
}
