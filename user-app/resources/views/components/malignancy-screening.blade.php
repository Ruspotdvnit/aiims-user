<div class="container py-4 ">
    <div class="card">
        <div class="card-header">
            <h2>CLINICAL EXAMINATION</h2>
        </div>
        <div class="card-body px-5">
            <div class="row mt-2">
                <div class="col-4">
                    <x-value-inputt label="SBP" xid="{{$type}}_sbp " />
                </div>
                <div class="col-4">
                    <x-value-inputt label="DBP" xid="{{$type}}_dbp " />
                </div>
                <div class="col-4">
                    <x-value-inputt label="MAP" xid="{{$type}}_map " />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <x-value-inputt label="PULSE" xid="{{$type}}_pulse " />
                </div>
                <div class="col-4">
                    <x-value-inputt label="RESPIRATION" xid="{{$type}}_resp " />
                </div>
                <div class="col-4">
                    <x-value-inputt label="SPo2" xid="{{$type}}_spo2 " />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-4 ">
    <div class="card">
        <div class="card-header">
            <h2>MALIGNANCY SCREENING</h2>
        </div>
        <div class="card-body px-5">
            <div class="row mt-2">
                <div class="col-6">
                    <x-new.menu :data="$binaryMenu" :sub=$type> Stool for Occult Blood </x-new.menu>
                </div>
                <div class="col-6">
                    <x-new.menu :data="$binaryMenu" :sub=$type> PAP SMEAR </x-new.menu>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <x-new.menu :sub=$type :data="$yesNoMenu"> Is Mammography Normal</x-new.menu>
                </div>
                <div class="col-6">
                    <x-value-inputt label="Specify (If abnormal)" xid="{{$type}}_mammography_desc " />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <x-value-inputt label="PSA Free" xid="{{$type}}_psa_free " />
                </div>
                <div class="col-6">
                    <x-value-inputt label="PSA Total" xid="{{$type}}_psa_total " />
                </div>
            </div>
        </div>
    </div>
</div>