<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MalignancyScreening extends Component
{
    public $binaryMenu;
    public $yesNoMenu;
    /**
     * Create a new component instance.
     */
    public function __construct(public string $type)
    {
        $this->binaryMenu = array('Select', 'Positive', 'Negative');
        $this->yesNoMenu = array('Select', 'Yes', 'No');

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.malignancy-screening');
    }
}
