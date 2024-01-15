<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputTextGroupp extends Component
{
    /**
     * Create a new component instance.
     */
    public $data;
    public function __construct($cbcData)
    {
        $this->data = $cbcData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-text-groupp')->with('data', $this->data);
    }
}
