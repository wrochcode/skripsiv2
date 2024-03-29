<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppAuth extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public function __construct($title = null)
    {
        // $this->title = $title ? $title : "Excel";
        $this->title = $title ?? "Home";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.appauth');
    }
}
