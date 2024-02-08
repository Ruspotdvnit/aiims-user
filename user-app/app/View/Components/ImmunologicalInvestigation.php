<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ImmunologicalInvestigation extends Component
{
    public $binaryMenu;
    public $hlaMenu; 
    /**
     * Create a new component instance.
     */
    public function __construct(public string $type)
    {
        $this->binaryMenu = array('Select', 'Positive', 'Negative');
        $this->hlaMenu = array( array('A', 'B', 'C'), array('DR', 'DQ', 'DP'));

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.immunological-investigation');
    }
}
