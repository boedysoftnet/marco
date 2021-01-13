<?php

namespace App\Http\Livewire\Backend\User;

use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateUser extends Component
{
    use WithFileUploads;

    public $data = [];
    protected $rules = [
        'data.name' => 'required',
        'data.email' => 'required|email',
        'data.path' => 'required|max:1024|image',
    ];

    public function mount()
    {
        $this->data=User::find(session('user_id'))->toArray();
        unset($this->data['password']);
        unset($this->data['path']);
    }

    public function simpan()
    {
        if (array_key_exists('path', $this->data)) $this->data['path'] = Storage::disk('public')->put('info-user', $this->data['path']);
        User::find($this->data['id'])->update($this->data);
        session()->flash('success', trans("success update data..!"));
        return $this->redirect(route('backend.dashboard'));
    }

    public function render()
    {
        return view('livewire.backend.user.update-user')->extends('backend.layouts.index');
    }
}
