<?php

namespace App\View\Components\widget\observations;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class data-item extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.widget.observations.data-item');
    }
}
