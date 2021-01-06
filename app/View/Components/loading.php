<?php

namespace App\View\Components;

use Illuminate\View\Component;

class loading extends Component
{
    public $target, $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($target='simpan', $title='Mohon menunggu, sedang mengirim data..!')
    {
        $this->target = $target;
        $this->title = $title;//
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.loading');
    }
}
