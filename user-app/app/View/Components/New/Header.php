<?php

namespace App\View\Components\New;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public $genderMenu;
    public function __construct()
    {
        $this->genderMenu = array('Male', 'Female');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.new.header');
    }
}
