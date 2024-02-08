<div class="container py-4 ">
    <div class="card">
        <div class="card-header">
            <h2>COVID REPORT</h2>
        </div>
        <div class="card-body px-5">
            <div class="row mt-2">
                <div class="col-6">
                    <x-new.menu :data="$binaryMenu" :sub=$type > Covid RTPCR </x-new.menu>
                </div>
                <div class="col-6">
                    <x-new.menu :data="$binaryMenu" :sub=$type > Covid rapid antigen </x-new.menu>
                </div>
            </div>
            <div class="row mt-2">
            <div class="col-6">
                    <x-value-inputt label="Covid Antibody Anti spike Protein" xid="{{ $type }}_covid_antibody_protein" />
                </div>
                <div class="col-6">
                    <x-value-inputt label="Covid ab total (Nucleocaspid)" xid="{{ $type }}_covid_total_nucle " />
                </div>
            </div>
        </div>
    </div>
</div>