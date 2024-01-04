<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Initial Phase
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <!-- -->
                <div class="row g-3">
                    <div class="col-4">
                        <div class="row">
                            <label for="bmi" class="col-sm-2 col-form-label">BMI</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="bmi">
                            </div>
                        </div>
                    </div>

                    <div class="ms-5 col-4">
                        <div class="row">
                            <label for="selectBloodGroup" class="col-4 col-form-label">Blood Group</label>
                            <select id="selectBloodGroup" class="col form-select" aria-label="Default select example">
                                <option selected>O+ve</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row g-3 mt-1">
                    <div class="col-4">
                        <x-input-check-group name="Co-Morbidity" />
                    </div>
                    <div class="ms-5 col-4 pe-0">
                        <div class="form-group">
                            <label class="col-form-label" for="exampleFormControlTextarea1">Any Medication / Surgery History</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                First Phase
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div>
                    <x-input-text-group name="Complete Blood Count" />
                </div>
                <div>
                    <x-input-text-group name="KFT" />
                </div>
                <div>
                    <x-input-text-group name="LFT" />
                </div>
                <div>
                    <x-input-text-group name="LIPID profile" />
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-4">
                        <x-input-check-group name="Viral Markers" />
                    </div>

                    <div class="col-6">
                        <label for="co-morbidity" class="col-form-label">PT</label>
                        <div class="card border-light">
                            <div class="card-body bg-body-secondary">
                                <div class="">
                                    <div class="">
                                        <x-value-input label="Prothrombin Time PT" xid="prothrombin_time_pt" />
                                    </div>
                                    <div class="mt-1">
                                        <x-value-input label="MNPT Value" xid="mnpt_value" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-4">
                        <x-value-input label="Nephrology" xid="Nephrology" />
                    </div>
                    <div class="col-4">
                        <x-value-input label="Nephrology" xid="Nephrology" />
                    </div>
                    <div class="col-4">
                        <x-value-input label="Nephrology" xid="Nephrology" />
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-4">
                        <x-value-input label="Nephrology" xid="Nephrology" />
                    </div>
                    <div class="col-4">
                        <x-value-input label="Nephrology" xid="Nephrology" />
                    </div>
                    <div class="col-4">
                        <x-value-input label="Nephrology" xid="Nephrology" />
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-4">
                        <x-value-input label="Nephrology" xid="Nephrology" />
                    </div>
                    <div class="col-4">
                        <x-value-input label="Nephrology" xid="Nephrology" />
                    </div>
                </div>

                <div>
                    <div class="form-group mb-3">
                        <label class="col-form-label" for="exampleFormControlTextarea1">Urine Culture</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="col-form-label" for="exampleFormControlTextarea1">Nephrology</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="exampleFormControlTextarea1">Urology</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Second Phase
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div>
                    <div class="form-group mb-3">
                        <label class="col-form-label" for="exampleFormControlTextarea1">CT Scan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="col-form-label" for="exampleFormControlTextarea1">USG-KUB & ABDOMEN</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="exampleFormControlTextarea1">ECG</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" collapseThree aria-controls="collapseFour">
                Third Phase
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">T & B LYMPHOCYTE CDC CROSS MATCH</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">CMV IGg</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">HLA DNA NEXT GENERATION SEQUENCING</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">IGM</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>