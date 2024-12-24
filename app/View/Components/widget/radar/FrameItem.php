<?php

namespace App\View\Components\widget\Radar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FrameItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array $data,
        public int $index,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // I had to specify the global variables in this local scope for some reason,
        // because the blade template doesn't detect the variables for some reason otherwise.
        // Note. The data-item component from the observations folder could detect variables
        // even without specifying the variables in the constructor.

        $data = $this->data;
        $index = $this->index;

        return view('components.widget.radar.frame-item', compact('data','index'));
    }
}
