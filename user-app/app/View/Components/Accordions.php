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
    public $electrolityData;
    public $coagulationProfileData;

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

    public $glucoseProfileData;
    public $ironProfileData;
    public $tripleHProfileData;
    public $urineProteinData;
    public $ebvData;
    public $cmvData;
    public $bloodCulture;
    public $pnOptions;

    public function __construct(public string $type)
    {
        $this->normalOptions = array('Select', 'Reactive', 'Non Reactive');
        $this->pnOptions = array('Select', 'Positive', 'Negative');

        $this->urineOptions = array('Select', 'Resistant', 'Sensative', 'Intermediate');

        $this->cbcData = array(
            array('HB (g/dl)', 'Neutrophils (%)', 'Lymphocytes (%)'), 
            array('Monocytes (%)', 'Eosinophils (%)', 'Basophil (%)'), 
            array('TLC (%)', 'Platelet count in lakhs'));

        $this->bloodCulture = array('Select', "Growth", "No Growth");

        $this->kftData = array(
            array('Blood Urea (mg/dl)', 'Creatinine (mg/dl)', 'BUN (mg/dl)')
        );
        
        $this->lipidData = array(
            array('HDL', 'LDL', 'VLDL'), 
            array('Total Cholesterol') );

        $this->lftData = array(
            array('AST/SGOT (U/L)', 'ALT/SGPT (U/L)', 'Sr. Albumin (gm/dl)'), 
            array('Sr. Globulin (gm/dl)', 'A/G Ratio', 'Total Protein (gm/dl)'), 
            array('Bilirubin (mg/dl)', 'Indirect (mg/dl)', 'Direct (mg/dl)'),
            array('ALP')
         );

         $this->coagulationProfileData = array(
            array('APTT (secs)', 'INR', 'PT (secs)'), 
            array('D-DIMER (mg/L)') 
         );

        $this->electrolityData = array(
            array('Sr.Sodium', 'Sr.Potassium', 'Sr.Chlorine'), 
            array('Sr.Magnesium', 'Sr.phosphate ion', 'Sr.Calcium total'), 
            array('Sr.Uric Acid', 'iPTH', '25 OH VIT.D')
        );

        $this->glucoseProfileData = array(
            array('FBS (by OGTT)', 'PPBS-(by  OGTT)- After 1hour', 'After 2 hour'), 
            array('HBA1C (%)')
        );

        $this->ironProfileData = array(
            array('Sr.IRON (micro g/dl)', 'TIBC', 'Sr.Ferritin (ng/ml)'), 
            array('Transferrin saturation')
        );

        $this->tripleHProfileData = array(
            array('HIV', 'HCV', 'HBsAG'), 
            array('Hep B core antibody', 'HBV DNA Quantitative PCR', 'HCV RNA Quantitative PCR')
        );

        $this->urineProteinData = array('24 hrs urine protein','24 hrs Volume of urine', '24 hrs urine creatinine ');

        $this->ebvData = array(
            array('IgG', 'IgM')
        );

        $this->cmvData = array(
            array('IgG', 'IgM')
        );

        $this->ptData = array('Prothrombin_Time_PT', 'MNPT_Value');

        $this->ogttData = array('Fasting_Plasma_Glucose', 'After_1_hr', 'After_2_hr');

        $this->thyroidData = array('Serum_FT3 (ng/ml)', 'Serum_FT4 (micro g/dl)', 'TSH (micro IU/ml)');

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
