<?php

namespace App\Http\Livewire\Backend\Service;

use App\Helper\BoedySoft;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterService extends Component
{
    use WithFileUploads;
    public $data = [];

    public function mount(Service $service){
        if (count($service->toArray())) {
            $this->data=$service->toArray();
        }
        $this->data['gallerys']=[];
        unset($this->data['path']);
    }
    public function simpan()
    {
        if (isset($this->data['path'])) $this->data['path'] = Storage::disk('public')->put('service', $this->data['path']);
        $this->setGallerys();
        if (array_key_exists('id', $this->data)) {
            Service::find($this->data['id'])->update($this->data);
            session()->flash('success', trans('edit data success..!'));
            return $this->redirect(route('backend.service.daftar-service'));
        } else {
            $this->data['slug']=\Str::slug(BoedySoft::trans($this->data['juduls']));
            User::find(session('user_id'))->service()->create($this->data);
            session()->flash('success', trans('add data success..!'));
            return $this->redirect(route('backend.service.daftar-service'));
        }
    }

    public function setGallerys()
    {
        if (count($this->data['gallerys'])) {
            foreach ($this->data['gallerys'] as $index => $gallery) {
                $path[] = Storage::disk('public')->put('gallerys', $gallery);
            }
            $this->data['gallerys'] = $path;
        }
    }

    public function render()
    {
        return view('livewire.backend.service.register-service')->extends('backend.layouts.index');
    }
}
