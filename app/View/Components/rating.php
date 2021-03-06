<?php

namespace App\View\Components;

use Illuminate\View\Component;

class rating extends Component
{
    public $point;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($point = 5)
    {
        $this->point = $point;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.rating');
    }
}
