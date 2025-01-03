<?php

namespace App\View\Components\widget\Observations;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DataItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array $data,
        public string $key,
    )
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
