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
    public $addressData;
    public $binaryMenu;
    public $relationshipWithDonor;
    public $maritalStatus;
    public $educationalStatus;
    public $yesNoMenu;
    public $swapTransplantReason;
    public $menu1to5;
    public $menuGap3Upto5;
    public $menuGap2Upto10;
    public $menuGap5Upto15;

    public $bg;


    public function __construct(public string $type)
    {
        $this->bg = array('Select','A','A1','A2','B','AB','A1B','A2B','O');
        $this->genderMenu = array('Select', 'Male', 'Female', 'Transgender', 'Other');
        $this->addressData = array(
            array('Flat/House no', 'village/town', 'tahasil or taluka'),
            array('district', 'state', 'pin code')
        );
        $this->binaryMenu = array('Select', 'Positive', 'Negative');
        $this->yesNoMenu = array('Select', 'Yes', 'No');

        $this->menu1to5 = array('Select', '1','2','3','4','5','> 5');
        $this->menuGap3Upto5 = array('Select', '1-2', '3-5', '> 5');
        $this->menuGap2Upto10 = array('Select', '< 1', '1-2', '3-4','5-7','8-10','> 10');
        $this->menuGap5Upto15 = array('Select', '1-5','5-10','10-15','> 15');



        $this->relationshipWithDonor = array('Select', ' Mother ',' father ',' daughter ',' son ',' sister ',' brother ',' grand mother ',' grand fathter ',' grand son ',' grand daughter ',' husband ',' wife ',' altruistic ',' swap donor ',' other ');
        $this->maritalStatus = array('Select', ' Married ',' single ',' divorced ',' widowed',' separated but not divorced ',' other ');
        $this->educationalStatus = array('Select', " Uneducated "," primary school 1st to 5th class "," middle school 6th to 7th "," seconday school 8th to 10th "," Higher secondary school 11 to 12th "," graduation "," post graduation "," other " );
        $this->swapTransplantReason = array('Select', "ABO Incompatibility", "Highly sensitized", "Donor-Recipient age factor", "Other");

    
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.new.header');
    }
}
