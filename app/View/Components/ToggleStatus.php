<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ToggleStatus extends Component
{
    public $route;
    public $status;

    public function __construct($route, $status)
    {
        $this->route = $route;
        $this->status = $status;
    }

    public function render()
    {
        return view('components.toggle-status');
    }
}
