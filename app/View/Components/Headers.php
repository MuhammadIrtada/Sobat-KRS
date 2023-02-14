<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Headers extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $namaItem;
     
    public function __construct($namaItem = null)
    {
        // $this->namaItem = $namaItem;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.headers');
    }
}
