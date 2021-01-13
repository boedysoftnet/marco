<?php

namespace App\Http\Livewire\Front\Member;

use App\Models\Member;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditMember extends Component
{
    use WithFileUploads;

    public $keluargas = [];
    public $data = [];
    protected $rules = [
        'data.nama_member' => 'required',
        'data.email' => 'required|email',
        'data.tgl_lahir' => 'required',
        'data.negara' => 'required',
        'data.telpon' => 'required',
        'data.jenis_kelamin' => 'required',
        'data.alamat' => 'required|min:3',
        'data.path' => 'required|max:1024|image',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function simpan()
    {
        $this->validate();
        unset($this->data['email']);
        unset($this->data['berkas']);
        if(array_key_exists('path',$this->data)) $this->data['path']=Storage::disk('public')->put('member-profile',$this->data['path']);
        $member = Member::find(session('member_id'))->update($this->data);
        session()->flash('success', trans("thank's {$this->data['nama_member']} update success"));
        return $this->redirect(route('front.member.profile-member'));
    }

    public function mount()
    {
        $this->data = Member::find(session('member_id'))->toArray();
        $this->keluargas[] = [
            'nama' => '',
            'tgl_lahir' => '',
            'jenis_kelamin' => '',
        ];
        $this->keluargas[] = [
            'nama' => '',
            'tgl_lahir' => '',
            'jenis_kelamin' => '',
        ];
        unset($this->data['path']);
    }

    public function render()
    {
        return view('livewire.front.member.edit-member')->extends('front.layouts.index');
    }
}
