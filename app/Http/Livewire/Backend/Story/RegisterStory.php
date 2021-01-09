<?php

namespace App\Http\Livewire\Backend\Story;

use App\Models\Story;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use PHPUnit\Framework\Constraint\Operator;

class RegisterStory extends Component
{
    use WithFileUploads;

    public $data = [];

    public function mount(Story $story)
    {
        $this->data=$story->toArray();
        unset($this->data['path']);
    }

    public function simpan()
    {
        if (array_key_exists('path',$this->data)) $this->data['path'] = \Storage::disk('public')->put('story', $this->data['path']);
        if (array_key_exists('id', $this->data)) {
            Story::find($this->data['id'])->update($this->data);
            session()->flash('success', 'sukses edit data..!');
            return $this->redirect(route('backend.story.daftar-story'));
        } else {
            User::find(session('user_id'))->story()->create($this->data);
            session()->flash('success', 'sukses menambahkan data..!');
            return $this->redirect(route('backend.story.daftar-story'));
        }
    }

    public function render()
    {
        return view('livewire.backend.story.register-story')->extends('backend.layouts.index');
    }
}
