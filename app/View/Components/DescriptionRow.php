<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DescriptionRow extends Component
{
    public string $label;
    /**
     * Create a new component instance.
     */
    public function __construct(string $label)
    {
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.description-row');
    }
}
