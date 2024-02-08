<div class="container py-4 ">
    <div class="card">
        <div class="card-header">
            <h2>Co-morbidity History</h2>
        </div>
        <div class="card-body px-5">
            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > Hypertention </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$menuGap5Upto10" :sub=$type > Hypertention Duration </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$menu1to5" :sub=$type > Number of antihypertensive tablets </x-new.menu>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <x-new.single-input-text type="text" makecol :sub=$type > Antihypertensive tablet Specification </x-new.single-input-text>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > Diabetes </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$diabetiesType" :sub=$type > Type </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$menu1to5" :sub=$type tail="_dbt"> Number of drugs </x-new.menu>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > Insuline </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type tail="_insul"> Specify </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > CAD </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type tail="_cad"> Specify </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > CVA </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$menu1to5" :sub=$type > Number of stroke / episode </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type tail="_cva"> Specify </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > Hypothyroidism </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$menuGap2Upto10" :sub=$type > Hypothyroidism Duration </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > Dose of thyroxin </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > Hypothyroidism Last TSH level </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > Hyperthyroidism </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > Hyperthyroidism Duration </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$menu1to5" :sub=$type tail="_hyperthy"> Number of drugs </x-new.menu>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > H/O Malignancy </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > Specify diagnosis </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.single-input-text  :sub=$type type="text"> Specify treatment taken </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col">
                    <x-new.menu  :sub=$type :data="$menu1to5"> Last remission duration in years (cancer free interval) </x-new.menu>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col-4">
                    <x-new.menu  :sub=$type :data="$yesNoMenu"> h/o renal calculus disease </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.menu  :sub=$type :data="$kidneySides"> Side affected </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.menu  :sub=$type :data="$menuGap2Upto10"> Number of episode </x-new.menu>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col-4">
                    <x-new.menu  :sub=$type :data="$typeOfCalculie"> Type of calculi </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text  :sub=$type type="text"> Size of calculus </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.menu  :sub=$type :data="$calculieTreatment"> Treatment taken </x-new.menu>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col-8">
                    <x-new.single-input-text  :sub=$type type="text"> Specify Treatment </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.menu  :sub=$type :data="$menu1to5" tail="_calculi"> Disease Free Interval </x-new.menu>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col-4">
                    <x-new.menu  :sub=$type :data="$yesNoMenu"> h/o tuberculosis </x-new.menu>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col-4">
                    <x-new.menu  :sub=$type :data="$tuberculosisTypes"> Type of tuberculosis </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.menu  :sub=$type :data="$extrapulmonaryTypes"> Extrapulmonary type </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text  :sub=$type type="text"> If Other, Specify </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > ATT complete ? </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > Duration of ATT </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col">
                 <x-new.menu :data="$menu1to5" :sub=$type> Duration from treatment (disease free interval) </x-new.menu>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > COPD/ASTHAMA </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$menuGap2Upto10" :sub=$type > Duration </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > Treatment Specify </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > Past history of surgery </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > Surgery History Specify </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col">
                    <x-new.single-input-text type="file" :sub=$type > If taking any medication, upload prescription </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > h/o COVID </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$menu1to5" :sub=$type tail="_covid"> Disease free interval </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > Specify Type of involvement </x-new.single-input-text>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container py-4 ">
    <div class="card">
        <div class="card-header">
            <h2>Vaccination History</h2>
        </div>
        <div class="card-body px-5">
            <div class="row g-3  mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > COVID VACCINE </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > Number of vaccine </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$menu1to5" :sub=$type tail="_covd"> Last dose duration (years) </x-new.menu>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > Hepatitis b vaccine </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > Number of doses </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$menu1to5" :sub=$type tail="_hepatts"> Last dose duration (years) </x-new.menu>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col-6">
                    <x-new.single-input-text type="text" :sub=$type > Titer value specify </x-new.single-input-text>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-4 ">
    <div class="card">
        <div class="card-header">
            <h2>Obstetrics and Gynaecology History</h2>
        </div>
        <div class="card-body px-5">
            <div class="row g-3  mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > Pregnancy history </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > Gravida </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > para </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > abortion </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > Duration from last pregnancy </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > h/o Hypertension in pregnancy </x-new.menu>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > H/O edema in pregnancy </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > H/o eclampsia / pre eclampsia </x-new.menu>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col-4">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > Menopause attended </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$menstrual" :sub=$type > Menstrual Cycle </x-new.menu>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > Avg duration of cycle </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col-4">
                    <x-new.single-input-text type="text" :sub=$type > Avg duration of menses days </x-new.single-input-text>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-4 ">
    <div class="card">
        <div class="card-header">
            <h2>Others</h2>
        </div>
        <div class="card-body px-5">
            <div class="row g-3  mt-1">
                <div class="col-6">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > Family history of any inherited disease </x-new.menu>
                </div>
                <div class="col-6">
                    <x-new.single-input-text type="text" :sub=$type tail="_fami_hist" > Specify </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col-6">
                    <x-new.menu :data="$yesNoMenu" :sub=$type > Drug allergy </x-new.menu>
                </div>
                <div class="col-6">
                    <x-new.single-input-text type="text" :sub=$type tail="_drug_alg"> Specify </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3  mt-1">
                <div class="col">
                    <x-new.single-input-text type="file" :sub=$type > Family Tree </x-new.single-input-text>
                </div>
            </div>
        </div>
    </div>
</div>