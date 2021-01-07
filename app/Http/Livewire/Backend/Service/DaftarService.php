<?php

namespace App\Http\Livewire\Backend\Service;

use App\Models\Service;
use Livewire\Component;

class DaftarService extends Component
{
    /**
     * @var mixed
     */
    private $prepage = 20;
    public $search;

    public function render()
    {
        $services = Service::paginate($this->prepage);
        if ($this->search) $services = Service::where('juduls', 'like', "%{$this->search}%")->paginate($this->prepage);
        return view('livewire.backend.service.daftar-service', compact('services'))->extends('backend.layouts.index');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        session()->flash('success',trans('data success delete'));
    }
}
