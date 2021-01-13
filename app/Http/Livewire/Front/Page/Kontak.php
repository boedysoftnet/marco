<?php

namespace App\Http\Livewire\Front\Page;

use App\Models\Request;
use Livewire\Component;

class Kontak extends Component
{
    public $data = [
    ];

    protected $rules = [
        'data.kategori_service_id' => 'required',
        'data.nama' => 'required',
        'data.email' => 'required|email',
        'data.telpon' => 'required',
        'data.subject' => 'required',
        'data.pesan' => 'required',
    ];

    public function mount()
    {
        $this->data['kategori_service_id'] = "";
        $this->data['status'] = 0;
    }

    public function send()
    {
        $this->validate();
        Request::create($this->data);
        session()->flash('success', trans("thank's request success {$this->data['email']}"));
        foreach ($this->data as $key=> $item) {
            $this->data["$key"]="";
        }
    }

    public function render()
    {
        return view('livewire.front.page.kontak');
    }
}
