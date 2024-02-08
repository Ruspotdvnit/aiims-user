<div class="container py-4 ">
    <div class="card">
        <div class="card-header">
            <h2>DEPARTMENTAL CLEARANCE</h2>
        </div>
        <div class="card-body px-5">
            <div class="row mt-2">
                <div class="col-6">
                    <x-new.menu :data="$fundusMenu" :sub=$type > FUNDUS EXAMINATION </x-new.menu>
                </div>
                <div class="col-6">
                    <x-value-inputt label="If Others, Specify" xid="{{ $type }}_fundus_desc" />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <x-new.menu :data="$fitMenu" :sub=$type > OPTHALMOLOGY </x-new.menu>
                </div>
                <div class="col-6">
                    <x-value-inputt label="If Others, Specify" xid="{{ $type }}_OPTHALMOLOGY_desc" />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <x-new.menu :data="$fitMenu" :sub=$type > CARDIOLOGY </x-new.menu>
                </div>
                <div class="col-6">
                    <x-value-inputt label="If Others, Specify" xid="{{ $type }}_CARDIOLOGY_desc" />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <x-new.menu :data="$fitMenu" :sub=$type > DENTAL </x-new.menu>
                </div>
                <div class="col-6">
                    <x-value-inputt label="If Others, Specify" xid="{{ $type }}_DENTAL_desc" />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <x-new.menu :data="$fitMenu" :sub=$type > UROLOGY </x-new.menu>
                </div>
                <div class="col-6">
                    <x-value-inputt label="If Others, Specify" xid="{{ $type }}_UROLOGY_desc" />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <x-new.menu :data="$fitMenu" :sub=$type > GYNACOLOGY </x-new.menu>
                </div>
                <div class="col-6">
                    <x-value-inputt label="If Others, Specify" xid="{{ $type }}_GYNACOLOGY_desc" />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <x-new.menu :data="$fitMenu" :sub=$type > ANASTHESIA </x-new.menu>
                </div>
                <div class="col-6">
                    <x-value-inputt label="If Others, Specify" xid="{{ $type }}_ANASTHESIA_desc" />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <x-new.menu :data="$fitMenu" :sub=$type > PSYCHIATRY </x-new.menu>
                </div>
                <div class="col-6">
                    <x-value-inputt label="If Others, Specify" xid="{{ $type }}_PSYCHIATRY_desc" />
                </div>
            </div>
        </div>
    </div>
</div>