<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RediologicalInvestigation extends Component
{
    /**
     * Create a new component instance.
     */
    public $xrayData;
    public $usgData;
    public $dtpaDonorData;
    public $ctAngiographyData;
    public $dechoData;
    public $pftData;
    public $binaryMenu;
    public $fundusExaminationMenu;
    public $normalMenu;
    public $dmsaScanData;

    public function __construct(public string $type)
    {
        $this->xrayData = array(
            array('ABDOMEN/KUB', 'CHEST')
        );

        $this->binaryMenu = array('Select', 'Yes', 'No');
        $this->normalMenu = array('Select', 'Normal', 'Abnormal');


        $this->fundusExaminationMenu = array('Select', 'Normal','hypertensive retinopathy','diabetes retinopathy','other');

        $this->dmsaScanData = array(
            array("RK (%)", "LK (%)"),
            array('Comment'),

        );
        $this->usgData = array(
            array('USG-ABDO/KUB/PELVIS', 'RK Size', 'LK Size'),
            array('ECHOGENECITY', 'CMD', 'Post Void Residual volume'),
            array('Prostate volume', 'Comment')

        );
        $this->dtpaDonorData = array(
            array('Total GFR (ml/min)'),
            array("RK Split GFR (%)", "LK Split GFR (%)"),
            array('Normalied GFR (ml/min)'),
            array('Time of max (min) RK', 'Time of max (min) LK'),
            array('Comment'),
        );
       
        
        $this->pftData = array(
            array('FVC', 'FEV1', 'FEV1/FVC ratio'),
            array('Other Specify')
        );
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.rediological-investigation');
    }
}
