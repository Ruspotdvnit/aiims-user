<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Initial Phase
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <!-- -->
                <div class="row g-3">
                    <div class="col-4">
                        <div class="row">
                            <label for="bmi" class="col-sm-2 col-form-label">BMI</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="bmi" name="bmi">
                            </div>
                        </div>
                    </div>

                    <div class="ms-5 col-4">
                        <div class="row">
                            <label for="selectBloodGroup" class="col-4 col-form-label">Blood Group</label>
                            <select id="selectBloodGroup" name="blood_group" 
                                class="col form-select" aria-label="Default select example">
                                <option value="O+" selected>O+</option>
                                <option value="O-">O-</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row g-3 mt-1">
                    <div class="col-4">
                        <x-input-check-groupp name="Co-Morbidity" :vals=$coMorbiData :options=$normalOptions />
                    </div>
                    <div class="ms-5 col-4 pe-0">
                        <div class="form-group">
                            <label class="col-form-label" for="med_sur_history">Any Medication / Surgery History</label>
                            <textarea class="form-control" id="med_sur_history" name="med_sur_history" placeholder="Text" rows="4"></textarea>
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
                    <x-input-text-groupp name="Complete Blood Count" :$cbcData  />
                </div>
                <div>
                    <x-input-text-groupp name="KFT" :cbcData=$kftData  />
                </div>
                <div>
                    <x-input-text-groupp name="LFT" :cbcData=$lftData  />
                </div>
                <div>
                    <x-input-text-groupp name="LIPID PROFILE" :cbcData=$lipidData  />
                </div>
        
                <div class="row g-3 mb-3">
                    <div class="col-4">
                        <x-input-check-groupp name="Viral Markers" :vals=$viralMarkersData :options=$normalOptions />
                    </div>

                    <div class="col-6">
                        <x-input-value-group label="PT" :$ptData />
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-4">
                        <x-value-inputt label="PSA (>50 Yr Male)" xid="PSA" />
                    </div>
                    <div class="col-4">
                        <x-value-inputt label="HbA1C" xid="HbA1C" />
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-4">
                        <x-value-inputt label="APTT" xid="APTT" />
                    </div>
                    <div class="col-4">
                        <x-value-inputt label="NA" xid="NA" />
                    </div>
                    <div class="col-4">
                        <x-value-inputt label="K" xid="K" />
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-4">
                        <x-value-inputt label="CA" xid="CA" />
                    </div>
                    <div class="col-4">
                        <x-value-inputt label="MG" xid="MG" />
                    </div>
                    <div class="col-4">
                        <x-value-inputt label="PO" xid="PO" />
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-6">
                        <x-input-value-group label="OGTT" :ptData=$ogttData />
                    </div>
                    <div class="col-6">
                        <x-input-value-group label="Thyroid" :ptData=$thyroidData />
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-4">
                        <x-value-inputt label="CRP" xid="CRP" />
                    </div>
                    <div class="col-4">
                        <x-value-inputt label="ESR" xid="ESR" />
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-6">
                        <x-input-value-group label="Urine rm" :ptData=$urinermData />
                        <div class="form-group mt-1">
                            <label class="col-form-label" for="bloodCultureResult">Blood Culture Results</label>
                            <textarea class="form-control" id="bloodCultureResult" name="bloodCultureResult"  placeholder="Text"></textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <x-input-check-groupp name="Urine Culture" :vals=$urineCultureData :options=$urineOptions />
                        <div class="form-group mt-1">
                            <label class="col-form-label" for="urineCultureResult">Urine Culture Results</label>
                            <textarea class="form-control" id="urineCultureResult" name="urineCultureResult"  placeholder="Text" rows="1"></textarea>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="form-group mb-3">
                        <label class="col-form-label" for="nephrologyTextarea1">Nephrology</label>
                        <textarea class="form-control" id="nephrologyTextarea1" name="nephrologyTextarea1" placeholder="Text" rows="2"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="col-form-label" for="urologyTextarea1">Urology</label>
                        <textarea class="form-control" id="urologyTextarea1" name="urologyTextarea1" placeholder="Text" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="psychiatryTextarea1">Psychiatry</label>
                        <textarea class="form-control" id="psychiatryTextarea1" name="psychiatryTextarea1" placeholder="Text" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="cardiologyTextarea1">Cardiology</label>
                        <textarea class="form-control" id="cardiologyTextarea1" name="cardiologyTextarea1" placeholder="Text" rows="2"></textarea>
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
                        <label class="col-form-label" for="ctScanTextarea1">CT Scan</label>
                        <textarea class="form-control" id="ctScanTextarea1" name="ctScanTextarea1" placeholder="Text" rows="2"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="col-form-label" for="usgTextarea1">USG-KUB & ABDOMEN</label>
                        <textarea class="form-control" id="usgTextarea1" name="usgTextarea1" placeholder="Text" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="ecgTextarea1">ECG</label>
                        <textarea class="form-control" id="ecgTextarea1" name="ecgTextarea1" placeholder="Text" rows="2"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="col-form-label" for="echoTextarea1">ECHO</label>
                        <textarea class="form-control" id="echoTextarea1" name="echoTextarea1" placeholder="Text" rows="2"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="col-form-label" for="spiroTextarea1">Spirometry</label>
                        <textarea class="form-control" id="spiroTextarea1" name="spiroTextarea1" placeholder="Text" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="dtpaTextarea1">DTPA Scan</label>
                        <textarea class="form-control" id="dtpaTextarea1" name="dtpaTextarea1" placeholder="Text" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="papsTextarea1">PAPSMEAR (If Female)</label>
                        <textarea class="form-control" id="papsTextarea1" name="papsTextarea1" placeholder="Text" rows="2"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" collapseThree aria-controls="collapseFour">
                Third Phase
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
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