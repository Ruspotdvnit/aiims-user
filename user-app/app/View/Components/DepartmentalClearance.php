<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DepartmentalClearance extends Component
{
    public $fitMenu;
    public $fundusMenu;

    /**
     * Create a new component instance.
     */
    public function __construct(public string $type)
    {
        $this->fundusMenu = array('Select', 'Normal','hypertensive retinopathy','diabetes retinopathy','other');
        $this->fitMenu = array('Select', 'Fit','Unfit','Fitness with high risk','Other');

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.departmental-clearance');
    }
}
