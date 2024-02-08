<div class="container py-4 ">
    <div class="card">
        <div class="card-header">
            <h2>Rediological & Nuclear Medicine Investigation</h2>
        </div>
        <div class="card-body px-5">
            <div class="">
                <div>
                    <div class="mb-3">
                        <label class="col-form-label">X-Rays</label>
                        <div class="card border-light">
                            <div class="card-body bg-body-secondary">
                                <div class="row mt-2">
                                    <div class="col-4">
                                        <x-new.menu :data="$normalMenu" :sub=$type > Abdomen/KUB </x-new.menu>
                                    </div>
                                    <div class="col-6">
                                        <x-value-inputt label="If Abnormal, Specify" xid="{{ $type }}_abdomen_spec" tail="_kub"/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-4">
                                        <x-new.menu :data="$normalMenu" :sub=$type > Chest </x-new.menu>
                                    </div>
                                    <div class="col-6">
                                        <x-value-inputt label="If Abnormal, Specify" xid="{{ $type }}_abdomen_spec" tail="_chest" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <x-input-text-groupp name="USG"  :sub=$type :cbcData=$usgData tail="usg" />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">CT Angiography</label>
                    <div class="card border-light">
                        <div class="card-body bg-body-secondary">
                            <div class="row mt-2">
                                <div class="col-4">
                                    <x-value-inputt label="Number of artery in right kidneys (RA)" xid="{{ $type }}_ra_art" />
                                </div>
                                <div class="col-4">
                                    <x-value-inputt label="No of vein in RK (RV)" xid="{{ $type }}_rv_art" />
                                </div>
                                <div class="col-4">
                                    <x-value-inputt label="No of arteries on LK (LA)" xid="{{ $type }}_la_art" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <x-value-inputt label="Number of vein on LK (LV)" xid="{{ $type }}_lv_art" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-4">
                                    <x-new.menu :data="$binaryMenu" :sub=$type > Early bifurcation </x-new.menu>
                                </div>
                                <div class="col-4">
                                    <x-value-inputt label="Kidney size RK" xid="{{ $type }}_rk_kidney_size" />
                                </div>
                                <div class="col-4">
                                    <x-value-inputt label="Kidney size LK" xid="{{ $type }}_lk_kidney_size" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <x-value-inputt label="ECG" xid="{{ $type }}_ecg" />
                    </div>
                </div>

                <div class="mb-3">
                    <label class="col-form-label fw-bold">2D ECHO</label>
                    <div class="card border-light">
                        <div class="card-body bg-body-secondary">
                            <div class="row mt-2">
                                <div class="col-4">
                                    <x-value-inputt label="Ejection fraction (%)" xid="{{ $type }}_ejection_fraction" />
                                </div>
                                <div class="col-4">
                                    <x-new.menu :data="$binaryMenu" :sub=$type > RWMA present</x-new.menu>
                                </div>
                                <div class="col-4">
                                    <x-new.menu :data="$binaryMenu" :sub=$type > LVH present</x-new.menu>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-4">
                                    <x-new.menu :data="$binaryMenu" :sub=$type > pulmonary HTN present </x-new.menu>
                                </div>
                                <div class="col-4">
                                    <x-new.menu :data="$binaryMenu" :sub=$type > diastolic dysfunction </x-new.menu>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <x-value-inputt label="grade (If diastolic dysfunction)" xid="{{ $type }}_grade" />
                                </div>
                                <div class="col-6">
                                    <x-new.menu :data="$binaryMenu" :sub=$type > Vegitation </x-new.menu>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-4">
                                    <x-new.menu :data="$binaryMenu" :sub=$type > IVC collapsing </x-new.menu>
                                </div>

                                <div class="col-4">
                                    <x-value-inputt label="size of IVC" xid="{{ $type }}_size_IVC " />
                                </div>
                                <div class="col-4">
                                    <x-value-inputt label="Comment" xid="{{ $type }}_d2echo_comment" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <x-input-text-groupp name="DTPA OF Donor" :cbcData=$dtpaDonorData  :sub=$type tail="dtpaof" />
                </div>

                <div>
                    <x-input-text-groupp name="DMSA Scan" :cbcData=$dmsaScanData  :sub=$type />
                </div>

                <div class="mb-3">
                    <label class="col-form-label">Uroflomentry</label>
                    <div class="card border-light">
                        <div class="card-body bg-body-secondary">
                            <div class="row mt-2">
                                <div class="col-4">
                                    <x-new.menu :data="$binaryMenu" :sub=$type > Normal </x-new.menu>
                                </div>
                                <div class="col-4">
                                    <x-value-inputt label="Specify (If not normal)" xid="{{ $type }}_uroflomentry_desc " />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <x-input-text-groupp name="PFT"  :sub=$type :cbcData=$pftData />
                </div>
                <!-- <div class="row mt-2">
                    <div class="col-6">
                        <x-new.menu :data="$fundusExaminationMenu" :sub=$type > Fundus examination </x-new.menu>
                    </div>
                    <div class="col-6">
                        <x-value-inputt label="If Others, Specify" xid="{{ $type }}_fundus_desc" />
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>