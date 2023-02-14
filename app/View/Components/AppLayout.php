<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $theme, $title;
    
    public function __construct($theme = null)
    {
        $this->theme = $theme;
        $this->title = $theme ? "$theme | Sobat KRS" : 'Sobat KRS';
        // $this->namaItem = $namaItem;
        // $this->routeEdit = $routeEdit;
        // $this->routeDestroy = $routeDestroy;
        // $this->routeCreate = $routeCreate;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.app-layout');
    }
}
