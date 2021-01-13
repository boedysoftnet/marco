<?php

namespace App\Http\Livewire\Front\Member;

use App\Models\Member;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterMember extends Component
{
    use WithFileUploads;

    public $data = [];
    public $keluargas = [];
    protected $rules = [
        'data.nama_member' => 'required',
        'data.email' => 'required|email',
        'data.tgl_lahir' => 'required',
        'data.negara' => 'required',
        'data.telpon' => 'required',
        'data.jenis_kelamin' => 'required',
        'data.alamat' => 'required|min:3',
        'data.berkas' => 'required|max:1024|image',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount()
    {
        $this->data['user_id'] = 1;
        $this->data['negara'] = '';
        $this->data['password'] = Str::random();
        $this->data['jenis_kelamin'] = '';
        unset($this->data['berkas']);
        unset($this->data['path']);
        $this->data['keluargas'][0]['jenis_kelamin'] = '';
        $this->data['keluargas'][1]['jenis_kelamin'] = '';
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
    }

    public function simpan()
    {
        $this->validate();
        $this->data['verifikasi'] = 0;
        if (array_key_exists('berkas', $this->data)) $this->data['berkas'] = Storage::disk('public')->put('berkas-member', $this->data['berkas']);
        $member=Member::create($this->data);
        session()->flash('success', trans("thank's {$this->data['nama_member']} register success"));
        session()->put('member_id',$member->id);
        return $this->redirect(route('front.member.profile-member'));
    }

    public function render()
    {
        return view('livewire.front.member.register-member');
    }
}
