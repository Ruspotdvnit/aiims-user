<div class="container py-4 ">
    <div class="card">
        <div class="card-header">
            <h2>Demographic profile</h2>
        </div>
        <div class="card-body px-5">
            <div class="row g-3">
                <div class="col-4">
                    <x-new.single-input-text type="text"> Name </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text"> Age </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.menu :data="$genderMenu" > Sex </x-new.menu>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-4">
                    <x-new.single-input-text type="date" > DOB </x-new.single-input-text>
                </div>
                <div class="col-4">
                    <x-new.single-input-text type="text"> CRN_No </x-new.single-input-text>
                </div>  
                <div class="col-4">
                    <x-new.single-input-text type="date" > Date_of_Registration </x-new.single-input-text>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <x-new.single-input-text type="text" makecol> Address </x-new.single-input-text>
            </div>
        </div>  
    </div>
</div>