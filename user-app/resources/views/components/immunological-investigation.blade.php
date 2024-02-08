<div class="container py-4 ">
    <div class="card">
        <div class="card-header">
            <h2>IMMUNOLOGICAL INVESTIGATION</h2>
        </div>
        <div class="card-body px-5">
            <div class="mb-3">
                <label class="col-form-label">CDC ( 1st )</label>
                <div class="card border-light">
                    <div class="card-body bg-body-secondary">
                        <div class="row mt-2">
                            <div class="col-4">
                                <x-new.menu :data="$binaryMenu" :sub=$type tail="_cdc1st"> T cell cross match </x-new.menu>
                            </div>
                            <div class="col-4">
                                <x-new.menu :data="$binaryMenu" :sub=$type tail="_cdc1st"> B cell cross match </x-new.menu>
                            </div>
                            <div class="col-4">
                                <x-value-inputt label="CDC (Final)" xid="{{ $type }}_cdc_final" />
                            </div>
                        </div>
                        <div class="row g-3  mt-1">
                            <div class="col">
                                <x-new.single-input-text type="file" :sub=$type> CDC Upload report </x-new.single-input-text>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <x-input-text-groupp name="HLA (Donor)" :sub=$type :cbcData=$hlaMenu tail="hlad" />
            </div>
            <div class="mb-3">
                <x-input-text-groupp name="HLA (RECIPIENT)" :sub=$type :cbcData=$hlaMenu tail="hlar" />
            </div>

            <div class="row mt-2">
                <div class="col">
                    <x-value-inputt label="HLA MATCHING" :sub=$type xid="hla_matching" />
                </div>
            </div>
            <div class="row g-3  my-3">
                <div class="col">
                    <x-new.single-input-text type="file" :sub=$type> HLA Match Upload report </x-new.single-input-text>
                </div>
            </div>

            <div class="mb-3">
                <label class="col-form-label">T&B Flowcytometry crossmatch</label>
                <div class="card border-light">
                    <div class="card-body bg-body-secondary">
                        <div class="row mt-2">
                            <div class="col-6">
                                <x-new.menu :data="$binaryMenu" :sub=$type tail="_tb"> T cell cross match </x-new.menu>
                            </div>
                            <div class="col-6">
                                <x-new.menu :data="$binaryMenu" :sub=$type tail="_tb"> B cell cross match </x-new.menu>
                            </div>
                        </div>
                        <div class="row g-3  mt-1">
                            <div class="col">
                                <x-new.single-input-text type="file" :sub=$type> T&B Upload report </x-new.single-input-text>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group mb-3">
                <label class="col-form-label" for="dsaSabTextarea">Enter DSA-SAB > 1000 MFI </label>
                <textarea class="form-control" id="dsaSabTextarea" name="{{$type}}_dsaSabTextarea" placeholder="Example: A*25:01 = 4503, B*15:12 = 2203" rows="4"></textarea>
            </div>
        </div>
    </div>
</div>