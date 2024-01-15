<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InlineFormCheckk extends Component
{
    /**
     * Create a new component instance.
     */
    public $val;
    public $options;

    public function __construct($val, $options)
    {
        $this->val = $val;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.inline-form-checkk')->with('options', $this->options);
    }
}
