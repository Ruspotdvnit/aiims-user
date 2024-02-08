<div class="container py-4 ">
    <div class="card">
        <div class="card-header">
            <h2>Routine Investigation</h2>
        </div>
        <div class="card-body px-5">
            <div class="">

                <div class="row g-3 my-3">
                    <div class="col-6">
                        <x-new.single-input-text type="date" :sub=$type > Date </x-new.single-input-text>
                    </div>
                    <div class="col-6">
                        <x-new.single-input-text type="text" :sub=$type > HMIS CR No </x-new.single-input-text>
                    </div>
                </div>

                <div>
                    <x-input-text-groupp name="Complete Blood Count"  :sub=$type :$cbcData />
                </div>
                <div class="row g-3 mt-1">
                    <div class="col-4">
                        <x-new.single-input-text type="text" :sub=$type > ESR (mm/hr 1st_hr) </x-new.single-input-text>
                    </div>
                    <div class="col-4">
                        <x-new.single-input-text type="text" :sub=$type > CRP </x-new.single-input-text>
                    </div>
                </div>
                <div class="row g-3 mt-1">
                    <div class="col-4">
                        <x-new.menu :data="$pnOptions" :sub=$type > Sickling Test </x-new.menu>
                    </div>
                    <div class="col-4">
                        <x-new.single-input-text type="text" :sub=$type > If positive, Specify </x-new.single-input-text>
                    </div>
                    <div class="col-4">
                        <x-new.single-input-text type="text" :sub=$type > HPLC Test </x-new.single-input-text>
                    </div>
                </div>

                <div>
                    <x-input-text-groupp name="KFT"  :sub=$type :cbcData=$kftData />
                    <label class="text-secondary">GFR (CKD EPI) will be calculated and saved automatically at backend</label>
                </div>
                
                <div class="mt-2">
                    <x-input-text-groupp name="ELECTROLYTES"  :sub=$type :cbcData=$electrolityData />
                </div>
                <div>
                    <x-input-text-groupp name="LFT"  :sub=$type :cbcData=$lftData />
                </div>
                <div>
                    <x-input-text-groupp name="Coagulation profile"  :sub=$type :cbcData=$coagulationProfileData />
                </div>
                <div>
                    <x-input-value-group label="Urine RM"  :sub="$type" :ptData=$urinermData />
                </div>

                <div>
                    <div class="form-group mb-3">
                        <label class="col-form-label" for="urineCultureTextarea1">Urine Culture</label>
                        <textarea class="form-control" id="urineCultureTextarea1" name="{{$type}}_urineCultureTextarea1" placeholder="Text" rows="1"></textarea>
                    </div>
                    <div class="row g-3 mt-1">
                        <div class="col-4">
                            <x-new.menu :data="$bloodCulture" :sub=$type > Blood Culture </x-new.menu>
                        </div>
                    </div>
                </div>


                <div>
                    <x-input-text-groupp name="Glucose Profile"  :sub=$type :cbcData=$glucoseProfileData />
                </div>
                <div>
                    <x-input-value-group label="Thyroid Profile"  :sub=$type :ptData=$thyroidData />
                </div>
                <div>
                    <x-input-text-groupp name="IRON Profile"  :sub=$type :cbcData=$ironProfileData />
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-4">
                        <x-value-inputt label="G6PD" xid="{{$type}}_G6PD"   />
                    </div>
                </div>

                <div>
                    <x-input-text-groupp name="LIPID Profile"  :sub=$type :cbcData=$lipidData />
                </div>
                <div>
                    <x-input-text-groupp name="Viral Markers"  :sub=$type :cbcData=$tripleHProfileData />
                </div>
                <div>
                    <x-input-text-groupp name="EBV"  :sub=$type :cbcData=$ebvData tail="ebv" />
                </div>
                <div>
                    <x-input-text-groupp name="CMV"  :sub=$type :cbcData=$cmvData tail="cmv" />
                </div>

                <div>
                    <div class="form-group mb-3">
                        <label class="col-form-label" for="vdrlTextarea1">VDRL</label>
                        <textarea class="form-control" id="vdrlTextarea1" name="{{ $type }}_vdrlTextarea1" placeholder="Text" rows="1"></textarea>
                    </div>

                    <div class="row g-3 mt-1">
                        <div class="col-4">
                            <x-new.single-input-text type="text" :sub=$type > SPOT UPCR </x-new.single-input-text>
                        </div>
                        <div class="col-4">
                            <x-new.single-input-text type="text" :sub=$type > SPOT UACR </x-new.single-input-text>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <x-input-value-group label="24 HR URINE PROTEIN ESTIMATION" :sub=$type  :ptData=$urineProteinData />
                </div>

            </div>
        </div>
    </div>
</div>