<?php

namespace App\View\Components;

use Illuminate\View\Component;

class adminTemplate extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        return view('layouts.app');
    }

    public function render()
    {
        return view('layouts.admin-template');
    }
}
