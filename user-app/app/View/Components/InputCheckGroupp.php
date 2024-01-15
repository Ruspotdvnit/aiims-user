<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputCheckGroupp extends Component
{
    /**
     * Create a new component instance.
     */
    public $vals;
    public $options;
    public function __construct($vals, $options)
    {
        $this->vals = $vals;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-check-groupp')->with('data', $this->vals)->with('options', $this->options);
    }
}
