<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Accordions extends Component
{
    /**
     * Create a new component instance.
     */
    public $cbcData;

    public $ptData;
    public $ogttData;
    public $thyroidData;
    public $urinermData;
    public $urineCultureData;
    public $viralMarkersData;
    public $coMorbiData;

    public $normalOptions;
    public $urineOptions;
    public $kftData;
    public $lipidData;
    public $lftData;


    public function __construct()
    {
        $this->normalOptions = array('Reactive', 'Non Reactive');
        $this->urineOptions = array('Resistant', 'Sensative', 'Intermediate');

        $this->cbcData = array(
            array('WBC', 'Nephrology', 'Lymphocytes'), 
            array('Monocytes', 'Eosinophils', 'Basophil'), 
            array('ANC', 'ALC', 'AMC'),
            array('AEC', 'RBC_Count', 'Hemoglobin'), 
            array('Hematocrit', 'MCV', 'MCH'), 
            array('MCHC', 'PDW_CV', 'Platelet_Count'));

        $this->kftData = array(
            array('Blood Urea', 'Serum Creatinine', 'Serum Sodium'), 
            array('Serum Potassium') );
        
        $this->lipidData = array(
            array('HDL', 'LDL', 'VLDL'), 
            array('Total Cholesterol') );

        $this->lftData = array(
            array('Indirect Bilirubin', 'Direct Bilirubin', 'ALT'), 
            array('AST', 'Total Protein', 'Albumin'), 
            array('Total Bilirubin', 'Alkaline Phospatase') );

        $this->ptData = array('Prothrombin_Time_PT', 'MNPT_Value');

        $this->ogttData = array('Fasting_Plasma_Glucose', 'After_1_hr', 'After_2_hr');

        $this->thyroidData = array('Serum_FT3', 'Serum_FT4', 'TSH');

        $this->urinermData = array('Protein/Albumin', 'RBC', 'Pus Cell/WBC', 'CAST', 'Other');

        $this->viralMarkersData = array('HCV', 'HBSAG', 'HIV');

        $this->coMorbiData = array('Thyroid', 'Asthama', 'TB');

        $this->urineCultureData = array('Antimicrobial_agent', 'Penicillin_G', 'Ampicillin', 'High_level_Gentamicin', 'Vancomycin', 'Linezolid', 'Levofloxacin', 'Ciprofloxacin', 'Tetracycline', 'Fosfomycin', 'Doxycycline');
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.accordions');
    }
}
