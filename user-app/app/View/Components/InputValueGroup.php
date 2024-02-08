<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputValueGroup extends Component
{
    /**
     * Create a new component instance.
     */
    public $data;
    public function __construct($ptData, public string $sub)
    {
        $this->data = $ptData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-value-group')->with('data', $this->data);
    }
}
