<?php

namespace App\View\Components\New;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SingleInputText extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $type, public string $sub)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.new.single-input-text');
    }
}
