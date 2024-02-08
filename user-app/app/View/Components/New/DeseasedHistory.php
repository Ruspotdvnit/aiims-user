<?php

namespace App\View\Components\New;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DeseasedHistory extends Component
{
    /**
     * Create a new component instance.
     */
    public $genderMenu;
    public $binaryMenu;
    public $menu1to5;
    public $menuGap3Upto5;
    public $menuGap2Upto10;
    public $menuGap5Upto15;
    public $menuGap5Upto10;

    public $yesNoMenu;
    public $diabetiesType;
    public $kidneySides;
    public $typeOfCalculie;
    public $calculieTreatment;
    public $tuberculosisTypes;
    public $extrapulmonaryTypes;

    public $menstrual;

    public function __construct(public string $type)
    {
        $this->genderMenu = array('Select', 'Male', 'Female');
        $this->binaryMenu = array('Select', 'Positive', 'Negative');
        $this->kidneySides = array('Select', " Right kidney "," Left kidney "," Bilateral ");
        $this->menstrual = array('Select', "regular","irregular");

        $this->calculieTreatment = array('Select', "conservative","surgical intervention");

        $this->yesNoMenu = array('Select', 'Yes', 'No');
        $this->tuberculosisTypes = array('Select', 'pulmonay', 'extrapulmonary');
        $this->extrapulmonaryTypes = array('Select', " GI TB "," genitourinary "," CNS "," potts spine "," lymph node "," other ");

        $this->menu1to5 = array('Select', '1','2','3','4','5','> 5');
        $this->menuGap3Upto5 = array('Select', '1-2', '3-5', '> 5');
        $this->menuGap2Upto10 = array('Select', '1', '1-2', '3-4','5-7','8-10','> 10');
        $this->menuGap5Upto15 = array('Select', '1-5','5-10','10-15','> 15');
        $this->menuGap5Upto10 = array('Select', '< 5','5-10','> 10');

        $this->diabetiesType = array('Select', 'T1DM', 'T2DM');
        $this->typeOfCalculie = array('Select', " not known "," struvite "," calcium oxalate stone  "," uric acid "," calcium phosphate "," cystine ");

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.new.deseased-history');
    }
}
